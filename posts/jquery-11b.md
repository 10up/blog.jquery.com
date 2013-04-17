We're nearly ready for the big 1.1 release, this Sunday - but to hold
you over, here's another set of bug fixes to test upon. The jQuery dev
team has been working long-and-hard to fix all the support requests
that've been coming in this week, and we've been pretty successful in
fixing just about everything that's come across our plate. We'd really
appreciate it if you'd take the time to test the new 1.1b with your
code, and if you spot any bugs, to please [submit
them](http://jquery.com/dev/bugs/new/) to the bug tracker. It's not all
bug fixes, however; we do have something new for you to try: The
**jQuery 1.0 Compatibility Plugin**. As promised, this plugin provides
all of the methods and selectors that were present in the last 1.0.4
release. So, theoretically, you should be able to drop in jQuery 1.1,
and the new compatibility plugin and everything should work seamlessly.
This is how you would use the compatibility plugin with jQuery 1.1:

    <html>
    <head>
      <script src="jquery-1.1.js"></script>
      <script src="jquery.compat-1.0.js"></script>
      <script>
        $(document).ready(function(){
            // Your old 1.0-centric code
        });
      </script>
    </head>
    <body></body>
    </html>

So, while its fully possible to continue using the compatibility plugin
into the foreseeable future, it is highly recommended that you follow
the [upgrade plans](http://blog.jquery.com/2007/01/08/jquery-11a/)
mentioned before. So, again; **please help us test this beta release**!
The more you help test, the better the final 1.1 release is going to be.
Thanks for all your help!

### Download

-   [Download 1.1b Uncompressed](http://jquery.com/src/jquery-1.1b.js)
    (**Testing Only!**)
-   [Download 1.0 Compatibility
    Plugin](http://jquery.com/dev/svn/trunk/plugins/compat-1.0/jquery.compat-1.0.js?format=txt)
    (Makes 1.1 have the same API as 1.0)
-   Please submit new bug reports here: [New Bug
    Report](http://jquery.com/dev/bugs/new/)

**Update:** There's a couple things that I forgot to mention (that's
what I get for posting a release at 4am in the morning):

-   **.filter([".foo", ".bar"]) is now .filter(".foo, .bar")**: A much
    simpler solution - and a fix is already in the compatibility plugin.
-   .We decided to keep **.height() and .width()**. They're back in, as
    they're quite useful.
-   The [documentation](http://docs.jquery.com/) is updated to 1.1b (so
    for those of you who still saw .filter([...]) or didn't see
    .height() and .width() - it's fixed now.)

