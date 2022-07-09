<?php

require_once('../Modelo/producto.php');

if ($_POST) {
    $modeloProducto = new producto();

    $id_producto = $_POST['id_producto'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $precio_costo = $_POST['precio_costo'];
    $precio_venta = $_POST['precio_venta'];
    

    $modeloProducto->update($id_producto,$codigo,$nombre,$fecha_creacion,$precio_costo,$precio_venta);
    }else{
        header('Location: ../Vista/index.php');
    }

?>