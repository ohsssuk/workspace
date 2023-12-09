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
    
    

    <title>라이프비포어 - LIFEBEFORE</title>
    
    <meta charset="utf-8" />
    <meta property="og:site_name" content="라이프비포어" /> 
	<meta property="og:title" content="라이프비포어" />
    <meta property="og:description" content="라이프애프터 유틸리티 웹사이트" />
    <meta property="og:image" content="http://lifebefore.dothome.co.kr/images/thumb.jpg" /> <!-- 1200X630 -->
	<meta property="og:image:width" content="610" />
	<meta property="og:image:height" content="319" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Fe0-TvLS7mA0Zp6jCMe1_KPtMl8vw2M9p1Jg5SQycoA" />
    
    <link rel="shortcut icon" href="./images/favi.png" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css?ver=<?=rand(0,1000); ?>">
    <link rel="stylesheet" href="./css/lb_cal.css?ver=<?=rand(0,1000); ?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <script src="js/main.js?ver=<?=rand(0,1000); ?>"></script>
    
    <style>
        .login_wrap{
            max-width: 900px;
            width: 100%;
            position: relative;
            margin: 0 auto;
            padding-top: 90px;
        }
        .lib_login_btn_wrap{
            padding:20px 0;
            margin-top:30px;
            margin-bottom: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php include './header_inc.php'; ?>
<div class="login_wrap">
    <script type="text/javascript" src="./js/naver_login.js" charset="utf-8"></script>
    
<!--
    <div class="main_thumb">
        <img class="login_img" src="./images/index_bg.png" alt="라이프비포어">
    </div>
-->
    <h1>로그인</h1>
    <div class="lib_login_btn_wrap">
        <div id="naverIdLogin"></div>
    </div>
        
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 디스플레이_수평 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4126261814359480"
         data-ad-slot="5536762597"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    
    <script type="text/javascript">
	var naverLogin = new naver.LoginWithNaverId(
		{
			clientId: "IynxH5b4yzkXMmPHgIbQ",
			callbackUrl: "http://www.lifebefore.co.kr/login_callback_proc.php",
			isPopup: false, /* 팝업을 통한 연동처리 여부 */
			loginButton: {color: "green", type: 3, height: 60} /* 로그인 버튼의 타입을 지정 */
		}
	);
	
	/* 설정정보를 초기화하고 연동을 준비 */
	naverLogin.init();
	
</script>
</div>
</body>
</html>