﻿// $('.topline').headBand({
// 		'background':'#008aff',
// 		'height':"3"
// 	});
(function($){$.fn.extend({headBand:function(option){var ViewH=$(window).height(),ScrollH=$('body')[0].scrollHeight,S_V=ScrollH-ViewH,getThis=this.prop("className")!==""?"."+this.prop("className"):this.prop("id")!==""?"#"+this.prop("id"):this.prop("nodeName");$(window).scroll(function(){var ViewH_s=$(this).height(),ScrollH_s=$('body')[0].scrollHeight,ScoT_s=$(this).scrollTop(),Band_w=100-(ScrollH_s-ViewH_s-ScoT_s)/S_V*100;defaultSetting={background:"green",height:3,width:Band_w+'%'};setting=$.extend(defaultSetting,option);$(getThis).css({"background":setting.background,'position':'fixed','top':'0','z-index':'99999',"height":setting.height+"px",'width':defaultSetting.width})});return this}})}(jQuery));