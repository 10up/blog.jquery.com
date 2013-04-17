![RailsConf
2007](http://blog.jquery.com/wp-content/uploads/2007/05/railsconf_logo.gif)
I'm happy to announce that my proposal for a [Birds of a
Feather](http://conferences.oreillynet.com/pub/w/51/bof.html) session
about "[jQuery on
Rails](http://conferences.oreillynet.com/cs/rails2007/view/e_sess/14591)"
at [RailsConf](http://conferences.oreillynet.com/rails/) has been
accepted! If you're at RailsConf, please come by room c125 on Thursday
night at 9:30pm and join in the discussion. I'll be chatting about my
ongoing work on jQuery on Rails, and should have some code to demo if
anyone would be interested. If you're interested in hearing about how
others have solved problems regarding the integration of jQuery with
Rails, or just want to share something cool you've done, swing on by.
See you there!

### More Details

[Yehuda](http://www.yehudakatz.com/) has just posted more details on
[how jQuery on Rails
works](http://yehudakatz.com/2007/05/17/jquery-on-rails-a-fresh-approach/):

> Since I last publicly discussed jQuery on Rails, Iâ€™ve gone down a
> lot of avenues, and written a lot of code, and came to some
> conclusions:
>
> -   jQuery and Unobtrusive JavaScript are fundamentally incompatible
>     with an attempt to describe behavior inside markup, as Rails does
>     via â€œJavaScript helpers.â€?
> -   Attempts to fix the problem, specifically UJS for Rails, still
>     require that you include your JS behaviors in your views, which
>     are then marshalled into JavaScript files on the fly (and cached
>     as appropriate). If you wanted to include the same JS behavior in
>     multiple pages, youâ€™d need to create custom helpers and call out
>     to them.
> -   jQuery is already the perfect mechanism for unobtrusive
>     JavaScript, baked right into the library
> -   The biggest problem faced by jQuery developers is not simplicity
>     (which, again, you get for free in the library), but difficulty in
>     including the correct jQuery â€œmodulesâ€? in the Rails views that
>     require them.
>
> The most common problem with using jQuery with Rails in an app of
> moderate or higher complexity is the trade-off between including
> everything in a single application.js (which can lead to serious
> slowdowns in larger apps) and having multiple, modular files (which
> are a serious pain to include correctly as needed). This is a problem
> for jQuery users who want to use Rails more than Rails users who are
> used to Prototype helpers and want to be able to use the jQuery
> library as a drop-in replacement. In the first release of jQuery on
> Rails, I will be targeting jQuery developers who want to work with
> Rails. In other words, jQuery on Rails is for you if you know jQuery
> or are willing to use jQuery. This release of jQuery is not for you if
> you donâ€™t want to learn jQuery, and want to program purely in Ruby.
> There will be a future release that will include some features for
> pure-Ruby developers, but I maintain that Unobtrusive JavaScript is
> fundamentally incompatible with that mode of thinking. With all that
> said, what does jQuery on Rails actually do? First up, itâ€™s a Rails
> plugin, which you activate by adding \<%= include\_jquery %\> in your
> application.rhtml. When your server is started, itâ€™ll parse all of
> your JavaScript files, and identify selectors in those files. When
> include\_jquery is called in your layout, itâ€™ll get the rendered
> HTML and use Hpricot (which shares syntax with jQuery) to determine
> whether any instances of the selectors identified on server startup
> are present. The JavaScript files that have selectors that are also
> present in your HTML will be loaded, and run as expected. So in short:
>
> -   Create your JavaScript files, using selectors as usual
> -   Use include\_jquery in your layout
> -   Youâ€™re done

