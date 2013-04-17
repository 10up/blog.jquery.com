Another CSS/Javascript article is making the rounds today called:
[Width-Based
Layout](http://www.collylogic.com/?/comments/redesign-notes-1-width-based-layout/).
The premise is that the page auto-resizes the width based upon how wide
your browser is. Included with the post is a 38 line piece of Javascript
(and I'm being generous) to get the job done. I'm going to save you the
break-down of their code, and just show you the improved code, below.

    $(window).resize(setWidth);
    $(document).ready(setWidth);

    function setWidth() {
      var de = document.documentElement;
      var w = (window.innerWidth || (de && de.clientWidth)
        || document.body.clientWidth) < 990 ?"alt":"main";
      $("#wrapper").addClass( w + "wrapper" );
    }

A live demo of this new code can be found
[here](http://jquery.com/test/resize.html). Ironically, they're using a
[piece of code](http://ejohn.org/projects/flexible-javascript-events/)
that I wrote, but didn't credit me for. Definitely my favorite part
about the above code is the short-circuiting that I have going on. The
original code, for that portion, is from [this evolt
article](http://evolt.org/article/document_body_doctype_switching_and_more/17/30655/index.html).
I don't know what it is, but everytime I see an IF statement with
multiple assignments, it just makes my skin crawl. So, the following:

    if (window.innerWidth)
    {
        theWidth = window.innerWidth
    }
    else if (document.documentElement 
      && document.documentElement.clientWidth)
    {
        theWidth = document.documentElement.clientWidth
    }
    else if (document.body)
    {
        theWidth = document.body.clientWidth
    }

Gets changed to:

    var de = document.documentElement;
    var w = window.innerWidth || (de && de.clientWidth)
      || document.body.clientWidth;

If you're curious as to why this works, try running the following
statements:

    alert(1||0); // You get 1
    alert(0||2); // You get 2
    alert(0||(2&&1)); // You get 1
    alert(0||(3&&4)||2); // You get 4

And you'll have a better feeling as to what is actually happening in
that (previously) very-verbose piece of code.
