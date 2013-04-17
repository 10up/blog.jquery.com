It hasn't been mentioned here yet but the [jQuery IRC
channel](irc://irc.freenode.net/jquery) is pretty happenin' - there's at
least a couple of us in there at all times. We've been busy hunting down
bugs and I've been busy fixing them, here's a quick run down of what's
been fixed in the past couple days:

-   hide()/show() operations now work consistently in all browsers, even
    for weird use cases.
-   A number of Prototype 1.3 + jQuery and Prototype 1.4 + jQuery bugs
    have been handled, there should be no problems using Prototype and
    any of the extra modules now.
-   Problems with the .toggle() method not restoring display: inline
    properly.
-   document.ready() can now be called multiple times - all functions
    are added to a queue.
-   Weird browser-specific attributes are auto-corrected (like
    for=htmlFor, class=className, and float=cssFloat).

What is there to look forward to this weekend? A lot. An AJAX module has
been in Alpha testing and is ready to see some action, along with some
new effects (fadeIn/fadeOut), new selector methods (.ancestor(),
.siblings(), etc.), and a bunch of helper methods (.text(), .value(),
.visible(), etc.). If you want to see something explored in particular,
feel free to [drop me an email](mailto:jeresig@gmail.com) or [visit the
mailing list](http://jquery.com/discuss/).
