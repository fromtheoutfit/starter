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
      <h2>Equal-height <code>grid__item</code>s</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="grid" data-layout-options="equal-height-items">
      <div data-layout="grid__item">
        <div>
          <p>Lets make the <code>grid__item</code>s the same height as each other; the code below shows you how to do it.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>Be sure to apply the code to the <code>grid</code> itself, not to any of its <code>grid__item</code>s.</p>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>We need a hefty amount of content in this <code>grid__item</code> to make this demonstration a bit more obvious, so how about a joke?</p>
          <blockquote>
            <p><em>Dad hurt his wrist and had to go to the hospital, where he talked to a doctor.</em></p>
            <p>
              Dad: <q>When this heals will I be able to play the piano?</q><br />
              Doctor: <q>Yes, you’ll be fine in a few days.</q><br />
              Dad: <q>Perfect, I’ve always wanted to be able to play an instrument.</q>
            </p>
          </blockquote>
          <p><small><a href="https://www.reddit.com/r/dadjokes/comments/1jp9c4/dad_at_the_hospital/">Source</a></small></p>
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
        <pre><code>&lt;div data-layout="grid" <span class="demo__highlight">data-layout-options="equal-height-items"</span>&gt;
    &lt;div data-layout="grid__item"&gt;
      ...
    &lt;/div&gt;
    &lt;div data-layout="grid__item"&gt;
      ...
    &lt;/div&gt;
    &lt;div data-layout="grid__item"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include '../inc/scripts.php'; ?>


  </body>
</html>
