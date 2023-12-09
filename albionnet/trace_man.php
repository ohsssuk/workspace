<?php include './include/head.php'; ?>
<body>
    <?php include './include/header.php'; ?>
    <style>
        .record_list{
            margin-top:40px;
        }
        .record_list ul{
            border-top:1px solid #555;
            margin-top:20px;
        }
        .record_list ul li{
            border-bottom:1px solid #555;
        }
        .record_list ul li > div{
            padding:10px;
            box-sizing: border-box;
            border-bottom:1px solid #ddd;
        }
        .record_list ul li > div:last-child{
            border-bottom:none;
        }
        .record_list ul li > div p:nth-child(1){
            font-size:12px;
            margin-bottom: 5px;
            background:#3b4250;
            color:#fff;
            display: inline-block;
            line-height: 14px;
            padding:5px 10px;
            border-radius: 5px;
        }
        .record_list ul li > div .gear{
            width:240px;
            font-size:0;
            text-align: center;
        }
        .record_list ul li > div img{
            width:80px;
        }
        .record_list ul li > div .no-item{
            display: inline-block;
            padding:6px;
            box-sizing: border-box;
            font-size:14px;
            vertical-align: top;
            border-radius: 10px;
        }
        .record_list ul li > div .no-item div{
            width:68px;
            height: 68px;
            background: #eee;
            box-sizing: border-box;
            border: 5px solid #555;
            border-radius: 10px;
            line-height: 58px;
        }
        .refresh_check{
            border:1px solid #3b4250;
            background: none;
            padding:10px 20px;
            cursor:pointer;
            color:#3b4250;
            line-height: 20px;
            margin-top:20px;
            font-weight: bold;
            height:45px;
        }
        .refresh_check_now{
            border:1px solid #3b4250;
            background: #3b4250;
            padding:10px 20px;
            cursor:pointer;
            color:#fff;
            line-height: 20px;
            margin-top:20px;
            font-weight: bold;
            height:45px;
            vertical-align: top;
        }
        .refresh_check.on{
            color:#fff;
            background: #3b4250;
        }
        .refresh_check i{
            font-size:20px;
            margin-right:10px;
            position: relative;
            top:2px;
            display:none;
        }
        .refresh_check.on i{
            display:inline-block;
        }
    </style>
    
    <div class="loading_wrap">
        <div class="loading">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
    </div>
    
    <div class="main">
        <h1 class="site_title">알비온넷</h1>
        <h2>유저 최근 기록</h2>
        <div class="thnks_to">
            <strong>https://www.tools4albion.com/api_info.php</strong><br /> API 제공으로 만들어졌습니다. 감사합니다.
        </div>
        
        <?php
        
        if(!empty($_POST['nm'])) {
            $url = 'https://gameinfo.albiononline.com/api/gameinfo/players/'.$_POST['id'].'/kills';

            $ch = curl_init();                                 //curl 초기화
            curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함

            $response = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($response, true);
            
//            echo '<pre>';
//            var_dump($response);
//            echo '</pre>';
        }

        ?>
        
        <div class="record_list">
        <div style="font-size:24px; font-weight:bold;">찾는 아이디 : <?=$_POST['nm'] ?></div>
        <div>
            <button class="refresh_check <?=!empty($_POST['switch']) ? $_POST['switch'] : 'on' ?>" onclick="refreshUse(this);">
                <i class="fas fa-circle-notch fa-spin"></i>5분 단위 새로고침
            </button>
            <button class="refresh_check_now" onclick="refreshUseNow();">
                새로고침
            </button>
        </div>
        <form action="./trace_man.php" name="check_frm" method="post">
            <input type="hidden" value="<?=$_POST['id'] ?>" name="id">
            <input type="hidden" value="<?=$_POST['nm'] ?>" name="nm">
            <input type="hidden" value="<?=!empty($_POST['switch']) ? $_POST['switch'] : 'on' ?>" name="switch">
        </form>
        <?php $bIsExist = false; ?>
        <?php if(!empty($response)) : ?>
            <ul>
            <?php foreach($response as $result) : ?>
                <?php 
                $aTimeArr = explode('T',$result['TimeStamp']);
                $sDate = $aTimeArr[0];
                $sTime = substr($aTimeArr[1], 0, strpos($aTimeArr[1],'.'));
        
                $now = strtotime(date("Y-m-d H:i:s"));
                $timeTarget = strtotime($sDate.' '.$sTime.' +9 hours');
        
                if(($now - $timeTarget)/3600 <= 30 && $result['KillArea']=='OPEN_WORLD') :
                ?>
                <li>
                
                <div>
                    <p>시간</p>
                    <p><?=date('Y-m-d H:i:s', $timeTarget) ?></p>
                </div>
                <div>
                    <p>그룹멤버</p>
                    <p style="font-size:18px; font-weight:bold;"><?=$result['groupMemberCount'] ?>명</p>
                    <div style="line-height:22px; margin-top:10px;">
                        <?php if(!empty($result['GroupMembers'])) : ?>
                            <?php foreach($result['GroupMembers'] as $members) : ?>
                                <?=$members['Name'] ?> (IP : <?=$members['AverageItemPower'] ?>)<br />
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <p>IP</p>
                    <p><?=(int)$result['Killer']['AverageItemPower'] ?></p>
                </div>
                <div>
                    <p>장비</p>
                    <div class="gear">
                        <?php $equipArr = array('Bag','Head','Cape','MainHand','Armor','OffHand','Food','Shoes','Potion','Mount'); ?>
                        <?php foreach($equipArr as $item) : ?>
                            <?php if(!empty($result['Killer']['Equipment'][$item])) : ?>
                                <img src="https://render.albiononline.com/v1/item/<?=$result['Killer']['Equipment'][$item]['Type'] ?>.png">
                            <?php else: ?>
                                <div class="no-item">
                                    <div>없음</div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                </li>
                <?php $bIsExist = true; endif; ?>
                
            <?php endforeach; ?>
            </ul>
            <?php if($bIsExist == false) : ?>
                <div style="margin-top:20px; font-size:18px; padding-bottom:30px; line-height:24px;">30분 내의 기록이 없습니다.</div>
            <?php endif; ?>
        <?php endif; ?>
        </div>
        
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
    
    <footer>
        <div class="inner_footer">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
        </div>
    </footer>
</body>
<script>
    $(function(){
        if($('.refresh_check.on').length > 0){
            setTimeout(function(){
                $('form[name="check_frm"]').submit();
            },1000*60*5);
        }
    });
    
    function refreshUse(el){
        if($(el).hasClass('on')){
            $('form[name="check_frm"]').find('[name="switch"]').val('off');
        }else{
            $('form[name="check_frm"]').find('[name="switch"]').val('on');
        }
        
        $('form[name="check_frm"]').submit();
    }
    function refreshUseNow(){
        $('form[name="check_frm"]').submit();
    }
</script>