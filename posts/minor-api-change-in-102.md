I forgot to mention in [the 1.0.2 release
notes](http://blog.jquery.com/2006/10/09/jquery-102/), the other day,
that there was a minor API change. This was a mistake, as we should've
held off on making an API change until the next major release (jQuery
1.1). As summarized by [Steven Wittens](http://www.acko.net/), here is
the premise behind the change: In jQuery 1.0.2, the first argument to
the 'success' callback has been changed to return the actual data rather
than the XMLHttpRequest object. Use the 'dataType' argument to \$.ajax()
to control how the data is returned. Note that jQuery can now parse XML,
JSON and JavaScript for you this way. **jQuery 1.0.1**

    $.ajax( {
      success: function (xmlhttp) {
        var data = $.httpData( xmlhttp );
        // 'data' holds the response data from the server
      }
    );

**jQuery 1.0.2**

    $.ajax( {
      success: function (data) {
        // 'data' holds the response data from the server
      }
    );

Thanks, Steven, for the synopsis - and sorry, everyone, for the
inconvenience!
