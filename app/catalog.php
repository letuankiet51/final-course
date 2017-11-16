<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <?php include "lib.php"; ?>    
  </head>
  <body>
    <!-- Navigation -->
    <?php include "menu.php" ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php include "slide-left.php" ?>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">    
          <div class="row">
            <?php
              if(isset($_GET["id"])){
              $catalog_id = $_GET["id"];
                $sql = "select * from products where catalog_id=$catalog_id";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc()) {?>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="<?php echo URL_IMAGE.$row['image'];?>" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="#"><?php echo $row["name"];?></a>
                        </h4>
                        <h5>$<?php echo $row["price"];?></h5>
                        <p class="card-text"><?php echo $row["description"];?>.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                  </div>
                  <?php  }
                }
              }else{
                echo "<h1>Emty</h1>";
              }
              ?>           
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->  
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
