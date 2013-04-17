**Translations:** [Italiano](http://www.jquery.info/spip.php?article43),
[franÃ§ais](http://www.jquery.info/spip.php?article42) The release of
jQuery 1.1.2 is upon us! This is a another bug fix release. We've fixed
a number of outstanding issues. The fixes have been tested well, so
there shouldn't be any regressions (knock on wood). The most noticeable
issue that was resolved was related to animation flickers when doing a
slideDown. **It is highly recommended that you upgrade.** As always, if
you have any questions or concerns with new release, please feel free to
discuss it on the [jQuery Mailing
List](http://docs.jquery.com/Discussion#Mailing_Lists). If you think
you've spotted a bug, please [add it to the bug
tracker](http://dev.jquery.com/newticket).

Download
--------

-   **[Compressed
    JavaScript](http://jquery.com/src/jquery-1.1.2.pack.js)**
    (Recommended Download!)
-   [Uncompressed JavaScript](http://jquery.com/src/jquery-1.1.2.js)
-   [Full Release (jQuery, Test Suite,
    Documentation)](http://jquery.com/src/jquery-1.1.2.release.zip)
-   [Build Files (Compile your own version of jQuery
    1.1.2)](http://jquery.com/src/jquery-1.1.2.build.zip)

Bug Fixes
---------

The most important bug fixes, relevant to this release, are as follows:

1.  Change: Event handlers (like `element.onclick`) are now removed when
    no more functions are bound to the event.
2.  Fixed: DOM Manipulations for form elements.
3.  Fixed: `jQuery.isFunction` to return false on nodes.
4.  Fixed: `jQuery.className.has`, escaping regex characters in
    `className` (for metadata)
5.  Fixed: an issue in IE where an event on a cloned element is fired
    during a `.clone()` inside of an event handler.
6.  Fixed: IE ID selectors selecting by the name attribute.
7.  Changed: Events are now internally stored in `elem.$events` rather
    than `elem.events` (due to a nasty bug relating to DOM 0 expandos).
8.  Changed: `.attr('href')` is now consistent in all browsers.
9.  Changed: `@href` is now consistent in all browsers.
10. Fixed: the `slideDown` flickering bug.
11. Fixed: Having a `\r` endline in `$("...")` caused a never-ending
    loop.
12. Fixed: IE6 AJAX memory leak
13. Fixed: bug in pushStack, reporting an element at `[0]` in a jQuery
    object with length 0

Documentation
-------------

Additionally, the documentation has been back-ported out of the wiki and
into the API docs. All of the documentation resources have been updated
in respect to the 1.1.2 release.

-   Official Documentation:
    [http://docs.jquery.com/](http://docs.jquery.com/)
-   API Browsers:
    [http://jquery.bassistance.de/api-browser/](http://jquery.bassistance.de/api-browser/)
    [http://jquery.com/api/](http://jquery.com/api/)

### Leading up to jQuery 1.1.3...

This may seem like a fairly light bug fix release, but we're gearing up
to the release of jQuery 1.1.3. A number of outstanding bugs (about
5-10) require significant changes to how jQuery works, internally
(specifically, in relation to events and animations). We want to make
**100% certain** that there are no regressions made to these important
pieces of code. We have patches nearly ready (animation is ready, events
is in the works) - and when that's the case, we're going to release a
preview of the 1.1.3 code so that everyone can test against it.
**Update:** This has also been announced on [Learning
jQuery](http://www.learningjquery.com/): [jQuery 1.1.2
Released](http://www.learningjquery.com/2007/02/jquery-112-released)
**Update:** A nasty glitch in Safari was found and fixed. We just
re-tagged jQuery (it's now SVN rev 1465 instead of 1460 - this includes
a fix for the bug, and it temporarily disables the test suite in Safari)
and all the jQuery 1.1.2 downloads should be updated, as well.
