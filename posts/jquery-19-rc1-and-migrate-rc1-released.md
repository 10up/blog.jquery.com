Drop everything and start testing, jQuery 1.9 Release Candidate 1 is now
available! Today we're also releasing RC1 of the jQuery Migrate plugin,
to help in migrating and upgrading your older jQuery code and plugins.
**We really need your help to make sure this code is free of bugs and
ready to release.** The jQuery 1.9RC1 files are available on jQuery's
CDN. We recommend that you start by including the jQuery Migrate plugin.
Be sure to check the browser's console for warnings, which all start
with JQMIGRATE and are described [in the plugin's
documentation](https://github.com/jquery/jquery-migrate/blob/master/warnings.md).
Just replace your current jQuery include with this:
` <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script> <script src="http://code.jquery.com/jquery-migrate-1.0.0rc1.js"></script>`
For diagnostic purposes, you can also include the jQuery Migrate plugin
with versions of jQuery all the way back to 1.6.4 to see what changes
may cause issues with your code when you do upgrade. **At minimum,
please test your site with your existing jQuery version and the jQuery
Migrate plugin to see what it reports.** Our goal is to make the jQuery
Migrate plugin into a tool that can smooth out any bumps in your upgrade
road. If you haven't looked at the previous 1.9 beta, check out the
[jQuery 1.9 Upgrade Guide](http://jquery.com/upgrade-guide/1.9/) for
information about what has changed in this go-round. There's been quite
a bit of API cleanup in 1.9, and the jQuery Migrate plugin is your
friend when it comes to finding issues. In the last beta we
[introduced](http://blog.jquery.com/2012/12/17/jquery-1-9-beta-1-released/)
a powerful CSS array getter that simplifies and optimizes getting
multiple properties. But then we looked, and oh, I dunno, it seemed like
this release just needed to "pop" more. So we added more features to
make your development life easier.

New! Sizzle Selectors
---------------------

Sizzle now supports the following additional CSS3 selectors:
`:nth-last-child, :nth-of-type, :nth-last-of-type, :first-of-type, :last-of-type, :only-of-type, :target, :root,`
and `:lang`. That means all those selectors are usable in every browser
jQuery supports all the way back to IE6, regardless of native browser
support for the selector. There are only three remaining selectors
unsupported by Sizzle/jQuery (`:link, :visited,` and `:hover`) which we
won't implement due to the overhead of events that would be required to
track active elements.

New! .finish() Method
---------------------

jQuery animations have gotten even better, and our API improved in the
process. It all started with a suggestion to [eliminate the Boolean
trap](http://bugs.jquery.com/ticket/13103) posed by the
`.stop(Boolean, Boolean)` signature. During that discussion it became
clear that we didn't have a way to handle one of the most useful cases:
running all queued animations to their final value. So we added one,
`.finish()`. The best way to show its benefits is [with an
example](http://jsfiddle.net/dmethvin/AFGgJ/). As you can see from the
example, most uses of the `.stop()` API requiring Boolean arguments can
be replaced with some combination of `.stop()` (with no arguments),
`.clearQueue()` and/or `.finish()` and be less cryptic. We're not
removing the old behavior though, so any existing code should work fine.
We'd prefer that you use `.finish()` when appropriate, since it reads
better and avoids confusing Boolean parameters. And, when you need to go
to the end of a whole *series* of animations, `.finish()` will do that
in 1.9 when nothing would before.

New! Source Maps
----------------

jQuery 1.9RC1 has added the ability to use [source
maps](http://www.html5rocks.com/en/tutorials/developertools/sourcemaps/)
in browsers that support them. At the moment that's just Google Chrome,
but Mozilla Firefox is [planning
support](https://bugzilla.mozilla.org/show_bug.cgi?id=771597) as well.
What's all this about? Well imagine that you are using compressed
versions of your files on your production site, including a compressed
version of jQuery. You get a report that an important customer is
running into a problem. You could debug it a lot easier if you had the
uncompressed source, but using that on your high-traffic production site
isn't an option. With source maps, you can let the browser's debugger
"map" the lines in the compressed file into the uncompressed source.
That makes it *so* much easier to set breakpoints, inspect or change
values, and see meaningful variable names. [This
video](http://www.youtube.com/watch?v=-xJl22Kvgjg) gives you a taste of
what it can do. The jQuery CDN has the map files for this beta version;
the jQuery, Google, and Microsoft CDN versions of jQuery final releases
will also get matching source maps from now on. If you are using jQuery
1.9 or 2.0 from the CDN, just check the "Use source maps" option in the
debugger and you will be set. Open the uncompressed version of jQuery in
the Chrome debugger and you can set breakpoints or inspect variable
values there, even though the compressed version is being used! When
hosting your own copy of jQuery, copy the map to your server and use it
from there. For simplicity we assume that the compressed and
uncompressed copy of jQuery is in the same folder as the map file; this
is the case for CDN versions and you should follow the same rule if you
make local copies. The map file name is the same as the compressed
version, with `.map` replacing `.js`. *Do not rename the files when you
copy them.* So, if you were to use a local copy of `jquery-1.9.0.min.js`
the corresponding map file would be `jquery-1.9.0.min.map` and the
uncompressed file would be `jquery-1.9.0.js` in the same folder.

Congrats, Contributors!
-----------------------

Many thanks to the people who have contributed to the 1.9 release:
Akintayo Akinwunmi, Alexander Farkas, Allen J Schmidt Jr, Ben Truyman,
Bennett Sorbo, Callum Macrae, Carl Danley, Corey Frang, Daniel Gálvez,
Dan Morgan, David Bonner, David Fox, Devin Cooper, Elijah Manor, Erick
Ruiz de Chavez, Greg Lavallee, Ismail Khair, James Huston, Jay
Merrifield, Jonathan Sampson, Julian Aubourg, Marcel Greter, Matt
Farmer, Matthias Jäggli, Mike Petrovich, Mike Sherov, Oleg Gaidarenko,
Paul Ramos, Richard Gibson, Rick Waldron, Rod Vagg, Roland Eckl, Sai
Wong, Scott González, Sebi Burkhard, Timmy Willison, Timo Tijhof, Tom
Fuertes, Toyama Nao, and Yi Ming He.

jQuery 1.9.0RC1 Changelog
-------------------------

### Ajax

-   [\#12004](http://bugs.jquery.com/ticket/12004): Rename ajax.type to
    ajax.method
-   [\#12550](http://bugs.jquery.com/ticket/12550): jQuery Ajax
    cache=false doesn't always work

### Attributes

-   [\#9905](http://bugs.jquery.com/ticket/9905): .removeAttr( "id" )
    sometimes crashes IE 7
-   [\#10299](http://bugs.jquery.com/ticket/10299): hrefNormalized ===
    false also needs a propHook
-   [\#12048](http://bugs.jquery.com/ticket/12048): [IE6/7/8] xml set
    attribute
-   [\#12584](http://bugs.jquery.com/ticket/12584): jQuery wrongly
    serializes &lt;select&gt; with one disabled &lt;option&gt;
-   [\#12600](http://bugs.jquery.com/ticket/12600):
    jQuery('select').is('[value="value"]') works inconsistently
    depending on number of elements returned
-   [\#12945](http://bugs.jquery.com/ticket/12945): attr throws
    exception in IE9 on Flash &lt;object&gt;s
-   [\#13011](http://bugs.jquery.com/ticket/13011): Setting type
    attribute on an input doesn't work as intended

### Build

-   [\#12254](http://bugs.jquery.com/ticket/12254): Reflected XSS
-   [\#12490](http://bugs.jquery.com/ticket/12490): Move submodule
    update process to grunt
-   [\#12725](http://bugs.jquery.com/ticket/12725): Avoid localized
    UTF-8 characters in intro.js @DATE
-   [\#12741](http://bugs.jquery.com/ticket/12741): inconsistent line
    endings in official jquery-1.8.2.js download
-   [\#12886](http://bugs.jquery.com/ticket/12886): Add source map
    support for build
-   [\#13044](http://bugs.jquery.com/ticket/13044): Execute all QUnit
    modules in TestSwarm
-   [\#13064](http://bugs.jquery.com/ticket/13064): Improve test suite
    fixture cleanup

### Core

-   [\#9469](http://bugs.jquery.com/ticket/9469): Remove semi-functional
    .selector calculation from .pushStack()
-   [\#9904](http://bugs.jquery.com/ticket/9904): Move deprecated
    functionality to compatibility plugin
-   [\#10417](http://bugs.jquery.com/ticket/10417): jQuery.later
-   [\#11290](http://bugs.jquery.com/ticket/11290): selector interpreted
    as HTML
-   [\#11737](http://bugs.jquery.com/ticket/11737): Remove jQuery.sub
-   [\#12107](http://bugs.jquery.com/ticket/12107): Change proxy to
    allow arguments currying without overwriting context
-   [\#12134](http://bugs.jquery.com/ticket/12134): implement HTML5
    compilant form data construction into \$.fn.serialzeArray
-   [\#12191](http://bugs.jquery.com/ticket/12191): jQuery.type() should
    return "error" for native ECMAScript Error objects
-   [\#12519](http://bugs.jquery.com/ticket/12519): Public API methods
    should not have private arguments
-   [\#12840](http://bugs.jquery.com/ticket/12840): Remove (private)
    parameter "pass" from jQuery.attr and jQuery.access
-   [\#13021](http://bugs.jquery.com/ticket/13021): each() cannot work
    well with a literal object who has a length member
-   [\#13075](http://bugs.jquery.com/ticket/13075): Performance
    optimization for \$.type
-   [\#13076](http://bugs.jquery.com/ticket/13076): Performance
    optimization (10-30%) for \$("some-selector")

### Css

-   [\#11938](http://bugs.jquery.com/ticket/11938): jQuery.css should
    accept an array to get multiple properties
-   [\#12990](http://bugs.jquery.com/ticket/12990): 'px' automatically
    added to column-count css property
-   [\#13088](http://bugs.jquery.com/ticket/13088): under IE8,
    \$(selector).attr('style') always return lowercase string

### Data

-   [\#10544](http://bugs.jquery.com/ticket/10544): Remove ALL special
    meanings of "." in keys for \$.fn.data

### Deferred

-   [\#11405](http://bugs.jquery.com/ticket/11405): deferred.notify()
    invokes progressCallbacks with deferred as context
-   [\#13160](http://bugs.jquery.com/ticket/13160): Deferred.then
    doesn't propagete custom context

### Effects

-   [\#12803](http://bugs.jquery.com/ticket/12803): Smarter hook point
    for jQuery.timer

### Event

-   [\#3827](http://bugs.jquery.com/ticket/3827): Checkbox state
    inconsistent in click event handler
-   [\#12061](http://bugs.jquery.com/ticket/12061):
    \$(window).beforeunload() clobbers previous handler and return
    values
-   [\#12518](http://bugs.jquery.com/ticket/12518): Don't use
    offsetWidth in jQuery.event.trigger()
-   [\#12610](http://bugs.jquery.com/ticket/12610):
    jQuery.event.dispatch should remove window.event
-   [\#12736](http://bugs.jquery.com/ticket/12736): Move pseudo:hover to
    jquery-compat / deprecated.js
-   [\#12739](http://bugs.jquery.com/ticket/12739): Name: Passing in an
    Event to trigger strips namespace
-   [\#12827](http://bugs.jquery.com/ticket/12827): Remove "exclusive"
    events
-   [\#12828](http://bugs.jquery.com/ticket/12828): Remove event
    properties: attrChange attrName relatedNode srcElement

### Manipulation

-   [\#4087](http://bugs.jquery.com/ticket/4087): insertAfter,
    insertBefore, etc do not work when destination is original element
-   [\#9646](http://bugs.jquery.com/ticket/9646): IE7: Cloning of
    form-elements and changing their names also changes the name of the
    elements that are cloned.
-   [\#10470](http://bugs.jquery.com/ticket/10470): wrap() evaluates
    scripts
-   [\#11226](http://bugs.jquery.com/ticket/11226): .after and .before
    returns incorrect data for \$('not\_existing\_element')
-   [\#11230](http://bugs.jquery.com/ticket/11230): .appendTo .prependTo
    .insertAfter .insertBefore returns incorrect data for
    \$('not\_existing\_element')
-   [\#11280](http://bugs.jquery.com/ticket/11280): appending elements
    to an object element fails in IE &lt; 9
-   [\#11795](http://bugs.jquery.com/ticket/11795): Resolve script
    manipulation/execution inconsistencies
-   [\#12120](http://bugs.jquery.com/ticket/12120): Inconsistency of
    .end() with respect to .after()
-   [\#12336](http://bugs.jquery.com/ticket/12336): Calling
    \$('\#select').empty() should set options length to 0
-   [\#12392](http://bugs.jquery.com/ticket/12392): Elements created
    from HTML strings have a parentNode
-   [\#12449](http://bugs.jquery.com/ticket/12449): replaceWith()
    doesn't clone elements where required
-   [\#12503](http://bugs.jquery.com/ticket/12503): before/after will
    choke if collection has not first disconnected node
-   [\#12777](http://bugs.jquery.com/ticket/12777): Applets don't work
    when appended on IE
-   [\#12863](http://bugs.jquery.com/ticket/12863):
    behavior:url(\#default\#savehistory) causes event error on oldIE
-   [\#12957](http://bugs.jquery.com/ticket/12957): Improve wrapMap
-   [\#13019](http://bugs.jquery.com/ticket/13019): New pre-1.9
    .replaceWith() behavior leaks data and events
-   [\#13094](http://bugs.jquery.com/ticket/13094): If to jQuery\#before
    passed function argument it should receive index of the current
    element in the set

### Misc

-   [\#12758](http://bugs.jquery.com/ticket/12758): Make sure Summit new
    authors are credited

### Offset

-   [\#6446](http://bugs.jquery.com/ticket/6446): Mobile Safari 4.0.4:
    \$.offset.top() reports wrong position after scroll

### Selector

-   [\#11115](http://bugs.jquery.com/ticket/11115): ".is()" and
    ".filter()" disagree on attribute selector "[checked]"
-   [\#12856](http://bugs.jquery.com/ticket/12856): Syntax error,
    unrecognized expression in jquery 1.8+
-   [\#13070](http://bugs.jquery.com/ticket/13070): filter()/is() does
    not work correctly with attribute equals selector which contains
    special characters

### Support

-   [\#12569](http://bugs.jquery.com/ticket/12569): Improve feature
    detect for oldIE event bubbling
-   [\#12869](http://bugs.jquery.com/ticket/12869): Support tests affect
    page layout in IE8/9/10 running in IE7 mode

### Traversing

-   [\#12009](http://bugs.jquery.com/ticket/12009):
    jQueryObject.find(element) corrupts the stack
-   [\#12816](http://bugs.jquery.com/ticket/12816): .find can return
    elements in the wrong order

