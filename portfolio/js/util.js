var Util = {
    data : {},
    inputNameList : [
        'name',
        'troops',
        'mu', 'mu_bonus',
        'ji', 'ji_bonus',
        'tong', 'tong_bonus',
        'sok', 'sok_bonus',
        'give_weapon_damage_rate',
        'give_trick_damage_rate',
        'receive_weapon_damage_rate',
        'receive_trick_damage_rate',
    ],
    selectNameList : [
        'aptitude'
    ],
    save : function(){
        Util.inputNameList.forEach(function(inputName){
            Util.saveCommanderInputByName(inputName);
        });
        
        Util.selectNameList.forEach(function(selectName){
            Util.saveCommanderSelectByName(selectName);
        });
        
        Util.saveCommanderSkill();
        
        localStorage.setItem('simulationData', JSON.stringify(Util.data));
        
        alert('입력한 데이터가 저장 되었습니다.');
    },
    saveCommanderInputByName : function(name){
        Util.data[name] = [];
        
        $('input[name="'+name+'[]"]').each(function(){
            Util.data[name].push($(this).val());
        });
    },
    saveCommanderSelectByName : function(name){
        Util.data[name] = [];
        
        $('select[name="'+name+'[]"]').each(function(){
            Util.data[name].push($(this).find('option:selected').val());
        });
    },
    saveCommanderSkill : function(){
        Util.data['skill'] = [];
        
        $('.skill_part').each(function(){
            Util.data['skill'].push($(this).html());
        });
    },
    getData: function(){
        return JSON.parse(localStorage.getItem('simulationData'));
    },
    init : function(){
        if(confirm('입력하신 장수 정보가 삭제됩니다. 초기화 하시겠습니까?')){
            localStorage.removeItem('simulationData');

            alert('입력한 데이터가 초기화 되었습니다.');
            location.reload();
        }
    },
    load : function(){
        try{
            var localData = Util.getData();
            console.log(localData);

            if(isEmpty(localData)){
                return false;
            }
            
            for (var key in localData) {
                if (localData.hasOwnProperty(key)) {
                    var inputEl = $('.commander_part input[name="'+key+'[]"]');
                    var selectEl = $('.commander_part select[name="'+key+'[]"]');
                    var skillEl = $('.commander_part .skill_part');
                    
                    if(key == 'skill'){
                        skillEl.each(function(index){
                            $(this).html(localData[key][index]);
                        });
                    }else if(inputEl.length > 0){
                        inputEl.each(function(index){
                            $(this).val(localData[key][index]);
                        });
                    }else if(selectEl.length > 0){
                        selectEl.each(function(index){
                            $(this).find('option[value="'+localData[key][index]+'"]').prop('selected', true);
                        });
                    }
                }
            }
        }catch(e){
            console.log('loadData:Error');
        }
    }
};

$(function(){
    Util.load();
});



