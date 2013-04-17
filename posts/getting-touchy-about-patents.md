Touch events have become a hot topic for web developers as more and more
companies move into the mobile space. Most of us know that touch events
support single and multi-touch tracking. Some of us know the trickiness
of working with touch and mouse at the same time. Fewer know that there
are multiple touch event models, and even fewer have tried to support
multiple models at the same time. I’d like to talk about where we are
today, how we got here, and the potential problems we may face in the
future.

A Brief History
---------------

Back in 2007, Apple introduced the iPhone, and with it came touch
events. Neil Roberts sums up the Apple implementation well in a [SitePen
article](http://www.sitepen.com/blog/2008/07/10/touching-and-gesturing-on-the-iphone/):
“Though at first the APIs seem a little sketchy, once you’ve learned
them you should be able to do amazing things in your application.” Sure
enough, we’ve seen plenty of amazing things, without too much complaint
of the “sketchy” API. This model was later implemented by Android,
Nokia, RIM, Opera, and others. Apple’s implementation is still only
available in their private fork of WebKit; it wasn’t until the end of
2009 that [touch events first appeared in the main WebKit
repo](http://trac.webkit.org/changeset/51981), coming from the Android
implementation. Also in 2009, the W3C started discussing a unified
pointer model for DOM Level 3 Events. The idea was that touch (including
multi-touch), pen/stylus, and mouse events would be coalesced into a
single model, making it easy to support all pointer types at once.
However, this was abandoned because the goal at the time was to keep the
spec as small as possible in order to become a recommendation faster.
Another two years later (March 2011), Mozilla released Firefox 4,
featuring [their own flavor of touch
events](https://developer.mozilla.org/en/DOM/Touch_events_(Mozilla_experimental)).
The Mozilla model is much closer to the mouse event model and the
abandoned W3C model in that the event objects are flat; properties such
as \`event.pageX\` exist and there is no touch list. If you want to
track multiple touches, you can do so via the event’s \`streamId\`.
Mozilla later deprecated this implementation in favor of an emerging W3C
spec based on Apple’s model. In January 2011, the W3C started drafting a
[Touch Events spec based on the WebKit
implementation](http://dvcs.w3.org/hg/webevents/file/e4446bce8960/touchevents.html).
A few months later, it became a [Working
Draft](http://www.w3.org/TR/2011/WD-touch-events-20110505/), and in
December it became a [Candidate
Recommendation](http://www.w3.org/TR/2011/CR-touch-events-20111215/).
The next month, a [Patent Advisory
Group](http://www.w3.org/2012/01/touch-pag-charter) (PAG) was formed in
order to investigate [patents disclosed by
Apple](http://www.w3.org/2004/01/pp-impl/45559/status#disclosures).
Apple’s absence from the Touch Events Working Group (WG) and their
patent disclosure has caused the W3C to [stop work on the
spec](http://lists.w3.org/Archives/Public/public-hypertext-cg/2012JanMar/0043.html)
and they do not plan to continue until the PAG has concluded and/or
makes a recommendation to the WG. As of this writing, the PAG has not
made a decision about the impact of the patents, but the group’s goal is
to reach a speedy conclusion. Meanwhile, Microsoft took a different
approach to touch and has implemented their own [pointer
events](http://msdn.microsoft.com/en-us/library/hh673557.aspx) in IE10
with the [MSPointerEvent
object](http://msdn.microsoft.com/en-us/library/windows/apps/hh441233.aspx).
The MSPointerEvent object is similar to the original Mozilla
implementation, in that the event objects are flat and contain a
\`pointerId\` property. However, there are some important differences
between MSPointer and all of the other models, which are touch-specific.
*Note: The above is just a brief history of touch events on the Web; if
you’re interested in the history of touch interfaces, you might want to
check out Bill Buxton’s [Multi-Touch Systems that I Have Known and
Loved](http://www.billbuxton.com/multitouchOverview.html).*

Pointer Events vs. Touch Events
-------------------------------

As mentioned above, generic pointer events such as the original W3C idea
or MSPointer, have the benefit of supporting multiple pointer devices.
In fact, with a Samsung tablet running Windows 8, mouse, pen, and
fingers are all normalized to MSPointer; you can even use the
\`pointerType\` property to determine which type of pointer is being
used. In addition to supporting all current pointer devices, MSPointer
is designed in such a way that future devices can easily be added, and
existing code will automatically support the new device. Even better,
MSPointer event objects have the same structure as other events,
reducing the learning curve compared to the conglomerate of TouchEvent,
TouchList, and Touch. Another big difference between MSPointer and Touch
is that MSPointer has support for hovering (over and out events). While
most touch devices have a hardware limitation that doesn’t allow for
hovering, Sony recently announced the [Xperia
sola](http://developer.sonymobile.com/wp/2012/03/13/newest-sony-smartphone-announced-xperia-sola-bringing-magical-floating-touch-technology-video/)
with “magical floating touch technology.” This brings up an important
issue: Touch Events were designed based on a specific device for a
specific type of input. Pointer Events represent a completely different
approach to input on the Web. While we’ve already covered how this
impacts developers, it’s interesting to consider the impact on hardware
manufacturers. In order for Apple to succeed with touch interfaces, they
had to create a new event model. Innovation for new form factors and new
input methods will either be stifled by the existing standards or will
require a new set of APIs, following in Apple’s footsteps with the
iPhone and Touch Events. Pointer Events provides a clean solution not
only for developers, but for hardware manufacturers as well. It’s
conceivable that in a few years developers could use Pointer Events as
the only event model for pointers, leaving Mouse Events as a thing of
the past.

A Splintered Future
-------------------

Although the W3C is still planning to move forward with the Touch Events
spec (pending a recommendation from the PAG), the future is unclear.
Even if the PAG determines that Apple’s patents don’t apply and the spec
becomes a W3C Recommendation, it’s not clear that Microsoft would
implement such a model given the need for a multi-input event system in
Windows. If the W3C were to change directions and start a Pointer Events
spec, it’s not clear that Apple, or more broadly WebKit, would implement
the new event model. It’s entirely possible that even with a W3C
Recommendation, we’ll be stuck for years without a consistent event
model across browsers and devices. Regardless of which model the W3C
chooses to pursue, jQuery is dedicated to filling in the gaps, just like
we do for other events such as submit and change. We think the pointer
event model is easier to use and more future-proof, and we hope that it
can be standardized, even if Touch Events are standardized as well.
However, we are only interested in normalizing to a W3C Recommendation,
and will not provide custom pointer events if there is no official W3C
specification. We’re working with the W3C and Microsoft to try to find
the best way forward for our users and the Open Web.

Call to Action: Microsoft to Submit Pointer Event Proposal
----------------------------------------------------------

We would like to publicly call upon Microsoft to submit a proposal to
the W3C for Pointer Events. The Touch Events Working Group, and by
extension various browser vendors, have stated interest in pointer
events. The most effective way to proceed would be for Microsoft to
officially submit a proposal to the W3C.

Call to Action: Community to Experiment with Both Event Models
--------------------------------------------------------------

We would also encourage the community to experiment with Touch and
MSPointer. Play with the APIs, build apps, and provide feedback. If
you’re interested in this, but don’t have the necessary hardware,
consider pairing up with one or more local developers who do. While
there are a lot of developers building on top of Touch, there are very
few people building on top of MSPointer, and even fewer publicly
comparing them. We encourage you to send your feedback directly to the
[W3C public-webevents mailing
list](http://lists.w3.org/Archives/Public/public-webevents/), but feel
free to leave feedback here and we will pass it along.

Call to Action: Submit Prior Art
--------------------------------

If you know of any prior art for multi-touch/touch lists, even outside
of the Web, please [get in touch with the
W3C](http://lists.w3.org/Archives/Public/public-webevents/). This
includes programming models and APIs, especially those using events.
This will help the Patent Advisory Group come to a conclusion sooner.
Again, if you’d rather leave comments here, we will pass them along.
