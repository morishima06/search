/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/header/header.js ***!
  \***************************************/
hamburger = document.querySelector('.hamburger');
hamburger_contents = document.querySelector('.hamburger_contents');

hamburger.onclick = function () {
  hamburger_contents.classList.add('-translate-x-full');
};

drop_button = document.querySelector('.drop_button');

drop_button.onclick = function () {
  hamburger_contents.classList.remove('-translate-x-full');
};

var searchContent = document.querySelector(".search-content");
var searchContent_child = document.getElementById("search-content-child");
var searchHeader = document.querySelector(".search-header");
searchHeader.addEventListener('click', function () {
  var searchMaxHeight = searchContent.style.maxHeight;

  if (searchMaxHeight == "0px" || searchMaxHeight.length == 0) {
    searchContent.style.maxHeight = "".concat(searchContent.scrollHeight + 32, "px");
    searchContent_child.focus();
  } else {
    searchContent.style.maxHeight = "0px";
    searchHeader.blur();
  }
});
/******/ })()
;