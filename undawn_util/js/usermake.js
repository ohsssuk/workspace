$(function(){
    $('.user_set_data').each(function(){
        var $wrapEl = $(this);
        var userSetData = parseUserSetData(this);
        
        if(!Array.isArray(userSetData)){
            $wrapEl.remove();
            return true;
        }
        
        userSetData.forEach(function(data) {
            if(typeof data.name == 'undefined' || data.price == 'undefined'){
                $wrapEl.remove();
                return false;
            }
            
            $wrapEl.find('.detailbox').append('<div class="box_lec"><div>' + data.name + '</div><div>' + data.price + '</div></div>');
        });
    });
    
    $('.set_list>li.user_set_data').on('click',function(){
        var isSelected = $(this).hasClass('selected');
        
        $('.set_list>li').removeClass('selected');
        $('.detailbox,.detailbox_btn,.detailbox_btn_user').css({display:'none'});
        
        $(this).addClass('selected');
        $(this).children('.detailbox').css({display:'block'});
        $(this).children('.detailbox_btn').css({display:'inline-block'});
        $(this).children('.detailbox_btn_user').css({display:'inline-block'});
        
        gtag('event', '재료별 단가 목록 클릭');
    });
    
    $('.detailbox_btn_cal').on('click',function(){
        var userSetData = $(this).closest('.user_set_data').find('[name="user_set_json"]').val();
        
        $('input[name="target_user_set_data"]').val(userSetData);
        
        $('form[name="submit_with_user_set_data"]').attr("action", "./index.php").submit();
    });
    
    $('.detailbox_btn_user').on('click',function(){
        var userSetData = $(this).closest('.user_set_data').find('[name="user_set_json"]').val();
        
        $('input[name="target_user_set_data"]').val(userSetData);
        
        $('form[name="submit_with_user_set_data"]').attr("action", "./userset.php").submit();
    }); 
});