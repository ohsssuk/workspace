//10 : {
//    wood : 7200,
//    iron : 7200,
//    stone : 7200
//},
//11 : {
//    wood : 19800,
//    iron : 19800,
//    stone : 19800
//}, 
//12 : {
//    wood : 21600,
//    iron : 21600,
//    stone : 21600
//}, 
//13 : {
//    wood : 23400,
//    iron : 23400,
//    stone : 23400
//}, 
//14 : {
//    wood : 25200,
//    iron : 25200,
//    stone : 25200
//}, 
//15 : {
//    wood : 27000,
//    iron : 27000,
//    stone : 27000
//}, 
//16 : {
//    wood : 34560,
//    iron : 34560,
//    stone : 34560
//}, 
//17 : {
//    wood : 36720,
//    iron : 36720,
//    stone : 36720
//}, 
//18 : {
//    wood : 38880,
//    iron : 38880,
//    stone : 38880
//}, 
//19 : {
//    wood : 41040,
//    iron : 41040,
//    stone : 41040
//}, 
//20 : {
//    wood : 43200,
//    iron : 43200,
//    stone : 43200
//}, 
//21 : {
//    wood : 63360,
//    iron : 63360,
//    stone : 63360
//}, 
//22 : {
//    wood : 69120,
//    iron : 69120,
//    stone : 69120
//}, 
//23 : {
//    wood : 74880,
//    iron : 74880,
//    stone : 74880
//}, 
//24 : {
//    wood : 80640,
//    iron : 80640,
//    stone : 80640
//}, 
//25 : {
//    wood : 86400,
//    iron : 86400,
//    stone : 86400
//}, 
//26 : {
//    wood : 115200,
//    iron : 115200,
//    stone : 115200
//}, 
//27 : {
//    wood : 122400,
//    iron : 122400,
//    stone : 122400
//}, 
//28 : {
//    wood : 129600,
//    iron : 129600,
//    stone : 129600
//}, 
//29 : {
//    wood : 136800,
//    iron : 136800,
//    stone : 136800
//},
//30 : {
//    wood : 144000,
//    iron : 144000,
//    stone : 144000
//}

$(function(){
   
});

