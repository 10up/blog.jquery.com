Right on schedule jQuery 1.5 is ready for consumption! This release has
been a long time coming and has been a real team effort. Please take
this opportunity to thank members of the [jQuery
Team](http://jquery.org/team) and the [jQuery bug triage
team](http://blog.jquery.com/2010/11/23/team-spotlight-the-jquery-bug-triage-team/)
for their help in getting this release out the door.

### Downloading

As usual, we provide two copies of jQuery, one minified and one
uncompressed (for debugging or reading).

-   [jQuery Minified](http://code.jquery.com/jquery-1.5.min.js) (29kb
    [Gzipped](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery Regular](http://code.jquery.com/jquery-1.5.js) (207kb)

You can feel free to include the above URLs directly into your site and
you will get the full performance benefits of a quickly-loading jQuery.
Additionally you can also load the URLs directly from Microsoft and
Google's CDNs: Microsoft CDN:
[http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js](http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js)
Google CDN:
[https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js](https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js)

### About The Release

This release saw [83 fixed
bugs](http://bugs.jquery.com/query?status=closed&resolution=fixed&milestone=1.5&group=resolution&order=priority)
and a total of [460 closed
tickets](http://bugs.jquery.com/milestone/1.5). The test suite (which
now has 4437 tests) passes in all the browsers that jQuery supports -
and more. We verified the suite passing all of the following browsers:

-   Safari 5.0.3 / 4.0.5 / 3.2.3 / 3.1.2
-   Opera 11.01 / 11 / 10.63 / 10.54 / 10.10 / 9.64
-   IE 6 / 7 / 8
-   Firefox 4.0b9 / 3.6.13 / 3.5.11 / 3.0.19 / 2.0.0.20
-   Chrome 8.0.552.215 / 8.0.552.237 / 9.0.597.67 Beta / 10.0.642.2 Dev

Additionally all of the API documentation for the release can be found
on the API site: [jQuery 1.5 API
Documentation](http://api.jquery.com/category/version/1.5/). A full
schedule of our upcoming releases can be found on our
[roadmap](http://docs.jquery.com/Roadmap). Right now we're planning on
doing major jQuery releases more frequently (likely a couple times a
year, rather than once per year). So, without further ado, what's
changed in jQuery 1.5?

Ajax Rewrite
------------

Easily the largest change in this release is the complete rewrite of the
Ajax module in jQuery. This rewrite helps to fix a lot of gaps that
existed in the old Ajax system along with providing a higher level of
consistency across the API. Perhaps the largest change is that a call to
[jQuery.ajax](http://api.jquery.com/jQuery.ajax/) (or jQuery.get,
jQuery.post, etc.) now returns a jqXHR object that provides consistency
to the XMLHttpRequest object across platforms (and allows you to perform
previously-impossible tasks like aborting JSONP requests). More details
concerning the new jqXHR object can be found in the [jQuery.ajax()
documentation](http://api.jquery.com/jQuery.ajax/). In addition to a
more consistent API the Ajax system is now much more extensible -
allowing you to attach all sort of data handlers, filters, and
transports. These changes should open up a whole realm of new Ajax
plugins that can take advantage of this extensibility. More information
can be found in the [Extending
Ajax](http://api.jquery.com/extending-ajax/) documentation. The team is
actively soliciting feedback on the Ajax extensibility API and if you
have any feedback please feel free to direct it to the [Developing
jQuery Forum](http://forum.jquery.com/developing-jquery-core).

Deferred Objects
----------------

Along with the rewrite of the Ajax module a new feature was introduced
which was also made publicly available: [Deferred
Objects](http://api.jquery.com/category/deferred-object/). This API
allows you to work with return values that may not be immediately
present (such as the return result from an asynchronous Ajax request).
Additionally it gives you the ability to attach multiple event handlers
(something that wasn't previously possible in the Ajax API). For
example, the following is now possible with jQuery's internal Ajax API:

~~~~ {.js}
// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
var jqxhr = $.ajax({ url: "example.php" })
    .success(function() { alert("success"); })
    .error(function() { alert("error"); })
    .complete(function() { alert("complete"); });

// perform other work here ...

// Set another completion function for the request above
jqxhr.complete(function(){ alert("second complete"); });
~~~~

Additionally you can make your own deferred objects using the exposed
jQuery.Deferred. More information about this API can be found in the
[Deferred Object](http://api.jquery.com/category/deferred-object/)
documentation. Eric Hynds has written up a good tutorial on [Using
Deferreds in jQuery
1.5](http://www.erichynds.com/jquery/using-deferreds-in-jquery/).

[jQuery.sub()](http://api.jquery.com/jQuery.sub/)
-------------------------------------------------

jQuery now exposes a new way in which you can create and modify a clone
of jQuery - all while still taking advantage of the full jQuery API. For
example, you could use it to override native jQuery methods without
actually affecting the methods that other users would interact with - or
even create encapsulated APIs for your plugins that avoid namespace
collision. Here is a sample of adding a method to a jQuery sub so that
it isn't exposed externally:

      (function(){
        var sub$ = jQuery.sub();

        sub$.fn.myCustomMethod = function(){
          return 'just for me';
        };

        sub$(document).ready(function() {
          sub$('body').myCustomMethod() // 'just for me'
        });
      })();

      typeof jQuery('body').myCustomMethod // undefined

More information about [jQuery.sub()](http://api.jquery.com/jQuery.sub/)
can be found in the API documentation. Note that if you're looking to
use this for plugin development, you should first strongly consider
using something like the jQuery UI widget factory which manages both
state and plugin sub-methods. [Some examples of using the jQuery UI
widget
factory](http://blog.nemikor.com/2010/05/15/building-stateful-jquery-plugins/)
to build a plugin.

Adjacent Traversal Performance
------------------------------

In this release we've also been able to improve the performance of some
commonly-used traversal methods: .children(), .prev(), and .next(). The
speed-ups that we're seeing are quite substantial (potentially many many
times faster, depending upon the browser). [![.children() Performance in
jQuery
1.5](http://farm6.static.flickr.com/5260/5404543235_dcdd4cf714.jpg)](http://www.flickr.com/photos/jeresig/5404543235/ ".children() Performance in jQuery 1.5 by John Resig, on Flickr")
[![.prev() Performance in jQuery
1.5](http://farm6.static.flickr.com/5099/5404543659_82b480e578.jpg)](http://www.flickr.com/photos/jeresig/5404543659/ ".prev() Performance in jQuery 1.5 by John Resig, on Flickr")
[![.next() Performance in jQuery
1.5](http://farm6.static.flickr.com/5012/5404544105_66670184f3.jpg)](http://www.flickr.com/photos/jeresig/5404544105/ ".next() Performance in jQuery 1.5 by John Resig, on Flickr")
[Performance Test Case and Raw
Numbers](http://jsperf.com/jquery-15-unique-traversal)

Build System
------------

Finally, we've made some changes to jQuery's internal build system.
We've worked to standardize all of our build process upon the excellent
server-side JavaScript environment: [NodeJS](http://nodejs.org/). We
especially appreciate this as we're able to reduce our dependency upon
legacy Java/Rhino systems and focus more squarely on up-and-coming
JavaScript environments. Additionally with this switch we've moved to
using [UglifyJS](https://github.com/mishoo/UglifyJS) from the Google
Closure Compiler. We've seen some solid file size improvements while
using it so we're quite pleased with the switch.

Thanks!
-------

As always we want to thank everyone that helped with this release -
without your contributions this release would not have been possible. If
you have any questions or spot any bugs please submit your issues to the
[jQuery bug tracker](http://bugs.jquery.com/).
