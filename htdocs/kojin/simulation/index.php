
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SIMULATION;
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


<body id="simulation" class="local-page">

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

			<h2><span class="inner">値上げ影響額シミュレーション</span></h2>

			<p>電気のご契約容量、ご使用量などを入力していただくことにより、電気料金の試算を行います。電気のご契約内容については、毎月お届けしております「電気ご使用量のお知らせ」（検針票）でご確認いただけます。</p>

			<div class="mat-key text-c">
				<div class="link-btn pl20 pr20"><a href="kakunin.php" target="_blank">ご契約メニューのご確認方法</a></div>
			</div>

			<div class="mt30 border-a round-a">
				<h3><span class="inner">電気料金シミュレーション</span></h3>

				<div class="mt0 mb0 ml20 mt20">
					<p class="mb0">現在のご契約メニューにおいて、「現行単価」と「申請中単価」での電気料金の差額を試算します。</p>
					<p class="mt5 font-m2 lh-14">※燃料費調整額等により、試算結果とお客さまが実際にお支払いいただく電気料金は異なる場合があります。</p>
				</div>
				<ul class="mt0 list-il cols3 pt10">
					<li><div class="link-btn"><a href="#" target="_blank">従量電灯Ａ</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">従量電灯Ｂ</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">はぴeタイム</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">時間帯別電灯</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">深夜電力Ｂ</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">季時別電灯ＰＳ</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">低圧電力</a></div></li>
					<li><div class="link-btn"><a href="#" target="_blank">低圧総合利用契約</a></div></li>
				</ul>
				<div class="font-m2 ml20 mb10 mr20 lh-14">※試算結果はあくまでも試算条件にもとづいたもので、お客さまが実際にお支払いいただく電気料金は、異なる場合があります。</div>

			</div>

			<div class="mt30 border-a round-a">
				<h3><span class="inner">ご契約メニュー変更シミュレーション</span></h3>
				<div class="pt20 pr20 pb20 pl20">
					<p class="mt0">「申請中単価」にて、現在のご契約メニューとご希望のご契約メニューでの電気料金の電気料金の差額を試算いたします。</p>
					<div class="mat-key round-a">
						<p class="text-c col-keydark">従量電灯A・従量電灯B・はぴeタイム・時間帯別電灯</p>
						<div class="text-c mb10">
							<div class="link-btn inline"><a href="#" target="_blank">現在のご契約メニューと他のご契約メニューの試算を行う</a></div>
						</div>
					</div>
					<p class="font-m2 lh-14">
						※その他のご契約種別については、お近くの関西電力へお問い合わせください。<br/>
						※試算結果はあくまでも試算条件にもとづいたもので、お客さまが実際にお支払いいただく電気料金は、異なる場合があります。<br/>
						※このサービスのご利用は、下記の契約種別に限らせていただきます。
					</p>
				</div>
			</div>

			<div class="caution">
				<h3>電気料金シミュレーションのご使用に当たってのご注意</h3>
				<div class="inner">
					<h4>試算条件・試算結果について</h4>
					<ul class="list-decimal">
						<li>
							「電気料金シミュレーション」の試算結果について<br />
							・再生可能エネルギー発電促進賦課金単価は、試算当日の単価で試算しております。
						</li>
						<li>
							「ご契約メニュー変更シミュレーション」の試算結果について<br/>
							・燃料費調整額・再生可能エネルギー発電促進賦課金は含まれておりません。<br/>
							・口座振替割引は適用しておりません。
						</li>
					</ul>
					<p>ご使用方法などについてご不明な点がございましたら、お近くの事業所までお電話ください。</p>
					<p><a href="http://www.kepco.co.jp/corporate/info/community/index.html" class="arrow-a">事業所一覧へ</a></p>
					<p>なお、お問い合わせについては、<br />当社営業時間内（平日9:00～17:00）の間にお願いいたします。</p>
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
