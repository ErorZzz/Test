<?php
    //Входные данные id fio status
    require_once("db_connect.php");
    $quary = "";
    $mysqli = new mysqli($adress,$usr,$pass,$db);
    $res_arr = array();
    if(isset($_POST["fio"]) && isset($_POST["status"])){
        $quary = "SELECT * FROM Users WHERE fio LIKE '".$_POST["fio"]."%' AND stat LIKE '".$_POST["status"]."%' ;";
    }
    elseif(isset($_POST["id"])){  
        $quary ="SELECT * FROM Users WHERE id = ".$_POST["id"].";";
    }
    else{   
        $quary ="SELECT * FROM Users";
    }
    if($result = $mysqli->query($quary)){
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $res_arr[] = $row; 
        }
        echo json_encode($res_arr);  
    }
    $mysqli->close();