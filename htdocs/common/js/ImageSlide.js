var ImageSlide,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

ImageSlide = (function() {
  function ImageSlide(opt) {
    this.resizeFrame = __bind(this.resizeFrame, this);
    this.$cnt = opt.container;
    this.$lists = opt.lists;
    this.resizable = opt.resizable !== void 0 ? opt.resizable : true;
    if (!this.$cnt || !this.$lists) {
      console.log("ImageSlide: error initialize");
      return false;
    }
  }

  ImageSlide.prototype.resizeFrame = function(w, h) {
    return this.$lists.css({
      "width": w,
      "height": h
    });
  };

  return ImageSlide;

})();

//# sourceMappingURL=ImageSlide.js.map
