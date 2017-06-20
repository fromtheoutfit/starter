// Instructions on how to import other JS files into this one.
// http://exploringjs.com/es6/ch_modules.html
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/import
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/export


import * as nav from './nav'
nav.initialize();


// Note: The following is ONLY for the temporary demos found inside of
//       /public/_demos/. Be sure to comment-out or delete the next two lines
//       before this project goes to production.
import * as demos from './demos'
demos.initialize();
