The jQuery UI team is thrilled to announce the final release of jQuery
UI 1.8 with 5 new plugins, 1 new effect, and hundreds of bug fixes and
improvements. We've worked extremely hard to make jQuery UI lighter and
more modular with an even more flexible and extensible core. Now it's
even easier to build your own widgets or extend ours, whether you use
the jQuery UI Widget Factory, the jQuery UI CSS Framework, or both. This
release is a collective effort spanning more than 9 months with
contributions from hundreds of developers, designers, testers and users.
We thank you for all your help and support. And we even get personal
(we'll name names!) at the end of this post. The code, themes, demos,
and documentation are now live on [jqueryui.com](http://jqueryui.com/),
the [jQuery UI Download Builder](http://jqueryui.com/download),
[ThemeRoller](http://jqueryui.com/themeroller/), and [Google’s AJAX
Libraries
API](http://code.google.com/apis/ajaxlibs/documentation/index.html#jqueryUI).
Note: There are significant (and in some cases breaking) changes in this
release. If you currently use or develop jQuery UI plugins be sure to
consult both the [Changelog](http://jqueryui.com/docs/Changelog/1.8) and
[Upgrade Guide](http://jqueryui.com/docs/Upgrade_Guide) for full details
on these changes and their impact.

### Download jQuery UI 1.8

### I want it all:

-   The [jQuery UI 1.8 Starter
    Pack](http://jqueryui.com/download/jquery-ui-1.8.custom.zip)
    contains all components and our default theme. It's optimized for
    use with our [Getting Started
    Guide](http://jqueryui.com/docs/Getting_Started), in case you're
    new.
-   The [jQuery UI 1.8 Development
    Bundle](http://jquery-ui.googlecode.com/files/jquery-ui-1.8.zip)
    contains all components and our base theme. It's optimized for
    development of jQuery UI itself or redistribution, not getting
    started.
-   The [jQuery UI 1.8 Themes
    Pack](http://jquery-ui.googlecode.com/files/jquery-ui-themes-1.8.zip)
    contains the 21 ThemeRoller Gallery themes. If you like one but want
    to tweak it, each theme can be used as a starting point for theme
    customization.

### I know just what I want:

-   The [jQuery UI 1.8 Download Builder](http://jqueryui.com/download)
    creates a custom zip with only those components you select. It also
    takes care of plugin dependencies, so you can chill more.

### I want it always:

-   [jQuery UI is now on GitHub!](http://github.com/jquery/jquery-ui) :)
    Fork away.

### What's new in jQuery UI 1.8?

This release adds two new utilities, two new widgets, an upgraded widget
factory and a more modular core. For a full list of all the changes
between jQuery UI 1.7.2 and jQuery UI 1.8, see the [1.8
Changelog](http://jqueryui.com/docs/Changelog/1.8). See below for a
summary of some of the larger and more visible changes.

### Position utility

Position any element relative to any other, or even relative to the
window or the mouse. In true "Write Less. Do More" fashion, it's a
simple as selecting the element you want and saying which part of it
should be positioned relative to which part of another element. Bam.

-   [Position](http://jqueryui.com/demos/position/)

### Button widget

The button widget creates a themable button from any imaginable element
you might be using as a native button. Progressive enhancement all the
way. Now your \<button\> will look like your \<input type="submit"\>
will look like your \<a class="button"\>. We updated jQuery UI widgets
that have buttons, such as Dialog, to use the button plugin when you've
opted to include it. Otherwise, they'll remain native button elements.
Again thanks to PE this is as unobtrusive as possible. Thanks to
Filament Group for figuring out how to do this and Jörn Zaefferer for
making it happen. And of course the community as a whole for providing
feedback during early design/dev and later dev/testing. We're stoked
about having pretty form elements, and button is the first step.

-   [Button](http://jqueryui.com/demos/button/)

### Autocomplete widget

Now you can make any text input pop up a menu to aid the user in
completing a text entry or search box, providing suggestions or allowed
values. The autocomplete is designed and built based on the popular Jörn
Zaefferer's Autocomplete. As with the button widget we've kept the API
as minimal as possible while providing the hooks necessary to customize
it based on your needs. For example, you can provide static local data
using the source option, or provide a callback function as the data
source which can handle getting data from a server via Ajax. Single
option, overloaded. This is the new way we'll be writing and refactoring
all of our widgets going forward, and we're excited to hear what people
think. It's quite a change, but should keep the library lean while still
as flexible and powerful as possible. See the Autocomplete demos for
more.

-   [Autocomplete](http://jqueryui.com/demos/autocomplete/)

This is another new plugin that owes much of the implementation work to
Jörn Zaefferer, with the API design by Jörn Zaefferer, Scott González,
and Richard D. Worth. Filament Group, as always comes through with
interaction design and static markup and css references.

### New widget factory

Scott González and Jörn Zaefferer, with help from the community, have
completed a large update to the jQuery UI Widget Factory in this
release. These changes make it easier to create and extend your own
widget, extend our widgets, or extend widgets others create. Note: Some
of these are breaking changes, requiring an upgrade for plugins that
built on the 1.7 widget factory. A summary of these changes and their
impact can be found in the [widget factory section of the Upgrade
Guide](http://jqueryui.com/docs/Upgrade_Guide#Widget_Factory). For
another summary of these changes and why we're so excited by them, see
[this
post](http://blog.petersendidit.com/post/jquery-ui-1-8-widget-factory/)
by David Petersen. Thanks David.

### jQuery UI Core 71% smaller

The latest version of the jQuery UI Core is 71% smaller. This
optimization has been achieved largely by pulling the already modular
but bundled components mouse and widget.

### New mouse plugin file makes jQuery UI 14% smaller on average

The mouse plugin isn't new, but this release moves it to its own file,
jquery.ui.mouse.js, where before it was inside the jQuery UI Core. This
means that jQuery UI plugins that don't depend on the mouse plugin but
previously included the jQuery UI Core have less unused code to include,
with an average overall file size improvement of 14%. That's just an
average. Some improvements will be as high as 36%.

### File renames

All the .js and .css files have been renamed to start with a jquery.ui.
prefix instead of a ui. prefix. This is to be consistent with jQuery
plugin naming guidelines and is in preparation for some tools in
development that will allow for easily creating custom builds that
include jQuery plugins as well as jQuery UI plugins. Note: If you write
your own jQuery plugin, even if it's based on the jQuery UI Widget
Factory, please follow the jQuery plugin naming guidelines
"jquery.{plugin-name}.js" not "jquery.ui.{plugin-name}.js" This will
make it easier to distinguish between jQuery plugins that are and are
not part of the official jQuery UI library. The same goes for widget
namespacing and css class namespacing, except of course when using
general jQuery UI CSS Framework classes. For example, if you write a
widget called foo, the file should be named jquery.foo.js, not
jquery.ui.foo.js. The widget can use classes such as ui-widget,
ui-widget-content, ui-state-active (see [Theming
Docs](http://jqueryui.com/docs/Theming/API) for a full list) but should
not use css classes such as ui-foo and other ui-foo-\* classnames, as
these would be reserved for the foo widget in the jQuery UI library, or
jQuery UI Foo widget, which would have a filename jquery.ui.foo.js.

### Latest jQuery 1.4.2

jQuery UI 1.8 includes the latest release of jQuery, 1.4.2. It's fast.

### How do I upgrade?

1.  Download jQuery UI 1.8 (see links above)
2.  If you're going from 1.7 to 1.8, be sure to follow the latest
    [Upgrade Guide](http://jqueryui.com/docs/Upgrade_Guide). If you're
    coming from an even older version, you'll want to follow the legacy
    [1.7 Upgrade Guide](http://jqueryui.com/docs/Upgrade_Guide_17)
    first.
3.  Finally, to know just how much better every piece of jQuery UI got
    in 1.8, you can review the
    [Changelog](http://jqueryui.com/docs/Changelog/1.8) in all sorts of
    detail. If your favorite bug isn't fixed yet, be sure to let us know
    in our [bug tracker](http://dev.jqueryui.com/) or the new
    [Developing jQuery UI
    Forum](http://forum.jquery.com/developing-jquery-ui).

### What about jQuery UI 1.7?

The release of jQuery UI 1.8 final makes it the latest stable release of
jQuery UI. This makes the previous release, 1.7.2, legacy. The jQuery UI
project supports the latest stable and a single legacy release
concurrently. So as of now, the jQuery UI Download Builder and
ThemeRoller only contain these releases. Any release older than 1.7.2 is
no longer supported and all users are encouraged to upgrade to 1.8 as
soon as possible. A few issues have been identified in attempting to use
legacy jQuery UI 1.7.2 with the latest jQuery 1.4.2. These versions are
not compatible. The legacy jQuery UI 1.7.2 is only compatible with
jQuery 1.3.2. The coming jQuery UI 1.7.3 release will bring it up to
compatibility with the latest jQuery 1.4.2. This will be the final 1.7.x
release, freezing this branch.

### Thanks

Thanks to all who helped with this release, specifically: 3li, 4pcbr,
abaumhau, aesnn, aflynt, ajpiano, akaihola, akshell, alab1001101,
albertvo, alexch, allanm051, andreas, Andrew Powell, andrew.sharpe.7.9,
Aneon, antonello.pasella, aron.duby, arunpjohny, ashish879, ask,
attaboy, audreyt, AzaToth, babaker, BenBlank, bhornseth, bkrausz,
bman654, BMCouto, bmherold, bobbykjack, bobmajdakjr, bohdan.ganicky,
bornemix, Brant Burnett, brostbeef, burhan, Ca-Phun Ung, caesar2k,
carltongibson, cfrerebeau, chaos, Chealer, Chi Cheng, chrisbarr,
cjwilks, coeamyd, colinclark, conkey2, crankharder, crexland, cupdike,
cyberdaz360, d.wachss, d3r1v3d, dantman, danw, darkprisma, david.brooks,
davidascher, davidb, defenestrator, Demphest, dhlavaty, diogobaeder,
DiRN, divide, dluk, dmethvin, dmfontz, dmuir, dohsun, doublerebel,
dougneiner, doutu, dpeterman, dprunier, DRHansen, dtetto, duelli,
dunghopper, ecaron, eib, epascarello, epiraux, erikharrison, ethan,
FDisk, FelipeMorais, fgTodd, Flany, FreakCERS, geki007, george.adamson,
glipman, gotmikhail, grabanski, graemeworthy, GreyCells, guile, haayman,
hatapitk, idlesign, igor.morozov, Infarinato, itfische, ivanko,
jabbott7, JBeckton, jdillmann, jeffgran, jollytoad, julian.jelfs, Jörn
Zaefferer, kae, ke4roh, Keith Wood, kevin.wells, klarkin, Klaus Hartl,
kswedberg, lisaj, lnostdal, lunchtimemama, L\_K\_W, m4olivei, macarthy,
Maggie Costello Wachs, marcoos, margustiru, martinkeimel, Matty, mawcs,
mconway, mdiaz, menteb, mesoconcepts, mg, MikaJ, mikecapp,
mikehostetler, Miroku\_87, mkemmerling, mkornblum, moveax, MugeSo,
mulhoon, mvermilion, neilski, nikolae, NJBR, nodster, ntoniazzi, obrie,
patrick, Paul Bakaus, quasipickle, qwerty, ramaboo, raszi, rbrackett,
remi, rgluga, ricardolopezrey, Richard Worth, riegens, rnbguru,
RobARichardson, rsyring, Rwhitbeck, sam, Sancus, sc0rchin, SCCY, Scott
González, Scott Jehl, sdavis, sebbacon, Sebmaster, seph429, sgorski,
shartley, sherington, shuckster, slobo, smadep, snobo, sonu27,
sosensible, spiralni, stakach, StevenBlack, TaeVjQuery, tan, Tgr,
th3br41n, theojapa, thetoolman, tibi7000, timolastfm, togis, tomas,
triblondon, trixta, uggedal, urkle, veronica, viraj.kanwade, vmx,
vrn\_shan, wakamolee, wewals, whydream, wichert, wimvl, Wolfjourn,
xorax, xover, yourcelf, ZaDarkSide, ZeroMD, zeta, Zidane
