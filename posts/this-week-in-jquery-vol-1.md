This is the first in what we're hoping to be a weekly series of blog
posts about what is going on in the world of jQuery. We'll take a look
at new or updated plugins, recent tutorials, and other jQuery-related
news.

### Book

[![Learning jQuery
1.3](http://assets.learningjquery.com/images/ljq1-3.jpg)](http://www.amazon.com/Learning-jQuery-1-3/dp/1847196705/ref=sr_1_3?ie=UTF8&s=books&qid=1235795485&sr=1-3)

Jonathan Chaffer and I (Karl Swedberg) just had our book [Learning
jQuery 1.3](http://www.packtpub.com/learning-jquery-1.3/book) published
by Packt Publishing. It's an update of the popular Learning jQuery book,
which was released nearly two years ago. The new one features additions
to the library (event namespacing, JSONP, new effects methods, etc.)
introduced since the release of the first book, improved and extended
examples, expanded plugins chapters, and a quick reference to all
methods and selectors. It's available on the [Packt
website](http://www.packtpub.com/learning-jquery-1.3/book) and on
[amazon.com](http://www.amazon.com/Learning-jQuery-1-3/dp/1847196705/ref=sr_1_3?ie=UTF8&s=books&qid=1235795485&sr=1-3).

### Magazine

[JSMag](http://www.jsmag.com/), a promising new magazine for JavaScript
developers, just published their first issue. The magazine's goal is to
provide "quality JavaScript content to educate, motivate and inspire you
in your work with JavaScript." [PDF-only
issues](http://www.jsmag.com/main.issues/) are US\$4.99 each, with [bulk
licensing discounts](http://www.jsmag.com/main.page/JSMag_FAQ) starting
at 30% off the individual price. Contents of the first issue include:

-   Debugging JavaScript without alert()
-   Introduction to ExtJS
-   Community News
-   Unit testing with YUI
-   What's new in jQuery 1.3
-   Functional Programming in JavaScript

Check out a [sample](http://www.jsmag.com/jsmag_sample.pdf) (PDF) from
the first issue.

### Plugins

Among the ever-growing selection of jQuery plugins, a few perennial
favorites were updated this week. Ariel Flesler released version 1.2.7
of his [LocalScroll
plugin](http://flesler.blogspot.com/2009/03/jquerylocalscroll-127-released.html),
which animates anchor navigation within a web page. Mika Tuupola updated
his Jeditable plugin, for seamless in-place editing, with a number of
"callback hooks" and a few bug fixes. Josh Bush's new version of [Masked
Input](http://digitalbush.com/projects/masked-input-plugin/) includes
bug fixes and a few feature enhancements as well. After looking for a
simple, fast and flexible grid/spreadsheet component, Michael Liebman
decided to roll his own. This week he put out a [call for
contributors](http://groups.google.com/group/jquery-en/msg/cb20622cb518890e),
seeking "experienced developers who can pick this up and turn it into
something that everybody can use," perhaps by converting it into a
plugin. The code can be found at http://code.google.com/p/slickgrid/.

### Tutorials

Steve Reynolds has posted a tutorial on how to create [OS X Dashboard
Widgets with
jQuery](http://www.reynoldsftw.com/2009/03/os-x-dashboard-widgets-with-jquery/).
For those who want to know "[What in the heck is JSONP and why would you
use
it?](http://www.insideria.com/2009/03/what-in-the-heck-is-jsonp-and.html)"
Raymond Camden gives you the answers on the O'Reilly Inside RIA blog
(hint: cross-domain ajax).

### Quick Tip

We often see questions posted in the [jQuery Google
Group](http://groups.google.com/group/jquery-en) about why a jQuery
script is "broken" in Internet Explorer when it works in all other
tested browsers. By far the most common solution in these cases is to
search for and then remove a trailing comma from the last key-value pair
in an object literal:

    var foo = {
      bar: 'ice cream',
      baz: 'luhrmann', // <-- get rid of that comma!
    }

This can especially trip up developers who are used to other languages
such as PHP, in which including the trailing comma is considered a "best
practice." [JSLint](http://www.jslint.com/) is a great tool to run your
JavaScript through periodically, as it does a great job of flagging
these kinds of errors and warnings for you. If you use TextMate, the
[JavaScript Tools
bundle](https://github.com/subtleGradient/javascript-tools.tmbundle/tree)
runs a "quick JSLint" every time you save your JavaScript file and runs
the full JSLint, along with a number of other conveniences, from the
bundle's menu. Well, that's it for this week. Be sure to check out [This
Week in jQuery
UI](http://blog.jqueryui.com/2009/03/this-week-in-jquery-ui-vol-1), too!
