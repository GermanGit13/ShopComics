<?php
require './db/connect-db.php'; //se lo pasamos la conexión

//Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros
function getComics() {

    $db = getConnection();
    $result = $db->query('SELECT title, reference FROM comics');
    $result -> execute(); //Ejecutamos primero la Query
    return $comics = $result->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo

}