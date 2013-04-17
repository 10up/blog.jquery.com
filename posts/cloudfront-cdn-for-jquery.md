Here at jQuery we've been using [Amazon S3](http://aws.amazon.com/s3/)
to host the jQuery code and static site files for quite some time. It's
remained dependable and quite responsive. Yesterday Amazon released
their new service, called
[CloudFront](http://aws.amazon.com/cloudfront/). The major difference
between it and S3 (they are both designed to serve files) is all about
network performance. Whereas S3 was just about instantaneous control
(being able to upload a file and see it live, instantly) - CloudFront
tries to serve up a file as quickly as possible. Yesterday we made the
switch to using CloudFront for the jQuery site. The two domains that are
affected are:

-   `code.jquery.com` - Hosts the jQuery source code.
-   `static.jquery.com` - Hosts all the jQuery site images, CSS, and
    JavaScript files.

Whereas S3 only had servers in Seattle, CloundFront has servers [across
the globe](http://aws.amazon.com/cloudfront/#details) - allowing the
site to load much-more-quickly no matter where you're located. Some
initial numbers of come in and they're quite promising. [Roland
Moriz](http://moriz.de)
[posted](http://twitter.com/rmoriz/status/1012654392) about the
[improvement in latency](http://gist.github.com/26467) that he's seen in
Germany - with static.jquery.com coming in at 24ms latency in comparison
to jquery.com's 105ms latency. I ran a similar test here in Boston and
even managed to see a [large improvement](http://gist.github.com/26517).
I was seeing latency of anywhere from 50-200ms on Amazon S3, but only a
latency of 17-19ms with CloudFront. What does all of this mean? It means
that the jQuery site is going to load even faster than it does now. We
already receive some excellent hosting from [Media
Temple](http://mediatemple.net/) but being able to off-load these static
files to the fast-loading servers will only make for a better browsing
experience. It also means that the jQuery project can expect to be
paying even more in hosting costs. In less than 24 hours we've already
had almost 2.5 million requests for over 50GB of data.

![](http://ejohn.org/files/cloudfront.sm.png)

We pay all of these costs out of our own pocket - so **a
[donation](http://docs.jquery.com/Donate)** will significantly help us
to make sure that we can keep providing a fast jQuery web site. It
should also be noted that CloudFront doesn't appear to provide any sort
of GZip compression on the transferred data. Because of this I still
recommend that you use the Google Ajax Libraries API to load your copy
of jQuery, done like so:

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

If you're unfamiliar with the [Google Ajax Libraries
API](http://code.google.com/apis/ajaxlibs/) I highly recommend that you
check in to it - we use it on jquery.com and it's still the fastest way
to serve up jQuery (Hosted by Google, Gzipped, and Minified).
