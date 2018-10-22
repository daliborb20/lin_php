<?php include "./konekcija.php"; ?>
<?php include "./funkcije.php"; ?>
<?php
    //uspostavljanje konkecije
 //provera upisa u bazu
  /*     echo "*/
          //<table class='table'>
          //<thead>
          //<tr>
          //<th>Redni Broj </th>
          //<th>Email</th>
          //<th>Lozinka</th>
          //</tr>
          //</thead>
          
//";

       //echo "<tbody>";

  //if(!$rezultat){
     //die("Greska prilikom unosa u bazu".mysqli_error());
  //} else{
    //foreach($rezultat as $podatak){
       //echo "<tr>";
       //echo "<td>".$podatak['rbr']."</td>";
       //echo "<td>".$podatak['ime']."</td>";
       //echo "<td>".$podatak['lozinka']."</td>";
       //echo "</tr>";

      //}
  //}
       //echo "
          //</tbody>
          //</table> //";


?>

<?php include "./includes/header.php"; ?>

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
      <input class="form-control btn btn-danger" id="posalji" value="Posalji" type="submit" name="posalji">
    </div>
  </form>
 </div>

<pre>
<?php
selektujSve();
    
?>

</pre>
<?php include "./includes/footer.php"; ?>
