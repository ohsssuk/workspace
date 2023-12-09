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
        commanderList[index]['origin_troops'] = commanderList[index]['troops'];
        commanderList[index]['wounded_troops'] = 0;
        
        commanderList[index]['name'] = $(this).find('[name="name[]"]').val();
        commanderList[index]['id'] = index + 1;
        
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
            skillCore['ord'] = ord + 1;
            if(!isEmpty(skillCore['readyState'])){
                skillCore['readyState'] = 'ready';
            }
            
            skillCore['effect'] = [];
            $(this).find('.effect_core').each(function(){
                skillCore['effect'].push($(this).data());
            });
            
            skillData.push(skillCore);
        });
        
        commanderList[index]['skill'] = skillData;
        
        commanderList[index]['stat_calculate'] = [];
        commanderList[index]['variation_calculate'] = [];
        
        commanderList[index]['status'] = {};
        
        
        BattleAction.finalGraph[teamFlag]['otr'] += commanderList[index]['origin_troops'];
    });
    
    commanderList.sort(function (a, b) {
        return b.stat.sok - a.stat.sok;
    });
}

var Explanation = {
    txt : '',
    setExplanation : function(txt){
        Explanation.txt += txt + '<br>'
    },
    setCommanderName : function(commander){
        return '<span class="'+commander['team']+'">['+commander['name']+']</span>';
    },
    setVariationExplanation : function(effect, targetCommander, targetResultRate, langCategory, langKind){
        Explanation.txt += Explanation.setCommanderName(targetCommander) + '의 ' + langCategory + '(이)가 '+effect['variationRate']+'%(' + setMaxVariationLimit(targetResultRate) + '%) ' + langKind + '합니다. ['+effect['variationTurn']+'턴 동안]<br>';
    },
    setStatusName : function(statusName){
        return '<span class="status_clr">['+langConfig[statusName]+']</span>';
    },
    setResultInfo : function(){
        var html = '';
        
        var finalStr;
        if(BattleAction.endFlag){
            if(BattleAction.winner == 'enemy'){
                finalStr = '패배';
            }else{
                finalStr = '승리';
            }
        }else{
            finalStr = '무승부';
        }
        
        html += '<div class="turn">결과</div>';
        html += '<span class="final '+BattleAction.winner+'">'+finalStr+'</span>';
        
        html += '<br><br>';
        
        html += '<div class="turn">남은 부대</div>';
        html += '<div class="final_com_box">';
        
        commanderList.sort(function (a, b) {
            return a.id - b.id;
        });
        
        var teamCheck = '';
        commanderList.forEach(function(commander, index){
            BattleAction.finalGraph[commander['team']]['tr'] += commander['troops'];

            html += '<div class="final_com '+commander['team']+'">';
            html += '   <div class="final_com_nm">'+commander['name']+'</div>';
            html += '   <div class="final_com_tr">'+commander['troops']+'</div>';
            html += '   <div class="final_com_dtr">(사망: '+(commander['origin_troops']-commander['troops']-commander['wounded_troops'])+')</div>';
            html += '   <div class="final_com_wtr">(부상: '+commander['wounded_troops']+')</div>';
            html += '</div>';
            
            teamCheck = commander['team'];
        });
        html += '</div>';
        
        html += '<br>';
        html += '<div class="turn">점유율</div>';
        
        var allAmount = BattleAction.finalGraph['ally']['otr'] + BattleAction.finalGraph['enemy']['otr'];
        var allyPer = (BattleAction.finalGraph['ally']['otr']/allAmount*100).toFixed(2);
        var enemyPer = (100 - allyPer).toFixed(2);
        
        html += '<div class="final_graph_rate">'+(BattleAction.finalGraph['ally']['tr']/allAmount*100).toFixed(2)+'%</div>';
        
        html += '<div class="final_graph_rate_help">*점유율이 극단적일수록 확률에 의한 전투의 변수가 적습니다.</div>';
        
        html += '<div class="final_graph">';
    
        html += '   <div class="final_graph_team final_graph_ally" style="width:'+allyPer+'%;">';
        html += '       <div class="bar" style="width:'+(BattleAction.finalGraph['ally']['tr']/BattleAction.finalGraph['ally']['otr']*100).toFixed(2)+'%;"></div>';
        html += '   </div>';

        html += '   <div class="final_graph_team final_graph_enemy" style="width:'+enemyPer+'%;">';
        html += '       <div class="bar" style="width:'+(BattleAction.finalGraph['enemy']['tr']/BattleAction.finalGraph['enemy']['otr']*100).toFixed(2)+'%;"></div>';
        html += '   </div>';
        
        html += '       <div class="final_graph_info">';
        html += BattleAction.finalGraph['ally']['tr']+' / '+BattleAction.finalGraph['ally']['otr']+' :  '+BattleAction.finalGraph['enemy']['tr']+' / '+BattleAction.finalGraph['enemy']['otr'];
        html += '       </div>';
        
        html += '</div>';
        
        BattleAction.resetfinalGraph();
        
        return html;
    },
};

