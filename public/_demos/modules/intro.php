<!doctype html>
<html class="no-js" lang="en">
  <head>

    <?php include_once '../inc/head.php'; ?>

    <!--
    ( * NOTE * ) Most of <head>'s elements are stored in the include above. The
    rest are below, as they're page-specific:
    -->
    <title>TODO: update this with a quality page title</title>
    <meta name="description" content="TODO: update this with a quality page description" />

    <!--
    ( * OPTIONAL * ) FACEBOOK / TWITTER: Is this project utilizing Facebook and
    Twitter? If so, utilize the code below and update the assets it references.
    If not, delete the code below and the assets that it references.
    - Facebook: https://developers.facebook.com/docs/sharing/best-practices
    - Twitter:  https://dev.twitter.com/cards/getting-started
    -->
    <meta property="og:title" content="TODO: update this with a quality page title" />
    <meta property="og:description" content="TODO: update this with a quality page description" />
    <meta property="og:url" content="TODO: update this with an absolute URL to this page" />
    <meta property="og:image" content="http://absolute-path.com/to/1200x630.jpg" />

  </head>
  <body class="demo">


    <?php include_once '../inc/demos-nav.php'; ?>


    <!-- ======================================================================
    Demo information
    ======================================================================= -->


    <div class="demo__info">
      <h2>Intro</h2>
      <p>Two examples of a basic introduction module; it’s primary purpose is for page titles, but aims to be flexible enough for any sort of page/section introduction.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="intro">
      <h1 class="intro__title">About The Company</h1>
      <p class="intro__subtitle">Bits and bobs about our people, culture, etc.</p>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;div class="intro"&gt;
  &lt;h1 class="intro__title"&gt;About The Company&lt;/h1&gt;
  &lt;p class="intro__subtitle"&gt;Bits and bobs about our people, culture, etc.&lt;/p&gt;
&lt;/div&gt;</code></pre>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="intro intro--inline intro--inverted">
      <h1 class="intro__title">About The Company</h1>
      <p class="intro__subtitle">Bits and bobs about our people, culture, etc.</p>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;div class="intro <span class="demo__highlight">intro--inline</span> <span class="demo__highlight">intro--inverted</span>"&gt;
  &lt;h1 class="intro__title"&gt;About The Company&lt;/h1&gt;
  &lt;p class="intro__subtitle"&gt;Bits and bobs about our people, culture, etc.&lt;/p&gt;
&lt;/div&gt;</code></pre>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
