<?php
//Al igual que en javascript, en php no hay que indicar de que tipo es una define_syslog_variables
//simplemente puede almacenar cualquier cosa.


$numero1 = 17;
$nombre = "Pepe";
$numero2 = "17";

echo "El nombre es ".$nombre." y tiene ".$numero1." años."; //Se concatena con "." y las variables son precedidas por "$"

//Con echo realmente no hace falta concatenar de esta forma.
echo "</br>";
echo "NOMBRE: $nombre";
echo "</br>";



//Como decía antes una variable puede almacenar cualquier dato sin especificar de que grapheme_stripos
echo "</br>";
echo "</br>";
$var1 = 18;
echo $var1;
echo "</br>";

$var1 = "texto";
echo $var1;
echo "</br>";
$var1 = 3.1416;
echo $var1;


//Aunque no tenemos que especificar el tipo de dato que se guarda podemos consultarlo.
$texto = "Hola esto se supone que es un texto";
$entero = 47;
$decimal = 16.98;
$encendido = true;  //Cuando se imprime un boolean si es true mostrará 1 y si es false no se mostrara nada

echo "</br>";
echo "</br>";
echo "</br>";

var_dump($texto);
echo "</br>";
var_dump($entero);
echo "</br>";
var_dump($decimal);
echo "</br>";
var_dump($encendido);


//Por último de esta parte veremos unas comprobaciones básicas
//Una forma simple de comprobar el valor de las variables booleanas es usar "var_dump()"
$var2 = 15;
$var3 = 16;
$var4 = "15";
echo "</br></br></br>";

var_dump($var2 == $var3); //Da falso porque almacenan números diferentes
echo "</br>";
var_dump($var2 == $var4); //En este caso dá verdadero omitiendo que son tipos de datos diferentes
echo "</br>";
var_dump($var2 === $var4); //Para comprobar que también sean del mismo tipo hay que usar el triple igual







 ?>
