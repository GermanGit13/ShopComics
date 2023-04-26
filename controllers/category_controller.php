<?php
ob_start(); //no me redirigía los header sin esta función
//Aqui van todas las acciones que queremos hacer sobre las categorias

function listarCategory() {
    //Se incluye el modelo que corresponde
    require 'models/category_model.php';
    //Le pide al modelo todos los comics
    $categories = getCategory(); //funcion creada dentro de comics_model.php
    //Pasa a la vista toda la informacion que se desea representar
    include 'views/category_listar_view.php'; //se lo pasamos a la vista especifica
}

function registarCategory(){


    include('./views/category_registar_view.php');
    // Comprueba si el formulario ha sido enviado.
    // Si se ha enviado, comienza el proceso el formulario y guarda los datos en la BBDD
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenemos los datos del formulario, nos aseguramos que son validos. Está en el ejemplo completo PDO
        $category = htmlspecialchars($_POST['category']);
        $img = htmlspecialchars($_POST['img']);

        // Comprueba que todos campos han sido introducidos
        if ($category == '' || $img == '') {
            // Genera el mensaje de error
            $error = 'ERROR: Por favor, introduce todos los campos requeridos.!';

        } else {
            require_once ('./models/category_model.php');
            $category = addCategory($category, $img);
        }
    }
}

//function verCategory($idCategory) {
////    if (!isset ($GET ['id']))
////        die("No has especificado un identificador de products");
////    $idCategory = $GET ['id'];
//    //Incluimos el modelo correspondiente
//    require 'models/category_model.php';
//    //Le pedimos al modelo el comic con id = $id
//    $OneIdCategory = getIdCategory($idCategory);
//    if ($OneIdCategory == null)
//        die('Identificador de la Categoria es incorrecto estamos aqui');
//}
?>