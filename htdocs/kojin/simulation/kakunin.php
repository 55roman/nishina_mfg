
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SIMULATION;
    $g_content = $IND;

    //ページタイトル（ブランクで、共通設定適用（define.php））
	$pageTitle = "";
    //ページ固有META情報（ブランクで、共通設定適用（define.php））
	$pageDescription = "";
	$pageKeywords = "";
    //OGP
	$pageOgTitle = ""; //OGP用タイトル（ブランクで共通設定適用（define.php））
	$pageOgType = ""; //OGP TYPE（ブランクで共通設定適用（define.php））
    $pageOgImage = ""; //OGP IMAGE（ブランクで共通設定適用（define.php））
	$pageOgDescription = ""; //OGP用Description(ブランクでページDescriptionと同じものを設定（define.php）)


?>

<!DOCTYPE html>
<html lang="ja">
<head>

<?php include_once "head.php" ?>



</head>


<body id="simulation" class="local-page">

<?php include_once "ga.php" ?>

<div id="page-container" class="popup-page">


	<div class="header-wrapper">
		<header>
			<h1><img src="../common/img/header_logo.gif" alt="関西電力" /></h1>
		</header>
	</div>


	<div class="content-wrapper">

		<h2><span class="inner">ご契約メニューのご確認方法</span></h2>

		<h4>「電気ご使用量のお知らせ」（検針票）でのご確認方法</h4>

		<div class="mat-key fig-wrapper">
			<div class="fig-inner">
				<img src="img/kakunin_fig01.jpg" alt="" />
			</div>
		</div>


		<h4>「はぴeみる電」でのご確認方法</h4>

		<div class="mat-key fig-wrapper">
			<div class="fig-inner">
				<img src="img/kakunin_fig02.jpg" alt=""/>
			</div>
		</div>


		<div class="text-c mt30">
			<div class="link-btn"><a href="javascript:window.close();">閉じる</a></div>
		</div>

	</div>
	<!--//content-wrapper-->

	<div class="pagetop content">
		<a href="#" class="arrow-top">このページのトップへ戻る</a>
	</div>

	<?php include_once "footer.php" ?>

</div><!--//page-container-->



</body>

</html>
