The first milestone release for jQuery UI 1.9 is out, featuring the new
Tooltip widget, in active development.

### What's a Milestone Release?

A milestone release makes it easier to try out the latest development
code of jQuery UI without necessarily having to check out code from
[GitHub](http://github.com/jquery/jquery-ui). With a milestone release
you can try out new widgets that are pretty far along (though not yet
final) and provide feedback based on released code with a specific
version number. *Note: the API is subject to change as the code is still
under active development.*

### Tooltip

We'd love your feedback on our new Tooltip widget, to help ready it for
the 1.9 final release. The API is already in good shape, so if you start
using it now, migrating to 1.9 final should be really easy. From the
[Tooltip documentation](http://docs.jquery.com/UI/Tooltip):

> Tooltip replaces native tooltips, making them themable as well as
> allowing various customizations:
>
> -   display other content than just the title, like inline footnotes
>     or extra content retrieved via Ajax
> -   customize the positioning, eg. to center the tooltip above
>     elements
> -   add extra classes to customize the appearance, for warning or
>     error fields
>
> A fade animation is used to show and hide the tooltip, making the
> appearance a bit more organic, compared to just toggling the
> visibility.

All you need is an element with a title attribute. Grab that element and
call `.tooltip()` on it:

~~~~ {lang="html4strict"}
<a title="Details for this link" href="#">Link</a>
~~~~

~~~~ {lang="html4strict"}
<script>
~~~~

~~~~ {lang="javascript"}
  $("a").tooltip();
~~~~

~~~~ {lang="html4strict"}
</script>
~~~~

When the mouse hovers over the element, the tooltip will appear, like
so: [caption id="attachment\_426" align="alignnone" width="463"
caption="Demo: Forms with
tooltips"][![](http://blog.jqueryui.com/wp-content/uploads/2010/06/blog-19m1-tooltip.png "Screenshot of a tooltip demo with a tooltip visible")](http://view.jqueryui.com/tooltip/demos/tooltip/forms.html)[/caption]

### Demos

Play with the latest demos in the tooltip branch on our live code view
site,
[view.jqueryui.com](http://view.jqueryui.com/tooltip/demos/tooltip/index.html):

-   [Default
    tooltip](http://view.jqueryui.com/tooltip/demos/tooltip/default.html)
-   [Forms with
    tooltips](http://view.jqueryui.com/tooltip/demos/tooltip/forms.html)
-   [Track the
    mouse](http://view.jqueryui.com/tooltip/demos/tooltip/tracking.html)

### Download

You can download the jQuery UI 1.9 Milestone 1 – Tooltip release as a
zip file or via git:

#### [File Downloads](http://code.google.com/p/jquery-ui/downloads/list)

-   Development Bundle:
    [http://jquery-ui.googlecode.com/files/jquery-ui-1.9m1.zip](http://jquery-ui.googlecode.com/files/jquery-ui-1.9m1.zip)

#### [Git](http://github.com/jquery/jquery-ui/)

-   Tag:
    [http://github.com/jquery/jquery-ui/tree/1.9m1](http://github.com/jquery/jquery-ui/tree/1.9m1)

### How to Provide Feedback

#### wiki page

To help with the design and development of the Tooltip widget, visit the
[Tooltip page](http://wiki.jqueryui.com/Tooltip) on our [Development &
Planning wiki](http://wiki.jqueryui.com/).

#### forum

If the comments section on the wiki page doesn't provide enough room for
your feedback, post to the [Developing jQuery UI
Forum](http://forum.jquery.com/developing-jquery-ui) and tag the post:

-   tag: [jquery ui
    tooltip](http://forum.jquery.com/tag/jquery-ui-tooltip)
-   tag: [jquery ui 19m1](http://forum.jquery.com/tag/jquery-ui-1.9m1)

### How to Contribute Code

If you have code changes for the Tooltip, fork [jQuery UI on
GitHub](http://github.com/jquery/jquery-ui), commit to the [tooltip
branch](http://github.com/jquery/jquery-ui/tree/tooltip), and submit a
pull request. If you're new to git or GitHub, see our guide: [How to
submit a fix to jQuery UI – The Easy
Way](http://blog.jqueryui.com/2010/05/how-to-submit-a-fix-to-jquery-ui-the-easy-way/).

### Comments

*Note: **please do NOT use the comments section of this blog post for
feedback on the Tooltip widget.** This discussion should occur on the
wiki page and the forum (see How to Provide Feedback, above).* ** *If
you have feedback on us doing our first milestone release, feel free to
leave a comment below. Thank you.*
