<?php if(isset($_GET['currentPage'])) : ?>
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
</head>
<body>
<?php endif; ?>
<style>
    .rp_wrap{
        width:100%;
    }
    .rp_list{
        position: relative;
        margin-top:20px;
    }
    .rp_list li:first-child{
        border-top:1px solid #bbb;
    }
    .rp_list li{
        border-bottom:1px solid #bbb;
        padding:20px 10px;
    }
    .rp_list li.admin{
        background: #eee;
    }
    .rp_list li.admin .rp_delete{
        display:none;
    }
    .rp_name{
        font-weight: bold;
    }
    .rp_text{
        margin-top:10px;
        line-height: 1.2em;
        white-space:pre-line;
        line-height: 1.4em;
    }
    .rp_foot{
        margin-top:10px;
    }
    .rp_foot p{
        display:inline-block;
        color:#999;
    }
    .rp_delete{
        margin-left:40px;
    }
    .rp_name_admin{
        background:#000;
        width:120px;
        height:40px;
        overflow: hidden;
        position: relative;
    }
    .rp_name_admin img{
        width:150px;
        position: absolute;
        left:50%;
        margin-left:-75px;
    }
    .more_reply{
        width:200px;
        height:40px;
        margin-top:10px;
    }
    .rp_paging{
        width:100%;
        max-width: 500px;
        margin-top:20px;
    }
    .rp_paging li{
        width:10%;
        text-align: center;
        display:inline-block;
    }
    .rp_paging li a{
        text-decoration: none;
        color:#506677;
        font-size:20px;
        padding:5px 10px;
    }
    .rp_paging li.cur_page a{
        background:#506677;
        color:#fff;
        font-weight: bold;
    }
    .rp_code{
        float:right;
        color:#999;
        font-size:14px;
    }
    .back_main{
        color:#fff;
        background: #314250;
        text-decoration: none;
        display: block;
        padding:20px;
        font-size:22px;
    }
</style>
<div class="rp_wrap">
    <?php if(isset($_GET['currentPage'])) : ?>
        <a href="./index.html" class="back_main">메인으로 돌아가기 <i class="fas fa-chevron-right"></i></a>
    <?php endif; ?>
    <ul class="rp_list">
    <?php
        $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
        $db = mysql_select_db("lifebefore1", $conn);  //db 선택
        
        $currentPage = $_GET['currentPage'];
        if($currentPage == null){
            $currentPage = 0;
        }
        $limit = 10;
        $limitTo = $currentPage*$limit;
        
        $sql = "select * from reply_table where rt_isuse='y' order by rt_date desc limit {$limitTo},{$limit};";
        
        if($sql_result = mysql_query($sql, $conn)){

                $count = mysql_num_rows($sql_result); 

                if($count>0){
                    for($i=0; $i<$count; $i++){
                        $rt_id = mysql_result($sql_result, $i, rt_id);
                        $rt_writer = mysql_result($sql_result, $i, rt_writer);
                        $rt_text = mysql_result($sql_result, $i, rt_text);
                        $rt_date = mysql_result($sql_result, $i, rt_date);
                        $rt_isadmin = mysql_result($sql_result, $i, rt_isadmin);
                        $rt_ip = mysql_result($sql_result, $i, rt_ip);
                        $rt_ip_set = explode('.',$rt_ip);
                        $rt_ip = $rt_ip_set[0]."-".$rt_ip_set[1];
                        //
                        echo "<li class='".($rt_isadmin=='y' ? 'admin' : '')."'>";
                        echo "<div class='rp_head'>";
                        
                        if($rt_isadmin=='n'){
                            echo "<p class='rp_name'>$rt_writer</p><p class='rp_code'>$rt_ip</p>";
                        }else{
                            echo "<p class='rp_name rp_name_admin'><img src='./images/index_bg.png'></p>";
                        }
                        
                        echo "</div>";
                        echo "<div class='rp_text'>$rt_text</div>";
                        echo "<div class='rp_foot'>";
                        echo "<p class='rp_date'>$rt_date</p>";
                        echo "<p class='rp_delete'><a href='reply_delete.php?rt_id={$rt_id}'><button>삭제</button></a></p>";
                        echo "</div></li>";
                    }
                }else{
                    echo "<li class='set_detail'>검색 결과가 없습니다.</li>";
                }
        }
        
        /*
        <li>
            <div class="rp_head">
                <p class="rp_name rp_name_admin"><img src="./images/index_bg.png" alt=""></p>
            </div>
            <div class="rp_text">댓글 내용</div>
            <div class="rp_foot">
                <p class="rp_date">2019.1.1</p>
                <p class="rp_delete"></p>
            </div>
        </li>
        */
    ?>
    </ul>
    <ul class="rp_paging">
        <?php
        
        $sql = "select * from reply_table where rt_isuse='y'"; //전체 카운트
        if($sql_result = mysql_query($sql, $conn)){
            $allCount = mysql_num_rows($sql_result);
        }
        
        if($currentPage-5<0){
            $indexStart = 0;
        }else{
            $indexStart = $currentPage-5;
        }
        for($i=$indexStart;$i<ceil($allCount/$limit)&&$i<$indexStart+10;$i++){
            $link = "./reply.php?currentPage={$i}";
            $pageNum = $i+1;

            if($i==$currentPage){
                echo "<li class='cur_page'><a href='{$link}'>{$pageNum}</a></li>";
            }else{
                echo "<li><a href='{$link}'>{$pageNum}</a></li>";
            }
        }
        
        ?>
    </ul>
</div>
<?php if(isset($_GET['currentPage'])) : ?>
<a href="./index.html" class="back_main" style="margin:40px 0 0;">메인으로 돌아가기 <i class="fas fa-chevron-right"></i></a>
    
</body>
</html>
<?php endif; ?>