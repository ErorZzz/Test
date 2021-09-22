function loadAdmin(){

}
function loadUser(){
    $.ajax({
        url: 'php/loadUsers.php',
        method: 'post',
        success: function(data){$(".interface-main").html(data);}
    });
}
function reset(){
    
}