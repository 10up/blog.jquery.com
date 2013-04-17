![](http://blog.jquery.com/wp-content/uploads/2010/10/jquerycomm.jpg "JQuery")

In today's post we'll be presenting updates on both jQuery Core and UI
as well as highlighting any upcoming training events being held and
articles or videos which we think might be useful to read. We would
appreciate your comments and feedback on them!

**Contents**

-   -[jQuery 1.5 Was Released](#jqreleased)
-   -[Unleashing the Grid - A New jQuery UI Grid](#thegrid)
-   -[jQuery Conference Videos Are Now Available Online](#confvideos)
-   -[Upcoming jQuery Training Events](#trainingev)
-   -[A New Episode Of YayQuery](#yayquery)

 

**jQuery 1.5 Was Released**

This week, the core team released [jQuery
1.5](http://blog.jquery.com/2011/01/31/jquery-15-released/) to celebrate
the fifth birthday of the library. This included many [performance
improvements](http://jsperf.com/jquery-15-unique-traversal) and bug
fixes as well as a major re-write of the Ajax module which now comes
with [deferred](http://api.jquery.com/?ns0=1&s=deferred) callback
management. Core also introduced a new feature called
[jQuery.sub](http://api.jquery.com/jQuery.sub/) which allows for new
copies of jQuery to be created where properties and methods can be
safely modified without affecting the global jQuery object.

If you haven't had a chance to read or play around with these new
features as yet, community member Eric Hynds wrote an [in-depth tutorial
on using
Deferreds](http://www.erichynds.com/jquery/using-deferreds-in-jquery/)
which you may be interested in. I also recorded a [quick screencast
explaining how to use
jQuery.sub](http://addyosmani.com/blog/video-jquerysub-explained/).

jQuery 1.5 has already begun to be used in the wild and you may also be
interested in taking a look at jQuery templating author Boris Moore's
new [script loader](https://github.com/BorisMoore/DeferJS) which also
makes use of deferreds.

As always, we appreciate any and all community feedback on the 1.5
release and if you discover bugs or issues which you would like to
report, you can do so by following our [bug submission
guidelines](http://docs.jquery.com/How_to_Report_Bugs). We've already
made a number of
[fixes](https://github.com/jquery/jquery/commits/master/) to 1.5 (which
can be tested in jQuery-Git) and we also welcome any feedback on that
version as well.

Remember that up-to-date information on all our future releases
(including jQuery 1.5.1) can be found on our
[roadmap](http://docs.jquery.com/Roadmap).

 

**Unleashing the Grid - A New jQuery UI Grid**

![](http://blog.jquery.com/wp-content/uploads/2011/02/uigrid30492.jpg)

The jQuery UI Team have announced an exciting new project called the
jQuery UI Grid, where they'll be building a feature rich, fast grid
widget for enhancing table data with linking, sorting, paging and inline
editing amongst other features.

There have been quite a few attempts outside of the project to create
such widgets before, however they've often suffered from poor support,
documentation or a lack of extensibility - the new UI grid project aims
to solve these issues by providing a project-supported component that
will be both modular and continually updated.

Speaking to [Richard D. Worth](http://rdworth.org/), here's a progress
update on where the team are with the Grid at the moment:

> We are nearing completion of development on Stage 1 of the project,
> which encompasses the creation of a generic data model, data type
> parsing, and markup. This stage will culminate in a "zero feature
> grid," an enhanced HTML table that supports the jQuery UI CSS
> Framework and serves as a base for other grid features.

[Read Richard's full blog post on the new
Grid](http://blog.jqueryui.com/2011/02/unleash-the-grid/).

 

**jQuery Conference Videos Are Now Available Online**

![](http://blog.jquery.com/wp-content/uploads/2011/02/resig4234.jpg)

If you weren't able to attend the jQuery Conference in Boston last year
(with speakers such as John Resig and Karl Swedberg in attendance) we've
got some great news - almost all of the talks are now available to watch
online (either on your desktop or mobile device) via our [conference
site](http://events.jquery.org/2010/boston/video/). You can also pick-up
the slides mentioned in the videos by clicking on any individual
speaker's talk.

 

**Upcoming jQuery Training Events**

![](http://blog.jquery.com/wp-content/uploads/2011/02/bocoup342.jpg)

Group training can be an excellent way to improve your jQuery skills and
Ben Alman over at [Bocoup](http://bocoup.com/) (a jQuery sponsor) would
like to make a special announcement about upcoming events they'll be
holding in March and July.

> Bocoup currently has two 3-Day Comprehensive jQuery Training sessions
> scheduled. As always, sessions will be held at The Bocoup Loft in
> Boston, and 10% of profits will go directly to the jQuery Foundation.
> Be sure to sign up now, since class sizes are limited to twelve
> people. Read more about our curriculum and trainers here:
>
> [*March 2nd - 4th,
> 2011*](http://training.bocoup.com/comprehensive-jquery-training-2011-03-02/)
> and [*July 13th - 15th,
> 2011*](http://training.bocoup.com/comprehensive-jquery-training-2011-07-13/)

jQuery Team member Karl Swedberg will also be holding a hands-on
training event between [March 1st-3rd](http://ideafoundry.info/jquery)
in Holland, Michigan.

Karl will painlessly walk you through jQuery's principles and show you
how to make use of the library in your everyday coding. Karl will also
be giving away free copies of his *Learning jQuery book* to all
attendees.

For more information or to register, check out the
[IdeaFoundry](http://ideafoundry.info/jquery) site.

 

**A New Episode Of YayQuery**

![](http://blog.jquery.com/wp-content/uploads/2011/02/yayquery43242.jpg)

For fans of the YayQuery podcast, [Paul Irish](http://paulirish.com/)
(jQuery core team), [Adam Sontag](http://ajpiano.com/) (jQuery UI team)
and community members [Alex Sexton](http://alexsexton.com/) and [Rebecca
Murphey](http://www.rebeccamurphey.com/) are back with a new episode of
their video podcast. In their latest episode, they discuss the new
Deferreds features with one of the main developers behind the Ajax
re-write [(Julian Aubourg](http://jaubourg.net/)) and also look at other
new developments in the world of jQuery and JavaScript.

Watch or listen to the podcast at [YayQuery.com](http://yayquery.com).

And that's it!. If you have any interesting jQuery articles or posts
which you think would be beneficial for the community to read, please
feel free to mention them in the comments. We'll be back with another
Community Update in a few weeks with more news on the next version of
jQuery.

Until then, good luck with all your projects!.
