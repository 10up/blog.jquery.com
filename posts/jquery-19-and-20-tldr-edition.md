It seems that many people had questions and misconceptions about the
[last
post](http://blog.jquery.com/2012/06/28/jquery-core-version-1-9-and-beyond/),
so let's try a short Q&A format to answer some of the comments left
there. **Why is the jQuery core team dropping support for oldIE (IE
6/7/8)?** We're not! jQuery 1.9 will support oldIE when it's released
next year. The jQuery team will continue to support and maintain version
1.9 even after jQuery 2.0 is released. **Why are you making me use
conditional comments to include jQuery?** We're not! You can use jQuery
1.9 for all the browsers we support, from IE6 all the way up to the
latest versions of Chrome, Safari, Opera, or Internet Explorer. **What
happens when jQuery 2.1 is released and adds APIs, will jQuery 1.9
support them?** Can we borrow your crystal ball? jQuery 2.1 isn't likely
to arrive until 2014, so it's hard to say what jQuery 2.1 will look like
as we sit here in the middle of 2012. Our general goal is to keep the
1.x and 2.x lines in sync and add functionality via plugins; see the
[keynote](http://www.slideshare.net/dmethvin/jquery-conference-2012-keynote)
from last week's conference. **How long will you support jQuery 1.9?**
As long as oldIE is a significant factor on the web. It's even possible
that there will be further releases in the 1.x line, but we haven't yet
received the crystal ball requested in the previous question. When
Microsoft drops Windows XP support in April 2014, however, it will put a
hurt on the oldIE installed base. **I still have a lot of IE8 users,
can't you just drop IE6 and IE7?** The oldIE browsers share many of the
same flaws, so it doesn't help to do anything less than remove all three
in jQuery 2.0. If you need oldIE support of any kind, a supported jQuery
1.9 will be right there for you. **My website is in China and 22 percent
of our users are still using IE6!** Seems like some sort of human rights
violation. Oh, and that wasn't a question.
