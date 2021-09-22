<?php
    $mysqli = new mysqli("localhost","root","","testov");
    $res_arr = array();
    if(isset($_POST["filter"])){
        // $fio = $_POST["filter"]."%";
        // if($result = $mysqli->query("SELECT * FROM Users WHERE fio LIKE ".$fio.";")){
        //     while($row = $result->fetch_array(MYSQLI_ASSOC)){
        //         $row = $result->fetch_row();
        //         $res_arr[] = $row; 
        //     }
        //     echo json_encode($res_arr);  
        // }
        // $result->close();
    }
    else{
        if($result = $mysqli->query("SELECT * FROM Users")){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $res_arr[] = $row; 
            }
            echo json_encode($res_arr);  
        }
        $result->close();
    }
    $mysqli->close();