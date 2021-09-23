//
// Загрузка данных только в таблицу!!!
function loadData(fio = "%", status = "%"){
    var responce; 
    let f = fio; let s = status;
    $.ajax({
        url: 'php/load_data.php',
        method: 'post',
        data: {fio:f, status:s,},
        async:false
    }).done(function(data){
        responce = data;
    });
    var o = JSON.parse(responce);
    var res = []; 
    var r  = "";
    for(var i in o){   
         r += "<tr><td>"+o[i].id+"</td><td>"+o[i].fio+"</td><td>"+o[i].stat+"</td></tr>";
    }
    return r;

}

//Пересоздают таблицу пользователей
function resetTable(){ 
    $.ajax({
        url: 'php/setup.php',
        method: 'post',
        data: {type:'reset'},
    });
}