The first beta release for jQuery UI 1.9 is out! After eight milestone
releases, two hundred fixed tickets, 2,100 commits, and three brand-new
widgets we're looking forward to your feedback and the now close-by
final release. Here's an overview of the big changes:

-   Autocomplete accessibility updates: We're now using a live-region to
    guide screenreader users when using autocomplete, making the widget
    a lot more accessible.
-   [Accordion API
    redesign](http://forum.jquery.com/topic/accordion-api-redesign) and
    accessibility updates: This also finally addresses the
    accordion-flicker problem: No more pixel-shifting of content below
    the accordion during animations.
-   [Tabs API redesign](http://forum.jquery.com/topic/tabs-api-redesign)
    and accessibility updates: Tabs are now fully keyboard accesible and
    make proper use of ARIA attributes.
-   [Position API
    redesign](http://forum.jquery.com/topic/position-api-redesign):
    Along with some redesign we've also added new features: You can now
    use other elements beside `window` to run collision-detection
    against, and there's a "flipfit" mode that combines the two existing
    modes, which themselve got better. When working with the `using`
    callback, you get feedback about the positioning result, allowing
    you to position flyout arrows or other direction indicators.
-   Lots of [new features in the widget
    factory](http://bugs.jqueryui.com/query?component=ui.widget&type=feature&type=enhancement&resolution=fixed&milestone=1.9):
    The internal API for writing widgets has gotten a lot better. The
    two most notable new methos: `_on` lets you deal with events, nicely
    integrated into the widget instance, and `_super` lets you call a
    parent widget's method of the same name, which makes extending
    existing widget a breeze.
-   New widget: [Menu](http://wiki.jqueryui.com/w/page/12137997/Menu):
    Has been around for a while since 1.8, then hidden with the
    autocomplete file. Its now finally here!
-   New widget:
    [Tooltip](http://wiki.jqueryui.com/w/page/12138112/Tooltip): An
    accessible, event-delegation- supporting tooltip with the option to
    have any kind of (asynchronous) content show for any element. And
    its themable, like any other widget.
-   New widget:
    [Spinner](http://wiki.jqueryui.com/w/page/12138077/Spinner): Our
    second text-input widget, similar to HTML5's
    `<input type="number">`, but giving you much greater control and
    including full localization support, via
    [Globalize](https://github.com/jquery/globalize).

For a full list of changes, see the [list of 1.9 fixed
tickets](http://bugs.jqueryui.com/query?resolution=fixed&milestone=1.9&group=component).
You can read more about the API redesigns in [a previous blog
post](http://blog.jqueryui.com/2011/03/api-redesigns-the-past-present-and-future/ "API Redesigns: The Past, Present and Future").
We're working on a full changelog and upgrade guide for the final
release.

### Download

#### [File Downloads](http://code.google.com/p/jquery-ui/downloads/list)

-   Development
    Bundle: [http://jquery-ui.googlecode.com/files/jquery-ui-1.9.0-beta.1.zip](http://jquery-ui.googlecode.com/files/jquery-ui-1.9.0-beta.1.zip)

#### [Git](http://github.com/jquery/jquery-ui/) (contains source files, with @VERSION not yet replaced with 1.9.0-beta.1, base theme only)

-   Tag: [http://github.com/jquery/jquery-ui/tree/1.9.0-beta.1](http://github.com/jquery/jquery-ui/tree/1.9.0-beta.1)

### Comments

*Note: **please do NOT use the comments section of this blog post for
reporting bugs.** Bug reports should be filed in [the jQuery UI Bug
Tracker](http://bugs.jqueryui.com) and support questions should be
posted on the [jQuery Forum](http://forum.jquery.com).* *If you have
feedback on us doing our first beta release for jQuery UI 1.9, feel free
to leave a comment below. Thank you.*
