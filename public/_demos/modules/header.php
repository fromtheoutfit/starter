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
      <h2>Header</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <header class="header">
      <div class="header__id">
        <a href="#"><img src="/_demos/img/fpo-logo-1x.png" srcset="/_demos/img/fpo-logo-2x.png 2x" width="200" height="125" alt="Project Name" /></a>
        <h1 class="visuallyhidden">Project Name</h1>
      </div>
      <button class="header__open-nav" data-open-nav aria-label="Open navigation"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M4 10h24c1.104 0 2-.896 2-2s-.896-2-2-2H4c-1.104 0-2 .896-2 2s.896 2 2 2zm24 4H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2zm0 8H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2z" fill="#fff" /></svg></button>
      <nav class="header__nav-wrap" data-nav-wrap role="navigation">
        <button class="header__close-nav" data-close-nav aria-label="Close navigation">&times;</button>
        <h2 class="header__nav-title">Main Navigation</h2>
        <ul class="header__nav-links">
          <li>
            <a href="#">Generic Link</a>
            <ul>
              <li><a href="#">Link</a></li>
              <li><a href="#">Medium Link</a></li>
              <li>
                <a href="#">A Somewhat Long Link</a>
                <ul>
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Medium Link</a></li>
                  <li><a href="#">A Somewhat Long Link</a></li>
                  <li><a href="#">Here’s a Ridiculously Long Link</a></li>
                </ul>
              </li>
              <li><a href="#">Here’s a Ridiculously Long Link</a></li>
            </ul>
          </li>
          <li><a href="#">Happy Link</a></li>
          <li><a href="#">Helpful Link</a></li>
          <li>
            <a href="#">Friendly Link</a>
            <ul>
              <li><a href="#">Link</a></li>
              <li><a href="#">Medium Link</a></li>
              <li><a href="#">A Somewhat Long Link</a></li>
              <li><a href="#">Here’s a Ridiculously Long Link</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;header class="header"&gt;
  &lt;div class="header__id"&gt;
    &lt;a href="#"&gt;&lt;img src="/_demos/img/fpo-logo-1x.png" srcset="/_demos/img/fpo-logo-2x.png 2x" width="200" height="125" alt="Project Name" /&gt;&lt;/a&gt;
    &lt;h1 class="visuallyhidden"&gt;Project Name&lt;/h1&gt;
  &lt;/div&gt;
  &lt;button class="header__open-nav" data-open-nav aria-label="Open navigation"&gt;&lt;svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"&gt;&lt;path d="M4 10h24c1.104 0 2-.896 2-2s-.896-2-2-2H4c-1.104 0-2 .896-2 2s.896 2 2 2zm24 4H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2zm0 8H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2z" fill="#fff" /&gt;&lt;/svg&gt;&lt;/button&gt;
  &lt;nav class="header__nav-wrap" data-nav-wrap&gt;
    &lt;button class="header__close-nav" data-close-nav aria-label="Close navigation"&gt;&times;&lt;/button&gt;
    &lt;h2 class="visuallyhidden"&gt;Main Navigation&lt;/h2&gt;
    &lt;ul class="header__nav-links"&gt;
      &lt;li&gt;
        &lt;a href="#"&gt;Generic Link&lt;/a&gt;
        &lt;ul&gt;
          &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Medium Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;
            &lt;a href="#"&gt;A Somewhat Long Link&lt;/a&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Medium Link&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;A Somewhat Long Link&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Here’s a Ridiculously Long Link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Here’s a Ridiculously Long Link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Happy Link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Helpful Link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;
        &lt;a href="#"&gt;Friendly Link&lt;/a&gt;
        &lt;ul&gt;
          &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Medium Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;A Somewhat Long Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Here’s a Ridiculously Long Link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/header&gt;</code></pre>
      </div>

      <div class="demo__language-intro">
        <h3>JS</h3>
        <p>The <code>&lt;header&gt;</code>’s navigation is mobile-ready and needs this JS to function.</p>
      </div>
      <div class="demo__language-code">
        <pre><code>const swapWidth = 600;
let isVisible   = false;
let wrapEl      = null;
let allDesc     = null;
let openBtn     = null;
let closeBtn    = null;
let vpWidth     = null;


export function initialize() {
  openBtn  = document.querySelector('[data-open-nav]');
  closeBtn = document.querySelector('[data-close-nav]');
  wrapEl   = document.querySelector('[data-nav-wrap]');

  // Stop everything if any of the above elements do not exist.
  if (!openBtn || !closeBtn || !wrapEl) {
    return;
  }

  allDesc = wrapEl.getElementsByTagName('*');
  addListeners();
  betterResize();
}


export function addListeners() {
  openBtn.addEventListener('click', toggleNav, false);
  closeBtn.addEventListener('click', toggleNav, false);
  document.addEventListener('touchend', determineEventLoc, false);
  document.addEventListener('click', determineEventLoc, false);
  document.addEventListener('keyup', handleKeyPresses, false);
  window.addEventListener('resizeViaRAF', handleResize, false);
}


export function betterResize() {
  let running = false;
  function doItViaRAF() {
    if (running) {return;}
    running = true;
    requestAnimationFrame(function() {
      window.dispatchEvent(new CustomEvent('resizeViaRAF'));
      running = false;
    });
  }
  window.addEventListener('resize', doItViaRAF);
}


export function handleResize() {
  vpWidth = window.innerWidth;
  if ((vpWidth >= swapWidth) && isVisible) {
    toggleNav(event);
  }
}


export function determineEventLoc(event) {
  if (isVisible) {
    if (event.target === wrapEl) {
      return;
    } else {
      for (let i = 0; i < allDesc.length; i++) {
        if (event.target === allDesc[i]) {
          return;
        }
      }
    }
    toggleNav(event);
  } else {
    return;
  }
}


export function handleKeyPresses(event) {
  if (isVisible && (event.keyCode === 27)) {
    toggleNav(event);
  }
}


export function toggleNav(event) {
  wrapEl.classList.toggle('is-visible');
  isVisible = !isVisible;
  event.stopPropagation();
}</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
