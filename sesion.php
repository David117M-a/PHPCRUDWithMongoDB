<?php
    include_once './users/userSession.php';
    include_once './users/findUser.php';
    $userSession = new UserSession();

    if(isset($_SESSION['usuario'])){
        //echo "hay sesión";
        include_once './home.php';
    }
    else{
        //echo "Login";
        include_once './login.php';
    }
?>