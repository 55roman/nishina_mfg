
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

	<?php include_once "title.php" ?>
	<div class="content-wrapper">

		<nav id="content-nav">
			<?php include_once "contentnav.php" ?>
		</nav>


		<div id="local-content">

			<h2><span class="inner">値上げ申請に関するご説明</span></h2>

			<ul class="tab-menu mt30">
				<li><a href="../naiyou/">値上げ申請<span class="br">の内容</span></a></li>
				<li><a href="../haikei/">値上げ申請<span class="br">の背景</span></a></li>
				<li class="crnt">各種ご契約メニュー<span class="br">の申請内容</span></li>
				<li><a href="../sonota/">その他の<span class="br">変更内容</span></a></li>
			</ul>

			<p>各種ご契約メニューのご説明と、現行単価と申請（届出予定）単価の比較および値上げ影響額をご覧いただけます。</p>
			<div class="mat-key text-c">
				<div class="link-btn pl20 pr20"><a href="../../simulation/kakunin.php" target="_blank">ご契約メニューのご確認方法</a></div>
			</div>

			<div class="mt30 menu-sec01 border-a round-a">
				<h3><span class="inner">基本メニュー</span></h3>
				<ul class="list-il cols3">
					<li><div class="link-btn"><a href="dento_a/">従量電灯Ａ</a></div></li>
					<li><div class="link-btn"><a href="">従量電灯Ｂ</a></div></li>
					<li><div class="link-btn"><a href="">定額電灯</a></div></li>
					<li><div class="link-btn"><a href="">公衆街路灯</a></div></li>
					<li><div class="link-btn"><a href="">臨時電灯</a></div></li>
					<li><div class="link-btn"><a href="">低圧電力</a></div></li>
					<li><div class="link-btn"><a href="">臨時電力</a></div></li>
					<li><div class="link-btn"><a href="">農事用電力（かんがい排水用）</a></div></li>
				</ul>
				<div class="font-m2 ml20 mb10 mr20 lh-14">※基本メニュー（電気供給約款）の内容は、経済産業大臣の認可を受けて決定されます。</div>
			</div>


			<div class="mt20 menu-sec02 border-a round-a">
				<h3><span class="inner">選択メニュー</span></h3>
				<ul class="list-il cols3">
					<li><div class="link-btn"><a href="">はぴeタイム</a></div></li>
					<li><div class="link-btn"><a href="">時間帯別電灯</a></div></li>
					<li><div class="link-btn"><a href="">季時別電灯PS</a></div></li>
					<li><div class="link-btn"><a href="">深夜電力Ｂ</a></div></li>
					<li><div class="link-btn"><a href="">深夜電力Ａ</a></div></li>
					<li><div class="link-btn"><a href="">第２深夜電力</a></div></li>
					<li><div class="link-btn"><a href="">低圧総合利用契約</a></div></li>
					<li><div class="link-btn"><a href="">低圧季別電力</a></div></li>
					<li><div class="link-btn"><a href="">融雪用電力</a></div></li>
					<li><div class="link-btn"><a href="">低圧蓄熱調整契約</a></div></li>
					<li><div class="link-btn"><a href="">口座振替割引契約</a></div></li>

				</ul>
				<div class="font-m2 ml20 mb10 mr20 lh-14">※選択メニュー（選択約款）は、電気供給約款の認可内容に応じて料金やその他の変更内容を見直し、国に届け出る予定です。</div>
			</div>

			<div class="menu-sec03 row-2 mt20">
				<div class="col-2">
					<a href="../../simulation/"><img src="img/index_btn_simulation.jpg" alt="電気料金シミュレーション" /></a>
					<div class="mt10 font-m2 lh-14">ご契約メニューでの現行料金と申請料金の差額を試算できます。</div>
				</div>
				<div class="col-2 last-2">
					<a href="../../tanka/"><img src="img/index_btn_tanka.jpg" alt="申請中単価一覧表"/></a>
					<div class="mt10 font-m2 lh-14">現行単価と申請中単価を比較していただけます。</div>
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
