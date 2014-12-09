
<?php
$pageUrl = "http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
if($_SERVER["QUERY_STRING"]!=""){
    $pageUrl = $pageUrl."?".$_SERVER["QUERY_STRING"];
}
?>

<meta charset="utf-8" />
<title><?php echo ($pageTitle!="") ? $pageTitle : $META_TITLE; ?></title>
<meta name="keywords" content="<?php echo ($pageKeywords!="") ? $pageKeywords : $META_KEYWORDS ?>" />
<meta name="description" content="<?php echo ($pageDescription!="") ? $pageDescription : $META_DESCRIPTION ?>" />
<link rel="SHORTCUT ICON" href="/favicon.ico" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<meta property="og:title" content="<?php echo ($pageOgTitle != "") ? $pageOgTitle : $META_TITLE; ?>" />
<meta property="og:type" content="<?php echo ($pageOgType!="") ? $pageOgType : $META_OG_TYPE; ?>" />
<meta property="og:site_name" content="<?php echo ($pageTitle!="") ? $pageTitle : $META_TITLE; ?>" />
<meta property="og:url" content="<?php echo $pageUrl; ?>" />
<meta property="og:image" content="<?php echo ($pageOgImage!="") ? $pageOgImage : $META_OG_IMAGE; ?>" />
<meta property="og:description" content="<?php echo ($pageOgDescription!="") ? $pageOgDescription : $META_DESCRIPTION; ?>" />
<meta property="fb:admins" content="<?php echo $META_OG_ADMINS; ?>" />


<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo $rel ?>common/js/Common.js"></script>
<script src="<?php echo $rel ?>common/js/heightline.js"></script>
<script src="<?php echo $rel ?>common/js/jquery.cookie.js"></script>


<!--<link rel="stylesheet" type="text/css" media="all" href="<?php /*echo $rel */?>common/css/reset.css" />-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $rel ?>common/css/common.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $rel ?>common/css/content.css" />
<!--<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>-->
<link href='http://fonts.googleapis.com/css?family=Cantata+One|EB+Garamond' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]><script src="<?php echo $rel ?>common/js/fix/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo $rel ?>common/js/fix/respond.min.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo $rel ?>common/js/fix/selectivizr.min.js"></script><![endif]-->
