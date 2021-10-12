<html>
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/functions.js"></script>
        <title>Тестовое задание</title>
    </head>
    <body> 
        <div class = "container-fluid interface-changer">
            <div class="btn-group">
                <button class = "btn-user btn btn-outline-dark">Пользователь</button>
                <button class = "btn-admin btn btn-outline-dark">Админ</button>
                <button class = "btn-reset btn btn-outline-dark">Ресет</button>
            </div>
        </div>
        <div class = "container-fluid interface-main">
            <div class = "border border-dark container-fluid table-div">
                <table class = "table table-bordered table-hover table-usr">
                    <thead>
                        <th>Имя</th>
                        <th>Статус</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class = "container-fluid usr-panel">
                <p>Поиск пользователей: </p>
                <div class="contianer-flud row" style="margin-bottom: 10px;"> 
                <div class="col-sm"> <input  class = "input-group-text usr-fnd-text" type = "text" style="width: 100%;"></div>
                <div class="col-sm">
                <select class = "form-select usr-fnd-select">
                    <option> </option>
                    <option>Первый</option>
                    <option>Второй</option>
                    <option>Третий</option>
                </select>
                </div>
                </div>
                <button class = "btn btn-outline-dark usr-fnd-btn">Поиск</button>
            </div>
            <div class = "container-fluid adm-panel">
                <div class = "border border-dark container-fluid adm-add-usr">
                    <p>Добавление пользователей:</p>
                    <p>Введите фио: <input class = "border border-dark input-group-text adm-add-usr-txt" type = "text" style="margin-bottom: 10px;"> 
                    <button class = "btn btn-outline-dark adm-add-usr-btn">Добавить пользователя</button> </p>
                </div>
                <div class = "border border-dark container-fluid adm-edt-usr">
                    <p>Редактирование пользователей:</p>
                    <p> ФИО выбраного пользователя: <input class = "border border-dark input-group-text adm-edt-usr-name" type = "text"></p>
                    <p> Статус : <select class = "border border-dark form-select usr-edt-select">
                                    <option>Первый</option>
                                    <option>Второй</option>
                                    <option>Третий</option>
                                </select>
                            </p>
                    <p><button class = "btn btn-outline-dark adm-edt-usr-button">Изменить данные</button>
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
                // $.ajax({
                //     url: 'php/setup.php',
                //     method: 'post',
                //     data: {type:'reset'},
                // });
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