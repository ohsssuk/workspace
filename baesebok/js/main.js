$(function(){
    var mainSwiper = new Swiper('.main_img', {
        navigation: {
            nextEl: '.main_img .swiper-button-next',
            prevEl: '.main_img .swiper-button-prev',
        },
        slidesPerView : 1,
        autoplay: {
            delay: 5000,
        },
        on: {
            slideChange: function(){
                $('.main_img .swiper-pagination span:first-of-type').html(this.activeIndex + 1);
            }
        }
    });
    
    var swiper1 = new Swiper('.swiper_container_1', {
        navigation: {
            nextEl: '.swiper_container_1 .swiper-button-next',
            prevEl: '.swiper_container_1 .swiper-button-prev',
        },
        slidesPerView : 1,
        on: {
            init: function(){
                $('.content_section_menu_1 > li').on('click', function(){
                    swiper1.slideTo($(this).index(), 500);
                });
            },
            slideChange : function(){
                var activeEl = $('.content_section_menu_1 > li').eq(this.activeIndex);
                
                $('.content_section_menu_1 > li').removeClass('on');
                activeEl.addClass('on');
                
                $('.content_section.orthodontic .txt_box .title').html(activeEl.data('title'));
                $('.content_section.orthodontic .txt_box .description').html(activeEl.data('description'));
            }
        }
    });
    
    var swiper2 = new Swiper('.swiper_container_2', {
        slidesPerView : 1,
        on: {
            init: function(){
                $('.content_section_menu_2 > li').on('click', function(){
                    swiper2.slideTo($(this).index(), 500);
                });
                
                $('.content_section.whitening .swiper-button-prev').on('click', function(){
                    swiper2.slidePrev(500);
                });
                
                $('.content_section.whitening .swiper-button-next').on('click', function(){
                    swiper2.slideNext(500);
                });
            },
            slideChange : function(){
                var activeEl = $('.content_section_menu_2 > li').eq(this.activeIndex);
                
                $('.content_section_menu_2 > li').removeClass('on');
                activeEl.addClass('on');
                
                $('.content_section.whitening .txt_box .title').html(activeEl.data('title'));
                $('.content_section.whitening .txt_box .description').html(activeEl.data('description'));
                
                $('.content_section.whitening .swiper-pagination span:first-of-type').html(this.activeIndex + 1);
            }
        }
    });
    
    $('.qna_head').on('click', function(){
        $(this).closest('li').toggleClass('on');
    });
    
    $('.gnb li a').on('click', function(){
        var scTop = $('.content_section.'+$(this).data('target')).offset().top;
        $('html,body').animate({
            scrollTop : scTop - 71
        }, 500);
    });
    
    $('.introduce_box > .box').hover(function(){
        var idx = ($(this).index() + 1);
        $('.introduce_big_box').css({
            'background-image' : 'url("./images/imageV2/3/'+idx+'_big.png")',
        });
    });
    
    $(window).scroll(function(){
        var scTop = $(window).scrollTop();
        
        if($('.gnb_wrap').offset().top < scTop){
            $('.gnb').addClass('fix');
        }else{
            $('.gnb').removeClass('fix');
        }
        
        $('.content_section').each(function(index){
            if($(this).offset().top <= scTop + 100){
                $('.gnb li a').removeClass('on');
                $('.gnb li').eq(index).find('a').addClass('on');
            }
        });
    });
    
    const feed = new Instafeed({
        accessToken: 'IGQVJYQ29rTU1LYUVhT240NDhkM3VhZAE9veFpqellnRHpzX3I4VVZAvN2hQQVRnd2JSWDdTZAVZASLW84eHc4dmo1dXVuc0ZAxQWVleHJkRjRWQlVKX1hNMFZAfdzZACOXlTWXliSEppcDJXaFNHbWg2eUp1QgZDZD',
        target:'gallery',
        limit: 8,
        template: 
            '<li class="gallery_item">'+
            '   <a target="_blank" href="{{link}}">'+
            '       <img title="{{caption}}" src="{{image}}" alt="{{caption}}" />'+
            '   </a>'+
            '</li>'
    });
    feed.run();
});