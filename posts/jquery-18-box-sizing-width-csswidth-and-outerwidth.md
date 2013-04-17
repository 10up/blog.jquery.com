One of the great new features in jQuery 1.8 is a built-in understanding
of `box-sizing: border-box` which is supported by every modern browser.
(Sorry, IE6 and IE7, please take one step back; I said *modern*
browser.) If you showed people an element with a border on the screen
and asked them the width of that element, they would naturally measure
from the outside edges of the border. Yet that's not the way CSS works
in its default `content-box` mode. Normally, CSS width and height only
include the "content" inside the border and padding. As a result,
designers (and jQuery) often need to add the width to the right/left
padding and border to get the "natural" width of the element. Using
`box-sizing: border-box` changes the CSS notion of the width of an
element to include both the padding and the border dimensions, [just the
way you'd naturally measure
it](http://paulirish.com/2012/box-sizing-border-box-ftw/). jQuery
versions before 1.8 [were not fully
trained](http://bugs.jquery.com/ticket/11004) in the ways of the
`border-box`, but we've fixed this bug. One thing that hasn't changed is
the return value of the `.width()` method. As it's always been
documented, it gets and/or sets the "content" width of an element, and
that is regardless of the CSS `box-sizing` being used by the element.
However, jQuery 1.8 now needs to check the `box-sizing` property
whenever you use `.width()` so that it can decide whether it needs to
subtract out the padding and border width. That can be expensive—[up to
100 times more expensive](http://jsperf.com/getcomputedstyle-perf) on
Chrome! Fortunately, most code doesn't use `.width()` enough times for
this to be noticeable, but code that gets the width of dozens of
elements at once could be impacted. There is a very easy way to avoid
this performance penalty if it does impact your code. Simply use
`.css("width")` instead of `.width()` to make it clear you want to get
or set the actual width of the element as specified by the CSS. That
doesn't require jQuery to look at `box-sizing`. Remember, however, that
`.css("width")` as a getter returns a string with "px" at the end, so
you'll want to use something like
`parseFloat( $(element).css("width") )` for situations where the result
must be numeric. And of course, everything mentioned here about
`.width()` also applies to `.height()` as well; use `.css("height")` to
skirt the performance penalty there.

### Using `.outerWidth()` as a setter

In other dimensionally related news, jQuery's `.outerWidth()` and
`.outerHeight()` methods have been updated in 1.8 so that [they can be
used as setters](http://bugs.jquery.com/ticket/10877). (jQuery UI has
supported them as setters since UI version 1.8.4, but now it's built
into core.) To use `.outerWidth()` as a setter, pass an argument that is
a number representing the outer width (CSS "content" width, plus padding
and border width). And yes, this handles the `box-sizing: border-box`
situation fine as well; it's basically the same as setting the
`.css("width")` in that case. We've received a few reports from people
who had problems with `.outerWidth()` in jQuery 1.8 because it was
returning the jQuery object instead of a numeric width. This happens if
you call `$(element).outerWidth(0)` for example. Before jQuery 1.8, this
was an invalid use of the API because it was documented to accept a
single *Boolean* argument. However, it treated the invalid argument as a
Boolean and returned the width. In 1.8, jQuery uses the value 0 to set
the width, and like most setters it returns the jQuery object. We're in
the process of updating the API documentation for all the changes to
1.8, but for now you can refer back to the changelog in the [jQuery 1.8
announcement](http://blog.jquery.com/2012/08/09/jquery-1-8-released/) to
see what's changed.
