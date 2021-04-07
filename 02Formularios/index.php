<!DOCTYPE html>
<html>
<head>
	<title>Newsletter</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <!-- //CREDITOS A: https://www.youtube.com/watch?v=cka0J41iJY0&ab_channel=SoyDalto https://github.com/soydalto/Conexion-a-mysql-con-php -->


    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
      <input type="text" name="apellido1" placeholder="Primer Apellido">
      <input type="text" name="apellido2" placeholder="Segundo Apellido">
    	<input type="email" name="correo" placeholder="Correo">
      <input type="text" name="telefono" placeholder="Teléfono">
    	<input type="submit" name="register">
    </form>
        <?php
        include("validar.php");
        ?>
</body>
</html>
