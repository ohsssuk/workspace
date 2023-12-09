$(document).ready(function(){
//    var gnb_html = '';
//    gnb_html += "<li><a href='./worldmap.php'>맵 정보</a></li>";
//    gnb_html += "<li><a href='./cal.php'>원가 계산기</a></li>";
//    gnb_html += "<li><a href='./usermake.php'>서버별 단가</a></li>";
//    gnb_html += "<li><a href='./weapon_cal.php'>데미지 계산기</a></li>";
//    
//    $('.gnb').html(gnb_html);
    
//    $('.side_ad_left').html("<img src='./images/left_ad.png' />");
//    $('.side_ad_left').append("<img src='./images/left_ad_2.png' />");
    
//    var yagubat = ['chul',30,'gazi',60,'bone',16,'gal',16];
//    var nucle = ['alu',50,'juseuk',50,'oldnamu',90,'oil',50,
//                  'gal',24,'coating',4];
//    var ququri = ['chul',40+48,'gazi',80,'sili',30,'tungsten',10,
//                 'juseuk',48,'moksim',48,
//                 'yasuebbal',24,'gal',24,'coating',4];
//    var longsword = ['chul',13*4,'gazi',13*8,'sili',39,'tungsten',13,
//                    'silver',60,'nonghong',30,'guri',60,'liba',10,'oak',120,
//                    'blood',32,'coating',5,'junsul',5];
//    var uzi = ['juseuk',40,'chul',80,'moksim',40,'gazi',80,'nungkul',40,'bone',20,'gal',20];
//    var ump = ['alu',50,'juseuk',50,'oldnamu',90,'oil',50,'gazi',24*4,'chul',24*2,'bone',24,'nungkul',48,'fat',24,'coating',4];
//    var tomsn = ['alu',50,'juseuk',98,'oldnamu',90,'oil',50,
//                 'chul',48,'moksim',48,
//                 'mot',10,
//                 'coating',4];
//    var m590 = ['alu',50,'juseuk',50+48,'oldnamu',90,'oil',50,
//                'gazi',23*4,'chul',46+48,
//                'moksim',48,'soon',48,'maseed',12,'yuhang',24,
//                'coating',4];
//    var sik95 = ['juseuk',48*2,'chul',48*2,'moksim',48*2,
//                 'soon',48,'maseed',12,'yuhang',24,
//                 'bburi',24,'majulkkup',12,
//                 'gal',24,
//                 'coating',4];
//    var compound = ['juseuk',80,'chul',80,'moksim',80,
//                    'soon',40,'maseed',20,'yuhang',20,
//                    'himzul',10,'jubchak',8
//                   ];
//    var ak47 = ['banje_pipe',10,
//               'chul',40,'gazi',80,'sili',30,'tungsten',10,
//               'mot',10,'coating',4];   
//    var mosinagang = ['chul',88,'gazi',80,'sili',30,'tungsten',10,
//                     'banje_pipe',10,
//                     'juseuk',48,'moksim',48,'soon',48,'maseed',12,'yuhang',24,'coating',4];
//    var m24 = ['banje_pipe',10,'alu',50,
//              'juseuk',50,'oldnamu',90,'oil',50,
//              'chul',4*12,'gazi',8*12,'nungkul',4*12,'bone',2*12,'coating',4];
//    var mp5 = ['banje_pipe',10,
//              'juseuk',48,'chul',48,'moksim',48,
//              'suzi',8*12,'zil',24,'majul',24,'bburi',24,'majulkkup',12,
//              'hangma',30,'lin',30,'bigleaf',50,'hangmajul',10,'coating',4];
//    var yutan = ['chul',48+48,'gazi',8*12,'nungkul',48,'bone',24,
//                'juseuk',48,'moksim',48,
//                'bburi',24,'majulkkup',12,
//                'bone',24,'coating',4];
//    var m416 = ['silver',66,'nonghong',33,'guri',66,'liba',11,'oak',12*11,
//               'enplastic',11,'banje_pipe',14,
//               'coating',6,'junsul',6];
//    var tavor = ['silver',60,'nonghong',30,'guri',60,'liba',10,'oak',120,
//                'enplastic',10,'alu',5*13,'juseuk',5*13,'oldnamu',9*13,'oil',5*13,
//                'coating',5,'junsul',5];
//    var as50 = ['enplastic',10,'alu',5*13,'juseuk',5*13,'oldnamu',9*13,'oil',5*13,
//               'banje_pipe',13,'coating',5,'junsul',5];
//    var awm =['sam',130,
//              'chul',40,'gazi',80,'sili',30,'tungsten',10,
//              'goldgang',70,
//              'hito',40,
//              'yasufoot',20,
//              'titanumhab',10,
//              'enplastic',11,
//              'coating',6,
//              'junsul',6
//             ];
//    var voltbat =['sam',130,
//                'chul',40+(4*18),'gazi',80,'sili',30,'tungsten',10,
//                'goldgang',70,
//                'hito',40,
//                'yasufoot',20,
//                'juseuk',4*18,'moksim',4*18,'soon',4*18,'maseed',1*18,'yuhang',2*18,
//                'silver',66,'nonghong',33,'guri',66,'liba',11,'oak',12*11,
//                'coating',6,
//                'junsul',6
//                ];
//    var a2 =['sam',130,
//              'chul',40,'gazi',80,'sili',30,'tungsten',10,
//              'goldgang',70,
//              'hito',40,
//              'yasufoot',20,
//              'titanumhab',10,
//              'enplastic',11,
//              'coating',6,
//              'junsul',6
//            ];
//    var shortyutan =['sam',130,
//                      'chul',40,'gazi',80,'sili',30,'tungsten',10,
//                      'goldgang',70,
//                      'hito',40,
//                      'yasufoot',20,
//                      'titanumhab',10,
//                      'silver',66,'nonghong',33,'guri',66,'liba',11,'oak',12*11,
//                      'coating',6,
//                      'junsul',6
//                    ];
//    var weaponList =[
//        yagubat,nucle,ququri,longsword,uzi,ump,tomsn,m590,mp5,ak47,mosinagang,m24,m416,tavor,as50,compound,sik95,yutan,awm,voltbat,a2,shortyutan
//    ];
//    
//    var yagumoza = ['bburi',48,'majulkkup',24,
//                    'suzi',8*12,'zil',24,'majul',24,
//                    'rope',10];
//    var bag2 = ['bburi',48,'majulkkup',24,
//                'suzi',8*12,'zil',24,'majul',24,
//                'rope',10,'himzul',13];
//    var bag3 = ['bburi',60,'majulkkup',30,
//                'suzi',8*15,'zil',30,'majul',30,
//                'rope',12,'silk',5,
//                'lin',36,'linflower',12,'oldleaf',60];
//    var bag4 = ['hangma',36,'lin',36,'bigleaf',60,'hangmajul',12,'banje_gajuk',12,'yasutul',16,
//                'suzi',8*15,'zil',30,'majul',30,'bburi',30,'majulkkup',15,'silk',5];
//    var bangtan =['lin',30,'linflower',10,'oldleaf',50,
//                 'alu',50,'juseuk',50,'oldnamu',90,'oil',50,
//                 'rope',12,'silk',4];
//    var elite = ['lin',30,'linflower',10,'oldleaf',50,
//                'juseuk',48,'chul',48,'moksim',48,
//                'bburi',24,'majulkkup',12,
//                'silk',4];
//    var funkmask = ['lin',30,'linflower',10,'oldleaf',50,'bburi',24,'majulkkup',12,'rope',10,'silk',4];
//    var funkja = ['lin',30,'linflower',10,'oldleaf',50,
//                 'suzi',8*12,'zil',24,'majul',24,'bburi',24,'majulkkup',12,
//                 'chul',48,'gazi',8*12,'nungkul',48,'bone',24,'silk',4];
//    var whiteangel =['hangma',30,'lin',30,'bigleaf',50,'hangmajul',10,
//                    'alu',50,'juseuk',50,'oldnamu',90,'oil',50,
//                    'yasutul',13,'silk',4,'banje_gajuk',10];
//    var circlemask =['hangma',30,'lin',30,'bigleaf',50,'hangmajul',10,'bburi',24,'majulkkup',12,
//                    'chul',48,'gazi',8*12,'nungkul',48,'bone',24,'silk',4];
//    var circleja =['hangma',30,'lin',30,'bigleaf',50,'hangmajul',10,
//                  'himzul',13,'suzi',8*12,'zil',24,'majul',24,'bburi',24,'majulkkup',12,'silk',4];
//    var blackevil =['banje_gajuk',13,'jebong',10,
//                   'lin',39,'linflower',13,'oldleaf',5*13,'silk',5,'bangtan',5];
//    var sienceban =['saijalsam',30,'hongmaggup',20,'ggunmal',20,'tail',20,'git',20,
//                   'banje_gajuk',13,'jinju',18,'silk',5,'bangtan',5];
//    var cobra =['saijalsam',30,'hongmaggup',20,'ggunmal',20,'tail',20,'git',20,
//               'jebong',10,'hangma',39,'lin',39,'bigleaf',5*13,'hangmajul',13,'silk',5,'bangtan',5];
//    var metalhelmet = ['gyungjilyuri',10,
//                       'titanumhab',10,
//                       'banje_gajuk',14,
//                       'silk',6,
//                       'bangtan',6
//                      ];
//    var bluemetal = [
//                        'mosi',40,
//                        'mosiggup',20,
//                        'saijalsam',40,
//                        'lin',40,
//                        'git',20,
//                        'gyungjilyuri',10,
//                        'jebong',11,
//                        'silk',6,
//                        'bangtan',6
//                     
//                    ];
//    var junghyuonmoo = [
//        'mosi',40,
//        'mosiggup',20,
//        'saijalsam',40,
//        'lin',40,
//        'git',20,
//        'dolhoney',10,
//        'suzi',8*18,'zil',2*18,'majul',2*18,'bburi',2*18,'majulkkup',1*18,
//        'silk',6,
//        'bangtan',6
//    ];
//    
//    var armorList = [
//        yagumoza,bag2,bag3,bag4,bangtan,elite,funkmask,funkja,whiteangel,circlemask,circleja,blackevil,sienceban,cobra,metalhelmet,bluemetal,junghyuonmoo
//    ];
//    
//    var chulge = ['chul',2,'gazi',4];
//    var sixmot = ['chul',4,'gazi',8,'nungkul',4,'bone',2];
//    var chulgun = ['juseuk',4,'chul',4,'moksim',4];
//    var nasamot = ['juseuk',4,'chul',4,'moksim',4,'soon',4,'maseed',1,'yuhang',2];
//    var aluhab = ['alu',5,'juseuk',5,'oldnamu',9,'oil',5];
//    var gangchul = ['chul',4,'gazi',8,'sili',3,'tungsten',1];
//    var pipe = ['guri',5,'alu',5,'heyang',9,'bangyean',3];
//    var chun = ['bburi',2,'majulkkup',1];
//    var plastic = ['suzi',8,'zil',2,'majul',2,'bburi',2,'majulkkup',1];
//    var poli = ['hangma',3,'lin',3,'bigleaf',5,'hangmajul',1];
//    var nailon = ['lin',3,'linflower',1,'oldleaf',5];
//    var gajuk = ['yasu',1,'zil',3,'tape',1,'hangma',3];
//    var spring = ['silver',6,'nonghong',3,'guri',6,'liba',1,'oak',12];
//    var enplastic =['suzi',16,'zil',4,'majul',4,'bburi',4,'majulkkup',2,'silver',6,'blood',3,'sum',1,'bakdal',7];
//    var mojik = ['saijalsam',3,'hongmaggup',2,'ggunmal',2,'tail',2,'git',2];
//    var jebong = ['saijalsam',3,'hongmaggup',2,'git',2,'jinju',2,'tulsil',1];
//    
//    var baCore = ['silk',2,
//                  'alu',5*5,'juseuk',5*5,'oldnamu',9*5,'oil',5*5,
//                 'suzi',48,'zil',12,'majul',12,'bburi',12,'majulkkup',6,
//                 'fat',12,'mot',5];
//    var baEngine = ['coating',2,
//                   'alu',5*5,'juseuk',5*5,'oldnamu',9*5,'oil',5*5,
//                   'suzi',48,'zil',12,'majul',12,'bburi',12,'majulkkup',6,
//                   'yasu',12,'mot',5];
//    var baNavi = ['silk',2,
//                 'lin',15,'linflower',5,'oldleaf',25,
//                  'chul',24,'gazi',48,'nungkul',24,'bone',12,
//                 'galazin',25,'jubchak',5];
//    var baFrame = ['silk',2,
//                  'lin',15,'linflower',5,'oldleaf',25,
//                  'chul',24,'gazi',48,'nungkul',24,'bone',12,'hongma',7,'jubchak',5];
//    var faCore = ['silk',2,
//                 'chul',20,'gazi',40,'sili',15,'tungsten',5,
//                 'bburi',12,'majulkkup',6,'yasuebbal',12,'yuri',5];
//    var faEngine = ['coating',2,
//                   'banje_pipe',5,
//                   'bburi',12,'majulkkup',6,
//                   'yasutul',7,'yuri',5];
//    var faNavi = ['silk',2,
//                 'banje_gajuk',5,
//                 'juseuk',24,'chul',24,'moksim',24,'soon',24,'maseed',6,'yuhang',12,
//                 'galazin',25,'tungsten',5];
//    var faFrame = ['silk',2,
//                  'hangma',22,'lin',15,'bigleaf',25,'hangmajul',5,
//                  'juseuk',24,'chul',24,'moksim',24,'soon',24,'maseed',6,'yuhang',12,
//                  'tape',5];
//    var goCore = ['banje_gajuk',7,'banje_pipe',7,'yasutul',10,'tungsten',7,'silk',3];
//    var goEngine = ['sum',7,'enplastic',6,
//                   'saijalsam',18,'hongmaggup',12,'ggunmal',12,'tail',12,'git',12,
//                   'jinju',10,'coating',3];
//    var goNavi = ['silver',36,'nonghong',18,'guri',36,'liba',6,'oak',72,
//                 'enplastic',6,
//                 'saijalsam',18,'hongmaggup',12,'ggunmal',12,'tail',12,'git',12,
//                 'juseuk',36,'chul',36,'moksim',36,
//                 'silk',3];
//    var goFrame = ['jebong',6,
//                  'silver',36,'nonghong',18,'guri',36,'liba',6,'oak',72,
//                  'alu',35,'juseuk',35,'oldnamu',63,'oil',35,
//                  'lin',21,'linflower',7,'oldleaf',35,
//                  'silk',3];
//    var mugibusok =['sam',13,
//              'chul',4,'gazi',8,'sili',3,'tungsten',1,
//              'goldgang',7,
//              'hito',4,
//              'yasufoot',2
//             ];
//    var titahabbanje =['sam',7,'hito',4,'yasubackbone',2,
//                       'silver',6,'nonghong',3,'guri',6,'liba',1,'oak',12,
//                       'alu',5,'juseuk',5,'oldnamu',9,'oil',5
//             ];
//    var amalgam = ['suen',8,'goldgang',8,'guri',8,'hongmaggup',2,
//                   'alu',10,'juseuk',10,'oldnamu',18,'oil',10
//    ];
//    var gukjuyongbanje = [
//        'chul',8,'gazi',16,'sili',6,'tungsten',2,
//        'suen',8,
//        'chum',4,
//        'sol',8,
//        'hito',4
//    ];
//    var sumyoujik = [
//        'mosi',4,
//        'mosiggup',2,
//        'saijalsam',4,
//        'lin',4,
//        'git',2
//    ];
//    var gyungilbanje = [
//        'yuri',1,
//        'chul',4,'gazi',8,'sili',3,'tungsten',1,
//        'mosiggup',2,
//        'hangma',3,'lin',3,'bigleaf',5,'hangmajul',1,
//        'git',2
//    ];
//    var pleranel = [
//        'hob',4,
//        'nok',15,
//        'yasu',2,
//        'saijalsam',3,'hongmaggup',2,'ggunmal',2,'tail',2,'git',2,
//        'lin',6,'linflower',2,'oldleaf',10
//    ];
//    var mugisilbanje = [
//        'sol',8,
//        'chungma',2,
//        'git',4,
//        'mosi',4,'mosiggup',2,'saijalsam',4,'lin',10,'linflower',2,'oldleaf',10
//    ];
//    
//    var banjeList = [
//        chulge,sixmot,chulgun,nasamot,aluhab,gangchul,pipe,chun,plastic,nailon,poli,gajuk,spring,enplastic,mojik,jebong,baCore,baEngine,baNavi,baFrame,faCore,faEngine,faNavi,faFrame,goCore,goEngine,goNavi,goFrame,mugibusok,titahabbanje,amalgam,gukjuyongbanje,sumyoujik,gyungilbanje,pleranel,mugisilbanje
//    ];
//    
//    $('.item_kind>li').on('click',function(){
//        $('.hide_section').css({display:'none'});
//        $('.item_kind>li').removeClass('selected');
//        $(this).addClass('selected');
//        $('.item_list').css({display:'none'});
//        var a = $(this).index();
//        if(a==0){
//            $('.weapon_list').css({display:'block'});
//        }else if(a==1){
//            $('.armor_list').css({display:'block'});
//        }else if(a==2){
//            $('.banje_list').css({display:'block'});
//        }
//    });
//    
//    /*
//    $('.auto_rcs_money').on('click',function(){
//        alert('자동 입력 했습니다. 정확한 예상 가격을 위해 단가를 직접 입력하기를 권장합니다.');
//        for(var i=0;i<rcsAuto.length;i++){
//            $('.resource_list>li:nth-child('+(i+1)+') .rcs_money').val(rcsAuto[i]);
//        }
//    });
//    
//    $('.ex_auto_rcs_money').on('click',function(){
//        alert('자동 입력 했습니다. 정확한 예상 가격을 위해 단가를 직접 입력하기를 권장합니다.');
//        for(var i=0;i<exRcsAuto.length;i++){
//            $('.need_gold>li:nth-child('+(i+1)+') .exg_money').val(exRcsAuto[i]);
//        }
//    });
//    */
//    var recentlyCalItemName = '';
//    
//    $('.item_list>li').on('click',function(){
//        $('.rcs_many').val(0);
//        $('.resource_list>li').css({display:'none'});
//        $('.hide_section').css({display:'block'});
//        $('.final_page').css({display:'none'});
//        if($(this).attr('class')=='wp'){ //무기중 선택
//            var obj = weaponList[$(this).index()];
//            $('html,body').animate({scrollTop:$('.resource_list').offset().top-190},500);
//        }else if($(this).attr('class')=='am'){
//            var obj = armorList[$(this).index()];
//            $('html,body').animate({scrollTop:$('.resource_list').offset().top-190},500);
//        }else if($(this).attr('class')=='bj'){
//            var obj = banjeList[$(this).index()];
//            $('html,body').animate({scrollTop:$('.resource_list').offset().top-190},500);
//        }
//        console.log(obj.length/2);
//        recentlyCalItemName = $(this).children('.item_name').text();
//        console.log(recentlyCalItemName);
//        
//        
//        for(var i=0;i<obj.length;i+=2){
//            $('.'+obj[i]).css({display:'inline-block'});
//            $('.'+obj[i]+' .rcs_name span').html('x '+obj[i+1]);
//            $('.'+obj[i]+' .rcs_many').val(obj[i+1]);
//            //alert($('.'+obj[i]+' .rcs_many').val() + ' : ' + obj[i]);
//        }
//    });
//    
//    $('.calcul_rcs').on('click',function(){ //result
//        var resultM = 0;
//        $('.final_page').css({display:'block'});
//        $('html,body').animate({scrollTop:$('.final_page').offset().top-60},500);
//        $('.result_list').html('');
//        $('.resource_list>li').each(function(index){
//            var a = $('.resource_list>li:nth-child('+(index+1)+') .rcs_many').val();
//            var b = $('.resource_list>li:nth-child('+(index+1)+') .rcs_name').html();
//            var c = $('.resource_list>li:nth-child('+(index+1)+') .rcs_money').val();
//            
//            if(a>0){
//                $('.result_list').append('<li class="adjust_rcs"><span class="final_rcs">'+ b +' (개당 '+ c +'G)</span> = <span class="final_rcs_sum">'+(a*c)+'</span> 골드  <i class="fas fa-minus-circle"></i></li> ');
//            }
//            resultM+=(a*c);
//        });
//        $('.final_money span').html(resultM);
//        
//    });
    
//    $('.rcs_money').on('click',function(){
//        $(this).val('');
//    });
//    $('.rcs_money').on('keyup',function(){
//        var f = $(this).val();
//        if(isNaN(f)){
//            alert('숫자만 입력해주세요');
//            $(this).val(0);
//        }
//        if(f=='' || f==null){
//            $(this).val(0);
//        }
//    });
//    $('.rcs_money').on('focusout',function(){
//        var f = $(this).val();
//        if(f=='' || f==null){
//            $(this).val(0);
//        }
//    });
    
    $('.need_gold .exg_money').on('keyup',function(){
        var f = $(this).val();
        if(isNaN(f)){
            alert('숫자만 입력해주세요');
            $(this).val(0);
        }
        if(f=='' || f==null){
            $(this).val(0);
        }
    });
                       
    $(document).on('click','.adjust_rcs',function(){
        if(confirm('이 재료를 내역에서 제외할까요?')){
            $(this).css({display:'none'});
            var resultM = $('.final_money span').html();
            resultM -= Number($(this).children('.final_rcs_sum').html());
            $('.final_money span').html(resultM);
            
            itemCalSusu(resultM);
        }else{
            
        }
    });
    
    /*
    localStorage.doCheckList = [];
    alert(doCheckList);
    
    $('.todo_check').on('change',function(){
        if($('.todo_check').is(":checked")){
            $(this).parent('li').addClass('do_checking');
        }else{
            $(this).parent('li').removeClass('do_checking');
        }
    });
    */
    
    
    
    /*
    var exRcsAuto = [
        2000,2000,2000,2000,400,800,(180/7),rcsAuto[8],rcsAuto[0],rcsAuto[24],rcsAuto[9],rcsAuto[4],rcsAuto[2],rcsAuto[10],rcsAuto[18]
    ];
    */
    $('.ex_final_btn_ex_1').on('click',function(){
        var exfArray = [
            40*120,
            20*120,
            40*120,
            20*120,
            $('.need_gold>li:nth-child(1) .exg_money').val(), //고분자
            $('.need_gold>li:nth-child(2) .exg_money').val(), //원단
            $('.need_gold>li:nth-child(1) .exg_money').val(), //고분자
            $('.need_gold>li:nth-child(2) .exg_money').val(), //원단
            400, //철제
            800, //합금
            40*(120/140),
            $('.need_gold>li:nth-child(3) .exg_money').val(),
            $('.need_gold>li:nth-child(4) .exg_money').val(),
            $('.need_gold>li:nth-child(5) .exg_money').val(),
            $('.need_gold>li:nth-child(6) .exg_money').val(),
            $('.need_gold>li:nth-child(7) .exg_money').val(),
            $('.need_gold>li:nth-child(8) .exg_money').val(),
            $('.need_gold>li:nth-child(9) .exg_money').val(),
        ];
        
        $('.ex_final').css({display:'block'});
        $('html,body').animate({scrollTop:$('.ex_final').offset().top-80},500);
        
        var rBestName = '';
        var rBestMoney= 0;
        var rWosrtName = '';
        var rWosrtMoney= 0;
        
        for(var i=1;i<$('.ex_final table tr').length;i++){
            var resultMoneyToGold = exfArray[i-1]*$('.ex_final table tr:nth-child('+(i+1)+') .exf_many').val();
            resultMoneyToGold -= $('.ex_final table tr:nth-child('+(i+1)+') .exf_goldbar').val();
            resultMoneyToGold -= $('.ex_final table tr:nth-child('+(i+1)+') .exf_credit').val()*120;
            
            resultMoneyToGold /= $('.ex_final table tr:nth-child('+(i+1)+') .exf_tropy').val(); 
            resultMoneyToGold = resultMoneyToGold.toFixed(1);
            
            if(Number(resultMoneyToGold)>rBestMoney){
                rBestMoney = resultMoneyToGold;
                rBestName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }else if(Number(resultMoneyToGold)==rBestMoney){
                rBestName += ', ' + $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            
            if(i==1){
                rWosrtMoney = resultMoneyToGold;
                rWosrtName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            if(Number(resultMoneyToGold)<rWosrtMoney){
                rWosrtMoney = resultMoneyToGold;
                rWosrtName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }else if(Number(resultMoneyToGold)==rWosrtMoney && i!=1){
                rWosrtName += ', ' + $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            
            $('.ex_final table tr:nth-child('+(i+1)+') .ex_veni').html(resultMoneyToGold);
            if(resultMoneyToGold<0){
                $('.ex_final table tr:nth-child('+(i+1)+') .ex_veni').html('손해('+resultMoneyToGold+')');
            }
        }
        
        $('.ex_best .ex_rating_money').html(rBestMoney);
        $('.ex_best .ex_rating_name').html(rBestName);
        
        $('.ex_worst .ex_rating_money').html(rWosrtMoney);
        $('.ex_worst .ex_rating_name').html(rWosrtName);
        
    });
    
    $('.ex_final_btn_ex_2').on('click',function(){
        var exfArray = [
            Number($('.need_gold>li:nth-child(1) .exg_money').val()),
            20*120,
            12*120,
            Number($('.need_gold>li:nth-child(2) .exg_money').val()),
            85.7,
            54
        ];
        
        $('.ex_final').css({display:'block'});
        $('html,body').animate({scrollTop:$('.ex_final').offset().top-80},500);
        
        var rBestName = '';
        var rBestMoney= 0;
        var rWosrtName = '';
        var rWosrtMoney= 0;
        
        for(var i=1;i<$('.ex_final table tr').length;i++){
            var resultMoneyToGold = exfArray[i-1];
            var sumGachi = $('.ex_final table tr:nth-child('+(i+1)+') .exf_tropy').val()*8;
            sumGachi += $('.ex_final table tr:nth-child('+(i+1)+') .exf_goldbar').val()*4;
            sumGachi += $('.ex_final table tr:nth-child('+(i+1)+') .exf_credit').val()*2;
            var allCredit = 0;
            
            console.log($('.ex_final table tr:nth-child(4) .exf_tropy').val());
            
            resultMoneyToGold /= sumGachi;
            resultMoneyToGold = resultMoneyToGold.toFixed(1);
            allCredit = sumGachi*0.125;
                
            if(Number(resultMoneyToGold)>rBestMoney){
                rBestMoney = resultMoneyToGold;
                rBestName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }else if(Number(resultMoneyToGold)==rBestMoney){
                rBestName += ', ' + $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            
            if(i==1){
                rWosrtMoney = resultMoneyToGold;
                rWosrtName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            if(Number(resultMoneyToGold)<rWosrtMoney){
                rWosrtMoney = resultMoneyToGold;
                rWosrtName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }else if(Number(resultMoneyToGold)==rWosrtMoney && i!=1){
                rWosrtName += ', ' + $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            
            $('.ex_final table tr:nth-child('+(i+1)+') .ex_veni').html(resultMoneyToGold);
            $('.ex_final table tr:nth-child('+(i+1)+') .allcredit_serv').html(allCredit+' 크레딧');
        }
        
        $('.ex_best .ex_rating_money').html(rBestMoney);
        $('.ex_best .ex_rating_name').html(rBestName);
        
        $('.ex_worst .ex_rating_money').html(rWosrtMoney);
        $('.ex_worst .ex_rating_name').html(rWosrtName);
        
    });
    
    //신화,천스,합금,철제
    $('.ex_final_btn_ex_3').on('click',function(){
        var exfArray = [
            2000,
            2000,
            Number($('.need_gold>li:nth-child(2) .exg_money').val()),//원단
            Number($('.need_gold>li:nth-child(1) .exg_money').val()),//고분자
            2400,//배10
            2400,
            1440,//연10
            1440,
            25.7,
            1800,
            800,
            400
        ];
        
        $('.ex_final').css({display:'block'});
        $('html,body').animate({scrollTop:$('.ex_final').offset().top-80},500);
        
        var rBestName = '';
        var rBestMoney= 0;
        var rWosrtName = '';
        var rWosrtMoney= 0;
        
        for(var i=1;i<$('.ex_final table tr').length;i++){
            var resultMoneyToGold = exfArray[i-1];
            resultMoneyToGold -= $('.ex_final table tr:nth-child('+(i+1)+') .exf_many').val()*120/140;
            resultMoneyToGold -= $('.ex_final table tr:nth-child('+(i+1)+') .exf_credit').val()*120;
            resultMoneyToGold /= $('.ex_final table tr:nth-child('+(i+1)+') .exf_tropy').val();
            /*
            $('.ex_final table tr:nth-child('+(i+1)+') .exf_tropy').val()*8;
            $('.ex_final table tr:nth-child('+(i+1)+') .exf_goldbar').val()*4;
            $('.ex_final table tr:nth-child('+(i+1)+') .exf_credit').val()*2;
            */
            resultMoneyToGold = resultMoneyToGold.toFixed(1);
            
            if(Number(resultMoneyToGold)>rBestMoney){
                rBestMoney = resultMoneyToGold;
                rBestName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }else if(Number(resultMoneyToGold)==rBestMoney){
                rBestName += ', ' + $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            
            if(i==1){
                rWosrtMoney = resultMoneyToGold;
                rWosrtName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            if(Number(resultMoneyToGold)<rWosrtMoney){
                rWosrtMoney = resultMoneyToGold;
                rWosrtName = $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }else if(Number(resultMoneyToGold)==rWosrtMoney && i!=1){
                rWosrtName += ', ' + $('.ex_final table tr:nth-child('+(i+1)+') td:first-child').html();
            }
            
            $('.ex_final table tr:nth-child('+(i+1)+') .ex_veni').html(resultMoneyToGold);
        }
        
        $('.ex_best .ex_rating_money').html(rBestMoney);
        $('.ex_best .ex_rating_name').html(rBestName);
        
        $('.ex_worst .ex_rating_money').html(rWosrtMoney);
        $('.ex_worst .ex_rating_name').html(rWosrtName);
        
    });
    
    var timeStopCkr= new Array(20);
    $('.map_box>li').css({height:$('.map_box>li').width()});
    $(window).resize(function(){$('.map_box>li').css({height:$('.map_box>li').width()});});
    
    var mapNameList = ["snowhill","gaul","samak","mos","dabet"];
    var nowMapSel = 0; //기본값: 스노우힐
    $('.map_kind>li').on('click',function(){
        $('.map_kind>li').removeClass('checked');
        $(this).addClass('checked');
        
        $('.map_detail>li').removeClass('checked');
        $('.map_detail>li:first-child').addClass('checked');
        
        $('.map_box>li').css({display:"none"});
        $('.map_box>li').eq($(this).index()).css({display:"block"});
        nowMapSel = $(this).index();
        $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
            background:"url(../images/maps/"+mapNameList[nowMapSel]+"/all.png)",
            backgroundSize:"contain"
        });
        
        if($(this).index()==0){
            $('.map_detail_timer,.mapchecker_h3').css({display:"block"});
            $('.map_detail_normal').css({display:"none"});
            $('.coatbox_list').css({display:'block'});
        }else{
            $('.map_detail_timer,.mapchecker_h3').css({display:"none"});
            $('.map_detail_normal').css({display:"block"});
        }
    });
    
    $('.map_detail_timer>li').on('click',function(){
        $('.map_detail>li').removeClass('checked');
        $(this).addClass('checked');
        
        $('.point_list').css({display:'none'});
        if($(this).index()==0 || $(this).index()==1){
            $('.coatbox_list').css({display:'block'});
        }
        
        var l = $(this).index();
        if(l==0){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/all.png)",
                backgroundSize:"contain"
            });
        }else if(l==1){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/basic.png)",
                backgroundSize:"contain"
            });
        }else if(l==2){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/npc.png)",
                backgroundSize:"contain"
            });
        }else if(l==3){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/detect.png)",
                backgroundSize:"contain"
            });
        }else if(l==4){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/special.png)",
                backgroundSize:"contain"
            });
        }
    });
    
    
    $('.map_detail_normal>li').on('click',function(){
        $('.map_detail>li').removeClass('checked');
        $(this).addClass('checked');
        
        var l = $(this).index();
        if(l==0){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/all.png)",
                backgroundSize:"contain"
            });
        }else if(l==1){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/npc.png)",
                backgroundSize:"contain"
            });
        }else if(l==2){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/detect.png)",
                backgroundSize:"contain"
            });
        }else if(l==3){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/special.png)",
                backgroundSize:"contain"
            });
        }else if(l==4){
            $('.map_box>li:nth-child('+(nowMapSel+1)+') .plus_map').css({
                background:"url(../images/maps/"+mapNameList[nowMapSel]+"/animal.png)",
                backgroundSize:"contain"
            });
        }
    });
    
    $('.box_point').on('click',function(){
        if($(this).hasClass('load_now')){
            $('.time_alert').animate({
                opacity:1
            },500,function(){
                $('.time_alert').delay(1000).animate({
                    opacity:0
                },500);
            });
        }
        $(this).addClass('load_now');
        var spendTime = 221;
        var obj = $(this);
        var objTimer = $(this).children('.timer'); 
        var objNumber = $(this).index();
        
        clearInterval(timeStopCkr[objNumber]);  
        timeStopCkr[objNumber] = setInterval(function(){
            var mi = parseInt(spendTime/60);
            var se = spendTime%60;
            objTimer.html('남은 시간<br /><span class="tis">'+mi+'</span> 분 <span class="tis">'+se+'</span> 초');
            spendTime--;
            if(spendTime<0){
                clearInterval(timeStopCkr[objNumber]); 
                obj.removeClass('load_now');
                objTimer.html('남은 시간<br /><span class="tis">3</span> 분 <span class="tis">42</span> 초');
            }
        },1000);  
    });
    
    $('.npc_point').on('click',function(){
        $(this).children('img').attr('src','./images/4_icon.png')
    });
    
    $('.warning_95').on('change',function(){
        if($(this).val()=='95식'){
            alert("95식은 장원마다 공격력이 다릅니다. 공격력에 반드시 [진화]속성에 의한 증가값을 빼고 입력해주세요.");
        }
    });
});


        
function itemCal(idx,kind){
    var nameForGtag = '';
    if(kind=='wan'){
        gtag('event', '[완제품] ' + wanjepoom[idx].name + ' 클릭');
        console.log('[완제품] ' + wanjepoom[idx].name + ' 클릭');
    }else{
        gtag('event', '[반제품] ' + banjepoom[idx].name + ' 클릭');
        console.log('[반제품] ' + banjepoom[idx].name + ' 클릭');
    }
    
    $('.result_list').html('');
    var html = '';

    html += '<div class="tree_wrap">';
    html += itemCalDetail(idx,0,1,kind);
    html += '</div>';

    $('.hide_section').css({display:'block'});
    $('.goods_box').html(html);
    $('html,body').animate({scrollTop:$('.goods_box').offset().top-190},500);
}

