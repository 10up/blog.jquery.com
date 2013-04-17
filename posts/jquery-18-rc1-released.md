jQuery 1.8RC1 is here. Yep, RC as in *Release Candidate*. The good news
is that this release is a few days later than I expected it to be. It's
good news because we received several valuable but last-minute bug
reports we were able to fix. Many thanks to those of you who took the
time to try out Beta 2 with your code, and especially to those who found
and reported bugs. Now I know there are a lot of you out there thinking,
"Gee whiz, [nobody ever lets me find
bugs.](http://www.youtube.com/watch?v=tviPLpD8VG8#t=22)" Well, here's
your chance to be a hero to the jQuery community. In this *Release
Candidate* we may have taken some working features and inserted problems
so obscure that even we don't know where they are. Please find them!
Just grab the code from here:
[http://code.jquery.com/jquery-1.8rc1.js](http://code.jquery.com/jquery-1.8rc1.js)
Try out this *Release Candidate* code wherever you use jQuery, and let
us know about any issues you find via the [bug
tracker](http://bugs.jquery.com). Be sure to mention you're testing
against jQuery 1.8 RC1, and please create a test case that shows the bug
using [jsFiddle.net](http://jsfiddle.net) so we can reproduce it and
investigate. You can use the "jQuery (edge)" choice for framework in
jsFiddle, which represents the most up-to-date code. Oh, and did I
mention this is a *Release Candidate*? Yeah, I did. Who knows if there
will ever be a jQuery 1.8.1? If you find a bug after we release jQuery
1.8, it could be six months before it's fixed. Six months of misery, all
because you didn't test the *Release Candidate*! One and a half women
could make a baby while you're waiting for that critical bug fix! For
your own sake, please try it out!

jQuery 1.8rc1 Change Log
------------------------

The current change log of the 1.8rc1 release.

### Ajax

-   [\#8205](http://bugs.jquery.com/ticket/8205): JSONP random result is
    causing memory leak in IE8
-   [\#8653](http://bugs.jquery.com/ticket/8653): jQuery.param outputs
    "null" and "undefined" in the query string
-   [\#9399](http://bugs.jquery.com/ticket/9399): Deprecate
    jqXHR.success and jqXHR.error
-   [\#10285](http://bugs.jquery.com/ticket/10285): evalScript
    rcleanScript replacement fails in IE8
-   [\#10524](http://bugs.jquery.com/ticket/10524): jQuery.fn.load does
    not merge data parameter with jQuery.ajaxSetup
-   [\#10944](http://bugs.jquery.com/ticket/10944): \$.ajax does not
    always return an object implementing the Promise interface
-   [\#11013](http://bugs.jquery.com/ticket/11013): Deprecate use of
    Deferred/Promise with sync \$.ajax
-   [\#11402](http://bugs.jquery.com/ticket/11402): evalScript function
    fails with error error 80020101 in IE
-   [\#11743](http://bugs.jquery.com/ticket/11743): jQuery silently
    ignores errors during script tag ajax request in \$.appendTo()
-   [\#11778](http://bugs.jquery.com/ticket/11778): Cached XHR requests
    should still resolve asynchronously
-   [\#12122](http://bugs.jquery.com/ticket/12122): jQuery.ajax() async
    deprecate use with \$.Deferred

### Attributes

-   [\#11153](http://bugs.jquery.com/ticket/11153): jQuery 1.7 Strips
    Carriage Returns in IE 8
-   [\#11212](http://bugs.jquery.com/ticket/11212): Sizzle.getText
    converts unbreakable space into whitespace on IE
-   [\#11547](http://bugs.jquery.com/ticket/11547): XML DOM
    .removeAttr() doesn't remove cased attributes
-   [\#11962](http://bugs.jquery.com/ticket/11962): Standardize getter
    return values for empty sets.
-   [\#12127](http://bugs.jquery.com/ticket/12127): Clone does not
    correctly copy checked state in IE10

### Build

-   [\#11767](http://bugs.jquery.com/ticket/11767): Support custom build
    without effects
-   [\#11789](http://bugs.jquery.com/ticket/11789): Update README to
    describe grunt build system
-   [\#11856](http://bugs.jquery.com/ticket/11856): modularize
    dimensions
-   [\#11857](http://bugs.jquery.com/ticket/11857): modularize css
-   [\#11865](http://bugs.jquery.com/ticket/11865): modularize offset
-   [\#11965](http://bugs.jquery.com/ticket/11965): Create deprecated.js
    to contain as much of the deprecated stuff as possible

### Core

-   [\#10657](http://bugs.jquery.com/ticket/10657): Deprecate
    jQuery\#size() in favor of jQuery\#length
-   [\#11290](http://bugs.jquery.com/ticket/11290): selector interpreted
    as HTML
-   [\#11470](http://bugs.jquery.com/ticket/11470): Adding a builtin
    readyP promise
-   [\#12018](http://bugs.jquery.com/ticket/12018): \$(document).ready()
    fires too early in IE8
-   [\#12026](http://bugs.jquery.com/ticket/12026): Let \$(html, props)
    use any jQuery.fn method

### Css

-   [\#10373](http://bugs.jquery.com/ticket/10373):
    \`document.defaultView\` =\> \`window\`
-   [\#10413](http://bugs.jquery.com/ticket/10413): width, innerWidth,
    innerHeight, outerWidth, outerHeight are inaccurate for a
    "box-sizing: border-box" child of hidden parent
-   [\#10679](http://bugs.jquery.com/ticket/10679): CSS3 vendor prefix
    support
-   [\#11004](http://bugs.jquery.com/ticket/11004): getWH incorrectly
    removes padding and border width when box-sizing is border-box
-   [\#11787](http://bugs.jquery.com/ticket/11787): Remove jQuery.curCSS
-   [\#12088](http://bugs.jquery.com/ticket/12088): Webkit now returning
    percentages for more getComputedStyle properties
-   [\#12148](http://bugs.jquery.com/ticket/12148): hide event don't
    fire when toggle

### Data

-   [\#7579](http://bugs.jquery.com/ticket/7579): jQuery.data()
    truncates numbers taken from data-xxx attributes
-   [\#10589](http://bugs.jquery.com/ticket/10589): Remove
    \$.fn.data("events")

### Deferred

-   [\#11010](http://bugs.jquery.com/ticket/11010): Make Deferred.then
    == Deferred.pipe like Promise/A
-   [\#11011](http://bugs.jquery.com/ticket/11011): Allow traditional
    options object for \$.Callbacks flags
-   [\#11736](http://bugs.jquery.com/ticket/11736): Remove Deferred
    .isResolved() and .isRejected()
-   [\#11749](http://bugs.jquery.com/ticket/11749): Preserve context
    objects when multiple Deferred object are passed to \$.when()

### Dimensions

-   [\#6724](http://bugs.jquery.com/ticket/6724): wrong
    \$(window).height() in mobile safari (iphone)
-   [\#10877](http://bugs.jquery.com/ticket/10877): Make
    outerWidth/Height a setter
-   [\#11293](http://bugs.jquery.com/ticket/11293): Reading width or
    outerWidth of empty TDs alters columns width values
-   [\#11604](http://bugs.jquery.com/ticket/11604): Switch
    \$(elem).width(-val) from no-op to \$(elem).width(0)
-   [\#11724](http://bugs.jquery.com/ticket/11724):
    \$(document).height() changed in Firefox 12

### Effects

-   [\#7109](http://bugs.jquery.com/ticket/7109): animate width starts
    with invalid width on webkit
-   [\#7157](http://bugs.jquery.com/ticket/7157): Animation callback
    shows element is still ":animated"
-   [\#8387](http://bugs.jquery.com/ticket/8387): flickering problem
    with jQuery 1.5 hide/show issue with inline and inline-block
    elements on webkit browsers
-   [\#8627](http://bugs.jquery.com/ticket/8627): .animate() fails on
    letterSpacing in IE (regression in 1.5.1)
-   [\#8892](http://bugs.jquery.com/ticket/8892): Callback is raised
    before objects are shown with fadeIn() and jQuery.fx.off = true
-   [\#9217](http://bugs.jquery.com/ticket/9217): javascript error in
    IE8 when animating element is removed before animation finishes
-   [\#9505](http://bugs.jquery.com/ticket/9505): animate() issue when
    mixing percentages and pixels in WebKit
-   [\#11635](http://bugs.jquery.com/ticket/11635): Explicit
    overflow:auto is overridden by inline overflow:hidden during
    animation
-   [\#11755](http://bugs.jquery.com/ticket/11755): animate and it
    aliases should not use :hidden selector
-   [\#11797](http://bugs.jquery.com/ticket/11797): New animation
    related events
-   [\#11854](http://bugs.jquery.com/ticket/11854): percentage
    animations jump to end
-   [\#11971](http://bugs.jquery.com/ticket/11971): Animating
    background-position fails in IE8
-   [\#11999](http://bugs.jquery.com/ticket/11999): Incremental
    animation on fixed div does subtraction instead of addition in
    Chrome.
-   [\#12117](http://bugs.jquery.com/ticket/12117): overflow hidden not
    properly set when animating to 0 height or width
-   [\#12150](http://bugs.jquery.com/ticket/12150): border-spacing
    property accumulates when rows are shown and hidden

### Event

-   [\#8545](http://bugs.jquery.com/ticket/8545): Leak with events in IE
-   [\#10067](http://bugs.jquery.com/ticket/10067): Firing \$.ready on
    document.readyState === 'interactive' too
-   [\#10895](http://bugs.jquery.com/ticket/10895): The doScrollCheck ie
    hack in bindReady degrades ie7 performance for no reason whatsoever
-   [\#11101](http://bugs.jquery.com/ticket/11101): Deprecate
    "exclusive" events option from trigger method
-   [\#11315](http://bugs.jquery.com/ticket/11315): Problems with
    delegate() and :first in nested elements with equivalent classes
-   [\#11328](http://bugs.jquery.com/ticket/11328): Ctrl key doesn't set
    event.metaKey to true on Windows
-   [\#11382](http://bugs.jquery.com/ticket/11382): Mouseenter doesn't
    fire on a disabled input element
-   [\#11500](http://bugs.jquery.com/ticket/11500): Bug : "change" event
    handler not executed when triggered manually on IE7 & IE8
-   [\#11621](http://bugs.jquery.com/ticket/11621): Triggering a event
    on document doesn't bubble to window
-   [\#11718](http://bugs.jquery.com/ticket/11718): Deprecate .data()
    events
-   [\#11719](http://bugs.jquery.com/ticket/11719): Deprecate
    .bind("ready") event
-   [\#11731](http://bugs.jquery.com/ticket/11731): Deprecate "hover"
    pseudo-event
-   [\#11733](http://bugs.jquery.com/ticket/11733): Deprecate .load(),
    .unload(), and .error() methods
-   [\#11764](http://bugs.jquery.com/ticket/11764): Allow delegated
    non-native events on disabled elements
-   [\#11786](http://bugs.jquery.com/ticket/11786): Deprecate .toggle(
    handler, handler, ... ) signature

### Manipulation

-   [\#8894](http://bugs.jquery.com/ticket/8894): appendTo() and alike
    methods called after clone() returns incorrect jQuery set in IE
-   [\#10324](http://bugs.jquery.com/ticket/10324): Clone does not copy
    innerHTML of object element in IE9
-   [\#11231](http://bugs.jquery.com/ticket/11231): Append, Prepend,
    After, Before should accept an array as first argument
-   [\#11338](http://bugs.jquery.com/ticket/11338): Inconsistent
    behavior with .replaceWith() and disconnected nodes.
-   [\#11528](http://bugs.jquery.com/ticket/11528): ie8 serialization
    bug with .html() also hitting html5 tags
-   [\#11566](http://bugs.jquery.com/ticket/11566): node.append et al.
    does not work when node is a DocumentFragment
-   [\#11617](http://bugs.jquery.com/ticket/11617): Define a
    \$.parseHTML method for creating HTML fragments
-   [\#11809](http://bugs.jquery.com/ticket/11809): Memory leak in
    .text(val) setter?
-   [\#11898](http://bugs.jquery.com/ticket/11898): prevAll() with a
    complicated :not() selector returns results in wrong order
-   [\#12132](http://bugs.jquery.com/ticket/12132): IE10 bug when
    cloning an object element without a parentNode

### Offset

-   [\#10996](http://bugs.jquery.com/ticket/10996): Simplify offset()
-   [\#11823](http://bugs.jquery.com/ticket/11823): Remove
    webkitConvertPointFromNodeToPage

### Selector

-   [\#3778](http://bugs.jquery.com/ticket/3778): selector matching
    issues
-   [\#5568](http://bugs.jquery.com/ticket/5568): Selectors behave
    differently with comments tags on FF/IE
-   [\#7596](http://bugs.jquery.com/ticket/7596): xpath selector
    attribute name with brackets [] fails
-   [\#8473](http://bugs.jquery.com/ticket/8473): In IE9rc \*[tabIndex]
    select all elements without tabindex also
-   [\#8906](http://bugs.jquery.com/ticket/8906):
    .(prevAll('span:has(input,select,textarea)')
-   [\#9400](http://bugs.jquery.com/ticket/9400): Deprecate :text,
    :radio, :checkbox, etc. selector extensions
-   [\#9810](http://bugs.jquery.com/ticket/9810): Rewrite Positional
    Selector Logic
-   [\#10003](http://bugs.jquery.com/ticket/10003): Regression/BC break
    from \#6963
-   [\#10074](http://bugs.jquery.com/ticket/10074): Chaining two []
    selector with :first not working
-   [\#10499](http://bugs.jquery.com/ticket/10499): :nth-child() inside
    :has() treated as if outside it
-   [\#10570](http://bugs.jquery.com/ticket/10570): :text selector
    throws an error in IE7 when there is a cross domain iframe on the
    page
-   [\#10697](http://bugs.jquery.com/ticket/10697): Sizzle revamp
-   [\#10799](http://bugs.jquery.com/ticket/10799): Inconsistent results
    with [name="name"] selectors (also breaks .has)

