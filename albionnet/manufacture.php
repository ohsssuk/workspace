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
        <h2>제작 계산기</h2>

        <div class="mf_wrap">
            <div class="mf_col">
                <label for="mf_price">제작아이템 가격</label>
                <input type="number" name="mf_price" placeholder="판매 가격">
                <div class="help_msg">
                    완성된 제작아이템을 판매할 마을의 가격 입력을 권장
                </div>
            </div>
            
            <div class="mf_col">
                <label for="make_tier">티어</label>
                <select name="make_tier" id="make_tier">
                    <option value="5">5티어</option>
                    <option value="6">6티어</option>
                    <option value="7">7티어</option>
                </select>
                <div class="help_msg">
                    <p>티어별 재료 갯수당 일지 명성 증가량</p>
                    <p>5T: 90/2400</p>
                    <p>6T: 270/4800</p>
                    <p>7T: 645/9600</p>
                    <p>8T: ?/19200 (모름)</p>
                </div>
            </div>
            
            <div class="mf_col">
                <label for="mf_count">제작아이템 갯수</label>
                <input type="number" name="mf_count" placeholder="제작할 갯수 입력" value="1">
            </div>
            
            <div class="mf_col">
                <div class="goods_wrap">
                    <div class="goods_item">
                        <div class="g_price_wrap">
                            <p>재료 단가</p>
                            <input type="number" name="g_price[]" placeholder="필요 재료 단가 입력" onchange="goodsInsert(this)">
                        </div>
                        <div class="g_count_wrap">
                            <p>재료 갯수</p>
                            <input type="number" name="g_count[]" placeholder="재료 수량" value="8" onchange="goodsInsert(this)">
                        </div>
                        <div class="g_result">
                            <p>재료 비용</p>
                            <input type="number" value="0" disabled>
                        </div>
                    </div>
                </div>
                <div class="help_msg">
                    <p>재료 단가 : 재료 하나당 가격</p>
                    <p>재료 갯수 : 예) 갑옷 = 막대 16개</p>
                    <p>무기처럼 여러개의 재료가 필요한 경우, [필요 재료 추가+]버튼을 눌러 재료를 추가해주세요.</p>
                </div>
                <button type="button" class="btn" onclick="addGoods()">필요 재료 추가 +</button>
            </div>
            
            <div class="mf_col">
                <label for="return">반환율</label>
                <input type="number" name="return" value="24.8"><span class="percent">%</span>
                <div class="help_msg">
                    *집중 사용시 반환율은 <strong>47.9%</strong>입니다.
                </div>
            </div>
            
            <div class="mf_col">
                <label for="make_price">총 제작 비용</label>
                <input type="number" name="make_price" placeholder="제작 비용 입력">
                <div class="help_msg">
                    제작소별로 비용이 상이합니다.
                </div>
            </div>
            
            <div class="mf_col">
                <label for="sell_cost">판매 수수료</label>
                <input type="number" name="sell_cost" placeholder="시장 판매 수수료 입력"><span class="percent">%</span>
                <div class="help_msg">
                    프리미엄 사용 여부에 따라 판매 수수료가 다릅니다.
                </div>
            </div>
        </div>
            
        <button class="btn btn-full" onclick="getResult()">계산하기</button>
        
        <div class="mf_result">
            
        </div>
        <div class="help_msg">
            <p>* 일지로 인한 수입은 추가 예정</p>
            <p>* 일지 명성은 5티어 소비재료 갯수당 90P / 6티어 소비재료 갯수당 270P / 7티어 소비재료 갯수당 645P 가 채워지기 때문에 소비재료 16개의 갑옷류 장비를 만드는 경우 대략 장비 3개 제작당 2개의 일지가 채워집니다.</p>
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
<style>
    .mf_wrap{
        margin-top: 40px;
        border-bottom: 1px solid #ddd;
    }
    .mf_wrap .mf_col{
        position: relative;
        padding: 10px 5px;
        border-top: 1px solid #ddd;
    }
    .mf_wrap .mf_col label{
        font-size: 14px;
        display: block;
        margin-bottom: 10px;
    }
    .goods_item p{
        font-size: 14px;
        display: block;
        margin-bottom: 10px;
    }
    .mf_wrap .mf_col input{
        height: 30px;
        box-sizing: border-box;
        max-width: 160px;
        width: 100%;
        text-align: right;
        background: #fff;
        border: 1px solid #b9b9b9;
        border-radius: 2px;
    }
    .mf_wrap .mf_col input:disabled{
        font-weight: bold;
        background: #efefef;
    }
    .mf_wrap .mf_col input:focus{
        outline: none;
    }
    .mf_wrap .mf_col select{
        height: 30px;
        padding: 0 10px;
        box-sizing: border-box;
        max-width: 160px;
        background: #fff;
        border: 1px solid #b9b9b9;
        border-radius: 2px;
    }
    .mf_wrap .percent{
        font-size: 14px;
        vertical-align: middle;
        margin-left:4px;
    }
    .help_msg{
        color: #444;
        font-size: 13px;
        margin-top: 10px;
    }
    .help_msg p{
        line-height: 1.4;
        margin-bottom: 4px;
    }
    .goods_item{
        background: #eee;
        padding: 8px;
        border:1px solid #ddd;
        border-radius: 2px;
        position: relative;
        margin-bottom: 10px;
    }
    .goods_item i{
        color: #3b4250;
        font-size:20px;
        position: absolute;
        right: 10px;
        top: 10px;
        cursor: pointer;
    }
    .g_price_wrap, .g_count_wrap, .g_result{
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
    }
    .btn{
        height: 30px;
        line-height: 28px;
        display: block;
        width: 200px;
        box-sizing: border-box;
        cursor: pointer;
        margin-top: 20px;
        
        color: #fff;
        background: #3b4250;
        border: 1px #616671 solid;
        border-radius: 2px;
        font-weight: bold;
        outline: none;
        transition: all 100ms;
        position: relative;
    }
    .btn.btn-full{
        width: 100%;
        height: 50px;
        font-size:16px;
    }
    .btn:hover{
        background: #5e6471;
    }
    .btn:active{
        top: 1px;
    }
    
    .mf_result{
        margin-top: 40px;
        border: 1px solid #ddd;
    }
    .mf_result .row{
        position: relative;
        padding: 10px 18px;
    }
    .mf_result .row:nth-child(even){
        background: #efefef;
    }
    .mf_result .row .title{
        font-size: 14px;
    }
    .mf_result .row .content{
        font-size: 18px;
        margin-top: 10px;
    }
