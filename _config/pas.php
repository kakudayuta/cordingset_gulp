<?php
  $request_url = $_SERVER["REQUEST_URI"];

	$request_url_explode = explode('/', $request_url);

	$url_count = count($request_url_explode);

  $folder_name = $request_url_explode[$url_count - 2] ? $request_url_explode[$url_count - 2] : null;

  $folder_name2 = $request_url_explode[$url_count - 2] ? $request_url_explode[$url_count - 2] : null;

  $class_of_main = '';

	$HTTPS = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';

	$HTTP_HOST = $_SERVER['HTTP_HOST'];

	$top_url = $HTTPS . $HTTP_HOST . "/";

	$full_url = $HTTPS . $HTTP_HOST . $request_url;

  $pas = "";

	if ($_SERVER["SERVER_NAME"] == "localhost") {
		$url_count_set = $url_count - 1;
	} else if ($_SERVER["SERVER_NAME"] == "kakudayuta.com") {
		$url_count_set = $url_count - 2;
	} else {
		$url_count_set = $url_count;
	}

	for ($i = 2; $i < $url_count_set; $i++) { $pas .= "../";}

	$time = time();
  // $time = "20200720";

  // if(strpos($request_url,'column') !== false){
  //   $folder_name = 'column';
  // }

  // if(strpos($request_url,'works') !== false){
  //   $folder_name = 'works';
  // }

  //メインのページタイトル
  $pageTitle = "金沢市のホームページ制作会社【ソラノデザイン】｜石川県金沢市で人気のホームページ制作会社";

	//下層ページタイトルの設定
	$viewPageTitle = null;

	//ページタイトルとパンくずの名前が違うイレギュラーの場合に設定
	$pankuzuName = null;

	//description
  $description = "石川県金沢市を中心にホームページ制作を行う個人事務所「ソラノデザイン」です。相場に比べ格安の料金で、ホームページ制作を承っています。金沢でのホームページ制作、Wordpress対応、SEO対策、レスポンシブ化など、WEB制作に関わる事はなんでも、金沢のホームページ制作事務所、ソラノデザインへお任せください。";

  $is_service_page = false;

	//トップページ以外
	if ($folder_name){
		switch ($folder_name) {
			// サンプル
			case $folder_name == "sample" && !$request_url_explode[$url_count - 1];
				$viewPageTitle = "サンプル";
				$pankuzuName = "サンプル";
        $description = "石川県金沢市を中心にホームページ制作を行う、WEB制作事務所「ソラノデザイン」のサービス紹介ページです。制作会社さんに比べ格安の料金で、ホームページ制作のご依頼を承っております。企画構成、デザイン、Wordpress対応、スマートフォン対応、SEO対策など、WEBに関する事でしたらなんでもお問い合わせください";
				break;
			// Contactページ
			case $folder_name == "contact" && !$request_url_explode[$url_count - 1];
				$viewPageTitle = "お問い合わせ";
				$pankuzuName = "お問い合わせ";
        $description = "石川県金沢市を中心にホームページ制作を行う、WEB制作事務所「ソラノデザイン」です。 制作会社さんに比べ格安の料金で、個人事業主・中小企業・店舗向けwebサイト・ホームページ制作のご依頼を承っております。お問い合わせはこちらのページからどうぞ。";
				break;
			// Contactページ thanks.php
			case $folder_name == "contact" && $request_url_explode[$url_count - 1] == "thanks.php";
				$viewPageTitle = "お問い合わせありがとうございました";
				$pankuzuName = "お問い合わせ完了";
				break;
    }

    if ($pageTitle) {
      $pageTitle = $viewPageTitle . "｜" . $pageTitle;
    } else {
      $pageTitle = $viewPageTitle;
    }
	}
?>
