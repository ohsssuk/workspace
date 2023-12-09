var nameList = [];

var initSetting = {
    on: function(){
        this.setItemListHtml();
        this.setSearch();
        this.setNameList();
        this.setNameListPrice();
    },
    setNameList : function(){
        jawon.forEach(function(category){
            category.data.forEach(function(item){
                nameList.push([
                    item[0],
                    item[1],
                    ''
                ]);
            });
        });
    },
    setNameListPrice : function(){
        var userSetData = parseUserSetData('body');
        
        if(!userSetData){
            return false;
        }
        
        nameList.forEach(function(item, idx) {
            for (let i = 0; i < userSetData.length; i++) {
                if(typeof userSetData[i].name == 'undefined' || userSetData[i].price == 'undefined'){
                    userSetData.splice(i, 1);
                    break;
                }

                if(item[0] == userSetData[i].name){
                    nameList[idx][3] = userSetData[i].price;
                    userSetData.splice(i, 1);
                    break;
                }
            }
        });
        
        userSetData.forEach(function(data) {
            if(typeof data.name == 'undefined' || data.price == 'undefined'){
                return true;
            }
            
            
        });
    },
    setItemListHtml : function(){
        var html = '';
        banjepoom.forEach(function(item,idx){
            if(item.need.length > 0){

                html += '<li onclick="itemCal('+idx+',\'ban\')" data-idx="'+idx+'">';
                html += '   <div class="item_img">';
                html += '       <img src="'+item.src+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" alt="아이템 이미지">';
                html += '   </div>';
                html += '   <div class="item_name">'+item.name+'</div>';
                html += '   <div class="item_pay"> <span>';
                if(typeof item.special != 'undefined'){
                    html += item.special;
                }
                html += '   </span></div>';
                html += '</li>';

            }
        });
        $('.item_list').html(html);

        html = '';
        wanjepoom.forEach(function(item,idx){
            if(item.need.length > 0){ 

                html += '<li onclick="itemCal('+idx+',\'wan\')" data-idx="'+idx+'">';
                html += '   <div class="item_img">';
                html += '       <img src="'+item.src+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" alt="아이템 이미지">';
                html += '   </div>';
                html += '   <div class="item_name">'+item.name+'</div>';
                html += '   <div class="item_pay"> <span>';
                if(typeof item.special != 'undefined'){
                    html += item.special;
                }
                html += '   </span></div>';
                html += '</li>';

            }
        });
        
        $('.item_list').append(html);
    },
    setSearch : function(){
        var searchKeyword = $('input[name="search_name"]').val();
        if(searchKeyword){
            $('.item_list > li').each(function(){
                var nm = $(this).find('.item_name').html();

                if(nm.indexOf(searchKeyword) == -1){
                    $(this).remove();
                }
            });
        }  
    },
};

function setUserSet(el){
    setUserSetJson();
    
    if(!confirm('리스트를 등록할까요?')) return false;
    
    if(!$('[name="us_writer"]').val()){
        alert('작성자를 입력해주세요.');
        return false;
    }
    
    $(el).closest('form').submit();
}

function setUserSetJson(){
    var resultSet = [];
    
    $('.resource_list > li').each(function(){
        var resourcePrice = $(this).find('[name="rcs_user_set[]"]').val();
        if(isNaN(resourcePrice) || !resourcePrice){
            resourcePrice = 0;
        }
        
        var resourceName = $(this).find('.rcs_name').text();
        
        resultSet.push({
            'name' : resourceName,
            'price' : resourcePrice,
        });
    });

    $('[name="us_set"]').val(JSON.stringify(resultSet));
}
        
function itemCal(idx,kind){
    var nameForGtag = '';
    if(kind=='wan'){
        gtag('event', '[완제품] ' + wanjepoom[idx].name + ' 클릭');
    }else{
        gtag('event', '[반제품] ' + banjepoom[idx].name + ' 클릭');
    }
    
    $('.result_list').html('');
    var html = '';

    html += '<div class="tree_wrap">';
    html += itemCalDetail(idx,0,1,kind);
    html += '</div>';

    $('.hide_section').css({display:'block'});
    $('.goods_box').html(html);
    
    $('html,body').animate({scrollTop:$('.hide_section').offset().top - 70},500);
}

