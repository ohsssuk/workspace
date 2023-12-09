<div class="wk_content">
    <div class="point_cont">
        <h2>반응형 레이아웃</h2>
        <img src="./images/work/work_6/2-a.png" alt="">
        <div class="des">
            <strong>반응형 레이아웃</strong>

            <ul class="number_list">
                <li>모바일, 패드, 웹의 3가지 형태 레이아웃 구성</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>Admin - 사진 관리</h2>
        <img src="./images/work/work_6/8.PNG" alt="">
        <div class="des">
            <strong>사진 관리 기능</strong>

            <ul class="number_list">
                <li>년도별 사진 업로드/수정</li>
            </ul>
        </div>
    </div>
    <div class="point_cont">
        <h2>Admin - 공지사항 관리</h2>
        <img src="./images/work/work_6/9.PNG" alt="">
        <img src="./images/work/work_6/10.PNG" alt="">
        <div class="des">
            <strong>공지사항 관리 기능</strong>

            <ul class="number_list">
                <li>공지사항 게시판 등록/수정/삭제</li>
                <li>ckEditor로 관리자 편집 기능 제공</li>
                <li>파일 업로드 관리</li>
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