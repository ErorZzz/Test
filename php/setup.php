<?php

$quary_d = "DROP TABLE Users";
//Запрос на создание таблицы
$quary_c = "CREATE TABLE Users
(	id INT(11) NOT NULL AUTO_INCREMENT,
	fio VARCHAR(50) NOT NULL,
	stat VARCHAR(10),
	CONSTRAINT pk PRIMARY KEY (id)
)";

$connect = new mysqli("127.0.0.1", "root", "", "testov");
print($_POST["type"]);
if($_POST["type"] == "reset"){
    $connect->query($quary_d);
	$connect->query($quary_c);
}
$connect->close();
?>