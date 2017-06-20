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
      <h2>Grid with <code>module__item</code> Width Changing at Breakpoints</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="module" data-layout-options="wrap-items">
      <div data-layout="module__item" data-layout-width="one-whole s-one-third m-one-half">
        <div>
          <p>Sometimes you want your <code>module__item</code>(s) to be a particular width <em>at particular breakpoints</em>.</p>
          <p>For example, lets say you want a <code>module__item</code> to be 100% wide in small viewports, 50% wide when the viewport is a bit bigger, then 25% wide when the viewport is huge.</p>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-whole s-one-third m-one-half">
        <div>
          <p>This layout system is ready for that—it makes (10) different widths available at (7) different breakpoints.</p>
          <p>In the code below you’ll see a <em>bunch</em> of values in each <code>module__item</code>’s <code>data-layout-width</code> attribute. From left-to-right, the values dictate the width the <code>module__item</code> should be at each breakpoint.</p>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-whole s-one-third m-one-half">
        <div>
          <p>Using the first <code>module__item</code> as an example, its <code>data-layout-width</code> values translate to:</p>
          <ol>
            <li>By default, it’s width will be one-whole (100%).</li>
            <li>At the small breakpoint, its width will be one-third (33.333%).</li>
            <li>At the medium breakpoint, its width will be one-half (50%).</li>
          </ol>
          <p>…and because we’ve not added any <em>more</em> values to that attribute, it will remain one-half (50%) as the viewport gets larger.</p>
        </div>
      </div>
      <div data-layout="module__item" data-layout-width="one-whole m-one-half">
        <div>
          <p>If you scroll down the page a little more, you’ll see all possible widths defined and demonstrated—some of the latter ones might not work if your viewport is not very wide at the moment, so feel free to make it thinner / wider to see it all in action.</p>
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
        <pre><code>&lt;div data-layout="module" data-layout-options="wrap-items"&gt;
  &lt;div data-layout="module__item" <span class="demo__highlight">data-layout-width="one-whole s-one-third m-one-half"</span>&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" <span class="demo__highlight">data-layout-width="one-whole s-one-third m-one-half"</span>&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" <span class="demo__highlight">data-layout-width="one-whole s-one-third m-one-half"</span>&gt;
    ...
  &lt;/div&gt;
  &lt;div data-layout="module__item" <span class="demo__highlight">data-layout-width="one-whole m-one-half"</span>&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
