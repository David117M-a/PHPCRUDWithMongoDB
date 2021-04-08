<?php
require_once "../connection/connection.php";
$id = $_POST['Id'];

$bd = $conexion->StoreManager;

$collection = $bd->Products;

$deleteOneResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId ($id)]);

var_dump($deleteOneResult);
?>