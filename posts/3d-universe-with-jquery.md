[![Universe
Screenshot](http://blog.jquery.com/wp-content/uploads/2006/08/planets.png)](http://www.willjessup.com/sandbox/jquery/solar_system/rotator.html)

[Will Jessup](http://www.willjessup.com/) has just release a great demo
of what's possible with jQuery (and Javascript in general): [A 3d model
of the
universe](http://www.willjessup.com/sandbox/jquery/solar_system/rotator.html).
Try moving your mouse vertically around the screen to see the universe
at different angles, horizontally to make it rotate faster. All the
images are courtesy of NASA.

Will used a lot of techniques to really simulate the 3d experience
correctly:

-   He adjusts the opacity and z-index of the images based upon the
    depth of the element.
-   The height and width are also adjusted dynamically - but are all
    laid out using fontSize and EMs, allowing you to also simulate
    depth-of-field with text (in addition to static images or elements).
-   The background moves based upon the speed, and direction, of
    rotation.

Also, take a look at [his
code](http://www.willjessup.com/sandbox/jquery/solar_system/js/rotator.js)
for specific caching optimizations used (like saving a reference to a
single jQuery object and calling it over and over, rather than
re-querying on every rotation). Be sure to [digg this
up](http://digg.com/programming/Solar_system_made_from_JavaScript) as
it's a really great example of the power of jQuery.
