<form action="../Controlador/add.php" method="POST" >
    <div class="contenedor__form auto" onclick="stop()">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotante').style.display='none'" 
            class="cerrar--form" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="titulo">
            <h2 class="tituloCrud"><i class="fa fa-plus"></i> Añadir Producto</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="codigo">Codigo</label>
            <input type="number" class="form--input" name="codigo" required="">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre del producto</label>
            <input type="text" class="form--input" name="nombre" required="">
        </div>

        
        <div class="form--flex">
            <label class="form--label" for="precio_costo">Precio Costo</label>
            <input type="number" class="form--input" name="precio_costo" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="precio_venta">Precio Venta</label>
            <input type="number" class="form--input" name="precio_venta" required="">
        </div>

        <div class="form--boton boton--enviar">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> 
</form>