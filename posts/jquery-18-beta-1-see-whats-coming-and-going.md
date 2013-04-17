Hello fellow jQuery users! It's been a while since you've heard from us,
but we haven't been asleep. The jQuery Core Team has been heads-down
working on jQuery 1.8, and our first beta release is now available! You
can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.8b1.js](http://code.jquery.com/jquery-1.8b1.js)

Give it a try on your current jQuery code and let us know how it works
for you. If you experience issues, please [file a
bug](http://bugs.jquery.com/), include a test case, and be sure to
mention that you're testing against jQuery 1.8 Beta 1.

There will be even more exciting jQuery news at the [jQuery
Conference](http://events.jquery.org) in San Francisco later this month,
with blog posts to follow. jQuery is now powering about one-half of all
the major web sites on the Internet; that's a great success, but we're
not standing still. Web browsers and the devices they run on have
undergone an incredible metamorphosis in the past six years. The process
of web development is evolving to accommodate the changes that are
happening. In response, jQuery continues to evolve as well. Part of that
evolution is not just knowing what to add, but what to take away.
jQuery's plugin architecture makes it easy for developers to extend the
functionality that jQuery Core offers when it makes sense for their own
needs. For that reason, the bar has been set pretty high for additions
to Core. We don't want to create size, complexity, or performance
penalties for people who don't need specific features. Similarly, we
have enough experience with the way that people use jQuery to know some
features that originally seemed like a good idea turned out to be a
not-so-good idea. Rather than carry these around forever, we want to
remove them eventually. In fact, we want to make it easier to create a
version of jQuery that excludes things you don't need or want,
especially for mobile environments where space can be precious. With
that in mind, here are some changes we are planning for jQuery 1.8 that
will make it a better foundation for all HTML-based web pages and
applications, regardless of their platform:

Modularity
----------

As of jQuery 1.8, you can build a custom version of jQuery that excludes
one or more modules if you do not need their functionality. This
capability is made easy by our new build system based on Ben Alman's
awesome [grunt](http://gruntjs.com) tool. To build your own custom
version, set up a copy of the jQuery core repo from Github and use the
grunt command line options to exclude modules. For more information, see
the [README
file](https://github.com/jquery/jquery/blob/master/README.md). The
modules you can currently exclude are ajax, css, dimensions, effects,
and offset. For example, if your application exclusively uses
stylesheets and CSS animations via classes to control the visibility and
size of items on the page, you could build a version without the css,
dimensions, effects, and offset modules. If you didn't need any of the
optional modules, your custom build of jQuery would be about 21KB
minified and gzipped. Don't worry though, building your own jQuery is
completely optional. jQuery has always been, and will continue to be,
distributed as a single file in both compressed and uncompressed form
and available on CDNs. We still expect that to be the way most jQuery
developers go, because it's simple and painless. For example, when you
include a jQuery plugin that you didn't write, using the full jQuery
ensures you won't be bitten by some dependency lurking inside the
plugin.

Vendor-Prefixed CSS Properties
------------------------------

The W3C had its heart in the right place when it came up with the idea
to use vendor prefixes for CSS features that were not yet standardized,
but it hasn't resulted in a fairy-tale ending. Web developers are faced
with the nightmare of including *all* the vendor-prefixed property names
in stylesheets. jQuery 1.8 eases the pain a bit. We automatically take
the non-prefixed property name and generate the prefix that is
appropriate for the current browser, so you don't have to. For example,
on Chrome the jQuery call
`$("#myscroll").css("marquee-direction", "backwards")` will set the CSS
to `-webkit-marquee-direction: backwards`.

Animation (Effects)
-------------------

Our code for animation had become a tangled mess over the past few
years, and with 1.8 we hope we've brought the beast under control. It's
more than just a cleanup, though; there are several extension points
that make it easier to add or modify animations. At the moment there is
only [preliminary
documentation](https://gist.github.com/54829d408993526fe475) for the new
features, but in this first beta our primary focus will be on ensuring
that any existing animation code works properly. Browsers are doing a
much better job providing efficient animations today, particularly with
CSS transitions. Yet there are still plenty of users who don't have a
browser capable of doing CSS-based animations. With jQuery 1.8 you get
the best of both worlds. If you need to support older browsers without
built-in animations, the new `$.Animation` provides a solid foundation
and fixes many bugs from previous versions. If you need to target only
modern browsers and their natively supported animations, you can do that
and exclude the animation module entirely.

Sizzle CSS Selector Engine
--------------------------

jQuery’s selector engine has undergone a major rewrite in 1.8. The most
notable benefit of this rewrite is a widespread [performance
improvement](http://jsperf.com/jquery-id-init/4) of selector matching as
well as improved shortcuts for the most common selectors. Additionally,
Sizzle handles many more edge cases and bugs, including improved support
for multiple combinators (\~ \> +) and better detection of browser bugs
in `querySelectorAll`. See the bugs list below in the selector module
for a complete list.

XSS Protection
--------------

By design, the `$()` method can create HTML elements, and will run
scripts if it is passed a `<script>` tag with inline script or a `src`
attribute. Developers have sometimes forgotten this, passing strings to
jQuery that come from untrusted sources such as the URL or user input.
In these cases, it is possible for someone to inject a script into the
page that can steal cookies or compromise the page in some way. These
cross-site-scripting (XSS) attacks are common on many sites whether they
use jQuery or not, but we want to ensure jQuery does not contribute to
the problem. In jQuery 1.9 (the NEXT version following 1.8), we're
tightening down the "looks like HTML" rule for the `$()` method. A
string will only be considered HTML if the first character is a
less-than sign, otherwise it will be assumed to be a CSS selector. As
further protection against the inadvertent injection of scripts, jQuery
1.8 introduces a new method: `$.parseHTML`. It lets you specify strings
as HTML and know that they will be parsed as HTML, something that `$()`
cannot do since it also interprets strings as selectors. It also
provides a way to parse HTML into a DOM fragment and control the
execution of any scripts the HTML it may contain. This is particularly
important in JavaScript environments controlled by [Content Security
Policy](http://www.w3.org/TR/CSP/) (CSP), since injected scripts may
cause security warnings or exceptions. For anything more than the simple
case of creating single elements (e.g., `$("<p/>")`), and particularly
for cases where strings are built from external data, we strongly
recommend using `$.parseHTML`. As of jQuery 1.9, some HTML strings will
no longer be recognized by `$()` as a result of these stricter rules.

Spring Cleaning
---------------

In jQuery 1.8 we'll also be deprecating and removing "trip hazards":
APIs and features that are inefficient, ineffective or inadvisable. We
realize that there will be existing jQuery code that still requires
these features. To provide a low-hassle future upgrade path, we'll be
providing many of the deprecated items in a compatibility plugin after
they are removed. You can follow the compatibility plugin as it is
developed on its [GitHub
repo](http://github.com/jquery/jquery-compat-1.9/). Tickets below that
begin with "Deprecate" or "Remove" tell the whole story of what is
changed, but here are a few changes of particular note: **`$.browser`:**
Ever since jQuery 1.4, we've been evangelizing that browser detection
via the user agent string is a bad idea. Yet we've been an enabler of
bad practice by continuing to offer `$.browser`. As of jQuery 1.9 we'll
remove it entirely and you'll need to use the 1.9 compat plugin. If your
code isn't weaned off browser detection yet, check out [Modernizr]() for
a very thorough set of feature detections you can use instead. And of
course, you're welcome to read the tea leaves in the
`navigator.userAgent` string directly, there's nothing stopping you but
your conscience. **`$.sub`:** This method was introduced in jQuery 1.5,
but hasn't proved to be useful or robust enough to justify it staying in
core. It will move to a compatibility plugin in jQuery 1.9. **Global
ajax events:** Events such as `ajaxStart` fired by `$.ajax` can
currently be attached to any element--even to elements that are not in a
document at all! This creates an inefficient special case, so we are
deprecating that behavior in 1.8. Ajax events should be attached only on
`document` as of 1.9.

And Much Much More...
---------------------

There are many other changes in 1.8, perhaps the easiest way to see what
we've been up to is to look at the list of issues that are being fixed,
which includes both features and bug fixes. Here is a snapshot of 1.8 as
it stands today, but it's not set in stone. We welcome your feedback
about specific issues or the direction of jQuery in general!

jQuery 1.8 Beta 1 Change Log
----------------------------

The current change log of the 1.8 Beta 1 release.

### Ajax

-   [\#8205](http://bugs.jquery.com/ticket/8205): JSONP random result is
    causing memory leak in IE8
-   [\#8653](http://bugs.jquery.com/ticket/8653): jQuery.param outputs
    "null" and "undefined" in the query string
-   [\#10285](http://bugs.jquery.com/ticket/10285): evalScript
    rcleanScript replacement fails in IE8
-   [\#10524](http://bugs.jquery.com/ticket/10524): jQuery.fn.load does
    not merge data parameter with jQuery.ajaxSetup
-   [\#10944](http://bugs.jquery.com/ticket/10944): \$.ajax does not
    always return an object implementing the Promise interface
-   [\#11013](http://bugs.jquery.com/ticket/11013): Deprecate/remove
    async option from \$.ajax
-   [\#11402](http://bugs.jquery.com/ticket/11402): evalScript function
    fails with error error 80020101 in IE
-   [\#11743](http://bugs.jquery.com/ticket/11743): jQuery silently
    ignores errors during script tag ajax request in \$.appendTo()
-   [\#11778](http://bugs.jquery.com/ticket/11778): Cached XHR requests
    should still resolve asynchronously

### Attributes

-   [\#11153](http://bugs.jquery.com/ticket/11153): jQuery 1.7 Strips
    Carriage Returns in IE 8
-   [\#11212](http://bugs.jquery.com/ticket/11212): Sizzle.getText
    converts unbreakable space into whitespace on IE

### Build

-   [\#11767](http://bugs.jquery.com/ticket/11767): Support custom build
    without effects
-   [\#11789](http://bugs.jquery.com/ticket/11789): Update README to
    describe grunt build system
-   [\#11856](http://bugs.jquery.com/ticket/11856): modularize
    dimensions
-   [\#11857](http://bugs.jquery.com/ticket/11857): modularize css
-   [\#11865](http://bugs.jquery.com/ticket/11865): modularize offset

### Core

-   [\#10657](http://bugs.jquery.com/ticket/10657): Deprecate/remove
    jQuery\#size() in favor of jQuery\#length
-   [\#11290](http://bugs.jquery.com/ticket/11290): selector interpreted
    as HTML
-   [\#11470](http://bugs.jquery.com/ticket/11470): Adding a builtin
    readyP promise

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

### Data

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
-   [\#9505](http://bugs.jquery.com/ticket/9505): animate() issue when
    mixing percentages and pixels in WebKit
-   [\#11635](http://bugs.jquery.com/ticket/11635): Explicit
    overflow:auto is overridden by inline overflow:hidden during
    animation
-   [\#11755](http://bugs.jquery.com/ticket/11755): animate and it
    aliases should not use :hidden selector
-   [\#11854](http://bugs.jquery.com/ticket/11854): percentage
    animations jump to end

### Event

-   [\#8545](http://bugs.jquery.com/ticket/8545): Leak with events in IE
-   [\#10067](http://bugs.jquery.com/ticket/10067): Firing \$.ready on
    document.readyState === 'interactive' too
-   [\#11101](http://bugs.jquery.com/ticket/11101): Deprecate
    "exclusive" events option from trigger method
-   [\#11328](http://bugs.jquery.com/ticket/11328): Ctrl key doesn't set
    event.metaKey to true on Windows
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
-   [\#11566](http://bugs.jquery.com/ticket/11566): node.append et al.
    does not work when node is a DocumentFragment
-   [\#11617](http://bugs.jquery.com/ticket/11617): Define a
    \$.parseHTML method for creating HTML fragments

### Offset

-   [\#10996](http://bugs.jquery.com/ticket/10996): Simplify offset()
-   [\#11823](http://bugs.jquery.com/ticket/11823): Remove
    webkitConvertPointFromNodeToPage

### Selector

-   [\#3778](http://bugs.jquery.com/ticket/3778): selector matching
    issues
-   [\#5568](http://bugs.jquery.com/ticket/5568): Selectors behave
    differently with comments tags on FF/IE
-   [\#8473](http://bugs.jquery.com/ticket/8473): In IE9rc \*[tabIndex]
    select all elements without tabindex also
-   [\#9400](http://bugs.jquery.com/ticket/9400): Deprecate :text,
    :radio, :checkbox, etc. selector extensions
-   [\#10003](http://bugs.jquery.com/ticket/10003): Regression/BC break
    from \#6963
-   [\#10074](http://bugs.jquery.com/ticket/10074): Chaining two []
    selector with :first not working
-   [\#10570](http://bugs.jquery.com/ticket/10570): :text selector
    throws an error in IE7 when there is a cross domain iframe on the
    page
-   [\#10697](http://bugs.jquery.com/ticket/10697): Sizzle revamp
-   [\#10809](http://bugs.jquery.com/ticket/10809): incorrect test using
    ".activeElement" in the :focus pseudo-class resolver
-   [\#11109](http://bugs.jquery.com/ticket/11109): Sizzle:
    Expr.relative truncates prematurely
-   [\#11814](http://bugs.jquery.com/ticket/11814): Sizzle's
    element-rooted QSA strategy (i.e. attaching a temporary id) does not
    account for comma and other other selector divisions
-   [\#11826](http://bugs.jquery.com/ticket/11826): Explore a parsed
    caching system for matchesSelector within Sizzle

### Support

-   [\#9385](http://bugs.jquery.com/ticket/9385): Deprecate
    jQuery.browser
-   [\#11439](http://bugs.jquery.com/ticket/11439):
    jQuery.support.parentNode used, but not defined any more.
-   [\#11721](http://bugs.jquery.com/ticket/11721): deprecate and remove
    internal uses of jQuery.support.boxModel
-   [\#11766](http://bugs.jquery.com/ticket/11766): Move jQuery.support
    to "unstable" status

### Traversing

-   [\#9800](http://bugs.jquery.com/ticket/9800): New method: .addBack
    (supersedes .andSelf)
-   [\#11543](http://bugs.jquery.com/ticket/11543): .has doesn't work on
    detached elements
-   [\#11706](http://bugs.jquery.com/ticket/11706): \`.has()\` fails on
    document fragments
-   [\#11738](http://bugs.jquery.com/ticket/11738): Remove
    .closest(Array) returning Array

### Unfiled

-   [\#11325](http://bugs.jquery.com/ticket/11325): Improve
    domManip/buildFragment/clean
-   [\#11435](http://bugs.jquery.com/ticket/11435): Obsolete test code
    to remove toJSON from .data's return value
-   [\#11777](http://bugs.jquery.com/ticket/11777): Add jQuery Core
    support for EditorConfig file

