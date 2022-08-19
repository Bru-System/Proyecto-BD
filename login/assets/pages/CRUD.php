<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulceria</title>
    <link rel="stylesheet" href="/login/style/Admin_Style.css">
    <link rel="stylesheet" href="/login/style/Empleados_Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
            <div class="form">
                <h2>Datos Proveedor</h2>
                <form class="row g-3">
                    <div class="col-md-6">
                      <label for="inputNombrel4" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre_provedor">
                    </div>
                    <div class="col-md-6">
                      <label for="inputApellidos4" class="form-label">Dirección</label>
                      <input type="password" class="form-control" id="direccion_proveedor">
                    </div>
                    <div class="col-12">
                      <label for="inputEdad" class="form-label">Contacto</label>
                      <input type="text" class="form-control" id="contacto_provedor">
                    </div>
                    <div class="col-3">
                      <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-success" href="/login/assets/pages/update.php" role="button">Actualizar</a>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-dark" href="/login/view/Administrador.php" role="button">Regresar</a>
                    </div>
                    
                  </form>
            </div>
            <div class="list">
                <table class="table caption-top">
                    <caption>Lista de proveedores</caption>
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Contacto</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr></tr>
                      <tr></tr>
                      <tr></tr>
                      <tr></tr>
                      <tr> </tr>
                      <tr></tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>

</html>