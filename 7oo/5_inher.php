<?php
class podmornica {
  var $prozori = 222;
  function izroni(){
     echo "Izranja podmornica";
  }
  function zaroni(){
     echo "Podmornica zaranja";
     $this ->prozori = 23323; 
  }
   
}

class bomba extends podmornica {}

$m44 = new bomba();


echo $m44 ->prozori;









?>
