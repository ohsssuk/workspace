<?php include './include/head.php'; ?>
<body>
    <?php include './include/header.php'; ?>
    
    <div class="loading_wrap">
        <div class="loading">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
    </div>
    
    <div class="main">
        <h1 class="site_title">
            삼국지 계산판<img src="./images/samgepan_main.png" alt="삼국지 계산판">
        </h1>
        <h2>영지 계산</h2>
        
        <div class="help_word">
            <div>이용 가이드</div>
            <p>- 동맹 자원지 균등 분배 목적</p>
            <p>- 동맹원간 영역 중복 방지 목적</p>
            <p>- 주성 모서리 기준 동일 거리 마름모꼴 형태로 무작위 분배시 가장 효율적이고 계산이 용이하도록 설정</p>
            <div class="made_by">
                Made by. 167서버 탄금주적. 한량맨
            </div>
        </div>
        
        <div class="input_form">
            <div class="row jusung_point">
                <div class="label">주성 좌표 ( x , y )</div>
                <input type="number" id="jusung_point_x" name="jusung_point_x" class="jusung_point"  placeholder="X 좌표">
                <input type="number" id="jusung_point_y" name="jusung_point_y"  class="jusung_point" placeholder="Y 좌표">
                <div class="help">주성의 중심지 좌표를 입력해주세요.</div>
            </div>
            
            <div class="row area">
                <div class="label">영역 크기</div>
                <input type="number" id="area" name="area" placeholder="숫자만 입력" value="7">
                <div class="help">예: 주성 중심지 좌표 기준 7칸 인경우 '7' 입력해주세요.</div>
            </div>
        </div>
        
        <div class="btn_wrap">
            <button type="button" class="sg_btn" onclick="terrritory.makeArea()">확인</button>
        </div>
        
        <div class="field_form">
            <div class="field_box">
                
            </div>
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
    
    
</body>
<script>
$(function(){
    
});

var terrritory = {
    makeArea : function(){
        var html = '';
        
        var count = Number($('input[name="area"]').val());
        var point_x = Number($('input[name="jusung_point_x"]').val());
        var point_y = Number($('input[name="jusung_point_y"]').val());
        var tile_type = (point_x % 2 == 0 ? 2 : 1);
        
        var area_tile = new Object;
        area_tile.width = (count * 2) + 3;
        area_tile.height = (count * 2) + 4;
        area_tile.extent = area_tile.width * area_tile.height;
        
        area_tile.start_x = point_x - count - 1;
        area_tile.start_y = point_y - count - (tile_type + 1);
        
        var user_tile = new Object;
        user_tile.x_start = point_x - 1;
        user_tile.x_end = point_x + 1;
        user_tile.y_start = point_y - tile_type;
        user_tile.y_end = user_tile.y_start + 3;
        console.log(user_tile);
        
        for(var i = 0; i < area_tile.width; i++){
            var px = area_tile.start_x + i;
            var py = area_tile.start_y;
            
            html += '<div class="column">';
            for(var j = 0; j < area_tile.height; j++){
                
                py += 1;
                
                var setter = '';
                if( Math.abs(point_x - px) <= count &&  Math.abs(point_y - py) <= count ){
                    setter = 'not';
                }
    
                html += '   <div class="field_space '+setter+'" data-idx="'+i+'" data-x="'+px+'" data-y="'+py+'">';
                html += '       <input type="hidden" name="idx" value="'+i+'">';
                html += '       <div class="point">' + px + '<br />' + py + '</div>';
                html += '   </div>';
            }
            html += '</div>';
        }  
        $('.field_box').html(html);
        
        $('.field_box .column').css({
            'width' : 'calc(100% / '+area_tile.width+')'
        });
        $('.field_box .field_space').css({
            'height' : $('.field_box .field_space').width() + 2
        });
        if(count % 2 == 1){
            $('.field_box .column:nth-of-type('+(tile_type == 1 ? 'odd' : 'even')+')').css({
                'margin-top' : $('.field_space').height() / 2
            });
        }else{
            $('.field_box .column:nth-of-type('+(tile_type == 1 ? 'even' : 'odd')+')').css({
                'margin-top' : $('.field_space').height() / 2
            });
        }
        
        for(var x = 0; x < 3; x++){
            for(var y = 0; y < 4; y++){
                var target_x = (point_x - 1) + x;
                var target_y = (point_y - tile_type) + y;
                
                if(target_x == point_x){
                    if((tile_type == 1 && target_y == point_y + 2) || (tile_type == 2 && target_y == point_y - 2)){
                        continue;
                    }
                }
                
                $('.field_box .field_space[data-x="'+target_x+'"][data-y="'+target_y+'"]').addClass('castle');
            }
        }
        $('.field_box .field_space[data-x="'+point_x+'"][data-y="'+point_y+'"]').addClass('center');
    },
    save : function(){
        $.ajax({
            url : "https://raw.githubusercontent.com/broderickhyman/ao-bin-dumps/master/formatted/items.json",
            dataType : "json",
            success : function(data){
                var html = '';
                data.forEach(function(list){

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
} 
</script>