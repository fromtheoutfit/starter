<!doctype html>
<html class="no-js" lang="en">
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/lib/css/app.css" />
    <link rel="stylesheet" href="" />
    <title>Modal Dialog</title>
    <meta name="description" content="Demo of a modal dialog." />

    <script src="/lib/js/modernizr.js"></script>

    <!-- This imported stylesheet is *only* for this demo page and its simple
    UI. It has no effect on the demos themselves and it should *not* be
    included in the production-ready code. -->
    <style>@import 'demos-ui.css';</style>

  </head>
  <body>

    <div class="demo">
      <h2>Dialog</h2>
      <div class="demo__content">
        <p><span class="lorem-dashum">The phantoms, for so they then seemed, were flitting on the other side of the deck, and, with a noiseless celerity, were casting loose the tackles and bands of the boat which swung there. This boat had always been deemed one of the spare boats, though technically called the captain's, on account of its hanging from the starboard quarter. The figure that now stood by its bows was tall and swart, with one white tooth evilly protruding from its steel-like lips. A rumpled Chinese jacket of black cotton funereally invested him, with wide black trowsers of the same dark stuff. But strangely crowning this ebonness was a glistening white plaited turban, the living hair braided and coiled round and round upon his head. Less swart in aspect, the companions of this figure were of that vivid, tiger-yellow complexion peculiar to some of the aboriginal natives of the Manillas;&mdash;a race notorious for a certain diabolism of subtilty, and by some honest white mariners supposed to be the paid spies and secret confidential agents on the water of the devil, their lord, whose counting-room they suppose to be elsewhere.</span></p>
        <p><span class="lorem-dashum">While yet the wondering ship's company were gazing upon these strangers, Ahab cried out to the white-turbaned old man at their head, "All ready there, Fedallah?"</span></p>
        <p><span class="lorem-dashum">"Ready," was the half-hissed reply.</span></p>
        <p><span class="lorem-dashum">"Lower away then; d'ye hear?" shouting across the deck. "Lower away there, I say."</span></p>
        <p><span class="lorem-dashum">Such was the thunder of his voice, that spite of their amazement the men sprang over the rail; the sheaves whirled round in the blocks; with a wallow, the three boats dropped into the sea; while, with a dexterous, off-handed daring, unknown in any other vocation, the sailors, goat-like, leaped down the rolling ship's side into the tossed boats below.</span></p>
        <p><span class="lorem-dashum">Hardly had they pulled out from under the ship's lee, when a fourth keel, coming from the windward side, pulled round under the stern, and showed the five strangers rowing Ahab, who, standing erect in the stern, loudly hailed Starbuck, Stubb, and Flask, to spread themselves widely, so as to cover a large expanse of water. But with all their eyes again riveted upon the swart Fedallah and his crew, the inmates of the other boats obeyed not the command.</span></p>
        <p><span class="lorem-dashum">"Captain Ahab?&mdash;" said Starbuck.</span></p>
        <p><span class="lorem-dashum">"Spread yourselves," cried Ahab; "give way, all four boats. Thou, Flask, pull out more to leeward!"</span></p>
        <p><span class="lorem-dashum">"Aye, aye, sir," cheerily cried little King-Post, sweeping round his great steering oar. "Lay back!" addressing his crew. "There!&mdash;there!&mdash;there again! There she blows right ahead, boys!&mdash;lay back!"</span></p>
        <p><span class="lorem-dashum">"Never heed yonder yellow boys, Archy."</span></p>
        <p><span class="lorem-dashum">"What is education?" Edwin asked.</span></p>
        <p><span class="lorem-dashum">"Calling red scarlet," Hare-Lip sneered, then returned to the attack on  Granser. "My dad told me, an' he got it from his dad afore he croaked,  that your wife was a Santa Rosan, an' that she was sure no account. He  said she was a hash-slinger before the Red Death, though I don't know  what a hash-slinger is. You can tell me, Edwin."</span></p>
        <p><span class="lorem-dashum">But Edwin shook his head in token of ignorance.</span></p>
        <p><span class="lorem-dashum">"It is true, she was a waitress," Granser acknowledged. "But she was a  good woman, and your mother was her daughter. Women were very scarce in  the days after the Plague. She was the only wife I could find, even if  she was a hash-slinger, as your father calls it. But it is not nice to  talk about our progenitors that way."</span></p>
        <p><span class="lorem-dashum">"Dad says that the wife of the first Chauffeur was a lady&mdash;"</span></p>
        <p><span class="lorem-dashum">"What's a lady?" Hoo-Hoo demanded.</span></p>
        <p><span class="lorem-dashum">"A lady 's a Chauffeur squaw," was the quick reply of Hare-Lip.</span></p>
        <p><span class="lorem-dashum">"The first Chauffeur was Bill, a common fellow, as I said before," the  old man expounded; "but his wife was a lady, a great lady. Before the  Scarlet Death she was the wife of Van Worden. He was President of the  Board of Industrial Magnates, and was one of the dozen men who  ruled America. He was worth one billion, eight hundred millions of  dollars&mdash;coins like you have there in your pouch, Edwin. And then came  the Scarlet Death, and his wife became the wife of Bill, the first  Chauffeur. He used to beat her, too. I have seen it myself."</span></p>
        <p><span class="lorem-dashum">Hoo-Hoo, lying on his stomach and idly digging his toes in the sand,  cried out and investigated, first, his toe-nail, and next, the small  hole he had dug. The other two boys joined him, excavating the sand  rapidly with their hands till there lay three skeletons exposed. Two  were of adults, the third being that of a part-grown child. The old man  hudged along on the ground and peered at the find.</span></p>
        <p><span class="lorem-dashum">"Plague victims," he announced. "That's the way they died everywhere  in the last days. This must have been a family, running away from the  contagion and perishing here on the Cliff House beach. They&mdash;what are  you doing, Edwin?"</span></p>
      </div><!-- .demo__content -->
    </div><!-- .demo -->

    <div class="dialog">
      <div class="dialog__bg"></div>
      <div class="dialog__body">
        <div class="dialog__close">
          <button class="btn-strip" aria-label="Close dialog">×</button>
        </div>
        <div class="dialog__content">
          <div class="copy-block">
            <h3><strong>Dialog</strong></h3>
            <p>The phantoms, <a href="#">for so they then seemed</a>, were flitting on the other side of the deck, and, with a noiseless celerity, were casting loose the tackles and bands of the boat which swung there. This boat had always been deemed one of the spare boats, though technically called the captain's, on account of its hanging from the starboard quarter.</span></p>
            <p><span class="lorem-dashum">While yet the wondering ship's company were gazing upon these strangers, Ahab cried out to the white-turbaned old man at their head, "All ready there, Fedallah?"</span></p>
            <p><span class="lorem-dashum">"Ready," was the half-hissed reply.</span></p>
            <p><span class="lorem-dashum">"Lower away then; d'ye hear?" shouting across the deck. "Lower away there, I say."</span></p>
            <p><span class="lorem-dashum">Such was the thunder of his voice, that spite of their amazement the men sprang over the rail; the sheaves whirled round in the blocks; with a wallow, the three boats dropped into the sea; while, with a dexterous, off-handed daring, unknown in any other vocation, the sailors, goat-like, leaped down the rolling ship's side into the tossed boats below.</span></p>
            <p><span class="lorem-dashum">Hardly had they pulled out from under the ship's lee, when a fourth keel, coming from the windward side, pulled round under the stern, and showed the five strangers rowing Ahab, who, standing erect in the stern, loudly hailed Starbuck, Stubb, and Flask, to spread themselves widely, so as to cover a large expanse of water. But with all their eyes again riveted upon the swart Fedallah and his crew, the inmates of the other boats obeyed not the command.</span></p>
            <p><span class="lorem-dashum">"Captain Ahab?&mdash;" said Starbuck.</span></p>
            <p><span class="lorem-dashum">"Spread yourselves," cried Ahab; "give way, all four boats. Thou, Flask, pull out more to leeward!"</span></p>
            <p><span class="lorem-dashum">"Aye, aye, sir," cheerily cried little King-Post, sweeping round his great steering oar. "Lay back!" addressing his crew. "There!&mdash;there!&mdash;there again! There she blows right ahead, boys!&mdash;lay back!"</span></p>
            <p><span class="lorem-dashum">"Never heed yonder yellow boys, Archy."</span></p>
            <p><span class="lorem-dashum">"What is education?" Edwin asked.</span></p>
            <p><span class="lorem-dashum">"Calling red scarlet," Hare-Lip sneered, then returned to the attack on  Granser. "My dad told me, an' he got it from his dad afore he croaked,  that your wife was a Santa Rosan, an' that she was sure no account. He  said she was a hash-slinger before the Red Death, though I don't know  what a hash-slinger is. You can tell me, Edwin."</span></p>
            <p><span class="lorem-dashum">But Edwin shook his head in token of ignorance.</span></p>
            <p><span class="lorem-dashum">"It is true, she was a waitress," Granser acknowledged. "But she was a  good woman, and your mother was her daughter. Women were very scarce in  the days after the Plague. She was the only wife I could find, even if  she was a hash-slinger, as your father calls it. But it is not nice to  talk about our progenitors that way."</span></p>
            <p><span class="lorem-dashum">"Dad says that the wife of the first Chauffeur was a lady&mdash;"</span></p>
            <p><span class="lorem-dashum">"What's a lady?" Hoo-Hoo demanded.</span></p>
            <p><span class="lorem-dashum">"A lady 's a Chauffeur squaw," was the quick reply of Hare-Lip.</span></p>
            <p><span class="lorem-dashum">"The first Chauffeur was Bill, a common fellow, as I said before," the  old man expounded; "but his wife was a lady, a great lady. Before the  Scarlet Death she was the wife of Van Worden. He was President of the  Board of Industrial Magnates, and was one of the dozen men who  ruled America. He was worth one billion, eight hundred millions of  dollars&mdash;coins like you have there in your pouch, Edwin. And then came  the Scarlet Death, and his wife became the wife of Bill, the first  Chauffeur. He used to beat her, too. I have seen it myself."</span></p>
            <p><span class="lorem-dashum">Hoo-Hoo, lying on his stomach and idly digging his toes in the sand,  cried out and investigated, first, his toe-nail, and next, the small  hole he had dug. The other two boys joined him, excavating the sand  rapidly with their hands till there lay three skeletons exposed. Two  were of adults, the third being that of a part-grown child. The old man  hudged along on the ground and peered at the find.</span></p>
            <p><span class="lorem-dashum">"Plague victims," he announced. "That's the way they died everywhere  in the last days. This must have been a family, running away from the  contagion and perishing here on the Cliff House beach. They&mdash;what are  you doing, Edwin?"</span></p>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
