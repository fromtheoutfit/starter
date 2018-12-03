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
      <h2>Feature</h2>
      <p>The Feature module has three <em>content alignment</em> options and two <em>content background color</em> options.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="feature">
      <figure class="feature__image">
        <img src="../img/fpo-photo-light-1x.jpg" srcset="../img/fpo-photo-light-2x.jpg 2x" width="2500" height="400" alt="FPO photo" />
      </figure>
      <div class="feature__content feature__content--align-left feature__content--dark-bg">
        <h1 class="feature__title">Left-aligned Feature Content</h1>
        <div class="feature__body">
          <p><b>…with a dark background.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p><a href="#" class="btn">Visit Link</a></p>
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
        <pre><code>&lt;div class="feature"&gt;
  &lt;figure class="feature__image"&gt;
    &lt;img src="../img/fpo-photo-light-1x.jpg" srcset="../img/fpo-photo-light-2x.jpg 2x" width="2500" height="400" alt="FPO photo" /&gt;
  &lt;/figure&gt;
  &lt;div class="feature__content <span class="demo__highlight">feature__content--align-left</span> <span class="demo__highlight">feature__content--dark-bg</span>"&gt;
    &lt;h1 class="feature__title"&gt;Left-aligned Feature Content&lt;/h1&gt;
    &lt;div class="feature__body"&gt;
      &lt;p&gt;&lt;b&gt;…with a dark background.&lt;/b&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/p&gt;
      &lt;p&gt;&lt;a href="#" class="btn"&gt;Visit Link&lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="feature">
      <figure class="feature__image">
        <img src="../img/fpo-photo-dark-1x.jpg" srcset="../img/fpo-photo-dark-2x.jpg 2x" width="2500" height="400" alt="FPO photo" />
      </figure>
      <div class="feature__content feature__content--align-center feature__content--light-bg">
        <h1 class="feature__title">Center-aligned Feature Content</h1>
        <div class="feature__body">
          <p><b>…with a light background.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p><a href="#" class="btn">Visit Link</a></p>
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
        <pre><code>&lt;div class="feature"&gt;
  &lt;figure class="feature__image"&gt;
    &lt;img src="../img/fpo-photo-dark-1x.jpg" srcset="../img/fpo-photo-dark-2x.jpg 2x" width="2500" height="400" alt="FPO photo" /&gt;
  &lt;/figure&gt;
  &lt;div class="feature__content <span class="demo__highlight">feature__content--align-center</span> <span class="demo__highlight">feature__content--light-bg</span>"&gt;
    &lt;h1 class="feature__title"&gt;Center-aligned Feature Content&lt;/h1&gt;
    &lt;div class="feature__body"&gt;
      &lt;p&gt;&lt;b&gt;…with a light background.&lt;/b&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;
      &lt;p&gt;&lt;a href="#" class="btn"&gt;Visit Link&lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="feature">
      <figure class="feature__image">
        <img src="../img/fpo-photo-mixed-1x.jpg" srcset="../img/fpo-photo-mixed-2x.jpg 2x" width="2500" height="400" alt="FPO photo" />
      </figure>
      <div class="feature__content feature__content--align-right feature__content--dark-bg">
        <h1 class="feature__title">Right-aligned Feature Content</h1>
        <div class="feature__body">
          <p><b>…with a dark background.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p><a href="#" class="btn">Visit Link</a></p>
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
        <pre><code>&lt;div class="feature"&gt;
  &lt;figure class="feature__image"&gt;
    &lt;img src="../img/fpo-photo-mixed-1x.jpg" srcset="../img/fpo-photo-mixed-2x.jpg 2x" width="2500" height="400" alt="FPO photo" /&gt;
  &lt;/figure&gt;
  &lt;div class="feature__content <span class="demo__highlight">feature__content--align-right</span> <span class="demo__highlight">feature__content--dark-bg</span>"&gt;
    &lt;h1 class="feature__title"&gt;Right-aligned Feature Content&lt;/h1&gt;
    &lt;div class="feature__body"&gt;
      &lt;p&gt;&lt;b&gt;…with a dark background.&lt;/b&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
      &lt;p&gt;&lt;a href="#" class="btn"&gt;Visit Link&lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include '../inc/scripts.php'; ?>


  </body>
</html>
