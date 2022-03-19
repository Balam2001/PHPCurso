<?php 

for ($i=0; $i < 20 ; $i++)
{
    if( ($i%2)==0)
    {
        continue;
    }
    echo $i;
    echo "<br>";
}
echo "<br>";
//Pares

for ($i=0; $i <= 20 ; $i++)
{
    if( ($i%2)==1)
    {
        continue;
    }
    echo $i;
    echo "<br>";
}

?>