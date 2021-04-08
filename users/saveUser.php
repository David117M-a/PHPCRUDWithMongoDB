<?php
require_once "../connection/connection.php";
$username = $_POST['User'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$number = $_POST['Number'];

$bd = $conexion->StoreManager;

$collection = $bd->Users;

$user = array();

$user['Username'] = $username;
$user['Password'] = $password;
$user['Email'] = $email;
$user['Number'] = $number;

$insertOneResult = $collection->insertOne($user);

/*printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());*/

/*$insertOneResult = $collection->insertOne([
        'Email' => 'admin',
        'Password' => '12345'
    ]);

    var_dump($insertOneResult->getInsertedId());
    var_dump($insertOneResult->getInsertedId());*/
?>
