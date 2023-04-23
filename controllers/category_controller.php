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

function registar(){

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