var BattleAction = {
    init: function(){
        Explanation.txt = '';
        BattleAction.battleTurn = 0;
        BattleAction.endFlag = false;
        BattleAction.winner = 'none';
    },
    finalGraph : {
        ally : {
            otr : 0,
            tr : 0,
        },
        enemy : {
            otr : 0,
            tr : 0,
        }
    },
    resetfinalGraph : function(){
        BattleAction.finalGraph = {
            ally : {
                otr : 0,
                tr : 0,
            },
            enemy : {
                otr : 0,
                tr : 0,
            }
        }
    },
    battleTurn : 0,
    endFlag : false,
    winner : '',
    run : function(){
        BattleAction.init();
        
        for(var i = 0; i <= 8; i++){
            if(BattleAction.endFlag){
                break;
            }
            
            commanderList.sort(function (a, b) {
                return b.stat.sok - a.stat.sok;
            });
            
            BattleAction.battlePage();
        }
    },
    battlePage : function(){
        Explanation.txt += '<hr>';
        Explanation.txt += '<span class="turn">['+BattleAction.battleTurn+'턴]</span>';
        
        try {
            commanderList.forEach(function(commander){
                if(BattleAction.endFlag){
                    throw new Exception();
                }

                if(BattleAction.battleTurn > 0){
                    Explanation.setExplanation(Explanation.setCommanderName(commander)+' 행동 시작');
                    BalanceAccounts.action(commander);
                }

                if(validationCheck.controledStatus(commander, 'gongpo') && BattleAction.battleTurn > 0){
                    
                     Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName('gongpo')+'효과로 행동 불가.');
                    
                    
                    commander['skill'].forEach(function(skillItem){
                        if(typeof skillItem['readyState'] != 'undefined' && skillItem['readyState'] == 'do'){
                            skillItem['readyState'] = 'ready';
                            Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 준비중인 전법이 취소됩니다.');
                        }
                    });
                }else{

                    commander['skill'].forEach(function(skill){
                        SkillAction.action(skill, commander, false);
                    });

                    if(BattleAction.battleTurn > 0){
                        if(validationCheck.controledStatus(commander, 'mujangheje')){
                            Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName('mujangheje')+'효과로 일반공격 불가.');
                        }else{

                            NormalAttackAction.action(commander);

                            if(!isEmpty(commander['status']['yean'])){
                                Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName(commander['status']['yean']['name'])+'효과가 발동 되었습니다.');

                                NormalAttackAction.action(commander);
                            }
                        }
                    }
                }

                if(BattleAction.battleTurn > 0){
                    BalanceAccounts.statusCalculate(commander['status'], commander);
                    Explanation.setExplanation('');
                }

            });
        }catch(e){

        }
        
        BattleAction.battleTurn++;
    } 
};

var BalanceAccounts = {
    action : function(commander){
        BalanceAccounts.statCaculate(commander['stat_calculate']);
        BalanceAccounts.variationCaculate(commander['variation_calculate']);
    },
    statusCalculate : function(statusList, commander){
        if(isEmpty(statusList)){
            return false;
        }
        
        for (var key in statusList) {
            if (statusList.hasOwnProperty(key)) {
                statusList[key]['turn']--;
                
                if(statusList[key]['turn'] == 0){
                    Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName(statusList[key]['name'])+'상태가 만료 되었습니다.');
                    
                    delete statusList[key];
                }
            }
        }
    },
    statCaculate :function(statBonusList){
        if(statBonusList.length == 0){
            return false;
        }
        
        statBonusList.forEach(function(statBonus, statBonusIndex){
            statBonus.turn--;
            
            if(statBonus.turn == -1){
                var targetIdx = findCommanderIndexById(statBonus.tartgetId);
                
                Explanation.txt += Explanation.setCommanderName(commanderList[targetIdx])+'의 속성 증감 효과가 만료 되었습니다.';
                Explanation.txt += '<div class="ef_wrap">';
                
                statBonus['kind'].forEach(function(kind){
                    commanderList[targetIdx]['stat'][kind] -= statBonus.point;
                    
                    Explanation.setExplanation(
                        Explanation.setCommanderName(commanderList[targetIdx])+'의 '+langConfig[kind]+'(이)가 '+(statBonus['point'] * -1)+'('+commanderList[targetIdx]['stat'][kind]+') 적용 됩니다.'
                    );
                });
                
                Explanation.txt += '</div>';
            }
        });
    },
    variationCaculate :function(variationBonusList){
        if(variationBonusList.length == 0){
            return false;
        }
        
        variationBonusList.forEach(function(variationBonus, variationBonusIndex){
            variationBonus.turn--;
            
            if(variationBonus.turn == -1){
                var targetIdx = findCommanderIndexById(variationBonus.tartgetId);
                
                Explanation.txt += Explanation.setCommanderName(commanderList[targetIdx])+'의 피해 증감 효과가 만료 되었습니다.';
                Explanation.txt += '<div class="ef_wrap">';
                
                commanderList[targetIdx]['variation'][variationBonus.kind] -= variationBonus.rate;
                    
                Explanation.setExplanation(
                    Explanation.setCommanderName(commanderList[targetIdx])+'의 '+langConfig[variationBonus['kind']]+'(이)가 '+(variationBonus['rate'] * -1)+'%('+commanderList[targetIdx]['variation'][variationBonus.kind]+'%) 적용 됩니다.'
                );
                
                Explanation.txt += '</div>';
            }
        });
    },
    checkAlive : function(){
        var annihilationList = [];
        commanderList.forEach(function(commander, index){
            if(commander['troops'] <= 0){
                Explanation.setExplanation(
                    Explanation.setCommanderName(commander)+'의 병력 0, 전투할 수 없습니다.'
                );
                
                annihilationList.push(commander['id']);
            }
        });
        
        annihilationList.forEach(function(id){
            var annihilationCommander = commanderList[findCommanderIndexById(id)]
            if(annihilationCommander['boss']){
                if(annihilationCommander['team'] == 'enemy'){
                    
                    Explanation.setExplanation('적군 주장 '+Explanation.setCommanderName(annihilationCommander)+' 전투불능으로 아군 승리!');
                    BattleAction.winner = 'ally';
                }else{
                    
                    Explanation.setExplanation('아군 주장 '+Explanation.setCommanderName(annihilationCommander)+' 전투불능으로 적군 승리!');
                    BattleAction.winner = 'enemy';
                }
                BattleAction.endFlag = true;
            }
            
            commanderList.splice(findCommanderIndexById(id), 1);
        });
    },
};

