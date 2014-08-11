/*!
* Metro JS for jQuery
* http://drewgreenwell.com/ 
* For details and usage info see: http://drewgreenwell.com/projects/metrojs

Copyright (C) 2013, Drew Greenwell

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
;(function ($) {
    // the metrojs object contains helper methods and theme settings
    $.fn.metrojs = {
        capabilities: null,
        checkCapabilities: function(stgs, recheck){
            if($.fn.metrojs.capabilities == null || (typeof(recheck) != "undefined" && recheck == true))
                $.fn.metrojs.capabilities = new $.fn.metrojs.MetroModernizr(stgs);
            return  $.fn.metrojs.capabilities;
        }
    };
    var metrojs = $.fn.metrojs;
jQuery.fn.metrojs.theme = {
    loadDefaultTheme: function (stgs) {
        if (typeof (stgs) === "undefined" || stgs == null) {
            stgs = jQuery.fn.metrojs.theme.defaults;
        } else {
            var stg = jQuery.fn.metrojs.theme.defaults;
            jQuery.extend(stg, stgs);
            stgs = stg;
        }
        //get theme from local storage or set base theme
        var hasLocalStorage = typeof (window.localStorage) !== "undefined";
        var hasKeyAndValue = function (key) {
            return (typeof (window.localStorage[key]) !== "undefined" && window.localStorage[key] != null);
        };
        if (hasLocalStorage && (!hasKeyAndValue("Metro.JS.AccentColor") || !hasKeyAndValue("Metro.JS.BaseAccentColor"))) {
            //base theme
            window.localStorage["Metro.JS.AccentColor"] = stgs.accentColor;
            window.localStorage["Metro.JS.BaseAccentColor"] = stgs.baseTheme;
            jQuery(stgs.accentCssSelector).addClass(stgs.accentColor).data("accent", stgs.accentColor);
            jQuery(stgs.baseThemeCssSelector).addClass(stgs.baseTheme);
            if (typeof (stgs.loaded) === "function")
                stgs.loaded(stgs.baseTheme, stgs.accentColor);
            //preload light theme image
            if (typeof (stgs.preloadAltBaseTheme) !== "undefined" && stgs.preloadAltBaseTheme)
                jQuery([(stgs.baseTheme == 'dark') ? stgs.metroLightUrl : stgs.metroDarkUrl]).metrojs.preloadImages(function () { });
        } else {
            if (hasLocalStorage) {
                stgs.accentColor = window.localStorage["Metro.JS.AccentColor"];
                stgs.baseTheme = window.localStorage["Metro.JS.BaseAccentColor"];
                jQuery(stgs.accentCssSelector).addClass(stgs.accentColor).data("accent", stgs.accentColor);
                jQuery(stgs.baseThemeCssSelector).addClass(stgs.baseTheme);
                if (typeof (stgs.loaded) === "function")
                    stgs.loaded(stgs.baseTheme, stgs.accentColor);
            } else {
                jQuery(stgs.accentCssSelector).addClass(stgs.accentColor).data("accent", stgs.accentColor);
                jQuery(stgs.baseThemeCssSelector).addClass(stgs.baseTheme);
                if (typeof (stgs.loaded) === "function")
                    stgs.loaded(stgs.baseTheme, stgs.accentColor);
                //preload light theme image
                if (typeof (stgs.preloadAltBaseTheme) !== "undefined" && stgs.preloadAltBaseTheme)
                    jQuery([(stgs.baseTheme == 'dark') ? stgs.metroLightUrl : stgs.metroDarkUrl]).metrojs.preloadImages(function () { });
            }
        }        
    },
    applyTheme: function (tColor, aColor, stgs) {
        if (typeof (stgs) === "undefined" || stgs == null) {
            stgs = jQuery.fn.metrojs.theme.defaults;
        } else {
            var stg = jQuery.fn.metrojs.theme.defaults;
            stgs = jQuery.extend({}, stg, stgs);
        }

        if (typeof (tColor) !== "undefined" && tColor != null) {
            if (typeof (window.localStorage) !== "undefined") {
                window.localStorage["Metro.JS.BaseAccentColor"] = tColor;
            }
            var $theme = jQuery(stgs.baseThemeCssSelector);
            if ($theme.length > 0) {
                if (tColor == "dark")
                    $theme.addClass("dark").removeClass("light");
                else if (tColor == "light")
                    $theme.addClass("light").removeClass("dark");
            }
        }
        if (typeof (aColor) !== "undefined" && aColor != null) {
            if (typeof (window.localStorage) !== "undefined") {
                window.localStorage["Metro.JS.AccentColor"] = aColor;
            }
            var $accent = jQuery(stgs.accentCssSelector);
            if ($accent.length > 0) {
                var themeset = false;
                $accent.each(function () {
                    jQuery(this).addClass(aColor);
                    var dAccent = jQuery(this).data("accent");
                    if (dAccent != aColor) {
                        var cleanClass = jQuery(this).attr("class").replace(dAccent, "");
                        cleanClass = cleanClass.replace(/(\s)+/, ' ');
                        jQuery(this).attr("class", cleanClass);
                        jQuery(this).data("accent", aColor);
                        themeset = true;
                    }
                });
                if (themeset && typeof (stgs.accentPicked) === "function")
                    stgs.accentPicked(aColor);
            }
        }
    },
    appendAccentColors: function (stgs) {
        if (typeof (stgs) === "undefined" || stgs == null) {
            stgs = jQuery.fn.metrojs.theme.defaults;
        } else {
            var stg = jQuery.fn.metrojs.theme.defaults;
            stgs = jQuery.extend({}, stg, stgs);
        }
        var themeList = "";
        var themes = stgs.accentColors;
        var template = stgs.accentListTemplate;
        for (var i = 0; i < themes.length; i++) {
            themeList += template.replace(/\{0\}/g, themes[i]);
        }
        $(themeList).appendTo(stgs.accentListContainer);
    },
    appendBaseThemes: function (stgs) {
        if (typeof (stgs) === "undefined" || stgs == null) {
            stgs = jQuery.fn.metrojs.theme.defaults;
        } else {
            var stg = jQuery.fn.metrojs.theme.defaults;
            stgs = jQuery.extend({}, stg, stgs);
        }
        var themeList = "",
            themes = stgs.baseThemes,
            template = stgs.baseThemeListTemplate;
        for (var i = 0; i < themes.length; i++) {
            themeList += template.replace(/\{0\}/g, themes[i]);
        }
        $(themeList).appendTo(stgs.baseThemeListContainer);
    },
    // default options for theme
    defaults: {
        baseThemeCssSelector: 'body',                           // selector to place dark or light class after load or selection
        accentCssSelector: '.tiles',                            // selector to place accent color class after load or selection
        accentColor: 'blue',                                    // the default accent color. options are blue, brown, green, lime, magenta, mango, pink, purple, red, teal
        baseTheme: 'dark',                                      // the default theme color. options are dark, light
        accentColors: [
             'amber', 'blue', 'brown', 'cobalt', 'crimson', 'cyan',
             'magenta', 'lime', 'indigo', 'green', 'emerald',
             'mango', 'mauve', 'olive', 'orange', 'pink', 'red',
             'sienna', 'steel', 'teal', 'violet', 'yellow'
        ],
        baseThemes: [
            'light',
            'dark'
        ],
        accentListTemplate: "<li><a href='javascript:;' title='{0}' class='accent {0}'></a></li>", // template to generate accent options
        accentListContainer: "ul.theme-options,.theme-options>ul",                   // selector of container to append accents
        baseThemeListTemplate: "<li><a href='javascript:;' title='{0}' class='accent {0}'></a></li>", // template to generate accent options
        baseThemeListContainer: "ul.base-theme-options,.base-theme-options>ul"                    // selector of container to append accents
    }
};

/* Preload Images */
// Usage: jQuery(['img1.jpg', { src: 'img2.jpg' }]).metrojs.preloadImages(function(){ ... });
// Callback function gets called after all images are preloaded
$.fn.metrojs.preloadImages = function (callback) {
        var checklist = $(this).toArray();
        var $img = $("<img style='display:none;' />").appendTo("body");
        $(this).each(function () {
                var src = this;
                if (typeof(this) == "object")
                        src = this.src;
                $img.attr({ src: src }).load(function() {
                        for (var i = 0; i < checklist.length; i++) {
                                if (checklist[i] == element) {
                                        checklist.splice(i, 1);
                                }
                        }
                        if (checklist.length == 0) {
                                callback();
                        }
                });
               
        });
    $img.remove();
};
// object used for compatibility checks
$.fn.metrojs.MetroModernizr = function (stgs) {
    if(typeof(stgs) === "undefined") {
                stgs = { useHardwareAccel: true, useModernizr: typeof(window.Modernizr) !== "undefined" };
        }
    this.isOldJQuery =  /^1\.[0123]/.test($.fn.jquery),
    this.isOldAndroid = (function(){
        try{
            var ua = navigator.userAgent;        
            if( ua.indexOf("Android") >= 0 )
            {
                var androidversion = parseFloat(ua.slice(ua.indexOf("Android")+8));
                if (androidversion < 2.3)
                    return true;
            }
        }catch(err){ $.error(err); }
        return false;
    })();
    this.canTransform = false;
    this.canTransition = false;
    this.canTransform3d = false;
    this.canAnimate = false;
    this.canTouch = false;
    this.canFlip3d = stgs.useHardwareAccel;
    if (stgs.useHardwareAccel == true) {
        if (stgs.useModernizr == false) {
            //determine if the browser supports the neccessary accelerated features
            if (typeof (window.MetroModernizr) !== "undefined") {
                this.canTransform = window.MetroModernizr.canTransform;
                this.canTransition = window.MetroModernizr.canTransition;
                this.canTransform3d = window.MetroModernizr.canTransform3d;
                this.canAnimate = window.MetroModernizr.canAnimate;
                this.canTouch = window.MetroModernizr.canTouch;
            } else {
                window.MetroModernizr = {};
                /***** check for browser capabilities credit: modernizr-1.7 http://modernizr.com/ *****/
                var mod = 'metromodernizr';
                var docElement = document.documentElement;
                var docHead = document.head || document.getElementsByTagName('head')[0];
                var modElem = document.createElement(mod);
                var m_style = modElem.style;
                var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
                var domPrefixes = 'Webkit Moz O ms Khtml'.split(' ');
                var test_props = function (props, callback) {
                    for (var i in props) {
                        if (m_style[props[i]] !== undefined && (!callback || callback(props[i], modElem))) {
                            return true;
                        }
                    }
                };
                var test_props_all = function (prop, callback) {
                    var uc_prop = prop.charAt(0).toUpperCase() + prop.substr(1),
                    props = (prop + ' ' + domPrefixes.join(uc_prop + ' ') + uc_prop).split(' ');
                    return !!test_props(props, callback);
                };
                var test_3d = function () {
                    var ret = !!test_props(['perspectiveProperty', 'WebkitPerspective', 'MozPerspective', 'OPerspective', 'msPerspective']);
                    if (ret && 'webkitPerspective' in docElement.style) {
                        // Webkit allows this media query to succeed only if the feature is enabled.
                        // '@media (transform-3d),(-o-transform-3d),(-moz-transform-3d),(-ms-transform-3d),(-webkit-transform-3d),(modernizr){ ... }'
                        ret = testMediaQuery(['@media (',prefixes.join('transform-3d),('),mod,')','{#metromodernizr{left:9px;position:absolute;height:3px;}}'].join(''), function(div){
                            return div.offsetHeight === 3 && div.offsetLeft === 9;
                        });
                    }
                    return ret;
                };
                var testMediaQuery = function (mq, predicate) {
                    var st = document.createElement('style'),
                        div = document.createElement('div'),
                        ret;
                    st.textContent = mq;
                    docHead.appendChild(st);
                    div.id = mod;
                    docElement.appendChild(div);
                    ret = predicate(div);
                    st.parentNode.removeChild(st);
                    div.parentNode.removeChild(div);
                    return !!ret;
                };
                var test_touch = function() {
                    return canTouch = ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch ||
                        (typeof(window.navigator.msMaxTouchPoints) !== "undefined" && window.navigator.msMaxTouchPoints > 0) ||
                        testMediaQuery(['@media (',prefixes.join('touch-enabled),('),mod,')','{#metromodernizr{top:9px;position:absolute}}'].join(''), function(div){
                            return div.offsetTop === 9;
                        });
                };
                this.canTransform = !!test_props(['transformProperty', 'WebkitTransform', 'MozTransform', 'OTransform', 'msTransform']);
                this.canTransition = test_props_all('transitionProperty');
                this.canTransform3d = test_3d();
                this.canAnimate = test_props_all('animationName');
                this.canTouch = test_touch();
                window.MetroModernizr.canTransform = this.canTransform;
                window.MetroModernizr.canTransition = this.canTransition;
                window.MetroModernizr.canTransform3d = this.canTransform3d;
                window.MetroModernizr.canAnimate = this.canAnimate;
                window.MetroModernizr.canTouch = this.canTouch;
                docElement = null;
                docHead = null;
                modElem = null;
                m_style = null;
            }
        } else {
            this.canTransform = $("html").hasClass("csstransforms");
            this.canTransition = $("html").hasClass("csstransitions");
            this.canTransform3d = $("html").hasClass("csstransforms3d");
            this.canAnimate = $("html").hasClass("cssanimations");
            this.canTouch = $("html").hasClass("touch") || (typeof(window.navigator.msMaxTouchPoints) !== "undefined" && window.navigator.msMaxTouchPoints > 0);
        }
    }
    this.canFlip3d = this.canFlip3d && this.canAnimate && this.canTransform && this.canTransform3d;
};

})(jQuery);
