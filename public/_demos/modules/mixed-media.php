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
      <h2>Mixed Media</h2>
      <p>Four examples showing <em>some</em> of the various ways you can mix the child elements of a Mixed Media module.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="mm">
      <div class="mm__header">
        <h1 class="mm__title">Mixed Media Block Title</h1>
        <p class="mm__subtitle">Mixed media block subtitle</p>
      </div>
      <figure class="mm__image">
        <img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" />
        <figcaption>A small caption for the above image.</figcaption>
      </figure>
      <div class="mm__body">
        <p>Lorem ipsum dolor sit amet, <a href="http://an-unlikely-url.com">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="mm__cta">
        <a href="#" class="btn">Action</a>
      </div>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;div class="mm"&gt;
  &lt;div class="mm__header"&gt;
    &lt;h1 class="mm__title"&gt;Mixed Media Block Title&lt;/h1&gt;
    &lt;p class="mm__subtitle"&gt;Mixed media block subtitle&lt;/p&gt;
  &lt;/div&gt;
  &lt;figure class="mm__image"&gt;
    &lt;img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /&gt;
    &lt;figcaption&gt;A small caption for the above image.&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div class="mm__body"&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, &lt;a href="http://an-unlikely-url.com"&gt;consectetur adipisicing elit&lt;/a&gt;, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;
    &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="mm__cta"&gt;
    &lt;a href="#" class="btn"&gt;Action&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="mm">
      <figure class="mm__image">
        <a href="#"><img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /></a>
      </figure>
      <div class="mm__header">
        <h1 class="mm__title">A Rather Long Mixed Media Block Title</h1>
        <p class="mm__subtitle">This is the subtitle and it’s also quite long.</p>
      </div>
      <div class="mm__body">
        <ol>
          <li>List item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
          <li>Ordered list item list item list item list item list item list item list item</li>
        </ol>
      </div>
      <div class="mm__cta">
        <a href="#" class="btn">Action</a>
      </div>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;div class="mm"&gt;
  &lt;figure class="mm__image"&gt;
    &lt;a href="#"&gt;&lt;img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /&gt;&lt;/a&gt;
  &lt;/figure&gt;
  &lt;div class="mm__header"&gt;
    &lt;h1 class="mm__title"&gt;A Rather Long Mixed Media Block Title&lt;/h1&gt;
    &lt;p class="mm__subtitle"&gt;This is the subtitle and it’s also quite long.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="mm__body"&gt;
    &lt;ol&gt;
      &lt;li&gt;List item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
      &lt;li&gt;Ordered list item list item list item list item list item list item list item&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/div&gt;
  &lt;div class="mm__cta"&gt;
    &lt;a href="#" class="btn"&gt;Action&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="mm">
      <div class="mm__header">
        <h1 class="mm__title"><a href="http://a-place.com">Title</a></h1>
      </div>
      <figure class="mm__image">
        <a href="#"><img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /></a>
        <figcaption>A small caption for the above image.</figcaption>
      </figure>
      <div class="mm__body">
        <dl>
          <dt>Title</dt>
          <dd>Description</dd>
          <dt>Title title title title title title title title title title title title title title title</dt>
          <dd>Description description description description description description description description description description</dd>
        </dl>
      </div>
      <div class="mm__cta">
        <a href="#" class="btn-large">Action 1</a>
        <a href="#" class="btn">Action 2</a>
        <a href="#" class="btn-small">Action 3</a>
      </div>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;div class="mm"&gt;
  &lt;div class="mm__header"&gt;
    &lt;h1 class="mm__title"&gt;&lt;a href="http://a-place.com"&gt;Title&lt;/a&gt;&lt;/h1&gt;
  &lt;/div&gt;
  &lt;figure class="mm__image"&gt;
    &lt;a href="#"&gt;&lt;img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /&gt;&lt;/a&gt;
    &lt;figcaption&gt;A small caption for the above image.&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div class="mm__body"&gt;
    &lt;dl&gt;
      &lt;dt&gt;Title&lt;/dt&gt;
      &lt;dd&gt;Description&lt;/dd&gt;
      &lt;dt&gt;Title title title title title title title title title title title title title title title&lt;/dt&gt;
      &lt;dd&gt;Description description description description description description description description description description&lt;/dd&gt;
    &lt;/dl&gt;
  &lt;/div&gt;
  &lt;div class="mm__cta"&gt;
    &lt;a href="#" class="btn-large"&gt;Action 1&lt;/a&gt;
    &lt;a href="#" class="btn"&gt;Action 2&lt;/a&gt;
    &lt;a href="#" class="btn-small"&gt;Action 3&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="mm">
      <figure class="mm__image">
        <a href="#" class="icon-play--image"><img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /></a>
        <figcaption>A small caption for the above image.</figcaption>
      </figure>
      <div class="mm__cta">
        <a href="#" class="btn icon-play--btn">Action</a>
      </div>
    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;div class="mm"&gt;
  &lt;figure class="mm__image"&gt;
    &lt;a href="#" class="icon-play--image"&gt;&lt;img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /&gt;&lt;/a&gt;
    &lt;figcaption&gt;A small caption for the above image.&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div class="mm__cta"&gt;
    &lt;a href="#" class="btn icon-play--btn"&gt;Action&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
