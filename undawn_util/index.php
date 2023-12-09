<?php include './include/head.php'; ?>
<body>
<?php include './include/header.php'; ?>

<script>
    $(document).ready(function(){
        initSetting.on();
    });
</script>

<div class="main">
    <div class="lb_calculator">
        <h1>제작 계산기</h1>
        <h2>완제품, 반제품의 재료와 가격을 계산합니다.</h2>
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
        <h3><i class="fas fa-exclamation-circle"></i> 매번 단가를 입력하기가 귀찮다면 자신만의 단가 목록을 만들어주세요. <a href="userset.php"><span>#만들러 가기</span></a></h3><br />
        <div class="search_box">
            <form action="./index.php" method="post" name="search_frm">
                <input type="text" name="search_name" placeholder="아이템명으로 검색하기" 
                value="<?=!empty($_POST['search_name']) ? $_POST['search_name'] : '' ?>">

                <?php if(isset($_POST['target_user_set_data'])) : ?>
                    <input type="hidden" name="user_set_json" value="<?=htmlspecialchars($_POST['target_user_set_data']) ?>">
                    <input type="hidden" name="target_user_set_data" value="<?=htmlspecialchars($_POST['target_user_set_data']) ?>">
                <?php endif; ?>

                <button type="submit">검색</button>
            </form>
        </div>
        <ul class="item_list">
            
        </ul>
        <div class="hide_section">
            <?php if(empty($_POST['target_user_set_data'])) : ?>
                <h3 class="empty_warning">
                    <div class="title">
                        <i class="fas fa-exclamation-circle"></i>
                        <p>현재 단가 목록을<br /> 불러오지 않았습니다.</p>
                    </div>
                    <div class="des">
                        <span>[재료별 단가]</span>페이지에서 다른 유저 혹은 자신이 만들어 놓은 데이터로 <span>자동입력</span> 할 수 있습니다. 
                        <a href="usermake.php"><span>#[재료별 단가] 가기</span></a>
                    </div>
                </h3>
            <?php else: ?>
                <h3 class="empty_warning on">
                    <div class="title">
                        <i class="fas fa-check-circle"></i>
                        <p>단가 데이터가 입력되었습니다.</p>
                    </div>
                </h3>
            <?php endif; ?>
            <div class="notice">
                <strong>[반제품으로 계산]버튼</strong>을 클릭하면 해당 반제품의 단가로 계산합니다. 
            </div>
            <div class="goods_box">
               
            </div>
            <button class="calcul_rcs" onclick="itemCalFinal();"><i class="fas fa-calculator"></i> 계산하기</button>
            <div class="final_page">
                <p class="all_hap">내역</p>
                <ul class="result_list">
                    
                </ul>
                <div class="notice">
                    클릭하여 가지고 있는 재료를 제외할 수 있습니다.
                </div>
                <p class="all_hap">원재료 가격 총합</p>
                <p class="final_money"><span>0</span> 금화</p>
                <div class="final_money_susu"></div>
            </div>
        </div>
        
        <br /><br />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 디스플레이_수평 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4126261814359480"
             data-ad-slot="5536762597"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        
        <footer>
            <div class="inner_footer">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWzjpZq12rJyPKXHHw7cPuKDcmIy2eWKn7Ckn64csRP4sLmw/viewform?usp=sf_link" target="_blank">건의사항 쓰기</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>