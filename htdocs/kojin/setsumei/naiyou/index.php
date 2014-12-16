
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
				<li class="crnt">値上げ申請<span class="br">の内容</span></li>
				<li><a href="../haikei/">値上げ申請<span class="br">の背景</span></a></li>
				<li><a href="../menu/">各種ご契約メニューの<span class="br">申請内容</span></a></li>
				<li><a href="../sonota/">その他の<span class="br">変更内容</span></a></li>
			</ul>

			<p class="mt30 font-p2 lh-14"><strong>「平成２７年４月１日からの平均◯◯.◯◯％の値上げ」を申請いたしました。<br />
				なお、実際の値上げ実施日・料金等は、経済産業大臣の認可を受けて決定されます。</strong></p>

			<p class="font-m2 lh-15">※ご契約メニューやご使用状況等によって値上げ幅は異なります。<br />
				※値上げ実施日・料金等は、認可後改めてお知らせいたします。
			</p>

			<h4 class="mt30">（１）「電源構成変分認可制度」に基づく値上げ申請について</h4>
			<p class="indent">
				● 「電源構成変分認可制度」は、認可を受けている電気料金の原価算定期間内において、事業者の自助努力の及ばない電源構成の変動があった場合に、原価を全て見直すことなく、当該部分の将来の原価の変動のみを料金に反映させる制度です。
			</p>
			<p class="indent">
				● 今回の値上げにおいては、その対象となる燃料費や購入電力料等の平成27年度における原価変動分0,000億円を変動額として国へ申請しております。
			</p>
			<p><strong>＜「電源構成変分認可制度」の対象となる原価＞</strong></p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig01.jpg" alt="" />
				</div>
			</div>

			<p><strong>＜変動額の内訳＞</strong></p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig02.jpg" alt=""/>
				</div>
			</div>
			<p class="mt20 indent font-m2 lh-14">・「燃料費」は、原子力プラントの再稼動の遅延に伴い、火力発電電力量の増加等により、現行の電気料金原価に比べ大幅に増加しております。</p>
			<p class="indent font-m2 lh-14">・「購入電力量」は、原子力プラントの再稼動の遅延に伴う他社からの購入電力量の増加等により、現行の電気料金原価と比べ○○○億円増加している一方、他社への販売電力料は○○億円減少しております。</p>
			<p class="indent font-m2 lh-14">・「バックエンド関係費用」は、原子力プラントの再稼動の遅延に伴う原子力発電電力量の減少により、現行の電気料金原価に比べ○○億円減少しております。</p>
			<p class="indent font-m2 lh-14">・「事業税」は、燃料費、バックエンド関係費用、購入・販売電力料の変動額をもとに算定を行っており、今回申請した電気料金原価は、現行の電気料金原価と比べ、課税対象である収入金額の増加により○○億円増加しております。</p>


			<h4>（2）原価算定の前提諸元</h4>
			<p class="indent">● 販売電力量は、現行の電気料金原価算定時における平成27年度の値としており、原油価格や為替といった前提諸元の変更はございません。</p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig03.jpg" alt=""/>
				</div>
			</div>

			<p><strong>【参考】高浜発電所・大飯発電所の再稼動時期見直し</strong></p>
			<p class="indent">● 今回の電気料金原価の算定において、高浜発電所3・4号機については、平成00年00月の再稼動を想定しており、大飯発電所3・4号機については、今回の原価算定期間中である平成27年度の再稼動は想定しておりません。</p>

			<p><strong>＜原子力プラントの再稼動計画（原子力利用率　前回：34.5%　→　今回：●●%）＞</strong></p>

			<div class="mat-key round-a fig-wrapper">
				<div class="fig-inner">
					<img src="img/index_fig04.jpg" alt=""/>
				</div>
			</div>


			<p class="mb0"><strong>【参考】電源構成変分認可制度</strong></p>
			<p class="mt5 font-m3 lh-14">【出典】経済産業省ニュースリリース（平成24年11月16日）別添1：一般電気事業供給約款料金算定規則等の一部を改正する省令の概要より抜粋（一部修正）</p>

			<div class="borderd-area round-a">
				<p class="font-m2 lh-14">電気料金値上げの認可を経ていることを条件に、当該原価算定期間内において、事業者の自助努力の及ばない電源構成の変動があった場合に、総原価を洗い替えることなく、当該部分の将来の原価の変動のみを料金に反映させる料金認可改定</p>

				<p class="font-m2 lh-14 indent">(1) 基本スキーム及び法的根拠（法律第19条第1項に基づく認可）<br />
				　・自動変動ではなく、公聴会等を経る通常の認可プロセスとする。<br/>
				　・当該スキームは、前回改定時に料金改定の認可を受けた事業者に適用。</p>
				<p class="font-m2 lh-14 indent">(2)適用条件<br />
				　・原価算定期間内において、社会的経済的事情の変動により、「燃料消費数量」の変更に伴う燃料費の変動が見込まれる場合に限る。</p>
				<p class="font-m2 lh-14 indent mb0"> (3)対象費用<br/>
				　・燃料消費数量に連動して変動する費用を対象とする。<br/>
				　・具体的には、以下の４項目9費用</p>
				<ul class="ml50 list-decimal font-m2 mt10">
					<li class="mb0 lh-12">燃料費</li>
					<li class="mb0 lh-12">バックエンド関係費用（使用済燃料再処理等発電費、特定放射性廃棄物処分費、原子力発電施設解体費）</li>
					<li class="mb0 lh-12">購入・販売電力料（地帯間購入電源費、他社購入電源費、地帯間販売電源料、他社販売電源料）</li>
					<li class=" lh-12">事業税</li>
				</ul>

				<p class="font-m2 lh-14">※本スキームによる料金値上げ後、原価算定期間中に当該事象が解消された場合には速やかに料金値下げを実施するよう、認可に当たり法第100条に基づき条件を付す。<br />
				※なお、電源構成の変動は託送供給における変動範囲内発電料金等の原価にも影響することから、一般電気事業託送供給約款料金算定規則についても所要の改正を行う。</p>
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
