The fourth maintenance release for jQuery UI 1.8 is out. This update
brings bug fixes for the Droppable, Resizable, Selectable and Sortable
interactions as well as the Accordion, Autocomplete, Button, Datepicker
Dialog, Progressbar, Slider and Tabs widgets. jQuery UI 1.8.3 was
released a few days prior to 1.8.4, but there was a problem with the
build system that caused some of the files to not contain any copyright
information. If you noticed the 1.8.3 release and upgraded, please
upgrade to 1.8.4. For the full list of changes, see
the [changelog](http://jqueryui.com/docs/Changelog/1.8.4). You can
download it here:

### Download

#### [File Downloads](http://code.google.com/p/jquery-ui/downloads/list)

-   Development
    Bundle: [http://jquery-ui.googlecode.com/files/jquery-ui-1.8.4.zip](http://jquery-ui.googlecode.com/files/jquery-ui-1.8.4.zip)
-   Themes
    Package: [http://jquery-ui.googlecode.com/files/jquery-ui-themes-1.8.4.zip](http://jquery-ui.googlecode.com/files/jquery-ui-themes-1.8.4.zip)

#### [Svn](http://code.google.com/p/jquery-ui/source/checkout) (contains final files as they are in the zip, with @VERSION replaced with 1.8.4, all themes)

-   Tag: [http://jquery-ui.googlecode.com/svn/tags/1.8.4/](http://jquery-ui.googlecode.com/svn/tags/1.8.4/)
-   Themes: [http://jquery-ui.googlecode.com/svn/tags/1.8.4/themes/](http://jquery-ui.googlecode.com/svn/tags/1.8.4/themes/)

#### [Git](http://github.com/jquery/jquery-ui/) (contains pre-build files, with @VERSION not yet replaced with 1.8.4, base theme only)

-   Tag: [http://github.com/jquery/jquery-ui/tree/1.8.4](http://github.com/jquery/jquery-ui/tree/1.8.4)

#### [Google Ajax Libraries API](http://code.google.com/apis/libraries/devguide.html#jqueryUI) (CDN)

-   Uncompressed: [http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.js](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.js)
-   Compressed: [http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js)
-   Themes:
    [base](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/base/jquery-ui.css),
    [black-tie](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/black-tie/jquery-ui.css),
    [blitzer](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/blitzer/jquery-ui.css),
    [cupertino](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/cupertino/jquery-ui.css),
    [dark-hive](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/dark-hive/jquery-ui.css),
    [dot-luv](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/dot-luv/jquery-ui.css),
    [eggplant](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/eggplant/jquery-ui.css),
    [excite-bike](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/excite-bike/jquery-ui.css),
    [flick](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/flick/jquery-ui.css),
    [hot-sneaks](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/hot-sneaks/jquery-ui.css),
    [humanity](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/humanity/jquery-ui.css),
    [le-frog](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/le-frog/jquery-ui.css),
    [mint-choc](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/mint-choc/jquery-ui.css),
    [overcast](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/overcast/jquery-ui.css),
    [pepper-grinder](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/pepper-grinder/jquery-ui.css),
    [redmond](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/redmond/jquery-ui.css),
    [smoothness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/smoothness/jquery-ui.css),
    [south-street](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/south-street/jquery-ui.css),
    [start](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/start/jquery-ui.css),
    [sunny](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/sunny/jquery-ui.css),
    [swanky-purse](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/swanky-purse/jquery-ui.css),
    [trontastic](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/trontastic/jquery-ui.css),
    [ui-darkness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/ui-darkness/jquery-ui.css),
    [ui-lightness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/ui-lightness/jquery-ui.css),
    and
    [vader](http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/vader/jquery-ui.css).

#### [Custom Download Builder](http://jqueryui.com/download)

### New Features

In this release, we've added four new methods to help with setting the
dimensions of elements (actually, we've modified existing functions from
jQuery core). .innerHeight(), .innerWidth(), .outerHeight(), and
.outerWidth() can now be used as setters. They all accept a number as a
parameter, and that number will be used to set the width or height
appropriately, based on the padding, border, and margins (depending on
the method).

#### Accordion

You can now pass multiple events to accordion's event option. See the
[hover intent demo](http://jqueryui.com/demos/accordion/#hoverintent) to
see an example of an accordion reacting to both clicks and hovers.

#### Autocomplete

Two new options have been added to autocomplete: position and appendTo.
The position option allows you to take advantage of the
[position](http://docs.jquery.com/UI/Position) utility to customize
where the menu will be displayed. The appendTo option allows you to
specify which element the menu will be appended to, defaulting to the
body.

#### Dialog

The dialog plugin has also been updated to allow full usage of the
[position](http://docs.jquery.com/UI/Position) utility. Setting the
dialog's position with a string or array is still possible, but will be
removed in a future version.

#### Tabs

The tabs plugin has been updated to allow accessing tabs by href in
addition to index. The enable, disable, select, load, and remove methods
all accept the href of a tab.

### Changelog

See the [1.8.4 Upgrade
Guide](http://jqueryui.com/docs/Upgrade_Guide_184) for a list of changes
that may affect you when upgrading from 1.8.2. For full details on
what's included in this release see the [1.8.4
Changelog](http://jqueryui.com/docs/Changelog/1.8.4).

### Thanks

Thanks to all who helped with this release, specifically: adw, afcapel,
afmenez, ajcrews, ajpiano, Alberto Fernández Capel, ALLPRO, Ascold,
AzaToth, bamccaig, banacan, Ben Blank, Ben Hollis, bostanio, botio,
brazilianjoe, Carl Fürstenberg, charlesboyung, chromial, chungwu,
Cloudream, david.long03, davidcroda, DayBay, dcramer, Diego, dmuir,
dsdsico, dwreck, eduardo, ehynds, erikrose, eXtreme, floepi, francois,
gavimobile, ggp, gwk, hhillen, hiszpan, Holger, Holger Rüprich,
ilyasahmad, IYS, james, jawsper, jdsharp, jghermsen, joern.zaefferer,
johnk\_c4b, Jon Palmer, jquery-dev, JustinMacCarthy, kaito, keturn,
Kevin Dalman, kingjeffrey, klaus.hartl, kobrigo, lambacck, LynXor,
mathewpeterson, mgurley, mijobe, Mikko Rantanen, mnoland, mofle,
mormegil, mvermilion, nbid, Nick\_Craver, nmaves, nminale, paul, Pavel,
redjag, RedNinja, remoteportal, Rich2k, Richard D. Worth, rtimmermans,
Rwhitbeck, sam.enspiral, Samuel Cormier-Iijima, sarahinthelakes,
sciyoshi, Scott González, scottjehl, Sebmaster, serhii, sleyhane,
smiller.health, spudly, swago, talmdal, theojapa, Tiago Freire,
triblondon, tt0shk0, tzkuei, usd2, vanboom, venky, wouter, ZeekDaGeek,
Ziling Zhao.
