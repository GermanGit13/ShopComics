<?php

function registar(){

    include('./views/user_registar.php');
    // Comprueba si el formulario ha sido enviado.
    // Si se ha enviado, comienza el proceso el formulario y guarda los datos en la BBDD
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenemos los datos del formulario, nos aseguramos que son validos. Está en el ejemplo completo PDO
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);
        // Comprueba que todos campos han sido introducidos
        if ($username == '' || $email == '' || $pass == '') {
            // Genera el mensaje de error
            $error = 'ERROR: Por favor, introduce todos los campos requeridos.!';

        } else {
            require ('./models/users_model.php');
            $user = addUser($username, $email, $pass);
        }
    }
}
