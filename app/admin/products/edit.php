<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from products where id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $catalog_id = $row["catalog_id"];
  $name = $row["name"];
  $description = $row["description"];
  $image = $row["image"];
  $qty = $row["qty"];
  $price = $row["price"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Vali Admin</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Vali</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- User Menu-->
              <?php include "../User-menu.php" ?>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>John Doe</p>
              <p class="designation">Frontend Developer</p>
            </div>
          </div>
          <!-- Menu Trái-->
          <ul class="sidebar-menu">
            <li class="treeview"><a href="../user/#"><i class="fa fa-laptop"></i><span>Quản lí User</span><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="treeview"><a href="../catalogs/#"><i class="fa fa-edit"></i><span>Quản lí Danh mục</span><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="active"><a href="#"><i class="fa fa-th-list"></i><span>Quản lí Sản phẩm</span><i class="fa fa-angle-right"></i></a>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title row">
          <div class="col-md-6">
            <ul class="breadcrumb" style="float: left;">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Sản phẩm</a></li>
              <li><a href="#">Sửa sản phẩm</a></li>
            </ul>
          </div>
          <div class="col-md-6">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="update.php">
              <input type="hidden" value="<?php echo $id; ?>" name="id">
              <div class="row">
                <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
              </div>
              <div class="row">
                <label>Danh muc:</label>
                <select class="form-control" name="catalog_id">
                  <?php
                    $sql = "select * from catalogs";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){ ?>
                          <option <?php if($catalog_id == $row['id']) echo 'selected=true'; ?> value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
                  <?php    }
                    }
                  ?>
                </select>
              </div>
              <div class="row">
                <label>Tên ảnh:</label>
                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
              </div>
              <div class="row">
                <label>Mô tả:</label>
                <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
              </div>
              <div class="row">
                <label>Ảnh:</label>
                <input class="form-control" type="text" name="image" value="<?php echo $image; ?>">
              </div>
              <div class="row">
                <label>Số lượng:</label>
                <input class="form-control" type="text" name="qty" value="<?php echo $qty; ?>">
              </div>
              <div class="row">
                <label>Giá Sản Phẩm:</label>
                <input class="form-control" type="text" name="price" value="<?php echo $price; ?>">
              </div>
              <br>
              <div class="row">
                <button class="btn btn-primary">Submit</button>
                <a class="btn btn-primary icon-btn" href="index.php">Quay về </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
      
    </script>
    <!-- Javascripts-->
    <script src="../../../public/js/jquery-2.1.4.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/plugins/pace.min.js"></script>
    <script src="../../../public/js/main.js"></script>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>