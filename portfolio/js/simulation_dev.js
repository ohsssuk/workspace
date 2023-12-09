$(function(){
    
});

var commanderList = [];

function setCommander(){
    commanderList = [];

    $('.commander_part').each(function(index){
        commanderList[index] = {};
    
        var teamFlag;
        if(index > 2){
            teamFlag = 'enemy';
        }else{
            teamFlag = 'ally';
        }
        
        commanderList[index]['troops'] = parseInt($(this).find('[name="troops[]"]').val());
        commanderList[index]['wounded_troops'] = 0;
        
        commanderList[index]['name'] = $(this).find('[name="name[]"]').val();
        commanderList[index]['id'] = index;
        
        var bonusAptitude = 0;
        if(teamFlag == 'enemy'){
            bonusAptitude = Number($('[name="bonus_aptitude_enemy"]').val());
        }else{
            bonusAptitude = Number($('[name="bonus_aptitude_ally"]').val()); 
        }
        var statPerRate = 
            bonusAptitude + Number($(this).find('[name="aptitude[]"] > option:selected').val());
        var statPerFloat = statPerRate / 100;
        
        commanderList[index]['stat'] = {};
        commanderList[index]['stat']['tong'] = parseInt(Number($(this).find('[name="tong[]"]').val()) * statPerFloat + Number($(this).find('[name="tong_bonus[]"]').val()));
        commanderList[index]['stat']['mu'] = parseInt(Number($(this).find('[name="mu[]"]').val()) * statPerFloat + Number($(this).find('[name="mu_bonus[]"]').val()));
        commanderList[index]['stat']['ji'] = parseInt(Number($(this).find('[name="ji[]"]').val()) * statPerFloat + Number($(this).find('[name="ji_bonus[]"]').val()));
        commanderList[index]['stat']['sok'] = parseInt(Number($(this).find('[name="sok[]"]').val()) * statPerFloat + Number($(this).find('[name="sok_bonus[]"]').val()));

        commanderList[index]['boss'] = (index == 0 || index == 3) ? true : false;
        commanderList[index]['team'] = teamFlag;
        
        var classAdventage = parseInt($('[name="class_bonus"] option:selected').val());
        var moraleAdvendtage = 0;
        if(teamFlag == 'enemy'){
            classAdventage * -1;
            moraleAdvendtage -= parseInt($('[name="morale_enemy"]').val());
        }else{
            moraleAdvendtage -= parseInt($('[name="morale_ally"]').val());
        }
        
        commanderList[index]['variation'] = {};
        commanderList[index]['variation']['g_wdr'] = parseInt($(this).find('[name="give_weapon_damage_rate[]"]').val()) + classAdventage + moraleAdvendtage;
        commanderList[index]['variation']['g_tdr'] = parseInt($(this).find('[name="give_trick_damage_rate[]"]').val()) + classAdventage + moraleAdvendtage;
        commanderList[index]['variation']['r_wdr'] = parseInt($(this).find('[name="receive_weapon_damage_rate[]"]').val()) + classAdventage;
        commanderList[index]['variation']['r_tdr'] = parseInt($(this).find('[name="receive_trick_damage_rate[]"]').val()) + classAdventage;
        
        var skillData = [];
        $(this).find('.skill_core').each(function(ord){
            var skillCore = $(this).data();
            skillCore['ord'] = ord;
            
            skillCore['effect'] = [];
            $(this).find('.effect_core').each(function(){
                skillCore['effect'].push($(this).data());
            });
            
            skillData.push(skillCore);
        });
        console.log(skillData);
        
        commanderList[index]['skill'] = skillData;
        
        commanderList[index]['status'] = [];
        commanderList[index]['stat_bonus'] = [];
        commanderList[index]['variation_bonus'] = [];
    });
    
    commanderList.sort(function (a, b) {
        return b.stat.sok - a.stat.sok;
    });
}

