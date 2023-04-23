<?php
ob_start(); //no me redirigía los header sin esta función
//Aqui van todas las acciones que queremos hacer sobre los comics
function listar() {

    //Se incluye el modelo que corresponde
    require 'models/comics_model.php';
    //Le pide al modelo todos los comics
    $comics = getComics(); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/comics_listar_view.php'; //se lo pasamos a la vista especifica
}

function listarComicsByCategoria() {
    if (!isset ($_GET['idCategory']))
        die("No has especificado un identificador de categoria");
//        echo "<script>alert('No has especificado un identificador de categoria');</script>";
    $idCategory = $_GET['idCategory'];

    //Se incluye el modelo que corresponde
    require 'models/comics_model.php';
    //Le pide al modelo todos los comics
    $comics = getComicsByCategory($idCategory); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/comics_listar_view.php'; //se lo pasamos a la vista especifica
}

function deleteComic() {
    if (!isset ($_GET['id']))
        die("No has especificado un identificador de comics");
//        echo "<script>alert('No has especificado un identificador de categoria');</script>";
    $idComic = $_GET['id'];

    //Se incluye el modelo que corresponde
    require 'models/comics_model.php';
    //Le pide al modelo todos los comics
    $comics = deleteComics($idComic); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/comics_listar_view.php'; //se lo pasamos a la vista especifica
}

function ver() {
    if (!isset ($_GET ['id']))
        die("No has especificado un identificador de products");
    $id = $_GET ['id'];
    //Incluimos el modelo correspondiente
    require 'models/comics_model.php';
    //Le pedimos al modelo el comic con id = $id
    $comic = getComics($id);
    if ($comic == null)
        die('Identificador del comic incorrecto');
    //Pasamos a la vista toda la informacion que se desea representar
    include ('views/products_ver.php');
}
?>