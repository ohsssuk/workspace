<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141239150-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141239150-1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-4126261814359480",
              enable_page_level_ads: true
         });
    </script>
    
    

    <title>라이프애프터 유틸 - 라이프비포어</title>
    
    <meta charset="utf-8" />
    <meta property="og:site_name" content="라이프비포어" /> 
	<meta property="og:title" content="라이프애프터 유틸 - 라이프비포어" />
    <meta property="og:description" content="라이프애프터 유틸리티 웹사이트" />
    <meta property="og:image" content="http://lifebefore.dothome.co.kr/images/thumb.jpg" /> <!-- 1200X630 -->
	<meta property="og:image:width" content="610" />
	<meta property="og:image:height" content="319" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Fe0-TvLS7mA0Zp6jCMe1_KPtMl8vw2M9p1Jg5SQycoA" />
    
    <link rel="shortcut icon" href="./images/favi.png" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css?ver=<?=rand(0,1000); ?>">
    <link rel="stylesheet" href="./css/lb_cal.css?ver=<?=rand(0,1000); ?>">
    <link rel="stylesheet" href="./css/worldmap.css?ver=<?=rand(0,1000); ?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <script src="js/main.js?ver=<?=rand(0,1000); ?>"></script>
    <script src="js/data.js?ver=<?=rand(0,1000); ?>"></script>
    <script src="js/worldmap.js?ver=<?=rand(0,1000); ?>"></script>

    <style>
        .quick_map_box_wrap{
            min-height:47px;
        }
        .quick_map_box{
            position: relative;
            top:0;
            left:0;
            width:100%;
            color:#555;
            border:1px solid #ccc;
            box-sizing: border-box;
            background: #fff;
            z-index: 3;
        }
        .quick_map_box_wrap.on .quick_map_box{
            position: fixed;
            top:60px;
        }
        .quick_map_box>p{
            font-size:14px;
            padding:4px 10px;
            box-sizing: border-box;
        }
        .quick_map_box>p>span{
            font-size:12px;
            float: right;
        }
        .quick_map_list{
            font-size:0;
            text-align: right;
            width:100%;
            box-sizing: border-box;
            border-top:1px solid #ccc;
        }
        .quick_map_list>li{
            font-size:16px;
            display: inline-block;
            width:10%;
            text-align: center;
            border-left:1px solid #ccc;
            box-sizing: border-box;
            padding:2px 0 4px;
        }
    </style>
    <script>
        function quickMapGo(lv){
            var scTop = $('.tier_box_'+lv).offset().top;
            $('html,body').animate({
                scrollTop : scTop - 117
            },400);
        }
    </script>
</head>
<body>
<?php include './header_inc.php'; ?>
<div class="main">
    <div class="worldmap_wrap">
        <h1>맵 공략</h1>
        <h2>게임내에 표시 되지 않는 맵 정보 공유를 부탁드립니다!</h2>
        <br />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
        <br />
        <?php include './worldmap_data.php'; ?>
        
        <?php if(empty($_GET['map_key'])) : ?>
        <div class="wmap_help_box">
