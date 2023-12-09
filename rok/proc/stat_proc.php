<?php
$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$sKind = $_GET['kind']; //종류
$aPrevSkills = $_POST['prev_skill_list']; //초기화

$result = array();

if($sKind == 'master'){
    $in_list = empty($aPrevSkills)?'(0)':'('.join(',',$aPrevSkills).')';
    $skSql = 
        ' SELECT * FROM skill 
          WHERE skill_id NOT IN '.$in_list.'
          AND prev_skill_1 IN '.$in_list.'
          AND (prev_skill_2 IN '.$in_list.' OR prev_skill_2 = 0)
          AND (prev_skill_3 IN '.$in_list.' OR prev_skill_3 = 0)';

    $skSql_result = mysql_query($skSql, $conn);
    $skSql_rows = mysql_num_rows($skSql_result);

    while($row = mysql_fetch_array($skSql_result)){
        array_push($result,$row['skill_id']);  
    }
}else if($sKind == 'reset'){
    $skSql_rows = 1; //초기화
    
    while($skSql_rows > 0){
        $in_list = '('.join(',',$aPrevSkills).')';    
        $skSql = 
            ' SELECT * FROM skill 
              WHERE prev_skill_1 IN '.$in_list.'
              OR prev_skill_2 IN '.$in_list.'
              OR prev_skill_3 IN '.$in_list;

        $skSql_result = mysql_query($skSql, $conn);
        $skSql_rows = mysql_num_rows($skSql_result);
        
        if($skSql_rows == 0){
            break;
        }

        $aPrevSkills = array();
        while($row = mysql_fetch_array($skSql_result)){
            array_push($result,$row['skill_id']);  
            array_push($aPrevSkills,$row['skill_id']);  
        }
    }
}else{
    $resultData = array();
    while(!empty($aPrevSkills)){
        $in_list = '('.join(',',$aPrevSkills).')'; 
        $skSql = 
            ' SELECT * FROM skill 
              WHERE skill_id IN '.$in_list;

        $skSql_result = mysql_query($skSql, $conn);
        $skSql_rows = mysql_num_rows($skSql_result);

        $aPrevSkills = array();
        
        if($skSql_rows == 0){
            break;
        }

        while($row = mysql_fetch_array($skSql_result)){
            if($row['prev_skill_1'] != 0){
                array_push($resultData,$row['prev_skill_1']);
                array_push($aPrevSkills,$row['prev_skill_1']);
            }
            if($row['prev_skill_2'] != 0){
                array_push($resultData,$row['prev_skill_2']);
                array_push($aPrevSkills,$row['prev_skill_2']);
            }  
            if($row['prev_skill_3'] != 0){
                array_push($resultData,$row['prev_skill_3']);
                array_push($aPrevSkills,$row['prev_skill_3']);
            }
        }
    }
    $result = array_unique($resultData);
    $result = implode("|",$result);
    $result = explode("|",$result);
}

echo json_encode($result);
?>