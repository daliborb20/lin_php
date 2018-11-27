<?php
define("KONEKCIJA", 'localhost:3306');
define("USER", 'boogy');
define("SIFRA", 'link');
define("BAZA", 'cms');

$connection = mysqli_connect(KONEKCIJA, USER, SIFRA, BAZA);
if(!$connection){

   echo "<h3 class='alert alert-danger'>Neuspesno konektovanje</h3>";

} else {
   
   echo "<div class='alert alert-success container'> konektovanje</div>";
}
?>
