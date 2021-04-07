<?php

echo "<h1>FUNCIONES</h1>";

function suma(int $num1, int $num2){
    $suma = $num1 + $num2;
    return $suma;
}

$numero1 = 18;
$numero2 = 2;

echo suma($numero1, $numero2);
echo "</br>";
echo suma("56","4");  //Al exigir int aunque escribamos "" los sigue reconociendo como enteros
echo "</br>";
//echo suma("Hola ","tio"); //En cambio esto genera un error
echo "</br></br></br>";


function saludo(){
  echo "Buenas!!!";
}


saludo();






 ?>
