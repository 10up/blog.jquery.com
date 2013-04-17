There have been a whole bunch of posts on this blog about the
differences in code size between jQuery and Prototype. The basic premise
of those posts (which I agree with) is that because of the way jQuery
code is structured, all sorts of typical Javascript design patterns are
rendered shorter and simpler in the framework when compared with
Prototype. For the longest time, I was a confessed Prototype junkie. I
discovered the framework when I started doing Rails work, and for Rails
developers, there is very little alternative. Prototype, in all its
ugliness, is baked into Rails, and it's very difficult to give up the
productivity gains Rails provides by coding Javascript by hand. Going
further on a tangent, that's why I started working on [jQuery on
Rails](http://trac.visualjquery.com/jQueryRails "jQuery on Rails"),
which aims to allow Rails developers to use jQuery as a drop-in
replacement for Prototype. But back to the purpose of this post, there's
something more fundamentally different about jQuery's programming sense
than just its code size. In fact, the difference in sensibilities is
very similar to the difference in sensibilities between Java and Ruby,
so it's ironic that the Rails community has embraced Prototype so
completely. Let's take a look at some code comparisons. First up, adding
some arbitrary HTML after a particular node. In Prototype:

    new Insertion.After('myId', 'Arbitrary HTML');

In jQuery:

    $('#myId').after('Arbitrary HTML');

Now, we haven't done much by way of reducing code clutter (although
jQuery's is cleaner), but there is a fundamental difference in the way
that Prototype and jQuery each approach the problem. Prototype creates a
series of monolithic *classes*that each encapsulate some functionality.
Developers then pass in an id, and some other parameters, and the class
does what it's supposed to do. Very much like the Java way of
encapsulating functionality (like the Math class, for
instance).**NOTE:**That's not to say that Java couldn't do things this
way. jQuery approaches the problem in a fundamentally different way. It
sees sets of HTML nodes as objects to pass messages to (more like the
traditional Ruby way). So instead of having a separate class that adds
text after an HTML node, jQuery glues the functionality onto the jQuery
object, which is returned by the \$ function. By contrast, Prototype's
\$ function returns a vanilla DOM node. Prototype attempted to achieve
similar functionality with its \$\$ method added in the latest RC of the
framework, but there's a fundamental difference. While Prototype's \$\$
returns an array of DOM Elements, jQuery's \$ is the fundamental
underpinning of the entire framework. Virtually all jQuery functions
bind to the jQuery object, which is returned by the \$ method. The
benefits of the jQuery way are highly visible:

-   **Chainability.** Because jQuery objects have functionality glued
    onto them, they return other jQuery objects, which the developer can
    then pass additional messages to. The trivial example on the jQuery
    website is *\$("p.surprise").addClass("ohmy").show("slow");*
-   **Use of CSS selectors and XPath operators.**Because jQuery passes
    messages to objects, it can (and has) implement additional selector
    functionality into the \$ method. The methods that are glued onto
    jQuery objects just see an array-like object that holds a series of
    DOM elements. It doesn't care how we got them. So plugin developers
    can add additional parsers into the \$ method, or glue additional
    functions onto the jQuery object rather easily.
-   Which brings us to **plugin development.** The jQuery way is very
    conducive to plugin development. It's quite easy to add
    functionality that takes advantage of the jQuery object, and jQuery
    plugins are usually much shorter than their counterparts. [jQuery
    Plugins](http://www.proj.jquery.com/docs/Plugins/ "jQuery Plugins")
-   **Automatic looping.**jQuery methods are required to automatically
    loop through all DOM elements in the array, and apply the desired
    method. So \$(expression).after('some HTML') transparently adds the
    HTML after every single element returned by the expression.
    \$('p').after('some HTML') will add 'some HTML' after every \<p\> on
    the page, for instance. Personally, I find the elimination of
    iteration in my code (in most cases) to be one of the top practical,
    day-to-day benefits of using jQuery.
-   **Builds on itself.**As jQuery has matured, it's become easier to
    build plugins on top of the existing architecture. Because all
    jQuery functions automatically loop, using existing jQuery functions
    means that annoying iteration is all but gone.

There's more, but the thread that runs through all of the benefits comes
out of the very meticulous way that John Resig has made the jQuery
object/array accept passed messages, rather than build various
monolithic functionality blocks, each of which must be built from
scratch. Some other examples: AJAX Updater in Prototype:

    new Ajax.Updater('placeholder', url, { method: 'get', parameters: par });

AJAX Updater In jQuery:

    $('#placeholder').load(url + par);

**Note:**This example doesn't deal with the obvious iteration benefits
we get if we wanted to load the response into every \<p\> object, for
instance. Adding a class to an element in Prototype:

    Element.addClassName('element', 'className');

Adding a class to an element in jQuery:

    $('#element').addClass('className');

Adding a class to a group of elements in Prototype:

    $$('.element').each(function(node) {
    Element.addClassName(node, 'className');
    }

Adding a class to a group of elements in jQuery:

    $('.element').addClass('className');

That last one is the clearest example of the difference in methodology.
Because jQuery is passing messages to jQuery objects, the code is barely
changed. jQuery doesn't care that we're now adding a class to a group of
objects instead of one object; the underlying code is the same (add the
class to the set of elements in the object). Prototype, on the other
hand, requires an iterator. And as your code becomes more complex,
jQuery's scales easily, while nested loops become the norm in frameworks
like Prototype. **[UPDATE]**An astute reader (Mislav) pointed out that
Prototype does indeed do just a bit of what jQuery does. Prototype seems
to bind the Element class to DOM Elements, allowing things like
\$('myElement').hide(), and such. However, it only applies to the
Element module, and seems to only work on single DOM elements. Binding
the Elements module is cool, but it's more an afterthought than the way
jQuery makes it a fundamental design decision.
