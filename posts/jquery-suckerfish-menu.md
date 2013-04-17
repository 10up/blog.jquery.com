I think we all have heard of or used [Suckerfish CSS
Menu's](http://alistapart.com/articles/dropdowns/ "A List Apart - Suckerfish Menu's")
before, written by Pattrick Griffiths and Dan Webb for [A List
Apart](http://alistapart.com/ "A List Apart"). If not, it's a cool way
to make drop down menu's using standards based semantic HTML and CSS.
Unfortunately, with IE still dominating the browser marketplace we still
need a way to handle the hover state in IE. To do that we need a little
bit of JavaScript to attach mouseover and mouseout events to HTML
elements. Myles Angell decided to [rewrite Suckerfish's JavaScript with
jQuery](http://be.twixt.us/jquery/suckerFish.php "jQuery Suckerfish Menu").
Myles uses jQuery's [Basic
Effects](http://jquery.com/docs/fx/ "jQuery Basic Effects Docs") to show
and hide the submenus and jQuery's [BaseStyle Base module
methods](http://jquery.com/docs/BaseStyle/ "jQuery's BaseStyle Methods")
to highlight the current moused over menu item. Pretty slick. Check out
some of Myles [other experiments with
jQuery](http://be.twixt.us/jquery/ "jQuery Tests"). For the jQuery
beginner these are good examples to start out with. The
[treeview](http://be.twixt.us/jquery/treeView.php "Treeview") is another
experiment that caught my eye.
