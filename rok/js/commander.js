$(function(){
    var currentPointNow = 0;
    $(window).on('scroll',function(){
        if($(window).scrollTop() + $(window).height() > $('.commander_stat').height() + $('.commander_stat').offset().top){
            $('.stat_manager').addClass('set');
        }else{
            $('.stat_manager').removeClass('set');
        }
    });
});
function skillUp(obj){
    if($(obj).hasClass('abled')){
        var level = Number($(obj).find('input[name="level_current"]').val());

        if(level < $(obj).data('max')){ //스킬 업
            if(remainPointCkr(74) == false){
                alert('스킬포인트 74개를 전부 사용 했습니다.');
                return;
            }
            
            $(obj).find('.s_level span').html(level + 1);
            $(obj).find('input[name="level_current"]').val(level + 1);
            $(obj).find('.s_level_state_ing').css({
                width:(level + 1)/$(obj).data('max')*100 + '%'
            });

            if(level + 1 == $(obj).data('max')){
                $(obj).addClass('master');

                var formData = [0];
                $('.s_item.abled.master').each(function(){
                    formData.push($(this).data('id'));
                });
                console.log(formData);

                $.ajax({ 
                    type: "POST", 
                    url : "./proc/stat_proc.php?kind=master", 
                    dataType : "json",
                    data: {
                        prev_skill_list : formData
                    }, 
                    success : function(ajax_result) { 
                        console.log(ajax_result);
                        ajax_result.forEach(function(e){
                            if($('#s_'+e).length > 0){
                                $('#s_'+e).removeClass('disabled');
                                $('#s_'+e).addClass('abled');
                            }
                        });
                    }, 
                    error: function(error) { 
                        console.log('에러 :'+error); 
                    } 
                });

            }
        }else{ //초기화
            $(obj).find('.s_level span').html(0);
            $(obj).find('input[name="level_current"]').val(0);
            $(obj).find('.s_level_state_ing').css({
                width:0
            });

            $(obj).removeClass('master');
            
            var formData = new Array;
            formData.push($(obj).data('id'));
           
            console.log('formData:'+formData);

            $.ajax({ 
                type: "POST", 
                url : "./proc/stat_proc.php?kind=reset", 
                dataType : "json",
                data: {
                    prev_skill_list : formData
                }, 
                success : function(ajax_result) { 
                    console.log(ajax_result);
                    ajax_result.forEach(function(e){
                        if($('#s_'+e).length > 0){
                            $('#s_'+e).addClass('disabled');
                            $('#s_'+e).removeClass('abled');
                            $('#s_'+e).find('.s_level span').html(0);
                            $('#s_'+e).find('input[name="level_current"]').val(0);
                            $('#s_'+e).find('.s_level_state_ing').css({
                                width:0
                            });
                            $('#s_'+e).removeClass('master');
                        }
                    });
                }, 
                error: function(error) { 
                    console.log('에러 :'+error); 
                } 
            });
        }
        
        if($('.now_using_point').length > 0){
            currentPointNow = 0;
            $('input[name="level_current"]').each(function(){
                currentPointNow += Number($(this).val());
            });
            $('.now_using_point').html(currentPointNow);
        }
    }else{ //disabled 클릭
        var formData = new Array;
        formData.push($(obj).data('id'));

        console.log('formData:'+formData);

        $.ajax({ 
            type: "POST", 
            url : "./proc/stat_proc.php?kind=tree", 
            dataType : "json",
            data: {
                prev_skill_list : formData
            },
            success : function(ajax_result) { 
                console.log(ajax_result);
                $('.s_item').removeClass('need');
                ajax_result.forEach(function(e){
                    if($('#s_'+e).length > 0){
                        $('#s_'+e).addClass('need');
                    }
                });
            }, 
            error: function(error) { 
                console.log('에러 :'+error); 
            } 
        });
    }
}

function stat_close(obj){
    $(obj).toggleClass('on');
    $(obj).closest('ul').find('.stat_wrap_li').slideToggle(500);
}

function stat_result_cal(){
    var stat_result_amount = new Array;
    var stat_result_kind = new Array;
    
    $('.s_item').each(function(){  
        var s_amount = Number($(this).find('.s_amount').text()) * Number($(this).find('input[name="level_current"]').val());
        var s_kind = $(this).find('.s_kind').text();
        
        if(s_amount > 0){
            var s_idx = $.inArray(s_kind, stat_result_kind);
            
            if(s_idx > -1){
                stat_result_amount[s_idx] = Number(stat_result_amount[s_idx]) + s_amount;
            }else{
                stat_result_amount.push(s_amount);
                stat_result_kind.push(s_kind);
            }
        }
    });
    
    var html = '';
    if(stat_result_kind.length > 0){
        for(var i = 0; i < stat_result_kind.length; i++ ){
            html += '<li>';
            html +=    '<div>' + stat_result_kind[i] + '</div>';
            html +=    '<span>' + stat_result_amount[i] + '</span>';
            html += '</li>';
            
        }
    }else{
        html += '<li>';
        html +=    '<div>결과 없음</div>';
        html += '</li>';
    }
    $('.sm_list').html(html);
    
    $('.sm_wraper').addClass('on');
    $('html,body').animate({scrollTop:$('.sm_list').offset().top},500);
}

function stat_manager_btn(obj){
    $(obj).closest('.stat_manager').find('.sm_body').slideToggle(500);
    $(obj).closest('.stat_manager').find('.option_for_save').slideToggle(500);
    $(obj).toggleClass('on');
}

function remainPointCkr(master){
    currentPointNow = 0;
    $('input[name="level_current"]').each(function(){
        currentPointNow += Number($(this).val());
    });
    console.log(currentPointNow);
    if(currentPointNow >= master){
        return false;
    }else{
        return true;
    }
}

function stat_save_open(){
    if(remainPointCkr(74)){
        alert('특성 포인트를 전부 사용해야 합니다(만렙 기준 74 포인트)');
    }else{
        if($('.option_for_save').length > 0){
            $('.option_for_save').addClass('on');
        }
    }
}

function stat_save_submit(obj){
    var stat_info_text = '';
    var stat_divide = [0,0,0];
    
    $('.s_item').each(function(){  
        if($(this).find('input[name="level_current"]').val() > 0){
            stat_info_text += $(this).data('id') + '/' + $(this).find('input[name="level_current"]').val() + ',';
            
            stat_divide[$(this).closest('ul.stat_wrap').data('idx')-1] += Number($(this).find('input[name="level_current"]').val());
        }
    });
    
    var stat_divide_text = stat_divide[0]+','+stat_divide[1]+','+stat_divide[2];
    $(obj).closest('form').find('input[name="stat_division"]').val(stat_divide_text);
    $(obj).closest('form').find('input[name="stat_info"]').val(stat_info_text);
    $(obj).closest('form').submit();
}


function commander_select_func(obj){
    $(obj).closest('form').submit();
}

function c_set_open(obj){
    $('.csl_body').removeClass('on');
    $(obj).find('.csl_body').addClass('on');
}

function stat_recommend_proc(obj,ssid){
    $.ajax({ 
        type: "POST", 
        url : "./proc/stat_recommend_proc.php", 
        dataType : "json",
        data: {
            ss_id : ssid
        }, 
        success : function(ajax_result) { 
            console.log(ajax_result);
            alert(ajax_result.msg);
        }, 
        error: function(error) { 
            console.log('에러 :'+error); 
        } 
    });
}
//            beforeSend: function(){ 
//                $('.loading').addClass('load_on'); 
//            },
//            complete: function(){ 
//                $('.loading').removeClass('load_on');
//            }, 