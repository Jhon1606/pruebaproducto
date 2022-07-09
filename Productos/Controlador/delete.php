<?php

require_once('../Modelo/producto.php');

if ($_POST) {
    $modeloProducto = new producto();

    $id_producto = $_POST['id_producto'];
    $modeloProducto->delete($id_producto);
}else{
    header('Location: ../../index.php');
}

?>