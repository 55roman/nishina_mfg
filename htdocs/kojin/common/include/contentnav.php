<ul class="main">
	<li><a href="<?php echo $rel ?>">トップ</a></li>
	<li><a href="<?php echo $rel ?>goaisatsu/"
				<?php if ($content == $GOAISATSU) {
					echo ' class="crnt"';
				} ?>
				>ごあいさつ</a></li>
	<li><a href="<?php echo $rel ?>setsumei/naiyou/"
				<?php if ($content == $SETSUMEI) {
					echo ' class="crnt"';
				} ?>
				>値上げ申請に関する<br/>ご説明</a></li>
	<li><a href="<?php echo $rel ?>tanka/"
				<?php if ($content == $TANKA) {
					echo ' class="crnt"';
				} ?>
				>申請（届出予定）<br/>単価一覧</a></li>
	<li><a href="<?php echo $rel ?>shitsumon/"
				<?php if ($content == $SHITSUMON) {
					echo ' class="crnt"';
				} ?>
				>お客さまの疑問に<br/>お答えいたします</a></li>
	<li><a href="<?php echo $rel ?>setsuyaku/"
				<?php if ($content == $SETSUYAKU) {
					echo ' class="crnt"';
				} ?>
				>節約・省エネに役立つ<br />情報のご案内</a></li>
	<li><a href="<?php echo $rel ?>simulation/"
				<?php if ($content == $SIMULATION) {
					echo ' class="crnt"';
				} ?>
				>電気料金<br/>シミュレーション</a></li>
	<li><a href="<?php echo $rel ?>shiryou/"
				<?php if ($content == $SHIRYOU) {
					echo ' class="crnt"';
				} ?>
				>電気料金の値上げ申請<br/>に関する資料</a></li>
</ul>
<ul class="banner">
	<li><a href="<?php echo $rel ?>torikumi/"><img src="<?php echo $rel ?>common/img/cnav_torikumi.jpg" alt="関西電力の取り組み" /></a></li>
	<li><a href="<?php echo $rel ?>eizou/"><img src="<?php echo $rel ?>common/img/cnav_eizou.jpg" alt="値上げ申請の概要を映像でご確認いただけます" /></a></li>
</ul>