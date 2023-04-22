<?php

require './db/connect-db.php'; //se lo pasamos a la vista especifica

//function getConnection() {
//
//    $user = 'root';
//    $pwd = '';
//    return new PDO('mysql:host=localhost;dbname=shopcomics', $user, $pwd);
//}

    /**
     * Función para dar de alta un usuario
     */
    function addUser($username, $email, $pass) {
    $dbh = getConnection(); //Creamos la conexión a la BBDD

      // guardamos los datos en la base de datos
      try {
          $passHash = password_hash($pass, PASSWORD_DEFAULT); //encriptamos la contraseña con la funcion password_hash

          $stmt = $dbh->prepare("INSERT INTO users (username, email, pass) VALUES (:username,:email, :pass)");
          $stmt->bindParam(':username', $username, PDO::PARAM_STR);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->bindParam(':pass', $passHash, PDO::PARAM_STR);
          $stmt->execute();
      } catch (PDOException $e) {
          echo "ERROR: " . $e->getMessage();
      }
        header('Location: index.php');
    }

    /**
     * Función para verificar que existe el usuario y la contraseña
     */
    function verifyLogin($username, $pass) {
        $dbh = getConnection(); //Creamos la conexión a la BBDD

        $stmt = $dbh->prepare("SELECT * FROM users WHERE username=:username"); //Buscamos por usuario
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $passUserBBDD = $user['pass']; //Pasamos a texto plano la contraseña que recibimos del usuario que hemos buscado en la BBDD para poder usaral en password_verify

//        $msg=(password_verify($pass, $passUserBBDD)) ? "Todo bien" : "Algo falló";
//        echo $msg;
//        echo $user['pass'];
//        echo $passUserBBDD;
//        echo $pass;
        if($user != null){
            if(password_verify($pass, $passUserBBDD)) {
                session_start();          //Iniciamos la sesión para luego recuperarla
                $_SESSION['id']=$user['id']; //añadimos el id
                $_SESSION['username']=$user['username']; //añadimos el username
                $_SESSION['rol']=$user['rol']; //añadimos el rol

                header('Location: index_listarComics.php');
                echo "Contraseña Valida";
            } else{
                echo "La contraseña no es correcta";
//            header('Location: index_registar.php');
            }
        } else {
            echo "Usuario no existe en la BBDD";
//            header('Location: index_registar.php');
        }

    }

    /**
     * function
     * cryptconmd5($password)
     * Devuelve clave encriptada
     * usuarios_modelo.php
     * @param String $password
     * @return String
     * Ejemplo 10 clase
     */
     function cryptconmd5($password) {

        $salt = md5($password."%*4!#$;.k~’(_@");
        $password = md5($salt.$password.$salt);
        return $password;
    }
?>

