<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreManager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href='./css/styles.css'>
</head>
<?php require_once './structure/header.php' ?>

<body class="body">
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="./img/Ciudad.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>¿Necesitas ayuda?</h2>
                            <p>Intenta leer la guía de usuario en GitHub.com</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./img/Santafe.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Registra nuevos productos para tu tienda</h2>
                            <p>Sólo inicia sesión y luego dirígete a la pestaña "Crear"</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./img/España.jfif" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Comienza a administrar tu tienda</h5>
                                <p>Sólo registrate y empieza a configurar tu stock de productos</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-auto">
                </br>
                <div class="card" style="width: 18rem;">
                    <img class="img-fluid card-img-top" src="./img/Almacen.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 2vw">¿Deseas revisar tu inventario?</h5>
                        <p class="card-text" style="font-size: 1vw">Accede a la tabla con detalles de tus productos.</p>
                        <a href="#" class="btn btn-primary" style="font-size: 1.5vw">Iniciar</a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                </br>
                <div class="card" style="width: 18rem;">
                    <img class="img-fluid card-img-top" src="./img/create.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 2vw">¿Agregar nuevos productos?</h5>
                        <p class="card-text" style="font-size: 1vw">Dirígete al apartado "Crear" para registrar nuevos productos.</p>
                        <a href="#" class="btn btn-primary" style="font-size: 1.5vw">Iniciar</a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                </br>
                <div class="card" style="width: 18rem;">
                    <img class="img-fluid card-img-top" src="./img/delete.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 2vw">¿Deseas descontinuar algún producto?</h5>
                        <p class="card-text" style="font-size: 1vw">Puedes eliminar los productos que vendes cuando quieras en el apartado "Eliminar".</p>
                        <a href="#" class="btn btn-primary" style="font-size: 1.5vw">Iniciar</a>
                    </div>
                </div>
            </div>
        </div>
        </br>
    </div>
</body>
<?php require_once './structure/footer.php' ?>
</html>