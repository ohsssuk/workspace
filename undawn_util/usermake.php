<?php include './include/head.php'; ?>
<body>
<?php include './include/header.php'; ?>
<script type="text/javascript" src="./js/usermake.js?v=<?=asset_version?>"></script>
    
<style>
    .usermake{
        padding-top:70px;
    }
    .usermake .set_list{
        width:100%;
        margin-top:20px;
    }
    .usermake .set_list .set_head{
        background:#314250;
        color:#fff;
        font-size:14px;
    }
    .usermake .set_list .set_head p{
        border-left:1px solid #fff;
        box-sizing: border-box;
    }
    .usermake .set_list .set_head p:first-child{
        border:none;
    }
    .usermake .set_list li p{
        display:inline-block;
        padding:5px 0;
        vertical-align: middle;
        font-size: 16px;
        line-height: 1.6em;
    }
    .usermake .set_list li p:nth-child(1){
        width:30%;
    }
    .usermake .set_list li p:nth-child(2){
        width:30%;
    }
    .usermake .set_list li p:nth-child(3){
        width:40%;
    }
    .usermake .set_list li{
        color:#314250;
        text-align: center;
        cursor: pointer;
        border-bottom:1px solid #bbb;
        font-size: 0;
    }
    .usermake .set_list li.selected{
        background:#eee;
    }
    .detailbox{
        width:100%;
        border-top:1px solid #ddd;
        position: relative;
        text-align: left;
        padding-top:10px;
        display:none;
        background: #fff;
    }
    .set_detail button{
        width:45%;
        margin:10px 10px;
        height:60px;
        color:#fff;
        font-size:20px;
        cursor:pointer;
    }
    @media screen and (max-width:800px) {
        .set_detail button{
            width:100%;
            margin:5px 0;
        }
    }
    .userset_going_btn{
        width:100%;
        max-width: 500px;
        text-align: center;
        padding:20px;
        font-size:16px;
        margin-top:20px;
    }
    .detailbox_btn{
        display: none;
    }
    .search_set,.server_set{
        position: relative;
        height:40px;
        width:100%;
        max-width: 500px;
        margin-top:5px;
    }
    .search_set input{
        float:left;
        height:40px;
        box-sizing: border-box;
    }
    .search_set input[type="text"]{
        width:70%;
        padding-left:10px;
    }
    .search_set input[type="submit"]{
        width:29%;
        margin-left:1%;
    }
    h3{
        margin-top:10px;
    }
    .server_set select{
        height:40px;
        box-sizing: border-box;
        width:100%;
        padding-left:10px;
    }
    .box_lec{
        width:10%;
        display:inline-block;
        text-align: center;
    }
    @media screen and (max-width:800px) {
        .box_lec{
            width:25%;
        }
    }
    .box_lec div{
        width:100%;
        padding:7px 0;
        text-align: center;
        box-sizing: border-box;
    }
    .box_lec div:nth-child(1){
        background: #506677;
        font-size:13px;
        color:#fff;
        border-left:1px solid #fff;
    }
    .box_lec div:nth-child(2){
        color: #506677;
        font-size:18px;
    }
    .us_grade{
        width:100%;
        height:24px;
        line-height:24px;
        background:#35c680;
        color:#fff;
        font-size:14px;
    }
    .sinrae{
        background:#a4ffc2;
    }
    .set_detail button.detailbox_btn_user{
        display:none;
        background:none;
        border:1px solid #314250;
        color:#314250;
    }
</style>

