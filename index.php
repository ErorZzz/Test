<html>
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="js/functions.js"></script>
        <title>Тестовое задание</title>
    </head>
    <body> 
        <div class = "interface-changer">
            <p> 
                <button class = "btn btn-user">Пользователь</button>
                <button class = "btn btn-admin">Админ</button>
                <button class = "btn btn-reset">Ресет</button>
            </p>
        </div>
        <div class = "interface-main">
            <div class = "table-div">
                <table class = "table-usr">
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class = "usr-panel">
                <p>Поиск пользователей: </p>
                <input  class = "usr-fnd-text" type = "text">
                <select class = "usr-fnd-select">
                    <option> </option>
                    <option>Первый</option>
                    <option>Второй</option>
                    <option>Третий</option>
                </select>
                <button class = "usr-fnd-btn">Поиск</button>
            </div>
            <div class = "adm-panel">
                <div class = "adm-add-usr">
                    <p>Добавление пользователей:</p>
                    <p>Введите фио: <input class = "adm-add-usr-txt" type = "text"> <button class = "adm-add-usr-btn">Добавить пользователя</button> </p>
                </div>
                <div class = "adm-edt-usr">
                    <p>Редактирование пользователей:</p>
                    <p> ФИО выбраного пользователя: <input class = "adm-edt-usr-name" type = "text"></p>
                    <p> Статус : <select class = "usr-edt-select">
                                    <option>Первый</option>
                                    <option>Второй</option>
                                    <option>Третий</option>
                                </select>
                            </p>
                    <p><button class = "adm-edt-usr-button">Изменить данные</button>
                    <p>Для изменения данных пользователя необходимо кликнуть по нужному пользователю в таблице.</p>
                </div>
            </div>
        </div>
    
    </body>
    <script>
        var id = -1;
        $(document).ready(function(){
            $(".btn-user").click(function(){
                $(".adm-panel").hide();
                $(".usr-panel").show();
                $(".table-usr tbody").html(loadData());
            });
            $(".btn-admin").click(function(){
                $(".usr-panel").hide();
                $(".adm-panel").show();
                $(".table-usr tbody").html(loadData());
                
            });
            $(".btn-reset").click(function(){
//                 $.ajax({
//                     url: 'php/setup.php',
//                     method: 'post',
//                     data: {type:'reset'},
//                 });
            });
            $(".table-usr").click(function(event) {
                if($(".adm-panel").is(":visible")){
                    var t = $(event.target)
                    id = parseInt(t.parent().children().first().text());
                    t.parent().children().each(function(index,elem){
                        switch(index){
                            case 1: { $(".adm-edt-usr-name").val(($(elem).text())); break;}
                            case 2: { $(".usr-edt-select").val(($(elem).text())); break;}
                        }
                    });
                }
             });
             $(".usr-fnd-btn").click(function(){
                t = loadData($(".usr-fnd-text").val(),$(".usr-fnd-select").val());
                $(".table-usr tbody").html(t);
                
             })
             $(".adm-add-usr-btn").click(function(){
                var fio = $(".adm-add-usr-txt").val();
                if(fio && fio.trim() && fio.length > 0){
                    $.ajax({
                        url: 'php/add_user.php',
                        method: 'post',
                        async:false,
                        data: {fio:fio}
                    });
                }
                t = loadData();
                $(".table-usr tbody").html(t);
                $(".adm-add-usr-txt").val("");
             })
             $(".adm-edt-usr-button").click(function(){
                var fio = $(".adm-edt-usr-name").val();
                var status = $(".usr-edt-select").val();
                if(id !== -1 && (fio && fio.trim() && fio.length > 0) ){
                        $.ajax({
                        url: 'php/update_user.php',
                        method: 'post',
                        async:false,
                        data: {id:id, fio:fio, status:status,}
                    });
                    $(".adm-edt-usr-name").val("")
                    $(".usr-edt-select").val("");
                    $(".table-usr tbody").html(loadData());
                }
             });
            
        });       
    </script>
</html>
