Thanks for all your feedback on jQuery 1.9.0! We're preparing an update
to address the issues you've found already, but in the meantime here's a
new version of the jQuery Migrate plugin. The plugin can be used with
either 1.9 or 2.0 to detect deprecated and removed features, or to
restore old features for those sticky situations where you need old code
to run with new jQuery. The plugin and the messages it generates are
documented in the [project
README](http://github.com/jquery/jquery-migrate/#readme). Judging by
many of the questions and bug reports we've gotten, far too many of you
are trying to do an upgrade to jQuery 1.9 without also using jQuery
Migrate. Stop hitting yourself! We created this plugin to make things
easy on you. Just include the plugin after your jQuery file to see if it
gives you any warnings. The updated jQuery Migrate plugin is available
on jQuery's CDN, and should be available on the Google and Microsoft
CDNs within a few days:
` <script src="http://code.jquery.com/jquery-1.9.0.js"></script>  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>`
With this development version, warning messages appear on the browser's
console. They all start with JQMIGRATE so they're easy to find. Just
match up each message with its description in the [warning
list](https://github.com/jquery/jquery-migrate/blob/master/warnings.md)
to determine what it means and how it can be fixed. In a perfect jQuery
world, you'll be able to update your code and run without the jQuery
Migrate plugin. But we're realists, and know that it may be a while
before you and the authors of your plugins can get around to fixing
compatibility issues. We've got you covered there as well. Just use the
*minified* version and the plugin's fixes will stay, but the warnings
will be silenced so you can deploy to production:
` <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>  <script src="http://code.jquery.com/jquery-migrate-1.1.0.min.js"></script>`
Finally, remember that you can include the jQuery Migrate plugin with
your existing copy of jQuery all the way back to 1.6.4, to see what
issues may arise when you do get around to upgrading.

What's New?
-----------

For a detailed list of the issues that were closed you can see the issue
tracker; here are the important highlights:

-   **Traces by default:** In browsers that support `console.trace()`, a
    stack trace will appear after each warning message to make it easier
    to diagnose. If you prefer to do your own debugging and want to
    reduce the console clutter, set `jQuery.migrateTrace = false`.
-   **A "Logging is active" message:** This message shows up when the
    plugin starts to let you know it is running. If you don't see any
    other messages on the console when testing your pages, you done did
    good.
-   **Invalid JSON:** Before jQuery 1.9.0, `$.parseJSON()` would accept
    some invalid JSON values such as `""` or `undefined` and return
    `null` rather than throwing an error. Migrate 1.1.0 warns about this
    and restores this old behavior.
-   **HTML strings with leading whitespace:** jQuery 1.9 restricts the
    strings processed by `$()` for security reasons. Although we
    recommend you use `$.parseHTML()` to process arbitrary HTML like
    templates, the 1.1.0 version of the Migrate plugin restores the old
    behavior.
-   **Inappropriate warnings:** The Migrate plugin showed a warning for
    `$("<button>", { type: "button" })`, which was not correct since
    that form is allowed on IE6/7/8. That's been fixed.
-   **We're in the jQuery Plugins site:** To set a good example, the
    jQuery Migrate plugin is [on the Plugins
    site](http://plugins.jquery.com/migrate/)! You can always [find it
    on Github](https://github.com/jquery/jquery-migrate/) as well.

