
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SHITSUMON;
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
<script src="<?php echo $rel ?>common/js/QA.js"></script>

</head>


<body id="shitsumon" class="local-page">

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

			<h2 class="mb30"><span class="inner">ご質問にお答えします</span></h2>

			<div class="qa open">
				<h3 class="question"><span>Q</span>どうしてまた電気料金の値上げが必要なのですか？</h3>
				<div class="answer">
					<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました</p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>質問内容</h3>

				<div class="answer">
					<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました</p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>質問内容</h3>

				<div class="answer">
					<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました</p>
				</div>
			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容質問内容</h3>

				<div class="answer">
					<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました</p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>質問内容</h3>

				<div class="answer">
					<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました</p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>質問内容</h3>

				<div class="answer">
					<p>原子力発電の停止にともない、発電単価が高い火力発電の比率が高まったことにより、火力燃料費が大きく増加し、現行の料金による収入では、徹底した経営効率化に取り組んだとしても、火力燃料費等の増加分を吸収しきれず、電力の安全・安定供給に必要な費用をまかないきれないため、やむを得ず値上げを申請いたしました</p>
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
	$(function(){
		QA = new QuestionAndAnswer($(".qa"))
	})
</script>
</body>

</html>
