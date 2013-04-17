We surpassed the millionth download of jQuery UI using our recent
DownloadBuilder and ThemeRoller
[rewrite](https://github.com/jquery/download.jqueryui.com/) back on
February. As of today, we have served 1,730,000 downloads and counting.
Read on for some insights into what we've built, and the trends we've
noticed so far. The former server-side code was written in
[PHP](http://php.net/).  It's been rewritten in JavaScript and runs on
[node.js](http://nodejs.org/), and it is much more integrated with
jQuery UI release process overall. The client-side has been rewritten as
well, although we didn't make any big changes to the UI/UX. On the
client side, despite the few visual changes, we have some interesting
updates. The DownloadBuilder now remembers what user selects and makes
it linkable, so it's easy to share or go back and modify a custom theme.
We're also shortening links automatically if they get too big, by
zipping parts of the query string. The backend in-memory-caches the
source files and theme images to speed up the downloads. Since it serves
custom downloads, the parts are not simply assembled, but rather
modified on build-time and then assembled. The average build & package
time is 1.3s. The download traffic is pretty uniform and constant; we
hit an average of 66,000 downloads per week, having more traffic during
the weekdays and less traffic during the weekends. When we publish a new
release, we see a 10% increase on traffic. Adoption of the new release
is really fast, legacy downloads drop virtually immediately. Although,
we still have a significant amount of 1.9.x downloads after the 1.10.x
release, splitting the total as chart shows below. [![Downloads per
version](http://blog.jqueryui.com/wp-content/uploads/2013/03/Downloads-per-version1.png)](http://blog.jqueryui.com/2013/04/1000000-custom-downloads-in-four-months/downloads-per-version-2/)
29% of users download the default components with the default theme.
Other than that, we have all sorts of custom combinations happening.
They choose different components, different themes, or a mix of both.
Among the component customizations (which represent 26% of all total
downloads), 15% are only Datepicker (the winner by far), followed by No
Components (8.5%), which packages the theme only, Autocomplete (4.5%),
Dialog (4.25%), and Tabs (3.75%).
  --------------------------------------------------------------------------------------
  Custom component selection
  ---------------------------------------------- ---------------------------------------
  Datepicker\                                    14.95% (4.34% of all downloads)\
   - Datepicker and its dependencies\             - 12.72% (3.69% of all downloads)\
   - Datepicker, mouse and position\              - 2.23% (0.65% of all downloads)
                                                 

  No components (theme only)                     8.55% (2.48% of all downloads)

  Autocomplete and its dependencies              4.53% (1.31% of all downloads)

  Dialog only                                    4.25% (1.23% of all downloads)

  Tabs only                                      3.77% (1.09% of all downloads)

  Accordion only                                 2.91% (0.84% of all downloads)

  Slider only                                    2.58% (0.75% of all downloads)

  All, but effects                               1.87% (0.54% of all downloads)

  Core components (no widgets or interactions)   1.60% (0.46% of all downloads)

  Sort interaction only                          1.37% (0.40% of all downloads)

  Interaction and core (no widgets)              1.33% (0.38% of all downloads)

  Draggable interaction only                     1.22% (0.35% of all downloads)

  Effects only                                   1.05% (0.30% of all downloads)

  Tooltip only                                   1.04% (0.30% of all downloads)

  The core component (solely)                    1.02% (0.30% of all downloads)

  **total**                                      **100.00% (26.37% of all downloads)**
  --------------------------------------------------------------------------------------

  Theme customizations (choosing something other than the default UI
Lightness theme) represent 57.5% of all downloads. If we skip the base
theme Smoothness too, theme customizations are actually 42.35% of all
total downloads. 16% of all downloads are user created themes (Custom
Themes), followed by the Redmond (4.86%), UI darkness (2.73%), and Start
(2.38%) themes. Within the users that create a Custom Theme, the
majority of users (77%) download the full "all components" bundle, 5.5%
download it with no components (theme only), and 17.5% do it with a
custom component selection.
Themes (top 11)
Default Component Selection
Custom Component Selection
UI lightness (default theme)
38.76% (28.53% of all DLs)
53.20% (14.03% of all DLs)
Custom Theme
17.10% (12.59% of all DLs)
14.11% (3.72% of all DLs)
Smoothness (base theme)
16.34% (12.03% of all DLs)
11.64% (3.07% of all DLs)
Redmond
5.13% (3.77% of all DLs)
4.13% (1.09% of all DLs)
UI darkness
2.80% (2.06% of all DLs)
2.54% (0.67% of all DLs)
Start
2.60% (1.91% of all DLs)
1.78% (0.47% of all DLs)
Cupertino
2.42% (1.78% of all DLs)
1.97% (0.52% of all DLs)
Blitzer
1.58% (1.16% of all DLs)
1.29% (0.34% of all DLs)
Flick
1.44% (1.06% of all DLs)
1.52% (0.40% of all DLs)
Sunny
1.41% (1.04% of all DLs)
0.91% (0.24% of all DLs)
Dark Hive
1.17% (0.86% of all DLs)
0.72% (0.19% of all DLs)
**total**
**100% (73.63% of all DLs)**
**100% (26.37% of all DLs)**
  Thanks to [clark](https://github.com/clarkbox) and
[Splunk](http://splunk.com) for helping us make sense of all this data!
As usual, if you find any bugs or if you have any ideas on how to make
the DownloadBuilder or ThemeRoller even more amazing, we'd love to hear
from you! But please, don't use the comments, rather please file an
issue [here](https://github.com/jquery/download.jqueryui.com/issues).
