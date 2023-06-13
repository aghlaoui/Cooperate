(function(){var __webpack_modules__=({"jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
(function(module){"use strict";module.exports=jQuery})});var __webpack_module_cache__={};function __webpack_require__(moduleId){var cachedModule=__webpack_module_cache__[moduleId];if(cachedModule!==undefined){return cachedModule.exports}var module=__webpack_module_cache__[moduleId]={exports:{}};__webpack_modules__[moduleId](module,module.exports,__webpack_require__);return module.exports}var __webpack_exports__={};!function(){
/*!*****************************************!*\
  !*** ./assets/splited-code/js/about.js ***!
  \*****************************************/
var jQuery=__webpack_require__(/*! jquery */"jquery");(function($){"use strict";var popupvideos=$('.popup-videos');if(popupvideos.length){$('.popup-videos').magnificPopup({disableOn:10,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:!1,fixedContentPos:!1})}
var navMain=$(".navbar-collapse");navMain.on("click","a:not([data-toggle])",null,function(){navMain.collapse('hide')});jQuery(document).ready(function($){$(".rs-animated-heading .cd-words-wrapper p:first-child").addClass("is-visible")});win.on('load',function(){$('.card:first-child').addClass("current")});$('.card-header').on('click',function(e){e.preventDefault();let $this=$(this);if($this.hasClass('current')){$this.parent().parent().removeClass('current')}else{$this.parent().parent().find('.card').removeClass('current');$this.parent().toggleClass('current')}})})(jQuery)}()})()