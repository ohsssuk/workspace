<div class="wk_content">
    <div class="point_cont">
        <h2>Tree형 조합 구조 계산</h2>
        <img src="./images/work/work_1/edit_3.png" alt="">
        <div class="des">
            <strong>각 단계별 필요 수량과 가격을 계산하는 기능</strong>

            <ul class="number_list">
                <li>이전 Tier의 갯수만큼 다음 Tier에 필요하므로 단계가 복잡해질 수록 수량과 가격 계산이 어려워짐</li>
                <li>계산 함수를 개발하여 각 case별 결과를 도출(예: case 1은 전부 하위티어 재료를 사용했지만, case 2에서 하위 재료를 A 2Tier로 교체하여 계산할 수 있음)</li>
                <li>함수 구조 하나로 단계에 관계 없이 모든 종류의 tree 형태에 대응 가능</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>맵 데이터 분류/저장</h2>
        <img src="./images/work/work_1/edit_1.png" alt="">
        <div class="des">
            <strong>각 구간별 정보를 정리하여 사용자들이 보기 편하게 정리</strong>
        </div>
    </div>
    <div class="point_cont">
        <h2>사용자 등록 폼</h2>
        <img src="./images/work/work_1/edit_2.png" alt="">
        <div class="des">
            <strong>사용자가 직접 원하는 정보를 저장할 수 있음</strong>

            <ul class="number_list">
                <li>ckEditor를 사용하여 필요한 정보를 사용자가 직접 편집 가능</li>
                <li>맵을 클릭하여 원하는 위치에 포인트를 생성하여 저장 가능</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>데이터 목록 관리</h2>
        <img src="./images/work/work_1/edit_4.png" alt="">
        <div class="des">
            <strong>모든 필요 재료의 단가를 데이터화 하여 관리</strong>

            <ul class="number_list">
                <li>목록표를 나의 리스트로 복사하여 편집 가능</li>
                <li>목록 가격을 아이템 조합 계산기로 가져올 수 있음</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .wk_content{
        line-height: 1.6;
        margin-top: 120px;
    }
    .wk_content .point_cont:first-of-type{
        margin-top: 0;
    }
    .wk_content .point_cont{
        margin-top: 80px;
    }
    .wk_content h1{
        margin-top: 40px;
        margin-bottom: 40px;
        font-weight: 700;
        font-size: 18px;
    }
    .wk_content h2{
        font-size: 24px;
        font-weight: 700;
        margin: 10px 0;
        color: #000;
    }
    .wk_content strong{
        font-weight: 700;
    }
    .wk_content img{
        width: 100%;
        border: 1px solid #ddd;
    }
    .wk_content .des{
        margin-top: 10px;
    }
    .number_list{
        counter-reset: number 0;
        margin-top: 20px;
    }
    .number_list li{
        position: relative;
        padding-left: 20px;
        margin-top: 4px;
    }
    .number_list li::before {
        position: absolute;
        left: 0;
        counter-increment: number 1;
        content: counter(number)'.';
    }
</style>