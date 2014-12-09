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
      #@initSmoothScroll()
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

  ###initSmoothScroll: ()=>

    $('a[href^=#]').not("").click((_t)=>
      SC_LOCK = true;
      speed = 1000;
      href = $(_t.target).parent().attr("href");
      target = $(href)
      if(href == "#")
        target = $("body,html")
      console.log(href)
      @smoothScrollTo(target, speed, -70);
      return false;
    )

  smoothScrollTo: (target, speed, offset) =>
    if(!offset)
      offset = 0
    position = target.offset().top + offset;
    $('body,html').animate({scrollTop: position}, speed, 'easeInOutQuart', ()=>
      SC_LOCK = false;
    )###


  # Site Common ###############################
  initSiteCommon: ()=>
    @initHeader()
    if(@isSP)
      @initPhoneArea()




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
