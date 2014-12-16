
<?php

    //ルートへの相対パス
	$rel = "./";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $INDEX;
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


<body id="index">

<?php include_once "ga.php" ?>

<div id="page-container">


	<div class="header-wrapper">
		<?php include_once "header.php" ?>
	</div>

	<div class="content-wrapper">

		<div class="main-text-area">
			<div class="text1"><img src="img/index_main_text01.png" alt="電気料金の値上げ申請に関するお詫びとお知らせ" /></div>
			<div class="text2 mt25">
				<p class="mt10 mb10 lh-14">お客さまには、昨年４月に続き<span class="br">２年続けての値上げになり</span><br />ご負担をお願いいたしますことに<span class="br">深くお詫び申し上げます。</span></p>
			</div>
			<div class="text3 mt10">
				<a href="http://www.kepco.co.jp/home/ryoukin/s-ryoukin/" class="arrow-a-r font-m1">個人のお客さまはこちらをご覧ください</a>
			</div>
		</div>

		<div class="content sec01 mt10">
			<div class="row-2">
				<div class="col-2">
					<p>平素は、弊社事業に対し格別のご高配を賜り、<br />厚く御礼申し上げます。　</p>
					<p>このたび弊社は、火力燃料費の増加等により、やむを得ず、ご家庭や商店など低圧の電気をお使いいただいているお客さまの電気料金につきまして、経済産業大臣に値上げを申請いたしますとともに、工場やビルなど高圧・特別高圧の電気をお使いいただいている自由化分野のお客さまの電気料金につきましても、値上げをお願い申し上げることといたしました。</p>
				</div>
				<div class="col-2 last-2">
					<p>お客さまには、昨年来、節電に多大なるご協力を賜り、大変なご不便とご迷惑をおかけしておりますことに加え、厳しい経済情勢の中、電気料金の値上げにより、お客さまの生活や産業活動に多大なるご負担をおかけすることとなり、誠に申し訳なく、深くお詫び申し上げます。</p>
					<div class="mat-key text-c">
						<div class="link-btn w150"><a href="goaisatsu/">ごあいさつ</a></div>
					</div>
				</div>
			</div>
		</div>

		<div class="content sec02 mt10">
			<div class="row-2">
				<div class="col-2 w40p">
					<div class="border-a round-a heightLine-g1">
						<h3><span class="inner">値上げ申請に関するご説明</span></h3>
						<ul class="list-def mt30 mb30">
							<li><div class="link-btn"><a href="setsumei/naiyou/">値上げ申請の内容</a></div></li>
							<li><div class="link-btn"><a href="setsumei/haikei/">値上げ申請の背景</a></div></li>
							<li><div class="link-btn"><a href="setsumei/menu/">各種ご契約メニューの申請内容</a></div></li>
							<li><div class="link-btn"><a href="setsumei/sonota/">その他の変更内容</a></div></li>
						</ul>
					</div>
				</div>

				<div class="col-2 w60p last-2">
					<div class="border-a round-a heightLine-g1">
						<h3><span class="inner">値上げ申請の概要を映像でご確認いただけます</span></h3>

							<div id="top-mov">
								<a href="eizou/">
									<img src="dmmy/dm_top_mov.jpg" alt="" />
								</a>
							</div>
							<div class="text-c font-m2 mt5 mb5">
								値上げ申請の概要
							</div>

					</div>
				</div>
			</div>
		</div>

		<div class="mat-key mt30">
			<div class="sec03 content">
				<div class="row-2">
					<div class="col1 col-2 w80p round-a mt30 mb30">
						<div class="inner">
							<ul class="list-il">
								<li><div class="link-btn"><a href="shitsumon/">お客さまの疑問にお答えいたします</a></div></li>
								<li><div class="link-btn"><a href="setsuyaku/">節約・省エネに役立つ情報のご案内</a></div></li>
							</ul>
						</div>
					</div>
					<div class="col2 col-2 w20p mt30 last-2">
						<a href="torikumi/"><img src="img/index_sec03_bn02.jpg" alt="関西電力の現状の取り組み" /></a>
					</div>

				</div>
			</div>
		</div>

		<?php include_once "phonearea.php" ?>
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