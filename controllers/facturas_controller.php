<?php
ob_start(); //no me redirigía los header sin esta función
//Aqui van todas las acciones que queremos hacer sobre las facturas

function listar() {
    //Se incluye el modelo que corresponde
    require 'models/facturas_model.php';
    //Le pide al modelo todos las facturas
    $facturas = getFacturas(); //funcion creada dentro de facturas_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/facturas_listar_view.php'; //se lo pasamos a la vista especifica
}

function listarFacturasByUsers() {
    if (!isset ($_GET['idUsers']))
        die("No has especificado un identificador de usuario");
//        echo "<script>alert('No has especificado un identificador de categoria');</script>";
    $idUsers = $_GET['idUsers'];

    //Se incluye el modelo que corresponde
    require_once 'models/facturas_model.php';
    //Le pide al modelo todos los comics
    $facturas = getFacturasByUsers($idUsers); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/facturas_listar_view.php'; //se lo pasamos a la vista especifica
}

function ver() {
    if (!isset ($_GET ['id']))
        die("No has especificado un identificador de factura");
    $id = $_GET ['id'];
    //Incluimos el modelo correspondiente
    require_once 'models/facturas_model.php';
    //Le pedimos al modelo la factura con id = $id
    $factura = getIdFactura($id);
    if ($factura == null)
        die('Identificador de factura incorrecto');
    //Pasamos a la vista toda la informacion que se desea representar
    include 'views/facturas_detalle_view.php';
}

function deleteFactura() {
    if (!isset ($_GET['id']))
        die("No has especificado un identificador de factura");
//        echo "<script>alert('No has especificado un identificador de categoria');</script>";
    $idFacturas = $_GET['id'];

    //Se incluye el modelo que corresponde
    require_once 'models/facturas_model.php';
    //Le pide al modelo todos los comics
    $facturas = deleteFacturas($idFacturas); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/facturas_listar_view.php'; //se lo pasamos a la vista especifica
}
?>