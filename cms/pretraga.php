
<?php include "./includes/header.php"; ?>
<?php include "./includes/navigation.php"; ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
<?php
if(isset($_POST['posalji'])){
  $sider_pretraga = mysqli_real_escape_string($connection, $_POST['pretraga']);
  $query = "select * from postovi where post_sadrzaj like '%$sider_pretraga%'";
  $rezultat = mysqli_query($connection, $query);
  if(!$rezultat){
    die("Greska prilikom pretrage". mysqli_error($connection));
  } else {
      $broj = mysqli_num_rows($rezultat);
      if($broj == 0){
        echo "Nista nije pronadjeno";
      }else {
       while($red = mysqli_fetch_assoc($rezultat)){
           $naslov = $red['post_naslov'];
           $autor = $red['post_autor'];
           $sadrzaj = $red['post_sadrzaj'];
           $slika = $red['post_slika'];
        }}}

?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                <a href="#"><?php echo $naslov ?></a>
                </h2>
                <p class="lead">
                by <a href="index.php"><?php echo $autor ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="<?php echo $slika ?>" alt="">
                <hr>
                <p><?php echo $sadrzaj ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

<?php }; ?>




           </div>
<?php include "./includes/sider.php"; ?>
        </div>
        <!-- /.row -->

        <hr>
<?php include "./includes/footer.php"; ?>
