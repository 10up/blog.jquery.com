The first beta release for jQuery UI 1.10 is out, barely more than two
months after the 1.9 release. Naturally, we've focused on specific
widgets for this release, along with a usual barrage of bug fixes. The
big changes:

-   [Dialog API
    redesign](http://forum.jquery.com/topic/dialog-api-redesign) and a
    ton of accessibility updates: This was our main goal for this
    release. Dialog is now easier to use (fewer (useless) options),
    avoids a ton of issues thanks for a new approach to stacking and a
    lot more accessible. When you press a button to open a dialog, then
    close that dialog, focus will move back to that opening button. Full
    keyboard control is therefore much easier. Focus handling inside the
    dialog also got better. Together this makes dialog much more usable
    in combination with screenreaders. And you get all that while the
    API stayed pretty much the same.
-   [Progressbar API
    redesign](http://forum.jquery.com/topic/progressbar-api-redesign):
    The one change here is to add support for indeterminate progress
    bars.
-   We've removed the backward compability layers in Accordion,
    Autocomplete, Effects, Position, Tabs and Widget, reducing the
    filesize of these components, quite significantly for Tabs. If
    you've upgraded from 1.8 to 1.9 and haven't updated your usage yet,
    check out the [1.9 upgrade
    guide](http://jqueryui.com/upgrade-guide/1.9/) for necessary
    changes.

For a full list of changes, see the [list of 1.10 fixed
tickets](http://bugs.jqueryui.com/query?resolution=fixed&milestone=1.10.0&group=component).
You can read more about the API redesigns in [a previous blog
post](http://blog.jqueryui.com/2011/03/api-redesigns-the-past-present-and-future/ "API Redesigns: The Past, Present and Future").
We're working on a full changelog and upgrade guide for the final
release. One new widget almost made it into this release: Selectmenu.
We're still working on the accessibility side of that and you can expect
it in 1.11, which will come as quickly as 1.10.

### Download

#### [File Downloads](http://jqueryui.com/download/all/)

-   Development
    Bundle: [http://jqueryui.com/resources/download/jquery-ui-1.10.0-beta.1.zip](http://jqueryui.com/resources/download/jquery-ui-1.10.0-beta.1.zip)

#### [Git](http://github.com/jquery/jquery-ui/) (contains source files, with @VERSION not yet replaced with 1.10.0-beta.1, base theme only)

-   Tag: [http://github.com/jquery/jquery-ui/tree/1.10.0-beta.1](http://github.com/jquery/jquery-ui/tree/1.10.0-beta.1)

### Comments

*Note: **please do NOT use the comments section of this blog post for
reporting bugs.** Bug reports should be filed in [the jQuery UI Bug
Tracker](http://bugs.jqueryui.com) and support questions should be
posted on the [jQuery Forum](http://forum.jquery.com).* *If you have
feedback on us doing our first beta release for jQuery UI 1.10, feel
free to leave a comment below. Thank you.*
