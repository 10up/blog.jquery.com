We're pleased to announce that jQuery 1.8.2 is available! This version
fixes several bugs and performance regressions reported from the past
couple of releases, and we think the 1.8 line is pretty solid at this
point. The only way to know for sure that it works with your code is to
test it--so please do!

-   [http://code.jquery.com/jquery-1.8.2.min.js](http://code.jquery.com/jquery-1.8.2.min.js)
    (compressed, for production)
-   [http://code.jquery.com/jquery-1.8.2.js](http://code.jquery.com/jquery-1.8.2.js)
    (uncompressed, for debugging)

As always, we have put out the jQuery-shaped signal lights; the master
control centers at the Google and Microsoft CDNs are on high alert and
will soon post these files. For immediate relief, please use the copies
above. If you find a problem, please [post a bug
report](http://bugs.jquery.com) and be sure to include a test case from
[jsfiddle.net](http://jsfiddle.net) or [jsbin.com](http://jsbin.com).
The complete change log for jQuery 1.8.2 is below. If this is your first
upgrade to the 1.8 line, be sure to read the blog entries for
[1.8.0](http://blog.jquery.com/2012/08/09/jquery-1-8-released/) and
[1.8.1](http://blog.jquery.com/2012/08/30/jquery-1-8-1-released/) to see
what's changed. Many thanks to the patch contributors for this version;
ye shall know them by their GitHub handles: timmywil, gibson042, rwldrn,
joyvuu-dave, jaubourg, staabm, and sindresorhus. In addition, we thank
all the community members who took the time to contribute quality bug
reports with test cases. Your initial groundwork makes it possible for
us to find and fix bugs.

jQuery 1.8.2 Change Log
-----------------------

### Deferred

-   [\#12521](http://bugs.jquery.com/ticket/12521): Deferred.promise(
    target) only works fine when typeof( target)=='object'

### Event

-   [\#12423](http://bugs.jquery.com/ticket/12423): jQuery breaks with
    Comcast Protection Guard and any anti-keylogging protection software
    on IE7+
-   [\#12436](http://bugs.jquery.com/ticket/12436): Performance
    degradation with delegate events and pseudo-classes

### Misc

-   [\#12229](http://bugs.jquery.com/ticket/12229): Some
    inconsistencies/optimizations

### Offset

-   [\#12534](http://bugs.jquery.com/ticket/12534): .offset() throws an
    error on BlackBerry5 and iOS3
-   [\#12536](http://bugs.jquery.com/ticket/12536): Make .offset() calc
    less wrong on browsers w/o getBoundingClientRect

### Selector

-   [\#12303](http://bugs.jquery.com/ticket/12303): Attribute selector
    fails if the attribute value contains :first :last
-   [\#12337](http://bugs.jquery.com/ticket/12337): :nth-child selector
    not accurate after new child element added
-   [\#12361](http://bugs.jquery.com/ticket/12361): seleter has bug
-   [\#12448](http://bugs.jquery.com/ticket/12448): :contains() edge
    case throwing an error
-   [\#12492](http://bugs.jquery.com/ticket/12492): In textarea focus
    event handler, \$(this).is(':focus') == false in Chrome & Safari
-   [\#12523](http://bugs.jquery.com/ticket/12523): JQuery renders line
    breaks as text nodes
-   [\#12526](http://bugs.jquery.com/ticket/12526): :last selector fails
    to find a match
-   [\#12541](http://bugs.jquery.com/ticket/12541): 1.8.0 and 1.8.1:
    Double :not() selector fails in IE6/7
-   [\#12572](http://bugs.jquery.com/ticket/12572): :contains breaks
    searching iframes v1.8

### Traversing

-   [\#12474](http://bugs.jquery.com/ticket/12474): Using find on a
    collection with append does not return the correct elements

