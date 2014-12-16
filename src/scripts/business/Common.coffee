class Common

  constructor: (opt)->

    @DEBUG = false
    @USER_AGENT = window.navigator.userAgent.toLowerCase()
    @APP_VERSION = window.navigator.appVersion.toLowerCase()
    @isLegacy = false
    @isTab = false
    @isSP = false
    @isPC = false
    @resizeFuncs = []

    #Legacyブラウザ(IE ver8以下)判定
    if (@USER_AGENT.indexOf('opera') != -1)
      #opera
    else if (@USER_AGENT.indexOf("msie") != -1)
      if (@APP_VERSION.indexOf("msie 6.") != -1)
        @isLegacy = true
      else if (@APP_VERSION.indexOf("msie 7.") != -1)
        @isLegacy = true;
      else if (@APP_VERSION.indexOf("msie 8.") != -1)
        @isLegacy = true;

    #デバイス判定
    if ((@USER_AGENT.indexOf('android') > 0 && @USER_AGENT.indexOf('mobile') == -1) || @USER_AGENT.indexOf('ipad') > 0)
      @isTab = true;
    else if ((@USER_AGENT.indexOf('iphone') > 0 && @USER_AGENT.indexOf('ipad') == -1) || @USER_AGENT.indexOf('ipod') > 0 || (@USER_AGENT.indexOf('android') > 0 && @USER_AGENT.indexOf('mobile') > 0))
      @isSP = true;
    else
      @isPC = true;

    $(()=>
      @initStageSize()
      @initSiteCommon()
      @initSmoothScroll()
    )

  initStageSize: ()=>

    @sW = $(window).innerWidth()
    @sH = $(window).height()

    @resizeHandler()
    $(window).bind("resize",@resizeHandler)

  resizeHandler: (event)=>
    @sW = $(window).innerWidth()
    @sH = $(window).height()

    for func in @resizeFuncs
      func(@sW,@sH)


  #****
  registResizer: (func)=>
    @resizeFuncs.push(func)
    func(@sW,@sH)

  initSmoothScroll: ()=>

    $('a[href^=#]').not("").click((_t)=>
      SC_LOCK = true;
      speed = 600;
      href = $(_t.target).attr("href");
      target = $(href)
      if(href == "#")
        target = $("body")
      @smoothScrollTo(target, speed, -20);
      return false;
    )

  smoothScrollTo: (target, speed, offset) =>

    if(!offset)
      offset = 0
    position = target.offset().top + offset;
    $('body,html').animate({scrollTop: position}, speed, 'easeInOutQuart')


  # Site Common ###############################
  initSiteCommon: ()=>
    $.cookie.defaults.path = "/"

    @initHeader()
    if(@isSP)
      @initPhoneArea()
    if(@isPC)
      @initFontResize()
      txtCookie = $.cookie("TSIZE")
      if(txtCookie==undefined)
        txtCookie = "M"
      @fontResize(txtCookie)

      @initContentNav()

  #文字サイズ変更
  initFontResize: ()=>
    @$btns = $(".textresizer li")
    @$btns.eq(0).bind("click",()=>
      @fontResize("S")

    )
    @$btns.eq(1).bind("click", ()=>
      @fontResize("M")
    )
    @$btns.eq(2).bind("click",()=>
      @fontResize("L")
    )

  fontResize: (size)=>
    @$btns.each(()->
      $(this).removeClass("textresizer-active")
    )
    if(size == "S")
      $(".content-wrapper").css({"font-size": "0.8em"})
      @$btns.eq(0).addClass("textresizer-active")
      $.cookie("TSIZE", "S")
    else if(size == "M")
      @$btns.eq(1).addClass("textresizer-active")
      $(".content-wrapper").css({"font-size": "1em"})
      $.cookie("TSIZE", "M")
    else if(size == "L")
      @$btns.eq(2).addClass("textresizer-active")
      $(".content-wrapper").css({"font-size": "1.2em"})
      $.cookie("TSIZE", "L")


  #コンテンツナビを初期化
  initContentNav: ()=>
    @cnav = $("#content-nav")
    if(@cnav.position())
      @navMarginTop = 20
      @navDefTop = @cnav.position().top
      @navFixPos = @navDefTop - @navMarginTop
      @navLimitTop = $("html").height()
      $(window).bind("scroll",@windowScrollHandler)

  windowScrollHandler: ()=>
    st = $(window).scrollTop()
    if(st > @navFixPos)
      if(st > @navLimitTop)
        @cnav.css({
          "position":"absolute",
          "top":@navLimitTop
        })
      else
        @cnav.css({
          "position": "fixed"
          "top": @navMarginTop
        })
    else if(st<= @navFixPos)
      @cnav.css({
        "position": "absolute"
        "top":@navDefTop
      })



  #ヘッダ部分を初期化
  initHeader: ()=>
    @headSearchIsOpen = false
    @headMenuhIsOpen = false
    @$htSearch = $("#head-trigger-search")
    @$htMenu = $("#head-trigger-menu")
    @$ddSearch = $("#dd-search-container")
    @$ddMenu = $("#dd-menu-container")
    @$htSearch.bind("click",@htSearchClickHandler)
    @$htMenu.bind("click",@htMenuClickHandler)

  htMenuClickHandler: ()=>
    if(!@headMenuIsOpen)
      @openHeadMenu()
    else
      @closeHeadMenu()
    if(@headSearchIsOpen)
      @closeHeadSearch()

  htSearchClickHandler: ()=>
    if(!@headSearchIsOpen)
      @openHeadSearch()
    else
      @closeHeadSearch()
    if(@headMenuIsOpen)
      @closeHeadMenu()

  openHeadSearch: ()=>
    @$ddSearch.css({"display": "block"})
    @headSearchIsOpen = true
  closeHeadSearch: ()=>
    @$ddSearch.css({"display": "none"})
    @headSearchIsOpen = false
  openHeadMenu:()=>
    @$ddMenu.css({"display": "block"})
    @headMenuIsOpen = true
  closeHeadMenu:()=>
    @$ddMenu.css({"display": "none"})
    @headMenuIsOpen = false

  #お問合せエリアを初期化
  initPhoneArea: ()=>
    @$phoneTrigger = $("#phone-trigger")
    @$phoneContent = $("#phone-content")
    @$phoneTrigger.bind("click", @togglePhoneArea)
    phoneCookie = $.cookie("PHONE_OPEN")

    if(phoneCookie=="FALSE")
      @phoneIsOpen = false
      @setPhoneArea()
    else
      @phoneIsOpen = true
      @setPhoneArea()

  togglePhoneArea: ()=>
    @phoneIsOpen = !@phoneIsOpen
    @setPhoneArea()

  setPhoneArea: ()=>
    if(!@phoneIsOpen) #閉じる
      @$phoneContent.css({"display": "none"})
      @$phoneTrigger.addClass("phone-close")
      $.cookie("PHONE_OPEN", "FALSE");
    else #開ける
      @$phoneContent.css({"display": "block"})
      @$phoneTrigger.removeClass("phone-close")
      $.cookie("PHONE_OPEN", "TRUE");


@COM = new Common()
