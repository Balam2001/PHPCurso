<?php 

$nombre = "Christian";
$apellido = "Balam";

echo "Hola soy $nombre $apellido";
echo "<br>";
echo "Hola ".$nombre;
echo "<br>";
$edad = 20;

echo "Hola mi nombre es "."\n".$nombre.", mi apellido es "."\n".$apellido." y tengo "."\n".$edad." años";

echo "<br>";

$enunciado = "Hola soy un estudiante de la UTM, en esta ocasión estoy tomando una asesoria de PHP";

echo $enunciado; 

$busqueda = "UTM";

echo "<br> <br>";

echo strpos($enunciado, $busqueda);
echo "<br> <br>";

$enunciado2 = "Abraham es un estudiante de la UTM que actualmente no conoce casi ningún lenaguaje de programación, por lo tanto su vida cómo programador es muy mala";
echo $enunciado;
echo "<br> <br>";
echo "Texto modificado: <br>".str_replace("Abraham", "Jonathan", $enunciado2);







?>