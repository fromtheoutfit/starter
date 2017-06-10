<!doctype html>
<html class="no-js" lang="en">
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/lib/css/app.css" />
    <title>Layout Demos</title>
    <meta name="description" content="Demos of the various layout options available in this project." />

    <script src="/lib/js/modernizr.js"></script>

    <!-- This imported stylesheet is *only* for this demo page and its simple
    UI. It has no effect on the demos themselves and it should *not* be
    included in the production-ready code. -->
    <style>@import 'demos-ui.css';</style>

  </head>
  <body>


    <nav class="demos-nav" id="demos-nav">
      <h1>Layout Options:</h1>
      <a href="#demo-1">Unadorned</a>
      <a href="#demo-2">Gutters</a>
      <a href="#demo-3">Gutters + equal height items</a>
      <a href="#demo-4">(Stacked) gutters + equal height items</a>
      <a href="#demo-5">Gutters + equal height items + item wrapping</a>
      <a href="#demo-6">Nested</a>
      <a href="#demo-7">Gutters + defined width on (1) item</a>
      <a href="#demo-8">Gutters + defined width on (2) items</a>
      <a href="#demo-9">Gutters + defined width on <em>all</em> items + item wrapping</a>
      <a href="#demo-10">Gutters + defined width on <em>all</em> items + item wrapping + center-alignment</a>
      <a href="#demo-11">Gutters + item wrapping + items changing width at breakpoints</a>
      <a href="#demo-12">Gutters + row order reversal</a>
      <h1>Layout Widths:</h1>
      <a href="#demo-13">Default widths</a>
      <a href="#demo-14">Tiny breakpoint widths</a>
      <a href="#demo-15">Small breakpoint widths</a>
      <a href="#demo-16">Compact breakpoint widths</a>
      <a href="#demo-17">Medium breakpoint widths</a>
      <a href="#demo-18">Large breakpoint widths</a>
      <a href="#demo-19">Huge breakpoint widths</a>
      <a href="#demo-20">Epic breakpoint widths</a>
      <a href="#demo-21">Using multiple widths on an item</a>
      <button class="demos-nav__toggle" id="demos-nav__toggle">Toggle Nav</button>
    </nav>


    <div class="demo" id="demo-1">
      <h2>Unadorned</h2>

      <div data-layout="module">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>A simple item inside of a simple module. Without any additional rules applied, all items will be equal-width and on the same row, even if doing so breaks the layout in small viewports.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>How’s the weather where you are?</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Why not <a href="http://forecast.io/">find out</a>?</p>
            <p>That link points to a neat website that can determine your location and tell you what the current weather is where you are.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-2">
      <h2>Gutters</h2>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>One small addition: <em>gutters</em>. Take a look at the code below to see how to add gutters to a module.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>See the highlighted <code>data-layout-options="gutters"</code> attribute? That’s all you need.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Just be sure to apply that code to the module itself, <em>not</em> to any of its items.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-3">
      <h2>Gutters + equal height items</h2>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Lets also make the items the same height as each other; the code below shows you how to do it.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Like the previous module, you apply the code to the module itself, not to any of its items.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>We need a hefty amount of content in this item to make this demonstration a bit more obvious, so how about a joke?</p>
            <blockquote>
              <p><em>Dad hurt his wrist and had to go to the hospital, where he talked to a doctor.</em></p>
              <p>
                Dad: <q>When this heals will I be able to play the piano?</q><br />
                Doctor: <q>Yes, you’ll be fine in a few days.</q><br />
                Dad: <q>Perfect, I’ve always wanted to be able to play an instrument.</q>
              </p>
            </blockquote>
            <p><small><a href="https://www.reddit.com/r/dadjokes/comments/1jp9c4/dad_at_the_hospital/">Source</a></small></p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-4">
      <h2>(Stacked) gutters + equal height items</h2>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>This is what it looks like when you stack two separate modules on top of one another.</p>
            <p>This is the first of three items in the <b>first module</b>…</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>…this is the second of three items in the <b>first module</b>…</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>…and this is the third and final item in the <b>first module</b>.</p>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>This is the first of two items in the <b>second module</b>…</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>…and this is the second and final item in the <b>second module</b>. Two separate modules, and the gutters between them look great.</p>
            <p>Note that this arrangement doesn't require any additional code—just stack module elements on top of one another and it’ll work as desired.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-5">
      <h2>Gutters + equal height items + item wrapping</h2>

      <div data-layout="module" data-layout-options="gutters equal-height-items wrap-items">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>By default, all items in a module will stay on one row, even if doing so breaks the layout.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p><q>I think that’s dumb</q>, you might say.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Let’s tell the items to wrap onto more rows as needed.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>In the code below you’ll see the <code>wrap-items</code> value added to the <code>data-layout-options</code> attribute…</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>…with that added to a module, all of its items will now wrap as desired.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>This demo has <code>wrap-items</code> on it, so make your browser thinner/wider to see it in action.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>See how some of the items are moving to new rows as needed?</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>How neat is that?</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>That’s pretty neat.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-6">
      <h2>Nested</h2>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Nesting modules works really well:</p>
            <div data-layout="module" data-layout-options="gutters">
              <div data-layout="module__item">
                <div class="demo__content">
                  <p><b><code>module__item</code></b></p>
                  <p>See?</p>
                </div>
              </div>
              <div data-layout="module__item">
                <div class="demo__content">
                  <p><b><code>module__item</code></b></p>
                  <p>See?</p>
                  <div data-layout="module" data-layout-options="gutters">
                    <div data-layout="module__item">
                      <div class="demo__content">
                        <p><b><code>module__item</code></b></p>
                        <p>See?</p>
                      </div>
                    </div>
                    <div data-layout="module__item">
                      <div class="demo__content">
                        <p><b><code>module__item</code></b></p>
                        <p>See?</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>Yup, you see.</p>
            <div data-layout="module" data-layout-options="gutters">
              <div data-layout="module__item">
                <div class="demo__content">
                  <p><b><code>module__item</code></b></p>
                </div>
              </div>
              <div data-layout="module__item">
                <div class="demo__content">
                  <p><b><code>module__item</code></b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-7">
      <h2>Gutters + defined width on (1) item</h2>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>You can also define the width of items if you don’t want the default <em>equal-width</em> behavior to apply.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-fifth">
          <div class="demo__content">
            <p><b><code>module__item one-fifth</code></b></p>
            <p>This particular item has been given a width of <code>one-fifth</code>.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>In the code below, notice that this attribute is applied to the item itself, not to the module.</p>
            <p>Other items in the module will stretch to fill the remaining space if they don’t have a width defined.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-8">
      <h2>Gutters + defined width on (2) items</h2>

      <div data-layout="module" data-layout-options="gutters">
        <div data-layout="module__item" data-layout-width="one-quarter">
          <div class="demo__content">
            <p><b><code>module__item one-quarter</code></b></p>
            <p>This module is similar to the prior one.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p>We’re telling the first and third items to be <code>one-quarter</code> wide, but <em>this</em> second item has no width defined so it stretches to fill the remaining space.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-quarter">
          <div class="demo__content">
            <p><b><code>module__item one-quarter</code></b></p>
            <p>Works well, doesn’t it?</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-9">
      <h2>Gutters + defined width on <em>all</em> items + item wrapping</h2>

      <div data-layout="module" data-layout-options="gutters wrap-items">
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>Here’s an interesting situation: all items in this module have their width defined as <code>one-third</code>, but there are (5) items.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>As long as we utilize the previously-mentioned <code>wrap-items</code> value on the module…</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>…the fourth and fifth items wrap onto a second row, leaving an empty space at its end.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>If you don’t like how it looks, it’s fairly easy to adjust…</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>…you could set these last two items' width to <code>one-half</code>, for example. Or <code>one-whole</code>. The choice is yours; the sky’s the limit; the world is your oyster; red sky at night, sailor’s delight; and so on.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-10">
      <h2>Gutters + defined width on <em>all</em> items + item wrapping + center-alignment</h2>

      <div data-layout="module" data-layout-options="gutters wrap-items" data-layout-align="h-center">
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>It’s time to introduce another feature: <em>item alignment!</em></p>
            <p>When there’s unused space around items, we can tell them to align themselves a few different ways.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>In the code below you’ll see an attribute called <code>data-layout-align</code> with its value set to <code>h-center</code>.</p>
            <p><code>h-center</code> tells the module to align its items to the center of the x-axis.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>There are a number of available values, some for the x-axis and some for the y-axis…</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>The available x-axis / horizontal values are:</p>
            <ul>
              <li><code>h-left</code></li>
              <li><code>h-center</code></li>
              <li><code>h-right</code></li>
              <li><code>h-space-around</code></li>
              <li><code>h-space-between</code></li>
            </ul>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <p><b><code>module__item one-third</code></b></p>
            <p>The available y-axis / vertical values are:</p>
            <ul>
              <li><code>v-top</code></li>
              <li><code>v-center</code></li>
              <li><code>v-bottom</code></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-11">
      <h2>Gutters + item wrapping + items changing width at breakpoints</h2>

      <div data-layout="module" data-layout-options="gutters wrap-items">
        <div data-layout="module__item" data-layout-width="one-whole s-one-third c-one-half">
          <div class="demo__content">
            <p><b><code>module__item one-whole s-one-third c-one-half</code></b></p>
            <p>Sometimes you want your item(s) to be a particular width <em>at particular breakpoints</em>.</p>
            <p>For example, lets say you want an item to be 100% wide in small viewports, then it’s 50% wide when the viewport is a bit bigger, then it’s 25% wide when the viewport is huge.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-whole s-one-third c-one-half">
          <div class="demo__content">
            <p><b><code>module__item one-whole s-one-third c-one-half</code></b></p>
            <p>This layout system is ready for that—it makes (10) different widths available at (5) different breakpoints.</p>
            <p>In the code below you’ll see a <em>bunch</em> of values in each item’s <code>data-layout-width</code> attribute. From left-to-right, the values dictate the width the item should be at each breakpoint.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-whole s-one-third c-one-half">
          <div class="demo__content">
            <p><b><code>module__item one-whole s-one-third c-one-half</code></b></p>
            <p>Using the first item as an example, its <code>data-layout-width</code> values translate to:</p>
            <ol>
              <li>By default, this item’s width will be one-whole (100%).</li>
              <li>At the small breakpoint, its width will be one-third (33.333%).</li>
              <li>At the compact breakpoint, its width will be one-half (50%).</li>
            </ol>
            <p>…and because we’ve not added any <em>more</em> values to that attribute, the item will remain one-half (50%) as the viewport gets bigger and bigger.</p>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-whole c-one-half">
          <div class="demo__content">
            <p><b><code>module__item one-whole c-one-half</code></b></p>
            <p>If you scroll down the page a little more, you’ll see all possible widths defined and demonstrated—some of the latter ones might not work if your viewport is not very wide at the moment, so feel free to make it thinner / wider to see it all in action.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-12">
      <h2>Gutters + row order reversal</h2>

      <div data-layout="module" data-layout-options="gutters row-reverse">
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p><b>First</b> in the html source order.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p><b>Second</b> in the html source order.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p><b>Third</b> in the html source order.</p>
          </div>
        </div>
        <div data-layout="module__item">
          <div class="demo__content">
            <p><b><code>module__item</code></b></p>
            <p><b>Fourth</b> in the html source order.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-13">
      <h2>Default widths</h2>

      <p>These widths are applied by default, before any breakpoints. Think <i>mobile first</i>.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-14">
      <h2>Tiny breakpoint widths</h2>

      <p>These widths apply at the tiny breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="t-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="t-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="t-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="t-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="t-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="t-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="t-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="t-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="t-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="t-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="t-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">t-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-15">
      <h2>Small breakpoint widths</h2>

      <p>These widths apply at the small breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="s-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="s-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="s-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="s-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="s-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="s-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="s-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="s-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="s-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="s-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="s-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">s-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-16">
      <h2>Compact breakpoint widths</h2>

      <p>These widths apply at the compact breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="c-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="c-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="c-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="c-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="c-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="c-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="c-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="c-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="c-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="c-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="c-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">c-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-17">
      <h2>Medium breakpoint widths</h2>

      <p>These widths apply at the medium breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="m-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="m-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="m-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="m-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="m-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="m-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="m-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="m-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="m-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="m-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="m-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">m-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-18">
      <h2>Large breakpoint widths</h2>

      <p>These widths apply at the large breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="l-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="l-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="l-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="l-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="l-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="l-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="l-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="l-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="l-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="l-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="l-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">l-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-19">
      <h2>Huge breakpoint widths</h2>

      <p>These widths apply at the huge breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="h-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="h-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="h-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="h-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="h-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="h-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="h-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="h-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="h-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="h-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="h-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">h-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-20">
      <h2>Epic breakpoint widths</h2>

      <p>These widths apply at the epic breakpoint; before that, they’re as wide as the content they contain. Make your browser thinner / wider to see how they work.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="e-one-whole">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-one-whole</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="e-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-one-half</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="e-one-half">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-one-half</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="e-one-third">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-one-third</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="e-two-thirds">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-two-thirds</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="e-one-quarter">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-one-quarter</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="e-three-quarters">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-three-quarters</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="e-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="e-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-four-fifths</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="e-two-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-two-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="e-three-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">e-three-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>


    <div class="demo" id="demo-21">
      <h2>Using multiple widths on an item</h2>

      <p>By using multiple values together, you can make an item different widths at different breakpoints. Make your browser thinner / wider to see how it works.</p>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-half s-three-quarters c-one-third m-three-fifths l-one-half h-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-half s-three-quarters c-one-third m-three-fifths l-one-half h-four-fifths</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="one-half s-one-quarter c-two-thirds m-two-fifths l-one-half h-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-half s-one-quarter c-two-thirds m-two-fifths l-one-half h-one-fifth</span>"</code>
          </div>
        </div>
      </div>

      <div data-layout="module" data-layout-options="gutters equal-height-items">
        <div data-layout="module__item" data-layout-width="one-third s-two-thirds c-one-half m-two-fifths l-one-quarter h-one-fifth">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">one-third s-two-thirds c-one-half m-two-fifths l-one-quarter h-one-fifth</span>"</code>
          </div>
        </div>
        <div data-layout="module__item" data-layout-width="two-thirds s-one-third c-one-half m-three-fifths l-three-quarters h-four-fifths">
          <div class="demo__content">
            <code>data-layout-width="<span class="demo__highlight">two-thirds s-one-third c-one-half m-three-fifths l-three-quarters h-four-fifths</span>"</code>
          </div>
        </div>
      </div>
    </div>

    <!-- This script is *only* for this demo page and its simple UI. It has no
    effect on the demos themselves and it should *not* be included in the
    production-ready code. -->
    <script src="demos-ui.js"></script>

  </body>
</html>
