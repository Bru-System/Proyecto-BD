<?php
    $db_hostname = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_BD = 'usuario';
    
    try {
        $conexion = mysqli_connect($db_hostname, $db_user, $db_pass);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>