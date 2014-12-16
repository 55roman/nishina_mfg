
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SHIRYOU;
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


<body id="shiryou" class="local-page">

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

			<h2><span class="inner">電気料金の値上げ申請に関する資料</span></h2>

			<h4 class="mt40">お客さま用パンフレット、チラシ</h4>
			<div class="row-3">
				<div class="col-3">
					<a href="data/pdf_kisei.pdf">
						<div class="mat-key heightLine-g1 text-c pt20">
							<img src="img/index_thumb_kisei.jpg" alt="" />
						</div>
						<div class="mt10 text-c font-m1 lh-14">
							電気料金の値上げ申請について<br />
							＜規制部門＞
						</div>
					</a>
				</div>
				<div class="col-3">
					<a href="data/pdf_jiyuu.pdf">
						<div class="mat-key heightLine-g1 text-c pt20">
							<img src="img/index_thumb_jiyuu.jpg" alt=""/>
						</div>
						<div class="mt10 text-c font-m1 lh-14">
							電気料金の値上げ申請について<br/>
							＜自由化部門＞
						</div>
					</a>
				</div>
				<div class="col-3 last-3">
					<a href="">

					</a>
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
