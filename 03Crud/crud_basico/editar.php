<?php
require 'conexion.php';
$id = $_GET['id'];

$consulta = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexion, $consulta);

while ($row=mysqli_fetch_assoc($resultado)) {

  ?>



  <form method="get">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username" value="<?php echo $row['username']; ?>"></br>
    <label for="contrasena">Contraseña:</label>
    <input type="text" name="contrasena" value="<?php echo $row['contrasena'];?>"></br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"></br>
    <label for="email">Correo:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"></br>
    <input type="submit" name="" value="Editar">
    <a href="index.php">Cancelar</a>
  </form>
<?php } ?>

<?php

$username=$_GET['username'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$email = $_GET['email'];

if ($username!=null && $contrasena!=null && $nombre!=null && $email!=null) {
  $editar = "UPDATE usuarios SET username='$username', contrasena='$contrasena', nombre='$nombre', email='$email' WHERE id='$id'";
  $resultado2 = mysqli_query($conexion, $editar);

  if ($resultado2) {
    header("location:index.php");
  }else{
    echo "Ha ocurrido un error, no se han podido actualizar los datos del usuario";
  }

}



 ?>
