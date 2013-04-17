To magnify your jQuery migration pleasure, version 1.1.1 of the jQuery
Migrate plugin is now available. This plugin can greatly simplify the
process of moving older jQuery code to version 1.9.0 or higher of jQuery
by identifying deprecated features. It can also restore those features
so that older code can run without needing any changes at all. We
strongly recommend that you use this plugin in your initial jQuery 1.9
upgrade -- make it easy on yourself, that's why we wrote this plugin! If
you haven't yet read about jQuery 1.9 and the Migrate plugin, we
recommend that you check out the [jQuery 1.9 upgrade
guide](http://jquery.com/upgrade-guide/1.9/) and the [original jQuery
1.9 blog
post](http://blog.jquery.com/2013/01/15/jquery-1-9-final-jquery-2-0-beta-migrate-final-released/).
Using the plugin is easy; just include it immediately after the script
tag for jQuery, for example.
` <script src="http://code.jquery.com/jquery-1.9.1.js"></script> <script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>`
For more information, see the [jQuery Migrate
documentation](https://github.com/jquery/jquery-migrate/#readme). Here
are the items we've polished for this version; you can see the [complete
list](https://github.com/jquery/jquery-migrate/issues?milestone=3&state=closed)
at Github. Many thanks to jQuery team member Richard Gibson for his help
on this release.

-   **Remove "use strict":** Not all code is compatible with
    JavaScript's "use strict" mode, so we've removed this restriction
    for the same reason we did in jQuery 1.9.1. This fixes some issues
    with diagnostic software that uses `arguments.caller` and with form
    processing in ASP.NET.
-   **\$.parseJSON in \$.ajax:** In 1.9 when an `$.ajax()` call
    specifies a `dataType: "json"` the returned value MUST be valid
    JSON. Older versions treated an empty string as a success even
    though it was not valid JSON. The Migrate plugin will now warn about
    this, treat the result as success and return null as older versions
    did.
-   **Preserve custom \$.browser:** If the `$.browser` object has been
    changed or augmented by code that loaded before jQuery Migrate,
    those changes will now be preserved. However, we still advise the
    Migrate plugin be loaded *immediately* after the jQuery core file.

Happy upgrading!
