<?php
$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$ss_id = $_POST['ss_id']; //초기화
$ssr_ip = $_SERVER['REMOTE_ADDR'];

$data = array();

$sql = 
    " SELECT * FROM skill_set_recommend
      WHERE ss_id = '".$ss_id."' 
      AND ssr_ip = '".$ssr_ip."' ";

$result = mysql_query($sql, $conn);
$rows = mysql_num_rows($result);

if($rows > 0){
    $data['type'] = 400;
    $data['msg'] = '이미 추천한 특성 세트 입니다.';
}else{
    $sql  = " insert into skill_set_recommend(ssr_ip,ss_id) ";
    $sql .= " values('".$ssr_ip."','".$ss_id."')";

    $result = mysql_query($sql, $conn);
    
    if($result){
        $data['type'] = 100;
        $data['msg'] = '특성 세트를 추천 했습니다.';
    }else{
        $data['type'] = 500;
        $data['msg'] = '문제가 생겼습니다.';
    }
}

echo json_encode($data);  
?>
        