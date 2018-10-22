<?php
$imena = ['korisnik', 'dalibor', 'admin', 'demo'];
if(isset($_POST['salji'])){
  $ime = $_POST['ime'];
echo "<br>";
  $pass = $_POST['pass'];

  if(strlen($ime) < 5){
    echo "<h1 style='color:red'>Morate uneti vise od 4 karaktera </h1>";
    
     
  }
}
if (!in_array($ime, $imena)){
   echo "<h1 style='color:red'>Niste registrovani korisnik </h1>";
}





?>

