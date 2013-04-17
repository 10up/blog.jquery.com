**Update:** I have completely refactored jcheat and added substantial
new functionality, including a ton of filters that can be used in any
combination. Do a gem update and run jcheat -h for full usage details. I
released a new tool, jquery-cheat, that allows you to get information
about the jQuery API directly from the command-line. You can get the
description of a function, a list of functions in each module, search
the list of all function descriptions for a string, get a list of all
functions whose name match a string, and some other cool tricks. Some
examples:

    # jcheat desc clearForm
    --------------------------------------------------------------------------------
    Name:         clearForm()
    Description:  Clears the form data.
                  
    Details:      Clears the form data.  Takes the following actions on the
                  form's input fields:  - input text fields will have their
                  'value' property set to the empty string  - select elements
                  will have their 'selectedIndex' property set to -1  - checkbox
                  and radio inputs will have their 'checked' property set to
                  false  - inputs of type submit, button, reset, and hidden will
                  *not* be effected  - button elements will *not* be effected
                  
    Returns:      jQuery
    --------------------------------------------------------------------------------
    |                                   EXAMPLES                                   |
    --------------------------------------------------------------------------------
    ---------------
    | Description |
    ---------------
    Clears all forms on the page.

    --------
    | Code |
    --------
    $('form').clearForm();

    # jcheat namelike $.ajax
    $.ajaxTimeout(time) in Ajax
    $.ajaxSetup(settings) in Ajax
    $.ajax(properties) in Ajax

    # jcheat like clear field
    clearForm() in Plugins/Form
    clearFields() in Plugins/Form

You can grab the tool by doing:

    gem install jquery-cheat -y

The -y is so that it automatically includes hpricot, a required
dependency.
