<?php
function pozdrav($vrednost){
   echo $vrednost;
}

pozdrav("Dobro vece!!!!");

function izracunaj($a, $b){
   echo $a + $b;
}
echo "<br>";
izracunaj(2424234234234,22222222222222);

//varcanje vrednosti kroz funkciju
function sabiranje($a, $b){
    $suma = $a + $b;
    return $suma;

}
echo "<br>";
$rezultat = sabiranje(123,123);
echo $rezultat;





?>

