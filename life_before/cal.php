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
    <script src="js/data.js?ver=<?=rand(0,1000); ?>"></script>
    
    <script>
        var nameList = [];
        $(document).ready(function(){
            
            jawon.forEach(function(category){
                category.data.forEach(function(item){
                    nameList.push([item[0],item[1],item[2]]);
                });
            });
            
            if($('input[name="target_list"]').length > 0){
                alert('자동 입력 했습니다. 제작할 아이템을 선택해주세요.');
                var a = $('input[name="target_list"]').val().split(',');
                for(var i=0;i<a.length;i++){
                    nameList[i][3] = a[i];
                }
            }
            
            
            
            var html = '';
            banjepoom.forEach(function(item,idx){
                if(item.need.length > 0){ //임시 : 지워질부분
                    
                    html += '<li onclick="itemCal('+idx+',\'ban\')" data-idx="'+idx+'">';
                    html += '   <div class="item_img">';
                    html += '       <img src="'+item.src+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" alt="아이템 이미지">';
                    html += '   </div>';
                    html += '   <div class="item_name">'+item.name+'</div>';
                    html += '   <div class="item_pay"> <span>';
                    if(typeof item.special != 'undefined'){
                        html += item.special;
                    }
                    html += '   </span></div>';
                    html += '</li>';
                    
                }//임시 : 지워질부분
            });
            $('.item_list').html(html);
            
            html = '';
            wanjepoom.forEach(function(item,idx){
                if(item.need.length > 0){ //임시 : 지워질부분
                    
                    html += '<li onclick="itemCal('+idx+',\'wan\')" data-idx="'+idx+'">';
                    html += '   <div class="item_img">';
                    html += '       <img src="'+item.src+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" alt="아이템 이미지">';
                    html += '   </div>';
                    html += '   <div class="item_name">'+item.name+'</div>';
                    html += '   <div class="item_pay"> <span>';
                    if(typeof item.special != 'undefined'){
                        html += item.special;
                    }
                    html += '   </span></div>';
                    html += '</li>';
                    
                }//임시 : 지워질부분
            });
            $('.item_list').append(html);
            
            
            if($('input[name="search_name"]').val() != ''){
                $('.item_list > li').each(function(){
                    var nm = $(this).find('.item_name').html();
                    var sc = $('input[name="search_name"]').val();
                    
                    if(nm.indexOf(sc) == -1){
                        $(this).remove();
                    }
                });
            }
        });
    </script>
    
    <style>
        h3{
            margin-top:40px;
        }
        .notice{
            line-height:1.4em;
        }
        .tree_wrap{
/*            border:1px solid #f00;*/
        }
        .tree_wrap img{
            width:100%;
            max-width: 150px;
            margin: 10px 0;
            display: block;
        }
        .tree_level{
            border:1px solid #bbb;
            padding:10px;
            margin:5px;
            position: relative;
            display: inline-block;
        }
        .tree_level.tree_resource{
            display:block;
        }
        .tree_wrap > .origin_title{
            display:none;
        }
        .tree_level p{
            font-size:20px;
            width:150px;
            line-height: 1.2;
        }
        .tree_level.tree_resource > p{
            width:100%;
        }
        .tree_level.tree_resource>.goods_price_wrap{
            margin-top:8px;
            display:none;
        }
        .tree_level.tree_resource.on>.goods_price_wrap{
            display:block;
        }
        .tree_level.tree_resource.on>.tree_level {
            display:none;
        }
        .tree_change{
            padding:4px 12px;
            border-radius: 4px;
            margin-left:5px;
        }
        input[name="goods_price"]{
            width: 100px;
            height: 40px;
            box-sizing: border-box;
            padding-left: 10px;
            font-size: 16px;
            line-height: 40px;
        }
        .tree_special{
            background:#ff4747;
            color:#fff;
            border-radius: 5px;
            padding:5px 10px;
            margin-top:4px;
            display:inline-block;
        }
        .search_box{
            height: 40px;
            margin:10px 0;
            background:#7993a9;
            padding:15px 10px;
/*            border:1px solid #314250;*/
        }
        .search_box input{
            height: 40px;
            box-sizing: border-box;
            float:left;
            padding:0 10px;
            border:none;
            width:calc(100% - 105px);
            max-width:320px;
/*            border:1px solid #314250;*/
        }
        .search_box input:focus{
            outline: none;
        }
        .search_box button{
            height: 40px;
            box-sizing: border-box;
            border:none;
            float:left;
            width:100px;
            margin-left:5px;
        }
        .origin_special{
            background: #965129;
            color: #fff;
            border-radius: 5px;
            padding: 0 10px;
            font-size: 11px;
            line-height: 18px;
            top: 5px;
            display: inline-block;
            margin-bottom: 5px;
        }
        .final_money_susu{
            line-height: 1.7;
            margin-top:20px;
            font-size:20px;
        }
        h3.empty_warning{
            border:4px solid #555;
            padding:20px 10px;
            background:#fff6b4;
            text-align: center;
            margin-bottom: 30px;
        }
        h3.empty_warning .title{

        }
        h3.empty_warning .title i{
            font-size:42px;
        }
        h3.empty_warning .title p{
            margin-top:10px;
            line-height: 1.4;
            font-size:20px;
            font-weight: bold;
        }
        h3.empty_warning .des{
            margin-top:20px;
        }
        h3.empty_warning .des a{
            margin-top:20px;
            display: block;
            color: #ff4b4b;
        }
    </style>
