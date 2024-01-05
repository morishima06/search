/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/swiper/single_config.js ***!
  \**********************************************/
var swiper = new Swiper(".swiper", {
  // ナビボタンが必要なら追加
  slidesPerView: 2,
  breakpoints: {
    // 568px以上の場合
    568: {
      slidesPerView: 4
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});
/******/ })()
;