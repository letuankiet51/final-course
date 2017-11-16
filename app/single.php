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
                $id = $_GET["id"];
                $sql = "select * from products where id=$id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                $row = $result->fetch_assoc(); ?>
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="<?php echo URL_IMAGE.$row['image'];?>" alt="">
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $row["name"]; ?></h3>
                      <h4><?php echo $row["price"]; ?></h4>
                      <p class="card-text"><?php echo $row["description"];?></p>
                      <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      4.0 stars
                  </div>
                </div>
                <!-- /.card -->    
            <?php  }       
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
