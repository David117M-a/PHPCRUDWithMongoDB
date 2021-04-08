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
<body class="body" onload="getAll()">
    <div class="container">
        <p class="title">Productos</p>
        <p class="instructions">Puedes modificar los datos del producto que desees o descontinuarlo.</p>
        <div class="row mt-5 mb-5">
            <div class="col">
                <table class="table">
                    <thead class="thead">
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Stock</th>
                        <th>Categoría</th>
                        <th></th>
                    </thead>
                    <tbody id="contenido" class="tbody">
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="./js/productsController.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

<div class="modal fade" id="actualizarModal" tabindex="-1" aria-labelledby="actualizarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarModalLabel">Editar datos de producto.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="txtNombre" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombre">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="col-form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="txtDescripcion">
                    </div>
                    <div class="mb-3">
                        <label for="txtStock" class="col-form-label">Stock:</label>
                        <input type="number" class="form-control" id="txtStock">
                    </div>
                    <div class="mb-3">
                        <label for="txtCategoria" class="col-form-label">Categoría:</label>
                        <input class="form-control" list="datalistOptions" id="txtCategoria">
                        <datalist id="datalistOptions">
                            <option value="Lácteos">
                            <option value="Frituras">
                            <option value="Semillas y legumbres">
                            <option value="Carnes frías">
                            <option value="Carne">
                            <option value="Limpieza">
                            <option value="Higiene personal">
                            <option value="Salud">
                            <option value="Mascotas">
                            <option value="Vinos y Licores">
                            <option value="Frutas y Vegetales">
                        </datalist>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="update()">Guardar</button>
            </div>
        </div>
    </div>
</div>
<?php require_once './structure/footer.php' ?>
</html>