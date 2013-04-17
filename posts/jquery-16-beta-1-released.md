We're nearing the completion of jQuery 1.6! We want to get a beta out so
that everyone can start testing the code in their applications, making
sure that there are no major problems.

jQuery 1.6 Beta 1
-----------------

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.6b1.js](http://code.jquery.com/jquery-1.6b1.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.6 Beta 1. We want to encourage everyone from the
community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

jQuery 1.6 Beta 1 Change Log
----------------------------

The current change log of the 1.6 release.

-   [\#6782](http://bugs.jquery.com/ticket/6782) Optimizes regex for
    innerHTML to allow more html snippets to use faster method.
-   [\#7328](http://bugs.jquery.com/ticket/7328) When getting data-
    attributes, after-cap any embedded dashes per the W3C HTML5 specs.
-   [\#4146](http://bugs.jquery.com/ticket/4146) Fixing inconsistency
    with width/height on inputs.
-   [\#7345](http://bugs.jquery.com/ticket/7345) Adds support for
    explicit/relative string values in .css().
-   [\#7783](http://bugs.jquery.com/ticket/7783) Fixes \$.proxy to work
    like (and use) Function.prototype.bind
-   [\#8753](http://bugs.jquery.com/ticket/8753) Allows special
    properties to be explicitly defined on jQuery.Event objects.
-   [\#7587](http://bugs.jquery.com/ticket/7587) Bypass regexp filter on
    \$.parseJSON and use native thrown exceptions if window.JSON.parse
    is available.
-   [\#8150](http://bugs.jquery.com/ticket/8150) Fixes an issue where if
    removing the width and height attributes in IE6/7, setting to ""
    actually sets to 0 instead of auto.
-   [\#6562](http://bugs.jquery.com/ticket/6562) Fixes an issue where if
    you have a DOM node with the ID of 'target' and you try and set a
    target it fails.
-   [\#8744](http://bugs.jquery.com/ticket/8744) Makes sure script
    transport abort method actually removes the script tag even if
    readyState exists.
-   [\#8712](http://bugs.jquery.com/ticket/8712) Bubble custom events to
    the window when they are triggered.
-   [\#8635](http://bugs.jquery.com/ticket/8635) Fixes an uncaught
    exception in Firefox and removes unnecessary "manual" garbage
    collection.
-   [\#8568](http://bugs.jquery.com/ticket/8568) Fixes an issue where
    live event callbacks can get out of order in the event liveHandler
    function.
-   [\#8417](http://bugs.jquery.com/ticket/8417) Disables the JSONP
    replacement for \$.ajax() JSON POST.
-   [\#8099](http://bugs.jquery.com/ticket/8099) Fixes an issue where
    SPAN elements become block level on show().
-   [\#8593](http://bugs.jquery.com/ticket/6593) Fixes an issue where
    DOM 0 event handlers are called twice when a separate handler is
    attached via jQuery
-   [\#8402](http://bugs.jquery.com/ticket/8402) Fixes an issue where
    browsers implementing window.getComputedStyle completely ignore the
    "fixed property" in jQuery.css(). This makes the implementation of
    jQuery.cssProps more generic.
-   [\#8401](http://bugs.jquery.com/ticket/8401) and
    [\#8403](http://bugs.jquery.com/ticket/8403) .Fixes an issue where
    jQuery "bulldozes" other IE filters when setting opacity
-   [\#7071](http://bugs.jquery.com/ticket/7071) Corrects an issue where
    accessing the 'type' property on VML elements fails on IE
-   [\#4321](http://bugs.jquery.com/ticket/4321) Fixes an issue where
    \$("\#") returns "undefined" and an exception on Opera 9.6.
-   [\#7883](http://bugs.jquery.com/ticket/7883) Just like .bind,
    .delegate (and .live) now accept false as a shortcut for
    function(){return false;}.
-   [\#2773](http://bugs.jquery.com/ticket/2773) \$.fn.is and \$.fn.not
    now accept DOM elements and jQuery collections.
-   [\#8777](http://bugs.jquery.com/ticket/8777) undelegate() now
    accepts custom namespaced events.
-   [\#3116](http://bugs.jquery.com/ticket/3116) .attr() now also works
    with read only interfaces of the SVG specification.
-   [\#8732](http://bugs.jquery.com/ticket/8732) Changes feature
    detection for focusin event support so that IE9 won't have duplicate
    vents.
-   [\#7369](http://bugs.jquery.com/ticket/7369) It is now possible to
    use .closest() on disconnected nodes with attributes.
-   [\#4366](http://bugs.jquery.com/ticket/4366) Fixes an issue where
    \$.each was failing when passed document.styleSheets in IE.
-   [\#7931](http://bugs.jquery.com/ticket/7931) Corrects an issue where
    both the \$.fn.scrollTop and \$.fn.scrollLeft setters returned null
    when called on an empty jQuery object.
-   [\#8101](http://bugs.jquery.com/ticket/8101) We now use
    requestAnimationFrame instead of setInterval for animations when
    it's available
-   [\#8018](http://bugs.jquery.com/ticket/8018) Fixes an issue where
    unsafe access to frameElement causes errors in crossdomain (i)frames
-   [\#6180](http://bugs.jquery.com/ticket/6180) jQuery.clean no longer
    affects or modifies script tags which are not of the type
    text/javascript
-   [\#3685](http://bugs.jquery.com/ticket/3685) Corrects a previous
    failure when selecting forms with an element named "name"
-   [\#8790](http://bugs.jquery.com/ticket/8790) For cases where an
    event that is triggered is not native (ie. should not have inline
    handlers) we should bail out immediately for optimization purposes
-   [\#8814](http://bugs.jquery.com/ticket/8814) Fixed a minor issue
    where in core.js, we don't need to check for indexOf in the fallback
    inArray definition.
-   [\#7472](http://bugs.jquery.com/ticket/7472) and
    [\#3113](http://bugs.jquery.com/ticket/3113) Fixes an issue where if
    attribute names in forms share the same names as attribute types
    (eg, id, name etc) a conflict was being experienced
-   [\#7054](http://bugs.jquery.com/ticket/7054) Ensures that the DOM
    element ref in an event handler is removed by cleanData to avoid an
    IE6/7/8 memory leak.
-   [\#8418](http://bugs.jquery.com/ticket/8418) Fixes an issue where
    attr("name","value") is not working to set name attribute value in
    IE 7
-   [\#7996](http://bugs.jquery.com/ticket/7996) Fixes a Safari 5.0.3
    bug when trying to use jQuery's .attr() on a script tag to access an
    attribute named "event".
-   [\#8772](http://bugs.jquery.com/ticket/8772) Fixes an issue where
    IE9 fails to gracefully handle the setting of unsupported input
    types such as 'range'.
-   [\#4283](http://bugs.jquery.com/ticket/4283) As part of the .attr()
    rewrite, false will remove Boolean attributes such as checked.
-   [\#8699](http://bugs.jquery.com/ticket/8699) .attr() no longer
    returns -1 on missing attributes instead of undefined.
-   [\#6837](http://bugs.jquery.com/ticket/6837) Corrects an issue where
    IE fails to return the correct value of the default/first item in
    the select after a form reset, instead returning an empty string
-   [\#4464](http://bugs.jquery.com/ticket/4464) Fixes a bug where IE
    was unable to get the width attribute of detached IMG elements
-   [\#7485](http://bugs.jquery.com/ticket/7485) Fixes an inconsistency
    where a selector doesn't return all elements which have the
    attribute even if upon checking with the attr() method it returns a
    value.