var validationCheck = {
    controledStatus : function(commander, statusName){
        if(!isEmpty(commander['status'][statusName])){
            if(!isEmpty(commander['status']['tongchal'])){
                Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName('tongchal')+'효과로 '+Explanation.setStatusName(statusName)+'상태에 영향을 받지 않습니다.');
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
    }
}

var NormalAttackAction = {
    action : function(commander){
        if(BattleAction.endFlag){
            return false;
        }
        
        var targetInfo = {
            targetCount : 1,
            target : 'enemy'    
        };
        
        if(validationCheck.controledStatus(commander, 'dobal')){
            var dobalCaster = commanderList[findCommanderIndexById(commander['status']['dobal']['caster'])];
            
            if(!isEmpty(dobalCaster)){
                targetInfo = {
                    targetCount : 1,
                    target : dobalCaster['id']
                };
                Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName('dobal')+'효과로 '+Explanation.setCommanderName(dobalCaster)+'(을)를 일반공격 합니다.');
            }
        }
        
        if(validationCheck.controledStatus(commander, 'honran')){
            targetInfo = {
                targetCount : 1,
                target : 'all'    
            };
            Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 '+Explanation.setStatusName('honran')+'효과로 일반공격 대상을 무작위로 선택합니다.');
        }
        
        var normalAttackTarget = setTarget(targetInfo, commander);
        
        if(isEmpty(normalAttackTarget)){
            return true;
        }
        
        var targetCommanderIndex = findCommanderIndexById(normalAttackTarget[0]);
        
        Explanation.setExplanation(Explanation.setCommanderName(commander)+'(이)가 '+Explanation.setCommanderName(commanderList[targetCommanderIndex])+'에게 일반 공격을 시전합니다.');
        
        var normalDamagePoint = getDamage(commander, commanderList[targetCommanderIndex], 'weapon', 1);
                                          
        commanderList[targetCommanderIndex]['troops'] -= normalDamagePoint;
        commanderList[targetCommanderIndex]['wounded_troops'] += parseInt(normalDamagePoint * 1/3);
        
        NormalAttackAction.setExplanationTxt(commander, commanderList[targetCommanderIndex], normalDamagePoint);
        
        if(!isEmpty(commander['status']['bumwe'])){
            var bumweDamatePoint = parseInt(normalDamagePoint * (commander['status']['bumwe']['val1']/100));
            
            var bumweAttackTarget = setTarget({
                targetCount : 3,
                target : 'enemy'
            }, commander);
            
            Explanation.setExplanation(Explanation.setCommanderName(commander)+'(이)가 범위 공격을 시전합니다.(피해량: '+commander['status']['bumwe']['val1']+'%)');
            
            if(!isEmpty(bumweAttackTarget) && !isEmpty(normalAttackTarget[0])){
                bumweAttackTarget.forEach(function(bumweAttackTargetId){
                    if(bumweAttackTargetId != normalAttackTarget[0]){
                        var bumweDamatePointValidation = bumweDamatePoint;
                        
                        if(bumweDamatePointValidation > commanderList[findCommanderIndexById(bumweAttackTargetId)]['troops']){
                            bumweDamatePointValidation = commanderList[findCommanderIndexById(bumweAttackTargetId)]['troops'];
                        }
                        
                        commanderList[findCommanderIndexById(bumweAttackTargetId)]['troops'] -= bumweDamatePointValidation;
                        commanderList[findCommanderIndexById(bumweAttackTargetId)]['wounded_troops'] += parseInt(bumweDamatePointValidation * 1/3);
                        
                        NormalAttackAction.setExplanationTxt(commander, commanderList[findCommanderIndexById(bumweAttackTargetId)], bumweDamatePointValidation);
                    }
                });
            }
        }
        
        BalanceAccounts.checkAlive();
        
        commander['skill'].forEach(function(skill){
            SkillAction.action(skill, commander, true);
        });
    },
    setExplanationTxt: function(atker, defer, damagePoint){
        Explanation.txt += '<div class="ef_wrap">';
        Explanation.txt +=
           Explanation.setCommanderName(defer)+'(이)가 <span class="clr-red">'+damagePoint+'</span>('+defer['troops']+') 병력을 잃었습니다.<br>';
        Explanation.txt += '</div>';
    },
}

