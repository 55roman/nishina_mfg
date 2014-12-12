
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


	<div class="content-wrapper">

		<nav id="content-nav">
			<?php include_once "contentnav.php" ?>
		</nav>


		<div id="local-content">

			<h2><span class="inner">申請単価一覧</span></h2>

			<h4 class="mt30">従量電灯Ａ</h4>
			<div class="table-wrapper">
				<table class="table-style1">
					<tr>
						<th></th>
						<th>単位</th>
						<th>現行単価</th>
						<th>申請単価</th>
					</tr>
					<tr>
						<th>最低料金</th>
						<td>１契約</td>
						<td>325.13</td>
						<td>231.12</td>
					</tr>
					<tr>
						<th>基本料金</th>
						<td>１契約</td>
						<td>325.13</td>
						<td>231.12</td>
					</tr>
					<tr>
						<th>電力量料金</th>
						<td>１契約</td>
						<td>325.13</td>
						<td>231.12</td>
					</tr>
				</table>
			</div>



			<?php include_once "elecprice_u.php" ?>
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
