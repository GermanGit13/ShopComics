<?php
//Aqui van todas las accines que queremos hacer sobre los comics
function listar() {

    //Se incluye el modelo que corresponde
    require 'models/products_model.php';
    //Le pide al modelo todos los comics
    $comics = getProducts(); //funcion creada dentro de products_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/products_listar.php'; //se lo pasamos a la vista especifica
}

function ver() {
    if (!isset ($GET ['id']))
        die("No has especificado un identificador de products");
    $id = $GET ['id'];
    //Incluimos el modelo correspondiente
    require 'models/products_model.php';
    //Le pedimos al modelo el comic con id = $id
    $comic = getProducts($id);
    if ($comic == null)
        die('Identificador del comic incorrecto');
    //Pasamos a la vista toda la informacion que se desea representar
    include ('views/products_ver.php');
}