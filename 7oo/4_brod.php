<?php
class Brod{
   var $prozori = 421;
   var $propeleri = 4;
   function spustiSidro(){
      echo "Sidro je spusteno";
   }
   function podigniSidro(){
      echo "Sidro je podignuto";
      $this -> propeleri = 202302;
   }
   

}
$titnik = new Brod();



echo $titnik ->propeleri;
echo "<br>";
echo $titnik -> podigniSidro();
echo "<br>";
echo $titnik ->propeleri;
?>
