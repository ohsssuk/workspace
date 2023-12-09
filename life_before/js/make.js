$(document).ready(function(){
    var nameList = [];
    jawon.forEach(function(category){
        category.data.forEach(function(item){
            nameList.push(item[0]);
        });
    });
    
    $('.detailbox').each(function(){
        var list = $(this).siblings('input[type="hidden"]').val();
        var listMaker = list.split(',');
        for(var i = 0; i < listMaker.length; i++){
            $(this).append('<div class="box_lec"><div>'+nameList[i] + '</div><div>' + listMaker[i]+'</div></div>');
        }
    });
    
    $('.set_list>li.set_detail').on('click',function(){
        $('.set_list>li').removeClass('selected');
        $('.detailbox,.detailbox_btn,.detailbox_btn_user').css({display:'none'});
        $(this).addClass('selected');
        $(this).children('.detailbox').css({display:'block'});
        $(this).children('.detailbox_btn').css({display:'inline-block'});
        $(this).children('.detailbox_btn_user').css({display:'inline-block'});
        
        gtag('event', '서버별 단가 목록 클릭');
    });
    
    $('.detailbox_btn_cal').on('click',function(){
        var list = $(this).siblings('input[type="hidden"]').val();
        $('input[name="target_list"]').val(list);
        $('form[name="go_frm"]').submit();
//        location.href = 'cal.php?'+ list;
    });
    $('.detailbox_btn_ex').on('click',function(){
        var list = $(this).siblings('input[type="hidden"]').val();
        location.href = 'exchange.html?'+ list;
    });
    $('.detailbox_btn_user').on('click',function(){
        var list = $(this).siblings('input[type="hidden"]').val();
        location.href = 'userset.html?'+ list;
    });
    
    $('.weapon_cal_btn').on('click',function(){
        $('.weapon_cal_final').css({display:'block'});
        $('html,body').animate({scrollTop:$('.weapon_cal_final').offset().top-80},500);
        
        var dataArr = [];
        var allDam = 0;
        var gamDam = 0;
        
        $('.wcb_in').each(function(){
            dataArr.push(Number($(this).val()));
        });
        
        allDam  = (dataArr[0] - dataArr[2]) * dataArr[1];
        allDam *= (dataArr[5]/100) + 1;
        allDam *= (dataArr[6]/100) + 1;
        allDam *= 1-(dataArr[3]/100);
        allDam *= 1-(dataArr[4]/100);
        
        gamDam  = allDam * ((dataArr[7]/100) + 1);
        
        $('.humanity span').html(allDam.toFixed(2));
        $('.gamty span').html(gamDam.toFixed(2));
    });
    
    localStorage.localWeaponList = Array();
    var sectionNameLocalWeapon = ["무기 공격력","무기 화력","피해 증가(%)","원거리 피해 증가(%)","감염자 피해 증가(%)"];
    $('.weapon_set_save').on('click',function(){
        var dataArr = [];
        $('.wcb_in').each(function(){
            dataArr.push(Number($(this).val()));
        });
        if($('.memo').val()=="" || $('.memo').val()==null){
            $('.memo').val("메모 없음")
        }
        var weaponDataArr = $('.memo').val() + "/" + dataArr[0]+"/"+dataArr[1]+"/"+dataArr[5]+"/"+dataArr[6]+"/"+dataArr[7];
        localStorage.localWeaponList += weaponDataArr+",";
        var arr = localStorage.localWeaponList.split(",");
        
        $('.local_saved_weapon_list').html("");
        for(var i=0;i<arr.length-1;i++){
            var q = arr[i].split("/");
            $('.local_saved_weapon_list').append("<li></li>");
            $('.local_saved_weapon_list li:nth-child('+(i+1)+')').html("<h5>"+q[0]+"</h5>");
            for(var f=0;f<sectionNameLocalWeapon.length;f++){
                $('.local_saved_weapon_list li:nth-child('+(i+1)+')').append("<div class='local_weapon_soc'>"+sectionNameLocalWeapon[f]+" : <span>"+q[f+1]+"</span></div>");
            }
        }
    });
    $('.bigo_btn').on('click',function(){
        $('html,body').animate({scrollTop:$('.bigo_final').offset().top-80},500);
        var arr0 = new Array;
        $(".local_enemy").each(function(){
            arr0.push(Number($(this).val()));
        });
        var arr1 = localStorage.localWeaponList.split(",");
        
        var allDam = 0;
        var gamDam = 0;
        $('.bigo_final').html('');
        for(var i=0;i<arr1.length-1;i++){
            var arr2 = arr1[i].split("/");
            
            allDam  = (arr2[1] * arr2[2]) - arr0[0];
            allDam *= 1-(arr0[1]/100);
            allDam *= 1-(arr0[2]/100);
            allDam *= (arr2[3]/100) + 1;
            allDam *= (arr2[4]/100) + 1;

            gamDam  = (arr2[1] * arr2[2]) - arr0[0];
            gamDam *= 1-(arr0[1]/100);
            gamDam *= (arr2[3]/100) + 1;
            gamDam *= (arr2[4]/100) + 1;
            gamDam *= (arr2[5]/100) + 1;
            
            $('.bigo_final').append("<li></li>");
            $('.bigo_final li:nth-child('+(i+1)+')').html("<h5>"+arr2[0]+"</h5>");
            $('.bigo_final li:nth-child('+(i+1)+')').append("<div class='bigo_result'><p>데미지(유저) : <span>"+allDam.toFixed(2)+"</span></p><p>데미지(감염자) : <span>"+gamDam.toFixed(2)+"</span></p></div>");
        }
    });
});