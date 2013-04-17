**Welcome Digg users!** You may be interested in the full [jQuery
1.3](http://docs.jquery.com/Release:jQuery%201.3) release, which just
happened on the 14th. Enjoy!

* * * * *

This is a bug fix release for [jQuery
1.3](http://docs.jquery.com/Release:jQuery%201.3). You can view the full
list of what was fixed on the [bug
tracker](http://dev.jquery.com/report/30). There are no significant
changes in 1.3.1 from 1.3 other than straight bug fixes. If you are
still using jQuery 1.2.6, and looking to upgrade, please upgrade
directly to this release. **Downloading**

-   [jQuery
    Minified](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.3.1.min.js)
    (18kb with
    [Gzipping](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery
    Regular](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.3.1.js)
    (114kb)

A copy of jQuery 1.3.1 is also available on [Google's
CDN](http://code.google.com/apis/ajaxlibs/documentation/index.html#jquery)
(feel free to copy the URL directly into your site):

-   [jQuery
    Minified](http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js)
-   [jQuery
    Regular](http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.js)

If you wish to checkout the full release from the [Subversion
repository](http://dev.jquery.com/browser), you can do so by following
[the following instructions](Downloading_jQuery#Subversion_.28SVN.29)
and checking out the source from the following location:
`svn co http://jqueryjs.googlecode.com/svn/tags/1.3.1` **A couple quick
housekeeping notes:** Some noted in the release notes for 1.3 that we
missed testing on Firefox 2, even though we still support it. This was a
mistake on our part: We still support Firefox 2 and test on it prior to
releases. You can see the full test suite run below.

[![jQuery
1.3.1](http://farm4.static.flickr.com/3375/3216876984_b7ecc2092b_m.jpg)](http://www.flickr.com/photos/jeresig/3216876984/ "jQuery 1.3.1 by John Resig, on Flickr")

It was also noted that Safari 2 didn't show up in the list of browsers
that we tested against prior to the 1.3 release. This is correct - we
are phasing out support for Safari 2 in jQuery. Considering that Safari
2 shows [no appreciable market
share](http://marketshare.hitslink.com/browser-market-share.aspx?qprid=2)
and has been superseded by 3 separate Safari releases (3.0, 3.1, and
3.2) we no longer see a need for significant testing against that
release. Finally, a few users noticed that we no longer provide a
"packed" version of jQuery (a version of jQuery run through [Dean
Edwards' Packer](http://dean.edwards.name/packer/) with Base62 encoding
turned on). We did this for a couple reasons:

-   Packed scripts are significantly harder to debug (even harder than
    minifed scripts).
-   Packed scripts aren't able to run on all platforms without issue
    (such as Adobe AIR and Caja-capable environments).
-   But most importantly: Packed scripts are slower for the user than
    what you would get from using just minification. This may seem
    counter-intuitive since a packed script's file size is smaller than
    a minified script but the final load time ends up being much higher
    (due to the decompression step it must go through). We have [some
    data](http://ejohn.org/blog/library-loading-speed/) regarding the
    loading performance of minified scripts vs. packed scripts, for
    those that are interested.

The minifed copy of jQuery that we provide, run through the [YUI
Compressor](http://developer.yahoo.com/yui/compressor/), should be the
optimal form of jQuery to use in a production environment (served using
gzipping, if possible).
