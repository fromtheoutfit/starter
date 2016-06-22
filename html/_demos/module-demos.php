<!doctype html>
<html class="no-js" lang="en">
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/lib/css/all.css" />
    <title>Module Demos</title>
    <meta name="description" content="Demos of the various modules available in this project." />

    <script src="/lib/js/modernizr.js"></script>

    <!-- This imported stylesheet is *only* for this demo page and its simple
    UI. It has no effect on the demos themselves and it should *not* be
    included in the production-ready code. -->
    <style>@import 'demos-ui.css';</style>

  </head>
  <body>


    <?php // include $_SERVER['DOCUMENT_ROOT'].'/mod/header.php'; ?>


    <nav class="demos-nav" id="demos-nav">
      <h1>Layout Demos</h1>
      <a href="#demo-0">Intro</a>
      <a href="#demo-1">Copy Block</a>
      <a href="#demo-2">Table</a>
      <a href="#demo-3">Form: Control Types</a>
      <a href="#demo-4">Form: Example</a>
      <a href="#demo-5">Mixed Media</a>
      <button class="demos-nav__toggle" id="demos-nav__toggle">Toggle Nav</button>
    </nav><!-- .demos-nav -->


    <div class="demo" id="demo-0">
      <h2>Intro</h2>

      <p>Two examples of a basic introduction module; it’s primary purpose is for page titles, but aims to be flexible enough for any sort of page/section introduction.</p>

      <div data-layout="module" data-layout-options="gutters wrap-items">
        <div data-layout="module__item" data-layout-width="one-whole">
          <div class="demo__content">

            <div class="intro">
              <h1 class="intro__title">About The Company</h1>
              <p class="intro__subtitle">Bits and bobs about our people, culture, etc.</p>
            </div><!-- .intro -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->

        <div data-layout="module__item" data-layout-width="one-whole">
          <div class="demo__content">

            <div class="intro u-inline-subtitle u-inverted">
              <h1 class="intro__title">About The Company</h1>
              <p class="intro__subtitle">Bits and bobs about our people, culture, etc.</p>
            </div><!-- .intro -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->

      <div class="demo__code">
        <pre><code>&lt;div class="<span class="demo__highlight">intro</span>"&gt;
  &lt;h1 class="<span class="demo__highlight">intro__title</span>"&gt;About The Company&lt;/h1&gt;
  &lt;p class="<span class="demo__highlight">intro__subtitle</span>"&gt;Bits and bobs about our people, culture, etc.&lt;/p&gt;
&lt;/div&gt;

&lt;div class="<span class="demo__highlight">intro u-inline-subtitle u-inverted</span>"&gt;
  &lt;h1 class="<span class="demo__highlight">intro__title</span>"&gt;About The Company&lt;/h1&gt;
  &lt;p class="<span class="demo__highlight">intro__subtitle</span>"&gt;Bits and bobs about our people, culture, etc.&lt;/p&gt;
&lt;/div&gt;</code></pre>
      </div><!-- .demo__code -->
    </div><!-- .demo -->


    <div class="demo" id="demo-1">
      <h2>Copy Block</h2>

      <p>
        All <em>typical</em> copy styles are zeroed-out globally, then redefined and scoped to the <code>copy-block</code> class.<br />
        <small><a href="http://cognition.happycog.com/article/expressive-type-for-copy-blocks">This article nicely sums up why this is a good idea</a>.</small>
      </p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

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
              </blockquote>

              <pre><code>A line of code
  An indented line of code
  An indented line of code
A line of code</code></pre>

              <figure>
                <img src="img/fpo-image-400x300-1x.png" alt="A blank image that is for placement only" width="400" height="300" />
                <figcaption>This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image. This is a caption for the above image.</figcaption>
              </figure>

              <video width="640" height="360" controls>
                <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
                <source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm">
              </video>

              <iframe width="560" height="315" src="https://www.youtube.com/embed/YE7VzlLtp-4" allowfullscreen></iframe>
            </div><!-- .copy-block -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->

      <div class="demo__code">
        <pre><code><span class="demo__highlight">&lt;div class="copy-block"&gt;</span>

  &lt;h1&gt;...&lt;/h1&gt;
  &lt;h2&gt;...&lt;/h2&gt;
  &lt;h3&gt;...&lt;/h3&gt;
  &lt;h4&gt;...&lt;/h4&gt;
  &lt;h5&gt;...&lt;/h5&gt;
  &lt;h6&gt;...&lt;/h6&gt;

  &lt;p&gt;...&lt;/p&gt;

  &lt;ul&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
  &lt;/ul&gt;

  &lt;ol&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
  &lt;/ol&gt;

  &lt;dl&gt;
    &lt;dt&gt;...&lt;/dt&gt;
    &lt;dd&gt;...&lt;/dd&gt;
    &lt;dt&gt;...&lt;/dt&gt;
    &lt;dd&gt;...&lt;/dd&gt;
  &lt;/dl&gt;

  &lt;blockquote&gt;
    &lt;p&gt;...&lt;/p&gt;
  &lt;/blockquote&gt;

  &lt;pre&gt;&lt;code&gt;...
  ...
  ...
