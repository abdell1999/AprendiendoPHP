<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $nombre = trim($_POST['nombre']);
      $apellido1 = trim($_POST['apellido1']);
      $apellido2 = trim($_POST['apellido2']);
	    $correo = trim($_POST['correo']);
      $telefono = trim($_POST['telefono']);



	    $consulta = "INSERT INTO suscriptores(nombre, apellido1, apellido2, correo, telefono) VALUES ('$nombre', '$apellido1', '$apellido2','$correo','$telefono')";
	    $resultado = mysqli_query($conexion, $consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
