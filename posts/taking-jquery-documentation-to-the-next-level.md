jQuery 1.0 solidified a lot of the framework, but it also introduced
some neat structural changes. First up, the framework now builds via
make files, so anybody can check out [jQuery from
subversion](http://proj.jquery.com/dev/svn/) and compile either the
packed or unpacked jquery.js for use in their website. Second of all,
jQuery now includes [built-in testing](http://jquery.com/test/), and the
make file can build the test suite, which the user can then run in his
favorite browser to make sure that the latest checked in version is up
to snuff. There aren't a whole lot of test cases written so far, but
that should change moving forward (primarily because it's so easy to add
them). Most important for me, however, has been the inclusion of inline
documentation. Beginning with version 1.0 of jQuery, [the
documentation](http://jquery.com/api/) of the framework is included in
the source files themselves, and John Resig, jQuery's maintainer, has
written a parser that will spit out [an XML
version](http://jquery.com/api/data/jquery-docs-xml.xml) of the
documentation as part of the makefile (a simple `make docs` will build
the documentation).

Visual jQuery
-------------

In the run-up to 1.0, I converted the old [Visual
jQuery](http://www.visualjquery.com) site from a Rails-based solution,
that required manual entry of functions, into a site that loads the
documentation on the fly as it's committed to the trunk. For the
less-technical, that means that Visual jQuery will now be updated pretty
much as soon as jQuery is updated. Lots of people have found the visual
documentation convenient and easy to use, and the new version strives to
continue that ease of use. Thanks to John, the file that his parser
spits out is very well optimized for sites like [Visual
jQuery](http://www.visualjquery.com/). He has really made good
documentation a priority this time around. And from my perspective, a
major part of what sets jQuery apart from the competition is its
emphasis on providing readable, good documentation. I'm happy to say
that jQuery has made the right choice here. Within the next couple of
days, John will have fully documented all jQuery functions (there are a
few still to go), and the visual documentation will fully represent the
[jQuery API](http://jquery.com/api/).

Visual jQuery Magazine
----------------------

[![The
Magazine](http://blog.jquery.com/wp-content/uploads/2006/09/Issue1.jpg)](http://blog.jquery.com/wp-content/uploads/2006/09/Issue1.jpg)
With that, I have a couple of announcements.

1.  Visual jQuery is going to get a major new feature sometime in the
    next week of two. Specifically, users will have the ability to
    filter functions (by name and description) through a live-search
    box. That capability will make it easier to find specific functions.
2.  Visual jQuery is launching a monthly online magazine. It will be
    released in PDF format, and will be available free of charge. The
    first issue will include an interview with John Resig, our first in
    a series of articles about the newest and greatest jQuery plugins,
    and a visual look at the jQuery Object, the centerpiece of the
    entire jQuery framework. The Magazine will be released the third
    Wednesday of every month, so Issue 1 of the Magazine, the September
    2006 issue, will be released on September 20.

As always, check out [VisualjQuery.com](http://www.visualjquery.com) for
the latest Visual jQuery Documentation and further announcements about
the Magazine.
