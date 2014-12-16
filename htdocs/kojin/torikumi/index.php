
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $TORIKUMI;
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


<body id="torikumi" class="local-page">

<?php include_once "ga.php" ?>

<div id="page-container">


	<div class="header-wrapper">
		<?php include_once "header.php" ?>
	</div>

	<?php include_once "title.php" ?>
	<div class="content-wrapper">

		<nav id="content-nav">
			<?php include_once "contentnav.php" ?>
		</nav>


		<div id="local-content">

			<h2><span class="inner">関西電力の現状の取り組み</span></h2>

			<h4>（１）経営効率化に向けた取組み状況</h4>
			<p class="indent">● 現行の電気料金原価は、平成25〜27年度の3ヵ年平均額として、前回値上げにおける申請時効率化額1，553億円と国による査定額474億円の合計2，027億円を反映しています。</p>
			<p class="indent">● 平成25年度は、現行の電気料金への反映額1,667億円を上回る1,810億円の効率化を実施いたしました。</p>
			<p class="indent">● また、平成26年度においても、現行の電気料金への反映額2，060億円を達成できる見通しとなっております。</p>
			<p class="indent">● 弊社は、今後も、現行の電気料金への反映額の合計を経営全般で吸収するべく、経営効率化のさらなる深掘りに全力で取り組んでまいります。</p>
			<p><strong>＜経営効率化の実績と見通し＞</strong></p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig01.jpg" alt="経営効率化の実績と見通し" />
				</div>
			</div>

			<h4 class="mt30">（２）高浜発電所および大飯発電所の再稼動に向けた取組み状況</h4>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig01.jpg" alt="経営効率化の実績と見通し" style="opacity: 0.3"/>
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
