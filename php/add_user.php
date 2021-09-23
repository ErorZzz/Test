<?php
// Входные данные только ФИО
if(isset($_POST["fio"])){
    $query = "INSERT INTO Users (fio, stat) Values ('".$_POST["fio"]."', 'Первый');";
    require_once("db_connect.php");
    $mysqli = new mysqli($adress,$usr,$pass,$db);
    $mysqli->query($query);
    $mysqli->close();
}