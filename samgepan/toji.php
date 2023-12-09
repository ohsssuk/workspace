<?php include './include/head.php'; ?>
<?php
$bIsAdmin = ($_GET["user"] === 'master' ? true : false);
?>
<body>
    <?php include './include/header.php'; ?>
    <style>
        .warning{
            border: none;
            padding: 0;
            color: #fff;
        }
    </style>
    <h1 style="margin-top: 80px;">맹 토지 정보</h1>
    <form action="./point_save_proc.php" method="post">
        <div class="row">
            <label>닉네임</label>
            <input type="text" value="" name="nm" style="width:240px;">
        </div>
        <div class="row">
            <label>좌표</label>
            <input type="number" value="" name="px" placeholder="x 좌표">
            <input type="number" value="" name="py" placeholder="y 좌표">
        </div>
        <div class="row">
            <label>유저(봉쇄조, 일반)</label>
            <select name="user" id="">
                <option value="normal">일반</option>
                <option value="ranker">봉쇄조</option>
            </select>
        </div>
        <input type="hidden" name="type" value="wr">
        
        <div class=btn_wrap>
            <button type="button" onclick="searchPoint()">조회</button>
            <button type="button" onclick="setPoint()">저장</button>
            <button type="button" class="sub" onclick="searchBunsung()">분성 조회</button>
            <button type="button" class="sub" onclick="searchField()">특정칸 조회</button>
            <?php if($bIsAdmin) : ?>
            <button type="button" class="warning" onclick="forceSetPoint()">강제 저장</button>
            <?php endif; ?>
        </div>
        
        <div class="help">
            <p>- 닉네임, 주성 중심 좌표 입력 후, [조회]를 클릭하여 동맹원들과 중복되는 영토가 있는지 확인해주세요.</p>
            <p>- 중복되는 영토가 없다면 [저장]을 클릭하여 저장해주세요.</p>
            <p>- 주성 중심좌표 기준 일반 맹원은 5칸, 봉쇄조는 7칸이 소유 범위입니다. 봉쇄조 분들은 반드시 유저 정보를 '봉쇄조'로 선택해주세요.</p>
        </div>
    </form>
    <div>
<?php
$conn = mysql_connect('localhost', 'lifebefore1', '51121124o'); //mysql 연결
$db = mysql_select_db("lifebefore1", $conn);  //db 선택

$sql = " SELECT * ";
$sql.= " FROM rye_point ";
$sql.= " WHERE st = 'Y' ";
$sql.= " ORDER BY px ASC, py ASC ";

$result_set = mysql_query($sql);
$result_count = mysql_num_rows($result_set);
    
if($result_count > 0) :
?>
   
    <div class="toji_data">
    COUNT : <?=$result_count ?><br><br>
    <table>
    <tr>
        <th>닉네임</th>
        <th>X좌표</th>
        <th>Y좌표</th>
        <th>분류</th>
        
        <?php if($bIsAdmin) : ?>
        <th></th>
        <?php endif; ?>
    </tr>
    <?php while ($row = mysql_fetch_array($result_set)) : ?>
        <tr>
            <td><?=$row['nm'] ?></td>
            <td><?=$row['px'] ?></td>
            <td><?=$row['py'] ?></td>
            <td><?=$row['user'] == 'ranker' ? '봉쇄조' : '일반' ?></td>
            
            <?php if($bIsAdmin) : ?>
            <td>
            <button type="button" class="warning" onclick="deletePoint(<?=$row['id'] ?>, '<?=$row['nm'] ?>')" style="width:80px; height:24px; line-height:24px; font-size: 12px;">삭제</button>
            </td>
            <?php endif; ?>
        </tr>
    <?php endwhile; ?>
    </table>
<?php endif; ?>
    </div>
   
   
    <div class="toji_rule" style="">
        <div style="font-size: 18px; font-weight:bold;">토지법</div>
        <p class="p_title">아래 토지법은 167서버 [쟁]에 속한 모든 맹원에게 적용되는 자원주 토지법 입니다.</p>
        <p>-   자원주 토지법을 준수하지 않을 경우 최대 맹 퇴출까지 진행될 수 있습니다.</p>
        <p>-   [쟁]의 소속인원은 쟁맹에 속해있는 모든 부맹도 속한다.</p>
        <p>-   서로의 균형있는 발전과 최전방/봉쇄조의 공헌을 생각한 토지법 입니다.</p>
        <p>-   불합리하다 생각되는 부분에 대한 건의는 [지휘부]에게 건의 부탁드립니다.</p>

        <p class="p_title">1. [쟁][지] 의 소속 인원 자원지 고유영지</p>
        <p>-   주성중심좌표를 기준으로 사각형모양 7칸까지 고유영지로 인정한다.</p>
        <p>-   자신의 고유영지에 속한 자원은 개척을 허용한다.</p>

        <p class="p_title">2. [쟁][지] 의 소속 인원 자원지 이주 방법.</p>
        <p>-   자원주 이전을 희망하는 모든 사람은 군주(운유) 그리고 대사농(한량맨)님 또는 대홍려(대막리지)에게 정해진 방침대로 이주 희망 좌표를 보내서 처리해야 한다.</p>
        <p>-    자신의 주성을 이주하기 위해 워프를 할때는 해당인원에게 귓속말을 보낸 뒤 별도 승낙없이 워프한다.</p>
        <p>-    이주지역은 순차적으로 맹에서 개방하는 부분만 가능하다. 보편적으로 군단위로 열릴 예정이며 최대한 모든 인원이 골고루 분포할 수 있도록 지휘부는 노력한다.</p>

        <p class="p_title">3. [쟁][지] 의 소속 인원 자원주 확장영지 정책.</p>
        <p>-    자신의 고유영지개척 후 자원주내 확장 영지를 얻고자 할 때. 자투리 지역을 요청할 수 있으며 [특정칸 조회] 기능을 사용하여 해당 자원지 좌표를 검색하고, 다른 인원의 개인 영토가 아닌 경우 주변 맹원들과 합의 혹은 여건이 되는 사람이 별도의 허가 없이 개척한다.</p>
        <p>-    9렙/10렙 토지의 경우 자신의 고유영지내에 없는 자원만 추가로 1개씩 요청할 수 있으며 타 맹원의 영지에 속해있지 않아야 한다.</p>

        <p class="p_title">4. [쟁][지] 의 소속인원중 최전방/봉쇄조의 토지 정책.</p>
        <p>-    최전방/봉쇄조 그룹은 따로 지정된 자원주 지역(군)으로 이동하며 주성기준 사각형 9칸을 고유영지로 인정한다.</p>
        <p>-   그 외 자투리 지역에 대한 개척은 이웃간 협의 후 개척할 수 있다.</p>
        <p>-   그러나 무단워프/지정된 지역 이탈은 불가능하다.</p>
    </div>
    </div>

