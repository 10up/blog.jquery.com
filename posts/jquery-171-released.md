Here in the United States, we're celebrating Thanksgiving this week. For
those of you living elsewhere in the world, it's a time when we install
and test new versions of Javascript libraries while feasting on Mom's
homemade goodies. Kind of like a code sprint, but with better food. We
invite everyone worldwide to join us in these traditions.

To kick off the festivities, the jQuery Team is quite thankful to be
releasing version 1.7.1! In this go-round we made Pilgrim's progress on
a cornucopia of bugs, listed below. We are serving up our delicious
copies on the jQuery CDN, fresh and warm from the oven:

-   [http://code.jquery.com/jquery-1.7.1.min.js](http://code.jquery.com/jquery-1.7.1.min.js)
-   [http://code.jquery.com/jquery-1.7.1.js](http://code.jquery.com/jquery-1.7.1.js)

These latest files should also be up on the major CDNs shortly, but
please be patient since this is a holiday week for them as well.

Please install and test this latest slice of jQuery with your code. We
hope you'll find it tasty. If we forgot to fry some turkey of a bug, we
want to hear about it. Just put together a specific test case for the
problems you've found (we love [jsFiddle.net](http://jsFiddle.net) for
that) and create a bug report at
[bugs.jquery.com](http://bugs.jquery.com).

Also, please welcome new jQuery Core team member Mike Sherov! We're
thankful to have his help for all the great things we have planned for
upcoming versions. Mike has a full-time job at [SNAP
Interactive](%20http://devblog.snap-interactive.com/) in New York City,
but contributes to the project in his spare time. Please Be Like Mike
and pitch in to help the project any way you can. It doesn't have to be
coding. We can always use help in answering questions on the forum or
just reproducing and identifying the source of obscure bugs reported on
the bug tracker. See our [Getting
Involved](http://docs.jquery.com/Getting_Involved) page for information.

We'll be opening the call for 1.8 suggestions in just a day or two. Take
a look at the 1.7.1 release and think about what kind of awesome sauce
we can put on top of it for the next big one!

jQuery 1.7.1 Change Log
-----------------------

The change log of the 1.7.1 release.

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
-   [\#10844](http://bugs.jquery.com/ticket/10844): .delegate() on
    submit doesn't work when form contains input with name "id"

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
    to avoid any future crashes.
-   [\#10807](http://bugs.jquery.com/ticket/10807): Non-ascii apostrophe
    in comment

