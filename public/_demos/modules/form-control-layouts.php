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
      <h2>Form Control Layouts</h2>
      <p>The various ways a group of form controls can be laid out.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <form>

      <!--
        Layout #1
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
        Layout #2
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
        Layout #3
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
        Layout #4
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
        Layout #5
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
            <input type="text" name="text-input-1" id="text-input-1" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-2" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-2" id="text-input-2" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-3" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-3" id="text-input-3" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #6
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
            <input type="text" name="text-input-4" id="text-input-4" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-5" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-5" id="text-input-5" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-6" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-6" id="text-input-6" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #7
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
            <input type="text" name="text-input-7" id="text-input-7" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-8" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-8" id="text-input-8" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-9" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-9" id="text-input-9" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #8
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
            <input type="text" name="text-input-10" id="text-input-10" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-11" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-11" id="text-input-11" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-12" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-12" id="text-input-12" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #9
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
        <div class="control-group__controls control-group__controls--stretch-controls">
          <div class="form-control">
            <label for="text-input-13" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-13" id="text-input-13" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-14" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-14" id="text-input-14" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-15" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-15" id="text-input-15" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #10
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
        <div class="control-group__controls control-group__controls--stretch-controls">
          <div class="form-control">
            <label for="text-input-16" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-16" id="text-input-16" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-17" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-17" id="text-input-17" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-18" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-18" id="text-input-18" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #11
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
        <div class="control-group__controls u-inline-children control-group__controls--stretch-controls">
          <div class="form-control">
            <label for="text-input-19" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-19" id="text-input-19" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-20" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-20" id="text-input-20" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-21" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-21" id="text-input-21" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #12
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
        <div class="control-group__controls u-inline-children control-group__controls--stretch-controls">
          <div class="form-control">
            <label for="text-input-22" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-22" id="text-input-22" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-23" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-23" id="text-input-23" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-24" class="visuallyhidden">Input Label</label>
            <input type="text" name="text-input-24" id="text-input-24" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #13
        =================================
        - Group label visibility: n/a
        - Group label layout:     n/a
        - Controls width:         auto
        - Controls layout:        stacked
        - Input label visibility: visible
        - Input label layout:     stacked
      -->
      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels">
          <div class="form-control">
            <label for="text-input-25">Input Label</label>
            <input type="text" name="text-input-25" id="text-input-25" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-26">Input Label</label>
            <input type="text" name="text-input-26" id="text-input-26" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-27">Input Label</label>
            <input type="text" name="text-input-27" id="text-input-27" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #14
        =================================
        - Group label visibility: n/a
        - Group label layout:     n/a
        - Controls width:         auto
        - Controls layout:        stacked
        - Input label visibility: visible
        - Input label layout:     stacked
      -->
      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control">
            <label for="text-input-28">Input Label</label>
            <input type="text" name="text-input-28" id="text-input-28" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-29">Input Label</label>
            <input type="text" name="text-input-29" id="text-input-29" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-30">Input Label</label>
            <input type="text" name="text-input-30" id="text-input-30" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #15
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
            <label for="text-input-31" class="u-padding-right">Input Label</label>
            <input type="text" name="text-input-31" id="text-input-31" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-32" class="u-padding-right">Input Label</label>
            <input type="text" name="text-input-32" id="text-input-32" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-33" class="u-padding-right">Input Label</label>
            <input type="text" name="text-input-33" id="text-input-33" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #16
        =================================
        - Group label visibility: n/a
        - Group label layout:     n/a
        - Controls width:         stretched
        - Controls layout:        stacked
        - Input label visibility: visible
        - Input label layout:     stacked
      -->
      <div class="control-group">
        <div class="control-group__controls control-group__controls--stretch-controls control-group__controls--stack-input-labels">
          <div class="form-control">
            <label for="text-input-34">Input Label</label>
            <input type="text" name="text-input-34" id="text-input-34" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-35">Input Label</label>
            <input type="text" name="text-input-35" id="text-input-35" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-36">Input Label</label>
            <input type="text" name="text-input-36" id="text-input-36" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

      <!--
        Layout #17
        =================================
        - Group label visibility: n/a
        - Group label layout:     n/a
        - Controls width:         stretched
        - Controls layout:        stacked
        - Input label visibility: visible
        - Input label layout:     inline
      -->
      <div class="control-group">
        <div class="control-group__controls control-group__controls--stretch-controls">
          <div class="form-control">
            <label for="text-input-37" class="u-padding-right u-padding-top">Input Label</label>
            <input type="text" name="text-input-37" id="text-input-37" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-38" class="u-padding-right u-padding-top">Input Label</label>
            <input type="text" name="text-input-38" id="text-input-38" class="text-input" placeholder="Placeholder" />
          </div>
          <div class="form-control">
            <label for="text-input-39" class="u-padding-right u-padding-top">Input Label</label>
            <input type="text" name="text-input-39" id="text-input-39" class="text-input" placeholder="Placeholder" />
          </div>
        </div>
      </div>

    </form>


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;form&gt;

  &lt;!--
    Layout #1
    =================================
    - Group label visibility: visible
    - Group label layout:     stacked
    - Controls width:         auto
    - Controls layout:        stacked
    - Input label visibility: visible
    - Input label layout:     inline
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #2
    =================================
    - Group label visibility: visible
    - Group label layout:     inline
    - Controls width:         auto
    - Controls layout:        stacked
    - Input label visibility: visible
    - Input label layout:     inline
  --&gt;
  &lt;div class="control-group u-inline-children"&gt;
    &lt;div class="control-group__label u-padding-right"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #3
    =================================
    - Group label visibility: visible
    - Group label layout:     stacked
    - Controls width:         auto
    - Controls layout:        inline
    - Input label visibility: visible
    - Input label layout:     inline
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls u-inline-children"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #4
    =================================
    - Group label visibility: visible
    - Group label layout:     inline
    - Controls width:         auto
    - Controls layout:        inline
    - Input label visibility: visible
    - Input label layout:     inline
  --&gt;
  &lt;div class="control-group u-inline-children"&gt;
    &lt;div class="control-group__label u-padding-right"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls u-inline-children"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #5
    =================================
    - Group label visibility: visible
    - Group label layout:     stacked
    - Controls width:         auto
    - Controls layout:        stacked
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #6
    =================================
    - Group label visibility: visible
    - Group label layout:     inline
    - Controls width:         auto
    - Controls layout:        stacked
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group u-inline-children"&gt;
    &lt;div class="control-group__label u-padding-right u-padding-top"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #7
    =================================
    - Group label visibility: visible
    - Group label layout:     stacked
    - Controls width:         auto
    - Controls layout:        inline
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls u-inline-children"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #8
    =================================
    - Group label visibility: visible
    - Group label layout:     inline
    - Controls width:         auto
    - Controls layout:        inline
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group u-inline-children"&gt;
    &lt;div class="control-group__label u-padding-right u-padding-top"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls u-inline-children"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #9
    =================================
    - Group label visibility: visible
    - Group label layout:     stacked
    - Controls width:         stretched
    - Controls layout:        stacked
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls control-group__controls--stretch-controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #10
    =================================
    - Group label visibility: visible
    - Group label layout:     inline
    - Controls width:         stretched
    - Controls layout:        stacked
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group u-inline-children"&gt;
    &lt;div class="control-group__label u-padding-right u-padding-top"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls control-group__controls--stretch-controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #11
    =================================
    - Group label visibility: visible
    - Group label layout:     stacked
    - Controls width:         stretched
    - Controls layout:        inline
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls u-inline-children control-group__controls--stretch-controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #12
    =================================
    - Group label visibility: visible
    - Group label layout:     inline
    - Controls width:         stretched
    - Controls layout:        inline
    - Input label visibility: invisible
    - Input label layout:     n/a
  --&gt;
  &lt;div class="control-group u-inline-children"&gt;
    &lt;div class="control-group__label u-padding-right u-padding-top"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls u-inline-children control-group__controls--stretch-controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="visuallyhidden"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #13
    =================================
    - Group label visibility: n/a
    - Group label layout:     n/a
    - Controls width:         auto
    - Controls layout:        stacked
    - Input label visibility: visible
    - Input label layout:     stacked
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__controls control-group__controls--stack-input-labels"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #14
    =================================
    - Group label visibility: n/a
    - Group label layout:     n/a
    - Controls width:         auto
    - Controls layout:        inline
    - Input label visibility: visible
    - Input label layout:     stacked
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__controls control-group__controls--stack-input-labels u-inline-children"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #15
    =================================
    - Group label visibility: n/a
    - Group label layout:     n/a
    - Controls width:         auto
    - Controls layout:        stacked
    - Input label visibility: visible
    - Input label layout:     inline
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="u-padding-right"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="u-padding-right"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="u-padding-right"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #16
    =================================
    - Group label visibility: n/a
    - Group label layout:     n/a
    - Controls width:         stretched
    - Controls layout:        stacked
    - Input label visibility: visible
    - Input label layout:     stacked
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__controls control-group__controls--stretch-controls control-group__controls--stack-input-labels"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!--
    Layout #17
    =================================
    - Group label visibility: n/a
    - Group label layout:     n/a
    - Controls width:         stretched
    - Controls layout:        stacked
    - Input label visibility: visible
    - Input label layout:     inline
  --&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__controls control-group__controls--stretch-controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="u-padding-right u-padding-top"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="u-padding-right u-padding-top"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;label for="..." class="u-padding-right u-padding-top"&gt;...&lt;/label&gt;
        &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;/form&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