<!--            <div class="wmap_help_box_title"><i class="fas fa-question-circle"></i> 사용방법</div>-->
            <p style="margin-top:0;">
                <span class="whb_1">맵 이름 <i class="fas fa-angle-right"></i></span> 버튼을 클릭해주세요.
            </p>
            <p style="padding-left: 38px">
                <span class="whb_1" style="padding:0; height:24px; display:block; position:absolute; top:0; left:10px;"><img style="height:24px;" src="./images/wm_chest_icon.png"></span>상자 아이콘이 있는 맵은 <strong>고급 아이템 상자(얇은 원단, 고분자 코팅, 배합 조각 등) 위치 표시</strong>가 있는 맵입니다.
            </p>
        </div>   
        <div class="wm_all">
            <div class="quick_map_box_wrap only_mb">
                <div class="quick_map_box">
                    <p>빠른 이동(LV) <span>*아래 숫자 클릭</span></p>
                    <ul class="quick_map_list">
                        <?php for($i=1; $i<=9; $i++) : ?>
                            <li onclick="quickMapGo(<?=$i ?>)">
                                <?=$i ?>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
            <div style="background:rgba(0,0,0,.2); padding:18px;">
                <?php for($i=1; $i<=9; $i++) : ?>
                <div class="tier_box tier_box_<?=$i ?>">
                    <div class="tier tier-<?=$i ?>"><span><?=$i ?>레벨 자원 맵</span></div>
                    <ul class="wm_sel">
                        <?php foreach($aWorldMapData as $key => $map) : ?>
                            <?php if($map['level'] == $i) : ?>
                            <li>
                                <a class="<?=!empty($map['src']) ? '':'not_ready' ?>" href="./worldmap.php?map_key=<?=$key ?>">
                                    <?php if(isset($map['chest'])) : ?>
                                        <img class="wm_point_icon" src="./images/wm_chest_icon.png">
                                    <?php endif; ?>
                                    <?=$map['name'] ?> <?=$map['range'] ?> &nbsp;
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="rs_level_box" data-level="<?=$i ?>"></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
            
        <?php else : ?>
        <?php
        $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
        $db = mysql_select_db("lifebefore1", $conn);  //db 선택
        
        $sMapKey = $_GET['map_key']; //맵 키
        $aMap = $aWorldMapData[$sMapKey]; //맵 데이터
        
        $sql = " SELECT * ";
        $sql.= " FROM map_point ";
        $sql.= " WHERE mp_isuse = 'y' ";
        $sql.= " AND mp_key = '{$sMapKey}' ";
        $sql.= " ORDER BY mp_isofficial DESC,mp_zindex DESC, mp_dt DESC ";
        
        $result_set = mysql_query($sql);
        $result_count = mysql_num_rows($result_set);
        
        ?>
        
        <div class="wm_direct">
            <div class="wmap_help_box">
                <div class="wmap_help_box_title"><i class="fas fa-question-circle"></i> 사용방법</div>
                <p>
                    <strong>포인트 저장</strong> : 맵에서 원하는 위치를 클릭하고 <span class="whb_1">맵 포인트 등록 +</span> 버튼을 클릭하여 포인트를 저장할 수 있습니다.
                </p>
                <p>
                    <strong>포인트 정보 보기</strong> : 맵에서 포인트(예: <span class="img_wrap"><img src="./images/worldmap/map_icon/tamsek.png" style="width:30px;"></span>)를 클릭하면 하단의 정보 목록으로 이동합니다.
                </p>
                <p>
                    <strong>필요한 포인트만 보기</strong> : 하단의 정보 목록에서 체크를 해제하면 맵에 포인트가 표시되지 않습니다.  
                </p>
                <p>
                    <strong>정보 자세히 보기</strong> : 정보 목록에서 <span class="whb_2">+</span> 버튼을 클릭하여 자세히 볼 수 있습니다. 다시 클릭하면 정보창이 다시 생략됩니다.
                </p>
                <p>
                    <strong>[ <i class="far fa-square"></i> 맵포인트 설명 표시 ] 버튼</strong>을 클릭하여 포인트에 대한 설명과 제보자 정보를 표시합니다. 
                </p>
                <p>
                    <b class="whb_3"><i class="far fa-thumbs-up"></i> 추천</b> 표시가 되어 있는 정보는 확인된 <strong>확실한 정보</strong>입니다.
                </p>
                <p>
                    장난식 허위 정보는 예고 없이 삭제될 수 있으며, IP 밴 조치가 될 수 있습니다. 많은 협조 부탁드립니다.
                </p>
            </div>
            <div class="wmap_name"><?=$aMap['name'] ?> <?=$aMap['range'] ?> <span>[point:<?=$result_count ?>]</span></div>
            <?php if(!empty($aMap['src'])) : ?>
            <div class="map_top_btn_wrap">
                <div class="map_top_btn_back" onclick="location.href='./worldmap.php'">
                    <i class="fas fa-chevron-left"></i>
                    돌아가기
                </div>
                <div class="map_top_btn_des" onclick="selectSeeMapPointDes(this)">
                    <i class="far fa-check-square"></i>
                    <i class="far fa-square"></i>
                    맵포인트 설명 표시
                    </div>
            </div>
            <div class="wmap_wrap">
                <div class="wmap">
                    <img src="./images/worldmap/<?=$aMap['src'] ?>" alt="맵 이미지">
                </div>
                <?php if($result_count > 0) : ?>
                    <?php while ($row = mysql_fetch_array($result_set)) : ?>
                        <div class="wmap-dot already wmap-dot-<?=$row['mp_id']?>" style="top:<?=$row['mp_point_y']?>%; left:<?=$row['mp_point_x']?>%; z-index=<?=$row['mp_zindex'] ?>">
                            <?=$row['mp_ic'] ?>
                            <div class="click_area" onclick="findPointMapList(<?=$row['mp_id']?>)"></div>
                            <?php 
                                $sPointSelect = '';
                                if($row['mp_point_x'] > 95){
                                    $sPointSelect = 'right';
                                }else if($row['mp_point_x'] < 5){
                                    $sPointSelect = 'left';
                                }else if($row['mp_point_y'] > 95){
                                    $sPointSelect = 'bottom';
                                }
                            ?>
                            <div class="writer_info <?=$sPointSelect ?>">
                                <div><?=$row['mp_des']?></div>
                                <div><?=$row['mp_wr']?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php mysql_data_seek($result_set,0);  ?>
                <?php endif; ?>
            </div>
            <?php if(!empty($aMap['thanks'])) : ?>
                <div class="map_supply_thanks">
                    공식 카페 <strong><?=$aMap['thanks'] ?></strong>님이 제공해주신 맵 이미지입니다. 자료 제공 감사드립니다
                </div>
            <?php endif; ?>
            <div class="wmap_table">
                <div class="summary_head">
                    목록
                    <div class="of"><input name="mp_ck[]" onchange="checkMapPoint('all',this)" type="checkbox" checked="checked" value="<?=$row['mp_id']?>" /></div>
                </div>
                <?php if($result_count > 0) : ?>
                <?php while ($row = mysql_fetch_array($result_set)) : ?>
                <div class="body body_<?=$row['mp_id']?>" >
                    <div class="ic"><?=$row['mp_ic']?></div>
                    <div class="pt" onclick="showMapPointBodyDetail(this)">
                        <p>
                            <?php if((int)$row['mp_isofficial'] > 0) : ?>
                                <b>
                                    <i class="far fa-thumbs-up"></i> 추천
                                </b>
                            <?php endif; ?>
                            <?=$row['mp_des']?>
                            <?php if(strpos($row['mp_cont'], '<img') !== false) : ?>
                                <i class="fas fa-camera-retro"></i>
                            <?php endif; ?>
                        </p>
                        <span>+</span>
                    </div>
                    <div class="of"><input name="mp_ck[]" onchange="checkMapPoint(<?=$row['mp_id']?>,this)" type="checkbox" checked="checked" value="<?=$row['mp_id']?>" /></div>
                    <div class="des">
                        <div class="mp_cont_in"><?=$row['mp_cont'] ?></div>
                        <div style="font-size:14px; margin-top:10px; color:#777;"><?=$row['mp_pt']?></div>
                    </div>
                    <div class="wr"><?=$row['mp_wr']?><span><?=$row['mp_dt']?></span></div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <div style="font-size:16px; padding:10px; border-bottom:1px solid #ddd;">맵포인트 기록 없음</div>
                <?php endif; ?>
            </div>
            <?php else : ?>
            <h3 class="empty_warning">
                <div class="title">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>맵 이미지가 없습니다.</p>
                </div>
                <div class="des">
                    맵 이미지 등록을 기다려 주세요.
