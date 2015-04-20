jqueryEasing = require("jquery.easing")
CST = require("./Const")
Common = require("./Common")
LayoutManager = require("./LayoutManager")



class App

  constructor: ()->

    @COM = new Common.$()
    @LM = new LayoutManager.$()


    $(document).ready(()=>

      @LM.resizeHandler()

    )


APP = new App()
