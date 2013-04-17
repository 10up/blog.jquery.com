There is a lot of good plugin development going on for jQuery. Here are
two which have come up on the list lately:
[HighlightFade](http://jquery.offput.ca/highlightFade) by Blair
Mitchelmore is a very thorough jQuery implementation of the "yellow
fade" technique. Options include the type of fade (linear, sinusoidal,
exponential), the duration, and a function to call on completion. The
plugin weighs in at 3.5K (uncompressed, so it could be made smaller),
and should handle all your yellow-fading needs.
[Tablesorter](http://motherrussia.polyester.se/jquery-plugins/tablesorter)
by Christian Bach is browser-side table sorter (click on a column
heading to sort the table accordingly). It's fast (in the demo, sorts
400 rows in about .3 seconds), and it auto-detects the column type to
provide the appropriate kind of sorting. For example, it automatically
recognizes date vs. text vs. URL contents, and sorts accordingly. For
URLs, it disregards the http/https/ftp/file prefix for sorting purposes,
which is more likely to give you the sort you actually want. You can
also define your own auto-detects, which usually involves 5-10 lines of
code. The plugin is about 10.5K uncompressed. Did you know there are
lots more jQuery plugins listed on the wiki at
[http://proj.jquery.com/plugins/](http://proj.jquery.com/plugins/)? Note
that the URL to the wiki will change when jQuery goes 1.0.
