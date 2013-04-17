I'm pleased to announce the release of jQuery 1.1.3. After many months
of testing, developing, and more testing, we have a very solid release
available for download. It comes with roughly [80+ fixed
bugs](http://dev.jquery.com/report/15) and a handful of enhancements for
good measure. Highlights include:

1.  Improved speeds, with DOM traversal over 800% faster than in 1.1.2.
2.  A re-written event system, with more graceful handling of keyboard
    events.
3.  A re-written effects system (with an accompanying fx test suite),
    featuring faster execution and better cross-platform support.

**Update - July 4th:** We just finished a quick bug fix release,
versioned 1.1.3.1, which fixes [a couple of outstanding
issues](http://dev.jquery.com/report/16). **Download:**

-   [jQuery 1.1.3.1 (Compressed,
    20KB)](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.3.1.pack.js)
-   [jQuery 1.1.3.1
    (61KB)](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.3.1.js)
-   [jQuery 1.1.3.1 (Docs, Source
    Code)](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.3.1-release.zip)

As always, if you find any bugs with this release, please post them to
the [jQuery Bug Tracker](http://dev.jquery.com/).

1.1.3 Features
--------------

### Massive Selector Speed Improvements

Due to popular demand, we dug deep and made some major changes to
jQuery's selector engine. Here's a breakdown of the speed improvements
that were made to jQuery itself. All numbers are based on the
[SlickSpeed](http://dev.jquery.com/~john/slickjq/) test suite.

Browser

jQuery 1.1.2

jQuery 1.1.3

% Improvement

IE 6

4890ms

661ms

740%

Firefox 2

5629ms

567ms

993%

Safari 2

3575ms

475ms

753%

Opera 9.1

3196ms

326ms

980%

Average improvement:

867%

Additionally, we tested the improved code base against some of the other
popular selector libraries, again with the
[SlickSpeed](http://dev.jquery.com/~john/slick/) test suite.

Browser

Prototype

jQuery

Mootools

Ext

Dojo

IE 6

1476ms

661ms

1238ms

672ms

738ms

Firefox 2

219ms

567ms

220ms

951ms

440ms

Safari 2

1568ms

475ms

909ms

417ms

527ms

Opera 9.1

220ms

326ms

217ms

296ms

220ms

A couple things to notice when looking at the [speed
suite](http://dev.jquery.com/~john/slick/) results are that:

-   We're over 800% faster than we were in jQuery 1.1.2.
-   We're the fastest framework in the most popular browser, Internet
    Explorer 6.
-   We're the only framework that doesn't give incorrect results.
-   And all of this comes at no expense to you — jQuery is still the
    same 20KB that you've come to expect and enjoy.

### New Selectors

**Unicode Selectors:** This is a huge addition for those of you who want
to use Unicode attribute values, IDs, class names, or tag names. You can
now use them directly in jQuery selectors:

    $("div.å°åŒ—")
    $("div#å°åŒ—")
    $("foo_barå°åŒ—")
    $("div[@id=å°åŒ—]")

**Escape Selectors:** A frequently requested feature you can now select
elements by ID (or other selector) that uses a special character, for
example this will find the div that has the ID of "foo.bar":

    $("div#foo\\\\.bar")

**Inequality Selector:** While this selector isn't part of the CSS
specification, it's frequently used and included in other selector
libraries, so we decided to add it in:

    $("div[@id!=test]")

**:nth-child() improvements:** This selector allows you to locate
specific child elements. We've supported selectors like :nth-child(1)
and :nth-child(odd) since the beginning of jQuery, now we've added
advanced :nth-child selectors, such as:

    $("div:nth-child(2n)")
    $("div:nth-child(2n+1)")
    $("div:nth-child(n)")

**Space-separated attributes:** After being removed in jQuery 1.0, this
selector has now been brought back by popular demand. It allows you to
locate individual items in a space-separated attribute (such as a class
or rel attribute).

    $("a[@rel~=test]")

### Animation Improvements

**Speed:** Animations are now significantly faster and smoother.
Additionally, you can run more simultaneous animations without incurring
any speed hits. **Testing:** We now have a dedicated test suite for
animations — which has allowed us to fix a number of pressing animation
bugs that weren't previously locatable.

DOM Event Listeners
-------------------

Internally, the jQuery Event system has been overhauled to use the DOM
Event system, rather than the classical "onclick" style of binding event
handlers. This improvement allows you to be more unobtrusive in your use
of the library (not affecting the flow of other libraries around it).
Additionally, it helped to resolve some of the outstanding issues that
existed with binding event listeners to IFrames.

### Event Normalization

Some great steps have been taken to normalize keyboard and mouse events.
You can now access the `event.which` property to get most details about
the specific key or button that was pressed.

### Multiple .is()

The `.is()` method can now take multiple selectors, separated by a
comma. This allows you to test your jQuery set against multiple
selectors.

    $("div").is(":visible, :first")

### Browser Version

A commonly requested feature, by plugin authors, was a way to determine
what browser version their users were using. We now expose an extra
property through which this information can be accessed.

    jQuery.browser.version

### More Bug Fixes

Please see the [ticket listing](http://dev.jquery.com/report/15) for the
full list of all issues resolved in this release.

The Future of jQuery
--------------------

We've been very concerned with the direction and progress being made
towards furthering the jQuery project. We're focusing on a number of
different aspects now, but the primary concern is still the advancement
of the core jQuery library. We've spec'd out the next two releases,
which you can read more about below:

### jQuery 1.1.4

This will be the last release of the jQuery 1.1 branch - another bug fix
release with some minor improvements. This release will also mark a
number of methods as deprecated, in accordance with the upcoming jQuery
1.2 release. We're currently planning on having this release take place
at the end of July.

### [jQuery 1.2](http://docs.jquery.com/JQuery_1.2_Roadmap)

This will be the next major release of jQuery, containing a significant
number of new features. The full details of this release can be found in
the [jQuery 1.2 Roadmap](http://docs.jquery.com/JQuery_1.2_Roadmap).
Your comments and feedback on this release are greatly appreciated. It's
still in planning, so nothing is completely final. We're currently
planning on releasing jQuery 1.2 by the end of August.

jQuery Books
------------

We're now up to **4** jQuery books being written and, just as
importantly, they're all being written by members of the jQuery team (so
you'll know that you're getting good information). The books and their
authors are as follows:

-   **[Learning
    jQuery](http://www.packtpub.com/jQuery/book/mid/100407j4kh3d)** by
    Karl Swedberg and Jonathan Chaffer - due out early July 2007 (Packt
    Publishing).
-   **jQuery Reference Guide** by Karl Swedberg and Jonathan Chaffer -
    due out Summer 2007 (Packt Publishing).
-   **jQuery Quickly** by Yehuda Katz and Bear Bibeault (Manning
    Publishing).
-   **Designing with jQuery** by Glen Lipka (Manning Publishing).

This is really fantastic news. I've been able to read some of the
pre-release chapters and I think you're going to be in for a real treat
with these books.

jQuery Talks and Conference
---------------------------

I'd like to announce some talks being given about jQuery in the upcoming
months. Specifically, there will be a number of talks given about jQuery
at both of the [Ajax Experience](http://ajaxexperience.techtarget.com/)
conferences. At the San Francisco Ajax Experience, John Resig will be
giving an introductory overview to jQuery followed by an advanced jQuery
talk. Glen Lipka will be giving a talk on designing with jQuery. At the
Boston Ajax Experience, John and Glen will be presenting again, and will
be joined by Paul Bakaus to give a talk on developing intense
applications and games with jQuery. Since there's going to be quite a
few members of the jQuery team at the Boston Ajax Experience, we'd like
to announce that we're planning on doing a small, one day, **jQuery
Conference** the next day after the Ajax Experience. This will be the
perfect opportunity for you to meet the jQuery team and ask any nagging
questions that you have. We'll also be giving a number of talks about
specific aspects of jQuery. We'll have more details about this soon.

jQuery UI
---------

Today, we're also pleased to announce a secret project that we've been
working on: jQuery UI. This project, being written by Paul Bakaus, is a
whole new Drag & Drop library being developed from the ground up with
speed and extensibility taken into consideration. Additionally, great
care is being taken to have the code be fully documented and tested —
allowing many other developers to use and help extend it. This library
will contain full code for Draggables, Droppables, Sortables,
Resizables, and a Slider. You can take a look at some of Paul's early
work in the [SVN
repository](http://dev.jquery.com/browser/trunk/plugins/ui).

Funding and Thank You
---------------------

The new jQuery UI library marks a new step for the jQuery project: This
is a piece of code whose development we're sponsoring using money
donated by you, the jQuery users! This is being made possible in two
ways: first by your continued support and
[donations](http://docs.jquery.com/Donate) to the jQuery project, and
second by a generous server donation by [Media
Temple](http://www.mediatemple.net/). This is allowing us to focus our
financial resources on other projects that'll benefit everyone the most.
So I'd like to take this opportunity to request additional donations to
help us continue funding exciting new work that you'll be able to use in
your web sites. Any help will be greatly appreciated.

Amount in \$

Once again, I'd like to thank the jQuery team and everyone who has
helped to make this release possible. It's been a lot of work, but I
hope you'll be as pleased with this release as we are. Thank you — and
thanks for using jQuery!
