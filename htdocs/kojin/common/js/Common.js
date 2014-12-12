var Common,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

Common = (function() {
  function Common(opt) {
    this.setPhoneArea = __bind(this.setPhoneArea, this);
    this.togglePhoneArea = __bind(this.togglePhoneArea, this);
    this.initPhoneArea = __bind(this.initPhoneArea, this);
    this.closeHeadMenu = __bind(this.closeHeadMenu, this);
    this.openHeadMenu = __bind(this.openHeadMenu, this);
    this.closeHeadSearch = __bind(this.closeHeadSearch, this);
    this.openHeadSearch = __bind(this.openHeadSearch, this);
    this.htSearchClickHandler = __bind(this.htSearchClickHandler, this);
    this.htMenuClickHandler = __bind(this.htMenuClickHandler, this);
    this.initHeader = __bind(this.initHeader, this);
    this.fontResize = __bind(this.fontResize, this);
    this.initFontResize = __bind(this.initFontResize, this);
    this.initSiteCommon = __bind(this.initSiteCommon, this);
    this.smoothScrollTo = __bind(this.smoothScrollTo, this);
    this.initSmoothScroll = __bind(this.initSmoothScroll, this);
    this.registResizer = __bind(this.registResizer, this);
    this.resizeHandler = __bind(this.resizeHandler, this);
    this.initStageSize = __bind(this.initStageSize, this);
    this.DEBUG = false;
    this.USER_AGENT = window.navigator.userAgent.toLowerCase();
    this.APP_VERSION = window.navigator.appVersion.toLowerCase();
    this.isLegacy = false;
    this.isTab = false;
    this.isSP = false;
    this.isPC = false;
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
    $((function(_this) {
      return function() {
        _this.initStageSize();
        _this.initSiteCommon();
        return _this.initSmoothScroll();
      };
    })(this));
  }

  Common.prototype.initStageSize = function() {
    this.sW = $(window).innerWidth();
    this.sH = $(window).height();
    this.resizeHandler();
    return $(window).bind("resize", this.resizeHandler);
  };

  Common.prototype.resizeHandler = function(event) {
    var func, _i, _len, _ref, _results;
    this.sW = $(window).innerWidth();
    this.sH = $(window).height();
    _ref = this.resizeFuncs;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      func = _ref[_i];
      _results.push(func(this.sW, this.sH));
    }
    return _results;
  };

  Common.prototype.registResizer = function(func) {
    this.resizeFuncs.push(func);
    return func(this.sW, this.sH);
  };

  Common.prototype.initSmoothScroll = function() {
    return $('a[href^=#]').not("").click((function(_this) {
      return function(_t) {
        var SC_LOCK, href, speed, target;
        SC_LOCK = true;
        speed = 600;
        href = $(_t.target).attr("href");
        target = $(href);
        if (href === "#") {
          target = $("body");
        }
        _this.smoothScrollTo(target, speed);
        return false;
      };
    })(this));
  };

  Common.prototype.smoothScrollTo = function(target, speed, offset) {
    var position;
    if (!offset) {
      offset = 0;
    }
    position = target.offset().top + offset;
    return $('body,html').animate({
      scrollTop: position
    }, speed, 'easeInOutQuart');
  };

  Common.prototype.initSiteCommon = function() {
    var txtCookie;
    $.cookie.defaults.path = "/";
    this.initHeader();
    if (this.isSP) {
      this.initPhoneArea();
    }
    if (this.isPC) {
      this.initFontResize();
      txtCookie = $.cookie("TSIZE");
      if (txtCookie === void 0) {
        txtCookie = "M";
      }
      return this.fontResize(txtCookie);
    }
  };

  Common.prototype.initFontResize = function() {
    this.$btns = $(".textresizer li");
    this.$btns.eq(0).bind("click", (function(_this) {
      return function() {
        return _this.fontResize("S");
      };
    })(this));
    this.$btns.eq(1).bind("click", (function(_this) {
      return function() {
        return _this.fontResize("M");
      };
    })(this));
    return this.$btns.eq(2).bind("click", (function(_this) {
      return function() {
        return _this.fontResize("L");
      };
    })(this));
  };

  Common.prototype.fontResize = function(size) {
    this.$btns.each(function() {
      return $(this).removeClass("textresizer-active");
    });
    if (size === "S") {
      $(".content-wrapper").css({
        "font-size": "0.8em"
      });
      this.$btns.eq(0).addClass("textresizer-active");
      return $.cookie("TSIZE", "S");
    } else if (size === "M") {
      this.$btns.eq(1).addClass("textresizer-active");
      $(".content-wrapper").css({
        "font-size": "1em"
      });
      return $.cookie("TSIZE", "M");
    } else if (size === "L") {
      this.$btns.eq(2).addClass("textresizer-active");
      $(".content-wrapper").css({
        "font-size": "1.2em"
      });
      return $.cookie("TSIZE", "L");
    }
  };

  Common.prototype.initHeader = function() {
    this.headSearchIsOpen = false;
    this.headMenuhIsOpen = false;
    this.$htSearch = $("#head-trigger-search");
    this.$htMenu = $("#head-trigger-menu");
    this.$ddSearch = $("#dd-search-container");
    this.$ddMenu = $("#dd-menu-container");
    this.$htSearch.bind("click", this.htSearchClickHandler);
    return this.$htMenu.bind("click", this.htMenuClickHandler);
  };

  Common.prototype.htMenuClickHandler = function() {
    if (!this.headMenuIsOpen) {
      this.openHeadMenu();
    } else {
      this.closeHeadMenu();
    }
    if (this.headSearchIsOpen) {
      return this.closeHeadSearch();
    }
  };

  Common.prototype.htSearchClickHandler = function() {
    if (!this.headSearchIsOpen) {
      this.openHeadSearch();
    } else {
      this.closeHeadSearch();
    }
    if (this.headMenuIsOpen) {
      return this.closeHeadMenu();
    }
  };

  Common.prototype.openHeadSearch = function() {
    this.$ddSearch.css({
      "display": "block"
    });
    return this.headSearchIsOpen = true;
  };

  Common.prototype.closeHeadSearch = function() {
    this.$ddSearch.css({
      "display": "none"
    });
    return this.headSearchIsOpen = false;
  };

  Common.prototype.openHeadMenu = function() {
    this.$ddMenu.css({
      "display": "block"
    });
    return this.headMenuIsOpen = true;
  };

  Common.prototype.closeHeadMenu = function() {
    this.$ddMenu.css({
      "display": "none"
    });
    return this.headMenuIsOpen = false;
  };

  Common.prototype.initPhoneArea = function() {
    var phoneCookie;
    this.$phoneTrigger = $("#phone-trigger");
    this.$phoneContent = $("#phone-content");
    this.$phoneTrigger.bind("click", this.togglePhoneArea);
    phoneCookie = $.cookie("PHONE_OPEN");
    if (phoneCookie === "FALSE") {
      this.phoneIsOpen = false;
      return this.setPhoneArea();
    } else {
      this.phoneIsOpen = true;
      return this.setPhoneArea();
    }
  };

  Common.prototype.togglePhoneArea = function() {
    this.phoneIsOpen = !this.phoneIsOpen;
    return this.setPhoneArea();
  };

  Common.prototype.setPhoneArea = function() {
    if (!this.phoneIsOpen) {
      this.$phoneContent.css({
        "display": "none"
      });
      this.$phoneTrigger.addClass("phone-close");
      return $.cookie("PHONE_OPEN", "FALSE");
    } else {
      this.$phoneContent.css({
        "display": "block"
      });
      this.$phoneTrigger.removeClass("phone-close");
      return $.cookie("PHONE_OPEN", "TRUE");
    }
  };

  return Common;

})();

this.COM = new Common();

//# sourceMappingURL=Common.js.map
