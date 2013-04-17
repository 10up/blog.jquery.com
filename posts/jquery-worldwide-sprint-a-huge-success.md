The jQuery Worldwide Sprint (see [previous
post](http://blog.jquery.com/2008/03/07/jquery-ui-worldwide-sprint-march-14-15/))
is over, and it was a wonderful momentum and great experience for many
of us. We made great use of the [sprint wiki
page](http://docs.jquery.com/JQuerySprint) during the sprint, and it now
serves as a reference of what we accomplished, including meeting
summaries and irc logs. We moved a lot closer to jQuery UI 1.5, and we
had 20+ people actively participating, working in one of four different
groups:

Development Group
-----------------

The [dev group](http://docs.jquery.com/JQuerySprint/dev) was solely
focusing on the codebase of jQuery UI. They fixed more than 20 issues in
our bugtracker, and implemented missing features such as the greedy
option in Droppables. Additionally, we improved the core of UI in a very
positive way: we got rid of two dependancies (jquery.dimensions.js and
ui.mouse.js) and added one (ui.base.js). The impact was so great that
even the core was changed: jQuery itself now includes useful methods
from the Dimensions plugin (more on this in the upcoming blog post).

Test Group
----------

The [test group](http://docs.jquery.com/JQuerySprint/test) focused on
writing and running a full suite of unit tests for each UI Plugin. This
is critical, to ensure that all the features of each plugin are
thoroughly tested in all [supported
browsers](http://docs.jquery.com/Browser_Compatibility). The unit test
coverage after the sprint is about 60%. Our goal is to have it in the
high 90s before 1.5 final.

Demos Group
-----------

The [demos group](http://docs.jquery.com/JQuerySprint/demos) created a
brilliant functional demo template and functional demos for many of our
plugins. Also, many volunteers worked on stunning real-world examples
that show how a specific plugin can be used in a real world scenario.
All demos will flow into the new demo category on our upcoming website.

Documentation Group
-------------------

The [docs group](http://docs.jquery.com/JQuerySprint/docs) had the
pleasure of pouring over the [documentation](http://docs.jquery.com/UI/)
for each UI plugin, comparing to the source code, to unit tests, and
demo pages. They wrote and updated to ensure correctness and clarity,
for even an absolute newcomer to jQuery UI.

Thank you
---------

So after all, we haven't completely reached all of our goals, and we
still have to work hard on fixing all issues still open. But we made
huge progress that certainly wouldn't have been possible without the
combined power of all who helped. Not only this, but the Sprint was also
a great way to introduce and motivate new people to join the UI project.
A big thanks to [everyone who
helped](http://docs.jquery.com/JQuerySprint#Participants) during the
sprint and before the sprint - especially Richard Worth, who had the
initial idea and made this event possible (he did all the hard stuff ;-)
), Eduardo Lundgren, who managed the demo group and worked insanely long
hours during the sprint, and all the others who made huge contributions
on both days. But it's not over until it's over: We stll have to date 46
issues opened in our bugtracker until we are ready to roll out the final
version of UI 1.5. Therefore, we are already thinking about a follow-up
sprint. More on that soon here! See you soon! Paul Bakaus & the jQuery
Team
