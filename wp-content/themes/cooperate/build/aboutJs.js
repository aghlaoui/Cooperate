!function(){var a={311:function(e){"use strict";e.exports=jQuery}},n={};function t(e){var r=n[e];return void 0!==r||(r=n[e]={exports:{}},a[e](r,r.exports,t)),r.exports}var s;(function(r){"use strict";r(".popup-videos").length&&r(".popup-videos").magnificPopup({disableOn:10,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1});var e=r(".navbar-collapse");e.on("click","a:not([data-toggle])",null,function(){e.collapse("hide")}),s(document).ready(function(e){e(".rs-animated-heading .cd-words-wrapper p:first-child").addClass("is-visible")}),win.on("load",function(){r(".card:first-child").addClass("current")}),r(".card-header").on("click",function(e){e.preventDefault();e=r(this);e.hasClass("current")?e.parent().parent().removeClass("current"):(e.parent().parent().find(".card").removeClass("current"),e.parent().toggleClass("current"))})})(s=t(311))}();