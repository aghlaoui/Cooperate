!function(){var e={311:function(t){"use strict";t.exports=jQuery}},r={};function o(t){var a=r[t];return void 0!==a||(a=r[t]={exports:{}},e[t](a,a.exports,o)),a.exports}var s,t;s=o(311),t=o(311),s(document).ready(function(){gsap.set("svg",{visibility:"visible"}),gsap.to("#headStripe",{y:.5,rotation:1,yoyo:!0,repeat:-1,ease:"sine.inOut",duration:1}),gsap.to("#spaceman",{y:.5,rotation:1,yoyo:!0,repeat:-1,ease:"sine.inOut",duration:1}),gsap.to("#craterSmall",{x:-3,yoyo:!0,repeat:-1,duration:1,ease:"sine.inOut"}),gsap.to("#craterBig",{x:3,yoyo:!0,repeat:-1,duration:1,ease:"sine.inOut"}),gsap.to("#planet",{rotation:-2,yoyo:!0,repeat:-1,duration:1,ease:"sine.inOut",transformOrigin:"50% 50%"}),gsap.to("#starsBig g",{rotation:"random(-30,30)",transformOrigin:"50% 50%",yoyo:!0,repeat:-1,ease:"sine.inOut"}),gsap.fromTo("#starsSmall g",{scale:0,transformOrigin:"50% 50%"},{scale:1,transformOrigin:"50% 50%",yoyo:!0,repeat:-1,stagger:.1}),gsap.to("#circlesSmall circle",{y:-4,yoyo:!0,duration:1,ease:"sine.inOut",repeat:-1}),gsap.to("#circlesBig circle",{y:-2,yoyo:!0,duration:1,ease:"sine.inOut",repeat:-1}),gsap.set("#glassShine",{x:-68}),gsap.to("#glassShine",{x:80,duration:2,rotation:-30,ease:"expo.inOut",transformOrigin:"50% 50%",repeat:-1,repeatDelay:8,delay:2}),s(".burger").click(function(t){var a=s(this),e=s("nav");"closed"===a.attr("data-state")?a.attr("data-state","open"):a.attr("data-state","closed"),"closed"===e.attr("data-state")?e.attr("data-state","open"):e.attr("data-state","closed")})})(t)}();