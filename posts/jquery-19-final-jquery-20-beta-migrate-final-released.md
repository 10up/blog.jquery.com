Are you sitting down? Well sit down, in front of your computer, and
start downloading. We have several new jQuery releases for you to test.
For your convenience, jQuery can even be downloaded while standing.
First up are the final versions of jQuery 1.9 and jQuery Migrate 1.0. We
think these releases are pretty solid, because very few of you reported
any problems in the beta versions. Just be sure to read the information
in the [jQuery 1.9 upgrade guide](http://jquery.com/upgrade-guide/1.9/)
so that your transition will be smoother. Next, take out your
sunglasses. Today you get a glimpse at the future, and it's bright.
jQuery 2.0 is in beta test! We know it's a lot to take in, so let's
recap the positioning for jQuery 1.9 and 2.0:

-   jQuery 1.9 and 2.0 have the same API. Several deprecated features
    such as `$.browser` have been removed from both versions. It's all
    laid out in the [jQuery 1.9 upgrade
    guide](http://jquery.com/upgrade-guide/1.9/).
-   jQuery 1.9 runs on Internet Explorer 6, 7, and 8 ("oldIE"), just
    like previous versions. Consider it a cleaner, slimmer, modern-API
    upgrade from jQuery 1.8.
-   jQuery 2.0 will *not* run on oldIE. As a result of removing several
    layers of barnacle-encrusted code, it will be both faster and
    smaller than jQuery 1.9.
-   The team is supporting both jQuery 1.9 and 2.0 into the future. You
    choose which version you want to use based on your needs.

The [jQuery Migrate](http://github.com/jquery/jquery-migrate/) plugin
can be used with either 1.9 or 2.0 to detect deprecated and removed
features, or to restore old features for those sticky situations where
you need old code to run with new jQuery. The plugin and the messages it
generates are documented in the [project
README](http://github.com/jquery/jquery-migrate/#readme). If you're on a
recent version of jQuery core and have been avoiding deprecated
features, these new jQuery releases may work for your code right out of
the box. (Just remember, jQuery 2.0 doesn't work on IE 6, 7, or 8!)
Still, we recommend that you always start by including the jQuery
Migrate plugin to see if it gives you any warnings. The jQuery 1.9 final
files are available on jQuery's CDN, and should be available on the
Google and Microsoft CDNs within a few days:
` <script src="http://code.jquery.com/jquery-1.9.0.js"></script> <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>`
Or, for testing jQuery 2.0 beta 1, use the jQuery CDN:
` <script src="http://code.jquery.com/jquery-2.0.0b1.js"></script> <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>`
For diagnostic purposes, you can also include the jQuery Migrate plugin
with versions of jQuery all the way back to 1.6.4 to see what changes
may cause issues with your code when you finally upgrade. No matter
which version of jQuery you use with the plugin, be sure to open the
browser's console to see what warnings or errors are being generated.
Warnings given by the plugin start with the word "JQMIGRATE" and are
listed [in the plugin's
documentation](https://github.com/jquery/jquery-migrate/blob/master/warnings.md).
The description explains why the warning was given and how it can be
fixed.

What's New in 1.9
-----------------

It may be a few weeks before the complete documentation for this release
lands at [api.jquery.com](http://api.jquery.com), especially since the
API and other documentation sites are in the process of their own
upgrade. For now, here's a summary of what's new and changed.
**Streamlined API:** Many deprecated and dubious features have been
removed, as documented in the [upgrade
guide](http://jquery.com/upgrade-guide/1.9/). **New .css()
multi-property getter:** Now you can pass `.css()` an array of CSS
property names and it will return an object with the current values of
all those CSS properties:

    var dims = $("#box").css([ "width", "height", "backgroundColor" ]);
    //  { width: "10px", height: "20px", backgroundColor: "#D00DAD" }

**Enhanced cross-browser CSS3 support:** jQuery 1.9 now supports the
following CSS3 selectors across all browsers, all the way back to IE6:
`:nth-last-child, :nth-of-type, :nth-last-of-type, :first-of-type, :last-of-type, :only-of-type, :target, :root,`
and `:lang`. **New .finish() method:** This method can be used to
immediately complete all the animations queued on an element. The
[jQuery 1.9 RC1 blog
post](http://blog.jquery.com/2013/01/09/jquery-1-9-rc1-and-migrate-rc1-released/)
has more information and an example. **Source map support:** You can now
run the minified version of jQuery but use source maps for debugging.
This can be extremely valuable for tracking down problems on a
production web site. See the [jQuery 1.9 RC1 blog
post](http://blog.jquery.com/2013/01/09/jquery-1-9-rc1-and-migrate-rc1-released/)
for a full description. **Many, many bug fixes:** We're especially proud
of what we hope will be the final set of fixes for obscure issues in IE
6, 7, and 8. See the changelog below for a complete inventory.

Getting started with 2.0
------------------------

Since jQuery 2.0 has its foundation in the work for jQuery 1.9, all the
discussion in the [upgrade guide](http://jquery.com/upgrade-guide/1.9/)
also applies to 2.0. The Migrate plugin will identify many of these
issues for you automatically. If you're using jQuery in non-web-site
HTML situations such as an Android, iOS, or Windows 8 app, or a
Chrome/Firefox add-on, jQuery 2.0 is an awesome choice. You can even use
jQuery 2.0 on web sites if you don't support oldIE or don't mind using
conditional comments:

    <!--[if lt IE 9]>
        <script src="jquery-1.9.0.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script src="jquery-2.0.0.js"></script>
    <!--[endif]-->

With this first beta of jQuery 2.0 we've made a huge down payment on
major cleanup, cutting the size of the library by more than 10 percent.
But we're nowhere near done. There is more refactoring possible now that
we can consistently depend on modern JavaScript, CSS, HTML, and DOM
features being there. We'll continue to tighten and clean up the code
before 2.0 ships, and extend our work to make more functionality
optional to shrink the size of custom builds.

They Built This For You
-----------------------

Many thanks to the people who have contributed to these two releases
since 1.8.3 was shipped: Akintayo Akinwunmi, Alexander Farkas, Allen J
Schmidt Jr, Ben Truyman, Bennett Sorbo, Callum Macrae, Carl Danley,
Corey Frang, Daniel Gálvez, Dan Morgan, David Bonner, David Fox, Devin
Cooper, Elijah Manor, Erick Ruiz de Chavez, Greg Lavallee, Ismail Khair,
James Huston, Jay Merrifield, Jonathan Sampson, Julian Aubourg, Marcel
Greter, Matt Farmer, Matthias Jäggli, Mike Petrovich, Mike Sherov, Oleg
Gaidarenko, Paul Ramos, Richard Gibson, Rick Waldron, Rod Vagg, Roland
Eckl, Sai Wong, Scott González, Sebi Burkhard, Timmy Willison, Timo
Tijhof, Tom Fuertes, Toyama Nao, and Yi Ming He. Good work guys!

jQuery 1.9.0 final and 2.0.0 beta Changelog
-------------------------------------------

Any tickets listed here that are not related to IE 6/7/8 support are
also in the jQuery 2.0 beta.

Ajax
----

-   [\#12004: Allow ajax.method as alias for
    ajax.type](http://bugs.jquery.com/ticket/12004)
-   [\#12550: jQuery Ajax cache=false doesn't always
    work](http://bugs.jquery.com/ticket/12550)

Attributes
----------

-   [\#9905: .removeAttr( "id" ) sometimes crashes IE
    7](http://bugs.jquery.com/ticket/9905)
-   [\#10299: hrefNormalized === false also needs a
    propHook](http://bugs.jquery.com/ticket/10299)
-   [\#12048: [IE6/7/8] xml set
    attribute](http://bugs.jquery.com/ticket/12048)
-   [\#12584: jQuery wrongly serializes \<select\> with one disabled
    \<option\>](http://bugs.jquery.com/ticket/12584)
-   [\#12600: jQuery('select').is('[value="value"]') works
    inconsistently depending on number of elements
    returned](http://bugs.jquery.com/ticket/12600)
-   [\#12945: attr throws exception in IE9 on Flash
    \<object\>s](http://bugs.jquery.com/ticket/12945)
-   [\#13011: Setting type attribute on an input doesn't work as
    intended](http://bugs.jquery.com/ticket/13011)

Build
-----

-   [\#12254: Reflected XSS](http://bugs.jquery.com/ticket/12254)
-   [\#12490: Move submodule update process to
    grunt](http://bugs.jquery.com/ticket/12490)
-   [\#12725: Avoid localized UTF-8 characters in intro.js
    @DATE](http://bugs.jquery.com/ticket/12725)
-   [\#12741: inconsistent line endings in official jquery-1.8.2.js
    download](http://bugs.jquery.com/ticket/12741)
-   [\#12886: Add source map support for
    build](http://bugs.jquery.com/ticket/12886)
-   [\#13044: Execute all QUnit modules in
    TestSwarm](http://bugs.jquery.com/ticket/13044)
-   [\#13064: Improve test suite fixture
    cleanup](http://bugs.jquery.com/ticket/13064)

Core
----

-   [\#9469: Remove semi-functional .selector calculation from
    .pushStack()](http://bugs.jquery.com/ticket/9469)
-   [\#9904: Move deprecated functionality to compatibility
    plugin](http://bugs.jquery.com/ticket/9904)
-   [\#10417: Remove second arg from setTimeout calls (WAS
    jQuery.later)](http://bugs.jquery.com/ticket/10417)
-   [\#11290: selector interpreted as
    HTML](http://bugs.jquery.com/ticket/11290)
-   [\#11737: Remove jQuery.sub](http://bugs.jquery.com/ticket/11737)
-   [\#12107: Change proxy to allow arguments currying without
    overwriting context](http://bugs.jquery.com/ticket/12107)
-   [\#12134: implement HTML5 compilant form data construction into
    \$.fn.serialzeArray](http://bugs.jquery.com/ticket/12134)
-   [\#12191: jQuery.type() should return "error" for native ECMAScript
    Error objects](http://bugs.jquery.com/ticket/12191)
-   [\#12519: Public API methods should not have private
    arguments](http://bugs.jquery.com/ticket/12519)
-   [\#12840: Remove (private) parameter "pass" from jQuery.attr and
    jQuery.access](http://bugs.jquery.com/ticket/12840)
-   [\#13021: each() cannot work well with a literal object who has a
    length member](http://bugs.jquery.com/ticket/13021)
-   [\#13075: Performance optimization for
    \$.type](http://bugs.jquery.com/ticket/13075)
-   [\#13076: Performance optimization (10-30%) for
    \$("some-selector")](http://bugs.jquery.com/ticket/13076)

Css
---

-   [\#11938: jQuery.css should accept an array to get multiple
    properties](http://bugs.jquery.com/ticket/11938)
-   [\#12990: 'px' automatically added to column-count css
    property](http://bugs.jquery.com/ticket/12990)
-   [\#13088: under IE8, \$(selector).attr('style') always return
    lowercase string](http://bugs.jquery.com/ticket/13088)

Data
----

-   [\#10544: Remove ALL special meanings of "." in keys for
    \$.fn.data](http://bugs.jquery.com/ticket/10544)

Deferred
--------

-   [\#11405: deferred.notify() invokes progressCallbacks with deferred
    as context](http://bugs.jquery.com/ticket/11405)
-   [\#13160: Deferred.then doesn't propagete custom
    context](http://bugs.jquery.com/ticket/13160)

Effects
-------

-   [\#12803: Smarter hook point for
    jQuery.timer](http://bugs.jquery.com/ticket/12803)

Event
-----

-   [\#3827: Checkbox state inconsistent in click event
    handler](http://bugs.jquery.com/ticket/3827)
-   [\#12061: \$(window).beforeunload() clobbers previous handler and
    return values](http://bugs.jquery.com/ticket/12061)
-   [\#12518: Don't use offsetWidth in
    jQuery.event.trigger()](http://bugs.jquery.com/ticket/12518)
-   [\#12610: jQuery.event.dispatch should remove
    window.event](http://bugs.jquery.com/ticket/12610)
-   [\#12736: Move pseudo:hover to jquery-compat /
    deprecated.js](http://bugs.jquery.com/ticket/12736)
-   [\#12739: Name: Passing in an Event to trigger strips
    namespace](http://bugs.jquery.com/ticket/12739)
-   [\#12827: Remove "exclusive"
    events](http://bugs.jquery.com/ticket/12827)
-   [\#12828: Remove event properties: attrChange attrName relatedNode
    srcElement](http://bugs.jquery.com/ticket/12828)
-   [\#13180: Live binding click event on image within SVG not
    firing.](http://bugs.jquery.com/ticket/13180)
-   [\#13203: Delegated selectors matching Object.prototype properties
    match everything](http://bugs.jquery.com/ticket/13203)

Manipulation
------------

-   [\#4087: insertAfter, insertBefore, etc do not work when destination
    is original element](http://bugs.jquery.com/ticket/4087)
-   [\#9646: IE7: Cloning of form-elements and changing their names also
    changes the name of the elements that are
    cloned.](http://bugs.jquery.com/ticket/9646)
-   [\#10470: wrap() evaluates
    scripts](http://bugs.jquery.com/ticket/10470)
-   [\#11226: .after and .before returns incorrect data for
    \$('not\_existing\_element')](http://bugs.jquery.com/ticket/11226)
-   [\#11230: .appendTo .prependTo .insertAfter .insertBefore returns
    incorrect data for
    \$('not\_existing\_element')](http://bugs.jquery.com/ticket/11230)
-   [\#11280: appending elements to an object element fails in IE \<
    9](http://bugs.jquery.com/ticket/11280)
-   [\#11795: Resolve script manipulation/execution
    inconsistencies](http://bugs.jquery.com/ticket/11795)
-   [\#11989: Investigate fragment cache performance in terms of large
    html fragments](http://bugs.jquery.com/ticket/11989)
-   [\#12120: Inconsistency of .end() with respect to
    .after()](http://bugs.jquery.com/ticket/12120)
-   [\#12336: Calling \$('\#select').empty() should set options length
    to 0](http://bugs.jquery.com/ticket/12336)
-   [\#12392: Elements created from HTML strings have a
    parentNode](http://bugs.jquery.com/ticket/12392)
-   [\#12449: replaceWith() doesn't clone elements where
    required](http://bugs.jquery.com/ticket/12449)
-   [\#12503: before/after will choke if collection has not first
    disconnected node](http://bugs.jquery.com/ticket/12503)
-   [\#12777: Applets don't work when appended on
    IE](http://bugs.jquery.com/ticket/12777)
-   [\#12863: behavior:url(\#default\#savehistory) causes event error on
    oldIE](http://bugs.jquery.com/ticket/12863)
-   [\#12957: Improve wrapMap](http://bugs.jquery.com/ticket/12957)
-   [\#13019: New pre-1.9 .replaceWith() behavior leaks data and
    events](http://bugs.jquery.com/ticket/13019)
-   [\#13094: If to jQuery\#before passed function argument it should
    receive index of the current element in the
    set](http://bugs.jquery.com/ticket/13094)
-   [\#13200: XHTML .html() on \<table\> &
    subelements](http://bugs.jquery.com/ticket/13200)

Misc
----

-   [\#12758: Make sure Summit new authors are
    credited](http://bugs.jquery.com/ticket/12758)

Offset
------

-   [\#6446: Mobile Safari 4.0.4: \$.offset.top() reports wrong position
    after scroll](http://bugs.jquery.com/ticket/6446)

Selector
--------

-   [\#11115: ".is()" and ".filter()" disagree on attribute selector
    "[checked]"](http://bugs.jquery.com/ticket/11115)
-   [\#12856: Syntax error, unrecognized expression in jquery
    1.8+](http://bugs.jquery.com/ticket/12856)
-   [\#13070: filter()/is() does not work correctly with attribute
    equals selector which contains special
    characters](http://bugs.jquery.com/ticket/13070)

Support
-------

-   [\#12569: Improve feature detect for oldIE event
    bubbling](http://bugs.jquery.com/ticket/12569)
-   [\#12869: Support tests affect page layout in IE8/9/10 running in
    IE7 mode](http://bugs.jquery.com/ticket/12869)

Traversing
----------

-   [\#12009: jQueryObject.find(element) corrupts the
    stack](http://bugs.jquery.com/ticket/12009)
-   [\#12816: .find can return elements in the wrong
    order](http://bugs.jquery.com/ticket/12816)

