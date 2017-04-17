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
/******/ 	__webpack_require__.p = "";
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgN2JiNjQ3OGYzZGZkODc3ZDk5NjUiLCJ3ZWJwYWNrOi8vLy4vX2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9fc2Nzcy9hcHAuc2NzcyIsIndlYnBhY2s6Ly8vLi9fanMvbmF2LmpzIl0sIm5hbWVzIjpbInN3YXBXaWR0aCIsImlzVmlzaWJsZSIsIndyYXBFbCIsImFsbERlc2MiLCJvcGVuQnRuIiwiY2xvc2VCdG4iLCJ2cFdpZHRoIiwiaW5pdGlhbGl6ZSIsInNlbGVjdE5vZGVzIiwiYWRkTGlzdGVuZXJzIiwiYmV0dGVyUmVzaXplIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlTmF2IiwiZGV0ZXJtaW5lRXZlbnRMb2MiLCJoYW5kbGVLZXlQcmVzc2VzIiwid2luZG93IiwiaGFuZGxlUmVzaXplIiwicnVubmluZyIsImRvSXRWaWFSQUYiLCJyZXF1ZXN0QW5pbWF0aW9uRnJhbWUiLCJkaXNwYXRjaEV2ZW50IiwiQ3VzdG9tRXZlbnQiLCJpbm5lcldpZHRoIiwiZXZlbnQiLCJ0YXJnZXQiLCJpIiwibGVuZ3RoIiwia2V5Q29kZSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsInN0b3BQcm9wYWdhdGlvbiJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBLG1EQUEyQyxjQUFjOztBQUV6RDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGFBQUs7QUFDTDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLG1DQUEyQiwwQkFBMEIsRUFBRTtBQUN2RCx5Q0FBaUMsZUFBZTtBQUNoRDtB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Y0FBWSxDQUFDQSxTQUFiO0FBQ0F5QixRQUFNTyxlQUFOO0FBQ0QsQyIsImZpbGUiOiJodG1sL2xpYi9qcy9hcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSlcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcblxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gaWRlbnRpdHkgZnVuY3Rpb24gZm9yIGNhbGxpbmcgaGFybW9ueSBpbXBvcnRzIHdpdGggdGhlIGNvcnJlY3QgY29udGV4dFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5pID0gZnVuY3Rpb24odmFsdWUpIHsgcmV0dXJuIHZhbHVlOyB9O1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAzKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCA3YmI2NDc4ZjNkZmQ4NzdkOTk2NSIsIi8vIEltcG9ydCBvdGhlciBKUyBmaWxlcyBpbnRvIHRoaXMgb25lLlxuLy8gaHR0cDovL2V4cGxvcmluZ2pzLmNvbS9lczYvY2hfbW9kdWxlcy5odG1sXG4vLyBodHRwczovL2RldmVsb3Blci5tb3ppbGxhLm9yZy9lbi1VUy9kb2NzL1dlYi9KYXZhU2NyaXB0L1JlZmVyZW5jZS9TdGF0ZW1lbnRzL2ltcG9ydFxuLy8gaHR0cHM6Ly9kZXZlbG9wZXIubW96aWxsYS5vcmcvZW4tVVMvZG9jcy9XZWIvSmF2YVNjcmlwdC9SZWZlcmVuY2UvU3RhdGVtZW50cy9leHBvcnRcblxuaW1wb3J0ICogYXMgbmF2IGZyb20gJy4vbmF2J1xuXG5uYXYuaW5pdGlhbGl6ZSgpO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vX2pzL2FwcC5qcyIsIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9fc2Nzcy9hcHAuc2Nzc1xuLy8gbW9kdWxlIGlkID0gMVxuLy8gbW9kdWxlIGNodW5rcyA9IDAiLCJjb25zdCBzd2FwV2lkdGggPSA2MDA7XG5sZXQgaXNWaXNpYmxlICAgPSBmYWxzZTtcbmxldCB3cmFwRWwgICAgICA9IG51bGw7XG5sZXQgYWxsRGVzYyAgICAgPSBudWxsO1xubGV0IG9wZW5CdG4gICAgID0gbnVsbDtcbmxldCBjbG9zZUJ0biAgICA9IG51bGw7XG5sZXQgdnBXaWR0aCAgICAgPSBudWxsO1xuXG5leHBvcnQgZnVuY3Rpb24gaW5pdGlhbGl6ZSgpIHtcbiAgc2VsZWN0Tm9kZXMoKTtcbiAgYWRkTGlzdGVuZXJzKCk7XG4gIGJldHRlclJlc2l6ZSgpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gc2VsZWN0Tm9kZXMoKSB7XG4gIG9wZW5CdG4gID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmpzLWhlYWRlcl9fb3Blbi1uYXYnKTtcbiAgY2xvc2VCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuanMtaGVhZGVyX19jbG9zZS1uYXYnKTtcbiAgd3JhcEVsICAgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuanMtaGVhZGVyX19uYXYtd3JhcCcpO1xuICBhbGxEZXNjICA9IHdyYXBFbC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnKicpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gYWRkTGlzdGVuZXJzKCkge1xuICBvcGVuQnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgdG9nZ2xlTmF2LCBmYWxzZSk7XG4gIGNsb3NlQnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgdG9nZ2xlTmF2LCBmYWxzZSk7XG4gIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ3RvdWNoZW5kJywgZGV0ZXJtaW5lRXZlbnRMb2MsIGZhbHNlKTtcbiAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBkZXRlcm1pbmVFdmVudExvYywgZmFsc2UpO1xuICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdrZXl1cCcsIGhhbmRsZUtleVByZXNzZXMsIGZhbHNlKTtcbiAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Jlc2l6ZVZpYVJBRicsIGhhbmRsZVJlc2l6ZSwgZmFsc2UpO1xufVxuXG5leHBvcnQgZnVuY3Rpb24gYmV0dGVyUmVzaXplKCkge1xuICB2YXIgcnVubmluZyA9IGZhbHNlO1xuICBmdW5jdGlvbiBkb0l0VmlhUkFGKCkge1xuICAgIGlmIChydW5uaW5nKSB7cmV0dXJuO31cbiAgICBydW5uaW5nID0gdHJ1ZTtcbiAgICByZXF1ZXN0QW5pbWF0aW9uRnJhbWUoZnVuY3Rpb24oKSB7XG4gICAgICB3aW5kb3cuZGlzcGF0Y2hFdmVudChuZXcgQ3VzdG9tRXZlbnQoJ3Jlc2l6ZVZpYVJBRicpKTtcbiAgICAgIHJ1bm5pbmcgPSBmYWxzZTtcbiAgICB9KTtcbiAgfVxuICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigncmVzaXplJywgZG9JdFZpYVJBRik7XG59XG5cbmV4cG9ydCBmdW5jdGlvbiBoYW5kbGVSZXNpemUoKSB7XG4gIHZwV2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcbiAgaWYgKCh2cFdpZHRoID49IHN3YXBXaWR0aCkgJiYgaXNWaXNpYmxlKSB7XG4gICAgdG9nZ2xlTmF2KGV2ZW50KTtcbiAgfVxufVxuXG5leHBvcnQgZnVuY3Rpb24gZGV0ZXJtaW5lRXZlbnRMb2MoZXZlbnQpIHtcbiAgaWYgKGlzVmlzaWJsZSkge1xuICAgIGlmIChldmVudC50YXJnZXQgPT09IHdyYXBFbCkge1xuICAgICAgcmV0dXJuO1xuICAgIH0gZWxzZSB7XG4gICAgICBmb3IgKHZhciBpID0gMDsgaSA8IGFsbERlc2MubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgaWYgKGV2ZW50LnRhcmdldCA9PT0gYWxsRGVzY1tpXSkge1xuICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgICB0b2dnbGVOYXYoZXZlbnQpO1xuICB9IGVsc2Uge1xuICAgIHJldHVybjtcbiAgfVxufVxuXG5leHBvcnQgZnVuY3Rpb24gaGFuZGxlS2V5UHJlc3NlcyhldmVudCkge1xuICBpZiAoaXNWaXNpYmxlICYmIChldmVudC5rZXlDb2RlID09PSAyNykpIHtcbiAgICB0b2dnbGVOYXYoZXZlbnQpO1xuICB9XG59XG5cbmV4cG9ydCBmdW5jdGlvbiB0b2dnbGVOYXYoZXZlbnQpIHtcbiAgd3JhcEVsLmNsYXNzTGlzdC50b2dnbGUoJ2lzLXZpc2libGUnKTtcbiAgaXNWaXNpYmxlID0gIWlzVmlzaWJsZTtcbiAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG59XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9fanMvbmF2LmpzIl0sInNvdXJjZVJvb3QiOiIifQ==