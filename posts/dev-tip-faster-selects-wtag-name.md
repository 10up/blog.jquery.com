jQuery provides an extremely versatile DOM query mechanism. If you're
wondering what's happening under the covers, and if there are less- and
more-performant ways to formulate your query . . . the answer is YES. In
many cases you can help jQuery by specifying a tag name, i.e.:

    $("div.class").show()

is faster than:

    $(".class").show()

. . . with the difference being that the query engine can narrow by tag
name first. It's smart like that. So, you shoud be in the habit of
specifying a tag name. The only exception: getting by ID. If you're
getting by ID, do **not** include a tag name, or anything else besides
the ID selector. Note that the second example here (with the class
selector only) is perfectly valid, and if you need to query for multiple
element types, by all means go ahead -- jQuery will still return the
correct results.
