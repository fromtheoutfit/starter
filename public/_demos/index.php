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

    <div class="copy-block">
      <p class="demo-index-info">
        <span class="demo-up-arrow">&uarr;</span>
        Hello. Tap that button.
      </p>
    </div>

    <style>
      .demo-index-info {
        padding: 50px 25px 25px;
        text-align: center;
      }
      .demo-up-arrow {
        animation-name: bounce-arrow;
        animation-duration: 500ms;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        display: block;
      }
      @keyframes bounce-arrow {
        from {
          transform: translateY(0);
        }
        to {
          transform: translateY(-10px);
        }
      }
    </style>

    <?php include_once 'inc/scripts.php'; ?>

  </body>
</html>

