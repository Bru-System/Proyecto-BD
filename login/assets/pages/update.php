<?php

include("conexion.php");
$con=conectar();

$id_proveedor=$_POST['id_proveedor'];
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$Contacto=$_POST['Contacto'];

$sql="UPDATE proveedor SET  Nombre='$Nombre',Direccion='$Direccion',Contacto='$Contacto' WHERE id_proveedor='$id_proveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: CRUD.php");
    }
?>