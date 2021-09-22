<?php

$quary_d = "DROP TABLE Users";
//Запрос на создание таблицы
$quary_c = "CREATE TABLE Users
(	id INT(11) NOT NULL AUTO_INCREMENT,
	fio VARCHAR(50) NOT NULL,
	userStatus INT(1),
	CONSTRAINT pk PRIMARY KEY (id)
)";

$connect = new mysqli("127.0.0.1", "root", "", "testov");
if (!$link) {
    die('Ошибка соединения: ' . mysqli_connect_error());
}
if($_POST["type"] === "RESET"){
    $connect->query($quary_d);
}
$connect->query($quary_c);

$connect->close();
?>