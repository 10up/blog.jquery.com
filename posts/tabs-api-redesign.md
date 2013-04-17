Continuing with the [API
redesign](http://blog.jqueryui.com/2010/11/accordion-api-redesign/), we
have some changes planned for the Tabs widget. We know that API changes
like this are not without cost to our users, so we'd like to make it
clear that except where specifically noted, **jQuery UI Tabs in 1.9 will
support the 1.8 API as well,**and the deprecated APIs will not be
removed until jQuery UI 2.0.

### API Redesign

**Remove rotation.** The `rotate` method will be removed as it is not
very common and has always been implemented as a built-in extension
anyway. This will actually be removed, not just deprecated in 1.9 since
it has always existed as an extension. Christopher McCulloh has an
[enhanced rotation
extension](%20http://github.com/cmcculloh/jQuery-UI-Tabs-Rotate%20)
based on the original code. **Overhaul ajax tabs** The `ajaxOptions` and
`cache` options are being removed in favor of a new event: `beforeload`.
The `beforeload` event will receive a jqXHR object and the settings
object that will be passed to `jQuery.ajax()`. `ajaxOptions` is replaced
by modifying the settings passed to `beforeload` and caching can be
implemented by calling `event.preventDefault()` to prevent the ajax call
and jump straight to showing the tab. We will also be keeping the `href`
attribute unmodified and storing the panel id in the `aria-controls`
attribute. The `aria-controls` attribute will be set for all tabs,
regardless of whether they are local or remote. This will remove the
need for the `url` method, which is also being removed. It will be
possible to pre-define a value in the `aria-controls` value for remote
tabs, removing the need to specify the location in the `title` attribute
(which is also being removed). The `abort` method will be removed since
the jqXHR object will be directly accessible and you can therefore abort
the ajax call directly. Another benefit of the `beforeload` event is
when paired with the existing `load` event, you can create custom
loading functionality; as such we are removing the `spinner` option.
**Selected vs. active** In order to improve consistency within the
jQuery UI suite, select/selected will be renamed to activate/active
across the board. What this means for tabs is that the `selected` option
will be renamed to `active`, the `select` event will be renamed to
`beforeactivate`, and the `show` event will be renamed to `activate`.
The `beforeactivate` and `activate` options will include references to
the tab and content panel for the old and new tabs, similar to
accordion. In addition, the `select` method will be removed in favor of
the setting the `active` option. Lastly, the `deselectable` option will
be removed in 1.9 since it was deprecated in 1.8. **Remove templating**
All options related to templating are being removed. The templating in
tabs is a one-off implementation and creates an inconsistency with the
rest of jQuery UI. This change includes the removal of the `idPrefix`,
`tabTemplate`, and `panelTemplate` options. **Adding and removing tabs**
The `add` and `remove` methods will be removed in favor of a new
`refresh` method. This is consistent with how new plugins are updated
after initialization. Removing these methods also means that the `add`
and `remove` events are being removed. **Enabling and Disabling tabs**
Tabs will properly support disabling individual tabs or the entire tab
set. A boolean can be used to disable the entire set or an array of
indices can be provided to disable individual tabs. In addition, the
`enable` and `disable` events will be removed for consistency with other
widgets. **Remove length method** The `length` method will be removed as
it doesn't serve much purpose and can easily be calculated by counting
the number of list items. **Remove cookie option** The `cookie` option
will be removed as cookie support is not core to the plugin. Cross-page
state management should be easy, but not be built-in. **Design changes
still in flux** There are a few things that we still haven't fully
worked out. We plan on replacing the `fx` option with `show` and `hide`
options for consistency with other widgets, but are still working
through an open issue of [how to support effects across
plugins](http://bugs.jqueryui.com/ticket/3772). We would also like to
remove the `load` method but we need to verify that it can be built as
an extension. Until we get into the new implementation, we won't know if
this is possible; if it's not, the `load` method will remain in the
plugin.

### Feedback

We'd love to hear your feedback on these changes. We want to make sure
we address any issues the community may have before we finalize and
implement these changes. If you have any feedback, please post it on the
[related forum post](http://forum.jquery.com/topic/tabs-api-redesign).
Thanks.
