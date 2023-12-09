<!DOCTYPE html>
<html lang="ko">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/header.php'; ?>
<script src="js/commander.js?ver=1"></script>
<div class="main">
    <h1>특성 연구소</h1>
    <h2>효율적인 특성 선택과 특성 효과 한번에 보기</h2>
    <ul class="commander_gnb">
        <li class="on">
            <a href="./commander.php">특성 만들기</a>
        </li>
        <li>
            <a href="./commander_set.php">특성 목록</a>
        </li>
    </ul>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 디스플레이_수평 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4126261814359480"
         data-ad-slot="5536762597"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    
    <?php
    
    $conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
    $db = mysql_select_db("lifebefore1", $conn);  //db 선택

    if(isset($_POST['commander_select']) && !empty($_POST['commander_select'])){
        $icommanderIdSel = $_POST['commander_select'];
    }else{
        $icommanderIdSel = '';
    }
    
    if(isset($_POST['ss_commander']) && !empty($_POST['ss_commander'])){
        $icommanderIdSel = $_POST['ss_commander'];
    }
    ?>
    
    <script type=text/javascript>
        $(function(){
            var sSourceInfoData = <?= json_encode($_POST['ss_info']) ?>;
            
            var aSourceInfoArr = sSourceInfoData.split(',');
            
            console.log(aSourceInfoArr);
            aSourceInfoArr.forEach(function(item){
                var aSourceInfoArrItem = item.split('/');
                
                var sSourceTarget = '#s_'+aSourceInfoArrItem[0];
                
                $(sSourceTarget).find('.s_level span').html(aSourceInfoArrItem[1]);
                $(sSourceTarget).find('input[name="level_current"]').val(aSourceInfoArrItem[1]);
                $(sSourceTarget).find('.s_level_state_ing').css({
                    width:(aSourceInfoArrItem[1])/$(sSourceTarget).data('max')*100 + '%'
                });
                
                if($(sSourceTarget).find('input[name="level_current"]').val() == $(sSourceTarget).data('max')){
                    $(sSourceTarget).addClass('master');
                }
                $(sSourceTarget).removeClass('disabled');
                $(sSourceTarget).addClass('abled');
                $(sSourceTarget).attr('onclick','skillUp(this)');
            });
            
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
            
            if($('.now_using_point').length > 0){
                currentPointNow = 0;
                $('input[name="level_current"]').each(function(){
                    currentPointNow += Number($(this).val());
                });
                $('.now_using_point').html(currentPointNow);
            }
        });
    </script>
    
    <div class="loading">
        <div class="loader">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
    </div>
    <div class="info_helper">
        <div class="info_helper_title"><strong>안내 사항(처음 이용하시면 꼭 읽어주세요)</strong></div>
        <p><strong>사령관을 선택</strong>해주세요.</p>
        <p>특성 제목 우측의 X를 클릭하여 해당 탭을 접거나 펼 수 있습니다.</p>
        <p><strong>활성화된 특성</strong>은 클릭하면 <strong>특성 레벨이 증가</strong>하고, <strong>비활성화된 특성</strong>은 <strong>필요한 상위 특성을 보여줍니다.</strong></p>
        <p><strong>(팁)최종 특성을 반드시 찍고자 하시면 특성을 선택하기 전에 최종 특성을 클릭하여 빨간 테두리 특성들을 찍어주세요.</strong></p>
        <p><strong>최대 레벨인 특성</strong>을 클릭하면 <strong>0레벨</strong>로 돌아갑니다.</p>
        <p><strong>74포인트(6성 기준 최대 포인트)</strong>를 모두 사용했거나 도중에 결과 값이 보고 싶다면, 화면 하단의 MENU에서 <strong>결과 보기</strong> 버튼을 클릭해주세요.</p>
        <p>사령관 별 등급에 비례하는 특성들은 모두 <strong>6성</strong>으로 가정합니다.</p>
        <p>스킬 특성의 잠재력<strong>[추가 스킬 피해]</strong>와 <strong>[스킬 피해]</strong>의 차이 불명. 따라서 그냥 스킬 피해로 취급합니다.</p>
        <p>가급적 pc 화면으로 보시길 추천드립니다.</p>
    </div>
    <form name="commander_stat" action="./commander.php" method="post">
        <div class="sel_box">
            사령관 선택
            <select name="commander_select" id="commander_select" onchange="commander_select_func(this)">
                <option value="">선택</option>
                <?php foreach($aCommanderStat as $id => $name) : ?>
                    <option value="<?= $id ?>" <?= $icommanderIdSel == $id ? 'selected' : '' ?>><?= $name[0] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </form>
    <?php if(!empty($icommanderIdSel)) : ?>
    <div class="commander_stat">
    <?php
    
    $statWrapNum = 0;
    foreach($aCommanderStat[$icommanderIdSel][1] as $cStat){
        $skSql_rows = 1; //초기화
        $aPrevSkills = array(0); //초기화
        $statWrapNum++;
        
        echo '<ul class="stat_wrap" data-idx="'.$statWrapNum.'">';
        echo '<li class="stat_wrap_title">'.$aCommanderStatTitle[$cStat].' 특성 <i onclick="stat_close(this)" class="fas fa-plus"></i></li>';
        
        while($skSql_rows > 0){
            
            $in_list = empty($aPrevSkills)?'(0)':'('.join(',',$aPrevSkills).')';
            $skSql = 
                ' SELECT * FROM skill 
                  WHERE skill_category = '.$cStat.' 
                  AND skill_id NOT IN '.$in_list.'
                  AND prev_skill_1 IN '.$in_list.'
                  AND (prev_skill_2 IN '.$in_list.' OR prev_skill_2 = 0)
                  AND (prev_skill_3 IN '.$in_list.' OR prev_skill_3 = 0)';

            $skSql_result = mysql_query($skSql, $conn);
            $skSql_rows = mysql_num_rows($skSql_result);
            
            if($skSql_rows > 0){
                echo '<li class="stat_wrap_li">';
            }else{
                break;
            }

            while($row = mysql_fetch_array($skSql_result)){
                
                echo '<div id="s_'.$row['skill_id'].'" class="s_item '.($row['prev_skill_1']!=0 ? 'disabled' : 'abled').'" data-max="'.$row['skill_master'].'" data-id="'.$row['skill_id'].'" onclick="skillUp(this)">';
                echo '  <div class="s_head">';
                echo '      <div class="s_title">'.$row['skill_name'];
                echo '          <div class="s_level"><span>0</span> / '.$row['skill_master'].'</div>';
                echo '      </div>';
                echo '  </div>';
                echo '  <div class="s_body">';
                echo '      <div class="s_kind">'.$row['skill_kind'].'</div>';
                echo '      <div class="s_amount">'.number_format_1($row['skill_amount']).'</div>';
                echo '  </div>';
                echo '  <input type="hidden" name="level_current" value="0">';
                echo '  <div class="s_level_state"><div class="s_level_state_ing"></div></div>';
                echo '';
                echo '</div>';
                
                array_push($aPrevSkills,$row['skill_id']);  
            }
            echo '</li>';
        }
        
        echo '</ul>';
    }
        
    ?>
    </div>
    <div class="stat_manager">
        <div class="sm_head">
            MENU
            <div class="btn" onclick="stat_manager_btn(this)"><span>+</span></div>
        </div>
        <div class="sm_body">
            <ul class="sm_icon">
                <li onclick="stat_result_cal()">
                    <i class="fas fa-calculator"></i>
                    <p>결과 보기</p>
                </li>
                <li onclick="stat_save_open()">
                    <i class="fas fa-edit"></i>
                    <p>특성 저장</p>
                </li>
                <li onclick="alert('죄송합니다. 준비중인 기능입니다.')">
                    <i class="fas fa-coins"></i>
                    <p>투자 효율</p>
                </li>
            </ul>
            <div class="using_point_manager">
                사용 포인트 <span class="now_using_point">0</span>
            </div>
        </div>
        <div class="option_for_save">
            <form action="./proc/stat_save_proc.php" method="post">
                <div class="input_col">
                    <label for="stat_name">작성자</label>
                    <input type="text" id="stat_name" name="stat_name" placeholder="작성자">
                    <p class="input_helper">
                        원하는 방식으로 작성자 입력(예:#xxxx서버 ooo연맹 대장군철수)
                    </p>
                </div>
                <div class="input_col">
                    <label for="stat_title">특성 제목</label>
                    <input type="text" id="stat_title" name="stat_title" placeholder="특성 제목">
                    <p class="input_helper">
                        제목 입력(예:김철수의 리차드 보병 특성)
                    </p>
                </div>
                <div class="input_col">
                    <label for="stat_memo">메모</label>
                    <textarea name="stat_memo" id="stat_memo" placeholder="내용"></textarea>
                    <p class="input_helper">
                        해당 특성의 장단점 설명이나 유용한 정보등 입력(예:기마병 공격력 극대화 특성입니다.)
                    </p>
                </div>
                <div class="input_col">
                    <button type="button" onclick="stat_save_submit(this)">저장</button>
                </div>
                <input type="hidden" name="stat_division" value="">
                <input type="hidden" name="stat_info" value="">
                <input type="hidden" name="stat_commander" value="<?=$icommanderIdSel ?>">
            </form>
        </div>
    </div>
    <div class="sm_wraper">
        <p>결과</p>
        <ul class="sm_list">
            <!-- 입력창 -->
        </ul>
    </div>
    <?php endif; ?>
    <div class="thanks_info">
        <p>아이디어를 제공해 주신</p>
        <p class="byline"><strong>#1518</strong>서버 <strong>#KAL</strong>연맹 <strong>애플애플</strong>님께 감사드립니다.</p>
        <p class="byline"><strong>#1518</strong>서버 <strong>#KAL</strong>연맹 <strong>kyujang</strong>님께 감사드립니다.</p>
    </div>
    <div class="info_helper">
        <br />
        <div class="info_helper_title"><strong>현재 사용 가능한 기능</strong></div>
        <p>사령관별 특성 찍어 보기</p>
        <p>선택한 특성들의 총 버프 결과 보기</p>
        <br /><br />
        <div class="info_helper_title"><strong>향후 개발 예정인 기능</strong></div>
        <p>조합한 특성 세트 저장 기능</p>
        <p>사이트의 유저들이 동일 사령관에서 많이 선택한 특성 추천</p>
        <p>동일 사령관별 특성 세트 결과치로 효율 비교</p>
        <p>저장된 특성 세트 추천/반대 기능, 추천 많이 받은 특성 세트 랭킹</p>
    </div>
    
    <?php include 'include/footer.php'; ?>
</div>
</body>
</html>
<?php
function number_format_1($num){
    if($num == (int)$num){
        return number_format($num);
    }else{
        return number_format($num, 1);
    }
}
?>