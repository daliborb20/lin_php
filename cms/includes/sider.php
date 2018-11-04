            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="text" name="pretraga" class="form-control">
                        <span class="input-group-btn">
                            <button name="posalji" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
Posalji
                        </button>
                        </span>
                    </div>
                </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
<?php
$query = "select * from kategorije limit 6";
$rezultat = mysqli_query($connection, $query);
if(!$rezultat){
   echo "Nije moguce izvrsiti citanje";
} else {
  while($red = mysqli_fetch_assoc($rezultat)){
    echo "<li><a href='#'>{$red['kat_naziv']}</a></li>";
   }
}
?>
                           </ul>
                        </div>
                       </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
<?php include "widzet.php"; ?>
</div>



