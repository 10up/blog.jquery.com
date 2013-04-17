Hey there Internets, it's the jQuery Core team! We haven't talked in a
while, but over the holidays we were busy fixing the bugs you reported.
The result of that hard work is jQuery 1.7.2 Beta 1. We decided to get a
beta out by [Groundhog
Day](http://en.wikipedia.org/wiki/Groundhog_Day "Groundhog Day") so you
wouldn't be in the shadow of six more weeks of unfixed bugs. You can get
the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.7.2b1.js](http://code.jquery.com/jquery-1.7.2b1.js)

Oh, we *know* what you're thinking: *"Cool, a new version of jQuery;
I'll wait until the final release has been out a few weeks and then I'll
give it a try."* Right, and then you'll find some bug that keeps you
from upgrading. Nothing makes us sadder than finishing up a release and
only then seeing a report of a serious bug that could have been fixed
earlier. So please, come out of your burrow and try this beta with your
code. Did we miss an old bug? Did we create a new bug that makes you
feel like [Bill Murray waking up to "I Got You
Babe?"](http://www.youtube.com/watch?v=eZbtAFq7dP8#t=5) We want to know.
You can use the [bug tracker](http://bugs.jquery.com) to report bugs; be
sure to create a test case on [jsFiddle](http://jsfiddle.net) so we can
figure it out easily. If you're not sure it's a bug, ask on our
[forum](http:/forum.jquery.com) or on
[StackOverflow](http://stackoverflow.com/questions/tagged/jquery).

jQuery 1.7.2b1 Change Log
-------------------------

The current change log of the 1.7.2b1 release.

### Ajax

-   [\#10978](http://bugs.jquery.com/ticket/10978): jQuery.param()
    should allow non-native constructed objects as property values

### Attributes

-   [\#5571](http://bugs.jquery.com/ticket/5571): Allow chaining when
    passing undefined to any setter in jQuery

### Build

-   [\#10692](http://bugs.jquery.com/ticket/10692): Configure the jshint
    options to more accurately match the style guide
-   [\#10902](http://bugs.jquery.com/ticket/10902): ability to test a
    built version of jQuery in unit tests
-   [\#10931](http://bugs.jquery.com/ticket/10931): Unit tests shouldn't
    require internet access

### Core

-   [\#10466](http://bugs.jquery.com/ticket/10466): jQuery.param()
    mistakes wrapped primitives for deep objects

### Css

-   [\#10639](http://bugs.jquery.com/ticket/10639): outerWidth(true) and
    css('margin') returning % instead of px in Webkit
-   [\#10754](http://bugs.jquery.com/ticket/10754): have jQuery.swap
    return the return of the callback instead of just executing it
-   [\#10782](http://bugs.jquery.com/ticket/10782): Incorrect
    calculating width
-   [\#10796](http://bugs.jquery.com/ticket/10796): Bug in IE7 with
    \$('\#el').css.('background-position')
-   [\#10858](http://bugs.jquery.com/ticket/10858): css.js regular
    expressions are incomplete
-   [\#11119](http://bugs.jquery.com/ticket/11119): The curCSS function
    only need 2 arguments

### Effects

-   [\#8498](http://bugs.jquery.com/ticket/8498): Animate Hooks
-   [\#10006](http://bugs.jquery.com/ticket/10006): method show is not
    working as expected in all browsers when called for document
    fragment
-   [\#10848](http://bugs.jquery.com/ticket/10848): Animation toggling
    loses state tracking in certain atomic edge cases

### Event

-   [\#8165](http://bugs.jquery.com/ticket/8165): .live('click',
    handler) fires on disabled buttons with child elements in Chrome
-   [\#10819](http://bugs.jquery.com/ticket/10819): Eliminate
    "this.on.call(this, "
-   [\#10878](http://bugs.jquery.com/ticket/10878):
    \$("select").live("change", function(){ ...broken in IE8 in jQuery
    1.7
-   [\#10961](http://bugs.jquery.com/ticket/10961): Error in XRegExp
    using jQuery 1.7.1 in IE6-9
-   [\#10970](http://bugs.jquery.com/ticket/10970): The .on() selector
    parameter doesn't work with :not(:first) selector
-   [\#10984](http://bugs.jquery.com/ticket/10984): Cannot off() custom
    events (\$.event.special)
-   [\#11021](http://bugs.jquery.com/ticket/11021): Hover hack mangles a
    namespace named "hover"
-   [\#11076](http://bugs.jquery.com/ticket/11076): .clone(true) loses
    delegation filters
-   [\#11130](http://bugs.jquery.com/ticket/11130): jQuery.fn.on:
    binding map with null selector ignores data
-   [\#11145](http://bugs.jquery.com/ticket/11145): \$(document).on()
    not working with name="disabled"

### Manipulation

-   [\#9427](http://bugs.jquery.com/ticket/9427): Passing undefined to
    .text() does not trigger setter
-   [\#10753](http://bugs.jquery.com/ticket/10753): inline the
    evalScript function in manipulation.js as it's only used once
-   [\#10864](http://bugs.jquery.com/ticket/10864): text() method on a
    document fragment always returns the empty string
-   [\#11055](http://bugs.jquery.com/ticket/11055): Update HTML5 Shim
    elements list to support latest html5shiv

### Misc

-   [\#10952](http://bugs.jquery.com/ticket/10952): .fired() doesn't
    work on Callbacks object when it is flagged with "once"
-   [\#11257](http://bugs.jquery.com/ticket/11257): Wrong path to source
    files in test suite if PHP missing

### Support

-   [\#11048](http://bugs.jquery.com/ticket/11048): Support Tests affect
    layout for positioned elements in IE6-9

