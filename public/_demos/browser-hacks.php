<!doctype html>
<html class="no-js" lang="en">
  <head>

    <?php include_once 'inc/head.php'; ?>

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
  <body>


    <?php include_once 'inc/demos-nav.php'; ?>


    <!-- ======================================================================
    Demo information
    ======================================================================= -->


    <div class="demo__info">
      <h2>IE 11 Only</h2>
      <p>In any selector that needs IE 11 specific overrides, use the <code>ie-11-only</code> @mixin:</p>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
  ...
      <div class="demo__language-intro">
        <h3>Sass</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>.selector {

  @include ie-11-only {
    ...
  }
}</code></pre>
      </div>
    </div>

    <?php include_once 'inc/scripts.php'; ?>

  </body>
</html>
