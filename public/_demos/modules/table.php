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
      <h2>Table</h2>
      <p>An extremely basic table with all of the commonly-used elements we may need. It’s <em>not</em> responsive by default, but there are <a href="https://css-tricks.com/accessible-simple-responsive-tables/">many <em>many</em> options available</a> that can be incorporated as needed.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <table>
      <caption>Caption for this table</caption>
      <thead>
        <tr>
          <td></td>
          <th scope="col">Col Name 1</th>
          <th scope="col">Col Name 2</th>
          <th scope="col">Col Name 3</th>
          <th scope="col">Col Name 4</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Row Name 1</th>
          <td>1</td>
          <td>Banana</td>
          <td>true</td>
          <td>Jane Smith</td>
        </tr>
        <tr>
          <th scope="row">Row Name 2</th>
          <td>2</td>
          <td>Orange</td>
          <td>false</td>
          <td>Maurice Sheppard</td>
        </tr>
        <tr>
          <th scope="row">Row Name 3</th>
          <td>3</td>
          <td>Grapefruit</td>
          <td>false</td>
          <td>John B. Worthington III</td>
        </tr>
        <tr>
          <th scope="row">Row Name 4</th>
          <td>4</td>
          <td>Strawberry</td>
          <td>true</td>
          <td>Frank E. N. Stein</td>
        </tr>
      </tbody>
    </table>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;table&gt;
  &lt;caption&gt;Caption for this table&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;td&gt;&lt;/td&gt;
      &lt;th scope="col"&gt;Col Name 1&lt;/th&gt;
      &lt;th scope="col"&gt;Col Name 2&lt;/th&gt;
      &lt;th scope="col"&gt;Col Name 3&lt;/th&gt;
      &lt;th scope="col"&gt;Col Name 4&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;Row Name 1&lt;/th&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;Banana&lt;/td&gt;
      &lt;td&gt;true&lt;/td&gt;
      &lt;td&gt;Jane Smith&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;Row Name 2&lt;/th&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Orange&lt;/td&gt;
      &lt;td&gt;false&lt;/td&gt;
      &lt;td&gt;Maurice Sheppard&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;Row Name 3&lt;/th&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td&gt;Grapefruit&lt;/td&gt;
      &lt;td&gt;false&lt;/td&gt;
      &lt;td&gt;John B. Worthington III&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;Row Name 4&lt;/th&gt;
      &lt;td&gt;4&lt;/td&gt;
      &lt;td&gt;Strawberry&lt;/td&gt;
      &lt;td&gt;true&lt;/td&gt;
      &lt;td&gt;Frank E. N. Stein&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
