<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD BÁSICO</title>
  </head>
  <body>
    <?php

      require 'conexion.php';
      //$consulta = "SELECT * FROM usuarios";
      //$resultado = mysqli_query($conexion, $consulta);
      //echo $resultado;

      $resultados = mysqli_query($conexion,"SELECT * FROM usuarios");
    //  while($consulta = mysqli_fetch_array($resultados)){
      //  echo "<pre>";
        //print_r($consulta);
        //echo "</pre>";

      //  echo $consulta["username"]."</br>";




    //  }





     ?>

     <table>
       <thead>
         <tr>
           <th>ID</th>
           <th>USERNAME</th>
           <th>CONTRASEÑA</th>
           <th>NOMBRE</th>
           <th>CORREO</th>
         </tr>
       </thead>
       <tbody>
         <?php while($consulta = mysqli_fetch_array($resultados)){ ?>
           <tr>
             <td><?php echo $consulta["id"]; ?></td>
             <td><?php echo $consulta["username"]; ?></td>
             <td><?php echo $consulta["contrasena"]; ?></td>
             <td><?php echo $consulta["nombre"]; ?></td>
             <td><?php echo $consulta["email"]; ?></td>
             <td>
                <a href="editar.php?id=<?php echo $consulta["id"]; ?>">Editar</a>
                <a href="eliminar.php?id=<?php echo $consulta["id"]; ?>">Eliminar</a>

             </td>
           </tr>
         <?php } ?>
         <h3><a href="agregar.php">Añadir usuario</a></h3>



       </tbody>
     </table>



  </body>
</html>
