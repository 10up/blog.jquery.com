The jQuery team is pleased to announced that jQuery 1.9.1 is available!
This release addresses the bugs and regressions that have been reported
during the past few weeks. Whether you're using 1.9.0 or using an older
version, these are the droids you're looking for. Please, please,
*please*, use the [jQuery Migrate
plugin](http://blog.jquery.com/2013/01/31/jquery-migrate-1-1-0-released/)
and look at the [upgrade guide](http://jquery.com/upgrade-guide/1.9/) if
you're just starting your upgrade to jQuery 1.9. The plugin will quickly
find and fix any compatibility issues, just look in the browser console.
Once you fix the warnings you can remove it. Or, leave the plugin in
place until you have the chance to fix your code and plugins to make
them 1.9-compatible.
` <script src="http://code.jquery.com/jquery-1.9.1.js"></script>  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>`
We've sent the files to the Google and Microsoft folks, so you should
see them up on their CDNs shortly. Many thanks to those of you who
reported bugs, and to the following people who contributed patches to
the 1.9.1 release: Adam Coulombe, Andrew Plummer, Corey Frang, Danil
Somsikov, Jean Boussier, Julian Aubourg, Mike Sherov, Oleg Gaidarenko,
Richard Gibson, Ryunosuke Sato, and Timmy Willison. Gold-leaf-cluster
thanks to Paul Irish, who mobilized special forces to find a solution
for [13274](http://bugs.jquery.com/ticket/13274)!

Change Log
----------

Ajax
----

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
-   [\#13274: IE \< 9: "'jquery' is undefined" w/ sourceMappingURL
    comment](http://bugs.jquery.com/ticket/13274)
-   [\#13316: Check against jquery.min.js with
    TestSwarm](http://bugs.jquery.com/ticket/13316)
-   [\#13335: "use strict"; break asp.net ajax postacks in
    FF](http://bugs.jquery.com/ticket/13335)

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

-   [\#13208: JS error trying to get the id of the document in
    IE8](http://bugs.jquery.com/ticket/13208)
-   [\#13360: Creating String.prototype.namespace can cause an exception
    in jQuery.Event](http://bugs.jquery.com/ticket/13360)

Manipulation
------------

-   [\#13282: QtWebKit -- TypeError: '[object Object]' is not a valid
    argument for 'Function.prototype.apply' (evaluating
    'elem.nodeType')](http://bugs.jquery.com/ticket/13282)
-   [\#13315: minified manipulation methods fail on oldIE with
    XML](http://bugs.jquery.com/ticket/13315)
-   [\#13233: Unexpected behavior when iterating over and manipulating
    detached nodes in jquery 1.9](http://bugs.jquery.com/ticket/13233)

Selector
--------

-   [\#13182: nested has selectors broken in IE7 & IE8 in versions
    1.8.2+](http://bugs.jquery.com/ticket/13182)
-   [\#13281: Wrong order when using .find() in
    IE7/8](http://bugs.jquery.com/ticket/13281)
-   [\#13331: jQuery.fn.add returns incorrect order in Chrome and
    Safari](http://bugs.jquery.com/ticket/13331)

Support
-------

-   [\#13089: support adds zoom style to body in
    Chrome/Safari](http://bugs.jquery.com/ticket/13089)

Traversing
----------

-   [\#13349: find function slower since 1.9.0, especially in
    chrome](http://bugs.jquery.com/ticket/13349)

