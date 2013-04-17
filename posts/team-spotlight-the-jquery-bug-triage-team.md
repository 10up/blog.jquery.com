Allow me to introduce the bug triage team with a chart:
![](http://blog.jquery.com/wp-content/uploads/2010/11/Screen-shot-2010-11-23-at-7.14.29-AM.png)
**Over the past 60 days, the bug triage team has taken an unwieldy hairy
mess of tickets and addressed every single one of them.** Yes that's
right; as it stands, there are zero unreviewed tickets in the jQuery
issue tracker. [The last one](http://bugs.jquery.com/ticket/7585) to be
closed was a rather malodorous bug. The jQuery Bug Triage team are a
group of jQuery core and community members who actively assist in
narrowing down and patching bugs submitted on the [jQuery bug
tracker](http://bugs.jquery.com). Between them this team have a number
of years worth of experience in debugging and fixing both JavaScript and
jQuery issues. When you submit a bug, feature request or enhancement
request to the project, they're the team that looks at your tickets. The
team members are:

-   [Dave Methvin](http://methvin.com/) is co-founder of PC Pitstop,
    jQuery user since 2005, and on the jQuery core team.
-   [Addy Osmani](http://addyosmani.com/blog/) is a London-based
    User-interface developer at Aol as well as a regular jQuery blogger.
-   [Colin Snover](http://zetafleet.com/) is an independent software
    designer and developer based out of Minneapolis.
-   [Rick Waldron](http://twitter.com/rwaldron) is Head of Research and
    Development at Bocoup in Boston, MA
-   [Alex Sexton](http://alexsexton.com/) is a Labs Engineer at
    Bazaarvoice in Austin TX, and a co-host of the yayQuery podcast.
-   [Adam J Sontag](http://ajpiano.com/) is a NYC-based developer for
    Bocoup, and a co-host of the yayQuery podcast.
-   [Mike Taylor](http://miketaylr.com/) works for Opera Software and
    sometimes gets hit by cars on his bike.
-   [Dan Heberden](http://danheberden.com) is a web consultant based in
    Portland, Oregon and is on the jQuery UI team
-   [Anton Matzneller](https://github.com/jitter) is a computer science
    student and developer located in Vienna, Austria.

We all owe these guys a good amount of thanks. They've done a tremendous
amount of work to benefit jQuery.
![](http://static.jquery.com/org/images/team/dave.jpg "Dave Methvin")![](http://a1.twimg.com/profile_images/733916325/jk_normal.png "Addy Osmani")![](http://a1.twimg.com/profile_images/1132786829/zetafleettmp_normal.png "Colin Snover aka Zetafleet")![](http://a3.twimg.com/profile_images/732025391/rick_jedi_avatar_normal.jpg "Rick Waldron")![](http://a2.twimg.com/profile_images/505590110/1ac219a6360a061d1ab2dbdc93435c96_normal.jpeg "Alex Sexton")![](http://a3.twimg.com/profile_images/530311059/twitpic_normal.jpg "Adam J Sontag aka ajpiano")![](http://a1.twimg.com/profile_images/1042621997/mikeyyyy_normal.png "Mike Taylr")![](http://a0.twimg.com/profile_images/1224258486/headshot_square_normal.jpg "Dan Heberden")![](https://github.com/images/gravatars/gravatar-140.png "jitter")
`<== jQuery heroes` Now, some other news from the development front...

### New (and undocumented) Features

**`jQuery.readyWait`** Introduced in jQuery 1.4.3 was a counter called
readyWait. This provides a way for control flow to get to a point where
registered ready() handlers are invoked. **Event Map Support Extended**
`.live(), .die(), .delegate()` and `.undelegate()` now support maps of
events as a parameter in the same manner that bind and unbind currently
do. **Overrides available for `.getData()`, `.setData()` and
`.changeData()`** As mentioned in the jQuery 1.4.3 release notes we
previously provided two events, setData and getData (broadcast whenever
data is set or retrieved through the `.data()` method). In the latest
versions of jQuery you are actually able to override these events in
order to provide alternative behavior for those features. For example,
you can return a different value or prevent a particular value being
set.

### Regressions

We determined that a regression was introduced in 1.4.3 which limited
the use of attr() to nodeType 1 DOM element nodes. Although this was
fixed in 1.4.4, `attr(name)` and `attr(name, value)` still fail in
[specific circumstances](http://jsfiddle.net/jitter/A9auC/6/). We are
targeting a fix for this to land in jQuery 1.4.5.

### jQuery UI Bug Tracker Updated

The [jQuery UI Bug
tracker](http://bugs.jqueryui.com/query?status=accepted&status=assigned&status=new&status=reopened&group=component&max=250&order=priority&col=id&col=summary&col=owner&col=type&col=priority&col=version&milestone=1.9&report=17)
recently received the same enhancements as jQuery Core from Mr. Colin
Snover and you can now find the same great voting and tracking options
for submitting bugs, features and enhancement requests as you can on the
jQuery Core tracker. This will make it significantly more easy for you
to find out when we've taken a look at your ticket so you can follow-up
in case there are any additional questions or updates regarding fixes.

### Tips For jQuery Bug Patching

jQuery has quite an active development community and from time to time
our community members wish to patch bugs or issues they’ve discovered
for submission to the project for review. If this sounds like something
you would like to get involved in, we’ve put together a commented build
file (courtesy of Rick Waldron) that will help you get setup for
patching bugs using a LAMP or MAMP stack. You can download [this build
file via a gist](https://gist.github.com/672714). If you have questions
on how to get setup, please feel free to leave a comment on the gist
above or ask us about it in the \#jquery IRC channel. (Thx to Addy
Osmani, who drafted much of this post for me :)
