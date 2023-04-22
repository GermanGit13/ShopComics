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
//    $pass = self::cryptconmd5($pass);

//    $password = self::cryptconmd5($password); //encriptamos la clave por medio de la funcion cryptconmd5
      // guardamos los datos en la base de datos
      try {
          $stmt = $dbh->prepare("INSERT INTO users (username, email, pass) VALUES (:username,:email, :pass)");
          $stmt->bindParam(':username', $username, PDO::PARAM_STR);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
          $stmt->execute();
      } catch (PDOException $e) {
          echo "ERROR: " . $e->getMessage();
      }
        header('Location: ./index.php');
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

