Today, after a very scary Halloween, the jQuery team is releasing jQuery
1.7 RC2 from our Github crypt, er, repo. Barring a report of really
terrifying problems or a mob of townspeople at our door with torches,
this code will be exactly the same code that becomes the version 1.7
final. If anyone knows of any reason why this code should not become a
final release, we need to hear you scream!

HERE LIE THE\
 BITS FOR RC2;\
 PLEASE TELL US\
 IF IT WORKS\
 FOR YOU\

-   [http://code.jquery.com/jquery-1.7rc2.js](http://code.jquery.com/jquery-1.7rc2.js)
-   [http://code.jquery.com/jquery-1.7rc2.min.js](http://code.jquery.com/jquery-1.7rc2.min.js)

In RC2, we fixed a tricky problem that sometimes caused Internet
Explorer 8 to go full-zombie when jQuery was loaded. Appropriately
enough, the crash was related to creating a detached `<body>` element
that we were using to perform feature detection. IE8 seems frightened to
a crashy death when it sees a detached body. If you still see any
problems with IE8 crashes, please let us know.

Thanks to a bug report from @warrenparsons, we also fixed a [frightful
regression](http://bugs.jquery.com/ticket/10622) with the `.show()`
method. We really appreciate the efforts from those of you who are
testing these pre-release versions. Sure, it's a lot easier to think,
"I'll try it when it's finally released," but then any problems you do
find will be preventing you -- and possibly hundreds or thousands of
others -- from upgrading. Now that is *really* scary, at least to us.

During the next day or so we'll be conjuring up documentation for many
of the 1.7 additions and improvements on
[api.jquery.com](http://api.jquery.com). Please bear with us for a few
days while we clean up the pages and make sure that it is filled in and
all linked properly. For a quick overview of what's changed, see the
[1.7 category](http://api.jquery.com/category/version/1.7/).

jQuery 1.7 RC 2 Change Log
--------------------------

The current change log of the 1.7 RC2 release.

### Ajax

-   [\#9399](http://bugs.jquery.com/ticket/9399): Deprecate
    jqXHR.success and jqXHR.error

### Attributes

-   [\#5479](http://bugs.jquery.com/ticket/5479): removeAttr: remove
    multiple attributes
-   [\#6743](http://bugs.jquery.com/ticket/6743): map enctype to
    encoding, depending on browser
-   [\#10176](http://bugs.jquery.com/ticket/10176): Injected script tag
    is evaluated twice
-   [\#10278](http://bugs.jquery.com/ticket/10278):
    checkboxEl.attr('checked') returns stale value after
    checkboxEl.click()
-   [\#10429](http://bugs.jquery.com/ticket/10429): IE7 - invalid
    procedure call or argument when calling
    removeAttr('contenteditable');
-   [\#10514](http://bugs.jquery.com/ticket/10514): removeAttr does not
    remove the class attribute in IE6/7

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
-   [\#10445](http://bugs.jquery.com/ticket/10445): Setting queue to
    true causes an error
-   [\#10497](http://bugs.jquery.com/ticket/10497): .stop should allow
    choosing which queue to stop
-   [\#10622](http://bugs.jquery.com/ticket/10622): .show() does not
    properly restore CSS-set "display" value

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
-   [\#10531](http://bugs.jquery.com/ticket/10531): Consider removing
    layerX and layerY from \$.event.props
-   [\#10563](http://bugs.jquery.com/ticket/10563): jQuery.Event no
    longer contains the element that matched the selector in event
    delegation.
-   [\#10567](http://bugs.jquery.com/ticket/10567): Delegated events
    incorrectly match class names
-   [\#10575](http://bugs.jquery.com/ticket/10575): Breaking changes in
    live event propagation between 1.6.4 and 1.7rc1
-   [\#10576](http://bugs.jquery.com/ticket/10576): jQuery1.7rc1 and
    jQueryMobile1.0rc2 - IE gets error in jqm triggerCustomEvent method

### Manipulation

-   [\#6782](http://bugs.jquery.com/ticket/6782): carefully allow more
    strings to use innerHTML
-   [\#7037](http://bugs.jquery.com/ticket/7037): Duplicate mouseover
    and mouseout events added to cloned element.
-   [\#10501](http://bugs.jquery.com/ticket/10501): HTML5 element
    "innerShiv" inconsistent across html()/append()

### Misc

-   [\#10420](http://bugs.jquery.com/ticket/10420): MouseWheel
-   [\#10553](http://bugs.jquery.com/ticket/10553): Further reduction of
    minimal license header

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
-   [\#10562](http://bugs.jquery.com/ticket/10562): siblings method
    returns unexpected elements when using Sizzle-invoking
    pseudo-selectors

### Support

-   [\#5145](http://bugs.jquery.com/ticket/5145): jQuery.support.opacity
    = false in the Chrome browser
-   [\#6809](http://bugs.jquery.com/ticket/6809): Add
    jQuery.support.fixedPosition
-   [\#10558](http://bugs.jquery.com/ticket/10558): Test Support bug
-   [\#10613](http://bugs.jquery.com/ticket/10613): IE8 doesn't like a
    detached body in its head

### Traversing

-   [\#10449](http://bugs.jquery.com/ticket/10449): Function
    \$("\#id").closest(".class") returns element \$("\#id") itself if it
    has .class

