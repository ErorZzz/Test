function loadData(){
    var responce; 
    $.ajax({
        url: 'php/load_data.php',
        method: 'post',
        async:false
    }).done(function(data){
        responce = data;
        console.log(data);
        console.log(responce);
    });
    console.log(responce);
    var o = JSON.parse(responce);
    var res = []; 
    var r  = "";
    for(var i in o){   
         r += "<tr><td>"+o[i].id+"</td><td>"+o[i].fio+"</td><td>"+o[i].userStatus+"</td></tr>";
    }
    console.log(r);
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
    alert('call');
    $.ajax({
        url: 'php/setup.php',
        method: 'post',
        data: {type:'reset'},
        success: function(data){}
    });
}