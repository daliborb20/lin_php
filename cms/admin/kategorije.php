<?php include "./includes/admin_header.php"; ?>
    <div id="wrapper">
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
      <label for="kat_naslov">Unesi  Kategoriju</label>
      <input  class="form-control"type="text" name="kat_naziv">
      </div>

      <div class="form-group">
      <input  type="submit" name="submit" value="Posalji" class="btn btn-danger">
      </div>

    </form>
<?php
//===========================================update kategorije=============================================
if(isset($_GET['izmeni'])) {
   $kat_rbr = $_GET['izmeni'];
   include "includes/update_kategorije.php";
}
?>
<?php
unesi_kategorije();
?>
</div>
<div class="col-xs-6">



<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>R_br</th>
      <th>Naslov</th>
    </tr>
<tbody>

<?php
pronadjiSveKategorije();
?>

  </tr>
<?php
izbrisiKategorije();
?>
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
