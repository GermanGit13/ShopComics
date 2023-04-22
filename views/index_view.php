<!DOCTYPE html>
<html lang="es">
<head>
<!--    <a href="pages/logout.php">Cerrar Sesión</a>-->
    <!-- Para usar la hoja de estilos de  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FIN hoja de estilos de  Bootstrap -->
    <!--Para incrustar las fuente desde google-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet">
    <!--FIN incrustar las fuente desde google-->


</head>

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
                                    <h4 class="mt-1 mb-5 pb-1">Accede a nuestra Tienda Online</h4>
                                </div>

                                <form action="" method="post">
<!--                                    <p>Introduce tu usuario para continuar</p>-->

                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" class="form-control"
                                               placeholder="Username" />
                                        <label class="form-label" for="form2Example11">Usuario</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" class="form-control" />
                                        <label class="form-label" for="form2Example22">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submitEntrar">Iniciar Sesión</button>
<!--                                        <a class="text-muted" href="#!">Forgot password?</a>-->
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">No tienes cuenta?</p>
<!--                                        <button type="button" class="btn btn-outline-danger">Darse de Alta</button>-->
<!--                                        <a href="../views/registrar_view.php" class="btn btn-outline-danger" type="button">Darse de Alta</a>-->
                                        <a href="../index_registar.php" class="btn btn-outline-danger" type="button">Darse de Alta</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <img src="../img/spiderman.png"
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