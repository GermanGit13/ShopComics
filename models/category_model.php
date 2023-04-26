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

/**
 * Función para dar de alta un usuario
 */
function addCategory($category, $img) {
    $dbh = getConnection(); //Creamos la conexión a la BBDD

        try {
            $stmt = $dbh->prepare("INSERT INTO category (category, img) VALUES (:category, :img)");
            $stmt->bindParam(':category', $category, PDO::PARAM_STR);
            $stmt->bindParam(':img', $img, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    header('Location: index_listarCategory.php');
}

/**
 * Función para borrar category por id
 */
function deleteCategory($idCategory) {
    $db = getConnection();

    try {
        $stmt = $db->prepare("DELETE FROM category WHERE id=:id"); //Buscamos por usuario
        $stmt->bindParam(':id', $idCategory, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    header("Location: index_listarCategory.php");
}
?>

