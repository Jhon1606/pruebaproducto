window.onload=function(){

    var pos=window.name || 0;
    window.scrollTo(0,pos);

}

window.onunload=function(){

    window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);

}

function abrirFlotante(){
    document.getElementById("flotante").style.display = "block";
}

function abrirFlotanteEditar(ideditar){
    
    $.ajax({
        url: "../../General/Queries/infoproducto.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var codigo = info[0].codigo;
        var nombre = info[0].nombre;
        var fecha_creacion = info[0].fecha_creacion;
        var precio_costo = info[0].precio_costo;
        var precio_venta = info[0].precio_venta;
        

        $("#ideditar").val(ideditar);
        $("#codigo").val(codigo);
        $("#nombre").val(nombre);
        $("#fecha_creacion").val(fecha_creacion);
        $("#precio_costo").val(precio_costo);
        $("#precio_venta").val(precio_venta);
        $("#flotanteEditar").show();
    });
}

function stop(){
    event.stopPropagation();
}

function abrirFlotanteEliminar(ideliminar){
    document.getElementById("ideliminar").value = ideliminar;
    document.getElementById("flotanteEliminar").style.display = "block";
}

