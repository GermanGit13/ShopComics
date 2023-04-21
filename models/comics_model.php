<?php
//include 'db/connect-db.php'; //se lo pasamos a la vista especifica

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $user = 'root';
    $pwd = '';
    return new PDO('mysql:host=localhost;dbname=mvcpap', $user, $pwd);
}

//Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros
function getProducts() {

    $db = getConnection();
    $result = $db->query('SELECT title, reference FROM products');
//Para devolver un array de los resultados, con el titulo y el precio de los libros en este caso
    $products = array();
    while ($product = $result->fetch()) {
        $products[] = $product;

        return $products;
    }
}

