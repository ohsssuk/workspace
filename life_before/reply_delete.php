<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/style.css">
<style>
    .delete_all_wrap{
        width:100%;
        max-width: 400px;
        border:1px solid #506677;
        padding:50px 40px;
        margin:0 auto;
        box-sizing: border-box;
        margin-top:10%;
    }
    h1{
        text-align: center;
        font-size:16px;
        line-height: 1.6em;
    }
    .wrap_delete_form input{
        width:100%;
        height:40px;
        margin-top:10px;
        box-sizing: border-box;
    }
    .wrap_delete_form input[type="text"]{
        margin-top:30px;
    }
</style>
<div class="delete_all_wrap">
<?php

$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$rt_id = $_GET['rt_id'];

echo "<form action='reply_proc.php?wtype=de&rt_id={$rt_id}' method='post'>";
echo "<h1>삭제하시려면 작성시 사용했던<br /> 비밀번호를 입력해주세요</h1>";
echo "<div class='wrap_delete_form'>";
echo "<input type='text' name='rt_pwd' placeholder='비밀번호' />";
echo "<input type='submit' value='삭제'>";
echo "</div>";
echo "</form>";

?>
</div>