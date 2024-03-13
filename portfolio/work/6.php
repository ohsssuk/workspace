<div class="wk_content">
    <div class="point_cont">
        <h2>Admin - 작업물 관리</h2>
        <img src="./images/work/work_5/3.PNG" alt="">
        <img src="./images/work/work_5/7.PNG" alt="">
        <div class="des">
            <strong>작업물 관리 목적의 제공</strong>

            <ul class="number_list">
                <li>작업물 추가, 수정, 삭제</li>
                <li>분류 중복 선택 가능</li>
                <li>정렬 순서 변경 기능</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>Admin - 통계</h2>
        <img src="./images/work/work_5/4.PNG" alt="">
        <div class="des">
            <strong>방문자 정보</strong>

            <ul class="number_list">
                <li>지원 별로 쿼리스트링 파라미터 값을 수정하여 방문자 정보 기록</li>
                <li>조회 프로젝트 기록 조회</li>
                <li>방문 일자 조회</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <img src="./images/work/work_5/5.PNG" alt="">
        <div class="des">
            <strong>작업물 선호도 파악을 위한 통계 제공</strong>

            <ul class="number_list">
                <li>프로젝트별 조회 시간, 횟수 기록</li>
                <li>방문자가 주의 깊게 본 작업물 위주의 어필 가능</li>
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