Barely six months ago, we announced that we were adopting three plugins
developed chiefly at Microsoft - Templating, Data Link, and
Globalization - as official plugins, to be developed in accordance with
the standards of and supported by the jQuery project. Today, we'd like
to take an opportunity to share what we've learned in the interim and
announce a change in course for these and the rest of jQuery's "Official
Plugins." There never has been a dedicated jQuery team for supporting
Official Plugins. Prior to the adoption of Microsoft's contributions,
the plugins that the jQuery project supported - Color, Easing, bgiframe,
Mousewheel, Metadata, and Cookie - were dead-simple, effective plugins
for achieving a particular utilitarian end. They required little
maintenance, stalwartly serving with little fuss from version to version
of jQuery core. In recent months, as we noticed an uptick in questions
related to the three new plugins, we realized there was a disconnect.
Though development on beta versions of the plugins continued at
Microsoft, the planned jQuery sub-team that was meant to collaborate
with and adopt Microsoft's work never formed. As demand has grown, based
on the existence of the beta versions of the plugins as well as promises
made in the posts, we've sensed the rumbles, the confusion, and the
confused exclamations: "I thought templating was going to be in 1.5!"
Because of your concerns and ours, we've decided to eliminate the notion
of Official Plugins altogether. It's a difference that's both semantic
and symbolic, but this is its material impact: Many of the original
supported jQuery plugins (Color, Easing, and Mousewheel) will continue
to be supported and maintained by the jQuery Core Dev Team. The Metadata
plugin will be deprecated, in favor of similar functionality provided by
jQuery 1.4.3 and above. The [Cookie
plugin](https://github.com/carhartl/jquery-cookie) will continue to be
maintained by Klaus Hartl. The jQuery UI project will take ownership
over plugins on which it has a current or future dependency: Templating,
Globalization, and bgiframe. The jQuery UI team plans to begin work anew
on templating and globalization, starting with the normal process for UI
plugins: Collaborative development on a spec. While some may perceive
this as a setback, given existing progress on the current
[jquery-tmpl](http://api.jquery.com/jquery.tmpl/) plugin, it is really
an opportunity for us to work in tandem with the community -- Microsoft
included -- to develop an implementation that will be effective and
flexible. The "official plugins" Microsoft has been developing have
always been in a beta state, subject to change and with significant
revisions planned for the Beta 2 release, but we recognize (and
appreciate) those of you who have jumped in and started to experiment
and use them in your applications. The UI team is still in the early
planning stages for the [Templating](http://wiki.jqueryui.com/Template)
and Globalization plugins, and we invite you to visit the [planning
wiki](http://wiki.jqueryui.com) and share your thoughts about
development. Microsoft will continue to develop and support the Data
Link plugin independently, and will take ownership of hosting the
documentation for the existing plugins.  In the short term, however,
we'll keep the documentation for these plugins on
[api.jquery.com](http://api.jquery.com), in order preserve a reference
for anyone who needs it. For more on Microsoft's plans for Data Link,
please read [their Official Plugins
Update](http://blogs.msdn.com/b/scothu/archive/2011/04/15/update-on-the-microsoft-jquery-plugins.aspx).
We value Microsoft's ongoing contribution to jQuery, providing developer
time and financial support for a number of efforts, including the jQuery
UI Grid and the jQuery conferences. We realize that some of these
details may seem in flux or merely organizational, but we know that it's
important to tell the community of changes like these as they're
happening so that you can make the best decisions for your applications
as soon as possible. We hope you understand why we've had to make these
shifts and encourage you to get involved and help us push these
important projects along! **Addendum: So Why Weren't Templates in 1.5?**
Though we initially announced that the jquery-tmpl plugin would be part
of jQuery Core in version 1.5, the plugin was, as it is today, still in
the Beta 1 stage. Thus, when the time came last December to really
evaluate new features for 1.5, it was not really considered ready for
inclusion. Given what we've explained above, we hope it's clear that we
don't plan to include templating directly in Core in the near future.
The jQuery UI Templating plugin will be a standalone plugin with no
dependencies on any other part of jQuery UI, and will become the only
templating solution "officially" supported by the project, though jQuery
will, of course, continue to work with any JavaScript templating engine
that spits out good, old-fashioned strings of HTML.
