<?php
include("conexion.php");
$con=conectar();

$id_venta=$_POST['id_venta'];
$id_empleado=$_POST['id_empleado'];
$codigo=$_POST['codigo'];
$Cantidad=$_POST['Cantidad'];
$Total=$_POST['Total'];
$Fecha=$_POST['Fecha'];

$sql="INSERT INTO ventas VALUES('$id_venta','$id_empleado','$codigo','$Cantidad','$Total','$Fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Vendedor.php");
}else {
}
?>