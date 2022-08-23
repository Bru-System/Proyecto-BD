
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
    <link rel="stylesheet" href="/login/style/Admin_Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/login/style/ListVtn_Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container1">
        <div class="header">
            <div class="logotipo">
                <img src="/login/assets/img/Dulces Deutschland 2.0.png" alt="logotipo">
            </div>
            <div class="title">
                <h1>Ventana administrador</h1>
            </div>
            <div class="session">
                <a href="/login/login.php">Cerrar sesión</a>
            </div>
        </div>
        <div class="main">
            <div class="search">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
            <div class="listvtn">
                <table class="table caption-top">
                    <!--<caption>Lista de ventas</caption>-->
                    <thead class="table-dark">
                        <tr>
                            <th scope="col"id="id_venta" name="id_venta">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Accion</th>


                        </tr>
                    </thead>
                    <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_venta']?></th>
                                                <th><?php  echo $row['id_empleado']?></th>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['Cantidad']?></th>   
                                                <th><?php  echo $row['Total']?></th>  
                                                <th><?php  echo $row['Fecha']?></th>   
                                                <th><a href="deletev.php?id=<?php echo $row['id_venta'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                </table>
            </div>
           

            <div class="reg">
                <a href="/login/view/Administrador.php">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</body>

</html>