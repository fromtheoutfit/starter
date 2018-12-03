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
      <h2>When space is tight, wrap <code>grid__item</code>s</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="grid" data-layout-options="wrap-items">
      <div data-layout="grid__item">
        <div>
          <p>By default, all <code>grid__item</code>s in a <code>grid</code> will stay on one row, even if doing so breaks the layout.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p><q>I think that’s dumb</q>, you might say.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>Let’s tell the <code>grid__item</code>s to wrap onto more rows as needed.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>In the code below you’ll see the <code>wrap-items</code> value in the <code>data-layout-options</code> attribute…</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>…with that added to a <code>grid</code>, all of its <code>grid__item</code>s will now wrap as desired.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>This demo has <code>wrap-items</code> on it, so make your browser thinner/wider to see it in action.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>See how some of the <code>grid__item</code>s are moving to new rows as needed?</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>How neat is that?</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>That’s pretty neat.</p>
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
        <pre><code>&lt;div data-layout="grid" <span class="demo__highlight">data-layout-options="wrap-items"</span>&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
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
