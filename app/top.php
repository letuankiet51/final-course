<div id="top" class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-6">
				<div id="hotline">
					<p>(+84) 0923.xxxx.xx</p>
				</div>				
			</div>
			<div class="col-md-6 col-xs-6">
			<div id="top-link">
  				<ul>
    				<li>
    					<a>&nbsp;Yêu thích</a>
    				</li>
            <?php if(isset($_SESSION["login"])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="admin/logout.php">&nbsp;Logout&nbsp;</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="admin/index.php" ><?php echo $_SESSION["nameuser"]?>&nbsp;</a>
            </li>
            <?php }else{ ?>         
    				<li>
    					<a>Tài khoản&nbsp;</a>|
      					<div class="sub-top-link">
        				<form method="post" style=" width: 300px" name="myForm" onsubmit="return(xuly());" action="admin/login-action.php">
  							<input placeholder="Nhập Email" type="email" name="Email" value=""   style="width: 250px;" required>
                <br>
  							<br>
  							<input placeholder="Password (6~12 kí tự)" type="password" name="Password"  value="" style="width: 250px;" required>
  							<br>
                    		<br>
                    		<img src="http://wapego.com/users-captcha.php?4f9505ff312fe">
                    		<input placeholder="Captcha" type="text" name="captcha" value="" size="20" required>
                    		<br>
  							<input type="checkbox";"><b>Ghi nhớ lần truy cập này</b>
  							<br>
  							<button type="submit" class="btn"><span class="text"><b>Xác Thực</b></span></button>
						</form>
    					</div>
    				</li>           
            <?php } ?>
  				</ul>
			</div>
			</div>
		</div></div>