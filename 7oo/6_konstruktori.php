<?php
class podmornica {
  var $prozori = 222;
  function izroni(){
     echo "Izranja podmornica";
  }
  function __construct(){//izvrsi navedeni kod svaki put kada ga pozovemo
    echo $this ->prozori = 11111111111111;
    
  }
   
}
$ubot = new podmornica();
echo "<br>";
//data access============================
class DataAccess{
   public $tockovi = 20; //dostupno u celokupnom programu
   protected $sasija = 1; //dostupno u ovoj klasi kada se korisite podklase
   private $prozori = 4;// u ovoj klasi, nije dostupno u podklasama 
}
class Prosiri extends DataAccess{
   function prikazi(){
      echo $this ->prozori;//undefined greska
   }
}
$podatak = new DataAccess();

echo $podatak ->tockovi;
echo "<br>";
//echo $podatak ->sasija;//can not access protected proprety
echo "<br>";
//echo $podatak ->prozori;

echo "Posle vode ide prosiriva <br>";
$novi = new Prosiri();
$novi ->prikazi();
?>