...&lt;/code&gt;&lt;/pre&gt;

  &lt;figure&gt;
    &lt;img src="..." alt="..." width="..." height="..." /&gt;
    &lt;figcaption&gt;...&lt;/figcaption&gt;
  &lt;/figure&gt;

  &lt;video width="..." height="..." controls&gt;
    &lt;source src="... .mp4"  type="video/mp4" /&gt;
    &lt;source src="... .webm" type="video/webm" /&gt;
  &lt;/video&gt;

  &lt;iframe src="..." width="..." height="..." allowfullscreen&gt;&lt;/iframe&gt;

<span class="demo__highlight">&lt;/div&gt;</span></code></pre>
      </div><!-- .demo__code -->
    </div><!-- .demo -->

    <div class="demo" id="demo-2">
      <h2>Table</h2>

      <p>An extremely basic table with all of the commonly-used elements we may need. It’s <em>not</em> responsive by default, but there are <a href="https://css-tricks.com/accessible-simple-responsive-tables/">many <em>many</em> options available</a> that can be incorporated as needed.</p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

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

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->

      <div class="demo__code">
        <pre><code>&lt;table&gt;
  &lt;caption&gt;...&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;td&gt;&lt;/td&gt;
      &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;th scope="col"&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;...&lt;/th&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
      </div><!-- .demo__code -->
    </div><!-- .demo -->

    <div class="demo" id="demo-3">
      <h2>Form: Control Types</h2>

      <p>All of the form control types supported by this project.</p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

            <form>
              <div class="form-control u-stack-label">
                <label for="input-1">Text</label>
                <input type="text" name="input-1" id="input-1" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-2">Email</label>
                <input type="email" name="input-2" id="input-2" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-3">Password</label>
                <input type="password" name="input-3" id="input-3" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-4">Search</label>
                <input type="search" name="input-4" id="input-4" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-5">URL</label>
                <input type="url" name="input-5" id="input-5" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-6">Date</label>
                <input type="date" name="input-6" id="input-6" class="u-text-input" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-7">Datetime-local</label>
                <input type="datetime-local" name="input-7" id="input-7" class="u-text-input" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-8">Time</label>
                <input type="time" name="input-8" id="input-8" class="u-text-input" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-9">Week</label>
                <input type="week" name="input-9" id="input-9" class="u-text-input" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-10">Month</label>
                <input type="month" name="input-10" id="input-10" class="u-text-input" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-11">Telephone</label>
                <input type="tel" name="input-11" id="input-11" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-12">Number</label>
                <input type="number" name="input-12" id="input-12" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-13">Textarea</label>
                <textarea name="input-13" rows="5" id="input-13" class="u-text-input" placeholder="example value"></textarea>
              </div>

              <div class="form-control u-stack-label">
                <label for="input-14">Select</label>
                <select name="input-14" id="input-14">
                  <optgroup label="Group 1">
                    <option value="G101">Group 1: Option 1</option>
                    <option value="G102">Group 1: Option 2</option>
                    <option value="G103">Group 1: Option 3</option>
                    <option value="G104">Group 1: Option 4</option>
                    <option value="G105">Group 1: Option 5</option>
                  </optgroup>
                  <option value="01">No Group: Option 1</option>
                  <option value="02">No Group: Option 2</option>
                  <option value="03">No Group: Option 3</option>
                  <option value="04">No Group: Option 4</option>
                  <option value="05">No Group: Option 5</option>
                </select>
              </div>

              <div class="form-control u-stack-label">
                <label for="input-15">Datalist</label>
                <input list="list-name" name="input-15" id="input-15" class="u-text-input" />
                <datalist id="list-name">
                  <option value="Option 1">
                  <option value="Option 2">
                  <option value="Option 3">
                  <option value="Option 4">
                  <option value="Option 5">
                  <option value="Option 6">
                </datalist>
              </div>

              <div class="form-control u-stack-label">
                <label for="input-16">Range</label>
                <input type="range" min="10" max="30" name="input-16" id="input-16" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-17">Color</label>
                <input type="color" name="input-17" id="input-17" />
              </div>

              <div class="form-control u-stack-label">
                <label for="input-18">File</label>
                <input type="file" name="input-18" id="input-18" />
              </div>

              <div class="control-group u-inline-controls">
                <div class="control-group__label">Radios</div>
                <div class="form-control">
                  <input type="radio" name="input-19" value="radio-a" id="input-19a" />
                  <label for="input-19a">Radio A</label>
                </div>
                <div class="form-control">
                  <input type="radio" name="input-19" value="radio-b" id="input-19b" />
                  <label for="input-19b">Radio B</label>
                </div>
                <div class="form-control">
                  <input type="radio" name="input-19" value="radio-c" id="input-19c" />
                  <label for="input-19c">Radio C</label>
                </div>
              </div>

              <div class="control-group">
                <div class="control-group__label">Checkboxes</div>
                <div class="form-control">
                  <input type="checkbox" name="input-20" value="checkbox-a" id="input-20a" />
                  <label for="input-20a">Checkbox A</label>
                </div>
                <div class="form-control">
                  <input type="checkbox" name="input-20" value="checkbox-b" id="input-20b" />
                  <label for="input-20b">Checkbox B</label>
                </div>
                <div class="form-control">
                  <input type="checkbox" name="input-20" value="checkbox-c" id="input-20c" />
                  <label for="input-20c">Checkbox C</label>
                </div>
              </div>

              <div class="form-control">
                <input type="submit" class="btn" value="Submit" />
              </div>

              <div class="form-control">
                <input type="button" class="btn-large" value="Button: Large" />
                <input type="button" class="btn" value="Button" />
                <input type="button" class="btn-small" value="Button: Small" />
              </div>
            </form>

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->

      <div class="demo__code">
        <pre><code>&lt;form&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="text" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="email" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="password" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="search" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="url" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="date" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="datetime-local" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="time" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="week" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="month" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="tel" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="number" name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;textarea name="..." rows="5" id="..." class="<span class="demo__highlight">u-text-input</span>" placeholder="..."&gt;&lt;/textarea&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;select name="..." id="..."&gt;
      &lt;optgroup label="Group 1"&gt;
        &lt;option value="..."&gt;...&lt;/option&gt;
        &lt;option value="..."&gt;...&lt;/option&gt;
        &lt;option value="..."&gt;...&lt;/option&gt;
        &lt;option value="..."&gt;...&lt;/option&gt;
        &lt;option value="..."&gt;...&lt;/option&gt;
      &lt;/optgroup&gt;
      &lt;option value="..."&gt;...&lt;/option&gt;
      &lt;option value="..."&gt;...&lt;/option&gt;
      &lt;option value="..."&gt;...&lt;/option&gt;
      &lt;option value="..."&gt;...&lt;/option&gt;
      &lt;option value="..."&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input list="..." name="..." id="..." class="<span class="demo__highlight">u-text-input</span>" /&gt;
    &lt;datalist id="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
    &lt;/datalist&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="range" min="..." max="..." name="..." id="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="color" name="..." id="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control u-stack-label</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="file" name="..." id="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">control-group u-inline-controls</span>"&gt;
    &lt;div class="<span class="demo__highlight">control-group__label</span>"&gt;...&lt;/div&gt;
    &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
      &lt;input type="radio" name="..." value="..." id="..." /&gt;
      &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
      &lt;input type="radio" name="..." value="..." id="..." /&gt;
      &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
      &lt;input type="radio" name="..." value="..." id="..." /&gt;
      &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">control-group</span>"&gt;
    &lt;div class="<span class="demo__highlight">control-group__label</span>"&gt;...&lt;/div&gt;
    &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
      &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
      &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
      &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
      &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
      &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
      &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
    &lt;input type="submit" class="<span class="demo__highlight">btn</span>" value="..." /&gt;
  &lt;/div&gt;

  &lt;div class="<span class="demo__highlight">form-control</span>"&gt;
    &lt;input type="button" class="<span class="demo__highlight">btn-large</span>" value="..." /&gt;
    &lt;input type="button" class="<span class="demo__highlight">btn</span>" value="..." /&gt;
    &lt;input type="button" class="<span class="demo__highlight">btn-small</span>" value="..." /&gt;
  &lt;/div&gt;

