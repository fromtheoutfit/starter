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


    <nav class="demos-nav" id="demos-nav">
      <h1>Module Demos</h1>
      <a href="#demo-0">Intro</a>
      <a href="#demo-1">Copy Block</a>
      <a href="#demo-2">Table</a>
      <a href="#demo-3">Form: Control Types</a>
      <a href="#demo-4">Form: Layout Options</a>
      <a href="#demo-5">Form: Example</a>
      <a href="#demo-6">Mixed Media</a>
      <a href="#demo-7">Call to Action</a>
      <a href="#demo-8">Feature</a>
      <button class="demos-nav__toggle" id="demos-nav__toggle">Toggle Nav</button>
    </nav><!-- .demos-nav -->


    <header class="header">
      <div class="header__id">
        <a href="#"><img src="/_demos/img/fpo-logo-1x.png" srcset="/_demos/img/fpo-logo-2x.png 2x" width="200" height="125" alt="Project Name" /></a>
        <h1 class="visuallyhidden">Project Name</h1>
      </div><!-- .header__id -->
      <button class="header__open-nav js-header__open-nav" aria-label="Open navigation"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M4 10h24c1.104 0 2-.896 2-2s-.896-2-2-2H4c-1.104 0-2 .896-2 2s.896 2 2 2zm24 4H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2zm0 8H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2z" fill="#fff" /></svg></button>
      <nav class="header__nav-wrap js-header__nav-wrap">
        <button class="header__close-nav js-header__close-nav" aria-label="Close navigation">&times;</button>
        <h2 class="visuallyhidden">Main Navigation</h2>
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
        </ul><!-- .header__nav-links -->
      </nav><!-- .header__nav-wrap -->
    </header><!-- .header -->


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
                <footer>— <cite>Firstname Lastname</cite></footer>
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
    </div><!-- .demo -->

    <div class="demo" id="demo-3">
      <h2>Form: Control Types</h2>

      <p>All of the form control types supported by this project.</p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

            <form>
              <div class="form-control u-stack-input-label">
                <label for="input-1">Text</label>
                <input type="text" name="input-1" id="input-1" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-2">Email</label>
                <input type="email" name="input-2" id="input-2" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-3">Password</label>
                <input type="password" name="input-3" id="input-3" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-4">Search</label>
                <input type="search" name="input-4" id="input-4" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-5">URL</label>
                <input type="url" name="input-5" id="input-5" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-6">Date</label>
                <input type="date" name="input-6" id="input-6" class="u-text-input" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-7">Datetime-local</label>
                <input type="datetime-local" name="input-7" id="input-7" class="u-text-input" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-8">Time</label>
                <input type="time" name="input-8" id="input-8" class="u-text-input" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-9">Week</label>
                <input type="week" name="input-9" id="input-9" class="u-text-input" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-10">Month</label>
                <input type="month" name="input-10" id="input-10" class="u-text-input" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-11">Telephone</label>
                <input type="tel" name="input-11" id="input-11" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-12">Number</label>
                <input type="number" name="input-12" id="input-12" class="u-text-input" placeholder="example value" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-13">Textarea</label>
                <textarea name="input-13" rows="5" cols="30" id="input-13" class="u-text-input" placeholder="example value"></textarea>
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-14">Select</label>
                <div class="u-select-input">
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
              </div>

              <div class="form-control u-stack-input-label">
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

              <div class="form-control u-stack-input-label">
                <label for="input-16">Range</label>
                <input type="range" min="10" max="30" name="input-16" id="input-16" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-17">Color</label>
                <input type="color" name="input-17" id="input-17" />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="input-18">File</label>
                <input type="file" name="input-18" id="input-18" />
              </div>

              <div class="control-group">
                <div class="control-group__label">Radios</div>
                <div class="control-group__controls">
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
              </div>

              <div class="control-group">
                <div class="control-group__label">Checkboxes</div>
                <div class="control-group__controls">
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
    </div><!-- .demo -->

    <div class="demo" id="demo-4">
      <h2>Form: Layout Options</h2>

      <p>The various ways a group of form controls can be laid out.</p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

            <form>

              <!--
                Layout Demo #1
                =================================
                - Group label visibility: visible
                - Group label layout:     stacked
                - Controls width:         auto
                - Controls layout:        stacked
                - Input label visibility: visible
                - Input label layout:     inline
              -->
              <div class="control-group">
                <div class="control-group__label">Group Label</div>
                <div class="control-group__controls">
                  <div class="form-control">
                    <input type="radio" name="radio-1" value="option-1" id="radio-1-option-1" />
                    <label for="radio-1-option-1">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-1" value="option-2" id="radio-1-option-2" />
                    <label for="radio-1-option-2">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-1" value="option-3" id="radio-1-option-3" />
                    <label for="radio-1-option-3">Option</label>
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #2
                =================================
                - Group label visibility: visible
                - Group label layout:     inline
                - Controls width:         auto
                - Controls layout:        stacked
                - Input label visibility: visible
                - Input label layout:     inline
              -->
              <div class="control-group u-inline-children">
                <div class="control-group__label u-padding-right">Group Label</div>
                <div class="control-group__controls">
                  <div class="form-control">
                    <input type="radio" name="radio-2" value="option-1" id="radio-2-option-1" />
                    <label for="radio-2-option-1">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-2" value="option-2" id="radio-2-option-2" />
                    <label for="radio-2-option-2">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-2" value="option-3" id="radio-2-option-3" />
                    <label for="radio-2-option-3">Option</label>
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #3
                =================================
                - Group label visibility: visible
                - Group label layout:     stacked
                - Controls width:         auto
                - Controls layout:        inline
                - Input label visibility: visible
                - Input label layout:     inline
              -->
              <div class="control-group">
                <div class="control-group__label">Group Label</div>
                <div class="control-group__controls u-inline-children">
                  <div class="form-control">
                    <input type="radio" name="radio-3" value="option-1" id="radio-3-option-1" />
                    <label for="radio-3-option-1">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-3" value="option-2" id="radio-3-option-2" />
                    <label for="radio-3-option-2">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-3" value="option-3" id="radio-3-option-3" />
                    <label for="radio-3-option-3">Option</label>
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #4
                =================================
                - Group label visibility: visible
                - Group label layout:     inline
                - Controls width:         auto
                - Controls layout:        inline
                - Input label visibility: visible
                - Input label layout:     inline
              -->
              <div class="control-group u-inline-children">
                <div class="control-group__label u-padding-right">Group Label</div>
                <div class="control-group__controls u-inline-children">
                  <div class="form-control">
                    <input type="radio" name="radio-4" value="option-1" id="radio-4-option-1" />
                    <label for="radio-4-option-1">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-4" value="option-2" id="radio-4-option-2" />
                    <label for="radio-4-option-2">Option</label>
                  </div>
                  <div class="form-control">
                    <input type="radio" name="radio-4" value="option-3" id="radio-4-option-3" />
                    <label for="radio-4-option-3">Option</label>
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #5
                =================================
                - Group label visibility: visible
                - Group label layout:     stacked
                - Controls width:         auto
                - Controls layout:        stacked
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group">
                <div class="control-group__label">Group Label</div>
                <div class="control-group__controls">
                  <div class="form-control">
                    <label for="text-input-1" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-1" id="text-input-1" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-2" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-2" id="text-input-2" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-3" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-3" id="text-input-3" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #6
                =================================
                - Group label visibility: visible
                - Group label layout:     inline
                - Controls width:         auto
                - Controls layout:        stacked
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group u-inline-children">
                <div class="control-group__label u-padding-right u-padding-top">Group Label</div>
                <div class="control-group__controls">
                  <div class="form-control">
                    <label for="text-input-4" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-4" id="text-input-4" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-5" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-5" id="text-input-5" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-6" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-6" id="text-input-6" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #7
                =================================
                - Group label visibility: visible
                - Group label layout:     stacked
                - Controls width:         auto
                - Controls layout:        inline
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group">
                <div class="control-group__label">Group Label</div>
                <div class="control-group__controls u-inline-children">
                  <div class="form-control">
                    <label for="text-input-7" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-7" id="text-input-7" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-8" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-8" id="text-input-8" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-9" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-9" id="text-input-9" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #8
                =================================
                - Group label visibility: visible
                - Group label layout:     inline
                - Controls width:         auto
                - Controls layout:        inline
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group u-inline-children">
                <div class="control-group__label u-padding-right u-padding-top">Group Label</div>
                <div class="control-group__controls u-inline-children">
                  <div class="form-control">
                    <label for="text-input-10" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-10" id="text-input-10" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-11" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-11" id="text-input-11" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-12" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-12" id="text-input-12" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #9
                =================================
                - Group label visibility: visible
                - Group label layout:     stacked
                - Controls width:         stretched
                - Controls layout:        stacked
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group">
                <div class="control-group__label">Group Label</div>
                <div class="control-group__controls u-stretch-controls">
                  <div class="form-control">
                    <label for="text-input-13" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-13" id="text-input-13" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-14" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-14" id="text-input-14" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-15" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-15" id="text-input-15" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #10
                =================================
                - Group label visibility: visible
                - Group label layout:     inline
                - Controls width:         stretched
                - Controls layout:        stacked
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group u-inline-children">
                <div class="control-group__label u-padding-right u-padding-top">Group Label</div>
                <div class="control-group__controls u-stretch-controls">
                  <div class="form-control">
                    <label for="text-input-16" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-16" id="text-input-16" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-17" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-17" id="text-input-17" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-18" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-18" id="text-input-18" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #11
                =================================
                - Group label visibility: visible
                - Group label layout:     stacked
                - Controls width:         stretched
                - Controls layout:        inline
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group">
                <div class="control-group__label">Group Label</div>
                <div class="control-group__controls u-inline-children u-stretch-controls">
                  <div class="form-control">
                    <label for="text-input-19" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-19" id="text-input-19" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-20" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-20" id="text-input-20" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-21" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-21" id="text-input-21" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #12
                =================================
                - Group label visibility: visible
                - Group label layout:     inline
                - Controls width:         stretched
                - Controls layout:        inline
                - Input label visibility: invisible
                - Input label layout:     n/a
              -->
              <div class="control-group u-inline-children">
                <div class="control-group__label u-padding-right u-padding-top">Group Label</div>
                <div class="control-group__controls u-inline-children u-stretch-controls">
                  <div class="form-control">
                    <label for="text-input-22" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-22" id="text-input-22" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-23" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-23" id="text-input-23" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-24" class="visuallyhidden">Input Label</label>
                    <input type="text" name="text-input-24" id="text-input-24" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #13
                =================================
                - Group label visibility: n/a
                - Group label layout:     n/a
                - Controls width:         auto
                - Controls layout:        stacked
                - Input label visibility: visible
                - Input label layout:     stacked
              -->
              <div class="control-group">
                <div class="control-group__controls u-stack-input-labels">
                  <div class="form-control">
                    <label for="text-input-25">Input Label</label>
                    <input type="text" name="text-input-25" id="text-input-25" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-26">Input Label</label>
                    <input type="text" name="text-input-26" id="text-input-26" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-27">Input Label</label>
                    <input type="text" name="text-input-27" id="text-input-27" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #14
                =================================
                - Group label visibility: n/a
                - Group label layout:     n/a
                - Controls width:         auto
                - Controls layout:        stacked
                - Input label visibility: visible
                - Input label layout:     inline
              -->
              <div class="control-group">
                <div class="control-group__controls">
                  <div class="form-control">
                    <label for="text-input-28" class="u-padding-right">Input Label</label>
                    <input type="text" name="text-input-28" id="text-input-28" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-29" class="u-padding-right">Input Label</label>
                    <input type="text" name="text-input-29" id="text-input-29" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-30" class="u-padding-right">Input Label</label>
                    <input type="text" name="text-input-30" id="text-input-30" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #15
                =================================
                - Group label visibility: n/a
                - Group label layout:     n/a
                - Controls width:         stretched
                - Controls layout:        stacked
                - Input label visibility: visible
                - Input label layout:     stacked
              -->
              <div class="control-group">
                <div class="control-group__controls u-stretch-controls u-stack-input-labels">
                  <div class="form-control">
                    <label for="text-input-31">Input Label</label>
                    <input type="text" name="text-input-31" id="text-input-31" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-32">Input Label</label>
                    <input type="text" name="text-input-32" id="text-input-32" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-33">Input Label</label>
                    <input type="text" name="text-input-33" id="text-input-33" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

              <!--
                Layout Demo #16
                =================================
                - Group label visibility: n/a
                - Group label layout:     n/a
                - Controls width:         stretched
                - Controls layout:        stacked
                - Input label visibility: visible
                - Input label layout:     inline
              -->
              <div class="control-group">
                <div class="control-group__controls u-stretch-controls">
                  <div class="form-control">
                    <label for="text-input-34" class="u-padding-right u-padding-top">Input Label</label>
                    <input type="text" name="text-input-34" id="text-input-34" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-35" class="u-padding-right u-padding-top">Input Label</label>
                    <input type="text" name="text-input-35" id="text-input-35" class="u-text-input" placeholder="Placeholder" />
                  </div>
                  <div class="form-control">
                    <label for="text-input-36" class="u-padding-right u-padding-top">Input Label</label>
                    <input type="text" name="text-input-36" id="text-input-36" class="u-text-input" placeholder="Placeholder" />
                  </div>
                </div>
              </div>

            </form>

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->
    </div><!-- .demo -->

    <div class="demo" id="demo-5">
      <h2>Form: Example</h2>

      <p>A simple form using <em>some</em> of the above control types as well as common states such as, <em>error</em>, <em>success</em>, <code>disabled</code>, and <code>required</code>.</p>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">

            <form>
              <div class="form-control u-stack-input-label is-error">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="u-text-input" placeholder="ex. Susan Jones" required />
                <div class="form__response">This field is required.</div>
              </div>

              <div class="form-control u-stack-input-label is-success">
                <label for="email-address">Email Address</label>
                <input type="email" name="email-address" id="email-address" class="u-text-input" placeholder="ex. you@domain.com" required />
                <div class="form__response">Awesome!</div>
              </div>

              <div class="form-control u-stack-input-label">
                <label for="phone-number">Phone Number</label>
                <input type="tel" name="phone-number" id="phone-number" class="u-text-input" placeholder="ex. 1-555-555-5555" disabled />
              </div>

              <div class="form-control u-stack-input-label">
                <label for="subject">Subject</label>
                <div class="u-select-input">
                  <select name="subject" id="subject">
                    <option selected disabled>Please choose:</option>
                    <option value="Invoices">Invoices</option>
                    <option value="Address Change">Address Change</option>
                    <option value="Disputes">Disputes</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="form-control u-stack-input-label">
                <label for="your-message">Your Message</label>
                <textarea name="your-message" rows="5" cols="30" id="your-message" class="u-text-input" required></textarea>
              </div>

              <div class="control-group">
                <div class="control-group__label">Options</div>
                <div class="control-group__controls">
                  <div class="form-control">
                    <input type="radio" name="options" value="fast" id="fast" />
                    <label for="fast">Fast</label>
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
              </div>

              <div class="form-control u-stack-input-label">
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

              <div class="form__response is-error">Oops, there’s an issue in this form; please review the highlighted fields.</div>

              <div class="form__response is-success">Sent, thank you!</div>
            </form>

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->
    </div><!-- .demo -->

    <div class="demo" id="demo-6">
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
    </div><!-- .demo -->

    <div class="demo" id="demo-7">
      <h2>Call to Action</h2>

      <p>A simple call to action module.</p>

      <div data-layout="module" data-layout-options="gutters wrap-items">
        <div data-layout="module__item">
          <div class="demo__content">

            <div class="cta">
              <div class="cta__content">
                <h1 class="cta__title">See Our Thing</h1>
                <div class="cta__body">
                  <p>It’s an amazing thing that’ll make your life quite a bit easier and simpler and higher quality and softer and brighter and quieter and faster!</p>
                </div><!-- .cta__body -->
              </div><!-- .cta__content -->
              <div class="cta__action">
                <a href="#" class="btn">See Thing Now!</a>
              </div><!-- .cta__action -->
            </div><!-- .cta -->

          </div><!-- .demo__content -->
        </div><!-- module__item -->
      </div><!-- module -->
    </div><!-- .demo -->

    <div class="demo" id="demo-8">
      <h2>Feature</h2>

      <p>The Feature module has three <em>content alignment</em> options and two <em>content background color</em> options.</p>

      <div data-layout="module" data-layout-options="gutters wrap-items">
        <div data-layout="module__item" data-layout-width="one-whole">

          <div class="feature">
            <figure class="feature__image">
              <img src="img/fpo-photo-light-1x.jpg" srcset="img/fpo-photo-light-2x.jpg 2x" width="2500" height="400" alt="FPO photo" />
            </figure><!-- .feature__image -->
            <div class="feature__content u-align-left u-background-dark">
              <h1 class="feature__title">Left-aligned Feature Content</h1>
              <div class="feature__body">
                <p><b>…with a dark background.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#" class="btn">Visit Link</a></p>
              </div><!-- .feature__body -->
            </div><!-- .feature__content -->
          </div><!-- .feature -->

        </div><!-- module__item -->

        <div data-layout="module__item" data-layout-width="one-whole">

          <div class="feature">
            <figure class="feature__image">
              <img src="img/fpo-photo-dark-1x.jpg" srcset="img/fpo-photo-dark-2x.jpg 2x" width="2500" height="400" alt="FPO photo" />
            </figure><!-- .feature__image -->
            <div class="feature__content u-align-center u-background-light">
              <h1 class="feature__title">Center-aligned Feature Content</h1>
              <div class="feature__body">
                <p><b>…with a light background.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><a href="#" class="btn">Visit Link</a></p>
              </div><!-- .feature__body -->
            </div><!-- .feature__content -->
          </div><!-- .feature -->

        </div><!-- module__item -->

        <div data-layout="module__item" data-layout-width="one-whole">

          <div class="feature">
            <figure class="feature__image">
              <img src="img/fpo-photo-mixed-1x.jpg" srcset="img/fpo-photo-mixed-2x.jpg 2x" width="2500" height="400" alt="FPO photo" />
            </figure><!-- .feature__image -->
            <div class="feature__content u-align-right u-background-dark">
              <h1 class="feature__title">Right-aligned Feature Content</h1>
              <div class="feature__body">
                <p><b>…with a dark background.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn">Visit Link</a></p>
              </div><!-- .feature__body -->
            </div><!-- .feature__content -->
          </div><!-- .feature -->

        </div><!-- module__item -->
      </div><!-- module -->
    </div><!-- .demo -->

    <script src="/lib/js/global.min.js"></script>

    <!-- This script is *only* for this demo page and its simple UI. It has no
    effect on the demos themselves and it should *not* be included in the
    production-ready code. -->
    <script src="demos-ui.js"></script>

  </body>
</html>
