[Microsoft](http://microsoft.com) has submitted it's second proposal to
the jQuery Project outlining a plugin that allows properties within
objects to be linked to each other. Termed "data linking", the new
plugin would allow changes made to a property of one object to effect a
change on the property of a secondary object. The plugin
leverages[jQuery's "special events"
API](http://brandonaaron.net/blog/2009/03/26/special-events) to create a
new event that will trigger when a change occurs on a bound object
property. This would allow a developer to link properties in the
following way:

> var person = {}; \$("\#name").linkTo("val", person, "name");
> \$("\#name").val("foo"); alert(person.name); // foo // ... user
> changes value ... alert(person.name); // user typed value

The proposal has been submitted via the jQuery forums and Microsoft is
actively soliciting community feedback:
[http://forum.jquery.com/topic/proposal-for-adding-data-linking-to-jquery](http://forum.jquery.com/topic/proposal-for-adding-data-linking-to-jquery)
A prototype of the data linking is available for review via Github:
[http://github.com/nje/jquery-datalink](http://github.com/nje/jquery-datalink)
We're pleased to see Microsoft's continued contribution to our open
source community and ask that you provide feedback in guiding this
effort along.