function itemCalDetail(idx,level,amount,kind){
    if(typeof kind == 'undefined'){
        kind = 'ban';
    }
    
    var openBox;
    if(kind == 'wan'){
        openBox = wanjepoom[idx];
    }else{
        openBox = banjepoom[idx];
    }
    
    var html = '';
    html += '<div class="origin_title">';
    if(typeof openBox != 'undefined' && typeof openBox.special != 'undefined'){
        html += '<span class="tree_special">'+openBox.special+' 특수</span>'
    }
    html += '   <img src="'+openBox.src+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'">';
    html += '</div>';

    openBox.need.forEach(function(item){
        var product = [];
        
        nameList.forEach(function(goods){
            if(goods[0] == item[0]){
                product = goods;
            }
        });

        if(product.length > 0){
            html += '<div class="tree_level use tree_origin tree_level_'+level+'" data-amount="'+item[1]*amount+'">';
            if(typeof product[2] != 'undefined'){
                html += '<div class="origin_special">'+product[2]+'</div>';
            }
            html += '   <p><span>'+product[0]+' x '+item[1]*amount+'</span></p>';
            html += '   <div class="img_wrap"><img src="'+product[1]+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'"></div>';
            html += '   <div class="goods_price_wrap"><input type="text" name="goods_price" value="'+(typeof product[3] != 'undefined' ? product[3] : '0')+'"> 금화</div>';
        }else{
            html += '<div class="tree_level use tree_resource tree_level_'+level+'" data-amount="'+item[1]*amount+'">';
            html += '   <p><span>'+item[0]+' x '+item[1]*amount+'</span>';
            html += '   <button class="tree_change" onclick="itemCalChange(this);">반제품으로 계산</button></p>';
            html += '   <div class="goods_price_wrap"><input type="text" name="goods_price" value="0"> 금화</div>';
        }

        banjepoom.forEach(function(target,sub_idx){
            if(target.name == item[0]){
                html += itemCalDetail(sub_idx,level+1,item[1]*amount,'ban');
            }
        });

        html += '</div>';
    });
    return html;
}

function itemCalChange(el){
    $(el).closest('.tree_resource').toggleClass('on');
    if($(el).closest('.tree_resource').hasClass('on')){
        $(el).html('자원으로 계산');
    }else{
        $(el).html('반제품으로 계산');
    }
}

function itemCalFinal(){
    var resultM = 0;
    $('.final_page').css({display:'block'});
    $('.result_list').html('');
    $('html,body').animate({scrollTop:$('.final_page').offset().top-60},500);

    $('.tree_level').each(function(idx){
        if($(this).is(':visible') && ($(this).hasClass('tree_origin') || $(this).hasClass('on'))){
            var a = $(this).data('amount');
            var b = $(this).children('p').find('span').html();
            var c = $(this).find('[name="goods_price"]').val();

            if(a>0){
                $('.result_list').append('<li onclick="delNeedResource(this)" class="adjust_rcs"><span class="final_rcs">'+ b +' (개당 '+ c +'금화)</span> = <span class="final_rcs_sum">'+(a*c)+'</span> 금화 <i class="fas fa-minus-circle"></i></li> ');
            }
            resultM+=(a*c);
        }
    });
    $('.final_money span').html(resultM);
    
    itemCalSusu(resultM);
}

function itemCalSusu(resultM){
    var resultM = Number($('.final_money span').text());
    
    var susu_html = '';
    susu_html += '수수료 10% : '+(resultM - (resultM * 0.1)).toFixed(0) + ' ( -'+(resultM * 0.1).toFixed(0)+' )<br />';
    susu_html += '수수료 15% : '+(resultM - (resultM * 0.15)).toFixed(0) + ' ( -'+(resultM * 0.15).toFixed(0)+' )<br />';
    susu_html += '수수료 20% : '+(resultM - (resultM * 0.2)).toFixed(0) + ' ( -'+(resultM * 0.2).toFixed(0)+' ) ';
    $('.final_money_susu').html(susu_html);
}

function delNeedResource(el){
    if(confirm('이 재료를 내역에서 제외할까요?')){
        $(el).css({display:'none'});
        
        var resultM = Number($('.final_money span').text());
        resultM -= Number($(el).find('.final_rcs_sum').text());
        $('.final_money span').html(resultM);

        itemCalSusu(resultM);
    }
}

function parseUserSetData(el){
    var $targetEl = $(el).find('input[name="user_set_json"]');
    
    if($targetEl.length == 0) return false;
    
    var itemSetJsonData = $(el).find('input[name="user_set_json"]').val();
        
    var itemSetList = JSON.parse(itemSetJsonData);
    
    return itemSetList;
}


function openGnb(){
    $('.gnb_wrap').toggleClass('on');
}