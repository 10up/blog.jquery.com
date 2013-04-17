[ThickBox](http://jquery.com/demo/thickbox/), a Lightbox-like modal
window framework for the browser written by [Cody
Lindley](http://codylindley.com/) that runs on top of the [jQuery
library](http://jquery.com), has been given a bit of an upgrade. The new
2.0 release adds greybox functionality (iFramed content), image set
support (similar to the [Lightbox
2.0](http://www.huddletogether.com/projects/lightbox2/) functionality),
and is now running on jQuery 1.0 among other things. You might be asking
yourself:

> "Why wouldn't I just use Lightbox 2.0 if ThickBox 2.0 does the same
> thing?"

The answer is simple. Uncompressed, the jQuery library and the ThickBox
add-on script come in at **only 51kb** (and at just 27kb if jQuery is
compressed), whereas the Lightbox Javascript files alone are **over
100kb** combined. Think about the amount of bandwidth saved and the
increased loading time for the end user. Won't someone please think of
the ~~children~~ end user? Another advantage that ThickBox has over
Lightbox is that images are **automatically resized** if the browser
window is too small to display them full size without scrolling. Also,
clicking outside of the modal window closes it in ThickBox, whereas in
Lightbox, a "close" button *must* be clicked to remove it from the
screen. Visit the [ThickBox demo site](http://jquery.com/demo/thickbox/)
for instructions on installation, demos of different techniques
(including iFramed content and AJAX content), and support information.
Currently supported and tested browsers include Internet Explorer 6 and
7, Firefox 1.5+ on both OS X and Windows, Opera 9+ and Safari 1.3.2 and
2.0.3., though it should work on any modern browser. ThickBox is
protected by the [MIT
License](http://www.opensource.org/licenses/mit-license.php).
