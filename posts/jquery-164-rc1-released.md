jQuery 1.6.4 will be released soon, and we need your help with this
release candidate to find any remaining bugs. We're putting out a new
version to address a few last-minute bugs that crept into the 1.6.3
release. With version 1.7 coming next month, we felt it was important to
fix these bugs and finalize the 1.6.x line before making more extensive
changes and feature additions.

Feel free to do your testing by including either one of these files (one
minified and one uncompressed). If you find any important differences
from 1.6.3, please [file a bug](http://bugs.jquery.com/) as soon as
possible and be sure to mention that you're testing against jQuery 1.6.4
RC1. Our preferred venue for test cases is
[jsFiddle](http://jsfiddle.net); you can just use the "jQuery (edge)"
selection there.

-   [jQuery 1.6.4 RC1
    Minified](http://code.jquery.com/jquery-1.6.4rc1.min.js)
-   [jQuery 1.6.4 RC1
    Uncompressed](http://code.jquery.com/jquery-1.6.4rc1.js)

jQuery 1.6.4 RC1 Change Log
---------------------------

The current change log of the 1.6.4 release:

### Data

-   [\#10194](http://bugs.jquery.com/ticket/10194): Data attribute names
    with single dash-surrounded letters cannot be accessed by the
    camel-case name

### Event

-   [\#10208](http://bugs.jquery.com/ticket/10208):
    \$("form").live("submit", fn) not fired from \<button
    type="submit"\> in IE8

### Support

-   [\#10197](http://bugs.jquery.com/ticket/10197): Bug with mime-type
    application/xhtml+xml in jquery 1.6.3

Please do file a bug report with a test case as soon as possible if you
find problems, as described above. Blog comments or Twitter aren't
helpful bug reports!
