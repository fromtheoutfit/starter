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
      <h2>Grids inside grids!</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div data-layout="grid">
      <div data-layout="grid__item">
        <div>
          <p>
            Nested level = 0<br />
            <code>grid__item</code> #1
          </p>
          <div data-layout="grid">
            <div data-layout="grid__item">
              <div>
                <p>
                  Nested level = 1<br />
                  <code>grid__item</code> #1
                </p>
              </div>
            </div>
            <div data-layout="grid__item">
              <div>
                <p>
                  Nested level = 1<br />
                  <code>grid__item</code> #2
                </p>
                <div data-layout="grid">
                  <div data-layout="grid__item">
                    <div>
                      <p>
                        Nested level = 2<br />
                        <code>grid__item</code> #1
                      </p>
                    </div>
                  </div>
                  <div data-layout="grid__item">
                    <div>
                      <p>
                        Nested level = 2<br />
                        <code>grid__item</code> #2
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-layout="grid__item">
        <div>
          <p>
            Nested level = 0<br />
            <code>grid__item</code> #2
          </p>
          <div data-layout="grid">
            <div data-layout="grid__item">
              <div>
                <p>
                  Nested level = 1<br />
                  <code>grid__item</code> #1
                </p>
              </div>
            </div>
            <div data-layout="grid__item">
              <div>
                <p>
                  Nested level = 1<br />
                  <code>grid__item</code> #2
                </p>
              </div>
            </div>
          </div>
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
    &lt;div data-layout="grid"&gt;
      &lt;div data-layout="grid__item"&gt;
        ...
      &lt;/div&gt;
      &lt;div data-layout="grid__item"&gt;
        ...
        &lt;div data-layout="grid"&gt;
          &lt;div data-layout="grid__item"&gt;
            ...
          &lt;/div&gt;
          &lt;div data-layout="grid__item"&gt;
            ...
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div data-layout="grid__item"&gt;
    ...
    &lt;div data-layout="grid"&gt;
      &lt;div data-layout="grid__item"&gt;
        ...
      &lt;/div&gt;
      &lt;div data-layout="grid__item"&gt;
        ...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include '../inc/scripts.php'; ?>


  </body>
</html>
