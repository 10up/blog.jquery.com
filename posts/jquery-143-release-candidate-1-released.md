jQuery 1.4.3 Release Candidate 1 is released! This is the first release
candidate of jQuery 1.4.3. The code is stable (passing all tests in all
browsers we support), feature-complete (we're no longer accepting new
features for the release), and needs to be tested in live applications.
**Grab the code:**

-   Regular:
    [http://code.jquery.com/jquery-1.4.3rc1.js](http://code.jquery.com/jquery-1.4.3rc1.js)
-   Minified:
    [http://code.jquery.com/jquery-1.4.3rc1.min.js](http://code.jquery.com/jquery-1.4.3rc1.min.js)

**NOTE:** If you're using jQuery 1.4.3rc1 and you run into an error
please make sure that you're using the regular version of the code,
it'll make it easier to spot where the error is occurring. **How can I
help?** To start, try dropping the above un-minified version of jQuery
1.4.3rc1 into a live application that you're running. If you hit an
exception or some weirdness occurs immediately login to the bug tracker
and [file a bug](http://dev.jquery.com/). **Be sure to mention that you
hit the bug in jQuery 1.4.3rc1!** We'll be closely monitoring the bug
reports that come in and will work hard to fix any inconsistencies
between jQuery 1.4.2 and jQuery 1.4.3. **What to Watch For** There are a
few areas in jQuery that have seen extensive changes since 1.4.2 was
released:

-   .css() and related css-handling methods were all overhauled.
-   Logic for determining element visibility and toggling of display in
    animation code.
-   Much of the traversing logic has been improved and changed (is,
    filter, closest, find).

Full details concerning the release are forthcoming - for now we just
need your help in catch regressions. With your input we should be able
to produce a solid release. Right now we're looking to get the final
1.4.3 release out in time for the jQuery Conference in Boston this next
weekend. Thanks for your help in reviewing jQuery 1.4.3rc1!
