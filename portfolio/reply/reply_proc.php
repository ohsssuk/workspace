<meta charset="utf-8" />
<?php

$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$wtype = $_GET['wtype'];
$prevPage = $_SERVER['HTTP_REFERER'];
$u_ip= $_SERVER["REMOTE_ADDR"];

if($wtype=='wr'){ //작성
    $rt_writer = $_POST['rt_writer'];
    $rt_pwd = $_POST['rt_pwd'];
    $rt_text = $_POST['rt_text'];
    
    $sql = "insert into reply_table_sam(rt_writer,rt_text,rt_pwd,rt_ip) values('{$rt_writer}','{$rt_text}','{$rt_pwd}','{$u_ip}');";
    
    if($sql_result = mysql_query($sql, $conn)){
        $count = mysql_affected_rows();
        if($count>0){
            echo "<script>alert('댓글이 등록 되었습니다.')</script>";
            echo "<script>location.replace('{$prevPage}')</script>";
        }else{
            echo "<script>alert('문제가 생겼습니다.')</script>";
            echo "<script>history.back();</script>";
        }
    }
    echo "<script>alert('문제가 생겼습니다.')</script>";
}else if($wtype=='up'){ //업데이트
    
}else if($wtype=='de'){ //삭제
    
    $rt_id = $_GET['rt_id'];
    $rt_pwd = $_POST['rt_pwd'];
    
    $sql = "update reply_table_sam set rt_isuse='n' where rt_id='{$rt_id}' and rt_pwd='{$rt_pwd}';";
    
    if($sql_result = mysql_query($sql, $conn)){
        $count = mysql_affected_rows();
        if($count>0){
            echo "<script>alert('댓글이 삭제 되었습니다.')</script>";
            echo "<script>location.replace('./reply.php')</script>";
        }else{
            echo "<script>alert('비밀번호가 틀립니다.')</script>";
            echo "<script>location.replace('./reply.php')</script>";
        }
    }
}

?>