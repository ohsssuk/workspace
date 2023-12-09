$(document).ready(function(){
    var rullAllCredit = 0;
    var rullAllTropy = 0;
    var ullAllPlayNum = 0;
    
    var userGoldGet = 0;
    var userItemGet = [];
    
    var nowBox = 0;
    
//.toFixed(2);
    $('.rull_btn').on('click',function(){
        
        var rullList = [
            { name: "경기용 반곡 활 배합", gold: Number($('.rull_editor>li:nth-child(5) input').val()), percent: 122 },
            { name: "95식 돌격소총 배합", gold: Number($('.rull_editor>li:nth-child(1) input').val()), percent: 122 },
            { name: "배합 조각 x 10", gold: 2400, percent: 196 },
            { name: "연구 데이터 x 10", gold: 12*120, percent: 196 },
            { name: "연구 데이터 x 20", gold: 24*120, percent: 196 },
            { name: "고분자 코팅", gold: 3500, percent: 244 },
            { name: "얇은 원단", gold: 800, percent: 733 },
            { name: "플라스틱 * 10", gold: 3000, percent: 733 },
            { name: "철근 * 10", gold: 2000, percent: 1222 },
            { name: "2000 신화폐", gold: 1714, percent: 1222 },
            { name: "1000 신화폐", gold: 857, percent: 2445 },
            { name: "천 x 10", gold: 500, percent: 2445 }
        ];
        var rullListBow = [
            { name: "경기용 반곡 활 소장판", gold: Number($('.rull_editor>li:nth-child(8) input').val()), percent: 12 },
            { name: "경기용 반곡 활 레인색", gold: Number($('.rull_editor>li:nth-child(7) input').val()), percent: 24 },
            { name: "경기용 반곡 활 설원색", gold: Number($('.rull_editor>li:nth-child(6) input').val()), percent: 24 },
            { name: "경기용 반곡 활 배합", gold: Number($('.rull_editor>li:nth-child(5) input').val()), percent: 122 },
            { name: "95식 돌격소총 배합", gold: Number($('.rull_editor>li:nth-child(1) input').val()), percent: 122 },
            { name: "배합 조각 x 10", gold: 2400, percent: 196 },
            { name: "연구 데이터 x 10", gold: 12*120, percent: 196 },
            { name: "연구 데이터 x 20", gold: 24*120, percent: 196 },
            { name: "고분자 코팅", gold: 3500, percent: 244 },
            { name: "얇은 원단", gold: 800, percent: 733 },
            { name: "플라스틱 * 10", gold: 3000, percent: 733 },
            { name: "철근 * 10", gold: 2000, percent: 1222 },
            { name: "2000 신화폐", gold: 1714, percent: 1222 },
            { name: "1000 신화폐", gold: 857, percent: 2445 },
            { name: "천 x 10", gold: 500, percent: 2445 }
        ];
        var rullList95 = [
            { name: "95식 소장판", gold: Number($('.rull_editor>li:nth-child(4) input').val()), percent: 12 },
            { name: "95식 레인색", gold: Number($('.rull_editor>li:nth-child(3) input').val()), percent: 24 },
            { name: "95식 설원색", gold: Number($('.rull_editor>li:nth-child(2) input').val()), percent: 24 },
            { name: "경기용 반곡 활 배합", gold: Number( $('.rull_editor>li:nth-child(5) input').val()), percent: 122 },
            { name: "95식 돌격소총 배합", gold: Number($('.rull_editor>li:nth-child(1) input').val()), percent: 122 },
            { name: "배합 조각 x 10", gold: 2400, percent: 196 },
            { name: "연구 데이터 x 10", gold: 12*120, percent: 196 },
            { name: "연구 데이터 x 20", gold: 24*120, percent: 196 },
            { name: "고분자 코팅", gold: 3500, percent: 244 },
            { name: "얇은 원단", gold: 800, percent: 733 },
            { name: "플라스틱 * 10", gold: 3000, percent: 733 },
            { name: "철근 * 10", gold: 2000, percent: 1222 },
            { name: "2000 신화폐", gold: 1714, percent: 1222 },
            { name: "1000 신화폐", gold: 857, percent: 2445 },
            { name: "천 x 10", gold: 500, percent: 2445 }
        ];
        var rullListFinal = [
            { name: "경기용 반곡 활 소장판", gold: Number($('.rull_editor>li:nth-child(8) input').val()), percent: 12 },
            { name: "95식 소장판", gold: Number($('.rull_editor>li:nth-child(4) input').val()), percent: 12 },
            { name: "경기용 반곡 활 레인색", gold: Number($('.rull_editor>li:nth-child(7) input').val()), percent: 24 },
            { name: "경기용 반곡 활 설원색", gold: Number($('.rull_editor>li:nth-child(6) input').val()), percent: 24 },
            { name: "95식 레인색", gold: Number($('.rull_editor>li:nth-child(3) input').val()), percent: 24 },
            { name: "95식 설원색", gold: Number($('.rull_editor>li:nth-child(2) input').val()), percent: 24 },
            { name: "경기용 반곡 활 배합", gold: Number($('.rull_editor>li:nth-child(5) input').val()), percent: 122 },
            { name: "95식 돌격소총 배합", gold: Number($('.rull_editor>li:nth-child(1) input').val()), percent: 122 },
            { name: "배합 조각 x 10", gold: 2400, percent: 196 },
            { name: "연구 데이터 x 10", gold: 12*120, percent: 196 },
            { name: "연구 데이터 x 20", gold: 24*120, percent: 196 },
            { name: "고분자 코팅", gold: 3500, percent: 244 },
            { name: "얇은 원단", gold: 800, percent: 733 },
            { name: "플라스틱 * 10", gold: 3000, percent: 733 },
            { name: "철근 * 10", gold: 2000, percent: 1222 },
            { name: "2000 신화폐", gold: 1714, percent: 1222 },
            { name: "1000 신화폐", gold: 857, percent: 2445 },
            { name: "천 x 10", gold: 500, percent: 2445 }
        ];
        
        var how = $(this).index();
        var rulletSting = Math.floor(Math.random() * 10000) + 1;
        var allPercent = 0;
        var minPercent = 0;
        
        if(nowBox==1){
            rullList = rullListBow;
        }else if(nowBox==2){
            rullList = rullList95;
        }else if(nowBox==3){
            rullList = rullListFinal;
        }
            
        if(how == 0){
            rullAllCredit += 40;
            rullAllTropy += 120;
            userGoldGet += 100/140;
            ullAllPlayNum ++;
            
            var isNo = false;
            
            for(var i = 0; i<rullList.length ; i++){
                if(i==0){
                    minPercent = 0;
                }
                
                allPercent += rullList[i].percent; //122 시작
                
                if(rulletSting <= allPercent && rulletSting > minPercent){
                    userGoldGet += rullList[i].gold;
                    userItemGet.push(rullList[i].name);
                    isNo = true;
                }
                console.log(rulletSting + '/' + allPercent + '/' + minPercent +'/'+rullList[i].name);
                minPercent += rullList[i].percent;
            }
            if(!isNo){
                userItemGet.push(rullList[rullList.length-1].name);
                userGoldGet += rullList[rullList.length-1].gold;
            }
            
            //$('.rull_result p span').html('횟수 : '+ ullAllPlayNum + '얻템 : ' + userItemGet + '골드/크레딧 : '+(userGoldGet/rullAllCredit).toFixed(2));
            
            $('.rull_result .rull_con:nth-child(1) span').html(ullAllPlayNum);
            $('.rull_result .rull_con:nth-child(2) .rull_con_list').html('');
            for(var k=0;k<userItemGet.length;k++){
                if(userItemGet[k].indexOf('95식')!=-1 || userItemGet[k].indexOf('반곡')!=-1){
                    $('.rull_result .rull_con:nth-child(2) .rull_con_list').append("<p class='special_rull'>"+userItemGet[k]+"</p>")
                }else{
                    $('.rull_result .rull_con:nth-child(2) .rull_con_list').append("<p>"+userItemGet[k]+"</p>");
                }
                
            }
            $('.rull_result .rull_con:nth-child(3) span').html(rullAllCredit + "크레딧("+rullAllTropy+"명예증서)");
            $('.rull_result .rull_con:nth-child(4) span').html(Number(userGoldGet/rullAllCredit).toFixed(2));
            $('.rull_result .rull_con:nth-child(5) span').html(Number(userGoldGet/rullAllTropy).toFixed(2));
            
        }else if(how == 1){
            rullAllCredit += 166;
            rullAllTropy += 500;
            userGoldGet += (100/140)*5;
            ullAllPlayNum += 5;
            
            for(var j = 0;j<5;j++){
                rulletSting = Math.floor(Math.random() * 10000) + 1;
                allPercent = 0;
                minPercent = 0;
                var isNo = false;

                for(var i = 0; i<rullList.length ; i++){
                    if(i==0){
                        minPercent = 0;
                    }

                    allPercent += rullList[i].percent; //122 시작

                    if(rulletSting <= allPercent && rulletSting > minPercent){
                        userGoldGet += rullList[i].gold;
                        userItemGet.push(rullList[i].name);
                        isNo = true;
                    }
                    console.log(rulletSting + '/' + allPercent + '/' + minPercent +'/'+rullList[i].name);
                    minPercent += rullList[i].percent;
                }
                if(!isNo){
                    userItemGet.push(rullList[rullList.length-1].name);
                    userGoldGet += rullList[rullList.length-1].gold;
                }
            }
            $('.rull_result .rull_con:nth-child(1) span').html(ullAllPlayNum);
            $('.rull_result .rull_con:nth-child(2) .rull_con_list').html('');
            for(var k=0;k<userItemGet.length;k++){
                if(userItemGet[k].indexOf('95식')!=-1 || userItemGet[k].indexOf('반곡')!=-1){
                    $('.rull_result .rull_con:nth-child(2) .rull_con_list').append("<p class='special_rull'>"+userItemGet[k]+"</p>")
                }else{
                    $('.rull_result .rull_con:nth-child(2) .rull_con_list').append("<p>"+userItemGet[k]+"</p>");
                }
                
            }
            $('.rull_result .rull_con:nth-child(3) span').html(rullAllCredit + "크레딧("+rullAllTropy+"명예증서)");
            $('.rull_result .rull_con:nth-child(4) span').html(Number(userGoldGet/rullAllCredit).toFixed(2));
            $('.rull_result .rull_con:nth-child(5) span').html(Number(userGoldGet/rullAllTropy).toFixed(2));
        }
        
        for(var k=0;k<userItemGet.length;k++){
            if(userItemGet[k].indexOf('95식')!=-1 && userItemGet[k].indexOf('반곡')==-1){
               nowBox = 2;
            }else if(userItemGet[k].indexOf('95식')==-1 && userItemGet[k].indexOf('반곡')!=-1){
               nowBox = 1;
            }
            else if(userItemGet[k].indexOf('95식')!=-1 && userItemGet[k].indexOf('반곡')!=-1){
               nowBox = 3;
            }
        }
    });
    
    
     
});