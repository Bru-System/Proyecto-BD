<?php

include("conexion.php");
$con=conectar();

$id_proveedor=$_GET['id'];

$sql="DELETE FROM proveedor  WHERE id_proveedor='$id_proveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: CRUD.php");
    }
?>