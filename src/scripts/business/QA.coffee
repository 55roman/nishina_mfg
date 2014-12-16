
class QuestionAndAnswer

  constructor: ($list)->
    if($list.length<=0)
      return false
    @qaList = []
    n = 0
    for o in $list
      qa = new QA(@,$(o),n)
      n++
      @qaList.push(qa)

    hash = location.hash
    if(hash != "")
      hash = parseInt(hash.substr(2))
      @qaList[hash].open()


  closeAll: (qa)=>
    for o in @qaList
      o.close()

class QA

  constructor: (owner,$obj,ind)->
    @owner = owner
    @$obj = $obj
    @isOpen = false
    @myId = "q"+ind
    @$trigger = @$obj.find(".question").eq(0)
    @$answer = @$obj.find(".answer").eq(0)
    @$trigger.bind("click",@triggerClickHandler)
    @title = "法人：" + @$trigger.text()

  triggerClickHandler: ()=>
    if(!@isOpen)
      @owner.closeAll()
      location.hash = @myId
      @open()

    else
      @close()

  open: ()=>
    @isOpen = true
    @$answer.css({"display": "block"})
    @$obj.removeClass("open").addClass("close")
    ga('send', 'event', 'question_click', 'click', @title);

  close: ()=>
    @isOpen = false
    @$obj.removeClass("close").addClass("open")
    @$answer.css({"display": "none"})