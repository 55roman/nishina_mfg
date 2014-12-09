
<?php

    //ルートへの相対パス
	$rel = "./";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $INDEX;
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


<body id="index">

<?php include_once "ga.php" ?>

<div id="page-container">


	<div class="header-wrapper">
		<?php include_once "header.php" ?>
	</div>

	<div class="content-wrapper">

		<div class="main-text-area mt40">
			<div class="text1"><img src="img/index_main_text01.png" alt="電気料金の値上げ申請に関するお詫びとお知らせ" /></div>
			<div class="text2 mt40">
				<p>お客さまには、昨年４月に続き２年続けての値上げになり<br />
				ご負担をお願いいたしますことに深くお詫び申し上げます。</p>
			</div>
			<div class="text3 mt10">
				<a href="" class="arrow-a-r font-m1">法人のお客さまはこちらをご覧ください</a>
			</div>
		</div>

		<div class="content sec01 mt20">
			<div class="row-2">
				<div class="col-2">
					<p>平素は、弊社事業に対し格別のご高配を賜り、<br />厚く御礼申し上げます。　</p>
					<p>このたび弊社は、火力燃料費の増加等により、やむを得ず、ご家庭や商店など低圧の電気をお使いいただいているお客さまの電気料金につきまして、経済産業大臣に値上げを申請いたしますとともに、工場やビルなど高圧・特別高圧の電気をお使いいただいている自由化分野のお客さまの電気料金につきましても、値上げをお願い申し上げることといたしました。</p>
				</div>
				<div class="col-2 last-2">
					<p>
						お客さまには、昨年来、節電に多大なるご協力を賜り、大変なご不便とご迷惑をおかけしておりますことに加え、厳しい経済情勢の中、電気料金の値上げにより、お客さまの生活や産業活動に多大なるご負担をおかけすることとなり、誠に申し訳なく、深くお詫び申し上げます。
					</p>
					<div class="mat-key text-c">
						<div class="link-btn w200"><a href="greeting.html">ごあいさつ</a></div>
					</div>
				</div>
			</div>
		</div>

		<div class="content sec02 mt20">
			<div class="row-2">
				<div class="col-2 w40p">
					<div class="border-a round-a heightLine-g1">
						<h3><span class="inner">値上げ申請に関するご説明</span></h3>
						<ul class="list-def mt30 mb30">
							<li><div class="link-btn"><a href="">値上げ申請の内容</a></div></li>
							<li><div class="link-btn"><a href="">値上げ申請の理由</a></div></li>
							<li><div class="link-btn"><a href="">各種ご契約メニューの申請内容</a></div></li>
							<li><div class="link-btn"><a href="">その他変更内容</a></div></li>
						</ul>
					</div>
				</div>

				<div class="col-2 w60p last-2">
					<div class="border-a round-a heightLine-g1">
						<h3><span class="inner">値上げ申請の概要を映像でご確認いただけます</span></h3>
						<div id="top-mov">
							<img src="dmmy/dm_top_mov.jpg" width="100%" alt="" />
						</div>
						<div class="text-c font-m2 mt5 mb5">
							値上げ申請の概要
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mat-key mt40">
			<div class="sec03 content">
				<div class="row-2">
					<div class="col1 col-2 w60p round-a mt30 mb30">
						<ul class="list-il mt30 mb20 ml20">
							<li><div class="link-btn w220"><a href="">申請する単価一覧</a></div></li>
							<li><div class="link-btn w220"><a href="">ご質問にお答えします</a></div></li>
							<li><div class="link-btn w220"><a href="">値上げに関する資料</a></div></li>
							<li><div class="link-btn w220"><a href="">電気料金節約のご案内</a></div></li>
						</ul>
					</div>
					<div class="col2 col-2 w40p mt30 last-2">
						<ul class="list-il">
							<li><a href=""><img src="img/index_sec03_bn01.jpg" alt="電気料金シミュレーション" /></a></li><li><a href=""><img src="img/index_sec03_bn02.jpg" alt="関西電力の取り組み" /></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<?php include_once "elecprice.php" ?>
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
