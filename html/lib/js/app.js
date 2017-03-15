/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__nav__ = __webpack_require__(2);
// Import other JS files into this one.
// http://exploringjs.com/es6/ch_modules.html
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/import
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/export



__WEBPACK_IMPORTED_MODULE_0__nav__["a" /* initialize */]();

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = initialize;
/* unused harmony export selectNodes */
/* unused harmony export addListeners */
/* unused harmony export betterResize */
/* unused harmony export handleResize */
/* unused harmony export determineEventLoc */
/* unused harmony export handleKeyPresses */
/* unused harmony export toggleNav */
var swapWidth = 600;
var isVisible = false;
var wrapEl = null;
var allDesc = null;
var openBtn = null;
var closeBtn = null;
var vpWidth = null;

function initialize() {
  selectNodes();
  addListeners();
  betterResize();
}

function selectNodes() {
  openBtn = document.querySelector('.js-header__open-nav');
  closeBtn = document.querySelector('.js-header__close-nav');
  wrapEl = document.querySelector('.js-header__nav-wrap');
  allDesc = wrapEl.getElementsByTagName('*');
}

function addListeners() {
  openBtn.addEventListener('click', toggleNav, false);
  closeBtn.addEventListener('click', toggleNav, false);
  document.addEventListener('touchend', determineEventLoc, false);
  document.addEventListener('click', determineEventLoc, false);
  document.addEventListener('keyup', handleKeyPresses, false);
  window.addEventListener('resizeViaRAF', handleResize, false);
}

function betterResize() {
  var running = false;
  function doItViaRAF() {
    if (running) {
      return;
    }
    running = true;
    requestAnimationFrame(function () {
      window.dispatchEvent(new CustomEvent('resizeViaRAF'));
      running = false;
    });
  }
  window.addEventListener('resize', doItViaRAF);
}

function handleResize() {
  vpWidth = window.innerWidth;
  if (vpWidth >= swapWidth && isVisible) {
    toggleNav(event);
  }
}

function determineEventLoc(event) {
  if (isVisible) {
    if (event.target === wrapEl) {
      return;
    } else {
      for (var i = 0; i < allDesc.length; i++) {
        if (event.target === allDesc[i]) {
          return;
        }
      }
    }
    toggleNav(event);
  } else {
    return;
  }
}

function handleKeyPresses(event) {
  if (isVisible && event.keyCode === 27) {
    toggleNav(event);
  }
}

