<?php
require './db/connect-db.php'; //se lo pasamos a la vista especifica

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
//function getConnection() {
//
//    $user = 'root';
//    $pwd = '';
//    return new PDO('mysql:host=localhost;dbname=shopcomics', $user, $pwd);
//}
//
//function getConnection() {
//
//    $dbname = "shopcomics";
//    $user = "root";
//    $password = "";
//    $server = 'localhost';
//    $dbh ="";
//
//// Con un array de opciones
//    try {
//        $dsn = "mysql:host=$server;dbname=$dbname;charset=UTF8";
//        $dbh = new PDO($dsn, $user, $password);
//        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Conexión realizada con éxito !!!";
//    } catch (PDOException $e) {
//        echo $e->getMessage();
//    }
//}

/**
 * Función para listar todos los comics
 */
function getComics() {

    $db = getConnection();
    $result = $db->query('SELECT * FROM comics');
    $result -> execute(); //Ejecutamos primero la Query

    return $comics = $result->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo
//Para devolver un array de los resultados, con el titulo y el precio de los libros en este caso
//    $comics = array();
//    while ($comic = $result->fetch()) {
//        $comics[] = $comic;
//
//        return $comics;
//    }
}

/**
 * Función para listar comics por categoria
 * Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros por el idCategory
 */
function getComicsByCategory($idCategory) {

    $db = getConnection();
    $query = ('SELECT * FROM comics WHERE idCategory = ?');
    $stmt = $db->prepare($query);
    $stmt -> execute(array($idCategory));

    return $comics = $stmt->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo
}

/**
 * Función para borrar comics por id
 */
function deleteComics($idComic) {
    $db = getConnection();

    try {
        $stmt = $db->prepare("DELETE FROM comics WHERE id=:id"); //Buscamos por usuario
        $stmt->bindParam(':id', $idComic, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    header("Location: index_listarCategory.php");
}

/**
 * Función para dar de alta un comics
 */
function addComics($title, $reference, $author, $publisher, $description, $formate, $page, $price, $img, $idCategory) {
    $dbh = getConnection(); //Creamos la conexión a la BBDD

    try {
        $stmt = $dbh->prepare("INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES (:title, :reference, :author, :publisher, :description, :formate, :page, :price, :img, :idCategory)");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':reference', $reference, PDO::PARAM_STR);
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        $stmt->bindParam(':publisher', $publisher, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':formate', $formate, PDO::PARAM_STR);
        $stmt->bindParam(':page', $page, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
        $stmt->bindParam(':idCategory', $idCategory, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    header('Location: index_listarCategory.php');
}

/**
 * función para buscar un comics
 */
function getIdComics($id) {
    $dbh = getConnection();

    try {
        $query = ('SELECT * FROM comics WHERE id = ?');
        $stmt = $dbh->prepare($query);
        $stmt -> execute(array($id));
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    return $comic = $stmt->fetch(); //metemos en la variable comics array  asociativo
}
?>

