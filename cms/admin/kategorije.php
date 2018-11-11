<?php include "./includes/admin_header.php" ?>

    <div id="wrapper">
<?php
if(isset($_GET['delete'])){
   $kat_rbr = mysqli_real_escape_string($connection,$_GET['delete']);
   $query_brisanje = "DELETE FROM kategorije WHERE kat_rbr ='$kat_rbr'";
   $rezultat_brisanje = mysqli_query($connection, $query_brisanje);
   if(!$rezultat_brisanje){
     die("<h4 class='alert alert-danger'>Greska prilikom brisanja". mysqli_error($connection) . "</h4>");
   } else {
      echo ("<h4 class='alert alert-success'>Uspesno obrisano!</h4>");
   }
}
?>

        <!-- Navigation -->
<?php include "./includes/admin_navigation.php"; ?> 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dobro dosli na administratorski portal
                            <small>Subheading</small>
                        </h1>
<div class="col-xs-6">
    <form action="" method="POST">
      <div class="form-group">
      <label for="kat_naslov">Naslov Kategorije</label>
      <input  class="form-control"type="text" name="kat_naziv">
      </div>

      <div class="form-group">
      <input  type="submit" name="submit" value="Posalji" class="btn btn-danger">
      </div>

    </form>
<?php
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
?>
</div>
<div class="col-xs-6">
<?php
$query = "SELECT * FROM kategorije";
$rezultat = mysqli_query($connection, $query);
?>



<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>R_br</th>
      <th>Naslov</th>
    </tr>
<tbody>
<?php
foreach($rezultat as $r){
  $rbr = $r['kat_rbr'];
  $naziv = $r['kat_naziv'];
echo "<tr>";
echo "<td>{$rbr}</td>";
echo "<td>{$naziv}</td>";
echo "<td><a href='kategorije.php?delete={$rbr}'>Izbrisi</a></td>";
}
  ?>
  </tr>
</tbody>
  </thead>
</table>

</div>
                   </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
 <?php include "./includes/admin_footer.php"; ?>
