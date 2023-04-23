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

//Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros
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

//Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros por el idCategory
function getComicsByCategory($idCategory) {

    $db = getConnection();
    $query = ('SELECT * FROM comics WHERE idCategory = ?');
    $stmt = $db->prepare($query);
    $stmt -> execute(array($idCategory));

    return $comics = $stmt->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo
}

//Recoje la conexión  lanzar un select a la BBDD para devolver un array de libros por el idCategory
function deleteComics($idComic) {

    try {
        $db = getConnection();
        $stmt = $db->prepare("SELECT * FROM comics WHERE id=:id"); //Buscamos por usuario
        $stmt->bindParam(':id', $idComic, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    echo "<script>alert('Usuario y Contraseña no existen');</script>";
    header("Location: view.php");
}
?>
?>

