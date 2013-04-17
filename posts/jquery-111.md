The bug fix release for 1.1 is now ready for all to use. There were a
lot of weird behaviors that were discovered post-1.1 that needed to be
remedied sooner, rather than later. If you were having any difficulties
with the 1.1 release, please try this new release to see if your
problems were solved. **It is highly recommended that you upgrade.** As
always, if you have any questions or concerns with new release, please
feel free to discuss it on the [jQuery Mailing
List](http://jquery.com/discuss/). If you think you've spotted a bug,
please [add it to the bug tracker](http://jquery.com/dev/bugs/new/).

Download
--------

-   **[Compressed
    JavaScript](http://jquery.com/src/jquery-1.1.1.pack.js)**
    (Recommended Download!)
-   [Uncompressed JavaScript](http://jquery.com/src/jquery-1.1.1.js)
-   [Full Release (jQuery, Test Suite,
    Documentation)](http://jquery.com/src/jquery-1.1.1.release.zip)
-   [Build Files (Compile your own version of jQuery
    1.1.1)](http://jquery.com/src/jquery-1.1.1.build.zip)

Every bug ever fixed with jQuery can be found on the main [bug
fixes](http://jquery.com/dev/bugs/10/) list. The most important bug
fixes, relevant to this release, are as follows:

1.  Setting the numerical value of a css property failed, for example:
    .css("opacity",0.5) (also occurred with zIndex, fontWeight)
2.  Calling \$(..., jqobj) with a context of a jQuery object failed.
3.  Accessing a property on an element that doesn't exist caused an
    error, for example: \$("\#foobar").attr("id")
4.  Calling .load() without a callback caused an error.
5.  You couldn't cancel an event that was triggered using .trigger() or
    .click() (for example).
6.  .add()ing a single DOM element to a jQuery object was broken.
7.  Passing in undefined values to a \$.post() caused weird errors to
    occur.
8.  Accessing child nodes within an example document didn't work
    properly.
9.  jQuery.isFunction() was unable to reliably determine a function, in
    a cross-browser way.
10. Triggering a .click() failed in IE.
11. Triggered click handlers were executed twice in most browsers.
12. A newline passed into \$("...") caused Firefox to go into a
    never-ending loop.
13. Calling \$.post() without any data caused an error.
14. Calling a descendant selector after a child selector caused strange
    results, for example: \$("ul \> li ul")
15. Triggered events did not occur if an event handler was not bound for
    that event.

