<?php
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// Входные данные только ФИО
if(isset($_POST["fio"])){
    $query = "INSERT INTO Users (fio, stat) Values ('".$_POST["fio"]."', 'Первый');";
    echo $query;
    require_once("db_connect.php");
    $mysqli = new mysqli($adress,$usr,$pass,$db);
    $mysqli->query($query);
    $mysqli->close();
}