The eighth milestone release for jQuery UI 1.9 is out. There are quite a
few improvements and changes since the last milestone release. Most
notably, the Position utility redesign is done.

### What's a Milestone Release?

A milestone release makes it easier to try out the latest development
code of jQuery UI without necessarily having to check out code from
[GitHub](http://github.com/jquery/jquery-ui). With a milestone release
you can try out new widgets that are pretty far along (though not yet
final) and provide feedback based on released code with a specific
version number.

### Position

The Position redesign is now fully implemented. The `using` option now
provides information about where the element is relative to the target.
This information is useful for a variety of reasons, such as knowing
where to render an arrow if you want the element to point to the target
(think of tooltip with callouts). This information is passed in a second
parameter to the `using` callback.

### Accessibility

The Tooltip and Autocomplete widgets have been updated for full ARIA
support. Getting these widgets to be fully accessible with various
browsers and assistive technology was quite difficult. A huge thanks
goes out to Hans Hillen and Everett Zufelt for their help with testing
and implementation.

### A ton of bug fixes

A lot of components have seen a lot of bug fixes. While we continue to
maintain the 1.8 branch, a lot of bugs get only fixed in master. [Here
are all tickets fixed in 1.9, by
component](http://bugs.jqueryui.com/query?resolution=fixed&milestone=1.9&group=component&col=id&col=summary&col=type&col=priority&report=20&order=priority).

### Download

You can download the jQuery UI 1.9 Milestone 8 – Position release as a
zip file or via git:

#### [File Downloads](http://code.google.com/p/jquery-ui/downloads/list)

-   Development Bundle:
    [http://jquery-ui.googlecode.com/files/jquery-ui-1.9.0m8.zip](http://jquery-ui.googlecode.com/files/jquery-ui-1.9.0m8.zip)

#### [Git](http://github.com/jquery/jquery-ui/)

-   Tag:
    [http://github.com/jquery/jquery-ui/tree/1.9.0m8](http://github.com/jquery/jquery-ui/tree/1.9.0m8)

### How to Provide Feedback

#### wiki page

To help with the testing of the Position utility, visit the [Position
page](http://wiki.jqueryui.com/Position) on our [Development & Planning
wiki](http://wiki.jqueryui.com/).

#### forum

If the comments section on the wiki page doesn't provide enough room for
your feedback, post to the [Developing jQuery UI
Forum](http://forum.jquery.com/developing-jquery-ui) and tag the post:

-   tag: [jquery ui
    position](http://forum.jquery.com/tag/jquery-ui-position)
-   tag: [jquery ui
    1.9.0m8](http://forum.jquery.com/tag/jquery-ui-1.9.0m8)

### How to Contribute Code

If you have code changes for the Position utility, fork [jQuery UI on
GitHub](http://github.com/jquery/jquery-ui) and submit a pull request.
If you're new to git or GitHub, see our guide: [How to submit a fix to
jQuery UI – The Easy
Way](http://blog.jqueryui.com/2010/05/how-to-submit-a-fix-to-jquery-ui-the-easy-way/).

### Comments

*Note: **please do NOT use the comments section of this blog post for
feedback on the Position utility.** This discussion should occur on the
wiki page and the forum (see How to Provide Feedback, above).* *If you
have feedback on us doing our eighth milestone release, feel free to
leave a comment below. Thank you.*
