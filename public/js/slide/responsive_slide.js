/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/slide/responsive_slide.js ***!
  \************************************************/
slide_nav1 = document.querySelector('.slide_nav1');
slide_contents1 = document.querySelector('.slide_contents1');

slide_nav1.onclick = function () {
  slide_contents1.classList.add('-translate-x-full');
};

return_nav = document.querySelector('.return_nav');

return_nav.onclick = function () {
  slide_contents1.classList.remove('-translate-x-full');
};
/******/ })()
;