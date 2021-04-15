<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar usuario</title>
  </head>
  <body>

    <form method="get">
      <label for="username">Nombre de usuario:</label>
      <input type="text" name="username"></br>
      <label for="contrasena">Contraseña:</label>
      <input type="password" name="contrasena"></br>
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre"></br>
      <label for="email">Correo:</label>
      <input type="email" name="email"></br>
      <input type="submit" name="" value="Agregar">
      <a href="index.php">Cancelar</a>
    </form>

  </body>
</html>

<<?php

  require 'conexion.php';

  $username=$_GET['username'];
  $contrasena = $_GET['contrasena'];
  $nombre = $_GET['nombre'];
  $email = $_GET['email'];

  if ($username!=null && $contrasena!=null && $nombre!=null && $email!=null) {
    $insertar = "INSERT INTO usuarios(username, contrasena, nombre, email) VALUES ('$username', '$contrasena', '$nombre','$email')";
    $resultado = mysqli_query($conexion, $insertar);

    if ($resultado) {
      header("location:index.php");
    }else{
      echo "Ha ocurrido un error, no se ha podido registrar el nuevo usuario";
    }

  }




 ?>
