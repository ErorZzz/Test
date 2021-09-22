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
                <button class = "btn btn-user">User</button>
                <button class = "btn btn-admin">Admin</button>
                <button class = "btn btn-reset">Reset</button>
            </p>
        </div>
        <div class = "interface-main">
            <div class = "table-div">
                <table class = "table-usr">
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                </table>
            </div>
            <div class = "usr-panel">
                <input  class = "usr-fnd-text" type = "text">
                <select class = "usr-fnd-select">
                    <option>Первый</option>
                    <option>Второй</option>
                    <option>Третий</option>
                </select>
                <button class = "usr-fnd-btn">Поиск</button>
            </div>
            <div class = "adm-panel">
                
            </div>
        </div>
    
    </body>
    <script>
        $(document).ready(function(){
            loadUser();
            $(".btn-user").click(function(){
                loadUser();

            });
            $(".btn-admin").click(function(){
                loadAdmin();
            });
            $(".btn-reset").click(function(){
                resetTable();
            });
        })
    </script>
</html>