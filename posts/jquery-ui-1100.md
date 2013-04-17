Continuing with the [jQuery anniversary
announcements](http://blog.jquery.com/2013/01/14/the-state-of-jquery-2013/),
we're happy to announce the first stable release of jQuery UI 1.10.
While, 1.10 doesn't add any new widgets, it does continue the [API
redesigns](http://blog.jqueryui.com/2011/03/api-redesigns-the-past-present-and-future/)
and fixes dozens of bugs.

### API Redesign: Dialog

The dialog widget has undergone an [API
redesign](http://forum.jquery.com/topic/dialog-api-redesign), making it
more consistent with other widgets and providing better stacking and
modal support. Make sure to read the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.10/#dialog) so you can
migrate away from the deprecated APIs.

### API Redesign: Progressbar

The progressbar widget has undergone an [API
redesign](http://forum.jquery.com/topic/progressbar-api-redesign),
though there are no breaking changes. The only significant change was
the addition of support for indeterminate progressbars. Check out the
[upgrade guide](http://jqueryui.com/upgrade-guide/1.9/#progressbar) for
more information.

### Improved Accessibility

We put a lot of effort into making dialog and progrssbar as accessibile
as possible. Unfortunately ARIA still needs some work before it can be
used without hacks, but we're working closely with standards bodies,
browser vendors, and the accessibility community to improve web
accessibility beyond jQuery.

### Deprecated APIs

As mentioned above, dialog went through an API redesigns which resulted
in some existing APIs being deprecated. These APIs will be removed in
1.11.0. The 1.10.0 release includes a flag to disable all deprecated
APIs, allowing you to determine if your code is ready for 1.11.0 even
before it is released. There are full details on how to use the flag in
the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.10/#api-redesigns).

### Removed 1.8 Back Compat

Several APIs were deprecated in 1.9.0 and have now been removed. If you
haven't already prepared for this change, make sure to read the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.10/) so you can migrate away
from the now obsolete APIs.

### Supported jQuery Versions and Browsers

jQuery UI 1.10.0 supports jQuery 1.6 and newer. That's 13 versions!
Multiply that by the number of supported browsers and you've got quite a
support matrix. Speaking of supported browsers, jQuery UI no longer
provides support for IE6.

### Download

#### [File Downloads](http://jqueryui.com/download/all/)

-   Development
    Bundle: [http://jqueryui.com/resources/download/jquery-ui-1.10.0.zip](http://jqueryui.com/resources/download/jquery-ui-1.10.0.zip)
-   Themes
    Package: [http://jqueryui.com/resources/download/jquery-ui-themes-1.10.0.zip](http://jqueryui.com/resources/download/jquery-ui-themes-1.10.0.zip)

#### [Git](http://github.com/jquery/jquery-ui/) (contains source files, with @VERSION not yet replaced with 1.10.0, base theme only)

-   Tag: [http://github.com/jquery/jquery-ui/tree/1.10.0](http://github.com/jquery/jquery-ui/tree/1.10.0)

#### [Google Ajax Libraries API](https://developers.google.com/speed/libraries/devguide#jquery-ui) (CDN)

-   Uncompressed: [http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js)
-   Compressed: [http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js)
-   Themes:
    [base](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/base/jquery-ui.css),
    [black-tie](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/black-tie/jquery-ui.css),
    [blitzer](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/blitzer/jquery-ui.css),
    [cupertino](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/cupertino/jquery-ui.css),
    [dark-hive](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/dark-hive/jquery-ui.css),
    [dot-luv](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/dot-luv/jquery-ui.css),
    [eggplant](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/eggplant/jquery-ui.css),
    [excite-bike](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/excite-bike/jquery-ui.css),
    [flick](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/flick/jquery-ui.css),
    [hot-sneaks](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/hot-sneaks/jquery-ui.css),
    [humanity](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/humanity/jquery-ui.css),
    [le-frog](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/le-frog/jquery-ui.css),
    [mint-choc](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/mint-choc/jquery-ui.css),
    [overcast](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/overcast/jquery-ui.css),
    [pepper-grinder](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/pepper-grinder/jquery-ui.css),
    [redmond](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/redmond/jquery-ui.css),
    [smoothness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.css),
    [south-street](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/south-street/jquery-ui.css),
    [start](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/start/jquery-ui.css),
    [sunny](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/sunny/jquery-ui.css),
    [swanky-purse](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/swanky-purse/jquery-ui.css),
    [trontastic](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/trontastic/jquery-ui.css),
    [ui-darkness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/ui-darkness/jquery-ui.css),
    [ui-lightness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/ui-lightness/jquery-ui.css),
    and
    [vader](http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/vader/jquery-ui.css).

#### [Microsoft Ajax CDN](http://www.asp.net/ajaxlibrary/cdn.ashx) (CDN)

-   Uncompressed: [http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.js](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.js)
-   Compressed: [http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.min.js](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.min.js)
-   Themes:
    [base](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/base/jquery-ui.css),
    [black-tie](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/black-tie/jquery-ui.css),
    [blitzer](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/blitzer/jquery-ui.css),
    [cupertino](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/cupertino/jquery-ui.css),
    [dark-hive](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/dark-hive/jquery-ui.css),
    [dot-luv](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/dot-luv/jquery-ui.css),
    [eggplant](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/eggplant/jquery-ui.css),
    [excite-bike](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/excite-bike/jquery-ui.css),
    [flick](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/flick/jquery-ui.css),
    [hot-sneaks](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/hot-sneaks/jquery-ui.css),
    [humanity](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/humanity/jquery-ui.css),
    [le-frog](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/le-frog/jquery-ui.css),
    [mint-choc](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/mint-choc/jquery-ui.css),
    [overcast](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/overcast/jquery-ui.css),
    [pepper-grinder](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/pepper-grinder/jquery-ui.css),
    [redmond](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/redmond/jquery-ui.css),
    [smoothness](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/smoothness/jquery-ui.css),
    [south-street](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/south-street/jquery-ui.css),
    [start](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/start/jquery-ui.css),
    [sunny](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/sunny/jquery-ui.css),
    [swanky-purse](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/swanky-purse/jquery-ui.css),
    [trontastic](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/trontastic/jquery-ui.css),
    [ui-darkness](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/ui-darkness/jquery-ui.css),
    [ui-lightness](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/ui-lightness/jquery-ui.css),
    and
    [vader](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/vader/jquery-ui.css).

#### [Custom Download Builder](http://jqueryui.com/download/)

### Changelog

See the [1.0 Upgrade Guide](http://jqueryui.com/upgrade-guide/1.10) for
a list of changes that may affect you when upgrading from 1.9.x. For
full details on what's included in this release see the [1.10.0
Changelog](http://jqueryui.com/changelog/1.10.0). You can read more
about the API redesigns in a [previous blog
post](http://blog.jqueryui.com/2011/03/api-redesigns-the-past-present-and-future/ "API Redesigns: The Past, Present and Future").

### Thanks

Thanks to all who helped with this release, specifically: adovenmuehle,
adurante, ahuseynov, ajcrews, alistaircobalt, AlmogBaku, Anika Henke,
atrigent, aubrey, Avinash R, bavanyo, bchiasson, bdh92123, Bethrezen,
bgould, bigorangemachine, Bjørn Johansen, bolerao, borgenk, braddunbar,
brian123zx, captdragon, casey, catapricop, chadn, chintsu, chuvikovsky,
clifforama, CloudStrife, conradirwin, Corey Frang, Cory Gackenheimer,
cowtownfarmboy, dalekocian, danbhfive, davenaeder, David Petersen, David
Souther, David.Sullivan, davidmurdoch, dcarrith, developer123,
dittodhole, DJtomy, Dominic Barnes, dracos, drakes, drew.waddell,
drewkimrey, dutts, eason, ednark, eirc, elisy, emeerson, epascarello,
eriz, Ethan Romba, ezufelt, Fabrício Matté, fedot, feugy, fgutmann,
fofanafi, fontzter, fracmak, GoZ, gusaroni, homelands, htrex, ilanco,
j2jensen, jajo, jamesbathgate, Jay Merrifield, jemunk, jjoemb, jpka,
jprell, Juan Pablo Kaniefsky, julienw, jupeter, Jörn Zaefferer, kalou,
kenaniah, kenjiyamamoto, KopiasCsaba, Kris Borchers, Krisp PL,
kristopolous, kwhat, kyle.davis, larowlan, lisaj, Liv32Inspir3, Lucky,
lukepage, lukoff, M.Gaetan89, maciejmrozinski, madogai, maets, mankyd,
marcelklomp, MarcoSarti, mariuspuiu, Marshals, Mathias Stenbom,
MatteS75, Matthieu Penant, may, mblaney, meotimdihia, MetalArend, Mike
Sherov, mikepelley, Mikko Rantanen, misterdai, mjpowersjr, mmartin,
MrBigDog2U, mrfr0g, Nate Eagle, nicholashall, Nodens, NovaYear,
ollie2893, ours, paul, Pavel Selitskas, Pawel Maruszczyk, PhoenixFnX,
pifantastic, PlanetPratt, prinzdezibel, probins, Rafael Xavier de Souza,
raphinesse, rdworth, richwag, robmonie, Roman Salnikov, RwwL, salnikov,
Samuel Bovée, samycookie, saulotoledo, sc0rchin, Scott González,
scoulibaly, Sergey Kartashov, shadowman131, silesianlordt, Simon1979,
sjonne, slolife, Spider, sslavic, ssoorriiin, swalke16, symve,
techtangents, TheDoci, ThiefMaster, tibi7000, Timo Tijhof, TJ VanToll,
tomcastleman, tomjung, uibugger123, Ult Combo, ushi, Viktor Kojouharov,
vol7ron, watanabe, wfsiew, wichert, Xar, Xavi, zbapoc, zniki.ru, zoggy.

### Comments

*Note: **please do NOT use the comments section of this blog post for
reporting bugs.** Bug reports should be filed in [the jQuery UI Bug
Tracker](http://bugs.jqueryui.com/) and support questions should be
posted on the [jQuery Forum](http://forum.jquery.com/).* *If you have
feedback on us doing our final release for jQuery UI 1.10.0, feel free
to leave a comment below. Thank you.*
