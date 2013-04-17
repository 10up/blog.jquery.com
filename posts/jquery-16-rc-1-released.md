This is a preview release of jQuery. We're releasing it so that everyone
can start testing the code in their applications, making sure that there
are no major problems.

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.6rc1.js](http://code.jquery.com/jquery-1.6rc1.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.6 RC 1.

We want to encourage everyone from the community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

jQuery 1.6 RC 1 Change Log
--------------------------

The current change log of the 1.6 RC 1 release.

### Ajax

-   [\#6481](http://bugs.jquery.com/ticket/6481): revert \$.param should
    treat empty arrays/objects like empty strings
-   [\#7881](http://bugs.jquery.com/ticket/7881): Make compatible with
    XHR 2
-   [\#8417](http://bugs.jquery.com/ticket/8417): When posting AJAX and
    the data has "??" is formats it to jQuery\<timestamp\>?
-   [\#8744](http://bugs.jquery.com/ticket/8744): .ajax() jsonp requests
    are not handled correctly when hitting timeout
-   [\#8884](http://bugs.jquery.com/ticket/8884): jqXHR breaks names of
    custom header fields

### Attributes

-   [\#3786](http://bugs.jquery.com/ticket/3786): removeAttr should use
    jQuery.props
-   [\#4283](http://bugs.jquery.com/ticket/4283): .attr('checked') &
    XHTML 1.1 Strict
-   [\#4464](http://bugs.jquery.com/ticket/4464): IE cannot get width
    attribute of detached IMG element
-   [\#4978](http://bugs.jquery.com/ticket/4978): jQuery.prop missing
    cellpadding?
-   [\#5413](http://bugs.jquery.com/ticket/5413): tag "img" width/height
    attribute is zero (IE)
-   [\#6562](http://bugs.jquery.com/ticket/6562): using .attr() to set
    the 'target' attribute, with a node that has ID of 'target'
-   [\#6708](http://bugs.jquery.com/ticket/6708): Opera has inconsistent
    result for usemap attribute value
-   [\#6823](http://bugs.jquery.com/ticket/6823): Make .val(value)
    faster for common use case
-   [\#7472](http://bugs.jquery.com/ticket/7472): \$('form').attr('id')
    return DOM Element
-   [\#7485](http://bugs.jquery.com/ticket/7485): Inconsistency between
    has [attribute] selector and attr() method
-   [\#7709](http://bugs.jquery.com/ticket/7709): Permission denied to
    access property 'nodeType' from a non-chrome Firefox/3.5.15
-   [\#7996](http://bugs.jquery.com/ticket/7996): Safari
    \$('script').attr('event'); Bug
-   [\#8117](http://bugs.jquery.com/ticket/8117): .removeAttr don't
    works with select element's size attribute
-   [\#8150](http://bugs.jquery.com/ticket/8150): removeAttr issue in
    webkit, firefox
-   [\#8255](http://bugs.jquery.com/ticket/8255): support for list
    attribute
-   [\#8418](http://bugs.jquery.com/ticket/8418): set name parameter
    using attr() method in IE 7
-   [\#8457](http://bugs.jquery.com/ticket/8457): attrHooks
-   [\#8570](http://bugs.jquery.com/ticket/8570): .val method returning
    "on" for dynamically created radio buttons in ie9
-   [\#8699](http://bugs.jquery.com/ticket/8699): .attr() returns -1 on
    missing attribute instead of undefined
-   [\#8772](http://bugs.jquery.com/ticket/8772): Using .attr() to set
    input type 'range' causes script error in IE9

### Build

-   [\#8854](http://bugs.jquery.com/ticket/8854): Bug in minifier
    process

### Core

-   [\#2616](http://bugs.jquery.com/ticket/2616): A better jQuery.map
-   [\#3116](http://bugs.jquery.com/ticket/3116): .attr does not work
    with SVG IDLs
-   [\#4366](http://bugs.jquery.com/ticket/4366): \$.each fails in IE
    with document.styleSheets
-   [\#6690](http://bugs.jquery.com/ticket/6690): Store references to
    location and navigator objects
-   [\#7049](http://bugs.jquery.com/ticket/7049): making
    jQuery.noConflict() callable anytime
-   [\#7783](http://bugs.jquery.com/ticket/7783): Fixing \$.proxy to
    work like (and use) Function.prototype.bind
-   [\#7862](http://bugs.jquery.com/ticket/7862): jQuery.globalEval():
    Execution Delayed By Remote Scripts in Firefox
-   [\#7990](http://bugs.jquery.com/ticket/7990): Script space quota
    exhausted error when creating a large HTML block with jQuery
    constructor in Firefox
-   [\#8882](http://bugs.jquery.com/ticket/8882): Tests: Update QUnit
    usage, replace id=main with id=qunit-fixture
-   [\#8893](http://bugs.jquery.com/ticket/8893): jQuery.proxy( context,
    name ) bug in 1.6b1

### Css

-   [\#6135](http://bugs.jquery.com/ticket/6135): jQuery tries to access
    the .style attribute of text tags
-   [\#7345](http://bugs.jquery.com/ticket/7345): Support relative
    values for \$().css()
-   [\#7730](http://bugs.jquery.com/ticket/7730): offset.js: setOffset
    uses parseInt to parse css values which may contain floating point
    numbers
-   [\#8401](http://bugs.jquery.com/ticket/8401): minor enhancement to
    opacity cssHooks
-   [\#8402](http://bugs.jquery.com/ticket/8402): jQuery.cssProps is
    useless in all browsers but IE6/7/8
-   [\#8403](http://bugs.jquery.com/ticket/8403): jQuery Bulldozes Other
    IE Filters When Assigning Opacity

### Data

-   [\#7328](http://bugs.jquery.com/ticket/7328): Should data-foo-bar be
    accessible via .data( 'fooBar' ) as well as .data( 'foo-bar' ) ?

### Effects

-   [\#7917](http://bugs.jquery.com/ticket/7917): .animate() when used
    with large groups of elements is not "in sync"
-   [\#7934](http://bugs.jquery.com/ticket/7934): \$.fn.animate to
    implement deferreds
-   [\#7974](http://bugs.jquery.com/ticket/7974): Cleanup effects.js to
    improve performances and reduce filesize
-   [\#8099](http://bugs.jquery.com/ticket/8099): SPAN element becomes
    block level on show()
-   [\#8101](http://bugs.jquery.com/ticket/8101): use
    requestAnimationFrame instead of setInterval for animations, when
    available

### Event

-   [\#5884](http://bugs.jquery.com/ticket/5884): live
    mouseenter/mouseleave events don't fire as expected when nested
-   [\#6514](http://bugs.jquery.com/ticket/6514): Mouseenter and
    mouseleave events not able to be triggered if bound by live
-   [\#6913](http://bugs.jquery.com/ticket/6913): namespaced event
    bubbleing wrong
-   [\#6993](http://bugs.jquery.com/ticket/6993): .bind() and .one()
    don't allow a function as data
-   [\#7071](http://bugs.jquery.com/ticket/7071): Accessing the 'type'
    property on VML elements fails on IE
-   [\#7883](http://bugs.jquery.com/ticket/7883): .delegate (and .live)
    should accept false as the fn arg, like .bind
-   [\#8018](http://bugs.jquery.com/ticket/8018): Unsafe access to
    frameElement causes error in crossdomain (i)frames
-   [\#8272](http://bugs.jquery.com/ticket/8272): Exceptions in plain JS
    object event handlers swallowed by jQuery
-   [\#8712](http://bugs.jquery.com/ticket/8712): Custom events don't
    bubble up to window
-   [\#8732](http://bugs.jquery.com/ticket/8732): Incorrect feature
    detect for IE9 focusin/focusout
-   [\#8753](http://bugs.jquery.com/ticket/8753): jQuery 1.6:
    jQuery.Event contstructor to support setting properties
-   [\#8755](http://bugs.jquery.com/ticket/8755): binding to
    beforeunload throws an error in IE6, 7, 8 on page unload
-   [\#8777](http://bugs.jquery.com/ticket/8777): jQuery 1.6:
    undelegate() accepts custom namespaced events
-   [\#8788](http://bugs.jquery.com/ticket/8788): Reorganize
    jQuery.event.trigger to use loop instead of recursion
-   [\#8790](http://bugs.jquery.com/ticket/8790): Optimize non-attached
    events such as data events
-   [\#8803](http://bugs.jquery.com/ticket/8803): jQuery.holdReady()
    method

### Manipulation

-   [\#1954](http://bugs.jquery.com/ticket/1954): val() returns
    innerHTML for button elements in IE
-   [\#6180](http://bugs.jquery.com/ticket/6180): jQuery.clean should
    not touch script tags that are not of type text/javascript
-   [\#7623](http://bugs.jquery.com/ticket/7623): Exception thrown in
    replaceWith
-   [\#7885](http://bugs.jquery.com/ticket/7885): jQuery .offset doesn't
    property works when current offset is float (which is possible in
    FireFox)
-   [\#8060](http://bugs.jquery.com/ticket/8060): Setting checked to
    true on a disconnected checkbox does not carry over after attaching
    to DOM.
-   [\#8500](http://bugs.jquery.com/ticket/8500): radios and checkboxes
    revert to default (HTML) state when wrapped in IE

### Misc

-   [\#8203](http://bugs.jquery.com/ticket/8203): Remove un-needed
    "someVar = null;"s
-   [\#8851](http://bugs.jquery.com/ticket/8851): Wraps strings with
    double quotes in sources and tests

### Offset

-   [\#7931](http://bugs.jquery.com/ticket/7931): scrollTop and
    scrollLeft setters return null when called on empty jquery object

### Selector

-   [\#3685](http://bugs.jquery.com/ticket/3685): Selector fails for
    forms with an element named "name"
-   [\#4321](http://bugs.jquery.com/ticket/4321): \$("\#") returns
    undefined
-   [\#8105](http://bugs.jquery.com/ticket/8105): :focus selector filter

### Traversing

-   [\#2773](http://bugs.jquery.com/ticket/2773): \$.fn.is and \$.fn.not
    should accept DOMelements and jQuery collections
-   [\#5712](http://bugs.jquery.com/ticket/5712): Allow jQuery.fn.is to
    accept a function
-   [\#6912](http://bugs.jquery.com/ticket/6912):
    \$().add(selectElement) adds option children instead
-   [\#7369](http://bugs.jquery.com/ticket/7369):
    \$('\<div\>ff\</div\>').closest('[attr]'); raises exception in all
    browsers
-   [\#8609](http://bugs.jquery.com/ticket/8609): Result of .find(" ")
    is undefined

