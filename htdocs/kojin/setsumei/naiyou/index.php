
<?php

    //ルートへの相対パス
	$rel = "../../";

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
				<li class="crnt">値上げ申請<span class="br">の内容</span></li>
				<li><a href="../riyuu/">値上げ申請<span class="br">の理由</span></a></li>
				<li><a href="../menu/">各種ご契約メニューの<span class="br">申請内容</span></a></li>
				<li><a href="../sonota/">その他<span class="br">変更内容</span></a></li>
			</ul>

			<p class="mt30 font-p2 lh-14"><strong>「平成２５年４月１日からの平均１１.８８％の値上げ」を申請いたしました。<br />
				なお、実際の値上げ実施日・料金等は、経済産業大臣の認可を受けて決定されます。</strong></p>

			<p class="font-m2 lh-15">※ご契約メニューやご使用状況等によって値上げ幅は異なります。<br />
				※値上げ実施日・料金等は、認可後改めてお知らせいたします。
			</p>

			<h4 class="mt30">電気料金の内訳</h4>
			<p><strong>従量電灯Ａの場合（口座振替でお支払いの場合）</strong></p>
			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner" style="height: 250px;">
					figure
				</div>
			</div>

			<p class="font-m2 lh-15">
				※ご契約メニューによって、電気料金の内訳は異なります。<br />
				※定額電灯等における「電灯・小型機器料金」につきましても値上げを申請しております。<br/>
				※「基本料金」があるご契約メニューの場合、「基本料金」の単価の変更はございません。
			</p>

			<?php include_once "elecprice_u.php" ?>
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
