    <form action="" method="POST">
      <div class="form-group">
<?php
//=============================================================editovanje kategorije==========================
if(isset($_GET['izmeni'])){
  $kat_rbr_edit = mysqli_real_escape_string($connection,$_GET['izmeni']);
  $query_editovanje = "SELECT * FROM kategorije WHERE kat_rbr = $kat_rbr_edit";
  $rezultat_naziv = mysqli_query($connection, $query_editovanje);
  if(!$rezultat_naziv){
     echo "<h4 class='alert alert-danger'>Neuspesno citanje iz baze</h4>";
  }else {
    while($red = mysqli_fetch_assoc($rezultat_naziv)){
       $kat_rbr = $red['kat_rbr'];
       $kat_naziv = $red['kat_naziv'];

/*    foreach($rezultat_naziv as $rez){*/
      //$podatak_za_izmenu = $rez['kat_naziv'];
    
?>



  <div class="form-group"><p class='alert alert-warning'><strong>Izmeni kategoriju pod rednim brojem: </strong><?php echo $kat_rbr ?> <strong> i nazivom: </strong>  <?php echo $kat_naziv?></p></div>
      <label for="kat_naslov">Izmeni kategoriju  </label>
      <input value =" <?php if(isset($kat_naziv)){echo $kat_naziv;} ?>" class="form-control"type="text" name="kat_naziv_edituj">
      </div>

      <div class="form-group">
      <input  type="submit" name="edituj" value="Izmeni" class="btn btn-warning">
      </div>
<?php }}} ?>
    </form>
<?php //=======================================================update query 
       if(isset($_POST['kat_naziv_edituj'])){
         $kat_naziv_edituj = mysqli_real_escape_string($connection, $_POST['kat_naziv_edituj']);
         $update_query = "UPDATE kategorije SET kat_naziv = '$kat_naziv_edituj' where kat_rbr = $kat_rbr_edit";
         $rezultat = mysqli_query($connection, $update_query);
         if(!$rezultat){
           die("<h4 class='alert alert-danger'>Greska prilikom upisa u bazu". mysqli_error($connection) . "</h4>");
         } else {
           echo "<h4 class='alert alert-success'>Uspesno upisano u bazu</h4>";
         }


          
          
       }
?>