var BattleAction = {
    init: function(){
        BattleAction.explanation = '';
    },
    explanation : '',
    setExplanation : function(txt){
        BattleAction.explanation += txt + '<br>'
    },
    
    battleTurn : 0,
    run : function(){
        BattleAction.init();
        BattleAction.outbreak();
    },
    outbreak : function(){
        commanderList.forEach(function(commander){
            commander['skill'].forEach(function(skill){
                SkillAction.action(skill, commander);
            });
        });
        
        
        console.log(BattleAction.explanation);
    } 
};

var SkillAction = {
    action : function(skill, commander){
        console.log(skill['turn']);
        if(!SkillAction.turnCheck(skill['turn'])){
            return false;
        }
        
        if(!SkillAction.percentageCheck(skill['percentage'])){
            BattleAction.setExplanation(commander['name'] + '의 ' + skill['ord'] + '번 전법이 확률('+skill['percentage']+'%) 때문에 발동하지 않았습니다.');
            return false;
        }
    },
    turnCheck : function(turn){
        if(String(turn).includes(String(BattleAction.battleTurn))){
            return true;
        }else{
            return false;
        }
    },
    percentageCheck : function(rate){
        if(getRandom.activeSuccess(rate)){
            return true;
        }else{
            return false;
        }
    }
};

function setDamage(el){
    var index = $(el).closest('.commander_part').index();
    
    var activeCommander = commanderList[index];
    var defenseCommander = commanderList[3];
    
    var troopsDamage = Number((Math.sqrt(activeCommander['troops'])) * 5);
    var statDiffDamage = activeCommander['mu'] - defenseCommander['tong'];
    var normalDamage = troopsDamage + statDiffDamage;
    if(normalDamage <= 0) normalDamage = 100;
    
    var reduction = $('[name="morale_ally"]').val() / 100;
    var resultDamage = normalDamage * (1 - reduction) * (1 + getRandom.rand15()) * (1 - getRandom.rand15());
    resultDamage = parseInt(resultDamage);
    
    console.log(resultDamage);
}

function getResult(){
    setCommander();
    BattleAction.run();
    
    commanderList.forEach(function(commander){
        console.log(commander);
    });
}

var getRandom = {
    rand15 : function(){
        return (Math.floor(Math.random() * 15)) / 100;
    },
    activeSuccess : function(percentage){
        return Math.floor(Math.random() * 100) <= percentage;
    }
}

