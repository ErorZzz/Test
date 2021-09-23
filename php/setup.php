<?php

$quary_d = "DROP TABLE Users";
//Запрос на создание таблицы
$quary_c = "CREATE TABLE Users
(	id INT(11) NOT NULL AUTO_INCREMENT,
	fio VARCHAR(50) NOT NULL,
	stat VARCHAR(10),
	CONSTRAINT pk PRIMARY KEY (id)
)";

require_once("db_connect.php");
$mysqli = new mysqli($adress,$usr,$pass,$db);
print($_POST["type"]);
if($_POST["type"] == "reset"){
    $mysqli->query($quary_d);
	$mysqli->query($quary_c);
}
$mysqli->close();
?>