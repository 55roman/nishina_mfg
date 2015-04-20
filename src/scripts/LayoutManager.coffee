
CST = require("./Const")

class LayoutManager

  instance = null
  @$: ->
    instance ?= new Private()

  class Private
    constructor: ()->

      @resizeFuncs = []
      @sW = 0
      @sH = 0
      @stageMinW = CST.STAGE_MIN_W
      @stageMinH = CST.STAGE_MIN_H


      $(()=>
        @$header = $("header")
        @$pageAnchor = $("#page-anchor")
        @initStageSize()
      )


    initStageSize: ()=>

      @$pageContainer = $("#page-container")
      @$bl = $("#b-l")
      @$br = $("#b-r")

      @sW = $(window).innerWidth()
      @sH = $(window).outerHeight()

      $(window).bind("resize", @resizeHandler)
      @resizeHandler()


    resizeHandler: (event)=>

      @sW = $(window).innerWidth()
      @sH = $(window).outerHeight()

      @$pageContainer.css({
        "width":@sW
        "height":@sH
      })
      @$bl.css({
        "width": @sW / 2
        "height": @sH
      })
      @$br.css({
        "width":@sW/2
        "height":@sH
        "margin-left":@sW/2
      })

      for func in @resizeFuncs
        func(@sW, @sH)


    #****
    registResizer: (func)=>
      @resizeFuncs.push(func)
      func(@sW, @sH)


module.exports = LayoutManager