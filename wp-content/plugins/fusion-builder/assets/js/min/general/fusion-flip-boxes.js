!function(t){"use strict";t.fn.fusionCalcFlipBoxesHeight=function(){var i,o,s=t(this),n=s.find(".flip-box-front"),e=s.find(".flip-box-back");s.css("min-height",""),n.css("position",""),e.css("bottom",""),i=n.outerHeight(),o=e.outerHeight(),setTimeout(function(){o<i?s.css("min-height",i):s.css("min-height",o),n.css("position","absolute"),e.css("bottom","0")},100)},t.fn.fusionCalcFlipBoxesEqualHeights=function(){var n,i=t(this),e=[];i.find(".flip-box-inner-wrapper").each(function(){var i=t(this),o=i.find(".flip-box-front"),s=i.find(".flip-box-back");i.css("min-height",""),o.css("position",""),s.css("bottom",""),e.push(Math.max(o.outerHeight(),s.outerHeight()))}),n=Math.max.apply(null,e),i.find(".flip-box-inner-wrapper").each(function(){var i=t(this),o=i.find(".flip-box-front"),s=i.find(".flip-box-back");i.css("min-height",n),o.css("position","absolute"),s.css("bottom","0")})}}(jQuery),jQuery(window).load(function(){jQuery(".fusion-flip-boxes.equal-heights").each(function(){jQuery(this).fusionCalcFlipBoxesEqualHeights()}),jQuery(".fusion-flip-boxes").not(".equal-heights").find(".flip-box-inner-wrapper").each(function(){jQuery(this).fusionCalcFlipBoxesHeight()}),jQuery(window).resize(function(){jQuery(".fusion-flip-boxes.equal-heights").each(function(){jQuery(this).fusionCalcFlipBoxesEqualHeights()}),jQuery(".fusion-flip-boxes").not(".equal-heights").find(".flip-box-inner-wrapper").each(function(){jQuery(this).fusionCalcFlipBoxesHeight()})})});