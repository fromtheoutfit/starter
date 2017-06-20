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
      <h2>Grid with <code>module__item</code> Alignment</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="module" data-layout-options="wrap-items" data-layout-align="h-center">
      <div data-layout="module__item" data-layout-width="one-third">
        <div>
          <p>It’s time to introduce another feature: <em><code>module__item</code> alignment!</em></p>
          <p>When there’s unused space around <code>module__item</code>s, we can tell them to align themselves a few different ways.</p>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-third">
        <div>
          <p>In the code below you’ll see an attribute called <code>data-layout-align</code> with its value set to <code>h-center</code>.</p>
          <p><code>h-center</code> tells the <code>module</code> to align its <code>module__item</code>s to the center of the x-axis.</p>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-third">
        <div>
          <p>There are a number of available values, some for the x-axis and some for the y-axis…</p>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-third">
        <div>
          <p>The available x-axis / horizontal values are:</p>
          <ul>
            <li><code>h-left</code></li>
            <li><code>h-center</code></li>
            <li><code>h-right</code></li>
            <li><code>h-space-around</code></li>
            <li><code>h-space-between</code></li>
          </ul>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-third">
        <div>
          <p>The available y-axis / vertical values are:</p>
          <ul>
            <li><code>v-top</code></li>
            <li><code>v-center</code></li>
            <li><code>v-bottom</code></li>
          </ul>
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
        <pre><code>&lt;div data-layout="module" data-layout-options="wrap-items" <span class="demo__highlight">data-layout-align="h-center"</span>&gt;
  &lt;div data-layout="module__item" data-layout-width="one-third"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" data-layout-width="one-third"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" data-layout-width="one-third"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" data-layout-width="one-third"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" data-layout-width="one-third"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
