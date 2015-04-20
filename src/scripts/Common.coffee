require "jquery.easing"

class Common

  instance = null
  @$: ->
    instance ?= new Private()

  class Private

    constructor: (opt)->

      @DEBUG = false
      @USER_AGENT = window.navigator.userAgent.toLowerCase()
      @APP_VERSION = window.navigator.appVersion.toLowerCase()
      @isLegacy = false
      @isTab = false
      @isSP = false
      @isPC = false
      @minStageWidth = 960
      @minStageHeight = 600
      @resizeFuncs = []

      #Legacy
      if (@USER_AGENT.indexOf('opera') != -1)
        #opera
      else if (@USER_AGENT.indexOf("msie") != -1)
        if (@APP_VERSION.indexOf("msie 6.") != -1)
          @isLegacy = true
        else if (@APP_VERSION.indexOf("msie 7.") != -1)
          @isLegacy = true;
        else if (@APP_VERSION.indexOf("msie 8.") != -1)
          @isLegacy = true;

      #
      if ((@USER_AGENT.indexOf('android') > 0 && @USER_AGENT.indexOf('mobile') == -1) || @USER_AGENT.indexOf('ipad') > 0)
        @isTab = true;
      else if ((@USER_AGENT.indexOf('iphone') > 0 && @USER_AGENT.indexOf('ipad') == -1) || @USER_AGENT.indexOf('ipod') > 0 || (@USER_AGENT.indexOf('android') > 0 && @USER_AGENT.indexOf('mobile') > 0))
        @isSP = true;
      else
        @isPC = true;


      #@initStageSize()
      #@initSiteCommon()
      @initSmoothScroll()
      #@initBgScroll()
      if(@isPC)
        @initMouseOver()


    initMouseOver: ()=>
      postfix = '_on'
      $('.ro').not('[src*="' + postfix + '."]').each(()->
        img = $(this);
        src = img.attr('src');
        src_on = src.substr(0, src.lastIndexOf('.')) + postfix + src.substring(src.lastIndexOf('.'));
        $('<img>').attr('src', src_on)
        img.hover(
            ()=>
              if(!img.hasClass("ro-disable"))
                img.attr('src', src_on)
            ()=>
              if(!img.hasClass("ro-disable"))
                img.attr('src', src)
        )
      )

    initBgScroll: ()=>
      @bgX = 0
      setInterval(@bgScrollHandler,10)

    bgScrollHandler:()=>
      @bgX -= 0.5

      pos = @bgX + "px 0px"
      $("#page-container").css({"background-position": pos})



    initSmoothScroll: ()=>

      $('a[href^=#]').not("").on("click",(_t)=>
        SC_LOCK = true;
        speed = 600;
        href = $(_t.target).parent().attr("href");
        target = $(href)

        if(href == "#")
          target = $("body")
        @smoothScrollTo(target, speed);
        return false;
      )

    smoothScrollTo: (target, speed, offset) =>

      if(!offset)
        offset = 0
      position = target.offset().top + offset;
      $('body,html').animate({scrollTop: position}, speed, 'easeInOutQuart')


    # Site Common ###############################
    #initSiteCommon: ()=>




module.exports = Common
