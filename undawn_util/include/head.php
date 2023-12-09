<?php
    $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
    $db = mysql_select_db("lifebefore1", $conn);  //db 선택
    $asset_version = '100';
?>

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
    
    <title>언던 유틸 - 언던 관련 편의 기능 제공</title>
    
    <meta charset="utf-8" />
    <meta property="og:site_name" content="언던 유틸" /> 
	<meta property="og:title" content="언던 유틸" />
    <meta property="og:description" content="언던 관련 편의 기능 제공" />
    <meta property="og:image" content="" /> <!-- 1200X630 -->
	<meta property="og:image:width" content="610" />
	<meta property="og:image:height" content="319" />
    <meta property="og:url" content="" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="shortcut icon" href="./images/favi.jpeg" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css?v=<?=$asset_version?>">
    <link rel="stylesheet" href="./css/cal.css?v=<?=$asset_version?>">
    <link rel="stylesheet" href="./css/todo.css?v=<?=$asset_version?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./js/data.js?v=<?=$asset_version?>"></script>
    <script type="text/javascript" src="./js/main.js?v=<?=$asset_version?>"></script>
</head>