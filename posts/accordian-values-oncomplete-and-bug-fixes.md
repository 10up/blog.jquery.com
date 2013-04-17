This is the total amount of fixes and new features that have come out in
the past week, or so. I'll be adding more info concerning them to the
docs very soon.

### New Demo:

-   [Accordian Open/Close](http://jquery.com/demo/accord/) - Toggle
    open/close a number of entries at once!

### New Features:

-   **empty()** - you can remove all child nodes of an element.

        // Deletes the contents of all DIV elements
        $("div").empty();

-   **is(Expression)** - tests to see if the matched elements matches
    that expression. Is equivalent to: \$().filter(Expression).size() \>
    0.

        // Tests to see if a DIV has a class of test
        if ( $("div").is(".test") ) {
          alert( "test div found!" );
        }

-   **html()** - If you provide no parameter to the html() method it
    will return the innerHTML of the first element.

        // Copy the HTML contents into a Textarea
        $("textarea").val( $("#block").html() );

-   **val()** - Same as the html() method, but for the value parameter
    (if an argument is provided, it sets the value, no parameter -
    returns the first value).

        // Copy a value from one input to another
        $("input#hidden").val( $("input#name").val() );

-   **\$.postXML() and \$.getXML** - For the AJAX plugin, same as
    \$.post() and \$.get(), but forcefully try to get the returned XML,
    regardless of the Content-Type.

        // Get the XML contents of a file
        $.getXML("file.xml",function(xml){
          $(xml).find("title") // ...
        });

-   A new **'normal' speed** (400ms) for animations was added.

        // Slide a DIV in at normal speed
        $("div").slideDown("normal");

-   Setting an **onComplete** handler for animations is much easier now.

        $("div").show("slow",function(){
          alert("all done!");
        });

### Bug Fixes:

-   Opera and the AJAX plugin now play nicely together.
-   A problem with appending text nodes was resolved.
-   Handling for IE and the AJAX plugin was optomized.
-   A problem with \#id expressions retreiving by tag was fixed.
-   A fix for removing classes that have dashes in them was implemented.
-   A bug with binding events to dynamically created HTML was fixed.
-   A bug with show() not revealing elements that have a display of
    none, by default, was fixed.
-   Another Prototype 1.3 and jQuery bug was resolved.
-   The mangling of the overflow attribute, by the animations, was
    resolved.
-   and finally: The infamous height/width auto animation bug has been
    resolved!

