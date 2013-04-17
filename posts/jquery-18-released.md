August just got a little hotter, because jQuery 1.8 final code is here!
You can pick up the code from jQuery's CDN:

-   [http://code.jquery.com/jquery-1.8.0.min.js](http://code.jquery.com/jquery-1.8.0.min.js)
    (compressed and minified, for production)
-   [http://code.jquery.com/jquery-1.8.0.js](http://code.jquery.com/jquery-1.8.0.js)
    (uncompressed, for debugging)

As usual, the Google and Microsoft CDNs will also have the file soon.
Please don't ask us about when they'll be there, we don't know and we
don't control those CDNs! Use our copies directly from the jQuery CDN
above if you're just itching to get started. It's the same bits. We
don't expect to get any bug reports on this release, since there have
been several betas and a release candidate that everyone has had plenty
of opportunities to thoroughly test. Ha ha, that joke never gets old. We
know that far too many of you wait for a final release before even
trying it with your code. So now there is really no reason to wait, and
you can find out if there are any bugs you could have reported earlier.
If you do find a bug, please create a test case on
[jsFiddle](http://jsfiddle.net) or [jsbin](http://jsbin.com) and file a
bug on our [bug tracker](http://bugs.jquery.com). If you're not sure
whether you've found a bug, ask on our [forum](http://forum.jquery.com).
jQuery core 1.8.0 is compatible with the latest versions of jQuery UI
(1.8.22), and jQuery Mobile (1.1.1). Be sure to update those if you're
reporting bugs on pages that involve them.

A Whirlwind Tour of jQuery 1.8
------------------------------

Let's just recap the big changes in this release: **Sizzle
re-architected:** jQuery's selector engine is faster than ever, thanks
to a rewrite (well, really *two* rewrites) by Timmy Willison. Sure, most
browsers have `querySelectorAll` nowadays, but nearly every
implementation falls short in one way or another, creating a road full
of cross-browser potholes. Sizzle smoothes that road for you. Plus, you
may want those useful jQuery selector extensions like `:has()` with a
complex selector or `:contains()`. Oh yeah, and there's still IE6/7
support. **Animations re-imagined:** Over time, the animation code in
jQuery had become kind of messy. Corey Frang took a head-first dive into
that swamp and managed to remove most of the alligators, um, bugs. Most
of the changes are under the covers, so existing animations should just
work (and work better). But there are also some awesome additions to
make animations more general and extendable. One notable and very cool
feature is the use of the progress callbacks in Promises. We're still
working on detailed documentation, but we do have [a
draft](https://gist.github.com/54829d408993526fe475). Also, here's an
example of the new code in action:
[http://jsbin.com/odocid/1/edit](http://jsbin.com/odocid/1/edit).
**Automatic CSS prefixing:** When you use a CSS property, in either
`.css()` or `.animate()`, we'll use the correct prefixed property (when
appropriate) for that browser. For example, take
`.css("user-select", "none")`; in Chrome/Safari we'll set the value as
`"-webkit-user-select"`, Firefox will use `"-moz-user-select"`, and IE10
will use `"-ms-user-select"`. **More flexibility with \$(html, props):**
In jQuery 1.8, you can use any jQuery method or plugin in the object
passed to `$(html, props)`. Before, you could only use a short list of
method names, and there was no documented way to add to the list. Now
there doesn't need to be a list at all! Be aware, however, that this can
cause the behavior of your code to change if plugins are added later
that have the same names as HTML attributes. **More than 160 bugs
closed:** The Sizzle and animation rewrites in particular provided the
impetus to fix several long-standing bugs--some of which have been
around for two or three years. Mike Sherov tackled most of the open CSS
and positioning issues, getting us down to near-zero bugs there. We also
haven't given up and are still pounding away to eliminate annoying
differences between IE 6/7/8 and modern browsers, so you don't have to
deal with them. **Smaller code size:** Despite all the code cleanup, new
features, and bug fixes, the gzipped file size of jQuery 1.8 is actually
a few hundred bytes smaller than jQuery 1.7.2. Size reduction wasn't our
primary goal in this version, but we felt it was important to hold the
line on code growth, and we definitely achieved that. Many thanks to
Richard Gibson for leading the code-crunching charge across the entire
project. **Modularity:** If you know your project's jQuery dependencies
well, you can use the new [`grunt`](http://gruntjs.com)-based build
system to strip out parts of jQuery that you know you don't need. What
we've done here for 1.8 is really just a beginning, you'll see even more
flexibility as we move to later versions. The full changelog is
available below, in case you're wondering whether your favorite bug was
squashed.

What's Been Removed
-------------------

The short answer is "very little". We wanted to provide a generous
notice period for deprecated features that will be removed in 1.9, to
give people time to adapt their code. Several of the things removed in
1.8 were undocumented internals that some people have cleverly reverse
engineered, but it's always risky to use undocumented features. Here are
the items removed: **\$(element).data("events")**: In version 1.6,
jQuery separated its internal data from the user's data to prevent name
collisions. However, some people were using the internal undocumented
"events" data structure so we made it possible to still retrieve that
via `.data()`. This is now removed in 1.8, but you can still get to the
events data for debugging purposes via `$._data(element, "events")`.
Note that this is not a supported public interface; the actual data
structures may change incompatibly from version to version.
**Deferred.isResolved() and Deferred.isRejected()**: Calling N-1 boolean
methods to get the state of an N-state variable was getting a bit silly,
so we added [`Deferred.state()`](http://api.jquery.com/deferred.state/)
in jQuery 1.7 to tell you the state in a single call. So, these two
older methods aren't needed anymore. It's much more convenient for
debugging scenarios where you often want to know the state of a Deferred
as a string. **\$(element).closest(Array) returning Array**: This was a
[strange signature](http://api.jquery.com/closest/#closest2) of the
`.closest()` method intended for use by the old `.live()`, but not used
by any other code as far as we know. Normal uses of `.closest()`
returning a jQuery object are not affected by this signature being
removed. **\$.curCSS**: This method was simply an alias for
`jQuery.css()` from jQuery 1.3 onward. Although it has never been part
of the documented API, some external code has been known to use it,
perhaps thinking it was "more efficient." Now it's "more gone."
**\$.attrFn**: Yet another undocumented item, used to define which
methods could be used in conjunction with `$(html, props)` signature.
Although it serves no functional purpose in jQuery 1.8, we are leaving
an *empty* `$.attrFn` in jQuery to prevent code that uses it from
throwing errors. **Fair Warning: This will be removed entirely in jQuery
1.9, so update your code!**

Where Credit's Due
------------------

This release couldn't have happened without the hard work of the
talented jQuery Core team: Julian Aubourg (jaubourg), Corey Frang
(gnarf), Richard Gibson (gibson042), Mike Sherov (mikesherov), Rick
Waldron (rwaldron), and Timmy Willison (timmywil). Special recognition
goes to these jQuery team and community members who supported the Core
team with patch contributions during the jQuery 1.8 development cycle:
Andy Monat, Robert Katic, Joaoh Bruni, Sindre Sorhus, Oleg Gaidarenko,
Yehuda Katz, Timo Tijhof, Dominik D. Geyer, Scott González, Jörn
Zaefferer, Matt Farmer, Trey Hunner, Jason Moon, Ben Alman, Jeffery To,
Kris Borchers, Daniel Herman, Vladimir Zhuravlev, Jacob Thornton, Chad
Killingsworth, Nowres Rafid, David Benjamin, Uri Gilad, Chris Faulkner,
Elijah Manor, and Daniel Chatfield. We're also very thankful to those of
you who took the time to report bugs; we can't possibly fix a bug unless
we know it exists. If you're looking for an easy way to contribute to
jQuery, get to know the [bug tracker](http://bugs.jquery.com/) and help
us by creating reduced test cases that clearly demonstrate bugs. Once we
can reproduce a problem, a solution usually isn't too far away. Those
test cases become the foundation for a unit test that can prevent the
problem from happening when we change code in later revisions.

jQuery 1.8 Change Log
---------------------

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
-   [\#12059](http://bugs.jquery.com/ticket/12059): \`grunt custom\`
    should minify - also should add excluded modules to headers
-   [\#12158](http://bugs.jquery.com/ticket/12158): jQuery 1.8rc1 does
    not work with YUICompressor 1.4.7

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
-   [\#10394](http://bugs.jquery.com/ticket/10394):
    jQuery.cssHooks.opacity throws exception on non-IE browsers
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
-   [\#11435](http://bugs.jquery.com/ticket/11435): Obsolete test code
    to remove toJSON from .data's return value

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
-   [\#12138](http://bugs.jquery.com/ticket/12138): fadeOut doesn't work
    in Chrome on basic SVG elements
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
-   [\#12203](http://bugs.jquery.com/ticket/12203): .undelegate() with
    no arguments unbinds all handlers from the parent element

### Manipulation

-   [\#8894](http://bugs.jquery.com/ticket/8894): appendTo() and alike
    methods called after clone() returns incorrect jQuery set in IE
-   [\#10324](http://bugs.jquery.com/ticket/10324): Clone does not copy
    innerHTML of object element in IE9
-   [\#11231](http://bugs.jquery.com/ticket/11231): Append, Prepend,
    After, Before should accept an array as first argument
-   [\#11325](http://bugs.jquery.com/ticket/11325): Improve
    domManip/buildFragment/clean
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
-   [\#10809](http://bugs.jquery.com/ticket/10809): incorrect test using
    ".activeElement" in the :focus pseudo-class resolver
-   [\#11109](http://bugs.jquery.com/ticket/11109): Sizzle:
    Expr.relative truncates prematurely
-   [\#11120](http://bugs.jquery.com/ticket/11120): Tabs in some
    selectors break in IE7
-   [\#11814](http://bugs.jquery.com/ticket/11814): Sizzle's
    element-rooted QSA strategy (i.e. attaching a temporary id) does not
    account for comma and other other selector divisions
-   [\#11826](http://bugs.jquery.com/ticket/11826): Explore a parsed
    caching system for matchesSelector within Sizzle
-   [\#11902](http://bugs.jquery.com/ticket/11902): :not + :contains
    selectors
-   [\#11918](http://bugs.jquery.com/ticket/11918): :eq selector problem
    when using tag name with ':'
-   [\#11959](http://bugs.jquery.com/ticket/11959): Add support for
    :active selector
-   [\#11961](http://bugs.jquery.com/ticket/11961): "Maximum call stack
    size exceeded" when using jQuery\#is
-   [\#11966](http://bugs.jquery.com/ticket/11966): descendant selector
-   [\#11969](http://bugs.jquery.com/ticket/11969): Missing null check
    when gathering siblings
-   [\#12054](http://bugs.jquery.com/ticket/12054): Uncaught TypeError:
    Object \#\<HTMLDocument\> has no method 'getAttribute'
-   [\#12057](http://bugs.jquery.com/ticket/12057): Sizzle Regression
-   [\#12082](http://bugs.jquery.com/ticket/12082): .find() POS selector
    no longer working in 1.8b2
-   [\#12153](http://bugs.jquery.com/ticket/12153): Error occurs in the
    selector

### Support

-   [\#9385](http://bugs.jquery.com/ticket/9385): Deprecate
    jQuery.browser
-   [\#11163](http://bugs.jquery.com/ticket/11163):
    jQuery.support.checkClone always true
-   [\#11249](http://bugs.jquery.com/ticket/11249): CSP error in Chrome
    18 when loading jQuery 1.7.1
-   [\#11439](http://bugs.jquery.com/ticket/11439):
    jQuery.support.parentNode used, but not defined any more.
-   [\#11721](http://bugs.jquery.com/ticket/11721): deprecate and remove
    internal uses of jQuery.support.boxModel
-   [\#11757](http://bugs.jquery.com/ticket/11757): IE 8 memory
    accumulation in iframes with jQuery 1.7.2
-   [\#11766](http://bugs.jquery.com/ticket/11766): Move jQuery.support
    to "unstable" status

### Traversing

-   [\#9800](http://bugs.jquery.com/ticket/9800): New method: .addBack
    (supersedes .andSelf)
-   [\#11539](http://bugs.jquery.com/ticket/11539): All version of
    jQuery don't support .has() on \$([text
    Element].parentNode).has?(other\_element)
-   [\#11543](http://bugs.jquery.com/ticket/11543): .has doesn't work on
    detached elements
-   [\#11706](http://bugs.jquery.com/ticket/11706): \`.has()\` fails on
    document fragments
-   [\#11738](http://bugs.jquery.com/ticket/11738): Remove
    .closest(Array) returning Array

