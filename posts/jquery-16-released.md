jQuery 1.6 is now live and available for consumption! We're quite proud
of this release, it includes a major rewrite of the Attribute module and
a number of performance improvements. Please take this opportunity to
thank members of the [jQuery Team](http://jquery.org/team) and the
[jQuery bug triage
team](http://blog.jquery.com/2010/11/23/team-spotlight-the-jquery-bug-triage-team/)
for their help in getting this release out the door.

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.6.js](http://code.jquery.com/jquery-1.6.js)
-   [http://code.jquery.com/jquery-1.6.min.js](http://code.jquery.com/jquery-1.6.min.js)

You can also get the code from other CDNs as well:

-   **Microsoft:**
    [http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.min.js](http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.min.js)
-   **Google:**
    [https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js](https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js)

We want to encourage everyone from the community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

In fact, we're already getting started working on jQuery 1.7. We're
welcoming [feature proposals for jQuery
1.7](%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20https://spreadsheets.google.com/viewform?hl=en&authkey=CPmgicsO&formkey=dG0yTEs2ZTFWQUhDRUp5dzRyc3NwV2c6MA#gid=0).
If you have any suggestions please submit them using the aforementioned
form.

jQuery 1.6 Change Log
---------------------

All of the API changes that occurred in this release can be found in the
jQuery API documentation:
[http://api.jquery.com/category/version/1.6/](http://api.jquery.com/category/version/1.6/)

### Breaking Changes

In most releases we try to main compatibility with existing code.
However, there are a few cases where jQuery 1.6 may require changes to
existing code:

#### Case-mapping of `data-` attributes

jQuery 1.5 introduced a feature in the `.data()` method to automatically
import any `data-` attributes that were set on the element and convert
them to JavaScript values using JSON semantics. In jQuery 1.6 we have
updated this feature to match the [W3C HTML5
spec](http://www.w3.org/TR/html5/elements.html#embedding-custom-non-visible-data-with-the-data-attributes)
with regards to camel-casing data attributes that have embedded dashes.
So for example in jQuery 1.5.2, an attribute of `data-max-value="15"`
would create a data object of `{ max-value: 15 }` but as of jQuery 1.6
it sets `{ maxValue: 15 }`.

#### `.prop()`, `.removeProp()`, and `.attr()`

In the 1.6 release we've split apart the handling of DOM attributes and
DOM properties into separate methods. The new `.prop()` method sets or
gets properties on DOM elements, and `.removeProp()` removes properties.
In the past, jQuery has not drawn a clear line between properties and
attributes. Generally, DOM attributes represent the state of DOM
information as retrieved from the document, such as the `value`
attribute in the markup `<input type="text" value="abc">`. DOM
properties represent the dynamic state of the document; for example if
the user clicks in the input element above and types `def` the
`.prop("value")` is `abcdef` but the `.attr("value")` remains `abc`.

In most cases, the browser treats the attribute value as the starting
value for the property, but Boolean attributes such as `checked` or
`disabled` have unusual semantics.

For example, consider the markup `<input type="checkbox" checked>`. The
presence of the `checked` attribute means that the DOM `.checked`
property is `true`, even though the attribute does not have a value. In
the code above, the `checked` attribute value is an empty string (or
`undefined` if no attribute was specified) but the `checked` property
value is `true`.

Before jQuery 1.6, `.attr("checked")` returned the Boolean property
value (`true`) but as of jQuery 1.6 it returns the actual value of the
attribute (an empty string), which doesn't change when the user clicks
the checkbox to change its state.

There are several alternatives for checking the currently-checked state
of a checkbox. The best and most performant is to use the DOM property
directly, as in `this.checked` inside an event handler when `this`
references the element that was clicked. In code that uses jQuery 1.6 or
newer, the new method `$(this).prop("checked")` retrieves the same value
as `this.checked` and is relatively fast. Finally, the expression
`$(this).is(":checked")` works for all versions of jQuery.

### Ajax

**Bugs Fixed:**

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

#### Performance Improvements

[![jQuery 1.6
.attr("value")](http://farm6.static.flickr.com/5021/5683836768_cf1b622b9f.jpg)](http://www.flickr.com/photos/jeresig/5683836768/ "jQuery 1.6 .attr("value") by John Resig, on Flickr")

[![jQuery 1.6 .attr("name",
"value")](http://farm6.static.flickr.com/5110/5683836016_fa9db3a396.jpg)](http://www.flickr.com/photos/jeresig/5683836016/ "jQuery 1.6 .attr("name", "value") by John Resig, on Flickr")

[![jQuery 1.6 .val()
(get)](http://farm6.static.flickr.com/5181/5683836340_6be09c3b7c.jpg)](http://www.flickr.com/photos/jeresig/5683836340/ "jQuery 1.6 .val() (get) by John Resig, on Flickr")

**Tests and Data:**

-   [http://jsperf.com/attr-vs-attrhooks](http://jsperf.com/attr-vs-attrhooks)
-   [http://jsperf.com/valhooks-vs-val/2](http://jsperf.com/valhooks-vs-val/2)

#### `.prop()`, `.removeProp()`, and `.attr()`

(See the description of what's changed in the "Breaking Changes"
section, above.)

#### Boolean Attributes

In jQuery 1.6 Boolean attributes (such as selected, checked, etc.) can
now be toggled by passing in `true` or `false` to `.attr()` to either
add or remove them. For example:

    $("#checkbox").attr("checked", true); // Checks it
    $("#checkbox").attr("checked", false); // Unchecks it

#### Extensibility of .attr() and .val()

Two new hooks have been added in order to make it easier to add in
special handling for specific attributes (jQuery.attrHooks) or form
input values (jQuery.valHooks). For example:

    jQuery.attrHooks.selected = {
        set: function( elem, value ) {
            if ( value === false ) {
                jQuery.removeAttr(elem, “selected”);
                return value;
            }
        }
    };

Both of the hooks behave very similarly to jQuery's built-in CSS hooks
(allowing you to specify either a get or set method for an attribute (or
value)) to handle those specific cases. **Bugs Fixed:**

-   [\#1591](http://bugs.jquery.com/ticket/1591): IE "Invalid Argument"
    \$('table').attr('non-existent')
-   [\#3116](http://bugs.jquery.com/ticket/3116): .attr does not work
    with SVG IDLs
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
-   [\#8997](http://bugs.jquery.com/ticket/8997): new attribute "form"
    (HTML5) is not supported, .attr('form') not working properly
-   [\#9037](http://bugs.jquery.com/ticket/9037):
    \$('blah').attr('onclick') return event in Firefox

### Build

**Bugs Fixed:**

-   [\#8854](http://bugs.jquery.com/ticket/8854): Bug in minifier
    process

### Core

#### jQuery.map( Object )

It's now possible to map the properties of a JavaScript object using the
jQuery.map method. For example:

    var counts = { first: 1, second: 2 };
        
    counts = jQuery.map( counts, function( value ) {
        return value++;
    });

**Bugs Fixed:**

-   [\#2616](http://bugs.jquery.com/ticket/2616): A better jQuery.map
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
-   [\#8893](http://bugs.jquery.com/ticket/8893): jQuery.proxy( context,
    name ) bug in 1.6b1
-   [\#8984](http://bugs.jquery.com/ticket/8984): jQuery doesn't parse
    html from string correctly!
-   [\#8993](http://bugs.jquery.com/ticket/8993): jQuery.map(
    emptyNodeList ) enumerating properties.

### CSS

#### Relative CSS

We've ported the functionality from the .animate() method, giving you
the ability to update CSS properties using relative values. You can now
prefix a CSS value with "+=" or "-=" to update the property relatively,
in relation to the current value.

    // Move an item 10px over
    $("#item").css("left", "+=10px");

**Bugs Fixed:**

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

#### Performance Improvements

Large performance improvements to `.data()` were achieved by improving
the performance of event triggering. jQuery's `.data()` method triggers
getData and setData events which allow for greater levels of
extensibility for plugins, improving how they're triggered allows
`.data()` to become even faster.

[![jQuery 1.6 .data() (get and
set)](http://farm6.static.flickr.com/5144/5683836956_3074f66856.jpg)](http://www.flickr.com/photos/jeresig/5683836956/ "jQuery 1.6 .data() (get and set) by John Resig, on Flickr")

**Tests and Data:**

-   [http://jsperf.com/jq152-vs-jq16pre-trigger/3](http://jsperf.com/jq152-vs-jq16pre-trigger/3)

**Bugs Fixed:**

-   [\#7328](http://bugs.jquery.com/ticket/7328): Should data-foo-bar be
    accessible via .data( 'fooBar' ) as well as .data( 'foo-bar' )

### Deferreds

#### `deferred.always()`

In 1.5, when you wanted to take the exact same action whether a deferred
was resolved or rejected, you had to use a named function and pass it to
"then" twice:

    function callback() {
        // the deferred has been resolved or rejected
    }

    defer.then( callback, callback );

With "always", you can do it inline:

    defer.always(function() {
        // the deferred has been resolved or rejected
    });

#### `deferred.pipe()`

Chaining asynchronous tasks can be tedious, especially when you want to
return a Promise for the whole chain:

    function chainedAjax( url ) {
        return $.Deferred(function( defer ) {
            $.ajax( url ).then( function( url2 ) {
                $.ajax( url2 ).then( defer.resolve, defer.reject )
            }, defer.reject ).promise();
        });
    }

With "pipe", everything is much more readable and natural:

    function chainedAjax( url ) {
        return $.ajax( url ).pipe(function( url2 ) {
            return $.ajax( url2 );
        });
    }

It can also be used to filter resolve and/or rejection values:

    var request = $.ajax( url ).pipe(function( data ) {
       return data.value;
    });

    request.done(function( value ) {
        // we get the value field of the original response
    });

### Effects

#### Synced Animations

In jQuery you can have multiple animations running simultaneously (even
multiple on the same element, animating different properties). In 1.6
we've introduced an enhancement that ensures that all animations are
synced to the same timer interval. This had the potential to create
problems before as animations could become slightly out-of-sync (even by
a couple milliseconds) resulting in slightly "off" animations.

#### Smoother Animations

Additionally jQuery is now using the new
[requestAnimationFrame](https://developer.mozilla.org/en/DOM/window.mozRequestAnimationFrame)
method provided by browsers to make our animations even smoother. We can
use this functionality to avoid calling timers and instead depend upon
the browser to provide the best possible animation experience.

#### `.promise()`

Just like `$.ajax()` before it, `$.animate()` gets "deferred". jQuery
objects can now return a Promise to observe when all animations on a
collection have completed:

    $(".elements").fadeOut();

    $.when( $(".elements") ).done(function( elements ) {
        // all elements faded out
    });

**Bugs Fixed:**

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

#### Performance Improvements

(As mentioned while discussing `.data()` performance, the performance of
event triggering has been improved.)

#### `jQuery.holdReady()`

jQuery provides a mechanism for delaying the execution of the ready
event (primarily for plugin authors). The API for this mechanism has
been improved in 1.6, resulting in a single, simple, method:

    jQuery.holdReady( true ); // Pause execution of ready event
    // later...
    jQuery.holdReady( false ); // Resume execution

**Bugs Fixed:**

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

**Bugs Fixed:**

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

**Bugs Fixed:**

-   [\#8203](http://bugs.jquery.com/ticket/8203): Remove un-needed
    "someVar = null;"s
-   [\#8851](http://bugs.jquery.com/ticket/8851): Wraps strings with
    double quotes in sources and tests
-   [\#8882](http://bugs.jquery.com/ticket/8882): Tests: Update QUnit
    usage, replace id=main with id=qunit-fixture

### Offset

**Bugs Fixed:**

-   [\#7931](http://bugs.jquery.com/ticket/7931): scrollTop and
    scrollLeft setters return null when called on empty jquery object

### Selector

#### `:focus` Selector

In jQuery 1.6 we now ensure that the `:focus` selector works properly
across all browsers. You can use this selector to find the currently
focused element on the page (such as a form input).

    $("input:focus").addClass("active");

-   [\#3685](http://bugs.jquery.com/ticket/3685): Selector fails for
    forms with an element named "name"
-   [\#4321](http://bugs.jquery.com/ticket/4321): \$("\#") returns
    undefined
-   [\#8105](http://bugs.jquery.com/ticket/8105): :focus selector filter

### Support

**Bugs Fixed:**

-   [\#9028](http://bugs.jquery.com/ticket/9028): IE8 crashes while
    loading 1.6rc1 if using body background image

### Traversing

#### `find()`, `closest()`, and `is()` now all take DOM elements and jQuery objects

In jQuery 1.6 we've ensured that `find()`, `closest()`, and `is()` can
all take DOM elements and jQuery objects as arguments. This gives you
alternatives for filtering sets of elements based upon the passed-in
elements.

    // Only returns .test elements if they're inside of a div
    $("div").find( $(".test") )

**Bugs Fixed:**

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

