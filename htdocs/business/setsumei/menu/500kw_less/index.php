
<?php

    //ルートへの相対パス
	$rel = "../../../";

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
				<li><a href="../../naiyou/">値上げ申請<span class="br">の内容</span></a></li>
				<li><a href="../../haikei/">値上げ申請<span class="br">の背景</span></a></li>
				<li class="crnt">各種ご契約メニュー<span class="br">の申請内容</span></li>
				<li><a href="../../sonota/">その他の<span class="br">変更内容</span></a></li>
			</ul>

			<div class="text-r">
				<a class="font-m1 arrow-top" href="../">各種ご契約メニュー一覧へ戻る</a>
			</div>

			<h4>標準的なメニューの概要</h4>
			<p class="font-p1"><strong>高圧（契約電力500kW未満）の標準的なメニュー</strong></p>
			<p>平成25年4月1日以降の標準的なメニューの料金単価を次のとおり見直しいたしました。</p>

			<div class="mat-key round-a">
				<div class="font-def ml10"><strong>標準的なメニュー</strong></div>
				<ul class="list-def ml10">
					<li class="font-def mb0"><a href="#sec01" class="arrow-btm-l">スーパーや事務所ビル等のお客さまに<span class="br">ご利用いただけるメニュー</span></a></li>
					<li class="font-def mb0"><a href="#sec02" class="arrow-btm-l">工場等のお客さまに<span class="br">ご利用いただけるメニュー</span></a></li>
				</ul>
			</div>
			<p class="ml20"><a href="" class="arrow-a">基本料金の算定について（高圧500ｋＷ未満のお客さま）</a></p>

			<div id="sec01">
				<h4>標準的なメニュー</h4>

				<p class="font-p1"><strong>スーパーや事務所ビル等のお客さまにご利用いただけるメニュー</strong></p>

				<p><strong>■高圧電力ＡＳ‐ＴＯＵ</strong></p>
				<p>より電力需要の少ない時間帯（夜間・日曜日・祝日等）に電気を多くお使いいただくことで負荷移行にご協力いただけるお客さまの料金メニュー</p>
				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt="" />
				</div>

				<p><strong>■高圧電力ＡＳ</strong></p>
				<p>主に平日の昼間時間帯に電気を多くお使いいただくお客さまの料金メニュー</p>
				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>

				<p><strong>■高圧自家発補給電力ＡＳ</strong></p>
				<p>お客さまの発電設備の検査、補修または事故によって生じる不足電力の補給にあてるために電気をお使いいただくお客さまの料金メニュー</p>
				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>

				<p><strong>■高圧予備電力ＡＳ</strong></p>
				<p>常時供給設備等の補修または事故によって生じる不足電力の補給にあてるために予備電線路により電気をお使いいただくお客さまの料金メニュー</p>

				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>

				<p><strong>■高圧臨時電力ＡＳ</strong></p>
				<p>契約使用期間が１年未満のお客さまの料金メニュー</p>

				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>


				<div class="borderd-area mt30">

					<p class="font-m2 lh-14">(注1）「現行単価」の電力量料金には、平成24年7～9月の平均燃料価格による燃料費調整単価を含みます。</p>
					<p class="font-m2 lh-14">(注2）表中の語句については以下のとおりです。<br/>
					「重負荷時間」：毎年7月1日～9月30日の期間の毎日午前10時～午後5時の時間<br/>
					（日曜日および当社が定める日※の該当する時間を除く）<br/>
					「昼間時間」：毎日午前8時～午後10時の時間<br/>
					（「重負荷時間」、日曜日および当社が定める日※の該当する時間を除く）<br/>
					「夜間時間」：「重負荷時間」および「昼間時間」以外の時間<br/>
					「夏季」　：毎年7月1日～9月30日の期間<br/>
					「その他季」：毎年10月1日～翌年6月30日の期間</p>

					<p class="font-m2 lh-14">※詳しくは、最寄の関西電力までお問い合わせください。</p>
				</div>

			</div><!--//sec01-->

			<div id="sec02" class="mt50">
				<h4>工場等のお客さまにご利用いただけるメニュー</h4>

				<p><strong>■高圧電力ＢＳ‐ＴＯＵ</strong></p>
				<p>より電力需要の少ない時間帯（夜間・日曜日・祝日等）に電気を多くお使いいただくことで負荷移行にご協力いただけるお客さまの料金メニュー</p>
				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>


				<p><strong>■高圧電力ＢＳ</strong></p>
				<p>主に平日の昼間時間帯に電気を多くお使いいただくお客さまの料金メニュー</p>
				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>

				<p><strong>■高圧自家発補給電力ＢＳ</strong></p>

				<p>お客さまの発電設備の検査、補修または事故によって生じる不足電力の補給にあてるために電気をお使いいただくお客さまの料金メニュー</p>

				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>


				<p><strong>■高圧予備電力ＢＳ</strong></p>

				<p>常時供給設備等の補修または事故によって生じる不足電力の補給にあてるために予備電線路により電気をお使いいただくお客さまの料金メニュー</p>

				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>


				<p><strong>■高圧臨時電力ＢＳ</strong></p>

				<p>契約使用期間が１年未満のお客さまの料金メニュー</p>

				<div class="fig-inner2">
					<img src="img/index_fig01.jpg" alt=""/>
				</div>


			</div><!--//sec02-->

			<div class="text-r mt30">
				<a class="font-m1 arrow-top" href="../">各種ご契約メニュー一覧へ戻る</a>
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
