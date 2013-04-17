Hot off the presses: jQuery 1.4 Alpha 1 is released! This is the first
alpha release of jQuery 1.4. The code is stable (passing all tests in
all browsers we support), feature-complete (we're no longer accepting
new features for the release), and needs to be tested in live
applications. **Grab the code:**

-   Regular:
    [http://code.jquery.com/jquery-1.4a1.js](http://code.jquery.com/jquery-1.4a1.js)
-   Minified:
    [http://code.jquery.com/jquery-1.4a1.min.js](http://code.jquery.com/jquery-1.4a1.min.js)

**NOTE:** If you're using jQuery 1.4a1 and you run into an error please
make sure that you're using the regular version of the code, it'll make
it easier to spot where the error is occurring. **How can I help?** To
start, try dropping the above un-minified version of jQuery 1.4a1 into a
live application that you're running. If you hit an exception or some
weirdness occurs immediately login to the bug tracker and [file a
bug](http://dev.jquery.com/). **Be sure to mention that you hit the bug
in jQuery 1.4a1!** We'll be closely monitoring the bug reports that come
in and will work hard to fix any inconsistencies between jQuery 1.3.2
and jQuery 1.4. **What to Watch For** There are a few areas in jQuery
that have seen extensive changes since 1.3.2 was released:

-   **live** was drastically overhauled and now supports submit, change,
    mouseenter, mouseleave, focus, and blur events in all browsers. Also
    now supports context and data.
-   **append, prepend, etc.** have been heavily optimized.
-   **add** has been adjusted to always return elements in document
    order.
-   **find**, **empty**, **remove**, **addClass**, **removeClass**,
    **hasClass**, **attr**, and **css** have been heavily optimized.

Full details concerning the release are forthcoming - for now we just
need your help in catch regressions. Some more details can be found in
[John Resig's keynote at the 2009 jQuery
Conference](http://ejohn.org/blog/talks-at-the-2009-jquery-conference/).
**Note:** There are still [a few open
bugs](http://dev.jquery.com/report/38) that we will be reviewing before
jQuery 1.4 final is released. With your input we should be able to
produce a solid release. Right now we're looking to push out at least
one more alpha before the holiday season and a final release candidate
early in January. Thanks for your help in reviewing jQuery 1.4a1!
