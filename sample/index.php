<?php include_once "../_config/nav.php"?>
	<!doctype html>
	<html lang="ja" itemscope itemtype="https://schema.org/WebSite" prefix="og: https://ogp.me/ns#">
	<head prefix="og: https://ogp.me/ns#">
		<?=$HTML['pageHeaderJsCss'];?>
		<link href="<?=$pas;?>css/sample.css?<?=$time;?>" rel="stylesheet" type="text/css">
	</head>

	<body id="body">
		<div class="wrapper">
			<?php include($pas . '_config/header.php');?>
			<main id="pageMain">
        <section class="dummy">
          <div class="dummy__inner">
            <div class="dummy__box MoveUp">MoveUp</div>

            <div class="dummy__box MoveLeft">MoveLeft</div>

            <div class="dummy__box MoveRight">MoveRight</div>

            <div class="dummy__box FadeIn">FadeIn</div>

            <div class="dummy__box MoveUp Delay400ms">MoveUp Delay400ms</div>

            <div class="dummy__box MoveLeft Delay800ms">MoveLeft Delay800ms</div>

            <div class="dummy__box MoveRight Delay1200ms">MoveRight Delay1200ms</div>

            <div class="dummy__box FadeIn Delay1300ms">FadeIn Delay1300ms</div>
          </div>
        </section>
			</main>
			<?php include($pas . '_config/footer.php');?>
		</div>
		<?=$HTML['pageFooterJs'];?>
		<!-- <script src="<?=$pas;?>js/sample.js?<?=$time;?>"></script> -->
	</body>
</html>
