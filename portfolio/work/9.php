<div class="c_tv_content">
    <div class="point_cont">
        <h1>FrontEnd</h1>
        <h2>1Player 방식</h2>
        <img src="./images/work/work_7/2.png" alt="">
        <div class="des">
            <strong>1개의 비디오. 사용자 인터렉션으로 컨텐츠가 이동할 때는 이미지만 사용. 이미지 슬라이드 완료시 영상과 이미지를 교체하여 재생.</strong>

            <ul class="number_list">
                <li>슬라이드 이동시 영상이 이미지로 대체되지만 0초대 이미지를 자동 사용하기 때문에 이질감이 없음.</li>
                <li>하나의 비디오를 사용하기 때문에 리소스 누수가 없음.</li>
                <li>하나의 비디오의 사운드 권한(Chrome 사운드 정책 이슈)을 받기 때문에 웹뷰 환경에서 다른 영상을 재생하더라도 사운드를 제공하고 자동재생 할 수 있음.</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>무한 스크롤 동적 로드</h2>
        <img src="./images/work/work_7/3.png" alt="">
        <div class="des">
            <strong>현재 노출되는 요소만 로드하고 사용자 인터렉션에 따라 다음 요소를 동적 생성</strong>

            <ul class="number_list">
                <li>스와이프 이동 트랜지션 시간동안 다음 요소를 생성하고 비디오를 세팅하여 사용자의 대기시간을 최소화</li>
                <li>컨텐츠 갯수가 계속해서 많아지는 서비스 특성상 반드시 필요</li>
                <li>슬라이드 인터렉션 기능 사용을 위해 swiper.js 라이브러리 사용</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>스트리밍 서비스</h2>
        <div class="des">
            <strong>m3u8 미디어 파일 사용</strong>

            <ul class="number_list">
                <li>고용량 영상 서비스 효율 증대</li>
                <li>모든 디바이스, 브라우져 대응을 위해 videojs 라이브러리 사용</li>
                <li>Admin 파일 업로드시 미디어 타입 자동 변환 / 0초대 이미지 자동 생성</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h1>BackEnd</h1>
        <h2>유저별 개인화 추천 정렬</h2>
        <img src="./images/work/work_7/4.png" alt="">
        <div class="des">
            <strong>유저별로 최적화된 별개의 컨텐츠 순서 제공</strong>

            <ul class="number_list">
                <li>데이터 조회 효율을 위해 Redis Sorted Sets으로 KEY만 조회</li>
                <li>사용자가 이미 시청한 영상 제외(ZDIFF로 캐시 관리)</li>
                <li>실제 데이터 조회는 'User Personalization' KEY 캐시만 조회</li>
                <li>Admin에서 'ALL' 리스트 동기화 기능 제공</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>데이터 ES 조회</h2>
        <img src="./images/work/work_7/5.png" alt="">
        <div class="des">
            <strong>컨텐츠 정보를 가져올 때, mariaDB가 아닌 ElasticSearch에서 필요한 정보를 조회</strong>

            <ul class="number_list">
                <li>데이터 조회 효율 증대</li>
                <li>Admin에서 ES 데이터를 실제 데이터와 동기화 하는 기능 제공</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>Admin 통계 조회</h2>
        <img src="./images/work/work_7/6.png" alt="">
        <div class="des">
            <strong>사용자 인터렉션에 대한 로그 기록, 통계 조회</strong>

            <ul class="number_list">
                <li>버튼 클릭 기록</li>
                <li>영상 넘김, 이탈율, 선호도 파악</li>
                <li>각 영상별 시청 시간 기록</li>
                <li>기간별, 이용 환경별 조회</li>
                <li>유입 경로 조회</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .c_tv_content{
        line-height: 1.6;
    }
    .c_tv_content .point_cont:first-of-type{
        margin-top: 0;
    }
    .c_tv_content .point_cont{
        margin-top: 80px;
    }
    .c_tv_content h1{
        margin-top: 40px;
        margin-bottom: 40px;
        font-weight: 700;
        font-size: 18px;
    }
    .c_tv_content h2{
        font-size: 24px;
        font-weight: 700;
        margin: 10px 0;
        color: #000;
    }
    .c_tv_content strong{
        font-weight: 700;
    }
    .c_tv_content img{
        width: 100%;
        border: 1px solid #ddd;
    }
    .c_tv_content .des{
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