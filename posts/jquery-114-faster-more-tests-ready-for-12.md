We're pleased to announce the latest release of jQuery: **jQuery
1.1.4**. Barring any horrible mistakes, this release will be the last of
the 1.1.x branch - leading us up to the release of [jQuery
1.2](http://docs.jquery.com/JQuery_1.2_Roadmap) in September.

You can download the release from the [jQuery Google
Code](http://code.google.com/p/jqueryjs/) page:

**Download:**

-   [jQuery 1.1.4 (Compressed,
    21KB)](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.4.pack.js)
-   [jQuery 1.1.4
    (65KB)](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.4.js)
-   [jQuery 1.1.4 (Docs, Source
    Code)](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.4-release.zip)

Improvements
------------

A number of improvements have gone into this release, in addition to all
of the normal [bug fixes](http://dev.jquery.com/report/16).

### Any Name jQuery

jQuery has taken a big step to become the first major JavaScript library
completely capable of renaming itself. Previously, functionality was
provided to rename the oft-used '\$' shortcut for 'jQuery' - but now you
can also rename both '\$' and 'jQuery'. This allows for two fantastic
results:

-   You can now include multiple versions of jQuery, simultaneously, on
    the same page.
-   You can now embed jQuery into the namespaces of other objects and
    libraries, for example:

        // With the Dojo Toolkit
        dojo.jquery = jQuery.noConflict(true);
        dojo.jquery("#elem div").slideDown("slow");
        // or with Yahoo UI
        YAHOO.query = jQuery.noConflict(true);
        YAHOO.query("span.hidden").removeClass("hidden");

### Speed Improvements

What would a release be without some speed improvements? We took the
opportunity to step beyond any previously-released speed test suites and
improve the speed of the three most commonly used portions of jQuery: ID
selectors, tag name selectors, and each() loops. It's absolutely
critical that each of these items are made as fast as possible, as they
have the possibility of being re-used endlessly, and repeatedly.

Here's the [test suite](http://dev.jquery.com/~john/speed/114.html) used
to analyze the speed of the three changes.

**\$("\#id") Improvements**

Browser

jQuery 1.1.3

jQuery 1.1.4

% Improvement

IE 6

651ms

70ms

830%

Firefox 2

1355ms

27ms

4919%

Safari 3

101ms

14ms

620%

Opera 9

270ms

62ms

335%

Average improvement:

1676%

**\$("elem") Improvements**

Browser

jQuery 1.1.3

jQuery 1.1.4

% Improvement

IE 6

661ms

451ms

47%

Firefox 2

1717ms

143ms

1100%

Safari 3

99ms

83ms

19%

Opera 9

226ms

198ms

14%

Average improvement:

295%

**.each() Improvements**

Browser

jQuery 1.1.3

jQuery 1.1.4

% Improvement

IE 6

200ms

30ms

567%

Firefox 2

468ms

29ms

1514%

Safari 3

17ms

11ms

54%

Opera 9

45ms

25ms

80%

Average improvement:

554%

### Test Suite Overhaul

This is very big news - and should be especially so to most developers
out there. The [jQuery test suite](http://jquery.com/test/) has been
completely re-tooled and improved from the ground up for stability. A
brand new swath of Animation and Ajax tests have been integrated
bringing jQuery's total test count to **over 800 tests**!

Additionally, the [test suite](http://jquery.com/test/) completely
passes with no errors in all the major browsers that we support: Firefox
2, Safari 3, Internet Explorer 6, and Opera 9 (Safari 2 and IE 7 not
shown for brevity). Proof:

[![](http://farm2.static.flickr.com/1354/1218693414_6c029913f5_m.jpg)](http://flickr.com/photos/jeresig/1218693414/)

In the future, we're working to improve our coverage of the Event,
Attribute, and CSS portions of jQuery - undoubtedly bringing us to over
1000 tests very soon.

Additionally, it should be noted that the jQuery test suite is now
embedded in the Mozilla test suite - running against every commit of the
upcoming Firefox 3 release. You can feel safe knowing that in the newest
release of Firefox, everything will just keep working, as you would
expect it to.

### Bug Fixes

[53 tickets](http://dev.jquery.com/report/16) have been closed for this
release. You can read the full details on the [the bug
tracker](http://dev.jquery.com/report/16) (this includes fixes that went
in to jQuery 1.1.3.1).

A bunch of large issues were resolved, including issues related to HTML
script evaluation, Safari CSS Computed Style access, and Ajax settings
manipulation.

New Functionality
-----------------

A couple pieces of new functionality have been introduced. The first two
of which, .slice() and :has(), are going to be a part of [jQuery
1.2](http://docs.jquery.com/JQuery_1.2_Roadmap), but their existence is
obligated by some deprecated functionality (see below). The new changes
to extend() and noConflict() were put in order to be able to fix some
long standing bugs in jQuery.

### `.slice()`

You may recognize this method name from the .slice() method that exists
on JavaScript arrays - you're in luck because it behaves identically.
This is a great method for chopping apart jQuery objects and getting to
the elements inside of them. All of the following are valid ways to use
the slice() method:

    $("div").slice(0,1); // First div
    $("div").slice(-1); // Last div
    $("div").slice(1,-1); // All divs but the first and last
    $("div").slice(1,3); // The second and third div
    $("div").slice(7,8); // The eighth div

### `:has()`

This new selector is a replacement for the current way of checking for
elements inside of another element (`div[p]`). You can now use this
selector just as you would that particular XPath selector, like so:

    // All divs with a paragraph inside
    $("div:has(p)")
    // All anchors with an image inside
    $("a:has(img)") 
    // All divs that have an anchor inside that have an image inside
    $("div:has(a:has(img))")

### Deep, recursive `.extend()`

This has been a frequently-requested addition to the jQuery .extend()
method. This change allows you to deeply merge nested objects (as
opposed to having them overwrite each other). This is best demonstrated
through an example:

    // Normal .extend()
    jQuery.extend(
      { name: "John", location: { city: "Boston" } },
      { last: "Resig", location: { state: "MA" } }
    );
    // Result:
    // => { name: "John", last: "Resig", location: { state: "MA" } }

    // New Deep .extend()
    jQuery.extend( true,
      { name: "John", location: { city: "Boston" } },
      { last: "Resig", location: { state: "MA" } }
    );
    // Result:
    // => { name: "John", last: "Resig",
    //      location: { city: "Boston", state: "MA" } }

### `.noConflict(true)`

As described previously, this addition to .noConflict() allows you to
completely rename both the 'jQuery' namespace and the '\$' shortcut,
while also rolling back any changes those introductions may have done.
You can use this new shortcut like so:

    // Give jQuery a custom name:
    var jq = jQuery.noConflict(true);
    jq("#id div").hide();

    // Both Fail - $ and jQuery have been renamed:
    $("#id div").hide();
    jQuery("#id div").hide();

This trick can also be used to push jQuery into an existing namespace,
like so:

    // Put jQuery in a namespace:
    var obj = {};
    obj.jq = jQuery.noConflict(true);
    obj.jq("#id div").hide();

Deprecated Functionality
------------------------

We are deprecating a number of methods in jQuery 1.1.4 in preparation
for the API changes in the upcoming [jQuery
1.2](http://docs.jquery.com/JQuery_1.2_Roadmap). Wherever possible,
we've provided alternate methods for performing actions.

With jQuery 1.2, as with the jQuery 1.1 release, a backwards
compatibility plugin will be provided. Thus, if you wish to continue
using these particular techniques, you'll be able to use that plugin and
continue doing so.

Additionally, in order to handle the XPath changes another, separate,
plugin will be released that will handle XPath selector functionality in
jQuery. This plugin will be made available along with the jQuery 1.2
release.

### Selectors

`$("div//p")` **XPath Descendant Selector**\
Please use the CSS `$("div p")` selector instead. Or, when jQuery 1.2 is
released, use the new XPath Plugin.

`$("div/p")` **XPath Child Selector**\
Please use the CSS `$("div > p")` selector instead. Or, when jQuery 1.2
is released, use the new XPath Plugin.

`$("p/../div")` **XPath Parent Selector**\
Please use the `$("p").parent("div")` selector instead. Or, when jQuery
1.2 is released, use the new XPath Plugin.

`$("div[p]")` **XPath Contains Predicate Selector**\
Please use the new `$("div:has(p)")` selector instead. Or, when jQuery
1.2 is released, use the new XPath Plugin.

`$("a[@href]")` **XPath Attribute Selector**\
**Note:** While this selector is being deprecated in this release, it
will not be removed in jQuery 1.2. Come jQuery 1.2, it'll be recommended
that you use the CSS selector `$("a[href]")` instead. Or, when jQuery
1.2 is released, use the new XPath Plugin.

### DOM Manipulation

`$("div").clone(false)`\
Calling the clone method with an argument is being deprecated (the clone
method, as a whole, is being kept). Instead of calling `.clone(false)`
you should now do: `.clone().empty()` instead.

### DOM Traversal

`$("div").eq(0)`\
This method is being deprecated for the use of the new .slice() method
(which works identically to an array's slice method. You can duplicate
.eq() like so:

    $("div").slice(0,1);

Additionally, .eq(0) can be duplicated in the following ways:

    $("div:eq(0)")
    $("div:first")

`$("div").lt(2)`\
This method is being deprecated for the use of the new .slice() method
(which works identically to an array's slice method. You can duplicate
.lt() like so:

    $("div").slice(0,2);

Additionally, .lt(2) can be duplicated in the following way:

    $("div:lt(2)")

`$("div").gt(2)`\
This method is being deprecated for the use of the new .slice() method
(which works identically to an array's slice method. You can duplicate
.gt() like so:

    $("div").slice(3);

Additionally, .gt(2) can be duplicated in the following way:

    $("div:gt(2)")

### Ajax

`$("#elem").loadIfModified("some.php")`\
This convenience method is being removed in favor of the long form use
of \$.ajax():

    $.ajax({
      url: "some.php",
      ifModified: true,
      success: function(html){
        $("#elem").html(html);
      }
    });

`$.getIfModified("some.php")`\
This convenience method is being removed in favor of the long form use
of \$.ajax():

    $.ajax({
      url: "some.php",
      ifModified: true
    });

`$.ajaxTimeout(3000)`\
This convenience method is being removed in favor of the long form use
of the more-explicit \$.ajaxSetup():

    $.ajaxSetup({timeout: 3000});

`$(...).evalScripts()`\
This method is no longer necessary in jQuery - all scripts included in
HTML strings are automatically evaluated when injected into the
document. No substitute method is needed.

* * * * *

As always, please let us know if you encounter any bugs in between
jQuery 1.1.3.1 and jQuery 1.1.4. Thanks!
