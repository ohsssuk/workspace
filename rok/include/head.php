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
    
    <title>라오킹 센터</title>
    
    <meta charset="utf-8" />
    <meta property="og:site_name" content="라오킹 센터" /> 
	<meta property="og:title" content="라오킹 센터" />
    <meta property="og:description" content="라오킹 센터" />
    <meta property="og:image" content="http://www.lifebefore.co.kr/rok/images/logo.png" /> 
	<meta property="og:image:width" content="610" />
	<meta property="og:image:height" content="319" />
    <meta property="og:url" content="http://www.lifebefore.co.kr/rok/cal.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="shortcut icon" href="./images/favi.png" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css?ver=3">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <script src="js/main.js?ver=1"></script>
    
    <script>
        $(document).ready(function(){
            
        });
    </script>
</head>
<?php
$aCommanderStatTitle = array(
    '(준비중)',
    '기마병',/* 1 */
    '보병',/* 2 */
    '궁병',/* 3 */
    '종합',/* 4 */
    '리더십',/* 5 */
    '',/* 6 */
    '',/* 7 */
    '',/* 8 */
    '',/* 9 */
    '',/* 10 */
    '공격',/* 11 */
    '방어',/* 12 */
    '기동',/* 13 */
    '스킬',/* 14 */
    '지원',/* 15 */
    '야만',/* 16 */
    '공성',/* 17 */
    '주둔',/* 18 */
    '채집',/* 19 */
    '유동성',/* 20 */
); 
$aCommanderStat = array(
    'richard' => array('리차드 1세',array(2,18,12)),
    'lee' => array('이성계',array(3,18,14)),
    'hannibal' => array('한니발',array(5,17,11)),
    'saladin' => array('살라딘',array(1,17,15)),
    'kan' => array('징기즈칸',array(1,20,14)),
    'cons' => array('콘스탄티누스 1세',array(2,18,15)),
    'alex' => array('알렉산더 대왕',array(2,20,11)),
    'aselpled' => array('애설플레드',array(5,16,15)),
    'mina' => array('미나모토노 요시쓰네',array(1,16,14)),
    'elsid' => array('엘 시드',array(3,20,14)),
    'cleo' => array('클레오파트라 7세',array(4,19,15)),
    'sunduk' => array('선덕',array(4,19,11)),
    'julius' => array('율리우스 카이사르',array(5,17,11)),
    'prid' => array('프리드리히 1세',array(5,17,14)),
    'jojo' => array('조조',array(1,16,13)),
    'carul' => array('카를 마르텔',array(2,18,12)),
    'mahumet' => array('메흐메트 2세',array(5,17,14)),
    'mitunari' => array('이시다 미쓰나리',array(4,19,15)),
    'roha' => array('로하',array(4,16,15)),
    'janda' => array('잔 다르크',array(4,19,15)),
    'budika' => array('부디카',array(4,16,14)),
    'pela' => array('펠라기우스',array(1,18,14)),
    'skipio' => array('스키피오',array(5,17,11)),
    'sonmu' => array('손무',array(2,18,14)),
    'herman' => array('헤르만',array(3,18,14)),
    'osuman' => array('오스만 1세',array(5,17,14)),
    'gunoski' => array('구노스키 마사시게',array(3,18,14)),
    'ulzi' => array('을지문덕',array(2,18,11)),
    'beli' => array('벨리사리우스',array(1,16,13)),
    'vibarius' => array('바이바르스',array(1,17,14)),
); 
?>