<?php
require_once "../connection/connection.php";
$_id = $_POST['_id'];
$NombreProducto = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Stock = $_POST['Stock'];
$Categoria = $_POST['Categoria'];

$bd = $conexion->StoreManager;

$collection = $bd->Products;

$updateOneResult = $collection->replaceOne(
    ['_id' => new MongoDB\BSON\ObjectId ($_id)],
    ['Nombre' => $NombreProducto, 'Descripcion' => $Descripcion, 'Stock' => $Stock, 'Categoria' => $Categoria]
);

var_dump($updateOneResult);
?>