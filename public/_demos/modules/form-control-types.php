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
      <h2>Form Control Types</h2>
      <p>All of the form control types supported by this project.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <form>

      <div class="form-control form-control--stack-input-label">
        <label for="input-1">Text</label>
        <input type="text" name="input-1" id="input-1" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-2">Email</label>
        <input type="email" name="input-2" id="input-2" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-3">Password</label>
        <input type="password" name="input-3" id="input-3" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-4">Search</label>
        <input type="search" name="input-4" id="input-4" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-5">URL</label>
        <input type="url" name="input-5" id="input-5" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-6">Date</label>
        <input type="date" name="input-6" id="input-6" class="text-input" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-7">Datetime-local</label>
        <input type="datetime-local" name="input-7" id="input-7" class="text-input" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-8">Time</label>
        <input type="time" name="input-8" id="input-8" class="text-input" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-9">Week</label>
        <input type="week" name="input-9" id="input-9" class="text-input" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-10">Month</label>
        <input type="month" name="input-10" id="input-10" class="text-input" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-11">Telephone</label>
        <input type="tel" name="input-11" id="input-11" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-12">Number</label>
        <input type="number" name="input-12" id="input-12" class="text-input" placeholder="example value" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-13">Textarea</label>
        <textarea name="input-13" rows="5" cols="30" id="input-13" class="text-input" placeholder="example value"></textarea>
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-14">Select</label>
        <div class="select-input">
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

      <div class="form-control form-control--stack-input-label">
        <label for="input-15">Datalist</label>
        <input list="list-name" name="input-15" id="input-15" class="text-input" />
        <datalist id="list-name">
          <option value="Option 1">
          <option value="Option 2">
          <option value="Option 3">
          <option value="Option 4">
          <option value="Option 5">
          <option value="Option 6">
        </datalist>
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-16">Range</label>
        <input type="range" min="10" max="30" name="input-16" id="input-16" />
      </div>

      <div class="form-control form-control--stack-input-label">
        <label for="input-17">Color</label>
        <input type="color" name="input-17" id="input-17" />
      </div>

      <div class="form-control form-control--stack-input-label">
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


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <div class="demo__language-intro">
        <h3>HTML</h3>
      </div>
      <div class="demo__language-code">
        <pre><code>&lt;form&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-1"&gt;Text&lt;/label&gt;
    &lt;input type="text" name="input-1" id="input-1" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-2"&gt;Email&lt;/label&gt;
    &lt;input type="email" name="input-2" id="input-2" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-3"&gt;Password&lt;/label&gt;
    &lt;input type="password" name="input-3" id="input-3" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-4"&gt;Search&lt;/label&gt;
    &lt;input type="search" name="input-4" id="input-4" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-5"&gt;URL&lt;/label&gt;
    &lt;input type="url" name="input-5" id="input-5" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-6"&gt;Date&lt;/label&gt;
    &lt;input type="date" name="input-6" id="input-6" class="text-input" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-7"&gt;Datetime-local&lt;/label&gt;
    &lt;input type="datetime-local" name="input-7" id="input-7" class="text-input" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-8"&gt;Time&lt;/label&gt;
    &lt;input type="time" name="input-8" id="input-8" class="text-input" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-9"&gt;Week&lt;/label&gt;
    &lt;input type="week" name="input-9" id="input-9" class="text-input" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-10"&gt;Month&lt;/label&gt;
    &lt;input type="month" name="input-10" id="input-10" class="text-input" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-11"&gt;Telephone&lt;/label&gt;
    &lt;input type="tel" name="input-11" id="input-11" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-12"&gt;Number&lt;/label&gt;
    &lt;input type="number" name="input-12" id="input-12" class="text-input" placeholder="example value" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-13"&gt;Textarea&lt;/label&gt;
    &lt;textarea name="input-13" rows="5" cols="30" id="input-13" class="text-input" placeholder="example value"&gt;&lt;/textarea&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-14"&gt;Select&lt;/label&gt;
    &lt;div class="select-input"&gt;
      &lt;select name="input-14" id="input-14"&gt;
        &lt;optgroup label="Group 1"&gt;
          &lt;option value="G101"&gt;Group 1: Option 1&lt;/option&gt;
          &lt;option value="G102"&gt;Group 1: Option 2&lt;/option&gt;
          &lt;option value="G103"&gt;Group 1: Option 3&lt;/option&gt;
          &lt;option value="G104"&gt;Group 1: Option 4&lt;/option&gt;
          &lt;option value="G105"&gt;Group 1: Option 5&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;option value="01"&gt;No Group: Option 1&lt;/option&gt;
        &lt;option value="02"&gt;No Group: Option 2&lt;/option&gt;
        &lt;option value="03"&gt;No Group: Option 3&lt;/option&gt;
        &lt;option value="04"&gt;No Group: Option 4&lt;/option&gt;
        &lt;option value="05"&gt;No Group: Option 5&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-15"&gt;Datalist&lt;/label&gt;
    &lt;input list="list-name" name="input-15" id="input-15" class="text-input" /&gt;
    &lt;datalist id="list-name"&gt;
      &lt;option value="Option 1"&gt;
      &lt;option value="Option 2"&gt;
      &lt;option value="Option 3"&gt;
      &lt;option value="Option 4"&gt;
      &lt;option value="Option 5"&gt;
      &lt;option value="Option 6"&gt;
    &lt;/datalist&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-16"&gt;Range&lt;/label&gt;
    &lt;input type="range" min="10" max="30" name="input-16" id="input-16" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-17"&gt;Color&lt;/label&gt;
    &lt;input type="color" name="input-17" id="input-17" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="input-18"&gt;File&lt;/label&gt;
    &lt;input type="file" name="input-18" id="input-18" /&gt;
  &lt;/div&gt;

  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;Radios&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="input-19" value="radio-a" id="input-19a" /&gt;
        &lt;label for="input-19a"&gt;Radio A&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="input-19" value="radio-b" id="input-19b" /&gt;
        &lt;label for="input-19b"&gt;Radio B&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="input-19" value="radio-c" id="input-19c" /&gt;
        &lt;label for="input-19c"&gt;Radio C&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;Checkboxes&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="input-20" value="checkbox-a" id="input-20a" /&gt;
        &lt;label for="input-20a"&gt;Checkbox A&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="input-20" value="checkbox-b" id="input-20b" /&gt;
        &lt;label for="input-20b"&gt;Checkbox B&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="input-20" value="checkbox-c" id="input-20c" /&gt;
        &lt;label for="input-20c"&gt;Checkbox C&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;input type="submit" class="btn" value="Submit" /&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;input type="button" class="btn-large" value="Button: Large" /&gt;
    &lt;input type="button" class="btn" value="Button" /&gt;
    &lt;input type="button" class="btn-small" value="Button: Small" /&gt;
  &lt;/div&gt;

&lt;/form&gt;</code></pre>
      </div>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
