<?php
echo "<h2>CONDICIONALES:</h2>";
echo "</br>";
echo "<h3>IF</h3>";

$numero1 = "107";
$numero2 = 107;


echo "<strong>Número 1:</strong> $numero1 </br><strong>Número 2:</strong> $numero2";
echo "</br></br>";
var_dump($numero1);
echo "</br>";
var_dump($numero2);
echo "</br>";
echo "</br></br>";

if ($numero1 > $numero2) {
  echo "$numero1 es mayor que $numero2";
}

if ($numero2 > $numero1) {
  echo "$numero2 es mayor que $numero1";
}

if ($numero1 == $numero2) { //Cuando los números son iguales y del mismo tipo se ejecutan los dos últimos if
  echo "$numero1 es igual que $numero2";
}
if ($numero1 === $numero2) {
  echo " y del mismo tipo";
}else{
  echo " pero no son el mismo tipo de dato";
}


//Al igual que en cualquier otro lenguaje podemos usar else y dentro de este agrupar otros if, pero bueno...

echo "</br>";
echo "<h3>SWITCH</h3>";

$edad = 14;
echo "</br>EDAD: $edad</br></br>";


switch ($edad) {
  case $edad<18:
    echo "<style>
      p{
        color: red;
        font-size: 30;
      }

    </style>";
    echo "<p>MENOR DE EDAD</p>";
    break;

  default:
    echo "MAYOR DE EDAD";
    break;
}







 ?>
