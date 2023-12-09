<meta charset="utf-8" />
<?php

$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

//

//$count = mysql_num_rows($sql_result);          //mysql_num_rows() 함수 : 행의 개수를 세는 함수.
//echo $count; //mysql query 수행 후 반환되는 결과값을 매개변수로 받고 그 레코드의 개수를 반환

$m_id = $_SERVER["REMOTE_ADDR"];
$m_name = $_POST["m_name"];
$us_server = $_POST["us_server"]; 

$rcs_user_set = $_POST["rcs_user_set"];
$us_set = implode(",",$rcs_user_set);

//$sql = "select * from user_set where m_id='{$m_id}'";
//$result = mysql_query($sql, $conn); 
//
//$pastCode = (string)$m_id."/".(string)date("Y-m-d H:i:s", time())."/".(string)mt_rand(1, 1000);
//
//if($result){
//    $sql = "update user_set set us_isuse = 'n',m_id = '{$pastCode}' where m_id='{$m_id}';";
//    $result = mysql_query($sql, $conn);
//    $sql = "insert into user_set(m_id,m_name,us_set,us_server,us_grade) values('{$m_id}','{$m_name}','{$us_set}','{$us_server}','모름');";
//    $result = mysql_query($sql, $conn);
//}else{
//    $sql = "insert into user_set(m_id,m_name,us_set,us_server,us_grade) values('{$m_id}','{$m_name}','{$us_set}','{$us_server}','모름');";
//    $result = mysql_query($sql, $conn);
//}

$sql = " insert into user_set(m_ip,m_name,us_set,us_server,us_grade) values('{$m_id}','{$m_name}','{$us_set}','{$us_server}',''); ";

if($m_name == 'masterV1'){
    $sql = " insert into user_set(m_ip,m_name,us_set,us_server,us_grade) values('{$m_id}','관리자','{$us_set}','{$us_server}','y'); ";
}
$result = mysql_query($sql, $conn);

//var_dump($sql);
//var_dump($result);
?>
<script>
    location.replace('./usermake.php');
</script>