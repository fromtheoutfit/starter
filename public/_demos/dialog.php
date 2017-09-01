<!doctype html>
<html class="no-js" lang="en">
  <head>

    <?php include_once 'inc/head.php'; ?>

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
  <body>

    <?php include_once 'inc/demos-nav.php'; ?>

    <div class="demo">
      <div class="demo__content">
        <div class="copy-block">
          <p><span class="lorem-dashum">The phantoms, for so they then seemed, were flitting on the other side of the deck, and, with a noiseless celerity, were casting loose the tackles and bands of the boat which swung there. This boat had always been deemed one of the spare boats, though technically called the captain's, on account of its hanging from the starboard quarter. The figure that now stood by its bows was tall and swart, with one white tooth evilly protruding from its steel-like lips.</span></p>

          <!-- This is the Show Dialog button -->
          <p><button class="btn js-open-dialog">Show Dialog</button></p>

          <p><span class="lorem-dashum">A rumpled Chinese jacket of black cotton funereally invested him, with wide black trowsers of the same dark stuff. But strangely crowning this ebonness was a glistening white plaited turban, the living hair braided and coiled round and round upon his head. Less swart in aspect, the companions of this figure were of that vivid, tiger-yellow complexion peculiar to some of the aboriginal natives of the Manillas;&mdash;a race notorious for a certain diabolism of subtilty, and by some honest white mariners supposed to be the paid spies and secret confidential agents on the water of the devil, their lord, whose counting-room they suppose to be elsewhere.</span></p>
          <p><span class="lorem-dashum">While yet the wondering ship's company were gazing upon these strangers, Ahab cried out to the white-turbaned old man at their head, "All ready there, Fedallah?" "Ready," was the half-hissed reply. "Lower away then; d'ye hear?" shouting across the deck. "Lower away there, I say." Such was the thunder of his voice, that spite of their amazement the men sprang over the rail; the sheaves whirled round in the blocks; with a wallow, the three boats dropped into the sea; while, with a dexterous, off-handed daring, unknown in any other vocation, the sailors, goat-like, leaped down the rolling ship's side into the tossed boats below.</span></p>
          <p><span class="lorem-dashum">Hardly had they pulled out from under the ship's lee, when a fourth keel, coming from the windward side, pulled round under the stern, and showed the five strangers rowing Ahab, who, standing erect in the stern, loudly hailed Starbuck, Stubb, and Flask, to spread themselves widely, so as to cover a large expanse of water. But with all their eyes again riveted upon the swart Fedallah and his crew, the inmates of the other boats obeyed not the command. "Captain Ahab?&mdash;" said Starbuck. "Spread yourselves," cried Ahab; "give way, all four boats. Thou, Flask, pull out more to leeward!" "Aye, aye, sir," cheerily cried little King-Post, sweeping round his great steering oar. "Lay back!" addressing his crew. "There!&mdash;there!&mdash;there again! There she blows right ahead, boys!&mdash;lay back!"</span></p>
          <p><span class="lorem-dashum">"Never heed yonder yellow boys, Archy." "What is education?" Edwin asked. "Calling red scarlet," Hare-Lip sneered, then returned to the attack on  Granser. "My dad told me, an' he got it from his dad afore he croaked,  that your wife was a Santa Rosan, an' that she was sure no account. He  said she was a hash-slinger before the Red Death, though I don't know  what a hash-slinger is. You can tell me, Edwin." But Edwin shook his head in token of ignorance. "It is true, she was a waitress," Granser acknowledged. "But she was a  good woman, and your mother was her daughter. Women were very scarce in  the days after the Plague. She was the only wife I could find, even if  she was a hash-slinger, as your father calls it. But it is not nice to  talk about our progenitors that way."</span></p>
          <p><span class="lorem-dashum">"Dad says that the wife of the first Chauffeur was a lady&mdash;" "What's a lady?" Hoo-Hoo demanded. "A lady 's a Chauffeur squaw," was the quick reply of Hare-Lip. "The first Chauffeur was Bill, a common fellow, as I said before," the  old man expounded; "but his wife was a lady, a great lady. Before the  Scarlet Death she was the wife of Van Worden. He was President of the  Board of Industrial Magnates, and was one of the dozen men who  ruled America. He was worth one billion, eight hundred millions of  dollars&mdash;coins like you have there in your pouch, Edwin. And then came  the Scarlet Death, and his wife became the wife of Bill, the first  Chauffeur. He used to beat her, too. I have seen it myself."</span></p>
          <p><span class="lorem-dashum">Hoo-Hoo, lying on his stomach and idly digging his toes in the sand,  cried out and investigated, first, his toe-nail, and next, the small  hole he had dug. The other two boys joined him, excavating the sand  rapidly with their hands till there lay three skeletons exposed. Two  were of adults, the third being that of a part-grown child. The old man  hudged along on the ground and peered at the find.</span></p>
          <p><span class="lorem-dashum">"Plague victims," he announced. "That's the way they died everywhere  in the last days. This must have been a family, running away from the  contagion and perishing here on the Cliff House beach. They&mdash;what are  you doing, Edwin?"</span></p>
        </div>
      </div>
    </div>

    <!--
    Dialog Accessibility Resources:
    - https://allyjs.io/tutorials/accessible-dialog.html
    - https://github.com/gdkraus/accessible-modal-dialog
    - https://www.marcozehe.de/2015/02/05/advanced-aria-tip-2-accessible-modal-dialogs/
    - http://heydonworks.com/practical_aria_examples/#warning-dialog

    Many things happen in /_js/dialog.js to control the behavior and
    accessibility of this dialog.
    -->
    <div class="dialog js-dialog" role="dialog" aria-labelledby="dialog__title" aria-describedby="dialog__description" aria-hidden="true" hidden>
      <div class="dialog__bg"></div>
      <div class="dialog__body">
        <div class="dialog__close">
          <button class="btn-strip js-close-dialog" aria-label="Close dialog">×</button>
        </div>
        <div class="dialog__content" role="document">
          <div class="copy-block">
            <header>
              <!--
              The following two elements should ALWAYS be present, accurate,
              filled-in, etc. Whether or not they're *visible* is up to you,
              the design, etc. If one/both of them should be hidden,
              simply add the .visuallyhidden helper class as needed.
              -->
              <h3 id="dialog__title"><strong>Dialog Title</strong></h3>
              <p id="dialog__description">Dialog description, here.</p>
            </header>
            <section>
              <form>
                <div class="control-group">
                  <div class="control-group__controls control-group__controls--stretch-controls control-group__controls--stack-input-labels">
                    <div class="form-control">
                      <label for="dialog-input-1">Input Label</label>
                      <input type="text" name="dialog-input-1" id="dialog-input-1" class="text-input" placeholder="Placeholder">
                    </div>
                    <div class="form-control">
                      <label for="dialog-input-2">Input Label</label>
                      <input type="text" name="dialog-input-2" id="dialog-input-2" class="text-input" placeholder="Placeholder">
                    </div>
                    <div class="form-control">
                      <label for="dialog-input-3">Input Label</label>
                      <input type="text" name="dialog-input-3" id="dialog-input-3" class="text-input" placeholder="Placeholder">
                    </div>
                  </div>
                </div>
                <div class="control-group">
                  <div class="control-group__label">Group Label</div>
                  <div class="control-group__controls">
                    <div class="form-control">
                      <input type="radio" name="dialog-radio-1" value="option-1" id="dialog-radio-1-option-1">
                      <label for="dialog-radio-1-option-1">Option</label>
                    </div>
                    <div class="form-control">
                      <input type="radio" name="dialog-radio-1" value="option-2" id="dialog-radio-1-option-2" checked>
                      <label for="dialog-radio-1-option-2">Option</label>
                    </div>
                    <div class="form-control">
                      <input type="radio" name="dialog-radio-1" value="option-3" id="dialog-radio-1-option-3">
                      <label for="dialog-radio-1-option-3">Option</label>
                    </div>
                  </div>
                </div>
                <div class="form-control">
                  <button type="submit" class="btn">Submit</button>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'inc/scripts.php'; ?>

  </body>
</html>
