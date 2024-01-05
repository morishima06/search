/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/swiper/double_config.js ***!
  \**********************************************/
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4
});
var swiper2 = new Swiper(".mySwiper2", {
  thumbs: {
    swiper: swiper
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});
/******/ })()
;