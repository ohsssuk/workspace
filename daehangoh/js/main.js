function numberFormat(getNum){
    var rNum = (getNum/1).toFixed(0).replace('.', ',');
    return rNum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
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