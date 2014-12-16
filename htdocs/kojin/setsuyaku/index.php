
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SETSUYAKU;
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


<body id="setsuyaku" class="local-page">

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

			<h2><span class="inner">節約・省エネに役立つ情報のご案内</span></h2>

			<div class="sec01">

				<h3><span class="sub">電気ご使用量のお知らせ照会サービス</span><br />「はぴeみる電」</h3>
				<p class="indent">
					● 「はぴｅみる電」は、紙の「電気ご使用量のお知らせ」（検針票）にかわり、電気料金や電気ご使用量をWEBで確認いただける無料のサービスです。
				</p>

				<div class="row-2">
					<div class="col-2">
						<div><strong>＜電気のご使用実績の確認・比較＞</strong></div>
						<p class="font-m1 mt0">最大過去２年分の電気料金や電気のご使用量を自動で記録。グラフや一覧表で簡単に比較できます。</p>
						<div class="fig-inner2">
							<img src="img/index_fig01.jpg" alt="" />
						</div>
					</div>
					<div class="col-2 last-2">
						<div><strong>＜他のご家庭との比較＞</strong></div>
						<p class="font-m1 mt0">最大過去２年分の電気料金や電気のご使用量を自動で記録。グラフや一覧表で簡単に比較できます。</p>
						<div class="fig-inner2">
							<img src="img/index_fig02.jpg" alt=""/>
						</div>
					</div>

				</div>
				<div class="mt20">
					<div><strong>＜省エネ取り組み効果の確認＞</strong></div>
					<p class="font-m1 mt0">毎月省エネ目標を立てて、その結果を記録できます。</p>
				</div>

				<div class="row-2 mt20 mat-key round-a">
					<div class="col-2">
						<div><span class="label-bn">もっと便利ポイント</span></div>
						<p class="mt10 font-m1 lh-15">パソコン・スマートフォン・携帯電話で、電気料金や使用量を手軽に確認できます。</p>
						<div class="fig-inner2"><img src="img/index_sec01_fig03.png" alt="" /></div>
					</div>
					<div class="col-2 last-2">
						<div><span class="label-bn">もっと便利ポイント</span><strong style="color: #4fac95;">「みる電レポート」</strong></div>
						<p class="mt10 font-m1 lh-15">お客さまの電気のご使用状況の分析や、今後の省エネに活用いただける情報などを毎月お届けします。</p>
						<div class="fig-inner2"><img src="img/index_sec01_fig04.png" alt=""/></div>
					</div>
				</div>

				<div class="mt20 text-c"><div class="link-btn mb10"><a href="http://www.kepco.co.jp/home/shouene/hapielife/">詳しくはこちらから</a></div></div>


			</div>

			<hr />
			<div class="sec02 mt30">

				<div class="row-2">
					<div class="col-2">
						<h3><span class="sub">省エネ情報サイト</span><br/>「はぴeライフnavi」</h3>
						<p class="indent">● ご家庭でお取り組みいただける省エネ方法等をご紹介しています。また、省エネの取り組み効果や省エネ機器への買い替え効果を簡単にシミュレーションすることができます。</p>
					</div>
					<div class="col-2 last-2">
						<div class="fig-inner2"><img src="img/index_sec01_fig04.png" alt=""/></div>
					</div>
				</div>

				<div class="text-c">
					<div class="link-btn mb10"><a href="http://www.kepco.co.jp/home/service/miruden/index.html">詳しくはこちらから</a></div>
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
