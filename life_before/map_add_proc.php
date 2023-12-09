<meta charset="utf-8" />
<?php

$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$prevPage = $_SERVER['HTTP_REFERER'];

$mp_ip= $_SERVER["REMOTE_ADDR"];
$mp_point_x= mysql_real_escape_string($_POST["mp_p_x"]);
$mp_point_y= mysql_real_escape_string($_POST["mp_p_y"]);
$mp_key= mysql_real_escape_string($_POST["mp_key"]);
$mp_ic= trim(mysql_real_escape_string($_POST["mp_ic"]));
$mp_des= mysql_real_escape_string($_POST["mp_des"]);
$mp_cont= mysql_real_escape_string($_POST["mp_cont"]);
$mp_wr= mysql_real_escape_string($_POST["mp_wr"]);
$mp_pt= mysql_real_escape_string($_POST["mp_pt"]);

$sql = " INSERT INTO map_point(mp_point_x,mp_point_y,mp_key,mp_ic,mp_des,mp_cont,mp_wr,mp_pt,mp_ip) ";
$sql.= " values('{$mp_point_x}','{$mp_point_y}','{$mp_key}','{$mp_ic}','{$mp_des}','{$mp_cont}','{$mp_wr}','{$mp_pt}','{$mp_ip}');";
    
if($mp_wr == 'masterV1'){
    $sql = " INSERT INTO map_point(mp_point_x,mp_point_y,mp_key,mp_ic,mp_des,mp_cont,mp_wr,mp_pt,mp_ip,mp_isofficial) ";
    $sql.= " values('{$mp_point_x}','{$mp_point_y}','{$mp_key}','{$mp_ic}','{$mp_des}','{$mp_cont}','관리자','{$mp_pt}','{$mp_ip}',1);";
}

if($sql_result = mysql_query($sql, $conn)){
    $count = mysql_affected_rows();
    if($count>0){
        echo "<script>alert('맵 포인트가 등록 되었습니다.')</script>";
        echo "<script>location.replace('{$prevPage}')</script>";
    }else{
        echo "<script>alert('문제가 생겼습니다.')</script>";
        echo "<script>history.back();</script>";
    }
}else{
    echo "<script>alert('문제가 생겼습니다.')</script>";
    echo "<script>history.back();</script>";
}





?>