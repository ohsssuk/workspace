<header>
    <ul class="gnb">
        <li><a href="./index.php">거래소 시세</a></li>
        <li><a href="./manufacture.php">제작 계산기</a></li>
        <li><a href="./search_man.php">유저 찾기</a></li>
<!--        <li><a onclick="goPvpGearLank()">PVP 기어 순위</a></li>-->
    </ul>
</header>
<script>
    function goPvpGearLank(){
        if(confirm('해당 페이지는 데이터 연산으로 2~3분의 페이지 로드 시간이 소요됩니다. 정말 이동할까요?')){
            location.href='./meta.php';
        }
    }
</script>
<style>
    header{
        position: fixed;
        top:0;
        left:0;
        width:100%;
        height:40px;
        background: rgba(0,0,0,.9);
        z-index: 100;
    }
    header .gnb{
        font-size:0;
        padding:0 10px;
    }
    header .gnb>li{
        display: inline-block;
        margin:0 10px;
    }
    header .gnb>li>a{
        color:#fff;
        font-size:14px;
        text-decoration: none;
        line-height: 40px;
    }
</style>