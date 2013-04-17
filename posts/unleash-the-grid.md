The jQuery UI Team is proud to announce that we are building a rich,
fast grid widget that will enhance an HTML table with data linking,
sorting, paging, filtering, row selection, and inline editing. As part
of this process, we'll be building the features of the grid as
standalone widgets and revisiting existing jQuery UI components. At the
end of this process, not only will we have a grid, but also a
better-tested, more feature-complete user interface library.

### Current Progress

We are nearing completion of development on Stage 1 of the project,
which encompasses the creation of a generic data model, data type
parsing, and markup. This stage will culminate in a "zero feature grid,"
an enhanced HTML table that supports the jQuery UI CSS Framework and
serves as a base for other grid features. See the
[roadmap](http://wiki.jqueryui.com/Grid#Roadmap%20) for details on work
planned for future stages.

### Development Approach

There are already a number of high quality jQuery grid plugins. We
recognize they each have an impressive set of features, capabilities,
and a level of use by members of the jQuery community. We are studying
and applying practices and techniques from today's most popular grid and
data table plugins, including current favorites,
[SlickGrid](https://github.com/mleibman/SlickGrid/wiki),
[jqGrid](http://www.trirand.com/blog/),
[DataTables](http://www.datatables.net/) and a few that have not been
updated in a while, like [Tablesorter](http://tablesorter.com/docs/),
[Flexigrid](http://flexigrid.info/), and
[Ingrid](http://reconstrukt.com/ingrid/). We invite all authors and
users of these and any other grid plugins to get involved in the design
of the jQuery UI Grid.

### Not Invented Here?

As you may imagine, we're pretty big fans of the jQuery UI API. We
believe that having a consistent interface to complex plugins is a big
win for users. Sometimes in the past, we've adapted already-complete
plugins. Unfortunately, this approach can lead to headaches related to
legacy bugs, inconsistencies with the rest of our API, and lack of
familiarity with the original design decisions. By building from the
ground up, we can ensure that each line of code has been vetted and that
any grid we call "jQuery UI's" conforms to our standards.

### More Than Just A Grid

We're not just developing a grid, but rather designing and building
modular and extensible components, like sorting, paging, filtering, and
in-place editing, that can be combined into a grid. We're confident that
jQuery UI users will find compelling and creative uses for the new suite
of tools that are being built to support the grid.

### Refactoring Interactions

While jQuery UI's mouse interaction plugins work well enough in many
cases, we are well aware that they have lingering shortcomings -
including their ability to work properly on tables. As part of the Grid
development, we'll be giving the interaction plugins a long-awaited
refactoring to simplify their APIs, address edge cases, and generally
ensure their suitability for a wider variety of contexts.

### Join Us!

Do you want to help design and build the jQuery UI Grid? Share your
feedback? Join us on the [grid planning wiki
page](http://wiki.jqueryui.com/Grid). You can stay up-to-date with
development and test the latest iterations on jQuery UI's [grid
branch](https://github.com/jquery/jquery-ui/tree/grid).

### Sponsors

This work is made possible by the generous donations by individuals as
well as corporate sponsors. These sponsors have donated financial and
development resources to ensure the grid work can go forward over the
next 5-6 months. In particular, the jQuery project would like to thank
the following sponsors (as of today) of the jQuery UI Grid project:

#### Double Platinum Grid Sponsors

-   [Microsoft](http://www.microsoft.com/web/) - The Microsoft Web
    Platform and Tools team builds many technologies for developing web
    sites including ASP.NET, ASP.NET MVC, IIS, Visual Web Developer and
    Web Matrix.
    [![](http://wiki.jqueryui.com/f/1295516776/grid-sponsor-logo-microsoft.png)](http://www.microsoft.com/web/)
-   [Adobe](http://www.adobe.com/products/creativesuite/web/whatsnew/) -
    Adobe Systems Incorporated offers business, creative, and mobile
    software solutions that revolutionize how the world engages with
    ideas and information.
    [![](http://wiki.jqueryui.com/f/1296585696/grid-sponsor-logo-adobe.png)](http://www.adobe.com/products/creativesuite/web/whatsnew/)
-   [Wijmo](http://wijmo.com/) - Wijmo is a complete kit of over 30
    jQuery UI Widgets. It is a mixture of jQuery, CSS3, SVG, and HTML5
    that, when combined, become an unstoppable force on the web.
    [![](http://wiki.jqueryui.com/f/1295482419/grid-sponsor-logo-wijmo.png)](http://wijmo.com/)

If you or your company is interested in being a sponsor of the jQuery UI
Grid, please [get in touch](http://wiki.jqueryui.com/Grid#Sponsors).
