
<?php

    //ルートへの相対パス
	$rel = "../../";

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
				<li><a href="../naiyou/">値上げ申請<span class="br">の内容</span></a></li>
				<li><a href="../haikei/">値上げ申請<span class="br">の背景</span></a></li>
				<li class="crnt">各種ご契約メニュー<span class="br">の申請内容</span></li>
				<li><a href="../sonota/">その他の<span class="br">変更内容</span></a></li>
			</ul>



			<h4>標準的なメニューの概要</h4>
			<p>平成25年4月1日以降の新単価をご確認いただけます。</p>

			<div class="mat-key round-a">
				<ul class="list-def text-c ml10">
					<li class="mb0"><a href="500kw_less/" class="font-def arrow-a">高圧（契約電力500kW未満）の標準的なメニュー</a></li>
					<li class="mb0"><a href="" class="font-def arrow-a">高圧（契約電力500kW以上）の標準的なメニュー</a></li>
					<li class="mb0"><a href="" class="font-def arrow-a">特別高圧の標準的なメニュー</a></li>

				</ul>
				<div class="text-c mt20">
					<div class="link-btn"><a href="">特定規需要供給条件について</a></div>
				</div>
			</div>

			<p>商店・事務所など低圧（100ボルトまたは200ボルト）でご契約いただいているお客さまの料金メニュー</p>

			<div class="mat-key round-a text-c">
				<div class="text-c">
					<div class="link-btn pl20 pr20"><a href="">料金メニュー</a></div>
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
