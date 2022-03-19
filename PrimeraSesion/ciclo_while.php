<?php

$i=0;

while ($i <= 10){

    $i++;
    echo $i;
}


echo"<br>";
//Tabla del 5
$o=1;

while ($o <= 10)
{
    if($o <= 5){
        $resultado = $o * 5;
        echo "5 x $o = $resultado";
        echo "<br>";
    $o++;
    }
    else{
        break;
    }
}


?>