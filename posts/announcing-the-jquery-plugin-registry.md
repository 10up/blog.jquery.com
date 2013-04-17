They say good things come to those who wait, and today we're happy to
end the waiting and unveil the [jQuery Plugin
Registry](http://plugins.jquery.com). We've worked long and hard to put
together a brand new site that will serve to reduce the fragmentation
and distribution problems that can be obstacles for plugin developers
and consumers. We've also put an emphasis on remedying a number of the
issues that plagued the old jQuery plugins site, especially with respect
to workflows for contribution of both plugins and enhancements to the
repository itself. The goal is to make sharing and browsing quality
jQuery plugins a pleasant experience for everyone! **jQuery Plugin
Registry**: [plugins.jquery.com](http://plugins.jquery.com)
**Source/Documentation/Issues**:
[github.com/jquery/plugins.jquery.com](https://github.com/jquery/plugins.jquery.com)

Downloading and Using Plugins
-----------------------------

If you're looking to just browse and use jQuery plugins in your
application or site, not a lot has changed. Plugins each have basic
pages that provide a link to the plugin download, as well as past
versions, documentation, issue tracker, and source code repository.
Download links may serve you a zip file with the plugin assets, or link
to the best resource to download the build of the plugin you're looking
for.

Registering Your Plugin
-----------------------

Registering your plugin and having it listed on the site is not a
complicated process; however, it assumes a number of aspects of the
plugin development process, including using version control
([git](http://git-scm.org)) and providing documentation on how to use
it. You also have to include a `plugin.jquery.json` [package manifest
file](http://plugins.jquery.com/docs/package-manifest), which provides
all the information used to describe your plugin on the registry,
including the version number, as well as the locations of the files and
the documenation. To register and publish your plugin, you'll need to
push your code to a public repository on [GitHub](http://github.com),
and [add our post-recieve webhook
URL](https://help.github.com/articles/post-receive-hooks)
(`http://plugins.jquery.com/postreceive-hook`) to your repository. The
next time you push a [semver](http://semver.org)
[tag](http://git-scm.com/book/en/Git-Basics-Tagging), we'll take care of
registering the plugin name and updating its page on the site. When
you're ready to release the next version of your plugin, just tag and
push again! Users can download your plugin however you'd like them to.
You can link directly to a JavaScript file for your users to save into
their project, take advantage of the GitHub's built-in zip file
distribution, or even link to a custom build tool you may have online
for further configuration. That's it — no uploading files to us, no
wading through forms, and no manual updates for new versions. *(We plan
to support other sites in the future! However, we've only been able to
implement integration with GitHub at this point. If you'd like to assist
with adding
[services](https://github.com/jquery/plugins.jquery.com/blob/master/lib/service),
read on!)*

Contributing to the Plugin Registry
-----------------------------------

Our work building the registry has informed and overlapped with a major
initiative we've taken to open-source all of the content and design of
all jQuery web sites. You've already seen part of this launch with the
new [api.jquery.com](http://api.jquery.com) and
[jqueryui.com](http://jqueryui.com/), and we'll be talking more about
this initiative later this week. As it relates to the Plugin Registry,
it means that everything from the [site
documentation](https://github.com/jquery/plugins.jquery.com/tree/master/pages/docs)
to the [styles and
templates](https://github.com/jquery/jquery-wp-content/tree/master/themes/plugins.jquery.com)
to the [post-receive hook
itself](https://github.com/jquery/plugins.jquery.com/blob/master/scripts/manager.js)
is open source. So if you notice bugs or have ideas, you can raise and
track [issues](https://github.com/jquery/plugins.jquery.com/issues) and
file your fixes as pull requests. You can even [run a local instance of
the site](https://github.com/jquery/jquery-wp-content) to iterate and
test your changes. Of course, if you're a plugin author, you can also
contribute by publishing your plugins to the registry. Even if you
haven't written plugins of your own, you can help out the authors of
your favorite plugins by submitting pull requests that add a
[`plugin.jquery.json`
manifest](http://plugins.jquery.com/docs/package-manifest) to their
plugin's repository.

Be Excellent To Each Other
--------------------------

We know this site has been long in the making, and we're excited to
finally be able to open it up for you to use, whether you're looking for
plugins to use in your app or you want to share your work with other
developers. We're looking forward to seeing lots of new plugins and old
favorites make their way into the registry, so if you're a plugin
developer, we encourage you to get started as soon as you can with the
registration process. Name registration is on a first-come, first-served
basis, and you can't reserve a name prior to releasing a plugin.
However, we recognize there is a huge ecosystem of jQuery plugins
already out there, so especially in these early days of the registry's
existence, we do ask that authors reserve judgment and respect for other
popular, widely-adopted plugins that may already have a reasonable
historical claim to a particular name, even if it has not yet been
registered. By and large, we hope that this will discourage "land grab"
registrations, but we may step in to manually resolve a situation,
should a particularly egregious case arise. "Squatting" on a plugin name
is similarly disallowed, and may result in removal without warning!
(**Translation**: [Ben Alman's BBQ (Back Button &
Query)](https://github.com/cowboy/jquery-bbq/) plugin has long been a
popular tool for working with the `location.hash` for navigation. Now is
**NOT** a good time to create and register a sweet plugin for marking up
quotations and call it the jQuery BBQ (`<bold>`,`<blockquote>`, & `<q>`
plugin!)

That's All, Folks
-----------------

Thanks for your patience. Now go forth and
[publish](http://plugins.jquery.com/docs/publish/)! Should you encounter
any trouble, please [file
issues](https://github.com/jquery/plugins.jquery.com), join us in the
[\#jquery-content channel](irc://freenode.net:6667/#jquery-content) on
[freenode](http://freenode.net), or send an e-mail to [plugins at jquery
dot com](mailto:plugins@jquery.com)
