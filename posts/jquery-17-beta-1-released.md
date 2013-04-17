If you hadn't heard, [jQuery Conference
2011](http://events.jquery.org/2011/boston/) is taking place in Boston
later this week. We've put together a little something we like to call
jQuery 1.7 Beta 1 that we'll be talking a lot more about at the
conference. It's got a lovely bunch of new features and significant bug
fixes--more than 50 of them at last count.

You can get the beta from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.7b1.js](http://code.jquery.com/jquery-1.7b1.js)

Please help us by dropping this code into your existing application and
letting us know if anything no longer works. Please [file a bug
ticket](http://bugs.jquery.com/) and be sure to mention that you're
testing against jQuery 1.7 BETA 1.

Also be sure to explore all the new features and see if your favorite
pet-peeve bug has been fixed. If you wait until the final release to do
your testing *it will be too late!*

As always, we want to encourage everyone from the community to try and
[get involved](http://docs.jquery.com/Getting_Involved) in contributing
back to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

Oh, you probably want to know what changed, right? Addy Osmani has made
a great start with his [recent
post](http://addyosmani.com/blog/jquery-17-preview/), so let's cover the
stuff that isn't on his list.

New Event APIs: `.on()` and `.off()`
------------------------------------

Over time, jQuery has evolved three ways to attach events to elements:
`.bind()` , `.live()`, and `.delegate()`. Underneath it all, though, the
three event APIs call the browser's event system; that can lead to
surprising interactions. For example, `$(document).unbind("click")` will
remove all `.live("click", ...)` events, since those delegated events
are attached to `document`. (This is also why you should use [event
namespaces](http://www.learningjquery.com/2007/09/namespace-your-events).)

Our current event APIs aren't going away soon, but to address the
inconsistencies we've introduced a new and simple pair of event methods
that can do the work of all three:

        $(elems).on(events, selector, data, fn);
        $(elems).off(events, selector, fn);

If a `selector` is provided, it's a delegated event; otherwise it's
directly bound. All the features of the old APIs are there; for example
`events` can be a space-separated string of event names and/or
namespaces, or it can be an object where the keys are events and the
values are event handler functions. Here are some examples of how the
old methods map into the new ones:

  Old API                                      New API
  -------------------------------------------- ------------------------------------------
  \$(elems).bind(events, fn)                   \$(elems).on(events, fn)
  \$(elems).bind(events, { mydata: 42 }, fn)   \$(elems).on(events, { mydata: 42 }, fn)
  \$(elems).unbind(events, fn)                 \$(elems).off(events, fn)
  \$(elems).delegate(selector, events, fn)     \$(elems).on(events, selector, fn)
  \$(elems).undelegate(selector, events, fn)   \$(elems).off(events, selector, fn)
  \$(selector).live(events, fn)                \$(document).on(events, selector, fn)
  \$(selector).die(events, fn)                 \$(document).off(events, selector, fn)

Form Change and Submit Events in IE 6/7/8
-----------------------------------------

These old Internet Explorer versions are likely to be haunting us for
some time, so we've spent a while trying to improve their behavior.
Event delivery performance has been greatly improved for them, but the
biggest change is that we are using a different approach to fix their
non-bubbling and broken form events. As a result we were able to greatly
simplify and shorten the special events code. These events should work
without any problems--even better than before, since we closed about a
half-dozen related bugs--but please keep your eyes open for any unusual
behavior.

Animation Improvements
----------------------

Before version 1.7, if you stopped an animation before it completed it
could create a situation where the element being animated would never
return to its full size; it would essentially be stuck at the height
that it was when the animation was stopped. We've fixed that by
remembering the original dimensions before the animation starts so that
they can be used later. This eliminates a *major* annoyance in using
certain animations, particularly toggling ones.

`.removeData()` Enhancements
----------------------------

Addy mentioned this one as well, but the `.removeData()` API now lets
you pass either a space-separated string of names or an array of names
to be removed. Since spaces were previously allowed in data names, the
code first checks for the exact name as you specified it before
splitting the string on spaces. That way, no existing code should break
as a result of this enhancement.

jQuery 1.7 BETA 1 Change Log
----------------------------

Here is a complete list of changes made for the 1.7 BETA 1 release.

### Ajax

-   [\#9399](http://bugs.jquery.com/ticket/9399): Deprecate
    jqXHR.success and jqXHR.error

### Attributes

-   [\#5479](http://bugs.jquery.com/ticket/5479): removeAttr: remove
    multiple attributes
-   [\#10278](http://bugs.jquery.com/ticket/10278):
    checkboxEl.attr('checked') returns stale value after
    checkboxEl.click()

### Core

-   [\#6485](http://bugs.jquery.com/ticket/6485): Solution for HTML5 in
    IE
-   [\#7102](http://bugs.jquery.com/ticket/7102): Register jQuery as a
    CommonjS async module
-   [\#9453](http://bugs.jquery.com/ticket/9453): \$.inArray does not
    support fromIndex

### Css

-   [\#10267](http://bugs.jquery.com/ticket/10267): IE8 and window
    is(':visible') crashes

### Data

-   [\#7323](http://bugs.jquery.com/ticket/7323): Allow removing
    multiple data keys at once with \$.fn.removeData
-   [\#8909](http://bugs.jquery.com/ticket/8909): \$(element).data()
    will scan all attributes more than needed.
-   [\#8921](http://bugs.jquery.com/ticket/8921): jQuery private data
    should stay private

### Deferred

-   [\#8856](http://bugs.jquery.com/ticket/8856): Request:
    deferred.isUnresolved()
-   [\#9033](http://bugs.jquery.com/ticket/9033): try{ } finally{ }
    error in IE8
-   [\#9398](http://bugs.jquery.com/ticket/9398): Proposal for Improved
    Deferreds

### Effects

-   [\#5684](http://bugs.jquery.com/ticket/5684): Effects: exception in
    animation callback causes endless loop
-   [\#6150](http://bugs.jquery.com/ticket/6150): .stop sometimes
    doesn't clear .delay
-   [\#6641](http://bugs.jquery.com/ticket/6641): Calling stop() within
    animation finished callback causes other animations to freeze
-   [\#8685](http://bugs.jquery.com/ticket/8685): Animations should keep
    track of animation state in order to properly address stacked
    animations
-   [\#9280](http://bugs.jquery.com/ticket/9280): Allow multiple effect
    queues for animate()
-   [\#9548](http://bugs.jquery.com/ticket/9548): animate does not work
    with fill-opacity css property for svg elements

### Event

-   [\#3368](http://bugs.jquery.com/ticket/3368): event.metaKey should
    be assigned to event.ctrlKey on Non-Mac only
-   [\#6170](http://bugs.jquery.com/ticket/6170):
    jQuery(window).scroll(); causes IE\* to scroll to 0,0
-   [\#6319](http://bugs.jquery.com/ticket/6319): Regression:
    stopPropagation inside change handlers in IE is incorrectly applied
    to keydown event
-   [\#6386](http://bugs.jquery.com/ticket/6386): support data argument
    for live events via "event.special.live.add"
-   [\#6593](http://bugs.jquery.com/ticket/6593): IE8: DOM 0 event
    handler called twice when a separate handler is attached via jQuery
-   [\#6667](http://bugs.jquery.com/ticket/6667): submit event doesn't
    delegate in IE\* under certain conditions
-   [\#6705](http://bugs.jquery.com/ticket/6705): focus() causes focus
    event to be handled twice in IE8
-   [\#6903](http://bugs.jquery.com/ticket/6903): special events need a
    way to determine whether they are being bound with .bind vs
    .live/.delegate
-   [\#6942](http://bugs.jquery.com/ticket/6942): JQuery.event.fix
    causes unnecessary reflows in IE when handling key events
-   [\#7139](http://bugs.jquery.com/ticket/7139): "hover" event alias
    should work for .bind as well as .live
-   [\#7161](http://bugs.jquery.com/ticket/7161): Submit event on a form
    element not unbound properly in IE
-   [\#7444](http://bugs.jquery.com/ticket/7444): Submitting form with
    "Enter" instead of button click on ie8 or ie7 triggers live submit
    event twice.
-   [\#8157](http://bugs.jquery.com/ticket/8157): Focusing an already
    focused text field will prevent the change event from firing in IE
-   [\#8728](http://bugs.jquery.com/ticket/8728): Event 'mouseenter' not
    firing when the element being left is removed on leaving
-   [\#8789](http://bugs.jquery.com/ticket/8789): Meta: Event Property
    Hooks
-   [\#8858](http://bugs.jquery.com/ticket/8858): Special events -
    \_default method doesn't have access to the \`data\` argument of the
    trigger method
-   [\#8866](http://bugs.jquery.com/ticket/8866): IE8 input[type=file]
    delegated change event files only on blur
-   [\#8982](http://bugs.jquery.com/ticket/8982): bind("unload
    someOther") =\> on unload, handler is not executed only once.
-   [\#9069](http://bugs.jquery.com/ticket/9069): when hover over a
    child of an element, mouseleave fires when using live or delegate
-   [\#9279](http://bugs.jquery.com/ticket/9279): delegate() bind does
    not handle mouseover/mouseout and mouseenter/mouseout correctly for
    selected elements
-   [\#9393](http://bugs.jquery.com/ticket/9393): Unify and DRY out
    event system
-   [\#9593](http://bugs.jquery.com/ticket/9593): Delegated submit event
    is not instanceof jQuery.Event in IE
-   [\#9724](http://bugs.jquery.com/ticket/9724): Infinite loop in
    trigger function when window.parentNode is a DOM element
-   [\#9901](http://bugs.jquery.com/ticket/9901):
    event.handleObj.namespace incorrect when using .delegate
-   [\#9933](http://bugs.jquery.com/ticket/9933): jQuery.fn.toggle()
    should store state in private data object
-   [\#9951](http://bugs.jquery.com/ticket/9951): Wrong order in
    .trigger() when DOM is modified in a handler

### Manipulation

-   [\#6782](http://bugs.jquery.com/ticket/6782): carefully allow more
    strings to use innerHTML
-   [\#7037](http://bugs.jquery.com/ticket/7037): Duplicate mouseover
    and mouseout events added to cloned element.

### Selector

-   [\#5637](http://bugs.jquery.com/ticket/5637): Boolean (and Empty)
    Attribute Selectors Fail
-   [\#7128](http://bugs.jquery.com/ticket/7128): attribute selector is
    inconsistent between qSA and Sizzle due to use of DOM properties
-   [\#9261](http://bugs.jquery.com/ticket/9261): Has Attribute not
    working in filter/children/siblings
-   [\#9570](http://bugs.jquery.com/ticket/9570): Selector
    \$('form[name=".."]') returns zero elements in IE8 under some
    conditions
-   [\#10178](http://bugs.jquery.com/ticket/10178): \$(window).is("a")
    \>\> Uncaught TypeError: Cannot call method 'toLowerCase' of
    undefined
-   [\#10315](http://bugs.jquery.com/ticket/10315): Sizzle ignores seed
    argument when using positional selectors

### Support

-   [\#6809](http://bugs.jquery.com/ticket/6809): Add
    jQuery.support.fixedPosition

