function verifyLogin() {
    var user = $('#txtUser').val();
    var password = $('#txtPassword').val();

    if (user.length == 0 || password.length == 0) {
        return Swal.fire({
            icon: 'warning',
            title: 'Campos vacíos',
            text: 'Rellena todos los campos para continuar!',
        });
    }

    /*$.ajax({
        url: './users/findUser.php',
        type: "POST",
        data: {
            User: usuario,
            Password: contrasena
        }
    }).done(
        function (resp) {
            if (resp.length > 7) {
                Swal.fire({
                    icon: 'success',
                    title: 'Sesión iniciada',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(sesionIniciada, 2000);
                
            }
            else {
                Swal.fire({
                    icon: 'error',
                    title: 'Usuario y/o contraseña incorrectos.',
                    text: 'Verifique su usuario y contraseña, luego vuelva a intentar.',
                });
            }
        }
    )*/

    const data = new FormData();
    data.append('User', user);
    data.append('Password', password);

    fetch('./users/findUser.php', {
        method: 'POST',
        body: data
    })
        .then(function (response) {
            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Sesión iniciada',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(sesionIniciada, 2000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Usuario y/o contraseña incorrectos.',
                    text: 'Verifique su usuario y contraseña, luego vuelva a intentar.',
                });
            }

        })
        .then(function (texto) {
            console.log(texto);
        })
        .catch(function (err) {
            console.log(err);
        });
}

function verifyRegister() {
    var user = $('#txtUser').val();
    var password = $('#txtPassword').val();
    var email = $('#txtEmail').val();
    var number = $('#txtNumber').val();

    if (user.length == 0 || password.length == 0 || email.length == 0 || number.length == 0) {
        return Swal.fire({
            icon: 'warning',
            title: 'Campos vacíos',
            text: 'Rellena todos los campos para continuar!',
        });
    }
    /*$.ajax({
        url: './users/saveUser.php',
        type: "POST",
        data: {
            User: user,
            Password: password,
            Email: email,
            Number: number
        }
    }).done(
        function (resp) {
            Swal.fire({
                icon: 'success',
                title: 'Registro exitoso',
                showConfirmButton: false,
                timer: 1500
            });
        }
    )*/

    const data = new FormData();
    data.append('User', user);
    data.append('Password', password);
    data.append('Email', email);
    data.append('Number', number);

    fetch('./users/saveUser.php', {
        method: 'POST',
        body: data
    })
        .then(function (response) {
            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Registro exitoso',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                throw "Error en la llamada Ajax";
            }

        })
        .then(function (texto) {
            console.log(texto);
        })
        .catch(function (err) {
            console.log(err);
        });
}

function cerrarSesion() {
    fetch('./users/userSession.php')
    .then(function (resp){
        console.log(resp);
    }).catch(function (error){
        console.log(error);
    });
    location.reload();
}

function sesionIniciada(){
    window.location.replace("./home.php");
}
