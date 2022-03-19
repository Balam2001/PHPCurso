<?php

$letra = "p";
switch($letra)
{
    case 'a';
    echo "La palabra ingresada es la letra ".$letra;
    break;
    case 'e';
    echo "La palabra ingresada es la letra ".$letra;
    break;
    case 'i';
    echo "La palabra ingresada es la letra ".$letra;
    break;
    case 'o';
    echo "La palabra ingresada es la letra ".$letra;
    break;
    case 'u';
    echo "La palabra ingresada es la letra ".$letra;
    break;
    
    default:
    echo"La letra ingresada no se encuentra dentro de las vocales";
    break;
}

echo "<br>";

/*Realiza un programa el cual me diga si el nombre digitado esta en la lista de los alumnos */
$nombre = "fdfv";
switch($nombre)
{
    case 'Christian';
    echo $nombre.", Si pertenece a la lista";
    break;
    case 'Jonathan';
    echo "Si pertenece a la lista";
    break;
    case 'Ruth';
    echo $nombre.", Si pertenece a la lista";
    break;
    case 'Abraham';
    echo $nombre.", Si pertenece a la lista";
    break;
    case 'Adrian';
    echo $nombre.", Si pertenece a la lista";
    break;
    
    default:
    echo $nombre." , no pertenece a la  lista de alumnos";
    break;
}

/* Al lado de la una cafeteria escolar hay una maquina expendedora, la cual tiene diversos profuctos
que los estudiantes pueden recoger.
Entre los productos que ofrece la mquina expendedora estan los siguientes:
1. Galletas
2. Refrescos
3. Frituras
4. Dulces

Cuando un estudiante ingresa un numero que no este asociado a un producto
la mquina indica un error y le pide que escoja un producto de la lista
*/

echo "<br>";
$producto= 5;
switch($producto)
{
    case '1';
    echo "Galletas";
    break;
    case '2';
    echo "Refresco";
    break;
    case '3';
    echo "Frituras";
    break;
    case '4';
    echo "Dulces";
    break;
    
    default:
    echo "El numero ingreso no pertenece a ninguno de los productos, por favor ingrese un numero valido";
    break;
}



?>