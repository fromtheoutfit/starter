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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__nav__ = __webpack_require__(5);
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
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ }),
/* 3 */,
/* 4 */,
/* 5 */
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

/***/ })
/******/ ]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgMTE4MWMxNTdiYTM1NGUzMmI2MmEiLCJ3ZWJwYWNrOi8vLy4vX2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9fc2Nzcy9hcHAuc2NzcyIsIndlYnBhY2s6Ly8vLi9fanMvbmF2LmpzIl0sIm5hbWVzIjpbInN3YXBXaWR0aCIsImlzVmlzaWJsZSIsIndyYXBFbCIsImFsbERlc2MiLCJvcGVuQnRuIiwiY2xvc2VCdG4iLCJ2cFdpZHRoIiwiaW5pdGlhbGl6ZSIsInNlbGVjdE5vZGVzIiwiYWRkTGlzdGVuZXJzIiwiYmV0dGVyUmVzaXplIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlTmF2IiwiZGV0ZXJtaW5lRXZlbnRMb2MiLCJoYW5kbGVLZXlQcmVzc2VzIiwid2luZG93IiwiaGFuZGxlUmVzaXplIiwicnVubmluZyIsImRvSXRWaWFSQUYiLCJyZXF1ZXN0QW5pbWF0aW9uRnJhbWUiLCJkaXNwYXRjaEV2ZW50IiwiQ3VzdG9tRXZlbnQiLCJpbm5lcldpZHRoIiwiZXZlbnQiLCJ0YXJnZXQiLCJpIiwibGVuZ3RoIiwia2V5Q29kZSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsInN0b3BQcm9wYWdhdGlvbiJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBLG1EQUEyQyxjQUFjOztBQUV6RDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGFBQUs7QUFDTDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLG1DQUEyQiwwQkFBMEIsRUFBRTtBQUN2RCx5Q0FBaUMsZUFBZTtBQUNoRDtB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eEI7QUFDQS9CLGNBQVksQ0FBQ0EsU0FBYjtBQUNBeUIsUUFBTU8sZUFBTjtBQUNELEMiLCJmaWxlIjoiaHRtbC9saWIvanMvYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pXG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG5cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGlkZW50aXR5IGZ1bmN0aW9uIGZvciBjYWxsaW5nIGhhcm1vbnkgaW1wb3J0cyB3aXRoIHRoZSBjb3JyZWN0IGNvbnRleHRcbiBcdF9fd2VicGFja19yZXF1aXJlX18uaSA9IGZ1bmN0aW9uKHZhbHVlKSB7IHJldHVybiB2YWx1ZTsgfTtcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiLi9cIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAyKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCAxMTgxYzE1N2JhMzU0ZTMyYjYyYSIsIi8vIEltcG9ydCBvdGhlciBKUyBmaWxlcyBpbnRvIHRoaXMgb25lLlxuLy8gaHR0cDovL2V4cGxvcmluZ2pzLmNvbS9lczYvY2hfbW9kdWxlcy5odG1sXG4vLyBodHRwczovL2RldmVsb3Blci5tb3ppbGxhLm9yZy9lbi1VUy9kb2NzL1dlYi9KYXZhU2NyaXB0L1JlZmVyZW5jZS9TdGF0ZW1lbnRzL2ltcG9ydFxuLy8gaHR0cHM6Ly9kZXZlbG9wZXIubW96aWxsYS5vcmcvZW4tVVMvZG9jcy9XZWIvSmF2YVNjcmlwdC9SZWZlcmVuY2UvU3RhdGVtZW50cy9leHBvcnRcblxuaW1wb3J0ICogYXMgbmF2IGZyb20gJy4vbmF2J1xuXG5uYXYuaW5pdGlhbGl6ZSgpO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vX2pzL2FwcC5qcyIsIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9fc2Nzcy9hcHAuc2Nzc1xuLy8gbW9kdWxlIGlkID0gMVxuLy8gbW9kdWxlIGNodW5rcyA9IDAiLCJjb25zdCBzd2FwV2lkdGggPSA2MDA7XG5sZXQgaXNWaXNpYmxlICAgPSBmYWxzZTtcbmxldCB3cmFwRWwgICAgICA9IG51bGw7XG5sZXQgYWxsRGVzYyAgICAgPSBudWxsO1xubGV0IG9wZW5CdG4gICAgID0gbnVsbDtcbmxldCBjbG9zZUJ0biAgICA9IG51bGw7XG5sZXQgdnBXaWR0aCAgICAgPSBudWxsO1xuXG5leHBvcnQgZnVuY3Rpb24gaW5pdGlhbGl6ZSgpIHtcbiAgc2VsZWN0Tm9kZXMoKTtcbiAgYWRkTGlzdGVuZXJzKCk7XG4gIGJldHRlclJlc2l6ZSgpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gc2VsZWN0Tm9kZXMoKSB7XG4gIG9wZW5CdG4gID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmpzLWhlYWRlcl9fb3Blbi1uYXYnKTtcbiAgY2xvc2VCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuanMtaGVhZGVyX19jbG9zZS1uYXYnKTtcbiAgd3JhcEVsICAgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuanMtaGVhZGVyX19uYXYtd3JhcCcpO1xuICBhbGxEZXNjICA9IHdyYXBFbC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnKicpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gYWRkTGlzdGVuZXJzKCkge1xuICBvcGVuQnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgdG9nZ2xlTmF2LCBmYWxzZSk7XG4gIGNsb3NlQnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgdG9nZ2xlTmF2LCBmYWxzZSk7XG4gIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ3RvdWNoZW5kJywgZGV0ZXJtaW5lRXZlbnRMb2MsIGZhbHNlKTtcbiAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBkZXRlcm1pbmVFdmVudExvYywgZmFsc2UpO1xuICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdrZXl1cCcsIGhhbmRsZUtleVByZXNzZXMsIGZhbHNlKTtcbiAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Jlc2l6ZVZpYVJBRicsIGhhbmRsZVJlc2l6ZSwgZmFsc2UpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gYmV0dGVyUmVzaXplKCkge1xuICB2YXIgcnVubmluZyA9IGZhbHNlO1xuICBmdW5jdGlvbiBkb0l0VmlhUkFGKCkge1xuICAgIGlmIChydW5uaW5nKSB7cmV0dXJuO31cbiAgICBydW5uaW5nID0gdHJ1ZTtcbiAgICByZXF1ZXN0QW5pbWF0aW9uRnJhbWUoZnVuY3Rpb24oKSB7XG4gICAgICB3aW5kb3cuZGlzcGF0Y2hFdmVudChuZXcgQ3VzdG9tRXZlbnQoJ3Jlc2l6ZVZpYVJBRicpKTtcbiAgICAgIHJ1bm5pbmcgPSBmYWxzZTtcbiAgICB9KTtcbiAgfVxuICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigncmVzaXplJywgZG9JdFZpYVJBRik7XG59XG5cbmV4cG9ydCBmdW5jdGlvbiBoYW5kbGVSZXNpemUoKSB7XG4gIHZwV2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcbiAgaWYgKCh2cFdpZHRoID49IHN3YXBXaWR0aCkgJiYgaXNWaXNpYmxlKSB7XG4gICAgdG9nZ2xlTmF2KGV2ZW50KTtcbiAgfVxufVxuXG5leHBvcnQgZnVuY3Rpb24gZGV0ZXJtaW5lRXZlbnRMb2MoZXZlbnQpIHtcbiAgaWYgKGlzVmlzaWJsZSkge1xuICAgIGlmIChldmVudC50YXJnZXQgPT09IHdyYXBFbCkge1xuICAgICAgcmV0dXJuO1xuICAgIH0gZWxzZSB7XG4gICAgICBmb3IgKHZhciBpID0gMDsgaSA8IGFsbERlc2MubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgaWYgKGV2ZW50LnRhcmdldCA9PT0gYWxsRGVzY1tpXSkge1xuICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgICB0b2dnbGVOYXYoZXZlbnQpO1xuICB9IGVsc2Uge1xuICAgIHJldHVybjtcbiAgfVxufVxuXG5leHBvcnQgZnVuY3Rpb24gaGFuZGxlS2V5UHJlc3NlcyhldmVudCkge1xuICBpZiAoaXNWaXNpYmxlICYmIChldmVudC5rZXlDb2RlID09PSAyNykpIHtcbiAgICB0b2dnbGVOYXYoZXZlbnQpO1xuICB9XG59XG5cbmV4cG9ydCBmdW5jdGlvbiB0b2dnbGVOYXYoZXZlbnQpIHtcbiAgd3JhcEVsLmNsYXNzTGlzdC50b2dnbGUoJ2lzLXZpc2libGUnKTtcbiAgaXNWaXNpYmxlID0gIWlzVmlzaWJsZTtcbiAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG59XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9fanMvbmF2LmpzIl0sInNvdXJjZVJvb3QiOiIifQ==