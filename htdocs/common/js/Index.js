var Index,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

Index = (function() {
  function Index(opt) {
    this.initSlide = __bind(this.initSlide, this);
    this.resizeHandler = __bind(this.resizeHandler, this);
    $((function(_this) {
      return function() {
        _this.$header = $("header");
        _this.$gnav = $("header .gnav").eq(0);
        _this.$cwrapper = $(".content-wrapper").eq(0);
        $(window).bind("resize", _this.resizeHandler);
        return _this.initSlide();
      };
    })(this));
    window.onload = (function(_this) {
      return function() {
        var $gnav;
        $(".header-wrapper").css({
          "display": "block"
        });
        _this.resizeHandler();
        $("h1").eq(0).css({
          "display": "none"
        }).delay(100).fadeIn(1000);
        $gnav = $(".gnav li");
        $gnav.css({
          "display": "none"
        });
        $gnav.each(function(n) {
          return $(this).delay(n * 100 + 200).fadeIn(2000, "easeInOutQuart");
        });
        return _this.$cwrapper.delay(1600).fadeIn(2000, "easeInOutQuart");
      };
    })(this);
  }

  Index.prototype.resizeHandler = function(event) {
    var gT, hh, minGnaviTop, sH;
    hh = this.$header.height();
    sH = COM.sH;
    minGnaviTop = 30;
    this.$header.css({
      "margin-top": (sH - hh) / 2
    });
    gT = 100;
    if (sH < 610) {
      gT = 100 - (610 - sH);
      if (gT < minGnaviTop) {
        gT = minGnaviTop;
      } else if (gT > 100) {
        gT = 100;
      }
    }
    this.$gnav.css({
      "margin-top": gT
    });
    this.$cwrapper.css({
      "height": sH
    });
    if (this.imageSlide) {
      return this.imageSlide.resizeFrame(this.$cwrapper.width() + 20, this.$cwrapper.height() + 20);
    }
  };

  Index.prototype.initSlide = function() {
    var opt;
    opt = {
      container: $("#gallery-container"),
      lists: $("#gallery-container li"),
      resizable: true
    };
    this.imageSlide = new ImageSlide(opt);
    return this.resizeHandler();
  };

  return Index;

})();

this.INDEX = new Index();

//# sourceMappingURL=Index.js.map
