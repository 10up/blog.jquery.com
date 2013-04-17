jQuery 1.5.2 is now out! This is the second minor release on top of
jQuery 1.5 and lands a number of fixes for bugs. We would like to thank
the following contributors that provided patches towards this release:
azatoth, dmethvin, gnarf37, jaubourg, jboesch, jeresig, jessthrysoee,
mathiasbynens, murz, rdworth, rwldrn, and timmywil. We'd especially like
to thank our bug triage team who assisted in narrowing down some of the
important fixes needed for this release.

### Downloading

As usual, we provide two copies of jQuery, one minified and one
uncompressed (for debugging or reading).

-   [jQuery Minified](http://code.jquery.com/jquery-1.5.2.min.js) (29kb
    [Gzipped](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery Regular](http://code.jquery.com/jquery-1.5.2.js) (214kb)

You can feel free to include the above URLs directly into your site and
you will get the full performance benefits of a quickly-loading jQuery.
Additionally you can also load the URLs directly from Microsoft and
Google's CDNs: Microsoft CDN:
[http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.2.min.js](http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.2.min.js)
Google CDN:
[https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js](https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js)

### jQuery 1.5.2 Changelog

As this was a bug fix release there are no new features to report upon.

### Closed Tickets

A full list of all bugs and tickets closed are as follows:

-   [\#6158](http://bugs.jquery.com/ticket/6158) Fixed replaceWith from
    throwing errors on non existent elements.
-   [\#7340](http://bugs.jquery.com/ticket/7340) We now use a single
    capturing handler to simulate bubbling focusin/focusout event on
    non-IE browsers. Allows native DOM methods to fire events other than
    the currently active one back into jQuery.
-   [\#8353](http://bugs.jquery.com/ticket/8353) Reverted. Adds a catch
    block in resolveWith so that the finally block gets executed in IE7
    and IE6. Fixes [\#8438](http://bugs.jquery.com/ticket/8438) - an
    issue where the full functions stack wasn't visible when debugging
    in Google Chrome.
-   [\#8380](http://bugs.jquery.com/ticket/8380) Make it so that
    \$(':text') matches \<input\> as 'type=text' is the implied default.
-   [\#8421](http://bugs.jquery.com/ticket/8421) Makes sure resolveWith
    can be called with only one parameter.
-   [\#8423](http://bugs.jquery.com/ticket/8423) Never set
    X-Requested-With header automagically for cross-domain requests.
    Fixes an issue where all cross-domain ajax requests are pre-flighted
    and require extra additional options.
-   [\#8456](http://bugs.jquery.com/ticket/8456) Fixed an issue where
    trigger('mouseover') was no longer triggering mouseenter. We make
    sure parent is not null before crawling into its lap, so mouseenter
    is triggered on a mouseover event.
-   [\#8509](http://bugs.jquery.com/ticket/8509) Makes URL regexp less
    overzealous and ensures it recognizes URL schemes which do not
    contain a conformant hierarchical structure (as per section 2.1.2 of
    [http://www.ietf.org/rfc/rfc2718.txt](http://www.ietf.org/rfc/rfc2718.txt)).
    Also adds about: and adobe air's app: and app-storage: to the list
    of local protocols and provides a failover in case document.location
    is illformed.
-   [\#8536](http://bugs.jquery.com/ticket/8536) Introduced submodules
    to the jQuery repository on GitHub.
-   [\#8381](http://bugs.jquery.com/ticket/8381) Fixed .is("div") to
    work on disconnected nodes in IE 9.
-   [\#8316](http://bugs.jquery.com/ticket/8316) Fixed .offset() setter
    on fixed elements in WebKit.
-   [\#3333](http://bugs.jquery.com/ticket/3333) Fixed incorrect
    .css("marginRight") in WebKit.
-   [\#8692](http://bugs.jquery.com/ticket/8692) Fixed an issue where
    the arguments object sometimes ended up with undefined values
    outside the \$.when method.
-   [\#8346](http://bugs.jquery.com/ticket/8346) Fixed a compatibility
    issue with jQuery.camelCase() and IE9 prefixes.
-   [\#8203](http://bugs.jquery.com/ticket/8203) Removed some
    unnecessary nulling of elements done in the name of an IE memory
    cleanup.
-   [\#8519](http://bugs.jquery.com/ticket/8519) Prevent the core
    makefile from applying minification if nothing in the code has
    actually changed.
-   [\#8587](http://bugs.jquery.com/ticket/8587) Fixed the jQuery-git.js
    cron-job to ensure that it is being regularly updated.
-   [\#8635](http://bugs.jquery.com/ticket/8635) Corrected an issue with
    Firefox 3.6 where an issue with getComputedStyle() was resulting in
    uncaught exceptions.