var buildCost = {
    kunwang : {
        2 : {
            wood : 2400,
            iron : 2400,
            stone : 7200
        },
        3 : {
            wood : 6000,
            iron : 6000,
            stone : 18000
        },
        4 : {
            wood : 16000,
            iron : 16000,
            stone : 48000
        },
        5 : {
            wood : 24000,
            iron : 24000,
            stone : 72000
        },
        6 : {
            wood : 48000,
            iron : 48000,
            stone : 144000
        },
        7 : {
            wood : 96000,
            iron : 96000,
            stone : 288000
        },
        8 : {
            wood : 192000,
            iron : 192000,
            stone : 576000
        },
        9 : {
            wood : 288000,
            iron : 288000,
            stone : 864000
        },
        10 : {
            wood : 432000,
            iron : 432000,
            stone : 1296000
        }
    },
    kunyeong : {
        1 : {
            wood : 20000,
            iron : 20000,
            stone : 40000
        },
        2 : {
            wood : 22500,
            iron : 22500,
            stone : 45000
        },
        3 : {
            wood : 25000,
            iron : 25000,
            stone : 50000
        },
        4 : {
            wood : 27500,
            iron : 27500,
            stone : 55000
        },
        5 : {
            wood : 30000,
            iron : 30000,
            stone : 60000
        },
        6 : {
            wood : 32500,
            iron : 32500,
            stone : 65000
        },
        7 : {
            wood : 35000,
            iron : 35000,
            stone : 70000
        },
        8 : {
            wood : 37500,
            iron : 37500,
            stone : 75000
        },
        9 : {
            wood : 42500,
            iron : 42500,
            stone : 85000
        },
        10 : {
            wood : 47500,
            iron : 47500,
            stone : 95000
        },
        11 : {
            wood : 50000,
            iron : 50000,
            stone : 100000
        },
        12 : {
            wood : 52500,
            iron : 52500,
            stone : 105000
        },
        13 : {
            wood : 60000,
            iron : 60000,
            stone : 120000
        },
        14 : {
            wood : 90000,
            iron : 90000,
            stone : 180000
        },
        15 : {
            wood : 130000,
            iron : 130000,
            stone : 260000
        },
        16 : {
            wood : 187500,
            iron : 187500,
            stone : 375000
        },
        17 : {
            wood : 245000,
            iron : 245000,
            stone : 490000
        },
        18 : {
            wood : 290000,
            iron : 290000,
            stone : 580000
        },
        19 : {
            wood : 345000,
            iron : 345000,
            stone : 690000
        },
        20 : {
            wood : 415000,
            iron : 415000,
            stone : 830000
        }
    },
    byungA : {
        1 : {
            wood : 40000,
            iron : 40000/2,
            stone : 40000
        },
        2 : {
            wood : 60000,
            iron : 60000/2,
            stone : 60000
        },
        3 : {
            wood : 88000,
            iron : 88000/2,
            stone : 88000
        },
        4 : {
            wood : 112000,
            iron : 112000/2,
            stone : 112000
        },
        5 : {
            wood : 140000,
            iron : 140000/2,
            stone : 140000
        },
        6 : {
            wood : 192000,
            iron : 192000/2,
            stone : 192000
        },
        7 : {
            wood : 368000,
            iron : 368000/2,
            stone : 368000
        },
        8 : {
            wood : 520000,
            iron : 520000/2,
            stone : 520000
        },
        9 : {
            wood : 840000,
            iron : 840000/2,
            stone : 840000
        },
        10 : {
            wood : 1200000,
            iron : 1200000/2,
            stone : 1200000
        }
    },
    byungB : {
        1 : {
            wood : 40000/2,
            iron : 40000,
            stone : 40000
        },
        2 : {
            wood : 60000/2,
            iron : 60000,
            stone : 60000
        },
        3 : {
            wood : 88000/2,
            iron : 88000,
            stone : 88000
        },
        4 : {
            wood : 112000/2,
            iron : 112000,
            stone : 112000
        },
        5 : {
            wood : 140000/2,
            iron : 140000,
            stone : 140000
        },
        6 : {
            wood : 192000/2,
            iron : 192000,
            stone : 192000
        },
        7 : {
            wood : 368000/2,
            iron : 368000,
            stone : 368000
        },
        8 : {
            wood : 520000/2,
            iron : 520000,
            stone : 520000
        },
        9 : {
            wood : 840000/2,
            iron : 840000,
            stone : 840000
        },
        10 : {
            wood : 1200000/2,
            iron : 1200000,
            stone : 1200000
        }
    },
    byungsageunA : {
        1 : {
            wood : 3000/2,
            iron : 3000,
            stone : 3000
        },
        2 : {
            wood : 4000/2,
            iron : 4000,
            stone : 4000
        },
        3 : {
            wood : 4800/2,
            iron : 4800,
            stone : 4800
        },
        4 : {
            wood : 5600/2,
            iron : 5600,
            stone : 5600
        },
        5 : {
            wood : 9600/2,
            iron : 9600,
            stone : 9600
        },
        6 : {
            wood : 19200/2,
            iron : 19200,
            stone : 19200
        },
        7 : {
            wood : 28800/2,
            iron : 28800,
            stone : 28800
        },
        8 : {
            wood : 44000/2,
            iron : 44000,
            stone : 44000
        },
        9 : {
            wood : 88000/2,
            iron : 88000,
            stone : 88000
        },
        10 : {
            wood : 176000/2,
            iron : 176000,
            stone : 176000
        }
    },
    byungsageunB : {
        1 : {
            wood : 3000,
            iron : 3000/2,
            stone : 3000
        },
        2 : {
            wood : 4000,
            iron : 4000/2,
            stone : 4000
        },
        3 : {
            wood : 4800,
            iron : 4800/2,
            stone : 4800
        },
        4 : {
            wood : 5600,
            iron : 5600/2,
            stone : 5600
        },
        5 : {
            wood : 9600,
            iron : 9600/2,
            stone : 9600
        },
        6 : {
            wood : 19200,
            iron : 19200/2,
            stone : 19200
        },
        7 : {
            wood : 28800,
            iron : 28800/2,
            stone : 28800
        },
        8 : {
            wood : 44000,
            iron : 44000/2,
            stone : 44000
        },
        9 : {
            wood : 88000,
            iron : 88000/2,
            stone : 88000
        },
        10 : {
            wood : 176000,
            iron : 176000/2,
            stone : 176000
        }
    },
    jing : {
        1 : {
            wood : 2000,
            iron : 2000,
            stone : 2000
        },
        2 : {
            wood : 7500,
            iron : 7500,
            stone : 7500
        },
        3 : {
            wood : 15000,
            iron : 15000,
            stone : 15000
        },
        4 : {
            wood : 30000,
            iron : 30000,
            stone : 30000
        },
        5 : {
            wood : 45000,
            iron : 45000,
            stone : 45000
        },
        6 : {
            wood : 80000,
            iron : 80000,
            stone : 80000
        },
        7 : {
            wood : 120000,
            iron : 120000,
            stone : 120000
        },
        8 : {
            wood : 180000,
            iron : 180000,
            stone : 180000
        },
        9 : {
            wood : 270000,
            iron : 270000,
            stone : 270000
        },
        10 : {
            wood : 390000,
            iron : 390000,
            stone : 390000
        },
    },
    chesuk: {
        10 : {
            wood : 7200,
            iron : 7200,
            stone : 0
        },
        11 : {
            wood : 19800,
            iron : 19800,
            stone : 0
        }, 
        12 : {
            wood : 21600,
            iron : 21600,
            stone : 0
        }, 
        13 : {
            wood : 23400,
            iron : 23400,
            stone : 0
        }, 
        14 : {
            wood : 25200,
            iron : 25200,
            stone : 0
        }, 
        15 : {
            wood : 27000,
            iron : 27000,
            stone : 0
        }, 
        16 : {
            wood : 34560,
            iron : 34560,
            stone : 0
        }, 
        17 : {
            wood : 36720,
            iron : 36720,
            stone : 0
        }, 
        18 : {
            wood : 38880,
            iron : 38880,
            stone : 0
        }, 
        19 : {
            wood : 41040,
            iron : 41040,
            stone : 0
        }, 
        20 : {
            wood : 43200,
            iron : 43200,
            stone : 0
        }, 
        21 : {
            wood : 63360,
            iron : 63360,
            stone : 0
        }, 
        22 : {
            wood : 69120,
            iron : 69120,
            stone : 0
        }, 
        23 : {
            wood : 74880,
            iron : 74880,
            stone : 0
        }, 
        24 : {
            wood : 80640,
            iron : 80640,
            stone : 0
        }, 
        25 : {
            wood : 86400,
            iron : 86400,
            stone : 0
        }, 
        26 : {
            wood : 115200,
            iron : 115200,
            stone : 0
        }, 
        27 : {
            wood : 122400,
            iron : 122400,
            stone : 0
        }, 
        28 : {
            wood : 129600,
            iron : 129600,
            stone : 0
        }, 
        29 : {
            wood : 136800,
            iron : 136800,
            stone : 0
        },
        30 : {
            wood : 144000,
            iron : 144000,
            stone : 0
        }
    },
    bulmok: {
        10 : {
            wood : 0,
            iron : 7200,
            stone : 7200
        },
        11 : {
            wood : 0,
            iron : 19800,
            stone : 19800
        }, 
        12 : {
            wood : 0,
            iron : 21600,
            stone : 21600
        }, 
        13 : {
            wood : 0,
            iron : 23400,
            stone : 23400
        }, 
        14 : {
            wood : 0,
            iron : 25200,
            stone : 25200
        }, 
        15 : {
            wood : 0,
            iron : 27000,
            stone : 27000
        }, 
        16 : {
            wood : 0,
            iron : 34560,
            stone : 34560
        }, 
        17 : {
            wood : 0,
            iron : 36720,
            stone : 36720
        }, 
        18 : {
            wood : 0,
            iron : 38880,
            stone : 38880
        }, 
        19 : {
            wood : 0,
            iron : 41040,
            stone : 41040
        }, 
        20 : {
            wood : 0,
            iron : 43200,
            stone : 43200
        }, 
        21 : {
            wood : 0,
            iron : 63360,
            stone : 63360
        }, 
        22 : {
            wood : 0,
            iron : 69120,
            stone : 69120
        }, 
        23 : {
            wood : 0,
            iron : 74880,
            stone : 74880
        }, 
        24 : {
            wood : 0,
            iron : 80640,
            stone : 80640
        }, 
        25 : {
            wood : 0,
            iron : 86400,
            stone : 86400
        }, 
        26 : {
            wood : 0,
            iron : 115200,
            stone : 115200
        }, 
        27 : {
            wood : 0,
            iron : 122400,
            stone : 122400
        }, 
        28 : {
            wood : 0,
            iron : 129600,
            stone : 129600
        }, 
        29 : {
            wood : 0,
            iron : 136800,
            stone : 136800
        },
        30 : {
            wood : 0,
            iron : 144000,
            stone : 144000
        }
    },
    jechul: {
        10 : {
            wood : 7200,
            iron : 0,
            stone : 7200
        },
        11 : {
            wood : 19800,
            iron : 0,
            stone : 19800
        }, 
        12 : {
            wood : 21600,
            iron : 0,
            stone : 21600
        }, 
        13 : {
            wood : 23400,
            iron : 0,
            stone : 23400
        }, 
        14 : {
            wood : 25200,
            iron : 0,
            stone : 25200
        }, 
        15 : {
            wood : 27000,
            iron : 0,
            stone : 27000
        }, 
        16 : {
            wood : 34560,
            iron : 0,
            stone : 34560
        }, 
        17 : {
            wood : 36720,
            iron : 0,
            stone : 36720
        }, 
        18 : {
            wood : 38880,
            iron : 0,
            stone : 38880
        }, 
        19 : {
            wood : 41040,
            iron : 0,
            stone : 41040
        }, 
        20 : {
            wood : 43200,
            iron : 0,
            stone : 43200
        }, 
        21 : {
            wood : 63360,
            iron : 0,
            stone : 63360
        }, 
        22 : {
            wood : 69120,
            iron : 0,
            stone : 69120
        }, 
        23 : {
            wood : 74880,
            iron : 0,
            stone : 74880
        }, 
        24 : {
            wood : 80640,
            iron : 0,
            stone : 80640
        }, 
        25 : {
            wood : 86400,
            iron : 0,
            stone : 86400
        }, 
        26 : {
            wood : 115200,
            iron : 0,
            stone : 115200
        }, 
        27 : {
            wood : 122400,
            iron : 0,
            stone : 122400
        }, 
        28 : {
            wood : 129600,
            iron : 0,
            stone : 129600
        }, 
        29 : {
            wood : 136800,
            iron : 0,
            stone : 136800
        },
        30 : {
            wood : 144000,
            iron : 0,
            stone : 144000
        }
    },
    wongudan : {
        1 : {
            wood : 30000,
            iron : 30000,
            stone : 90000
        },
        2 : {
            wood : 60000,
            iron : 60000,
            stone : 180000
        },
        3 : {
            wood : 120000,
            iron : 120000,
            stone : 360000
        },
        4 : {
            wood : 240000,
            iron : 240000,
            stone : 720000
        },
        5 : {
            wood : 480000,
            iron : 480000,
            stone : 1440000
        },
    },
    sagidan : {
        1 : {
            wood : 60000,
            iron : 60000,
            stone : 80000
        },
        2 : {
            wood : 120000,
            iron : 120000,
            stone : 160000
        },
        3 : {
            wood : 240000,
            iron : 240000,
            stone : 320000
        },
        4 : {
            wood : 480000,
            iron : 480000,
            stone : 640000
        },
        5 : {
            wood : 960000,
            iron : 960000,
            stone : 1280000
        },
    },
    saryungdan : {
        1 : {
            wood : 50000,
            iron : 50000,
            stone : 150000
        },
        2 : {
            wood : 100000,
            iron : 100000,
            stone : 300000
        },
        3 : {
            wood : 300000,
            iron : 300000,
            stone : 900000
        },
    },
    chango : {
        1 : {
            wood : 300,
            iron : 300,
            stone : 400
        },
        2 : {
            wood : 600,
            iron : 600,
            stone : 800
        },
        3 : {
            wood : 1200,
            iron : 1200,
            stone : 1600
        },
        4 : {
            wood : 3000,
            iron : 3000,
            stone : 4000
        },
        5 : {
            wood : 6000,
            iron : 6000,
            stone : 8000
        },
        6 : {
            wood : 12000,
            iron : 12000,
            stone : 16000
        },
        7 : {
            wood : 18000,
            iron : 18000,
            stone : 24000
        },
        8 : {
            wood : 24000,
            iron : 24000,
            stone : 32000
        },
        9 : {
            wood : 30000,
            iron : 30000,
            stone : 40000
        },
        10 : {
            wood : 36000,
            iron : 36000,
            stone : 48000
        },
        11 : {
            wood : 45000,
            iron : 45000,
            stone : 60000
        },
        12 : {
            wood : 54000,
            iron : 54000,
            stone : 72000
        },
        13 : {
            wood : 69000,
            iron : 69000,
            stone : 92000
        },
        14 : {
            wood : 84000,
            iron : 84000,
            stone : 112000
        },
        16 : {
            wood : 117000,
            iron : 117000,
            stone : 156000
        },
        17 : {
            wood : 135000,
            iron : 135000,
            stone : 180000
        },
        18 : {
            wood : 165000,
            iron : 165000,
            stone : 220000
        },
        19 : {
            wood : 210000,
            iron : 210000,
            stone : 280000
        },
        20 : {
            wood : 255000,
            iron : 255000,
            stone : 340000
        },
    },
    minga : {
        1 : {
            wood : 500,
            iron : 500,
            stone : 500
        },
        2 : {
            wood : 1000,
            iron : 1000,
            stone : 1000
        },
        3 : {
            wood : 1600,
            iron : 1600,
            stone : 1600
        },
        4 : {
            wood : 2100,
            iron : 2100,
            stone : 2100
        },
        4 : {
            wood : 2100,
            iron : 2100,
            stone : 2100
        },
        5 : {
            wood : 2600,
            iron : 2600,
            stone : 2600
        },
        6 : {
            wood : 4200,
            iron : 4200,
            stone : 4200
        },
        7 : {
            wood : 5800,
            iron : 5800,
            stone : 5800
        },
        8 : {
            wood : 7400,
            iron : 7400,
            stone : 7400
        },
        9 : {
            wood : 8000,
            iron : 8000,
            stone : 8000
        },
        10 : {
            wood : 10000,
            iron : 10000,
            stone : 10000
        },
        11 : {
            wood : 16000,
            iron : 16000,
            stone : 16000
        },
        12 : {
            wood : 21000,
            iron : 21000,
            stone : 21000
        },
        13 : {
            wood : 32000,
            iron : 32000,
            stone : 32000
        },
        14 : {
            wood : 42000,
            iron : 42000,
            stone : 42000
        },
        15 : {
            wood : 53000,
            iron : 53000,
            stone : 53000
        },
        16 : {
            wood : 80000,
            iron : 80000,
            stone : 80000
        },
        17 : {
            wood : 100000,
            iron : 100000,
            stone : 100000
        },
        18 : {
            wood : 160000,
            iron : 160000,
            stone : 160000
        },
        19 : {
            wood : 210000,
            iron : 210000,
            stone : 210000
        },
        20 : {
            wood : 260000,
            iron : 260000,
            stone : 260000
        },
    },
}

