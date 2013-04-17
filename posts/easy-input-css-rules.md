I ran across [a post](http://domscripting.com/blog/display/38) on the
DOM Scripting blog, the other day, and saw a great opportunity to demo
the brevity of jQuery, observe: **Old DOM Way:**

    function appendInputTypeClasses() {
      if ( !document.getElementsByTagName ) return;
      var inputs = document.getElementsByTagName('input');
      var inputLen = inputs.length;
      for ( i=0; i < inputLen; i++ ) {
        if ( inputs[i].getAttribute('type') ) {
          inputs[i].className += ' '+
            inputs[i].getAttribute('type');
        }
      }
    }

**New jQuery Way:**

    $("input").each(function(){
       $(this).addClass(this.type);
    });

I'm even considering implementing a new way of circumventing the each()
function, observe:

    $("input").addClass("{type}");

You really can't get much shorter than that, when it comes to Javascript
code. I have quite a few more "old" DOM scripting examples that I'll be
posting/improving in the next couple days.
