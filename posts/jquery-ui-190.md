The jQuery UI team has been pretty busy for the past two and a half
years. With more than 500 bug fixes spread over two dozen releases,
we've been working hard to make jQuery UI as stable and flexible as
possible. Last year, [we announced a lofty
goal](/2011/03/api-redesigns-the-past-present-and-future/):

> Our goal is to have a completely refreshed project with the 2.0
> release. We will have a much simpler API, better stability, full
> documentation and a full test suite for every plugin.

Today, we're proud to announce the first major step toward reaching that
goal. jQuery UI 1.9.0 is now available with hundreds of bug fixes, a
bigger and better test suite, and improved APIs. In addition to the
code, we've also deployed all new sites and improved documentation.

### New Widget: Menu

The menu widget was technically released in 1.8, but it was bundled
inside the autocomplete widget and mostly hidden from users. Menu is now
a first class citizen in jQuery UI and is great for inline or popup
menus, as well as a great starting point for more complex menu systems.
Check out the [menu demos](http://jqueryui.com/menu/) and [menu
documentation](http://api.jqueryui.com/menu/) for more details.

### New Widget: Spinner

The spinner, or number stepper, widget is perfect for handling all kinds
of numeric input. Spinners allow users to type a value directly or
modify an existing value by spinning with the keyboard, mouse or
scrollwheel. When combined with
[Globalize](https://github.com/jquery/globalize), you can even spin
currencies and dates in a variety of locales. Check out the [spinner
demos](http://jqueryui.com/spinner/) and [spinner
documentation](http://api.jqueryui.com/spinner/) for more details.

### New Widget: Tooltip

The tooltip widget supports a wide variety of uses: local and remote
content, custom positioning and animation, mouse tracking, event
delegation, and more. Check out the [tooltip
demos](http://jqueryui.com/tooltip/) and [tooltip
documentation](http://api.jqueryui.com/tooltip/) for more details.

### API Redesign: Accordion

The accordion widget has undergone an [API
redesign](http://forum.jquery.com/topic/accordion-api-redesign), making
it more consistent with other widgets and providing better animation
support. Make sure to read the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.9/#accordion) so you can
migrate away from the deprecated APIs.

### API Redesign: Tabs

The tabs widget has undergone an [API
redesign](http://forum.jquery.com/topic/tabs-api-redesign), making it
more consistent with other widgets and providing better ajax support.
Make sure to read the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.9/#tabs) so you can migrate
away from the deprecated APIs.

### API Redesign: Position

The position utilty has undergone an [API
redesign](http://forum.jquery.com/topic/position-api-redesign),
providing better collision detection and support for percent-based
offsets. Make sure to read the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.9/#position) so you can
migrate away from the deprecated APIs.

### Improved Widget Factory

We've added a lot of functionality to the widget factory, especially
related to instantiation and inheritance. There are lots of new features
for widget developers and a few new APIs and improvements for widget
users as well. Check out the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.9/#widget) for more details.

### Improved Accessibility

We put a lot of effort into making accordion, autocomplete, tabs, menu,
spinner, and tooltip as accessibile as possible. Unfortunately ARIA
still needs some work before it can be used without hacks, but we're
working closely with standards bodies, browser vendors, and the
accessibility community to improve web accessibility beyond jQuery. Our
[documentation site](http://api.jqueryui.com/) now includes details
about keyboard navigation for each widget.

### Renamed Effects Files

All effects files have been renamed to match the `jquery.ui.*.js` naming
pattern. If you're using individual effect files, you'll need to update
your file references.

### Deprecated APIs

As mentioned above, many plugins went through API redesigns. As a
result, many existing APIs were deprecated. These APIs will be removed
in 1.10.0. The 1.9.0 release includes a flag to disable all deprecated
APIs, allowing you to determine if your code is ready for 1.10.0 even
before it is released. There are full details on how to use the flag in
the [upgrade
guide](http://jqueryui.com/upgrade-guide/1.9/#api-redesigns).

### Supported jQuery Versions

jQuery UI 1.9.0 supports jQuery 1.6 and newer. That's 11 versions!
Multiply that by the number of supported browsers and you've got quite a
support matrix.

### New Sites

Assuming you're not reading this in a feed reader or some other
syndicated format, you've probably already noticed that our web site has
a brand new look. The sites are still under development, so please bear
with us as we add more content and improve upon the design. We've also
deployed a brand new [API documentation site](http://api.jqueryui.com/)
which includes a lot of information that was missing from the old site.
If you're interested in helping improve any of our sites, they're all
hosted on GitHub now, with the repository names matching the domain
names. For example, the repository for jqueryui.com is
[https://github.com/jquery/jqueryui.com](https://github.com/jquery/jqueryui.com).

### Download

#### [File Downloads](http://jqueryui.com/download/all/)

-   Development
    Bundle: [http://jqueryui.com/resources/download/jquery-ui-1.9.0.zip](http://jqueryui.com/resources/download/jquery-ui-1.9.0.zip)
-   Themes
    Package: [http://jqueryui.com/resources/download/jquery-ui-themes-1.9.0.zip](http://jqueryui.com/resources/download/jquery-ui-themes-1.9.0.zip)

#### [Git](http://github.com/jquery/jquery-ui/) (contains source files, with @VERSION not yet replaced with 1.9.0, base theme only)

-   Tag: [http://github.com/jquery/jquery-ui/tree/1.9.0](http://github.com/jquery/jquery-ui/tree/1.9.0)

#### [Google Ajax Libraries API](https://developers.google.com/speed/libraries/devguide#jquery-ui) (CDN)

-   Uncompressed: [http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.js](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.js)
-   Compressed: [http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js)
-   Themes:
    [base](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.css),
    [black-tie](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/black-tie/jquery-ui.css),
    [blitzer](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/blitzer/jquery-ui.css),
    [cupertino](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/cupertino/jquery-ui.css),
    [dark-hive](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/dark-hive/jquery-ui.css),
    [dot-luv](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/dot-luv/jquery-ui.css),
    [eggplant](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/eggplant/jquery-ui.css),
    [excite-bike](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/excite-bike/jquery-ui.css),
    [flick](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/flick/jquery-ui.css),
    [hot-sneaks](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/hot-sneaks/jquery-ui.css),
    [humanity](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/humanity/jquery-ui.css),
    [le-frog](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/le-frog/jquery-ui.css),
    [mint-choc](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/mint-choc/jquery-ui.css),
    [overcast](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/overcast/jquery-ui.css),
    [pepper-grinder](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/pepper-grinder/jquery-ui.css),
    [redmond](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/redmond/jquery-ui.css),
    [smoothness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/smoothness/jquery-ui.css),
    [south-street](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/south-street/jquery-ui.css),
    [start](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/start/jquery-ui.css),
    [sunny](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/sunny/jquery-ui.css),
    [swanky-purse](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/swanky-purse/jquery-ui.css),
    [trontastic](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/trontastic/jquery-ui.css),
    [ui-darkness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/ui-darkness/jquery-ui.css),
    [ui-lightness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/ui-lightness/jquery-ui.css),
    and
    [vader](http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/vader/jquery-ui.css).

#### [Microsoft Ajax CDN](http://www.asp.net/ajaxlibrary/cdn.ashx) (CDN)

-   Uncompressed: [http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/jquery-ui.js](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/jquery-ui.js)
-   Compressed: [http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/jquery-ui.min.js](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/jquery-ui.min.js)
-   Themes:
    [base](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/base/jquery-ui.css),
    [black-tie](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/black-tie/jquery-ui.css),
    [blitzer](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/blitzer/jquery-ui.css),
    [cupertino](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/cupertino/jquery-ui.css),
    [dark-hive](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/dark-hive/jquery-ui.css),
    [dot-luv](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/dot-luv/jquery-ui.css),
    [eggplant](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/eggplant/jquery-ui.css),
    [excite-bike](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/excite-bike/jquery-ui.css),
    [flick](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/flick/jquery-ui.css),
    [hot-sneaks](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/hot-sneaks/jquery-ui.css),
    [humanity](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/humanity/jquery-ui.css),
    [le-frog](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/le-frog/jquery-ui.css),
    [mint-choc](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/mint-choc/jquery-ui.css),
    [overcast](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/overcast/jquery-ui.css),
    [pepper-grinder](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/pepper-grinder/jquery-ui.css),
    [redmond](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/redmond/jquery-ui.css),
    [smoothness](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/smoothness/jquery-ui.css),
    [south-street](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/south-street/jquery-ui.css),
    [start](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/start/jquery-ui.css),
    [sunny](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/sunny/jquery-ui.css),
    [swanky-purse](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/swanky-purse/jquery-ui.css),
    [trontastic](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/trontastic/jquery-ui.css),
    [ui-darkness](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/ui-darkness/jquery-ui.css),
    [ui-lightness](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/ui-lightness/jquery-ui.css),
    and
    [vader](http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.0/themes/vader/jquery-ui.css).

#### [Custom Download Builder](http://jqueryui.com/download)

### Changelog

See the [1.9 Upgrade Guide](http://jqueryui.com/upgrade-guide/1.9) for a
list of changes that may affect you when upgrading from 1.8.x. For full
details on what's included in this release see the [1.9.0
Changelog](http://jqueryui.com/changelog/1.9.0). You can read more about
the API redesigns in a [previous blog
post](http://blog.jqueryui.com/2011/03/api-redesigns-the-past-present-and-future/ "API Redesigns: The Past, Present and Future").

### Thanks

Thanks to all who helped with this release, specifically: 2Toad,
aaronpeterson, acheetham, acimeha, acwhite, Adam Baratz, adam j. sontag,
Adam Parod, aidan, aifam5, Alberto Fernández Capel, Alberto Monteiro,
Alex Dovenmuehle, Alex Rhea, AlexW, Amir E. Aharoni, Andrew Newcomb,
Andrew Powell, artyv, aschild, asgeo1, AsherMaximum, awgy, AzaToth,
azendal, Azhrei, Baoju Yuan, basti, beatryder, bekok, Ben Boyle, Ben
Hollis, Benjamin Sterling, Bernhard Sirlinger, Bertjh, bluecabbie,
BobbyStealz, borsuk, bruce511, bthompson00, bugbegone, Campbell, Carl
Fürstenberg, carl@stonefintech.com, Carson McDonald, certator, cherif,
Chris Kelly, Christopher McCulloh, clear00, Cloudream, coling, collin,
coredan, Corey Frang, cosmicnet, Courthead, cozydozy, creage, crumbles,
cs94njw, CTAPbIuMABP, ctrlaltdev, cyberboy, d.wachss, dalibor983, Dan
Heberden, danbhfive, Daniel Steigerwald, Danny Trunk, dannyzit, Dave
Methvin, Dave Stein, David De Sloovere, David Leal, David Murdoch, David
Petersen, David Soms, dblood, dclawson, dcohn, ddstreet, deckberg, Den,
dennydaugherty, Diego, dkiselev, dlee, dmcmeans, dmitriy.paramoshkin,
Dmitry Petrov, dominiquevincent, doomedelite, Doug Neiner, DouglasKing,
dwebb66, dwt, ebspromo, Eddie Monge, eduyanez, Edward Faulkner, efoster,
Eike Send, Eneko Illarramendi, epascarello, ergec, eric.muyser, ericw,
EungJun Yi, Everett Zufelt, ExplosionPills, eXtreme, fdemmer, feklee,
Felix Nagel, fernando1124, fiance, Florian Gutmann, fofanafi, G
Karunakar, Garrison Locke, garyz, Gaëtan Muller, George Marshall,
Gilmore Davidson, Giovanni Giacobbi, Glenn Goodrich, gpbmike, gromo,
guettli, Guillaume Gautreau, haeberle, Hans Hillen, haraldo, Harri
Kilpio, Heiko Henning, Herbalite, Hogan Long, Holger Rüprich, hoxworth,
huemorgan, hughlomas, hyperlink, iainxt, idavemm, igor milla, Ildefonse,
Infeligo, irrational, israelrios, itsadok, Ivan Peters, J. Ryan
Stinnett, j.hermsen, Jack Hsu, JackT, Jacob, James Khoury, jamiejag,
Jared A. Scheel, jaredwilli, Jason Davies, Jason Moon, Jason Prell,
JasonBerry, Jasvir Nagra, Jay Merrifield, Jay Oster, jbergenthal,
jdalton, jdart1, jdomnitz, jdufresne, Jean-Francois Remy, Jeff Remy,
Jeff Roush, Jelly, Jellyfrog, jenters, Jesse Baird, jgv, Jiayi Yang,
jihohan, jitter, jjross, Jo Liss, joaoeiras, John Firebaugh, John Resig,
john.culviner, johnashenfelter, johntrepreneur, jomyjohn, Jon Palmer,
Jorge Barreiro, jorisdekinder, josh3736, jquery@pvt, jsgoupil,
JustinMacCarthy, Ján Suchal, Jörn Zaefferer, kapouer, Karl Kirch, Karl
Swedberg, Kato Kazuyoshi, kbwood, Ken Penn, keturn, Kevin Dalman, Khaled
AlHourani, KhoaTon, Klaus Hartl, kliehm, kobrigo, kolak, Kouhei Sutou,
kradmiy, Kris Borchers, Kyle Florence, Kyle Wilkinson, Lado Lomidze, Lee
Rowlands, levushka, lex1982, liangent, Lim Chee Aun, Lopo, lorak110786,
lorife, lotjuh, lschult2, Luis Dalmolin, lukas.olson, Lukasz Lipinski,
lukebrookhart, m157y, macarthy, Maciej Mroziński, maggiewachs, maljub01,
malsup, Marcel Toele, marcis20@yahoo.com, marcneuwirth, marcos.sousa,
Marian Rudzynski, Mario Visic, Mark Aaron Shirley, Mark Johnson,
marteadrian, Martin Hoch, Martin Solli, martinf55, Marwan Al Jubeh,
maspwr, Matt Hoskins, Max Schnur, MaxPower15, mdellanoce, meh-cfl,
Michael DellaNoce, Michael P. Jung, michaelmwu, Michel Weimerskirch,
midlis, Mike Hollis, Mike Sherov, Mike Stay, milan, millman, mirv,
mkemmerling, mkowalski, mofle, mohdyusuf, monoblaine, moxen, mpetrovich,
mriffault, MrMaxx, MSwaff, mwlang, myr, Nate Ferrero, neil.pugh,
Nick\_Craver, NielsJanssen, ninjaxify, nirvanaforu, nogwater, nonplus,
offnight, ohlavacek, Olson.dev, onaiggac, oojacoboo, ORIGINALUSRNM,
ornicar, ostgals, pantsmann, paul, Paul Irish, Pavel Stetina, pegomes,
pheiberg, Philip Graham, Philipp Benjamin Köppchen, Phillip Barnes,
Pierre-Henri Ausseil, piouPiouM, pkruithof, pmawhinney, polomoshnov,
poplix, Probot, pulpulpullie, qicboy, r2363c, Rafael Xavier de Souza,
Ralph Whitbeck, reedmaniac, Richard D. Worth, Rick Waldron, ripper234,
Rob Loach, RobinHerbots, Robson Braga Araujo, RobWilkinsonUK, rockwild,
roman.chizhevsky, ronchalant, rozwell, rp, RR1000, rthapar, rubyruy,
ryanolton, Saji, saks, Samuel Cormier-Iijima, sc0rchin, Scott González,
scott.moore, scr4ve, sergids, sexconker, sgruenholz, shadwdrgn, Shahyar
G, Shannon, sigmasquirrel, Simon, Sindre Sorhus, SineSwiper1, sixhead,
skeetergraphics, skorpan, snb, snover, sp, speaktorob, spekary, SpoonNZ,
stafil, stefanlivens, steptom, stevee@gmail.com, Steven Roussey, stojce,
stringfold, Stéphane Raimbault, sunaku, suner, sunshine, synek,
T.Lindig, t34, tadudek, tashekelahi, teaspoon000, techtangents,
tfotherby, thedoc, thomsbg, ThrushAAX, Tiago Freire, ticketmaster,
tillkruess, Timmy Willison, Timo Tijhof, TJ VanToll, Tobias Brunner,
Todd Parker, tomgallacher, tomykaira, Tony Ross, Trey Hunner, trixta,
tyron, tzkuei, victorq10, Viktar Varvanovich, vrtxf, watanabe, Wesley
Walser, whittet, William Griffiths, William Kevin Manire, wkmanire,
xaav, Xavi, xirzec, yourfavorite, ZeK, Ziling Zhao.

### Comments

*Note: **please do NOT use the comments section of this blog post for
reporting bugs.** Bug reports should be filed in [the jQuery UI Bug
Tracker](http://bugs.jqueryui.com) and support questions should be
posted on the [jQuery Forum](http://forum.jquery.com).* *If you have
feedback on us doing our final release for jQuery UI 1.9.0, feel free to
leave a comment below. Thank you.*
