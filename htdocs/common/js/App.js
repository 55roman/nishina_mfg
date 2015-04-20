(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
},{}],2:[function(require,module,exports){
var APP, App, CST, Common, LayoutManager, jqueryEasing;

jqueryEasing = require("./../../bower_components/jquery.easing/js/jquery.easing.js");

CST = require("./Const");

Common = require("./Common");

LayoutManager = require("./LayoutManager");

App = (function() {
  function App() {
    this.COM = new Common.$();
    this.LM = new LayoutManager.$();
    $(document).ready((function(_this) {
      return function() {
        return _this.LM.resizeHandler();
      };
    })(this));
  }

  return App;

})();

APP = new App();



},{"./../../bower_components/jquery.easing/js/jquery.easing.js":1,"./Common":3,"./Const":4,"./LayoutManager":5}],3:[function(require,module,exports){
var Common,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

require("./../../bower_components/jquery.easing/js/jquery.easing.js");

Common = (function() {
  var Private, instance;

  function Common() {}

  instance = null;

  Common.$ = function() {
    return instance != null ? instance : instance = new Private();
  };

  Private = (function() {
    function Private(opt) {
      this.smoothScrollTo = __bind(this.smoothScrollTo, this);
      this.initSmoothScroll = __bind(this.initSmoothScroll, this);
      this.bgScrollHandler = __bind(this.bgScrollHandler, this);
      this.initBgScroll = __bind(this.initBgScroll, this);
      this.initMouseOver = __bind(this.initMouseOver, this);
      this.DEBUG = false;
      this.USER_AGENT = window.navigator.userAgent.toLowerCase();
      this.APP_VERSION = window.navigator.appVersion.toLowerCase();
      this.isLegacy = false;
      this.isTab = false;
      this.isSP = false;
      this.isPC = false;
      this.minStageWidth = 960;
      this.minStageHeight = 600;
      this.resizeFuncs = [];
      if (this.USER_AGENT.indexOf('opera') !== -1) {

      } else if (this.USER_AGENT.indexOf("msie") !== -1) {
        if (this.APP_VERSION.indexOf("msie 6.") !== -1) {
          this.isLegacy = true;
        } else if (this.APP_VERSION.indexOf("msie 7.") !== -1) {
          this.isLegacy = true;
        } else if (this.APP_VERSION.indexOf("msie 8.") !== -1) {
          this.isLegacy = true;
        }
      }
      if ((this.USER_AGENT.indexOf('android') > 0 && this.USER_AGENT.indexOf('mobile') === -1) || this.USER_AGENT.indexOf('ipad') > 0) {
        this.isTab = true;
      } else if ((this.USER_AGENT.indexOf('iphone') > 0 && this.USER_AGENT.indexOf('ipad') === -1) || this.USER_AGENT.indexOf('ipod') > 0 || (this.USER_AGENT.indexOf('android') > 0 && this.USER_AGENT.indexOf('mobile') > 0)) {
        this.isSP = true;
      } else {
        this.isPC = true;
      }
      this.initSmoothScroll();
      if (this.isPC) {
        this.initMouseOver();
      }
    }

    Private.prototype.initMouseOver = function() {
      var postfix;
      postfix = '_on';
      return $('.ro').not('[src*="' + postfix + '."]').each(function() {
        var img, src, src_on;
        img = $(this);
        src = img.attr('src');
        src_on = src.substr(0, src.lastIndexOf('.')) + postfix + src.substring(src.lastIndexOf('.'));
        $('<img>').attr('src', src_on);
        return img.hover((function(_this) {
          return function() {
            if (!img.hasClass("ro-disable")) {
              return img.attr('src', src_on);
            }
          };
        })(this), (function(_this) {
          return function() {
            if (!img.hasClass("ro-disable")) {
              return img.attr('src', src);
            }
          };
        })(this));
      });
    };

    Private.prototype.initBgScroll = function() {
      this.bgX = 0;
      return setInterval(this.bgScrollHandler, 10);
    };

    Private.prototype.bgScrollHandler = function() {
      var pos;
      this.bgX -= 0.5;
      pos = this.bgX + "px 0px";
      return $("#page-container").css({
        "background-position": pos
      });
    };

    Private.prototype.initSmoothScroll = function() {
      return $('a[href^=#]').not("").on("click", (function(_this) {
        return function(_t) {
          var SC_LOCK, href, speed, target;
          SC_LOCK = true;
          speed = 600;
          href = $(_t.target).parent().attr("href");
          target = $(href);
          if (href === "#") {
            target = $("body");
          }
          _this.smoothScrollTo(target, speed);
          return false;
        };
      })(this));
    };

    Private.prototype.smoothScrollTo = function(target, speed, offset) {
      var position;
      if (!offset) {
        offset = 0;
      }
      position = target.offset().top + offset;
      return $('body,html').animate({
        scrollTop: position
      }, speed, 'easeInOutQuart');
    };

    return Private;

  })();

  return Common;

})();

module.exports = Common;



},{"./../../bower_components/jquery.easing/js/jquery.easing.js":1}],4:[function(require,module,exports){
var Const;

Const = (function() {
  function Const() {}

  Const.STAGE_MIN_W = 960;

  Const.STAGE_MIN_H = 600;

  return Const;

})();

module.exports = Const;



},{}],5:[function(require,module,exports){
var CST, LayoutManager,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

CST = require("./Const");

LayoutManager = (function() {
  var Private, instance;

  function LayoutManager() {}

  instance = null;

  LayoutManager.$ = function() {
    return instance != null ? instance : instance = new Private();
  };

  Private = (function() {
    function Private() {
      this.registResizer = __bind(this.registResizer, this);
      this.resizeHandler = __bind(this.resizeHandler, this);
      this.initStageSize = __bind(this.initStageSize, this);
      this.resizeFuncs = [];
      this.sW = 0;
      this.sH = 0;
      this.stageMinW = CST.STAGE_MIN_W;
      this.stageMinH = CST.STAGE_MIN_H;
      $((function(_this) {
        return function() {
          _this.$header = $("header");
          _this.$pageAnchor = $("#page-anchor");
          return _this.initStageSize();
        };
      })(this));
    }

    Private.prototype.initStageSize = function() {
      this.$pageContainer = $("#page-container");
      this.$bl = $("#b-l");
      this.$br = $("#b-r");
      this.sW = $(window).innerWidth();
      this.sH = $(window).outerHeight();
      $(window).bind("resize", this.resizeHandler);
      return this.resizeHandler();
    };

    Private.prototype.resizeHandler = function(event) {
      var func, _i, _len, _ref, _results;
      this.sW = $(window).innerWidth();
      this.sH = $(window).outerHeight();
      this.$pageContainer.css({
        "width": this.sW,
        "height": this.sH
      });
      this.$bl.css({
        "width": this.sW / 2,
        "height": this.sH
      });
      this.$br.css({
        "width": this.sW / 2,
        "height": this.sH,
        "margin-left": this.sW / 2
      });
      _ref = this.resizeFuncs;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        func = _ref[_i];
        _results.push(func(this.sW, this.sH));
      }
      return _results;
    };

    Private.prototype.registResizer = function(func) {
      this.resizeFuncs.push(func);
      return func(this.sW, this.sH);
    };

    return Private;

  })();

  return LayoutManager;

})();

module.exports = LayoutManager;



},{"./Const":4}]},{},[2])
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9ncnVudC1icm93c2VyaWZ5L25vZGVfbW9kdWxlcy9icm93c2VyaWZ5L25vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJib3dlcl9jb21wb25lbnRzL2pxdWVyeS5lYXNpbmcvanMvanF1ZXJ5LmVhc2luZy5qcyIsIi9Wb2x1bWVzL0RBVEEvV09SS1MvRHJvcGJveC9uaXNoaW5hX21mZy9fREVWL3NyYy9zY3JpcHRzL0FwcC5jb2ZmZWUiLCIvVm9sdW1lcy9EQVRBL1dPUktTL0Ryb3Bib3gvbmlzaGluYV9tZmcvX0RFVi9zcmMvc2NyaXB0cy9Db21tb24uY29mZmVlIiwiL1ZvbHVtZXMvREFUQS9XT1JLUy9Ecm9wYm94L25pc2hpbmFfbWZnL19ERVYvc3JjL3NjcmlwdHMvQ29uc3QuY29mZmVlIiwiL1ZvbHVtZXMvREFUQS9XT1JLUy9Ecm9wYm94L25pc2hpbmFfbWZnL19ERVYvc3JjL3NjcmlwdHMvTGF5b3V0TWFuYWdlci5jb2ZmZWUiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUNBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7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TSxDQUFDLE9BQVAsR0FBaUIsYUFuRWpCLENBQUEiLCJmaWxlIjoiZ2VuZXJhdGVkLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiBlKHQsbixyKXtmdW5jdGlvbiBzKG8sdSl7aWYoIW5bb10pe2lmKCF0W29dKXt2YXIgYT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2lmKCF1JiZhKXJldHVybiBhKG8sITApO2lmKGkpcmV0dXJuIGkobywhMCk7dmFyIGY9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitvK1wiJ1wiKTt0aHJvdyBmLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsZn12YXIgbD1uW29dPXtleHBvcnRzOnt9fTt0W29dWzBdLmNhbGwobC5leHBvcnRzLGZ1bmN0aW9uKGUpe3ZhciBuPXRbb11bMV1bZV07cmV0dXJuIHMobj9uOmUpfSxsLGwuZXhwb3J0cyxlLHQsbixyKX1yZXR1cm4gbltvXS5leHBvcnRzfXZhciBpPXR5cGVvZiByZXF1aXJlPT1cImZ1bmN0aW9uXCImJnJlcXVpcmU7Zm9yKHZhciBvPTA7bzxyLmxlbmd0aDtvKyspcyhyW29dKTtyZXR1cm4gc30pIiwiLypcbiAqIGpRdWVyeSBFYXNpbmcgdjEuMyAtIGh0dHA6Ly9nc2dkLmNvLnVrL3NhbmRib3gvanF1ZXJ5L2Vhc2luZy9cbiAqXG4gKiBVc2VzIHRoZSBidWlsdCBpbiBlYXNpbmcgY2FwYWJpbGl0aWVzIGFkZGVkIEluIGpRdWVyeSAxLjFcbiAqIHRvIG9mZmVyIG11bHRpcGxlIGVhc2luZyBvcHRpb25zXG4gKlxuICogVEVSTVMgT0YgVVNFIC0galF1ZXJ5IEVhc2luZ1xuICogXG4gKiBPcGVuIHNvdXJjZSB1bmRlciB0aGUgQlNEIExpY2Vuc2UuIFxuICogXG4gKiBDb3B5cmlnaHQgwqkgMjAwOCBHZW9yZ2UgTWNHaW5sZXkgU21pdGhcbiAqIEFsbCByaWdodHMgcmVzZXJ2ZWQuXG4gKiBcbiAqIFJlZGlzdHJpYnV0aW9uIGFuZCB1c2UgaW4gc291cmNlIGFuZCBiaW5hcnkgZm9ybXMsIHdpdGggb3Igd2l0aG91dCBtb2RpZmljYXRpb24sIFxuICogYXJlIHBlcm1pdHRlZCBwcm92aWRlZCB0aGF0IHRoZSBmb2xsb3dpbmcgY29uZGl0aW9ucyBhcmUgbWV0OlxuICogXG4gKiBSZWRpc3RyaWJ1dGlvbnMgb2Ygc291cmNlIGNvZGUgbXVzdCByZXRhaW4gdGhlIGFib3ZlIGNvcHlyaWdodCBub3RpY2UsIHRoaXMgbGlzdCBvZiBcbiAqIGNvbmRpdGlvbnMgYW5kIHRoZSBmb2xsb3dpbmcgZGlzY2xhaW1lci5cbiAqIFJlZGlzdHJpYnV0aW9ucyBpbiBiaW5hcnkgZm9ybSBtdXN0IHJlcHJvZHVjZSB0aGUgYWJvdmUgY29weXJpZ2h0IG5vdGljZSwgdGhpcyBsaXN0IFxuICogb2YgY29uZGl0aW9ucyBhbmQgdGhlIGZvbGxvd2luZyBkaXNjbGFpbWVyIGluIHRoZSBkb2N1bWVudGF0aW9uIGFuZC9vciBvdGhlciBtYXRlcmlhbHMgXG4gKiBwcm92aWRlZCB3aXRoIHRoZSBkaXN0cmlidXRpb24uXG4gKiBcbiAqIE5laXRoZXIgdGhlIG5hbWUgb2YgdGhlIGF1dGhvciBub3IgdGhlIG5hbWVzIG9mIGNvbnRyaWJ1dG9ycyBtYXkgYmUgdXNlZCB0byBlbmRvcnNlIFxuICogb3IgcHJvbW90ZSBwcm9kdWN0cyBkZXJpdmVkIGZyb20gdGhpcyBzb2Z0d2FyZSB3aXRob3V0IHNwZWNpZmljIHByaW9yIHdyaXR0ZW4gcGVybWlzc2lvbi5cbiAqIFxuICogVEhJUyBTT0ZUV0FSRSBJUyBQUk9WSURFRCBCWSBUSEUgQ09QWVJJR0hUIEhPTERFUlMgQU5EIENPTlRSSUJVVE9SUyBcIkFTIElTXCIgQU5EIEFOWSBcbiAqIEVYUFJFU1MgT1IgSU1QTElFRCBXQVJSQU5USUVTLCBJTkNMVURJTkcsIEJVVCBOT1QgTElNSVRFRCBUTywgVEhFIElNUExJRUQgV0FSUkFOVElFUyBPRlxuICogTUVSQ0hBTlRBQklMSVRZIEFORCBGSVRORVNTIEZPUiBBIFBBUlRJQ1VMQVIgUFVSUE9TRSBBUkUgRElTQ0xBSU1FRC4gSU4gTk8gRVZFTlQgU0hBTEwgVEhFXG4gKiAgQ09QWVJJR0hUIE9XTkVSIE9SIENPTlRSSUJVVE9SUyBCRSBMSUFCTEUgRk9SIEFOWSBESVJFQ1QsIElORElSRUNULCBJTkNJREVOVEFMLCBTUEVDSUFMLFxuICogIEVYRU1QTEFSWSwgT1IgQ09OU0VRVUVOVElBTCBEQU1BR0VTIChJTkNMVURJTkcsIEJVVCBOT1QgTElNSVRFRCBUTywgUFJPQ1VSRU1FTlQgT0YgU1VCU1RJVFVURVxuICogIEdPT0RTIE9SIFNFUlZJQ0VTOyBMT1NTIE9GIFVTRSwgREFUQSwgT1IgUFJPRklUUzsgT1IgQlVTSU5FU1MgSU5URVJSVVBUSU9OKSBIT1dFVkVSIENBVVNFRCBcbiAqIEFORCBPTiBBTlkgVEhFT1JZIE9GIExJQUJJTElUWSwgV0hFVEhFUiBJTiBDT05UUkFDVCwgU1RSSUNUIExJQUJJTElUWSwgT1IgVE9SVCAoSU5DTFVESU5HXG4gKiAgTkVHTElHRU5DRSBPUiBPVEhFUldJU0UpIEFSSVNJTkcgSU4gQU5ZIFdBWSBPVVQgT0YgVEhFIFVTRSBPRiBUSElTIFNPRlRXQVJFLCBFVkVOIElGIEFEVklTRUQgXG4gKiBPRiBUSEUgUE9TU0lCSUxJVFkgT0YgU1VDSCBEQU1BR0UuIFxuICpcbiovXG5cbi8vIHQ6IGN1cnJlbnQgdGltZSwgYjogYmVnSW5uSW5nIHZhbHVlLCBjOiBjaGFuZ2UgSW4gdmFsdWUsIGQ6IGR1cmF0aW9uXG5qUXVlcnkuZWFzaW5nWydqc3dpbmcnXSA9IGpRdWVyeS5lYXNpbmdbJ3N3aW5nJ107XG5cbmpRdWVyeS5leHRlbmQoIGpRdWVyeS5lYXNpbmcsXG57XG5cdGRlZjogJ2Vhc2VPdXRRdWFkJyxcblx0c3dpbmc6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0Ly9hbGVydChqUXVlcnkuZWFzaW5nLmRlZmF1bHQpO1xuXHRcdHJldHVybiBqUXVlcnkuZWFzaW5nW2pRdWVyeS5lYXNpbmcuZGVmXSh4LCB0LCBiLCBjLCBkKTtcblx0fSxcblx0ZWFzZUluUXVhZDogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHRyZXR1cm4gYyoodC89ZCkqdCArIGI7XG5cdH0sXG5cdGVhc2VPdXRRdWFkOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdHJldHVybiAtYyAqKHQvPWQpKih0LTIpICsgYjtcblx0fSxcblx0ZWFzZUluT3V0UXVhZDogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHRpZiAoKHQvPWQvMikgPCAxKSByZXR1cm4gYy8yKnQqdCArIGI7XG5cdFx0cmV0dXJuIC1jLzIgKiAoKC0tdCkqKHQtMikgLSAxKSArIGI7XG5cdH0sXG5cdGVhc2VJbkN1YmljOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdHJldHVybiBjKih0Lz1kKSp0KnQgKyBiO1xuXHR9LFxuXHRlYXNlT3V0Q3ViaWM6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuIGMqKCh0PXQvZC0xKSp0KnQgKyAxKSArIGI7XG5cdH0sXG5cdGVhc2VJbk91dEN1YmljOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdGlmICgodC89ZC8yKSA8IDEpIHJldHVybiBjLzIqdCp0KnQgKyBiO1xuXHRcdHJldHVybiBjLzIqKCh0LT0yKSp0KnQgKyAyKSArIGI7XG5cdH0sXG5cdGVhc2VJblF1YXJ0OiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdHJldHVybiBjKih0Lz1kKSp0KnQqdCArIGI7XG5cdH0sXG5cdGVhc2VPdXRRdWFydDogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHRyZXR1cm4gLWMgKiAoKHQ9dC9kLTEpKnQqdCp0IC0gMSkgKyBiO1xuXHR9LFxuXHRlYXNlSW5PdXRRdWFydDogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHRpZiAoKHQvPWQvMikgPCAxKSByZXR1cm4gYy8yKnQqdCp0KnQgKyBiO1xuXHRcdHJldHVybiAtYy8yICogKCh0LT0yKSp0KnQqdCAtIDIpICsgYjtcblx0fSxcblx0ZWFzZUluUXVpbnQ6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuIGMqKHQvPWQpKnQqdCp0KnQgKyBiO1xuXHR9LFxuXHRlYXNlT3V0UXVpbnQ6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuIGMqKCh0PXQvZC0xKSp0KnQqdCp0ICsgMSkgKyBiO1xuXHR9LFxuXHRlYXNlSW5PdXRRdWludDogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHRpZiAoKHQvPWQvMikgPCAxKSByZXR1cm4gYy8yKnQqdCp0KnQqdCArIGI7XG5cdFx0cmV0dXJuIGMvMiooKHQtPTIpKnQqdCp0KnQgKyAyKSArIGI7XG5cdH0sXG5cdGVhc2VJblNpbmU6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuIC1jICogTWF0aC5jb3ModC9kICogKE1hdGguUEkvMikpICsgYyArIGI7XG5cdH0sXG5cdGVhc2VPdXRTaW5lOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdHJldHVybiBjICogTWF0aC5zaW4odC9kICogKE1hdGguUEkvMikpICsgYjtcblx0fSxcblx0ZWFzZUluT3V0U2luZTogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHRyZXR1cm4gLWMvMiAqIChNYXRoLmNvcyhNYXRoLlBJKnQvZCkgLSAxKSArIGI7XG5cdH0sXG5cdGVhc2VJbkV4cG86IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuICh0PT0wKSA/IGIgOiBjICogTWF0aC5wb3coMiwgMTAgKiAodC9kIC0gMSkpICsgYjtcblx0fSxcblx0ZWFzZU91dEV4cG86IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuICh0PT1kKSA/IGIrYyA6IGMgKiAoLU1hdGgucG93KDIsIC0xMCAqIHQvZCkgKyAxKSArIGI7XG5cdH0sXG5cdGVhc2VJbk91dEV4cG86IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0aWYgKHQ9PTApIHJldHVybiBiO1xuXHRcdGlmICh0PT1kKSByZXR1cm4gYitjO1xuXHRcdGlmICgodC89ZC8yKSA8IDEpIHJldHVybiBjLzIgKiBNYXRoLnBvdygyLCAxMCAqICh0IC0gMSkpICsgYjtcblx0XHRyZXR1cm4gYy8yICogKC1NYXRoLnBvdygyLCAtMTAgKiAtLXQpICsgMikgKyBiO1xuXHR9LFxuXHRlYXNlSW5DaXJjOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdHJldHVybiAtYyAqIChNYXRoLnNxcnQoMSAtICh0Lz1kKSp0KSAtIDEpICsgYjtcblx0fSxcblx0ZWFzZU91dENpcmM6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuIGMgKiBNYXRoLnNxcnQoMSAtICh0PXQvZC0xKSp0KSArIGI7XG5cdH0sXG5cdGVhc2VJbk91dENpcmM6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0aWYgKCh0Lz1kLzIpIDwgMSkgcmV0dXJuIC1jLzIgKiAoTWF0aC5zcXJ0KDEgLSB0KnQpIC0gMSkgKyBiO1xuXHRcdHJldHVybiBjLzIgKiAoTWF0aC5zcXJ0KDEgLSAodC09MikqdCkgKyAxKSArIGI7XG5cdH0sXG5cdGVhc2VJbkVsYXN0aWM6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0dmFyIHM9MS43MDE1ODt2YXIgcD0wO3ZhciBhPWM7XG5cdFx0aWYgKHQ9PTApIHJldHVybiBiOyAgaWYgKCh0Lz1kKT09MSkgcmV0dXJuIGIrYzsgIGlmICghcCkgcD1kKi4zO1xuXHRcdGlmIChhIDwgTWF0aC5hYnMoYykpIHsgYT1jOyB2YXIgcz1wLzQ7IH1cblx0XHRlbHNlIHZhciBzID0gcC8oMipNYXRoLlBJKSAqIE1hdGguYXNpbiAoYy9hKTtcblx0XHRyZXR1cm4gLShhKk1hdGgucG93KDIsMTAqKHQtPTEpKSAqIE1hdGguc2luKCAodCpkLXMpKigyKk1hdGguUEkpL3AgKSkgKyBiO1xuXHR9LFxuXHRlYXNlT3V0RWxhc3RpYzogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQpIHtcblx0XHR2YXIgcz0xLjcwMTU4O3ZhciBwPTA7dmFyIGE9Yztcblx0XHRpZiAodD09MCkgcmV0dXJuIGI7ICBpZiAoKHQvPWQpPT0xKSByZXR1cm4gYitjOyAgaWYgKCFwKSBwPWQqLjM7XG5cdFx0aWYgKGEgPCBNYXRoLmFicyhjKSkgeyBhPWM7IHZhciBzPXAvNDsgfVxuXHRcdGVsc2UgdmFyIHMgPSBwLygyKk1hdGguUEkpICogTWF0aC5hc2luIChjL2EpO1xuXHRcdHJldHVybiBhKk1hdGgucG93KDIsLTEwKnQpICogTWF0aC5zaW4oICh0KmQtcykqKDIqTWF0aC5QSSkvcCApICsgYyArIGI7XG5cdH0sXG5cdGVhc2VJbk91dEVsYXN0aWM6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0dmFyIHM9MS43MDE1ODt2YXIgcD0wO3ZhciBhPWM7XG5cdFx0aWYgKHQ9PTApIHJldHVybiBiOyAgaWYgKCh0Lz1kLzIpPT0yKSByZXR1cm4gYitjOyAgaWYgKCFwKSBwPWQqKC4zKjEuNSk7XG5cdFx0aWYgKGEgPCBNYXRoLmFicyhjKSkgeyBhPWM7IHZhciBzPXAvNDsgfVxuXHRcdGVsc2UgdmFyIHMgPSBwLygyKk1hdGguUEkpICogTWF0aC5hc2luIChjL2EpO1xuXHRcdGlmICh0IDwgMSkgcmV0dXJuIC0uNSooYSpNYXRoLnBvdygyLDEwKih0LT0xKSkgKiBNYXRoLnNpbiggKHQqZC1zKSooMipNYXRoLlBJKS9wICkpICsgYjtcblx0XHRyZXR1cm4gYSpNYXRoLnBvdygyLC0xMCoodC09MSkpICogTWF0aC5zaW4oICh0KmQtcykqKDIqTWF0aC5QSSkvcCApKi41ICsgYyArIGI7XG5cdH0sXG5cdGVhc2VJbkJhY2s6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkLCBzKSB7XG5cdFx0aWYgKHMgPT0gdW5kZWZpbmVkKSBzID0gMS43MDE1ODtcblx0XHRyZXR1cm4gYyoodC89ZCkqdCooKHMrMSkqdCAtIHMpICsgYjtcblx0fSxcblx0ZWFzZU91dEJhY2s6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkLCBzKSB7XG5cdFx0aWYgKHMgPT0gdW5kZWZpbmVkKSBzID0gMS43MDE1ODtcblx0XHRyZXR1cm4gYyooKHQ9dC9kLTEpKnQqKChzKzEpKnQgKyBzKSArIDEpICsgYjtcblx0fSxcblx0ZWFzZUluT3V0QmFjazogZnVuY3Rpb24gKHgsIHQsIGIsIGMsIGQsIHMpIHtcblx0XHRpZiAocyA9PSB1bmRlZmluZWQpIHMgPSAxLjcwMTU4OyBcblx0XHRpZiAoKHQvPWQvMikgPCAxKSByZXR1cm4gYy8yKih0KnQqKCgocyo9KDEuNTI1KSkrMSkqdCAtIHMpKSArIGI7XG5cdFx0cmV0dXJuIGMvMiooKHQtPTIpKnQqKCgocyo9KDEuNTI1KSkrMSkqdCArIHMpICsgMikgKyBiO1xuXHR9LFxuXHRlYXNlSW5Cb3VuY2U6IGZ1bmN0aW9uICh4LCB0LCBiLCBjLCBkKSB7XG5cdFx0cmV0dXJuIGMgLSBqUXVlcnkuZWFzaW5nLmVhc2VPdXRCb3VuY2UgKHgsIGQtdCwgMCwgYywgZCkgKyBiO1xuXHR9LFxuXHRlYXNlT3V0Qm91bmNlOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdGlmICgodC89ZCkgPCAoMS8yLjc1KSkge1xuXHRcdFx0cmV0dXJuIGMqKDcuNTYyNSp0KnQpICsgYjtcblx0XHR9IGVsc2UgaWYgKHQgPCAoMi8yLjc1KSkge1xuXHRcdFx0cmV0dXJuIGMqKDcuNTYyNSoodC09KDEuNS8yLjc1KSkqdCArIC43NSkgKyBiO1xuXHRcdH0gZWxzZSBpZiAodCA8ICgyLjUvMi43NSkpIHtcblx0XHRcdHJldHVybiBjKig3LjU2MjUqKHQtPSgyLjI1LzIuNzUpKSp0ICsgLjkzNzUpICsgYjtcblx0XHR9IGVsc2Uge1xuXHRcdFx0cmV0dXJuIGMqKDcuNTYyNSoodC09KDIuNjI1LzIuNzUpKSp0ICsgLjk4NDM3NSkgKyBiO1xuXHRcdH1cblx0fSxcblx0ZWFzZUluT3V0Qm91bmNlOiBmdW5jdGlvbiAoeCwgdCwgYiwgYywgZCkge1xuXHRcdGlmICh0IDwgZC8yKSByZXR1cm4galF1ZXJ5LmVhc2luZy5lYXNlSW5Cb3VuY2UgKHgsIHQqMiwgMCwgYywgZCkgKiAuNSArIGI7XG5cdFx0cmV0dXJuIGpRdWVyeS5lYXNpbmcuZWFzZU91dEJvdW5jZSAoeCwgdCoyLWQsIDAsIGMsIGQpICogLjUgKyBjKi41ICsgYjtcblx0fVxufSk7XG5cbi8qXG4gKlxuICogVEVSTVMgT0YgVVNFIC0gRUFTSU5HIEVRVUFUSU9OU1xuICogXG4gKiBPcGVuIHNvdXJjZSB1bmRlciB0aGUgQlNEIExpY2Vuc2UuIFxuICogXG4gKiBDb3B5cmlnaHQgwqkgMjAwMSBSb2JlcnQgUGVubmVyXG4gKiBBbGwgcmlnaHRzIHJlc2VydmVkLlxuICogXG4gKiBSZWRpc3RyaWJ1dGlvbiBhbmQgdXNlIGluIHNvdXJjZSBhbmQgYmluYXJ5IGZvcm1zLCB3aXRoIG9yIHdpdGhvdXQgbW9kaWZpY2F0aW9uLCBcbiAqIGFyZSBwZXJtaXR0ZWQgcHJvdmlkZWQgdGhhdCB0aGUgZm9sbG93aW5nIGNvbmRpdGlvbnMgYXJlIG1ldDpcbiAqIFxuICogUmVkaXN0cmlidXRpb25zIG9mIHNvdXJjZSBjb2RlIG11c3QgcmV0YWluIHRoZSBhYm92ZSBjb3B5cmlnaHQgbm90aWNlLCB0aGlzIGxpc3Qgb2YgXG4gKiBjb25kaXRpb25zIGFuZCB0aGUgZm9sbG93aW5nIGRpc2NsYWltZXIuXG4gKiBSZWRpc3RyaWJ1dGlvbnMgaW4gYmluYXJ5IGZvcm0gbXVzdCByZXByb2R1Y2UgdGhlIGFib3ZlIGNvcHlyaWdodCBub3RpY2UsIHRoaXMgbGlzdCBcbiAqIG9mIGNvbmRpdGlvbnMgYW5kIHRoZSBmb2xsb3dpbmcgZGlzY2xhaW1lciBpbiB0aGUgZG9jdW1lbnRhdGlvbiBhbmQvb3Igb3RoZXIgbWF0ZXJpYWxzIFxuICogcHJvdmlkZWQgd2l0aCB0aGUgZGlzdHJpYnV0aW9uLlxuICogXG4gKiBOZWl0aGVyIHRoZSBuYW1lIG9mIHRoZSBhdXRob3Igbm9yIHRoZSBuYW1lcyBvZiBjb250cmlidXRvcnMgbWF5IGJlIHVzZWQgdG8gZW5kb3JzZSBcbiAqIG9yIHByb21vdGUgcHJvZHVjdHMgZGVyaXZlZCBmcm9tIHRoaXMgc29mdHdhcmUgd2l0aG91dCBzcGVjaWZpYyBwcmlvciB3cml0dGVuIHBlcm1pc3Npb24uXG4gKiBcbiAqIFRISVMgU09GVFdBUkUgSVMgUFJPVklERUQgQlkgVEhFIENPUFlSSUdIVCBIT0xERVJTIEFORCBDT05UUklCVVRPUlMgXCJBUyBJU1wiIEFORCBBTlkgXG4gKiBFWFBSRVNTIE9SIElNUExJRUQgV0FSUkFOVElFUywgSU5DTFVESU5HLCBCVVQgTk9UIExJTUlURUQgVE8sIFRIRSBJTVBMSUVEIFdBUlJBTlRJRVMgT0ZcbiAqIE1FUkNIQU5UQUJJTElUWSBBTkQgRklUTkVTUyBGT1IgQSBQQVJUSUNVTEFSIFBVUlBPU0UgQVJFIERJU0NMQUlNRUQuIElOIE5PIEVWRU5UIFNIQUxMIFRIRVxuICogIENPUFlSSUdIVCBPV05FUiBPUiBDT05UUklCVVRPUlMgQkUgTElBQkxFIEZPUiBBTlkgRElSRUNULCBJTkRJUkVDVCwgSU5DSURFTlRBTCwgU1BFQ0lBTCxcbiAqICBFWEVNUExBUlksIE9SIENPTlNFUVVFTlRJQUwgREFNQUdFUyAoSU5DTFVESU5HLCBCVVQgTk9UIExJTUlURUQgVE8sIFBST0NVUkVNRU5UIE9GIFNVQlNUSVRVVEVcbiAqICBHT09EUyBPUiBTRVJWSUNFUzsgTE9TUyBPRiBVU0UsIERBVEEsIE9SIFBST0ZJVFM7IE9SIEJVU0lORVNTIElOVEVSUlVQVElPTikgSE9XRVZFUiBDQVVTRUQgXG4gKiBBTkQgT04gQU5ZIFRIRU9SWSBPRiBMSUFCSUxJVFksIFdIRVRIRVIgSU4gQ09OVFJBQ1QsIFNUUklDVCBMSUFCSUxJVFksIE9SIFRPUlQgKElOQ0xVRElOR1xuICogIE5FR0xJR0VOQ0UgT1IgT1RIRVJXSVNFKSBBUklTSU5HIElOIEFOWSBXQVkgT1VUIE9GIFRIRSBVU0UgT0YgVEhJUyBTT0ZUV0FSRSwgRVZFTiBJRiBBRFZJU0VEIFxuICogT0YgVEhFIFBPU1NJQklMSVRZIE9GIFNVQ0ggREFNQUdFLiBcbiAqXG4gKi8iLCJqcXVlcnlFYXNpbmcgPSByZXF1aXJlKFwianF1ZXJ5LmVhc2luZ1wiKVxuQ1NUID0gcmVxdWlyZShcIi4vQ29uc3RcIilcbkNvbW1vbiA9IHJlcXVpcmUoXCIuL0NvbW1vblwiKVxuTGF5b3V0TWFuYWdlciA9IHJlcXVpcmUoXCIuL0xheW91dE1hbmFnZXJcIilcblxuXG5cbmNsYXNzIEFwcFxuXG4gIGNvbnN0cnVjdG9yOiAoKS0+XG5cbiAgICBAQ09NID0gbmV3IENvbW1vbi4kKClcbiAgICBATE0gPSBuZXcgTGF5b3V0TWFuYWdlci4kKClcblxuXG4gICAgJChkb2N1bWVudCkucmVhZHkoKCk9PlxuXG4gICAgICBATE0ucmVzaXplSGFuZGxlcigpXG5cbiAgICApXG5cblxuQVBQID0gbmV3IEFwcCgpXG4iLCJyZXF1aXJlIFwianF1ZXJ5LmVhc2luZ1wiXG5cbmNsYXNzIENvbW1vblxuXG4gIGluc3RhbmNlID0gbnVsbFxuICBAJDogLT5cbiAgICBpbnN0YW5jZSA/PSBuZXcgUHJpdmF0ZSgpXG5cbiAgY2xhc3MgUHJpdmF0ZVxuXG4gICAgY29uc3RydWN0b3I6IChvcHQpLT5cblxuICAgICAgQERFQlVHID0gZmFsc2VcbiAgICAgIEBVU0VSX0FHRU5UID0gd2luZG93Lm5hdmlnYXRvci51c2VyQWdlbnQudG9Mb3dlckNhc2UoKVxuICAgICAgQEFQUF9WRVJTSU9OID0gd2luZG93Lm5hdmlnYXRvci5hcHBWZXJzaW9uLnRvTG93ZXJDYXNlKClcbiAgICAgIEBpc0xlZ2FjeSA9IGZhbHNlXG4gICAgICBAaXNUYWIgPSBmYWxzZVxuICAgICAgQGlzU1AgPSBmYWxzZVxuICAgICAgQGlzUEMgPSBmYWxzZVxuICAgICAgQG1pblN0YWdlV2lkdGggPSA5NjBcbiAgICAgIEBtaW5TdGFnZUhlaWdodCA9IDYwMFxuICAgICAgQHJlc2l6ZUZ1bmNzID0gW11cblxuICAgICAgI0xlZ2FjeVxuICAgICAgaWYgKEBVU0VSX0FHRU5ULmluZGV4T2YoJ29wZXJhJykgIT0gLTEpXG4gICAgICAgICNvcGVyYVxuICAgICAgZWxzZSBpZiAoQFVTRVJfQUdFTlQuaW5kZXhPZihcIm1zaWVcIikgIT0gLTEpXG4gICAgICAgIGlmIChAQVBQX1ZFUlNJT04uaW5kZXhPZihcIm1zaWUgNi5cIikgIT0gLTEpXG4gICAgICAgICAgQGlzTGVnYWN5ID0gdHJ1ZVxuICAgICAgICBlbHNlIGlmIChAQVBQX1ZFUlNJT04uaW5kZXhPZihcIm1zaWUgNy5cIikgIT0gLTEpXG4gICAgICAgICAgQGlzTGVnYWN5ID0gdHJ1ZTtcbiAgICAgICAgZWxzZSBpZiAoQEFQUF9WRVJTSU9OLmluZGV4T2YoXCJtc2llIDguXCIpICE9IC0xKVxuICAgICAgICAgIEBpc0xlZ2FjeSA9IHRydWU7XG5cbiAgICAgICNcbiAgICAgIGlmICgoQFVTRVJfQUdFTlQuaW5kZXhPZignYW5kcm9pZCcpID4gMCAmJiBAVVNFUl9BR0VOVC5pbmRleE9mKCdtb2JpbGUnKSA9PSAtMSkgfHwgQFVTRVJfQUdFTlQuaW5kZXhPZignaXBhZCcpID4gMClcbiAgICAgICAgQGlzVGFiID0gdHJ1ZTtcbiAgICAgIGVsc2UgaWYgKChAVVNFUl9BR0VOVC5pbmRleE9mKCdpcGhvbmUnKSA+IDAgJiYgQFVTRVJfQUdFTlQuaW5kZXhPZignaXBhZCcpID09IC0xKSB8fCBAVVNFUl9BR0VOVC5pbmRleE9mKCdpcG9kJykgPiAwIHx8IChAVVNFUl9BR0VOVC5pbmRleE9mKCdhbmRyb2lkJykgPiAwICYmIEBVU0VSX0FHRU5ULmluZGV4T2YoJ21vYmlsZScpID4gMCkpXG4gICAgICAgIEBpc1NQID0gdHJ1ZTtcbiAgICAgIGVsc2VcbiAgICAgICAgQGlzUEMgPSB0cnVlO1xuXG5cbiAgICAgICNAaW5pdFN0YWdlU2l6ZSgpXG4gICAgICAjQGluaXRTaXRlQ29tbW9uKClcbiAgICAgIEBpbml0U21vb3RoU2Nyb2xsKClcbiAgICAgICNAaW5pdEJnU2Nyb2xsKClcbiAgICAgIGlmKEBpc1BDKVxuICAgICAgICBAaW5pdE1vdXNlT3ZlcigpXG5cblxuICAgIGluaXRNb3VzZU92ZXI6ICgpPT5cbiAgICAgIHBvc3RmaXggPSAnX29uJ1xuICAgICAgJCgnLnJvJykubm90KCdbc3JjKj1cIicgKyBwb3N0Zml4ICsgJy5cIl0nKS5lYWNoKCgpLT5cbiAgICAgICAgaW1nID0gJCh0aGlzKTtcbiAgICAgICAgc3JjID0gaW1nLmF0dHIoJ3NyYycpO1xuICAgICAgICBzcmNfb24gPSBzcmMuc3Vic3RyKDAsIHNyYy5sYXN0SW5kZXhPZignLicpKSArIHBvc3RmaXggKyBzcmMuc3Vic3RyaW5nKHNyYy5sYXN0SW5kZXhPZignLicpKTtcbiAgICAgICAgJCgnPGltZz4nKS5hdHRyKCdzcmMnLCBzcmNfb24pXG4gICAgICAgIGltZy5ob3ZlcihcbiAgICAgICAgICAgICgpPT5cbiAgICAgICAgICAgICAgaWYoIWltZy5oYXNDbGFzcyhcInJvLWRpc2FibGVcIikpXG4gICAgICAgICAgICAgICAgaW1nLmF0dHIoJ3NyYycsIHNyY19vbilcbiAgICAgICAgICAgICgpPT5cbiAgICAgICAgICAgICAgaWYoIWltZy5oYXNDbGFzcyhcInJvLWRpc2FibGVcIikpXG4gICAgICAgICAgICAgICAgaW1nLmF0dHIoJ3NyYycsIHNyYylcbiAgICAgICAgKVxuICAgICAgKVxuXG4gICAgaW5pdEJnU2Nyb2xsOiAoKT0+XG4gICAgICBAYmdYID0gMFxuICAgICAgc2V0SW50ZXJ2YWwoQGJnU2Nyb2xsSGFuZGxlciwxMClcblxuICAgIGJnU2Nyb2xsSGFuZGxlcjooKT0+XG4gICAgICBAYmdYIC09IDAuNVxuXG4gICAgICBwb3MgPSBAYmdYICsgXCJweCAwcHhcIlxuICAgICAgJChcIiNwYWdlLWNvbnRhaW5lclwiKS5jc3Moe1wiYmFja2dyb3VuZC1wb3NpdGlvblwiOiBwb3N9KVxuXG5cblxuICAgIGluaXRTbW9vdGhTY3JvbGw6ICgpPT5cblxuICAgICAgJCgnYVtocmVmXj0jXScpLm5vdChcIlwiKS5vbihcImNsaWNrXCIsKF90KT0+XG4gICAgICAgIFNDX0xPQ0sgPSB0cnVlO1xuICAgICAgICBzcGVlZCA9IDYwMDtcbiAgICAgICAgaHJlZiA9ICQoX3QudGFyZ2V0KS5wYXJlbnQoKS5hdHRyKFwiaHJlZlwiKTtcbiAgICAgICAgdGFyZ2V0ID0gJChocmVmKVxuXG4gICAgICAgIGlmKGhyZWYgPT0gXCIjXCIpXG4gICAgICAgICAgdGFyZ2V0ID0gJChcImJvZHlcIilcbiAgICAgICAgQHNtb290aFNjcm9sbFRvKHRhcmdldCwgc3BlZWQpO1xuICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICApXG5cbiAgICBzbW9vdGhTY3JvbGxUbzogKHRhcmdldCwgc3BlZWQsIG9mZnNldCkgPT5cblxuICAgICAgaWYoIW9mZnNldClcbiAgICAgICAgb2Zmc2V0ID0gMFxuICAgICAgcG9zaXRpb24gPSB0YXJnZXQub2Zmc2V0KCkudG9wICsgb2Zmc2V0O1xuICAgICAgJCgnYm9keSxodG1sJykuYW5pbWF0ZSh7c2Nyb2xsVG9wOiBwb3NpdGlvbn0sIHNwZWVkLCAnZWFzZUluT3V0UXVhcnQnKVxuXG5cbiAgICAjIFNpdGUgQ29tbW9uICMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyNcbiAgICAjaW5pdFNpdGVDb21tb246ICgpPT5cblxuXG5cblxubW9kdWxlLmV4cG9ydHMgPSBDb21tb25cbiIsImNsYXNzIENvbnN0XG5cbiAgQFNUQUdFX01JTl9XID0gOTYwXG4gIEBTVEFHRV9NSU5fSCA9IDYwMFxuXG5tb2R1bGUuZXhwb3J0cyA9IENvbnN0IiwiXG5DU1QgPSByZXF1aXJlKFwiLi9Db25zdFwiKVxuXG5jbGFzcyBMYXlvdXRNYW5hZ2VyXG5cbiAgaW5zdGFuY2UgPSBudWxsXG4gIEAkOiAtPlxuICAgIGluc3RhbmNlID89IG5ldyBQcml2YXRlKClcblxuICBjbGFzcyBQcml2YXRlXG4gICAgY29uc3RydWN0b3I6ICgpLT5cblxuICAgICAgQHJlc2l6ZUZ1bmNzID0gW11cbiAgICAgIEBzVyA9IDBcbiAgICAgIEBzSCA9IDBcbiAgICAgIEBzdGFnZU1pblcgPSBDU1QuU1RBR0VfTUlOX1dcbiAgICAgIEBzdGFnZU1pbkggPSBDU1QuU1RBR0VfTUlOX0hcblxuXG4gICAgICAkKCgpPT5cbiAgICAgICAgQCRoZWFkZXIgPSAkKFwiaGVhZGVyXCIpXG4gICAgICAgIEAkcGFnZUFuY2hvciA9ICQoXCIjcGFnZS1hbmNob3JcIilcbiAgICAgICAgQGluaXRTdGFnZVNpemUoKVxuICAgICAgKVxuXG5cbiAgICBpbml0U3RhZ2VTaXplOiAoKT0+XG5cbiAgICAgIEAkcGFnZUNvbnRhaW5lciA9ICQoXCIjcGFnZS1jb250YWluZXJcIilcbiAgICAgIEAkYmwgPSAkKFwiI2ItbFwiKVxuICAgICAgQCRiciA9ICQoXCIjYi1yXCIpXG5cbiAgICAgIEBzVyA9ICQod2luZG93KS5pbm5lcldpZHRoKClcbiAgICAgIEBzSCA9ICQod2luZG93KS5vdXRlckhlaWdodCgpXG5cbiAgICAgICQod2luZG93KS5iaW5kKFwicmVzaXplXCIsIEByZXNpemVIYW5kbGVyKVxuICAgICAgQHJlc2l6ZUhhbmRsZXIoKVxuXG5cbiAgICByZXNpemVIYW5kbGVyOiAoZXZlbnQpPT5cblxuICAgICAgQHNXID0gJCh3aW5kb3cpLmlubmVyV2lkdGgoKVxuICAgICAgQHNIID0gJCh3aW5kb3cpLm91dGVySGVpZ2h0KClcblxuICAgICAgQCRwYWdlQ29udGFpbmVyLmNzcyh7XG4gICAgICAgIFwid2lkdGhcIjpAc1dcbiAgICAgICAgXCJoZWlnaHRcIjpAc0hcbiAgICAgIH0pXG4gICAgICBAJGJsLmNzcyh7XG4gICAgICAgIFwid2lkdGhcIjogQHNXIC8gMlxuICAgICAgICBcImhlaWdodFwiOiBAc0hcbiAgICAgIH0pXG4gICAgICBAJGJyLmNzcyh7XG4gICAgICAgIFwid2lkdGhcIjpAc1cvMlxuICAgICAgICBcImhlaWdodFwiOkBzSFxuICAgICAgICBcIm1hcmdpbi1sZWZ0XCI6QHNXLzJcbiAgICAgIH0pXG5cbiAgICAgIGZvciBmdW5jIGluIEByZXNpemVGdW5jc1xuICAgICAgICBmdW5jKEBzVywgQHNIKVxuXG5cbiAgICAjKioqKlxuICAgIHJlZ2lzdFJlc2l6ZXI6IChmdW5jKT0+XG4gICAgICBAcmVzaXplRnVuY3MucHVzaChmdW5jKVxuICAgICAgZnVuYyhAc1csIEBzSClcblxuXG5tb2R1bGUuZXhwb3J0cyA9IExheW91dE1hbmFnZXIiXX0=
