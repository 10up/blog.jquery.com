Continuing with the [API
redesign](http://blog.jqueryui.com/2010/11/accordion-api-redesign/), we
have some changes planned for the Position utility.

### API Redesign

**Merge offset option into the my and at options** The offset option
will be removed in favor of including the offset as part of the my or at
options. For example, while you would currently do:

    $( "#elem" ).position({
        my: "left top",
        at: "left top",
        of: "#otherElem",
        offset: "50 20"
    });

You would now do:

    $( "#elem" ).position({
        my: "left+50 top+20",
        at: "left top",
        of: "#otherElem"
    });

Regardless of whether you include the offset in the my or at option, the
offset will always adjust based on the final position, just like the
offset option currently does. We also plan on supporting percentages, so
you can offset the element based on a percent of its width or height. If
you specify a percentage in the my option, then the percentage will be
based on the size of the element being positioned. If you specify a
percentage in the at option, then the percentage will be based on the
size of the element being positioned against. For example, to place an
element 1/4 of the way down the screen and horizontally centered, you
could do:

    $( "#elem" ).position({
        my: "center top",
        at: "center top+25%",
        of: window
    });

And to position an element so that only the left 10% of it is visible,
you could do:

    $( "#elem" ).position({
        my: "left-10% center",
        at: "right center",
        of: window
    });

**Better collision handling** Currently the collision handling is fairly
simple. If you enable collision (by specifying fit or flip) then the
plugin will detect if there is a collision and if there is, it will move
the element accordingly. However, depending on the size of the element,
this adjustment may actually cause even less of the element to be
visible. We plan on making the collision handling smarter so that it
will never make the positioning worse. There will be no change in the
API, just better handling for collisions.

### Feedback

We’d love to hear your feedback on these changes. We want to make sure
we address any issues the community may have before we finalize and
implement these changes. If you have any feedback, please post it on the
[related forum
post](http://forum.jquery.com/topic/position-api-redesign). Thanks.
