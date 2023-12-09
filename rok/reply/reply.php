<!DOCTYPE html>
<html lang="ko">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="shortcut icon" href="./images/favi.png" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css?ver=3">
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
            box-sizing: border-box;
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
        }
        .rp_name_admin img{
            width:100px;
            box-shadow: 0 0 5px #aaa;
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
    </style>
</head>
<body>
<div class="rp_wrap">
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
        
        $sql = "select * from reply_table_rok where rt_isuse='y' order by rt_date desc limit {$limitTo},{$limit};";
        
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
                        echo "<li>";
                        echo "<div class='rp_head'>";
                        
                        if($rt_isadmin=='n'){
                            echo "<p class='rp_name'>$rt_writer</p><p class='rp_code'>$rt_ip</p>";
                        }else{
                            echo "<p class='rp_name rp_name_admin'><img src='../images/logo.png'></p>";
                        }
                        
                        echo "</div>";
                        echo "<div class='rp_text'>$rt_text</div>";
                        echo "<div class='rp_foot'>";
                        echo "<p class='rp_date'>$rt_date</p>";
                        echo "<p class='rp_delete'><a href='reply_delete.php?rt_id={$rt_id}'><button>삭제</button></a></p>";
                        echo "</div></li>";
                    }
                }else{
                    echo "<li class='set_detail'>댓글이 없습니다.</li>";
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
        
        $sql = "select * from reply_table_rok where rt_isuse='y'"; //전체 카운트
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
</body>
</html>