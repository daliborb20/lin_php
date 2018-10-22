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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FOrma</title>
 <style>
  input{
 display: block;
margin: 0 auto;
}
form{
 margin-top: 20%;
}
 </style>
</head>
<body>
  <form method="POST" action="2_form_proc.php">
    <input type="text" placeholder="username" name="ime">
    <input type="password" placeholder="pass" name="pass">
    <input name="salji" value="POSALJI"type="submit">



  </form>
</body>
</html>
