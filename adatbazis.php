<?php

$host       = "localhost";  //Szerver
$mysqluser  = "root";       //Felhasználónév
$pass       = "";           //Jelszó
$db         = "webshopdatabase";//Adatbázis neve

$db_connect = mysqli_connect($host,$mysqluser,$pass,$db); //Kapcsolatnyitás

if ( ! $db_connect)  //Sikertelen kapcsoaltnyitás
    die("Nem lehet csatlakozni az adatbázis szerverhez!");

?>