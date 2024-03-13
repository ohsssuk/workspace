<div class="wk_content">
    <div class="point_cont">
        <h2>API를 통한 편의기능 제공</h2>
        <img src="./images/work/work_4/edit_1.png" alt="">
        <div class="des">
            <strong>종류,단계별로 다른 필요 자원 데이터를 정리하고 시간당 증가량을 입력하여 최소 대기시간 계산</strong>

            <ul class="number_list">
                <li>PC유저의 간단한 사용이 용이하도록 반응형 구조</li>
                <li>API로 검색된 데이터를 웹화면 구현</li>
                <li>아이템 키워드로 검색 기능</li>
                <li>조합 아이템의 계산 편의성을 높히기 위한 UX 구현</li>
                <li>유저를 키워드로 검색하고 조건에 맞게 웹화면으로 출력</li>
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