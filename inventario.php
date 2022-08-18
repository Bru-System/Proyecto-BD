<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/bruno/css/bootstrap.css">
    <title>Inventario</title>
</head>
<body>

<!-- tabla de productos -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Proveedor</th>
            <th>Cantidad</th>
            <th>Fecha de Entradas</th>
            <th>Fecha de Salidas</th>
            <th>Acciones</th>
        </tr>
    <?php

    $conexion = mysqli_connect("localhost", "root", "", "dulceria");
    if(!$conexion){
        die("Error de conexion: ".mysqli_connect_error());
    }
    $consulta = "SELECT * FROM inventario";
    $resultado = mysqli_query($conexion, $consulta);
    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['id_inventario']."</td>";
        echo "<td>".$fila['codigo']."</td>";
        echo "<td>".$fila['id_proveedor']."</td>";
        echo "<td>".$fila['Cantidad']."</td>";
        echo "<td>".$fila['FechaEntrada']."</td>";
        echo "<td>".$fila['FechaSalida']."</td>";
        // botones de acciones
        echo "<td>";
        echo "<a href='editar.php?id=".$fila['id_inventario']."' class='btn btn-warning'>Editar</a>";
        echo "<a href='eliminar.php?id=".$fila['id_inventario']."' class='btn btn-danger'>Eliminar</a>";
        echo "</tr>";
    }

 
        
    mysqli_close($conexion);

?>
    </thead>
    <tbody>

</body>
</html>