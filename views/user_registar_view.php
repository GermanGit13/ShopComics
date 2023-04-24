<?php
include 'views/header.php'; //se lo pasamos a la vista especifica
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
                                    <h4 class="mt-1 mb-5 pb-1">Formulario de Registro</h4>
                                </div>

                                <form method="post">
                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" class="form-control" />
                                        <label class="form-label" for="form2Example11">Nombre de Usuario</label>
                                    </div>
<!--                                    <div class="form-outline mb-4">-->
<!--                                        <input type="text" name="name" class="form-control" />-->
<!--                                        <label class="form-label" for="form2Example11">Nombre</label>-->
<!--                                    </div>-->
<!--                                    <div class="form-outline mb-4">-->
<!--                                        <input type="text" name="surname" class="form-control" />-->
<!--                                        <label class="form-label" for="form2Example11">Apellidos</label>-->
<!--                                    </div>-->
<!--                                    <div class="form-outline mb-4">-->
<!--                                        <input type="text" name="phone" class="form-control" />-->
<!--                                        <label class="form-label" for="form2Example11">Teléfono</label>-->
<!--                                    </div>-->
                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" class="form-control" />
                                        <label class="form-label" for="form2Example11">Correo Electrónico</label>
                                    </div>
<!--                                    <div class="form-outline mb-4">-->
<!--                                        <input type="text" name="address" class="form-control" />-->
<!--                                        <label class="form-label" for="form2Example11">Dirección</label>-->
<!--                                    </div>-->
                                    <div class="form-outline mb-4">
                                        <input type="password" name="pass" class="form-control" />
                                        <label class="form-label" for="form2Example22">Contraseña</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
<!--                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Iniciar Sesión</button>-->
                                        <input class="btn btn-primary" type='submit' name='submitRegister' onclick="return confirm('¿Bienvenido, inicia sesión y empieza a disfrutar.')" value='Registrarse'>
                                        <a href="index.php" class="btn btn-danger" type="button">Cancelar</a>

                                    </div>
                                </form>

                            </div>
                        </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <img src="/img/registro.png"
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