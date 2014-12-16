
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SHITSUMON;
    $g_content = $BIZ;

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
<script src="<?php echo $rel ?>common/js/jquery.ba-hashchange.js"></script>

</head>


<body id="shitsumon" class="local-page">

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

			<h2 class="mb30"><span class="inner">お客さまの疑問にお答えいたします</span></h2>

			<div class="qa open">
				<h3 class="question"><span>Q</span>電気料金は、いつからどれくらい値上げとなるのですか？</h3>
				<div class="answer">
					<p>弊社は、平成２７年４月１日からの値上げを申請しておりますが、実際の値上げ実施日・料金等は、国の審査を受けるとともに、公聴会、物価問題に関する関係閣僚会議を経て、経済産業大臣の認可を受けて、決定されます。<br />決定された値上げ実施日・料金等については、認可後改めてお知らせいたします。</p>
					<p><img src="img/index_q01_fig01.jpg" alt="" /></p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>なぜ電力量料金単価だけ一律の上げ幅で値上げをするのですか？</h3>

				<div class="answer">
					<p>今回の値上げは、電源構成の変動に伴う主に燃料費の増加等を料金に反映させるものです。<br />燃料費は、発電電力量に比例して増加していくため、ご負担にあたっての公平性を考慮して、1kWhあたりの増加コストを現行の電力量料金単価に等しく上乗せし、ご使用量に応じてご負担いただくことといたしました。</p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>燃料費調整制度があるのに、なぜ電気料金を値上げする必要があるのですか？</h3>

				<div class="answer">
					<p>燃料費調整制度は、火力燃料費の価格変動を電気料金に反映する制度です。この制度では、火力燃料費の価格変動は電気料金に反映されますが、燃料消費数量の変動は反映されません。そのため、今回のような原子力プラントの停止に伴う、火力発電量の増加による燃料費の増加分は、毎月の電気料金に反映されない仕組みとなっております。</p>
				</div>
			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>原子力プラントの再稼動が、今回の申請で想定している時期よりも早まった場合は値下げするのですか？</h3>
				<div class="answer">
					<p>弊社としましては、引き続き原子力プラントの早期再稼動に全力で取り組み、今回申請した電気料金の前提よりも早期に再稼動が実現し、燃料費等が削減できた場合には、値下げを実施したいと考えております。</p>
				</div>

			</div>

			<div class="qa open">
				<h3 class="question"><span>Q</span>４月１日実施となる場合、電気料金はどのように計算するのですか？</h3>

				<div class="answer">
					<p>4月1日実施となる場合、料金は４月１日前後のご使用日数に応じて日割計算を行い、3月31日までのご使用分については値上げ前の料金が、また、4月1日以降のご使用分については値上げ後の料金が適用されます。</p>
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
	$(function(){
		QA = new QuestionAndAnswer($(".qa"))
	})
</script>
</body>

</html>
