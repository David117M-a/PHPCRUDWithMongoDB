<?php
require_once "../connection/connection.php";
$NombreProducto = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Stock = $_POST['Stock'];
$Categoria = $_POST['Categoria'];

$bd = $conexion->StoreManager;

$collection = $bd->Products;

$product = array();

$product['Nombre'] = $NombreProducto;
$product['Descripcion'] = $Descripcion;
$product['Stock'] = $Stock;
$product['Categoria'] = $Categoria;

$insertOneResult = $collection->insertOne($product);

?>