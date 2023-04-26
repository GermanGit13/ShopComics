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
    require_once 'models/comics_model.php';
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
    require_once 'models/comics_model.php';
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
    include 'views/products_ver.php';
}

function registar(){

    include('views/comics_registar_view.php');
//    recoger el id de la categoria
//    if (!isset ($_GET ['id']))
//        die("No has especificado un identificador de products");
//    $idCategoria = $_GET ['id'];

    // Comprueba si el formulario ha sido enviado.
    // Si se ha enviado, comienza el proceso el formulario y guarda los datos en la BBDD
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenemos los datos del formulario, nos aseguramos que son validos. Está en el ejemplo completo PDO
        $title = htmlspecialchars($_POST['title']);
        $reference = htmlspecialchars($_POST['reference']);
        $author = htmlspecialchars($_POST['author']);
        $publisher = htmlspecialchars($_POST['publisher']);
        $description = htmlspecialchars($_POST['description']);
        $formate = htmlspecialchars($_POST['formate']);
        $page = htmlspecialchars($_POST['page']);
        $price = htmlspecialchars($_POST['price']);
        $img = htmlspecialchars($_POST['img']);
        $idCategory = htmlspecialchars($_POST['idCategory']);

        // Comprueba que todos campos han sido introducidos
        if ($title == '' || $img == ''|| $idCategory == '') {
            // Genera el mensaje de error
            $error = 'ERROR: Por favor, introduce todos los campos requeridos.!';

        } else {
//            require '/models/category_model.php';
//            $OneIdCategory = verCategory($idCategory);
            require './models/comics_model.php';
            $comics = addComics($title, $reference, $author, $publisher, $description, $formate, $page, $price, $img, $idCategory);

        }
    }
}
?>