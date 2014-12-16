
<?php

    //ルートへの相対パス
	$rel = "../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SETSUYAKU;
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

			<div class="mt30 border-a round-a">
				<h3><span class="inner">設備更新などによる省エネ・節電情報</span></h3>
				<ul class="list-il cols2">
					<li>
						<div class="link-btn"><a href="">省エネ・節電事例</a></div>
					</li>
					<li>
						<div class="link-btn"><a href="">省エネシミュレーション</a></div>
					</li>
					<li>
						<div class="link-btn"><a href="">補助金情報</a></div>
					</li>

				</ul>
			</div>


			<div class="mt30 border-a round-a">
				<h3><span class="inner">エネルギー管理による省エネ・節電</span></h3>
				<ul class="list-il cols2">
					<li>
						<div class="link-btn"><a href="">エネルギー管理の方法</a></div>
					</li>
					<li>
						<div class="link-btn"><a href="">デマンド監視制御装置による節電対策</a></div>
					</li>

				</ul>
			</div>


			<div class="mt30 border-a round-a">
				<h3><span class="inner">業種別の省エネ・節電情報</span></h3>
				<ul class="list-il cols2">
					<li>
						<div class="link-btn"><a href="">業種別の省エネ・節電方法</a></div>
					</li>

				</ul>
			</div>


			<div class="mt30 border-a round-a">
				<h3><span class="inner">季節別の省エネ・節電方法</span></h3>
				<ul class="list-il cols2">
					<li>
						<div class="link-btn"><a href="">今すぐできる節電ポイント集（夏）</a></div>
					</li>
					<li>
						<div class="link-btn"><a href="">今すぐできる節電ポイント集（冬）</a></div>
					</li>
				</ul>
			</div>

			<div class="mt30 border-a round-a">
				<h3><span class="inner">その他の省エネ・節電情報</span></h3>
				<ul class="list-il cols2">
					<li>
						<div class="link-btn"><a href="">動画で見る省エネ・節電対策</a></div>
					</li>
					<li>
						<div class="link-btn"><a href="">省エネ・節電お役立ちサイト集</a></div>
					</li>
				</ul>
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
