<?php


function unesi_kategorije(){
    global $connection;
    if(isset($_POST['submit'])){
      $kat_naziv= mysqli_real_escape_string($connection, $_POST['kat_naziv']);
      if($kat_naziv =="" OR empty($kat_naziv)){
         echo "<h4 class='alert alert-warning'>Neophodno je uneti vrednost</h4>";
      }else {
      $kat_query = "INSERT INTO kategorije (kat_naziv) VALUES ('$kat_naziv')";
      $rezultat = mysqli_query($connection, $kat_query);
      if(!$rezultat){
         die("<h4 class='alert alert-danger'>Greska prilikom upisa u bazu". mysqli_error($connection) . "</h4>");
      } else {
         echo "<h4 class='alert alert-success'>Uspesno upisano u bazu</h4>";
      }
    }}

}

function pronadjiSveKategorije(){
    global $connection;
    $query = "SELECT * FROM kategorije";
    $rezultat = mysqli_query($connection, $query);
    foreach($rezultat as $r){
      $rbr = $r['kat_rbr'];
      $naziv = $r['kat_naziv'];
    echo "<tr>";
    echo "<td>{$rbr}</td>";
    echo "<td>{$naziv}</td>";
    echo "<td><a href='kategorije.php?delete={$rbr}'>Izbrisi</a></td>";
    echo "<td><a href='kategorije.php?izmeni={$rbr}'>Izmeni</a></td>";

}}

function izbrisiKategorije()
{
    global $connection;
    if(isset($_GET['delete'])){
       $kat_rbr = mysqli_real_escape_string($connection,$_GET['delete']);
       $query_brisanje = "DELETE FROM kategorije WHERE kat_rbr ='$kat_rbr'";
       $rezultat_brisanje = mysqli_query($connection, $query_brisanje);
       header("Location: kategorije.php");
       if(!$rezultat_brisanje){
         die("<h4 class='alert alert-danger'>Greska prilikom brisanja". mysqli_error($connection) . "</h4>");
       } else {
          echo ("<h4 class='alert alert-success'>Uspesno obrisano!</h4>");
       }
}
    
}










?>

