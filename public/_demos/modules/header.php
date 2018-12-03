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
      <h2>Header</h2>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <header class="header">
      <h1 class="header__title">Home</h1>
      <div class="header__id">
        <a href="/" class="header__logo">
          <img src="/_demos/img/fpo-logo-1x.png" srcset="/_demos/img/fpo-logo-2x.png 2x" width="128" height="80" alt="Company name" />
        </a>
      </div>
      <button class="header__open-nav" data-open-nav aria-label="Open navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41">
          <g fill="#fff" fill-rule="evenodd">
            <rect width="40" height="6" y="0" rx="2"/>
            <rect width="40" height="6" y="9" rx="2"/>
            <rect width="40" height="6" y="18" rx="2"/>
            <path d="M31.744 29.735h2.18v6.312c0 .707.084 1.222.251 1.547.26.576.827.864 1.7.864.869 0 1.433-.288 1.693-.864.168-.325.251-.84.251-1.547v-6.312H40v6.312c0 1.092-.17 1.942-.509 2.55-.631 1.115-1.837 1.673-3.616 1.673-1.779 0-2.986-.558-3.623-1.672-.339-.609-.508-1.459-.508-2.55v-6.313zm-10.34 0h2.25l4.09 7.17v-7.17h2v10.27h-2.146l-4.194-7.295v7.295h-2v-10.27zm-1.888 1.818H14.08v2.181h4.989v1.784H14.08v2.64h5.686v1.847h-7.783v-10.27h7.532v1.818zM6.842 29.735h3.087v10.27h-2v-6.947c0-.2.002-.48.007-.84s.007-.637.007-.832l-1.944 8.619H3.916l-1.93-8.619c0 .195.002.473.007.833.004.36.007.64.007.84v6.946H0v-10.27h3.121L4.99 37.81l1.853-8.075z"/>
          </g>
        </svg>
      </button>
      <nav class="header__nav-wrap" data-nav-wrap role="navigation">
        <button class="header__close-nav" data-close-nav aria-label="Close navigation">&times;</button>
        <h2 class="header__nav-title">Main Navigation</h2>
        <div class="header__nav-links">
          <ul>
            <li><a href="new-request">New Request</a></li>
            <li><a href="my-requests">My Requests</a></li>
            <li><a href="all-requests">All Requests</a></li>
            <li><a href="search">Search</a></li>
            <li><a href="instructions">Instructions</a></li>
          </ul>
          <h3 class="header__nav-label">Requests by Status</h3>
          <ul>
            <li><a href="status-new">New</a></li>
            <li><a href="status-in-progress">In Progress</a></li>
            <li><a href="status-resolved">Resolved</a></li>
          </ul>
          <h3 class="header__nav-label">Requests by Category</h3>
          <ul>
            <li>
              <a href="all-buildings">All Buildings</a>
              <ul>
                <li><a href="headquarters">Headquarters</a></li>
                <li><a href="north-campus">N. Campus</a></li>
                <li><a href="south-campus">S. Campus</a></li>
              </ul>
            </li>
            <li>
              <a href="all-vehicles">All Vehicles</a>
              <ul>
                <li><a href="car-1">Car 1</a></li>
                <li><a href="car-2">Car 2</a></li>
                <li><a href="marine-1">Marine 1</a></li>
                <li>
                  <a href="marine-2">Marine 2</a>
                  <ul>
                    <li><a href="marine-2-engine">Engine</a></li>
                    <li><a href="marine-2-paint">A Very Long Sub-category Label</a></li>
                    <li><a href="marine-2-storage">Storage</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="equipment">Equipment</a></li>
            <li><a href="other">Other</a></li>
          </ul>
        </div>
      </nav>
      <!-- BACKEND: The below has-notifications class only appears when this user has notifications -->
      <div class="header__user has-notifications">
        <button class="header__user-toggle btn-strip" data-user-toggle><img src="/_demos/img/fpo-avatar-male-1x.jpg" srcset="/_demos/img/fpo-avatar-male-2x.jpg 2x" width="40" height="40" alt="User name" /></button>
        <nav class="header__user-panel" data-user-panel>
          <h2 class="visuallyhidden">User Navigation</h2>
          <ul class="header__user-links">
            <!-- BACKEND: The below Notifications <li> only appears when this user has notifications -->
            <li><a href="notifications">New Notifications</a></li>
            <li><a href="my-account">My Account</a></li>
            <li><a href="sign-out">Sign Out</a></li>
          </ul>
        </nav>
      </div>
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
  &lt;h1 class="header__title"&gt;Home&lt;/h1&gt;
  &lt;div class="header__id"&gt;
    &lt;a href="/" class="header__logo"&gt;
      &lt;img src="/_demos/img/fpo-logo-1x.png" srcset="/_demos/img/fpo-logo-2x.png 2x" width="128" height="80" alt="Company name" /&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;button class="header__open-nav" data-open-nav aria-label="Open navigation"&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"&gt;
      &lt;g fill="#fff" fill-rule="evenodd"&gt;
        &lt;rect width="40" height="6" y="0" rx="2"/&gt;
        &lt;rect width="40" height="6" y="9" rx="2"/&gt;
        &lt;rect width="40" height="6" y="18" rx="2"/&gt;
        &lt;path d="M31.744 29.735h2.18v6.312c0 .707.084 1.222.251 1.547.26.576.827.864 1.7.864.869 0 1.433-.288 1.693-.864.168-.325.251-.84.251-1.547v-6.312H40v6.312c0 1.092-.17 1.942-.509 2.55-.631 1.115-1.837 1.673-3.616 1.673-1.779 0-2.986-.558-3.623-1.672-.339-.609-.508-1.459-.508-2.55v-6.313zm-10.34 0h2.25l4.09 7.17v-7.17h2v10.27h-2.146l-4.194-7.295v7.295h-2v-10.27zm-1.888 1.818H14.08v2.181h4.989v1.784H14.08v2.64h5.686v1.847h-7.783v-10.27h7.532v1.818zM6.842 29.735h3.087v10.27h-2v-6.947c0-.2.002-.48.007-.84s.007-.637.007-.832l-1.944 8.619H3.916l-1.93-8.619c0 .195.002.473.007.833.004.36.007.64.007.84v6.946H0v-10.27h3.121L4.99 37.81l1.853-8.075z"/&gt;
      &lt;/g&gt;
    &lt;/svg&gt;
  &lt;/button&gt;
  &lt;nav class="header__nav-wrap" data-nav-wrap role="navigation"&gt;
    &lt;button class="header__close-nav" data-close-nav aria-label="Close navigation"&gt;&times;&lt;/button&gt;
    &lt;h2 class="header__nav-title"&gt;Main Navigation&lt;/h2&gt;
    &lt;div class="header__nav-links"&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;a href="new-request"&gt;New Request&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="my-requests"&gt;My Requests&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="all-requests"&gt;All Requests&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="search"&gt;Search&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="instructions"&gt;Instructions&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;h3 class="header__nav-label"&gt;Requests by Status&lt;/h3&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;a href="status-new"&gt;New&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="status-in-progress"&gt;In Progress&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="status-resolved"&gt;Resolved&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;h3 class="header__nav-label"&gt;Requests by Category&lt;/h3&gt;
      &lt;ul&gt;
        &lt;li&gt;
          &lt;a href="all-buildings"&gt;All Buildings&lt;/a&gt;
          &lt;ul&gt;
            &lt;li&gt;&lt;a href="headquarters"&gt;Headquarters&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="north-campus"&gt;N. Campus&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="south-campus"&gt;S. Campus&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;
          &lt;a href="all-vehicles"&gt;All Vehicles&lt;/a&gt;
          &lt;ul&gt;
            &lt;li&gt;&lt;a href="car-1"&gt;Car 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="car-2"&gt;Car 2&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="marine-1"&gt;Marine 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
              &lt;a href="marine-2"&gt;Marine 2&lt;/a&gt;
              &lt;ul&gt;
                &lt;li&gt;&lt;a href="marine-2-engine"&gt;Engine&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="marine-2-paint"&gt;A Very Long Sub-category Label&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="marine-2-storage"&gt;Storage&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a href="equipment"&gt;Equipment&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="other"&gt;Other&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/nav&gt;
  &lt;!-- BACKEND: The below has-notifications class only appears when this user has notifications --&gt;
  &lt;div class="header__user has-notifications"&gt;
    &lt;button class="header__user-toggle btn-strip" data-user-toggle&gt;&lt;img src="/_demos/img/fpo-avatar-male-1x.jpg" srcset="/_demos/img/fpo-avatar-male-2x.jpg 2x" width="40" height="40" alt="User name" /&gt;&lt;/button&gt;
    &lt;nav class="header__user-panel" data-user-panel&gt;
      &lt;h2 class="visuallyhidden"&gt;User Navigation&lt;/h2&gt;
      &lt;ul class="header__user-links"&gt;
        &lt;!-- BACKEND: The below Notifications &lt;li&gt; only appears when this user has notifications --&gt;
        &lt;li&gt;&lt;a href="notifications"&gt;New Notifications&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="my-account"&gt;My Account&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="sign-out"&gt;Sign Out&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
      </div>

      <div class="demo__language-intro">
        <h3>JS</h3>
        <p>The <code>&lt;header&gt;</code>’s navigation needs this JS to function.</p>
      </div>
      <div class="demo__language-code">
        <pre><code>let isVisible   = false
