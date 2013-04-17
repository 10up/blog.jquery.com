I would like to take this opportunity to announce the first release of
jQuery 1.0 (dubbed jquery-1.0a). This new 1.0 release is designed to be
completely comprehensive, small-sized, and bug free. It will be
supported for a very long time, into the foreseeable future. (This is
NOT the final release of 1.0, that will be coming after comprehensive
testing has been completed) This release is currently available at the
following URL:
[http://jquery.com/src/jquery-1.0a.js](http://jquery.com/src/jquery-1.0a.js)
What I need everyone to do is to download this new release and test it
with their specific plugins or applications. If you spot any strange
bugs (that are unrelated to any of the changes mentioned below), please
post a bug concerning it in the new jQuery Bug Tracker (The more exact
you can make the bug, the better - and test pages are highly
appreciated):

-   [Submit a new bug](http://proj.jquery.com/dev/bugs/new/)
-   [Current bug list](http://proj.jquery.com/dev/bugs/)

The proj.jquery.com site is only temporary, and still incomplete, and
will be moving over to jquery.com whenever the full 1.0 release is
ready. This new site includes a full wiki, so if you see anything that
you'd like to add, please feel free to do so. I would like to thank
everyone who's helped to make this release possible. This release
wouldn't be happening if it wasn't for everyone who's donated their time
and money to contribute to the project. The community, as a whole, has
been invaluable in providing support and feedback, guiding the progress
of the project as a whole. Thanks everyone, and enjoy - I'm looking
forward to your feedback. -- John Resig What follows are the release
notes of what's changed in this release. This includes a number of new
methods, improvements, things that Javascript purists will like, and
changes for plugin developers. They've all be organized accordingly.

New Methods
-----------

(Note: Some of these have been around for a while, but have just never
been publically been announced)

### DOM

- \$().text(): Returns the text contents of all matched elements,
combined. This works for both HTML and XML documents. - \$().html() and
\$().val(): These both act as getter and setters for innerHTML and
value, respectively. Calling .html() will return the HTML contents of
the first element matched. Calling .html("foo") will set the HTML
contents of all matched elements to 'foo'. - \$().toggleClass("class"):
If the class exists on a specific element, it is removed, if it does
not, it is added. - \$().remove(): Removes all the matched elements from
the DOM. - \$().empty(): Remove all child nodes from all matched
elements. - \$().parent("filter"): Matches the parent element of all
matched elements, filtered by the optional "filter". -
\$().parents("filter"): Matches all ancestor elements, of all matched
elements, optionally filtered by "filter". - \$().siblings("filter"):
Matches all sibling elements, of all matched elements, optionally
filtered by "filter". - \$().is("filter"): Checks to see if any matched
elements match "filter", if so, the expression returns 'true', otherwise
'false'.

### Events

- \$().trigger("event"): Triggers the 'event' event to occur on all
matched elements. - \$().dobind(): There is now a shorthand for
triggering a specific event on all matched elements. - \$().toggle(
function, function ): Whenever a matched element is clicked, the first
function is fired, when clicked again, the second is fired, all
subsequent clicks continue to rotate through the two functions.

### Effects

- \$().fadeTo(speed, to, callback): This fades all matched elements 'to'
a certain opacity, at a certain 'speed'. Once completed, the callback is
fired. - \$().animate( properties, speed, callback ): There is a new,
generic function for performing custom animations. 'properties' contains
a custom object of key/value pairs relating to properties that you want
animated, for example: \$("div").animate({ height: 40, top: 50},
"slow"); - \$().center() has been moved to a separate plugin and is no
longer in the main fx package.

### AJAX

- \$().ajaxStart( function ) and \$().ajaxStop(): Two methods used for
binding callback listeners for two new events. ajaxStart is fired
whenever a new AJAX request begins (and no other request is happening)
and ajaxStop fires whenever all AJAX requests have completed. This is
ideal for showing/hiding a 'loading' message. - \$().ajaxError( function
), \$().ajaxSuccess( function ), and \$().ajaxComplete( function ):
These are all generic methods for binding callbacks to handle specific
AJAX-related events. ajaxComplete fires whenever an AJAX event finishes
(disregarding its success state). ajaxError and ajaxSuccess both fire
whenever a request fails, or succeeds. - \$.xml() is now \$.ajax() -
\$.ajax( options ): The AJAX method now can take an option object of
key/value pairs, represented like so:

      $.ajax({
        url: "request url",
        type: "POST, GET, etc",
        data: "A string of data to send to the server",
        
        // The three, afformentioned, callbacks
        complete: function(){},
        success: function(){},
        error: function(){}
      });

Improvements
------------

- Doing \$() is now a wrapper for doing "new \$(...)" - as jQuery is now
an object, and much much faster. - A large part of the code is fully
documented, inline, now (this includes commnets and better variable
names) - this isn't completely done yet, but will be by the time the
full 1.0 releases comes around. - Animations now figure out the correct
height and width of elements based upon the current box model scheme
being used, by the browser. - You can now append/prepend/etc. tr, td,
and th elements to tables and table rows - behaving as you expect it
would. - \$(document).ready() has been drastically improved. It now
works in all modern browsers completely as you'd expect, even with
Adsense in the page. - All effects are now queued, for example:
\$("div").fadeIn().fadeOut() will fade all the divs in, then out (once
the in animation is complete). However, doing: \$("div").fadeIn();
\$("span").fadeOut(); will fire all the animation simultaneously.
Effects are only queued on an element-by-element basis. - The height and
width of an element are automatically set to 'auto' after an animation
is complete (but only if the height is equivalent to an 'auto' height,
for example). - jQuery forces layout in IE, even on elements that don't
have it yet.

Javascript Purists
------------------

- jQuery is completely contained within the 'jQuery' namespace now, and
mapped to the '\$' dynamically. This will have little to no effect on
your existing code, other than the fact that it makes for much purer
code. - Support for existing \$() functions is now generic (in that it
doesn't look for Prototype, but just the \$ function).

Plugin Developers
-----------------

- The old property .\$jquery is now .jquery - \$.apply() has been
removed. - jQuery now sets a global variable named 'undefined' to
undefined. Feel free to use this in your code with: foo === undefined. -
Class manipulation functions are now located in jQuery.className.\* -
jQuery.browser contains a string representing the browser that the user
is using, it can be either: safari, opera, msie, mozilla, or other. -
jQuery.boxModel is true if the current browser supports the W3C CSS box
model, false if not. - \$.getCSS is now \$.css - \$.parents() can be
used to get all ancestors elements of an element - All event-related
functions are in jQuery.event.\* - The fx namespace is now contained
with jQuery.fx.\* - There is no longer any
fx.Top/Left/Height/Width/Opacity functions, they've all been relegated
to the new \$().animate() function (which also handles all the queuing).
- \$.param( array ): Can now take an array of elements, whose names and
values are serialized to a string.
