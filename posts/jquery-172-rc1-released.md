jQuery 1.7.2 will be arriving soon! To make sure that we've fixed the
bugs voted "Most Likely to Annoy" without introducing any new bugs, we
need your help in testing this release candidate. You can get the code
from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.7.2rc1.js](http://code.jquery.com/jquery-1.7.2rc1.js)

It will only take a few minutes to drop in this latest file and test it
with your code. If you've got a lot of pages, the list of fixed bugs
below may be a helpful guide for determining what to test. And of
course, if you reported a bug or were affected by one listed below,
please re-test to be sure we fixed it for good. We've tested it
internally against the current builds of jQuery UI and jQuery Mobile.
There is one compatibility issue with jQuery Mobile 1.1 RC1 that has
already been fixed and will be addressed by their next release. Looking
for an even easier way to test your web site with the latest jQuery? On
Windows you can use the excellent
[Fiddler](http://fiddler2.com/fiddler2/) tool and create an
[AutoResponder
rule](http://fiddler2.com/Fiddler2/help/AutoResponder.asp) to point your
HTTP script requests for jQuery to the file location above. Then you are
testing your live web site with the latest jQuery on your PC, without
having to edit any files at all! If you know of similar tools for other
platforms, leave a message in the comments below. If you are
particularly interested in IE6 support, please help us out. We are
having sporadic trouble running the unit tests in IE6. It hasn't been
possible for us to determine the cause of these problems, but the
problem doesn't happen consistently and the sheer size of our test suite
may just be overwhelming a browser that is more than a decade old. If
you observe any reproducible failures in real code, please let us know
and try to provide the smallest possible test case. You can use the [bug
tracker](http://bugs.jquery.com) to report bugs; be sure to create a
test case on [jsFiddle](http://jsfiddle.net) so we can figure it out
easily. If you're not sure it's a bug, ask on our
[forum](http://forum.jquery.com) or on
[StackOverflow](http://stackoverflow.com/questions/tagged/jquery).
Please *don't* use the blog comments below to report bugs.

jQuery 1.7.2rc1 Change Log
--------------------------

Here's the current change log of the 1.7.2rc1 release.

### Ajax

-   [\#4624](http://bugs.jquery.com/ticket/4624): Charset in default
    ajaxSettings.contentType
-   [\#10978](http://bugs.jquery.com/ticket/10978): jQuery.param()
    should allow non-native constructed objects as property values
-   [\#11264](http://bugs.jquery.com/ticket/11264): evalScript() uses
    defaults set by ajaxSetup()
-   [\#11426](http://bugs.jquery.com/ticket/11426): jQuery.ajax() always
    fails when requesting JPG images in IE

### Attributes

-   [\#5571](http://bugs.jquery.com/ticket/5571): Allow chaining when
    passing undefined to any setter in jQuery
-   [\#10828](http://bugs.jquery.com/ticket/10828): attr("coords")
    returns undefined in IE7
-   [\#10870](http://bugs.jquery.com/ticket/10870): Incorrect behaviour
    of \$.removeAttr("selected")
-   [\#11316](http://bugs.jquery.com/ticket/11316): Consider looking
    through valHooks by element type first, then by nodeName instead of
    the other way around

### Build

-   [\#10692](http://bugs.jquery.com/ticket/10692): Configure the jshint
    options to more accurately match the style guide
-   [\#10693](http://bugs.jquery.com/ticket/10693): generalize the "test
    something in an iframe" code in unit tests
-   [\#10901](http://bugs.jquery.com/ticket/10901): have unit tests fail
    if the tester is running from file:// or doesn't have PHP
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

### Data

-   [\#11309](http://bugs.jquery.com/ticket/11309):
    hexadecimal-formatted data-\* attributes parsed incorrectly

### Deferred

-   [\#11306](http://bugs.jquery.com/ticket/11306): calling .disable()
    or .lock() on a \$.Callbacks object breaks its fired() status

### Dimensions

-   [\#3838](http://bugs.jquery.com/ticket/3838): \$(document).height()
    incorrect in IE6

### Effects

-   [\#8498](http://bugs.jquery.com/ticket/8498): Animate Hooks
-   [\#10006](http://bugs.jquery.com/ticket/10006): method show is not
    working as expected in all browsers when called for document
    fragment
-   [\#10848](http://bugs.jquery.com/ticket/10848): Animation toggling
    loses state tracking in certain atomic edge cases
-   [\#11415](http://bugs.jquery.com/ticket/11415): Silently ignore
    negative CSS values where they are illegal

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
-   [\#11217](http://bugs.jquery.com/ticket/11217): Append problem with
    webkit
-   [\#11291](http://bugs.jquery.com/ticket/11291): Cloning XMLDoc's
    with HTML5 nodeName's breaks on IE
-   [\#11323](http://bugs.jquery.com/ticket/11323): script tags with
    type="text/ecmascript" leak into the DOM
-   [\#11356](http://bugs.jquery.com/ticket/11356): safeFragment memory
    leak

### Misc

-   [\#10952](http://bugs.jquery.com/ticket/10952): .fired() doesn't
    work on Callbacks object when it is flagged with "once"
-   [\#11257](http://bugs.jquery.com/ticket/11257): Wrong path to source
    files in test suite if PHP missing

### Queue

-   [\#10967](http://bugs.jquery.com/ticket/10967): .promise() does not
    attach methods onto target

### Support

-   [\#7986](http://bugs.jquery.com/ticket/7986): Bug in
    \$.support.boxModel if page has DIV-element CSS
-   [\#11048](http://bugs.jquery.com/ticket/11048): Support Tests affect
    layout for positioned elements in IE6-9
-   [\#11337](http://bugs.jquery.com/ticket/11337): Bug in
    \$.support.reliableMarginRight

### Traversing

-   [\#11370](http://bugs.jquery.com/ticket/11370):
    \$('\<div\>').siblings() throws exception

