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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/lb_cal.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/make.js"></script>
    
    <style>
        h3{
            margin-top:40px;
        }
        select,input[type="text"]{
            box-sizing: border-box;
            width:120px;
            height:30px;
            padding:0 10px;
        }
        input[type="checkbox"]{
            width:20px;
            height:20px;
            position: relative;
            top:5px;
        }
        .data_line_sub .data_box{
            width:100%;
        }
        textarea{
            width:100%;
            height:100px;
            resize: vertical;
        }
    </style>
    
    <script>
        function check() {
          if(fr.slw_maker.value == "") {
            alert("작성자명을 입력해주세요.");
            fr.slw_maker.focus();
            return false;
          }else if(fr.slw_pwd.value == "") {
            alert("비밀번호를 입력해 주세요.");
            fr.slw_pwd.focus();
            return false;
          }else if(fr.slw_soc_1.value <= 0) {
            alert("공격력이 없는 무기는 없습니다. 공격력을 입력해주세요.");
            fr.slw_soc_1.focus();
            return false;
          }else{
              return true
          };
        }
    </script>
</head>
<body>
<header>
    <div class="inner_header">
        <ul class="gnb">
            
        </ul>
    </div>
</header>
<div class="main">
<form action="sale_proc.php?wtype=wr" method="post" name="fr" onsubmit="return check()">
    <div class="lb_calculator weapon_cal">
        <h1>제작 거래</h1>
        <h2>합리적인 생산, 판매를 위한 게시판. 다양한 옵션 한번에 편하게 보기.</h2>
        <h3>
            <p><i class="fas fa-exclamation-circle"></i> 광고 작성</p>
            <p>- 정확한 정보를 입력해주세요.</p>
        </h3>
        <div class="data_line">
            <p class="data_line_head">작성자 정보</p>
            <div class="data_box">
                <p class="option_head option_head_pop">작성자</p>
                <input type="text" class="only_num"  name="slw_maker">
            </div>
            <div class="data_box">
                <p class="option_head option_head_pop">비밀번호</p>
                <input type="text" class="only_num"  name="slw_pwd">
            </div>
            <div class="data_line_helper">
                <p>- 작성자는 게임내에서 구매자가 제작자와 연락할 수 있는 유일한 수단입니다. 정확하게 입력해주세요.</p>
                <p>- 비밀번호는 광고 삭제에 사용됩니다. 기억하기 쉽게 입력해주세요.</p>
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">기본 정보</p>
            <div class="data_box">
                <p class="option_head">아이템</p>
                <select name="slw_title" class="warning_95">
                    <option>UZI</option>
                    <option>UMP</option>
                    <option>톰슨</option>
                    <option>590M</option>
                    <option>MP5</option>
                    <option>AK</option>
                    <option>모신나강</option>
                    <option>M24</option>
                    <option>반곡활</option>
                    <option>콤파운드활</option>
                    <option>95식</option>
                    <option>타보르</option>
                    <option>M416</option>
                    <option>AS50</option>
                    <option>유탄발사기</option>
                    <option>기타</option>
                </select>
            </div>
            <div class="data_box">
                <p class="option_head">서버 선택</p>
                <select name="slw_server">
                    <option>파플래닛</option>
                    <option>미스카 대학</option>
                    <option>희망의 골짜기</option>
                    <option>다베트 설산</option>
                    <option>가을빛 산림</option>
                    <option>스노우힐</option>
                </select>
            </div>
        </div>
        
        <div class="data_line">
            <p class="data_line_head">속성 조건</p>
            <div class="data_box">
                <p class="option_head option_head_pop">공격력</p>
                <input type="text" class="only_num"  name="slw_soc_1" value="0">
            </div>
            <div class="data_box">
                <p class="option_head option_head_pop">치명타율(%)</p>
                <input type="text" class="only_num"  name="slw_soc_2" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">건물 피해(%)</p>
                <input type="text" class="only_num"  name="slw_soc_3" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">발사 속도(%)</p>
                <input type="text" class="only_num"  name="slw_soc_4" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">헤드샷 피해(%)</p>
                <input type="text" class="only_num"  name="slw_soc_5" value="0">
            </div>
            <div class="data_box">
                <p class="option_head option_head_pop">감염자 피해(%)</p>
                <input type="text" class="only_num"  name="slw_soc_6" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">인간형 피해(%)</p>
                <input type="text" class="only_num"  name="slw_soc_7" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">동물 피해(%)</p>
                <input type="text" class="only_num"  name="slw_soc_8" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">장전 속도(%)</p>
                <input type="text" class="only_num"  name="slw_soc_9" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">산포도 감소(%)</p>
                <input type="text" class="only_num"  name="slw_soc_10" value="0">
            </div>
            <div class="data_box">
                <p class="option_head">반동 감소(%)</p>
                <input type="text" class="only_num"  name="slw_soc_11" value="0">
            </div>
            <div class="data_line_helper">
                <p>- 해당되지 않는 옵션은 빈칸으로 두시거나 0을 입력해주세요.</p>
                <p>- 도색으로 인해 생기는 효과도 입력해주세요.(예: 스노우크랙 감염자 피해 추가)</p>
                <p>- <strong style="font-weight:bold">*95식은 반드시 [진화]속성에 의한 증가값을 빼고 공격력을 입력해주세요!</strong></p>
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">확률 속성 조건</p>
            <div class="data_box">
                <input type="checkbox"  name="slw_soc_12" value="1"> 정밀
            </div>
            <div class="data_box">
                <input type="checkbox"  name="slw_soc_13" value="2"> 예광탄
            </div>
            <div class="data_box">
                <input type="checkbox"  name="slw_soc_14" value="3"> 버서커
            </div>
            <div class="data_box">
                <input type="checkbox"  name="slw_soc_15" value="4"> 손상
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">도색 선택</p>
            <div class="data_box">
                <p class="option_head">도색</p>
                <select name="slw_soc_16">
                    <option>일반</option>
                    <option>레인벤가드</option>
                    <option>스노우크랙</option>
                    <option>소장판</option>
                </select>
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">가격 조건</p>
            <div class="data_box">
                <p class="option_head option_head_pop">가격(골드)</p>
                <input type="text" class="only_num" name="slw_gold" value="0"> 골드
            </div>
            <div class="data_line_helper">
                <p>- 구매자들의 검색에 사용됩니다. 판매하는 가격을 입력해주세요.</p>
                <p>- 0을 입력하시면 '가격 협의'로 표시됩니다. 그러나 가격 이하 검색에서 표시 되지 않습니다.</p>
            </div>
        </div>
        <div class="data_line data_line_sub">
            <p class="data_line_head">상세 설명</p>
            <div class="data_box">
                <p class="option_head option_head_pop">내용 입력</p>
                <textarea name="slw_sub"></textarea>
            </div>
            <div class="data_line_helper">
                <p>- 다른 나타내고 싶은 설명을 작성해주세요.(예: 가격 흥정 가능, 공격력 최고 옵션 등)</p>
            </div>
        </div>
        
        <input type="submit" value="작성 완료" class="search_sale_final">
        <footer>
            <div class="inner_footer">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
            </div>
        </footer>
        
        <div class="ad_box">
            <img src="./images/ad_thumb.jpeg" alt="">
        </div>
    </div>
</form>
</div>
</body>
</html>