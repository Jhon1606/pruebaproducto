<?php

require_once("../../Productos/Modelo/producto.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloProducto = new producto();
$informacionProducto = $modeloProducto->getById($ideditar);

if ($informacionProducto != null){

    foreach ($informacionProducto as $infoProducto) {
       
        $arreglo[] = array(
                            "codigo"=>$infoProducto["codigo"],
                            "nombre"=>$infoProducto["nombre"],
                            "fecha_creacion"=>$infoProducto["fecha_creacion"],
                            "precio_costo"=>$infoProducto["precio_costo"],
                            "precio_venta"=>$infoProducto["precio_venta"],
                        );
    }
}

echo json_encode($arreglo);

?>