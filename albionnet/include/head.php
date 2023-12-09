<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141239150-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141239150-1');
    </script>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4126261814359480",
        enable_page_level_ads: true
      });
    </script>
    
    <title>알비온넷 - 알비온 관련 유용한 정보</title>
    
    <meta charset="utf-8" />
    <meta property="og:site_name" content="알비온넷" /> 
	<meta property="og:title" content="알비온넷" />
    <meta property="og:description" content="알비온 관련 유용 정보" />
    <meta property="og:image" content="http://www.lifebefore.co.kr/albionnet//images/marketplace_bg.jpg" /> <!-- 1200X630 -->
	<meta property="og:image:width" content="610" />
	<meta property="og:image:height" content="319" />
    <meta property="og:url" content="http://www.lifebefore.co.kr/albionnet/index.php" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="shortcut icon" href="./images/favi.jpg" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css?ver=<?=rand(0, 10000); ?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./js/main.js?ver=<?=rand(0, 10000); ?>"></script>
</head>

<?php
    $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
    $db = mysql_select_db("lifebefore1", $conn);  //db 선택
?>