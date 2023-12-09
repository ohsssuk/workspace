$(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 0){
            $('header').addClass('on');
        }else{
            $('header').removeClass('on');
        }
    });
});

var gnb = {
    click : function(target){
        $('html, body').animate({
           scrollTop: $(target).offset().top - $('header').height() - 30
        }, 500);
    },
};

var popupManage = {
    openPopup: function(el, pid, generateHtml){
        var html = '';
        html += '<div id="'+pid+'" class="popup_wrap">';
        html += '   <div class="dimmed" onclick="popupManage.closePopup(this, \''+pid+'\')"></div>';
        html += '   <div class="popup">';
        html += '       <button class="close_btn popup_close_btn" onclick="popupManage.closePopup(this, \''+pid+'\')" type="button">X</button>';
        html += '       <div class="popup_content">';
        html +=             generateHtml;
        html += '       </div>';
        html += '   </div>';
        html += '</div>';
        
        $('body').append(html);
    },
    closePopup: function(el, pid){
        $('#'+pid).remove();
    },
    openimageDetailPopup: function(el){
        var pid = "wimag2022"
        var html = popupManage.generateImageDeatailHtml(el, pid);
        
        popupManage.openPopup(el, pid, html);
    },
    generateImageDeatailHtml : function(el, pid){
        var src = $(el).find('img').eq(0).attr('src');

        var html = '';
        html += '<img class="work_photo_image" src="'+src+'">';

        return html;
    },
};