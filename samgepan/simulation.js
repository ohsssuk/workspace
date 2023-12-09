$(function(){
    skillPopup.open();
});

var commanderList = [];
function setCommander(){
    commanderList = [];

    $('.commander_part').each(function(index){
        commanderList[index] = {};
        
        var classBonus = parseInt($('[name="class_bonus"] > option:selected').val());
        if(index > 2){
            classBonus = classBonus * -1;
        }
        commanderList[index]['statPer'] = 
            Number($('[name="bonus_aptitude"]').val()) 
            + Number($(this).find('[name="aptitude[]"] > option:selected').val());
        var statMulti = commanderList[index]['statPer'] / 100;
        
        commanderList[index]['troops'] = parseInt($(this).find('[name="troops[]"]').val());
        
        commanderList[index]['tong'] = parseInt($(this).find('[name="tong[]"]').val() * statMulti);
        commanderList[index]['mu'] = parseInt($(this).find('[name="mu[]"]').val() * statMulti);
        commanderList[index]['ji'] = parseInt($(this).find('[name="ji[]"]').val() * statMulti);
        commanderList[index]['sok'] = parseInt($(this).find('[name="sok[]"]').val() * statMulti);

        commanderList[index]['boss'] = (index == 0 || index == 3) ? true : false;
        commanderList[index]['team'] = (index < 3) ? 'ally' : 'enemy';
        commanderList[index]['index'] = index;
    });
    
    commanderList.sort(function (a, b) {
        return b.sok - a.sok;
    });
}

function setDamage(el){
    var index = $(el).closest('.commander_part').index() - 1;
    
    var activeCommander = commanderList[index];
    var defenseCommander = commanderList[3];
    
    var normalDamage = Number((Math.sqrt(activeCommander['troops'])) * 5);
    var damage = (normalDamage + (activeCommander['mu']-defenseCommander['tong'])) * (1 + getRand()) * (1 - getRand());
}

function getRand(){
    return (Math.floor(Math.random() * 15)) / 100;
}

function getResult(){
    setCommander();
    
    commanderList.forEach(function(commander){
        console.log(commander);
    });
}






var skillPopup = {
    key : null,
    selector : '.skill_popup_wrap',
    open : function(){
        skillPopup.init();
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
    },
}




