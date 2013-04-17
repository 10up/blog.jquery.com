We're getting ever-closer to the final release of jQuery 1.3! In a
follow-up to the recent [1.3 Beta
1](http://blog.jquery.com/2008/12/22/help-test-jquery-13-beta-1/) we
have another test version for everyone to try. As with before, it's not
ready for production use yet but we definitely need help in hunting down
any bugs that we may have missed. Please don't test 1.3 Beta 1 anymore -
all testing should move on to beta 2. The final release of jQuery 1.3
will be on the 14th of January with a final release candidate available
a few days before. **Download** A copy of jQuery 1.3b2 can be found
here:

-   [http://code.jquery.com/jquery-1.3b2.js](http://code.jquery.com/jquery-1.3b2.js)

Please don't use minified or packed versions of jQuery when testing - it
makes locating bugs difficult. **Changes** So far two changes in 1.3
have been the most likely to cause problems:

1.  Old, XPath, style attribute selectors: `[@attr=value]`. These have
    been deprecated for quite some time - and we're finally removing
    them. To fix it just remove the @!
2.  Bubbling triggered events. Triggered events now bubble up the DOM -
    some plugins haven't expected this and have had to adapt. Its pretty
    easy to fix your code to "protect" against bubbling - add the
    following statement to your bound handler:
    `if ( this === event.target ) { ... }`

**Tests** The test suite is holding up quite well. We currently have
1370 tests covering all aspects of the library and passing in all the
major browsers:

[![jQuery
1.3b2](http://farm4.static.flickr.com/3263/3172304238_bb88c62af6.jpg)](http://www.flickr.com/photos/jeresig/3172304238/ "jQuery 1.3b2 by John Resig, on Flickr")

**How to provide feedback:**

-   Submit a bug to the [jQuery bug tracker](http://dev.jquery.com/)
    (you will need to create an account, first).
-   Be sure to include a simple test case for any problem that you're
    experiencing (either attach the test case or provide a link).
-   Mention that you're testing "jQuery 1.3 Beta 2" (otherwise your
    ticket will get confused with another release).
-   Email a link to your test case and bug report to the [jQuery Dev
    list](http://groups.google.com/group/jquery-dev) so that the dev
    team will be notified about your issue.

Thanks to everyone, in advance, for all your help in testing this
release. We're really excited about this release and can't wait to get
it into your hands.
