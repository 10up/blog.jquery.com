The next beta of jQuery 2.0 has arrived! This beta has several changes
and tweaks based on the feedback we received from those of you who
generously tested the first beta. We really need you to test this
version as well and let us know what still needs to be done. We believe
this version is very stable and ready for you to try; don't wait until
the final release and then find out your code doesn't run with it.
Remember that jQuery 2.0 *will not run* on IE 6, 7, or 8; we're saving
that duty for jQuery 1.9. We fully expect that most Internet web sites
may continue to use jQuery 1.x for quite a while, as long as older
versions of IE still comprise a large proportion of web surfers. And so
the jQuery team will also continue to support both the jQuery 1.x and
2.x lines. Don't feel like you're missing something or falling behind by
using 1.9 on your web site, since the APIs for 1.9 and 2.0 are the same.
If you'd like to try jQuery 2.0 on web sites where you still need to
support IE 6, 7, and 8, you can use conditional comments. All browsers
except old IE will get the second script and ignore the first:

    <!--[if lt IE 9]>
        <script src="jquery-1.9.1.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script src="jquery-2.0.0b2.js"></script>
    <!--<![endif]-->

There are lots of other environments where jQuery 2.0 should fit in very
well. Here are a few suggestions:

-   Google Chrome plugins
-   Mozilla XUL apps and Firefox extensions
-   Firefox OS apps
-   Chrome OS apps
-   Windows 8 Store ("Modern/Metro UI") apps
-   BlackBerry 10 WebWorks apps
-   PhoneGap/Cordova apps
-   Apple UIWebView class
-   Microsoft WebBrowser control
-   Cheerio or jsdom with node.js
-   Intranet applications

