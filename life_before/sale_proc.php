<meta charset="utf-8" />
<?php

$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$wtype = $_GET['wtype'];
echo "{$wtype}";

if($wtype=='wr'){ //작성
    echo "확인";
    $slw_maker = $_POST['slw_maker'];
    $slw_pwd = $_POST['slw_pwd'];
    if($slw_pwd==""){
        $slw_pwd="1";
    }
    
    $slw_title = $_POST['slw_title'];
    $slw_server = $_POST['slw_server'];
    
    $slw_soc_1 = $_POST['slw_soc_1'];
    $slw_soc_2 = $_POST['slw_soc_2'];
    $slw_soc_3 = $_POST['slw_soc_3'];
    $slw_soc_4 = $_POST['slw_soc_4'];
    $slw_soc_5 = $_POST['slw_soc_5'];
    $slw_soc_6 = $_POST['slw_soc_6'];
    $slw_soc_7 = $_POST['slw_soc_7'];
    $slw_soc_8 = $_POST['slw_soc_8'];
    $slw_soc_9 = $_POST['slw_soc_9'];
    $slw_soc_10 = $_POST['slw_soc_10'];
    $slw_soc_11 = $_POST['slw_soc_11'];
    $slw_soc_12 = $_POST['slw_soc_12'];
    $slw_soc_13 = $_POST['slw_soc_13'];
    $slw_soc_14 = $_POST['slw_soc_14'];
    $slw_soc_15 = $_POST['slw_soc_15'];
    $slw_soc_16 = $_POST['slw_soc_16'];
    $slw_gold = $_POST['slw_gold'];
    $slw_sub = $_POST['slw_sub'];
    
    $sql = "insert into sale_list_weapon(slw_maker,slw_pwd,slw_title,slw_server,slw_soc_1,slw_soc_2,slw_soc_3,slw_soc_4,slw_soc_5,slw_soc_6,slw_soc_7,slw_soc_8,slw_soc_9,slw_soc_10,slw_soc_11,slw_soc_12,slw_soc_13,slw_soc_14,slw_soc_15,slw_soc_16,slw_gold,slw_sub) values('{$slw_maker}','{$slw_pwd}','{$slw_title}','{$slw_server}','{$slw_soc_1}','{$slw_soc_2}','{$slw_soc_3}','{$slw_soc_4}','{$slw_soc_5}','{$slw_soc_6}','{$slw_soc_7}','{$slw_soc_8}','{$slw_soc_9}','{$slw_soc_10}','{$slw_soc_11}','{$slw_soc_12}','{$slw_soc_13}','{$slw_soc_14}','{$slw_soc_15}','{$slw_soc_16}','{$slw_gold}','{$slw_sub}');";
    
    if($sql_result = mysql_query($sql, $conn)){
        $count = mysql_affected_rows();
        if($count>0){
            echo "<script>alert('광고가 등록 되었습니다.')</script>";
            echo "<script>location.replace('sale_ad.php');</script>";
        }else{
            echo "<script>alert('잘못된 정보입니다. 숫자란에는 숫자만 입력해주세요.')</script>";
            echo "<script>history.back();</script>";
        }
    }else{
        echo "<script>alert('잘못된 정보입니다. 숫자란에는 숫자만 입력해주세요.')</script>";
        echo "<script>history.back();</script>";    
    }
    
}else if($wtype=='up'){ //업데이트
    
}else if($wtype=='de'){ //삭제
    
    $slw_code = (int)$_GET['slw_code'];
    $slw_pwd = $_POST['slw_pwd'];
    
    $sql = "update sale_list_weapon set slw_isuse='n' where slw_code='{$slw_code}' and slw_pwd='{$slw_pwd}';";
    
    if($sql_result = mysql_query($sql, $conn)){
        $count = mysql_affected_rows();
        if($count>0){
            echo "<script>alert('광고가 삭제 되었습니다.')</script>";
            echo "<script>location.replace('sale_ad.php');</script>";
        }else{
            echo "<script>alert('비밀번호가 틀렸습니다.')</script>";
            echo "<script>location.replace('sale_ad.php');</script>";
        }
    }
}

?>