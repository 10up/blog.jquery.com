For about a week, instead of hosting several hundred jQuery plugins and
several thousand advertisements for laptop batteries, our plugins
repository has been serving up a pretty pathetic message about spam and
an allusion to some "new submission process." This happened very
suddenly, and we're sorry to everyone who's been inconvenienced.
Please allow me a few minutes to explain what happened, where we're
headed, and how it impacts you. If you're in a rush, here's the [short
version](#pluginstldr).

The Backstory
-------------

[![A White
Elephant](http://blog.jquery.com/wp-content/uploads/2011/12/white-elephant.png "A White Elephant")](http://en.wikipedia.org/wiki/White_elephant)
Though the plugins site you've known ~~and loved~~ was a valuable tool
when it was first set up, it gradually became something of a [white
elephant](http://en.wikipedia.org/wiki/White_elephant) for the project.
While powerful distribution tools like [GitHub](http://github.com) and
[npm](http://npmjs.org/) have come to the fore, we've been stuck in an
aging, CMS-oriented paradigm that frustrated developers and consumers of
plugins alike. Many people moved onto alternative sources for finding
and vetting plugins. Furthermore, the sites's original implementors and
maintainers had since moved on from active involvement within the jQuery
project. While the team faced a steady stream of complaints about
usability and a general lack of features, the site itself faced a
veritable barrage of (several flavors of) spam. There was your standard,
keyword-rich SEO garbage, but there was also something slightly more
insidious: the batch posting of under-documented, demo-free plugins with
links to paid download sites by third parties trawling for
affiliate cash. While this wasn't explcitly disallowed, it led to a
terrible, confusing experience for users and gave the site the distinct
sense that all was not on the up and up.

The Best Laid Plans...
----------------------

Sensitive to all these problems, the team began drawing up requirements
for a complete overhaul. We knew we wanted to get out of the business of
accepting uploads, serving downloads, and generally legislating the
plugin "release" process on our own servers. With our official projects
already on GitHub, we knew we wanted to leverage the many wheels
they'd already invented for distribution, versioning, and facilitating
open, collaborative development. Another requirement was to create a
standard schema for authors to clearly delineate dependencies, like
which version(s) of jQuery a plugin supports, as well as other plugins
and CSS assets it requires to be functional. We also wanted to introduce
some quality control, with both passive mechanisms like requiring GitHub
and a manifest file for distribution, as well as active ones like user
ratings. Finally, we wanted a clean slate; with stricter requirements
for submission, there could be no mass import of all the old plugins. We
made a lot of progress preparing specifications, but hampered by a
lack of resources and a number of other projects, we never were able to
get too deep into the implementation phase. After all, the old site
"worked!"

...Often Go Awry
----------------

![Throwing the baby out with the
bathwater](http://blog.jquery.com/wp-content/uploads/2011/12/baby-with-bathwater-mid-size.gif "Throwing the baby out with the bathwater")
As the glut of spam grew worse and multiple reports started showing up
on the jQuery Core bug tracker, I wanted to at least take some steps to
wipe a bit of the spam and egg off our face. With newly provisioned
access to the administrative tools on the site, I teamed up with the
[Drupal Views Bulk Operations
module](http://drupal.org/project/views_bulk_operations) and set out to
identify and delete spammers and their posts. Within a day or two,
nearly 90% of the alleged "content" was gone from the site. I continued
to monitor the situation over the ensuing days, and deleted spam as it
came in. Unfortunately, I likely cast too wide of a net, and threw out
several perfectly good babies with the bathwater. Even more
unfortunately, I didn't back up the database before I began this
process. At this point, you can probably see where this story is headed.
Later in the week, while I was attempting to delete four spam items, I
was left completely horrified when the results of the operation reported
that the remaining 10% -- every single plugin remaining in the database
-- had been purged. All that remained was a year-old backup. Of course,
I realize that this is a dreadful outcome, and I take full
responsibility for it. If it helps, I am very receptive to hate mail and
tweets reprimanding me for being irresponsible, unprofessional, or just
stupid. At this juncture, we were left with two choices.

-   Keep on kicking the can down the road: Restore from the old backup,
    losing a lot of data anyway, and have authors go through the
    painstaking process of re-uploading their plugins, even though the
    site was slated to be deprecated entirely anyway.
-   Use this glaring mistake as the impetus to hunker down, cleave from
    the past, and finally implement the site we've talked about for so
    long.

We've chosen the latter.

Nuts And Bolts
--------------

Over the past few days, we've started converting our plans into action,
building out an infrastructure that's backed by GitHub. There are two
requirements for listing a plugin on the new site: ![Success Kid is
helping out as
well](http://blog.jquery.com/wp-content/uploads/2011/12/pluginsitebaby-300x300.png "Success Kid is helping out as well")

-   A valid
    [package.json](https://github.com/jquery/plugins.jquery.com/blob/master/docs/package.md) file
    We've followed the lead of
    [CommonJS](http://wiki.commonjs.org/wiki/Packages/1.0)
    and [npm](https://github.com/isaacs/npm/blob/master/package.json)
    and created a schema for specifying dependencies, delivery, and
    other metadata of jQuery plugins. While the format is largely
    similar to those other projects, we've had to make some minor tweaks
    to account for some plugin-specific details.
-   At least one versioned release This means having
    [tagged](http://learn.github.com/p/tagging.html) your release
    point(s) with a valid semantic version number
    ([semver](http://semver.org/)) string.

We've pared down the submission and maintenance process to a single,
one-time step: adding a
[post-receive hook](http://help.github.com/post-receive-hooks/) to your
plugin's GitHub repository. Assuming your plugin meets the guidelines, a
page will be created on the plugins site to present your usage and
download information. We'll keep track of new releases as you push them.

In The Interim
--------------

We recognize that the old site was still serving as an regular resource
for a lot of people, especially newer jQuery users, who simply valued
the existence of a central browsing location, despite its flaws. Though
many experienced users had moved on to other sites, or relied on
relationships with trusted authors and word of mouth, these can take
time to develop. Until we're able to launch the new system, we're happy
to direct you to several other directories and people who can help pick
up the slack:

-   [jQuery List](http://jquerylist.com)
-   [jQuery Style](http://jquerystyle.com)
-   [Mike Alsup](http://jquery.malsup.com/)
-   [Ben Alman](http://github.com/cowboy)
-   [Matteo Bicocchi](http://pupunzi.com/#mb.components/components.html)
-   [Jörn Zaefferer](http://bassistance.de/jquery-plugins/)

If, in the process of searching these or any other directories, you are
directed back to the current site at plugins.jquery.com, typically a
quick search for the author's name and the plugin name will yield an
alternative site where it was hosted. In addition, [DailyJS just did a
useful roundup
of alternatives](http://dailyjs.com/2011/12/06/jquery-roundup/) that
goes into more detail.

Next Steps For Plugin Authors
-----------------------------

If you're a plugin developer who wants to make sure your plugins will be
ready to go on day one (or even beforehand), you'll want to make sure
your plugins are up on GitHub, and then you'll want to get started on
creating your
[package.json](https://github.com/jquery/plugins.jquery.com/blob/master/docs/package.md)
files and making sure your versions are appropriately tagged. If you
aren't already familiar with Git and GitHub, then this is probably a
very good time for you to take the plunge and [get
started](http://help.github.com/). If you prefer another SCM system, you
can look into setting up a mirror to git from
[svn](http://progit.org/book/ch8-1.html) or
[hg](http://hg-git.github.com/), or other project hosting sites, like
[bitbucket](http://bitbucket.org) or [gitorious](http://gitorious.org).
If you don't develop your plugins as open source, or you don't use any
source control at all, we will not be able to accomodate you at this
time.

How Can I Help?
---------------

Though the site is still a work in progress, you can track progress and
even set up your own local development right now at
[github.com/jquery/plugins.jquery.com/](http://github.com/jquery/plugins.jquery.com/).
We're still working on getting a public staging environment together.
Though the site is essentially "powered by" GitHub, there are obviously
a number of moving parts in play. The site will actually be served from
inside of WordPress, which is populated with the contents of the indexed
plugins using a node.js tool. There are still many kinks to be ironed
out, so if that sounds like a stack you want to jump on, please join
us over at [the repo](http://github.com/jquery/plugins.jquery.com/).
We'll be using GitHub Issues for all feature requests, bugs, and
discussion. While we've put a great deal of thought into putting
together our `package.json` schema, it's still a living document, and if
you have questions or comments on why it is the way that it is, head on
over to
[this issue](https://github.com/jquery/plugins.jquery.com/issues/2).

Errata
------

In an ideal world, this certainly wouldn't have happened exactly as it
did. Sadly, it did. We hope you'll accept our apologies for the many
ways this transition might make your job harder, give you some extra
work you weren't expecting, or just plain leave a bad taste in your
mouth. If you are able to forgive us, bear with us, and maybe even lend
a hand, we're confident we'll be able to deliver the modern, useful
plugins site the community deserves.

TL;DR
-----

So that was a lot of words, here's the takeaway.

-   We'd been planning on replacing the original, spam-ridden plugin
    site for quite some time
-   In the process of deleting on the spam, all the plugins were deleted
    and we didn't have a recent backup
-   Instead of burning cycles keeping the old site on life support, we
    decided to make a clean break and kick development on the new site
    into high gear.
-   The new site is powered by GitHub and a [package manifest for
    plugins](https://github.com/jquery/plugins.jquery.com/blob/master/docs/package.md)
-   Plugins from the old site were never going to be automatically
    imported into the new one.
-   The repo is at
    [github.com/jquery/plugins.jquery.com](http://github.com/jquery/plugins.jquery.com)
-   We are very sorry, but also very excited!

