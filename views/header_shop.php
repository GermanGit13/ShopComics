<?php
//session_start();
if(!isset($_SESSION['username']))
{
//    echo "No hay sesión activa";

}else{
//    echo "Sesion Activa: " .$_SESSION['username'] .$_SESSION['rol'] .$_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Para usar la hoja de estilos de  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FIN hoja de estilos de  Bootstrap -->
    <!--Para incrustar las fuente desde google-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet">
    <!--FIN incrustar las fuente desde google-->

    <nav class="navbar navbar-dark bg-dark">
        <img src="/img/logoComics.png" alt="Logo" width="650" height="150" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="#">
            <h4> Bienvenido a nuestra Tienda de Comics: <?php echo $_SESSION['username']?></h4>
        </a>
    </nav>

    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container text-center">
            <div class="row">
<!--                <div class="col">-->
<!--                    <a href="../index_listarCategory.php" class="btn btn-sm btn-outline-secondary" type="button">Inicio</a>-->
<!--                </div>-->
    <!--Controlar el rol con if-->
    <?php if ($_SESSION['rol'] == "admin"): ?>
                <div class="col">
                    <a href="./index_category_registar.php" class="btn btn-sm btn-outline-secondary" type="button">Añadir nueva categoria</a>
                </div>
                <div class="col">
                    <a href="AP2_German_Rodriguez/index_listarCategory.php" class="btn btn-sm btn-outline-secondary" type="button">Listar todas las Ventas</a>
                </div>
    <?php endif; ?>
    <!--FIN Controlar el rol con if-->
            </div>
        </div>
    </nav>


</head>