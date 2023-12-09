<?php include './include/head.php'; ?>
<body>
    <div class="loading_wrap">
        <div class="loading">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
    </div>
    
    <?php include './include/header.php'; ?>
    <style>
        .search_form{
            background: #efefef;
        }
        .search_form .search_box{
            padding:30px 20px;
        }
        
        .man_search_list ul{
            border-top:1px solid #ddd;
            margin-top:40px;
        }
        .man_search_list ul li{
            border-bottom:1px solid #ddd;
            padding:10px 0;
            font-size:0;
            cursor: pointer;
            position: relative;
        }
        .man_search_list ul li i{
            position: absolute;
            font-size:22px;
            right:4px;
            top:50%;
            transform: translateY(-50%);
        }
        .man_search_list ul li:hover{
            background: #eee;
        }
        .man_search_list ul li > div{
            display: inline-block;
            font-size:16px;
            padding:0 10px;
            vertical-align: top;
            width:15%;
            box-sizing: border-box;
        }
        .man_search_list ul li > div:nth-of-type(1){
            line-height: 20px;
            font-size:18px;
            width:calc(40% - 18px);
        }
        
        @media screen and (max-width: 768px) { 
            .man_search_list ul li > div:nth-of-type(1) { 
                width:calc(100% - 18px); 
                margin-bottom: 15px;
            } 
            .man_search_list ul li > div{
                width:25%;
            }
        }

        .man_search_list ul li > div:nth-of-type(1) p{
            font-size:13px;
        }
        .man_search_list ul li > div:nth-of-type(1) p strong{
            font-weight: bold;
        }
        
        .man_search_list ul li > div > span{
            display: block;
            font-size:11px;
            line-height: 14px;
            margin-bottom: 10px;
        }
    </style>
    
    <div class="main">
        <h1 class="site_title">알비온넷</h1>
        <h2>유저 찾기</h2>
        <div class="thnks_to">
            <strong>https://www.tools4albion.com/api_info.php</strong><br /> API 제공으로 만들어졌습니다. 감사합니다.
        </div>
        <div class="search_form">
            <form action="./search_man.php" method="post">
                <div class="search_box">
                    <input type="text" name="nm" placeholder="검색할 아이디 (일부도 가능)">
                    <button type=submit>검색</button>
                </div>
            </form>
        </div>
        
        <?php
        
        if(!empty($_POST['nm'])) {
            $url = 'https://gameinfo.albiononline.com/api/gameinfo/search?q='.$_POST['nm'];

            $ch = curl_init();                                 //curl 초기화
            curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함

            $response = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($response, true);
        }

        ?>
        
        <?php if(isset($response)) : ?>
        <div class="man_search_list">
            <ul>
            <?php if(!empty($response['players'])) : ?>
                <?php foreach($response['players'] as $list) : ?>
                    <li onclick="traceMan('<?=$list['Id'] ?>','<?=$list['Name'] ?>')">
                        <div>
                            <p>
                            <?php if(!empty($list['AllianceName'])) : ?>
                                <strong>[<?=$list['AllianceName'] ?>]</strong>
                            <?php endif ?>  
                            <?php if(!empty($list['AllianceName'])) : ?>
                                <?=$list['GuildName'] ?>
                            <?php endif ?>  
                            </p>
                            <?=$list['Name'] ?>
                        </div>
                        <div>
                            <span>KillFame</span>
                            <?=!empty($list['KillFame']) ? number_format($list['KillFame']) : 0  ?>
                        </div>
                        <div>
                            <span>DeathFame</span>
                            <?=!empty($list['DeathFame']) ? number_format($list['DeathFame']) : 0 ?>
                        </div>
                        <div>
                            <span>totalKills</span>
                            <?=!empty($list['totalKills']) ? number_format($list['totalKills']) : 0 ?>
                        </div>
                        <div>
                            <span>gvgKills</span>
                            <?=!empty($list['gvgKills']) ? number_format($list['gvgKills']) : 0 ?>
                        </div>
                        <i class="fas fa-angle-right"></i>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
            </ul>
        </div>
        <?php endif; ?>
        
        <form action="trace_man.php" method="post" name="trace_man">
            <input type="hidden" value="" name="id">
            <input type="hidden" value="" name="nm">
        </form>
        
        <br />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 디스플레이_수평 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4126261814359480"
             data-ad-slot="5536762597"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             window.onload = function() {
                (adsbygoogle = window.adsbygoogle || []).push({});
             }
        </script>
        <br />
    </div>
    
    <?php include 'include/footer.php'; ?>
</body>
<script>
    function traceMan(id,nm){
        var frm = $('form[name="trace_man"]');
        
        frm.find('input[name="id"]').val(id);
        frm.find('input[name="nm"]').val(nm);
        frm.submit();
    }
</script>