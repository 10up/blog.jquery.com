We're nearing the first update to jQuery 1.5 - and we're pleased to
announce the release of the first release candidate! Barring any major
bugs this should be the code that we end up shipping for jQuery 1.5.1
(which will be happening on February 24th).

jQuery 1.5.1 Release Candidate 1
--------------------------------

You can get the code from the jQuery CDN:

-   [http://code.jquery.com/jquery-1.5.1rc1.js](http://code.jquery.com/jquery-1.5.1rc1.js)

You can help us by dropping that code into your existing application and
letting us know that if anything no longer works. Please [file a
bug](http://bugs.jquery.com/) and be sure to mention that you're testing
against jQuery 1.5.1 RC 1. We want to encourage everyone from the
community to try and [get
involved](http://docs.jquery.com/Getting_Involved) in contributing back
to jQuery core. We've set up a [full
page](http://docs.jquery.com/Getting_Involved) of information dedicated
towards becoming more involved with the team. The team is here and ready
to help you help us!

jQuery 1.5.1 RC 1 Change Log
----------------------------

The current change log of the 1.5.1 release.

-   [\#2551](http://bugs.jquery.com/ticket/2551) Make sure .val() works
    after form.reset() in IE
-   [\#4537](http://bugs.jquery.com/ticket/4537) Make sure .clone(true)
    correctly clones namespaced events
-   [\#4966](http://bugs.jquery.com/ticket/4966) Don't add "px" to
    unit-less properties when animating them
-   [\#6774](http://bugs.jquery.com/ticket/6774) Make sure we only
    access parentNode if it's available. Fixes an issue where after an
    option tag has been detached, an elem.parentNode error would be
    thrown.
-   [\#7531](http://bugs.jquery.com/ticket/7531) Fix again for IE9RC.
    Enhances ajaxSetup so that it can take an optional target option, in
    which case target will be updated instead of ajaxSettings. That way,
    fields that shouldn't be deep extended can be listed and dealt with
    in one place. jQuery.ajax now makes use of ajaxSetup with target to
    create its internal settings object
-   [\#7568](http://bugs.jquery.com/ticket/7568) Follow-up fix for
    [\#5862](http://bugs.jquery.com/ticket/5862). Objects with a length
    property weren't serialized properly by jQuery.param
-   [\#7653](http://bugs.jquery.com/ticket/7653) Changes regexp to
    detect local protocol so that it will accept any protocol finishing
    by -extension
-   [\#7668](http://bugs.jquery.com/ticket/7668) Sizzle and jQuery QUnit
    tests are out of sync
-   [\#7912](http://bugs.jquery.com/ticket/7912) This change makes
    .cur() more .cssHooks friendly. .cur() now returns the unmodified
    value by .css() if it isn't a number, number-alike or a value that
    needs a fallback to 0.
-   [\#7922](http://bugs.jquery.com/ticket/7922) Fixed an issue where
    live('click') doesn't fire when live('submit') is bound first in IE
-   [\#7945](http://bugs.jquery.com/ticket/7945) Make jQuery.param()
    serialize plain objects with a property named jquery correctly
-   [\#8033](http://bugs.jquery.com/ticket/8033) jQuery 1.4.4+ fails to
    load on pages with old Prototype (\<= 1.5) or Current Prototype +
    Scriptaculous in IE
-   [\#8039](http://bugs.jquery.com/ticket/8039) Selectors with HTML5
    input types not work in IE6/7
-   [\#8052](http://bugs.jquery.com/ticket/8052) Update
    jQuery.support.noCloneEvent test to function properly in IE9
-   [\#8095](http://bugs.jquery.com/ticket/8095) Properly handles the
    case where browser cache needs to be bypassed while server-side
    logic still delivers proper 304 responses. Unit test added
-   [\#8098](http://bugs.jquery.com/ticket/8098) Use the fast
    document.head when available
-   [\#8099](http://bugs.jquery.com/ticket/8099) Always restore to
    correct display value based on element's expected default display
-   [\#8107](http://bugs.jquery.com/ticket/8107) Fix argument handling
    for \$.ajax for multiple method signatues and add test case
-   [\#8108](http://bugs.jquery.com/ticket/8108)Temporary fix for jQuery
    metadata being exposed on plain JS objects when serializing with
    JSON.stringify to avoid compatibility-breaking changes. A proper fix
    for this will be landed in 1.6
-   [\#8115](http://bugs.jquery.com/ticket/8115) Renames all references
    to jXHR with jqXHR in the code (like was done in the doc)
-   [\#8123](http://bugs.jquery.com/ticket/8123) The default for
    .clone() is to not clone any events
-   [\#8125](http://bugs.jquery.com/ticket/8125) Status is set to 200
    for requests with status 0 when location.protocol if "file:". Added
    test/localfile.html to control it works
-   [\#8129](http://bugs.jquery.com/ticket/8129) Fix cloning multiple
    selected options in IE8
-   [\#8135](http://bugs.jquery.com/ticket/8135) Makes sure any
    exception thrown by Firefox when trying to access an XMLHttpRequest
    property when a network error occured is caught and notified as an
    error. Added test/networkerror.html to test the behavior
-   [\#8138](http://bugs.jquery.com/ticket/8138) Access to
    document.location is made only once at load time and if it fails
    (throwing an exception in IE when document.domain is already set),
    we use the href of an A element instead
-   [\#8145](http://bugs.jquery.com/ticket/8145) Added readyWait tests
-   [\#8146](http://bugs.jquery.com/ticket/8146) introducing the
    xhrFields option with is a map of fieldName/fieldValue to set on the
    native xhr. Can be used to set withCredentials to true for
    cross-domain requests if needed
-   [\#8152](http://bugs.jquery.com/ticket/8152) applying the same
    special cases for protocol "chrome-extension:" as were for "file:"
    (needs tests). Re-organizes and fixes the handling of special cases
    for HTTP status code in the xhr transport
-   [\#8177](http://bugs.jquery.com/ticket/8177) XHR transport now
    considers 304 Not Modified responses as 200 OK if no conditional
    request header was provided (as per the XMLHttpRequest
    specification)
-   [\#8193](http://bugs.jquery.com/ticket/8193) Fixes abort in
    prefilter. No global event will be fired in that case even if the
    global option is set to true. Unit test added
-   [\#8198](http://bugs.jquery.com/ticket/8198) Remove unnecessary
    "script.type = text/javascript;"
-   [\#8200](http://bugs.jquery.com/ticket/8200) Unexpose
    \$.support.\_scriptEval as it's not needed. Use a private var
    instead
-   [\#8209](http://bugs.jquery.com/ticket/8209) Make sure that mousing
    over Chrome "internal div" doesn't trigger a mouseleave
-   [\#8219](http://bugs.jquery.com/ticket/8219) Introduces the mimeType
    option to override content-type header in conversion (and in native
    xhr when possible). Adds companion overrideMimeType method on jqXHR
    object (it simply sets the option)
-   [\#8220](http://bugs.jquery.com/ticket/8220) Remove backslashes from
    tag name filter
-   [\#8245](http://bugs.jquery.com/ticket/8245) Ajax now ensures header
    names are capitalized so that non-compliant xhr implementations
    don't override them
-   [\#8250](http://bugs.jquery.com/ticket/8250) ajax does not work in
    opera 10 widgets
-   [\#8277](http://bugs.jquery.com/ticket/8277) Sets data to undefined
    rather than null when it is not provided in ajax helpers so that it
    won't revent data set in ajaxSettings from being used.
-   [\#8297](http://bugs.jquery.com/ticket/8297) Make sure response
    headers with empty values are handled properly and do not prevent
    proper parsing of the entire response headers string.

