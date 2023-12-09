<!DOCTYPE html>
<html lang="ko">
<?php include './include/head.php'; ?>
<?php
    include './include/data.php';

    $workData = $projectData[(string)$_GET['id']];
?>
<body>
<style>
    header ul.gnb{
        display: none;
    }
    .work_back{
        position: fixed;
        top: 70px;
        left: 20px;
        background: url('./images/left-a.png') no-repeat 0 center/10px;
        padding-left: 20px;
        z-index: 11;
        text-decoration: none;
        color: #000;
        font-size: 18px;
        font-weight: 700;
        line-height: 16px;
    }
</style>
<?php include './include/header.php'; ?>
<a class="work_back" href="./index.php">Back</a>
<main>
    <section class="work_layout m_t_40">
        <div class="kind_wrap"><?=$workData['kind'] ?></div>
        <div class="title_wrap">
            <h1><?=$workData['title'] ?></h1>
            <p><?=$workData['service'] ?></p>
        </div>
        <div class="etc_wrap">
            <a target="_blank" class="site_link" href="<?=$workData['link'] ?>">사이트 이동</a>
            <div class="stack m_t_0">
                <?php if(!empty($workData['stack'])) : ?>
                    <?php foreach($workData['stack'] as $sticker) : ?>
                        <span class="sticker <?=$sticker['tag'] ?>"><?=$sticker['text'] ?></span>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="work_layout">
        <div class="detail_wrap">
            <div class="detail_head">상세내용</div>
            <?php if(!empty($workData['workImage'])) : ?>
                <ul class="detail_photo">
                    <?php foreach($workData['workImage'] as $image) : ?>
                        <li onclick="workSwiper.open(this);"><img src="<?=$image ?>"></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php @include './work/'.$workData['id'].'.php'; ?>
        </div>
    </section>
    <?php if(!empty($workData['workTask'])) : ?>
    <section class="work_layout">
        <div class="detail_wrap">
            <div class="detail_head">TASK</div>
            <ul class="detail_task">
                <?php foreach($workData['workTask'] as $task) : ?>
                    <li><?=$task ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <?php endif; ?>
</main>

<div class="swiper-container-wrap">
    <div class="dimmed" onclick="workSwiper.close()"></div>
    <div class="inner">
        <button class="close_btn popup_close_btn" onclick="workSwiper.close()" type="button">X</button>
        
        <div id="work_image_swiper">
            <div class="swiper-wrapper">
               <?php if(!empty($workData['workImage'])) : ?>
                    <?php foreach($workData['workImage'] as $image) : ?>
                    <div class="swiper-slide">
                        <div class="img-wrap">
                            <img class="" src="<?=$image ?>">
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>   
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
        <div class="swiper-scrollbar"></div>
    </div>
</div>

<script>
    $(function(){
        workSwiper.init();
    });
    
    var workSwiper = {
        swiper: null,
        init: function(){
            workSwiper.swiper = new Swiper('#work_image_swiper', {
                speed: 400,
                slidesPerView: 1,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                },
                threshold: 10,
            });
        },
        open: function(el){
            workSwiper.swiper.slideTo($(el).index(), 0);
            $('.swiper-container-wrap').addClass('on');
        },
        close: function(el){
            $('.swiper-container-wrap').removeClass('on');
        }
    };
</script>

</body>
</html>