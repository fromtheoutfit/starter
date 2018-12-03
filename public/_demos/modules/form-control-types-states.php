<!doctype html>
<html class="no-js" lang="en">
  <head>

    <?php include '../inc/head.php'; ?>

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


    <?php include '../inc/demos-nav.php'; ?>


    <!-- ======================================================================
    Demo information
    ======================================================================= -->


    <div class="demo__info">
      <h2>Form Control Types / States</h2>
      <p>All of the form control types and states supported by this project.</p>
      <p><small><strong>Note:</strong> There are a number of <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#Attributes">helpful input attributes</a> worth considering that can improve your user’s experience.</small></p>
    </div>


    <!-- ======================================================================
    Demo
    ======================================================================= -->


    <form>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="text-enabled">Text: enabled</label>
            <input type="text" name="text-enabled" id="text-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="text-disabled">Text: disabled</label>
            <input type="text" name="text-disabled" id="text-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="text-error">Text: error</label>
            <input type="text" name="text-error" id="text-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="text-success">Text: success</label>
            <input type="text" name="text-success" id="text-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="email-enabled">Email: enabled</label>
            <input type="email" name="email-enabled" id="email-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="email-disabled">Email: disabled</label>
            <input type="email" name="email-disabled" id="email-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="email-error">Email: error</label>
            <input type="email" name="email-error" id="email-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="email-success">Email: success</label>
            <input type="email" name="email-success" id="email-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="password-enabled">Password: enabled</label>
            <input type="password" name="password-enabled" id="password-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="password-disabled">Password: disabled</label>
            <input type="password" name="password-disabled" id="password-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="password-error">Password: error</label>
            <input type="password" name="password-error" id="password-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="password-success">Password: success</label>
            <input type="password" name="password-success" id="password-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="search-enabled">Search: enabled</label>
            <input type="search" name="search-enabled" id="search-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="search-disabled">Search: disabled</label>
            <input type="search" name="search-disabled" id="search-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="search-error">Search: error</label>
            <input type="search" name="search-error" id="search-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="search-success">Search: success</label>
            <input type="search" name="search-success" id="search-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="url-enabled">URL: enabled</label>
            <input type="url" name="url-enabled" id="url-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="url-disabled">URL: disabled</label>
            <input type="url" name="url-disabled" id="url-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="url-error">URL: error</label>
            <input type="url" name="url-error" id="url-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="url-success">URL: success</label>
            <input type="url" name="url-success" id="url-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="date-enabled">Date: enabled</label>
            <input type="date" name="date-enabled" id="date-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="date-disabled">Date: disabled</label>
            <input type="date" name="date-disabled" id="date-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="date-error">Date: error</label>
            <input type="date" name="date-error" id="date-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="date-success">Date: success</label>
            <input type="date" name="date-success" id="date-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="datetime-local-enabled">Datetime-local: enabled</label>
            <input type="datetime-local" name="datetime-local-enabled" id="datetime-local-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="datetime-local-disabled">Datetime-local: disabled</label>
            <input type="datetime-local" name="datetime-local-disabled" id="datetime-local-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="datetime-local-error">Datetime-local: error</label>
            <input type="datetime-local" name="datetime-local-error" id="datetime-local-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="datetime-local-success">Datetime-local: success</label>
            <input type="datetime-local" name="datetime-local-success" id="datetime-local-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="time-enabled">Time: enabled</label>
            <input type="time" name="time-enabled" id="time-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="time-disabled">Time: disabled</label>
            <input type="time" name="time-disabled" id="time-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="time-error">Time: error</label>
            <input type="time" name="time-error" id="time-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="time-success">Time: success</label>
            <input type="time" name="time-success" id="time-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="week-enabled">Week: enabled</label>
            <input type="week" name="week-enabled" id="week-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="week-disabled">Week: disabled</label>
            <input type="week" name="week-disabled" id="week-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="week-error">Week: error</label>
            <input type="week" name="week-error" id="week-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="week-success">Week: success</label>
            <input type="week" name="week-success" id="week-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="month-enabled">Month: enabled</label>
            <input type="month" name="month-enabled" id="month-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="month-disabled">Month: disabled</label>
            <input type="month" name="month-disabled" id="month-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="month-error">Month: error</label>
            <input type="month" name="month-error" id="month-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="month-success">Month: success</label>
            <input type="month" name="month-success" id="month-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="tel-enabled">Telephone: enabled</label>
            <input type="tel" name="tel-enabled" id="tel-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="tel-disabled">Telephone: disabled</label>
            <input type="tel" name="tel-disabled" id="tel-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="tel-error">Telephone: error</label>
            <input type="tel" name="tel-error" id="tel-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="tel-success">Telephone: success</label>
            <input type="tel" name="tel-success" id="tel-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="number-enabled">Number: enabled</label>
            <input type="number" name="number-enabled" id="number-enabled" class="text-input" placeholder="example value" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="number-disabled">Number: disabled</label>
            <input type="number" name="number-disabled" id="number-disabled" class="text-input" placeholder="example value" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="number-error">Number: error</label>
            <input type="number" name="number-error" id="number-error" class="text-input" placeholder="example value" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="number-success">Number: success</label>
            <input type="number" name="number-success" id="number-success" class="text-input" placeholder="example value" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="textarea-enabled">Textarea: enabled</label>
            <textarea name="textarea-enabled" rows="5" cols="30" id="textarea-enabled" class="text-input" placeholder="example value"></textarea>
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="textarea-disabled">Textarea: disabled</label>
            <textarea name="textarea-disabled" rows="5" cols="30" id="textarea-disabled" class="text-input" placeholder="example value" disabled></textarea>
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="textarea-error">Textarea: error</label>
            <textarea name="textarea-error" rows="5" cols="30" id="textarea-error" class="text-input" placeholder="example value"></textarea>
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="textarea-success">Textarea: success</label>
            <textarea name="textarea-success" rows="5" cols="30" id="textarea-success" class="text-input" placeholder="example value"></textarea>
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="select-enabled">Select: enabled</label>
            <div class="select-input">
              <select name="select-enabled" id="select-enabled">
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
            <label for="select-disabled">Select: disabled</label>
            <div class="select-input">
              <select name="select-disabled" id="select-disabled" disabled>
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
          <div class="form-control form-control--stack-input-label is-error">
            <label for="select-error">Select: error</label>
            <div class="select-input">
              <select name="select-error" id="select-error">
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
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="select-success">Select: success</label>
            <div class="select-input">
              <select name="select-success" id="select-success">
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
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="datalist-enabled">Datalist: enabled</label>
            <input list="datalist-name-1" name="datalist-enabled" id="datalist-enabled" class="text-input" />
            <datalist id="datalist-name-1">
              <option value="Option 1">
              <option value="Option 2">
              <option value="Option 3">
              <option value="Option 4">
              <option value="Option 5">
              <option value="Option 6">
            </datalist>
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="datalist-disabled">Datalist: disabled</label>
            <input list="datalist-name-2" name="datalist-disabled" id="datalist-disabled" class="text-input" disabled />
            <datalist id="datalist-name-2">
              <option value="Option 1">
              <option value="Option 2">
              <option value="Option 3">
              <option value="Option 4">
              <option value="Option 5">
              <option value="Option 6">
            </datalist>
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="datalist-error">Datalist: error</label>
            <input list="datalist-name-3" name="datalist-error" id="datalist-error" class="text-input" />
            <datalist id="datalist-name-3">
              <option value="Option 1">
              <option value="Option 2">
              <option value="Option 3">
              <option value="Option 4">
              <option value="Option 5">
              <option value="Option 6">
            </datalist>
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="datalist-success">Datalist: success</label>
            <input list="datalist-name-4" name="datalist-success" id="datalist-success" class="text-input" />
            <datalist id="datalist-name-4">
              <option value="Option 1">
              <option value="Option 2">
              <option value="Option 3">
              <option value="Option 4">
              <option value="Option 5">
              <option value="Option 6">
            </datalist>
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="range-enabled">Range: enabled</label>
            <input type="range" min="10" max="30" name="range-enabled" id="range-enabled" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="range-disabled">Range: disabled</label>
            <input type="range" min="10" max="30" name="range-disabled" id="range-disabled" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="range-error">Range: error</label>
            <input type="range" min="10" max="30" name="range-error" id="range-error" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="range-success">Range: success</label>
            <input type="range" min="10" max="30" name="range-success" id="range-success" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="color-enabled">Color: enabled</label>
            <input type="color" name="color-enabled" id="color-enabled" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="color-disabled">Color: disabled</label>
            <input type="color" name="color-disabled" id="color-disabled" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="color-error">Color: error</label>
            <input type="color" name="color-error" id="color-error" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="color-success">Color: success</label>
            <input type="color" name="color-success" id="color-success" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__controls control-group__controls--stack-input-labels u-inline-children">
          <div class="form-control form-control--stack-input-label">
            <label for="file-enabled">File: enabled</label>
            <input type="file" name="file-enabled" id="file-enabled" />
          </div>
          <div class="form-control form-control--stack-input-label">
            <label for="file-disabled">File: disabled</label>
            <input type="file" name="file-disabled" id="file-disabled" disabled />
          </div>
          <div class="form-control form-control--stack-input-label is-error">
            <label for="file-error">File: error</label>
            <input type="file" name="file-error" id="file-error" />
            <div class="form__response">This is the error message</div>
          </div>
          <div class="form-control form-control--stack-input-label is-success">
            <label for="file-success">File: success</label>
            <input type="file" name="file-success" id="file-success" />
            <div class="form__response">This is the success message</div>
          </div>
        </div>
      </div>

      <div class="control-group">
        <div class="control-group__label">Radios: enabled</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="radio" name="radios-enabled" value="radios-enabled-a" id="radios-enabled-a" />
            <label for="radios-enabled-a">Radio A</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-enabled" value="radios-enabled-b" id="radios-enabled-b" />
            <label for="radios-enabled-b">Radio B</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-enabled" value="radios-enabled-c" id="radios-enabled-c" />
            <label for="radios-enabled-c">Radio C</label>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="control-group__label">Radios: disabled</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="radio" name="radios-disabled" value="radios-disabled-a" id="radios-disabled-a" disabled />
            <label for="radios-disabled-a">Radio A</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-disabled" value="radios-disabled-b" id="radios-disabled-b" disabled />
            <label for="radios-disabled-b">Radio B</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-disabled" value="radios-disabled-c" id="radios-disabled-c" disabled />
            <label for="radios-disabled-c">Radio C</label>
          </div>
        </div>
      </div>
      <div class="control-group is-error">
        <div class="control-group__label">Radios: error</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="radio" name="radios-error" value="radios-error-a" id="radios-error-a" />
            <label for="radios-error-a">Radio A</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-error" value="radios-error-b" id="radios-error-b" />
            <label for="radios-error-b">Radio B</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-error" value="radios-error-c" id="radios-error-c" />
            <label for="radios-error-c">Radio C</label>
          </div>
        </div>
        <div class="form__response">This is the error message</div>
      </div>
      <div class="control-group is-success">
        <div class="control-group__label">Radios: success</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="radio" name="radios-success" value="radios-success-a" id="radios-success-a" />
            <label for="radios-success-a">Radio A</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-success" value="radios-success-b" id="radios-success-b" />
            <label for="radios-success-b">Radio B</label>
          </div>
          <div class="form-control">
            <input type="radio" name="radios-success" value="radios-success-c" id="radios-success-c" />
            <label for="radios-success-c">Radio C</label>
          </div>
        </div>
        <div class="form__response">This is the success message</div>
      </div>

      <div class="control-group">
        <div class="control-group__label">Checkboxes: enabled</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="checkbox" name="checkboxes-enabled" value="checkboxes-enabled-a" id="checkboxes-enabled-a" />
            <label for="checkboxes-enabled-a">Checkbox A</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-enabled" value="checkboxes-enabled-b" id="checkboxes-enabled-b" />
            <label for="checkboxes-enabled-b">Checkbox B</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-enabled" value="checkboxes-enabled-c" id="checkboxes-enabled-c" />
            <label for="checkboxes-enabled-c">Checkbox C</label>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="control-group__label">Checkboxes: disabled</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="checkbox" name="checkboxes-disabled" value="checkboxes-disabled-a" id="checkboxes-disabled-a" disabled />
            <label for="checkboxes-disabled-a">Checkbox A</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-disabled" value="checkboxes-disabled-b" id="checkboxes-disabled-b" disabled />
            <label for="checkboxes-disabled-b">Checkbox B</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-disabled" value="checkboxes-disabled-c" id="checkboxes-disabled-c" disabled />
            <label for="checkboxes-disabled-c">Checkbox C</label>
          </div>
        </div>
      </div>
      <div class="control-group is-error">
        <div class="control-group__label">Checkboxes: error</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="checkbox" name="checkboxes-error" value="checkboxes-error-a" id="checkboxes-error-a" />
            <label for="checkboxes-error-a">Checkbox A</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-error" value="checkboxes-error-b" id="checkboxes-error-b" />
            <label for="checkboxes-error-b">Checkbox B</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-error" value="checkboxes-error-c" id="checkboxes-error-c" />
            <label for="checkboxes-error-c">Checkbox C</label>
          </div>
        </div>
        <div class="form__response">This is the error message</div>
      </div>
      <div class="control-group is-success">
        <div class="control-group__label">Checkboxes: success</div>
        <div class="control-group__controls">
          <div class="form-control">
            <input type="checkbox" name="checkboxes-success" value="checkboxes-success-a" id="checkboxes-success-a" />
            <label for="checkboxes-success-a">Checkbox A</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-success" value="checkboxes-success-b" id="checkboxes-success-b" />
            <label for="checkboxes-success-b">Checkbox B</label>
          </div>
          <div class="form-control">
            <input type="checkbox" name="checkboxes-success" value="checkboxes-success-c" id="checkboxes-success-c" />
            <label for="checkboxes-success-c">Checkbox C</label>
          </div>
        </div>
        <div class="form__response">This is the success message</div>
      </div>

      <div class="form-control">
        <button class="btn-large">Large Button: Enabled</button>
        <button class="btn">Button: Enabled</button>
        <button class="btn-small">Small Button: Enabled</button>
      </div>

      <div class="form-control">
        <button class="btn-large" disabled>Large Button: Disabled</button>
        <button class="btn" disabled>Button: Disabled</button>
        <button class="btn-small" disabled>Small Button: Disabled</button>
      </div>

      <div class="form-control">
        <a href="/path/to/somewhere/" class="btn-large">Large Anchor</a>
        <a href="/path/to/somewhere/" class="btn">Anchor</a>
        <a href="/path/to/somewhere/" class="btn-small">Small Anchor</a>
      </div>

      <div class="form-control">
        <div class="form__response is-error">This is a <em>whole-form</em> error message.</div>
        <div class="form__response is-success">This is a <em>whole-form</em> success message.</div>
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
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="text" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="email" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="email" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="email" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="email" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="password" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="password" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="password" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="password" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="search" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="search" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="search" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="search" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="url" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="url" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="url" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="url" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="date" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="date" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="date" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="date" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="datetime-local" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="datetime-local" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="datetime-local" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="datetime-local" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="time" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="time" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="time" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="time" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="week" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="week" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="week" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="week" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="month" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="month" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="month" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="month" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="tel" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="tel" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="tel" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="tel" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="number" name="..." id="..." class="text-input" placeholder="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="number" name="..." id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="number" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="number" name="..." id="..." class="text-input" placeholder="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;textarea name="..." rows="5" cols="30" id="..." class="text-input" placeholder="..."&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;textarea name="..." rows="5" cols="30" id="..." class="text-input" placeholder="..." <span class="demo__highlight">disabled</span>&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;textarea name="..." rows="5" cols="30" id="..." class="text-input" placeholder="..."&gt;&lt;/textarea&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;textarea name="..." rows="5" cols="30" id="..." class="text-input" placeholder="..."&gt;&lt;/textarea&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;div class="select-input"&gt;
      &lt;select name="..." id="..."&gt;
        &lt;optgroup label="..."&gt;
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
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;div class="select-input"&gt;
      &lt;select name="..." id="..." <span class="demo__highlight">disabled</span>&gt;
        &lt;optgroup label="..."&gt;
          &lt;option value="..."&gt;...&lt;/option&gt;
          &lt;option value="..."&gt;...&lt;/option&gt;
          &lt;option value="..."&gt;...&lt;/option&gt;
          &lt;option value="..."&gt;...&lt;/option&gt;
          &lt;option value="..."&gt;...&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;option value="..."...&lt;/option&gt;
        &lt;option value="..."...&lt;/option&gt;
        &lt;option value="..."...&lt;/option&gt;
        &lt;option value="..."...&lt;/option&gt;
        &lt;option value="..."...&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;div class="select-input"&gt;
      &lt;select name="..." id="..."&gt;
        &lt;optgroup label="..."&gt;
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
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;div class="select-input"&gt;
      &lt;select name="..." id="..."&gt;
        &lt;optgroup label="..."&gt;
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
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input list="..." name="..." id="..." class="text-input" /&gt;
    &lt;datalist id="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
    &lt;/datalist&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input list="..." name="..." id="..." class="text-input" <span class="demo__highlight">disabled</span> /&gt;
    &lt;datalist id="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
    &lt;/datalist&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input list="..." name="..." id="..." class="text-input" /&gt;
    &lt;datalist id="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
    &lt;/datalist&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input list="..." name="..." id="..." class="text-input" /&gt;
    &lt;datalist id="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
      &lt;option value="..."&gt;
    &lt;/datalist&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="range" min="..." max="..." name="..." id="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="range" min="..." max="..." name="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="range" min="..." max="..." name="..." id="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="range" min="..." max="..." name="..." id="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="color" name="..." id="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="color" name="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="color" name="..." id="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="color" name="..." id="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="file" name="..." id="..." /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="file" name="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-error</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="file" name="..." id="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="form-control form-control--stack-input-label <span class="demo__highlight">is-success</span>"&gt;
    &lt;label for="..."&gt;...&lt;/label&gt;
    &lt;input type="file" name="..." id="..." /&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

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
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="radio" name="..." value="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group <span class="demo__highlight">is-error</span>"&gt;
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
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="control-group <span class="demo__highlight">is-success</span>"&gt;
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
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." <span class="demo__highlight">disabled</span> /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group <span class="demo__highlight">is-error</span>"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="control-group <span class="demo__highlight">is-success</span>"&gt;
    &lt;div class="control-group__label"&gt;...&lt;/div&gt;
    &lt;div class="control-group__controls"&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-control"&gt;
        &lt;input type="checkbox" name="..." value="..." id="..." /&gt;
        &lt;label for="..."&gt;...&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    <span class="demo__highlight">&lt;div class="form__response"&gt;...&lt;/div&gt;</span>
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;button class="btn-large"&gt;...&lt;/button&gt;
    &lt;button class="btn"&gt;...&lt;/button&gt;
    &lt;button class="btn-small"&gt;...&lt;/button&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;button class="btn-large" <span class="demo__highlight">disabled</span>&gt;...&lt;/button&gt;
    &lt;button class="btn" <span class="demo__highlight">disabled</span>&gt;...&lt;/button&gt;
    &lt;button class="btn-small" <span class="demo__highlight">disabled</span>&gt;...&lt;/button&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;a href="..." class="btn-large"&gt;...&lt;/a&gt;
    &lt;a href="..." class="btn"&gt;...&lt;/a&gt;
    &lt;a href="..." class="btn-small"&gt;...&lt;/a&gt;
  &lt;/div&gt;

  &lt;div class="form-control"&gt;
    &lt;div class="form__response <span class="demo__highlight">is-error</span>"&gt;...&lt;/div&gt;
    &lt;div class="form__response <span class="demo__highlight">is-success</span>"&gt;...&lt;/div&gt;
  &lt;/div&gt;

&lt;/form&gt;</code></pre>
      </div>
    </div>


    <?php include '../inc/scripts.php'; ?>


  </body>
</html>
