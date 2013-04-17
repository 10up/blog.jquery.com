We're excited to announce that we've finalized version 1.7 of the jQuery
UI library; we think this is a momentous release and a major leap
forward on a host of fronts.

### What's new?

There's a ton of new stuff in 1.7. We've fixed hundreds of bugs since
1.5.3 and are introducing many new features, a better core architecture,
and major theming improvements. We
[blogged](http://blog.jquery.com/2008/12/31/jquery-ui-16rc3-its-getting-really-close/)
about it
[already](http://blog.jquery.com/2009/01/16/jquery-ui-16rc5-compatible-with-jquery-13/)
for the
[rc's](http://blog.jquery.com/2009/01/30/jquery-ui-16rc6-help-us-test/),
but here is quick list of the highlights:

-   #### jQuery 1.3 compatibility

    jQuery 1.7 is the first release that is compatible with jQuery 1.3.
    That's a good thing (if you can make the switch), since jQuery 1.3
    brings major performance improvements to many areas of jQuery UI.
    Specifically, firing events, DOM operations, and getting element
    offsets have had massive performance improvements. [More about the
    jQuery 1.3
    release](http://blog.jquery.com/2009/01/14/jquery-13-and-the-jquery-foundation/)…

-   #### Revamped and optimized plugins

    In addition to a long list of bug fixes and improvements, we've
    refactored and optimized each plugin to use the cleanest HTML
    possible, with a flexible set of options to make it easy for
    developers to extend and tweak widgets. We've also added a new
    [progress bar](http://jqueryui.com/demos/progressbar/) plugin in
    this release.

-   #### CSS framework

    jQuery UI 1.7 is built upon a brand new and powerful CSS framework
    that is designed to support not only jQuery UI’s own plugins, but
    also custom plugin development, so any developer can easily make
    their plugins ThemeRoller ready. It is a special kind of CSS
    framework that is aimed specifically at user interface development
    as opposed to overall page layout. The framework provides classes
    for commonly used UI elements, states, containers and icons and is
    manipulated by jQuery UI ThemeRoller. [More about the jQuery UI CSS
    Framework](http://jqueryui.com/docs/Theming/API)…

-   #### Themeroller v2

    [ThemeRoller](http://jqueryui.com/themeroller) has been completely
    redesigned to complement the new CSS framework and widget designs.
    ThemeRoller now resides in a vertical sidebar and has loads of new
    features. We also created a [ThemeRoller Developer
    Tool](http://jqueryui.com/themeroller/developertool/) (a
    bookmarklet, so you can bring ThemeRoller into any web page) and a
    [Theme Switcher](http://jqueryui.com/docs/Theming/ThemeSwitcher) (so
    you can switch between themes with a simple drop-down box).

-   #### Demos & Documentation

    Maybe you've seen it already: We merged the top navigation links
    "Demos" and "Documentation" into a unified [Demos &
    Documentation](http://jqueryui.com/demos/) section, so it's easy to
    browse demos and read the documentation all in one integrated
    experience. We've grouped demos of similar features and options
    together so you can easily tab from one to another and compare. As
    you navigate within a page, we update the URL to ensure accurate
    bookmarking and deep linking.

-   #### Full offline documentation

    Full documentation for each plugin is now included in the release.
    Just take a look at the /docs/ folder in the [development
    bundle](http://jquery-ui.googlecode.com/files/jquery-ui-1.7.zip).
    There's a separate (and simple) html file for each jQuery UI plugin
    method. There's no styesheet for these files yet, but they're quite
    functional even without. We'll see about making it a little more
    like the website [Demos & Documentation](http://jqueryui.com/demos/)
    in a future release.

-   #### Major website improvements

    We refactored the [download builder](http://jqueryui.com/download)
    (using progressive enhancement, so it now works with JavaScript
    disabled) and integrated a base theme into the download along with a
    demo html file of all the widgets for easy integration. We
    refactored and improved the landing pages for the
    [Development](http://jqueryui.com/development) and
    [Support](http://jqueryui.com/support) sections to be more
    information-rich and up-to-date.

-   #### CSS framework and themes on Google AJAX Libraries API

    As before, the latest stable release of jQuery UI (now 1.7) is
    hosted on [Google's
    CDN](http://code.google.com/apis/ajaxlibs/documentation/index.html#jqueryUI).
    New in this release, however, Google is also hosting the new jQuery
    UI CSS Framework, as well as our current suite of pre-built themes:
    [base](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css),
    [black-tie](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/black-tie/jquery-ui.css),
    [blitzer](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/blitzer/jquery-ui.css),
    [cupertino](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/cupertino/jquery-ui.css),
    [dot-luv](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/dot-luv/jquery-ui.css),
    [excite-bike](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/excite-bike/jquery-ui.css),
    [hot-sneaks](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/hot-sneaks/jquery-ui.css),
    [humanity](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/humanity/jquery-ui.css),
    [mint-choc](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/mint-choc/jquery-ui.css),
    [redmond](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/redmond/jquery-ui.css),
    [smoothness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/smoothness/jquery-ui.css),
    [south-street](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/south-street/jquery-ui.css),
    [start](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/start/jquery-ui.css),
    [swanky-purse](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/swanky-purse/jquery-ui.css),
    [trontastic](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/trontastic/jquery-ui.css),
    [ui-darkness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/ui-darkness/jquery-ui.css),
    [ui-lightness](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/ui-lightness/jquery-ui.css),
    and
    [vader](http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/vader/jquery-ui.css).

-   #### Themes bundle

    You can now download all the ThemeRoller Gallery themes at once:
    [jquery-ui-themes-1.7.zip](http://jquery-ui.googlecode.com/files/jquery-ui-themes-1.7.zip).
    Or if you're savvy with svn:
    [http://jquery-ui.googlecode.com/svn/tags/1.7/themes/](http://jquery-ui.googlecode.com/svn/tags/1.7/themes/).

-   #### A new dedicated blog

    If you're reading this, you probably know it already. We finally
    made the switch to our very own blog at
    [http://blog.jqueryui.com/](http://blog.jqueryui.com/), where we'll
    regularly blog about development, theming, and more during each
    release. To link the jQuery and jQuery UI blogs, Richard Worth is
    starting a "*This week in jQuery UI*" series on the [jQuery UI
    blog](http://blog.jqueryui.com/), while Karl Swedberg (of
    [learningjquery.com](http://learningjquery.com/)) will do a "*This
    week in jQuery*" series on the [jQuery
    blog](http://blog.jquery.com/), and they will link to eachother.

### Getting Started with 1.7

If you're brand new to jQuery UI, or if you've worked with a version
posted before [January 2009], there are some changes to the API and
directory structures that would be helpful to understand. To get
everyone up to speed fast, we've created a [Getting Started
Guide](http://jqueryui.com/docs/Getting_Started) that walks through the
basics of what jQuery UI 1.7 can do, how to use themes, and how to
download and use the new jQuery UI for the first time.

### Upgrading to 1.7 from previous versions

To ease the transition to version 1.7, we've created a detailed [Upgrade
Guide](http://jqueryui.com/docs/Upgrade_Guide) that summarizes what has
changed for each plugin. If you want to dig into the details, you can
view the full [1.7 Changelog](http://jqueryui.com/docs/Changelog/1.7)
which lists every change made in this release.

### What about jQuery 1.2.6 compatibility?

As we announced earlier, jQuery UI 1.7 is only compatible with the
latest jQuery 1.3+. Now that 1.7 is out the door, we're turning our
attention to creating a jQuery 1.6 legacy release (based on 1.6rc2) that
will roll as many bug fixes as possible into the 1.5.3 codebase and be
compatible with jQuery 1.2.6. We're hoping to have this complete within
the next month. To learn more about this split release approach, please
see [jQuery UI 1.7 is the new
1.6](http://blog.jquery.com/2009/02/12/jquery-ui-17-is-the-new-16/).

### Get involved: Join us on the planning wiki!

We welcome your participation and feedback as we grow into a larger
project. To keep us organized and make planning transparent to the
community, we’ve created a **new design and planning wiki** at
[http://wiki.jqueryui.com/](http://wiki.jqueryui.com/), where we’re
refining and detailing our processes for growing the team and the
project, accepting and reviewing contributions, and prioritizing new
plugins into a **roadmap**. By channeling ideas and decisions made on
the [jQuery UI Dev google
group](http://groups.google.com/group/jquery-ui-dev/) conversations into
the wiki, we hope to provide a **single, unified view** of our current
thinking. To see what we’re up to, check the summary of the current
development status at the top of the wiki homepage.

### Thanks!

Last but not least, we really want to thank all of the (nearly 300)
contributors that helped make this release what it is. We could not have
done it without you: 11880, 4pcbr, aakoch, aali, aaronbarker, adamc,
aflesler, aimerick, ajacksified, ajpiano, aksival, akuzemchak,
alan.castro, aleemb, ALLPRO, anatari, andreas, andrew.akester,
andreyavram, antin, apaella, arjen.vellinga, Arshad Abbas, astray,
auxbuss, ayoung, bendewey, Benjamin Sterling, Blakomen, bmoen, boconnor,
Bohdan Ganicky, braddunbar, Briel, brucealdridge, Bruno Basto, buzz,
c\_schmitz, c\_t, C-rank, Ca-Phun Ung (pazu2k), calin.pavel, cap60552,
chag, cheeaun, cheesedoily, chrisbarr, Christopher T Tillman, cjwilks,
Cloudream, Cody Lindley, Colin Clark, Cornelis G. A. Kolbach, cr at
accxmedia, d.glynn, d.taylor, Dakkar, daniel at zelisko, daniel.richard,
datactrl, Dave, Dave Methvin, david, david at davidkmuir, David Bolter,
davidb, deebo, dekimsey, designerno1, destitutus, dg.kaba, dgyimesi,
djfrey, dmuir, dodge, donschuy, doyer.guyllaume, dtetto, dypa, ebartels,
edomato, Eduardo Lundgren, electrawn, epascarello, erangalp, Eric
Martin, eric258, erl, f.hewitt, figital, filamentgroup, Firehed, Flat
Stanley, floating.eye22, Fontzter, fracmak, fusioned,
fyedernoggersnodden, gargantuan, GavynSykes, george.blouin, GlowingRose,
gpbmike, gregmac, Gunner, happycow, headchem, herve, hex0id,
HookipaDave, hwinkel, ifeghali, Jackson F. de A. Mafra, Jacob, jacobat,
jamrok, janmarek, jasondavies, jbourey, jeff, Jess Mitchell, jezaustin,
jimmy, jink, jneal at liferay, Jo-W, johng, JohnnyCee, Jonas Flint,
Jonathan Sharp, jonspalmer, Jörn Zaefferer, Joshua Langner, jpra,
jsamort, jsycamore, jzu, kaladis, kam99, Karl Swedberg, kbwood, Kevin
Dalman, kevingessner, KevinM2k, Klaus Hartl, kof, kof13, Kostrowsky,
kouphax, kpitn, kylev, leason, linoj, lionel.armanet, lisbakke,
lublushokolad, lukebrookhart, macarthy, magenest, Maggie Wachs,
maguireji, Marc Diethelm, Marc Grabanski, Mark Gibson, mark\_story,
mark.leung, Marsha Hardy, mask2012 at 126, matt83uk, Matteo Ligabue,
mattih5, Maurice, mdenyse, memaddy, mephis1987, metayii, mgerstenblatt,
mgl, mharpste, mholmes, michelled, mikejolley, mikioma, mlang74, morf,
Morten, mpj, mtk, nanodeath, Nate Cavanaugh, Nathaniel, neiljaywarner,
NeoAnderson, nestor.urquiza, nivancevic, nlothian, nostrademons,
ntoniazzi, obrie, olivier, onestone, op, paranoidsponge, paul, Paul
Bakaus, paul.p.carey@gmail.com, Pavel.Mileshchenko, peterp, PJ, Point,
pwnedd, r.riedl at gmx, random at luktown, Ranga Narendra, Rao S.
Thotakura, raus22, raziel057, rdworth, recrit, redsquare, Remy Sharp,
Rey Bango, rgattinoni, Rich Caloggero, rjwalsh at stanford, robmonie,
roch at immoserver, rodrigocuriel, roywb, s.lopes at chello, saturnism,
Scott González, scottjehl, seb.duggan, serializer, serverfire, shelane,
shlomoweb1, Skaffen, skeetio, skorpan, smoofles, smurkas, snobo,
sonofanickel, sonukapoor, sorpigal, sosensible, spiri, Steven Black,
Stuardo -StR- Rodríguez, svinopas, sylvain.baronnet, szinya at mentha,
tallvanilla, Tane Piper, taylorr, tcarnell, theothermike, ThrushAAX,
tiago.simoes, Tim, timothee, tjerkw, tleveque, tlianza, Todd Parker, Tom
Dyer, torq, ToyChicken, trixta, Trustmaster, tud, tuzemec, txgruppi,
unique, vakata, valerchik, vladm, vmx, walterbt, webdawson, wichert,
Wobble, wolfpakz, Yëco, zeguizmo, ZeroMD, ziadoz, zigzag.chen.

Lamisil FOR SALE, It was about four years ago when Scott decided to
return to the pool. A swimmer since his youth, he enjoyed competing and
[buy lamisil online](http://canadadrugs-lam.com/) Lamisil is the brand
name of the onychomycosis drug terbinafine hydrochloride. Lamisil can
kill fungus in vitro (in a dish) and is presumed to kill or inhibit. \
 would like to share my Unique Hoodia experience for all those ladies
who are overweight and looking desperately here and there for a miracle
[slimquick hoodia](http://buy-hoodia.info/) Learn about the 'All Natural
Weight Loss Supplement' which world medallist swimmer Paul Callis swears
by. Hoodia Gordonii loses real weight naturally. \
 True beauty comes from within. Did not matter how much you spend on
beauty products and skin care, Get Natural Aphrodisiac, Fountain of
Youth, Appetite [hoodia appetite
suppressant](http://hoodia-appetite-suppressant.info/) Quantity: 30
Capsules Serving Size: 3 Capsules Appetite Away: A Weight Loss Formula
and Powerful Appetite Suppressant A simple truth: The common cause
