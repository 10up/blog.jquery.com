![](http://blog.jquery.com/wp-content/uploads/2010/10/jquerycomm.jpg "JQuery")
Welcome to the December jQuery Community Update. We hope you had an
enjoyable break with your families and would like to wish everyone in
the community a happy new year! In today's post we'll be presenting
updates on both jQuery Core and jQuery UI. We would appreciate your
comments and feedback on them!

The Road to jQuery 1.5
======================

The jQuery team has been hard at work this month preparing for a jQuery
1.5 release. Some of updates in this release represent our continued
commitment to stability and consistency through bug fixes and browser
behavior normalization, while others are important rewrites that will
improve the performance, maintainbility, and versatility of the library.

What's changed?
---------------

You can find a complete list of the changes we've made under the section
of this post titled 'Change Log'. The largest update currently available
is our new overhauled \$.ajax component, which is explained below by its
author, Julian Aubourg:

> The first change you'll see in the ajax component is probably the new
> signature: `jQuery.ajax( [ url ] , [ options ])`. This allows us to
> fetch a URL with default options more easily. Of course, that's just
> the tip of the iceberg since the entire thing has been rewritten from
> the ground-up to provide many new features. Every request type now
> supports timeout and abort. Native XHR objects are now hidden from the
> developer and a new, jQuery-specific object with the same basic
> interface is provided as a replacement. This "jXHR" object provides
> the usual properties and methods to set & get headers, abort requests,
> and view readyState, responseXML, and responseText—but unlike a native
> XHR object, it also acts as a
> [Promise](http://en.wikipedia.org/wiki/Promise_%28programming%29).
> Promises allow you to add success, error or complete callbacks even
> **after** a request has completed; for instance, it is now possible to
> write things like `jQuery.getJSON( url ).error( errorCallback )`, and
> it will always work, regardless of the state of the original request.
> Internally, the new ajax component features a pluggable architecture
> that makes it easy to define new custom dataTypes and transports.
> Custom dataTypes allow you to provide a consistent response object to
> your application code no matter the original data format, and custom
> transports allow you to do things like fake ajax requests for testing,
> use browser-specific network objects (like XDomainRequest), or use
> entirely different mechanisms for performing remote calls (like iframe
> or postMessage) without needing to write walls of code. Best of all,
> any such addition has access to the full power of jQuery.ajax right
> off the bat (parameter serialization, timeout, deferred callbacks,
> etc), and is exposed to application code using the same familiar
> \$.ajax API that you already know. Finally, some flexibility has been
> added to existing ajax options, and new ones have been added. For
> instance:
>
> -   You can provide an array of callbacks for success, error or
>     complete. Non-functions are filtered and arrays are flattened, so
>     you can easily add a complete handler before all the others simply
>     by doing
>     `options.complete = [ yourCompleteCallback , options.complete ]`!
> -   The new "headers" option makes it possible to set a map of request
>     headers, avoiding the hassle of requiring a beforeSend callback
>     just to set headers.
>
> Great care has been taken to ensure existing unit tests passed, and
> numerous other tests have been added to help ensure everything
> functions as expected and doesn’t break existing code.

**How can I help?** As always, we would like to invite the community to
contribute new patches or help us test changes so that we can identify
and correct any issues as soon as possible. To perform testing, just try
dropping the [development version of jQuery
(jQuery-GIT)](http://code.jquery.com/jquery-git.js) into a copy of your
existing application. If you hit an exception or some weirdness occurs,
log in to the bug tracker and [file a bug](http://bugs.jquery.com/).
**Be sure to set the version drop-down to “git”.** You can also test
code on jsFiddle by selecting “jQuery 0 GIT” from the drop-down menu in
the sidebar. To contribute patches, Rick Waldron has written an
excellent [guide to jQuery bug
fixing](http://weblog.bocoup.com/javascript-jquery-bug-fixing-guide)
that walks through getting started with git, building and testing
jQuery, and finding new bugs to work on. If you plan on submitting
patches, you should also join the \#jquery-dev channel on Freenode,
which is where most discussions about jQuery development occur.

Current Change Log
------------------

-   1.Rewrite of the Ajax module by Julian Aubourg. This is the most
    significant change in this release and brings a number of
    performance, stability, and feature improvements to \$.ajax. More
    information can be found above.
    [\#7195](http://bugs.jquery.com/ticket/7195)
-   2.jQuery now registers itself as a CommonJS async module. This
    allows jQuery to participate in browser module loading with
    compatible loaders such as RequireJS and Yabble.
    [\#7102](http://bugs.jquery.com/ticket/7102)
-   3.Removed the possibility of expando collisions when using
    noConflict() (V8 is fast!). The expando string now uses a random
    number + jQuery version to differentiate between instances of jQuery
    instead of millisecond clock time.
    [\#6842](http://bugs.jquery.com/ticket/6842)
-   4.Deduplicated code in \$.get and \$.post.
    [\#7847](http://bugs.jquery.com/ticket/7847)
-   5.When a native browser event is bubbling up the DOM, make sure that
    the correct isDefaultPrevented value is reflected by jQuery's Event
    object. [\#7793](http://bugs.jquery.com/ticket/7793)
-   6.No longer cache non-html strings in buildFragment to avoid
    possible collision with the names of Object methods like toString.
    Testing shows this may also provide modest performance improvements.
    [\#6779](http://bugs.jquery.com/ticket/6779)
-   7.Updated cloneCopyEvent so that it does not create superfluous data
    objects when cloning elements. Exposes a new method, \$.hasData, for
    determining whether or not an object has any data.
    [\#7165](http://bugs.jquery.com/ticket/7165)
-   8.Use a for loop rather than for/in loop when copying events so that
    code will work with an augmented Array.prototype.
    [\#7809](http://bugs.jquery.com/ticket/7809),
    [\#7817](http://bugs.jquery.com/ticket/7817)
-   9.Fixed fadeIn not working properly with inline elements.
    [\#7397](http://bugs.jquery.com/ticket/7397)
-   10.Rewrote IE’s clone function to function properly in all known
    cases. [\#4386](http://bugs.jquery.com/ticket/4386),
    [\#5566](http://bugs.jquery.com/ticket/5566),
    [\#6997](http://bugs.jquery.com/ticket/6997)
-   11.Fixed IE breaking when dispatching a 'submit' event on plain JS
    objects. [\#6398](http://bugs.jquery.com/ticket/6398)
-   12.Fixed a regression in 1.4 that caused cache control to be set
    incorrectly for script transport.
    [\#7578](http://bugs.jquery.com/ticket/7578)
-   13.Improve performance of get() for negative indices.
    [\#5476](http://bugs.jquery.com/ticket/5476)
-   14.hasClass, removeClass didn't work in IE if the attribute
    contained a carriage return (\\r) character.
    [\#7673](http://bugs.jquery.com/ticket/7673)
-   15.Fix a regresion in 1.4.4 where calling \$.fn.data without
    arguments breaks on non-DOM elements.
    [\#7524](http://bugs.jquery.com/ticket/7524)
-   16.Fix memory leaks in IE caused by the custom abort function of
    \$.ajax. [\#6242](http://bugs.jquery.com/ticket/6242)
-   17.Prevent live events from firing on disabled elements in IE.
    [\#6911](http://bugs.jquery.com/ticket/6911)
-   18.Fixed a regression in 1.4.3 that caused sending a Location object
    to \$.ajax to no longer work.
    [\#7531](http://bugs.jquery.com/ticket/7531)

jQuery UI 1.8.7 and Spinner, Menu, & Tooltip
============================================

The jQuery UI team have also been busily working away on new stuff. Here
are some updates from them: jQuery UI 1.8.7 was released since our last
community update. This brought support for jQuery 1.4.4 but also
provided noteable updates to Button, Progressbar and Datepicker. For the
full details of this release, please read the [jQuery UI 1.8.7 release
notes](http://blog.jqueryui.com/2010/12/jquery-ui-1-8-7/). Also, three
new plugins just landed on the [jQuery UI master
branch](http://github.com/jquery/jquery-ui), courtesy of Jörn Zaefferer:
[Spinner](http://blog.jqueryui.com/2010/11/jquery-ui-1-9-milestone-3-spinner/),
[Menu](http://blog.jqueryui.com/2010/06/jquery-ui-19m2-menu/) and
[Tooltip](http://blog.jqueryui.com/2010/05/jquery-ui-19m1-tooltip/).
These three widgets have been in development for some time and each has
had their own milestone release. For more information on these new
widgets you can read about them on their dedicated release pages above.
We would like to invite the community to test and provide feedback on
these new widgets and if you discover any bugs or issues that you need
to report, instructions for doing so can be found at the [jQuery UI
Development Center](http://jqueryui.com/development).

jQuery Weekly Development Meetings
==================================

Beginning on January 4th 2011, we will be trialing the idea of a jQuery
development meeting of core developers and contributors each week in the
\#jquery-meeting channel on freenode. Agendas for these meetings will be
made available in advance and any members of the jQuery community that
would like to attend are more than welcome to. Our first meeting will be
held on Tuesday January 4th at 9PM EDT and the topics of discussion will
be the jQuery 1.5 roadmap, ticket triage and a discussion on
infrastructure. The complete agenda for this meeting can be found
[here](http://pastie.org/1425988).

Wijmo on the jQuery Podcast
===========================

For fans of the [Official jQuery Podcast](http://podcast.jquery.com/),
we would like to remind you that [Episode
40](http://podcast.jquery.com/2010/12/17/episode-40-wijmo/) is now
available for streaming or download. In this episode, we talk to Chris
Bannon of ComponentOne about the new jQuery UI-based library called
Wijmo.

Donations
=========

Has jQuery helped make your development life a little easier? As you may
know, jQuery is an open-source project that relies on the time and
effort of our valued volunteers and community members and is financed
entirely through donations from the general public. If you've found
jQuery useful, we would like to humbly ask that you consider making a
small contribution (even \$10 goes a long way). The jQuery project is a
part of the Software Freedom Conservancy, so any donation you make is
fully tax-deductible. For more information on financial contribution,
please visit [http://jquery.org/donate](http://jquery.org/donate). If
you can’t donate any money, we’re always in need of talented software
developers, IT professionals, and nerds of all stripes to help develop
and maintain jQuery and its related properties. If you’re interested in
contributing some time to help make jQuery great, please get in touch
with a [team member](http://jquery.org/team), or ask in the \#jquery
channel on Freenode. That's it for this update! Thanks for reading; we
look forward to your feedback.
