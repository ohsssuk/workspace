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
        .sale_paging{
            width:100%;
            max-width: 500px;
            margin-top:20px;
        }
        .sale_paging li{
            width:10%;
            text-align: center;
            display:inline-block;
        }
        .sale_paging li a{
            text-decoration: none;
            color:#506677;
            font-size:20px;
            padding:5px 10px;
        }
        .sale_paging li.cur_page a{
            background:#506677;
            color:#fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="side_ad side_ad_left">
    
</div>
<div class="side_ad side_ad_right">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 사이드_광고 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4126261814359480"
         data-ad-slot="6460167305"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
<header>
    <div class="inner_header">
        <ul class="gnb">
            
        </ul>
    </div>
</header>
<div class="main">
<form action="sale_ad.php">
    <div class="lb_calculator weapon_cal">
        <h1>제작 거래</h1>
        <h2>합리적인 생산, 판매를 위한 게시판. 다양한 옵션 한번에 편하게 보기.</h2>
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
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <h3>
            <p>- 구매자들은 취향에 맞는 옵션을 검색하여 제작자에게 게임내의 대화로 제작을 부탁할 수 있습니다.</p>
            <p>- 판매자들은 제작을 부탁 받을 경우만 제작하여 필요 없는 생산을 하지 않을 수 있습니다.</p>
            <p>- 다양한 옵션을 한 눈에 보고 검색할 수 있습니다.</p>
            <p>- <span>가급적 검색 옵션을 이용해주세요. 특히, 서버 옵션은 필수 입니다.</span></p>
        </h3>
        <a href="sale_write.php" class="sale_proc_btn sale_proc_btn_wr">나의 광고 작성</a>
        <br />
        <?php
            $sale_search_op = $_REQUEST[sale_search_op];
            $sale_search_check = $_REQUEST[sale_search_check];
            $sale_search_check_str = "/";                
            for($k=0; $k<count($sale_search_check); $k++){
                $sale_search_check_str = $sale_search_check_str.$sale_search_check[$k]."/";
            }
        ?>
        <div class="data_line">
            <p class="data_line_head">검색 조건</p>
            <div class="data_box">
                <p class="option_head">아이템</p>
                <select name="sale_search_op[]">
                    <option <? echo ($sale_search_op[0]=="전체")?"selected='selected'":"" ?> >전체</option>
                    <option <? echo ($sale_search_op[0]=="95식")?"selected='selected'":"" ?> >95식</option>
                    <option <? echo ($sale_search_op[0]=="UZI")?"selected='selected'":"" ?> >UZI</option>
                    <option <? echo ($sale_search_op[0]=="UMP")?"selected='selected'":"" ?> >UMP</option>
                    <option <? echo ($sale_search_op[0]=="톰슨")?"selected='selected'":"" ?> >톰슨</option>
                    <option <? echo ($sale_search_op[0]=="590M")?"selected='selected'":"" ?> >590M</option>
                    <option <? echo ($sale_search_op[0]=="MP5")?"selected='selected'":"" ?> >MP5</option>
                    <option <? echo ($sale_search_op[0]=="AK")?"selected='selected'":"" ?> >AK</option>
                    <option <? echo ($sale_search_op[0]=="모신나강")?"selected='selected'":"" ?> >모신나강</option>
                    <option <? echo ($sale_search_op[0]=="M24")?"selected='selected'":"" ?> >M24</option>
                    <option <? echo ($sale_search_op[0]=="반곡활")?"selected='selected'":"" ?> >반곡활</option>
                    <option <? echo ($sale_search_op[0]=="콤파운드활")?"selected='selected'":"" ?> >콤파운드활</option>
                    <option <? echo ($sale_search_op[0]=="타보르")?"selected='selected'":"" ?> >타보르</option>
                    <option <? echo ($sale_search_op[0]=="M416")?"selected='selected'":"" ?> >M416</option>
                    <option <? echo ($sale_search_op[0]=="AS50")?"selected='selected'":"" ?> >AS50</option>
                    <option <? echo ($sale_search_op[0]=="유탄발사기")?"selected='selected'":"" ?> >유탄발사기</option>
                    <option <? echo ($sale_search_op[0]=="기타")?"selected='selected'":"" ?> >기타</option>
                </select>
            </div>
            <div class="data_box">
                <p class="option_head">서버 선택</p>
                <select name="sale_search_op[]">
                    <option <? echo ($sale_search_op[1]=="전체")?"selected='selected'":"" ?> >전체</option>
                    <option <? echo ($sale_search_op[1]=="파플래닛")?"selected='selected'":"" ?> >파플래닛</option>
                    <option <? echo ($sale_search_op[1]=="미스카 대학")?"selected='selected'":"" ?> >미스카 대학</option>
                    <option <? echo ($sale_search_op[1]=="희망의 골짜기")?"selected='selected'":"" ?> >희망의 골짜기</option>
                    <option <? echo ($sale_search_op[1]=="다베트 설산")?"selected='selected'":"" ?> >다베트 설산</option>
                    <option <? echo ($sale_search_op[1]=="가을빛 산림")?"selected='selected'":"" ?> >가을빛 산림</option>
                    <option <? echo ($sale_search_op[1]=="스노우힐")?"selected='selected'":"" ?> >스노우힐</option>
                </select>
            </div>
        </div>
        
        <div class="data_line">
            <p class="data_line_head">속성 조건</p>
            <div class="data_box">
                <p class="option_head option_head_pop">공격력</p>
                <input type="text" value="<? echo $sale_search_op[2] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head option_head_pop">치명타율(%)</p>
                <input type="text" value="<? echo $sale_search_op[3] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">건물 피해(%)</p>
                <input type="text" value="<? echo $sale_search_op[4] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">발사 속도(%)</p>
                <input type="text" value="<? echo $sale_search_op[5] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">헤드샷 피해(%)</p>
                <input type="text" value="<? echo $sale_search_op[6] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head option_head_pop">감염자 피해(%)</p>
                <input type="text" value="<? echo $sale_search_op[7] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">인간형 몬스터 피해(%)</p>
                <input type="text" value="<? echo $sale_search_op[8] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">동물 피해(%)</p>
                <input type="text" value="<? echo $sale_search_op[9] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">장전 속도(%)</p>
                <input type="text" value="<? echo $sale_search_op[10] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">산포도 감소(%)</p>
                <input type="text" value="<? echo $sale_search_op[11] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
            <div class="data_box">
                <p class="option_head">반동 감소(%)</p>
                <input type="text" value="<? echo $sale_search_op[12] ?>" class="only_num"  name="sale_search_op[]"> 이상
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">확률 속성 조건</p>
            <div class="data_box">
                <input type="checkbox"  name="sale_search_check[]" value="1" <? echo strpos($sale_search_check_str, "1")?"checked='checked'":"" ?>> 정밀
            </div>
            <div class="data_box">
                <input type="checkbox"  name="sale_search_check[]" value="2" <? echo strpos($sale_search_check_str, "2")?"checked='checked'":"" ?>> 예광탄
            </div>
            <div class="data_box">
                <input type="checkbox"  name="sale_search_check[]" value="3" <? echo strpos($sale_search_check_str, "3")?"checked='checked'":"" ?>> 버서커
            </div>
            <div class="data_box">
                <input type="checkbox"  name="sale_search_check[]" value="4" <? echo strpos($sale_search_check_str, "4")?"checked='checked'":"" ?>> 손상
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">도색 선택</p>
            <div class="data_box">
                <p class="option_head">도색</p>
                <select name="sale_search_op[]">
                    <option <? echo ($sale_search_op[13]=="전체")?"selected='selected'":"" ?> >전체</option>
                    <option <? echo ($sale_search_op[13]=="일반")?"selected='selected'":"" ?> >일반</option>
                    <option <? echo ($sale_search_op[13]=="레인벤가드")?"selected='selected'":"" ?> >레인벤가드</option>
                    <option <? echo ($sale_search_op[13]=="스노우크랙")?"selected='selected'":"" ?> >스노우크랙</option>
                    <option <? echo ($sale_search_op[13]=="소장판")?"selected='selected'":"" ?> >소장판</option>
                </select>
            </div>
        </div>
        <div class="data_line">
            <p class="data_line_head">가격 조건</p>
            <div class="data_box">
                <p class="option_head option_head_pop">가격(골드)</p>
                <input type="text" value="<? echo $sale_search_op[14] ?>" class="only_num" name="sale_search_op[]"> 이하
            </div>
        </div>
        
        <input type="submit" value="검색" class="search_sale_final">
        
        <ul class="sale_table">
        <?php
            $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
            $db = mysql_select_db("lifebefore1", $conn);  //db 선택
            
            $limit = 15;
                            
            $currentPage = $_GET['currentPage']; 
            if($currentPage==null){
                $currentPage=0;
            }
            $limitTo = $currentPage*$limit;
                            
            $slw_title = $sale_search_op[0];
            $slw_server = $sale_search_op[1];
            
            $sql_option = str_replace("/", "'", $_GET['sql_option']);
                    
            if($sql_option==null){
                $sql_option = " where slw_isuse = 'y' ";


                if($slw_title == '전체' || $slw_title == null){

                }else{
                    $sql_option = $sql_option." and slw_title='{$slw_title}' ";
                }

                if($slw_server == '전체' || $slw_server == null){

                }else{
                    $sql_option = $sql_option." and slw_server='{$slw_server}' ";
                }

                if($sale_search_op[13] == '전체' || $sale_search_op[13] == null){

                }else{
                    $sql_option = $sql_option." and slw_soc_16='{$sale_search_op[13]}' ";
                }

                for($h=2; $h<count($sale_search_op)-1; $h++){
                    $h1 = $h-1;
                    if(is_numeric($sale_search_op[$h]) && $sale_search_op[$h]>0){
                        $sql_option = $sql_option." and slw_soc_{$h1} >= {$sale_search_op[$h]} ";
                    }
                }

                if($sale_search_op[14]!=null ||$sale_search_op[14]>0){
                    $sql_option = $sql_option." and slw_gold <= {$sale_search_op[14]} and slw_gold>0";
                }

                if(strpos($sale_search_check_str, "1")){
                    $sql_option = $sql_option." and slw_soc_12 = '1' ";
                }
                if(strpos($sale_search_check_str, "2")){
                    $sql_option = $sql_option." and slw_soc_13 = '2' ";
                }
                if(strpos($sale_search_check_str, "3")){
                    $sql_option = $sql_option." and slw_soc_14 = '3' ";
                }
                if(strpos($sale_search_check_str, "4")){
                    $sql_option = $sql_option." and slw_soc_15 = '4' ";
                }
            }
            $sql = "select * from sale_list_weapon {$sql_option} order by slw_date desc;"; //전체 카운트
            if($sql_result = mysql_query($sql, $conn)){
                $allCount = mysql_num_rows($sql_result);
            }
            $sql = "select * from sale_list_weapon {$sql_option} order by slw_date desc limit {$limitTo},{$limit};"; //기본
            
            $itemSocArray = ["공격력","치명타율","건물 피해","발사 속도","헤드샷 피해","감염자 피해","인간형 피해","동물 피해","장전 속도","산포도 감소","반동 감소","정밀","예광탄","버서커","손상"];

            //mysql_query($sql, $conn);
            if($sql_result = mysql_query($sql, $conn)){

                $count = mysql_num_rows($sql_result); 

                if($count>0){
                    for($i=0; $i<$count; $i++){
                        $slw_code = mysql_result($sql_result, $i, slw_code);
                        $slw_title = mysql_result($sql_result, $i, slw_title);
                        $slw_maker = mysql_result($sql_result, $i, slw_maker);
                        $slw_server = mysql_result($sql_result, $i, slw_server);
                        $slw_sub = mysql_result($sql_result, $i, slw_sub);
                        $slw_gold = mysql_result($sql_result, $i, slw_gold)." 골드";
                        if(mysql_result($sql_result, $i, slw_gold)==0){
                            $slw_gold = "가격 협의";
                        }
                        unset($slw_soc);
                        $slw_soc = array();
                        
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_1);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_2);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_3);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_4);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_5);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_6);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_7);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_8);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_9);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_10);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_11);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_12);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_13);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_14);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_15);
                        $slw_soc[] = mysql_result($sql_result, $i, slw_soc_16);
                        
                        
                        $slw_soc_text = substr($slw_soc_text, 0, -1);
                        echo "<li>";
                        echo "<div class='sale_title'>{$slw_title} / {$slw_soc[15]}<a href='sale_delete.php?slw_code={$slw_code}' class='sale_proc_btn sale_proc_btn_de'>삭제</a></div>";
                        echo "<div class='sale_info'><div class='sale_info_head'><p>판매자</p>{$slw_maker}</div><div class='sale_info_head'><p>서버</p>{$slw_server}</div></div>";
                        echo "<div class='sale_text'>";
                            $slw_soc_text = "";
                            for($f=0; $f<count($slw_soc); $f++){
                                if($slw_soc[$f]>0 && $f<11){
                                    //$slw_soc_text = $slw_soc_text." ".$itemSocArray[$f]." : ".$slw_soc[$f]." /";
                                    $slw_soc_text = $itemSocArray[$f]." ".$slw_soc[$f];
                                    echo "<p class='sale_text_detail sale_text_detail_{$f}'>{$slw_soc_text}</p>";
                                }else if($slw_soc[$f]>0 && $f>=11){
                                    $slw_soc_text = "확률 속성:".$itemSocArray[$f];
                                    echo "<p class='sale_text_detail sale_text_detail_{$f}'>{$slw_soc_text}</p>";
                                }
                            }
                        echo "<br /><br />상세 설명 : {$slw_sub}";
                        echo "</div>";
                        echo "<div class='sale_gold'>$slw_gold</div>";
                        echo "</li>";
                    }
                }else{
                    echo "<li class='set_detail'>검색 결과가 없습니다.</li>";
                }

            }
            //echo $count; //mysql query 수행 후 반환되는 결과값을 매개변수로 받고 그 레코드의 개수를 반환
            ?>
        </ul>
        <ul class="sale_paging">
            <?php
            if($currentPage-5<0){
                $indexStart = 0;
            }else{
                $indexStart = $currentPage-5;
            }
            for($i=$indexStart;$i<ceil($allCount/$limit)&&$i<$indexStart+10;$i++){
                
                $changeStr = str_replace("'", "/", $sql_option);
                $link = "./sale_ad.php?currentPage={$i}&sql_option={$changeStr}";
                $pageNum = $i+1;
                
                if($i==$currentPage){
                    echo "<li class='cur_page'><a href='{$link}'>{$pageNum}</a></li>";
                }else{
                    echo "<li><a href='{$link}'>{$pageNum}</a></li>";
                }
            }
            ?>
        </ul>
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
        <iframe src="./reply.php" frameborder="0" class="reply_frame" scrolling="auto"></iframe>
        <!-- 댓글창 종료 -->
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