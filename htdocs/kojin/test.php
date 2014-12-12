
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

		<ul>
			<li><button id="button">Please click</button></li>
			<li>b</li>
			<li>c</li>
		</ul>
	</div>
	<!--//content-wrapper-->

	<div class="pagetop content">
		<a href="#" class="arrow-top">このページのトップへ戻る</a>
	</div>

	<?php include_once "footer.php" ?>

</div><!--//page-container-->



<script>
	var downloadLink = document.getElementById('button');
	addListener(downloadLink, 'click', function () {
		console.log("click");
		ga('send', 'event', 'button', 'click', 'nav-buttons');
	});
	function addListener(element, type, callback) {
		if (element.addEventListener) element.addEventListener(type, callback);
		else if (element.attachEvent) element.attachEvent('on' + type, callback);
	}
</script>
</body>

</html>
