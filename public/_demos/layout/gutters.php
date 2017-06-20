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
      <h2>A grid with gutters</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="module" data-layout-options="gutters">
      <div data-layout="module__item">
        <div>
          <p>One small addition: <em>gutters</em>. Take a look at the code below to see how to add gutters to a <code>module</code>.</p>
        </div>
      </div>
      <div data-layout="module__item">
        <div>
          <p>See the highlighted <code>data-layout-options="gutters"</code> attribute? That’s all you need.</p>
        </div>
      </div>
      <div data-layout="module__item">
        <div>
          <p>Just be sure to apply that code to the <code>module</code> itself, <em>not</em> to any of its <code>module__item</code>s.</p>
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
        <pre><code>&lt;div data-layout="module" <span class="demo__highlight">data-layout-options="gutters"</span>&gt;
  &lt;div data-layout="module__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
