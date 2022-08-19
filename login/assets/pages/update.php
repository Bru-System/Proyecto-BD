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
                <h1>Actualizar Inventario</h1>
            </div>
            <div class="session">
                <a href="/login/login.php">Cerrar sesión</a>
            </div>
        </div>
        <div class="main">
            <div class="form-proveedor">
                <h2>Datos proveedor</h2>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label">nombre</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">dirección</label>
                        <input type="text" class="form-control" id="direccion">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">contacto</label>
                        <input type="text" class="form-control" id="contacto">
                    </div>
                    <div class="col-12">
                        <a class="btn btn-success" href="/login/view/Administrador.php" role="button">Regresar</a>
                    </div>
                </form>
            </div>
            <div class="form-product">
                <h2>Datos producto</h2>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label">codigo</label>
                        <input type="text" class="form-control" id="codigo">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">nombre</label>
                        <input type="text" class="form-control" id="nombrep">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">marca</label>
                        <input type="text" class="form-control" id="marca">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">descripcion</label>
                        <input type="text" class="form-control" id="descripcion">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">precio</label>
                        <input type="text" class="form-control" id="precio">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">fecha caducidad</label>
                        <input type="text" class="form-control" id="caducidad">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>