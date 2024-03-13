<div class="wk_content">
    <div class="gh_url">Github. <a target="_blank" href="https://github.com/ohsssuk/dho-cal">https://github.com/ohsssuk/dho-cal</a></div>
    <div class="point_cont">
        <h2>데이터 중심의 기능 구현</h2>
        <img src="./images/work/work_11/e1.png" alt="">
        <div class="des">
            <strong>각 객체가 독립적으로 능력치를 입력 받고 전체 계산 로직에 사용될 수 있어야함</strong>

            <ul class="number_list">
                <li>선박, 부품을 입력의 역할만을 위한 하나의 컴포넌트로 구성</li>
                <li>전체적인 데이터를 관리하는 container인 함대 컴포넌트를 사용</li>
                <li>저장되어야 하는 데이터(능력치)와 동적 변경이 필요한 항목(index, isUse 등)을 분리하여 type 설정</li>
            </ul>
        </div>
        <div class="shoot">기존 DOM 중심으로 기능을 구현했던 토이프로젝트들과 다르게 데이터 방식이 훨씬 효율적이라고 느낌</div> 
    </div>
    
    <div class="point_cont">
        <h2>공통 컴포넌트 구성</h2>
        <div class="des">
            <strong>Input, Checkbox, Select 등의 재사용 가능한 공통요소 작업 연습</strong>

            <ul class="number_list">
                <li>토스 레퍼런스 참고하여 구상</li>
                <li>다른 페이지에서 사용하여 재사용성에 대한 구상(예정)</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>입력값 저장 기능</h2>
        <div class="des">
            <strong>입력 값이 많기 때문에 UX 편의성을 위한 저장 기능을 구현</strong>

            <ul class="number_list">
                <li>각 유저는 자신의 데이터만 사용하기 때문에 클라이언트 측에 데이터 저장</li>
                <li>쿠키, 로컬 스토리지 사용시 제한 용량에 의한 저장이슈로 IndexedDB 사용</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>조합 알고리즘을 사용하여 최적의 구성을 추천(작업 진행중)</h2>
        <img src="./images/work/work_11/e2.png" alt="">
        <div class="des">
            <strong>N개의 선박중 최적의 평균 능력치를 가지는 7개의 선박을 가진 함대 조합을 추천하는 기능</strong>

            <ul class="number_list">
                <li>하나에 선박에는 장갑, 충각, 닻이 하나씩 장착되고 7개의 선박에 능력치의 평균을 계산</li>
                <li>선박에 조합 알고리즘으로 모든 함대 경우의 수를 표시</li>
                <li>부품은 개별 능력치에 맞게 정렬하여 isUse가 true인 순서대로 7개 사용. 순서는 정렬기능으로 사용자가 변경이 가능</li>
                <li>게임내에서 중요한 능력치인 내파, 돌파, 쇄빙에 대하여 <strong>최저 평균값</strong>을 만족할 수 있도록 필터링</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .wk_content{
        line-height: 1.6;
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
    .wk_content .gh_url{
        margin-bottom: 40px;
    }
    .wk_content .gh_url a{
        color:#0052ff;
    }
    .wk_content .des{
        margin-top: 10px;
    }
    .wk_content .shoot{
        margin-top: 20px;
        text-decoration: underline;
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