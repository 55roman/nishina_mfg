
<?php

    //ルートへの相対パス
	$rel = "../../../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SETSUMEI;
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


<body id="setsumei" class="local-page">

<?php include_once "ga.php" ?>

<div id="page-container">


	<div class="header-wrapper">
		<?php include_once "header.php" ?>
	</div>


	<div class="content-wrapper">

		<nav id="content-nav">
			<?php include_once "contentnav.php" ?>
		</nav>


		<div id="local-content">

			<h2><span class="inner">値上げ申請に関するご説明</span></h2>

			<ul class="tab-menu mt30">
				<li><a href="../../menu/">値上げ申請<span class="br">の内容</span></a></li>
				<li><a href="../../haikei/">値上げ申請<span class="br">の背景</span></a></li>
				<li class="crnt">各種ご契約メニュー<span class="br">の申請内容</span></li>
				<li><a href="../../sonota/">その他の<span class="br">変更内容</span></a></li>
			</ul>


			<h4>従量電灯Ａ</h4>
			<p>ご家庭等で最も多くご契約いただいているメニューです。　ご使用量によって電力量料金単価が異なる３段階料金制度となっています。なお、基本料金はございませんが、最低限（１５ｋＷｈ）のご使用量までは、一律の最低料金がございます。＜対象となるお客さま＞電灯または小型機器をご使用になるお客さまで、ご使用される最大需要容量※が6kVA未満のお客さま※最大需要容量とは、同時に使用する電気の最大容量（kVA）</p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner" style="height: 250px;">
					figure
				</div>
			</div>


			<?php include_once "phonearea.php" ?>
		</div>

	</div>
	<!--//content-wrapper-->

	<div class="pagetop content">
		<a href="#" class="arrow-top">このページのトップへ戻る</a>
	</div>

	<?php include_once "footer.php" ?>

</div><!--//page-container-->



<script>

</script>
</body>

</html>
