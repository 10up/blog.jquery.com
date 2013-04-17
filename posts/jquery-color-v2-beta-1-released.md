Back in 2007 we released the jQuery Color Plugin, and it has been
providing you with color-based animations ever since. We are now
preparing a second version of this plugin which adds an API, RGBA, HSLA,
and many other features. It is time for a beta! The repository for this
plugin can be found at
[github.com/jquery/jquery-color](https://github.com/jquery/jquery-color/).
 There are
also [uncompressed](http://code.jquery.com/color/jquery.color-2.0b1.js)
and [minified](http://code.jquery.com/color/jquery.color-2.0b1.min.js)
versions available on code.jquery.com.

New Feature Overview:
---------------------

### RGBA

We now support RGBA color values. In browsers that don't support RGBA,
the nearest backgroundColor to the element will be used to calculate a
"blended" approximation of the color. Although this isn't "true" alpha,
it will at least provide the illusion of alpha when dealing with solid
background colors.  This is a screenshot of Opera 10, Chrome 10, Firefox
3.6, and IE 6 all running [this demonstration of alpha
blending](http://jsfiddle.net/gnarf/eEtuH/): ![Opera 10, Chrome 10,
Firefox 3.6, and IE 6 demonstrating alpha
blending](http://farm3.static.flickr.com/2158/5761909657_4343566d77_d.jpg)

### HSLA

We also now support using HSLA color values across all browsers, with
the execption of alpha, which uses the same techniques described above.

### Easy-to-use API

Instead of a simple group of private utility methods, `$.Color()` now
creates a new Color object. The new Color object can be initialized in a
few different ways: color names, hexidecimal color codes, css style
rgba/hsla, an array of rgba values, or an object with the color
properties. There are now helper methods for each color property, like
`.red()` and `.hue()` that can get or set the particular value. Combined
with helper functions like `.toRgbString()`, `.transition()` and
`.is()`, `$.Color` can now handle whatever color needs you might have.
Refer to the README on
[github.com/jquery/jquery-color](https://github.com/jquery/jquery-color)
for an overview of all the new functions available. No longer is
jQuery.Color just providing you with animation of simple colors, you can
now use its API to do complex color calculations and animations!

#### Quick Examples:

    // Create a red Color object:
    var red = $.Color( 'rgba(255,0,0,1)' ); // using a css string

    // Create a red Color object, then make orange:
    var orange = $.Color( '#FF0000' ).green( 153 );

    // Get the color halfway between red and blue:
    var between = $.Color([ 255, 0, 0 ]).transition( "blue", 0.5 );

### Animating Partial Colors

We have added support for only defining one or two properties of a color
object so that you can animate using a partial color like
[this](http://jsfiddle.net/gnarf/v5V2W/):

    // desaturate the background of this element
    elem.animate({
        backgroundColor: $.Color({ saturation: 0 })
    }, 1000);

Reporting Problems / Requesting Features:
-----------------------------------------

If you find any problems with the new color plugin, or would like to
request a feature, please create a [github
issue](https://github.com/jquery/jquery-color/issues). Also, we'd love
to see and showcase some excellent uses of the new `$.Color` beta, so
please be sure to share it with us in the comments.
