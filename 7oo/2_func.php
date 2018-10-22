<?php

//stvaranje metoda
class Auto{

  var $tocak = 12;
  var $hauba = 1;
  var $motor = 1;
  var $vrata = 4;



  function pomeriTockove(){
    echo "Tockovi se pomeraju"."<br>";
    $this -> tocak = 'Nova vredsnost tockova';
  }
   
  function brojProzor(){
     $this -> vrata = 8888833883838;
  }
}



if (method_exists("Auto", "pomeriTockove")){
   echo "Metod postoji<br>";

} else {
   echo "Metod ne postoji<br>";
}
 
$audi = new Auto;

$vw = new Auto;

$vw ->pomeriTockove();
$audi ->pomeriTockove();

//==================kakko se koristie properties

echo $vw ->hauba;
echo"<br>";
echo $vw ->motor;
echo"<br>";
$vw->motor = 12312312312;
echo "nova vrednost motora";
echo $vw ->motor;
echo"<br>";
echo $vw ->tocak;

echo"<br>";
$kamion = new Auto();

$kamion ->tocak = 16;
echo "Kamion ime: ".$kamion ->tocak;
echo"<br>";
echo $vw ->vrata;
echo"<br>";
$vw -> brojProzor();
echo $vw ->vrata;
echo"<br>";
$vw ->pomeriTockove();
echo $vw ->vrata;



?>
