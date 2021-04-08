var _id = "";
var $nombre = "";
var $descripcion = "";
var $stock = 0;
var $categoria = "";

function insertOne() {
    var nombreProducto = $('#txtNombreProducto').val();
    var descripcion = $('#txtDescripcion').val();
    var stock = $('#txtStock').val();
    var categoria = $('#txtCategoria').val();

    if (nombreProducto.length == 0 || descripcion.length == 0 || stock.length == 0 || categoria.length == 0) {
        return Swal.fire({
            icon: 'warning',
            title: 'Campos vacíos',
            text: 'Rellena todos los campos para continuar!',
        });
    }
    else {
        /*$.ajax({
             url: './products/saveProduct.php',
             type: 'POST',
             data: {
                 Nombre: nombreProducto,
                 Descripcion: descripcion,
                 Stock: stock,
                 Categoria: categoria
             }
         }).done(function (resp) {
             Swal.fire({
                 icon: 'success',
                 title: 'Producto guardado',
                 showConfirmButton: false,
                 timer: 1500
             });
         });*/

        const data = new FormData();
        data.append('Nombre', nombreProducto);
        data.append('Descripcion', descripcion);
        data.append('Stock', stock);
        data.append('Categoria', categoria);

        fetch('./products/saveProduct.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Producto guardado',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(()=>{
                        window.location.replace("./productos.php");
                    }, 1500);
                } else {
                    throw "Error en la llamada";
                }

            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });
    }
}

function getAll() {
    var contenido = document.querySelector('#contenido');
    fetch('./products/getProducts.php')
        .then(res => res.json())
        .then(datos => {
            contenido.innerHTML = '';
            console.log(datos);
            for (let valor of datos) {
                contenido.innerHTML += `
                <tr id="${valor._id.$oid}">
                    <td>${valor.Nombre}</td>
                    <td>${valor.Descripcion}</td>
                    <td>${valor.Stock}</td>
                    <td>${valor.Categoria}</td>
                    <td>
                        <button type="submit" class="btn btn-primary" onClick="editar('${valor._id.$oid}', '${valor.Nombre}', '${valor.Descripcion}', '${valor.Stock}', '${valor.Categoria}')" data-bs-toggle="modal" data-bs-target="#actualizarModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                        </button>
                        <button type="submit" class="btn btn-danger" onClick="eliminar('${valor._id.$oid}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                `;
            }
        });
}

function eliminar(id) {
    Swal.fire({
        title: '¿Eliminar producto?',
        text: "Estas a punto de descontinuar un producto.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#0d6efd',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            /*$.ajax({
                url: './products/deleteProduct.php',
                type: 'POST',
                data: {
                    Id: id
                }
            }).done(function (resp) {
                console.log(resp)
                Swal.fire({
                    icon: 'error',
                    title: 'Producto Eliminado',
                    showConfirmButton: false,
                    timer: 1500
                });
                getAll();
            });*/

            const data = new FormData();
            data.append('Id', id);

            fetch('./products/deleteProduct.php', {
                method: 'POST',
                body: data
            })
                .then(function (response) {
                    if (response.ok) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Producto Eliminado',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        throw "Error en la llamada";
                    }

                })
                .then(function (texto) {
                    console.log(texto);
                })
                .catch(function (err) {
                    console.log(err);
                });
                setTimeout(getAll, 500);
        }
    })
}

function editar(id, nombre, descripcion, stock, categoria) {
    _id = id;
    $nombre = nombre;
    $descripcion = descripcion;
    $stock = stock;
    $categoria = categoria;

    var Nombre = document.querySelector('#txtNombre');
    var Descripcion = document.querySelector('#txtDescripcion');
    var Stock = document.querySelector('#txtStock');
    var Categoria = document.querySelector('#txtCategoria');

    Nombre.value = `${nombre}`;
    Descripcion.value = `${descripcion}`;
    Stock.value = `${stock}`;
    Categoria.value = `${categoria}`;

}

function update() {
    var id = _id;
    var nombre = $("#txtNombre").val();
    var descripcion = $("#txtDescripcion").val();
    var stock = $("#txtStock").val();
    var categoria = $("#txtCategoria").val();

    /*$.ajax({
        url: './products/updateProduct.php',
        type: 'POST',
        data: {
            _id: id,
            Nombre: nombre,
            Descripcion: descripcion,
            Stock: stock,
            Categoria: categoria
        }
    }).done(function (resp) {
        console.log(resp);
        Swal.fire({
            icon: 'success',
            title: 'Producto actualizado',
            showConfirmButton: false,
            timer: 1500
        });
        getAll();
    });*/

    const data = new FormData();
    data.append('_id', id);
    data.append('Nombre', nombre);
    data.append('Descripcion', descripcion);
    data.append('Stock', stock);
    data.append('Categoria', categoria);

    fetch('./products/updateProduct.php', {
        method: 'POST',
        body: data
    })
        .then(function (response) {
            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Producto actualizado',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                throw "Error en la llamada";
            }

        })
        .then(function (texto) {
            console.log(texto);
        })
        .catch(function (err) {
            console.log(err);
        });
    $('#actualizarModal').hide();
    $('.modal-backdrop').hide();
    setTimeout(getAll, 500);
}
