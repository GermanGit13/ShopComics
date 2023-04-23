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

<!--    --><?php //foreach ($comics as $comic): ?>
<!--<!--        <div class="d-flex">-->-->
<!--<!--            <div class="flex-shrink-0">-->-->
<!--            <div class="d-flex justify-content-center">-->
<!--                <div class="card" style="width: 18rem;">-->
<!--                    <img class="card-img-top" src="..." alt="Card image cap">-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">--><?php //echo $comic['title'] ?><!--</h5>-->
<!--                        <p class="card-text">--><?php //echo $comic['description'] ?><!--</p>-->
<!--                        <a href="#" class="btn btn-primary">Detalles</a>-->
<!--                        <a href="#" class="btn btn-danger">Eliminar</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--    --><?php //endforeach; ?>

        <div class="col-lg-12">
            <?php foreach ($comics as $comic): ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold"></h3>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col">
                            <img class="rounded-float-left" src="/img/logo_small.jpg" alt="Card image cap">
                            <h5 class="card-title"><th>Titulo:</th> <?php echo $comic['title'] ?></h5>
                            <p class="card-text"><th>Descripción:</th> <?php echo $comic['description'] ?></p>
                            <p class="card-text"><th>Editorial:</th> <?php echo $comic['publisher'] ?></p>
                            <p class="card-text"><th>Autor:</th> <?php echo $comic['author'] ?></p>
                            <p class="card-text"><th>Formato:</th> <?php echo $comic['formate'] ?></p>
                            <p class="card-text"><th>Páginas:</th> <?php echo $comic['page'] ?></p>
                            <p class="card-text"><th>Precio:</th> <?php echo $comic['price'] ?><th>€</th></p>
                            <p class="card-text"><th>Referencia:</th> <?php echo $comic['reference'] ?></p>
                        </div>

                    </div>

                </div>

            </div>
            <?php endforeach; ?>
        </div>

<!--<div class="container">-->
<!--    <div class="row-fluid ">-->
<!--        <!-- my php code which uses x-path to get results from xml query. -->-->
<!---->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="card-columns-fluid">-->
<!--                    --><?php //foreach ($comics as $comic): ?>
<!--                    <div class="card  bg-light" style = "width: 22rem; " >-->
<!--                        <img class="card-img-top"  src=" ... " alt="Card image cap">-->
<!---->
<!--                        <div class="card-body">-->
<!--                            <h5 class="card-title">--><?php //echo $comic['title'] ?><!--</h5>-->
<!--                            <p class="card-text">--><?php //echo $comic['description'] ?><!--</p>-->
<!--                            <p class="card-text">--><?php //echo $comic['publisher'] ?><!--</p>-->
<!--                            <p class="card-text">--><?php //echo $comic['author'] ?><!--</p>-->
<!--                            <p class="card-text">--><?php //echo $comic['formate'] ?><!--</p>-->
<!--                            <p class="card-text">--><?php //echo $comic['page'] ?><!--</p>-->
<!--                            <p class="card-text">--><?php //echo $comic['price'] ?><!--</p>-->
<!--                            <p class="card-text">--><?php //echo $comic['reference'] ?><!--</p>-->
<!--                            <a href="#" class="btn btn-secondary">Full Details</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                --><?php //endforeach; ?>
<!--            </div>-->
<!---->
<!--    </div>-->
<!--</div> <!--container div  -->-->


</body>
</html>
