<?php
print_r($_GET);
$varijabla  = 23;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<a href="1get.php?id=22&ime=marko">Link</a>
<a href="1get.php?id=<?php echo $varijabla;  ?>">Linka2</a>
<?php
echo "<br>";
if ($_GET['ime'] == 'marko'){
   echo '<h1 style="color:red">Radi li radi</h1>';
}

?>
</body>
</html>
