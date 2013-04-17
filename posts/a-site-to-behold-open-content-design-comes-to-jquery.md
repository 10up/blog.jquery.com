In the past few days and weeks, you've probably already noticed the new
theme we've been rolling out across our websites. In fact, unless this
is your very first time looking at the jQuery blog, this very post
probably looks a lot different than what you've been used to seeing over
the past few years. Today, as this new design finally reaches
[jquery.com](http://jquery.com), we are very excited to pull back the
curtain and explain the work we've been doing and how it goes above and
beyond the simple "facelift" it may appear to be at first glance. As the
jQuery ecosystem has grown, it's become increasingly difficult for the
jQuery Team to keep our arms wrapped around a burgeoning balloon of
documentation, design, CMS installs and wikis. Community members who've
*wanted* to report and fix documentation errors have been left with
nowhere to take action, and the picture wasn't much better even for
those who did have access. With all this content and design locked away
in production environments behind a slew of different user accounts, and
nowhere to track bugs, visibility has been low and progress incremental
at best. We knew we had to make a change. Over the past year, we've
undertaken a massive effort to consolidate and simplify our site
infrastructure and open source all of our web site content,
documentation, and design. We've done this because it has already done
wonders for our own ability to collaborate and move forward, and because
we hope it will open up new avenues of participation for all of you out
there who have wanted to find a way to get involved with jQuery, but
have been unsure you could contribute. So, enough with the platitudes —
on to the stack!

git + grunt + WordPress
-----------------------

We've moved nearly all of our documentation and site content into static
content repositories on GitHub, where they are maintained in HTML,
Markdown, or XML, depending on the type of content. Now, if you notice a
typo or think something needs clarification, you can file an issue and
even send a pull request with a fix. Everything from the [source
documentation for
`jQuery.ajax`](https://github.com/jquery/api.jquery.com/blob/master/entries/jQuery.ajax.xml)
to the [front page of
jquery.com](https://github.com/jquery/jquery.com/blob/master/pages/index.html)
to the [raw
Markdown](https://github.com/jquery/contribute.jquery.org/blob/master/pages/web-sites.md)
of this [new page that includes the full list of content
repositories](http://contribute.jquery.org/web-sites/#site-repository-guide)
is open source! The content is brought to life on our websites using
[WordPress](http://wordpress.org) and our custom theme and multi-site
configuration,
[`jquery-wp-content`](https://github.com/jquery/jquery-wp-content).
Using this single WordPress instance makes it exponentially easier and
more manageable for us to keep the look and feel of all our different
sites in sync, and preserves our ability to easily layer on dynamic
features like site search and user accounts as we need them.
`jquery-wp-content` also contains a custom installation script that
makes it easy to stand up the entire jQuery sites network for local
development, opening up the doors for much less conservative
experimentation with fixes and new features. Again, all this means that
if you notice bugs on any jQuery website, there's somewhere to report
them, and you can even work on the fix yourself if you want! *(We've
received an incredible amount of help creating and maintaining
`jquery-wp-content` from WordPress developers [Andrew
Nacin](https://twitter.com/nacin) and [Daryl
Koopersmith](https://twitter.com/koop), and we'd be remiss if we didn't
thank them right here for all their hard work!)* The link between
WordPress and the static content repositories is a
[`grunt`](http://gruntjs.com) build and deployment process that
processes the content files and synchronizes them into a WordPress
installation using
[XML-RPC](http://codex.wordpress.org/XML-RPC_Support). That means we
don't ever use the WordPress Administration pages; all authoring and
editing just happens in your favorite text editor, then `grunt` does the
hard work. In order to deploy to our production and staging servers, we
simply use git webhooks to respond to commits on the content
repositories and `jquery-wp-content`. Whenever a commit lands on the
master branch of these repositories, the content and design is reflected
immediately in the staging environment, which is just the URL of the
website with a `stage.` subdomain prefix, e.g.,
[stage.jquery.com](http://stage.jquery.com). To deploy to the production
sites, all that's necessary is
[tagging](http://git-scm.com/book/en/Git-Basics-Tagging) with a
[semver](http://semver.org/) and pushing the tag.

[New Sites](#new-sites)
-----------------------

In addition to today's new look for the blog and `jquery.com`, we're
happy to unveil some brand new sites that are all powered by this
system, which you should find especially useful if you're looking to
find ways to get involved with with jQuery.

### Contribute to jQuery

**URL:** [contribute.jquery.org](http://contribute.jquery.org) |
**Repo:**
[github.com/jquery/contribute.jquery.org](http://github.com/jquery/contribute.jquery.org)
Our new hub for information on how to actually get started with
contributing to jQuery and open source in general. It's also full of
useful resources for contributors, like our [CLA
form](http://contribute.jquery.org/CLA/) and [style
guides](http://contribute.jquery.org/style-guide/) used across all of
our projects.

### jQuery IRC Center

**URL:** [irc.jquery.org](http://irc.jquery.org) | **Repo:**
[github.com/jquery/irc.jquery.org](http://github.com/jquery/irc.jquery.org)
The jQuery Foundation uses Internet Relay Chat extensively for support
and project communication. This is where we host the logs from our
channels and keep documentation about how you can get connected and what
to expect when you get there.

### jQuery Brand Guidelines

**URL:** [brand.jquery.org](http://brand.jquery.org) | **Repo:**
[github.com/jquery/brand.jquery.org](http://github.com/jquery/brand.jquery.org)
As we've recently freshened up a lot of the conventions we're using for
representing jQuery, we've also published these guidelines so that the
community can have a better understanding of how they can — and can't —
use the names and marks of jQuery Foundation projects.

[Sunrise, Sunset](#site-deprecations)
-------------------------------------

We'll also be saying goodbye to some subdomains in the next few weeks,
and we wanted to give you a heads up, so you can prepare if necessary.

### [docs.jquery.com](http://docs.jquery.com)

Our original MediaWiki documentation-and-catch-all site has served
admirably over the years, but it is time to put it out to pasture. We'll
continue to redirect the popular URLs on this site to their more modern
counterparts.

### [meetups.jquery.com](http://meetups.jquery.com)

Hosting our own meetup network was an interesting experiment, but the
site gets almost no usage and is cumbersome for us to continue to
manage, so we will be shutting it down. We recommend organizers use
other, more established platforms such as
[meetup.com](http://meetup.com).

* * * * *

In addition to the new sites we've just launched, we'll be continuing to
roll out other new sites and integrate more of our existing sites into
with the new theme over the coming days and weeks. We're really happy
with how it's working so far, and look forward to continuing to improve
the sites — perhaps with **your** help! As always, if you have trouble
with any of this, please file issues, join us in the [\#jquery-content
channel](irc://freenode.net:6667/#jquery-content) on
[freenode](http://freenode.net), or send an e-mail to [content at jquery
dot com](mailto:content@jquery.com).