function toggleNav(event) {
  wrapEl.classList.toggle('is-visible');
  isVisible = !isVisible;
  event.stopPropagation();
}

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgODBiYmRjZGViZTE1MTg1NzJhMWQiLCJ3ZWJwYWNrOi8vLy4vX2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9fc2Nzcy9hcHAuc2Nzcz8wOGJiIiwid2VicGFjazovLy8uL19qcy9uYXYuanMiXSwibmFtZXMiOlsic3dhcFdpZHRoIiwiaXNWaXNpYmxlIiwid3JhcEVsIiwiYWxsRGVzYyIsIm9wZW5CdG4iLCJjbG9zZUJ0biIsInZwV2lkdGgiLCJpbml0aWFsaXplIiwic2VsZWN0Tm9kZXMiLCJhZGRMaXN0ZW5lcnMiLCJiZXR0ZXJSZXNpemUiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImFkZEV2ZW50TGlzdGVuZXIiLCJ0b2dnbGVOYXYiLCJkZXRlcm1pbmVFdmVudExvYyIsImhhbmRsZUtleVByZXNzZXMiLCJ3aW5kb3ciLCJoYW5kbGVSZXNpemUiLCJydW5uaW5nIiwiZG9JdFZpYVJBRiIsInJlcXVlc3RBbmltYXRpb25GcmFtZSIsImRpc3BhdGNoRXZlbnQiLCJDdXN0b21FdmVudCIsImlubmVyV2lkdGgiLCJldmVudCIsInRhcmdldCIsImkiLCJsZW5ndGgiLCJrZXlDb2RlIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwic3RvcFByb3BhZ2F0aW9uIl0sIm1hcHBpbmdzIjoiO0FBQUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0EsbURBQTJDLGNBQWM7O0FBRXpEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsYUFBSztBQUNMO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsbUNBQTJCLDBCQUEwQixFQUFFO0FBQ3ZELHlDQUFpQyxlQUFlO0FB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Q0EvQixjQUFZLENBQUNBLFNBQWI7QUFDQXlCLFFBQU1PLGVBQU47QUFDRCxDIiwiZmlsZSI6Imh0bWwvbGliL2pzL2FwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKVxuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuXG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBpZGVudGl0eSBmdW5jdGlvbiBmb3IgY2FsbGluZyBoYXJtb255IGltcG9ydHMgd2l0aCB0aGUgY29ycmVjdCBjb250ZXh0XG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmkgPSBmdW5jdGlvbih2YWx1ZSkgeyByZXR1cm4gdmFsdWU7IH07XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwge1xuIFx0XHRcdFx0Y29uZmlndXJhYmxlOiBmYWxzZSxcbiBcdFx0XHRcdGVudW1lcmFibGU6IHRydWUsXG4gXHRcdFx0XHRnZXQ6IGdldHRlclxuIFx0XHRcdH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIi4vXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gMyk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgODBiYmRjZGViZTE1MTg1NzJhMWQiLCIvLyBJbXBvcnQgb3RoZXIgSlMgZmlsZXMgaW50byB0aGlzIG9uZS5cbi8vIGh0dHA6Ly9leHBsb3Jpbmdqcy5jb20vZXM2L2NoX21vZHVsZXMuaHRtbFxuLy8gaHR0cHM6Ly9kZXZlbG9wZXIubW96aWxsYS5vcmcvZW4tVVMvZG9jcy9XZWIvSmF2YVNjcmlwdC9SZWZlcmVuY2UvU3RhdGVtZW50cy9pbXBvcnRcbi8vIGh0dHBzOi8vZGV2ZWxvcGVyLm1vemlsbGEub3JnL2VuLVVTL2RvY3MvV2ViL0phdmFTY3JpcHQvUmVmZXJlbmNlL1N0YXRlbWVudHMvZXhwb3J0XG5cbmltcG9ydCAqIGFzIG5hdiBmcm9tICcuL25hdidcblxubmF2LmluaXRpYWxpemUoKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL19qcy9hcHAuanMiLCIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vL1xuLy8gV0VCUEFDSyBGT09URVJcbi8vIC4vX3Njc3MvYXBwLnNjc3Ncbi8vIG1vZHVsZSBpZCA9IDFcbi8vIG1vZHVsZSBjaHVua3MgPSAwIiwiY29uc3Qgc3dhcFdpZHRoID0gNjAwO1xubGV0IGlzVmlzaWJsZSAgID0gZmFsc2U7XG5sZXQgd3JhcEVsICAgICAgPSBudWxsO1xubGV0IGFsbERlc2MgICAgID0gbnVsbDtcbmxldCBvcGVuQnRuICAgICA9IG51bGw7XG5sZXQgY2xvc2VCdG4gICAgPSBudWxsO1xubGV0IHZwV2lkdGggICAgID0gbnVsbDtcblxuZXhwb3J0IGZ1bmN0aW9uIGluaXRpYWxpemUoKSB7XG4gIHNlbGVjdE5vZGVzKCk7XG4gIGFkZExpc3RlbmVycygpO1xuICBiZXR0ZXJSZXNpemUoKTtcbn1cblxuZXhwb3J0IGZ1bmN0aW9uIHNlbGVjdE5vZGVzKCkge1xuICBvcGVuQnRuICA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5qcy1oZWFkZXJfX29wZW4tbmF2Jyk7XG4gIGNsb3NlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmpzLWhlYWRlcl9fY2xvc2UtbmF2Jyk7XG4gIHdyYXBFbCAgID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmpzLWhlYWRlcl9fbmF2LXdyYXAnKTtcbiAgYWxsRGVzYyAgPSB3cmFwRWwuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJyonKTtcbn1cblxuZXhwb3J0IGZ1bmN0aW9uIGFkZExpc3RlbmVycygpIHtcbiAgb3BlbkJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIHRvZ2dsZU5hdiwgZmFsc2UpO1xuICBjbG9zZUJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIHRvZ2dsZU5hdiwgZmFsc2UpO1xuICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCd0b3VjaGVuZCcsIGRldGVybWluZUV2ZW50TG9jLCBmYWxzZSk7XG4gIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZGV0ZXJtaW5lRXZlbnRMb2MsIGZhbHNlKTtcbiAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigna2V5dXAnLCBoYW5kbGVLZXlQcmVzc2VzLCBmYWxzZSk7XG4gIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdyZXNpemVWaWFSQUYnLCBoYW5kbGVSZXNpemUsIGZhbHNlKTtcbn1cblxuZXhwb3J0IGZ1bmN0aW9uIGJldHRlclJlc2l6ZSgpIHtcbiAgdmFyIHJ1bm5pbmcgPSBmYWxzZTtcbiAgZnVuY3Rpb24gZG9JdFZpYVJBRigpIHtcbiAgICBpZiAocnVubmluZykge3JldHVybjt9XG4gICAgcnVubmluZyA9IHRydWU7XG4gICAgcmVxdWVzdEFuaW1hdGlvbkZyYW1lKGZ1bmN0aW9uKCkge1xuICAgICAgd2luZG93LmRpc3BhdGNoRXZlbnQobmV3IEN1c3RvbUV2ZW50KCdyZXNpemVWaWFSQUYnKSk7XG4gICAgICBydW5uaW5nID0gZmFsc2U7XG4gICAgfSk7XG4gIH1cbiAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Jlc2l6ZScsIGRvSXRWaWFSQUYpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gaGFuZGxlUmVzaXplKCkge1xuICB2cFdpZHRoID0gd2luZG93LmlubmVyV2lkdGg7XG4gIGlmICgodnBXaWR0aCA+PSBzd2FwV2lkdGgpICYmIGlzVmlzaWJsZSkge1xuICAgIHRvZ2dsZU5hdihldmVudCk7XG4gIH1cbn1cblxuZXhwb3J0IGZ1bmN0aW9uIGRldGVybWluZUV2ZW50TG9jKGV2ZW50KSB7XG4gIGlmIChpc1Zpc2libGUpIHtcbiAgICBpZiAoZXZlbnQudGFyZ2V0ID09PSB3cmFwRWwpIHtcbiAgICAgIHJldHVybjtcbiAgICB9IGVsc2Uge1xuICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBhbGxEZXNjLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgIGlmIChldmVudC50YXJnZXQgPT09IGFsbERlc2NbaV0pIHtcbiAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICAgIH1cbiAgICB9XG4gICAgdG9nZ2xlTmF2KGV2ZW50KTtcbiAgfSBlbHNlIHtcbiAgICByZXR1cm47XG4gIH1cbn1cblxuZXhwb3J0IGZ1bmN0aW9uIGhhbmRsZUtleVByZXNzZXMoZXZlbnQpIHtcbiAgaWYgKGlzVmlzaWJsZSAmJiAoZXZlbnQua2V5Q29kZSA9PT0gMjcpKSB7XG4gICAgdG9nZ2xlTmF2KGV2ZW50KTtcbiAgfVxufVxuXG5leHBvcnQgZnVuY3Rpb24gdG9nZ2xlTmF2KGV2ZW50KSB7XG4gIHdyYXBFbC5jbGFzc0xpc3QudG9nZ2xlKCdpcy12aXNpYmxlJyk7XG4gIGlzVmlzaWJsZSA9ICFpc1Zpc2libGU7XG4gIGV2ZW50LnN0b3BQcm9wYWdhdGlvbigpO1xufVxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vX2pzL25hdi5qcyJdLCJzb3VyY2VSb290IjoiIn0=