
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
				<li><a href="../naiyou/">値上げ申請<span class="br">の内容</span></a></li>
				<li class="crnt">値上げ申請<span class="br">の理由</span></a></li>
				<li><a href="../menu/">各種ご契約メニューの<span class="br">申請内容</span></a></li>
				<li><a href="../sonota/">その他<span class="br">変更内容</span></a></li>
			</ul>

			<h4>火力発電比率の高まりにより、火力燃料費が大きく増加しています。</h4>
			<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、東日本大震災前の平成２２年度実績と比べると、平成２５～２７年度の３ヶ年平均で５，６８９億円増加すると見込んでいます。</p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner" style="height: 250px;">
					figure
				</div>
			</div>

			<h4 class="mt40">まだ電力の安全・安定供給に必要な費用が足りない</h4>

			<p>現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました。</p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner" style="height: 250px;">
					figure
				</div>
			</div>


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
