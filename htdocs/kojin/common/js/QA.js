var QA, QuestionAndAnswer,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

QuestionAndAnswer = (function() {
  function QuestionAndAnswer($list) {
    this.closeAll = __bind(this.closeAll, this);
    var hash, n, o, qa, _i, _len;
    if ($list.length <= 0) {
      return false;
    }
    this.qaList = [];
    n = 0;
    for (_i = 0, _len = $list.length; _i < _len; _i++) {
      o = $list[_i];
      qa = new QA(this, $(o), n);
      n++;
      this.qaList.push(qa);
    }
    hash = location.hash;
    if (hash !== "") {
      hash = parseInt(hash.substr(2));
      this.qaList[hash].open();
    }
  }

  QuestionAndAnswer.prototype.closeAll = function(qa) {
    var o, _i, _len, _ref, _results;
    _ref = this.qaList;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      o = _ref[_i];
      _results.push(o.close());
    }
    return _results;
  };

  return QuestionAndAnswer;

})();

QA = (function() {
  function QA(owner, $obj, ind) {
    this.close = __bind(this.close, this);
    this.open = __bind(this.open, this);
    this.triggerClickHandler = __bind(this.triggerClickHandler, this);
    this.owner = owner;
    this.$obj = $obj;
    this.isOpen = false;
    this.myId = "q" + ind;
    this.$trigger = this.$obj.find(".question").eq(0);
    this.$answer = this.$obj.find(".answer").eq(0);
    this.$trigger.bind("click", this.triggerClickHandler);
    this.title = "個人：" + this.$trigger.text();
  }

  QA.prototype.triggerClickHandler = function() {
    if (!this.isOpen) {
      this.owner.closeAll();
      location.hash = this.myId;
      return this.open();
    } else {
      return this.close();
    }
  };

  QA.prototype.open = function() {
    this.isOpen = true;
    this.$answer.css({
      "display": "block"
    });
    this.$obj.removeClass("open").addClass("close");
    return ga('send', 'event', 'question_click', 'click', this.title);
  };

  QA.prototype.close = function() {
    this.isOpen = false;
    this.$obj.removeClass("close").addClass("open");
    return this.$answer.css({
      "display": "none"
    });
  };

  return QA;

})();

//# sourceMappingURL=QA.js.map
