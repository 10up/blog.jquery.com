**Please check out the [followup
post](http://blog.jquery.com/2012/07/01/jquery-1-9-and-2-0-tldr-edition/)
before jumping to the wrong conclusion.** As the last blog post
discussed, jQuery version 1.8 is undergoing a spring cleaning to remove
insecure, inefficient, ineffective, and inadvisable features. We've also
begun the work to allow you to build custom versions that exclude parts
of the library for even greater savings. Those efforts will make it
possible for you to enjoy the jQuery API you need without carrying
around the parts you don't want. Now that we've cleaned house, it's time
to take a look forward. There's just one thing interfering with our
vision of the future, and that's the ghost of browsers past. Internet
Explorer 6, 7, and 8--collectively, oldIE--have been a thorn in the side
of web developers for a decade. Collectively, these browsers of a bygone
era still represent up to one-third of users visiting some sites. That
is a lot of users--people who still want the information, services and
products that web sites provide. For many web sites that use jQuery,
it's not practical or profitable to ignore that audience. jQuery was
conceived specifically to address the differences in browsers, so we're
not going to abandon the essence of our philosophy and simply disregard
the millions of active Internet users who (for whatever reasons) still
use oldIE. Yet we also want to move ahead and take advantage of modern
browsers, especially the growing mobile market.

The Road Ahead
--------------

jQuery 1.8 should arrive within a month. Here is our thinking about the
next two versions of jQuery to follow it, and when they'll arrive:

-   **jQuery 1.9 (early 2013):** We'll remove many of the interfaces
    already deprecated in version 1.8; some of them will be available as
    plugins or alternative APIs supported by the jQuery project. IE
    6/7/8 will be supported as today.
-   **jQuery 1.9.x (ongoing in 2013 and beyond):** This version will
    continue to get fixes for any regressions, new browser bugs, etc.
-   **jQuery 2.0 (early 2013, not long after 1.9):** This version will
    support the same APIs as jQuery 1.9 does, but removes support for IE
    6/7/8 oddities such as borked event model, IE7 "attroperties", HTML5
    shims, etc.

Our goal is for 1.9 and 2.0 to be interchangeable as far as the API set
they support. When 2.0 comes out, your decision on which version to
choose should be as simple as this: If you need IE 6/7/8 support, choose
1.9; otherwise you can use either 1.9 or 2.0.

Questions and Answers
---------------------

**If jQuery 1.9 and 2.0 are basically the same API, what makes 2.0
compelling?** Smaller size, better performance, and the lack of problems
introduced by the need for oldIE support. We expect that we can improve
error handling in the \$.Deferred implementation in 2.0, for example,
whereas we can't do that as long as oldIE is supported. **My site still
has many IE7/8 visitors but I want to use jQuery 2.0. Can I do that?**
If your web site needs oldIE support, and we expect most sites will need
it for at least another year or two, you can use IE conditional comments
to include version 1.9 only when visitors are using oldIE:

    <!--[if lt IE 9]>
        <script src="jquery-1.9.0.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script src="jquery-2.0.0.js"></script>
    <!--<![endif]-->

**Why not make an "oldIE plugin" for jQuery 2.0?** Special dispensations
for oldIE are sprinkled throughout jQuery. Refactoring the code to
provide enough hooks so that oldIE support could be added as a plugin
would complicate the code for the modern browser case. Plus, developers
supporting oldIE and using a public CDN would then need to include two
files (jQuery 2.0 and the oldIE plugin) instead of one. **Once jQuery
2.0 is released, what happens to 1.9?** In a departure from the past,
we'll continue to fix bugs in 1.9 (as minor releases). Having just gone
through a spring cleaning for 1.8 and 1.9, we don't anticipate adding a
lot of new APIs in the future. Instead, we prefer to add new
functionality through plugins compatible with both versions where it
makes sense. So don't feel like you're being left behind when using
version 1.9. **Is jQuery 2.0 basically for mobile devices?** No.
Although jQuery 2.0 will be a great fit for HTML mobile apps, including
ones written with jQuery Mobile, it is not a Webkit-only library that
targets just iOS and Android. In addition to mobile browsers, 2.0 will
support (and be tested!) with modern desktop versions of Internet
Explorer, Opera, Firefox, Safari, and Chrome. **How much smaller/faster
will jQuery 2.0 be?** We won't know until we're done, or at least close
to being done. You can bet that we'll tell you more as the release date
for 2.0 draws near. Better yet, you can try the beta when it is released
and see for yourself!
