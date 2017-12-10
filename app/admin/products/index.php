<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../check-login.php"; ?>
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
              <li><a href="#">Quản lí sản phẩm</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <p><a class="btn btn-primary icon-btn" href="new.php" style="float: right;"><i class="fa fa-plus"></i>Thêm sản phẩm </a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Ảnh</th>
                  <th>Tên sản phẩm</th>
                  <th>Mô tả</th>
                  <th>Số lượng</th>
                  <th>Giá</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $sql = "select * from products";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc()) {?>
                  <tr>
                    <td><img src="<?php echo URL_IMAGE.$row['image'];?>" width="32" height="32"></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["description"];?></td>
                    <td><?php echo $row["qty"];?></td>
                    <td><?php echo $row["price"];?></td>
                    <td><a class="btn btn-info" href="edit.php?id=<?php echo $row["id"];?>"><i class="fa fa-lg fa-edit"></i></a></td>;
                    <td><a class="btn btn-warning" href="delete.php?id=<?php echo $row["id"];?>"><i class="fa fa-lg fa-trash"></i></a></td>;
                    </tr>
                  <?php  }
                }
              ?>
              </tbody>
            </table>
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