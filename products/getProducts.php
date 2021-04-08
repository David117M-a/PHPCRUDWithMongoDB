<?php
require_once "../connection/connection.php";

$bd = $conexion->StoreManager;

$collection = $bd->Products;

$found = $collection->find([]);

echo json_encode(iterator_to_array($found));

?>