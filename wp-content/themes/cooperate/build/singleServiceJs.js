!function(){var e={311:function(r){"use strict";r.exports=jQuery}},n={};function s(r){var t=n[r];return void 0!==t||(t=n[r]={exports:{}},e[r](t,t.exports,s)),t.exports}!function(t){"use strict";win.on("load",function(){t(".card:first-child").addClass("current")}),t(".card-header").on("click",function(r){r.preventDefault();r=t(this);r.hasClass("current")?r.parent().parent().removeClass("current"):(r.parent().parent().find(".card").removeClass("current"),r.parent().toggleClass("current"))})}(s(311))}();