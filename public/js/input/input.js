/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**************************************!*\
  !*** ./resources/js/input/submit.js ***!
  \**************************************/
var selectForm = document.querySelector('.selectForm');
var selectors = document.querySelectorAll('.selector');
selectors.forEach(function (selector) {
  selector.addEventListener('change', function () {
    selectForm.submit();
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/input/disabled.js ***!
  \****************************************/
var forms = document.querySelectorAll('form');

var _loop = function _loop(i) {
  forms[i].addEventListener('submit', function () {
    //formのinput要素を処理
    Array.from(forms[i]).forEach(function (input) {
      //値が空の場合
      if (input.value === '') {
        //disabledを有効にする
        input.disabled = true;
      }
    });
  }, false);
};

for (var i = 0; i < forms.length; i++) {
  _loop(i);
}
})();

/******/ })()
;