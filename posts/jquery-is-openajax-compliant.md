![OpenAjax
Alliance](http://blog.jquery.com/wp-content/uploads/2007/02/openajax.png)
A [new initiative](http://www.openajax.org/) has been forming, over the
recent months, in an attempt to standardize the different Ajax and
JavaScript codebases that exist. A number of corporate entities have
come together to draft the new [OpenAjax](http://www.openajax.org/)
standard (including IBM, Adobe, Opera, and Mozilla). Today we're
announcing a [new
plugin](http://dev.jquery.com/browser/trunk/plugins/openajax/lib/jQuery/OpenAjax.js)
that you can use to make jQuery OpenAjax compliant. By doing this,
jQuery is becoming one of the first projects that has made its codebase
compliant with the new standard. Currently, the [requirements for
compliance](http://www.openajax.org/member/wiki/InteropFest_2007_March)
are, relatively, simple - but still quite important. The relevant rules
can be summarized as such:

-   All libraries must register themselves (their name, version, and
    namespace) with the main OpenAjax library.
-   All libraries must register any global variables that they use (in
    the case of jQuery it's 'jQuery', and optionally '\$' - it defaults
    to just including 'jQuery').
-   Any attempt to register "onload" or "onunload" handlers must go
    through the OpenAjax library. In the case of jQuery, if you do:
    \$(window).load(function), and OpenAjax is included, jQuery will
    defer to OpenAjax's solution.
-   Libraries must not disrupt the ability of other libraries to
    traverse the HTML DOM document.

You can view [jQuery's compliance
results](http://john.jquery.com/plugins/openajax/tests/), to verify that
it does, indeed, past the test suite. If you wish to use jQuery in
conjunction with other OpenAjax-capable libraries, the process is rather
straight forward. **Step 1** Download a copy of the [jQuery OpenAjax
plugin](http://dev.jquery.com/browser/trunk/plugins/openajax/lib/jQuery/OpenAjax.js?format=txt)
to your server. **Step 2** Include the library in your site, just after
you include jQuery.

    <script src="jquery.js"></script>
    <script src="jquery.openajax.js"></script>

Be sure to include both jQuery and the jQuery OpenAjax plugin after
you've included the official OpenAjax library itself. And that's it!
jQuery will now happily play with the OpenAjax core library. It should
be noted that, currently, jQuery is not part of the [OpenAjax
Alliance](http://www.openajax.org/), but we're in the process of
applying and are eager to begin actively participating.
