<!DOCTYPE html>
<html lang="ko">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/header.php'; ?>
<div class="main">
    <h1>자원 계산기</h1>
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
    <div class="info_helper">
        <p>계산할 자원을 상단 탭에서 선택해주세요.</p>
        <p>가진 아이템 갯수를 입력해주세요.</p>
        <p>하단 <strong>계산하기</strong>를 클릭해주세요.</p>
        <p>약탈 방지 목적으로 필요한 자원만 꺼내 쓰기 위해 만들었습니다.</p>
        <p>가속 이벤트 때, 분 단위를 계산하기 좋습니다.</p>
    </div>
    <ul class="resource_kind">
        <li>식량</li>
        <li>목재</li>
        <li>석재</li>
        <li>금화</li>
        <li>가속</li>
    </ul>
    <table class="resource_manager">
        <tr>
            <th width="20%">종류</th>
            <th width="40%">양</th>
            <th width="40%">갯수</th>
        </tr>
        <tr>
            <td colspan="3" style="padding:20px 10px;">상단의 자원종류 탭을 클릭해주세요</td>
        </tr>
    </table>
    <button type="button" class="resource_manager_btn">계산하기</button>
    <div class="resource_manager_result">
        <p class="resource_counting_result"></p>
    </div>
    
    <?php include 'include/footer.php'; ?>
</div>
</body>
</html>