var SkillAction = {
    action : function(skill, commander, isCharge){
        if(BattleAction.endFlag){
            return false;
        }
        
        var skillName = '<span class="sc_'+skill['category']+'">['+skill['ord'] + '번 전법'+langConfig[skill['category']]+']</span>';
    
        if(!SkillAction.categoryCheck(skill['category'], isCharge)){
            return false;
        }
        
        if(!SkillAction.turnCheck(skill['turn'])){
            return false;
        }
        
        if(!SkillAction.percentageCheck(skill)){
            Explanation.setExplanation(Explanation.setCommanderName(commander)+' ' + skillName + '(이)가 확률('+skill['percentage']+'%) 때문에 발동하지 않았습니다.');
            
            return false;
        }
        
        if(validationCheck.controledStatus(commander, 'humang') && skill['category'] == 'active'){
            Explanation.txt += Explanation.setCommanderName(commander)+' ' + skillName + '(이)가 '+Explanation.setStatusName('humang')+' 때문에 발동하지 않았습니다.';
            
            if(typeof skill['readyState'] != 'undefined' && skill['readyState'] == 'do'){
                skill['readyState'] = 'ready';
                Explanation.txt += '(준비중인 전법이 취소됩니다.)';
            }
            Explanation.txt += '<br>';
            
            return false;
        }
        
        if(!isEmpty(commander['status']['singimyosan']) && skill['category'] == 'active'){
            var singiCaster = commanderList[findCommanderIndexById(commander['status']['singimyosan']['caster'])];
            
            if(getRandom.activeSuccess(commander['status']['singimyosan']['val1'])){
                Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 상태 ' + Explanation.setStatusName('singimyosan') + '(이)가 발동('+commander['status']['singimyosan']['val1']+'%)합니다. 액티브 전법이 취소됩니다.');
                
                var singiDamagePoint = getDamage(singiCaster, commander, 'deceit', commander['status']['singimyosan']['val2']/100);
                
                commander['troops'] -= singiDamagePoint;
                commander['wounded_troops'] += parseInt(singiDamagePoint * 1/3);
                
                Explanation.setExplanation(
                    Explanation.setCommanderName(commander)+'(이)가 '+Explanation.setStatusName('singimyosan')+'의 피해로 <span class="clr-red">'+singiDamagePoint+'</span>('+commander['troops']+') 병력을 잃었습니다.');
                
                return false;
            }else{
                Explanation.setExplanation(Explanation.setCommanderName(commander)+'의 상태 ' + Explanation.setStatusName('singimyosan') + '(이)가 확률('+commander['status']['singimyosan']['val1']+'%) 때문에 발동하지 않았습니다.');
            }
            
//            if(typeof skill['readyState'] != 'undefined' && skill['readyState'] == 'do'){
//                skill['readyState'] = 'ready';
//                Explanation.txt += '(준비중인 전법이 취소됩니다.)';
//            }
//            Explanation.txt += '<br>';
            
        }
        
        if(!SkillAction.readyCheck(skill, commander)){
            return false;
        }
        
        if(!SkillAction.specialCheck()){
            return false;
        }
        
        Explanation.txt += Explanation.setCommanderName(commander) + ' ' + skillName + ' 발동';
        
        Explanation.txt += '<div class="ef_wrap">';
        
        SkillAction.EffectAction.action(skill, commander);
        
        Explanation.txt += '</div>';
    },
    categoryCheck : function(category, isCharge){
        if((isCharge && category == 'charge') || (!isCharge && category != 'charge')){
            return true;
        }else{
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
    percentageCheck : function(skill){
        if(getRandom.activeSuccess(skill['percentage']) || skill['readyState'] == 'do'){
            return true;
        }else{
            return false;
        }
    },
    specialCheck : function(){
        return true;
    },
    readyCheck : function(skill, commander){
        var skillName = '<span class="sc_'+skill['category']+'">['+skill['ord'] + '번 전법'+langConfig[skill['category']]+']</span>';
        
        if(typeof skill['readyState'] != 'undefined'){
            if(skill['readyState'] == 'ready'){
                Explanation.setExplanation(Explanation.setCommanderName(commander)+'(이)가 '+skillName+'(을)를 준비합니다.');
                skill['readyState'] = 'do';
                return false;
            }else if(skill['readyState'] == 'do'){
                skill['readyState'] = 'ready';
                return true;
            }
        }
        return true;
    },
    
    EffectAction : {
        action : function(skill, commander){
            skill['effect'].forEach(function(effect){
                var targetList = setTarget(effect, commander);
                
                SkillAction.EffectAction.statAction(effect, targetList, commander);
                
                SkillAction.EffectAction.damageAction(effect, targetList, commander);
                
                SkillAction.EffectAction.healAction(effect, targetList, commander);
                
                SkillAction.EffectAction.variationAction(effect, targetList, commander);
                
                SkillAction.EffectAction.statusAction(effect, targetList, commander);
                
            });
        },
        damageAction: function(effect, targetList, effectCommander){
            if(isEmpty(effect['damageRate'])){
                return true;
            }
            
            if(targetList.length == 0){
                console.log('damageActionExceptin:noTarget');
                return true;
            }
            
            targetList.forEach(function(targetCommanderId) {
                var targetCommanderIndex = findCommanderIndexById(targetCommanderId);
                
                var damagePoint = getDamage(effectCommander, commanderList[targetCommanderIndex], effect['damageCategory'], effect['damageRate']/100);
                
                commanderList[targetCommanderIndex]['troops'] -= damagePoint;
                commanderList[targetCommanderIndex]['wounded_troops'] += parseInt(damagePoint * 1/3);
                
                Explanation.txt +=
                    Explanation.setCommanderName(commanderList[targetCommanderIndex])+'(이)가 '+langConfig[effect['damageCategory']]+'로 <span class="clr-red">'+damagePoint+'</span>('+commanderList[targetCommanderIndex]['troops']+') 병력을 잃었습니다.<br>';
            });
            
            BalanceAccounts.checkAlive();
        },
        healAction: function(effect, targetList, effectCommander){
            if(isEmpty(effect['healRate'])){
                return true;
            }
            
            if(targetList.length == 0){
                console.log('damageActionExceptin:noTarget');
                return true;
            }
            
            targetList.forEach(function(targetCommanderId) {
                var targetCommanderIndex = findCommanderIndexById(targetCommanderId);
                
                var healPoint = getHeal(effectCommander, commanderList[targetCommanderIndex], effect['healRate']/100);
                
                if(validationCheck.controledStatus(commanderList[targetCommanderIndex], 'chiryogumji')){     
                    Explanation.setExplanation(Explanation.setCommanderName(commanderList[targetCommanderIndex])+'의 '+Explanation.setStatusName('chiryogumji')+'효과로 병력 회복이 불가능합니다.');
                }else{
                    commanderList[targetCommanderIndex]['troops'] += healPoint;
                    commanderList[targetCommanderIndex]['wounded_troops'] -= healPoint;

                    Explanation.setExplanation(
                        Explanation.setCommanderName(commanderList[targetCommanderIndex])+'(이)가 치료효과로 <span class="clr-green">'+healPoint+'</span>('+commanderList[targetCommanderIndex]['troops']+') 병력을 회복했습니다.'
                    );
                }
            });
        },
        statAction: function(effect, targetList, effectCommander){
            if(isEmpty(effect['statBonus']) || isEmpty(effect['statBonusTurn'])){
                return true;
            }
            
            if(targetList.length == 0){
                console.log('statActionExceptin:noTarget');
                return true;
            }
            
            var statList = effect['statTarget'].split(',');
            
            targetList.forEach(function(targetCommanderId) {
                var targetCommanderIndex = findCommanderIndexById(targetCommanderId);
                var targetCommander = commanderList[targetCommanderIndex];
                
                targetCommander['stat_calculate'].push({
                    tartgetId : targetCommanderId,
                    turn : effect['statBonusTurn'],
                    point : effect['statBonus'],
                    kind : statList
                });
                
                
                statList.forEach(function(kind){
                    commanderList[targetCommanderIndex]['stat'][kind] += effect['statBonus'];
                    
                    Explanation.setExplanation(
                        Explanation.setCommanderName(commanderList[targetCommanderIndex])+'의 '+langConfig[kind]+'(이)가 '+effect['statBonus']+'('+commanderList[targetCommanderIndex]['stat'][kind]+') 적용 됩니다. ['+effect['statBonusTurn']+'턴 동안]'
                    );
                });
            });
        },
        variationAction: function(effect, targetList, effectCommander){
            if(isEmpty(effect['variation']) || isEmpty(effect['variationRate']) || isEmpty(effect['variationTurn'])){
                return true;
            }
            
            if(targetList.length == 0){
                return true;
            }
            
            targetList.forEach(function(targetCommanderId) {
                var targetCommanderIndex = findCommanderIndexById(targetCommanderId);
                var targetCommander = commanderList[targetCommanderIndex];
                
                if(effect['variation'] == 1){
                    targetCommander['variation']['g_wdr'] += effect['variationRate'];
                    targetCommander['variation']['g_tdr'] += effect['variationRate'];
                    
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'g_wdr'
                    });
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'g_tdr'
                    });
                    
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['g_wdr'], '주는 무기 피해', '증가');
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['g_tdr'], '주는 책략 피해', '증가');
                }else if(effect['variation'] == 2){
                    targetCommander['variation']['r_wdr'] += effect['variationRate'];
                    targetCommander['variation']['r_tdr'] += effect['variationRate'];
                    
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'r_wdr'
                    });
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'r_tdr'
                    });
                    
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['r_wdr'], '받는 무기 피해', '감소');
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['r_tdr'], '받는 책략 피해', '감소');
                }else if(effect['variation'] == 3){
                    targetCommander['variation']['g_wdr'] += effect['variationRate'];
                    
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'g_wdr'
                    });
                    
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['g_wdr'], '주는 무기 피해', '증가');
                }else if(effect['variation'] == 4){
                    targetCommander['variation']['r_wdr'] += effect['variationRate'];
                    
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'r_wdr'
                    });
                    
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['r_wdr'],  '받는 무기 피해', '감소');
                }else if(effect['variation'] == 5){
                    targetCommander['variation']['g_tdr'] += effect['variationRate'];
                    
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'g_tdr'
                    });
                    
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['g_tdr'], '주는 책략 피해', '증가');
                }else if(effect['variation'] == 6){
                    targetCommander['variation']['r_tdr'] += effect['variationRate'];
                    
                    targetCommander['variation_calculate'].push({
                        tartgetId : targetCommanderId,
                        turn : effect['variationTurn'],
                        rate : effect['variationRate'],
                        kind : 'r_tdr'
                    });
                    
                    Explanation.setVariationExplanation(effect, targetCommander, targetCommander['variation']['r_tdr'], '받는 책략 피해', '감소');
                }
            });
        },
        statusAction: function(effect, targetList, effectCommander){
            if(isEmpty(effect['status']) || isEmpty(effect['statusTurn'])){
                return true;
            }
            
            if(targetList.length == 0){
                return true;
            }
            
            targetList.forEach(function(targetCommanderId) {
                var targetCommanderIndex = findCommanderIndexById(targetCommanderId);
                var targetCommander = commanderList[targetCommanderIndex];
                
                if(!isEmpty(targetCommander['status'][effect['status']])){
                    Explanation.setExplanation(Explanation.setCommanderName(targetCommander)+'는 이미 <span class="status_clr">['+langConfig[effect['status']]+']</span>상태를 가지고 있어 <span class="clr-red">이번 효과가 무효</span>됩니다.');
                }else{
                
                    targetCommander['status'][effect['status']] = {
                        name : effect['status'],
                        caster : effectCommander['id'],
                        turn : effect['statusTurn'],
                        val1 : effect['statusVal-1'],
                        val2 : effect['statusVal-2'],
                        val3 : effect['statusVal-3']
                    };

                    Explanation.setExplanation(Explanation.setCommanderName(targetCommander)+' <span class="status_clr">['+langConfig[effect['status']]+']</span>상태 부여. ['+effect['statusTurn']+'턴 동안]');
                }
            });
        }
    }
};

