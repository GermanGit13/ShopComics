<?php
include 'views/header_shop.php'; //se lo pasamos a la vista especifica
?>
<body>

<div class="row">
    <?php foreach ($comics as $comic): ?>
    <div class="col-sm-6">
        <!-- Div para crear una separación-->
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold"></h3>
        </div>
        <div class="card">
            <div class="card-body">

                <img class="rounded-float-left" src="<?php echo $comic['img'] ?>" width="259" height="386" alt="Card image cap">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold"></h3>
                    <h5 class="card-title"><th>Titulo:</th> <?php echo $comic['title'] ?></h5>
                    <p class="card-text"><th>Descripción:</th> <?php echo $comic['description'] ?></p>
                    <p class="card-text"><th>Editorial:</th> <?php echo $comic['publisher'] ?></p>
                    <p class="card-text"><th>Autor:</th> <?php echo $comic['author'] ?></p>
                    <p class="card-text"><th>Formato:</th> <?php echo $comic['formate'] ?></p>
                    <p class="card-text"><th>Páginas:</th> <?php echo $comic['page'] ?></p>
                    <p class="card-text"><th>Precio:</th> <?php echo $comic['price'] ?><th>€</th></p>
                    <p class="card-text"><th>Referencia:</th> <?php echo $comic['reference'] ?></p>
                    <a href="" class="btn btn-primary">Detalles</a>
                    <?php if ($_SESSION['rol'] == "admin"): ?>
                    <a href="" class="btn btn-warning">Modificar</a>
                    <a href="./index_deleteComics.php?id=<?php echo $comic['id'] ?>" onclick="return confirm('¿Realmente desea eliminar?')" class="btn btn-danger">Eliminar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


</body>

