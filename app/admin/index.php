<?php session_start(); ?>
<?php require_once "check-login.php"; ?>
<!DOCTYPE html>
<html>
  <head>
      <?php 
        include "lib.php";
      ?>
    <title>Vali Admin</title>
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
              <?php 
                include "User-menu.php";
              ?>
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
              <p><?php echo $_SESSION["nameuser"]?></p>
              <p class="designation"><?php switch ($_SESSION["Chucvu"])
                {
                  case 0:
                    echo "Admin";
                     break;
                  case 1:
                    echo "Editor";
                    break;
                  case 2:
                    echo "User";
                    break;
                }; ?>
              </p>
            </div>
          </div>
          <!-- Menu Trái-->
          <?php 
            include "menu-left.php";
          ?>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
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
    <script src="../../public/js/jquery-2.1.4.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <script src="../../public/js/plugins/pace.min.js"></script>
    <script src="../../public/js/main.js"></script>
  </body>
</html>