function getHeal(activeCommander, targetCommander, rate){
    var normalHeal = parseInt((Math.sqrt(activeCommander['troops'])) * 5);
    
    var resultHeal = normalHeal * rate * (1 + getRandom.rand15()) * (1 - getRandom.rand15());

    return parseInt(resultHeal) <= targetCommander['wounded_troops'] ? parseInt(resultHeal) : targetCommander['wounded_troops'];
}

function getDamage(activeCommander, targetCommander, category, rate){
    var troopsDamage = parseInt((Math.sqrt(activeCommander['troops'])) * 5);
    
    var statDiffDamage;
    var giveDamageVarition = 0;
    var recieveDamageVarition = 0;
    
    var atks; 
    var defs; 
    
    if(category == 'weapon'){
        atks = setNegativeStatZero(activeCommander['stat']['mu']);
        defs = setNegativeStatZero(targetCommander['stat']['tong']);
        statDiffDamage = (atks - defs) * 1.5;
        
        giveDamageVarition = activeCommander['variation']['g_wdr'];
        giveDamageVarition = setMaxVariationLimit(giveDamageVarition) / 100;
        recieveDamageVarition = targetCommander['variation']['r_wdr'];
        recieveDamageVarition = setMaxVariationLimit(recieveDamageVarition) / 100;
    }else{
        atks = setNegativeStatZero(activeCommander['stat']['ji']);
        defs = setNegativeStatZero(targetCommander['stat']['ji']);
        statDiffDamage = (atks - defs) * 1.5;
        
        giveDamageVarition = activeCommander['variation']['g_tdr'];
        giveDamageVarition = setMaxVariationLimit(giveDamageVarition) / 100;
        recieveDamageVarition = targetCommander['variation']['r_tdr'];
        recieveDamageVarition = setMaxVariationLimit(recieveDamageVarition) / 100;
    }
    
    var normalDamage = troopsDamage + statDiffDamage;
    if(normalDamage <= 0) normalDamage = 100;
    
    
    var resultDamage = normalDamage * rate * (1 + giveDamageVarition) * (1 - recieveDamageVarition) * (1 + getRandom.rand15()) * (1 - getRandom.rand15());

    if(validationCheck.controledStatus(activeCommander, 'hueyak')){
        Explanation.setExplanation(Explanation.setCommanderName(activeCommander)+'의 '+Explanation.setStatusName('hueyak')+'효과 발동.');
        return 0;
    }else if(!isEmpty(targetCommander['status']['bang'])){
        Explanation.setExplanation(
            Explanation.setCommanderName(targetCommander)+'의 '+Explanation.setStatusName('bang') + '효과 발동.(남은 횟수 : '+targetCommander['status']['bang']['val1']+')'
        );  
        targetCommander['status']['bang']['val1']--;
        if(targetCommander['status']['bang']['val1'] == 0){
            delete targetCommander['status']['bang'];
        }
        return 0;
    }else{
        return parseInt(resultDamage) <= targetCommander['troops'] ? parseInt(resultDamage) : targetCommander['troops'];
    }
}

