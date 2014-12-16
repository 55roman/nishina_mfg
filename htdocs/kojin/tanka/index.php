
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $TANKA;
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


<body id="tanka" class="local-page">

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

			<h2><span class="inner">申請(届出予定)単価一覧</span></h2>

			<ul class="anchor-link list-il">
				<li><a href="#sec01" class="arrow-btm">基本メニュー 電気供給約款(電灯)</a></li>
				<li><a href="#sec02" class="arrow-btm">基本メニュー 電気供給約款(電力)</a></li>
				<li><a href="#sec03" class="arrow-btm">選択メニュー 選択約款</a></li>
			</ul>

			<div id="sec01">
				<h4 class="mt30">基本メニュー 電気供給約款（電灯）</h4>
				<p>電気供給約款の内容は、国の認可を受けて決定されます。</p>
				<div class="fig-inner2">
					<img src="img/index_sec01_fig01.jpg" alt="" />
				</div>
			</div>

			<div id="sec02">
				<h4 class="mt30">基本メニュー 電気供給約款（電力）</h4>
				<div class="fig-inner2">
					<img src="img/index_sec02_fig01.jpg" alt=""/>
				</div>
				<p class="font-m2 lh-14">※「現行単価」および「申請中単価」には、燃料費調整単価を含みません。<br/>
					※「夏季」とは毎年７月１日〜９月３０日の期間をいい、「その他季」とは毎年１０月１日〜翌年６月３０日の期間をいいます。</p>
			</div>

			<div id="sec03">
				<h4 class="mt50">選択メニュー 選択約款</h4>
				<p>選択約款は、電気供給約款の認可内容に応じて料金やその他の変更内容を見直し、国に届け出る予定です。</p>
				<div class="fig-inner2">
					<img src="img/index_sec03_fig01.jpg" alt=""/>
				</div>
				<p class="font-m2 lh-14">※「現行単価」および「届出予定単価」には、燃料費調整単価を含みません。<br />
					※「デイタイム」とは毎日午前10時〜午後5時の時間（土曜日、日曜日、「国民の祝日に関する法律」に規定する休日、1月2日、1月3日、4月30日、5月1日、5月2日、12月30日、12月31日を除く）をいい、「リビングタイム」とは「デイタイム」を除く毎日午前7時〜午後11時の時間をいい、「ナイトタイム」とは毎日午後11時～翌日午前7時の時間をいいます。<br/>
					※「夏季」とは毎年７月１日〜９月３０日の期間をいい、「その他季」とは毎年１０月１日〜翌年６月３０日の期間をいいます。
				</p>

				<div class="borderd-area">
					<p class="font-m2 lh-14">【「はぴeプラン（全電化住宅割引）」の新規加入の停止について】</p>
					<p class="font-m2 lh-14">平成２７年４月１日以降は、新規にご加入いただくことはできません。<br/>
					（平成２７年３月３１日までに弊社との需給契約が成立した場合はご加入いただけます。）<br/>
					※平成27年3月31日時点で、「はぴeプラン」にご加入いただいているお客さまにつきましては、平成27年4月1日以降もご転宅等電気のご契約　内容に変更がない場合は、引き続き、これまでと同様の割引をいたします。
					</p>
				</div>

				<div class="fig-inner2 mt20">
					<img src="img/index_sec03_fig02.jpg" alt=""/>
				</div>
				<p class="font-m2 lh-14">
					※「現行単価」および「届出予定単価」には、燃料費調整単価を含みません。<br />
					※「昼間時間」とは毎日午前７時〜午後１１時の時間をいい、「夜間時間」とは昼間時間以外の時間をいいます。
				</p>


				<div class="fig-inner2 mt20">
					<img src="img/index_sec03_fig03.jpg" alt=""/>
				</div>
				<p class="font-m2 lh-14">
					※「現行単価」および「届出予定単価」には、燃料費調整単価を含みません。<br />
					※「ピーク時間」とは毎年7月1日〜9月30日の平日午後１時〜午後４時の時間をいい、「オフピーク時間」とはピーク時間を除く毎日午前7時〜午後１１時の時間をいい、「夜間時間」とは毎日午後１１時〜翌日午前７時の時間をいいます。
				</p>


				<div class="fig-inner2 mt20">
					<img src="img/index_sec03_fig04.jpg" alt=""/>
				</div>
				<p class="font-m2 lh-14">
					※「現行単価」および「届出予定単価」には、燃料費調整単価を含みません。
				</p>


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
window.onload = function(){
	COM.navLimitTop = $("html").height()
}
</script>
</body>

</html>
