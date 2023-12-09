<div class="wk_content">
    <div class="point_cont">
        <h2>Tree형 구조 계산</h2>
        <img src="./images/work/work_2/edit_1.png" alt="">
        <div class="des">
            <strong>각 단계별 요구 사항, 잠금 해제 조건, 필요 비용을 계산하는 기능</strong>

            <ul class="number_list">
                <li>비용의 총량을 계산하기 위해 현재 단계의 필요량이 아닌 요구 사항, 잠금 해제 조건 시에 필요한 자원을 모두 계산</li>
                <li>단계별, 종류별 데이터 정리하여 화면 설계</li>
                <li>함수 구조 하나로 단계에 관계 없이 모든 종류의 tree 형태 조건에 대응 가능</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>단순 계산 편의성 증대</h2>
        <img src="./images/work/work_2/edit_2.png" alt="">
        <div class="des">
            <strong>인게임 내 단위에 맞추어 유저 사용 편의성 증대 목적</strong>
        </div>
    </div>
    <div class="point_cont">
        <h2>Tree형 구조 계산</h2>
        <img src="./images/work/work_2/edit_3.png" alt="">
        <div class="des">
            <ul class="number_list">
                <li>
                    조건.<br>
                    - A가 3/3일 때(선행 조건), B 습득 가능<br>
                    - B가 3/3일 때(선행 조건), C 습득 가능<br>
                    - B가 3/3일 때(선행 조건), F 습득 가능<br>
                    - F가 5/5일 때(선행 조건), G 습득 가능<br>
                    - C가 5/5이면서 G가 3/3이여야(동시 선행 조건), E 습득 가능<br>
                </li>
                <li>각 단계별로 다른 필요 포인트와 선행 조건(N개) 검사 필요</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <img src="./images/work/work_2/edit_4.png" alt="">
        <div class="des">
            <strong>사용자가 필요한 구성을 인게임과 동일한 조건에서 미리 구성할 수 있는 기능</strong>

            <ul class="number_list">
                <li>필요한 선행 조건이 만족된 경우 다음 단계 활성화</li>
                <li>현재 습득 불가능한 단계 클릭 시, 필요 선행 조건을 표시</li>
                <li>전체 가용 포인트 갯수 검사</li>
                <li>리스트 저장/조회 기능</li>
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