<?php include './include/head.php'; ?>
<body>
<?php include './include/header.php'; ?>
<style>
.resource_list>li{
    display:inline-block;
    margin:5px 0;
    width: 110px;
}
.rcs_name{
    font-size: 16px;
}
.rcs_foot{
    font-size: 12px;
}
.send_set{
    width:100%;
    margin-top:40px;
    border:1px solid #bbb;
    padding:20px 10px;
    box-sizing: border-box;
}
.send_set input,.send_set select{
    box-sizing: border-box;
    width:100%;
    max-width: 400px;
    height:40px;
    margin-top:10px;
}
.send_set input[type='text']{
    padding:0 10px;
}
.send_set select{
    width:40%;
    max-width: 400px;
    height:40px;
    padding:0 10px;
    box-sizing: border-box;
    float:left;
}
.send_set input.submit_btn{
    width:59%;
    height:40px;
    margin-left:1%;
    cursor: pointer;
    background: #314250;
    color: #fff;
    position: relative;
    border:none;
}
.resource_list{
    border:1px solid #314250;
    padding-top:20px;
    margin-top:0;
    box-sizing: border-box;
}
.resource_title_f{
    text-align:center;
    margin-top:30px;
    transform: translateY(50%);
    box-sizing: border-box;
}
.resource_title_f p{
    display: inline-block;
    padding:5px 10px;
    background:#fff;
    font-size:18px;
    line-height: 1;
    color:#314250;
}
</style>
<script>
    $(document).ready(function(){
        var html = '';
        jawon.forEach(function(category){
            html += '<div class="resource_title_f"><p>'+category.name+'</p></div>';
            html += '<ul class="resource_list">';

            category.data.forEach(function(item,idx){
                html += ' <li data-idx = "'+idx+'">';
                html += '   <div class="rcs_name">'+item[0]+'</div>';
                html += '   <img src="'+item[1]+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'" alt="아이템 이미지" class="rcs_img">';
                html += '   <div class="rcs_foot">';
                html += '   <input type="text" placeholder="0" name="rcs_user_set[]" class="rcs_money"> 금화';
                html += '</div>';
                html += '</li> ';
            });

            html += '</ul>';

            $('.resource_box').html(html);
        });

        var userSetData = parseUserSetData('body');
        if(userSetData){
            $('.resource_list>li').each(function(){
                var $li = $(this);
                
                for (let i = 0; i < userSetData.length; i++) {
                    if(typeof userSetData[i].name == 'undefined' || userSetData[i].price == 'undefined'){
                        userSetData.splice(i, 1);
                        break;
                    }
                        
                    if($li.find('.rcs_name').text() == userSetData[i].name){
                        $(this).find('.rcs_money').val(userSetData[i].price);
                        userSetData.splice(i, 1);
                        console.log('종료');
                        break;
                    }
                }
            });
        }
        
        

        var para = document.location.href.split("?");
        if(para[1]!=null){
            var a = para[1].split(',');
            $('.resource_list>li').each(function(p_idx){
                if(typeof a[p_idx] != 'undefined'){
                    $(this).find('.rcs_money').val(a[p_idx]);
                }
            });
        }else{

        }

    });
</script>

<div class="main">
    <div class="userset">
        <h3>
            <p>- 다른 유저들의 리스트에서 필요한 부분만 수정할 수 있습니다. <span><a href="./usermake.php">#재료별 단가 페이지로 가기</a></span><br />재료별 단가 페이지에서 리스트를 선택하고 하단의 '나의 리스트로 가져오기'를 클릭하시면 리스트를 복사합니다.</p>
            <p>- 복사해온 리스트의 경우 1~10골드 정도의 차이는 시간에 따른 변동일 가능성이 크기 때문에 반영 안하시는 것이 편합니다.</p>
            <p>- 제공해주신 정보에 감사드립니다!</p>
        </h3>
        <form action="makeset_proc.php" method="post">
        <div class="resource_box">

        </div>
        <br /><br />
        <h3>가급적 모든 아이템 가격을 입력하는 것을 권장합니다.</h3>
        <div class="send_set">
            <div class="input_help">닉네임 혹은 메모 혹은 아이디</div>
            <input type="text" name="us_writer" placeholder="알아볼 수 있는 간단한 메모 혹은 아이디">
            <br /><br />
            <div class="input_help">서버 선택</div>
            <select name="us_server" id="us_server">
               <option value="2001 잃어버린 도시">2001 잃어버린 도시</option>
               <option value="2002 레드우드 숲">2002 레드우드 숲</option>
            </select>
            <input type="hidden" value="">
            <input class="submit_btn" type="button" value="리스트 만들기" onclick="setUserSet(this);">
        </div>
        
        <input type="hidden" name="us_set" value="">
        
        <?php if(isset($_POST['target_user_set_data'])) : ?>
            <input type="hidden" name="user_set_json" value="<?=htmlspecialchars($_POST['target_user_set_data']) ?>">
        <?php endif; ?>

        </form>
        <br>
        <br>
        <br>
    </div>
</div>
</body>
</html>