var buildCal = {
    checkBuildKind : function(el){
        var buildKind = $(el).find('option:selected').val();
        
        if(!buildKind){
            $('#select_build_level').html('<option value="">레벨 선택</option>');
            return false;
        }
        
        var key = Object.keys(buildCost[buildKind]);
        
        var html = '';
        html += '<option value="">레벨 선택</option>';
        for(var i = 0; i < key.length; i++){
            html += '<option value="'+key[i]+'">'+key[i]+'레벨</option>';
        }
        
        $('#select_build_level').html(html);
    },
    checkBuildLevel : function(el){
        var cost = buildCal.getCost();
        
        var list = ['wood', 'iron', 'stone'];
        for(var i = 0; i < list.length; i++){
            var need = cost[list[i]].toLocaleString();
            $('#resource_input').find('.kind.'+list[i]).find('.col.need .col_content').html(need);
        }
    },
    
    getCost : function(){
        var buildKind = $('#select_build_kind > option:selected').val();
        var buildLevel = $('#select_build_level > option:selected').val();
        
        return buildCost[buildKind][buildLevel];
    },
    resultSet : {
        need : {
            res : '',
            min : 0
        },
        wood : {
            
        },
        iron : {
            
        },
        stone : {
            
        }
    },
    getResult : function(){
        if(!$('#select_build_kind > option:selected').val() || !$('#select_build_level > option:selected').val()){
            alert('건물과 레벨을 선택해주세요.');
            return false;
        }
        
        var validationCheck = true;
        $('#resource_input input').each(function(){
            if(!$(this).val()){
                validationCheck = false;
            }
        });
        
        if(!validationCheck){
            alert('필요한 내용을 입력해주세요.');
            return false;
        }
        
        $('#possible_resource_box').html('');
        
        var html = '';
        
        var cost = buildCal.getCost();
        var maxMin = buildCal.getMaxMin();
        
        var list = ['wood', 'iron', 'stone'];
        for(var i = 0; i < list.length; i++){
            var inputForm = $('#resource_input').find('.kind.'+list[i]);
            
            var base = Number(inputForm.find('[name="base"]').val());
            var income = Number(inputForm.find('[name="income"]').val()) / 60;
            var extra = 0;
            inputForm.find('[name="extra[]"]').each(function(){
                extra += Number($(this).val());
            });
            
            var need = Number(cost[list[i]]);
            
            buildCal.resultSet[list[i]]['possible'] = Math.floor((base + (income * maxMin) + extra) - need);
            
            if(list[i] != buildCal.resultSet['need']['res']){
                html = '';
                html += ' <div class="resource_ic '+list[i]+'">+ '+buildCal.resultSet[list[i]]['possible'].toLocaleString()+'</div> ';
                $('#possible_resource_box').append(html);
            }
            
            
            var needMinStr = MakeDateForm(buildCal.resultSet[list[i]]['need_min']);
            needMinStr = (needMinStr == '') ? '-' : needMinStr;
            $('#time_need_table').find('.'+list[i]+' .time').html(needMinStr);
            
            var needResStr = Number(buildCal.resultSet[list[i]]['need_res']);
            if(needResStr > 0){
                needResStr = needResStr.toLocaleString()
            }else{
                needResStr = '여유'
            }
            $('#time_need_table').find('.'+list[i]+' .need').html(needResStr);
        }
        
        var mostNeedStr = '-';
        switch(buildCal.resultSet['need']['res']){
            case 'wood' : 
                mostNeedStr = '목재';
                break;
            case 'iron' : 
                mostNeedStr = '철광';
                break;
            case 'stone' : 
                mostNeedStr = '석재';
                break;
        }
        $('#most_need_res').html(mostNeedStr);
        
        $('#max_need_main').html(MakeDateForm(buildCal.resultSet['need']['min']));
        
        $('html, body').animate({
            scrollTop : $('.output_box').offset().top - $('header').height()
        }, 500)
        
        gtag('event', $('#select_build_kind > option:selected').val() + ': lv ' + $('#select_build_level > option:selected').val() + ' build');
    },
    getMaxMin : function(){
        var cost = buildCal.getCost();
        var checkNeedRes = 0;
        
        var list = ['wood', 'iron', 'stone'];
        for(var i = 0; i < list.length; i++){
            var inputForm = $('#resource_input').find('.kind.'+list[i]);
            
            var base = Number(inputForm.find('[name="base"]').val());
            var income = Number(inputForm.find('[name="income"]').val()) / 60;
            var extra = 0;
            inputForm.find('[name="extra[]"]').each(function(){
                extra += Number($(this).val());
            });
            
            var need = Number(cost[list[i]]);
            var real_need = need - base - extra;

            buildCal.resultSet[list[i]]['need_res'] = real_need;
            
            var iNeedMin = 0;
            while(real_need > 0){
                iNeedMin++;
                real_need -= income;
            }
            
            buildCal.resultSet[list[i]]['need_min'] = iNeedMin;
            
            if(iNeedMin > checkNeedRes){
                buildCal.resultSet['need']['res'] = list[i];
                buildCal.resultSet['need']['min'] = iNeedMin;
                checkNeedRes = iNeedMin;
            }
        }
        
        var maxMin = Math.max(
            buildCal.resultSet['wood']['need_min'],
            buildCal.resultSet['iron']['need_min'],
            buildCal.resultSet['stone']['need_min']
        );
        
        return maxMin;
    }
}


var MakeDateForm = function ( min ) {
    var hours = Math.floor(min / 60);
    var mins = min - (hours * 60);
 
    var str = '';
    if(hours > 0){
        str += hours + '시간 ';
    }
    if(mins > 0){
        str += mins + '분';
    }
    
    return str;
}

function isEmpty(value){
    if(typeof value == 'undefined' || !value || value.length == 0){
       return true;
    }
    
    if(value.constructor == Object){
        return (Object.keys(value).length === 0)
    }
    
    return false;
}

function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
}