var skillPopup = {
    selector : '.skill_popup_wrap.skill',
    targetPart : null,
    open : function(el){
        skillPopup.init();
        skillPopup.targetPart = $(el).closest('.commander_part').find('.skill_part');
        $(skillPopup.selector).addClass('on');
    },
    close : function(){
        $(skillPopup.selector).removeClass('on');
    },
    init : function(){
        $(skillPopup.selector).find('select').each(function(){
            $(this).find('option').eq(0).prop('selected', true);
        });
        
        $(skillPopup.selector).find('input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
        $(skillPopup.selector).find('input[name="sk_maker_turn[]"]').each(function(){
            if($(this).val() != 0){
                $(this).prop('checked', true);
            }
        });
        
        $(skillPopup.selector).find('input[type="number"]').each(function(){
            $(this).val(0);
        });
        
        $(skillPopup.selector).find('.effect_list').html('');
        
        $('input[name="sk_maker_percentage"]').val(100);
    },
    save : function(el){
        var dataEl = '';
        var dataTxt = '';
        
        var category = $('[name="sk_maker_skill_category"] option:selected').val();
        
        dataEl += '<div class="skill_core '+category+'" ';
        
        dataEl += ' data-category="'+category+'" ';
        dataTxt += $('[name="sk_maker_skill_category"] option:selected').text();
        
        if(category == 'active' && $('[name="sk_maker_turn_ready"]').is('checked')){
            dataEl += ' data-ready-active="Y" ';
            dataTxt += '(준비)';
        }
        
        dataTxt += ' | ';
        
        var percentage = Number($('[name="sk_maker_percentage"]').val());
        if(percentage > 0){
            dataEl += ' data-percentage="'+percentage+'" ';
            dataTxt += percentage + '% ';
        }else{
            alert('발동률은 0보다 크게 입력 해주세요.');
            return false;
        }
        
        dataTxt += '<br>';
        
        if($('[name="sk_maker_turn[]"]:checked').length > 0){
            var turn = [];
            $('[name="sk_maker_turn[]"]:checked').each(function(){
                turn.push($(this).val());
            });
            dataEl += ' data-turn="'+turn.join(',')+'" ';
            dataTxt += turn.join(',') + '턴 ';
        }else{
            alert('발동 턴을 입력해주세요.');
            return false;
        }
        
        if($(skillPopup.selector).find('.effect_core').length > 0){
            var effectHtml = $(skillPopup.selector).find('.effect_list').html();
        }else{
            alert('효과를 추가 해주세요.');
            return false;
        }
        
        dataEl += '>';
        dataEl += '<div class="skill_core_info">';
        dataEl +=   '<button onclick="skillPopup.delete(this);" type="button" class="delete_btn">삭제</button>';
        dataEl +=   dataTxt;
        dataEl += '</div>';
        dataEl += '<div class="effect_list">'+effectHtml+'</div>';
        dataEl += '</div>';
        
        skillPopup.targetPart.append(dataEl);
        
        skillPopup.close();
    },
    delete : function(el){
        if(confirm('이 전법을 삭제하시겠습니까?')){
            $(el).closest('.skill_core').remove();
        }
    },
}

var effectPopup = {
    selector : '.skill_popup_wrap.effect',
    targetPart : null,
    open : function(el){
        effectPopup.init();
        effectPopup.targetPart = $(el).closest('.effect_wrap').find('.effect_list');
        $(effectPopup.selector).addClass('on');
    },
    close : function(){
        $(effectPopup.selector).removeClass('on');
    },
    save : function(){
        var dataEl = '';
        var dataTxt = '';
        var successFlag = false;
        
        dataEl += '<div class="effect_core"';
        
        var target = $('[name="sk_maker_target"] option:selected').val();
        dataEl += ' data-target="'+target+'" ';
        dataTxt += '<span class="est est_1">' + $('[name="sk_maker_target"] option:selected').text();
        if($('[name="sk_maker_target"] option:selected').data('countCheck')){
            var targetCount = $('[name="sk_maker_target_count"] option:selected').val();
            dataEl += ' data-target-count="'+targetCount+'" ';
            dataTxt +=  ' ' + targetCount + '명';
        }
        dataTxt += '</span> ';

        if($('[name="sk_maker_damage_rate"]').val() > 0){
            var damageRate = $('[name="sk_maker_damage_rate"]').val();
            var damageCategory = $('[name="sk_maker_damage_category"] option:selected').val();
            dataEl += ' data-damage-rate="'+damageRate+'" ';
            dataEl += ' data-damage-category="'+damageCategory+'" ';
            dataTxt += '<span class="est est_2">' + $('[name="sk_maker_damage_category"] option:selected').text() + ' ' + damageRate + '%</span> ';
            
            successFlag = true;
        }
        
        if($('[name="sk_maker_heal_rate"]').val() > 0){
            var healRate = $('[name="sk_maker_heal_rate"]').val();
            dataEl += ' data-heal-rate="'+healRate+'" ';
            dataTxt += '<span class="est est_6">치료 ' + healRate + '%</span> ';
            
            successFlag = true;
        }
        
        if($('[name="sk_maker_stat_bonus_turn"]').val() > 0 && $('[name="sk_maker_stat[]"]:checked').length > 0 && $('[name="sk_maker_stat_bonus"]').val() != 0){
            var stat = [];
            var statTxt = [];
            $('[name="sk_maker_stat[]"]').each(function(){
                if($(this).is(':checked')){
                    stat.push($(this).val());
                    statTxt.push(langConfig[$(this).val()]);
                }
            });
            if(stat.length > 0){
                var statTarget = stat.join(',');
                var statBonus = $('[name="sk_maker_stat_bonus"]').val();
                var statBonusTurn = $('[name="sk_maker_stat_bonus_turn"]').val();
                dataEl += ' data-stat-target="'+statTarget+'" ';
                dataEl += ' data-stat-bonus="'+statBonus+'" ';
                dataEl += ' data-stat-bonus-turn="'+statBonusTurn+'" ';
                dataTxt += '<span class="est est_3">' + statTxt.join(',') + ' ' + statBonusTurn + '턴 동안 ' + statBonus + '</span> ';
                
                successFlag = true;
            }
        }
        
        if($('[name="sk_maker_status"] option:selected').val() != 'none' && $('[name="sk_maker_status_turn"]').val() > 0){
            var status = $('[name="sk_maker_status"] option:selected').val();
            var statusTurn = $('[name="sk_maker_status_turn"]').val();
            dataEl += ' data-status="'+status+'" ';
            dataEl += ' data-status-turn="'+statusTurn+'" ';
            dataTxt += '<span class="est est_4">' + $('[name="sk_maker_status"] option:selected').text() + ' ' + statusTurn + '턴 동안</span> ';
            
            successFlag = true;
        }
        
        if($('[name="sk_maker_variation_turn"]').val() > 0 && $('[name="sk_maker_variation_rate"]').val() != 0){
            var variation = $('[name="sk_maker_variation"] option:selected').val();
            var variationRate = $('[name="sk_maker_variation_rate"]').val();
            var variationturn = $('[name="sk_maker_variation_turn"]').val();
            dataEl += ' data-variation="'+variation+'" ';
            dataEl += ' data-variation-rate="'+variationRate+'" ';
            dataEl += ' data-variation-turn="'+variationturn+'" ';
            dataTxt += '<span class="est est_5">' + $('[name="sk_maker_variation"] option:selected').text() + ' ' + variationRate + '% ' + variationturn + '턴(회) 동안</span> ';
            
            successFlag = true;
        }
        
        dataEl += '>';
        dataEl +=   dataTxt;
        dataEl +=   '<button onclick="effectPopup.delete(this)" class="delete_btn" type="button">삭제</button>';
        dataEl += '</div>';
        
        if(successFlag){
            effectPopup.targetPart.append(dataEl);
            effectPopup.close();
        }else{
            alert('추가한 효과가 없습니다. 추가할 효과의 [턴]과 [증감 수치]를 확인해주세요. 턴과 증감 수치는 0이 될 수 없습니다.')
        }
    },
    delete : function(el){
        if(confirm('이 효과를 삭제하시겠습니까?')){
            $(el).closest('.effect_core').remove();
        }
    },
    init : function(){
        $(effectPopup.selector).find('select').each(function(){
            $(this).find('option').eq(0).prop('selected', true);
        });
        
        $(effectPopup.selector).find('input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
        
        $(effectPopup.selector).find('input[type="number"]').each(function(){
            $(this).val(0);
        });
    },
    changeEffectTarget : function(el){
        var countChk = $(el).find('option:selected').data('countCheck');
        if(countChk){
            $('[name="sk_maker_target_count"]').css({
                'display' : 'inline-block'
            });
        }else{
            $('[name="sk_maker_target_count"]').css({
                'display' : 'none'
            });
        }
    }
};

var langConfig = {
    enemy : '적군',
    ally : '아군',
    myself : '자신',
    weapon : '무기 피해',
    deceit : '책략 피해',
    mu : '무력',
    ji : '지력',
    tong : '통솔',
    sok : '속도',
}