<a href="./territory.php" style="margin:20px 20px 0; font-size: 30px; font-weight:bold;">토지 영역 확인</a>

</body>
<script>
    function setPoint(){
        if(!$('[name="nm"]').val() || !$('[name="px"]').val() || !$('[name="py"]').val()){
            alert('닉네임과 주성 좌표를 입력해주세요.');
            return;
        }
        $('input[name="type"]').val('wr');
        $('form').submit();
    }
    function searchPoint(){
        if(!$('[name="nm"]').val() || !$('[name="px"]').val() || !$('[name="py"]').val()){
            alert('닉네임과 주성 좌표를 입력해주세요.');
            return;
        }
        $('input[name="type"]').val('search');
        $('form').submit();
    }
    function searchBunsung(){
        if(!$('[name="nm"]').val() || !$('[name="px"]').val() || !$('[name="py"]').val()){
            alert('닉네임과 주성 좌표를 입력해주세요.');
            return;
        }
        $('input[name="type"]').val('bunsung');
        $('form').submit();
    }
    function searchField(){
        $('input[name="type"]').val('field');
        $('form').submit();
    }
    function forceSetPoint(){
        if(!$('[name="nm"]').val() || !$('[name="px"]').val() || !$('[name="py"]').val()){
            alert('닉네임과 주성 좌표를 입력해주세요.');
            return;
        }
        
        if(confirm('강제 저장합니다. 본인의 주성,부성이거나 중복된 영토의 소유자와 합의가 된 경우만 저장해주세요.')){
            $('input[name="type"]').val('force');
            $('form').submit();
        }
    }
    function deletePoint(pId, sNm){
        if(confirm(sNm + '님 좌표를 정말 삭제할까요?')){
            $.ajax({
                url : "./point_save_proc.php",
                data : { id: pId, type: 'del' },
                type : 'post',
                success : function(data){
                    if(data){
                        alert("삭제 했습니다.");
                        location.reload();
                    }else{
                        alert("통신 실패. 12"); 
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ 
                    alert("통신 실패.");
                }
                ,beforeSend : function(){
                    $('.loading_wrap').addClass('on');
                }
                ,complete : function(){
                    $('.loading_wrap').removeClass('on');
                }
            });
        }
    }
</script>
<style>
    a{
        display: inline-block;
    }
    body{
        padding-bottom: 100px;
    }
    .help{
        margin: 40px 0 0;
        border: 1px solid #ddd;
        background: #fff;
        padding: 10px;
        line-height: 1.4;
        font-size: 12px;
    }
    .help p{
        margin:10px 0;
    }
    h1{
        margin: 20px 20px 0;
        font-size: 24px;
        font-weight: bold;
    }
    table{
        border: 1px solid #444444;
        border-collapse: collapse;
        text-align: center;
    }
    th{
        background: #eee;
    }
    td,th{
        padding: 5px 10px;
        border: 1px solid #000;
    }
    form{
        padding: 20px;
        margin: 0 20px;
        background: #eee;
        margin-top:20px;
    }
    .row{
        padding: 5px 0;
    }
    label{
        width: 200px;
        line-height: 30px;
        font-size: 15px;
        display: block;
    }
    input{
        height: 24px;
    }
    select{
        padding: 6px 10px;
    }
    button{
        width: 120px;
        height: 30px;
        margin-top : 4px;
    }
    button.sub{
        background: #566774;
    }
    button.warning{
        background: #f14747;
    }
    .toji_data{
        display: inline-block;
        max-width: 420px;
        margin: 30px 20px 0;
        vertical-align: top;
    }
    .toji_rule{
        border: 1px solid #ddd;
        max-width: 500px;
        display: inline-block;
        vertical-align: top;
        margin: 30px 0 0;
        padding: 20px;
        line-height: 1.4;
    }
    .toji_rule p{
        margin: 5px 0;
    }
    .toji_rule p.p_title{
        font-weight: bold;
        margin: 20px 0 10px; 
    }
</style>