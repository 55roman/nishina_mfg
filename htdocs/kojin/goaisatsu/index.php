
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $GOAISATSU;
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


<body id="goaisatsu" class="local-page">

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

			<h2><span class="inner">ごあいさつ</span></h2>

			<div class="mt30">

				<p class="mt0">平素は、弊社事業に対し格別のご高配を賜り、厚く御礼申し上げます。　</p>
				<p>このたび弊社は、火力燃料費の増加等により、やむを得ず、ご家庭や商店など低圧の電気をお使いいただいているお客さまの電気料金につきまして、経済産業大臣に値上げを申請いたしますとともに、工場やビルなど高圧・特別高圧の電気をお使いいただいている自由化分野のお客さまの電気料金につきましても、値上げをお願い申し上げることといたしました。</p>
				<p>お客さまには、昨年来、節電に多大なるご協力を賜り、大変なご不便とご迷惑をおかけしておりますことに加え、厳しい経済情勢の中、電気料金の値上げにより、お客さまの生活や産業活動に多大なるご負担をおかけすることとなり、誠に申し訳なく、深くお詫び申し上げます。</p>
				<p>弊社は、今後も引き続き、安全確保を大前提に原子力の再稼動に全力で取り組むとともに、聖域を設けず、さらなる徹底した経営効率化に最大限の努力を積み重ねながら、最大の使命である電力の安全・安定供給に全力を尽くしてまいります。</p>
				<p>何卒、ご理解を賜りますようお願い申し上げます。</p>
				<p class="mt30 text-r">取締役社長　八木誠</p>

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
