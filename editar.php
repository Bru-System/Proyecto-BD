<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<!-- formulario de edicion -->


    <?php
     $conexion = mysqli_connect("localhost", "root", "", "dulceria");
     if(!$conexion){
         die("Error de conexion: ".mysqli_connect_error());
     }

        $id = $_GET['id'];
        $id_inventario=$id;
        $consulta = "SELECT * FROM inventario WHERE id_inventario = $id_inventario";
        echo($id_inventario);
        $resultado = mysqli_query($conexion, $consulta);
        while($fila = mysqli_fetch_array($resultado)){
            echo "<form action='editar.php' method='post'>";
            echo "<div class='form-group'>";
            echo "<label for='id'>ID</label>";
            echo "<input type='text' class='form-control' name='id' value='".$fila['id_inventario']."' readonly>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='codigo'>Codigo</label>";
            echo "<input type='text' class='form-control' name='codigo' value='".$fila['codigo']."'>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='proveedor'>Proveedor</label>";
            echo "<input type='text' class='form-control' name='proveedor' value='".$fila['id_proveedor']."'>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='cantidad'>Cantidad</label>";
            echo "<input type='text' class='form-control' name='cantidad' value='".$fila['Cantidad']."'>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='fechaentrada'>Fecha de Entrada</label>";
            echo "<input type='text' class='form-control' name='fechaentrada' value='".$fila['FechaEntrada']."'>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='fechasalida'>Fecha de Salida</label>";
            echo "<input type='text' class='form-control' name='fechasalida' value='".$fila['FechaSalida']."'>";
            echo "</div>";
            echo "<button type='submit' class='btn btn-primary'>Editar</button>";

            echo "</form>";
            //update
        }
        

    mysqli_close($conexion);


?>
</body>
</html>