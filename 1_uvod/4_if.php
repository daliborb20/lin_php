<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
//if petljep========================================================
if(322 < 10){
  echo "Tri je manje od 10";
   
}else {
   echo "Deset je manje od tri";
}
//operatori poredjenjap========================================================
echo "<br>";
if(4 == '4' || 4 < 2){//ili, && and
   echo "Jeste isto";
}

echo "<br>";
//switch izjave
$broj = 10;
switch($broj){
   case 34: 
     echo "Trideset cetiri";
     break;
   case 37:
     echo "Trideset sedam";
     break;
   case 30:
     echo "Trideset";
     break;
   case 10:
     echo "<h1 style='color:red'>HALLLO</h1>";
     break;
}
$tekst = 'neki tekt';
switch($tekst){
   case 'jedna':
     echo "BLALA";
     break;
   case 'bla':
     echo "Sad";
     break;
   case 'neki tekst':
     echo "<h1 style='color:red'>HALLLO</h1>";
     break;
   default:
     echo "nemoguce je pronaci bilo sta";
}
//while loopp========================================================
$i = 0;
while($i < 10){
   echo' <h4 style="color: blue">'.$i.'</h4>';
   $i++;
};
//for loop========================================================
for ($i = 0; $i <10; $i++){
  echo "<h1 style='text-decoration:underline'>Broj je jedank: ".$i."</h1>";
   
}

//foreach loop========================================================
$arey = [123, 12, 123, 124, 14,11111,41,14];
foreach($arey as $brojf){
   echo $brojf;
   echo "<br>";
}
?>
</body>
</html>
