<!DOCTYPE html>
<html>
  <head>
    <?php include "lib.php";?>
    <title>Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="login-action.php" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Email" name="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="../../public/js/jquery-2.1.4.min.js"></script>
  <script src="../../public/js/bootstrap.min.js"></script>
  <script src="../../public/js/plugins/pace.min.js"></script>
  <script src="../../public/js/main.js"></script>
</html>