let wrapEl      = null
let allDesc     = null
let openBtn     = null
let closeBtn    = null


export function initialize() {
  openBtn  = document.querySelector('[data-open-nav]')
  closeBtn = document.querySelector('[data-close-nav]')
  wrapEl   = document.querySelector('[data-nav-wrap]')

  // Stop everything if any of the above elements do not exist.
  if (!openBtn || !closeBtn || !wrapEl) {
    return
  }

  allDesc = wrapEl.getElementsByTagName('*')
  addListeners()
}


export function addListeners() {
  openBtn.addEventListener('click', toggleNav, false)
  closeBtn.addEventListener('click', toggleNav, false)
  document.addEventListener('touchend', determineEventLoc, false)
  document.addEventListener('click', determineEventLoc, false)
  document.addEventListener('keyup', handleKeyPresses, false)
}


export function determineEventLoc(event) {
  if (isVisible) {
    if (event.target === wrapEl) {
      return
    } else {
      for (let i = 0; i &lt; allDesc.length; i++) {
        if (event.target === allDesc[i]) {
          return
        }
      }
    }
    toggleNav(event)
  } else {
    return
  }
}


export function handleKeyPresses(event) {
  if (isVisible && (event.keyCode === 27)) {
    toggleNav(event)
  }
}


export function toggleNav(event) {
  wrapEl.classList.toggle('is-visible')
  isVisible = !isVisible
  event.stopPropagation()
}</code></pre>
      </div>

      <div class="demo__language-intro">
        <h3>JS</h3>
        <p>The <code>&lt;header&gt;</code>’s user panel needs this JS to function.</p>
      </div>
      <div class="demo__language-code">
        <pre><code>let isVisible   = false