</style>
<script>
    $(function(){

    });
    
    function addGoods(){
        html  = '<div class="goods_item">';
        html += '    <div class="g_price_wrap">';
        html += '        <p>재료 단가</p>';
        html += '        <input type="number" name="g_price[]" placeholder="필요 재료 단가 입력" onchange="goodsInsert(this)">';
        html += '    </div>';
        html += '    <div class="g_count_wrap">';
        html += '        <p>재료 갯수</p>';
        html += '        <input type="number" name="g_count[]" placeholder="재료 수량" onchange="goodsInsert(this)">';
        html += '    </div>';
        html += '    <div class="g_result">';
        html += '        <p>재료 비용</p>';
        html += '        <input type="number" value="0" disabled>';
        html += '    </div>';
        html += '    <i class="fas fa-minus-circle" onclick="deleteGoods(this)"></i>';
        html += '</div>';
        
        $('.goods_wrap').append(html);
    }
    
    function deleteGoods(el){
        $(el).closest('.goods_item').remove();
    }
    
    function goodsInsert(el){
        var target = $(el).closest('.goods_item');
        if(target.find('[name="g_price[]"]').val() == '' || target.find('[name="g_count[]"]').val() == ''){
            return false;
        }
        
        var total = target.find('[name="g_price[]"]').val() * target.find('[name="g_count[]"]').val();
        console.log(total);
        target.find('.g_result input').val(Number(total));
    }
    
    function getResult(){
        gtag('event', '알비온넷 제작 계산기 클릭');
        if($('[name="mf_price"]').val() == ''){
            alert('판매 가격을 입력해주세요.');
            return false;
        }
        
        if($('[name="mf_count"]').val() == ''){
            alert('제작할 갯수를 입력해주세요.');
            return false;
        }
        
        var check = true;
        $('[name="g_price[]"]').each(function(){
            if($(this).val() == ''){
                check = false;
            }
        });
        $('[name="g_count[]"]').each(function(){
            if($(this).val() == ''){
                check = false;
            }
        });
        if(!check){
            alert('재료 단가와 재료 갯수를 입력해주세요.');
            return false;
        }
        
        if($('[name="return"]').val() == ''){
            alert('제작시 재료 반환율을 입력해주세요.');
            return false;
        }
        
        if($('[name="make_price"]').val() == ''){
            alert('제작 비용을 입력해주세요.');
            return false;
        }
        
        if($('[name="sell_cost"]').val() == ''){
            alert('제작아이템 판매 수수료를 입력해주세요.');
            return false;
        }
        
        if($('[name="mf_price"]').val() == ''){
            alert('판매 가격을 입력해주세요.');
            return false;
        }
        
        var row = [];
        var total = 0;
        
        row.push([
            '총 수입', 
            '<span>'+numberFormat($('[name="mf_price"]').val() * $('[name="mf_count"]').val())+'</span> 실버'
        ]);
        
        
        var book_fame = 0;
        $('.goods_item').each(function(index){
            book_fame += $(this).find('[name="g_count[]"]').val() * $('[name="mf_count"]').val();
        });
        var tier = $('[name="make_tier"] option:selected').val();
        var book_cnt = 0;
        console.log(tier);
        if(tier == 5){
            book_cnt = (book_fame * 90 / 2400);
        }else if(tier == 6){
            book_cnt = (book_fame * 270 / 4800);
        }else if(tier == 7){
            book_cnt = (book_fame * 645 / 9600);
        }

        book_cnt = parseInt(book_cnt);
        row.push([
            '일지', 
            '<span>'+numberFormat(book_cnt)+'</span>권 완성 ('+numberFormat(book_cnt+1)+'권 소지 권장)'
        ]);
        
        
        total = 0;
        $('.goods_item').each(function(){
            total += $(this).find('[name="g_price[]"]').val() * $(this).find('[name="g_count[]"]').val();
        });
        row.push([
            '총 재료비', 
            '<span>'+numberFormat(total*$('[name="mf_count"]').val())+'</span> 실버'
        ]);
        
        
        var TOTAL_INCOME = 0;
        var susu_rate = (100 - $('[name="sell_cost"]').val()) / 100;
        TOTAL_INCOME = parseInt(($('[name="mf_price"]').val() * $('[name="mf_count"]').val() * susu_rate) - $('[name="make_price"]').val());
        row.push([
            '실 수입(-판매 수수료, -제작 비용)', 
            '<span>'+numberFormat(TOTAL_INCOME)+'</span> 실버'
        ]);
        
        
        var TOTAL_COST = 0;
        $('.goods_item').each(function(){
            var all_cnt = $(this).find('[name="g_count[]"]').val() * $('[name="mf_count"]').val();
            var rate = (100 - $('[name="return"]').val()) / 100;
            var using_cnt = (parseInt(all_cnt * rate));
            
            TOTAL_COST += $(this).find('[name="g_price[]"]').val() * using_cnt;
        });
        row.push([
            '실 재료비(반환 재료 제외)', 
            '<span>'+numberFormat(TOTAL_COST)+'</span> 실버'
        ]);
        
        row.push([
            '순이익(일지 수입 제외)', 
            '<span>'+numberFormat(TOTAL_INCOME-TOTAL_COST)+'</span> 실버'
        ]);
        
        
        html = '';
        
        for(var i = 0; i < row.length; i++){
            html += '<div class="row">';
            html += '   <div class="title">';
            html +=         row[i][0];
            html += '   </div>';
            html += '   <div class="content">';
            html +=         row[i][1];
            html += '   </div>';
            html += '</div>';
        }
        
        $('.mf_result').html(html);
    }
    
    function numberFormat(getNum){
        let rNum = (getNum/1).toFixed(0).replace('.', ',');
        return rNum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>