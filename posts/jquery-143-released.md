jQuery 1.4.3 is now out! This is the third minor release on top of
jQuery 1.4, fixing some bugs and landing some nice improvements. I would
like to thank the following community members that provided patches and
input for this release: Anton M., Justin Meyer, Colin Snover, Ryan
Tenney, Louis-Rémi Babé, David Petersen, Rick Waldron, Dave Reed,
John-David Dalton, temp01, Heungsub Lee, J. Ryan Stinnett, Robert Katic,
Juriy Zaytsev, James Burke, Jeffery To, Carl Fürstenberg, Jacob Wright,
Jeff Robinson, Christian C. Salvadó, Andrée Hasson, Jason Webster, Dave
Furfero, Adam Sontag, Travis Hardiman, DBJDBJ, and Ben Alman. Along with
the following jQuery team members: Scott González, Brandon Aaron, Yehuda
Katz, Dave Methvin, Karl Swedberg, Paul Irish, Ralph Whitbeck, Jörn
Zaefferer, Richard Worth, Doug Neiner, and Mike Alsup.

### Downloading

As usual, we provide two copies of jQuery, one minified (we now use the
[Google Closure Compiler](http://code.google.com/closure/compiler/) as
the default minifier) and one uncompressed (for debugging or reading).

-   [jQuery Minified](http://code.jquery.com/jquery-1.4.3.min.js) (26kb
    [Gzipped](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery Regular](http://code.jquery.com/jquery-1.4.3.js) (179kb)

You can feel free to include the above URLs directly into your site and
you will get the full performance benefits of a quickly-loading jQuery.
Additionally you can also load the URLs directly from Google's CDN:

-   [http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js](http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js)

General Improvements
--------------------

We've made a number of improvements to the internals of jQuery and to
the guidelines that we use for development. **JSLint** To start jQuery
is now passing Douglas Crockford's JSLint tool. We've integrated his
tool into our workflow (checking out jQuery from Github and running
'make lint' will show the results) - giving us the ability to keep on
top of possible regressions. We've made a few minor changes to JSLint to
suit our particular development style and have documented the results in
the [jQuery Core Style
Guidelines](http://docs.jquery.com/JQuery_Core_Style_Guidelines).
**Modularity** We've also removed a number of the inter-dependencies
that exist in the jQuery source (inbetween modules). Doing this allows
for a greater amount of flexibility when using a copy of jQuery from
source. For example you could now use a script loader, such as
[LABjs](http://labjs.com/) or [RequireJS](http://requirejs.org/) to
dynamically load individual jQuery modules (e.g. core, support, data,
and events). Additionally this change has made it so that you no longer
need to build a copy of jQuery in order to run the jQuery test suite.
This has dramatically improved our development workflow - allowing us to
quickly make changes to jQuery and test the results without a
(comparatively) slow build step.

New Features
------------

All new features and changes can be found in the [jQuery API
documentation for 1.4.3](http://api.jquery.com/category/version/1.4.3/).

### CSS Module Rewrite

Nearly the entire CSS module has been rewritten focusing entirely on
extensibility. You can now write custom CSS plugins that extend the
functionality provided by [.css()](http://api.jquery.com/css) and
[.animate()](http://api.jquery.com/animate). For example here is a
plugin written by Louis-Rémi Babé that takes advantage of the new
functionality: [jQuery
Rotate](http://github.com/lrbabe/jquery.rotate.js). The plugin provides
a cross-browser means of setting and animating the rotation of DOM
elements just by using the traditional jQuery methods, like so:

    $('#myDiv').css('rotate', 90);
    $('#myDiv').animate({rotate: 180});

During the rewrite we broke down the functionality contained within
jQuery into two very clear paths: Getting and setting an element's
.style property (done through jQuery.style) and getting the current
computed style information of an element (done through
[.css()](http://api.jquery.com/css) and jQuery.css - note that
jQuery.curCSS is no longer used and is deprecated as a result). The
functionality provided by [.css()](http://api.jquery.com/css) uses both
the jQuery.style and jQuery.css methods. Making this change has allowed
for some speed-ups in computed style retreival, as well - yielding
results that are up to 20% faster.

[![jQuery 1.4.3 .css() Getting a
Value](http://farm5.static.flickr.com/4023/5079106854_2cc7340e65.jpg)](http://www.flickr.com/photos/jeresig/5079106854/ "jQuery 1.4.3 .css() Getting a Value by John Resig, on Flickr")

The raw data for all the performance tests can be found in [the
following Google Doc
Spreadsheet](https://spreadsheets.google.com/pub?key=0AuWerG7Xqt-8dHBuU2pGMncwTENNNGlvNzFtaE5uX0E&hl=en&output=html).
All tests can be found in the [jQuery source
repository](http://github.com/jquery/jquery/tree/master/speed/).

### Data

The data module has seen a number of improvements greatly increasing its
utility. **HTML 5 data- Atributes** To start the primary functionality
provided by the [jQuery
Metadata](http://plugins.jquery.com/project/metadata) plugin has been
moved into core. [HTML 5 data-
attributes](http://ejohn.org/blog/html-5-data-attributes/) will be
automatically pulled in to jQuery's data object. For example, given the
following HTML:

    <div data-role="page" data-hidden="true" data-options='{"name":"John"}'></div>

All of the following jQuery code will work.

    $("div").data("role") === "page";
    $("div").data("hidden") === true;
    $("div").data("options").name === "John";

Note that strings are left intact while JavaScript values are converted
to their associated value (this includes booleans, numbers, objects,
arrays, and null). The data- attributes are pulled in the first time the
data property is accessed and then are no longer accessed or mutated
(all data values are then stored internally in jQuery). **JavaScript
Objects** A number of changes were made to when .data() is used on
JavaScript objects (or, more accurately, anything that isn't a DOM
node). To start whenever you set data on a JavaScript object the data is
set directly on the object - instead of going into the internal data
object store. Additionally events that are attached to objects are put
in a new '\_\_events\_\_' property that is actually a function. This was
done to allow events to be attached directly to an object, be garbage
collected when the object is collected, and not be serialized by a JSON
serializer. These changes should make jQuery's data and event systems
much more useful on JavaScript objects. **Events** jQuery has already
had setData and getData events (which are broadcast whenever data is set
or gotten through the .data() method) - overriding these methods makes
it possible to override the default behavior for those features (namely
you can return a different value or prevent a value from being set. Note
that in jQuery 1.4.3 these events no longer bubble (allowing them to
bubble proved to be too costly in most applications). In 1.4.3 we've
introduced a new event called changeData. This event is fired after any
individual data properties are changed when using .data(). For example:

    var user = new User();
    $(user).bind("changeData", function( event, name, value ) {
      $("#user").find("#" + name).val( value );
    });

The changeData event is used extensively by the new [jQuery Data
Linking](http://github.com/jquery/jquery-datalink) plugin. It makes it
possible for the data API to synchronize setting of JavaScript object
properties with form fields. **Misc** There was one minor API change to
.data() in 1.4.3: Calling .data(Object) no longer completely replaces
the data object instead it extends the existing object, leaving the
unspecified values in place. We found this to be the expected result
based upon a number of confused bug reports.

### Traversing

The performance of nearly all the major traversal methods has been
drastically improved. .closest(), .filter() (and as a result, .is()),
and .find() have all been greatly improved. These improvements were
largely the result of making greater use of the browsers
querySelectorAll and matchesSelector methods (should they exist). The
jQuery project petitioned the browsers to add the new matchesSelector
method (writing up a test suite, talking with vendors, and filing bugs)
and the whole community gets to reap the excellent performance benefits
now.

[![jQuery 1.4.3 .closest()
Performance](http://farm5.static.flickr.com/4087/5078514579_47c2b1fe5c.jpg)](http://www.flickr.com/photos/jeresig/5078514579/ "jQuery 1.4.3 .closest() Performance by John Resig, on Flickr")
[![jQuery 1.4.3 .filter() on a Single
Element](http://farm5.static.flickr.com/4036/5078514397_eacdd22547.jpg)](http://www.flickr.com/photos/jeresig/5078514397/ "jQuery 1.4.3 .filter() on a Single Element by John Resig, on Flickr")
[![jQuery 1.4.3 .find() on an
element](http://farm5.static.flickr.com/4029/5078513793_b98971f17a.jpg)](http://www.flickr.com/photos/jeresig/5078513793/ "jQuery 1.4.3 .find() on an element by John Resig, on Flickr")

The raw data for all the performance tests can be found in [the
following Google Doc
Spreadsheet](https://spreadsheets.google.com/pub?key=0AuWerG7Xqt-8dHBuU2pGMncwTENNNGlvNzFtaE5uX0E&hl=en&output=html).
All tests can be found in the [jQuery source
repository](http://github.com/jquery/jquery/tree/master/speed/). The
above performance results specifically look at three very common cases
in jQuery code: Using .closest() on a single DOM node, using .filter()
(or .is()) on a single DOM node, and using .find() rooted on a DOM
element (e.g. \$("\#test").find("something")). Note that the the
browsers shown are those that actually support querySelectorAll or
matchesSelector - existing browsers that don't support those methods
continue to have the same performance characteristics.

### Ajax

A few new Ajax features have landed which should help plugin authors and
those building progressively-enhanceable applications. A new
jQuery.readyWait property has been introduced which, when added to,
delays the execution of the ready event. This should be used by plugins
that wish to delay the ready event from occurring until a specified
time. For example [RequireJS](http://requirejs.org/) has already
implemented the use of this property allowing you to load dependencies
that should be handled before the ready event fires. Whenever an item
finishes loading you should end up calling `jQuery.ready(true)` (and if
all dependencies are finished loading - and the DOM is ready - then the
ready event will fire). We've also added a new support property:
jQuery.support.ajax. Simply this returns true in browsers that are
capable of handling an 'Ajax' (XMLHttpRequest) request.

### Events

**.bind("click", false) and .unbind("click", false)** A convenient
shortcut for binding a function that does nothing but return false
(preventing the default action and stopping the event bubbling).
**.click(data, fn)** All built-in event methods (such as .click()) now
accept data as an initial argument (much like the bind method does).
**[event.namespace](http://api.jquery.com/event.namespace/)** A new
property of the event object that contains the event namespace that was
passed in to `.trigger()`.

### Effects

**.show(speed, easing, callback), etc.** All animate methods now support
easing. Much like how .animate() supports an easing argument (to be
utilized by an easing plugin)
**[jQuery.fx.interval](http://api.jquery.com/jQuery.fx.interval/)** A
new property that exposes the rate at which all effects fire (in
milliseconds - defaults to 13). Making this number smaller will make
animations smoother in some browsers (such as Chrome) at the expense of
CPU.

### Misc

**[jQuery.type](http://api.jquery.com/jQuery.type/)**

Determine the internal JavaScript [[Class]] of an object. A number of
different aspects are utilized to determine the exact return value for
an object. The logic can be determined as follows:

-   If the object is undefined or null then "undefined" or "null" is
    returned accordingly.
-   If the object has an internal [[Class]] equivalent to one of the
    browser's built-in objects we return the associated name. ([More
    details about this
    technique.](http://perfectionkills.com/instanceof-considered-harmful-or-how-to-write-a-robust-isarray/))
    -   jQuery.type(true) === "boolean"
    -   jQuery.type(3) === "number"
    -   jQuery.type("test") === "string"
    -   jQuery.type(function(){}) === "function"
    -   jQuery.type([]) === "array"
    -   jQuery.type(new Date()) === "date"
    -   jQuery.type(/test/) === "regexp"

-   Everything else will return "object" as its type.

**[jQuery.isWindow](http://api.jquery.com/jQuery.isWindow/)** A simple
method for determining if an object is likely to be a window.

    jQuery.isWindow(window); // true

Additionally we now use he native Array.isArray method for jQuery's
isArray (if available) and we utilize the native String trim method
provided by the browser (again, if available). A number of performance
improvements were made to jQuery.trim, detailed in [the following
thread](http://forum.jquery.com/topic/faster-jquery-trim).

### Testing

[![jQuery 1.4.3: Passing 3621 Tests in All
Browsers](http://farm5.static.flickr.com/4108/5082972188_05e03091be.jpg)](http://www.flickr.com/photos/jeresig/5082972188/ "jQuery 1.4.3: Passing 3621 Tests in All Browsers by John Resig, on Flickr")

jQuery 1.4.3 is passing 3621 tests on all supported browsers. We're 100%
passing on Firefox 4 and nearly passing in IE 9 (we discovered two bugs,
filed them, and one of them has already been fixed).
