Continuing with the API redesign, we have some changes planned for the
Dialog widget. We know that API changes like this are not without cost
to our users, so we'd like to make it clear that except where
specifically noted, **jQuery UI Dialog in 1.9 will support the 1.8 API
as well**, and the deprecated APIs will not be removed until jQuery UI
2.0. Read more about the full [jQuery UI API
redesign](http://blog.jqueryui.com/2011/03/api-redesigns-the-past-present-and-future/).

### API Redesign

**Contain focus in dialog** We currently only contain focus inside modal
dialogs. We will be changing this behavior to always contain focus, even
in modeless dialogs. This will bring us more in line with the [DHTML
Style Guide](http://dev.aol.com/dhtml_style_guide#dialognonmodal). We're
not sure about implementing a key command to move the focus out of the
dialog (such as F6) since that would require defining a system to track
where focus should move. **Allow disabling dialogs** Dialogs don't
currently support being disabled. They do inherit the default behavior
of adding the `ui-state-disabled` class, which makes the dialog look
disabled, but the user can still interact with elements in the dialog.
In order to support disabling a dialog, we will place a div over the
dialog to prevent mouse interaction. **Ability to configure which
element gains focus** When opening a dialog, we search for which
elements are tabbable and we focus the first element that we find. If
there are no tabbable elements, then we focus the dialog itself. We will
be adding an `autoFocus` option, which will allow customizing which
element gains focus. The option will accept a function which will return
the element to focus. The default value for the option will be the
current implementation. If no element is found using the option, the
dialog will be focused. **Move dialog back to original DOM position on
destroy** When dialogs are created they are moved to the end of the
body. When dialogs are destroyed, they currently stay at the end of the
body. We will be changing this behavior so the dialog is returned to the
original position, if possible. This will be done by tracking either a
sibling or the parent on create. **Automatic stacking** The `stack`
option controls whether a dialog will move on top of other dialogs when
it gains focus. Since this should always be the case, we will be
removing the option and forcing the behavior. In addition, we will
probably remove the `moveToTop` method since the proper dialog(s) should
always be available to the user based on when they were opened and
whether they are modal or modeless. **Saner modality** The current
implementation for managing modal dialogs is a bit unwieldy, comparing
the z-index of elements and often causing problems. We plan to simplify
the implementation and switch to a hierarchy-based solution instead of a
style-based solution.

### Feedback

We'd love to hear your feedback on these changes. We want to make sure
we address any issues the community may have before we finalize and
implement these changes. If you have any feedback, please post it on the
[related forum post](http://forum.jquery.com/topic/dialog-api-redesign).
Thanks.
