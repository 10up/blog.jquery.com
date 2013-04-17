jQuery 1.6.3 is almost ready to roll! We need your help with this
release candidate to be sure we've got everything right.

Feel free to do your testing by including either one of these files (one
minified and one uncompressed). Our preferred venue for test cases is
[jsFiddle](http://jsfiddle.net); you can just use the "jQuery (edge)"
selection there. If you need to report a bug and cannot use jsFiddle,
please use the uncompressed version with your test case.

-   [jQuery 1.6.3 RC1
    Minified](http://code.jquery.com/jquery-1.6.3rc1.min.js)
-   [jQuery 1.6.3 RC1
    Uncompressed](http://code.jquery.com/jquery-1.6.3rc1.js)

Please test this release with your most treasured code. If you find any
important differences from 1.6.2, please [file a
bug](http://bugs.jquery.com/) as soon as possible and be sure to mention
that you're testing against jQuery 1.6.3 RC1.

If you're making a quantum leap from a much older version of jQuery,
it's possible that the differences you find are due to documented
behavior changes introduced in a major-point release. Check your code
with the released 1.6.2 version first to be sure the problem only exists
in 1.6.3 RC1.

Highlights
----------

**Fix an [XSS](http://en.wikipedia.org/wiki/Cross-site_scripting) attack
vector:** User ma.la [reported](http://bugs.jquery.com/ticket/9521) a
common pattern that many sites are using to select elements using
`location.hash` that allows someone to inject script into the page. This
practice seemed widespread enough that we decided to modify the selector
recognition to prevent script injection for the most common case. Any
string passed to `$()` cannot contain HTML tags (and thus no script) if
it has a "\#" character preceding them. See the ticket linked above for
more information and a test case.

**No more animation ["worm
holes"](http://hacks.mozilla.org/2011/08/animating-with-javascript-from-setinterval-to-requestanimationframe/):**
We had high hopes for the browser's `requestAnimationFrame` API when we
added support into version 1.6. However, one of the highest-volume
complaints we've received since then relates to the way
`requestAnimationFrame` acts when a tab is not visible. All the
animations initiated when the tab is invisible "stack" and are not
executed until the tab is brought back into focus. Then they all animate
at warp speed! We've removed support for this API (which has no impact
on the way you call jQuery's animation features) and plan to incorporate
it into a future version of jQuery.

**Better handling of HTML5 data attribute names:** The `$().data()` API
serves double-duty, handling data for the internal use of jQuery and
plugins in addition to reading initial values of HTML5 `data-`
attributes. We've improved the ability to use HTML5 conventions such as
converting `camel-case` to `camelCase` when needed. Remember, however,
that the `$().data()` API only *reads* the HTML5 `data-` attributes
initially, and does not keep subsequent data changes in sync with
attributes for performance reasons. To update the actual attributes in
the HTML markup, use `.attr()`.

jQuery 1.6.3 Change Log
-----------------------

The current change log of the 1.6.3 release:

### Ajax

-   [\#9255](http://bugs.jquery.com/ticket/9255): jQuery.parseXML error
    handling does not work in webkit browsers
-   [\#9854](http://bugs.jquery.com/ticket/9854): Pass statusText
    through instead of "normalizing" it
-   [\#9887](http://bugs.jquery.com/ticket/9887): jQuery.ajaxSetup may
    cause unnecessary memory usage
-   [\#9970](http://bugs.jquery.com/ticket/9970): Typo in ajax.js:
    status should be jqXHR.status?
-   [\#10098](http://bugs.jquery.com/ticket/10098): Encode comment-like
    Accept headers to avoid mobile carrier mangling

### Attributes

-   [\#9630](http://bugs.jquery.com/ticket/9630):
    foo.contents().hasClass() returns incorrect value
-   [\#9699](http://bugs.jquery.com/ticket/9699): removeAttr('style')
    does not consistently remove the style attribute in webkit
-   [\#9719](http://bugs.jquery.com/ticket/9719): removeAttr('disabled')
    doesn't change input's color on IE6
-   [\#9979](http://bugs.jquery.com/ticket/9979): .prop('tabIndex')
    returns inconsistent results for elements that have not yet set
    tabIndex
-   [\#9980](http://bugs.jquery.com/ticket/9980): Simplify the attr code
    by using getAttributeNode for everything in IE6/7

### Build

-   [\#9988](http://bugs.jquery.com/ticket/9988): Minimal License Header
    in compressed jQuery

### Core

-   [\#9521](http://bugs.jquery.com/ticket/9521): XSS with
    \$(location.hash) and \$(\#) is needed?
-   [\#9897](http://bugs.jquery.com/ticket/9897): try-catch
    isPlainObject detection
-   [\#10076](http://bugs.jquery.com/ticket/10076): \$.inArray crashes
    IE6 and Chrome if second argument is \`null\` or \`undefined\`

### CSS

-   [\#6652](http://bugs.jquery.com/ticket/6652): Remove
    filter:alpha(opacity=100) after animation
-   [\#9572](http://bugs.jquery.com/ticket/9572): Support -ms-transform
    in .css() method
-   [\#10021](http://bugs.jquery.com/ticket/10021): Can't add negative
    numbers using the relative-value syntax with .css() and .animate()

### Data

-   [\#8235](http://bugs.jquery.com/ticket/8235): jQuery.data throws a
    script error in certain circumstances
-   [\#9318](http://bugs.jquery.com/ticket/9318): HTML5 data attributes
    has strange behaviour with if attribute names contain numbers
-   [\#9413](http://bugs.jquery.com/ticket/9413): \$.fn.removeData does
    not remove data with a dash in a name
-   [\#9779](http://bugs.jquery.com/ticket/9779): Allow
    non-null|undefined evaluation of data property values
-   [\#9794](http://bugs.jquery.com/ticket/9794): jQuery.fn.data()
    correctly handle access to arbitrary data property values
-   [\#10016](http://bugs.jquery.com/ticket/10016): Cannot retrieve
    "false-y" values under key names with dashes using jQuery.data
    method
-   [\#10080](http://bugs.jquery.com/ticket/10080): unload from frame's
    window breaks in IE8

### Dimensions

-   [\#10123](http://bugs.jquery.com/ticket/10123): .width() can return
    a float in Firefox 6

### Effects

-   [\#9381](http://bugs.jquery.com/ticket/9381): Animations halt when
    the browser is out of focus due to requestAnimationFrame
-   [\#9678](http://bugs.jquery.com/ticket/9678): setInterval cleared by
    animation

### Event

-   [\#7071](http://bugs.jquery.com/ticket/7071): Accessing the 'type'
    property on VML elements fails on IE during submit special handler

### Manipulation

-   [\#9587](http://bugs.jquery.com/ticket/9587): Cloning a div with an
    object causes error in IE8

### Support

-   [\#9634](http://bugs.jquery.com/ticket/9634): Visible "t" character
    in upper left corner during support.js init
-   [\#9823](http://bugs.jquery.com/ticket/9823): IE 8 crashes when
    using background-image on BODY in css
-   [\#9964](http://bugs.jquery.com/ticket/9440): test/support.js module
    strictEqual typo
-   [\#10029](http://bugs.jquery.com/ticket/10029):
    \$.support.scriptEval removed, but still included in documentation

Please do file a bug report with a test case as soon as possible if you
find problems, as described above. Blog comments or Twitter aren't
helpful bug reports!
