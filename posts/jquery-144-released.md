jQuery 1.4.4 is now out! This is the fourth minor release on top of
jQuery 1.4 and lands a number of fixes for bugs including some nice
improvements over 1.4.3. We would like to thank the following community
members that provided patches, input and their time towards this
release: Rick Waldron, Dan Heberden, Alex Sexton, Colin Snover. Along
with the following members of the jQuery core team: John Resig, Dave
Methvin, Karl Swedberg, Paul Irish. We also thank our bug triage team
who assisted in narrowing down some of the important fixes needed for
this release: Colin Snover, Rick Waldron, Addy Osmani, Alex Sexton, Adam
Sontag, Dave Methvin, Mike Taylor, Aaron Boushley, Jitter and John
Resig.

### Downloading

As usual, we provide two copies of jQuery, one minified and one
uncompressed (for debugging or reading).

-   [jQuery Minified](http://code.jquery.com/jquery-1.4.4.min.js) (26kb
    [Gzipped](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery Regular](http://code.jquery.com/jquery-1.4.4.js) (179kb)

You can feel free to include the above URLs directly into your site and
you will get the full performance benefits of a quickly-loading jQuery.
Additionally you can also load the URLs directly from Microsoft and
Google's CDNs: Microsoft CDN:
[http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.4.min.js](http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.4.min.js)
Google CDN:
[https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js](https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js)

General Improvements
--------------------

We've made a number of improvements with this release, many of which
have fixed bugs that were highlighted by the jQuery Community. For the
complete list of changes, see the section below marked 'Changes' for
more information.

New Features
------------

All new features and changes can be found in the [jQuery API
documentation for 1.4.4](http://api.jquery.com/category/version/1.4.4/).

### .fadeToggle()

In an attempt to further unify the methodology across our API, we've
introduced a new method to Effects called .fadeToggle(). We already have
existing toggle methods in our API for sliding
([.slideToggle()](http://api.jquery.com/slideToggle/)) and toggling
classes ([.toggleClass()](http://api.jquery.com/toggleClass/)) and it
made sense for us to extend the availability of a built in toggle to
fading effects as well. See the API documentation on
[.fadeToggle()](http://api.jquery.com/fadeToggle/) for more information.

Changes
-------

**What's Been Updated?** There are a few areas in jQuery that have seen
changes since 1.4.3 was released:

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
-   (Bug) Limited the scope of the CSS 'auto' change to just
    height/width ([\#7393](http://bugs.jquery.com/ticket/7393))
-   (Bug) Fixed a bug to ensure that unquoted attribute selectors are
    quoted (allowing them to go into qSA/matchesSelector properly).
    Fixes ([\#7216](http://bugs.jquery.com/ticket/7216))
-   (Bug) Fixed a bug to ensure that if additional load events are
    triggered (eg. an iframe being dynamically injected in DOM ready)
    the ready event isn't triggered twice
    ([\#7352](http://bugs.jquery.com/ticket/7352)).
-   (Bug) Fixed a condition that prevents attr from working on
    non-Element nodes ([\#7451](http://bugs.jquery.com/ticket/7451)).
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

Backwards-incompatible changes in jQuery 1.4.4
----------------------------------------------

The .width() and .height() methods no longer return 0 when inspecting an
element hidden using 'display: none'. To determine if an element is
hidden, always use .is(':hidden'). **and that's it!. jQuery 1.4.4 is now
out so feel free to update your projects to use the latest version. We
welcome any and all feedback from the community.**

What Features Would You Like To See In jQuery 1.5?
--------------------------------------------------

Now that jQuery 1.4.4 is out, we're starting the process of planning our
next major release and we would like the community's help in deciding
what features we should include. The process for suggesting a feature is
quite straight-forward; here's what you need to do: 1. Think of a
feature you would like included in jQuery 1.5 2. Create a new ticket for
that feature in our [[bug tracker](http://bugs.jquery.com/newticket)] if
one does not already exist 3. Send your nomination by filling out the
[[jQuery 1.5 feature nomination
form](https://spreadsheets.google.com/viewform?formkey=dGRmVVlFWS05QW1rT3lNOHVCZjE5Tmc6MQ)]
Thats it! In a couple of weeks the jQuery team will be sitting down to
review all nominations. The features that we think would benefit the
majority of the community will be added to our roadmap. We're aiming to
release jQuery 1.5 early next year and we appreciate any help you can
provide in letting us know how we can improve it for you. We look
forward to hearing your ideas and feature requests.