let wrapEl      = null
let allDesc     = null
let toggleBtn   = null


export function initialize() {
  toggleBtn = document.querySelector('[data-user-toggle]')
  wrapEl    = document.querySelector('[data-user-panel]')

  // Stop everything if any of the above elements do not exist.
  if (!toggleBtn || !wrapEl) {
    return
  }

  allDesc = wrapEl.getElementsByTagName('*')
  addListeners()
}


export function addListeners() {
  toggleBtn.addEventListener('click', toggleUserPanel, false)
  document.addEventListener('touchend', determineEventLoc, false)
  document.addEventListener('click', determineEventLoc, false)
  document.addEventListener('keyup', handleKeyPresses, false)
}


export function determineEventLoc(event) {
  if (isVisible) {
    if (event.target === wrapEl) {
      return
    } else {
      for (let i = 0; i &lt; allDesc.length; i++) {
        if (event.target === allDesc[i]) {
          return
        }
      }
    }
    toggleUserPanel(event)
  } else {
    return
  }
}


export function handleKeyPresses(event) {
  if (isVisible && (event.keyCode === 27)) {
    toggleUserPanel(event)
  }
}


export function toggleUserPanel(event) {
  wrapEl.classList.toggle('is-visible')
  isVisible = !isVisible
  event.stopPropagation()
}</code></pre>
      </div>
    </div>


    <?php include '../inc/scripts.php'; ?>


  </body>
</html>
