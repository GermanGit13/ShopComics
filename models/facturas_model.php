<?php
require './db/connect-db.php'; //se lo pasamos a la vista especifica

/**
 * Función para listar todos las facturas
 */
function getFacturas() {

    $db = getConnection();
    $result = $db->query('SELECT * FROM facturas');
    $result -> execute(); //Ejecutamos primero la Query

    return $facturas = $result->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo
//Para devolver un array de los resultados, con el titulo y el precio de los libros en este caso
//    $comics = array();
//    while ($comic = $result->fetch()) {
//        $comics[] = $comic;
//
//        return $comics;
//    }
}

/**
 * Función para listar facturas por usuario
 * Recoje la conexión  lanzar un select a la BBDD para devolver un array de facturas por el idUsers
 */
function getFacturasByUsers($idUsers) {

    $db = getConnection();
    $query = ('SELECT * FROM facturas WHERE idUsers = ?');
    $stmt = $db->prepare($query);
    $stmt -> execute(array($idUsers));

    return $facturas = $stmt->fetchAll(PDO::FETCH_ASSOC); //metemos en la variable comics array  asociativo
}

/**
 * Función para borrar facturas por id
 */
function deleteFacturas($idFacturas) {
    $db = getConnection();

    try {
        $stmt = $db->prepare("DELETE FROM facturas WHERE id=:id"); //Buscamos por id
        $stmt->bindParam(':id', $idFacturas, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    header("Location: index_listarFacturas.php");
}

/**
 * función para buscar una factura
 */
function getIdFactura($idFactura) {
    $dbh = getConnection();

    try {
        $query = ('SELECT * FROM facturas WHERE id = ?');
        $stmt = $dbh->prepare($query);
        $stmt -> execute(array($idFactura));
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    return $factura = $stmt->fetch(); //metemos en la variable comics array  asociativo
}
?>

