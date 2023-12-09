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

    <title>라이프애프터 유틸 - 라이프비포어</title>
    
    <meta charset="utf-8" />
    <meta property="og:site_name" content="라이프비포어" /> 
	<meta property="og:title" content="라이프애프터 유틸 - 라이프비포어" />
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
    <script src="js/make.js?ver=<?=rand(0,1000); ?>"></script>
    <script src="js/data.js?ver=<?=rand(0,1000); ?>"></script>
    
    <style>
        h3{
            margin-top:40px;
        }
        .lb_calculator .item_kind {
            margin-top:30px;
        }
    </style>
</head>
<body>
<?php include './header_inc.php'; ?>
<div class="main">
    <div class="lb_calculator weapon_cal">
        <h1>데미지 계산기</h1>
        <h2>다양한 옵션이 다른 경우 어떤 장비가 가장 효율적인지 계산해드립니다.</h2>
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
        <h3>
            <p><i class="fas fa-exclamation-circle"></i> 이런 경우 사용 합니다.</p>
            <p>- 다른 옵션의 95식끼리 비교(소장판이 반드시 스노우 크랙보다 좋다는 보장은 없습니다.)</p>
            <p>- 95식과 다른 무기 비교(데미지 차이가 생각보다 크지 않다면 좀 더 저렴한 무기가 선택지가 될 수 있습니다.)</p>
            <p>- 무기 사용 목적에 따른 효율적인 선택(낸시 혹은 방어전)</p>
            <p>- 개조한 두개의 옵션중 어느 것이 효과적인지 선택</p>
            <p>- 특수 옵션에 따른 효율적인 선택(데미지 차이가 생각보다 크지 않다면 내구도 소모 감소, 강도, 크리티컬 증가 등이 선택지가 될 수 있습니다.)</p>
        </h3>
        <div class="weapon_cal_head">
             필수 정보를 입력해주세요.
        </div>
        <ul class="weapon_cal_box">
            <li>
                <h4>무기 공격력(파츠 포함)</h4>
                <input type="text" class="wcb_in" value="0">
                <p>본인 기준 개머리판 공격력 포함해서 입력.</p>
            </li>
            <li>
                <h4>무기 화력</h4>
                <input type="text" class="wcb_in" value="1">
                <p>예)95식 -> 1.3</p>
            </li>
            <li>
                <h4>적 방어력</h4>
                <input type="text" class="wcb_in" value="35">
                <p>예)미스카 2성 일반 감염자 방어력 : 약 17(실험중입니다. 정확하지 않음).</p>
                <p>예)미스카 3성 일반 감염자 방어력 : 약 30(실험중입니다. 정확하지 않음).</p>
                <p>대인전의 경우는 보통 적들이 본인 방어력과 +- 10정도 차이가 납니다. 본인 방어력 입력.</p>
            </li>
            <li>
                <h4>적 피해 감소(%)</h4>
                <input type="text" class="wcb_in" value="0">
                <p>감염자의 원거리 피해 감소 불명. 0으로 입력.</p>
                <p>전투스킬 '초급 방어 훈련' 4레벨 기준 8% 기본. 파츠 '체인 내피' 본인 기준으로 입력. 7성 기준 15%.</p>
            </li>
            <li>
                <h4>적 원거리 피해 감소(%)</h4>
                <input type="text" class="wcb_in" value="0">
                <p>감염자의 원거리 피해 감소 불명. 0으로 입력.</p>
                <p>본인 기준으로 입력. 머리방어구 + 방어구 평균 20%.</p>
            </li>
            <li>
                <h4>피해 증가(%)</h4>
                <input type="text" class="wcb_in" value="8">
                <p>전투스킬 '초급 전투 훈련' 4레벨 기준 8% 기본. 파츠 '정교한 총구' 본인 기준으로 입력. 7성 기준 15%.</p>
            </li>
            <li>
                <h4>원거리 피해 증가(%)</h4>
                <input type="text" class="wcb_in" value="15">
                <p>
                    장비에 효과가 없더라도 본인 전투스킬 '전장 엘리트' 반영해서 입력. 30레벨 기준 15%.
                </p>
            </li>
            <li>
                <h4>감염자 피해 증가(%)</h4>
                <input type="text" class="wcb_in" value="0">
                <p>
                    해당 되는 옵션이 있다면 입력.
                </p>
            </li>
        </ul>
        <button class="weapon_cal_btn">
            결과 보기
        </button>
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
        <div class="weapon_cal_final">
            <h4>데미지(한발 당)</h4>
            <div class="weapon_cal_result">
                <p class="humanity">유저 대상 : <span>10</span></p>
                <p class="gamty">감염자 대상 : <span>12</span></p>
            </div>
            <!-- 
            <textarea placeholder="비교를 위해 사용될 메모를 입력. (예: 거래의 도시 95식 소장판 9만골드 / 치명타 확률 80% 증가 있음, 정밀 속성 있음 등)" class="memo"></textarea>
            <button class="weapon_set_save">다른 아이템과의 비교를 위해 이 세팅을 저장합니다.</button>
            -->
        </div>
        <!--
        <div class="local_saved_weapon">
            <h4>비교 보기</h4>
            <h3 style="margin-top:20px">
                <p>- 먼저 [결과 보기] 버튼을 클릭하여 설정을 저장해주세요.</p>
                <p>- 저장한 아이템들을 상대의 방어 수치에 따라 계산합니다</p>
                <p>- 옵션 수치를 변경한 후, <span>반드시 [결과 보기]버튼을 먼저 클릭</span> 해주세요.</p>
            </h3>
            <ul class="local_saved_weapon_list">
                
            </ul>
            <p>적 방어력</p><input type="text" class="local_enemy" value="0"><br />
            <p>적 피해 감소(%)</p><input type="text" class="local_enemy" value="0"><br />
            <p>적 원거리 피해 감소(%)</p><input type="text" class="local_enemy" value="0"><br />
            <button class="bigo_btn">비교하기</button>
            <ul class="bigo_final">
                
            </ul>
        </div>
        -->
        <div class="by_line">
            <div class="by_line_head">
                공식 카페의 계산 공식을 참고했습니다. 정보 제공에 감사드립니다!
            </div>
            <div class="by_line_body">
                <p>(공격력-방어력)x화력x(1+피해증가)x(1+원/근거리피해증가)x(1-피해감소)x(1-원/근거리피해감소)</p>
                <p>라이프애프터 공식카페 <span>'SmiIe'</span>님</p>
                <p><a href="https://cafe.naver.com/lifeafter/65354">원본 링크</a></p>
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