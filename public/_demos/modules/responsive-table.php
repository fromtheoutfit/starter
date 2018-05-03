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
      <h2>Responsive Table</h2>
      <p>There are two responsive tables; the first is very basic and the second flips the axis for an improved user-experience, via the <code>flip-table-axis</code> class.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <table>
      <thead>
        <tr>
          <th scope="col">Browser</th>
          <th scope="col">Sessions</th>
          <th scope="col">Percentage</th>
          <th scope="col">New Users</th>
          <th scope="col">Avg. Duration</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Chrome</td>
          <td>9,562</td>
          <td>68.81%</td>
          <td>7,895</td>
          <td>01:07</td>
        </tr>
        <tr>
          <td>Firefox</td>
          <td>2,403</td>
          <td>17.29%</td>
          <td>2,046</td>
          <td>00:59</td>
        </tr>
        <tr>
          <td>Safari</td>
          <td>1,089</td>
          <td>2.63%</td>
          <td>904</td>
          <td>00:59</td>
        </tr>
        <tr>
          <td>Internet Explorer</td>
          <td>366</td>
          <td>2.63%</td>
          <td>333</td>
          <td>01:01</td>
        </tr>
        <tr>
          <td>Safari (in-app)</td>
          <td>162</td>
          <td>1.17%</td>
          <td>112</td>
          <td>00:58</td>
        </tr>
        <tr>
          <td>Opera</td>
          <td>103</td>
          <td>0.74%</td>
          <td>87</td>
          <td>01:22</td>
        </tr>
        <tr>
          <td>Edge</td>
          <td>98</td>
          <td>0.71%</td>
          <td>69</td>
          <td>01:18</td>
        </tr>
        <tr>
          <td>Other</td>
          <td>275</td>
          <td>6.02%</td>
          <td>90</td>
          <td>N/A</td>
        </tr>
      </tbody>
    </table>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;th scope="col"&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
      </div>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <table class="flip-table-axis">
      <thead>
        <tr>
          <th scope="row">Browser</th>
          <th scope="row">Sessions</th>
          <th scope="row">Percentage</th>
          <th scope="row">New Users</th>
          <th scope="row">Avg. Duration</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Chrome</td>
          <td>9,562</td>
          <td>68.81%</td>
          <td>7,895</td>
          <td>01:07</td>
        </tr>
        <tr>
          <td>Firefox</td>
          <td>2,403</td>
          <td>17.29%</td>
          <td>2,046</td>
          <td>00:59</td>
        </tr>
        <tr>
          <td>Safari</td>
          <td>1,089</td>
          <td>2.63%</td>
          <td>904</td>
          <td>00:59</td>
        </tr>
        <tr>
          <td>Internet Explorer</td>
          <td>366</td>
          <td>2.63%</td>
          <td>333</td>
          <td>01:01</td>
        </tr>
        <tr>
          <td>Safari (in-app)</td>
          <td>162</td>
          <td>1.17%</td>
          <td>112</td>
          <td>00:58</td>
        </tr>
        <tr>
          <td>Opera</td>
          <td>103</td>
          <td>0.74%</td>
          <td>87</td>
          <td>01:22</td>
        </tr>
        <tr>
          <td>Edge</td>
          <td>98</td>
          <td>0.71%</td>
          <td>69</td>
          <td>01:18</td>
        </tr>
        <tr>
          <td>Other</td>
          <td>275</td>
          <td>6.02%</td>
          <td>90</td>
          <td>N/A</td>
        </tr>
      </tbody>
    </table>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;table <span class="demo__highlight">class="flip-table-axis"</span>&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
