As [previously
stated](http://blog.jqueryui.com/2010/11/accordion-api-redesign/),
jQuery UI is undergoing an API redesign which will slim down the size of
the API in order to provide a more stable codebase that is easier to
learn and use. This post lists out the details of the proposed changes
for the Progressbar widget along with the reasoning behind each change.

### API Redesign

**Add support for indeterminate progress bars.** We had previously said
that indeterminate progress bars should be a separate widget. However,
there is a common enough use case where you may want to start providing
feedback about that a task has started before you know the actual
progress. In this case you may want to start with an indeterminate
progress bar and switch to a determinate progress bar as soon as you
have enough information to provide details. In order to support this, we
will allow the value option to be set to false to indicate that the
progress bar should be indeterminate. Switching from an indeterminate
state to a determinate state would look like this:

    $( "#progressbar" ).progressbar({
        value: false
    });

    // later when you find out more information
    $( "#progressbar" ).progressbar( "option", {
        value: 15,
        max: 250
    });

### Feedback

We'd love to hear your feedback on these changes. We want to make sure
we address any issues the community may have before we finalize and
implement these changes. If you have any feedback, please post it on the
[related forum
post](http://forum.jquery.com/topic/progressbar-api-redesign). Thanks.
