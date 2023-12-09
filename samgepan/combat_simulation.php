<?php include './include/head.php'; ?>
<body>
    <?php include './include/header.php'; ?>
    
    <script type="text/javascript" src="./js/simulation.js?ver=v3"></script>
    <script type="text/javascript" src="./js/util.js?ver=v3"></script>
    <script>
        if(window.location.href.indexOf('http://lifebefore1.dothome.co.kr/samgepan/combat_simulation.php') !== -1){
           location.replace('http://www.lifebefore.co.kr/samgepan/combat_simulation.php');
        }
    </script>
    <style>
        .main{
            padding-left: 5px;
            padding-right: 5px;
            box-sizing: border-box;
        }
        h3{
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>
    
    <div class="main">
        <h1 class="site_title">
            삼국지 계산판<img src="./images/samgepan_main.png" alt="삼국지 계산판">
        </h1>
        <h2>모의 전투 계산</h2>
        
        <div class="help_word">
            <div>사용 공식</div>
            <p><strong>최종 피해(데미지)</strong> = (병력 기본 피해 + 속성 차이 기본 피해) x 스킬 배율(일반 공격은 1) x (1 + 각 유형의 피해 증가) x (1 - 각 유형의 피해 감소) x (랜덤값 1 ~ 1.15) x (랜덤값 0.85 ~ 1)</p>
            <p><strong>병력 기본 피해</strong>  = √병력 x 5</p>
            <p><strong>병종 상성 피해 증가/감소</strong> = 15%(추정) : 각 유형의 피해 증가,감소 값에 더해집니다</p>
            <p>
                <strong>속성 증가 공식</strong> = 장수 기본 속성 x (병종 적성(%)  + 진영 보너스(%)) + 각종 보너스<br>
            </p>
            <br>
            <p>
                계산공식 출처 원본 : 대만 포럼
                <a target="_blank" style="color:#444; font-size:12px;" href="https://forum.gamer.com.tw/Co.php?bsn=36815&sn=8417">
                    원본 링크
                </a>
            </p>
            <p>
                참고 : 삼국지 전략판 갤러리. 작성자 <strong>캐나다라파엘</strong>님 감사합니다.
                <a target="_blank" style="color:#444; font-size:12px;" href="https://gall.dcinside.com/mgallery/board/view/?id=3kingdoms&no=67197&search_pos=-68711&s_type=search_subject_memo&s_keyword=.EA.B3.84.EC.82.B0.20.EA.B3.B5.EC.8B.9D&page=1">
                    원본 링크
                </a>
            </p>
            <div class="made_by">
                Made by. 계산판
            </div>
        </div>
        
        <br>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4126261814359480"
     crossorigin="anonymous"></script>
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
        
        <div class="warning">
            <div class="title">
                <i class="fas fa-exclamation-circle"></i>
                <p>처음 이용시 반드시 도움말을 먼저 정독 부탁드립니다.</p>
            </div>
            <div class="des">
                <a href="./simulation_help.php">[도움말 보기]</a>
            </div>
        </div>
        
<?php
    $statParam = array(
        'mu' => array(
            'name' => '무력'
        ),
        'ji' => array(
            'name' => '지력'
        ),
        'tong' => array(
            'name' => '통솔'
        ),
        'sok' => array(
            'name' => '속도'
        ),
    );
        
    $aptitudeParam = array(
        'S' => 120,
        'A' => 100,
        'B' => 85,
        'C' => 70,
    );
?>
        
        <div class="input_section">
            <?php for($i = 0; $i < 2; $i++) : ?>
            <div class="team_part <?=($i==0) ? 'ally' : 'enemy' ?>">
                <div class="team_tag">
                    <?=($i==0) ? '아군' : '적군' ?>
                </div>
                
                <div class="commander_part_wrap">
                <?php for($j = 0; $j < 3; $j++) : ?>
                    <div class="commander_part">
                        <div class="number_part">
                            <?php if($j == 0) : ?>
                                <span class="tag tag_1">주장</span>
                            <?php else : ?>
                                <span class="tag tag_2">부장</span>
                            <?php endif; ?>
                        </div>
                        <div class="part_title">이름</div>
                        <input class="w-lg" type="text" name="name[]" 
                        value="<?=(($i==0) ? '아군' : '적군').' '.($j+1).'번' ?>">

                        <div class="part_title">병력</div>
                        <input class="w-lg" type="number" name="troops[]" value="10000">

                        <div class="part_title">속성</div>
                        <ul class="stat_part">
                            <?php foreach($statParam as $key => $value) : ?>
                                <li class="<?=$key ?> box">
                                    <label for="tong"><?=$value['name'] ?></label>
                                    <input class="w-md" type="number" name="<?=$key ?>[]" placeholder="0" value="100">
                                    <span class="stat_bonus">+</span>
                                    <input class="w-md" type="number" name="<?=$key ?>_bonus[]" placeholder="0" value="0">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <div class="damage_part">
                            <div class="box">
                                <div class="part_title">피해 증감</div>
                                
                                <div class="damage_rate_part">
                                    <label for="">주는 무기피해 증가(%)</label>
                                    <input type="number" name="give_weapon_damage_rate[]" placeholder="0" value="0">
                                </div>
                                <div class="damage_rate_part">
                                    <label for="">주는 책략피해 증가(%)</label>
                                    <input type="number" name="give_trick_damage_rate[]" placeholder="0" value="0">
                                </div>
                                <div class="damage_rate_part">
                                    <label for="">받는 무기피해 감소(%)</label>
                                    <input type="number" name="receive_weapon_damage_rate[]" placeholder="0" value="0">
                                </div>
                                
                                <div class="damage_rate_part">
                                    <label for="">받는 책략피해 감소(%)</label>
                                    <input type="number" name="receive_trick_damage_rate[]" placeholder="0" value="0">
                                </div>
                            </div>
                        </div>

                        <div class="class_part">
                            <div class="box">
                                <div class="part_title">병종 적성</div>
                                <select name="aptitude[]">
                                    <?php foreach($aptitudeParam as $key => $value) : ?>
                                        <option value="<?=$value ?>"><?=$key ?>급</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="skill_part">
                            
                        </div>

                        <button type="button" class="skill_add_btn" onclick="skillPopup.open(this);">전법 추가 +</button>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
            <?php endfor; ?>
            
            
            
            <div class="team_bonus_part">
                <div class="box">
                    <div class="part_title">병종 우위</div>
                    <select name="class_bonus">
                        <option value="0>">없음</option>
                        <option value="15>">우세</option>
                        <option value="-15>">열세</option>
                    </select>
                </div>
                <div class="box">
                    <div class="part_title">그 외 속성 증가[진영, 아이템 등](%)</div>
                    아군 <input class="w-lg" type="number" name="bonus_aptitude_ally" value="0">
                    적군 <input class="w-lg" type="number" name="bonus_aptitude_enemy" value="0">
                    <div class="col_helper">*협력 진영 건물 10레벨 풀업 기준 10%</div>
                </div>
                <div class="box">
                    <div class="part_title">사기로 인한 피해 감소(%)</div>
                    아군 <input class="w-lg" type="number" name="morale_ally" value="0">
                    적군 <input class="w-lg" type="number" name="morale_enemy" value="0">
                    <div class="col_helper">*인게임내 부대 클릭시 사기로 인한 피해감소 수치가 나옵니다. 사기가 아니라 사기로 인한 피해 감소 수치를 입력해주셔야 합니다.</div>
                </div>
            </div>
        </div>
           
        <button type="button" class="simulation_result_btn" onclick="getResult()">계산하기</button>
        <br><br>
        <a class="bug_report" onclick="Util.report()">[버그 제보]</a>
            
        <div class="fixex_btn_part">
            <button type="button" class="simulation_result_btn" onclick="getResult()">계산하기</button>
            <button type="button" onclick="Util.save()">입력 저장</button>
            <button type="button" onclick="Util.init()">초기화</button>
        </div>
        
        <br />
        <br />
        <!-- 수평2 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4126261814359480"
             data-ad-slot="9927862574"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <br />
        
        <div class="combat_simulation_result"></div>
    </div>
    
    <?php include 'include/footer.php'; ?>

    <div class="skill_popup_wrap effect">
        <div class="skill_popup">
            <div class="skill_popup_head">
                <p>효과 추가</p>
            </div>
            <div class="skill_popup_body">
                <div class="col">
                    <div class="col_head">대상</div>
                    <select name="sk_maker_target" id="sk_maker_target" onchange="effectPopup.changeEffectTarget(this)">
                        <option value="enemy"  data-count-check="true">적군</option>
                        <option value="enemy_boss" data-count-check="false">적군 주장</option>
                        <option value="ally"  data-count-check="true">아군</option>
                        <option value="ally_other"  data-count-check="true">우군</option>
                        <option value="ally_boss"  data-count-check="false">아군 주장</option>
                        <option value="ally_slave"  data-count-check="false">아군 부장(2명)</option>
                        <option value="myself"  data-count-check="false">자신</option>
                        <option value="all"  data-count-check="false">전체(자신 제외)</option>
                        <?php for($i = 1; $i <= 6; $i++) : ?>
                            <option value="<?=$i ?>"  data-count-check="false"><?=$i ?>번(지정)</option>
                        <?php endfor; ?>
                    </select>
                    <select name="sk_maker_target_count" id="sk_maker_target_count">
                        <option value="1">1명</option>
                        <option value="2">2명</option>
                        <option value="3">전체</option>
                    </select>
                     <div class="col_helper">지정은 아군,적군을 구분하지 않습니다.<br>(예:'잠피기봉'으로 특정 아군을 지정하고 싶은 경우, 아군이 사용할 땐 1,2,3번 중에서. 적군이 사용할 땐 4,5,6번 중에서 선택)</div>
                </div>
                <div class="col">
                    <div class="col_head">유형/피해율(%)</div>
                    <div class="content input_wrap">
                        <select name="sk_maker_damage_category" id="sk_maker_damage_category">
                            <option value="weapon">무기 피해</option>
                            <option value="deceit">책략 피해</option>
                        </select>
                        <input class="w-lg" type="number" name="sk_maker_damage_rate" value="0" min="0"> %
                    </div>
                </div>
                <div class="col">
                    <div class="col_head">치료(%)</div>
                    <div class="content input_wrap">
                        <input class="w-lg" type="number" name="sk_maker_heal_rate" value="0" min="0"> %
                    </div>
                </div>
                <div class="col">
                    <div class="col_head">속성 증감</div>
                    <div class="content ckbox_wrap">
                        <?php foreach($statParam as $key => $val) : ?>
                            <div class="ckbox">
                                <input type="checkbox" id="sk_maker_stat_<?=$key ?>" name="sk_maker_stat[]" value="<?=$key ?>">
                                <label for="sk_maker_stat_<?=$key ?>"><?=$val['name'] ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="content input_wrap" style="margin-top: 4px;">
                        <input class="w-lg" type="number" name="sk_maker_stat_bonus" value="0" min="0">만큼
                        <input type="number" name="sk_maker_stat_bonus_turn" value="0" style="width: 80px;">턴 동안
                        <div class="col_helper">*감소면 -값으로 입력(예: 적진함락 '-80' 입력)</div>
                    </div>
                </div>
                <div class="col">
                    <div class="col_head">상태 부여</div>
                    <select name="sk_maker_status" id="sk_maker_status">
                        <option value="none">없음</option>
                        <optgroup label="기능성 상태">
                            <option value="yean">연격</option>
                            <option value="momyen">모면</option>
                            <option value="bang">방어</option>
                            <option value="bumwe">범위 공격</option>
                            <option value="bankyuk" disabled="disabled">반격</option>
                            <option value="bundam" disabled="disabled">분담</option>
                            <option value="myunyeok" disabled="disabled">면역</option>
                            <option value="tongchal">통찰</option>
                            <option value="piljung" disabled="disabled">필중</option>
                            <option value="jukjingyukpa" disabled="disabled">적진 격파</option>
                            <option value="baeban" disabled="disabled">배반</option>
                            <option value="simli" disabled="disabled">심리전</option>
                            <option value="chugyuk" disabled="disabled">추격</option>
                            <option value="yeanhwan" disabled="disabled">연환</option>
                            <option value="jiwon" disabled="disabled">지원</option>
                        </optgroup>
                        <optgroup label="제어 상태">
                            <option value="gongpo">공포</option>
                            <option value="humang">허망</option>
                            <option value="mujangheje">무장 해제</option>
                            <option value="honran">혼란</option>
                            <option value="hueyak">허약</option>
                            <option value="chiryogumji">치료 금지</option>
                            <option value="dobal">도발</option>
                            <option value="obo" disabled="disabled">오보</option>
                            <option value="iganjil" disabled="disabled">이간질</option>
                            <option value="page" disabled="disabled">파괴</option>
                        </optgroup>
                        <optgroup label="특수 상태">
                            <option value="singimyosan">신기묘산</option>
                            <option value="gojiakrae" disabled="disabled">고지악래</option>
                        </optgroup>
                    </select>
                    <input type="number" name="sk_maker_status_turn" value="0" min="0" style="width: 80px;">턴 동안<br>
                    
                    <div class="sk_maker_status_part_wrap">
                        <?php for($i = 1; $i <= 3; $i++) : ?>
                            <div>
                                <label for="sk_maker_status_val_<?=$i?>">변수값 <?=$i?></label>
                                <input class="w-md" type="number" id="sk_maker_status_val_<?=$i?>" name="sk_maker_status_val_<?=$i?>">
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="col_helper">상태 종류마다 입력 값이 다릅니다. 자세한 내용은 <a href="./simulation_help.php" target="_blank">[모의전투 도움말]</a>에서 확인해주세요.</div>
                </div>
                <div class="col">
                    <div class="col_head">피해 증감</div>
                    <select name="sk_maker_variation" id="sk_maker_variation">
                        <option value="1">주는 피해 증가</option>
                        <option value="2">받는 피해 감소</option>
                        <option value="3">주는 무기피해 증가</option>
                        <option value="4">받는 무기피해 감소</option>
                        <option value="5">주는 책략피해 증가</option>
                        <option value="6">받는 책략피해 감소</option>
                    </select>
                    <input type="number" name="sk_maker_variation_rate" value="0" style="width: 80px;">%
                    <input type="number" name="sk_maker_variation_turn" value="0" min="0" style="width: 80px;">턴 동안
                    <div class="col_helper">*감소면 -값으로 입력</div>
                </div>
            </div>
            <div class="skill_popup_footer">
                <button onclick="effectPopup.close()" class="skill_popup_btn cancel" type="button">취소</button>
                <button onclick="effectPopup.save()" class="skill_popup_btn save" type="button">저장</button>
            </div>
        </div>
    </div>
    <div class="skill_popup_wrap skill">
        <div class="skill_popup">
            <div class="skill_popup_head">
                <p>전법 등록</p>
                <i class="fas fa-times close_btn" onclick="skillPopup.close()"></i>
            </div>
            <div class="skill_popup_body">
                <div class="col">
                    <div class="col_head">전법 종류</div>
                    <select name="sk_maker_skill_category" id="sk_maker_category">
                        <option value="active">액티브</option>
                        <option value="charge">돌격</option>
                        <option value="etc">기타</option>
                    </select>
                    
                    <div class="ckbox_wrap type-2">
                        <div class="ckbox">
                            <input type="checkbox" id="sk_maker_turn_ready" name="sk_maker_turn_ready" value="Y">
                            <label for="sk_maker_turn_ready">준비 필요</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col_head">발동률(%)</div>
                    <div class="content input_wrap">
                        <input class="w-lg" type="number" name="sk_maker_percentage" value="50" min="0"> %
                    </div>
                </div>
                <div class="col">
                    <div class="col_head">발동 턴</div>
                    <div class="ckbox_wrap">
                        <?php for($i = 0; $i <= 8; $i++) : ?>
                            <div class="ckbox">
                                <?php if($i !== 0) : ?>
                                    <input onclick="isPassive(this)" type="checkbox" id="sk_maker_turn_<?=$i ?>" name="sk_maker_turn[]" value="<?=$i ?>" checked="checked">
                                    <label for="sk_maker_turn_<?=$i ?>"><?=$i ?>턴</label>
                                <?php else : ?>
                                    <input onclick="isPassive(this)" type="checkbox" id="sk_maker_turn_<?=$i ?>" name="sk_maker_turn[]" value="<?=$i ?>">
                                    <label for="sk_maker_turn_<?=$i ?>">0턴(개전)</label>
                                <?php endif; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
<!--                    <div class="col_helper">*0턴(개전)에 발동되는 전법이면 모든 효과 유지 턴 수를 '유지턴수+1'로 입력 (예: 조운 '대담무쌍'은 9턴, 곽회 '대항의 장벽'은 5턴으로)</div>-->
                </div>
                <div class="col">
                    <div class="col_head">효과 추가</div>
                    <div class="effect_wrap">
                        <div class="effect_list">
                        
                        </div>
                        <button class="effect_add_btn" onclick="effectPopup.open(this)">효과 추가 +</button>
                    </div>
                </div>
            </div>
            <div class="skill_popup_footer">
                <button onclick="skillPopup.close()" class="skill_popup_btn cancel" type="button">취소</button>
                <button onclick="skillPopup.save()" class="skill_popup_btn save" type="button">저장</button>
            </div>
        </div>
    </div>
    
</body>
<script>
    function isPassive(el){
        var flag = $(el).is(':checked');
        if($(el).val() == 0 && flag){
            $('[name="sk_maker_turn[]"]').prop('checked', false);
            $('#sk_maker_turn_0').prop('checked', flag);
        }else{
            $('#sk_maker_turn_0').prop('checked', false);
        }
    }
</script>