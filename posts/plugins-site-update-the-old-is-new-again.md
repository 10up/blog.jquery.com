We've gotten a lot of feedback since last week's announcement about the
plugins site's unfortunate tumble into oblivion, and I'd like to address
a few of the most important concerns that have surfaced since.

"Could you make the old backup available for posterity?"
--------------------------------------------------------

Yes. We can — and have. Over the weekend, we restored the most recent
backup we had, and the original site is now living at
[archive.plugins.jquery.com](http://archive.plugins.jquery.com); you
should be able to browse through everything that's there to your heart's
content. We also applied the most recent user information we had, so if
you had an account on the old site at any point in the last year, it
should still work. However, the site is closed to new user
registrations. If you **really** need a new account, please [get in
touch with me personally](http://twitter.com/ajpiano) and I can get that
straightened out for you. We've also set up a redirect, so that if you
should encounter any links to plugins.jquery.com in your browsing,
you'll (hopefully) end up at the corresponding page in the archive.

Just get a backup from the Wayback Machine!
-------------------------------------------

While the Internet Archive has cached versions of content that was
updated more recently than last October, we just don't have the
people-power to re-create the lost posts manually in the new archive
site. If you have an account, you can feel free to add "new" or old
plugins, or update existing ones, should you desire to. However, this
archive will not be indexed by search engines.

If you hate CMS-es so much, what's with WordPress?
--------------------------------------------------

We're in the middle of a network-wide redesign, and WordPress offers us
a valuable set of tools when it comes to theming, searching, and serving
a group of sites. Our new motto, however, is **pull requests, not
passwords**; we're implementing theming, documentation, plugins, and
more in such a way that contribution will not actually require an
account on our CMS at all. As I outlined in the initial post, the plugin
submission process will only involve adding a post-receive hook to your
repository. In the event of a similar catastrophe, we're made sure we'll
be able to replay the entire plugin contribution history and get the
site back up to speed right away. Our goal is to leverage the WordPress
features we find useful without it serving as a barrier to entry or as
the canonical warehouse of content. If you are of the mind that
WordPress is always a bad idea, no matter what, no matter how, you're
certainly entitled to that opinion, but at this point, it's not
particularly beneficial to the conversation.

Git(Hub) is hard
----------------

The new plugins site will serve as an index of plugins, with a simple
"download" button right on each plugin's page. You will **not** have to
just browse around GitHub looking for jQuery plugins. If you don't know
git and only ever want to download jQuery plugins, you don't have to
learn it. However, if you want to submit plugins, you'll have to be
using some sort of source control that you can at least mirror in git.
This is by design: it can be really easy to build a jQuery plugin, but
that doesn't mean it's necessarily fit for public consumption. Requiring
the use of source control and `package.json` are passive mechanisms that
will help ensure that plugins which proliferate are authored by
developers who have met a reasonable baseline (and aren't selling
batteries). We're only targeting GitHub support for launch, but we'd
[like to add support for other services as
well](https://github.com/jquery/plugins.jquery.com/issues/4). We are
actively avoiding the use of GitHub-specific features that would force
us to limit the site to GithHub users permanently.

It's A Conspiracy!
------------------

Some have called into question the veracity of my account, and that's
understandable, given the timing and circumstances. But believe me, the
last thing I wanted to do after spending a day manually pruning spam
from the directory was turn around and cause a gigantic headache for
thousands of people, including myself and my colleagues. I hope the
re-launching of the last backup at least partially allays these
concerns. Additionally, we're starting off with GitHub simply because it
has a very broad user base already, and it has been incredibly positive
for us since we shifted to it for development of jQuery Core, UI, and
Mobile. Thanks again for bearing with us during this transition.
