We're coming down the home stretch for the release of jQuery 2.0! Today
sees the release of Beta 3.
![](http://blog.jquery.com/wp-content/uploads/2013/04/ransom2.png) To
paraphrase [Dirty Harry](http://en.wikiquote.org/wiki/Dirty_Harry): I
know what you're thinking. "Is Beta 3 gonna break my code?" Well, to
tell you the truth, in all this excitement we may have lost track of
things and introduced some bugs. So being as this is jQuery, the most
powerful JavaScript library in the world, and could blow your web site
clean off the Internets, you've got to ask yourself one question: "Do I
feel lucky?" Well, do ya? We don't want to accidentally blow your site
off the Internets; don't count on being lucky. That means we *really*
need your help in finding and fixing any bugs that may be hiding in the
nooks and crannies of jQuery 2.0. We want to get all the problems ironed
out before this version ships, and the only way to do that is to find
out whether it runs with *your* code. You can get this latest beta from
the jQuery CDN:
[http://code.jquery.com/jquery-2.0.0-beta3.js](http://code.jquery.com/jquery-2.0.0-beta3.js)
You can also use the [jQuery Migrate
plugin](https://github.com/jquery/jquery-migrate/#readme) with jQuery
2.0 to restore deprecated features from those older versions and/or
diagnose compatibility issues. We strongly recommend that you do use
Migrate for older code, it will save a lot of time and trouble in
debugging.

Staying in Sync
---------------

Remember that jQuery 2.0 *will not run* on IE 6, 7, or 8. You must run
Internet Explorer 9 or 10 in their "modern" mode and not use the
X-UA-Compatible feature, for example, to force IE10 into IE7 mode. The
jQuery team will continue to support both the jQuery 1.x and 2.x lines
simultaneously for as long as those older versions of IE are still a
factor. The currently released version of jQuery 1.x, which is 1.9.1,
has the same API as jQuery 2.0. We are planning a 1.10 update to the 1.x
line in a few months that will address any minor differences in the two
versions. At that point we will still keep the two lines in sync: 1.10
and 2.0, 1.11 and 2.1, etc. If you'd like to try jQuery 2.0 on web sites
where you still need to support IE 6, 7, and 8, you can use conditional
comments. All browsers except old IE will get the second script and
ignore the first:

    <!--[if lt IE 9]>
        <script src="jquery-1.9.1.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script src="jquery-2.0.0b3.js"></script>
    <!--<![endif]-->

Remember, however, that jQuery 1.x continues to work on *all* the
browsers that jQuery supports.

What's New
----------

Here are the major changes since [Beta
2](http://blog.jquery.com/2013/03/01/jquery-2-0-beta-2-released/):
**Node.js compatibility.** If the jquery.js file is included in Node via
`require()`, it will export the jQuery object. **Windows 8 Store App
compatibility.** Some feature detects that were only needed for IE 6/7/8
were removed to prevent a security exception in Windows Store apps.
**More bug fixes.** This beta includes fixes to bugs reported since
jQuery 2.0 beta 2 and jQuery 1.9.1 were shipped. The complete list is
below. **Remove jQuery.support.boxModel.** Nobody should be using this
property since it has been deprecated since jQuery 1.3 and jQuery itself
has never supported Quirks mode. **Further nips and tucks to the code.**
Fixing bugs often adds more bytes, but we've been able to actually
reduce the size of the full minified/gzipped build by a couple of dozen
bytes. **The wrap methods can now be excluded in a custom build.** If
you (and the plugins you use) aren't calling any of the wrap methods
like `.wrapAll()` or `.unwrap()`, you can leave them out of your custom
build. **Custom builds under 10k bytes!** If you're able to exclude all
the optional modules, you'll be rewarded with a custom build that's only
9,226 bytes when minified and gzipped. See the [beta 2 blog
post](http://blog.jquery.com/2013/03/01/jquery-2-0-beta-2-released/) for
more information on how to do custom builds. The full list of commits is
available on [GitHub](https://github.com/jquery/jquery/commits/master)
and the closed bug tickets are below. Many thanks to Rick Waldron,
Michal Golebiowski, Li Xudong, Timmy Willison, Nguyen Phuc Lam, Steven
Benner, Tom Fuertes, Richard Gibson, Scott González, and Oleg Gaidarenko
for their efforts on this beta.

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
-   [\#13744: Move jQuery.fn.size() to
    deprecated](http://bugs.jquery.com/ticket/13744)

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

-   [\#13360: Creating String.prototype.namespace can cause an exception
    in jQuery.Event](http://bugs.jquery.com/ticket/13360)
-   [\#11570: Move element cache to the element[expando] to avoid
    cleanup and reduce code.](http://bugs.jquery.com/ticket/11570)
-   [\#13143: e.target can be a text node on
    mousewheel](http://bugs.jquery.com/ticket/13143)
-   [\#13554: Move [un]bind & [un]delegate to
    event-alias](http://bugs.jquery.com/ticket/13554)

Manipulation
------------

-   [\#13232: In 2.0beta1, using html() function on a tbody selector
    yields insertion of new tbody](http://bugs.jquery.com/ticket/13232)
-   [\#13233: Unexpected behavior when iterating over and manipulating
    detached nodes in jquery 1.9](http://bugs.jquery.com/ticket/13233)
-   [\#13282: QtWebKit -- TypeError: '[object Object]' is not a valid
    argument for 'Function.prototype.apply' (evaluating
    'elem.nodeType')](http://bugs.jquery.com/ticket/13282)
-   [\#13721: remove(":nth-child(1)") works differently than
    filter(":nth-child(1)").remove()](http://bugs.jquery.com/ticket/13721)
-   [\#13741: Make wrap\*/unwrap methods an optional
    module](http://bugs.jquery.com/ticket/13741)

Selector
--------

-   [\#13434: Create querySelectorAll/matchesSelector selector
    option](http://bugs.jquery.com/ticket/13434)
-   [\#13331: jQuery.fn.add returns incorrect order in Chrome and
    Safari](http://bugs.jquery.com/ticket/13331)
-   [\#13378: ie8 & ie9 iframe - .filter(":focus") -
    document.activeElement returns unspecified
    error.](http://bugs.jquery.com/ticket/13378)
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
-   [\#13743: Remove
    jQuery.support.boxModel](http://bugs.jquery.com/ticket/13743)

Traversing
----------

-   [\#13265: parent method fails with text nodes in
    IE10](http://bugs.jquery.com/ticket/13265)
-   [\#13332: .closest("\*") yields input even for non-element
    nodes](http://bugs.jquery.com/ticket/13332)
-   [\#13349: find function slower since 1.9.0, especially in
    chrome](http://bugs.jquery.com/ticket/13349)

