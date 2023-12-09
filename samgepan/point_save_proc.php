<meta charset="utf-8" />
<?php


$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$type= mysql_real_escape_string($_POST["type"]);


$userAreaPoint = 5; //개인 소유 영토 기준
$rankUserAreaPoint = $userAreaPoint + 2; //봉쇄조 가중치
$checkArea3 = 20; //좌표 절대 거리 차이 기준

if($type == 'wr'){
    $nm= mysql_real_escape_string($_POST["nm"]);
    $px= mysql_real_escape_string($_POST["px"]);
    $py= mysql_real_escape_string($_POST["py"]);
    $user= mysql_real_escape_string($_POST["user"]);

    if($user == 'normal'){
        $checkArea1 = ($userAreaPoint + 1) + ($userAreaPoint + 1);
        $checkArea2 = ($userAreaPoint + 1) + ($rankUserAreaPoint + 1);
    }else{
        $checkArea1 = ($userAreaPoint + 1) + ($rankUserAreaPoint + 1);
        $checkArea2 = ($rankUserAreaPoint + 1) + ($rankUserAreaPoint + 1);
    }
    
    $sql = " SELECT * ";
    $sql.= " FROM rye_point ";
    $sql.= " WHERE ";
    $sql.= " ((abs(px - {$px}) < {$checkArea1} AND abs(py - {$py}) < {$checkArea1} AND user = 'normal') ";
    $sql.= " OR (abs(px - {$px}) < {$checkArea2} AND abs(py - {$py}) < {$checkArea2} AND user = 'ranker')) ";
    $sql.= " AND ((sign(px - {$px}) = sign(py - {$py})) OR (abs(px - {$px}) + abs(py - {$py}) < {$checkArea3})) ";
    $sql.= " AND st = 'Y' ";

    $result_set = mysql_query($sql);
    $result_count = mysql_num_rows($result_set);

    $sNick = '';

    if($result_count > 0){
        while ($row = mysql_fetch_array($result_set)) {
            $sNick .= $row['nm'].'('.$row['px'].','.$row['py'].')님, ';
        }

        $sNick = substr($sNick, 0, -2);

        echo "<script>alert('".$sNick."과 개인 영토가 중복됩니다.')</script>";
        echo "<script>history.back();</script>";
    }else{
        $sql = " INSERT INTO rye_point(nm,px,py,user) ";
        $sql.= " values('{$nm}','{$px}','{$py}','{$user}');";

        if($sql_result = mysql_query($sql, $conn)){
            $count = mysql_affected_rows();
            if($count>0){
                echo "<script>alert('주성 좌표가 등록 되었습니다.')</script>";
                echo "<script>location.replace('./toji.php')</script>";
            }else{
                echo "<script>alert('문제가 생겼습니다.')</script>";
                echo "<script>history.back();</script>";
            }
        }else{
            echo "<script>alert('문제가 생겼습니다.')</script>";
            echo "<script>history.back();</script>";
        }
    }
}else if($type == 'del'){
    $id= mysql_real_escape_string($_POST["id"]);
    
    $sql = " UPDATE rye_point SET st = 'N' WHERE id = {$id} ";

    if($sql_result = mysql_query($sql, $conn)){
        $count = mysql_affected_rows();
        if($count>0){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}else if($type == 'search'){
    $nm= mysql_real_escape_string($_POST["nm"]);
    $px= mysql_real_escape_string($_POST["px"]);
    $py= mysql_real_escape_string($_POST["py"]);
    $user= mysql_real_escape_string($_POST["user"]);

    if($user == 'normal'){
        $checkArea1 = ($userAreaPoint + 1) + ($userAreaPoint + 1);
        $checkArea2 = ($userAreaPoint + 1) + ($rankUserAreaPoint + 1);
    }else{
        $checkArea1 = ($userAreaPoint + 1) + ($rankUserAreaPoint + 1);
        $checkArea2 = ($rankUserAreaPoint + 1) + ($rankUserAreaPoint + 1);
    }
    
    $sql = " SELECT * ";
    $sql.= " FROM rye_point ";
    $sql.= " WHERE ";
    $sql.= " ((abs(px - {$px}) < {$checkArea1} AND abs(py - {$py}) < {$checkArea1} AND user = 'normal') ";
    $sql.= " OR (abs(px - {$px}) < {$checkArea2} AND abs(py - {$py}) < {$checkArea2} AND user = 'ranker')) ";
    $sql.= " AND ((sign(px - {$px}) = sign(py - {$py})) OR (abs(px - {$px}) + abs(py - {$py}) < {$checkArea3})) ";
    $sql.= " AND st = 'Y' ";

    $result_set = mysql_query($sql);
    $result_count = mysql_num_rows($result_set);

    $sNick = '';

    if($result_count > 0){
        while ($row = mysql_fetch_array($result_set)) {
            $sNick .= $row['nm'].'('.$row['px'].','.$row['py'].')님, ';
        }

        $sNick = substr($sNick, 0, -2);

        echo "<script>alert('".$sNick."과 개인 영토가 중복됩니다.')</script>";
        echo "<script>history.back();</script>";
    }else{
        echo "<script>alert('등록 가능한 좌표입니다.')</script>";
        echo "<script>history.back();</script>";
    }
}else if($type == 'bunsung'){
    $nm= mysql_real_escape_string($_POST["nm"]);
    $px= mysql_real_escape_string($_POST["px"]);
    $py= mysql_real_escape_string($_POST["py"]);
    $user= mysql_real_escape_string($_POST["user"]);

    $checkArea1 = $userAreaPoint + 3;
    $checkArea2 = $rankUserAreaPoint + 3;
    
    $sql = " SELECT * ";
    $sql.= " FROM rye_point ";
    $sql.= " WHERE ";
    $sql.= " ((abs(px - {$px}) < {$checkArea1} AND abs(py - {$py}) < {$checkArea1} AND user = 'normal') ";
    $sql.= " OR (abs(px - {$px}) < {$checkArea2} AND abs(py - {$py}) < {$checkArea2} AND user = 'ranker')) ";
    $sql.= " AND ((sign(px - {$px}) = sign(py - {$py})) OR (abs(px - {$px}) + abs(py - {$py}) < {$checkArea3})) ";
    $sql.= " AND st = 'Y' ";

    $result_set = mysql_query($sql);
    $result_count = mysql_num_rows($result_set);

    $sNick = '';

    if($result_count > 0){
        while ($row = mysql_fetch_array($result_set)) {
            $sNick .= $row['nm'].'('.$row['px'].','.$row['py'].')님, ';
        }

        $sNick = substr($sNick, 0, -2);

        echo "<script>alert('".$sNick."과 개인 영토가 중복됩니다. 본인 영토만 중복된다면 별도의 데이터 등록 없이 분성 설치하시면 됩니다.')</script>";
        echo "<script>history.back();</script>";
    }else{
        echo "<script>alert('등록 가능한 좌표입니다.')</script>";
        echo "<script>history.back();</script>";
    }
}else if($type == 'field'){
    $px= mysql_real_escape_string($_POST["px"]);
    $py= mysql_real_escape_string($_POST["py"]);

    $checkArea1 = $userAreaPoint + 1;
    $checkArea2 = $rankUserAreaPoint + 1;
    
    $sql = " SELECT * ";
    $sql.= " FROM rye_point ";
    $sql.= " WHERE ";
    $sql.= " ((abs(px - {$px}) < {$checkArea1} AND abs(py - {$py}) < {$checkArea1} AND user = 'normal') ";
    $sql.= " OR (abs(px - {$px}) < {$checkArea2} AND abs(py - {$py}) < {$checkArea2} AND user = 'ranker')) ";
    $sql.= " AND st = 'Y' ";

    $result_set = mysql_query($sql);
    $result_count = mysql_num_rows($result_set);

    $sNick = '';

    if($result_count > 0){
        while ($row = mysql_fetch_array($result_set)) {
            $sNick .= $row['nm'].'('.$row['px'].','.$row['py'].')님, ';
        }

        $sNick = substr($sNick, 0, -2);

        echo "<script>alert('".$sNick."의 개인 영토입니다.')</script>";
        echo "<script>history.back();</script>";
    }else{
        echo "<script>alert('토지작 가능한 좌표입니다.')</script>";
        echo "<script>history.back();</script>";
    }
}else if($type == 'force'){
    $nm= mysql_real_escape_string($_POST["nm"]);
    $px= mysql_real_escape_string($_POST["px"]);
    $py= mysql_real_escape_string($_POST["py"]);
    $user= mysql_real_escape_string($_POST["user"]);
    
    $sql = " INSERT INTO rye_point(nm,px,py,user) ";
    $sql.= " values('{$nm}','{$px}','{$py}','{$user}');";

    if($sql_result = mysql_query($sql, $conn)){
        $count = mysql_affected_rows();
        if($count>0){
            echo "<script>alert('주성 좌표가 등록 되었습니다.')</script>";
            echo "<script>location.replace('./toji.php')</script>";
        }else{
            echo "<script>alert('문제가 생겼습니다.')</script>";
            echo "<script>history.back();</script>";
        }
    }else{
        echo "<script>alert('문제가 생겼습니다.')</script>";
        echo "<script>history.back();</script>";
    }
}


?>