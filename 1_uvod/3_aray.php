<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
$listaBrojeva = array(12,23,4,334,34226,565, 'mleko', 'sok');

$listaBrojeva = [1,2,3,4,5];
echo $listaBrojeva[0];
print_r($listaBrojeva);//funckcija za stampanje liste (array)

//asosijativne liste 
echo "<br>";
$broj = array(20,30,50);
echo $broj[1];
echo "<br>";

$imena = array('prvo ime' => 'idiot', 'last_name' => 'bogicevic');
print_r($imena['prvo ime'] ." ". $imena['last_name']);

?>
</body>
</html>
