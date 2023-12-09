var food = {
    name : '식량',
    unit : '개',
    img : 'item_food.png',
    amount : [1000,10000,50000,150000,500000,1500000,5000000],
    info : [1000,10000,50000,150000,500000,1500000,5000000],
    color : ['gray','green','green','blue','blue','purple','purple']
};
var wood = {
    name : '목재',
    unit : '개',
    img : 'item_wood.webp',
    amount : [1000,10000,50000,150000,500000,1500000,5000000],
    info : [1000,10000,50000,150000,500000,1500000,5000000],
    color : ['gray','green','green','blue','blue','purple','purple']
};
var stone = {
    name : '석재',
    unit : '개',
    img : 'item_stone.webp',
    amount : [750,7500,37500,112500,375000,1125000,3750000],
    info : [750,7500,37500,112500,375000,1125000,3750000],
    color : ['gray','green','green','blue','blue','purple','purple']
};
var gold = {
    name : '금화',
    unit : '개',
    img : 'item_gold.png',
    amount : [500,3000,15000,50000,200000,600000,2000000],
    info : [500,3000,15000,50000,200000,600000,2000000],
    color : ['gray','green','green','blue','blue','purple','purple']
};
var speed = {
    name : '가속',
    unit: '',
    img : 'item_speed.png',
    amount : [1,5,10,15,30,60,60*3,60*8,60*15,60*24,60*24*3,60*24*7,60*24*30],
    info : ['1분','5분','10분','15분','30분','60분','3시간','8시간','15시간','24시간','3일','7일','30일'],
    color : ['green','green','green','green','green','green','blue','blue','blue','blue','purple','purple','gold']
};

var data = [
   food,wood,stone,gold,speed
];
var now_resource;

$(document).ready(function(){
    $('.resource_kind > li').on('click',function(){
        $('.resource_kind > li').removeClass('on');
        $(this).addClass('on');
        
        var idx = $(this).index();
        
        var html= '';
        html += '<tr>';
        html += '   <th width="20%">종류</th>';
        html += '   <th width="40%">양</th>';
        html += '   <th width="40%">갯수</th>';
        html += '</tr>';
        for(var i =0; i<data[idx].amount.length; i++){
            html += '<tr class="counting_manager">';
            html += '   <td class="resource_manager_thumb">';
            html += '       <div class="resource_manager_thumb_img bg_'+data[idx].color[i]+'">';
            html += '           <p>'+number_format(data[idx].info[i])+'</p>';
            html += '           <img src="./images/' + data[idx].img + '">';
            html += '       </div>';
            html += '   </td>';
            html += '   <td class="resource_manager_info">'+data[idx].name+' '+number_format(data[idx].info[i])+data[idx].unit+'</td>';
            html += '   <td class="resource_manager_input">';
            html += '       <input type="text" name="resource_manager_cnt" placeholder="0">';
            html += '       <input type="hidden" value="'+data[idx].amount[i]+'" name="resource_manager_amount">';
            html += '   </td>';
            html += '</tr>';
        }
        
        $('.resource_manager').html(html);
        now_resource = data[idx].name;
        
        $('.resource_manager_result').removeClass('on');
    });
    
    $('.resource_manager_btn').on('click',function(){
        var all_resource = 0;
        if($('.counting_manager').length > 0){
            $('.counting_manager').each(function(){
                var cnt = Number($(this).find('input[name="resource_manager_cnt"]').val());
                if(cnt == '' || isNaN(cnt)){
                    cnt = 0;
                }
                var amount = $(this).find('input[name="resource_manager_amount"]').val();
                
                var info = $(this).find('.resource_manager_info').text();

                all_resource += amount * cnt;
            });
            $('.resource_manager_result').addClass('on');
            
            if(now_resource != '가속'){
                $('.resource_counting_result').html(
                    now_resource + '<br /><span>' + number_format(all_resource) + '</span>'
                );
            }else{
                var add_html = '';
                add_html += now_resource + '(분)<br /><span>' + number_format(all_resource) + '</span><br /><br />';
                add_html += now_resource + '(일/시간/분)<br /><span>' + count_minute(all_resource) + '</span>';
                
                $('.resource_counting_result').html(add_html);
            }
            
            $('html,body').animate({scrollTop:$('.resource_manager_result').offset().top},500);
        }else{
            alert('자원 종류 탭을 클릭해야 계산할 수 있습니다.');
        }
    });
});

function number_format(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function count_minute(time){
    var change_hours = Math.floor(time/60);
    
    var days = Math.floor(change_hours/24);
    var hours = Math.floor(change_hours%24);
    var minutes = time % 60;
    
    var result = '';
    if(days > 0){
        result += days + '일 ';
    }
    if(hours > 0){
        result += hours + '시간 ';
    }
    if(minutes > 0){
        result += minutes + '분';
    }
    
    return result;
}

