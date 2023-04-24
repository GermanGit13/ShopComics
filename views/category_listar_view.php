<?php
include 'views/header_shop.php'; //se lo pasamos a la vista especifica
?>
<body>
<h5 class="card-title"><th>Sección:</th> Entra en una categoría para ver todos sus comics</h5>
<div class="row">
    <?php foreach ($categories as $category): ?>
    <div class="col-sm-6">
        <!-- Div para crear una separación-->
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold"></h3>
        </div>
        <div class="card">
            <div class="card-body">

                <img class="rounded-float-left" src="<?php echo $category['img'] ?>" width="259" height="386" alt="Card image cap">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold"></h3>
                    <h5 class="card-title"><th>Categoría:</th> <?php echo $category['category'] ?></h5>
                    <a href="./index_listarComicsCategory.php?idCategory=<?php echo $category['id'] ?>" class="btn btn-primary">Ver Comics</a>
                    <?php if ($_SESSION['rol'] == "admin"): ?>
                    <a href="#" class="btn btn-warning">Añadir Comics</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>
