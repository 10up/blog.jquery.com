Today's DHTML trick is a smooth example of [Image Cross
Fading](http://slayeroffice.com/code/imageCrossFade/xfade2.html). The
Javascript code for the whole page is rather short to begin with, but
there was some rom for improvement. If you were to look at the [original
source file](http://slayeroffice.com/code/imageCrossFade/xfade2.js),
just about everything except for the variable declarations and the
so\_xfade method can be reduced to this snippet, using
[jQuery](http://jquery.com/):

    $(document).ready(function(){
      $("head").append("<link href='xfade2.css' \
        rel='stylesheet' type='text/css'>");
      img = $("#imageContainer img").set("xOpacity",0).get();
      $("#imageContainer img:first").set("xOpacity",0.99).show();
      setTimeout(so_xfade,1000);
    });

Currently, there doesn't seem to be a more elegant way of doing it in
[jQuery](http://jquery.com/), but I can't really complain, considering
how much more understandable the code is, compared to doing it the DOM
way.
