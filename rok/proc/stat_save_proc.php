<meta charset="utf-8" />
<?php
$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$sStatDivision = $_POST['stat_division'];
$sStatInfo = $_POST['stat_info'];

$sStatName = $_POST['stat_name'];
$sStatTitle = $_POST['stat_title'];
$sStatMemo = $_POST['stat_memo'];
$sStatCommander = $_POST['stat_commander'];

$ip = $_SERVER['REMOTE_ADDR']; 

$sql  = " insert into skill_set(ss_ip,ss_name,ss_title,ss_memo,ss_division,ss_info,ss_commander) ";
$sql .= " values('".$ip."','".$sStatName."','".$sStatTitle."','".$sStatMemo."','".$sStatDivision."','".$sStatInfo."','".$sStatCommander."') ";

$result = mysql_query($sql, $conn);
if($result){
    echo("<script>location.replace('../commander_set.php');</script>"); 
}else{
    echo("<script>alert('문제가 생겼습니다.');history.back();</script>"); 
}

?>