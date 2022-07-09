<form action="../Controlador/edit.php" method="POST" >
<input type="hidden" id="ideditar" name="id_producto">

    <div class="contenedor__form auto" onclick="stop()">
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEditar').style.display='none'" 
            class="cerrar" title="Cerrar">
            <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="titulo">
            <h2 class="tituloCrud"><i class="fa fa-pencil"></i> Editar Producto</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="codigo">Codigo</label>
            <input type="number" class="form--input" name="codigo" id="codigo" required="">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre del producto</label>
            <input type="text" class="form--input" name="nombre" id="nombre" required="">
        </div>

        
        <div class="form--flex">
            <label class="form--label" for="fecha_creacion">Fecha de creación</label>
            <input class="form--input" type="date" name="fecha_creacion" id="fecha_creacion">
        </div>

        <div class="form--flex">
            <label class="form--label" for="precio_costo">Precio Costo</label>
            <input type="number" class="form--input" name="precio_costo" id="precio_costo" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="precio_venta">Precio venta</label>
            <input type="number" name="precio_venta" id="precio_venta" class="form--input" required=""></input>
        </div>

        <div class="form--boton boton--enviar">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>