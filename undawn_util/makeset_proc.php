<meta charset="utf-8" />
<?php

$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$us_writer = $_POST["us_writer"];
$us_server = $_POST["us_server"]; 
$us_set = $_POST["us_set"];
$us_grade = $us_writer == 'master' ? 'y' : 'n';
$us_writer = $us_writer == 'master' ? '관리자' : $us_writer;

$sql = "
    insert into uu_user_set(
        us_writer
        , us_set
        , us_server
        , us_grade
    ) 
    values(
        '{$us_writer}'
        , '{$us_set}'
        , '{$us_server}'
        , '{$us_grade}'
    ); 
";

$result = mysql_query($sql, $conn);

?>

<script>
    location.replace('./usermake.php');
</script>
