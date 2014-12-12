
class QuestionAndAnswer

  constructor: ($list)->
    if($list.length<=0)
      return false
    @qaList = []
    for o in $list
      qa = new QA($(o))
      @qaList.push(qa)




class QA

  constructor: ($obj)->
    @$obj = $obj
    @isOpen = false
    @$trigger = @$obj.find(".question").eq(0)
    @$answer = @$obj.find(".answer").eq(0)
    @$trigger.bind("click",@triggerClickHandler)
    @title = @$trigger.text() + '：が開かれた'

  triggerClickHandler: ()=>
    if(!@isOpen)
      @isOpen = true
      @$answer.css({"display":"block"})
      ga('send', 'event', 'h3', 'click', @title);

    else
      @isOpen = false
      @$answer.css({"display":"none"})



