<?php 

$decision = "No";

if($decision == "Si" ){
    echo "Su decisión es SI";

}
else{
    echo "Su decisión es NO";
}

echo "<br>";

$num1 =10;
$num2= 20;

if($num1 > $num2){
    echo "Numero $num1 es Mayor que número $num2";
}
else{
    echo "Numero $num1 es Mayor que número $num2";
}


/* Pedro quiere entrar a una fiesta de sus amigos pero para entrar necesita llevar 5 gaseosas, si pedro no tiene 5 gaseosas no podrá
entrar pero si tiene 5 o más este su podrá ingresar a la fiesta (Utiliza las setencias If else) */

echo "<br>";
$gaseosasP= 4;

if ($gaseosasP >= 5)
{
    echo "Pedro tiene $gaseosasP por lo tanto puede entrar a la fiesta";
}
else{
    echo "Pedro tiene $gaseosasP por lo tanto no puede entrar a la fiesta";
}
echo "<br>";

$numero = -2;

if($numero = 10){
    echo "El numero ingresado es de igual a 10";
}elseif ($numero > 10 ){
    echo "El numero ingresado es mayot a 10";
}elseif($numero < 0){
    echo "El numero ingresado es un numero negativo";
}


?>