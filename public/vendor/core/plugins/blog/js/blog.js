/******/ (() => { // webpackBootstrap
/*!***********************************************************!*\
  !*** ./platform/plugins/blog/resources/assets/js/blog.js ***!
  \***********************************************************/
$(document).ready(function () {
  'use strict';

  BDashboard.loadWidget($('#widget_posts_recent').find('.widget-content'), route('posts.widget.recent-posts'));
});
/******/ })()
;