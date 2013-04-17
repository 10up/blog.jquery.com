We recently discovered an issue with the download builder which caused
it to serve cached 1.5rc1 files instead of the final package. We
sincerely apologize for the inconvienience caused by this and strongly
suggest to download jQuery UI 1.5 again if you downloaded it as a
configured package. Additionally, an issue has been found in ThemeRoller
that causes the downloaded images to be default images in most cases.
The issue was fixed now, and we also suggest you to try out downloading
your theme again.

### jQuery UI 1.5: Rethinking Our Approach to UI

![ws\_Path\_of\_Light\_1024x768.jpg](http://blog.jquery.com/wp-content/uploads/2008/06/ws_Path_of_Light_1024x768.jpg)
When we first started with the UI project, we set out to build a
generic, basic, and simple way of adding and extending core interaction
to DOM elements. However, we soon found that our approach wasn't working
for UI. Using the "simple" approach, we were only able to serve simple
interaction modules, but not full featured UI widgets. The second
problem was that some plugins came from external sources making the UI
suite seem disjointed and inconsistent. All of this occurred right after
we released 1.0 and we immediately realized it was time to reconsider
our path. We had to find a approach that kept the *simplicity of jQuery*
while making it possible to add full featured widgets to UI. We also
already knew that **something very simple to use is very challenging to
develop**. The first task was to build a generic API that allowed for
**maximum flexibility** while being **amazingly simple**. The next task
was making it similarly simple to develop plugins for that API.

### One API to Rule Them All

What we came up with, was an API that **removed 95% of our exposed
methods**, and kept only **one single overloaded method per plugin**.
For example:

-   *\$("div").draggable()* creates a draggable
-   *\$("div").draggable("destroy")* destroys it
-   *\$("div").draggable("method")* calls another method on the plugin.

The new API also makes all callbacks behave similarly, exposes the
default options for each plugin and intelligently cleans up plugins
using remove(). We also made it possible to update plugin options on the
fly, and added smaller updates that make UI feel like one suite. In
order to make this happen, we **removed the jquery.dimensions.js**
(which can now be found in jQuery core), **the ui.mouse.js and the
\*.ext.js dependancies**, **introduced a ui.core.js** (which includes
many useful helpers) and created the [jQuery UI widget
factory](http://docs.jquery.com/UI_Developer_Guide#Widgets) which makes
creating a new plugin for UI amazingly simple while making it very
difficult to break the API.

### Stability, Debugging, Testing and jquery.simulate

It was extremely important that jQuery UI v1.5 was not only feature-rich
but also stable. We took several steps to greatly improve our debugging
and testing including the setup of our [own dedicated
bugtracker](http://ui.jquery.com/bugs) with jQuery UI specific version
and milestone targeting. We also invested a lot of time into [new unit
tests](http://ui.jquery.com/bugs/browser/trunk/tests) that make use of
the jQuery test suite [Qunit](http://dev.jquery.com/view/trunk/qunit).
Finally, we created
[jquery.simulate.js](http://ui.jquery.com/bugs/browser/trunk/tests/simulate/jquery.simulate.js),
a plugin specifically designed to **fire true browser events**. This
means, you can actually tell the plugin to pick up your draggable, move
it to a certain position and release it again, just if you'd be talking
to a real testing person.

### The Need for Effects: Enter Enchant

One of the great things in being able to take a step back is that it
offers a totally different perspective on what a full-featured UI
solution should offer. While jQuery UI v1.0 was currently offering a
nice suite of UI controls, users were in need of solid effects like
those offered in libraries such as
[script.aculo.us](http://script.aculo.us) and jQuery UI's former
inspiration, **Interface**. Unfortunately, Interface was no longer being
updated which left a bit of a hole in terms of effects; hence a new
project called "Enchant" was born. Originally planned to be released as
a complementary library to jQuery and jQuery UI, we realized that it
made perfect sense to merge Enchant with jQuery UI allowing users easy
access to advanced effects and UI controls from one solution. We're
proud to announce that **Enchant is now a part of jQuery UI** and jQuery
users now have a unified solution for their effects and UI needs. The
jQuery UI effects can be **used standalone** or together with UI and
have a separate core which extends the jQuery core to introduce
**advanced easing, class transitions (morphing)** and **color
animations**. All effects are tightly integrated into the main API and
can be used as standalone ( *\$(..).effect()*) or directly from within
jQuery methods you already know ( *hide()/show()* ). Overall, we already
have **more than 15 ready-to-use effects** for you to use in your
projects, not only those **provided by script.aculo.us**
(*blind,bounce,drop,fold,slide ...*), but also fresh, new effects
(*transfer, explode. clip, scale*) that make jQuery UI a great library
enhancing your applications! As promised in one of the last blog posts,
it comes with a [complete
documentation](http://docs.jquery.com/UI/Effects) and a [combined
demo](http://ui.jquery.com/repository/real-world/effects) page to let
you see them in action.
[![themeRoller\_ui\_full.png](http://blog.jquery.com/wp-content/uploads/2008/06/themeRoller_ui_full.png)](http://ui.jquery.com/themeroller)

### Roll Your Own Themes: ThemeRoller!

One of the first things that a user typically wants to do when using new
UI controls is "skin" them to match their site's color schemes.
Obviously, when you have UI controls from varying sources, the ability
to provide a consistent "theme" across all controls becomes much more
difficult since most component authors have their own method of skinning
their controls. We took a serious look at this and made it a priority to
have a consistent default theme that users could use as a template for
customizing jQuery UI's set of widgets. We reached out to Boston-based
[Filament Group](http://www.filamentgroup.com) for some help in this and
they were all for it. Being very invested in jQuery, they saw this as a
great opportunity to further help the project. Well, what went from an
discussion outlining a single default theme quickly blossomed into
jQuery UI's killer app; ***ThemeRoller***.
[ThemeRoller](http://ui.jquery.com/themeroller) offers a **unique
approach to theming UI components** specifically built for jQuery UI.
With ThemeRoller, you can **create your very own theme** for your
project within minutes. It's completely intuitive, comes wich rich
controls to **change the color and design of each state**, and then
**previews your theme with the actual UI components** as you work! You
now have literally **millions of combinations** to chose from. Any theme
you create can be reached by copying the URL at any point in your
progress; and after you've played with it enough, you can click the
download button and a **ZIP package is generated** with the css file,
the images and a demo page. In addition, ThemeRoller also includes a
theme gallery to browse for downloads and inspiration. Creating a theme
for your application doesn't get any easier than this; it's simply that
amazing. We really want to extend our deepest gratitude to the amazingly
talented folks at the [Filament Group](http://www.filamentgroup.com) for
creating this amazing application. Oh and by the way, you can also reach
ThemeRoller by direct URL at: [ThemeRoller.com](http://themeroller.com).
If you want to know more about this great app and how it's done, visit
the [excellent blog
writeup](http://www.filamentgroup.com/lab/introducing_themeroller_design_download_custom_themes_for_jquery_ui/)
by Filament Group!

### Plugin Stabilization and Enhancements

The biggest improvements and changes were done on individual plugin
code. Almost every plugin has been completely rewritten from scratch to
optimize stability and performance and every plugin now comes with a bug
changelog. We also focused heavily on enhancing options and increasing
flexibility (e.g. connecting sortables to draggables) to allow our
plugins to be used in almost every environment. The best way to get a
full feel for every enhancement to jQuery UI's components is to review
the [changelog](http://docs.jquery.com/UI_1.5_Changelog). It's fairly
extensive and gives an indication of the incredible effort put in by the
UI team. In the near future, we'll be creating postings and articles
which outline the newest features of UI's components. In the meantime,
we suggest you read our [blog post about jQuery UI
1.5b](http://blog.jquery.com/2008/02/12/jquery-ui-15b-new-api-more-features-huge-performance-boost/),
which explains many of the mouse interaction changes (sortables,
draggables, slider), and dig through the
[documentation](http://docs.jquery.com/UI) and the
[changelog](http://docs.jquery.com/UI_1.5_Changelog) yourself.

### Downloading

**jQuery UI v1.5:** *Final Release:*
[http://ui.jquery.com/download](http://ui.jquery.com/download) You can
also checkout the full release of jQuery UI v1.5 from the [Subversion
repository.](http://docs.jquery.com/UI/Subversion)

### There's more to come!

![coverflow.png](http://blog.jquery.com/wp-content/uploads/2008/06/coverflow.png)
This has truly been an amazing effort and we're very proud to be able to
offer a comprehensive UI solution to the jQuery community. We're already
planning the next release and have a huge roadmap that contains plugins
like grid, tooltips, menus, colorpickers, autocompletes and much more.
Many of them are already done and commited code-wise. We've also planned
plugins using new technologies like Webkit's css transforms (see the
recent [coverflow plugin](http://paulbakaus.com/?p=6)), so stay tuned.
None of this would've been possible if not for the amazing efforts and
dedication the [jQuery UI team](http://ui.jquery.com/about). They've
dedicated so much of their personal and professional time to create this
amazing library and they deserve so much credit for their hard work. We
also want to thank the jQuery core team, with whom we worked closely
together to integrate many needed features into the jQuery core itself.
Last but certainly not least, we want to give a VERY special thanks the
[Liferay](http://liferay.com) staff, who invested countless hours into
the development of the [new UI website](http://ui.jquery.com), and with
whom we worked closely together to stabilize jQuery UI for all kinds of
enterprise situations. Thank you for all of your support, **** Paul
Bakaus & the jQuery UI Team**