<!--                    <a href="usermake.php"><span>#[서버별 단가] 가기</span></a>-->
                </div>
            </h3>
            <?php endif; ?>
            <!-- 맵 종료 -->
            
            <div class="wtitle_wrap">획득 가능 자원</div>
            <div class="wr_map_level_box" data-level="<?=$aMap['level']?>"></div>
            
            <?php if(!empty($aMap['landmark'])) : ?>
            
            <?php endif; ?>
        </div>
        
        <input type="hidden" name="member" value="<?=$_GET['member'] ?>">
        <?php endif; ?>
        
        <script>
            $(function(){
                
                $(".wmap").click(function(e){
                    var parentOffset = $(this).parent().offset();
                    //or $(this).offset(); if you really just want the current element's offset
                    var relX = ((e.pageX - parentOffset.left) / $(this).innerWidth() * 100).toFixed(2);
                    var relY = ((e.pageY - parentOffset.top) / $(this).innerHeight() * 100).toFixed(2);
                    console.log(relX + ':' +relY);

                    var html = '';
                    html += '<div data-x="'+relX+'" data-y="'+relY+'" class="wmap-dot add" style="top:'+relY+'%; left:'+relX+'%;">';
                    html += '   <div class="a_btn_ws" onclick="confirm_add(this)">맵 포인트 등록 +</div>';
                    html += '</div>';

                    $('.wmap-dot.add').remove();
                    $('.wmap_wrap').append(html);
                });
                
                $(document).on('click','.map_add_icon_box .item',function(){
                    $('.map_add_icon_box .item').removeClass('on');
                    $('.map_add_icon_box .item .ic_des').remove();
                    $('input[name="mp_ic"]').val($(this).html());
                    
                    $(this).addClass('on').append('<div class="ic_des">'+$(this).data('des')+'</div>');
                });
                
            });
            
            var map_add_html = '';
                map_add_html += '<form action="./map_add_proc.php" method="post" onsubmit="return check_map_add()">';
                map_add_html += '   <input type="hidden" name="mp_ic" value="">';
                map_add_html += '   <input type="hidden" name="mp_key" value="<?=$sMapKey ?>">';
                map_add_html += '   <input type="hidden" name="mp_p_x" value="">';
                map_add_html += '   <input type="hidden" name="mp_p_y" value="">';
                map_add_html += '   <div class="map_add_form_wrap">';
                map_add_html += '       <ul>';
                map_add_html += '           <li>';
                map_add_html += '               <label>아이콘 선택</label>';
                
                map_add_html += '               <div class="map_add_icon_box">';
                
                map_add_html += '                   <div class="item" data-des="신비 상자 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/sinbi.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="탐색 상자 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/tamsek.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="랜드마크 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/randmark.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="채집 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/chejip.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="필드 보스 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/boss.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="특수 몹 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/monster.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="위험 표시 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/warning.png" class="ic">';
                map_add_html += '                   </div>';
                map_add_html += '                   <div class="item" data-des="좋은 포인트 전용">';
                map_add_html += '                       <img src="./images/worldmap/map_icon/good.png" class="ic">';
                map_add_html += '                   </div>';
                
                var colorArr = [
                    '3CB371',
                    'BCFA9C',
                    'DBA853',
                    'F268BB',
                    'DBA853',
                    '537DDB',
                    '61FF7A',
                    'FCFA7E',
                    '3A9BDE',
                    'F5524C',
                    'DBDFAF',
                    '429DFF',
                    'FAD470',
                    'DE8A4B',
                    'F5695F',
                    'DD4BDE',
                    'E64431',
                    '575A70',
                    'C5E99B',
                    '8FBC94',
                    '548687',
                    '56445D',
                    '30A9DE',
                    'EFDC05',
                    'E53A40',
                    '090707',
                ];
                
                colorArr.forEach(function(c){
                    map_add_html += '                   <div class="item" data-des="임의 표시">';
                    map_add_html += '                       <span class="color_point" style="background:#'+c+';"></span>';
                    map_add_html += '                   </div>';
                });
                
                map_add_html += '               </div>';
                
                map_add_html += '           </li>';
                map_add_html += '           <li>';
                map_add_html += '               <label for="mp_des">제목</label>';
                map_add_html += '               <input type="text" name="mp_des" id="mp_des" placeholder="예:필드보스 출현">';
                map_add_html += '           </li>';
                map_add_html += '           <li>';
                map_add_html += '               <label for="mp_cont">내용</label>';
                map_add_html += '               <textarea name="mp_cont" id="mp_cont" placeholder="상세 설명을 입력해주세요.\n이미지 등록시 입력 : <img src=&#34;이미지 주소 입력란&#34;>\n업로드 기능은 제공되지 않습니다."></textarea>';
                map_add_html += '           </li>';
                map_add_html += '           <li>';
                map_add_html += '               <label for="mp_wr">작성자</label>';
                map_add_html += '               <input type="text" name="mp_wr" id="mp_wr" placeholder="예:가을빛산림서버 관리자">';
                map_add_html += '           </li>';
                map_add_html += '           <li>';
                map_add_html += '               <label for="mp_pt">좌표</label>';
                map_add_html += '               <input type="text" name="mp_pt" id="mp_pt" placeholder="입력 안해도 등록 가능 / 예:(50626,12262) ">';
                map_add_html += '           </li>';
                map_add_html += '       </ul>';
                map_add_html += '       <div class="map_add_btn_wrap">';
                map_add_html += '           <button type="submit" class="sub">저장</button>';
                map_add_html += '           <button type="button" class="cancel" onclick="lbPop.close(this)">닫기</button>';
                map_add_html += '       </div>';
                map_add_html += '   </div>';
                map_add_html += '</form>';
            
                
            var lbPop = {
                open : function(title,body_html){
                    var pop_html = '';
                    pop_html += '<div class="lb_pop_wrap">';
                    pop_html += '   <div class="lb_pop">';
                    pop_html += '       <div class="lb_pop_head">';
                    pop_html += '           <p>'+title+'</p>';
                    pop_html += '           <i onclick="lbPop.close(this);" class="fas fa-times lb_pop_close_btn"></i>';
                    pop_html += '       </div>';
                    pop_html += '       <div class="lb_pop_body">';
                    pop_html +=             body_html;
                    pop_html += '       </div>';
                    pop_html += '   </div>';
                    pop_html += '</div>';
                    
                    $('body').addClass('pop_fix').append(pop_html);
                    CKEDITOR.replace('mp_cont',{
                        filebrowserUploadUrl:'./image_upload.php'
                    });
                    
                    CKEDITOR.on('dialogDefinition', function (ev) {
                        var dialogName = ev.data.name;
                        var dialog = ev.data.definition.dialog;
                        var dialogDefinition = ev.data.definition;
                        if (dialogName == 'image') {
                            dialog.on('show', function (obj) {
                                this.selectPage('Upload'); //업로드텝으로 시작
                            });
                            dialogDefinition.removeContents('advanced'); // 자세히탭 제거
                            dialogDefinition.removeContents('Link'); // 링크탭 제거
                        }

                    });
                },
                close : function(el){
                    $(el).closest('.lb_pop_wrap').remove();
                    $('body').removeClass('pop_fix')
                },
            };
            
            function confirm_add(el){
                var xp = $(this).data('x');
                var yp = $(this).data('y');
                    
                if(confirm('클릭한 지점에 맵 포인트를 등록할까요?')){
                    lbPop.open('<span><i class="fas fa-map-marker-alt"></i>맵 정보 등록</span>',map_add_html);
                }
            }
            
            function check_map_add(){
                if($('[name="mp_ic"]').val() == ''){
                    alert('아이콘을 클릭하여 선택해주세요.');
                    return false;
                }
                
                if($('[name="mp_des"]').val() == ''){
                    alert('내용을 작성해주세요.');
                    return false;
                }
                
                if($('[name="mp_wr"]').val() == ''){
                    alert('작성자를 입력해주세요.');
                    return false;
                }
                
                $('[name="mp_p_x"]').val($('.wmap-dot.add').data('x'));
                $('[name="mp_p_y"]').val($('.wmap-dot.add').data('y'));
                return true;
            }
            
            function findPointMapList(id){
                var scTop = $('.wmap_table .body_'+id).offset().top - 60;
                
                $('html,body').animate({
                    scrollTop : scTop
                },500);
            }
            
            function checkMapPoint(target,el){
                
                var el_ck = $(el).prop('checked');
                
                if(target == 'all'){
                    $('[name="mp_ck[]"]').prop('checked',el_ck);
                    
                    if(el_ck){
                        $('.wmap_table .body').removeClass('off');
                        $('.wmap-dot.already').removeClass('off');
                    }else{
                        $('.wmap_table .body').addClass('off');
                        $('.wmap-dot.already').addClass('off');
                    }
                }else{
                    if(el_ck){
                        $('.wmap_table .body_'+target).removeClass('off');
                        $('.wmap-dot-'+target).removeClass('off')
                    }else{
                        $('.wmap_table .body_'+target).addClass('off');
                        $('.wmap-dot-'+target).addClass('off')
                    }
                }
            }
            
            function showMapPointBodyDetail(el){
                $(el).closest('.wmap_table .body').toggleClass('detail');
            }
        </script>
        
        <br /><br />
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
        
        <!-- 댓글창 시작 -->
        <h6 class="rp_title">LIFEREPLY</h6>
        <div class="rp_help">
            전체 댓글 목록입니다. 건의사항, 하고 싶은 말, 잡담 등을 작성해주세요. 라이프애프터 관련이라면 광고도 허용합니다.
        </div>
        <script>
            function rp_check(){
                if(rp_fr.rt_writer.value == "" || rp_fr.rt_pwd.value == "" || rp_fr.rt_text.value == "") {
                    alert("빈칸을 모두 입력해야 합니다");
                    return false;
                }
            }
        </script>
        <form action="./reply_proc.php?wtype=wr" method="post" name="rp_fr" onsubmit="return rp_check()">
        <div class="rp_write">
            <input type="text" placeholder="작성자" name="rt_writer">
            <input type="text" placeholder="비밀번호" name="rt_pwd">
            <textarea name="rt_text" id="" placeholder="내용을 입력해주세요" name="rt_text"></textarea>
            <input type="submit" class="reply_btn" value="등록">
        </div>
        </form>
        <?php include "./reply.php"; ?>
        <!-- 댓글창 종료 -->
        
        <footer>
            <div class="inner_footer">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>