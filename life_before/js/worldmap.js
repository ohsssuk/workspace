var jawon_level = [
    [ //1
        ['나뭇가지','나무넝쿨',],
        ['철광석','부싯돌'],
        ['식물 뿌리'],
        ['뼈','야수의 가죽'],
        ['작은 묘목|'],
    ],
    [ //2
        ['수지','목심'],
        ['주석광','유황'],
        ['마줄기','마줄기 껍질'],
        ['갈퀴','야수의 힘줄'],
        ['참나무 묘목|'],
    ],
    [ //3
        ['늙은 편백나무','편백나뭇잎','갈라진 속껍질'],
        ['알루미늄 광석','남정석','공작석'],
        ['린넨잎','린넨꽃잎','홍마잎'],
        ['지방','야수의 뿔','튼튼한 가죽'],
        ['은행나무 묘목|'],
    ],
    [ //4
        ['회양목','넓은잎'],
        ['구리광','실리콘 광석'],
        ['황마잎','황마줄기'],
        ['야수의 이빨','야수의 털'],
    ],
    [ //5
        ['늙은 오크나무','박달나무 뿌리',],
        ['은광','농홍은광',],
        ['사이잘삼 잎','끈말잎','홍마껍질'],
        ['야수의 피','튼튼한 꼬리','진주'],
    ],
    [ //6
        ['삼나무','녹나무심','삼나무 잎'],
        ['금광','희토 광석','수은'],
        ['모시잎','모시껍질','홉'],
        ['야수의 발','야수의 등뼈'],
    ],
    [ //7
        ['비술나무 잎','비술나무 껍질'],
        ['카마사이트','황철광석'],
        ['개정향풀','백마줄기'],
        ['야수의 꼬리','비늘'],
    ],
    [ //8
        ['녹나무','녹나무 잎','초목회'],
        ['화산암','반동석','화산재'],
        ['승마','승마 줄기'],
        ['등지느러미','야수의 뿔2'],
    ],
    [ //9
        ['자작나무','자작나무껍질',],
        ['인','인회석',],
        ['쐐기풀 잎','쐐기풀 줄기',],
        ['뼈가시','촉수',],
    ],
];

$(function(){
    if($('.rs_level_box').length > 0){
        $('.rs_level_box').each(function(){
            var r_level = $(this).data('level');

            var box_html = '';
            jawon_level[(r_level - 1)].forEach(function(list,idx){
                list.forEach(function(item){
                    if(idx != 4){
                        jawon[idx]['data'].forEach(function(jawon){
                            if(item == jawon[0]){
                                box_html += '<div class="rcs_toy">';
                                box_html += '   <img src="'+jawon[1]+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" />';
                                box_html += '   <span>'+jawon[0]+'</span>';
                                box_html += '</div>';
                            }
                        });
                    }else{
                        var spe_rcs = item.split('|');
                        
                        box_html += '<div class="rcs_toy">';
                        box_html += '   <img src="'+spe_rcs[1]+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" />';
                        box_html += '   <span>'+spe_rcs[0]+'</span>';
                        box_html += '</div>';
                    }
                });
            });
            $(this).html(box_html);
        });
    }
    
    if($('.wr_map_level_box').length > 0){
        var r_level = $('.wr_map_level_box').data('level');

        var box_html = '';
        jawon_level[(r_level - 1)].forEach(function(list,idx){
            list.forEach(function(item){
                console.log(item);
                jawon[idx]['data'].forEach(function(jawon){
                    if(item == jawon[0]){
                        box_html += '<div class="rcs_toy">';
                        box_html += '   <img src="'+jawon[1]+'" />';
                        box_html += '   <span>'+jawon[0]+'</span>';
                        box_html += '</div>';
                    }
                });
            });
        });
        $('.wr_map_level_box').html(box_html);
    }
    
    $(window).scroll(function(){
        if($('.quick_map_box_wrap').length > 0){
            if($('.quick_map_box_wrap').offset().top - 60 < $(window).scrollTop()){
                $('.quick_map_box_wrap').addClass('on');
            }else{
                $('.quick_map_box_wrap').removeClass('on');
            }
        }
    });
});

function selectSeeMapPointDes(el){
    $(el).toggleClass('on');
    $('.writer_info').toggleClass('on');
}