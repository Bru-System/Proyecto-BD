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
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label">codigo producto</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputApellidos4" class="form-label">cantidad</label>
                        <input type="password" class="form-control" id="inputApellidos4">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">total</label>
                        <input type="text" class="form-control" id="inputEdad">
                    </div>
                    <div class="col-6">
                        <label for="inputEdad" class="form-label">fecha de venta</label>
                        <input type="text" class="form-control" id="inputEdad">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success">Realizar</button>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-primary" href="/login/assets/pages/Inventario.php" role="button">Inventario</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-dark" href="/login/view/Administrador.php" role="button">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>