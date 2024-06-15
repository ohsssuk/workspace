<div class="wk_content">
    <div class="gh_url">
        Production. <a target="_blank" href="https://ohsssuk.github.io/study-en-test/">https://ohsssuk.github.io/study-en-test/</a>
        <br>
        Github. <a target="_blank" href="https://github.com/ohsssuk/study-en-test">https://github.com/ohsssuk/study-en-test</a>
    </div>
    
    <div class="point_cont">
        <h2>기능 구현</h2>
        <img src="./images/work/work_12/bg-ent.png" alt="">
        <div class="des">
            <strong>next.js 학습용 문제풀이 프로토타입 기능 개발</strong>

            <ul class="number_list">
                <li>각 문제세트가 2~4개의 문제, 해설, 지문을 포함</li>
                <li>각 문제는 2~4개의 객관식 선택지, 해설, 지문, 정답을 포함</li>
                <li>사용자는 세트를 풀이하고 정답 확인시 해설을 볼 수 있음</li>
                <li>테스트에 해당하는 모든 문제를 풀면 결과창에서 각 세트의 해설로 넘어갈 수 있음</li>
                <li>모든 과정은 세트 풀이 단위로 로컬스토리지에 저장</li>
                <li>각 세트별 소요시간을 저장</li>
            </ul>
        </div>
        <div class="des" style="margin-top:50px;">
            <strong>기능 수행</strong>

            <ul class="number_list">
                <li>테스트 시작</li>
                <li>문제 세트 풀이(타이머 동작)</li>
                <li>문세 세트 풀이 완료시 해설 표시(타이머 멈춤)</li>
                <li>2, 3번을 반복하여 모든 테스트 완료(타이머 멈춤)</li>
                <li>결과 확인</li>
                <li>결과 확인 화면에서 각 문제 세트 풀이로 이동 가능</li>
                <li>풀이 도중 이탈시 풀이중이던 기록 보존</li>
            </ul>
        </div>
    </div>
    
    <div class="point_cont">
        <h2>구조</h2>
        <div class="des" style="display:flex; flex-direction:column; gap:40px;">
            <div class="compo">
                <h3>페이지 (Page)</h3>
                <strong>App 라우팅 기준</strong>

                <ul>
                    <li>라우팅</li>
                    <li>메타데이터 정보</li>
                    <li>하나 또는 여러 개의 Container를 조합하여 구성</li>
                </ul>
            </div>
            
            <div class="compo">
                <h3>컨테이너 (Container)</h3>
                <strong>독립적인 기능을 수행하는 페이지 모듈 단위</strong>

                <ul>
                    <li>SSR, CSR 방식 분류</li>
                    <li>의미상의 기능 단위</li>
                    <li>상태에 따라 화면이 크게 바뀌는 경우 하위 Container로 분리하여 사용</li>
                    <li>재사용성 낮음</li>
                    <li>비즈니스 로직이 위치</li>
                </ul>
            </div>
            
            <div class="compo">
                <h3>컴포넌트 (Component)</h3>
                <ul>
                    <li>재사용성이 높은 UI 단위 요소(버튼, 아이콘, 로딩 등)</li>
                    <li>재사용성이 낮아도 반복되거나 의미상 분리되는 경우에 사용(QuestionList, Question, OptionList)</li>
                </ul>
            </div>
            
            <div class="compo">
                <h3>데이터 구성</h3>
                <ul>
                    <li>표시용 데이터</li>
                    <li class="in-li">
                        <ul>
                            <li>모든 사용자에게 동일하게 보여지는 정적 데이터(API 가정)</li>
                            <li>문제세트, 문제, 선택지, 해설 등</li>
                        </ul>
                    </li>
                    <li>사용자별 기록 데이터</li>
                    <li class="in-li">
                        <ul>
                            <li>문제와 선택한 답</li>
                            <li>문제세트별 경과시간(해당 기록이 완료 여부도 판단)</li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="compo">
                <h3>페이지 표시 상태(enum)</h3>
                <ul>
                    <li>테스트 시작 전</li>
                    <li>테스트 진행 중</li>
                    <li class="in-li">
                        <ul>
                            <li>사용자가 세트 완료 기록이 있는 경우: 해설 상태</li>
                            <li>사용자가 세트 완료 기록이 없는 경우: 문제 풀기 상태</li>
                        </ul>
                    </li>
                    <li>테스트 종료</li>
                </ul>
            </div>
            
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
    
    .compo h3{
        font-size: 20px;
        font-weight: 600;
        border-bottom: 1px solid #ddd;
        padding: 5px 0;
        margin-bottom: 10px;
    }
    .compo ul{
        display: flex;
        flex-direction: column;
        gap: 4px;
        margin-top: 20px;
    }
    .compo ul li{
        padding-left: 12px;
        position: relative;
    }
    .compo ul li::before {
        content: '･';
        position: absolute;
        left: 0;
        width: 12px;
        text-align: center;
    }
    
    .compo ul li.in-li::before {
        display: none;
    }
    .compo ul li ul{
        margin-left: 20px;
        margin-top: 0;
    }
</style>