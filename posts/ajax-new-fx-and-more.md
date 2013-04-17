The new [AJAX plugin](http://jquery.com/docs/ajax/) for
[jQuery](http://jquery.com/) is ready - and if you're running off of the
latest code, it's already rolled in. Along with that, there are a few
new [effects](http://jquery.com/docs/fx/) to be enjoyed: fadeIn,
fadeOut, and center. I've also squished a number of bugs, which have
gone into this release too:

-   A problem with using the \$(...,Context) argument, with non-HTML
    documents has been resolved.
-   It's now possible to pass in a jQuery object as a context:
    \$("title",\$("head"));
-   A problem with attributes not resolving properly in IE has been
    fixed.
-   Another issue with toggling inline elements has been fixed.

The next release is going to be focusing on additional helper methods to
make it easier to navigate documents (and rely less on cryptic XPath
sequences) along with methods to avoid continuous .get(0) use. If you'd
like to discuss jQuery's development, please join us in the [mailing
list](http://jquery.com/discuss/) or in the [irc
channel](irc://irc.freenode.net/jquery).
