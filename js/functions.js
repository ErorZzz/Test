function loadData(){}
function loadAdmin(){

}
function loadUser(){
    // $.ajax({
    //     url: 'php/loadUsers.php',
    //     method: 'post',
    //     success: function(data){$(".interface-main").html(data);}
    // });
    

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