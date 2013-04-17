### jQuery UI 1.5b4

**Attention: We originally intended to release 1.5b3 a couple of hours
ago, but we had two serious issues that forced use to deprecate it and
go for b4. Sorry for the inconvenience.** The third and last beta has
finally arrived to jQuery UI 1.5. Hundreds of hours went into fixing
more than [50 bugs](http://dev.jquery.com/report/26) for this release -
it's all about stability. jQuery UI 1.5b4 is the **last release before
pushing out a release candidate** - and with only 5 major bugs left, you
can expect to see the next release in the next couple of days! Although
it's mainly a stability release, we also introduced **many new API
helpers**, **removed the dimensions dependancy** and made all plugins a
bit smaller by **introducing a generic widget factory** into the core.
Even better, performance of UI components firing events (i.e.
"mousemove" in Draggables) was dramatically improved with recent changes
in the jQuery core. With the release candidate following right after
this one, we will also push out a **live test suite** for everyone to
use on any platform, helping us to track down issues, and fixing them
for the final release. Yes, this means you an expect a stable, solid and
performance-optimised 1.5 release this month! **Go grab the whole
package** (This package includes a custom build jQuery you'll need,
too):
[jquery.ui-1.5b4.zip](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery.ui-1.5b4.zip)

### jQuery Enchant becomes part of jQuery UI

After many weeks of discussions, I'm particulary happy to announce that
the **unreleased jQuery effects suite "Enchant"**, earlier introduced as
sister library to jQuery UI, is now a **part of jQuery UI**. With the
1.5b4 release, you'll see a bunch of new files in the project's folder!
The jQuery UI effects can be **used standalone** or together with UI and
have a separate core, which extend the jQuery core to introduce
**easing, class transitions (morphing)** and **color animations**. All
further effects are tighly integrated into the main API and can be used
as standalone ( *\$(..).effect()*) or directly from within jQuery
methods you already know ( *hide()/show()* ). There's no documentation
for the rich effect API at this point, but we'll make sure it's released
before the final release of jQuery UI 1.5. In the meantime, feel free to
start digging through the code - and watch more more blog posts
discussing the new effects! Overall, we have **more than 15 ready-to-use
effects** for you to use in your projects, not only including
**everything you know from script.aculo.us**
(*blind,bounce,drop,fold,slide ...*), but also fresh new effects
(*transfer, explode. clip, scale*) for you to enjoy!

### jQuery UI has a new home

![UI
Website](http://blog.jquery.com/wp-content/uploads/2008/05/ui_website.jpg)
I'm absolutely thrilled to announce that jQuery UI has finally found a
new home at [http://ui.jquery.com](http://ui.jquery.com), along with
**brand new content**, a **new combined logo** and a complete **new
design**. After many weeks of iterations, we finally found the time to
concentrate a bit on the website. The new site features a complete new
[download builder](http://ui.jquery.com/download_builder/) already
including effects, a [real-world demo
carousel](http://ui.jquery.com/demos), and a [functional demo
suite](http://ui.jquery.com/functional_demos/) that makes it easy to see
and try out UI examples and their syntax. Also planned for the next
weeks is a theme section with directions on downloading UI themes and
how to make them, and a tutorials section that will feature easy
tutorials to easily learn controlling UI widgets. A big thanks and kudos
goes to Liferay's Art Director [Brian
Miller](http://www.brianedwardmiller.com/), who did a great job and
invested countless hours to achieve this beautiful design! See you soon!
Paul Bakaus and the jQuery UI Team
