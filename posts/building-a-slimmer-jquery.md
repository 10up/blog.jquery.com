jQuery is more than five years old now! Over that time it has evolved
along with the browsers, web sites, devices, developers, and users that
it serves. It has also, um,
[grown](http://mathiasbynens.be/demo/jquery-size) quite a bit over that
time. jQuery has added a lot of useful features, but it's also
accumulated cruft that we'd prefer not to support into perpetuity. It
may not be an issue on a desktop PC with a high-speed connection, but we
want jQuery to be a good solution for mobile devices as well.

Along with our continuing push for higher performance, our priority for
upcoming versions is a smaller gzipped file size. It's hard to do that
when every new feature or bug fix must also preserve all existing
features and behavior. So today, we want to start a conversation about
slimming down the jQuery API by deprecating some features. Here are our
guidelines for deprecation:

-   We don't believe the feature represents current best practice in the
    use of jQuery.
-   The feature has proven unpopular, confusing, inefficient, or
    ineffective in actual use.
-   It is not practical or feasible to enhance the feature or address
    its limitations.
-   Removing it at some future time could yield notable usability, size,
    or performance benefits.

Deprecation is just the *first* step in a process that you can
participate in. It is our goal to:

-   Explain the reasons for deprecating a particular feature, as
    described above.
-   Give at least one major-point-version, and often more, between
    deprecation and removal.
-   Provide alternatives to deprecated features so that migration is not
    painful.
-   Listen to community feedback regarding deprecation and removal.

Occasionally, as in the situation with event.layerX/layerY in version
1.7, we will make a breaking change with shorter notice if we judge that
it will cause less pain to remove the feature immediately than to leave
it in. Those will hopefully be rare exceptions.

### Version 1.7 Deprecations

With those things in mind, we consider the following features to be
deprecated as of version 1.7. Existing code that uses them continues to
work, but the recommended alternatives are a better choice for
compatibility with future versions.

**.live() and .die()**: We continue to get many bug reports and see user
confusion regarding the quirks of the .live() method. Common issues are
now documented on its [updated API page](http://api.jquery.com/live). We
strongly advise the use of .on() or .delegate() for new code, since they
are better APIs. Given its widespread use it's unlikely we will remove
this API in 1.8, but please do update your code as soon as possible.

**Non-standard event properties:** As part of our push to improve event
handler performance, we are also deprecating the copying of several
event properties from the native event object to the jQuery event object
and will remove them in 1.8: attrChange, attrName, relatedNode, and
srcElement. Instead of accessing these through `event.NAME` you can
access them via `event.originalEvent.NAME` where needed.

**\$.ajax() Deferred aliases:** In version 1.5 we defined
.error()/,success()/.complete() on the jqXHR object as aliases for the
Deferred's .fail()/.done()/.always() methods. Although that seemed like
a good idea at the time, it makes jqXHR a non-standard Deferred. That's
not good. Whenever possible, use the deferred/promise method name in
preference to the jqXHR one. We still have some work to do here to
provide a full migration path, so we are likely to continue supporting
the aliases past 1.8.

**deferred.isResolved() and deferred.isRejected():** Now that Deferreds
and Promises have progress notifications and a convenient .state()
method, we are deprecating these older methods and will remove them in
1.8. Getting the state of an N-state object using N-1 Boolean methods is
a cruel-code version of "Twenty Questions". Deferred-based code rarely
needs to inspect state, and the string returned now is more convenient
for a debugging scenario where it's often used.

**.attr("value") on inputs:** For backwards compatibility, we've been
returning the current value here (as in "what is currently in the input
box") versus the real attribute (what the `value` attribute says in the
HTML). That leaves us no way to provide the true attribute value, and is
confusing since W3C selectors work on the attribute and not the current
value. So we are deprecating this behavior and will remove it in 1.8.
Always use the `.val()` method to get the current live value of an input
element. Until we can reclaim the attribute, you can use
`$("selector")[0].getAttribute("value")` except on IE 6/7 where that
will *still* return the current value. (Our 1.8 solution will get the
attribute value on all browsers and is another reason why we're anxious
to change this.)

**.closest(Array) returning Array:** This signature is a bit of a
strange bird, it was created for use by the old live events code but it
returns an Array rather than a jQuery object. As of 1.8 we plan to
remove it. The other signatures of `.closest()` are here to stay and are
not affected.

**.data("events"):** jQuery stores its event-related data in a data
object named (wait for it) `events` on each element. This is an internal
data structure so in 1.8 this will be removed from the user data name
space so it won't conflict with items of the same name. jQuery's event
data can still be accessed via `jQuery._data(element, "events")` but be
aware that this is an internal data structure that is undocumented and
should not be modified.

**\$.sub() as a plugin:** Although `$.sub()` can be useful for creating
interference-free zones for plugins, it is not used by jQuery core and
not widely used by other code, so we intend to transition it to a plugin
in version 1.8 to save space.

### Looking Towards jQuery 1.8

Given our push for a svelte jQuery, the filter for new features in 1.8
will be stringent. Even performance-related proposals need to be
balanced against the space they use or save. Features that can be
implemented via plugins, special events, attribute hooks, or other
jQuery extension mechanisms are likely to stay outside core for now.

That brings up the question of what we could deprecate in 1.8 and
eventually remove to simplify and streamline the library. Those things
don't have to totally disappear; they could move into a separate plugin,
for example, and only be included when needed. Take a look at how you
use jQuery, and talk about it with your colleagues.

Within a few weeks, we'll be opening the call for your ideas concerning
jQuery 1.8 with another blog post -- so start thinking about it now!

**Edit:** No, we're not removing IE6 support yet, and we can't. As John
Resig mentions at every jQuery Conference, most of the sins of IE6 are
also visited upon IE7 and IE8, which together still have more than
[one-third](http://marketshare.hitslink.com/browser-market-share.aspx?qprid=2&qpcustomd=0)
of desktop browser market share. It doesn't make sense to remove support
for IE6 until we can whack IE7 and IE8 as well.
