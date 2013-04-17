There is a good [article about client-side form
validation](http://frontendbook.com/form-validation-with-javascript) on
the Interaction Design Blog. It describes important points to keep in
mind when building your own framework for client-side validation. Of
course the alternative to building your own framework is to use an
[existing
one](http://bassistance.de/jquery-plugins/jquery-plugin-validation/).
This approach yields some important advantages, amonst them the "given
enough eyeballs, all bugs are shallow" principle. Lets see how well the
validation plugin currently performs on the points listed in the
article: *1. Use a form validation framework or a form validation
library* Check. *2. Focus on solving the big validation problems*

> As soon as you start developing and implementing your validation, it
> is easy trying to address all potential validation that is needed for
> all types of input. My advice is to try to catch 75-85% of the
> potential user input errors in the front-end validation. Trying to
> catch all will lead to the following:
>
> -   Bloated code, your framework will grow too large
> -   More or less impossible to test client side validation as there
>     are too many combinations of validation that can go wrong
> -   Business rules will move to the front-end.(More on how to avoid
>     this by using Ajax later)
>
> Well, bloated code is a problem I tried to address with lots of
> refactoring. The current codebase has 1446 lines (about half of it
> being inline documentation). A few weeks ago [Dan G.
> Switzer](http://pengoworks.com/) took a look at the plugin and was
> able to provide excellent help on specific code-related problems
> within a few hours. About testing: The current testsuite for the
> validation plugin runs 65 tests with over 350 assertions. jQuery's
> testsuite runs about 500 assertions. I seems to have a good code
> coverage, as I added tests for all occuring issues whenever possible.
> Regression issues are quite likely to be catched by the testsuite, as
> well as it helps a lot while developing. Testing against browser
> events and with AJAX is still a very difficult task, even with the
> AJAX support in jQuery's testsuite. About business rules moving to the
> front end: Thats more of a design and architectural problem. Avoiding
> that using AJAX gets supported with the upcoming 1.2 release. *3. Do
> Form Validation before form is submitted* The message here is to
> validate when the user inputs something, instead of waiting for the
> submit event. Pre 1.0 versions allowed you to specify a single event
> to check individual elements, eg. blur or keyup. That worked in some
> cases, and was disturbing in other cases, where the user clicked on an
> input and was welcomed with an annyoing error message. To address
> those issues, a more sophisticated system was released in 1.1.
> Basically the plugin waits with validation until the user blurs a
> field where he entered something incomplete. If the field is already
> marked invalid (eg. after an attempt to submit an invalid form), all
> elements are validated on keyup (textinputs) or click (checkbox,
> radio). The current implementation isn't perfect yet, and of course
> feedback is appreciated. *4. Use Ajax Form Validation for business
> data input* A small teaser for the AJAX validation in 1.2:
>
>     $("#myform").validate({
>       rules: {
>         username: {
>           required: true,
>           minLength: 2,
>           remote: "users.php"
>         }
>       },
>       messages: {
>         username: {
>           required: "Enter your username",
>           minLength: "At least 2 characters are necessary",
>           remote: String.format("The name {0} is already in use")
>         }
>       }
>     });
>
> The API allows you to use the same declarative style for remote
> validation as you are used to use for local validation.
> `String.format` creates another function that is later called with the
> value the user entered, resulting in something like "The name asdf is
> already in use" as the error message. Check the [AJAX validation
> preview](http://jquery.bassistance.de/ajax-validation/demo-test/milk/)
> for more details. *5. Do extensive testing of your javascript form
> validation* That is covered [above](#testing). *6. Rewrite input data
> to valid formats* Now this is an interesting point. Basically the idea
> is to accept "20070515" as a valid date, transforming it into
> "2007-05-15" for validation. I haven't seen any specific requests for
> a feature like this, so if anyone is interested, let me know.
> Meanwhile a good idea may be to use the [masked input
> plugin](http://digitalbush.com/projects/masked-input-plugin) to help
> and assist the user typing the correct format. *7. Attach javascript
> form validation late in the design process* That is a very good
> recommendation. jQuery helps a lot with this, due to its unobtrusive
> nature. Design your form without any JavaScript at all, and add it
> later, improving the user experience (UX) as much as possible. *8.
> Make the script i18n- and l10n-compatible* In other words: Avoid
> hard-coded strings, instead make it as easy as possible to replace
> them with the current locale. The validation plugin allows you to
> translate all default messages by just overwriting them. Its easy to
> include a file after the plugin file that contains something like the
> following:
>
>     $.extend($.validator.messages, {
>       required: "Eingabe nÃ¶tig",
>       email: "Bitte eine gÃ¼ltige E-Mail-Adresse eingeben",
>       ...
>     });
>
> That approach works quite well. You can gather other translation in
> the same file, for example labels for the
> [datepicker](http://kelvinluck.com/assets/jquery/datePicker/v2/demo/).
> To include the proper right translation file for the user's locale is
> then a mere serverside issue. Other problems, eg. different number or
> date formats, can be covered by writing custom methods, or overwriting
> the default ones (in \$.validator.methods). Methods for german date
> and number formats are provided by default: date (default JavaScript
> Date format), dateISO (1990-01-01 or 1990/01/01), dateDE (01.01.1990
> or 2.12.2012) and number (100,000.59) and numberDE (100.000,59) are
> available. Though currently none of those validates any ranges, eg.
> 0001-13-50 is also a valid iso date. *9. Add callback functions to
> validator framework* The most important callback function the
> validation plugin provides is the `submitHandler`. It is called when a
> valid form is submitted, allowing you to eg. submit the form via AJAX.
> Others are available like `errorPlacement`, to customize where error
> messages are inserted into the DOM, eg. for table layouts. In 1.2 a
> callback for invalid forms gets added, called each time the user
> submits a form and it is invalid. So far the `showErrors` callback
> could be used for that, but that one gets also called each time is
> single element is validated. The new callback can then be used to
> update a message like "There are 6 issues in the form below". Showing
> and hiding such a message can be handled using the existing
> `errorContainer` options. *10. Make your framework/library extensible*
> The most important point to extend the validation plugin with your own
> stuff is `$.validator.addMethod`. It allows you to add any validation
> method you need. By keeping your own custom methods inside your own
> files it is easy to update the plugin itself. Its quite likely that
> the first approach to AJAX validation will evolve into
> `$.validator.addRemoteMethod`, providing all the necessary boilerplate
> code for remote AJAX methods, but allowing you use any required
> protocol. It won't matter if you use get or post, send a single value
> or the whole form to the server, and if the server returns only true
> or false, or an error message to display, in whatever format you
> prefer or need to work with. Of course it would require a bit more
> work to implement the method, but provides a great flexibility. Your
> feedback on this is essential, as I avoid to randomly guess what you
> may need. I hope this gives a good idea about the current status of
> the form validation and its progress and should help with the
> descision to use it or not.
