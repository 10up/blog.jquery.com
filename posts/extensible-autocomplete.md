The release of the [Autocomplete
widget](http://jqueryui.com/demos/autocomplete/) in jQuery UI 1.8 was a
pretty important milestone for the jQuery UI team. If you've looked at
the widget, you may have noticed that there are [only four
options](http://jqueryui.com/demos/autocomplete/#options), far fewer
than our other plugins. Unlike
[progressbar](http://jqueryui.com/demos/progressbar/), our plugin with
the fewest options, Autocomplete's small API isn't a direct result of
the plugin's simplicity. In fact, Autocomplete is quite complex.
![](http://blog.jqueryui.com/wp-content/uploads/2010/08/default.png)When
designing the Autocomplete widget, we started with [Jörn Zaefferer's
Autocomplete
plugin](http://bassistance.de/jquery-plugins/jquery-plugin-autocomplete/),
which has 21 options, as a model. Admittedly, Jörn's plugin does more
for you out of the box than ours, but our smaller API is just as
flexible and has the bonus of being easier to learn and use. A lot of
thought, discussion, and prototyping went into narrowing down the list
of 21 options to 4. Out of the box, Autocomplete provides support for
[local data sources](http://jqueryui.com/demos/autocomplete/#default)
and [remote (JSON) data
sources](http://jqueryui.com/demos/autocomplete/#remote) by simply
providing an array or url to the `source` option. Support for
[JSONP](http://jqueryui.com/demos/autocomplete/#remote-jsonp),
[XML](http://jqueryui.com/demos/autocomplete/#xml), and
[caching](http://jqueryui.com/demos/autocomplete/#remote-with-cache) can
all be layered on top in just a few lines of code.
![](http://blog.jqueryui.com/wp-content/uploads/2010/08/html.png)There's
also a set of [extensions hosted by
me](http://github.com/scottgonzalez/jquery-ui-extensions/tree/master/autocomplete/)
that provide additional options for the Autocomplete widget. The [html
option](http://github.com/scottgonzalez/jquery-ui-extensions/blob/master/autocomplete/jquery.ui.autocomplete.html.js)
([demo](http://dev.nemikor.com/jquery-ui-extensions/autocomplete/html.html))
allows you to specify whether your labels should be interpreted as HTML
or text. There's also the [selectFirst
option](http://github.com/scottgonzalez/jquery-ui-extensions/blob/master/autocomplete/jquery.ui.autocomplete.selectFirst.js)
([demo](http://dev.nemikor.com/jquery-ui-extensions/autocomplete/selectFirst.html))
which automatically activates the first item when the menu is shown,
reducing the number of keystrokes necessary to select an option. The
[autoSelect
option](http://github.com/scottgonzalez/jquery-ui-extensions/blob/master/autocomplete/jquery.ui.autocomplete.autoSelect.js)
([demo](http://dev.nemikor.com/jquery-ui-extensions/autocomplete/autoSelect.html))
allows a user to type out a valid option and tab away from the field
without having to select the item from the menu. If the value entered by
the user is valid, the select event will be triggered just as if the
user had explicitly chosen the item from the menu. I also have an
[accent folding
extension](http://github.com/scottgonzalez/jquery-ui-extensions/blob/master/autocomplete/jquery.ui.autocomplete.accentFolding.js)
([demo](http://dev.nemikor.com/jquery-ui-extensions/autocomplete/accentFolding.html))
that makes it easier for users to select values with accented
characters. For example, if there is an item with the text "Jörn", the
user would normally have to type the umlaut in order to see the item.
However, if the accent folding extension is loaded, the user can type
"Jorn" and they will still see the result.
![](http://blog.jqueryui.com/wp-content/uploads/2010/08/accent.png)Going
a step further, you can use custom data formats and define custom
displays. For example, you can [categorize the
results](http://jqueryui.com/demos/autocomplete/#categories) or [display
additional
information](http://jqueryui.com/demos/autocomplete/#custom-data) such
as item descriptions and images. There's even an example of [expandable
search
results](http://dev.nemikor.com/jquery-examples/autocomplete/similar-results.html)
(Note: this is just a prototype based on [a demo from Roman
Chyla](http://www.roman-chyla.net/temp/autocomplete_thesaurus.swf.html),
it is not full-featured. See [the forum
thread](http://forum.jquery.com/topic/enhanced-autocomplete-interest-in-getting-this-into-jqueryui)
for more details). You can even support [multiple
words](http://jqueryui.com/demos/autocomplete/#multiple) from a single
text field. Finally, there's the
[combobox](http://jqueryui.com/demos/autocomplete/#combobox) demo that
brings Autocomplete functionality to select elements. The combobox hides
the select element and instead displays a text field for the user to
type in. The possible values are determined by parsing the options from
the select, and the user can view all options by clicking a button next
to the text field. For a detailed explanation of how the combobox works,
check out [Jörn's article on Learning
jQuery](http://www.learningjquery.com/2010/06/a-jquery-ui-combobox-under-the-hood).
