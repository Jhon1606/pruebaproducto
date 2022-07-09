<?php 
require_once("../../conexion.php");

class producto extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($codigo,$nombre,$precio_costo,$precio_venta){
    $statement=$this->conexion->prepare("INSERT INTO inventario (codigo,nombre,precio_costo,precio_venta)
                                        VALUES(:codigo,:nombre,:precio_costo,:precio_venta)");
    $statement->bindParam(':codigo',$codigo);
    $statement->bindParam(':nombre',$nombre);
    $statement->bindParam(':precio_costo',$precio_costo);
    $statement->bindParam(':precio_venta',$precio_venta);

    if($statement->execute()){
        header('Location: ../Vista/index.php');
    }else{
        header('Location: ../Vista/add.php');
    }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM inventario");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_producto){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM inventario WHERE id_producto=:id_producto");
        $statement->bindParam(":id_producto",$id_producto);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_producto,$codigo,$nombre,$fecha_creacion,$precio_costo,$precio_venta){
        $statement=$this->conexion->prepare("UPDATE inventario SET codigo=:codigo, nombre=:nombre, fecha_creacion=:fecha_creacion,
                                            precio_costo=:precio_costo, precio_venta=:precio_venta WHERE id_producto = :id_producto");


         $statement->bindParam(':id_producto',$id_producto);
         $statement->bindParam(':codigo',$codigo);
         $statement->bindParam(':nombre',$nombre);
         $statement->bindParam(':fecha_creacion',$fecha_creacion);
         $statement->bindParam(':precio_costo',$precio_costo);
         $statement->bindParam(':precio_venta',$precio_venta);
         
         
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }

    public function delete($id_producto){
        $statement=$this->conexion->prepare("DELETE FROM inventario WHERE id_producto = :id_producto");
        $statement->bindParam(":id_producto",$id_producto);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }
}

?>