&lt;/form&gt;</code></pre>
      </div><!-- .demo__code -->
    </div><!-- .demo -->

    <div class="demo" id="demo-4">
      <h2>Form: Example</h2>

      <p>A simple form using <em>some</em> of the above control types as well as common states such as, <em>error</em>, <em>success</em>, <code>disabled</code>, and <code>required</code>.</p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

            <form>
              <div class="form-control u-stack-label is-error">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="u-text-input" placeholder="ex. Susan Jones" required />
                <div class="input-response">This field is required.</div>
              </div>

              <div class="form-control u-stack-label is-success">
                <label for="email-address">Email Address</label>
                <input type="email" name="email-address" id="email-address" class="u-text-input" placeholder="ex. you@domain.com" required />
                <div class="input-response">Awesome!</div>
              </div>

              <div class="form-control u-stack-label">
                <label for="phone-number">Phone Number</label>
                <input type="tel" name="phone-number" id="phone-number" class="u-text-input" placeholder="ex. 1-555-555-5555" disabled />
              </div>

              <div class="form-control u-stack-label">
                <label for="subject">Subject</label>
                <select name="subject" id="subject">
                  <option selected disabled>Please choose:</option>
                  <option value="Invoices">Invoices</option>
                  <option value="Address Change">Address Change</option>
                  <option value="Disputes">Disputes</option>
                  <option value="Customer Service">Customer Service</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="form-control u-stack-label">
                <label for="your-message">Your Message</label>
                <textarea name="your-message" rows="5" id="your-message" class="u-text-input" required></textarea>
              </div>

              <div class="control-group">
                <div class="control-group__label">Options</div>
                <div class="form-control">
                  <input type="radio" name="options" value="Fast" id="Fast" />
                  <label for="Fast">Fast</label>
                </div>
                <div class="form-control">
                  <input type="radio" name="options" value="cheap" id="cheap" />
                  <label for="cheap">Cheap</label>
                </div>
                <div class="form-control">
                  <input type="radio" name="options" value="good" id="good" />
                  <label for="good">Good</label>
                </div>
              </div>

              <div class="form-control u-stack-label">
                <label for="file-attachment">Attach a File</label>
                <input type="file" name="file-attachment" id="file-attachment" />
              </div>

              <div class="form-control">
                <input type="checkbox" name="agree-with-tc" value="checkbox-a" id="agree-with-tc" />
                <label for="agree-with-tc">I agree with the <a href="#">Terms and Conditions</a></label>
              </div>

              <div class="form-control">
                <input type="submit" class="btn" value="Send" />
              </div>

              <div class="form-response is-error">Oops, there’s an issue in this form; please review the highlighted fields.</div>

              <div class="form-response is-success">Sent, thank you!</div>
            </form>

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->

      <div class="demo__code">
        <pre><code>&lt;form&gt;

  &lt;div class="form-control u-stack-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="name"&gt;Name&lt;/label&gt;
    &lt;input type="text" name="name" id="name" class="u-text-input" placeholder="ex. Susan Jones" <span class="demo__highlight">required</span> /&gt;
    <span class="demo__highlight">&lt;div class="input-response"&gt;This field is required.&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control u-stack-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="email-address"&gt;Email Address&lt;/label&gt;
    &lt;input type="email" name="email-address" id="email-address" class="u-text-input" placeholder="ex. you@domain.com" <span class="demo__highlight">required</span> /&gt;
    <span class="demo__highlight">&lt;div class="input-response"&gt;Awesome!&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control u-stack-label"&gt;
    &lt;label for="phone-number"&gt;Phone Number&lt;/label&gt;
    &lt;input type="tel" name="phone-number" id="phone-number" class="u-text-input" placeholder="ex. 1-555-555-5555" <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-label"&gt;
    &lt;label for="subject"&gt;Subject&lt;/label&gt;
    &lt;select name="subject" id="subject"&gt;
      &lt;option selected disabled&gt;Please choose:&lt;/option&gt;
      &lt;option value="Invoices"&gt;Invoices&lt;/option&gt;
      &lt;option value="Address Change"&gt;Address Change&lt;/option&gt;
      &lt;option value="Disputes"&gt;Disputes&lt;/option&gt;
      &lt;option value="Customer Service"&gt;Customer Service&lt;/option&gt;
      &lt;option value="Other"&gt;Other&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-label"&gt;
    &lt;label for="your-message"&gt;Your Message&lt;/label&gt;
    &lt;textarea name="your-message" rows="5" id="your-message" class="u-text-input" required&gt;&lt;/textarea&gt;
  &lt;/div&gt;

  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;Options&lt;/div&gt;
    &lt;div class="form-control"&gt;
      &lt;input type="radio" name="options" value="fast" id="fast" /&gt;
      &lt;label for="fast"&gt;Fast&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="form-control"&gt;
      &lt;input type="radio" name="options" value="cheap" id="cheap" /&gt;
      &lt;label for="cheap"&gt;Cheap&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="form-control"&gt;
      &lt;input type="radio" name="options" value="good" id="good" /&gt;
      &lt;label for="good"&gt;Good&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-label"&gt;
    &lt;label for="file-attachment"&gt;Attach a File&lt;/label&gt;
    &lt;input type="file" name="file-attachment" id="file-attachment" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;input type="checkbox" name="agree-with-tc" value="checkbox-a" id="agree-with-tc" /&gt;
    &lt;label for="agree-with-tc"&gt;I agree with the &lt;a href="#"&gt;Terms and Conditions&lt;/a&gt;&lt;/label&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;input type="submit" class="btn" value="Send" /&gt;
  &lt;/div&gt;

  &lt;div class="form-response is-error"&gt;Oops, there’s an issue in this form; please review the highlighted fields.&lt;/div&gt;

  &lt;div class="form-response is-success"&gt;Sent, thank you!&lt;/div&gt;

