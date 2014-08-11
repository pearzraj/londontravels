(function(e,t,n){"use strict";e.fn.backstretch=function(r,s){if(r===n||r.length===0){e.error("No images were supplied for Backstretch")}if(e(t).scrollTop()===0){t.scrollTo(0,0)}return this.each(function(){var t=e(this),n=t.data("backstretch");if(n){if(typeof r=="string"&&typeof n[r]=="function"){n[r](s);return}s=e.extend(n.options,s);n.destroy(true)}n=new i(this,r,s);t.data("backstretch",n)})};e.backstretch=function(t,n){return e("body").backstretch(t,n).data("backstretch")};e.expr[":"].backstretch=function(t){return e(t).data("backstretch")!==n};e.fn.backstretch.defaults={centeredX:true,centeredY:true,duration:5e3,fade:0};var r={wrap:{left:0,top:0,overflow:"hidden",margin:0,padding:0,height:"100%",width:"100%",zIndex:-999999},img:{position:"absolute",display:"none",margin:0,padding:0,border:"none",width:"auto",height:"auto",maxHeight:"none",maxWidth:"none",zIndex:-999999}};var i=function(n,i,o){this.options=e.extend({},e.fn.backstretch.defaults,o||{});this.images=e.isArray(i)?i:[i];e.each(this.images,function(){e("<img />")[0].src=this});this.isBody=n===document.body;this.$container=e(n);this.$root=this.isBody?s?e(t):e(document):this.$container;var u=this.$container.children(".backstretch").first();this.$wrap=u.length?u:e('<div class="backstretch"></div>').css(r.wrap).appendTo(this.$container);if(!this.isBody){var a=this.$container.css("position"),f=this.$container.css("zIndex");this.$container.css({position:a==="static"?"relative":a,zIndex:f==="auto"?0:f,background:"none"});this.$wrap.css({zIndex:-999998})}this.$wrap.css({position:this.isBody&&s?"fixed":"absolute"});this.index=0;this.show(this.index);e(t).on("resize.backstretch",e.proxy(this.resize,this)).on("orientationchange.backstretch",e.proxy(function(){if(this.isBody&&t.pageYOffset===0){t.scrollTo(0,1);this.resize()}},this))};i.prototype={resize:function(){try{var e={left:0,top:0},n=this.isBody?this.$root.width():this.$root.innerWidth(),r=n,i=this.isBody?t.innerHeight?t.innerHeight:this.$root.height():this.$root.innerHeight(),s=r/this.$img.data("ratio"),o;if(s>=i){o=(s-i)/2;if(this.options.centeredY){e.top="-"+o+"px"}}else{s=i;r=s*this.$img.data("ratio");o=(r-n)/2;if(this.options.centeredX){e.left="-"+o+"px"}}this.$wrap.css({width:n,height:i}).find("img:not(.deleteable)").css({width:r,height:s}).css(e)}catch(u){}return this},show:function(t){if(Math.abs(t)>this.images.length-1){return}var n=this,i=n.$wrap.find("img").addClass("deleteable"),s={relatedTarget:n.$container[0]};n.$container.trigger(e.Event("backstretch.before",s),[n,t]);this.index=t;clearInterval(n.interval);n.$img=e("<img />").css(r.img).bind("load",function(r){var o=this.width||e(r.target).width(),u=this.height||e(r.target).height();e(this).data("ratio",o/u);e(this).fadeIn(n.options.speed||n.options.fade,function(){i.remove();if(!n.paused){n.cycle()}e(["after","show"]).each(function(){n.$container.trigger(e.Event("backstretch."+this,s),[n,t])})});n.resize()}).appendTo(n.$wrap);n.$img.attr("src",n.images[t]);return n},next:function(){return this.show(this.index<this.images.length-1?this.index+1:0)},prev:function(){return this.show(this.index===0?this.images.length-1:this.index-1)},pause:function(){this.paused=true;return this},resume:function(){this.paused=false;this.next();return this},cycle:function(){if(this.images.length>1){clearInterval(this.interval);this.interval=setInterval(e.proxy(function(){if(!this.paused){this.next()}},this),this.options.duration)}return this},destroy:function(n){e(t).off("resize.backstretch orientationchange.backstretch");clearInterval(this.interval);if(!n){this.$wrap.remove()}this.$container.removeData("backstretch")}};var s=function(){var e=navigator.userAgent,n=navigator.platform,r=e.match(/AppleWebKit\/([0-9]+)/),i=!!r&&r[1],s=e.match(/Fennec\/([0-9]+)/),o=!!s&&s[1],u=e.match(/Opera Mobi\/([0-9]+)/),a=!!u&&u[1],f=e.match(/MSIE ([0-9]+)/),l=!!f&&f[1];return!((n.indexOf("iPhone")>-1||n.indexOf("iPad")>-1||n.indexOf("iPod")>-1)&&i&&i<534||t.operamini&&{}.toString.call(t.operamini)==="[object OperaMini]"||u&&a<7458||e.indexOf("Android")>-1&&i&&i<533||o&&o<6||"palmGetResource"in t&&i&&i<534||e.indexOf("MeeGo")>-1&&e.indexOf("NokiaBrowser/8.5.0")>-1||l&&l<=6)}()})(jQuery,window)


/*! custom slider */
$.backstretch([
      "images/bg_1.jpg",
      "images/bannerHome.jpg",
      "images/bg_4.jpg"
      ], {
        fade: 750,
        duration: 4000
    });