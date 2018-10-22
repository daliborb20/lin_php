<?php
//local & global scope

$promenljiva = 'vrednost';

function vrednost(){

  //dodeljivanje globalne vidljivosti promenljivoj koja je lokalna
  global $promenljiva;
  $promenljiva = 'vrednost2';

}

echo $promenljiva;
echo "<br>Vrednost druga:";
vrednost();
echo $promenljiva
?>
