<!--
( * OPTIONAL * ) FEATURE SUPPORT DETECTION: By default, the Modernizr script
below detects support for touch events *only*. If this project will need to
detect support for additional features, follow these steps:
1. Go to this URL: http://modernizr.com/download/?-touchevents-setclasses
2. Find & check off the additional features you want to detect support for
3. Select the BUILD button to download an updated version of Modernizr
4. Replace the contents of the below script with what was downloaded
-->
<script src="/lib/js/modernizr.js"></script>


<script src="/lib/js/app.js"></script>


<!--
( * OPTIONAL * ) GOOGLE ANALYTICS: Is this project utilizing Google Analytics?
If so, swap the below string 'UA-UPDATE-THIS' with a legit UA string. If this
project is utilizing a different analytics package, delete the entire script
element below and insert the other one as instructed. Otherwise, delete the
entire script element below.

Note: We're using some of the advice given in this article:
https://philipwalton.com/articles/the-google-analytics-setup-i-use-on-every-site-i-build/
-->
<!--
<script>
  window.ga=function(){ga.q.push(arguments)};
  ga.q=[];
  ga.l=+new Date;
  ga('create','UA-UPDATE-THIS','auto');
  ga('set', 'transport', 'beacon');
  ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
-->


<!--
We call the print stylesheet last for a few reasons:
- Not compiling it into app.css has the benefit of reducing that file's size
  and stops any render-blocking affect the print-specific styles may have on
  the browser(s)
- Requesting the file here, versus in <head>, defers its http request until
  after all of the more important content is requested and rendered
- …and this is OK because we're betting that the user won't attempt to print
  before the browser gets to this point during its execution of this document
-->
<link rel="stylesheet" href="/lib/css/print.css" media="print" />