</head>
<body>
<?php include './header_inc.php'; ?>
<div class="main">
    <div class="lb_calculator">
        <h1>원가 계산기</h1>
        <h2>완제품,반제품 원가를 계산합니다. 거래의 도시에서 합리적인 소비를 위해 꼭 확인하세요.</h2>
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
        <h3><i class="fas fa-exclamation-circle"></i> 매번 단가를 입력하기가 귀찮다면 자신만의 단가 목록을 만들어보세요 <a href="userset.php"><span>#만들러 가기</span></a></h3><br />
        <div class="search_box">
            <form action="./cal.php" method="post" name="search_frm">
                <input type="text" name="search_name" placeholder="아이템명으로 검색하기" 
                value="<?=isset($_POST['search_name']) ? $_POST['search_name'] : '' ?>">

                <?php if(isset($_POST['target_list'])) : ?>
                    <input type="hidden" name="target_list" value="<?=$_POST['target_list'] ?>">
                <?php endif; ?>

                <button type="submit">검색</button>
            </form>
        </div>
        <ul class="item_list">
            
        </ul>
        <div class="hide_section">
            <?php if(empty($_POST['target_list'])) : ?>
                <h3 class="empty_warning">
                <div class="title">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>현재 단가 목록을<br /> 불러오지 않았습니다.</p>
                </div>
                    <div class="des">
                        <span>[서버별 단가]</span>페이지에서 다른 사람 혹은 자신이 만들어 놓은 데이터로 <span>자동입력</span> 할 수 있습니다. 
                        <a href="usermake.php"><span>#[서버별 단가] 가기</span></a>
                    </div>
                </h3>
            <?php endif; ?>
            <div class="notice">
                <strong>[반제품으로 계산]버튼</strong>을 클릭하면 해당 반제품의 단가로 계산합니다. 
            </div>
            <div class="goods_box">
                ss
            </div>
            <button class="calcul_rcs" onclick="itemCalFinal();"><i class="fas fa-calculator"></i> 계산하기</button>
            <div class="final_page">
                <p class="all_hap">내역</p>
                <ul class="result_list">
                    
                </ul>
                <div class="notice">
                    클릭하여 가지고 있는 재료를 제외할 수 있습니다.
                </div>
                <p class="all_hap">원재료 가격 총합</p>
                <p class="final_money"><span>0</span> 골드</p>
                <div class="final_money_susu"></div>
            </div>
        </div>
        
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