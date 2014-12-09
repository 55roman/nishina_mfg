<header id="pc">
	<div class="header-inner">
		<div class="upper cf">
			<h1>
				<?php if($content != $INDEX) { echo '<a href="/">'; } ?>
				<img src="/common/img/header_logo.gif" width="134" height="24" alt="関西電力" />
				<?php if ($content != $INDEX) { echo '</a>'; } ?>
			</h1>
			<nav class="unav">
				<ul>
					<li><a href=""><img src="/common/img/header_unav_sitemap.gif" alt="サイトマップ" /></a></li>
					<li><a href=""><img src="/common/img/header_unav_en.gif" alt="ENGLISH" /></a></li>
					<li>Google カスタム検索
						<gcse:searchbox-only></gcse:searchbox-only></li>
				</ul>
			</nav>
		</div>

		<nav class="header-nav">
			<ul class="header-nav-inner">

				<li>
					<div class="inner nav-ind">
					<a<?php if ($g_content == $IND) {
						echo ' class="crnt"';
					} ?> href="/news/">
						<img src="/common/img/header_nav_label_ind.png" alt="個人のお客さま"/>
					</a>
					</div>
				</li>

				<li>
					<div class="inner nav-biz">
					<a<?php if ($g_content == $BIZ) {
						echo ' class="crnt"';
					} ?> href="/event/">
						<img src="/common/img/header_nav_label_biz.png" alt="法人のお客さま"/>
					</a>
					</div>
				</li>
				<li>
					<div class="inner nav-kanden">
					<a<?php if ($g_content == $KANDEN) {
						echo ' class="crnt"';
					} ?> href="/profile/">
						<img src="/common/img/header_nav_label_kanden.png" alt="関西電力について"/>
					</a>
					</div>
				</li>

			</ul>
		</nav>
	</div>
</header>
<header id="sp-header">
	<div class="header-inner">
	<?php if ($content != $INDEX) {
		echo '<a href="/">';
	} ?>
	<h1><img src="/common/img/sp_header_logo.gif" alt="関西電力" width="97" height="46" /></h1>
	<?php if ($content != $INDEX) {
		echo '</a>';
	} ?>

	<nav class="head-nav">
		<ul>
			<li id="head-trigger-search"><img src="/common/img/sp_header_search.gif" alt="検索" width="50" height="45" /></li><li id="head-trigger-menu">
				<img src="/common/img/sp_header_menu.gif" alt="メニュー" width="50" height="45" /></li>
		</ul>
	</nav>
	</div>
	<div id="dd-search-container">
		<div id="dd-search">
			Google カスタム検索
			<gcse:searchbox-only></gcse:searchbox-only>
		</div>
	</div>
	<div id="dd-menu-container">
	<nav id="dd-menu">
		<ul class="dd-level1">
			<li><a href="">ごあいさつ</a></li>
			<li><a href="">値上げ申請に関するご説明</a></li>
			<li><a href="">申請(届出予定)単価一覧</a></li>
			<li><a href="">ご質問にお答えします</a></li>
			<li><a href="">電気料金節約のご案内</a></li>
			<li><a href="">電気料金シミュレーション</a></li>
			<li><a href="">電気料金の値上げに関する資料</a></li>
			<li class="activity"><a href="">関西電力の取り組み</a></li>
		</ul>
		<ul class="dd-level2">
			<li class="ind"><a href="">個人のお客様</a></li>
			<li class="biz"><a href="">法人のお客様</a></li>
			<li><a href="">サイトマップ</a></li>
			<li><a href="">English</a></li>
		</ul>
	</nav>
	</div>
</header>












