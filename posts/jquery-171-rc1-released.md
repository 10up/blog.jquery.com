Just to let you know we're not asleep at the switch around jQuery
Central, we've got a new preview release of jQuery. It fixes the
problems reported by the community since the original 1.7 release.
Please test the code in your applications, making sure that there are no
major problems. If you tried jQuery 1.7 and reported a bug, it should be
fixed in this release. You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.7.1rc1.js](http://code.jquery.com/jquery-1.7.1rc1.js)
-   [http://code.jquery.com/jquery-1.7.1rc1.min.js](http://code.jquery.com/jquery-1.7.1rc1.min.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.7.1 RC1. We want to encourage everyone from the
community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

jQuery 1.7.1 RC1 Change Log
---------------------------

The current change log of the 1.7.1 RC1 release.

### Ajax

-   [\#10723](http://bugs.jquery.com/ticket/10723): jqXHR.always()
    returns a Promise instead of a jqXHR object

### Attributes

-   [\#10724](http://bugs.jquery.com/ticket/10724): \$(document).text()
    always returns an empty string
-   [\#10773](http://bugs.jquery.com/ticket/10773): removeAttr is
    fragile for edge cases

### Build

-   [\#10630](http://bugs.jquery.com/ticket/10630): Fix focus-related
    test failures to resolve Swarm failures

### Core

-   [\#10616](http://bugs.jquery.com/ticket/10616): Type coersion not
    done for -1 in .eq
-   [\#10646](http://bugs.jquery.com/ticket/10646): Have jQuery.error
    throw instanceof Error object
-   [\#10682](http://bugs.jquery.com/ticket/10682): Creating DOM
    elements with \$(' ') leaks memory and skips the fragment cache
-   [\#10687](http://bugs.jquery.com/ticket/10687): jQuery calls the AMD
    define() global function too early
-   [\#10690](http://bugs.jquery.com/ticket/10690): isNumeric

### Css

-   [\#10733](http://bugs.jquery.com/ticket/10733): remove uses of
    jQuery.each in css module in favor of a for loop

### Data

-   [\#10675](http://bugs.jquery.com/ticket/10675): Use internalKey
    shortcut instead of jQuery.expando

### Effects

-   [\#10669](http://bugs.jquery.com/ticket/10669): .animate() no longer
    animates percentage(%) width
-   [\#10750](http://bugs.jquery.com/ticket/10750): A "null" in the data
    object can cause an error in stop

### Event

-   [\#10676](http://bugs.jquery.com/ticket/10676): wheelDelta not added
    to mousewheel event anymore
-   [\#10701](http://bugs.jquery.com/ticket/10701): Problems with submit
    forms using submit function
-   [\#10704](http://bugs.jquery.com/ticket/10704): special.handle
    method should fire under origType name
-   [\#10705](http://bugs.jquery.com/ticket/10705): off bug event name
    parser
-   [\#10712](http://bugs.jquery.com/ticket/10712): Triggering blur with
    live bind broken
-   [\#10717](http://bugs.jquery.com/ticket/10717): A triggered load
    bubbles up to window
-   [\#10791](http://bugs.jquery.com/ticket/10791): Delegated Events
    fail on SVG elements
-   [\#10794](http://bugs.jquery.com/ticket/10794): .triggerHandler
    should not .preventDefault()
-   [\#10798](http://bugs.jquery.com/ticket/10798): live("submit") and
    .submit() would cause unobtrusive ajax live to fire twice

### Manipulation

-   [\#10177](http://bugs.jquery.com/ticket/10177): index of callback
    function in .wrap is always 0
-   [\#10667](http://bugs.jquery.com/ticket/10667): HTML5 Support in
    .wrapAll() does add a ":" to element
-   [\#10670](http://bugs.jquery.com/ticket/10670): rnoshimcache
    probably not constructed correctly
-   [\#10812](http://bugs.jquery.com/ticket/10812): passing empty object
    to .before() or .after() throws exception in IE7

### Misc

-   [\#10691](http://bugs.jquery.com/ticket/10691): remove all
    occurrences of the "equals" and "same" function in the unit tests\`

### Support

-   [\#10629](http://bugs.jquery.com/ticket/10629): IE is much too
    sensitive concerning the fake body. Explore cleaning up support.js
    to avoid any future crashes

