<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";
$conexion = mysqli_connect($servername, $username, $password, $database);

if ($conexion->connect_errno) {
    echo "Estamos teniendo problemas técnicos intentelo más tarde";
    exit();
}



?>
