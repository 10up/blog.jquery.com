Great news, everyone! Today is jQuery's 1 Year "Birthday"! (I released
it 1 year ago, today, at [BarCamp New York
City](http://barcamp.org/BarCampNYC)) In celebration, we've got a bunch
of stuff for you to enjoy.

1) jQuery 1.1
-------------

This is a great release - tons of bug fixes, [huge speed
improvements](http://john.jquery.com/speed/), and a [big
simplification](http://blog.jquery.com/2007/01/08/jquery-11a/) of the
outstanding API. It is highly recommend that you upgrade to get all the
benefits of this release.

### Download Now:

-   [jQuery 1.1](http://jquery.com/src/jquery-1.1.js)
-   [jQuery 1.1 Compressed](http://jquery.com/src/jquery-1.1.pack.js)
-   [jQuery 1.1 - All Code, Docs, and
    Tests](http://jquery.com/src/jquery-1.1.release.zip)
-   [jQuery 1.1 - Build Your Own Copy of
    jQuery](http://jquery.com/src/jquery-1.1.build.zip)

### Upgrade Guide:

Please read through these guides before upgrading from 1.0.4 to 1.1 - a
number of API changes have been made, and these guides detail how to
work through them, and how to use the new [jQuery 1.0 Compatibility
Plugin](http://jquery.com/dev/svn/trunk/plugins/compat-1.0/jquery.compat-1.0.js?format=txt)
to keep 1.0-style functionality in 1.1.

-   [English](http://blog.jquery.com/2007/01/08/jquery-11a/) ([Part
    2](http://blog.jquery.com/2007/01/11/jquery-11b/))
-   [French](http://www.jquery.info/spip.php?article30)
-   [Italian](http://www.jquery.info/spip.php?article31)

### New Features:

-   By all of [our counts](http://john.jquery.com/speed/), **jQuery
    1.1's selectors are 10x-20x faster** than those in jQuery 1.0.4.
    This should provide a noticable difference in your jQuery
    applications.
-   Common selectors like **div\#id**, **div .class**,
    **td:nth-child(1)**, and **div \> div** are all significantly
    faster. It's a complete world of difference. [Try them
    out](http://john.jquery.com/speed/) and you'll see.
-   You can now pass in a function as a value for an attribute or a css
    property. The function is executed and its return value is set as
    the value for the property. For example:

        // 1.0 Code
        $("a").each(function(){
            $(this).attr("href", "/item/" + this.id);
        }).show();

        // 1.1 Code
        $("a").attr("href", function(){ return "/item/" + this.id; }).show();

-   You can now unbind an event handler from within itself. This allows
    you to have event handlers that are only bound for a specific number
    of executions, for example:

        $("button").click(function(e){
            // Unbind the event handler if a specific form is hidden
            if ( $("#submitForm").is(":hidden") ) {
                $(this).unbind( e );
            }
        });

-   Easily bind an event that will only occur once (this replaces the
    old .oneclick() functionality):

        // Show a thank you message for a form submission, but only once
        $("form").one("submit",function(){
            $("#thankyou").show();
        });

-   You can now set the text value of an element (this is different from
    .html(), where in .text() all HTML is displayed as text).

        $("pre").text("<b>Hello</b>, how are you?");

        // Result:
        <pre>&lt;b&gt;Hello&lt;/b&gt;, how are you?</pre>

-   You can now build your own filters, using a custom function. (This
    was in 1.0, but it wasn't documented very well.)

        // Find all divs whose parent isn't hidden
        $("div").filter(function(){
          return $(this).parent(":hidden").length > 0;
        });

-   You can now pass a comma-separated list of selectors to the
    following filter functions: filter, find, not, siblings, parents,
    children, next, prev. This allows you to do some very cool stuff:

        // Find all radio buttons, or checkboxes, in a form
        $("form input").filter(":radio, :checkbox");

        // Find the next element that's a span, or a div
        $(this).next("span, div");

2) Refreshed Web Site Design
----------------------------

[![jQuery Site
Screenshot](http://blog.jquery.com/wp-content/uploads/2007/01/jquery-site-sm.jpg)](http://jquery.com/)
The design of the jQuery web site has finally be given a much-needed
facelift. This was planned out by the fantastic [jQuery Design
Team](http://docs.jquery.com/About/Contributors) and implemented by
[Nate Cavanaugh](http://alterform.com/). The design team has a full
redesign/restructuring planned, but we wanted something that would help
us get from our current design to the complete overhaul. Hope you enjoy
it - and be sure to thank Nate, Bradley, or Skye for their job well
done! \

3) Overhauled Documentation
---------------------------

A big point that we've been working with, lately, was to really pull
together and categorize the jQuery Documentation, Tutorials, and API
into one centralized location. The result of this effort is the new:
**[http://docs.jquery.com/](http://docs.jquery.com/)** All jQuery
documentation can be found in this one, central, location - making it
easier for you to find what you need and get your work done faster. We
hope you enjoy this new structuring, please let us know if you have any
suggestions for what we can add to make it better.

4) A Secret...
--------------

We've been holding this one back a while, but we're finally ready to let
it go... **There's a jQuery Book in the works!** An excited publisher
has stepped up, and the authors are already a quarter of the way
complete. There's still some details in the works, and we're going to
tell all once its getting nearer to completion, but right now it's
looking like we're going to have a late-Spring/early-Summer release of
the **first jQuery book!**

![Blank
Book](http://blog.jquery.com/wp-content/uploads/2007/01/blank_book.jpg)

I hope you enjoy everything - a lot of time and effort has really gone
into making this release great. Be sure to thank everyone on the [jQuery
Team](http://docs.jquery.com/About/Contributors), they've put a lot of
time and effort into making this release come out really good. I'll be
doing a "State of the Query" post tomorrow, to talk about where jQuery
has come during this past year, and the evangelism team will be doing a
couple blog posts about what you can do with the new jQuery 1.1. **Thank
you, everyone, for making this a fantastic first year for jQuery.**
