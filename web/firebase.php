<!--Toàn bộ code được viết bởi Trần Minh Thức, Vui lòng không xóa dòng này khi sử dụng-->
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
				<!-- thiết bị số 1-->
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="/images/light_off.png" id = "tb1_img" width="180" height="180" onclick="tb1img_click()">
					  <div class="card-body">
					    <h5 class="card-title" id="tb1_title" style="text-align:center;" >Đèn 1</h5>
					    <p class="card-text" id="tb1_label">Nhấn vô cái bóng đèn hoặc cái nút phía dưới để thay đổi trạng thái!</p>
					    <center><a class="btn btn-secondary" id = "tb1_btn" onclick="tb1btn_click()" style="text-align:center;">Không Có Dữ Liệu</a></center> <!-- Tạm thời khóa thẻ center-->
					  </div>
					</div>
				</div>
				<!---->

				<!-- thiết bị số 1-->
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://www.webre24h.com/uploads/0815/pic_bulboff.gif" id = "tb1_img" width="150" height="180" onclick="tb1img_click()">
					  <div class="card-body">
					    <h5 class="card-title" id="tb1_title" style="text-align:center;" >Đèn 1</h5>
					    <p class="card-text" id="tb1_label">Nhấn vô cái bóng đèn hoặc cái nút phía dưới để thay đổi trạng thái!</p>
					    <center><a class="btn btn-secondary" id = "tb1_btn" onclick="tb1btn_click()" style="text-align:center;">Không Có Dữ Liệu</a></center> <!-- Tạm thời khóa thẻ center-->
					  </div>
					</div>
				</div>
				<!---->

				<!-- thiết bị số 1-->
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://www.webre24h.com/uploads/0815/pic_bulboff.gif" id = "tb1_img" width="150" height="180" onclick="tb1img_click()">
					  <div class="card-body">
					    <h5 class="card-title" id="tb1_title" style="text-align:center;" >Đèn 1</h5>
					    <p class="card-text" id="tb1_label">Nhấn vô cái bóng đèn hoặc cái nút phía dưới để thay đổi trạng thái!</p>
					    <center><a class="btn btn-secondary" id = "tb1_btn" onclick="tb1btn_click()" style="text-align:center;">Không Có Dữ Liệu</a></center> <!-- Tạm thời khóa thẻ center-->
					  </div>
					</div>
				</div>
				<!---->

				<!-- thiết bị số 1-->
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://www.webre24h.com/uploads/0815/pic_bulboff.gif" id = "tb1_img" width="150" height="180" onclick="tb1img_click()">
					  <div class="card-body">
					    <h5 class="card-title" id="tb1_title" style="text-align:center;" >Đèn 1</h5>
					    <p class="card-text" id="tb1_label">Nhấn vô cái bóng đèn hoặc cái nút phía dưới để thay đổi trạng thái!</p>
					    <center><a class="btn btn-secondary" id = "tb1_btn" onclick="tb1btn_click()" style="text-align:center;">Không Có Dữ Liệu</a></center> <!-- Tạm thời khóa thẻ center-->
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
