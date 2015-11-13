<!doctype html>
<!--
( * OPTIONAL * ) APP CACHE: Is this project utilizing a cache manifest? If so,
leave the below <html> tag as is, then open /html/manifest.cache and update it
as necessary for this particular project. However, if it's not, remove the
manifest="manifest.appcache" attribute from the below <html> tag.
Learn more here:
https://fromtheoutfit.com/updates/how-to-build-an-offline-single-page-website
-->
<html class="no-js" lang="en" manifest="manifest.appcache">
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/lib/css/all.css" />
    <title>TODO: update this with a quality page title</title>
    <meta name="description" content="TODO: update this with a quality page description" />

    <!--
    ( * OPTIONAL * ) FACEBOOK / TWITTER: Is this project utilizing Facebook and
    Twitter stuff? If so, utilize and update the code below. If not, delete the
    code below.
    - Facebook info: https://developers.facebook.com/docs/sharing/best-practices
    - Twitter info:  https://dev.twitter.com/cards/getting-started
    -->
    <meta property="og:site_name" content="TODO: update this with a site name"/>
    <meta property="og:title" content="TODO: update this with a quality page title" />
    <meta property="og:description" content="TODO: update this with a quality page description" />
    <meta property="og:url" content="TODO: update this with an absolute URL to this page" />
    <meta property="og:image" content="http://absolute-path.com/to/1200x630.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@twitter-account-for-website" />
    <meta name="twitter:creator" content="@twitter-account-for-author" />

    <!--
    ( * OPTIONAL * ) HOME SCREEN ICON: Do you want an icon on the home screen of
    mobile devices? If so, utilize the code below and update the assets that it
    references. If not, delete the code below and the assets that it references.
    -->
    <link rel="apple-touch-icon" href="/lib/img/meta/apple-touch-icon.png" />
    <link rel="icon" sizes="192x192" href="/lib/img/meta/chrome-touch-icon-192x192.png" />
    <meta name="msapplication-TileImage" content="/lib/img/meta/ms-touch-icon-144x144-precomposed.png" />

    <!--
    ( * OPTIONAL * ) WEB APP: Is this project a web app? More importantly, are
    all anchor links intercepted and handled by JavaScript? If so, utilize and
    update the code below. If not, delete the code below.
    -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="TODO: update this with a short application name" />
    <meta name="apple-mobile-web-app-title" content="TODO: update this with a short application name" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="msapplication-TileColor" content="#3372DF" /><!-- TODO: update this hex value -->
    <meta name="theme-color" content="#3372DF" /><!-- TODO: update this hex value -->

    <!--
    ( * OPTIONAL * ) PINNED TAB ICON: When someone pins this project's tab in
    Safari, a unique SVG will be used. It needs a transparent background and
    100% black for all vectors. The link element's color attribute sets the
    display color of the image. Learn more here:
    https://developer.apple.com/library/prerelease/mac/releasenotes/General/WhatsNewInSafari/Articles/Safari_9.html#//apple_ref/doc/uid/TP40014305-CH9-SW20
    -->
    <link rel="mask-icon" href="/lib/img/meta/site-icon.svg" color="#3372DF" /><!-- TODO: update this hex value -->

    <!--
    ( * OPTIONAL * ) FEATURE DETECTION: Is this project going to require feature
    detection? Ask yourself: Are we supporting older browsers? Is the visual
    and/or interaction design complex? If so, utilize the code below. If not,
    delete the code below and the asset that it references.
    -->
    <script src="/lib/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--
    TODO: Update the following files with project specific details.
    - /html/favicon.ico (Tools: https://www.google.com/?q=favicon+generator)
    - /html/robots.txt  (Info: http://www.robotstxt.org/robotstxt.html)
    -->

  </head>
  <body>


    <!-- YOUR MARKUP HERE. -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/lib/js/vendor/jquery-2.1.1.min.js"><\/script>')</script>

    <!-- YOUR SCRIPTS HERE. -->


    <!--
    ( * OPTIONAL * ) GOOGLE ANALYTICS: Is this project utilizing Google
    Analytics? If so, swap the below string 'UA-UPDATE-THIS' with a legit UA
    string. If this project is utilizing a different analytics package, delete
    the entire script element below and insert the other one as instructed.
    Otherwise, delete the entire script element below.
    -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-UPDATE-THIS', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>
