After much wailing and gnashing of teeth by certain members of the
[discussion mailing list](http://jquery.com/discuss/) (read: me), we now
have automated nightly builds of jQuery ready for mass consumption.
These builds came about at the request of we community members who would
like to experiment with the most recent features of jQuery on our
projects, but who, for whatever reason, find ourselves behind firewalls
that restrict our access to the [subversion
repository](http://docs.jquery.com/Downloading_jQuery). Without further
ado, here are the gory details: You can get your bleeding-edge-jQuery
fix at
[http://jquery.com/src/nightlies/](http://jquery.com/src/nightlies/).
This folder will simply show you a list of available files. There are 4
files in there in which most of you will be most interested...

1.  [jquery-nightly.js](http://jquery.com/src/nightlies/jquery-nightly.js)
    - Pretty self-explainatory. It's the uncompressed jQuery. Mmmm...
    fresh from the repository
2.  [jquery-nightly.pack.js](http://jquery.com/src/nightlies/jquery-nightly.pack.js)
    - As the more perceptive of you have already guessed, it's the
    [packed](http://dean.edwards.name/packer/) version of \#1
3.  [jquery-nightly.release.zip](http://jquery.com/src/nightlies/jquery-nightly.release.zip)
    - This contains the docs, test suite, and all of the pre-built
    versions of jQuery
4.  [jquery-nightly.build.zip](http://jquery.com/src/nightlies/jquery-nightly.build.zip)
    - Is the real win for we poor souls behind the fiery-walls of the
    corporate world. It contains the full jquery path from the repo, and
    is everything you need to build your very own jQuery

The nightlies folder will also fill up with dated versions of all 4 of
these files so that you can go find jQuery at whatever vintage you
prefer. New versions of the nightlies will be added every day at 2am EST
(7am GMT), and will consist of the most recent revision from the
subversion repository at that time. If all of this talk of subversion,
repositories, bleeding-edge, and nightly building makes the stability
craving web deveoper inside you run away screaming, fear not. The
[stable release download](http://jquery.com/) you need is still right
here waiting for you. Thanks go to [John Resig](http://ejohn.org/) for
hooking us up with the server-side magic that got this automated build
process running (not to mention for the server, the bandwidth, and for
jQuery in general :) ).
