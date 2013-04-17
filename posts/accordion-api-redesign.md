jQuery UI is undergoing an API redesign which will slim down the size of
the API in order to provide a more stable codebase that is easier to
learn and use. We'll be posting the proposed changes over the next few
weeks in order to gather feedback from the community. Our goal is to
support the old (current) and new (proposed) APIs simultaneously in 1.9
and then remove support for the old APIs in 2.0. This post lists out the
details of the proposed changes for the Accordion widget along with the
reasoning behind each change.

### API Redesign

**Remove navigation and navigationFilter option.** The
navigation-related options are being removed in favor of setting the
active option during initialization. The built-in navigation filter
didn't always make sense and was turned off by default. We plan on
adding a demo which shows how to implement the current navigation
functionality as well a demo which shows how to use a cookie to store
the active panel. **Merge the autoHeight, fillSpace and clearStyle
options into a new option called fixedHeight** The autoHeight, fillSpace
and clearStyle options all deal with similar issues and therefore cannot
be used together. Having three options for the same feature (how tall
the panels should be) creates a complex and confusing API. These three
options are being replaced by a single boolean option called
fixedHeight. When set to true (the default), all panels will have the
same height. If the accordion has a height of "auto", then all panels
will be as tall as the tallest panel (equivalent of autoHeight: true).
If the accordion has an explicit height, then all panels will be sized
based on that height (equivalent of fillSpace: true). When fixedHeight
is set to false, no calculations will be done for the height of the
panels and they will be sized based on their content (equivalent of
clearStyle: true). **Rename icon.headerSelected option to
icon.activeHeader** This option is being renamed for consistency both
within Accordion (active vs. selected when dealing with the active
panel) and within the full jQuery UI suite. **Remove activate method**
The activate method will be removed in favor of updating the active
option. The inclusion of the activate method doesn't simplify the use of
the accordion and therefore isn't necessary. **Rename resize method to
refresh** This method is being renamed for consistency within the full
jQuery UI suite. However, this will continue to only handle size changes
for now. We do plan on supporting adding/removing panels in the future.
**Rename changestart event to beforeactivate** This event is being
renamed for consistency both within Accordion (activate vs. change when
dealing with the active panel) and within the full jQuery UI suite.
**Rename change event to activate** This event is being renamed for
consistency both within Accordion (activate vs. change when dealing with
the active panel) and within the full jQuery UI suite. **Add
.ui-accordion-heading class** There is currently no class being added to
the headings for each panel. This results in the stylesheet using
`.ui-accordion-header a` for styling, which makes adding additional
anchors to the headers difficult. To solve this, we will add a class to
the first child of each header and use the new class for styling.

### Feedback

We'd love to hear your feedback on these changes. We want to make sure
we address any issues the community may have before we finalize and
implement these changes. If you have any feedback, please post it on the
[related forum
post](http://forum.jquery.com/topic/accordion-api-redesign). Thanks.
