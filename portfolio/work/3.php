<div class="wk_content">
    <div class="point_cont">
        <h2>필요 자원 대기시간 계산</h2>
        <img src="./images/work/work_3/edit_1.png" alt="">
        <div class="des">
            <strong>종류,단계별로 다른 필요 자원 데이터를 정리하고 시간당 증가량을 입력하여 최소 대기시간 계산</strong>

            <ul class="number_list">
                <li>별개의 증가량을 가지는 자원중 가장 오래 걸리는 자원을 파악하여 최소 대기 시간 계산</li>
                <li>대기 시간 동안의 나머지 자원 증가량을 파악하여 사용 가능한 잉여 자원 수치 파악</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>모의 전투 시뮬레이션</h2>
        <img src="./images/work/work_3/edit_2.png" alt="">
        <div class="des">
            <strong>인게임과 완전히 동일한 로직의 전투 방식과 공식 구현</strong>
        </div>
        <br>
        <img src="./images/work/work_3/edit_3.png" alt="">
        <img src="./images/work/work_3/edit_5.png" alt="">
        <div class="des">
            <ul class="number_list">
                <li>
                    조건.<br>
                    - 계산 수치에 영향을 주는 병력, 속성 정보, 피해증감 보너스는 매 턴마다 유동적으로 변동<br>
                    - 전법(스킬)은 각 캐릭터가 최대 3개까지 가지고 있음<br>
                    - 발동 확률은 매턴 난수 값<br>
                    - 각 효과가 타입별로 상이하고 대상이 되는 조건과 대상의 수가 다름<br>
                    - 이 밖에 조건들 인게임과 동일하게 환경 구성<br>
                </li>
                <li>로직 대응을 위해 1:N 구조의 데이터 설계</li>
                <li>유저가 등록가능한 FORM과 화면 설계</li>
                <li>결과 로직 구현</li>
                <li><a href="http://www.lifebefore.co.kr/samgepan/test_simulation.php" target="_blank">모의 전투 테스트 페이지</a></li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>좌표 계산 기능</h2>
        <img src="./images/work/work_3/edit_4.png" alt="">
        <img src="./images/work/work_3/4.PNG" alt="">
        <div class="des">
            <strong>좌표의 분포를 고르게 하기 위해 이미 등록된 좌표의 일정범위는 등록할 수 없는 관리 시스템 개발</strong>

            <ul class="number_list">
                <li>관리자가 좌표 데이터를 등록/삭제 가능</li>
                <li>등록할 좌표를 검색하여 이미 등록된 좌표의 범위내인지 검사 가능</li>
                <li>좌표 범위 조건 : 등록 좌표로부터 사방 7칸</li>
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