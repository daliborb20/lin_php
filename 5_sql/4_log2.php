<?php include "konekcija.php"; ?>
<?php include "funkcije.php"; ?>
<?php
if(isset($_POST['posalji'])){
  update(); 
}

?>
<?php include "./includes/header.php"; ?>

<h2 class="text-center">IZMENI</h2>
 <div class="container col-sm-6 ">
  <form action="" method="POST">

    <div class="form-group">
      <label for="email">Email adresa:</label>
      <input type="email" class="form-control " name="email">
    </div>

    <div class="form-group">
      <label for="lozinka">Lozinka za korisnicki nalog:</label>
      <input class="form-control " id="lozinka"type="password" name="lozinka">
    </div>
    <div class="form-group">
    <select id="" name="rbr">
<?php
pronadji();
?>
    </select>

    <div class="form-group">
      <input class="form-control btn btn-danger" id="Izmeni" value="Posalji" type="submit" name="posalji">
    </div>


    </div>
  </form>
 </div>
<?php
include "./includes/footer.php";

?>
