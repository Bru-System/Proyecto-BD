<?php

include("conexion.php");
$con=conectar();

$id_inventario=$_GET['id'];

$sql="DELETE FROM ventas WHERE id_inventario='$id_inventario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Inventario.php");
    }
?>