The fourth milestone release for jQuery UI 1.9 is out, featuring the
updated Accordion widget. This release also includes updates and bug
fixes to existing and new widgets that will not make it into a 1.8.x
release.

### What's a Milestone Release?

A milestone release makes it easier to try out the latest development
code of jQuery UI without necessarily having to check out code from
[GitHub](http://github.com/jquery/jquery-ui). With a milestone release
you can try out new widgets that are pretty far along (though not yet
final) and provide feedback based on released code with a specific
version number. *Note: the API is subject to change as the code is still
under active development.*

### Accordion

The Accordion API has been
[redesigned](http://forum.jquery.com/topic/accordion-api-redesign) for
simplicity, extensibility and consistency with other widgets in jQuery
UI. We'd love to get feedback on any compatibility issues you may have
with existing code. Everything supported in 1.8 should work
out-of-the-box in 1.9; if something breaks, we will work to fix it
before the final release.

### jQuery.uiBackCompat

As mentioned above, 1.9 will support the 1.8 API, as well as the
redesigned API. However, this introduces two problems. First, some of
the APIs don't overlap cleanly. For example, in 1.8 you can collapse an
accordion by setting the `active` option to `false` or `-1`; but with
the API updates, you can set the active option to a negative number in
order to activate a panel starting from the last panel instead of the
first (similar to [`.eq()`](http://api.jquery.com/eq)). Second, while
both APIs are supported, it's hard to test whether you've successfully
updated all of your code for compatibility with the 2.0 release which
will not support the 1.8 API. In order to deal with these issues, we've
introduced a flag, `jQuery.uiBackCompat`, which can be used to prevent
the backward compatibility layer from executing. This flag must be set
after jQuery is loaded, but before jQuery UI is loaded. Toggling the
flag after jQuery UI has been loaded will have no effect.

### Download

You can download the jQuery UI 1.9 Milestone 4 – Accordion Redesign
release as a zip file or via git:

#### [File Downloads](http://code.google.com/p/jquery-ui/downloads/list)

-   Development Bundle:
    [http://jquery-ui.googlecode.com/files/jquery-ui-1.9m4.zip](http://jquery-ui.googlecode.com/files/jquery-ui-1.9m4.zip)

#### [Git](http://github.com/jquery/jquery-ui/)

-   Tag:
    [http://github.com/jquery/jquery-ui/tree/1.9m4](http://github.com/jquery/jquery-ui/tree/1.9m4)

### How to Provide Feedback

#### wiki page

To help with the testing of the Accordion redesign, visit the [Accordion
page](http://wiki.jqueryui.com/Accordion) on our [Development & Planning
wiki](http://wiki.jqueryui.com/).

#### forum

If the comments section on the wiki page doesn't provide enough room for
your feedback, post to the [Developing jQuery UI
Forum](http://forum.jquery.com/developing-jquery-ui) and tag the post:

-   tag: [jquery ui
    accordion](http://forum.jquery.com/tag/jquery-ui-accordion)
-   tag: [jquery ui 19m4](http://forum.jquery.com/tag/jquery-ui-1.9m4)

### How to Contribute Code

If you have code changes for the Accordion, fork [jQuery UI on
GitHub](http://github.com/jquery/jquery-ui) and submit a pull request.
If you're new to git or GitHub, see our guide: [How to submit a fix to
jQuery UI – The Easy
Way](http://blog.jqueryui.com/2010/05/how-to-submit-a-fix-to-jquery-ui-the-easy-way/).

### Comments

*Note: **please do NOT use the comments section of this blog post for
feedback on the Accordion widget.** This discussion should occur on the
wiki page and the forum (see How to Provide Feedback, above).* *If you
have feedback on us doing our fourth milestone release, feel free to
leave a comment below. Thank you.*