&lt;/form&gt;</code></pre>
      </div><!-- .demo__code -->
    </div><!-- .demo -->

    <div class="demo" id="demo-5">
      <h2>Mixed Media</h2>

      <p>Four examples showing <em>some</em> of the various ways you can mix the child elements of a Mixed Media module.</p>

      <div data-layout="module" data-layout-options="gutters wrap-items">
        <div data-layout="module__item">
          <div class="demo__content">

            <div class="mm">
              <div class="mm__header">
                <h1 class="mm__title">Mixed Media Block Title</h1>
                <p class="mm__subtitle">Mixed media block subtitle</p>
              </div><!-- .mm__header -->
              <figure class="mm__image">
                <img src="img/fpo-image-400x300-1x.png" srcset="img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" />
                <figcaption>A small caption for the above image.</figcaption>
              </figure><!-- .mm__image -->
              <div class="mm__body">
                <p>Lorem ipsum dolor sit amet, <a href="http://an-unlikely-url.com">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="mm__cta">
                <a href="#" class="btn">Action</a>
              </div><!-- .mm__cta -->
            </div><!-- .mm -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->

        <div data-layout="module__item">
          <div class="demo__content">

            <div class="mm">
              <figure class="mm__image">
                <a href="#"><img src="img/fpo-image-400x300-1x.png" srcset="img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /></a>
              </figure><!-- .mm__image -->
              <div class="mm__header">
                <h1 class="mm__title">A Rather Long Mixed Media Block Title</h1>
                <p class="mm__subtitle">This is the subtitle and it’s also quite long.</p>
              </div><!-- .mm__header -->
              <div class="mm__body">
                <ol>
                  <li>List item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                  <li>Ordered list item list item list item list item list item list item list item</li>
                </ol>
              </div>
              <div class="mm__cta">
                <a href="#" class="btn">Action</a>
              </div><!-- .mm__cta -->
            </div><!-- .mm -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->

        <div data-layout="module__item">
          <div class="demo__content">

            <div class="mm">
              <div class="mm__header">
                <h1 class="mm__title"><a href="http://a-place.com">Title</a></h1>
              </div><!-- .mm__header -->
              <figure class="mm__image">
                <a href="#"><img src="img/fpo-image-400x300-1x.png" srcset="img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /></a>
                <figcaption>A small caption for the above image.</figcaption>
              </figure><!-- .mm__image -->
              <div class="mm__body">
                <dl>
                  <dt>Title</dt>
                  <dd>Description</dd>
                  <dt>Title title title title title title title title title title title title title title title</dt>
                  <dd>Description description description description description description description description description description</dd>
                </dl>
              </div>
              <div class="mm__cta">
                <a href="#" class="btn-large">Action 1</a>
                <a href="#" class="btn">Action 2</a>
                <a href="#" class="btn-small">Action 3</a>
              </div><!-- .mm__cta -->
            </div><!-- .mm -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->

        <div data-layout="module__item">
          <div class="demo__content">

            <div class="mm">
              <figure class="mm__image">
                <a href="#" class="icon-play--image"><img src="img/fpo-image-400x300-1x.png" srcset="img/fpo-image-400x300-2x.png 2x" width="400" height="300" alt="FPO image" /></a>
                <figcaption>A small caption for the above image.</figcaption>
              </figure><!-- .mm__image -->
              <div class="mm__cta">
                <a href="#" class="btn icon-play--btn">Action</a>
              </div><!-- .mm__cta -->
            </div><!-- .mm -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->

      <div class="demo__code">
        <pre><code>&lt;div class="<span class="demo__highlight">mm</span>"&gt;
  &lt;div class="<span class="demo__highlight">mm__header</span>"&gt;
    &lt;h1 class="<span class="demo__highlight">mm__title</span>"&gt;...&lt;/h1&gt;
    &lt;p class="<span class="demo__highlight">mm__subtitle</span>"&gt;...&lt;/p&gt;
  &lt;/div&gt;
  &lt;figure class="<span class="demo__highlight">mm__image</span>"&gt;
    &lt;img src="..." width="..." height="..." alt="..." /&gt;
    &lt;figcaption&gt;...&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div class="<span class="demo__highlight">mm__body</span>"&gt;
    &lt;p&gt;...&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="<span class="demo__highlight">mm__cta</span>"&gt;
    &lt;a href="..." class="<span class="demo__highlight">btn</span>"&gt;...&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="<span class="demo__highlight">mm</span>"&gt;
  &lt;figure class="<span class="demo__highlight">mm__image</span>"&gt;
    &lt;a href="..."&gt;&lt;img src="..." width="..." height="..." alt="..." /&gt;&lt;/a&gt;
  &lt;/figure&gt;
  &lt;div class="<span class="demo__highlight">mm__header</span>"&gt;
    &lt;h1 class="<span class="demo__highlight">mm__title</span>"&gt;...&lt;/h1&gt;
    &lt;p class="<span class="demo__highlight">mm__subtitle</span>"&gt;...&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="<span class="demo__highlight">mm__body</span>"&gt;
    &lt;ol&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/div&gt;
  &lt;div class="<span class="demo__highlight">mm__cta</span>"&gt;
    &lt;a href="..." class="<span class="demo__highlight">btn</span>"&gt;...&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="<span class="demo__highlight">mm</span>"&gt;
  &lt;div class="<span class="demo__highlight">mm__header</span>"&gt;
    &lt;h1 class="<span class="demo__highlight">mm__title</span>"&gt;&lt;a href="..."&gt;...&lt;/a&gt;&lt;/h1&gt;
  &lt;/div&gt;
  &lt;figure class="<span class="demo__highlight">mm__image</span>"&gt;
    &lt;a href="...""&gt;&lt;img src="..." width="..." height="..." alt="..." /&gt;&lt;/a&gt;
    &lt;figcaption&gt;...&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div class="<span class="demo__highlight">mm__body</span>"&gt;
    &lt;dl&gt;
      &lt;dt&gt;...&lt;/dt&gt;
      &lt;dd&gt;...&lt;/dd&gt;
    &lt;/dl&gt;
  &lt;/div&gt;
  &lt;div class="<span class="demo__highlight">mm__cta</span>"&gt;
    &lt;a href="..." class="<span class="demo__highlight">btn-large</span>"&gt;...&lt;/a&gt;
    &lt;a href="..." class="<span class="demo__highlight">btn</span>"&gt;...&lt;/a&gt;
    &lt;a href="..." class="<span class="demo__highlight">btn-small</span>"&gt;...&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="<span class="demo__highlight">mm</span>"&gt;
  &lt;figure class="<span class="demo__highlight">mm__image</span>"&gt;
    &lt;a href="..." class="<span class="demo__highlight">icon-play--image</span>"&gt;&lt;img src="..." width="..." height="..." alt="..." /&gt;&lt;/a&gt;
    &lt;figcaption&gt;...&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div class="<span class="demo__highlight">mm__cta</span>"&gt;
    &lt;a href="..." class="<span class="demo__highlight">btn icon-play--btn</span>"&gt;...&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
      </div><!-- .demo__code -->
    </div><!-- .demo -->

    <!-- This script is *only* for this demo page and its simple UI. It has no
    effect on the demos themselves and it should *not* be included in the
    production-ready code. -->
    <script src="demos-ui.js"></script>

  </body>
</html>
