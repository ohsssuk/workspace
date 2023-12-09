<?php include './include/head.php'; ?>
<body>
    <?php include './include/header.php'; ?>
    
    <style>
        .main{
            padding-left: 5px;
            padding-right: 5px;
            box-sizing: border-box;
        }
        h3{
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .select_build{
            background: #535171;
            padding: 15px;
            font-size: 0;
            margin-bottom: 10px;
        }
        .select_build select{
            border:1px solid #aaa;
            padding: 5px 12px;
            margin-right: 5px;
            font-size: 17px;
            box-sizing: border-box;
        }
        .resource_wrap{
            border: 1px solid #bbb;
            font-size: 0;
            text-align: center;
        }
        .resource_head{
            background: #d6d4c7;
            color:#5a4b41;
            font-weight: bold;
            padding-bottom: 10px;
            font-size:14px;
        }
        .resource_head img{
            width: 50px;
        }
        .resource_wrap .kind{
            width:33.3%;
            display: inline-block;
            font-size: 16px;
            box-sizing: border-box;
        }
        .resource_wrap .kind input{
            width: 80%;
            margin-top:5px;
            height: 40px;
            padding: 5px;
            box-sizing: border-box;
            text-align: right;
        }
        .resource_wrap .kind:first-of-type{
            border-right: 1px solid #bbb;
        }
        .resource_wrap .kind:last-of-type{
            border-left: 1px solid #bbb;
        }
        .col{
            padding:10px 0;
            border-top:1px solid #eee;
            line-height: 1.3;
        }
        .col_name{
            font-size: 13px;
            padding: 5px 0;
        }
        .col_content{
            padding: 5px 0;
        }
        .col.need{
            background: #f6f4e9;
        }
        .col.need .col_content{
            font-size: 20px;
            font-weight: bold;
            color:#5a4b41;
        }
        .btn{
            border-radius: 8px;
            width: 100%;
            height: 54px;
            font-size: 18px;
            margin-top: 10px;
            position: relative;
        }
        .btn:active{
            top: 1px;
        }
        .output_box{
            margin-top: 60px;
            border-bottom:1px solid #ddd;
        }
        .output_box .row{
            padding:10px;
            line-height: 1.3;
            border-top:1px solid #ddd;
        }
        .output_box .row:nth-child(even){
            background: #f5f5f5;
        }
        .output_box .row .title span{
            display:inline-block;
            color:#fff;
            background: #5e7283;
            font-size: 14px;
            padding: 2px 8px;
            border-radius: 4px;
        }
        .output_box .row .title .help{
            font-size: 12px;
            color: #333;
            margin-top: 4px;
        }
        .output_box .row .title .help strong{
            font-weight: bold;
        }
        .output_box .row .content{
            font-size: 20px;
            margin-top: 10px;
        }
        .output_box .row .content.time_need{
            font-size: 0;
            background: #ffffff;
            text-align: center;
        }
        .time_need > div{
            width: 33.3%;
            display: inline-block;
            border:1px solid #ddd;
            font-size: 16px;
            box-sizing: border-box;
        }
        .time_need > div > div{
            border-top: 1px solid #ddd;
            padding: 5px 0;
        }
        .time_need > div > div:first-of-type{
            border-top: none;
        }
        .time_need > div > div span{
            font-size: 12px;
        }
        .resource_ic{
            width:180px;
            text-align: center;
            background-color: #f6f4e9;
            color:#5a4b41;
            font-size: 20px;
            border: 1px solid #5a4b41;
            border-radius: 4px;
            overflow: hidden;
            padding-bottom: 10px;
            display: inline-block;
            font-weight: bold;
        }
        .resource_ic::before{
            color: #5a4b41;
            font-size: 14px;
            display: block;
            padding: 40px 0 5px;
            background-color: #d6d4c7;
            background-position: top;
            background-size: 40px;
            background-repeat: no-repeat;
            z-index: 1;
            margin-bottom: 10px;
        }
        .resource_ic.wood::before{
            content: '목재';
            background-image:  url('./images/resource/wood.png');
        }
        .resource_ic.iron::before{
            content: '철광';
            background-image:  url('./images/resource/iron.png');
        }
        .resource_ic.stone::before{
            content: '석재';
            background-image:  url('./images/resource/stone.png');
        }
    </style>
    
    <div class="main">
        <h1 class="site_title">
            대항오 계산기
        </h1>
        <h2>선박 비교</h2>
        
        <div class="help_word">
            <div>이용 가이드</div>
            <p>- 우선순위가 높은 건물(군왕전, 군영) 업그레이드 <strong>필요 자원 확인</strong></p>
            <p>- 필요자원의 수급을 기다리면서 남는 <strong>여유 자원을 확인</strong>하여 다른 컨텐츠에 투자. <br>ex)석재의 수급 대기시간이 가장 많은 경우, 목표로 하는 군영 업그레이드 예정에 지장을 주지 않으면서 남는 목재와 철광만큼을 징병에 투자하고 싶을 때.</p>
            <p>시간당 생산량을 분당 생산량으로 나눠서 계산하기 때문에 약간의 오차가 생길 수 있습니다.</p>
            <p>- 필요 정보 입력 후 <strong>[계산하기]</strong> 클릭</p>
            <p><strong>보유량</strong> : 현재 자원 보유량 입력</p>
            <p><strong>생산량</strong> : 인게임내 표시된 자원 생산량 입력</p>
            <p><strong>추가 생산</strong> : 둔전, 임무 보상, 시련 보상 등으로 얻는 추가 자원</p>
            <div class="made_by">
                Made by. 태평양1. 직업윤리
            </div>
        </div>
        
        <br />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 디스플레이_수평 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4126261814359480"
             data-ad-slot="5536762597"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             window.onload = function() {
                (adsbygoogle = window.adsbygoogle || []).push({});
             }
        </script>
        <br />
        
        <div class="input_box">
            <h3>선박 정보 입력</h3>
            
            <h3>자원 입력</h3>
            <div id="resource_input" class="resource_wrap">
                <div class="wood kind">
                    <div class="resource_head">
                        <img src="./images/resource/wood.png" alt="목재">
                        <p>목재</p>
                    </div>
                    <div class="col need">
                        <div class="col_name">필요자원</div>
                        <div class="col_content">
                            0
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">보유량</div>
                        <div class="col_content">
                            <input type="number" name="base" value="0" placeholder="보유한 자원량 입력">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">생산량</div>
                        <div class="col_content">
                            <input type="number" name="income" value="" placeholder="생산량 입력">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">추가생산<br>(둔전, 보상 등)</div>
                        <div class="col_content">
                            <input type="number" name="extra[]" value="0">
                            <input type="number" name="extra[]" value="0">
                            <input type="number" name="extra[]" value="0">
                        </div>
                    </div>
                </div>
                
                <div class="iron kind">
                    <div class="resource_head">
                        <img src="./images/resource/iron.png" alt="철광">
                        <p>철광</p>
                    </div>
                    <div class="col need">
                        <div class="col_name">필요자원</div>
                        <div class="col_content">
                            0
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">보유량</div>
                        <div class="col_content">
                            <input type="number" name="base" value="0" placeholder="보유한 자원량 입력">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">생산량</div>
                        <div class="col_content">
                            <input type="number" name="income" value="" placeholder="생산량 입력">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">추가생산<br>(둔전, 보상 등)</div>
                        <div class="col_content">
                            <input type="number" name="extra[]" value="0">
                            <input type="number" name="extra[]" value="0">
                            <input type="number" name="extra[]" value="0">
                        </div>
                    </div>
                </div>
                
                <div class="stone kind">
                    <div class="resource_head">
                        <img src="./images/resource/stone.png" alt="석재">
                        <p>석재</p>
                    </div>
                    <div class="col need">
                        <div class="col_name">필요자원</div>
                        <div class="col_content">
                            0
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">보유량</div>
                        <div class="col_content">
                            <input type="number" name="base" value="0" placeholder="보유한 자원량 입력">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">생산량</div>
                        <div class="col_content">
                            <input type="number" name="income" value="" placeholder="생산량 입력">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col_name">추가생산<br>(둔전, 보상 등)</div>
                        <div class="col_content">
                            <input type="number" name="extra[]" value="0">
                            <input type="number" name="extra[]" value="0">
                            <input type="number" name="extra[]" value="0">
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="btn" onclick="buildCal.getResult()">계산하기</button>
        </div>
        
        <div class="output_box">
            <div class="row">
                <div class="title">
                    <span>여유 자원</span>
                    <div class="help">총 필요 대기시간까지 기다릴 경우, 가장 늦게 준비되는 자원을 제외한 여유자원입니다. <strong>표시되는 여유자원만큼을 사용해도 업그레이드에 필요한 자원 총 대기시간은 변하지 않습니다.</strong></div>
                </div>
                <div id="possible_resource_box" class="content"></div>
            </div>
            <div class="row">
                <div class="title">
                    <span>총 필요 대기시간</span>
                    <div class="help">모든 자원이 충분질 때까지 필요한 시간입니다.</div>
                </div>
                <div id="max_need_main" class="content"></div>
            </div>
            <div class="row">
                <div class="title">
                    <span>가장 부족한 자원</span>
                </div>
                <div id="most_need_res" class="content"></div>
            </div>
            <div class="row">
                <div class="title">
                    <span>자원별 현황</span>
                    <div class="help">각 자원별로 필요한 시간과 정보입니다.</div>
                </div>
                <div id="time_need_table" class="content time_need">
                    <div class="wood">
                        <div>목재</div>
                        <div>
                            <span>남은 시간</span>
                            <p class="time"></p>
                        </div>
                        <div>
                            <span>추가 필요량</span>
                            <p class="need"></p>
                        </div>
                    </div>
                    <div class="iron">
                        <div>철광</div>
                        <div>
                            <span>남은 시간</span>
                            <p class="time"></p>
                        </div>
                        <div>
                            <span>추가 필요량</span>
                            <p class="need"></p>
                        </div>
                    </div>
                    <div class="stone">
                        <div>석재</div>
                        <div>
                            <span>남은 시간</span>
                            <p class="time"></p>
                        </div>
                        <div>
                            <span>추가 필요량</span>
                            <p class="need"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <br />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 디스플레이_수평 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4126261814359480"
             data-ad-slot="5536762597"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             window.onload = function() {
                (adsbygoogle = window.adsbygoogle || []).push({});
             }
        </script>
        <br />
    </div>
    
    <?php include 'include/footer.php'; ?>
</body>
<script>
    
</script>