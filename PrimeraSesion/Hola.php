<?php
print "Hola mundo php"; //Este es un comentario
echo "<br>";
/*mucho comentario*/

echo "Hola mundo", " Bienvenido al curso";

//Variavles de cadena de texto
$nombre="Christian";
$texto= "Variables de cadena de texto";
$edad= 26;
$ciudad="Merida";

echo "<br>";
echo $texto;
echo "<br>";
print("Mi nombre es ".$nombre ." y vivo en ".$ciudad);
echo "<br>";

//Booleano
$verdadero = true;
echo $verdadero;
echo "<br>";
$falso= false;
echo $falso;

//Operadores básicos

$suma = 10+2;
echo $suma;
echo "<br>";
print("La suma es ".$suma);
echo "<br>";
$modulo = 10%2;
echo $modulo;
echo "<br>";
$division = 10/2;
echo $division;
echo "<br>";
$exponente = 3**2;
echo $exponente;
echo "<br>";
print("El exponente es ".$exponente);

//Ejemplo

$nombreC="Christian Jesus Balam Rosas";
$edad = 20;
$familia= 5;
echo "<br>";
print("Mi nombre es ".$nombreC." tengo ".$edad." años y en mi familia pricipal es de ".$familia);
//define('constante', valor);
define('PI', 3.1416);
echo "<br>";
$pi = PI;
echo $pi;
echo "<br>";
echo PI;



?>
