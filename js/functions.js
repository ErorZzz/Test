function loadData(){
    var responce; 
    $.ajax({
        url: 'php/load_data.php',
        method: 'post',
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
function loadAdmin(){
    $(".usr-panel").hide();
    $(".adm-panel").show();
}
function loadUser(){
   $(".adm-panel").hide();
   $(".usr-panel").show();
}
function resetTable(){
    $.ajax({
        url: 'php/setup.php',
        method: 'post',
        data: {type:'reset'},
    });
}