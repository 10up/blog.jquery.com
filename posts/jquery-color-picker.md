Steven Wittens of [Drupal](http://www.drupal.org/) fame has released a
nifty jQuery plugin of his own called
[Farbtastic](http://www.acko.net/dev/farbtastic). So what does it do,
you ask?

> Farbtastic uses layered transparent PNGs to render a
> saturation/luminance gradient inside of a hue circle. No Flash, no
> pixel sized divs.

With Farbtastic, a simple form input box turns into an auto-updated hex
code whose background color changes accordingly with the clickable color
wheel and block added by the 8kb Javascript file. Click the color, drag
the chooser or enter in a hex code manually. Just include the
farbtastic.js file along with the farbtastic.css stylesheet and create a
placeholder `div` along with a form element for the hex code like so:

    <form>
        <input type="text" ... />
    </form>
    <div id="colorpicker"></div>

And then include the one line jQuery code:

    $('#colorpicker').farbtastic('#colorpickerinput');

That's all there is to it! You should now have a color picker widget on
your page. To see a working demo as well as more in depth instructions
on using the plugin, visit the [Farbtastic
page](http://www.acko.net/dev/farbtastic). Farbtastic is protected by
the [GPL](http://www.gnu.org/copyleft/gpl.html).
