<!DOCTYPE html>
<html lang="ko">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/header.php'; ?>
<script src="js/data.js?ver=3"></script>
<div class="main">
    <h1>시청(건물) 계산기</h1>
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
    
    <div class="input_cover_cityhall_helper">
        <p>목표 하는 시청 레벨(시청 업그레이드 직후 자신의 시청레벨+1)을 선택해주세요</p>
        <p>필요한 모든 건물 조건을 검색합니다.</p>
        <p>건물 조건은 이전 단계의 한계 레벨을 기준으로 검색합니다. (예: Lv.16 시청 업그레이드에 Lv.15 보병 훈련소가 필요한 경우 지금 자신의 보병 훈련소 레벨은 바로 전 단계인 Lv.14라고 가정하고 자원 계산)</p>
        <p><strong>각 건물의 하위 필요 조건 건물이 <img src="./images/arrows.png" />로 단계별 표시 되있으므로 효율적인 건설을 위해서는 가장 하위 단계의 건물 업그레이드 조건부터 맞춰주는 것이 좋습니다.</strong>(건설 대열이 쉬지 않기 위해)</p>
    </div>
    <div class="input_cover_cityhall">
        <img src="./images/cityhall.png" alt="">
        <div class="input_manager">
            <p>목표 건물 & 레벨</p>
            <select name="buliding_kind" id="buliding_kind">
                <option value="0">시청</option>
                <option value="1">아카데미</option>
                <option value="2">저장소</option>
                <option value="3">연맹센터</option>
                <option value="4">교역소</option>
                <option value="5">주점</option>
                <option value="6">정찰병 캠프</option>
                <option value="7">보병 훈련소</option>
                <option value="8">궁병 훈련소</option>
                <option value="9">기병 훈련소</option>
                <option value="10">성</option>
                <option value="11">병원</option>
                <option value="12">성벽</option>
            </select>
            <select name="cityhall_level_sel" id="cityhall_level_sel">
                <option value="-1">선택</option>
                <?php for($i = 0; $i < 10; $i++) : ?>
                    <option value="<?='le'.($i+16) ?>">Lv.<?=$i+16 ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>
    <div class="cityhall_result">
        <div class="result_name">
            총 필요 자원
        </div>
        <ul class="res_all_need">
            <li class="res_all_food">
                <div class="res_all_thumb">
                    <p>식량</p>
                </div>
                <div class="res_all_amount res_all_food_amount"></div>
            </li>
            <li class="res_all_wood">
                <div class="res_all_thumb">
                    <p>목재</p>
                </div>
                <div class="res_all_amount res_all_wood_amount"></div>
            </li>
            <li class="res_all_stone">
                <div class="res_all_thumb">
                    <p>석재</p>
                </div>
                <div class="res_all_amount res_all_stone_amount"></div>
            </li>
        </ul>
        <div class="result_name">
            개별 필요 자원
        </div>
        <ul class="build_all_need">
            
        </ul>
    </div>
    <div class="thanks_info">
        <p>아이디어를 제공해 주신</p>
        <p class="byline"><strong>#1518</strong>서버 <strong>#KAL</strong>연맹 <strong>kyujang</strong>님께 감사드립니다.</p>
    </div>
    <?php include 'include/footer.php'; ?>
</div>
</body>
</html>