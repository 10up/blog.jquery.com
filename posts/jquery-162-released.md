jQuery 1.6.2 Released
---------------------

jQuery 1.6.2 is now out! This is the second minor release on top of
jQuery 1.6 and lands a number of fixes for bugs.

As usual, we provide two copies of jQuery, one minified and one
uncompressed (for debugging or reading).

-   [jQuery Minified](http://code.jquery.com/jquery-1.6.2.min.js) (for
    production)
-   [jQuery Regular](http://code.jquery.com/jquery-1.6.2.js) (for
    development and testing)

You can feel free to include the above URLs directly into your site and
you will get the full performance benefits of a quickly-loading jQuery.

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.6.2.

We want to encourage everyone from the community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

jQuery 1.6.2 Change Log
-----------------------

The current change log of the 1.6.2 release.

### Attributes

-   [\#9286](http://bugs.jquery.com/ticket/9286): Using live submit on
    forms
-   [\#9298](http://bugs.jquery.com/ticket/9298):
    \$(elem).attr(eventName) not working properly in IE7
-   [\#9329](http://bugs.jquery.com/ticket/9329): attr("title") issue in
    ie7
-   [\#9362](http://bugs.jquery.com/ticket/9362): .attr("value") does
    not work for meter elements
-   [\#9468](http://bugs.jquery.com/ticket/9468):
    \$('form').attr('class') always return undefined in IE 6
-   [\#9499](http://bugs.jquery.com/ticket/9499): removeClass will only
    remove the first instance of a class

### Core

-   [\#9301](http://bugs.jquery.com/ticket/9301): Setting data() via an
    object with hyphenated keys create inaccessible data.
-   [\#9368](http://bugs.jquery.com/ticket/9368): jQuery.camelCase()
    defined in css.js, but used more widely
-   [\#9471](http://bugs.jquery.com/ticket/9471): memory leak noticed
    when loading jquey.1.6.1.min.js included html pages in the iframe

### CSS

-   [\#7557](http://bugs.jquery.com/ticket/7557): outerWidth()
-   [\#9237](http://bugs.jquery.com/ticket/9237): .css() doesn't work
    with relative values on hyphenated properties

### Dimensions

-   [\#9300](http://bugs.jquery.com/ticket/9300): outerWidth(true) issue

### Effects

-   [\#9220](http://bugs.jquery.com/ticket/9220): Animation Callbacks
    fire AFTER the next queue function executes.
-   [\#9678](http://bugs.jquery.com/ticket/9678): setInterval cleared by
    animation

### Event

-   [\#9285](http://bugs.jquery.com/ticket/9285): custom trigger

### Manipulation

-   [\#8950](http://bugs.jquery.com/ticket/8950): (Chrome, Firefox)
    Second argument (event empty) in jQuery throws error while creating
    \<input\>
-   [\#9370](http://bugs.jquery.com/ticket/9370): Compatibility Issue
    with jQuery 1.6 and IE6

### Support

-   [\#9239](http://bugs.jquery.com/ticket/9239): Version 1.6.0 breaks
    the background behavior on body element
-   [\#9440](http://bugs.jquery.com/ticket/9440): v1.6.1 messes up
    layout in IE8

