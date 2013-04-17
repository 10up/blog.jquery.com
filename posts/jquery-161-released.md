We’re pleased to announce the first update to jQuery 1.6!

You can get the code from the jQuery CDN:

-   [jQuery 1.6.1 Minified and
    Gzipped](http://code.jquery.com/jquery-1.6.1.min.js) (Use in
    production)
-   [jQuery 1.6.1 Uncompressed](http://code.jquery.com/jquery-1.6.1.js)
    (Use for testing)

Additionally you can also load the URLs directly from Microsoft and
Google's CDNs: Microsoft CDN:
[http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js](http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js)
Google CDN:
[https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js](https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.6.1.

We want to encourage everyone from the community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

Upgrading From 1.5.2 to 1.6.1
-----------------------------

With the introduction of the new `.prop()` method and the changes to the
`.attr()` method, jQuery 1.6 sparked a discussion about the difference
between attributes and properties and how they relate to each other. It
also came with some backwards compatibility issues that have been fixed
in 1.6.1. **When updating from 1.5.2 to 1.6.1, you should not have to
change any attribute code.** Below is a description of the changes to
the Attributes module in jQuery 1.6 and 1.6.1, as well as the
*preferred* usage of the `.attr()` method and the `.prop()` method.
However, as previously stated, jQuery 1.6.1 will allow you to use
`.attr()` just as it was used before in all situations. Note that the
changes described in the 1.6 release notes regarding the `.data()`
method have been worked around and now work seamlessly between 1.5.2 and
1.6.1.

### What’s Changed

The changes to the Attributes module removed the ambiguity between
attributes and properties, but caused some confusion in the jQuery
community, since all versions of jQuery prior to 1.6 have handled
attributes and properties in one method(`.attr()`). The old `.attr()`
method had many bugs and was hard to maintain. jQuery 1.6.1 comes with
several bug fixes as well as an update to the Attributes module.
Specifically, boolean attributes such as checked, selected, readonly,
and disabled in 1.6.1 will be treated just as they used to be treated in
jQuery versions prior to 1.6. This means that code such as

    $(“:checkbox”).attr(“checked”, true);
    $(“option”).attr(“selected”, true);
    $(“input”).attr(“readonly”, true);
    $(“input”).attr(“disabled”, true);

or even:

    if ( $(“:checkbox”).attr(“checked”) ) { /* Do something */ }

will not need to be changed in 1.6.1 in order to work as previously
expected. To make the changes to `.attr()` in jQuery 1.6 clear, here are
some examples of the use cases of `.attr()` that worked in previous
versions of jQuery that should be switched to use `.prop()` instead:

  `.attr()`                                Proper `.prop()` usage
  ---------------------------------------- ----------------------------------------
  \$(window).attr...                       \$(window).prop...
  \$(document).attr...                     \$(document).prop...
  \$(“:checkbox”).attr(“checked”, true);   \$(“:checkbox”).prop(“checked”, true);
  \$(“option”).attr(“selected”, true);     \$(“option”).prop(“selected”, true);

First, using the `.attr()` method on the window or document did not work
in jQuery 1.6 because the window and document cannot have attributes.
They contain properties (such as location or readyState) that should be
manipulated with `.prop()` or simply with raw javascript. In jQuery
1.6.1, the `.attr()` will defer to the `.prop()` method for both the
window and document instead of throwing an error. Next, checked,
selected, and other boolean attributes previously mentioned are
receiving special treatment because of the special relationship between
these attributes and their corresponding properties. Basically, an
attribute is what you see in the html:

    <input type=”checkbox” checked=”checked”>

Boolean attributes such as checked only set the default or *initial*
value. In the case of a checkbox, the checked attribute sets whether the
checkbox should be checked when the page loads. Properties are what the
browser uses to keep track of the **current** values. Normally,
properties reflect their corresponding attributes (if they exist). This
is not the case with boolean attributes. Boolean properties stay up to
date when the user clicks a checkbox or selects an option in a select
element. The corresponding boolean attributes do not. As was stated
above, they are used by the browser only to store the initial value.

    $(“:checkbox”).get(0).checked = true;
    // Is the same as $(":checkbox:first").prop(“checked”, true);

In jQuery 1.6, setting checked with

    $(“:checkbox”).attr(“checked”, true);

would not check the checkbox because it was the property that needed to
be set and all you were setting was the initial value. However, once
jQuery 1.6 was released, the jQuery team understood that it was not
particularly useful to set something that the browser was only concerned
with on page load. Therefore, in the interest of backwards compatibility
and the usefulness of the `.attr()` method, we will continue to be able
to get and set these boolean attributes with the `.attr()` method in
jQuery 1.6.1. The most common boolean attributes are **checked,
selected, disabled, and readOnly**, but here is a full list of boolean
attributes/properties that jQuery 1.6.1 supports dynamically getting and
setting with `.attr()`:****

    autofocus, autoplay, async, checked, controls, defer, disabled,
    hidden, loop, multiple, open, readonly, required, scoped, selected

It is still recommended that `.prop()` be used when setting these
boolean attributes/properties, but your code will continue working in
jQuery 1.6.1 even if these use cases are not switched to use the
`.prop()` method. Below is a list of some attributes and properties and
which method should normally be used when getting or setting them. This
is the *preferred* usage, but the `.attr()` method will work in all
attribute cases. Note that some DOM Element properties are also listed
below - but will only work with the new `.prop()` method.

  Attribute/Property   `.attr()`   `.prop()`
  -------------------- ----------- -----------
  accesskey            ✓           
  align                ✓           
  async                ✓           ✓
  autofocus            ✓           ✓
  checked              ✓           ✓
  class                ✓           
  contenteditable      ✓           
  defaultValue                     ✓
  draggable            ✓           
  href                 ✓           
  id                   ✓           
  label                ✓           
  location \*          ✓           ✓
  multiple             ✓           ✓
  nodeName                         ✓
  nodeType                         ✓
  readOnly             ✓           ✓
  rel                  ✓           
  selected             ✓           ✓
  selectedIndex                    ✓
  src                  ✓           
  style                ✓           
  tabindex             ✓           
  tagName                          ✓
  title                ✓           
  type                 ✓           
  width \*\*           ✓           

\* For example, with `window.location` \*\* If needed over `.width()`
Neither `.attr()` nor `.prop()` should be used for getting/setting
**value**. Use the `.val()` method instead (although using
.attr(“value”, “somevalue”) will continue to work, as it did before
1.6).

### Summary of Preferred Usage

The `.prop()` method should be used for boolean attributes/properties
and for properties which do not exist in html (such as window.location).
All other attributes (ones you can see in the html) can and should
continue to be manipulated with the `.attr()` method.

jQuery 1.6.1 Change Log
-----------------------

The current change log of the 1.6.1 release.

### Attributes

-   [\#9071](http://bugs.jquery.com/ticket/9071):
    \$('\<option\>\</option\>').val('myValue') no longer sets value
-   [\#9079](http://bugs.jquery.com/ticket/9079): .attr("selected")
    returns non-useful value in 1.6
-   [\#9089](http://bugs.jquery.com/ticket/9089): 1.6 atrr()
    Inconsistant in IE7,8
-   [\#9094](http://bugs.jquery.com/ticket/9094): Issue with jQuery 1.6:
    Can't uncheck checkboxes
-   [\#9103](http://bugs.jquery.com/ticket/9103): .attr('foo', true) not
    setting related DOM property
-   [\#9123](http://bugs.jquery.com/ticket/9123): Strange behavior of
    attr method when generate input element.
-   [\#9129](http://bugs.jquery.com/ticket/9129): jQuery does not
    support enumerated attributes such as contenteditable
-   [\#9191](http://bugs.jquery.com/ticket/9191): attr checked bug on
    radio

### Data

-   [\#9124](http://bugs.jquery.com/ticket/9124): Changes to \$.data
    illogical in certain case
-   [\#9126](http://bugs.jquery.com/ticket/9126): jquery breaks on use
    strict

### Deferred

-   [\#9104](http://bugs.jquery.com/ticket/9104): Returning null or
    undefined in a pipe filter function causes an exception

### Effects

-   [\#9074](http://bugs.jquery.com/ticket/9074): Cannot animate
    position and opacity at same time
-   [\#9100](http://bugs.jquery.com/ticket/9100): Order of hide()
    callbacks has changed

### Event

-   [\#9069](http://bugs.jquery.com/ticket/9069): when hover over a
    child of an element, mouseleave fires when using live or delegate

### Manipulation

-   [\#9072](http://bugs.jquery.com/ticket/9072): jQuery 1.6 Crashes IE
    6
-   [\#9221](http://bugs.jquery.com/ticket/9221): Javascript within AJAX
    fails to load in IE - Error 80020101

### Queue

-   [\#9147](http://bugs.jquery.com/ticket/9147): Variable tmp in
    promise implicitly declared?

### Selector

-   [\#7341](http://bugs.jquery.com/ticket/7341): Slow .add() in IE
-   [\#9096](http://bugs.jquery.com/ticket/9096): Selector or find bug
    in jQuery 1.6
-   [\#9154](http://bugs.jquery.com/ticket/9154): :reset pseudo-selector
    broken

### Support

-   [\#8763](http://bugs.jquery.com/ticket/8763): Unhandled exception:
    document.defaultView.getComputedStyle(div, null) is null (FF, hidden
    iframe)
-   [\#9109](http://bugs.jquery.com/ticket/9109): support.boxModel now
    false in IE6 even when not in quirks mode

