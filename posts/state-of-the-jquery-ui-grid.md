We [announced the Grid
project](http://blog.jqueryui.com/2011/02/unleash-the-grid/) back in
February. Since then, we finished the first three stages and are now
getting started on the fourth. In this post we'll take a look at what
we've built so far.

### [Grid](http://wiki.jqueryui.com/w/page/47182351/Grid-Widget)

This is what we designed as the "zero feature grid". All it does is
enhance HTML tables, but it does that pretty well while also providing
the right hooks for all kinds of other features that we can add on top
of that. And that turns out to be really useful, as there are a bunch of
things that regular HTML tables can't do. With Grid, you get:

-   styling with the CSS framework, making it ThemeRoller-ready
-   a proper titlebar, based on the table's caption
-   markup and styles necessary for scrolling of the table body, while
    keeping the header fixed

The API for the Grid controls what content to render, and how to present
it:

-   The **columns** option specifies which columns to render. If not
    specified, it picks up existing table header elements.
-   The **rowTemplate** option allows the grid to render each row from a
    custom template. If this option is not provided, each row is
    generated based on the columns option.
-   The **source** option specifies the content to render, in the form
    of a plain array of objects. When not specified, existing table rows
    are used.
-   By default, the grid's body grows with the number of rows. With
    **heightStyle**: 'fill', it stays at a fixed height and the body
    starts scrolling if there are more rows.
-   When picking up column information from the existing table headers,
    certain data-attributes are read. The grid itself uses only the
    data-property attribute (and the actual text of each header cell),
    but the **dataFields** option specifies a few more attributes that
    other components can use, such as "type", "culture" and "format" to
    configure local sorting and filtering. If a grid add-on handles
    other data attributes, adding those to the dataFields option will
    make them automatically available as part of the columns option.

So far we only have [an enhanced
table](http://view.jqueryui.com/grid/grid-spf/grid-plain.html), but
often enough, a grid needs to be fed data from some remote resource.
That's where Dataview comes in.

### [Dataview](http://wiki.jqueryui.com/w/page/47179141/Dataview)

Dataview is a low-level abstraction for retrieving content. It has an
API for specifying what content to retrieve, and an SPI (service
provider interface), implemented by components that provide that
content. There are built-in options for filtering, sorting and paging,
and the design makes it easy to add more options, like grouping. The API
is asynchronous by default, even for local data, so that all components
relying on Dataview can work with both local and remote data. Dataview
only depends on Widget and Observable (we'll get to that below), but not
on Grid. This allows Dataview to be used in a variety of contexts. For
example it could power a product listing, such as those on eBay or
Amazon, where a table presentation is not the right format. The Dataview
SPI makes it easy to write implementations from scratch as well as to
create reusable extensions. As an example, we can use a [custom dataview
as the input for the Autocomplete
widget](http://view.jqueryui.com/grid/grid-spf/autocomplete.html). The
same data is also displayed in the grid below the input field. This
demonstrates how a Dataview can be used in multiple representations,
where each decides on its own what data to show. As for reusable
extensions, we currently have three implemented:

1.  [localDataview](http://view.jqueryui.com/grid/ui/jquery.ui.dataviewlocal.js)
    takes an input array and does sorting, paging and filtering on that
    array. It uses Globalize (see below) to implement filtering and
    sorting of localized numbers and dates. When combined with the grid
    on a table with existing content (without specifying the source
    option), you get a [complete
    tablesorter](http://view.jqueryui.com/grid/grid-spf/tablesorter.html).
2.  [odataDataview](http://view.jqueryui.com/grid/grid-spf/dataview-odata.js)
    takes a resource URL, pointing at a webservice that understands
    [OData, the Open Data Protocol](http://www.odata.org/). While our
    implementation doesn't yet cover all of the OData options, you can
    use it to sort, filter and page, without having to implement any
    custom request/response mapping. We have an example of a [grid using
    the OData based Netflix
    API](http://view.jqueryui.com/grid/grid-spf/movies.html).
3.  [preloaderDataview](http://view.jqueryui.com/grid/grid-spf/dataview-preloader.js)
    wraps a Dataview and adjusts the paging behaviour to load more data
    than rendered, paging locally before preloading another batch. In
    this [Flickr API slideshow
    example](http://view.jqueryui.com/grid/grid-spf/slideshow-preloader.html)
    we preload both the API responses and the actual images. This pushes
    all the loading in the background, allowing the user to page through
    images without interruptions.

All three need testing in actual projects before we can consider them
stable. We're also looking for other use cases for dataview that we
might be missing.

### [Observable](http://wiki.jqueryui.com/w/page/47179578/Observable)

Data binding is currently a common theme among newer JavaScript
frameworks, with various competing solutions available. We don't yet
have a full-featured alternative, but we've developed a low-level
abstraction that might power a data binding component in the future. We
call this abstraction Observable. It provides an API for making changes
on plain JavaScript objects and arrays that can be observed by listening
to events that each change triggers. We've designed Observable to have a
very small number of methods and events, with the purpose of making it
easy to implement the same API in other contexts. These events are:

-   change: Triggered on objects after one or more properties have
    changed.
-   insert: Triggered on arrays after inserting one or more new items.
-   remove: Triggered on arrays after removing one or more items.
-   replaceAll: Triggered on arrays after replacing all items in an
    array.

That last event may seem odd at first, but this makes it possible to
create a dataview, pass it to a grid, have the grid subscribe to events
on that dataview's output array, and then update itself when the
dataview updates. For all four events, Observable provides method
counterparts:

-   property: to work on objects
-   insert, remove and replaceAll: to work on arrays.

Usage is consistent in both cases:

-   \$.observable( object ).property( "name", "Fred" );
-   \$.observable( array ).insert({ name: "Peter" });

We're still working on Observable. The next step is to find an
abstraction for the array bindings, which would remove some overhead
both from the Grid as well as from the [todo-app
demo](http://view.jqueryui.com/grid/grid-editing/todo-app.html). When
combining Observable with the Grid, we can easily add editing
capabilities. [In our grid editing
demo](http://view.jqueryui.com/grid/grid-editing/grid.html), you can
add, edit and remove developers from the table. Results are persisted
via localStorage. Instead of adding custom columns that have "Edit" and
"Remove" buttons, we can [use the selectable interaction to select one
or more
rows](http://view.jqueryui.com/grid/grid-editing/grid-selectable.html)
and then interact with the selection. In that demo, the `selected` array
is also an observable array, which the second grid displays. Note that
you can select rows on one page, go to the next page (you may need to
add a few developers for a second page to show up), select more rows
with command/ctrl-click (to extend the selection) and it will display
all those rows in the second grid. The selected state is separated from
the visual representation, making selection over multiple pages pretty
easy.

### [Globalize](https://github.com/jquery/globalize)

Globalize originally started as the jquery-global plugin. We rewrote it
as part of the Grid project to be independent of jQuery, allowing usage
on both client and [server](http://search.npmjs.org/#/globalize). Our
localDataview implementation (mentioned above) uses it, and its also
behind custom inputs like
[Spinner](http://wiki.jqueryui.com/w/page/12138077/Spinner) and
[Timepicker](http://wiki.jqueryui.com/w/page/12138092/Timepicker).

### [Mask](http://wiki.jqueryui.com/w/page/12137996/Mask), [Timepicker](http://wiki.jqueryui.com/w/page/12138092/Timepicker), [Selectmenu](http://wiki.jqueryui.com/w/page/12138056/Selectmenu)

These three custom inputs are being developed as part of the Grid
project. They are intended to be used within the Grid for inline
editing, as well as standalone in regular forms or websites. We're
getting close to landing all three in master, to release them as part of
1.9.

### And more...

Work is still in progress on
[Template](http://wiki.jqueryui.com/w/page/37898666/Template),
[Datepicker](http://wiki.jqueryui.com/w/page/12137778/Datepicker) and
other [Custom
Inputs](http://wiki.jqueryui.com/w/page/40076546/Grid-CustomInputs).
We'll report back on those once we have more stable solutions.

### Up next

We're finishing existing components and are starting on Stage 4. For
details, [check out the main Grid wiki
page](http://wiki.jqueryui.com/w/page/34246941/Grid#Stage4GridAddons).

### So, when is it done?

Our [Roadmap](http://wiki.jqueryui.com/w/page/12138038/Roadmap) has the
Grid on the 2.1 release, while the main focus for jQuery UI is on 1.9.
In other words, there is a lot that needs to get done before we can put
the Grid into a stable release and support it along with all the other
components. At the same time, we encourage you to start testing the
features outlined above now. Grid, Observable and Dataview are all
pretty stable and working well. Globalize is a separate project that you
should start using now if you want to support localized number and date
handling on the clientside. We value your input and help. Please use the
[Developing jQuery UI
forum](http://forum.jquery.com/developing-jquery-ui), comment on
individual wiki pages or visit us on IRC (\#jqueryui-dev on Freenode).
If you found a solution to an issue, [send a pull
request](http://github.com/jquery/jquery-ui/pulls).
