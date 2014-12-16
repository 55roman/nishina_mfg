
<?php

    //ルートへの相対パス
	$rel = "../../";

    //初期化
	require_once($rel.'common/include/init.php');
	include_once "define.php";

    //設定項目 ******************************************************

    //ページID(要設定)(define.phpで定義)
    $content = $SETSUMEI;
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
				<li><a href="../menu/">各種ご契約メニューの<span class="br">申請内容</span></a></li>
				<li class="crnt">その他の<span class="br">変更内容</span></li>
			</ul>

			<h4>燃料費調整制度における基準燃料価格および基準単価の変更</h4>
			<p>電源構成の変動により燃料費調整の対象となる輸入燃料（原油・LNG・石炭）の消費数量が現行から見直しされるため、基準燃料価格および基準単価を変更いたします。それに伴い、燃料費調整を行う調整幅は、プラス調整・マイナス調整ともに大きくなります。</p>
			<p><strong>●基準燃料価格</strong></p>

			<div class="row-2">
				<div class="col-2 w60p">
					<div class="table-wrapper">
						<table class="table-style1">
							<tr>
								<th>現行</th>
								<th>値上げ後</th>
							</tr>
							<tr>
								<td>38,800円／kl</td>
								<td>00,000円／kl</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-2 w40p last-2"></div>
			</div>
			<p class="font-m2 lh-14">※基準燃料価格はA×α＋B×β＋C×γ（100円未満四捨五入）で算出しております。</p>


			<p><strong>●基準単価</strong></p>

			<div class="row-2">
				<div class="col-2 w60p">
					<div class="table-wrapper">
						<table class="table-style1">
							<tr>
								<th>区分</th>
								<th>現行</th>
								<th>値上げ後</th>
							</tr>
							<tr>
								<th>高圧</th>
								<td>0.179円／kWh</td>
								<td>0.000円／kWh</td>
							</tr>
							<tr>
								<th>特別高圧</th>
								<td>0.176円／kWh</td>
								<td>0.000円／kWh</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-2 w40p last-2"></div>
			</div>
			<p class="font-m2 lh-14">
				※基準単価は燃料費調整単価の算定に用いる基準値で、平均燃料価格に比べて1,000円変動した場合の値です。<br />
				※基準単価は消費税等相当額を含みます。
			</p>

			<h5><strong>【基準燃料単価の算定根拠】</strong></h5>

			<p><strong>●換算係数</strong></p>

			<div class="row-2">
				<div class="col-2 w60p">
					<div class="table-wrapper">
						<table class="table-style1">
							<tr>
								<th></th>
								<th>現行</th>
								<th>値上げ後</th>
							</tr>
							<tr>
								<th>原油（α）</th>
								<td>0.2313</td>
								<td>0.0000</td>
							</tr>
							<tr>
								<th>LNG（β）</th>
								<td>0.3006</td>
								<td>0.0000</td>
							</tr>
							<tr>
								<th>石炭（γ）</th>
								<td>0.5039</td>
								<td>0.0000</td>
							</tr>
						</table>
					</div>
				</div>
			<div class="col-2 w40p last-2"></div>
			</div>
			<p class="font-m2 lh-14">※α、β、γは原油換算率×燃料種別々燃料構成比で算出しております。</p>


			<p><strong>●貿易統計実績</strong></p>
			<div class="row-2">
				<div class="col-2 w60p">
					<div class="table-wrapper">
						<table class="table-style1">
							<tr>
								<th class="light">平均原油価格（A）</th>
								<td>52,519円／kl</td>
							</tr>
							<tr>
								<th>平均LNG価格（B）</th>
								<td>71,841円／t</td>
							</tr>
							<tr>
								<th>平均石炭価格（C）</th>
								<td>10,039円／t</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-2 w40p last-2"></div>
			</div>

			<p class="font-m2 lh-14">※現行（平成24年7〜9月）から変更いたしません。</p>


			<p><strong>【参考】 平成26年8〜10月の貿易統計実績による燃料費調整単価の算定例</strong></p>

			<div class="row-2">
				<div class="col-2 w60p">
					<div class="table-wrapper">
						<table class="table-style1">
							<tr>
								<th></th>
								<th>現行</th>
								<th>値上げ後</th>
							</tr>
							<tr>
								<th>高圧供給</th>
								<td>1.47円/kWh</td>
								<td>000円/kWh</td>
							</tr>
							<tr>
								<th>特別高圧供給</th>
								<td>1.44円/kWh</td>
								<td>000円/kWh</td>
							</tr>

						</table>
					</div>
				</div>
				<div class="col-2 w40p last-2">
					<div class="table-wrapper">
						<table class="table-style1">
							<tr>
								<th></th>
								<th>平成26年8〜10月</th>

							</tr>
							<tr>
								<th>平均原油</th>
								<td>69,902円/kl</td>

							</tr>
							<tr>
								<th>平均LNG</th>
								<td>86,025円/t</td>

							</tr>
							<tr>
								<th>平均石炭</th>
								<td>9,873円/t</td>

							</tr>

						</table>
					</div>
				</div>
			</div>

			<p class="font-m2 lh-14">※α、β、γは原油換算率×燃料種別々燃料構成比で算出しております。</p>



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
