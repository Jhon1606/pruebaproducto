<?php
    require_once('../Modelo/producto.php');

    $modeloProducto= new producto();
    $productos = $modeloProducto->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/tabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
    </header>

    <section>
        <main class="contenedor">
            <div class="contenedor__bloque">
                <div class="contenedor__texto">
                    <a href="Javascript:void()" onclick="abrirFlotante()"><i class="fa fa-plus icono"></i></a>
                    <div class="crud">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Precio Costo</th>
                                    <th>Precio Venta</th>
                                    <th class="anchoa">Opciones</th>
                                </tr>
                            </thead>
              
                            <tbody>
                            <?php         
                                if($productos != null){ 
                                    foreach($productos as $producto){
                            ?>
                                <tr class="fila">
                                    <td><?php echo $producto['id_producto']; ?></td>
                                    <td class="center"><?php echo $producto['codigo']; ?></td>
                                    <td class="center"><?php echo $producto['nombre']; ?></td>
                                    <td class="center"><?php echo $producto['precio_costo']; ?></td>
                                    <td class="center"><?php echo $producto['precio_venta']; ?></td>
                                    <td class="center">
                                        <a href="Javascript:void()" onclick="abrirFlotanteEditar(<?php echo $producto['id_producto']; ?>)" class="link" title="Editar"><i class="fa fa-pencil color"></i></a>
                                        <a href="Javascript:void()" onclick="abrirFlotanteEliminar(<?php echo $producto['id_producto']; ?>)" class="link" title="Eliminar"><i class="fas fa-trash-alt color"></i></a>
                                    </td>
                                </tr>

                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div> 

                <div id="flotante" class="contenedor__bloque form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form" onclick="document.getElementById('flotante').style.display='block'">
                       <?php
                            require_once('add.php');
                        ?>
                    </div> <!-- .form-->
                </div> 


                <!-- EDITAR -->

                <div id="flotanteEditar" class="contenedor__bloque form--none" >
                    <div class="formulario"></div>

                    <div class="form" onclick="document.getElementById('flotanteEditar').style.display='none'">
                        <?php
                            require_once('edit.php');
                        ?>
                       
                    </div> <!-- .form-->
                </div> 

                <!-- ELIMINAR -->

                <div id="flotanteEliminar" class="contenedor__bloque form--none" >
                    <div class="formulario"></div>

                    <div class="form" onclick="document.getElementById('flotanteEliminar').style.display='none'">
                        <?php
                            require_once('delete.php');
                        ?>
                    </div> <!-- .form-->
                </div> 
            </div>
        </main>
    </section>

    <footer class="footer">
        <p>2021 - Todos los derechos reservados</p>
    </footer>

    <script src="../../Public/js/javascript.js"></script>
</body>
</html>