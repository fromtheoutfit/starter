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
      <h2>Form States</h2>
      <p>A sample form with pre-configured states — <em>error</em>, <em>success</em>, <em>disabled</em>, <em>required</em>, etc.</p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <form>

      <div class="form-control u-stack-input-label is-error">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="u-text-input" placeholder="ex. Susan Jones" required />
        <div class="form__response">Oops, this control is required.</div>
      </div>

      <div class="form-control u-stack-input-label is-success">
        <label for="email-address">Email Address</label>
        <input type="email" name="email-address" id="email-address" class="u-text-input" placeholder="ex. you@domain.com" required />
        <div class="form__response">This control is now good!</div>
      </div>

      <div class="form-control u-stack-input-label">
        <label for="phone-number">(Disabled) Phone Number</label>
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


    <!-- ======================================================================
    Demo code
    ======================================================================= -->


    <div class="demo__code">
      <pre><code>&lt;form&gt;

  &lt;div class="form-control u-stack-input-label is-error"&gt;
    &lt;label for="name"&gt;Name&lt;/label&gt;
    &lt;input type="text" name="name" id="name" class="u-text-input" placeholder="ex. Susan Jones" required /&gt;
    &lt;div class="form__response"&gt;Oops, this control is required.&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-input-label is-success"&gt;
    &lt;label for="email-address"&gt;Email Address&lt;/label&gt;
    &lt;input type="email" name="email-address" id="email-address" class="u-text-input" placeholder="ex. you@domain.com" required /&gt;
    &lt;div class="form__response"&gt;This control is now good!&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-input-label"&gt;
    &lt;label for="phone-number"&gt;(Disabled) Phone Number&lt;/label&gt;
    &lt;input type="tel" name="phone-number" id="phone-number" class="u-text-input" placeholder="ex. 1-555-555-5555" disabled /&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-input-label"&gt;
    &lt;label for="subject"&gt;Subject&lt;/label&gt;
    &lt;div class="u-select-input"&gt;
      &lt;select name="subject" id="subject"&gt;
        &lt;option selected disabled&gt;Please choose:&lt;/option&gt;
        &lt;option value="Invoices"&gt;Invoices&lt;/option&gt;
        &lt;option value="Address Change"&gt;Address Change&lt;/option&gt;
        &lt;option value="Disputes"&gt;Disputes&lt;/option&gt;
        &lt;option value="Customer Service"&gt;Customer Service&lt;/option&gt;
        &lt;option value="Other"&gt;Other&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-control u-stack-input-label"&gt;
    &lt;label for="your-message"&gt;Your Message&lt;/label&gt;
    &lt;textarea name="your-message" rows="5" cols="30" id="your-message" class="u-text-input" required&gt;&lt;/textarea&gt;
  &lt;/div&gt;

  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;Options&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
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
  &lt;/div&gt;

  &lt;div class="form-control u-stack-input-label"&gt;
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

  &lt;div class="form__response is-error"&gt;Oops, there’s an issue in this form; please review the highlighted fields.&lt;/div&gt;

  &lt;div class="form__response is-success"&gt;Sent, thank you!&lt;/div&gt;

&lt;/form&gt;</code></pre>
    </div>


    <?php include_once '../inc/scripts.php'; ?>


  </body>
</html>
