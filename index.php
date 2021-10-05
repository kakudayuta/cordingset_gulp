<?php include_once "_config/nav.php"?>


<!doctype html>
	<html lang="ja" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
	<head prefix="og: http://ogp.me/ns#">
		<?=$HTML['pageHeaderJsCss'];?>
		<link href="<?=$pas;?>lib/swiper/css/swiper.min.css?<?=$time;?>" rel="stylesheet" type="text/css">
		<link href="<?=$pas;?>css/index.css?<?=$time;?>" rel="stylesheet" type="text/css">
	</head>

	<body id="body">
		<div class="wrapper">
			<?php include($pas . '_config/header.php');?>

			<main id="main">
        <section class="mainv">
          <div class="mainv__inner">
            <div class="mainv__imageBox">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img class="mainv__image" src="<?=$pas;?>img/top/mainv01.jpg" width="1980" height="1042" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img class="mainv__image" src="<?=$pas;?>img/top/mainv02.jpg" width="1980" height="1042" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img class="mainv__image" src="<?=$pas;?>img/top/mainv03.jpg" width="1980" height="1042" alt="">
                  </div>
                </div>
              </div>

              <div class="swiper-pagination sp-none"></div>
            </div>

            <div class="mainv__textBox">
              <div class="mainv__textItem">
                <div class="mask__animation--whenLoading mask__box">
                  <p class="mask__inner mainv__text">
                    ソラノデザイン
                  </p>
                </div>
              </div>

              <div class="mainv__textItem">
                <div class="mask__animation--whenLoading mask__box">
                  <p class="mask__inner mainv__text">
                    WordPressテンプレート
                  </p>
                </div>
              </div>

              <div class="mainv__textItem">
                <div class="mask__animation--whenLoading mask__box">
                  <h2 class="mask__inner mainv__text">
                    @2021.06.20
                  </h2>
                </div>
              </div>
            </div>

            <div class="scroll__wrap">
              <p class="scroll__title enFont">view more</p>
              <p class="scroll__text"></p>
            </div>
          </div>
        </section>



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
		<script src="<?=$pas;?>lib/swiper/js/swiper.min.js?<?=$time;?>"></script>
		<script src="<?=$pas;?>js/index.js?<?=$time;?>"></script>
	</body>
</html>
