
<?php

    //ルートへの相対パス
	$rel = "../../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SETSUMEI;
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



</head>


<body id="setsumei" class="local-page">

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

			<h2><span class="inner">値上げ申請に関するご説明</span></h2>

			<ul class="tab-menu mt30">
				<li><a href="../naiyou/">値上げ申請<span class="br">の内容</span></a></li>
				<li class="crnt">値上げ申請<span class="br">の背景</span></a></li>
				<li><a href="../menu/">各種ご契約メニューの<span class="br">申請内容</span></a></li>
				<li><a href="../sonota/">その他の<span class="br">変更内容</span></a></li>
			</ul>

			<p>
				弊社は、原子力プラントの再稼動に向け、全力で取り組んでおりますが、いまだ再稼動時期の目処が立っておらず、こうした状況が続けば、財務基盤の毀損は深刻さを増し、燃料調達や設備の保守・保全などに必要な資金調達が困難になる等、電力の安全・安定供給に支障をきたすおそれがあります。<br />
				このため、平成25年の値上げに続き、お客さまには、再度のご負担をお願いすることとなり、誠に申し訳ございませんが、「電源構成変分認可制度」に基づき、平成25年4月1日からの値上げをお願いすることといたしました。
			</p>

			<h4>（1）火力燃料費および経常損益（個別）の推移</h4>
			<p class="indent">
				● 現行の電気料金原価算定時の前提としている原子力プラントの再稼動が遅延しているため、火力燃料費の負担が大幅に増加しています。
			</p>
			<p class="indent">
				● また、前回の値上げにより平成25年度の経常損益は、平成24年度に比べて改善しているものの、前提としていた原子力プラントの再稼動の遅延により、依然として赤字が続いている状況です。
			</p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig01.jpg" alt="" />
				</div>
			</div>


			<h4 class="mt40">（2）総資産の推移</h4>
			<p class="indent">
				●純資産は、平成25年度末時点で8,100億円程度にまで減少しております。
			</p>
			<p class="indent">
				●この中には、将来の利益を見越して計上している繰延税金資産が5,000億円含まれており、平成25年度末時点での実質的な純資産は3,100億円程度（繰延税金資産差引後）となっており、資本金（4,900億円）を下回るレベルにまで毀損しています。
			</p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig02.jpg" alt=""/>
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
