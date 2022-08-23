<?php
include("conexion.php");
$con=conectar();

$id_proveedor=$_POST['id_proveedor'];
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$Contacto=$_POST['Contacto'];

$sql="INSERT INTO proveedor VALUES('$id_proveedor','$Nombre','$Direccion','$Contacto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: CRUD.php");
    
}else {
}
?>