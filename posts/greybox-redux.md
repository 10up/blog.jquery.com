Another popular DOM/CSS/Javascript project popped up today:
[Greybox](http://amix.dk/greybox/demo.html). It's a lot like the popular
[lightbox](http://www.huddletogether.com/projects/lightbox/), but is
used to display web sites on top of your current page. I saw this as
another great opportunity to demonstrate how easy it is to make great
code with [jQuery](http://jquery.com/). I modified greybox in two
phases.

1.  First step was to make greybox work unobtrusively (they embeded
    javascript into the page to make it work) and to fix the broken
    back-button (you'd have to hit back twice after visiting a site).
2.  The next step was to completely overhaul the library itself and
    remove the need for Amir's personal Javascript library - leaving it
    to run completely using jQuery. The resulting code is only about
    1.2kb (compared to the original 12kb of the original).

A **[demo and a download](http://jquery.com/demo/grey/)** are available
if you're interested in seeing some more examples of how jQuery works in
a practical application. Enjoy!
