jQuery 1.2.6 is primarily a bug fix release for [jQuery
1.2](http://docs.jquery.com/Release:jQuery%201.2). You can view the full
list of what was fixed on the [bug
tracker](http://dev.jquery.com/report/27). This is the next release
immediately following jQuery 1.2.3. Releases 1.2.4 and 1.2.5 were
skipped (1.2.4 was built incorrectly, rendering it effectively identical
to 1.2.3, and 1.2.5 was missing a patch). The entire jQuery team did a
fantastic job in pulling this release together - I want to take this
opportunity to thank them all for their continued hard work. I'd also
like to take this opportunity to welcome Ariel Flesler to the core
jQuery development team. He provided valuable help in pulling this
release together - contributing bug fixes, performance improvements,
features, and test cases. You can see the result of his hard work all
throughout this release. Welcome Ariel and thank him for all his
contributions!

Downloading
-----------

**jQuery 1.2.6:**

-   **Recommended** Hosted Code with Google: [AJAX Libraries
    API](http://code.google.com/apis/ajaxlibs/documentation/index.html#jquery)
-   [jQuery
    Minified](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.6.min.js)
    (15kb with
    [Gzipping](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery
    Packed](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.6.pack.js)
    (30kb)
-   [jQuery
    Regular](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.6.js)
    (100kb)

If you wish to checkout the full release from the [Subversion
repository](http://dev.jquery.com/browser), you can do so by [following
the
instructions](http://docs.jquery.com/Downloading_jQuery#Subversion_.28SVN.29)
and checking out the source from the following location:

    svn co http://jqueryjs.googlecode.com/svn/tags/1.2.6

Performance Improvements
------------------------

Once again the jQuery team has worked hard to bring huge performance
improvements in this release. As with previous releases we've expanded
to look at many areas of the jQuery framework, looking for common pain
points, and providing relief. All data and test cases for the below
performance improvements can be found in the the following [jQuery 1.2.3
v. 1.2.6 Google
Spreadsheet](http://spreadsheets.google.com/pub?key=pFIHldY_CksyThxfgx6krfA)
(results for Internet Explorer 6 were excluded in favor of Internet
Explorer 7 due to their virtually-identical results).

### Event Handling is 103% Faster

In analyzing intense application code (specifically operations such as
drag-and-drop) we looked for ways in which universal changes could be
made that would affect all users. A frequently-called piece of code was
that of the jQuery event handler, any optimizations to it would
dramatically improve the performance of all resulting frequently-called
events. By focusing improvements here all frequently-called events that
you have should see immediate benefits.

### CSS Selectors are 13% faster

A number of optimizations have been made to internal jQuery methods,
dramatically improving their performance, while providing measurable
benefit to some of the most commonly used code in jQuery (such as the
CSS Selector code). For example the **jQuery.map() method is now 866%
faster** and **jQuery.extend() is 19% faster**. These two changes have
allowed for dramatic improvements in performance all throughout the
library.

### .offset() is 21% faster

Together with the improvements to jQuery's event handling code
optimizations of .offset() have allowed intense mouse-based operations
to become much faster. For example jQuery UI's drag-and-drop code is now
over 300% faster because of these change (allowing you to achieve
faster, smoother, drag-and-drop operations).

### .css() is 25% faster

A method that's frequently called (both internally and externally). The
optimizations to this method are easily felt in others (like .offset(),
for example).

New Features and Major Changes
------------------------------

### Dimensions Plugin is Now Part of Core

The remaining methods of the Dimensions plugin, by Brandon Aaron, have
been introduced into jQuery core, along with additional bug fixes and
performance improvements. This plugin has seen considerable use amongst
developers and plugin authors and has become a solid part of the jQuery
ecosystem. We've been, slowly, introducing the most-used methods from
the Dimensions plugin over the past couple releases - but with the
release of 1.2.6 all remaining methods are now part of core. If you're
upgrading your copy of jQuery to version 1.2.6 you can now opt to
exclude the Dimensions plugin from your code. The full documentation for
Dimensions can be found [on the jQuery documentation
site](http://docs.jquery.com/Plugins/dimensions) (and is in the process
of becoming integrated with the core jQuery documentation).

### .attr() overhaul

The .attr() method has been completely overhauled (resolving about 15
outstanding bugs). Additionally, the method has been significantly
simplified and optimized.

### .toggle() can now accept more functions

Historically jQuery's .toggle() function has accepted two functions (to
be toggled in an even/odd manner). However that has been changed so that
any number of functions can be provided and toggled by a mouse click.

    $("div").toggle(function(){
      $(this).removeClass("three").addClass("one");
    }, function(){
      $(this).removeClass("one").addClass("two");
    }, function(){
      $(this).removeClass("two").addClass("three");
    });

### You can now unbind bound .toggle() and .one() functions

    function test(){ $(this).addClass("test"); }
    $("div").one("click", test);
    $("div").unbind("click", test);

    $("div").toggle(test, test);
    $("div").unbind("click", test);

### .index() supports jQuery collections

jQuery's .index() function has allowed you to find the location of a DOM
element in the jQuery collection - now you can also specify a jQuery
collection (the first element of which will be extracted and located in
the original set).

    var test = $("div.test");
    $("div").index( test ) == 3

### jQuery.makeArray can convert ANYTHING to an array.

jQuery's internal .makeArray() method now converts any array-like object
into a new array. Additionally it wraps all other objects as an array
and returns the resulting set.

    jQuery.makeArray( document.getElementsByTagName("div") )
    // => [ div, div, div ]

    jQuery.makeArray( true )
    // => [ true ]

    jQuery.makeArray()
    // => []

### beforeSend can cancel Ajax calls

The beforeSend Ajax callback has allowed developers to execute a piece
of code prior to a request occurring - now that code can also verify the
integrity of some parameters and cancel the resulting Ajax request
(useful for tasks like form validation).

    $.ajax({
      beforeSend: function(){
        return $("#input").val() == "";
      },
      url: "test.php"
    });

### Exposed Speeds

jQuery has a number of named animation speeds (such as 'slow', 'fast',
and 'default') you can now provide your own names for animation speeds,
or modify the existing ones, by manipulating the jQuery.fx.speeds
object.

    jQuery.fx.speeds.slow = 1000;
    $("#test").slideDown("slow");
