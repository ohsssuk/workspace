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
    
    <link rel="shortcut icon" href="./images/favi.png" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css?ver=<?=rand(0,1000); ?>">
    <link rel="stylesheet" href="./css/lb_cal.css?ver=<?=rand(0,1000); ?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <script src="js/main.js?ver=<?=rand(0,1000); ?>"></script>
    <script>
        $(function(){
            if(confirm('시즌3 패치로 맵 정보가 변경 되었습니다. 맵 공략 페이지로 이동할까요?')){
                location.href = './worldmap.php';   
            }
        });
    </script>
</head>
<body>
<?php include './header_inc.php'; ?>
<div class="main">
    <div class="map_checker">
        <h1>맵별 정보</h1>
        <h2>맵별 정보입니다. 처음 이용하시는 분들은 하단의 안내를 읽어주시길 권장합니다.</h2>
        <br />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 디스플레이_수평 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4126261814359480"
             data-ad-slot="5536762597"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             window.onload = function() {
                (adsbygoogle = window.adsbygoogle || []).push({});
             }
        </script>
        <ul class="map_kind">
            <li class="checked">스노우 힐</li><!--
            --><li>가을빛 산림</li><!--
            --><li>사막의 요새</li><!--
            --><li>모스 늪지</li><!--
            --><li>다베트 설산</li>
        </ul>
        <ul class="map_detail map_detail_timer">
           <li class="checked">ALL<div class="deco_line"></div></li><!--
            --><li>고분자 상자(타이머)<div class="deco_line"></div></li><!--
            --><li>NPC<div class="deco_line"></div></li><!--
            --><li>탐색 정보<div class="deco_line"></div></li><!--
            --><li>기타 정보<div class="deco_line"></div></li>
        </ul>
        <ul class="map_detail map_detail_normal">
            <li class="checked">ALL<div class="deco_line"></div></li><!--
            --><li class="checked">NPC<div class="deco_line"></div></li><!--
            --><li>탐색 상자<div class="deco_line"></div></li><!--
            --><li>다른 정보<div class="deco_line"></div></li><!--
            --><li>동물/호박<div class="deco_line"></div></li>
        </ul>
        <ul class="map_box">
            <li class="snowhill">
                <div class="map_img">
                    <div class="plus_map"></div>
                    <div class="time_alert">타이머가<br class="only_mb"> 리셋 되었습니다!</div>
                    <div class="point_list coatbox_list">
                        <div class="box_point box_point_1">
                            <img src="./images/point_icon.png" alt="" class="icon point">
                            <img src="./images/load_icon.png" alt="" class="icon load">
                            <div class="timer">남은 시간<br /><span class="tis">3</span> 분 <span class="tis">42</span> 초</div>
                            <input type="hidden" value="221">
                        </div>
                        <div class="box_point box_point_2">
                            <img src="./images/point_icon.png" alt="" class="icon point">
                            <img src="./images/load_icon.png" alt="" class="icon load">
                            <div class="timer">남은 시간<br /><span class="tis">3</span> 분 <span class="tis">42</span> 초</div>
                            <input type="hidden" value="221">
                        </div>
                        <div class="box_point box_point_3">
                            <img src="./images/point_icon.png" alt="" class="icon point">
                            <img src="./images/load_icon.png" alt="" class="icon load">
                            <div class="timer">남은 시간<br /><span class="tis">3</span> 분 <span class="tis">42</span> 초</div>
                            <input type="hidden" value="221">
                        </div>
                        <div class="box_point box_point_4">
                            <img src="./images/point_icon.png" alt="" class="icon point">
                            <img src="./images/load_icon.png" alt="" class="icon load">
                            <div class="timer">남은 시간<br /><span class="tis">3</span> 분 <span class="tis">42</span> 초</div>
                            <input type="hidden" value="221">
                        </div>
                        <div class="box_point box_point_5">
                            <img src="./images/point_icon.png" alt="" class="icon point">
                            <img src="./images/load_icon.png" alt="" class="icon load">
                            <div class="timer">남은 시간<br /><span class="tis">3</span> 분 <span class="tis">42</span> 초</div>
                            <input type="hidden" value="221">
                        </div>
                    </div> <!-- 포인트 목록 -->
                    <!--
                    <div class="point_list npc_list">
                        <div class="npc_point npc_point_1 dorosi">
                            <img src="./images/2_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_2 dorosi">
                            <img src="./images/2_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_3 dorosi">
                            <img src="./images/2_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_4 berisi">
                            <img src="./images/3_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_5 berisi">
                            <img src="./images/3_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_6 berisi">
                            <img src="./images/3_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_7 vene">
                            <img src="./images/1_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_8 vene">
                            <img src="./images/1_icon.png" alt="">
                        </div>
                        <div class="npc_point npc_point_9 vene">
                            <img src="./images/1_icon.png" alt="">
                        </div>
                    </div> -->
                </div>
            </li>
            <li class="gaulbit">
                <div class="map_img">
                    <div class="plus_map"></div>
                </div>
            </li>
            <li class="samak">
                <div class="map_img">
                    <div class="plus_map"></div>
                </div>
            </li>
            <li class="mos">
                <div class="map_img">
                    <div class="plus_map"></div>
                </div>
            </li>
            <li class="dabet">
                <div class="map_img">
                    <div class="plus_map"></div>
                </div>
            </li>
        </ul>
        <h3 class="mapchecker_h3">
            <p>- 해당 위치에 보물상자가 없는 경우 아이콘을 <span>클릭</span>해주시면 <span>남은 최대 리젠 시간을 표시</span>합니다.</p>
            <p>- 해당 위치에서 보물상자를 <span>획득한 경우</span>에도 아이콘을 <span>클릭</span>해주세요. <span>남은 리젠 시간을 표시</span>합니다.</p>
            <p>- 상자 리젠 시간은 3분 42초지만 거한 좀비가 리젠되면 같이 생성됩니다. 따라서 예정된 리젠시간보다 더 빠르게 생성될 수 있습니다.</p>
        </h3>
        <br /><br />
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
        <div class="by_line">
            <div class="by_line_head">
                정보 제공에 감사드립니다.
            </div>
            <div class="by_no_ads"></div>
            <div class="by_line_body">
                <p>라이프애프터 공식 카페 <span>'은하수'</span>님</p>
            </div>
        </div>
        <!-- 댓글창 시작 -->
        <h6 class="rp_title">LIFEREPLY</h6>
        <div class="rp_help">
            전체 댓글 목록입니다. 건의사항, 하고 싶은 말, 잡담 등을 작성해주세요. 라이프애프터 관련이라면 광고도 허용합니다.
        </div>
        <script>
            function rp_check(){
                if(rp_fr.rt_writer.value == "" || rp_fr.rt_pwd.value == "" || rp_fr.rt_text.value == "") {
                    alert("빈칸을 모두 입력해야 합니다");
                    return false;
                }
            }
        </script>
        <form action="./reply_proc.php?wtype=wr" method="post" name="rp_fr" onsubmit="return rp_check()">
        <div class="rp_write">
            <input type="text" placeholder="작성자" name="rt_writer">
            <input type="text" placeholder="비밀번호" name="rt_pwd">
            <textarea name="rt_text" id="" placeholder="내용을 입력해주세요" name="rt_text"></textarea>
            <input type="submit" class="reply_btn" value="등록">
        </div>
        </form>
        <?php include "./reply.php"; ?>
        <!-- 댓글창 종료 -->
        <footer>
            <div class="inner_footer">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>