<!doctype html>
<html class="no-js" lang="en">
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/lib/css/app.css" />
    <title>Browser Hacks</title>
    <meta name="description" content="Demos of the various browser hacks available in this project." />

    <script src="/lib/js/modernizr.js"></script>

    <!-- This imported stylesheet is *only* for this demo page and its simple
    UI. It has no effect on the demos themselves and it should *not* be
    included in the production-ready code. -->
    <style>@import 'demos-ui.css';</style>

  </head>
  <body>

    <div class="demo">
      <h2>IE 11 Only</h2>

      <p>In any selector that needs IE 11 specific overrides, use the <code>ie-11-only</code> @mixin:</p>

      <div class="demo__content">
        <pre><code>.selector {
  ...

  @include ie-11-only {
    ...
  }
}</code></pre>
      </div>
    </div>

  </body>
</html>
