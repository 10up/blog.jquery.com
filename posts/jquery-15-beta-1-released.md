Happy 5th Birthday to jQuery! jQuery was released on January 14th, 2006
today marks its 5th year of development! To celebrate the occasion we're
releasing the first beta release of jQuery 1.5! We're
[planning](http://docs.jquery.com/Roadmap) on having a final release
candidate within 10 days and a final release by the end of the month.
We'd also like to announce three new additions to the [jQuery core
development team](http://jquery.org/team): Julian Aubourg, Colin Snover,
and Anton Matzneller. All three of them have been major contributors
towards the 1.5 release - providing significant code contributions, bug
fixes, and triaging. Please take this opportunity to welcome them
aboard! Additionally we'd like to take take this opportunity to thank
all the members of the jQuery community that have helped to get this
beta release out - especially all the members of the [bug triage
team](http://blog.jquery.com/2010/11/23/team-spotlight-the-jquery-bug-triage-team/).
We want to encourage everyone from the community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us! So without further ado - jQuery 1.5 Beta 1!

jQuery 1.5 Beta 1
-----------------

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.5b1.js](http://code.jquery.com/jquery-1.5b1.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.5 Beta 1.

jQuery 1.5 Beta 1 Change Log
----------------------------

This is a concise change log - full release notes will be coming with
the final 1.5 release.

-   Rewrite of the Ajax module by Julian Aubourg. This is the most
    significant change in this release and brings a number of
    performance, stability, and feature improvements to \$.ajax. More
    information can be found
    [here](http://blog.jquery.com/2010/12/28/jquery-community-updates-for-december-2010/)
    [\#7195](http://bugs.jquery.com/ticket/7195)
-   Subclassing in jQuery now supported
    [\#7901](http://bugs.jquery.com/ticket/7901)
-   Removed the possibility of expando collisions when using
    noConflict() (V8 is fast!). The expando string now uses a random
    number + jQuery version to differentiate between instances of jQuery
    instead of millisecond clock time.
    [\#6842](http://bugs.jquery.com/ticket/6842)
-   Deduplicated code in \$.get and \$.post.
    [\#7847](http://bugs.jquery.com/ticket/7847)
-   When a native browser event is bubbling up the DOM, make sure that
    the correct isDefaultPrevented value is reflected by jQuery's Event
    object. [\#7793](http://bugs.jquery.com/ticket/7793)
-   No longer cache non-html strings in buildFragment to avoid possible
    collision with the names of Object methods like toString. Testing
    shows this may also provide modest performance improvements.
    [\#6779](http://bugs.jquery.com/ticket/6779)
-   Updated cloneCopyEvent so that it does not create superfluous data
    objects when cloning elements. Exposes a new method, \$.hasData, for
    determining whether or not an object has any data.
    [\#7165](http://bugs.jquery.com/ticket/7165)
-   Use a for loop rather than for/in loop when copying events so that
    code will work with an augmented Array.prototype.
    [\#7809](http://bugs.jquery.com/ticket/7809),
    [\#7817](http://bugs.jquery.com/ticket/7817)
-   Fixed fadeIn not working properly with inline elements.
    [\#7397](http://bugs.jquery.com/ticket/7397)
-   Rewrote IE's clone function to function properly in all known cases.
    [\#4386](http://bugs.jquery.com/ticket/4386),
    [\#5566](http://bugs.jquery.com/ticket/5566),
    [\#6997](http://bugs.jquery.com/ticket/6997)
-   Fixed IE breaking when dispatching a 'submit' event on plain JS
    objects. [\#6398](http://bugs.jquery.com/ticket/6398)
-   Fixed a regression in 1.4 that caused cache control to be set
    incorrectly for script transport.
    [\#7578](http://bugs.jquery.com/ticket/7578)
-   Improve performance of get() for negative indices.
    [\#5476](http://bugs.jquery.com/ticket/5476)
-   hasClass, removeClass didn't work in IE if the attribute contained a
    carriage return (\\r) character.
    [\#7673](http://bugs.jquery.com/ticket/7673)
-   Fix a regresion in 1.4.4 where calling \$.fn.data without arguments
    breaks on non-DOM elements.
    [\#7524](http://bugs.jquery.com/ticket/7524)
-   Fixed memory leaks in IE caused by the custom abort function of
    \$.ajax. [\#6242](http://bugs.jquery.com/ticket/6242)
-   Prevent live events from firing on disabled elements in IE.
    [\#6911](http://bugs.jquery.com/ticket/6911)
-   Fixed a regression in 1.4.3 that caused sending a Location object to
    \$.ajax to no longer work.
    [\#7531](http://bugs.jquery.com/ticket/7531)
-   Fixed an issue where some traversal methods performed an unnecessary
    uniqueness check. [\#7964](http://bugs.jquery.com/ticket/7964)
-   We now support being able to specify callbacks to handle specific
    status codes[\#4964](http://bugs.jquery.com/ticket/4964)
-   Fixed an issue where ?? wasn't supported as a context-insensitive
    placeholder for the callback name of a JSONP request.
    [\#4897](http://bugs.jquery.com/ticket/4897)
-   Data returned from dataFilter was not being passed to ajax
    complete() callbacks. We now use the jXHR's promise interface to get
    the actual response. [\#4825](http://bugs.jquery.com/ticket/4825)
-   We now ensure that buildFragment clones elements properly in all
    browsers. [\#6655](http://bugs.jquery.com/ticket/6655) and
    [\#3879](http://bugs.jquery.com/ticket/3879)
-   A memory leak caused when binding custom events in IE8 was fixed
    [\#7054](http://bugs.jquery.com/ticket/7054)
-   Lines in form data are now delimited by CRLF when the form is
    submitted (as recommended by the W3C).
    [\#6876](http://bugs.jquery.com/ticket/6876)
-   Ajax requests now abort on unload such that the event is only bound
    if the xhr transport is used.
    [\#5280](http://bugs.jquery.com/ticket/5280)
-   We now support =? being detected even if it has been escaped during
    data serialization. [\#5812](http://bugs.jquery.com/ticket/5812)
-   If the user uses the jsonpCallback setting we now automatically set
    the dataType to 'jsonp'.
    [\#5803](http://bugs.jquery.com/ticket/5803)
-   The crossDomain option now forces ajax to consider a request as
    cross-domain, even when its not. This is useful when servers issue
    redirects to cross-domain urls.
    [\#5955](http://bugs.jquery.com/ticket/5955)
-   \$.ajax(this) allowing retries without the recursion errors found in
    jQuery 1.4.3. [\#7461](http://bugs.jquery.com/ticket/7461)
-   Removed a patch for very early versions of Opera 9 that made it
    impossible to animate values smaller than -10000.
    [\#7193](http://bugs.jquery.com/ticket/7193)
-   ResponseText is now properly propagated for error callbacks.
    [\#7868](http://bugs.jquery.com/ticket/7868)
-   Scripts onload handler passes event as first parameter so statusText
    is now passed as second argument for aborts.
    [\#7865](http://bugs.jquery.com/ticket/7865)
-   With respect to xhr, setting contentType to false will now prevent
    the Content-Type header from being sent.
    [\#7465](http://bugs.jquery.com/ticket/7465)
-   When serializing text, we now encode all line breaks as CRLF pairs
    per the application/x-www-form-urlencoded specification.
    [\#6876](http://bugs.jquery.com/ticket/6876)
-   Fixed a bug with IE6 where certain event handlers were causing
    inter-page memory leaks.
    [\#7762](http://bugs.jquery.com/ticket/7762)
-   Tests for cross-domain detection now include checking for protocol,
    hostname and port. [\#7465](http://bugs.jquery.com/ticket/7465)
-   Fixed a problem where IDs containing a period would break find()
    without returning results.
    [\#7533](http://bugs.jquery.com/ticket/7533)
-   The regression with next/adjacent selectors no longer working
    without the 'prev' element has been corrected.
    [\#7452](http://bugs.jquery.com/ticket/7452)
-   Fixed the 1.4.3 regression which prevented the use of attr() on
    anything but DOM element nodes where the nodeType was 1
    [\#7452](http://bugs.jquery.com/ticket/7452),
    [\#7500](http://bugs.jquery.com/ticket/7500),
    [](http://bugs.jquery.com/ticket/7202)
-   A bug where including jQuery 1.3.2 resulted in a border on the
    right-hand side of the screen in IE8 has been fixed.
    [\#5575](http://bugs.jquery.com/ticket/5575)
-   We've fixed an issue where adding extra methods to Array.prototype
    and using jQuery.clone(true) to clone an element resulted in invalid
    event bindings. [\#6355](http://bugs.jquery.com/ticket/6355)
-   Fixed an issue where the nth-child does not handle whitespace
    correctly in Internet Explorer.
    [\#7558](http://bugs.jquery.com/ticket/7558)
-   We corrected a bug where mouseenter/leave behaved like mouseover/out
    when using live events [\#5821](http://bugs.jquery.com/ticket/5821)
-   Fixed a regression in 1.4.3 where the eq() selector was no longer
    working with previous and adjacent selectors
    [\#7906](http://bugs.jquery.com/ticket/7906)
-   Updated the documentation on event.currentTarget to address any
    confusion regarding jQuery.proxy.
    [\#7628](http://bugs.jquery.com/ticket/7628)
-   Fixed an issue where xhr.setRequestHeader('Accept',...) appended the
    value rather than replacing it.
    [\#6230](http://bugs.jquery.com/ticket/6230)
-   An IE issue where ajax methods failed for content types ending in
    '+xml' (eg. rss+xml) was fixed.
    [\#4958](http://bugs.jquery.com/ticket/4958)
-   The updates to ajax now allow any request to be aborted.
    [\#3442](http://bugs.jquery.com/ticket/3442)
-   A .slideUp() issue in FireFox 3.6.11 was fixed which previously hid
    the frameset border and legend but left any content uncovered by
    another element. [\#7308](http://bugs.jquery.com/ticket/7308)
-   We now support cross-browser XML parsing.
    [\#6693](http://bugs.jquery.com/ticket/6693)
-   Fixed a bug where when using dataType:'json' in the .ajax() method,
    the data object was undefined in IE6 and 7.
    [\#6106](http://bugs.jquery.com/ticket/6106)
-   Corrected an issue where JSONP calls were not removing the script
    tag when the call completed.
    [\#7418](http://bugs.jquery.com/ticket/7418)
-   Updated the documentation to reflect the behaviour supported when
    using delay() with show() if the duration is not specified.
    [\#7543](http://bugs.jquery.com/ticket/7543)

