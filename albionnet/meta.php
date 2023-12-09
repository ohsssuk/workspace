<?php include './include/head.php'; ?>
<body>
    <div class="loading_wrap">
        <div class="loading">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
    </div>
    
    <?php include './include/header.php'; ?>
    
    <div class="main">
        <h1 class="site_title">알비온넷</h1>
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
        <h2>PVP기어 순위</h2><br />
        <div class="price_result_help">
            <p><strong style="font-weight:bold;">최근 10000건</strong>의 kill 기록으로 만들어진 순위입니다.</p>
            <p><strong style="font-weight:bold;">티어,인챈트는 반영하지 않습니다.</strong> 아이템 종류만 반영합니다.</p>
            <p><strong style="font-weight:bold;">실시간 기록</strong>이므로 순위는 매번 변동됩니다.</p>
            <p><strong style="font-weight:bold;">장비 티어는 반영하지 않고 모두 장로 티어로 표시합니다.</strong></p>
        </div>
        
        <div class="meta_result">
            <?php
            $aAllData = array();

            for($i = 0; $i < 20; $i++){
                $url = 'https://gameinfo.albiononline.com/api/gameinfo/events?limit=50&offset='.$i*50;

                $ch = curl_init();                                 //curl 초기화
                curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함

                $response = curl_exec($ch);
                curl_close($ch);

                $response = json_decode($response, true);

                foreach($response as $res){
                    $sEquipment = '';
                    $sMainHand = $sOffHand = $sHead = $sArmor = $sShoes = 'empty';

                    if(!empty($res['Killer']['Equipment']['MainHand']['Type'])){
                        $aMainHand = explode("@", $res['Killer']['Equipment']['MainHand']['Type']);
                        $sMainHand = substr($aMainHand[0], 3);
                    }
                    if(!empty($res['Killer']['Equipment']['OffHand']['Type'])){
                        $aOffHand = explode("@", $res['Killer']['Equipment']['OffHand']['Type']);
                        $sOffHand = substr($aOffHand[0], 3);
                    }
                    if(!empty($res['Killer']['Equipment']['Head']['Type'])){
                        $aHead = explode("@", $res['Killer']['Equipment']['Head']['Type']);
                        $sHead = substr($aHead[0], 3);
                    }
                    if(!empty($res['Killer']['Equipment']['Armor']['Type'])){
                        $aArmor = explode("@", $res['Killer']['Equipment']['Armor']['Type']);
                        $sArmor = substr($aArmor[0], 3);
                    }
                    if(!empty($res['Killer']['Equipment']['Shoes']['Type'])){
                        $aShoes = explode("@", $res['Killer']['Equipment']['Shoes']['Type']);
                        $sShoes = substr($aShoes[0], 3);
                    }

                    $sEquipment = $sMainHand.'|'.$sOffHand.'|'.$sHead.'|'.$sArmor.'|'.$sShoes;

                    if(empty($aAllData[$sEquipment])){
                        $aAllData[$sEquipment] = 1;
                    }else{
                        $aAllData[$sEquipment] += 1;
                    }

                }
                
                arsort($aAllData);

            }
            
//            echo '<pre>';
//            echo  json_encode($response, JSON_PRETTY_PRINT);
//            echo '</pre>';
            
//            var_dump($aAllData);
            
            ?>
            <?php
            
            if(!empty($aAllData)) :
            
                $limit_count = 1;
            
                foreach($aAllData as $meta => $count) :
                    if($limit_count > 50){
                        break;
                    }
                    
            ?>
            
            <?php if(strpos($meta, 'empty|empty|empty|empty|empty') === false) : ?>
            <div class="meta_row">
                <div class="meta_rank">
                    <p>
                        <?=$limit_count ?>
                    </p>
                </div>
                <div class="meta_gear">
                    <?=$meta ?>
                    <?php foreach(explode('|', $meta) as $gear) : ?>
                        <?php if($gear != 'empty') : ?>
                            <div class="meta_gear_part">
                                <img src="https://render.albiononline.com/v1/item/T8_<?=$gear ?>.png">
                                <div class="gear_name_variable" data-gear-var="@ITEMS_T8_<?=$gear ?>"></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="meta_count">
                    <?=$count ?>명 (<?=$count/10000*100 ?>%)
                </div>
            </div>
            <?php $limit_count++; endif; ?>
            <?php
                endforeach;
            endif;
            
            ?>
        </div>
    </div>
    
    <footer>
        <div class="inner_footer">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
        </div>
    </footer>
</body>
<script>
    $(function(){
        makeItemName();
    });
    function makeItemName(){
        $.ajax({
            url : "https://raw.githubusercontent.com/broderickhyman/ao-bin-dumps/master/formatted/items.json",
            dataType : "json",
            success : function(data){
                var html = '';
                data.forEach(function(list, idx){
                    $('.gear_name_variable').each(function(){
                        if(list['LocalizationNameVariable'] == $(this).data('gearVar')){
                            $(this).html(list['LocalizedNames']['KO-KR'].replace('장로의 ',''));
                            console.log();
                        }
                    });
                });
            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                alert("통신 실패.")
            }
            ,beforeSend : function(){
                $('.loading_wrap').addClass('on');
            }
            ,complete : function(){
                $('.loading_wrap').removeClass('on');
            }
        });
    }
</script>