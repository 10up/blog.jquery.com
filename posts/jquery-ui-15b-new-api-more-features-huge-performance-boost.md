Hey everybody, The jQuery team is proud to release the first beta
release of the new upcoming version of UI, [jQuery UI
1.5](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery.ui-1.5b.zip)!
It has been a long path to this release - originally intended to be a
bugfix release, it was growing into something we just couldn't call
1.0.1, not even 1.1, no, it's so damn delicious we had to call it 1.5.
jQuery UI 1.5 is a complete overhaul of the library - many of the
components have been completely rewritten from scratch to improve
overall stability and performance, and we finally managed to settle on a
unified API for all components. So let's get straight to a list of all
the changes:

Unified API
-----------

The API has been updated for all UI components. It should now be very
easy to use other plugins if you're familiar with one of them. There is
only **one exposed method** for every plugin - All other methods are
called by passing in a String into the exposed method, the
initialization of the plugin works by giving on a options hash as first
argument. You can now **change and get all options at a later point** if
you want to by using the new data method. Basic example for draggables:
` $(..).draggable({...}); //Initialize the draggable $(..).draggable("disable"); //Disable the draggable $(..).data("cursor.draggable", "move") //Change the cursor during drag to 'move'`

Updated and revised documentation
---------------------------------

The [documentation](http://docs.jquery.com/UI) in the jQuery Wiki has
been completely updated to reflect the recent changes. We also made sure
all callbacks and its arguments are documented this time.

Drag & Drop: Snapping, Relative dragging
----------------------------------------

Draggables and Droppables have been completely refactored. It might now
be the most **non-destructive** drag & drop implementation ever: The css
position's value will not be changed except for 'static': That means
that elements, that were static or relative, will **not be forced into
absolute positioning**, which often destroyed layouts, especially when
dealing with floats. Some options have been renamed to better be
recognized: **preventionTimeout** becomes **delay**,
**preventionDistance** becomes **distance**. Also, a new option plugin
has been added: **The snap plugin**. Remember the docking Winamp
windows? Yes, you can do that now with UI draggables - just set "snap"
to a selector to select all elements you want to snap to and you're
ready to go. Of course, you can also configure it to your needs using
snapTolerance and snapMode.

Slider: Ranges, multiple handles and accessibility
--------------------------------------------------

The slider wasn't refactored, but has been completely rewritten from
scratch. While it's still almost backwards compatible, it's now very
stable and simpler than ever: The **moveTo** method now only takes two
arguments: The value you want to move the handle to and optionally the
index of the handle you want to move. Want to retrieve a specific handle
value? No problem, just call *\$(..).slider("value", index)* . Even
better, the slider now is **completely keyboard accessible**: You can
now **tab and focus each slider handle** seperately and move its
position using the **left/right keys**. We also improved support for
using the mouse: Clicking into a empty area now moves the focused handle
to the clicked position, regardless on how many handles you have. For
those of you searching for advanced usage, the slider now **supports
ranges**: Just set the option "range" to true and make sure you have two
handles, and the script will create a visible range between these two
sliders that can be styled individually. The script even makes sure that
you cannot create negative ranges.

Sortables: Connected sortables, serialization and more
------------------------------------------------------

Rewritten as well, the sortables now support a wide range of features
you already know from draggables: **cursor, zIndex, revert, opacity,
axis, handles, containment** and **scrolling**. Additional to that, you
can now **serialize your items to a url hash**, and you now have the
often requested ability to **connect multiple sortables**, so you can
drag a node from one sortable to another.

and there's more!
-----------------

This is just an excerpt of the plugins I personally was involved in -
the final release will come with an official changelog - but most of the
other plugins have been refactored as well, with tons of new features in
datepicker, tabs, accordion, resizables and more.

..and less!
-----------

Preparing for our sister library Enchant, we removed the magnifier and
the shadow plugin and moved it to Enchant. Worry not, you can find them
in our SVN trunk under trunk/fx. Additionally, the table sorter
component has been removed because of API and roadmap incompabilities.
There will soon be a grid component that includes most of its
functionality.

...and countless bugfixes
-------------------------

We could have made it easy for us, just rewrite everything and delete
all bug tickets of 1.0 because it's not possible to track down anymore,
but we did not: All issues coming in for the 1.0 release have been
adressed and solved. For everything that has changed in this release,
please consult the [documentation](http://docs.jquery.com/UI) or look
for it in the code. Remember this is a beta release - expect things to
be buggy and unstable (but better than 1.0 :P ). Also, you would do us a
great favor if you report any issues to our [bug
tracker](http://dev.jquery.com/newticket). Now go ahead and grab it
here: [http://ui.jquery.com](http://ui.jquery.com) or directly from our
google code page:
[jquery.ui-1.5b.zip](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery.ui-1.5b.zip).
For this release, we deactivated the downloader - so please download the
zip package and include what you need. You can read about the
dependancies in the documentation. Thanks to all the contributors who
made this release possible - I will thank each of you individually in
the final release notes, I'm too lazy and too tired to do it twice :)
See you again in about two weeks!
