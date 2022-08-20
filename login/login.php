<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login/style/Admin_Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Dulceria</title>

</head>

<body>
    <div class="conatiner1">
        <div class="header">
            <div class="logotipo">
                <img src="/login/assets/img/Dulces Deutschland 2.0.png" alt="logotipo">
            </div>
            <div class="title">
                <h1>Iniciar Sesion</h1>
            </div>
        </div>
        <div class="main">
            <div class="login">
                <form method="post">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label fs-4">Usuario</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label fs-4">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="col-3 float-end">
                        <!--<a class="btn btn-primary" href="/login/view/Administrador.php" role="button">Ingresar</a>-->
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    /* $db_localhost = 'localhost';
        $db_database = 'usuario';
        $db_user = 'root';
        $db_password = '';
    
        $conexion = mysqli_connect($db_localhost, $db_user, $db_password, $db_database);
    
        if(!$conexion){
            die ("Error al conectar con labase de datos");
        }else{
            die ("conexion exitosa");
        }*/

    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];

    if ($usuario == 'Bruno' &&  $pass == 'bruno1') {
        header("Location: ./view/Administrador.php");
        exit();
        if ($usuario == 'Bruno' ||  $pass == 'bruno1') {
            echo "<script>alert('usuario o contraseña incorrecto')</script>";
        }
    } elseif ($usuario == 'Aidee' &&  $pass == 'aidee04'){
        header("Location: ./view/Vendedor.php");
        exit();
        if ($usuario == 'Aidee' ||  $pass == 'aidee04') {
            echo "<script>alert('usuario o contraseña incorrecto')</script>";
        }
    } elseif ($usuario == 'Emmanuel' &&  $pass == 'emma02'){
        header("Location: ./view/Vendedor.php");
        exit();
        if ($usuario == 'Emmanuel' ||  $pass == 'emma02') {
            echo "<script>alert('usuario o contraseña incorrecto')</script>";
        }
    } elseif ($usuario == 'Josseline' &&  $pass == 'joss05'){
        header("Location: ./view/Vendedor.php");
        exit();
        if ($usuario == 'Josseline' ||  $pass == 'joss05') {
            echo "<script>alert('usuario o contraseña incorrecto')</script>";
        }
    } elseif ($usuario == 'Xavier' &&  $pass == 'xavi03'){
        header("Location: ./view/Vendedor.php");
        exit();
        if ($usuario == 'Xavier' ||  $pass == 'xavi03') {
            echo "<script>alert('usuario o contraseña incorrecto')</script>";
        }
    }else{
        echo "<script>alert('No se encontro un registro con ese nombre de usuario')</script>";
    }

    ?>


</body>

</html>