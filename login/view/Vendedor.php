
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulceria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/login/style/Admin_Style.css">
    <link rel="stylesheet" href="/login/style/Empleados_Style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logotipo">
                <img src="/login/assets/img/Dulces Deutschland 2.0.png" alt="logotipo">
            </div>
            <div class="title">
                <h1>Ventana vendedor</h1>
            </div>
            <div class="session">
                <a href="/login/login.php">Cerrar sesión</a>
            </div>
        </div>
        <div class="main">
            <div class="form-vtn">
                <h2>Generar nueva venta</h2>
                <br>
                <form class="row g-3" action="ventas.php" method="POST">
                    <div class="col-md-6">
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label" name="id_venta">id venta</label>
                        <input type="text" class="form-control" id="inputApellidos4" name="id_venta">
                    </div>
               
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label" name="id_empleado">id empleado</label>
                        <input type="text" class="form-control" id="inputApellidos4"  name="id_empleado">
                    </div>
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label" name="codigo">codigo</label>
                        <input type="text" class="form-control" id="inputApellidos4"  name="codigo">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label" name="Cantidad">cantidad</label>
                        <input type="text" class="form-control" id="inputApellidos4"  name="Cantidad">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label" name="Total">total</label>
                        <input type="text" class="form-control" id="inputEdad" name="Total">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label" name="Fecha">fecha de venta</label>
                        <input type="text" class="form-control" id="inputEdad" name="Fecha">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success">Realizar</button>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-primary"  href="/login/assets/pages/inventario.php"role="button">Inventario</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-dark" href="/login/login.php" role="button">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php

?>



</body>

</html>