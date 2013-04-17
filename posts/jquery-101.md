The first post-1.0 release is now ready - and (as you would probably
expect) it's a bug fix release. I've been working on fixing up some of
the most pressing 1.0 bugs during the past couple days and I think it's
ready to go. So, without further ado - here's jQuery 1.0.1:

-   [jQuery 1.0.1](http://jquery.com/src/jquery-1.0.1.js)
-   [jQuery 1.0.1
    Compressed](http://jquery.com/src/jquery-1.0.1.pack.js)

I definitely recommend that you upgrade to this release since it'll only
help make your development go easier (I expect that the next few point
releases will be rather feature-lite). Here's what's been fixed in this
release:

-   [Fixed Minor Documentation
    Flaws](http://proj.jquery.com/dev/svn/rev/232/)
-   [Fixed the issue with jQuery not packing correctly for
    Safari.](http://proj.jquery.com/dev/svn/rev/234/)
-   [Fixed some issues with .children() not working
    correctly.](http://proj.jquery.com/dev/svn/rev/237/)
-   [Fixed some issues with .remove() not working
    correctly.](http://proj.jquery.com/dev/svn/rev/238/)
-   [Apparently I accidentally removed :nth-child() -- oops, it's back
    now.](http://proj.jquery.com/dev/svn/rev/239/)
-   [Fixed issues with .val() not working
    properly.](http://proj.jquery.com/dev/svn/rev/240/)
-   [Fixed issue with comment text being included in .text()
    results.](http://proj.jquery.com/dev/svn/rev/241/)
-   [Fixed issue with opacity being set to only 0.9999 for Opera,
    Safari, etc.](http://proj.jquery.com/dev/svn/rev/242/)
-   [Fixed issue with .attr( "disabled", false ) not working
    properly.](http://proj.jquery.com/dev/svn/rev/243/)
-   [Added fix for broken
    \$("../..",foo).](http://proj.jquery.com/dev/svn/rev/244/)
-   [Added fix for stray script element that was left for IE for the
    DOMReady hack.](http://proj.jquery.com/dev/svn/rev/245/)
-   [Added support for the native AJAX object in IE
    7.](http://proj.jquery.com/dev/svn/rev/246/)
-   [Added native support for JSON
    data.](http://proj.jquery.com/dev/svn/rev/247/)

There's a couple more, less-pressing, bug fixes waiting in the queue,
with a bunch of nice enhancements coming up soon (especially for the
[AJAX functions](http://proj.jquery.com/dev/bugs/bug/159/), thanks to
Will Jessup). The next move is going to be putting the finishing touches
on the API documentation and moving proj.jquery.com to jquery.com. As
always, if you spot any bugs, please feel free to post them to the [bug
tracker](http://proj.jquery.com/dev/bugs/new/) (it helps me to keep tabs
on everything, and keep it organized). **Update:** I've applied two hot
fixes to this update, both of which fix big problems with this bug
update. That's what I get for releasing this at some awful time in the
morning. Please make sure you get the latest source from this page.
