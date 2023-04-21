<?php
$dbname = "shopcomics";
$user = "root";
$password = "";
$server = 'localhost';
$dbh ="";

// Con un array de opciones
try {
    $dsn = "mysql:host=$server;dbname=$dbname;charset=UTF8";
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexi�n realizada con �xito !!!";
} catch (PDOException $e) {
    echo $e->getMessage();
}