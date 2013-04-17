On the 2nd anniversary of jQuery's release we're proud to bring you a
[brand new release](http://docs.jquery.com/Release:jQuery_1.2.2) of
jQuery. This is primarily a bug fix release for [jQuery
1.2](http://docs.jquery.com/Release:jQuery_1.2). You can view the full
list of what was fixed on the [bug
tracker](http://dev.jquery.com/report/22).

Downloading
-----------

**[jQuery 1.2.2](http://docs.jquery.com/Release:jQuery_1.2.2):**

-   [jQuery
    Minified](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.2.min.js)
    (15kb with
    [Gzipping](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery
    Packed](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.2.pack.js)
    (28kb)
-   [jQuery
    Regular](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.2.js)
    (93kb)

If you wish to checkout the full release from the [Subversion
repository](http://dev.jquery.com/browser), you can do so by following
[the following
instructions](http://docs.jquery.com/Downloading_jQuery#Subversion_.28SVN.29)
and checking out the source from the following location:

    svn co http://jqueryjs.googlecode.com/svn/tags/1.2.2

Important Changes
-----------------

A lot of hard work was put into this release by Brandon Aaron and David
Serduke. David is a new addition to the jQuery core development team and
has been making significant contributions - please help us in welcoming
him! Primarily, this has been a bug fix and optimization release. We
landed over [120](http://dev.jquery.com/report/22) bug fixes and our
test suite now has over [1157 tests](http://jquery.com/test/) in it -
which we are quire proud of.

### 300% Speed Improvements to \$(DOMElement)

Once again, we've taken a step at micro-improving the most-used features
in jQuery. Specifically, the use of passing a DOM element into the
jQuery function. (Most frequently used when you see stuff like \$(this)
in your code.) Here's a quick peak at some of the speed jumps that you
can expect in all the major browsers:

  Browser               1.2.1 (ms)   1.2.2 (ms)
  --------------------- ------------ ------------
  Firefox 2             0.041        0.015
  Firefox 3             0.033        0.01
  Safari 3              0.017        0.005
  Opera 9               0.023        0.004
  Internet Explorer 6   0.04         0.03

### .ready() Overhaul

The document ready function has been long due for some extra love. We've
made a number of specific changes. \* Internet Explorer document ready
drastically improved. We use a new technique inspired by Diego Perini.
It allows us to not have to do a document.write() anymore, which is
really fantastic. \* All browsers now wait for CSS to be ready, in
addition to just the DOM. In reality, it's not just a vanilla document
ready anymore - but we found that users, overwhelmingly, needed to wait
for document styling to be active (such as knowing if an element is
visible, or what its height is). Specifically we've added improvements
to Safari and Opera to make this possible. \*
`$(document).bind("ready", fn);` - You can now watch for the document
ready event via the traditional .bind() function. Of course, .ready()
still works as you would expect it to.

### .bind("mouseenter") / .bind("mouseleave")

The functionality that was the core of the .hover() function has been
split out into two new cross-browser events: mouseenter and mouseleave.
These are different from mouseover and mouseout as those events will
fire as you move in and out of child elements (which is generally not
desired). For example, the following are both valid and work perfectly
in jQuery 1.2.2:

    $("li").hover(function(){
      $(this).addClass("hover");
    }, function(){
      $(this).removeClass("hover");
    });

    $("li").bind("mouseenter", function(){
      $(this).addClass("hover");
    }).bind("mouseleave", function(){
      $(this).removeClass("hover");
    });

### .bind("mousewheel")

We have [a new
plugin](http://dev.jquery.com/browser/trunk/plugins/mousewheel/jquery.mousewheel.js),
written by Brandon Aaron, based on the new Event API which adds
mousewheel event support to jQuery core. This will allow you to write
things like:

    $("div").bind("mousewheel", function(event, delta){
      if ( delta < 0 )
        $(this).append("up");
      else
        $(this).append("down");
    });

### Complex :not()

Even though it's not part of the CSS 3 specification it's been a common
feature request - so you can now do complex expressions in your :not()
selectors. For example, the following now work:

    $(".hover:not(li.active)")

    $("li:not(.active,.hover,:contains(test))")

### Accept Headers

For normal jQuery Ajax operations we now send an extra Accept header to
let the server know what kind of content we're looking for. If you
specify a dataType argument then we'll take care of all the header
setting for you. We currently send the following headers for each
dataType.

-   **xml** "application/xml, text/xml"
-   **html** "text/html"
-   **script** "text/javascript, application/javascript"
-   **json** "application/json, text/javascript"
-   **text** "text/plain"
-   Everything else: "\*/\*"

### Bug Fixes

Here's a sampling of some of the functionality that's seen some
important overhauling. \* .clone() overhaul \* Script evaluation
overhaul \* height() / width() overhaul \* Cross-frame DOM manipulation
\* A few memory leaks have been resolved

### Event API

There's a new API for dealing with events. You can now create your own
custom event types (with custom ways of being set up and torn down).
Effectively, it allows you to go beyond simple event triggering and
create a full scheme for attaching, handling, and tearing down events on
an element. A [demonstration
plugin](http://dev.jquery.com/browser/trunk/plugins/mousewheel/jquery.mousewheel.js)
was created by Brandon Aaron that you can use to learn the powerful new
API.
