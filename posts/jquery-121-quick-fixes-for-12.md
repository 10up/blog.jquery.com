[jQuery 1.2.1](http://docs.jquery.com/Release:jQuery_1.2.1) is a bug fix
release for [jQuery
1.2](http://docs.jquery.com/Release:jQuery_1.2 "http://docs.jquery.com/Release:jQuery 1.2").
You can view the full list of what was fixed on the [bug
tracker](http://dev.jquery.com/report/17 "http://dev.jquery.com/report/17").

Downloading
-----------

**[jQuery 1.2.1](http://docs.jquery.com/Release:jQuery_1.2.1):**

-   [jQuery
    Minified](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.min.js "http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.min.js")
    (14kb with
    [Gzipping](http://www.julienlecomte.net/blog/2007/08/21/gzip-your-minified-javascript-files/ "http://www.julienlecomte.net/blog/2007/08/21/gzip-your-minified-javascript-files/"))
-   [jQuery
    Packed](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.pack.js "http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.pack.js")
    (26kb)
-   [jQuery
    Regular](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.js "http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.js")
    (77kb)

If you wish to checkout the full release from the [Subversion
repository](http://dev.jquery.com/browser "http://dev.jquery.com/browser"),
you can do so by following [the following
instructions](http://docs.jquery.com/Downloading_jQuery#Subversion_.28SVN.29 "Downloading jQuery")
and checking out the source from the following location:

     svn co http://jqueryjs.googlecode.com/svn/tags/1.2.1

Important Changes
-----------------

### Relative Animations

There was a serious error in the API for the new relative animations
that caused a conflict with existing animation styles. To resolve this,
in order to do a relative animation, you must now use the following
syntax:

     $(...).animate({ height: "+=50px", width: "-=20%", fontSize: "+=2em" });

With += meaning "Add to the current position" and -= meaning "Take away
from the current position".

### .[eq](http://docs.jquery.com/Core/eq "Core/eq")()

Due to some very-persuasive arguments, and a great deal of
reconsideration, .[eq](http://docs.jquery.com/Core/eq "Core/eq")() has
been brought back. A great number of plugins rely on this single method
- and the alternative provided by
.[slice](http://docs.jquery.com/Traversing/slice "Traversing/slice")()
simply wasn't as elegant a solution as what was originally provided.
