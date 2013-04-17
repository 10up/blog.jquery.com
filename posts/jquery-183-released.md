Woo hoo, Thanksgiving arrived early this year! jQuery 1.8.3 is available
for download. You can get it here:

-   [http://code.jquery.com/jquery-1.8.3.min.js](http://code.jquery.com/jquery-1.8.3.min.js)
    (compressed, for production)
-   [http://code.jquery.com/jquery-1.8.3.js](http://code.jquery.com/jquery-1.8.3.js)
    (uncompressed, for debugging)

We've notified the Google and Microsoft CDNs as well; we trust they will
endeavor to post these files *tout de suite*. The complete change log
for jQuery 1.8.3 is below. It's a rather modest list, but we did nail a
few important bugs and regressions.

The team is already hard at work on jQuery 1.9 and would like to squash
as many bugs as possible. To report a problem, please [post a bug
report](http://bugs.jquery.com) and be sure to include a test case from
[jsfiddle.net](http://jsfiddle.net) or [jsbin.com](http://jsbin.com).
Also try our work-in-progress build at
[http://code.jquery.com/jquery-git.js](http://code.jquery.com/jquery-git.js)
to see if it's already fixed.

Many thanks to the patch contributors for this version; ye shall know
them by their GitHub handles: gnarf37, timmywil, gibson042, rwldrn,
joyvuu-dave, jaubourg, staabm, and sindresorhus. In addition, we thank
all the community members who took the time to contribute quality bug
reports with test cases. Your initial groundwork makes it possible for
us to find and fix bugs.

jQuery 1.8.3 Change Log
-----------------------

### Ajax

-   [\#12583](http://bugs.jquery.com/ticket/12583): IE8 HTML bug
    (Chinese translation)
-   [\#12635](http://bugs.jquery.com/ticket/12635): jquery 1.8.2 fails
    ajax calls in IE9 because it assumes cross domain when default port
    is in ajax url

### Attributes

-   [\#10943](http://bugs.jquery.com/ticket/10943): JQuery 1.7.1 does
    not properly set tabindex property on cloned element in IE7

### Core

-   [\#12690](http://bugs.jquery.com/ticket/12690): Minimum JS File
    Contains non-ASCII Character

### Css

-   [\#10227](http://bugs.jquery.com/ticket/10227): \$('body').show()
    does'nt work if body style is set to display:none
-   [\#12537](http://bugs.jquery.com/ticket/12537):
    element.css('filter') returns undefined in IE9

### Deferred

-   [\#12665](http://bugs.jquery.com/ticket/12665): Callbacks objects
    with "unique" flag will iterate over a function's methods when it is
    added a second time

### Effects

-   [\#8685](http://bugs.jquery.com/ticket/8685): Animations should keep
    track of animation state in order to properly address stacked
    animations
-   [\#12497](http://bugs.jquery.com/ticket/12497): jQuery 1.8.1
    transitions crashing android 2.3.4 browser
-   [\#12837](http://bugs.jquery.com/ticket/12837): All animations break
    after zooming a lightbox on the iPad

### Selector

-   [\#12643](http://bugs.jquery.com/ticket/12643): Upgrade from 1.3.2
    to 1.8.2 gives an Uncaught TypeError
-   [\#12648](http://bugs.jquery.com/ticket/12648): Can not correctly
    detect focus for DIVs with contenteditable in Chrome and Safari

### Support

-   [\#12357](http://bugs.jquery.com/ticket/12357): jQuery 1.8.0 Not
    parseable by XUL Runner Applications

