<?php
require_once "../connection/connection.php";
$username = $_POST['User'];
$password = $_POST['Password'];

$bd = $conexion->StoreManager;

$collection = $bd->Users;

$findOneResult = $collection->findOne(['Username' => $username, 'Password' => $password]);

if($findOneResult != null){
    session_start();
    $_SESSION['Username'] = $username;
    var_dump($findOneResult);
}
else{
    header("HTTP/1.1 400");
}
?>

