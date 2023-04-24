<?php
include 'views/header.php'; //se lo pasamos a la vista especifica
if (!isset ($_GET ['id']))
    die("No has especificado un identificador de products");
$idCategoria = $_GET ['id'];
?>

<body>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="../img/logoSmall.png"
                                         style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Añadir nuevo comics: <?php echo $idCategoria ?></h4>
                                </div>

                                <form method="post" id="formulario">
                                    <div class="form-outline mb-4">
                                        <input type="text" name="title" class="form-control" />
                                        <label class="form-label" for="form2Example11">Titulo</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="reference" class="form-control" />
                                        <label class="form-label" for="form2Example11">Referencia</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="author" class="form-control" />
                                        <label class="form-label" for="form2Example11">Autor</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="publisher" class="form-control" />
                                        <label class="form-label" for="form2Example11">Editorial</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="reference" class="form-control" />
                                        <label class="form-label" for="form2Example11">Referencia</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="description" class="form-control" />
                                        <label class="form-label" for="form2Example11">Descripción</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="formate" class="form-control" />
                                        <label class="form-label" for="form2Example11">Formato</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="page" class="form-control" />
                                        <label class="form-label" for="form2Example11">Número Páginas</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="price" class="form-control" />
                                        <label class="form-label" for="form2Example11">Precio</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="img" class="form-control" />
                                        <label class="form-label" for="form2Example11">Url Imagen</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="idCategory" class="form-control" />
                                        <label class="form-label" for="form2Example11">Categoria</label>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
<!--                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Iniciar Sesión</button>-->
                                        <input class="btn btn-primary" type='submit' name='submitRegister' onclick="return confirm('¿Realmente desea añadir un nuevo comic?')" value='Registrar Categoría'>
                                        <a href="./index_listarCategory.php" class="btn btn-danger" type="button">Cancelar</a>

                                    </div>
                                </form>
                                <!-- Mensaje en JavaScript de confirmación-->
<!--                                <script type="text/javascript">-->
<!--                                    (function() {-->
<!--                                        var form = document.getElementById('formulario');-->
<!--                                        form.addEventListener('submit', function(event) {-->
<!--                                            // si es false entonces que no haga el submit-->
<!--                                            if (!confirm('Se va añadir una nueva categoria, ¿Estás seguro?')) {-->
<!--                                                event.preventDefault();-->
<!--                                            }-->
<!--                                        }, false);-->
<!--                                    })();-->
<!--                                </script>-->
                                <!-- FIN Mensaje en JavaScript de confirmación-->
                            </div>
                        </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <img src="/img/addComic.png"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<form>-->
<!--    <div id="carouselExampleFade" class="carousel slide carousel-fade">-->
<!--        <div class="carousel-inner">-->
<!--            <div class="carousel-item active">-->
<!--                <img src="img/1.jpg" class="d-block w-100" alt="...">-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img src="img/2.jpg" class="d-block w-100" alt="...">-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img src="img/3.jpg" class="d-block w-100" alt="...">-->
<!--            </div>-->
<!--        </div>-->
<!--        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">-->
<!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--            <span class="visually-hidden">Previous</span>-->
<!--        </button>-->
<!--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">-->
<!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--            <span class="visually-hidden">Next</span>-->
<!--        </button>-->
<!--    </div>-->
<!--</form>-->
</nav>

</body>
</html>