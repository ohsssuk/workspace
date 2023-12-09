<?php
session_start();    //세션 시작
$_SESSION['joiner'] = $_POST['naver_id'];
?>
<script>
    location.replace('/');
</script>