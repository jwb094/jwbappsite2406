/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./public/src/js/video_modal_app.js ***!
  \******************************************/
var btn = document.querySelector('.video_modal_btn');
var videoContainer = document.querySelector('.video-container');
var close = document.querySelector('.close');
btn.addEventListener('click', function () {
  videoContainer.classList.add('show');
});
close.addEventListener('click', function () {
  videoContainer.classList.remove('show');
});
/******/ })()
;