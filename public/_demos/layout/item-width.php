<!doctype html>
<html class="no-js" lang="en">
  <head>

    <?php include '../inc/head.php'; ?>

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


    <?php include '../inc/demos-nav.php'; ?>


    <!-- ======================================================================
    Demo information
    ======================================================================= -->


    <div class="demo__info">
      <h2>Set a <code>grid__item</code>’s width</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="grid">
      <div data-layout="grid__item">
        <div>
          <p>You can define the width of <code>grid__item</code>s if you don’t want the default <em>equal-width</em> behavior to apply.</p>
        </div>
      </div>
      <div data-layout="grid__item" data-layout-width="one-fifth">
        <div>
          <p>For example, this particular <code>grid__item</code> has been given a width of <code>one-fifth</code>.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>In the code below, notice that this attribute is applied to the <code>grid__item</code> itself, not to the <code>grid</code>.</p>
          <p>The other <code>grid__item</code>s will stretch to fill the remaining space if they don’t have a <code>width</code> defined.</p>
        </div>
      </div>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;div data-layout="grid"&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item" <span class="demo__highlight">data-layout-width="one-fifth"</span>&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include '../inc/scripts.php'; ?>


  </body>
</html>
