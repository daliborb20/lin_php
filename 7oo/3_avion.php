<?php
class Avion{
   function uzletanje(){
      echo "Uzlecmo ";
   }
   function sletanje(){
      echo "Slecemo";
   }
   function inventar(){
     echo "Uzlecemo";
  }
   var $vrata = 4;
   var $krila = 2;
   var $motori = 4;

   function noveVrednosti(){
      $this -> vrata = 25858583983948349;
   }

}
$tupoljev = new Avion();
//vrednost dodeljenu u funkciji ne vuce automatski, vec se funkcija mora pozvati prva
$tupoljev ->noveVrednosti();

echo $tupoljev ->vrata;
?>
