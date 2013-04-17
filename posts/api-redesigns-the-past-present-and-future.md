Back in November, we announced [the first of many API
redesigns](http://blog.jqueryui.com/2010/11/accordion-api-redesign/). In
that post, we briefly stated our overall goals:

> jQuery UI is undergoing an API redesign which will slim down the size
> of the API in order to provide a more stable codebase that is easier
> to learn and use. We’ll be posting the proposed changes over the next
> few weeks in order to gather feedback from the community. Our goal is
> to support the old (current) and new (proposed) APIs simultaneously in
> 1.9 and then remove support for the old APIs in 2.0.

Now it's three months later and two things are clear: 1) it's taking
more than a few weeks to post all of the proposed changes; and 2) we
didn't give enough information about the planned changes and the
reasoning behind them.

### The Past

When jQuery UI was first created, it was a combination of new and
existing plugins. Pulling in existing, popular plugins was beneficial
for everyone involved: jQuery UI was released earlier and with more
plugins, the original authors' hard work was publicly recognized and
supported by the jQuery Project and the existing user base gained
official support for the code they were using. Unfortunately, there was
a downside to this approach. Because the existing plugins were written
by different authors with different design principles and different
coding styles, there wasn't much consistency within jQuery UI. Between
the 1.0 and 1.8 releases there were a few attempts to standardize
various parts of the API, but there was never a coordinated effort large
enough to make the necessary changes. In addition to the inconsistencies
between plugins, other problems started to appear over the past three
and a half years. As users requested more and more features, the number
of options, methods and events continued to grow. Over time, this led to
what we have today, where something as simple as a draggable element has
almost 30 options. On one hand, it's impressive that so many various use
cases can be handled, often with the use of just one or two of these
options. On the other hand, finding the right one or two options to use
can be a daunting task, especially for new users.

### The Present

Recognizing the existing problems, we approached the 1.8 release
differently. We defined a new process for building plugins that focuses
on simplified APIs that are easy to extend. With the success of the 1.8
release, especially the simplicity and flexibility of the Autocomplete
widget, we were convinced that our new process was working. Having a new
process and new standards, we decided to go back and redesign all of our
existing plugins with the same design process. In October, the jQuery UI
team got together in Boston to do a first pass at redesigning all of the
existing plugins. A few weeks later we started posting the proposed
changes to gather feedback from the community. We're still working
through some of the details for specific plugins. Our goal is to have a
completely refreshed project with the 2.0 release. We will have a much
simpler API, better stability, full documentation and a full test suite
for every plugin. However, getting there will require a lot of
backward-incompatible changes. We're aware of how painful that can be
and we are doing everything we can to reduce the pain of upgrading.
Specifically, we're doing the following while implementing the new API:

-   Ensuring we have a full test suite for the 2.0 API
-   Creating a separate test suite for the 1.8 API
-   Re-implementing any deprecated functionality on top of the new
    functionality
-   Defaulting to the 1.8 API in cases where the old and new APIs cannot
    live side-by-side

This approach has several benefits, with one of the most important being
that upgrading to 1.9 should not break any existing pages. In fact, the
1.9 release will have better support of the 1.8 API than any 1.8.x
release. As plugins are refactored for 1.9, many bugs present in 1.8.x
will be fixed and some of the fixes will not be easily ported to the 1.8
branch. Because the support for the 1.8 API in the 1.9 release is
actually new code built on top of the 2.0 API, it benefits from these
bug fixes. The addition of a full test suite for the 1.8 API ensures
that these bugs are actually fixed in both APIs. Defaulting to 100%
support of the 1.8 API is great for upgrading to 1.9, but it doesn't
provide a way to determine if you're ready to upgrade to only using the
2.0 API. In order to deal with this, we've added a new flag,
`jQuery.uiBackCompat`. If you load jQuery, then set
`jQuery.uiBackCompat = false`, then load jQuery UI, none of the 1.8 API
will be loaded. This will result in only having the 2.0 API available
and will allow you to test your pages for compatibility with the new API
and provide confidence that you will be ready to upgrade to 2.0 when it
is released.

### The Future

When jQuery UI 2.0 is released, we will no longer support the 1.8 API.
However, the 1.8 API compatibility layer from 1.9 should continue to
work; it will just not be included in the 2.0 release and will no longer
be officially supported. All new plugins will go through the new design
process so large API changes like this should not occur again. Once the
existing plugins have been updated to our new standards, we should be
able to move the project forward much faster than we've previously been
able to. It's worth mentioning that only widgets, utilities and effects
are being refactored in 1.9. All interactions are going to be rewritten
for 2.0 so they will be undergoing a different implementation process.
As a user of jQuery UI, there shouldn't be much perceived difference
between the widget refactors and the interaction rewrites other than the
release date. We know that no one looks forward to refactoring existing
code to work with API changes, and we're working to make sure the
transition process will be clear and simple.  We hope that you, our
users, understand that we need take this opportunity to refine jQuery UI
to make it more robust, extensible, and maintainable in the long term.
