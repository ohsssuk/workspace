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
    <script src="js/main.js?version=2"></script>
    <script src="js/data.js?version=2"></script>
    
    <style>
        .resource_list>li{
            display:inline-block;
            margin:5px 0;
        }
        .send_set{
            width:100%;
            margin-top:40px;
            border:1px solid #bbb;
            padding:20px 10px;
            box-sizing: border-box;
        }
        .send_set input,.send_set select{
            box-sizing: border-box;
            width:100%;
            max-width: 400px;
            height:40px;
            margin-top:10px;
        }
        .send_set input[type='text']{
            padding:0 10px;
        }
        .send_set select{
            width:40%;
            max-width: 400px;
            height:40px;
            padding:0 10px;
            box-sizing: border-box;
            float:left;
        }
        .send_set input.submit_btn{
            width:59%;
            height:40px;
            margin-left:1%;
            cursor: pointer;
            background: #314250;
            color: #fff;
            position: relative;
            border:none;
        }
        .resource_list{
            border:1px solid #314250;
            padding-top:40px;
            margin-top:0;
            box-sizing: border-box;
        }
        .resource_title_f{
            text-align:center;
            margin-top:30px;
            transform: translateY(50%);
            box-sizing: border-box;
        }
        .resource_title_f p{
            display: inline-block;
            padding:5px 10px;
            background:#fff;
            font-size:18px;
            line-height: 1;
            color:#314250;
        }
    </style>
    
    <script>
        $(document).ready(function(){
            var html = '';
            jawon.forEach(function(category){
                console.log(category.name);
                
                html += '<div class="resource_title_f"><p>'+category.name+'</p></div>';
                html += '<ul class="resource_list">';
                
                category.data.forEach(function(item,idx){
                    html += ' <li data-idx = "'+idx+'">';
                    html += '   <div class="rcs_name">'+item[0]+'</div>';
                    html += '   <img src="'+item[1]+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" alt="아이템 이미지" class="rcs_img">';
                    html += '   <div class="rcs_foot">';
                    html += '   <input type="text" placeholder="0" name="rcs_user_set[]" class="rcs_money"> 골드';
                    html += '</div>';
                    html += '</li> ';
                });
                
                html += '</ul>';
                
                $('.resource_box').html(html);
            });
            
            
            var para = document.location.href.split("?");
            if(para[1]!=null){
                var a = para[1].split(',');
                $('.resource_list>li').each(function(p_idx){
                    if(typeof a[p_idx] != 'undefined'){
                        $(this).find('.rcs_money').val(a[p_idx]);
                    }
                });
            }else{
                
            }
        
        });
        function checkData(){
            var check = true;
            $('.rcs_money').each(function(){
                var f = $(this).val();
                if(isNaN(f)){
                    alert('숫자만 입력해주세요');
                    check = false;
                }
                
                if(f == ''){
                    $(this).val(0);
                }
            });
            
            if(check){
                $('form').submit();
            }
        }
    </script>
</head>
<body>
<?php include './header_inc.php'; ?>
<div class="main">
    <div class="userset">
            <h3>
                <p>- 다른 유저들의 리스트에서 필요한 부분만 수정할 수 있습니다. <span><a href="usermake.php">#서버별 단가 페이지로 가기</a></span><br />서버별 단가 페이지에서 리스트를 선택하고 하단의 '나의 리스트로 가져오기'를 클릭하시면 리스트를 복사합니다.</p>
                <p>- 복사해온 리스트의 경우 1~10골드 정도의 차이는 시간에 따른 변동일 가능성이 크기 때문에 반영 안하시는 것이 편의성 증대에 도움이 됩니다.</p>
                <p>- 공헌도 재료는 사실상 골드의 의미가 없기 때문에 입력하지 않으셔도 무방합니다.</p>
                <p>- 제공해주신 정보에 감사드립니다!</p>
            </h3>
            <form action="makeset_proc.php" method="post">
            <div class="resource_box">
                
            </div>
            <br /><br />
            <h3>가급적 모든 아이템 가격을 입력하는 것을 권장합니다.</h3>
            <div class="send_set">
                <div class="input_help">닉네임 혹은 메모 혹은 아이디</div>
                <input type="text" name="m_name" placeholder="알아볼 수 있는 간단한 메모 혹은 아이디">
                <br /><br />
                <div class="input_help">서버 선택</div>
                <select name="us_server" id="us_server">
                    <option value="가을빛 산림">가을빛 산림</option>
                    <option value="파플래닛">파플래닛</option>
                    <option value="사막의 요새">사막의 요새</option>
                    <option value="미스카 대학">미스카 대학</option>
                    <option value="희망의 골짜기">희망의 골짜기</option>
                    <option value="다베트 설산">다베트 설산</option>
                    <option value="스노우힐">스노우힐</option>
                </select>
                <input type="hidden" value="">
                <input class="submit_btn" type="button" value="리스트 만들기" onclick="checkData();">
            </div>
            
            </form>
        <footer>
            
        </footer>
    </div>
</div>
</body>
</html>