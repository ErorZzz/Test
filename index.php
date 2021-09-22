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
            $(".btn-admin").click(function(){
                reset();
            });
        })
    </script>
</html>