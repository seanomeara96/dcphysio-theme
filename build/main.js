/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ (() => {

eval("function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }\n\nfunction _nonIterableSpread() { throw new TypeError(\"Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); }\n\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\n\nfunction _iterableToArray(iter) { if (typeof Symbol !== \"undefined\" && iter[Symbol.iterator] != null || iter[\"@@iterator\"] != null) return Array.from(iter); }\n\nfunction _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }\n\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }\n\nfunction addNavToggle() {\n  var body = document.querySelector(\"body\");\n  var navSctn = document.querySelector(\".nav\");\n  var navBtn = document.querySelector(\".nav__button\");\n  var navLinks = document.querySelector(\".nav__lower\");\n  navBtn.addEventListener(\"click\", function () {\n    var openClass = \"nav__lower--is-open\";\n    navLinks.classList.toggle(openClass);\n    navSctn.classList.toggle(\"nav--no-overflow\");\n    _toConsumableArray(navLinks.classList).includes(openClass) ? navBtn.innerHTML = \"&times;\" : navBtn.innerHTML = \"&equiv;\";\n    body.classList.toggle(\"no-scroll\");\n  });\n}\n\nfunction startTestimonialSlides() {\n  var slideSelector = \".carousel__slide\";\n  var isVisibleClassName = \"carousel__slide--is-visible\";\n  var testimonialSection = document.querySelector(\"#testimonials\");\n  var slides = testimonialSection.querySelectorAll(slideSelector);\n\n  function nextSlide() {\n    var count = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;\n    slides.forEach(function (slide) {\n      return slide.classList.remove(isVisibleClassName);\n    }); //const previousSlide = count > 0 ? (count - 1) : (slides.length - 1);\n\n    var nextSlideIdx = count < slides.length - 1 ? count + 1 : 0;\n    slides[count].classList.add(isVisibleClassName);\n    setTimeout(function () {\n      return nextSlide(nextSlideIdx);\n    }, 10000);\n  }\n\n  nextSlide();\n}\n\nfunction showContent(e, content) {\n  return e.target.innerHTML = content;\n}\n\nfunction truncateReviews() {\n  var reviews = document.querySelectorAll(\"#reviews-specialties .review\");\n  console.log(reviews);\n  reviews.forEach(function (review) {\n    var reviewElem = review.querySelector(\".review__content\");\n    var content = reviewElem.innerHTML;\n    var updatedContent = content.substring(0, 300) + \"...<strong class=\\\"clickable\\\">Read More</strong>\";\n    reviewElem.innerHTML = updatedContent;\n    reviewElem.querySelector(\"strong\").addEventListener(\"click\", function () {\n      reviewElem.innerHTML = content;\n    });\n  });\n}\n\nfunction applyDisplayStateToggles() {\n  function toggleDisplayState(element) {\n    element.classList.toggle(\"details__body--is-open\");\n  }\n\n  document.querySelectorAll(\".details\").forEach(function (item) {\n    return item.querySelector(\".details__summary\").addEventListener(\"click\", function () {\n      return toggleDisplayState(item.querySelector(\".details__body\"));\n    });\n  });\n}\n\naddNavToggle();\nstartTestimonialSlides();\ntruncateReviews();\napplyDisplayStateToggles();\n\n//# sourceURL=webpack://dcphysio-theme/./src/index.js?");

/***/ }),

/***/ "./css/index.css":
/*!***********************!*\
  !*** ./css/index.css ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://dcphysio-theme/./css/index.css?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./src/index.js"](0, {}, __webpack_require__);
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./css/index.css"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;