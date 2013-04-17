Now that[jQuery UI is hosted on
GitHub](http://github.com/jquery/jquery-ui), it's even easier to start
contributing fixes to the project. Let's walk through the easy way,
where you don't need to learn how to *really* use git. In another post,
we'll cover some best practices for contributing with git. Let's say you
want to submit a patch to the Dialog file, jquery.ui.dialog.js. **Step
1: Sign up for GitHub** (jump on it)

-   [https://github.com/signup/free](https://github.com/signup/free)
-   Enter Username, Email Address, Password, (ignore the SSH Public Key
    field)
-   Click "I agree, sign me up!"

**Step 2: Fork the jQuery UI repository** (become a committer of your
very own copy of jQuery UI)

-   [http://github.com/jquery/jquery-ui](http://github.com/jquery/jquery-ui)
-   Click "Fork"

**Step 3: Modify your fork through the GitHub web interface** (commit
your change without knowing git)

-   http://github.com/{your-username}/jquery-ui
-   Click on the folder and file you want to modify
    -   click "ui/"
    -   click "jquery.ui.dialog.js"

-   When you're viewing the contents of the file you want to change,
    click the "edit" link (top right)
-   Make changes to the file in the editor
-   Enter a Commit Message to [summarize the changes you've
    made](http://wiki.jqueryui.com/Commit-Message-Style-Guide) and why
    you've made them.
    -   This should include a reference to a
        [Trac](http://dev.jqueryui.com/) ticket, formatted like so
    -   "Dialog: modified the foo to no longer bar. Fixed \#1234 -
        dialog: IE6 crashed when foo is set to bar"
    -   Be sure your commit message includes 4 parts: the WHERE, the
        WHAT, the WHY \#Num, and the WHY Name. See the [jQuery UI Commit
        Message Style
        Guide](http://wiki.jqueryui.com/Commit-Message-Style-Guide) for
        more detail.

-   Click "Commit"

**Step 4: Submit a Pull Request** (tell the jQuery UI team why your
change rocks)

-   http://github.com/{your-username}/jquery-ui/blob/{id-of-commit}/ui/jquery.ui.dialog.js
-   Click "Pull Request"
-   Enter a Message that will go with your commit to be reviewed by core
    committers
-   Click "Send Pull Request"

**Step 5: Add a link to your commit to the ticket in Trac**(tell
everyone you're on the case)

-   [http://dev.jqueryui.com/ticket/3945](http://dev.jqueryui.com/ticket/3945)
-   Add a comment that includes a hyperlink to the url of your commit
    from Step 4

**Step 6: Eat a cookie**(yum)

-   You're done!

Now if you need to change multiple files as part of one commit, the web
interface will not be the way to go. In that case you'll want to learn a
little more about GitHub and git. You can start here:

-   Learn GitHub: [http://help.github.com/](http://help.github.com/)
-   Learn Git:
    -   [http://progit.org/book/](http://progit.org/book/)
    -   [http://gitscm.org/](http://gitscm.org/)
    -   [Git
        Magic](http://www-cs-students.stanford.edu/~blynn/gitmagic/)


