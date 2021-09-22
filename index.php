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
                    <tr data = '1'>
                        <td >39</td>
                        <td data = '1'>1</td>
                        <td data = '2'>2</td>
                        <td data = '3'>3</td>
                    </tr>
                    <tr data = '2'>
                        <td >40</td>
                        <td data = '1'>1</td>
                        <td data = '2'>2</td>
                        <td data = '3'>3</td>
                    </tr>
                    <tr data = '3'>
                        <td >41</td>
                        <td data = '1'>1</td>
                        <td data = '2'>2</td>
                        <td data = '3'>3</td>
                    </tr>
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
                    <p>Введите фио: <input type = "text"> <button class = ".adm-add-usr">Добавить пользователя</button> </p>
                </div>
                <div class = "adm-chenge-usr">
                    <p>Редактирование пользователей:</p>
                    <p> Введите id пользователя: <input type = "text">  Введите новое имя пользователя: <input type="text"> 
                </div>
            </div>
        </div>
    
    </body>
    <script>
        $(document).ready(function(){
            var t = loadData();
            console.log(t);
            $(".table-usr").html(t);
            $(".btn-user").click(function(){
                loadUser();
            });
            $(".btn-admin").click(function(){
                loadAdmin();
            });
            $(".btn-reset").click(function(){
                resetTable();
            });
            $(".table-usr").click(function(event) {
                var t = $(event.target)
                alert(t.parent().children().first().text());
             });
             $(".adm-add-usr").click(function(){

             })
            
        })
        
    </script>
</html>