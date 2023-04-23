<?php
//session_start();
if(!isset($_SESSION['username']))
{
    echo "No hay sesión activa";

}else{
    echo "Sesion Activa: " .$_SESSION['username'] .$_SESSION['rol'] .$_SESSION['id'];
}
include 'views/header.php'; //se lo pasamos a la vista especifica
?>
<body>
<h1>Comics en nuestra tienda</h1>
<!--<table border="1">-->
<!--    <tr>-->
<!---->
<!--        <th>TITULO</th>-->
<!--        <th>REFERENCIA</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($comics as $comic): ?>
<!--        <tr>-->
<!--            <td> --><?php //echo $comic['title'] ?><!--</td>-->
<!--            <td> --><?php //echo $comic['reference']?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--</table>-->

    <?php foreach ($comics as $comic): ?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $comic['title'] ?></h5>
                <p class="card-text"><?php echo $comic['description'] ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    <?php endforeach; ?>


</body>
</html>
