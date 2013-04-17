Early last week I released jQuery Color 2.0.0, the wait for a jQuery
Color plugin that gives you an API to work with colors is over.

What's new in jQuery Color 2.0.0?
---------------------------------

jQuery Color has faithfully supported animating colors between two hex
values since the beginning. Many developers asked for access to the
internal functions we had declared to make it all possible. Version 2
now includes an API to create and modify colors, as well as support for
RGBA & HSLA colors and animations. You can read more about the API and
features on the [repository
readme](https://github.com/jquery/jquery-color/blob/2.1.0/README.md).
Any issues should be reported on the [issue
tracker](https://github.com/jquery/jquery-color/issues).

Why jQuery Color 2.1.0 already?
-------------------------------

It's every developers dream to land a major version perfectly on the
first release, but it is rarely achieved. In the last two weeks a few
minor bugs that were left in 2.0.0 have been fixed, and a new function
was added to the API which should help support SVG style properties.

Download jQuery Color 2.1.0
---------------------------

You can download the release from our CDN provided by [Media
Temple](http://mediatemple.net).

-   **jQuery Color 2.1.0:**
    -   [compressed](http://code.jquery.com/color/jquery.color-2.1.0.min.js)
        (2.7k gzipped)
    -   [uncompressed](http://code.jquery.com/color/jquery.color-2.1.0.js)
        (16k)

-   **Extended Color Keywords:**
    -   [compressed](http://code.jquery.com/color/jquery.color.svg-names-2.1.0.min.js)
        (1.2k gzipped)
    -   [uncompressed](http://code.jquery.com/color/jquery.color.svg-names-2.1.0.js)
        (3.5k)

-   **Bundled:**
    -   [compressed](http://code.jquery.com/color/jquery.color.plus-names-2.1.0.min.js)
        (3.9k gzipped)
    -   [uncompressed](http://code.jquery.com/color/jquery.color.plus-names-2.1.0.js)
        (19k)

In order to save on file size, the jQuery Color plugin only supports the
[Basic color keywords](http://www.w3.org/TR/css3-color/#html4) by
default, the Extended Color Keywords are included in a separate file. If
you want to include both, you can also download the bundled version.

Credits
-------

Thanks go out to Dan Heberden, Scott González, Jörn Zaefferer, Mike
Sherov, Brendan Byrd, and Christoffer Sawicki who helped make this
release happen.