On the node.js front, the jQuery team now owns the "jquery" and "jQuery"
names in npm and will soon be shipping 2.0 releases there. You can get
this latest beta from the jQuery CDN:
[http://code.jquery.com/jquery-2.0.0b2.js](http://code.jquery.com/jquery-2.0.0b2.js)
To run pre-1.9-era code with jQuery 2.0, you can also use the [jQuery
Migrate plugin](https://github.com/jquery/jquery-migrate/#readme) to
restore deprecated features from those older versions and/or diagnose
compatibility issues. We strongly recommend that you do use Migrate for
older code, it will save a lot of time and trouble in debugging.

What's New
----------

**Lots of bug fixes:** All the relevant fixes from jQuery 1.9.1 and
1.9.2pre have been incorporated into jQuery 2.0 beta 2. We sadly had to
back out some optimizations that aren't supported by older versions of
WebKit such as Android 2.3, but most of those didn't have a significant
size impact. Still, we plan to bring them back as soon as we can! To
help us out, anytime you see an old Android phone you can "accidentally"
whack it with a hammer. **New .data() implementation:** This new code is
a complete rewrite by Rick Waldron. It's smaller, simpler, and much more
maintainable than the old code. **Increased modularity in custom
builds:** You can now exclude all the redundant event shorthands such as
`.mouseover(...)` if you're willing to use `.on("mouseover"...)`
instead. **Minimal selector engine:** Richard Gibson created a small
wrapper around the browser's native `querySelectorAll` and
`matchesSelector` APIs that can be used as a replacement for the
full-fledged Sizzle selector engine. Be aware, however, that there are
[major differences](https://github.com/jquery/jquery/pull/1180) in the
supported selectors and semantics. This minimal engine does not support
jQuery selector extensions like `:radio` or `:first` for example.

Custom Builds
-------------

We'd love for you to try out the custom build system which is based on
[grunt](http://gruntjs.com). The
[README](https://github.com/jquery/jquery#how-to-build-your-own-jquery)
gives more detail on making a custom build. As of beta 2 you can replace
Sizzle with a simple selector engine and exclude css, event aliases,
animations, offset, and deprecated functionality such as `.andSelf()`
that has not yet been removed. In addition you can exclude a subset of
the script, JSONP, or XMLHTTPRequest transports. That's right, reject
any module in our jQuery reality and substitute your own. Here is an
example of what you can save with modular builds. Let's say you don't
need the css, offset, dimensions, or deprecated modules and plan to do
animations completely via CSS transitions and classes. In addition you
only use JSONP via `$.ajax()`. You'll use `.on()` for event management
and keep your selectors simple so that the minimal selector engine can
do the job. The build command to do that is:

    grunt custom:-sizzle,-css,-event-alias,-effects,-offset,-dimensions,-deprecated,-ajax/xhr

The resulting file from that custom build is just 17,530 bytes when
transferred by gzip, which is 40 percent smaller than the full 2.0 build
at 29,387 bytes gzipped. For comparison, the current 1.9 branch is
32,770 bytes gzipped. We still think that the vast majority of jQuery
users are best served by the simplest option: Use the full version of
jQuery, served from a CDN or your local server. Most jQuery plugins are
not written in a way that would allow you to use a subset of jQuery core
functionality -- after all, they never anticipated any of it would be
missing! But for situations where it's worth the time to determine those
dependencies, jQuery's current level of modularity offers awesome
flexibility. Many thanks to the people who contributed fixes to this
release: Adam Coulombe, Andrew Plummer, Danil Somsikov, Dmitry Gusev,
Isaac Schlueter, James Burke, Jean Boussier, Julian Aubourg, Karl
Sieburg, Mark Raddatz, Mike Sherov, Nguyen Phuc Lam, Oleg Gaidarenko,
Pascal Borelli, Richard Gibson, Rick Waldron, Ryunosuke Sato, Timmy
Willison, and Timo Tijhof. Special recognition to Scott González for his
minimalist work simply titled,
"[Whitespace](https://github.com/jquery/jquery/commit/b55bfb140f4ccf871a38ec52f21f7ca698515e52)".

Changelog
---------

Ajax
----

-   [\#13388: Ajax request not returning
    responseXML](http://bugs.jquery.com/ticket/13388)
-   [\#13276: In IE 9/10 \$.parseXML() returning document object instead
    of XMLDOMDocument](http://bugs.jquery.com/ticket/13276)
-   [\#13292: \$.ajax with 1.9.0 doesn't call anymore success function
    in case of 204](http://bugs.jquery.com/ticket/13292)
-   [\#13306: File input added to serialized forms caused a change in
    behavior and only halfway follows
    spec](http://bugs.jquery.com/ticket/13306)

Build
-----

-   [\#12656: Make event shorthands an excludable
    module](http://bugs.jquery.com/ticket/12656)
-   [\#13316: Check against jquery.min.js with
    TestSwarm](http://bugs.jquery.com/ticket/13316)
-   [\#13335: "use strict"; break asp.net ajax postacks in
    FF](http://bugs.jquery.com/ticket/13335)

Core
----

-   [\#13356: Consistently clean up after .ready()
    handler](http://bugs.jquery.com/ticket/13356)

Css
---

-   [\#13310: hide() and fadein() corrupt the css display
    value](http://bugs.jquery.com/ticket/13310)

Deferred
--------

-   [\#13150: Be able to determine if \$.Callback() has
    functions](http://bugs.jquery.com/ticket/13150)

Effects
-------

-   [\#12846: overflow:hidden is not removed when .stop() is
    called](http://bugs.jquery.com/ticket/12846)
-   [\#13183: Wrong animation initial value calculation
    (1.9.0rc1)](http://bugs.jquery.com/ticket/13183)

Event
-----

-   [\#13143: e.target can be a text node on
    mousewheel](http://bugs.jquery.com/ticket/13143)
-   [\#13360: Creating String.prototype.namespace can cause an exception
    in jQuery.Event](http://bugs.jquery.com/ticket/13360)

Manipulation
------------

-   [\#13232: In 2.0beta1, using html() function on a tbody selector
    yields insertion of new tbody](http://bugs.jquery.com/ticket/13232)
-   [\#13233: Unexpected behavior when iterating over and manipulating
    detached nodes in jquery 1.9](http://bugs.jquery.com/ticket/13233)
-   [\#13282: QtWebKit -- TypeError: '[object Object]' is not a valid
    argument for 'Function.prototype.apply' (evaluating
    'elem.nodeType')](http://bugs.jquery.com/ticket/13282)

Selector
--------

-   [\#13434: Create querySelectorAll/matchesSelector selector
    option](http://bugs.jquery.com/ticket/13434)
-   [\#13331: jQuery.fn.add returns incorrect order in Chrome and
    Safari](http://bugs.jquery.com/ticket/13331)
-   [\#13420: jQuery 1.9.1 fails to filter SVG parent nodes by class
    name when using .parent() and
    .closest()](http://bugs.jquery.com/ticket/13420)
-   [\#13499: Descendant selector fails when searched ID doesn't exists
    but NAME does (IE7 only)](http://bugs.jquery.com/ticket/13499)
-   [\#13505: jquery\#add: seems to get items in collection out of order
    on larger lists](http://bugs.jquery.com/ticket/13505)

Support
-------

-   [\#10814: make support as lazy as possible with closure in
    mind](http://bugs.jquery.com/ticket/10814)
-   [\#12040: Test against Content Security Policy
    (CSP)](http://bugs.jquery.com/ticket/12040)
-   [\#13089: support adds zoom style to body in
    Chrome/Safari](http://bugs.jquery.com/ticket/13089)

Traversing
----------

-   [\#13265: parent method fails with text nodes in
    IE10](http://bugs.jquery.com/ticket/13265)
-   [\#13332: .closest("\*") yields input even for non-element
    nodes](http://bugs.jquery.com/ticket/13332)
-   [\#13349: find function slower since 1.9.0, especially in
    chrome](http://bugs.jquery.com/ticket/13349)

