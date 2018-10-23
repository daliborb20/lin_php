<?php
class Auta{
   static  $tockovi = 4;//kada nisu staticne mogu se koristii kao instance, definisanjem new Auta(), medjutim kada su staticne, mogu se koristii bilo gde ali 'sa' klasom Auta::$tockovi
   var $motor = 2;
   var $prozori = 5;
   function pokreniSe(){
    echo Auta::$tockovi = 383883883;
   }
}
$vw = new Auta();


echo Auta::$tockovi;
echo "<br>Posle pozivanja funkcije staticne:";
echo "<br>";
Auta::pokreniSe();











?>
