<?php

echo "<h2>BUCLES:</h2>";
echo "</br>";
echo "<h3>WHILE</h3></br>";

$numero = 1;
$limite = 5;
echo "VAMOS A CONTAR desde $numero hasta $limite </br></br>";
while ($numero <= $limite) {
  echo "Numero: $numero </br>";
  $numero++;
}

echo "</br></br>";
echo "<h3>DO-WHILE</h3></br>";

//Como en cualquier otro lenguaje la diferencia con el while es que este se ejecuta una vez mínimo independientemente de cual sea la condición

$numero2 = 20;
echo "Numero 2: $numero2 </br></br>";

do {
  echo "$numero2</br>";
  $numero2--;
} while ($numero2 >= 110);  //esta condición no se cumple pero aún así se ejecuta una vez

//En java uso el do-while para hacer menus, lo muestro una vez y luego voy controlando que se introduzca una opción válida (se repite hasta que encuentre una opcion válida)

echo "</br></br>";
echo "<h3>FOR</h3></br>";
$maximo = 12;
echo "Otra vez vamos a contar, hasta $maximo</br></br>";
//En este caso podemos crear la variable dentro de la declaración del bucle y no tenemos que hacer que itere ya que también esta incluido esto
for ($i=0; $i <=$maximo ; $i++) {
  echo "Número $i</br>";
}





 ?>
