<?php
$kolac = 'nekoImeZaKolac';
$vrednost = 120;
$rok = time() + (60*60*24*7);//vrednosti su u sekundama, koje mnozimo sa 60 i dobijamo minute, setcookie
setcookie($kolac,$vrednost, $rok);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stranica sa kolacima</title>
</head>
<body>
<?php
  if(isset($_COOKIE['nekoImeZaKolac'])){
    $vrednost_iz_kolaca = $_COOKIE['nekoImeZaKolac'];
    echo $vrednost_iz_kolaca;
     
  } else 
  {
     $vrednost_iz_kolaca = '';
  }
?>
</body>
</html>
