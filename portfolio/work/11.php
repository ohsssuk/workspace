<div class="wk_content">
    <div class="gh_url">
        Production. <a target="_blank" href="https://dho-cal.lifebefore.co.kr">https://dho-cal.lifebefore.co.kr</a>
        <br>
        Github. <a target="_blank" href="https://github.com/ohsssuk/dho-cal">https://github.com/ohsssuk/dho-cal</a>
    </div>
    
    <div class="point_cont">
        <h2>컴포넌트 구조 설계</h2>
        <div class="des">
            <strong>디자인 패턴 레퍼런스를 참고하여 역할과 크기에 따른 분류와 재사용성을 염두에 두고 구성하도록 노력</strong>
            
            <div class="layout_view">
                <div class="box" style="border-color:#4b4b4b; width:100%;">
                    <p class="box_description" style="color:#4b4b4b">
                        <strong>Fleet</strong><br>
                        page의 client component 부분에 해당하는 container 역할
                    </p>
                    
                    <div class="box" style="border-color:#c12727; width:100%;">
                        <p class="box_description" style="color:#c12727">
                            <strong>FleetOutput</strong><br>
                            입력 받은 정보의 [계산, 계산 결과] 역할. 전체적인 비지니스 로직 포함
                        </p>
                        
                        <div class="box" style="border-color:#155b1d; width:100%;">
                            <p class="box_description" style="color:#155b1d">
                                <strong>CommonSection x n</strong><br>
                                공통 섹션의 디자인 요소
                            </p>
                            
                            <div class="box" style="border-color:#4b0a87; width:50%">
                                <p class="box_description" style="color:#4b0a87">
                                    <strong>Select(정렬 필터)</strong><br>
                                    기본 컴포넌트 : Select
                                </p>
                            </div>
                            
                            <div class="box" style="border-color:#c12727; width:100%;">
                                <p class="box_description" style="color:#c12727">
                                    <strong>ResultTable</strong><br>
                                    결과 단순 표시용 테이블
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box" style="border-color:#2c53a9; width:100%;">
                        <p class="box_description" style="color:#2c53a9">
                            <strong>FleetInput</strong><br>
                            사용자의 [입력] 역할만 담당. 전체적인 비지니스 로직 포함
                        </p>
                        
                        <div class="box" style="border-color:#155b1d; width:100%;">
                            <p class="box_description" style="color:#155b1d">
                                <strong>CommonSection x n</strong><br>
                                공통 섹션의 디자인 요소
                            </p>
                            
                            <div class="box" style="border-color:#4b0a87; width:50%">
                                <p class="box_description" style="color:#4b0a87">
                                    <strong>Select(정렬 필터)</strong><br>
                                    기본 컴포넌트 : Select
                                </p>
                            </div>
                            
                            <div class="box" style="border-color:#2c53a9; width:100%;">
                                <p class="box_description" style="color:#2c53a9">
                                    <strong>ShipItemList</strong><br>
                                    선박&부품 공통 컴포넌트의 List
                                </p>
                                
                            
                                <div class="box" style="border-color:#2c53a9; width:100%;">
                                    <p class="box_description" style="color:#2c53a9">
                                        <strong>ShipItem x n</strong><br>
                                        선박&부품 공통 컴포넌트
                                    </p>
                                
                                    <div class="box" style="border-color:#4b0a87; width:50%">
                                        <p class="box_description" style="color:#4b0a87">
                                            <strong>Checkbox(사용 여부 선택)</strong><br>
                                            기본 컴포넌트 : Checkbox
                                        </p>
                                    </div>
                                    <div class="box" style="border-color:#4b0a87; width:50%">
                                        <p class="box_description" style="color:#4b0a87">
                                            <strong>Input(수치 입력)</strong><br>
                                            기본 컴포넌트 : Input
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="box" style="border-color:#4b0a87; width:50%">
                                    <p class="box_description" style="color:#4b0a87">
                                        <strong>Button(Add ShipItem)</strong><br>
                                        기본 컴포넌트 : Button
                                    </p>
                                </div>
                            </div>
                        </div>
                            
                        <div class="box" style="border-color:#2c53a9; width:100%;">
                            <p class="box_description" style="color:#2c53a9">
                                <strong>BottomMenuBar</strong><br>
                                입력 받은 정보 전체를 계산, 저장, 초기화 하는 CTA 영역<br>
                                FleetInput에서 전달한 함수를 받아서 사용
                            </p>
                        </div>
                            
                        <div class="box" style="border:1px dashed #2c53a9; width:100%;">
                            <p class="box_description" style="color:#2c53a9">
                                <strong>Popup(입력 데이터 json 저장, 적용 역할)</strong><br>
                                현재 컨테이너에서 사용할 Popup
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="number_list">
                <li>계산과 사용자 인터렉션에 관련된 <strong>비지니스 로직은 FleetInput, FleetOutput의 컨테이너에서만 관리</strong>하도록 설계<br>- 목적 : MVC 패턴의 Controller 역할</li>
                <li>기본 컴포넌트는 재사용이 가능하도록 고정적이지 않고 유연한 속성을 갖도록 설계<br>- 목적 : 디자인 시스템으로 재사용성 강화</li>
                <li>반복되는 디자인 요소의 표시 역할만 하는 디자인 컴포넌트 추가(CommonSection)<br>- 목적 : 디자인 시스템으로 불필요한 반복 제거</li>
                <li>List와 ListItem은 컨테이너에서 전달한 데이터로 단순히 화면을 render하는 목적만을 위해 사용하도록 설계<br>- 목적 : 역할별로 화면 구성을 위한 컴포넌트를 분리하여 유지/보수 효율 증가</li>
                <li>사용자 인터렉션이 일어나는 Fleet을 제외한 page의 다른 부분들은 서버 컴포넌트로 사용<br>- 목적 : <strong>검색 엔진 최적화 (SEO)</strong> 데이터 수집</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>데이터 중심의 기능 구현</h2>
        <img src="./images/work/work_11/e2.png" alt="">
        <div class="des">
            <strong>각 객체가 독립적으로 능력치를 입력 받고 전체 계산 로직에 사용될 수 있어야함</strong>

            <ul class="number_list">
                <li>선박, 부품을 입력의 역할만을 위한 하나의 컴포넌트로 구성</li>
                <li>전체적인 데이터를 관리하는 container 컴포넌트를 사용</li>
                <li>저장되어야 하는 데이터(능력치)와 동적 변경이 필요한 항목(index, isUse 등)을 분리하여 type 설정</li>
            </ul>
        </div>
        <div class="shoot">기존 DOM 중심으로 기능을 구현했던 토이프로젝트들과 다르게 데이터 방식이 훨씬 효율적이라고 느낌</div> 
    </div>
    
    <div class="point_cont">
        <h2>공통 컴포넌트 구성</h2>
        <div class="des">
            <strong>Input, Checkbox, Select, CommonSection 등의 재사용 가능한 공통요소 작업 연습</strong>

            <ul class="number_list">
                <li>토스 레퍼런스 참고하여 구상</li>
                <li>다른 페이지에서 사용하여 재사용성에 대한 구상</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>가능한 함대 구성(선박 7개 조합)과 합산, 평균 능력치 표시</h2>
        <img src="./images/work/work_11/e3.png" alt="">
        <div class="des">
            <strong>N개의 선박중 최적의 평균 능력치를 가지는 7개의 선박을 가진 함대 조합을 추천하는 기능</strong>

            <ul class="number_list">
                <li>하나에 선박에는 장갑, 충각, 닻이 하나씩 장착되고 7개의 선박에 능력치의 평균을 계산</li>
                <li>선박에 조합 알고리즘으로 모든 함대 경우의 수를 표시</li>
                <li><strong>정렬 기능</strong></li>
                <li><strong>리스트 표시 개수 설정 기능</strong></li>
                <li>게임내에서 중요한 능력치인 내파, 돌파, 쇄빙에 대하여 <strong>최저 평균값</strong>을 만족할 수 있도록 필터링(예정)</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>부품의 수치 특성 표시, 정렬 기능</h2>
        <img src="./images/work/work_11/e4.png" alt="">
        <div class="des">
            <strong>동일 부품군을 비교하여 최대 효율 표시</strong>

            <ul class="number_list">
                <li>부품은 개별 능력치에 맞게 정렬하여 isUse가 true인 순서대로 7개 사용. 순서는 정렬기능으로 사용자가 변경이 가능</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>입력값 저장 기능</h2>
        <img src="./images/work/work_11/e5.png" alt="">
        <div class="des">
            <strong>입력 값이 많기 때문에 UX 편의성을 위한 저장 기능을 구현</strong>

            <ul class="number_list">
                <li>각 유저는 자신의 데이터만 사용하기 때문에 클라이언트 측에 데이터 저장</li>
                <li>쿠키, 로컬 스토리지 사용시 제한 용량에 의한 저장이슈로 IndexedDB 사용</li>
                <li>[사용자 요청]디바이스 변경이나 기록 삭제에 대비하여 Json 데이터 사용 가능하도록 추가</li>
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
    
    .layout_view{
        display: flex;
        box-sizing: border-box;
        margin-top:12px;
    }
    .layout_view .box{
        margin-top: 10px;
        border:1px solid #fff;
        padding: 10px;
        font-size: 14px;
        box-sizing: border-box;
        background: #fff;
    }
    .layout_view .box:hover{
        background: #fffed5;
    }
    .layout_view .box_description{
        font-size: 14px;
        line-height: 20px;
    }
    .layout_view .box_description strong{
        font-size: 16px;
    }
</style>