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
    <body style="background-color: #f8d3a0;"> 
        <div class = "container-fluid interface-changer">
            <div class="btn-group">
                <button class = "btn-user btn btn-outline-dark">Пользователь</button>
                <button class = "btn-admin btn btn-outline-dark">Админ</button>
                <button class = "btn-reset btn btn-outline-dark">Ресет</button>
            </div>
        </div>
        <div class = "container-fluid interface-main">
            <div class = "container-fluid table-div">
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
                <p class = "h4">Поиск пользователей: </p>
                <div class="contianer-fluid row" style="margin-bottom: 2px;">
                    <div class="col-sm">
                        <p class="h6"> ФИО (либо начало ФИО):</p>
                    </div>
                    <div class="col-sm">
                        <p class="h6"> Статус : </p>
                    </div>
                </div>
                <div class="contianer-fluid row" style="margin-bottom: 10px;"> 
                    <div class="col-sm"> 
                        <input  class = "input-group-text border border-dark text-start usr-fnd-text" type = "text" style="width: 100%;">
                    </div>
                    <div class="col-sm">
                        <select class = "form-select border border-dark usr-fnd-select">
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
                <div class="row">
                    <div class = "container col-sm adm-add-usr">
                        <p class = "h4">Добавление пользователей:</p>
                        <div class="container-fluid row">
                            <div class = "col-sm">
                                <p class="h6">Введите ФИО:</p>
                            </div>
                            <div class = "col-sm"></div>
                        </div>
                        <div class="container-fluid row">
                            <div class="col-sm" style="margin-bottom: 10px;"> 
                            <input class = "input-group-text border border-dark text-start adm-add-usr-txt" type = "text" > 
                            </div>
                            <div class = "col-sm"></div>
                        </div>
                        <div class="container-fluid row">
                            <div class="col-sm" style="margin-bottom: 10px;"> 
                                <button class = "btn btn-outline-dark adm-add-usr-btn">Добавить пользователя</button>
                            </div>
                            <div class = "col-sm"></div>
                        </div>
                    </div>
                    <div class = "container col-sm adm-edt-usr">
                        <p class = "h4">Редактирование пользователей:</p>
                        <div class = "container-fluid row">
                            <div class="col-sm">
                                <p class="h6"> ФИО выбраного пользователя:</p>
                            </div>
                            <div class="col-sm">
                                <p class="h6"> Статус : </p>
                            </div>
                        </div>
                        <div class = "container-fluid row">
                            <div class="col-sm">
                                <input class = "input-group-text border border-dark text-start adm-edt-usr-name" type = "text">
                            </div>
                            <div class="col-sm">
                                <select class = "form-select border border-dark usr-edt-select">
                                    <option>Первый</option>
                                    <option>Второй</option>
                                    <option>Третий</option>
                                </select>
                            </div>
                        </div>
                        <div class = "container-fluid row" style="margin-top: 10px;">
                            <div class="col-sm" >
                                <button class = "btn btn-outline-dark adm-edt-usr-button">Изменить данные</button>
                            </div>
                        </div>
                        <div class="conteiner-fluid text-muted" style="margin-top: 10px;">Для изменения данных пользователя необходимо кликнуть по нужному пользователю в таблице.</div>
                    </div>
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