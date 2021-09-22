<?php
// Входные данные только ФИО
if(isset($_POST["fio"])){
    $query = "INSERT INTO Users (fio, stat) Values ("+$_POST["fio"]+"), 'Первый');";
    $mysqli = new mysqli("localhost", "root", "", "testov");
    $mysqli->query($query);
    $mysqli->close();
}