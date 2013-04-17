Hot off the momentum of the jQuery Conference in Boston earlier this
month, and based on the community's valuable feedback, we're releasing a
new beta that incorporates further fixes and improves stability. The
full list of fixes and features can be found below. We urge everyone to
start testing this code in their applications, so we can make sure that
there are no major problems before the final release.

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.7b2.js](http://code.jquery.com/jquery-1.7b2.js)

Please help us by dropping that code into your existing application. If
you see something, say something. [File a bug](http://bugs.jquery.com/)
and mention that you're testing against jQuery 1.7 Beta 2. If there's a
problem we want to fix it!

jQuery 1.7 Beta 2 Change Log
----------------------------

The current change log of the 1.7 Beta 2 release:

### Ajax

-   [\#9399](http://bugs.jquery.com/ticket/9399): Deprecate
    jqXHR.success and jqXHR.error

### Attributes

-   [\#5479](http://bugs.jquery.com/ticket/5479): removeAttr: remove
    multiple attributes
-   [\#10176](http://bugs.jquery.com/ticket/10176): Injected script tag
    is evaluated twice
-   [\#10278](http://bugs.jquery.com/ticket/10278):
    checkboxEl.attr('checked') returns stale value after
    checkboxEl.click()
-   [\#10429](http://bugs.jquery.com/ticket/10429): IE7 - invalid
    procedure call or argument when calling
    removeAttr('contenteditable');

### Core

-   [\#6485](http://bugs.jquery.com/ticket/6485): Solution for HTML5 in
    IE
-   [\#7102](http://bugs.jquery.com/ticket/7102): Register jQuery as a
    CommonjS async module
-   [\#9453](http://bugs.jquery.com/ticket/9453): \$.inArray does not
    support fromIndex
-   [\#10478](http://bugs.jquery.com/ticket/10478): Switch jQuery.isNaN
    to jQuery.isNumeric

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

### Dimensions

-   [\#9434](http://bugs.jquery.com/ticket/9434):
    .outerWidth()/.outerHeight()/.innerWidth()/.innerHeight() should
    work on window and document

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
-   [\#10416](http://bugs.jquery.com/ticket/10416): defaultDisplay
    returns block instead of table-row for a tr in FF
-   [\#10445](http://bugs.jquery.com/ticket/10445): Setting queue to
    true causes an error

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
-   [\#10375](http://bugs.jquery.com/ticket/10375): Do not include
    \`type\` in jQuery.event.props
-   [\#10438](http://bugs.jquery.com/ticket/10438): Rename
    jQuery.event.propHooks =\> .fixHooks
-   [\#10468](http://bugs.jquery.com/ticket/10468): Remove deprecated
    jQuery.event.guid and jQuery.event.proxy
-   [\#10489](http://bugs.jquery.com/ticket/10489): Disconnected
    elements bubble to window on .trigger()

### Manipulation

-   [\#6782](http://bugs.jquery.com/ticket/6782): carefully allow more
    strings to use innerHTML
-   [\#7037](http://bugs.jquery.com/ticket/7037): Duplicate mouseover
    and mouseout events added to cloned element.

### Selector

-   [\#3144](http://bugs.jquery.com/ticket/3144): Inconsistent
    cross-browser results from .text() method
-   [\#5637](http://bugs.jquery.com/ticket/5637): Boolean (and Empty)
    Attribute Selectors Fail
-   [\#6863](http://bugs.jquery.com/ticket/6863): faster getText
-   [\#7128](http://bugs.jquery.com/ticket/7128): attribute selector is
    inconsistent between qSA and Sizzle due to use of DOM properties
-   [\#8539](http://bugs.jquery.com/ticket/8539): Sizzle cache collision
    in browsers without querySelectorAll
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

-   [\#5145](http://bugs.jquery.com/ticket/5145): jQuery.support.opacity
    = false in the Chrome browser
-   [\#6809](http://bugs.jquery.com/ticket/6809): Add
    jQuery.support.fixedPosition

### Traversing

-   [\#10449](http://bugs.jquery.com/ticket/10449): Function
    \$("\#id").closest(".class") returns element \$("\#id") itself if it
    has .class

