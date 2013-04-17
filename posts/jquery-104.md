Another fantastic release of jQuery is ready for your consumption. This
release includes a number of bug fixes (as usual) along with some
much-needed improvements to jQuery's Ajax functionality. As always, if
you have any questions or concerns with new release, please feel free to
discuss it on the [jQuery Mailing List](http://jquery.com/discuss/). If
you think you've spotted a bug, please [add it to the bug
tracker](http://jquery.com/dev/bugs/new/). So, without further ado,
here's jQuery 1.0.4:

Download
--------

-   **[Compressed
    JavaScript](http://jquery.com/src/jquery-1.0.4.pack.js)**
    (Recommended Download!)
-   [Uncompressed JavaScript](http://jquery.com/src/jquery-1.0.4.js)
-   [1.0.4 Documentation](http://jquery.com/api/)
-   [1.0.4 Test Suite](http://jquery.com/test/)
-   [Full Release (jQuery, Test Suite,
    Documentation)](http://jquery.com/src/jquery-1.0.4.release.zip)
-   [Build Files (Compile your own version of jQuery
    1.0.4)](http://jquery.com/src/jquery-1.0.4.build.zip)

Changes and Features
--------------------

-   Tons of bug fixes ([Full
    List](http://jquery.com/dev/bugs/10/?sort=ticket&asc=0))
-   **Extensions to \$.ajax()**: \$.ajax accepts additional options:
    beforeSend, async and processData; returns XMLHttpRequest to allow
    manual aborting of requests, see docs for details.\
     **Example: Add extra headers to an Ajax request using beforeSend**

        $.ajax({
          type: "POST",
          url: "/files/add/",
          beforeSend: function(xhr) {
            xhr.setRequestHeader( "Content-type", "text/plain" );
          },
          data: "This is the contents of my text file."
        });

    **Example: Perform a synchronous Ajax request.**

        // Get the HTML of a web page and save it 
        // to a variable (the browser will freeze until the 
        // entire request is completed).
        var html = $.ajax({
          type: "GET",
          url: "test.html",
          async: false
        }).responseText;

        // Add the HTML into the page
        $("#list").html( html );

    **Example: Sending a JavaScript object using processData.**

        // The data to send to the server
        var params = {
          name: "John",
          city: "Boston"
        };

        // Send the data, but have it be converted into
        // a format the server can understand (w/ processData)
        $.ajax({
          type: "POST",
          url: "/user/add/",
          data: params,
          processData: true
        });

    **Example: Aborting an Ajax request after a specific delay in
    time.**

        // Perform a simple Ajax request
        var req = $.ajax({
          type: "GET",
          url: "/user/list/",
          success: function(data) {
            // Do something with the data...
            // Then remove the request.
            req = null;
          }
        });

        // Wait for 5 seconds
        setTimeout(function(){
          // If the request is still running, abort it.
          if ( req ) req.abort();
        }, 5000);

    \

-   **AJAX module**: The public \$.ajax API is now used internally (for
    \$.get/\$.post etc.); loading scripts works now much more reliably
    in all browsers (with the exception of Safari, which is a work in
    progress).
-   **New global Ajax handler**: ajaxSend - called before an Ajax
    request is sent.\
     **Example: Add extra headers to all Ajax requests using the
    ajaxSend event.**

        $(document).ajaxSend(function(xhr){
          xhr.setRequestHeader("X-Web-Request", "MySite.com");
        });

    \

-   **Extensions to global Ajax handlers**: ajaxSend, ajaxSuccess,
    ajaxError and ajaxComplete get XMLHttpRequest and settings passed as
    arguments.\
     **Example: Prevent any POST requests that are sending too much
    data.**

        $(document).ajaxSend(function(xhr,options){
          if ( options.type == "POST" && options.data.length > 1024 )
            xhr.abort();
        });

    **Example: Show a special message for requests submitted using an
    Ajax POST.**

        $("#dataSent").ajaxSend(function(xhr,options){
          if ( options.type == "POST" )
            $(this).show();
        });

    \

-   **Extensions to event handling**: pageX and pageY are available in
    all browsers now. (IE does not provide native pageX/Y).\
     **Example: Have a tooltip follow a user's mouse around the page.**

        $(document).mousemove(function(e){
          $("#mousetip").css({
            top: e.pageY + "px",
            left: e.pageX + "px"
          });
        });

    \

-   **Improved docs**: \$(String) method has now two separate
    descriptions, one for selecting elements, one for creating html
    on-the-fly.
-   **FX module**: Most inline styles added by animations are now
    removed when the animation is complete, eg. height style when
    animating height (exception: display styles).

