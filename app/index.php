<?php session_start(); ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<?php require_once "../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Subas | Home</title>
	<?php 
        include "lib.php";
    ?>
</head>
<body>
	<?php 
        include "top.php";
    ?>
	<?php
        include "top2.php"; 
    ?>
	<br>
	<div id="banner" class="container">
		<img src="../public/images/banner.jpg" style="width: 100%;height: 100%;">
	</div>
	<br>
	<div id="content">
		<div class="row mathang">
            <?php
                $sql = "select * from products";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc()) {?>
        			<div class="col-md-3 col-xs-12">
        				<a href="single.php?id=<?php echo $row["id"];?>"><img src="<?php echo URL_IMAGE.$row['image'];?>" alt=""></a>
                        <div>
                            <a href="#" style="color: black"><?php echo $row["name"];?></a>
                        </div>
                        <div>
                            <?php echo $row["price"];?>$
                        </div>
                        <button id="1010101010" data-name="Sản Phẩm 1" data-price="10" class="btn add-to-cart">Giỏ hàng
                        	
                        </button>
                        <button class="btn">Chi tiết.</button>
                    </div>
                    <?php  }
                }
              ?>
		</div></div>
    <div id="right">
    	<a  href="#" id="upTop" style="position: fixed;">
    		<i class="material-icons">expand_less</i>
    	</a></div>
    <br>
    <div id="footer">
    <br>
    	<div class="container">
    		<div class="column col-md-2 col-xs-12">
        		<h2>Về Subas</h2>
            	<p>Subar là sản phẩm đồ án hk II của Lê Tuấn Kiệt. Là 1 học sinh chăm chỉ, nhiệt huyết, với khao khát sáng tạo và mún thầy chắm điểm cao, sẽ đem đến những điều đặc biệt giá trị nhất dành cho bạn. :)))</p>
        	</div>
    		<div class="column col-md-2 col-xs-12">
        		<h2>Hướng dẫn</h2>
            	<ul class="list">
				<li><a href="#">Cách mua hàng</a></li>
            	<li><a href="#">Cánh kiểm tra hàng</a></li>
            	</ul>
        	</div>
        	<div class="column col-md-2 col-xs-12">
        		<h2>Liên hệ với chúng tôi</h2>
            	<ul class="list">
				<li><a>Số 37, Đào Duy Từ,
						Thừa Thiên Huế, Việt Nam</a></li>
            	<li class="icon2">+84 462.736.074</li>
            	<li class="icon4"><a href="mailto:letuankiet51@gmail.com">Tuvansp@subas.com</a></li>
            	<li class="icon4"><a href="mailto:letuankiet51@gmail.com">Hotrokh@subas.com</a></li>
            	</ul>
        	</div>
        	<div class="column col-md-3 col-xs-12">
        		<h2>Follow us</h2>
            	<ul class="social_list"> 
            		<li><a href="facebook.com"><img src="../public/images/social-icon1.png" ></a></li>
                	<li><a href="#"><img src="../public/images/social-icon2.png" alt=""></a></li>
                	<li><a href="gmail.com"><img src="../public/images/social-icon3.png" alt=""></a></li>
                	<li><a href="#"><img src="../public/images/social-icon4.png" alt=""></a></li>
                	<br>
                	<li><a href="#"><img src="../public/images/social-icon5.png" alt=""></a></li>
                	<li><a href="#"><img src="../public/images/social-icon6.png" alt=""></a></li>
                	<li><a href="#"><img src="../public/images/social-icon7.png" alt=""></a></li>
                	<li><a href="#"><img src="../public/images/social-icon8.png" alt=""></a></li>
            	</ul>
				<br>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2Fcnhuevn%2F&tabs&width=200&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=266389983788669" width="200" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        	</div>
        </div>
    </div>
  	<script>
    	var shoppingCartItems = [];
    	$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage["shopping-cart-items"] hay chưa?
        if (sessionStorage["shopping-cart-items"] != null) {
            shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
        }
        // Hiển thị thông tin từ giỏ hàng
        displayShoppingCartItems();
    	});
    	// Sự kiện click các button có class=".add-to-cart"
   		$(".add-to-cart").click(function () {
        var button = $(this); // Lấy đối tượng button mà người dùng click
        var id = button.attr("id"); // id của sản phẩm là id của button
        var name = button.attr("data-name"); // name của sản phẩm là thuộc tính data-name của button
        var price = button.attr("data-price"); // price của sản phẩm là thuộc tính data-price của button
        var Soluong = 1; // Số lượng
        var item = {
            id: id,
            name: name,
            price: price,
            Soluong: Soluong
        };
        var exists = false;
        if (shoppingCartItems.length > 0) {
            $.each(shoppingCartItems, function (index, value) {
                // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                if (value.id == item.id) {
                    value.Soluong++;
                    exists = true;
                    return false;
                }
            });
        }
       	// Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
        if (!exists) {
            shoppingCartItems.push(item);
        }
        // Lưu thông tin vào sessionStorage
        sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems); // Chuyển thông tin mảng shoppingCartItems sang JSON trước khi lưu vào sessionStorage
        // Gọi hàm hiển thị giỏ hàng
        displayShoppingCartItems();});
    	// Xóa hết giỏ hàng shoppingCartItems
    	$("#button-clear").click(function () {
        shoppingCartItems = [];
        sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
        $("#table-products > tbody").html("");
    	});
   	 	// Hiển thị giỏ hàng ra table
    	function displayShoppingCartItems() {
        if (sessionStorage["shopping-cart-items"] != null) {
            shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.
            $("#table-products > tbody").html("");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table
            $.each(shoppingCartItems, function (index, item) {
                var htmlString = "";
                htmlString += "<tr>";
                htmlString += "<td>" + item.name + "</td>";
                htmlString += "<td style='text-align: right'>" + item.price + "$"+"</td>";
                htmlString += "<td style='text-align: right'>" + item.Soluong + "</td>";
                htmlString += "<td style='text-align: right'>" + item.price * item.Soluong + "$"+"</td>";
                htmlString += "</tr>";
                $("#table-products > tbody:last").append(htmlString);
            });
        }
    	}</script>
    	
<script src="js/script.js" type="../public/text/javascript"/></script>
<script language="javascript" src="../public/js/jquery-3.2.0.min.js"></script>
</body>
</html>