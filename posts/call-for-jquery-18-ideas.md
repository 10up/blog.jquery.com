We're ready for our next round of community input, this time for version
1.8! This is your chance to suggest things we can fix, add, change, or
remove in jQuery to make it better.

You can add a suggestion using [this form](http://goo.gl/d1ebE);
whenever possible provide links to a bug report, a page with a detailed
description, or implementations that represent your idea. We'd like to
have all your input by December 5 so we can read and discuss them before
setting the 1.8 roadmap.

Many thanks for the suggestions left on our [earlier blog
post](http://blog.jquery.com/2011/11/08/building-a-slimmer-jquery/)
about how we can improve jQuery by trimming it down. We've gone through
those comments and have a few thoughts about how we can address some of
them in future versions.

### Create a configurable download builder

Several people wondered why we don't have a way to build a file with
just the parts of jQuery you need, since jQuery UI, for example, has
that option. It's not quite the same situation. You know if you are
using, say UI Accordion because you call it directly. You often do not
know if you *or some plugin you include on your page* is using
\$.fn.prepend() or \$.fn.animate(). Whether you are using them may even
depend on parameters you pass to plugins at runtime.

To keep jQuery development manageable and ensure that CDNs can offer a
single file that everyone on the Internet can share and cache
effectively, the team wants to stay with a single file as its primary
offering. Creating a configurable download may improve file size
marginally, but it also complicates documentation, plugin use, and
debugging. That is a lot more work for both you and us.

We're already beginning the efforts to improve modularity by eliminating
unwanted dependencies inside jQuery; many of the deprecated features we
announce will be directed towards removing those dependencies. By laying
that groundwork, others who want to create their own smaller subsets of
jQuery or modular versions should have a much easier job.

However, we believe we can do even better than that, and would like to
offer automated ways for any user to create an optimally minimized file
that includes both application code and just the needed parts of jQuery.
In particular, we are working with the Google Closure Compiler team to
see if we could use its
[ADVANCED\_OPTIMIZATIONS](http://code.google.com/closure/compiler/docs/api-tutorial3.html)
option. We'll have more information on our progress as it develops.

### Wait until version 2.0 before removing things

We're sensitive to breaking all the existing jQuery code out there. That
is why we are deprecating things as early as possible, so that people
have plenty of time to change their code. Just because we deprecate
something today, it does not necessarily mean we'll remove it in the
next version. We believe the list of things actually being removed in
1.8 are minor and unlikely to affect most users.

If our experiments with Closure Compiler pan out, we may even be able to
leave in many deprecated features but they will be automatically removed
if you don't use them and build a custom application file that includes
jQuery. That would be the best of both worlds.

### Remove IE 6, 7, and/or 8 support

This topic comes up constantly, so let's try to put it to bed once and
for all. People tend to greatly overestimate the amount of code in
jQuery that is specifically related to IE. Most of the problems in IE 6
and IE 7 are also present in IE 8, so there is no real size or
complexity benefit to dropping support for the first two as long as that
last one still has appreciable desktop market share and must be
supported. Nobody (including Microsoft itself) likes these Jurassic Park
browsers, but stripping out support for them right now would break web
sites for many users.

That said, we know that older-IE support is not required in some
scenarios such as mobile browsers. We are looking into ways to put as
much of that code as possible into a single clearly marked block so that
it can be easily removed by someone who is willing to create their own
custom jQuery version. It may also be possible to get Closure Compiler's
help with this issue as well. However, we are not sure that will even
provide a significant space savings in gzipped file size, and it won't
offer a performance boost since those code paths aren't taken in other
browsers.

### Remove jQuery.browser

We have documented for nearly two years that we intend to move
jQuery.browser into a plugin, and several people suggested it in the
comments as well. Browser sniffing is not a reliable way to look for
features, we recommend something like
[Modernizr](http://www.modernizr.com/) instead. The regular expressions
used for browser sniffing are large and don't compress well; moving it
to a plugin will ensure that only the people who use it must pay that
size penalty.

### What about your ideas?

Please do take this opportunity to give us your input. The team is
looking forward to reviewing your suggestions. Oh, and don't forget to
try jQuery 1.7.1 soon!
