Attention: We found a regression in the rc3 release that breaks
datepicker in Internet Explorer. The issue has now been resolved with
the rc4 release - please do not download the rc3 release anymore. We
apologize for the inconvenience.

I'm absolutely thrilled to announce the latest release candidate for the
long awaited jQuery UI version 1.6. It has been a busy couple of months,
and not only our team but also our processes, specifications, and
codebase has been updated. This means that rc4 isn't simply a bugfix
release on top of rc2, but really a whole different level of code. Using
a our new interaction design processes, we build up the foundation of
many widgets from the ground up, and refactored widgets multiple times
until we finally reached the look and feel we were confident with. So,
let me show you quickly what has changed especially in this release!

### Datepicker and slider refresh

In order to make room for the new theming, we needed to unclutter the
datepicker a bit. A couple of options have been removed, changeMonth and
changeYear have been changed to be disabled by default and
showButtonPanel was introduced as new method. More on that soon,
detailed information can also be found in the [related
ticket](http://ui.jquery.com/bugs/ticket/3647). The slider also went
through a refactor. The 'axis' option was changed to 'orientation', the
'handle' and 'handles' options were removed, 'steps' and 'stepping' were
removed in favor of 'step', 'startValue' and 'moveTo' have been removed
in favor of 'value' (option and method), and much more. For more detail,
see the [slider specification page](http://jqueryui.pbwiki.com/Slider).
We will provide detailed compatibility information and upgrade solutions
with the final release, so stay tuned.

### Drag & Drop logic overhaul

The positioning and intersection logic of drag and drop and sortables
has been completely redone, along with more than 200 automated tests to
test all different environments, i.e. scroll offsets and position
values. As positive effect, at least 30 conditions where the positioning
was failing (i.e. scroll not included, helper stick at top) had been
fixed.

### New widget designs

jQuery UI 1.6rc4 features an entirely new look and feel, designed by our
new Interaction Design team and powered by the new jQuery UI CSS
Framework. Each widget's markup and CSS has been re-approached to
provide our cleanest and most flexible solution yet.

### CSS Framework

jQuery UI 1.6rc4 is built upon a brand new powerful CSS framework. The
new jQuery UI CSS framework is built to support not only jQuery UI's own
plugins, but also custom plugin development. It is a special kind of CSS
framework that is aimed specifically at user interface development as
opposed to overall page layout. The framework provides classes for
commonly used UI utilities, states, containers and icons and is
manipulated by jQuery UI ThemeRoller. Read more about the framework API
here:
[http://jqueryui.pbwiki.com/jQuery-UI-CSS-Framework](http://jqueryui.pbwiki.com/jQuery-UI-CSS-Framework)

### Refreshed demos

![Themeroller v2](http://ui.jquery.com/images/blog/demos.png) The
website is currently going through some major updates, and in the first
block of changes we're happy to announce that the demos section has been
completely redone from scratch. We removed the demo carousel (which was
nice but not really usable), and introduced a page that both includes
real world and functional demos for all widgets and interactions. The
demos are directly pulled from the actual demos/ directory in our code
repository, and then ajaxified. They are bookmarkable, and if you
download the development bundle, you'll see they even come as
standalone! This is only the first step of where we want to go for the
final 1.6 release. If you're interested in how it might look in the end,
have a peek at our [design
wiki!](http://jqueryui.pbwiki.com/Website-Triage)

### Themeroller v2!

![Themeroller v2](http://ui.jquery.com/images/blog/themeroller.png)
[ThemeRoller](http://ui.jquery.com/themeroller) has been completely
redesigned to compliment the new CSS framework and widget designs.
ThemeRoller now resides in a vertical sidebar and has loads of new
features added, such as: **Toggle-able panels with previews**
ThemeRoller's levers are now grouped into collapsible panes for ease of
use. Each pane shows a preview of that state's current styles so you can
still view its settings while collapsed. **New Levers! Round corners!
Drop shadows!** We've added new levers to the application for highlight,
error, corner radius, overlays, and overlay shadows. Try em out!
![Themeroller v2 -
Shadows](http://ui.jquery.com/images/blog/themeroller_shadows.png)
**Icon sprites** The jQuery UI CSS Framework comes with loads of icons
for custom widget development. Icons are now packed into sprites and
classes for each icon can be found in the docs. ![Themeroller v2 -
Icons](http://ui.jquery.com/images/blog/themeroller_icons.png) **New
themes** We've added a bunch of cool new themes to the new gallery which
can beviewed and customized in the gallery tab of ThemeRoller.
![Themeroller v2 -
Gallery](http://ui.jquery.com/images/blog/themeroller_gallery.png)
**History/back button support** Every action you take in TR is now
undoable/redoable through your browser's history. **Legacy theme
support** Themes designed using the older version of ThemeRoller will
load just fine in ThemeRoller v2, but keep in mind that there are a
number of new settings that your old theme will not have yet. This
version of ThemeRoller allows you to still download any ThemeRoller
theme for jQuery UI 1.5. **Coming soon...**

-   PNG 8 Support in ThemeRoller
-   New ThemeRoller developer tool: Pull ThemeRoller into any page on
    the web and design themes for custom components built using the
    jQuery UI CSS Framework.
-   New ThemeSwitcher bookmarklet: A quick script that will allow you to
    bring a miniaturized Theme Gallery into your web pages to allow
    visitors to quickly change themes for custom components built using
    the jQuery UI CSS Framework.

### Download and test!

Now go ahead and download from our [download
page](http://ui.jquery.com/download), then help us test and report
anything odd that looks like a bug in our
[bugtracker](http://ui.jquery.com/bugs). Also note: jQuery UI 1.6 final
will ship with and require jQuery 1.3, so please let us know if you find
any issues when combining this release with jQuery 1.3b1. Cheers!
