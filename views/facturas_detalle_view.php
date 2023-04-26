<?php
include 'views/header_shop.php'; //se lo pasamos a la vista especifica
?>
<body>

<div class="row">

    <div class="col-sm-6">
        <!-- Div para crear una separación-->
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold"></h3>
        </div>
        <div class="card">
            <div class="card-body">

                <img class="rounded-float-left" src="/img/factura.png" width="225" height="225" alt="Card image cap">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold"></h3>
                    <h5 class="card-title"><th>Factura:</th> <?php echo $factura['numero'] ?> </h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fecha Factura: <?php echo $factura['fecha'] ?> </li>
                        <li class="list-group-item">Comics: <?php echo $factura['idComics'] ?> </li>
                        <li class="list-group-item">Precio: <?php echo $factura['importe'] ?> </li>
                        <li class="list-group-item">Cantidad: <?php echo $factura['cantidad'] ?> </li>
                        <li class="list-group-item">Total: <?php echo $factura['total'] ?> €</li>
                        <li class="list-group-item">Usuario: <?php echo $factura['idUsers'] ?> </li>
                    </ul>
                    <a href="" class="btn btn-primary">Detalles</a>
                    <?php if ($_SESSION['rol'] == "admin"): ?>
<!--                    <a href="" class="btn btn-warning">Eliminar</a>-->
                    <a href="./index_deleteFacturas.php?id=<?php echo $factura['id'] ?>" onclick="return confirm('¿Realmente desea eliminar?')" class="btn btn-danger">Eliminar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>


</body>

