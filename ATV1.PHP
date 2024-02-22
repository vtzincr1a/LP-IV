<?php
$lista = ["ola mundo array !"];
var_dump ($lista);
echo "<br>";
$var1 = " Olá Mundo array !";

$array = explode(" ", $var1);
var_dump ($var1);
echo "<br>";

echo count ($array);
echo "<br>";


function printar(){
    $var = 0;
    echo $var;
    echo "<br>";
     
}
    for ($i=0; $i <=15; $i++){
        echo $var++;
    }
?>