function itemCalDetail(idx,level,amount,kind){
    if(typeof kind == 'undefined'){
        kind = 'ban';
    }
    var html = '';
    html += '<div class="origin_title">';
    if(typeof banjepoom[idx].special != 'undefined'){
        html += '<span class="tree_special">'+banjepoom[idx].special+' 특수</span>'
    }
    html += '   <img src="'+banjepoom[idx].src+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'">';
    html += '</div>';

    var openBox;
    if(kind == 'wan'){
        openBox = wanjepoom[idx];
    }else{
        openBox = banjepoom[idx];
    }
    openBox.need.forEach(function(item){
        var product = [];
        nameList.forEach(function(goods){
            if(goods[0] == item[0]){
                product = goods;
            }
        });

        if(product.length > 0){
            html += '<div class="tree_level use tree_origin tree_level_'+level+'" data-amount="'+item[1]*amount+'">';
            if(typeof product[2] != 'undefined'){
                html += '<div class="origin_special">'+product[2]+'</div>';
            }
            html += '   <p><span>'+product[0]+' x '+item[1]*amount+'</span></p>';
            html += '   <img src="'+product[1]+'" onError="this.src=\'./images/rcs/rcs_noimage.png\'">';
            html += '   <div class="goods_price_wrap"><input type="text" name="goods_price" value="'+(typeof product[3] != 'undefined' ? product[3] : '0')+'"> 골드</div>';
        }else{
            html += '<div class="tree_level use tree_resource tree_level_'+level+'" data-amount="'+item[1]*amount+'">';
            html += '   <p><span>'+item[0]+' x '+item[1]*amount+'</span>';
            html += '   <button class="tree_change" onclick="itemCalChange(this);">반제품으로 계산</button></p>';
            html += '   <div class="goods_price_wrap"><input type="text" name="goods_price" value="0"> 골드</div>';
        }

        banjepoom.forEach(function(target,sub_idx){
            if(target.name == item[0]){
                html += itemCalDetail(sub_idx,level+1,item[1]*amount,'ban');
            }
        });

        html += '</div>';
    });
    return html;
}

