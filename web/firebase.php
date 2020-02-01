<!--Toàn bộ code được viết bởi Trần Minh Thức, Vui lòng không xóa dòng này khi sử dụng-->
<?php
include("admin/auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Style-->
	<link rel="stylesheet" type="text/css" href="/stylesheets/style.css">

	<title>Hệ Thống Điều Khiển & Quản Lý Nhà Ở</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 style="text-align:center;">Điều Khiển Thiết Bị Nhà Ở</h1>
			<form>
				<div class="form-group">
				<h3 style="text-align:center;">Được Xây Dựng Và Phát Triển Bởi MDTGr</h3>
			</form>
		</div>
	</div></div>


<!-- Kẻ lưới giao diện -->

<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Bảng Quản Lý</h2>
		<div class="product-group">
			<div class="row">
				<!---->
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://www.webre24h.com/uploads/0815/pic_bulboff.gif" alt="Card image cap" id = "tb1-img" width="280" height="280" onclick="tb1_click()">
					  <div class="card-body">
					    <h5 class="card-title">Đèn 1</h5>
					    <a class="btn btn-secondary" id = "tb1_btn">Load</a>
					  </div>
					</div>
				</div>

				<div class="row">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<!---->
			</div>
		</div>
	</div>
</div>
<!-- end list product -->
<!----------------------------------------------------------------->



	<h1 style="text-align:center;">Thông Số Nhiệt Độ Và Độ Ẩm</h1>
		<section class="content">
	    	<div class="box gauge--1">
	    		<h3 style="text-align:center;">NHIỆT ĐỘ</h3>
              	<div class="mask">
			  		<div class="semi-circle"></div>
			  		<div class="semi-circle--mask"></div>
				</div>
		    	<p style="font-size: 30px;text-align:center;" id="temp">LỖI</p>
        	</div>
        </section>


	<h1 >Điều Khiển Thiết Bị</h1>
		<form>
			<div class="form-group">
				<h3>Thiết bị 1 </h3>
				<p id="giatri_tbi1"> Đang cập nhật</p>
				<a class="btn btn-info" role="button" id="tb1_load" onclick="tb1_click()">Load</a>
			</div>
		</form>
		<form>
			<div class="form-group">
				<h3>Thiết bị 2 </h3>
				<p id="giatri_tbi2"> Đang cập nhật</p>
				<img id="tbi2_img" onclick="tbi2_click()" src="http://www.webre24h.com/uploads/0815/pic_bulboff.gif" width="70" height="126">
			</div>
		</form>
		


<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- FireBase Lib -->
	<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase.js"></script>

<!-- js chính -->
	<script src="/js/application.js"></script>

</body>

</html>