function getResult(){
    setCommander();
  
    BattleAction.run();
        
    Explanation.txt += '<hr>';
    
    $resultPartEl = $('.combat_simulation_result');
    $resultPartEl.html(Explanation.txt);
    
    $resultPartEl.prepend(Explanation.setResultInfo);
    
    $('html,body').scrollTop($resultPartEl.offset().top - 80);
    
    commanderList.forEach(function(commander){
        console.log(commander);
    });
}

var getRandom = {
    rand : function(count){
        return Math.floor(Math.random() * count);
    },
    rand15 : function(){
        return (Math.floor(Math.random() * 15)) / 100;
    },
    activeSuccess : function(percentage){
        var rand = Math.floor(Math.random() * 100);
        return rand <= parseInt(percentage);
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
        
        if(category == 'active' && $('[name="sk_maker_turn_ready"]').is(':checked')){
            dataEl += ' data-ready-state="ready" ';
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
            var statusVal1 = $('[name="sk_maker_status_val_1"]').val();
            var statusVal2 = $('[name="sk_maker_status_val_2"]').val();
            var statusVal3 = $('[name="sk_maker_status_val_3"]').val();
            dataEl += ' data-status="'+status+'" ';
            dataEl += ' data-status-turn="'+statusTurn+'" ';
            dataEl += ' data-status-val-1="'+statusVal1+'" ';
            dataEl += ' data-status-val-2="'+statusVal2+'" ';
            dataEl += ' data-status-val-3="'+statusVal3+'" ';
            dataTxt += '<span class="est est_4">' + $('[name="sk_maker_status"] option:selected').text() + ' ' + statusTurn + '턴 동안 (값:'+statusVal1+'/'+statusVal2+'/'+statusVal3+')</span> ';
            
            successFlag = true;
        }
        
        if($('[name="sk_maker_variation_turn"]').val() > 0 && $('[name="sk_maker_variation_rate"]').val() != 0){
            var variation = $('[name="sk_maker_variation"] option:selected').val();
            var variationRate = $('[name="sk_maker_variation_rate"]').val();
            var variationturn = $('[name="sk_maker_variation_turn"]').val();
            dataEl += ' data-variation="'+variation+'" ';
            dataEl += ' data-variation-rate="'+variationRate+'" ';
            dataEl += ' data-variation-turn="'+variationturn+'" ';
            dataTxt += '<span class="est est_5">' + $('[name="sk_maker_variation"] option:selected').text() + ' ' + variationRate + '% ' + variationturn + '턴 동안</span> ';
            
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
        
        $('select[name="sk_maker_target_count"]').css({'display':'inline-block'});
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

function setTarget(effect, effectCommander){
    var enemyList = [];
    var enemyBoss;
    var allyList = [];
    var allyBoss;
    var altogetherList = [];

    commanderList.forEach(function(commander){
        if(!isEmpty(commander)){
            if(effectCommander['team'] == 'ally'){
                if(commander['id'] > 3){
                    enemyList.push(commander['id']);
                }else{
                    allyList.push(commander['id']);
                }
                allyBoss = 1;
                enemyBoss = 4;
            }else{
                if(commander['id'] > 3){
                    allyList.push(commander['id']);
                }else{
                    enemyList.push(commander['id']);
                }
                allyBoss = 4;
                enemyBoss = 1;
            }
            altogetherList.push(commander['id']);
        }
    });

    shuffle(allyList); 
    shuffle(enemyList);
    shuffle(altogetherList);

    var effectTargetList = [];
    var picked;

    if(effect['target'] == 'enemy'){
        for(var i = 0; i < enemyList.length; i++){
            effectTargetList.push(enemyList[i]);

            if(effectTargetList.length >= effect['targetCount']){
                break;
            }
        }
    }else if(effect['target'] == 'enemy_boss'){
        effectTargetList.push(enemyBoss);
    }else if(effect['target'] == 'ally'){
        for(var i = 0; i < allyList.length; i++){
            effectTargetList.push(allyList[i]);

            if(effectTargetList.length >= effect['targetCount']){
                break;
            }
        }
    }else if(effect['target'] == 'ally_other'){
        for(var i = 0; i < allyList.length; i++){
            if(allyList[i] != effectCommander['id']){
                effectTargetList.push(allyList[i]);
            }

            if(effectTargetList.length >= effect['targetCount']){
                break;
            }
        }
    }else if(effect['target'] == 'ally_boss'){
        effectTargetList.push(allyBoss);
    }else if(effect['target'] == 'ally_slave'){
        effectTargetList = allyList;
        effectTargetList.splice(effectTargetList.indexOf(allyBoss), 1);
    }else if(effect['target'] == 'myself'){
        effectTargetList.push(effectCommander['id']);
    }else if(effect['target'] == 'all'){
        for(var i = 0; i < altogetherList.length; i++){
            if(altogetherList[i] != effectCommander['id']){
                effectTargetList.push(altogetherList[i]);
            }

            if(effectTargetList.length >= effect['targetCount']){
                break;
            }
        }
    }else{
        commanderList.forEach(function(commander){
            if(commander['id'] == effect['target']){
                effectTargetList.push(commander['id']);
            }
        });
    }
    
    effectTargetList = filterMomyeanTarget(effectTargetList, effectCommander);

    return effectTargetList;
}

function filterMomyeanTarget(targetList, effectCommander){
    var filteredTargetList = [];
    targetList.forEach(function(targetCheck){
        var targetCommander = commanderList[findCommanderIndexById(targetCheck)];
        if(!isEmpty(targetCommander['status']['momyen']) && effectCommander['team'] != targetCommander['team']){
            if(getRandom.activeSuccess(targetCommander['status']['momyen']['val1'])){
                Explanation.setExplanation(
                    Explanation.setCommanderName(effectCommander)+'의 공격이 '+Explanation.setCommanderName(targetCommander)+'의 '+Explanation.setStatusName('momyen') + '상태('+targetCommander['status']['momyen']['val1']+'%)로 인해 피해 주기 불가, 공격 효과와 돌격이 미발동합니다.'
                );
            }else{
                filteredTargetList.push(targetCheck);
                console.log('push',targetCheck);
                Explanation.setExplanation(Explanation.setCommanderName(targetCommander)+'의 '+Explanation.setStatusName('momyen') + '상태가 확률('+targetCommander['status']['momyen']['val1']+'%) 때문에 발동하지 않았습니다.'
                );
            }
        }else{
            filteredTargetList.push(targetCheck);
        }
    });
    
    return filteredTargetList;
}

function findCommanderIndexById(id){
    var result = -1;
    commanderList.forEach(function(commander, index){
        if(commander['id'] == id){
            result = index;
        }
    });
    
    return result;
}

function setNegativeStatZero(num){
    return (num < 0) ? 0 : num;
}

function setMaxVariationLimit(num){
    if(num > 90){
        return 90;
    }else if(num < -90){
        return -90;
    }else{
        return num;
    }
}

var langConfig = {
    weapon : '무기 피해',
    deceit : '책략 피해',
    
    mu : '무력',
    ji : '지력',
    tong : '통솔',
    sok : '속도',
    
    etc : '',
    active : ': 액티브',
    charge : ': 돌격',
    
    g_wdr : '주는 무기피해 증가',
    g_tdr : '주는 책략피해 증가',
    r_wdr : '받는 무기피해 감소',
    r_tdr : '받는 책략피해 감소',
    
    yean : '연격',
    momyen : '모면',
    bang : '방어',
    bumwe : '범위 공격',
    bankyuk : '반격',
    bundam : '분담',
    myunyeok : '면역',
    tongchal : '통찰',
    piljung : '필중',
    jukjingyukpa : '적진 격파',
    baeban : '배반',
    simli : '심리',
    chugyuk : '추격',
    yeanhwan : '연환',
    jiwon : '지원',
    gongpo : '공포',
    humang : '허망',
    mujangheje : '무장 해제',
    honran : '혼란',
    hueyak : '허약',
    chiryogumji :'치료 금지',
    dobal : '도발',
    obo :'오보',
    iganjil :'이간질',
    page :'파괴',
    
    singimyosan :'신기묘산',
}




