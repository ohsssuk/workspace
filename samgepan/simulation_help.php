<?php include './include/head.php'; ?>
<body>
    <?php include './include/header.php'; ?>
    
    <script type="text/javascript" src="./js/simulation.js?ver=v2"></script>
    <script type="text/javascript" src="./js/util.js?ver=v2"></script>

    
    <div class="main">
        <h1 class="site_title">
            삼국지 계산판<img src="./images/samgepan_main.png" alt="삼국지 계산판">
        </h1>
        <h2>모의 전투 도움말</h2>
        
        <div class="simul_help">
            <h3>공통</h3>
            <p><b>화면 하단에 [계산하기] 버튼으로 모의 전투 계산 결과를 확인</b>합니다. 결과는 클릭시마다 확률 변수에 따라 매번 달라집니다.</p>
            <p><b>화면 하단에 [입력 저장] 버튼 클릭을 생활화 해주세요.</b> <span class="deco_red">전법 세팅이 생각보다 엄청 번거롭습니다.</span></p>
            <p>[삭제]버튼으로 잘못 입력됬거나 불필요한 전법,효과를 삭제할 수 있습니다.</p>
            <p>화면 하단에 [초기화] 버튼을 클릭하면 저장된 값이 전부 초기화 됩니다.</p>
            <p>웹페이지 기록을 삭제하면 저장값이 초기화됩니다. 웹페이지 기록 자동 삭제를 하지 말아주세요.</p>
           
           
            <h3>장수 입력</h3>
            
            <p>파란 테두리는 아군, 붉은 테두리는 적군입니다. 주장,부장 표시가 되어있습니다.</p>
            
            <p><strong>이름</strong> 전보에서 누가 누구인지 쉽게 보기위해 입력합니다. 입력하지 않아도 괜찮습니다.</p>
            
            <p><strong>병력</strong> 부대의 병력 수를 입력해주세요.</p>
            
            <p><strong>속성</strong> 첫번째 칸은 기본속성, +칸은 추가속성입니다. 기본속성은 인게임 [부대]탭에서 장수를 클릭해서 나오는 흰색수치입니다. <span class="deco_ul">전보를 클릭해서 나오는 수치가 아닙니다.</span> 추가속성은 무기,병사전 등의 추가 수치입니다. 병족적성이나 다른 효과에 의해 속성에 %수치가 곱해지기 때문에 <span class="deco_ul">병사전으로 인한 추가속성을 기본속성칸에 입력하면 안됩니다.</span></p>
            
            <p><strong>피해증감</strong> 기본적인 피해감소,피해증가 수치입니다. 풀진급의 경우 병서에 의해 모든 수치가 10입니다. 피해 수치 증감량이 헷갈리실 수 있는데. <span class="deco_ul deco_red">대상에게 "좋은" 수치는 +로, "나쁜" 수치는 -로 생각</span>해주시면 됩니다. 예를 들어 주는 피해는 증가하는 것이 "좋은" 효과이기 때문에 증가시 +로 입력합니다. 반대로 주는피해가 감소했다면 -로 입력합니다. 받는 피해는 감소하는 것이 "좋은" 효과이기 때문에 감소하는 %를 +로 입력합니다. 예를 들어 [대항의 장벽] 효과로 피해 감소를 입력하는 경우 "감소"했다고 해서 -25로 입력하는게 아닌 "좋은"효과이기 때문에 25를 입력합니다.</p>
            
            <p><strong>병종 적성</strong> 병종 적성을 선택해주세요.</p>
            
            
            <h3>전법 입력</h3>
            
            <p>전법은 전법 자체를 개인 사이트에서 대응하는 것이 불가능하기 때문에 <span class="deco_ul">효과의 조합으로 설정</span>하도록 되어 있습니다. 따라서 <span class="deco_ul deco_red">모의계산 사용자의 센스가 중요합니다.</span></p>
            
            <p><span class="deco_red">전법이 세개라고 해서 꼭 3개를 등록해야 하는것은 아닙니다. 특정 전법을 에디터로 계산하기 위해 두개의 전법이 필요하다면 어떤 장수는 시뮬레이션에서 4개의 전법이 등록 될 수도 있습니다.</span></p>
            
            <p><span class="deco_red">효과는 같은 전법내에 여러개가 등록될 수도, 하나 일수도 있습니다. 전법의 [효과] 대상이 다르면 효과는 2개로 따로 등록해주셔야 합니다.</span> 예를 들어 자신의 무력 속성을 증가시키고 적군에게 피해를 주는 전법이 있다면, 해당 전법은 [자기 자신]을 대상으로 하는 1번효과와 [적군]을 대상으로 하는 2번효과가 등록되어야 합니다.</p>
            
            <p>[전법추가 +]를 클릭해주세요.</p>
            
            <p><strong>전법 종류</strong> 전법 종류를 선택해주세요. 액티브, 돌격을 제외하고는 모두 "기타"로 선택 해주세요. 액티브는 허망에 의해 중단되고 돌격은 일반공격에 의해 발동하게 됩니다. 준비가 필요한 전법은 반드시 [준비 필요]에 체크해주세요.</p>
            
            <p><strong>발동률</strong> 발동률은 기본적으로는 전법 발동률을 입력하시면 됩니다. 다만 <span class="deco_ul">지휘,부대,진형,패시브등의 전법은 해당턴에 반드시 발동하기 때문에 발동률을 100</span>으로 입력해주셔야 합니다.</p>
            
            <p><strong>발동 턴</strong> 전법이 발동하는 턴을 선택합니다. 기본적으로는 1~8턴 전부이지만. 패시브,지휘 등의 전법은 0턴(개전)으로 선택해주셔야 합니다. [사별삼일]이나 특정턴부터 본격적인 효과가 나오는 전법들은 그 발동턴부터 체크 해주시면 됩니다.</p>
            
            <h3>효과 입력</h3>
            <p>전법 정보가 전부 입력됬다면 해당 전법의 효과를 입력해야 합니다. [효과 추가 +]버튼을 클릭 해주세요.</p>
            
            <p><strong>대상</strong> 전법은 다른 대상에게 별개의 효과를 부여하는 경우가 많습니다. 대상이 다른 경우 별개의 효과로 등록 해주셔야합니다. 인게임내의 설명 그대로 등록해주시면 됩니다.</p>
            <p><strong>유형/피해율</strong> 피해를 주는 효과인 경우 입력해주세요. 무기 피해/책략 피해 유형을 선택해주세요</p>
            <p><strong>치료</strong> 치료 효과인 경우 치료율을 입력해주세요.</p>
            <p><strong>속성 증감</strong> 속성 증감 효과가 있는 경우 입력합니다. 해당 되는 속성에 체크하고 수치와 턴수를 입력합니다. 증가는 그냥 입력하고 감소는 -로 입력해야 합니다. [적진 함락]처럼 동일한 대상에게 피해를 주고 속성을 감소시키는 경우 수치에 -120(예시)을 입력합니다.</p>
            <p><strong>상태 부여</strong> 상태 부여는 상태와 턴수를 입력하면 되지만 모든 상태가 다양한 효과를 가지고 있기에 변수 값 입력이 필요합니다. 변수값 표를 참고해주세요. <span class="deco_ul">변수값 표에 없는 효과들은 별도의 변수값 입력이 필요하지 않습니다. 턴수만 입력해주세요</span></p>
            
            <h3>상태 효과 변수값 표</h3>
            <table>
                <tr>
                    <th>상태 이름</th>
                    <th>변수값 1</th>
                    <th>변수값 2</th>
                    <th>변수값 3</th>
                    <th>비고</th>
                </tr>
                <tr>
                    <td>신기묘산</td>
                    <td>발동률(%)</td>
                    <td>피해율(%)</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>모면</td>
                    <td>발동률(%)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>방어</td>
                    <td>방어 횟수</td>
                    <td></td>
                    <td></td>
                    <td><span class="deco_red">방어는 유지 턴수를 무조건 8턴 이상으로 입력해주셔야 합니다.</span></td>
                </tr>
                <tr>
                    <td>범위 공격</td>
                    <td>범위 피해율(%)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br>
            
            <p><strong>피해 증감</strong> 장수 입력때 설명한 것처럼 대상에게 <span class="deco_red">"좋은"효과가 +. "나쁜"효과가 -</span>입니다. 주는 피해가 감소한다면 대상에게 "나쁜"효과 입니다. 주는 피해 증가 효과에서 -40(예)를 입력하시면 됩니다. 받은 피해가 증가한다면 대상에게 "나쁜"효과이므로 -40(예)를 입력하시면 됩니다.</p>
            
            <h3>공통 입력</h3>
            <p><strong>병종 우위</strong> 병종 우위를 선택해주세요.</p>
            <p><strong>그 외 속성 증가</strong> 진영 효과로 인해 증가하는 경우가 대부분입니다. 장수 셋이 전부 같은 진영(위,촉,오,군)이고 진영 건물이 풀업(10Lv) 상태인 경우 10입니다.</p>
            <p><strong>사기로 인한 피해 감소</strong> 사기 감소치가 아닌 피해감소 %를 입력해주셔야 합니다.</p>
            
            <h3>실제 입력 예시</h3>
            <p>이해를 돕기 위해 실제 예시로 시뮬레이션 등록을 해보겠습니다.</p>
            <p>변수를 최대한 없애기 위해 시련으로 등록했습니다. 실제 전투인 경우 병종병영과 속성병영, 진영버프 등을 체크해주셔야 합니다.</p>
            <img style="width:100%; display:block;" src="./images/exam_1.jpg" alt="">
            
            <br>
            <div class="jean_box">
                <div class="nm">[대담무쌍]</div>
                <div class="effect">
                    <span class="deco_red">자신</span>의 <span class="deco_red">무력,지력,통솔,속도</span> 속성 <span class="deco_red">8턴</span>동안 <span class="deco_red">50 증가</span>
                </div>
                <div class="effect">
                    <span class="deco_red">자신</span>에게 <span class="deco_red">8턴</span>동안 <span class="deco_red">통찰</span> 부여
                </div>
            </div>
            
            <p>효과는 2개이지만, <b>대상</b>이 모두 <b>자신</b>으로 동일합니다. 이런 경우 하나의 효과로 등록할 수 있습니다. <b>대상이 다르지 않기 때문</b>입니다.</p>
            
            <p>[조운]의 정보창에서 [전법등록 +] 버튼을 클릭해주세요.</p>
            <p>전법 종류가 액티브나 돌격 전법이 아닙니다. [기타]로 선택되어야 합니다.</p>
            <p>준비가 필요한 전법이 아니니 [준비 필요]에는 체크하시면 안되겠습니다.</p>
            <p>[대담무쌍]은 개시턴에 무조건 발동하는 패시브 전법입니다. 발동률은 <b>100%</b>로 입력 되야합니다.</p>
            <p>발동 턴은 마찬가지로 개시턴에 발동되어야 하기 때문에 [0턴(개전)]을 선택해주셔야합니다.</p>
            
            <p>앞서 효과는 하나만 등록할 수 있다고 했습니다. 다만, 사용자에 따라 두개로 등록하셔도 사용되는 효과에는 차이가 없습니다. 그럼 효과를 등록해보겠습니다. [효과 추가 +]버튼을 클릭해주세요.</p>
            <p>대상은 <b>자신</b>이 되겠습니다.</p>
            <p>[용감무쌍]전법은 피해를 주는 전법이 아니기 때문에 유형/피해율 탭은 넘어가주시면 됩니다.</p>
            <p>마찬가지로 치료 전법도 아니기때문에 치료 탭은 넘어가주세요.</p>
            <p>속성 증감은 [용감무쌍]의 효과입니다. 입력해보겠습니다. 무력,지력,통솔,속도가 모두 포함되죠. 모두 체크해주세요. 수치는 인게임내 설명대로 50, 전투가 끝날때까지 유지되는 효과이기 때문에 턴은 8턴입니다. 8턴으로 입력하셔도 되고 , 100턴으로 입력하셔도 결과는 같습니다. 다만 8턴보다 적게 입력하시면 잘못된 결과가 나오겠습니다.</p>
            <p>상태 부여 효과도 있습니다. 지금의 경우는 효과의 <b>대상</b>이 <b>자신</b>으로 동일하기 때문에 하나의 효과로 등록할 수 있습니다. <b class="deco_red">대상이 다르면 다른 효과로 등록 해주셔야 합니다.</b></p>
            <p>[통찰]상태를 8턴간 부여해주세요.</p>
            <p>[저장]을 클릭하여 추가된 효과를 확인해주세요.</p>
            <p>추가된 효과가 맞다면 마찬가지로 [저장]을 눌러 전법을 추가해주세요.</p>
            
            <div class="skill_core etc" data-category="etc" data-percentage="100" data-turn="0"><div class="skill_core_info"><button onclick="skillPopup.delete(this);" type="button" class="delete_btn">삭제</button>기타 | 100% <br>0턴 </div><div class="effect_list"><div class="effect_core" data-target="myself" data-stat-target="mu,ji,tong,sok" data-stat-bonus="50" data-stat-bonus-turn="8" data-status="tongchal" data-status-turn="8" data-status-val-1="0" data-status-val-2="0" data-status-val-3="0"><span class="est est_1">자신</span> <span class="est est_3">무력,지력,통솔,속도 8턴 동안 50</span> <span class="est est_4">통찰 8턴 동안 (값:0/0/0)</span> </div></div></div>
            
            <p>이런 형태의 전법이 추가되었다면 올바르게 등록되었습니다.</p>
            
            <br>
            <div class="jean_box">
                <div class="nm">[적진함락]</div>
                <div class="effect">
                    <span class="deco_red">적군 2명</span>의 <span class="deco_red">지력,통솔</span> <span class="deco_red">2턴</span>동안 <span class="deco_red">80(무력 가중치 있음) 감소</span>
                </div>
                <div class="effect">
                    <span class="deco_red">적군 2명</span>에게 <span class="deco_red">무기 피해 158%</span> 
                </div>
            </div>
            <p>마찬가지로 대상이 같기때문에 하나의 효과로 등록할 수 있겠습니다.</p>
            <p>[전법 추가 +]를 클릭해주세요.</p>
            <p>액티브 전법을 선택합니다. 적진함락은 준비가 필요한 전법이기 때문에 [준비 필요]에 체크합니다. 체크에 따라 결과가 매우 상이합니다.</p>
            <p>인게임내 표시 발동률이 35%이므로 동일하게 입력합니다. '35' 입니다.</p>
            <p>적진함락은 매턴 발동하는 액티브 전법입니다. 기본적으로 체크되어 있는 1,2,3,4,5,6,7,8턴 모두에 체크합니다.</p>
            <p>[효과 추가 +]를 클릭하여 효과를 추가해보겠습니다.</p>
            <p>대상이 무작위 적 2명입니다. 대상은 [적군][2명]을 선택합니다.</p>
            <p>무기 피해가 있는 전법입니다. [무기 피해][158]%를 입력합니다.</p>
            <p>치료 효과는 없기때문에 그대로 놔둡니다.</p>
            <p>동시에 속성감소 효과가 있습니다. 지력,통솔을 감소 시킵니다. <b class="deco_red">*중요한 포인트입니다. 속성을 감소시킬때는 반드시 '-'수치로 입력합니다.</b></p>
            <p><b class="deco_red">*또 한가지 유의사항입니다. 삼전판의 전법들은 피해,속성 증감치 등에서 시전하는 장수의 속성보정을 받는 전법들이 있습니다.</b> 제가 테스트한 조운은 전법 설명은 80의 감소치를 가지고 있지만 무력보정에 의해 142의 감소치를 가지고 있는것을 확인했습니다. [-142]의 속성을 [2]턴동안 적용하도록 세팅했습니다.(가늠하기 어렵다면 속성 100당 15라고 생각하시면 편합니다. 피해 추가인경우 15%. 속성인 경우 15. 어디까지나 예상치 입니다.)</p>
            
            <div class="skill_core active" data-category="active" data-percentage="35" data-turn="1,2,3,4,5,6,7,8"><div class="skill_core_info">액티브 | 35% <br>1,2,3,4,5,6,7,8턴 </div><div class="effect_list"><div class="effect_core" data-target="enemy" data-target-count="1" data-damage-rate="172" data-damage-category="weapon" data-status="gongpo" data-status-turn="1" data-status-val-1="0" data-status-val-2="0" data-status-val-3="0"><span class="est est_1">적군 1명</span> <span class="est est_2">무기 피해 172%</span> <span class="est est_4">공포 1턴 동안 (값:0/0/0)</span></div></div></div>
            <p>이렇게 등록된 전법의 예시입니다.</p>
            
            <p>[출병약탈]은 앞서 등록한 적진 함락과 등록법이 유사하기 때문에 생략합니다.</p>
            
            <br>
            <div class="jean_box">
                <div class="nm">[분투]</div>
                <div class="effect">
                    일반 공격 후 자신이 주는 무기 피해가 12% 증가하며 최대 3회 중첩 가능. 또한 35%의 확률로 목표에게 무장 해제 부여. 1턴 지속
                </div>
            </div>
            <p>조금 특이한 케이스라 일부로 넣은 관평의 [분투]입니다. 시뮬레이터로 등록하기에 굉장히 난해한 효과입니다. 하나하나 해보겠습니다.</p>
            <p><span class="deco_red">해당 전법은 저는 시뮬레이터의 특성상 하나의 전법으로 등록할 수 없다고 생각</span>했습니다.</p>
            <p>"일반 공격 후"라는 말은 무장해제나 다른효과에 의해 발동하지 않을수 있지만 '일반적'으로는 3턴동안이겠죠. 제 관평의 경우 [연격]효과를 가진 전법이 있어 최대 2턴만에 3중첩에 도달할 수 있기는 하지만, '일반적'으로 3턴동안 중첩이 된다고 '가정'합니다. 시뮬레이터는 '정확'보다는 '가정'입니다.</p>
            <p>대상은 자신입니다. 발동확률은 패시브이니 100%가 됩니다. <b class="deco_red">저는 3턴동안 중첩을 쌓는다고 '가정'했기 때문에 발동턴을 1,2,3턴으로 조정</b>했습니다. 이제 관평은 1,2,3턴에 한번씩 해당 효과를 중첩하게 됩니다.</p>
            <p><b class="deco_red">*중요합니다. 관평의 [분투]라는 하나의 전법을 재현하기 위해 저는 시뮬레이터 상으로 두개의 전법을 혼합해서 등록했습니다. 이유는 발동하는 턴과 확률이 다르기 때문입니다.</b> 전법을 최대한 효과적으로 시뮬레이터에서 재현하기 위해서는 센스가 필요합니다.</p>
            <p>일반공격의 대상에게 무장해제를 35% 확률로 부여한다고 합니다.</p>
            <p>현재는 일반공격한 대상을 특정하도록 시뮬레이터에서 시스템을 제공하고 있지 않습니다. 따라서 저는 일반적인 전법이라고 생각하고 등록했습니다.</p>
            <p>전법 종류는 기타. 발동턴은 1~8턴 전부입니다. 확률은 35%가 되겠습니다. 이후 [효과 추가 +]로 [적군][1]명 상태 부여 [무장 해제][1]턴 동안을 선택했습니다.</p>
            
            <div class="skill_core etc" data-category="etc" data-percentage="35" data-turn="1,2,3,4,5,6,7,8"><div class="skill_core_info">기타 | 35% <br>1,2,3,4,5,6,7,8턴 </div><div class="effect_list"><div class="effect_core" data-target="enemy" data-target-count="1" data-status="mujangheje" data-status-turn="1" data-status-val-1="0" data-status-val-2="0" data-status-val-3="0"><span class="est est_1">적군 1명</span> <span class="est est_4">무장 해제 1턴 동안 (값:0/0/0)</span></div></div></div>
            
            <div class="skill_core etc" data-category="etc" data-percentage="100" data-turn="1,2,3"><div class="skill_core_info">기타 | 100% <br>1,2,3턴 </div><div class="effect_list"><div class="effect_core" data-target="myself" data-variation="3" data-variation-rate="12" data-variation-turn="8"><span class="est est_1">자신</span> <span class="est est_5">주는 무기피해 증가 12% 8턴 동안</span></div></div></div>
            
            <p>이렇게 재현한 [분투]의 두가지 전법입니다. 여러번 테스트를 돌려본 결과 비슷한 결과가 도출됩니다.</p>
            
            <p>이후 등록할 [강공]은 상태부여로 등록합니다. 이전 내용을 이해하셨다면 어려움 없이 등록 하실 수 있을것 같습니다.</p>
            <div class="skill_core active" data-category="active" data-percentage="45" data-turn="1,2,3,4,5,6,7,8"><div class="skill_core_info">액티브 | 45% <br>1,2,3,4,5,6,7,8턴 </div><div class="effect_list"><div class="effect_core" data-target="myself" data-status="yean" data-status-turn="1" data-status-val-1="0" data-status-val-2="0" data-status-val-3="0"><span class="est est_1">자신</span> <span class="est est_4">연격 1턴 동안 (값:0/0/0)</span></div></div></div>
            <p>등록된 예시입니다.</p>
            
            <br>
            <div class="jean_box">
                <div class="nm">[대항의 장벽]</div>
                <div class="effect">
                    전투 시작 후 4번째 턴까지 아군 다수 대상(2명)이 받는 피해 25% 감소
                </div>
            </div>
            <p>[대항의 장벽]을 등록해보겠습니다.</p>
            <p>개시 턴에 발동하여 4턴 동안 유지되는 효과입니다.</p>
            <p>지휘 전법이기 때문에 전법 종류는 [기타] 그리고 항상 발동합니다. 발동률은 [100]%입니다. 발동턴은 [0턴]입니다. 매번 발동하는게 아니기 때문입니다. 이제 효과를 등록합니다. 지금까지 등록처럼 대상은 [아군][2]명 가장 아래의 피해 증감에서 [받는 피해 감소][25]만큼 [4]턴 동안을 입력합니다.</p>
            <div class="skill_core etc" data-category="etc" data-percentage="100" data-turn="0"><div class="skill_core_info">기타 | 100% <br>0턴 </div><div class="effect_list"><div class="effect_core" data-target="ally" data-target-count="2" data-variation="2" data-variation-rate="25" data-variation-turn="4"><span class="est est_1">아군 2명</span> <span class="est est_5">받는 피해 감소 25% 4턴 동안</span></div></div></div>
            <p>올바른 등록 예시입니다.</p>
            
            <p>이제 마찬가지로 등록하기 애매한 주창의 [굳센 의지]를 세팅해보겠습니다.</p>
            <div class="jean_box">
                <div class="nm">[굳센 의지]</div>
                <div class="effect">
                    2번째 턴까지 범위 공격(피해율 100%) 상태를 획득하지만. 50% 확률로 범위공격 발동가능. 3번째 턴부터 턴마다 무력 15 증가
                </div>
            </div>
            <p>번역 문제인지 말이 어렵게 되어있는데 요점을 정리해보겠습니다. 결국 풀어 쓰면,</p>
            <p>1,2턴에 50%확률로 1턴간 유지되는 범위공격 상태를 획득</p>
            <p>3,4,5,6,7,8턴에 자신의 무력 15 증가(유지턴수 무한)</p>
            
            <br>
            <div class="skill_core etc" data-category="etc" data-percentage="50" data-turn="1,2"><div class="skill_core_info">기타 | 50% <br>1,2턴 </div><div class="effect_list"><div class="effect_core" data-target="myself" data-status="bumwe" data-status-turn="1" data-status-val-1="100" data-status-val-2="0" data-status-val-3="0"><span class="est est_1">자신</span> <span class="est est_4">범위 공격 1턴 동안 (val:100/0/0)</span></div></div></div>
            <div class="skill_core etc" data-category="etc" data-percentage="100" data-turn="3,4,5,6,7,8"><div class="skill_core_info">기타 | 100% <br>3,4,5,6,7,8턴 </div><div class="effect_list"><div class="effect_core" data-target="myself" data-stat-target="mu" data-stat-bonus="15" data-stat-bonus-turn="10"><span class="est est_1">자신</span> <span class="est est_3">무력 10턴 동안 15</span></div></div></div>
            <p><span class="deco_red">*유지 턴수가 10인 이유는 전투(총 8턴)동안 주창의 속성 증가 효과가 사라지지 않게 하기 위함입니다.</span></p>
            
            <br>
            <p>제가 올린 장수진에는 없지만 정말 등록하기 어려운 제갈랴의 [신기묘산]도 한번 등록해보겠습니다.</p>
            <div class="jean_box">
                <div class="nm">[신기묘산]</div>
                <div class="effect">
                    적군 다수 대상(2명)이 액티브 전법 발동 시 25%의 확률로 실패 및 대상에게 책략 피해 부여 100%(지력 보정). 자신이 주장이면 지력의 차에 따라 추가로 증가
                </div>
            </div>
            <p>해당 전법은 에디터로는 구현이 힘듭니다. 따라서 제가 고유한 상태 '신기묘산'을 상태부여 탭에 추가해두었습니다.</p>
            <p>신기묘산 상태의 값 입력 정보는 '상태 효과 변수값 표'를 참고해주세요.</p>
            <div class="skill_core etc" data-category="etc" data-percentage="100" data-turn="0"><div class="skill_core_info">기타 | 100% <br>0턴 </div><div class="effect_list"><div class="effect_core" data-target="enemy" data-target-count="2" data-status="singimyosan" data-status-turn="8" data-status-val-1="35" data-status-val-2="100" data-status-val-3="0"><span class="est est_1">적군 2명</span> <span class="est est_4">신기묘산 8턴 동안 (값:35/100/0)</span></div></div></div>
            <p>(값:35/100/0)를 주목해주세요. 35는 확률. 100은 데미지입니다. 주장의 지력차나 지력에 의한 보정이 있기때문에 100이 아닌 150이 될 수도, 120이 될 수도 있는 수치입니다. 이부분은 적당히 조정해주시면 됩니다. (ps.에디터로 구현해서 테스트해보니 신기묘산은 정말 사기네요...)</p>
            
            <p><b>모든 전법을 이렇게 융통성 있게 등록해주시면 됩니다. 등록하기 애매한 전법은 네이버 카페의 해당글, 혹은 사이트 댓글창에 댓글로 문의해주시면 감사하겠습니다. 많은 이용 부탁드립니다. 긴 도움말 읽어주셔서 감사합니다.</b></p>
        </div><!-- end -->
    </div>
    
</body>