<div class="main">
   <div class="usermake">
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
       <form action="usermake.php" id="usermake_frm">
       <h3>작성자로 검색</h3>
       <div class="search_set">
           <input type="text" name="m_name" placeholder="찾으려는 작성자 이름을 입력해주세요"
           value="<?=isset($_GET['m_name']) && !empty($_GET['m_name']) ? $_GET['m_name'] : '' ?>">
           <input type="submit" value="검색">
       </div>
       <h3>서버 검색</h3>
       <div class="server_set">
           <select name="us_server" id="server_select">
               <option value="">서버 선택</option>
               <option value="2001 잃어버린 도시">2001 잃어버린 도시</option>
               <option value="2002 레드우드 숲">2002 레드우드 숲</option>
           </select>
       </div>
       </form>
       <h3>
           <p>- 목록을 <span>클릭</span>하여 세부내용을 확인하고 <span>[제작 계산]</span>,<span>[나의 리스트로 가져오기]</span> 버튼을 클릭하여 해당페이지에서 값을 자동입력 합니다.</p>
           <p>- 신뢰도가 높은 정보를 이용하기를 권장합니다.</p>
           <p>- 날짜를 확인하세요. 최신 정보일수록 정확합니다.</p>
       </h3>
       <ul class="set_list">
           <li class="set_head">
               <p>작성자</p><!--
               --><p>서버</p><!--
               --><p>날짜</p>
           </li> 
       
        <?php

        $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
        $db = mysql_select_db("lifebefore1", $conn);  //db 선택
           

        $limit_num = 10;   
        if(isset($_GET['limit_num']) && !empty($_GET['limit_num'])){
            $limit_num = $_GET['limit_num'] + 10;
        }else{
            $limit_num = 10;
        }
           
        $sql  = " select * from uu_user_set "; 
        $sql .= " where us_isuse = 'y' ";
        if(isset($_GET['m_name']) && !empty($_GET['us_writer'])){   
            $sql .= " and us_writer like '%{$_GET['us_writer']}%' "; 
        }
   
        if(isset($_GET['us_server']) && !empty($_GET['us_server'])){
            $sql .= " and us_server='{$_GET['us_server']}' "; 
        }
        
        $sql .= " order by us_date desc limit {$limit_num} ";
        
        if($sql_result = mysql_query($sql, $conn)){
            
            $count = mysql_num_rows($sql_result); 
            
            if($count>0){
                for($i=0; $i<$count; $i++){
                    $us_writer = mysql_result($sql_result, $i, us_writer);
                    $us_set = mysql_result($sql_result, $i, us_set);
                    $us_server = mysql_result($sql_result, $i, us_server);
                    $us_date = mysql_result($sql_result, $i, us_date);
                    $us_grade = mysql_result($sql_result, $i, us_grade);

                    echo 
                        "<li class='set_detail user_set_data ".($us_grade=='y' ? 'sinrae' : '')."'>
                            <p>$us_writer</p>
                            <p>$us_server</p>
                            <p>$us_date</p>
                            ".($us_grade=='y' ? '<div class="us_grade"><i class="fas fa-check"></i> 신뢰도 높음</div>' : '')."
                            <button type='button' class='detailbox_btn detailbox_btn_cal'>원가 계산</button>
                            <button type='button' class='detailbox_btn_user'>나의 리스트로 가져오기</button>
                            <div class='detailbox'></div>
                            <input type='hidden' name='user_set_json' value='$us_set'>
                        </li>";
                }
            }else{
                echo "<li class='set_detail'>검색 결과가 없습니다.</li>";
            }
            
        }else{
            echo "<li class='set_detail'>검색 결과가 없습니다.</li>";
        } 

        
        //echo $count; //mysql query 수행 후 반환되는 결과값을 매개변수로 받고 그 레코드의 개수를 반환

        
        ?>
        </ul>
        <?php
            echo "<br /><a class='more_userlist' href='./usermake.php?limit_num={$limit_num}&m_name={$search_us_name}&us_server={$search_us_server}'>다음 10개 더 보기</a><br />";
        ?>
        
        <a href="./userset.php">
            <button class="userset_going_btn">
                단가 목록 만들기
            </button>
        </a> 
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
        </div>
        
        <form action="" method="post" name="submit_with_user_set_data">
            <input type="hidden" name="target_user_set_data" value="">  
        </form>
   
        <footer>
            <div class="inner_footer">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
            </div>
        </footer>
   </div>
</div>
</body>
</html>
    
