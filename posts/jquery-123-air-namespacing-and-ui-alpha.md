We're happy to announce a [brand new
release](http://docs.jquery.com/Release:jQuery_1.2.3) of jQuery. This is
primarily a bug fix release for [jQuery
1.2](http://docs.jquery.com/Release:jQuery_1.2). You can view the full
list of what was fixed on the [bug
tracker](http://dev.jquery.com/report/24).

Downloading
-----------

**jQuery 1.2.3:**

-   [jQuery
    Minified](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.3.min.js)
    (15kb with
    [Gzipping](http://www.julienlecomte.net/blog/2007/08/13/))
-   [jQuery
    Packed](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.3.pack.js)
    (29kb)
-   [jQuery
    Regular](http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.3.js)
    (94kb)

If you wish to checkout the full release from the [Subversion
repository](http://dev.jquery.com/browser), you can do so by [following
the
instructions](http://docs.jquery.com/Downloading_jQuery#Subversion_.28SVN.29)
and checking out the source from the following location:

    svn co http://jqueryjs.googlecode.com/svn/tags/1.2.3

Important Changes
-----------------

The primary purpose of this release was to fix a couple outstanding bugs
from the [jQuery 1.2.2](http://docs.jquery.com/Release:jQuery_1.2.2)
release. Specifically, this release is now compatible with Adobe AIR,
will be included in Drupal 6, and will be the base for jQuery UI 1.5.
Additionally, a couple minor features, for plugin developers, were
included in this release.

### .data() and .removeData()

These methods complement the, already included,
[jQuery.data](http://docs.jquery.com/Internals/jQuery.data) and
[jQuery.removeData](http://docs.jquery.com/Internals/jQuery.removeData)
methods introduced in [jQuery
1.2](http://docs.jquery.com/Release:jQuery%201.2). The important change,
however, is that they've been tailored for plugin developers. You can
now namespace data additions - like you can with [event
binding/unbinding](http://docs.jquery.com/Release:jQuery_1.2/Events).
For example:

      $("div").data("test", "original");
      $("div").data("test.plugin", "new data");
      alert( $("div").data("test") == "original" ); // true
      alert( $("div").data("test.plugin") == "new data" ); // true

Additionally, getting or setting data values can be overridden by a
plugin. For example, the following code is from the, recently updated,
draggables in jQuery UI:

      $(element).bind("setData.draggable", function(event, key, value){
         self.options[key] = value;
      }).bind("getData.draggable", function(event, key){
         return self.options[key];
      });

The above makes it such that all attempts to get and set
draggable-namespaced data will be intercepted and handled by the plugin
directly (rather than being bound directly to the element). The result
is a powerful new interface for dealing with internalized data within a
plugin.

### .unbind(".namespace")

In jQuery 1.2 you could add and remove [namespaced
events](http://docs.jquery.com/Release:jQuery_1.2/Events), however you
always had to include a name for the type of event being used. With this
addition you can now remove all bound events that match a particular
namespace, for example:

      $("div").bind("click.plugin", function(){});
      $("div").bind("mouseover.plugin", function(){});
      $("div").unbind(".plugin"); // All handlers removed

The above removes all bound event handlers that are within the "plugin"
namespace.

### .trigger("click!")

Finally, a new addition was included to allow exclusion of [namespaced
events](http://docs.jquery.com/Release:jQuery_1.2/Events) from being
triggered. For example:

      $("div").bind("click", function(){ alert("hello"); });
      $("div").bind("click.plugin", function(){ alert("goodbye"); });
      $("div").trigger("click!"); // alert("hello") only

The above only triggers the non-namespaced event handlers.

Alpha Release: jQuery UI 1.5 and jQuery Enchant 1.0
---------------------------------------------------

Last, but not least, we're pleased to announce [a new alpha release of
jQuery
UI](http://groups.google.com/group/jquery-ui/browse_thread/thread/db8276574e20a5be).
This is an overhaul of the existing code base with tons of a bug fixes
and API tweaks. We need a ton of help testing this alpha, making sure
that it'll be rock-solid for the upcoming release candidate. Please
[participate in the
discussion](http://groups.google.com/group/jquery-ui/browse_thread/thread/db8276574e20a5be),
helping us to get ready. Additionally, we're working on a new plugin
called jQuery Enchant which will bring a ton of [advanced
effects](http://ui.jquery.com/enchant/1.0a/demos/) to the library (like
[clip](http://ui.jquery.com/enchant/1.0a/demos/clip.html),
[shake](http://ui.jquery.com/enchant/1.0a/demos/shake.html), and
[explode - to
name](http://ui.jquery.com/enchant/1.0a/demos/explode.html)[a
few](http://ui.jquery.com/enchant/1.0a/demos/)). This is an alpha
release of this plugin, as well - so please help us test it and make
sure that it's completely up to the jQuery level of quality.
**Download**

-   [jQuery UI 1.5
    (Alpha)](http://jqueryjs.googlecode.com/files/jquery.ui-1.5a.zip)
    (Requires jQuery 1.2.3 or higher)
-   [jQuery Enchant 1.0
    (Alpha)](http://jqueryjs.googlecode.com/files/jquery.enchant-1.0a.zip)

**Demos**

-   [jQuery UI 1.5 (Alpha)](http://ui.jquery.com/1.5a/demos/)
-   [jQuery Enchant 1.0
    (Alpha)](http://ui.jquery.com/enchant/1.0a/demos/)

Enjoy!
