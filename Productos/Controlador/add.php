<?php

require_once('../Modelo/producto.php');

if ($_POST) {
    $modeloProducto = new producto();

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $precio_costo = $_POST['precio_costo'];
    $precio_venta = $_POST['precio_venta'];
    
    $modeloProducto->add($codigo,$nombre,$precio_costo,$precio_venta);
    }else{
        header('Location: ../../index.php');
    }

?>