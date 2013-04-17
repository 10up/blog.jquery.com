The jQuery UI team has been working for over 9 months on the 1.6 release
and during this long process, we've deeply re-factored every plugin and
introduced a very big shift in how we write markup and styles with the
new jQuery UI CSS Framework. Also during that time, the jQuery core
library released the new 1.3 version which incorporates a lot of
improvements that we wanted to leverage.

### We hear ya

We clearly have heard the confusion as these fairly large changes were
made between release candidates in the 1.6 development cycle (post
1.6rc2). Based on feedback from the jQuery UI community, we want to
address the confusion around compatibility between jQuery 1.2.6 and 1.3
and the jQuery UI library by creating two very distinct releases in the
next few weeks:

### 1.6rc6 plus fixes will become 1.7 (compatible with jQuery 1.3+)

What we are currently calling jQuery UI 1.6rc6 is going to be released
as jQuery UI 1.7. This code is built from the ground up to take full
advantage of jQuery 1.3 and the new jQuery UI CSS Framework and is
different enough to warrant a dot release. After a lot of analysis,
we've decided that compatibility with both 1.2.6 and 1.3 is not feasible
in a single UI release while still having a maintainable and lean
codebase, so this version will not be compatible with jQuery 1.2.6 or
earlier.

### 1.6rc2 plus fixes will become 1.6 (compatible with jQuery 1.2.6)

For all those folks still actively using jQuery 1.2.6, we want to
provide a legacy release of the jQuery UI library based on 1.6rc2 that
ports over as many bug fixes and improvements as possible from more
recent code updates to provide a clear, stable foundation that will be
fully compatible with jQuery 1.2.6. To avoid any confusion, this version
will be called jQuery UI 1.6 final. Since this will be a legacy release,
the team will not be actively developing this code once it is finalized.
Also, this release will not contain any changes related to the new
jQuery UI CSS Framework. It will have the same theming support as jQuery
UI 1.5.3. We understand that this is a fairly large change and welcome
input from the community on how to make the upgrade as smooth as we
possibly can. A complete upgrade guide will be posted shortly to guide
you on a plugin-by-plugin basis to help ease the transition.

### Current Release Status

We received a lot of great help testing the latest release candidate,
1.6rc6, and are fixing the final few issues, so that it can be released
as soon as it's ready. A current summary status of the release can
always be found on the front page of our Dev and Planning wiki (
http://wiki.jqueryui.com/ ). We are very excited about the quality of
this new jQuery UI release because it will serve as a solid foundation
that will give us a stable API and let us release more frequently
throughout the year with updates and new widgets.

### Weekly releases coming

Starting in March we will switch to a weekly release mode. Each week we
will alternate between pushing a stable bug fix release (1.7.1, 1.7.2,
etc.) and a preview release (alpha, beta, rc) including new plugins and
functionality. So each branch will receive an update at most every two
weeks. If we need an additional release in-between or we need to add an
extra beta or rc, we will do so on a week-to-week basis, adjusting the
rest of the roadmap accordingly. Our goal is to work toward a 6-8 week
release cycle (2-3 weeks alpha, 2-3 weeks beta, 1-2 weeks rc, then
final).

### Download builder update

We have pushed a complete update to the Download Builder. It is now
fully integrated with ThemeRoller so that you can download a customized
jQuery UI library zip including a pre-built or custom theme. We've also
fixed up some issues that existed with downloading an invalid zip file
in IE and also 1.5.3 minified files. Thank you for your help and support
We want to thank the community for it's support and encourage your
participation in helping us to develop the best UI library on the
planet. If you are a developer who is interested in helping us with bug
fixing, please feel free to post a message on the ui-development group (
http://groups.google.com/group/jquery-ui-dev ) and ask how you can help
out.
