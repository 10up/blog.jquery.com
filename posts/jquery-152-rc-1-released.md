Progress is moving along well on the second update of jQuery 1.5 - we're
pleased to announce the release of its first release candidate! Barring
any major bugs this should be the code that we end up shipping for
jQuery 1.5.2 (which will be happening on March 31st).

jQuery 1.5.2 Release Candidate 1
--------------------------------

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.5.2rc1.js](http://code.jquery.com/jquery-1.5.2rc1.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.5.2 RC 1. We want to encourage everyone from the
community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

jQuery 1.5.2 RC 1 Change Log
----------------------------

The current change log of the 1.5.2 release.

-   [\#6158](http://bugs.jquery.com/ticket/6158) Fixed replaceWith from
    throwing errors on non existant elements.
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
    [\#http://www.ietf.org/rfc/rfc2718.txt](http://www.ietf.org/rfc/rfc2718.txt)).
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

