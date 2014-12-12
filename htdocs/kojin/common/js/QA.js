var QA, QuestionAndAnswer,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

QuestionAndAnswer = (function() {
  function QuestionAndAnswer($list) {
    var o, qa, _i, _len;
    if ($list.length <= 0) {
      return false;
    }
    this.qaList = [];
    for (_i = 0, _len = $list.length; _i < _len; _i++) {
      o = $list[_i];
      qa = new QA($(o));
      this.qaList.push(qa);
    }
  }

  return QuestionAndAnswer;

})();

QA = (function() {
  function QA($obj) {
    this.triggerClickHandler = __bind(this.triggerClickHandler, this);
    this.$obj = $obj;
    this.isOpen = false;
    this.$trigger = this.$obj.find(".question").eq(0);
    this.$answer = this.$obj.find(".answer").eq(0);
    this.$trigger.bind("click", this.triggerClickHandler);
    this.title = this.$trigger.text() + '：が開かれた';
  }

  QA.prototype.triggerClickHandler = function() {
    if (!this.isOpen) {
      this.isOpen = true;
      this.$answer.css({
        "display": "block"
      });
      return ga('send', 'event', 'h3', 'click', this.title);
    } else {
      this.isOpen = false;
      return this.$answer.css({
        "display": "none"
      });
    }
  };

  return QA;

})();

//# sourceMappingURL=QA.js.map
