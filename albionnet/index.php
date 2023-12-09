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
        <h2>거래소 시세</h2>
        <div class="thnks_to">
            <strong>https://www.albion-online-data.com</strong><br /> API 제공으로 만들어졌습니다. 감사합니다.
        </div>
        <div class="search_form">
            <div class="search_box">
                <input type="text" onkeydown="itemMarket.search(0)" name="item_name" placeholder="검색할 아이템 이름">
                <button type=button onclick="itemMarket.search(1)">검색</button>
            </div>
        </div>
        <div class="result_wrap">
            <div class="result_help"></div>
            <ul class="result">

            </ul>
        </div>
    
        <div class="price_result_wrap">
            <div class="price_result_help">
                <p>구매가는 구매요청 최고가, 판매가는 판매요청 최저가 입니다.</p>
                <p>유저들중 해당 프로그램을 사용하는 유저들이 인게임에서 보는 정보를 그대로 가져오는 API기 때문에 데이터가 다소 유실되거나 부정확할 수 있습니다.</p>
            </div>
            <div class="price_result_head">
                <div class="price_result_head_inner">
                    <div class="price_city price_common">도시</div>
                    <div class="price_quality price_common">품질</div>
                    <div class="price_buy price_common">
                        구매(Max)
                    </div>
                    <div class="price_sell price_common">
                        판매(Min)
                    </div>
                </div>
            </div>
            <ul class="price_result">
                
            </ul>
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
    
    <?php include 'include/footer.php'; ?>
</body>
<script>
    
    $(function(){
//        $(window).scroll(function(){
//            if($('.price_result_head').offset().top < $(window).scrollTop() + 60){
//                $('.price_result_head').addClass('fix');
//            }else{
//                $('.price_result_head').removeClass('fix');
//            }
//        });
    });
    
    var cityNameKor = {
        'Black Market' : '암시장',
        'Bridgewatch' : '브릿지워치',
        'Caerleon' : '칼레온',
        'Fort Sterling' : '포트 스털링',
        'Lymhurst' : '림허스트',
        'Martlock' : '마트록',
        'Thetford' : '데포드'
    };
    
    var qualityNameKor = {
        1 : '일반',
        2 : '좋음',
        3 : '뛰어남',
        4 : '우수함',
        5 : '걸작',
    };
    
    var itemMarket = {
        search : function(swich){
            var keyword = $('input[name="item_name"]').val();
            if(event.keyCode == 13 || swich == 1){
                if(keyword == ''){
                    alert('검색어가 없습니다.');
                    return false;
                }

                $.ajax({
                    url : "https://raw.githubusercontent.com/broderickhyman/ao-bin-dumps/master/formatted/items.json",
                    dataType : "json",
                    success : function(data){
                        $('.result_help').html('*리스트에서 아이템을 클릭하여 각 도시 거래소 시세를 볼 수 있습니다.');
                        var html = '';
                        data.forEach(function(list){
                            if(typeof list['LocalizedNames'] != 'undefined' && list['LocalizedNames'] != null && typeof list['LocalizedNames']['KO-KR'] != 'undefined'){
                                console.log(list['LocalizedNames']['KO-KR']);
                                if(list['LocalizedNames']['KO-KR'].indexOf(keyword) != -1){
                                    html += '';
                                    html += '<li class="item_list" onclick="itemMarket.searchPrice(\''+list['UniqueName']+'\')">';
                                    
                                    html += '<img src="https://render.albiononline.com/v1/item/'+list['UniqueName']+'.png" class="item_thumb" onerror="this.src=\'./images/no_image_icon.png\'">';
                                    
                                    html += '<div class="item_name">' + list['LocalizedNames']['KO-KR'] + '</div>';
                                    if(list['UniqueName'].indexOf('@') != -1){
                                        var gradeSearch = list['UniqueName'].split('@');
                                        html += '<div class="item_inchant item_inchant_'+gradeSearch[1]+'">인챈트 ' + gradeSearch[1] + '</div>';
                                    }
                                    html += '</li>';
                                }
                            }
                        });
                        $('.result').html(html);
                        
                        $('html, body').animate({
                            scrollTop: $('.result_wrap').offset().top - 60
                        },500);
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
        },
        searchPrice : function(unique_name){
            $.ajax({
                url : "https://www.albion-online-data.com/api/v2/stats/prices/"+unique_name+".json?",
                dataType : "json",
                success : function(data){
                    var html = '';
                    data.forEach(function(list){
                        html += '';
                        html += '<li>';
                        html += '   <div class="price_city price_common">'+(typeof cityNameKor[list['city']] != 'undefined' ? cityNameKor[list['city']] : list['city'])+'</div>';
                        html += '   <div class="price_quality price_quality_'+list['quality']+' price_common">'+qualityNameKor[list['quality']]+'</div>';
                        html += '   <div class="price_buy price_common">'+list['buy_price_max']+'</div>';
                        html += '   <div class="price_sell price_common">'+list['sell_price_min']+'</div>';
                        html += '</li>';
                    });
                    
                    $('.price_result').html(html);
                    $('.price_result_wrap').addClass('on');
                    
                    $('html, body').animate({
                        scrollTop : $('.price_result_wrap').offset().top - 60
                    },500);
                    
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
    };
</script>