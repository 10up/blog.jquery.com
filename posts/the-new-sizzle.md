In order to make your 4th of July more sizzlin' (you're welcome), the
jQuery team is happy to announce that Sizzle, jQuery’s CSS selector
engine, is better, faster, and more reliable than ever! Sizzle has
received a substantial rewrite to be included with the release of jQuery
1.8. First, credit should be given to Diego Perini for pointing me in
the right direction as well as Samuel Lebeau for creating a project 3
years ago called [Bouncer](https://github.com/samleb/bouncer "Bouncer"),
a “fast bottom-up element matcher for Javascript”. jQuery, along with
Sizzle, was released in 2006, about 3 years after Simon Willison came
out with
[getElementsBySelector](http://simonwillison.net/2003/Mar/25/getElementsBySelector/ "getElementsBySelector"),
which pretty much set the stage for every selector engine we have today.
As time went on, Sizzle was rewritten a few times for the sake of
performance and more and more bugs were covered as the number of people
using it increased. During this time, other quite impressive selector
engines were introduced, including but not limited to NWMatcher (by
Diego), dojo.query, Slick, base2, qwery, and YUI. Though they all have
their own strengths, NWMatcher and Dojo particularly stood out as
exemplary engines. While neither is the fastest at every selection, they
are both consistently fast for almost every selector. My goal was to
achieve this same level of performance for Sizzle, retain all of the
edge-case bug fixes that John and the bugs team have collected over the
years, and cover even more bugs that were in the queue or were covered
by other engines. I can now safely say this goal has been reached. While
I won’t say Sizzle is completely bug free or it is always the fastest in
every situation, the reliability and [performance
gains](http://jsperf.com/sizzle-1-7-2-vs-1-8/ "performance gains") are
very competitive.
[http://jsfiddle.net/timmywil/s7rN4/](http://jsfiddle.net/timmywil/s7rN4/)
is a primitive test used to quickly observe the differences between some
selector engines for several selectors (should be run in a browser with
a console open).

What changed
------------

#### Below is a reduced list of the main code differences between Sizzle in jQuery 1.7.2 and jQuery 1.8.

### One compiled selector function

The selector parser compiles a selector into one function containing
functions for each part of the selector. This means that for any given
selector (excluding positional (POS) selectors such as `:first` or
`:eq(3)`), the possible set of elements need only be checked *once*.
This is predominantly where the major [speed
boost](http://jsperf.com/sizzle-1-7-2-vs-1-8/4 "speed boost") and
heightened stability comes from. Additionally, Sizzle maintains a cache
of the most recently compiled functions. The cache has a maximum size
(which can be adjusted but has a default) so you don’t get out-of-memory
errors when using a lot of different selectors. **Note**: this does not
have an effect on simple selectors (ID-only, TAG-only, CLASS-only)
because Sizzle has had shortcuts for these that defer to
`getElementByID`, `getElementsByTagName`, and `getElementsByClassName`
whenever possible. That wasn’t changed (except for the addition of a
shortcut for element-rooted ID selectors), and those are still the
fastest selectors. Any other selector will go through `querySelectorAll`
if available or run through the compiler.

### `querySelectorAll` and `matchesSelector`

With this latest rewrite, the code paths to
[querySelectorAll](http://jsperf.com/sizzle-1-7-2-vs-1-8/3/ "querySelectorAll")
and
[matchesSelector](http://jsperf.com/jquery-id-init/6/ "matchesSelector")
are even better than before and yield excellent performance. Some people
ask why we need Sizzle at all, since modern browsers have
`querySelectorAll` and `matchesSelector` and accept a wide range of CSS3
selectors. The problem is that *every* browser (not just IE) has a few
bugs in these methods. Selector engines must know beforehand what these
bugs are and bypass these methods before they return incorrect results
(though not all of them do). Sizzle now has this covered. In addition,
`querySelectorAll` and `matchesSelector` do not know how to process
[jQuery selector
extensions](http://api.jquery.com/category/selectors/jquery-selector-extensions/)
such as `[attr!=value]`. Any time you use a selector extension, Sizzle
needs to handle the selection natively.

### Improved selector validation

Validating selectors is a tricky business. To be too strict can be
annoying, but to be too flexible can produce unexpected results. In the
past, Sizzle has been both of these at different times for several use
cases. The most recent changes are geared towards adhering to the [W3C
selectors
specification](http://www.w3.org/TR/selectors/ "W3C selectors specification")
as much as possible, but also allowing some things that the spec does
not (such as having complex selectors within a `:not()` pseudo).
Specifically, we are matching all whitespace characters where necessary,
including line feed, tab, carriage return, and form
feed([http://www.w3.org/TR/selectors/\#whitespace](http://www.w3.org/TR/selectors/#whitespace)),
validating identifiers and operators in attributes selectors
([http://www.w3.org/TR/selectors/\#attribute-selectors](http://www.w3.org/TR/selectors/#attribute-selectors)),
and providing a character encoding that matches the spec
([http://www.w3.org/TR/css3-syntax/\#characters](http://www.w3.org/TR/css3-syntax/#characters)).

### Combinators (space, \~, \>, +)

Combinators can get very complicated, but the new strategy handles these
with great poise. In the release of jQuery 1.8 beta (and at the jQuery
conference this year), I claimed that Sizzle had improved support for
combinators. While the accuracy was improved, I spoke too soon and,
fortunately, this was pointed out by someone I only know as Yaffle on
github. Apparently, for very large and deep documents, the original
revisions were checking so many elements that it was causing a stack
overflow for selectors that had several combinators. For each
combinator, the number of elements checked went up exponentially in
order to maintain possible matches. This was bad. Sizzle now takes care
of that issue and gets very satisfying results.

### Extensibility

Although most of the old API for Sizzle was not changed in this rewrite
(except for the removal of the now unnecessary Sizzle.filter from the
private API), there are a couple changes that make Sizzle even more
extensible. The most common way to extend Sizzle is to add custom pseudo
selectors. Now with the parser compiling a function of functions, you
can receive more information when creating your custom selector. For
example, within Sizzle, the implementation for the `:not` pseudo
selector is very similar to

    // Using the createPseudo function tells the compiler
    //   to pass the pseudo argument, context, and whether the current context is xml
    //   to the function passed to createPseudo and trusts
    //   that a function to be used for filtering will be returned.
    // Note: the use of createPseudo is only necessary for creating custom
    //   pseudo selectors with arguments.
    Sizzle.selectors.pseudos.not =
        Sizzle.selectors.createPseudo(function( selector, context, isXml ) {
            var matcher = Sizzle.compile( selector, context, isXml );
        return function( elem ) {
            return !matcher( elem );
        };
        });

This is the only breaking change in the public API given the new parser,
but I think creating custom pseudos with arguments is now much cleaner.
For more information, please refer to the [Sizzle
docs](https://github.com/jquery/sizzle/wiki/Sizzle-Documentation).
Perhaps some of you are thinking that it could be nice to pre-compile
your own selectors. Well, you can. `Sizzle.compile` is exposed so you
can cache your selectors before they get used. While compiling is still
very fast without caching, you can make sure that step is skipped before
the selection is ever run. Call compile with your selector and context

    Sizzle.compile(“my>long>complicated:selector(poof)”, document);

and it’s added to the cache. You can even increase/decrease the size of
the cache by setting Sizzle.selectors.cacheLength. **Note**: The
majority of users do not need to use the compiler as Sizzle will
maintain a cache of recently compiled selectors. Overriding
Sizzle.compile will have no effect on Sizzle as it maintains an internal
reference to this method.

### Get the code!

The code is now available in the git versions of
[jQuery](http://code.jquery.com/jquery-git.js) and
[Sizzle](https://raw.github.com/jquery/sizzle/d8f497c8f3083951813f823796109741aae9d77e/sizzle.js).
Expect jQuery 1.8 to be released sometime this month. Issues
specifically for Sizzle can be filed on
[GitHub](https://github.com/jquery/sizzle/issues) and, as always, any
issues related to jQuery as a whole can be filed on our [bug
tracker](http://bugs.jquery.com/). Try it out for yourself and let us
know if you run into any problems. Enjoy and Happy Independence Day!
