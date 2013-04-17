**Note:** Jack went ahead and [fixed virtually everything mentioned in
this
post](http://www.jackslocum.com/blog/2007/01/12/domquery-in-response-to-jquerys-response/)
- great job!

* * * * *

We've been holding off on talking about the speed of the jQuery
selectors for the new 1.1 release until our release was closer to being
ready - however, it seems as if that process has already been
[expedited](http://www.jackslocum.com/blog/2007/01/11/domquery-css-selector-basic-xpath-implementation-with-benchmarks/).
So with that already out of the bag, lets look at the selector speeds of
jQuery. In short: For jQuery 1.1 we worked really really hard to make
[its selectors really fast](http://john.jquery.com/speed/old.html). In
fact, according to all our tests we were faster than any other selector
library. Working on the 1.1 release, Dean Edwards'
[cssQuery](http://dean.edwards.name/cssQuery/) far out-performed any
other selector library. It's really comprehensive, and really fast.
Today, Jack Slocum announced his new
[DOMQuery](http://www.jackslocum.com/blog/2007/01/11/domquery-css-selector-basic-xpath-implementation-with-benchmarks/)
selector library. In short: The bar has been raised. His library is very
very fast. Quite possibly the fastest available today. However, in the
comparison between his library and ours, some mistakes were made that
we'd like to clear up. (By both Jack and jQuery) (For reference, here's
the [comparision suite](http://john.jquery.com/speed/yui.html) that I
used for my tests.) **jQuery completely supports all attribute
selectors.** For example, [@foo], [@foo=bar], etc. The notable
difference is that jQuery uses the XPath-style syntax in this situation.
Since this was not accounted for in Jack's test, it appeared as if we
failed for all of the attribute selector tests. **Our "elem:empty" works
just fine.** You can see in Jack's test that all selectors (but
DOMQuery) fail :empty - that's more due to the fact that he compares the
results against DOMQuery, which gets the result wrong. The specification
states that something is empty if it doesn't contain any child elements
or text nodes. That doesn't seem to be accounted for in this case.
**[foo!=bar], :first, :last aren't part of any specification.** ...and
yet they're in the test suite. Incidentally, jQuery does implement
:first and :last - but not [foo!=bar] (which appears to be only in
cssQuery?). In all, its very strange to compare yourself against others
when its not something that you're designed to do. **What does
span:not(span.hl-code) match?** This is a strange gray area that I
haven't seen talked about anywhere, and the specification doesn't help
to clear it up at all. Should the resulting set be all spans that don't
have a class of hl-code - or nothing, since you've filtered out all the
spans. For example:

    // Finds nothing in both
    span:not(span)
    => []

    // Finds spans that don't have a class of 'foo', in both
    span:not(.foo)
    => [ <span>, <span>, ... ]

    // jQuery's interpretation of the combination:
    $("span:not(span.foo)")
    => []

    // DOMQuery's interpretation of the combination:
    Ext.select("span:not(span.foo")
    => [ <span>, <span>, ... ]

We'll fully concede that we may be very wrong on this point - but I'm
curious to hear what others have to say, and what they're
interpretations of the spec, are. **DOMQuery doesn't account for
duplicates.** Currently, doing Ext.select("div div") returns MORE
elements than doing just Ext.select("div") - and doing Ext.select("div
div div") returns yet another different set of elements, but still more
than just doing Ext.select("div"). In fact, accounting for duplicates is
a huge problem in JavaScript selector libraries - and currently, jQuery
is the only one that gets it right. A big point of this is that
accounting for duplicates can be really expensive (computationally) - so
the fact that DOMQuery doesn't account for duplicates gives the
appearance of a speed boost. For example:

    // DOMQuery
    Ext.select("div").elements.length
    => 246
    Ext.select("div div").elements.length
    => 624
    Ext.select("div div div").elements.length
    => 523

    // jQuery
    jQuery("div").length
    => 246
    jQuery("div div").length
    => 243
    jQuery("div div div").length
    => 239

**DOMQuery doesn't support multiple filters: elem.foo[foo=bar] or
elem.foo.bar** Until this is implemented, a comparison with any other
library simply isn't fair. Building a library that's fully capable of
handling aspects like that (see: cssQuery, jQuery) comes at a great
cost. (Whether it be in code size or speed cost.) **DOMQuery's \#id
selectors don't check for context** You'll notice if you try to do a
query like:

    Ext.select("div #badid").elements
    => [div#badid]

That you'll get an element by "badid" -- even if that element isn't
actually inside of a div. Since no check for validity is actually made
in the DOMQuery code, it's blazing fast - and very wrong. I should
mention that until 1.1, jQuery was wrong on this point too, so its an
easy issue to overlook. **Where'd the root element go?** You'll find
that searches for "html" and "\*" in DOMQuery are strangely missing one
obvious thing: The HTML element. seems kind of weird to exclude the root
DOM element from all queries; especially since this is perfectly valid:
"html \> body \*". ...and to make it fair - here's one for us :-) **Our
:nth-child(even/odd) is flawed.** Currently it seems to only select one
element (!?). I made a [ticket](http://jquery.com/dev/bugs/bug/786/) for
this and it should be resolved for this Sunday's 1.1 release. In all,
its great to see the speed leaps that've been made by DOMQuery. Selector
speed is one area where competition is truly warranted; every time a new
speed increase is made, everyone wins (users, developers - everyone). In
fact, looking over his code, I already have some more ideas on how to
increase the speed of jQuery! So, to Jack: Thanks for helping to keep us
on our toes - we're looking forward to seeing your library improve, and
everyone win.
