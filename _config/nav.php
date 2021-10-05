<?php
include_once "pas.php";

//端末判定
$ua=$_SERVER['HTTP_USER_AGENT'];
$is_sp = false;
$is_sp = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));

$HTML['pageHeaderJsCss'] = <<< HTML
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0">
<title>{$pageTitle}</title>
<link rel="shortcut icon" href="{$top_url}favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="{$top_url}img/common/meta/favicon180.png">
<link rel="icon" type="image/png" sizes="32x32" href="{$top_url}img/common/meta/favicon32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{$top_url}img/common/meta/favicon16.png">
<link rel="canonical" href="{$full_url}"/>
<link rel="index" href="{$top_url}"/>
<meta name="description" content="{$description}">
<!-- サムネイル -->
<meta name="thumbnail" content="{$top_url}img/top/mainv02.jpg" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:title" content="{$pageTitle}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{$full_url}"/>
<meta property="og:image" content="{$top_url}img/common/meta/logo.png"/>
<meta property="og:site_name" content="金沢のホームページ制作個人事務所 ソラノデザイン"/>
<meta property="og:description" content="{$description}"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="{$pageTitle}"/>
<meta name="twitter:description" content="{$description}"/>
<meta name="twitter:image" content="{$top_url}img/common/meta/logo.png"/>
<meta itemprop="image" content="{$top_url}img/common/meta/logo.png"/>

<!--[if lt IE 9]>
<script src="{$pas}lib/html5shiv.js" async></script>
<script src="{$pas}lib/selectivizr-min.js" async></script>
<![endif]-->
<!--[if lte IE 9]>
<script src="{$pas}lib/flexibility.js" async></script>
<![endif]-->

<!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Oswald:wght@400;500;700&display=swap" rel="stylesheet"> -->

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "金沢のホームページ制作個人事務所 ソラノデザイン",
    "alternateName":"Sorano Design",
    "description":"金沢を中心にホームページ制作を行う、WEB制作事務所「ソラノデザイン」です。",
    "foundingDate": "2019-05-01",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "{$top_url}?s={search_term}",
      "query-input": "required name=search_term"
    },
    "headline": "金沢を中心にホームページ制作を行う、WEB制作事務所「ソラノデザイン」です。",
    "url": "{$top_url}",
    "address":{
      "@type":"PostalAddress",
      "addressRegion":"Ishikawaken",
      "addressLocality":"Kanazawashi",
      "postalCode":"9200921"
    },
    "datePublished": "2020-04-04T00:00:00+09:00",
    "dateModified": "2020-07-17T00:00:00+09:00",
    "author": {
      "@type": "Person",
      "name": "角田悠太"
    },
    "publisher": {
      "@type": "Organization",
      "name": "ソラノデザイン",
      "logo": {
        "@type": "ImageObject",
        "url": "{$top_url}img/common/meta/logo.png",
        "width": 512,
        "height": 512
      }
    }
  }
</script>
HTML;

$HTML['pageFooterJs'] = <<< HTML
<!--javascript-->
<script type="text/javascript" src="{$pas}lib/jquery-3.4.1.min.js"></script>
<script src="{$pas}js/common.js?{$time}"></script>
<script src="{$pas}lib/jquery.inview.min.js"></script>
<script src="{$pas}js/sorano.template.js?{$time}"></script>
HTML;
