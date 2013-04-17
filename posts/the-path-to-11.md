Just a quick update so that everyone knows what's going on: The jQuery
Dev Team is currently working on the upcoming 1.1 release of jQuery. So
SVN is going to be changing rather significantly during the next couple
weeks. Here's the current game plan:

-   jQuery 1.1a **January 7th** - A quick alpha release to help everyone
    test their code and get it moved over to the upcoming 1.1 release.
-   jQuery 1.1 **January 14th** - This will be the official release, to
    coincide with jQuery's 1 year anniversary.

It's important to note that **jQuery 1.1 will not be backwards
compatible with 1.0**. The changes will occur in different ways, but so
far, this is what is planned to change:

-   Methods like .oneclick() and .unclick() will be going away in favor
    of .one("click") (new) and .unbind("click"). We found that these
    methods weren't used enough to warrant the 70+ API entries that they
    required.
-   Selectors :nth-child(), :gt(), :lt(), and :eq() will all be starting
    count at 1 instead of 0, in line with the CSS specification. (This
    is a bug fix, but causes an incidental API change)
-   Some CSS helper methods are going away, like: .color() and
    .background(). You should start moving over to using .css("color")
    and .css("background") instead.
-   Some attribute helper methods like .title() and .rel() are going
    away. You should start using .attr("title") and .attr("rel")
    instead.

A lot of this is being done to help reduce the magnitude of methods that
are included in the [jQuery API](http://jquery.com/api/). Having 70+
less entries will significantly reduce the size of the documentation,
along with making it easier to maintain and read. If you're interested
in the direction that the jQuery code base is heading in, please feel
free to subscribe to the [jQuery Dev Mailing
List](http://jquery.com/mailman/listinfo/dev_jquery.com) where the
jQuery Dev Team discusses all of these issues in depth. **Update:** I
forgot to mention that there *will* be a compatibility plugin that'll
help you transition over to jQuery 1.1. This way, you can continue to
use .oneclick() (and all the other methods) into the foreseeable future
(even though it may not be in the jQuery core).
