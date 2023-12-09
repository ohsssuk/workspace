<header>
    <ul class="gnb">
        <li><a href="./index.php">건물 계산</a></li>
        <li  style="padding-right:20px;"><a href="./combat_simulation.php">모의 전투<span>BETA</span></a></li>
        <li><a href="./territory.php">영지 계산</a></li>
    </ul>
</header>
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
        cursor: pointer;
    }
    header .gnb>li>a{
        color:#fff;
        font-size:14px;
        text-decoration: none;
        line-height: 40px;
        position: relative;
    }
    header .gnb>li span{
        font-size: 2px;
        border-radius: 40px;
        background: #000;
        color:#fff;
        padding: 2px 6px;
        position: absolute;
        right: 0;
        top: 0;
        line-height: 1;
        transform: translate(95%, -30%);
        z-index: 5;
        border:1px solid #fff;
    }
</style>