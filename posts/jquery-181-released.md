It's been a frantic but productive few weeks, and the jQuery core team
is pleased to announce that jQuery 1.8.1 is released! This version fixes
the issues reported by the community following the final release of
1.8.0. Here are the files, ready for you to use:

-   [http://code.jquery.com/jquery-1.8.1.min.js](http://code.jquery.com/jquery-1.8.1.min.js)
    (production, compressed)
-   [http://code.jquery.com/jquery-1.8.1.js](http://code.jquery.com/jquery-1.8.1.js)
    (development, uncompressed)

The Google and Microsoft CDNs will also have copies available soon. The
final set of bugs that were fixed are listed below. Don't forget, folks,
we love to hear about bugs in the betas and release candidates too! You
don't have to wait for a final release to test with your code. The
earlier we can fix these bugs, the smoother things go for both the team
and the jQuery community. **Use jQuery UI 1.8.23 and jQuery Mobile 1.1.1
or later** for best compatibility with jQuery core 1.8.1. **Don't use
[Quirks mode](http://en.wikipedia.org/wiki/Quirks_mode)!** jQuery has
never supported Quirks mode and we do not perform any testing in Quirks.
This can affect values like `$("window").height()`, and the jQuery 1.8
Quirks mode results did change in order to support some modern browser
features. The majority of problem cases we've seen are from developers
that *wanted* to be in Standards mode but had an invalid doctype or
extraneous markup before their `<html>` tag. When in doubt, use the
simple and short `<!doctype html>`. **Sizzle's custom pseudo-selectors
that take arguments have changed,** but jQuery 1.8.1 provides a
compatibility shim for older code. Neither Sizzle nor jQuery documented
how these worked before; there is now [official
documentation](https://github.com/jquery/sizzle/wiki/Sizzle-Documentation)
for Sizzle. Look there for an example of best practice on writing custom
pseudo-selectors that work with all versions of jQuery. Many thanks to
the team and community members who contributed patches for this release:
Timmy Willison, Mike Sherov, Elijah Manor, Mike Pennisi, Richard Gibson,
Corey Frang, Mathias Bynens, Oleg Gaidarenko, Nikita Govorov, Julian
Aubourg, and Rick Waldron. We're also very appreciative to those of you
who took the time to create [good bug
reports](http://docs.jquery.com/How_to_Report_Bugs) for jQuery 1.8.1. In
the highly unlikely event we somehow managed to leave any bugs in this
release, please do let us know. First check the [bug
tracker](http://bugs.jquery.com) to see if it has already been reported.
If not, create a test case using [jsFiddle.net](http://jsfiddle.net) or
[jsbin.com](http://jsbin.com) with the least possible code that it takes
to demonstrate the problem.

jQuery 1.8.1 Change Log
-----------------------

### Ajax

-   [\#12233](http://bugs.jquery.com/ticket/12233): jQuery.post() raises
    "RangeError: Maximum call stack size exceeded"
-   [\#12234](http://bugs.jquery.com/ticket/12234): the .load()
    method,when params is null, the ajax type will be "POST", but not be
    "GET"

### Core

-   [\#12282](http://bugs.jquery.com/ticket/12282): 1.8.0 regression -
    document ready is fired too early on IE 9/10
-   [\#12329](http://bugs.jquery.com/ticket/12329): event.js still has a
    reference to bindReady
-   [\#12350](http://bugs.jquery.com/ticket/12350): jQuery.trim should
    remove byte-order-mark (BOM) characters
-   [\#12370](http://bugs.jquery.com/ticket/12370): jquery android
    2.1-update1 problem

### Css

-   [\#12235](http://bugs.jquery.com/ticket/12235): getComputedStyle is
    used without namespace
-   [\#12313](http://bugs.jquery.com/ticket/12313): .height() and
    .width() no longer fall back to CSS if offsetWidth is undefined.
-   [\#12324](http://bugs.jquery.com/ticket/12324): cssNormalTransform
    can produce wrong values

### Data

-   [\#10863](http://bugs.jquery.com/ticket/10863): .data method does
    not return an object if the JSON string contains newlines.

### Dimensions

-   [\#12283](http://bugs.jquery.com/ticket/12283): jQuery 1.8
    outerHeight is returning undefined instead of null

### Effects

-   [\#12273](http://bugs.jquery.com/ticket/12273): animate fails with 0
    duration

### Event

-   [\#12149](http://bugs.jquery.com/ticket/12149): 'change' event
    handler leaks in IE7/8
-   [\#12383](http://bugs.jquery.com/ticket/12383): jQuery.on() selector
    should only apply to descendants of the element

### Manipulation

-   [\#12346](http://bugs.jquery.com/ticket/12346): fn.append not
    working correctly
-   [\#12384](http://bugs.jquery.com/ticket/12384): .after fails with
    table rows in IE9

### Queue

-   [\#12278](http://bugs.jquery.com/ticket/12278): .promise(type) not
    working for non-default queue

### Selector

-   [\#12205](http://bugs.jquery.com/ticket/12205): Miscellaneous pseudo
    selector issues
-   [\#12237](http://bugs.jquery.com/ticket/12237): Having child
    selector and multiple :not with :visible does not work any more
-   [\#12241](http://bugs.jquery.com/ticket/12241): Passing a negative
    index for :eq throws a syntax error.
-   [\#12285](http://bugs.jquery.com/ticket/12285): Selector with
    :not(:first) isn't working since 1.8
-   [\#12292](http://bugs.jquery.com/ticket/12292): Invalid selectors
    can cause a subsequent valid selector not to work
-   [\#12303](http://bugs.jquery.com/ticket/12303): Attribute selector
    fails if the attribute value contains :first :last
-   [\#12311](http://bugs.jquery.com/ticket/12311): jQuery 1.8 and
    .is(":visible")
-   [\#12314](http://bugs.jquery.com/ticket/12314): \$.contains fatal
    error in IE9 when 2nd parameter is null
-   [\#12359](http://bugs.jquery.com/ticket/12359): 1.8.0 creating
    invalid tag/attribute when loading the library
-   [\#12369](http://bugs.jquery.com/ticket/12369): ajax, use find
    method for read xml
-   [\#12403](http://bugs.jquery.com/ticket/12403): Selector "\> li \>
    :first-child,\> :not(li):even" fails in old IE
-   [\#12409](http://bugs.jquery.com/ticket/12409): Back-compat issue
    with custom pseudo selectors
-   [\#12412](http://bugs.jquery.com/ticket/12412): Sizzle regression
    ":not([data-role='list-divider']):not(:hidden)"
-   [\#12419](http://bugs.jquery.com/ticket/12419): Composite selector
    fails if id attribute contains dot.

### Support

-   [\#12333](http://bugs.jquery.com/ticket/12333): \$.browser.webkit
    (undefined) -\> \$.browser.chrome

