<?php
echo "<h1>Arrays</h1>";

$minimo = 0;
$maximo = 500000;
$tamanio = 20;

for ($i=0; $i < $tamanio ; $i++) {
  $arrayNumeros[$i] = rand($minimo, $maximo);
}

$tamanio = count($arrayNumeros);  //También se puede usar "sizeof()"

echo "</br></br>El tamaño del array es $tamanio</br></br>";

for ($i=0; $i<$tamanio ; $i++) {
  echo "Posición $i: $arrayNumeros[$i]</br>";
}


echo "</br></br></br><pre>";
print_r($arrayNumeros); //Otra forma de mostrar arrays es con "print_r()"
echo "</pre>";


echo "<h2>Arrays Bidimensionales</h2>";

$personas = array(
  array("Pedro", "Juan", 23),
  array("Luisa", 20),
  array("Ignacio", 18),
  array("Isa", 29),
  array("Julian", 32)
);

for ($i=0 ; $i < count($personas) ; $i++ ) {
  echo "<li>";
    for ($j=0; $j < count($personas[$i]) ; $j++) {
    echo $personas[$i][$j]." ";
    }
    echo "</li>";
}

echo "</br></br></br><pre>";
print_r($personas);
echo "</pre>";





 ?>
