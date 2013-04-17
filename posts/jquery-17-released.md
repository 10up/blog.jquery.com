jQuery 1.7 is ready for download! You can get the code from the jQuery
CDN:

-   [http://code.jquery.com/jquery-1.7.js](http://code.jquery.com/jquery-1.7.js)
-   [http://code.jquery.com/jquery-1.7.min.js](http://code.jquery.com/jquery-1.7.min.js)

This new release should also be available on the Google and Microsoft
CDNs within a day or two.

Thanks to your help in testing and reporting bugs during the beta
period, we believe we have a solid, stable release. If you do find
problems, [file a bug](http://bugs.jquery.com/) and be sure to choose
jQuery 1.7 in the version selection. Also be sure to provide a [jsFiddle
test case](http://jsFiddle.net/) so we can quickly analyze the problem.

What's New in jQuery 1.7
------------------------

The [Version 1.7 tag](http://api.jquery.com/category/version/1.7/) at
the API site is a great way to get up to speed with the new things in
this release. Here's a rundown of the big items in 1.7 and some things
not yet mentioned in the API docs.

### New Event APIs: .on() and .off()

The new `.on()` and `.off()` APIs unify all the ways of attaching events
to a document in jQuery -- and they're shorter to type!

    $(elements).on( events [, selector] [, data] , handler );
    $(elements).off( [ events ] [, selector] [, handler] );

When a selector is provided, `.on()` is similar to `.delegate()` in that
it attaches a delegated event handler, filtered by the selector. When
the selector is omitted or `null` the call is like `.bind()`. There is
one ambiguous case: If the `data` argument is a string, you must provide
either a selector string or `null` so that the data isn't mistaken as a
selector. Pass an object for `data` and you'll never have to worry about
special cases.

All the existing event binding methods (and their corresponding
unbinding methods) are still there in 1.7, but we recommend that you use
`.on()` for any new jQuery project where you know version 1.7 or higher
is in use. Here are some examples of mapping between the old and new API
calls:

    $('a').bind('click', myHandler);
    $('a').on('click', myHandler);

    $('form').bind('submit', { val: 42 }, fn);
    $('form').on('submit', { val: 42 }, fn);

    $(window).unbind('scroll.myPlugin');
    $(window).off('scroll.myPlugin');

    $('.comment').delegate('a.add', 'click', addNew);
    $('.comment').on('click', 'a.add', addNew);

    $('.dialog').undelegate('a', 'click.myDlg');
    $('.dialog').off('click.myDlg', 'a');

    $('a').live('click', fn);
    $(document).on('click', 'a', fn);

    $('a').die('click');
    $(document).off('click', 'a');

### Improved Performance on Delegated Events

Event delegation has become increasingly important as size and
complexity of pages grow. Application frameworks such as Backbone,
JavaScriptMVC, and Sproutcore make heavy use of event delegation. With
that in mind, jQuery 1.7 event handling was refactored with an eye to
making delegated events much faster, especially for the most common
cases.

To optimize the code for the most commonly used forms of selectors, we
examined a cross-section of code from Google Codesearch. Nearly
two-thirds of the selectors used in `.live()` and `.delegate()` method
calls were in the form `tag#id.class` where one or more of tag, id, or
class were used. By parsing those simple selectors in JavaScript at the
time the event was attached, we were able to outperform even the
browser's native-code implementations of `matchesSelector` during event
delivery. For more complex selectors we still use the Sizzle engine, so
all existing code should continue to work.

The final result is that delegated events are delivered in about half
the time they took in 1.6.4:

![](http://i.imgur.com/QHvsl.png)

### Better Support for HTML5 in IE6/7/8 {#html5elems}

Anyone who has tried to use the new HTML5 tags such as `<section>` has
no doubt run across the problem that IE 6/7/8 not only don't understand
these tags, they actually remove them from the document. With jQuery 1.7
we built in support for using HTML5 tags in older IEs with methods like
`.html()`. This support is on par with what previously required
[innerShiv](http://jdbartlett.com/innershiv/). **You must still include
[html5shiv](http://code.google.com/p/html5shiv/) (or Modernizr) in the
head of your document in older IEs for HTML5 tag support.** For more
background, see [The Story of the HTML5
Shiv](http://paulirish.com/2011/the-history-of-the-html5-shiv/).

### Toggling Animations Work Intuitively

In previous versions of jQuery, toggling animations such as
`.slideToggle()` or `.fadeToggle()` would not work properly when
animations were stacked on each other and a previous animation was
terminated with `.stop()`. This has been
[fixed](http://bugs.jquery.com/ticket/8685) in 1.7 so that the animation
system remembers the elements' initial values and resets them in the
case where a toggled animation is terminated prematurely.

### Asynchronous Module Definition (AMD)

jQuery [now supports](http://bugs.jquery.com/ticket/7102) the [AMD
API](https://github.com/amdjs/amdjs-api/wiki/AMD). Note that jQuery 1.7
is *not* a script loader itself; it cooperates with AMD-compliant
loaders such as RequireJS or curl.js so it can be loaded dynamically and
the `ready` event can be controlled by the loader. Now an AMD-compliant
loader can load an unmodified version of jQuery 1.7 from a CDN such as
Google's or Microsoft's. Many thanks to James Burke (@jrburke) for
submitting the patch and unit tests, then waiting patiently for us to
incorporate it.

### jQuery.Deferred

The [`jQuery.Deferred`](http://api.jquery.com/category/deferred-object/)
object has been extended with new progress handlers and notification
methods that call those handlers. This allows you to asynchronously
notify listeners of progress in a request without resolving or rejecting
the request. In addition, there is a new `state()` method that returns
the current state of the Deferred; it's primarily useful for debugging.

Deferreds are now implemented using a new
[`jQuery.Callbacks`](http://api.jquery.com/category/callbacks-object/)
feature, a generalized way of queueing and triggering a series of
handlers. This feature may be of interest to plugin writers, although
Deferreds and the event subsystem provide a higher-level interface for
this type of functionality.

### jQuery.isNumeric()

Inside jQuery we've found several situations where we need to know if an
argument is numeric, or would be successfully converted to a number if
it is some other type. We decided to write and document
[`jQuery.isNumeric()`](http://api.jquery.com/jQuery.isNumeric) since
it's a useful utility. Pass it an argument of any type and it returns
`true` or `false` as appropriate.

Removed Features
----------------

**event.layerX and event.layerY:** We have removed these non-standard
properties in version 1.7. Although we normally would have gone through
a deprecation notice period for these, Chrome version 16 generates a
flood of [console warning
messages](http://code.google.com/p/chromium/issues/detail?id=101733) on
the page. Because of this, we decided to remove them immediately. On
platforms that still support these properties, they are available
through `event.originalEvent.layerX` and `event.originalEvent.layerY`.

**jQuery.isNaN():** This undocumented utility function has been removed.
It was confusing because it appropriated the name of a built-in
JavaScript function but did not have the same semantics. The new
`jQuery.isNumeric()` serves a similar purpose, but has the benefit of
being documented and supported. Despite `jQuery.isNaN()` being
undocumented, several projects on Github were using it. We have
contacted them and asked that they use `jQuery.isNumeric()` or some
other solution.

**jQuery.event.proxy():** This undocumented and deprecated method has
been removed. Users should be calling the documented `jQuery.proxy`
method instead.

The jQuery Team, and Your Part
------------------------------

I want to recognize the incredible work of our regular team contributors
in getting this release out the door, especially Timmy Willison
(timmywil on Github), Corey Frang (gnarf), Rick Waldron (rwldrn), and
Julian Aubourg (jaubourg). Karl Swedberg (kswedberg) and Addy Osmani
(addyosmani) worked hard on getting the new documentation into shape on
the API site. Also, thanks to Mike Sherov (mikesherov), a greenhorn
contributor who has already created patches for several tricky bugs.
Many thanks to all the others who reported bugs, submitted pull
requests, reviewed commits, and in other ways made sure we did the best
job we possibly could.

Still, we can always use more help, and that is where you can
contribute. The simplest and most important thing you can do is
occasionally test our work-in-progress against your code and your
expectations. It's always located at
[http://code.jquery.com/jquery-git.js](http://code.jquery.com/jquery-git.js)
and a fresh copy is built each time a new commit is made to our [master
branch at github.com](https://github.com/jquery/jquery). If you find a
bug in a final release, test against jquery-git.js to see if it's
already been fixed. It's easy as pie since jsFiddle.net offers an option
to test your code with the jquery-git.js file as "jQuery (edge)".

If you'd like to do more, we'd be glad to have you pitch in! We've
written a [document](http://docs.jquery.com/Getting_Involved) that can
get you started with the process, and one or more of us are generally
available in the \#jquery-dev channel on IRC if you need more help or
information.

jQuery 1.7 Change Log
---------------------

The current change log of the 1.7 release.

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

[\#5145](http://bugs.jquery.com/ticket/5145): jQuery.support.opacity =
false in the Chrome browser

[\#6809](http://bugs.jquery.com/ticket/6809):
