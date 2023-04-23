<?php
ob_start(); //no me redirigía los header sin esta función
//Aqui van todas las acciones que queremos hacer sobre las categorias
function listar() {

    //Se incluye el modelo que corresponde
    require 'models/category_model.php';
    //Le pide al modelo todos los comics
    $categories = getCategory(); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/category_listar_view.php'; //se lo pasamos a la vista especifica
}

//function ver() {
//    if (!isset ($GET ['id']))
//        die("No has especificado un identificador de products");
//    $id = $GET ['id'];
//    //Incluimos el modelo correspondiente
//    require 'models/comics_model.php';
//    //Le pedimos al modelo el comic con id = $id
//    $comic = getComics($id);
//    if ($comic == null)
//        die('Identificador del comic incorrecto');
//    //Pasamos a la vista toda la informacion que se desea representar
//    include ('views/products_ver.php');
//}
?>