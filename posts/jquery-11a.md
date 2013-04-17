As [previously
announced](http://blog.jquery.com/2006/12/27/the-path-to-11/), today
we're bringing you the alpha release of **jQuery 1.1**. We'd really
appreciate it if you could help us test this alpha, so that we can have
a stand-up release this weekend - just in time for jQuery's 1 Year
Anniversary! (January 14th) This is going to be a fantastic release. In
fact, this release is so good that we're going to be taking this entire
week to tell you about what's new and how you can best use it. The
Evangelism team has a bunch of stuff lined up to get you introduced and
ready to use this great new version of jQuery. Here's the
quick-and-dirty on jQuery 1.1:

-   Its selectors are 10-20x faster than those in jQuery 1.0.4.
-   The [documentation](http://docs.jquery.com/) has been completely
    revamped.
-   The complexity of the API has dropped by **47%**.
-   It has a ton of bug fixes.
-   It has a bunch of great new features.
-   ... and it's still the small 19KB that you've come to expect.

We're going to have the full run down during the next couple days, but
for right now, it's shaping up to be a great release.

### Download

-   [Download Uncompressed](http://jquery.com/src/jquery-1.1a.js)
    (**Testing Only!**)
-   Please submit new bug reports here: [New Bug
    Report](http://jquery.com/dev/bugs/new/)

### API Changes

**NOTE:** We will release a backwards compatibility plugin together with
the full release of jQuery 1.1, when it is released this weekend. It's
important to note that there's been a lot of API changes. Some in the
form of additions, some in the form of reorganization. If you'd like to
help us test this alpha release, please keep these changes in mind:
**:nth-child() now starts at 1, instead of 0.** Our implementation of
the CSS 3 selector started its numbering at 0, instead of 1. This is a
bug fix, but one that may effect your code.

    // 1.0.x: Get the first column from a table
    $("td:nth-child(0)")

    // 1.1: Get the first column from a table
    $("td:nth-child(1)")

The following **methods have been renamed/reorganized** in this version,
here is how you can continue to use them, as you would expect:

  Old Way (1.0.x)     New Way (1.1)
  ------------------- -------------------------
  .ancestors()        .parents()
  .width()            .css("width")
  .height()           .css("height")
  .top()              .css("top")
  .left()             .css("left")
  .position()         .css("position")
  .float()            .css("float")
  .overflow()         .css("overflow")
  .color()            .css("color")
  .background()       .css("background")
  .id()               .attr("id")
  .title()            .attr("title")
  .name()             .attr("name")
  .href()             .attr("href")
  .src()              .attr("src")
  .rel()              .attr("rel")
  .oneblur(fn)        .one("blur",fn)
  .onefocus(fn)       .one("focus",fn)
  .oneload(fn)        .one("load",fn)
  .oneresize(fn)      .one("resize",fn)
  .onescroll(fn)      .one("scroll",fn)
  .oneunload(fn)      .one("unload",fn)
  .oneclick(fn)       .one("click",fn)
  .onedblclick(fn)    .one("dblclick",fn)
  .onemousedown(fn)   .one("mousedown",fn)
  .onemouseup(fn)     .one("mouseup",fn)
  .onemousemove(fn)   .one("mousemove",fn)
  .onemouseover(fn)   .one("mouseover",fn)
  .onemouseout(fn)    .one("mouseout",fn)
  .onechange(fn)      .one("change",fn)
  .onereset(fn)       .one("reset",fn)
  .oneselect(fn)      .one("select",fn)
  .onesubmit(fn)      .one("submit",fn)
  .onekeydown(fn)     .one("keydown",fn)
  .onekeypress(fn)    .one("keypress",fn)
  .onekeyup(fn)       .one("keyup",fn)
  .oneerror(fn)       .one("error",fn)
  .unblur(fn)         .unbind("blur",fn)
  .unfocus(fn)        .unbind("focus",fn)
  .unload(fn)         .unbind("load",fn)
  .unresize(fn)       .unbind("resize",fn)
  .unscroll(fn)       .unbind("scroll",fn)
  .ununload(fn)       .unbind("unload",fn)
  .unclick(fn)        .unbind("click",fn)
  .undblclick(fn)     .unbind("dblclick",fn)
  .unmousedown(fn)    .unbind("mousedown",fn)
  .unmouseup(fn)      .unbind("mouseup",fn)
  .unmousemove(fn)    .unbind("mousemove",fn)
  .unmouseover(fn)    .unbind("mouseover",fn)
  .unmouseout(fn)     .unbind("mouseout",fn)
  .unchange(fn)       .unbind("change",fn)
  .unreset(fn)        .unbind("reset",fn)
  .unselect(fn)       .unbind("select",fn)
  .unsubmit(fn)       .unbind("submit",fn)
  .unkeydown(fn)      .unbind("keydown",fn)
  .unkeypress(fn)     .unbind("keypress",fn)
  .unkeyup(fn)        .unbind("keyup",fn)
  .unerror(fn)        .unbind("error",fn)

I realize that's a long list - but you'd be surprised how much of that
no one was using. By removing all of those methods we've been able to
reduce the size of the jQuery API by 47%. We're going to have more
information about the API changes in particular, but for now, this list
should help you to sort out any major differences in your code. If you
have any questions, feel free to post them here in the comments and
we'll get them answered right away.
