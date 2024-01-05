/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/js/accordion/accordion.js ***!
  \*********************************************/
var accordionHeader = document.querySelectorAll(".accordion-header");
accordionHeader.forEach(function (header) {
  header.addEventListener("click", function () {
    var accordionContent = header.parentElement.querySelector(".accordion-content");
    var accordionMaxHeight = accordionContent.style.maxHeight; // Condition handling

    if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
      accordionContent.style.maxHeight = "".concat(accordionContent.scrollHeight + 32, "px");
    } else {
      accordionContent.style.maxHeight = "0px";
    }
  });
});
/******/ })()
;