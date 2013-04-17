Two new improvements have just gone into place to help improve the
quality of the jQuery site. **The [jQuery Mailing
List](http://groups.google.com/group/jquery-en) is now hosted with
[Google Groups](http://groups.google.com/).** This move is going to help
provide huge increases in the overall speed, and quality, of the jQuery
mailing list. At the time of the move we were sending out,
approximately, 4.5m emails per month. Unfortunately, the list was prone
to folding under the high server load; and the amount of effort required
to keep it performing nicely was simply too much to ignore. The best
feature of the [new mailing
list](http://groups.google.com/group/jquery-en) (besides the increased
reliability) is the addition of Google Groups' wonderful web-based
interface. I hope that everyone who's asked for a forum can now be
content knowing that they can browse the jQuery list, and easily reply
to posts, without ever having to subscribe to incoming messages.
**Note:** If you were a member of the old mailing list, you should be
completely moved to the new one. All old messages and users were moved
over, and everything should be intact. Complete instructions on how to
use the main discussion mailing list, and all the other jQuery mailing
lists, can be found on here: [jQuery Mailing
Lists](http://docs.jquery.com/Discussion). **All code is now hosted with
[Amazon S3](http://aws.amazon.com/s3).** As a project, we've never
discouraged first time users from using the [jQuery Source
Code](http://docs.jquery.com/Downloading_jQuery) straight from their
personal site; it helps to get new users started with development,
without having to worry about keeping their code up to date. Needless to
say, the number of users who've directly used the jQuery source directly
from the jQuery site has increased dramatically in recent months (with
some large-scale sites directly pulling from jQuery.com). This still
isn't a huge problem, but it's something that the web server hosting
jQuery.com shouldn't have to worry about. For that reason, all jQuery
source code has been moved to Amazon S3, for example:
[http://code.jquery.com/jquery-latest.js](http://code.jquery.com/jquery-latest.js).
The jQuery site has been using the code directly from Amazon S3 for over
two weeks now and I've been very pleased with the results. The number of
files requested has dropped dramatically, giving the web server more
time to serve the normal jQuery web pages. **Note:** All old requests to
http://jquery.com/src/... are being redirected to the
http://code.jquery.com/... sub-domain (which is managed by Amazon). A
nice thing about this move is that we can soon start providing dedicated
hosting for plugins. Once we figure out the logistics of the plugin
repository (which is currently under development), we'll be sure to make
that a priority. Additionally, static jQuery.com files (like
stylesheets, images, and JavaScript files) are being hosted directly
from Amazon S3 too (static.jquery.com). This is also helping to
alleviate any strain on the server that may be present. As always, if
you get any errors on the jQuery site, please be sure to send a message
to the [mailing list](http://groups.google.com/group/jquery-en), where
we can find it and help to solve the problem. **1.1.3 News** All of
these site issues have delayed jQuery 1.1.3 slightly, but now that
they're out of the way we should be back on track for having a 1.1.3
alpha out by the end of this week. This update is going to include
significant updates to the performance of jQuery animations and huge
speed increases to the selector engine; as well as fixing over 20
outstanding bugs. We hope to have an update concerning all of this,
shortly.
