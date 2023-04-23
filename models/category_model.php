<?php
require './db/connect-db.php'; //se lo pasamos a la vista especifica

//Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros
function getCategory() {

    $db = getConnection();
    $result = $db->query('SELECT * FROM category');
    $result -> execute(); //Ejecutamos primero la Query

    return $categories = $result->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo
//Para devolver un array de los resultados, con el titulo y el precio de los libros en este caso
//    $comics = array();
//    while ($comic = $result->fetch()) {
//        $comics[] = $comic;
//
//        return $comics;
//    }
}
?>

