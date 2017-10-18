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
      <h2>Copy Block</h2>
      <p>All <em>typical</em> copy styles are zeroed-out globally, then redefined and scoped to the this <code>copy-block</code> class.<br />
      <small><a href="http://cognition.happycog.com/article/expressive-type-for-copy-blocks">This article nicely sums up why this is a good idea</a>.</small></p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <div class="copy-block">

      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>

      <p>
        This is a paragraph with various child elements used throughout; use your browser’s inspector to learn more.
        <a href="#">Here’s a link</a>,
        <abbr title="the full description of the abbreviation goes here">this is an abbreviation</abbr>,
        and <b>this text is bold</b>.
        <cite>Here’s a citation</cite>,
        <code>this is code</code>,
        <del datetime="1980-12-31">this has been deleted</del>,
        and <dfn title="the actual definition of the word(s) in this element">this is a definition</dfn>.
        <em>This bit of text is emphasized</em>,
        <i>this text is italic</i>,
        <ins datetime="1980-12-31" cite="http://optional-url-to-explanation-of-change.com/">this text has been inserted</ins>,
        and <kbd>this is keyboard</kbd>.
        <mark>This text has been marked</mark>
        and <q cite="http://optional-url-to-source-of-quote.com/">this text has been quoted</q>.
        <s>This text has been struck-through</s>,
        <samp>this is sample output</samp>,
        and <small>this text is rather small</small>.
        <strong>This text has strong emphasis</strong>,
        <sub>this text is subscript</sub>,
        and <sup>this text is superscript</sup>.
        <time datetime="1980-12-31">This is what time looks like</time>,
        <u>this bit right here is underlined</u>,
        and here’s a <var>variable</var>.
      </p>

      <ul>
        <li>First unordered list item</li>
        <li>Second unordered list item</li>
        <li>Third unordered list item</li>
      </ul>

      <ol>
        <li>First ordered list item</li>
        <li>Second ordered list item</li>
        <li>Third ordered list item</li>
      </ol>

      <dl>
        <dt>Term A</dt>
        <dd>A description for Term A</dd>
        <dt>Term B</dt>
        <dd>A description for Term B</dd>
      </dl>

      <blockquote>
        <p>This is a paragraph inside of a blockquote.</p>
        <p>This is another paragraph inside of the same blockquote.</p>
        <footer>— <cite>Firstname Lastname</cite></footer>
      </blockquote>

      <pre><code>A line of code
  An indented line of code
  An indented line of code
A line of code</code></pre>

      <figure>
        <img src="../img/fpo-image-400x300-1x.png" srcset="../img/fpo-image-400x300-2x.png 2x" alt="A blank image that is for placement only" width="400" height="300" />
        <figcaption>This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image.</figcaption>
      </figure>

      <video width="640" height="360" controls>
        <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
        <source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm">
      </video>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/YE7VzlLtp-4" title="Big Buck Bunny" allowfullscreen></iframe>

    </div>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;div class="copy-block"&gt;

  &lt;h1&gt;Heading 1&lt;/h1&gt;
  &lt;h2&gt;Heading 2&lt;/h2&gt;
  &lt;h3&gt;Heading 3&lt;/h3&gt;
  &lt;h4&gt;Heading 4&lt;/h4&gt;
  &lt;h5&gt;Heading 5&lt;/h5&gt;
  &lt;h6&gt;Heading 6&lt;/h6&gt;

  &lt;p&gt;
    This is a paragraph with various child elements used throughout; use your browser’s inspector to learn more.
    &lt;a href="#"&gt;Here’s a link&lt;/a&gt;,
    &lt;abbr title="the full description of the abbreviation goes here"&gt;this is an abbreviation&lt;/abbr&gt;,
    and &lt;b&gt;this text is bold&lt;/b&gt;.
    &lt;cite&gt;Here’s a citation&lt;/cite&gt;,
    &lt;code&gt;this is code&lt;/code&gt;,
    &lt;del datetime="1980-12-31"&gt;this has been deleted&lt;/del&gt;,
    and &lt;dfn title="the actual definition of the word(s) in this element"&gt;this is a definition&lt;/dfn&gt;.
    &lt;em&gt;This bit of text is emphasized&lt;/em&gt;,
    &lt;i&gt;this text is italic&lt;/i&gt;,
    &lt;ins datetime="1980-12-31" cite="http://optional-url-to-explanation-of-change.com/"&gt;this text has been inserted&lt;/ins&gt;,
    and &lt;kbd&gt;this is keyboard&lt;/kbd&gt;.
    &lt;mark&gt;This text has been marked&lt;/mark&gt;
    and &lt;q cite="http://optional-url-to-source-of-quote.com/"&gt;this text has been quoted&lt;/q&gt;.
    &lt;s&gt;This text has been struck-through&lt;/s&gt;,
    &lt;samp&gt;this is sample output&lt;/samp&gt;,
    and &lt;small&gt;this text is rather small&lt;/small&gt;.
    &lt;strong&gt;This text has strong emphasis&lt;/strong&gt;,
    &lt;sub&gt;this text is subscript&lt;/sub&gt;,
    and &lt;sup&gt;this text is superscript&lt;/sup&gt;.
    &lt;time datetime="1980-12-31"&gt;This is what time looks like&lt;/time&gt;,
    &lt;u&gt;this bit right here is underlined&lt;/u&gt;,
    and here’s a &lt;var&gt;variable&lt;/var&gt;.
  &lt;/p&gt;

  &lt;ul&gt;
    &lt;li&gt;First unordered list item&lt;/li&gt;
    &lt;li&gt;Second unordered list item&lt;/li&gt;
    &lt;li&gt;Third unordered list item&lt;/li&gt;
  &lt;/ul&gt;

  &lt;ol&gt;
    &lt;li&gt;First ordered list item&lt;/li&gt;
    &lt;li&gt;Second ordered list item&lt;/li&gt;
    &lt;li&gt;Third ordered list item&lt;/li&gt;
  &lt;/ol&gt;

  &lt;dl&gt;
    &lt;dt&gt;Term A&lt;/dt&gt;
    &lt;dd&gt;A description for Term A&lt;/dd&gt;
    &lt;dt&gt;Term B&lt;/dt&gt;
    &lt;dd&gt;A description for Term B&lt;/dd&gt;
  &lt;/dl&gt;

  &lt;blockquote&gt;
    &lt;p&gt;This is a paragraph inside of a blockquote.&lt;/p&gt;
    &lt;p&gt;This is another paragraph inside of the same blockquote.&lt;/p&gt;
    &lt;footer&gt;— &lt;cite&gt;Firstname Lastname&lt;/cite&gt;&lt;/footer&gt;
  &lt;/blockquote&gt;

  &lt;pre&gt;&lt;code&gt;A line of code
  An indented line of code
  An indented line of code
A line of code&lt;/code&gt;&lt;/pre&gt;

  &lt;figure&gt;
    &lt;img src="../img/fpo-image-400x300-1x.png" alt="A blank image that is for placement only" width="400" height="300" /&gt;
    &lt;figcaption&gt;This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image.&lt;/figcaption&gt;
  &lt;/figure&gt;

  &lt;video width="640" height="360" controls&gt;
    &lt;source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4"&gt;
    &lt;source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm"&gt;
  &lt;/video&gt;

  &lt;iframe width="560" height="315" src="https://www.youtube.com/embed/YE7VzlLtp-4" allowfullscreen&gt;&lt;/iframe&gt;

&lt;/div&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
