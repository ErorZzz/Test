<?php
// Входные данные id != "", fio != "", status = "%" 
if($_POST["fio"] != ""){
    require_once("db_connect.php");
    $mysqli = new mysqli($adress,$usr,$pass,$db);
    $quary = "UPDATE Users SET fio = '".$_POST["fio"]."', stat = '".$_POST["status"]."' WHERE id = ".$_POST["id"].";";
    $mysqli->query($quary);
    $mysqli->close();
}