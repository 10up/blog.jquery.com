The jQuery team has been working hard on the new release of the jQuery
library and it's ready for some in-depth testing! jQuery 1.3 is not
ready for production use yet but we need help to weed out any bugs that
might've snuck through. **Download** A copy of jQuery 1.3b1 can be found
here:

-   [http://code.jquery.com/jquery-1.3b1.js](http://code.jquery.com/jquery-1.3b1.js)

Please don't use minified or packed versions of jQuery when testing - it
makes locating bugs difficult. **Major Areas of Change** Here are some
of the areas that have seen major changes and are most likely to cause
problems in your code:

-   Selector Engine - The selector code has undergone a complete rewrite
    - it's likely that some edge cases still exist here.
-   DOM Manipulation (append/prepend/before/after) - This code has also
    undergone a large rewrite along with some of the logic for executing
    inline script elements.
-   .offset() - Another method that has been completely rewritten.
-   Event Namespaces - The logic for handling namespaced events has been
    completely rewritten.
-   Event Triggering - When triggering an event the event now bubbles up
    the DOM - this is likely to cause some problems.

While we won't get into the particulars of all the new features that are
in jQuery 1.3 (we'll do that later, when it's ready for final release -
scheduled for January 14th) we do appreciate any/all feedback that you
can provide. **How to provide feedback:**

-   Submit a bug to the [jQuery bug tracker](http://dev.jquery.com/)
    (you will need to create an account, first).
-   Be sure to include a simple test case for any problem that you're
    experiencing (either attach the test case or provide a link).
-   Mention that you're testing "jQuery 1.3 Beta 1" (otherwise your
    ticket will get confused with another release).
-   Email a link to your test case and bug report to the [jQuery Dev
    list](http://groups.google.com/group/jquery-dev) so that the dev
    team will be notified about your issue.

Thanks to everyone, in advance, for all your help in testing this
release. We're really excited about this release and can't wait to get
it into your hands.
