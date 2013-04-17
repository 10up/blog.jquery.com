We're happy to announce that jQuery 1.4.4 Release Candidate 2 is now
available! This is the second release candidate of jQuery 1.4.4 - a
follow-up maintenance release to jQuery 1.4.3. The code is stable
(passing all tests in all browsers we support), feature-complete (we're
no longer accepting new features for the release), and needs to be
tested in live applications. **Grab the code:**

-   [http://code.jquery.com/jquery-1.4.4rc2.js](http://code.jquery.com/jquery-1.4.4rc2.js)

\
 **How can I help?** To start, try dropping the above version of jQuery
1.4.4rc2 into a live application that you're running. If you hit an
exception or some weirdness occurs immediately login to the bug tracker
and [file a bug](http://bugs.jquery.com/newticket). **Be sure to mention
that you hit the bug in jQuery 1.4.4rc2!** We'll be closely monitoring
the bug reports that come in and will work hard to fix any
inconsistencies between jQuery 1.4.3 and jQuery 1.4.4. **What's Been
Updated?** There are a few areas in jQuery that have seen changes since
1.4.3 was released:

-   (New) Added a new animation method, .fadeToggle()
-   (Enh) Calling .data() with no arguments now includes data from HTML5
    data- attributes ([\#7222](http://bugs.jquery.com/ticket/7222))
-   (Enh) Moved jQuery.props from support.js to attributes.js
    ([\#6897](http://bugs.jquery.com/ticket/6897))
-   (Enh) .width() and .height() now report the width and height of
    hidden elements ([\#7225](http://bugs.jquery.com/ticket/7225))
-   (Bug) stopImmediatePropagation was not being honoured in
    live/delegate event handlers
    ([\#7217](http://bugs.jquery.com/ticket/7217))
-   (Bug) Fixed an issue where host and protocol were not compared
    case-insensitively when determining whether an AJAX request was
    local or remote ([\#6908](http://bugs.jquery.com/ticket/6908))
-   (Bug) Fixed an issue where the “clone” variable was not being
    declared correctly ([\#7226](http://bugs.jquery.com/ticket/7226))
-   (Bug) Fixed a bug where we only change the ID on nodes that don't
    already have an ID for rooted qSA
    ([\#7212](http://bugs.jquery.com/ticket/7212))
-   (Bug) Changing an HTML5 data attribute after calling .data('foo') no
    longer causes .data('foo') to also change
    ([\#7223](http://bugs.jquery.com/ticket/7223))
-   (Bug) Fixed a bug where Opera didn't give height/width of display:
    none elements with getComputedStyle but did with currentStyle - fall
    back to that if it exists added.
-   (Bug) Fixed a bug to ensure accessing computed CSS for elements
    returns 'auto' instead of '' consistently
    ([\#7337](http://bugs.jquery.com/ticket/7337))

**It also fixes a number of regressions in 1.4.3. One that caused:**

-   (Bug) JSONP calls to fail when cleaning up after a callback
    ([\#7196](http://bugs.jquery.com/ticket/7196))
-   (Bug) .removeData() to fail
    ([\#7209](http://bugs.jquery.com/ticket/7209))
-   (Bug) “ready” events to fire twice when added using .bind("ready",
    foo) ([\#7247](http://bugs.jquery.com/ticket/7247))
-   (Bug)  .css('width') and .css('height') to return 0 or negative
    values when trying to get the style of a hidden or disconnected
    element ([\#7225](http://bugs.jquery.com/ticket/7225))
-   (Bug) the attribute not equals selector ([foo!=bar]) to not work in
    Firefox ([\#7243](http://bugs.jquery.com/ticket/7243))
-   (Bug) find() to fail when selecting from forms containing inputs
    named “id” ([\#7212](http://bugs.jquery.com/ticket/7212))
-   (Bug) .children(selector) to fail on XML documents
    ([\#7219](http://bugs.jquery.com/ticket/7219))
-   (Bug) child (\>), next sibling (+), and previous sibling (\~)
    selectors to fail when combined with non-CSS pseudo-selectors like
    :last ([\#7220](http://bugs.jquery.com/ticket/7220))
-   (Bug) an error “handler is null” to be raised when passing null as
    the event handler ([\#7229](http://bugs.jquery.com/ticket/7229))
-   (Bug) it to be impossible to include a content-body with DELETE
    requests ([\#7285](http://bugs.jquery.com/ticket/7285))
-   (Bug) it to be impossible to include data with HEAD requests
    ([\#7285](http://bugs.jquery.com/ticket/7285))
-   (Bug) an issue where IE was firing click events on disabled elements
    when using live/delegate
    ([\#6911](http://bugs.jquery.com/ticket/6911))
-   (Bug) .show() to fail if .hide() was first called on an
    already-hidden element
    ([\#7331](http://bugs.jquery.com/ticket/7331))
-   (Bug) .show() to fail if an element was hidden in a stylesheet, then
    had .css('display') manually set prior to calling .show()
    ([\#7315](http://bugs.jquery.com/ticket/7315))
-   (Bug) Sizzle.contains to throw an error on browsers that have no
    support for compareDocumentPosition or documentElement.contains
    ([\#7236](http://bugs.jquery.com/ticket/7326))

Full details concerning the release are forthcoming - for now we just
need your help in catch regressions. With your input we should be able
to produce a solid release. Right now we're looking to get the final
1.4.4 release out in about a week. Thanks for your help in reviewing
jQuery 1.4.4rc2! We would also like to remind you that the sixth
maintenance release for jQuery UI 1.8 is also now out. For more
information on this release, feel free to head over to the [jQuery UI
blog](http://blog.jqueryui.com/2010/11/jquery-ui-1-8-6/) for more
information.