function itemCalChange(el){
    $(el).closest('.tree_resource').toggleClass('on');
    if($(el).closest('.tree_resource').hasClass('on')){
        $(el).html('자원으로 계산');
    }else{
        $(el).html('반제품으로 계산');
    }
}

function itemCalFinal(){
    var resultM = 0;
    $('.final_page').css({display:'block'});
    $('.result_list').html('');
    $('html,body').animate({scrollTop:$('.final_page').offset().top-60},500);

    $('.tree_level').each(function(idx){
        if($(this).is(':visible') && ($(this).hasClass('tree_origin') || $(this).hasClass('on'))){
            var a = $(this).data('amount');
            var b = $(this).children('p').find('span').html();
            var c = $(this).find('[name="goods_price"]').val();

            if(a>0){
                $('.result_list').append('<li class="adjust_rcs"><span class="final_rcs">'+ b +' (개당 '+ c +'G)</span> = <span class="final_rcs_sum">'+(a*c)+'</span> 골드  <i class="fas fa-minus-circle"></i></li> ');
            }
            resultM+=(a*c);
        }
    });
    $('.final_money span').html(resultM);
    
    itemCalSusu(resultM);
}

function itemCalSusu(resultM){
    var susu_html = '';
    susu_html += '수수료 10% : '+(resultM - (resultM * 0.1)).toFixed(0) + ' ( -'+(resultM * 0.1).toFixed(0)+' )<br />';
    susu_html += '수수료 15% : '+(resultM - (resultM * 0.15)).toFixed(0) + ' ( -'+(resultM * 0.15).toFixed(0)+' )<br />';
    susu_html += '수수료 20% : '+(resultM - (resultM * 0.2)).toFixed(0) + ' ( -'+(resultM * 0.2).toFixed(0)+') ';
    $('.final_money_susu').html(susu_html);
}


function openGnb(){
    $('.gnb_wrap').toggleClass('on');
}