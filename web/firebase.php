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
	</div>

<!-- Kẻ lưới giao diện -->

<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
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

<script>
	//In ra màn hình tên thằng viết cái này
		alert("Được tạo bởi: Trần Minh Thức - Phiên bản: BETA V1.0.3a")
	//Khúc này khai báo cấu hình Firebase
		var config = {
			apiKey: "AIzaSyDQeQ-Y2vo9VvcO5fQjLAJiywXS8M51qGM",
    		authDomain: "iotthuc.firebaseapp.com",
    		databaseURL: "https://iotthuc.firebaseio.com",
    		projectId: "iotthuc",
    		storageBucket: "iotthuc.appspot.com",
   			messagingSenderId: "1018859871923",
    		appId: "1:1018859871923:web:a6ddbc98dc1c5ebed29ac6"
		};
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

	//Gọi ra để dùng 
		firebase.initializeApp(config);
		var firebaseSesor = firebase.database().ref().child('cambien/phongkhach');
		var firebaseRef = firebase.database().ref().child('thietbi/phongkhach');

	//Khai báo biến toàn cục (Xài cho cả chương trình)
		var nhietdo_living = "";
		var doam_living = "";
		var tbi1_status = "";
		var tbi2_status = "";

	//Đoạn này dùng để READ (đọc) dữ liệu từ database sau đó bỏ vào biến xài
		firebaseRef.on('value', function(snapshot) 
		{
			tbi1_status = snapshot.child('den1').val();
		});

	//Đoạn chương trình xảy ra khi nhấn vào cái button
		$('#tb1_load').click(function() {
			var capnhatdt = "";
			if (tbi1_status=="1") //nếu dữ liệu đang là ON
			{
				capnhatdt = {
					den1: "0",
				};
				
			}
			else if (tbi1_status=="0")//ngược lại
			{
				capnhatdt = {
					den1: "1",
				};
			}
			firebaseRef.update (capnhatdt);	//Cập nhật lại
		});

	//Đoạn này dùng để thay đổi trạng thái cái nút nhấn
		firebaseRef.on('value', function(snapshot) 
		{
			var trangthai_tbi1 = snapshot.child('den1').val();
				if(trangthai_tbi1=="1"){
					var button_tb1_off = document.getElementById('tb1_load');
    				button_tb1_off.innerHTML = "Tắt Đèn";
    				var element_on = document.getElementById('giatri_tbi1');
    					element_on.innerHTML = "Đèn 1 Đang Bật";
					;}
				else if(trangthai_tbi1 == "0")
				{
					var button_tb1 = document.getElementById('tb1_load');
    				button_tb1.innerHTML = "Bật Lại";
    				var element_off = document.getElementById('giatri_tbi1');
    					element_off.innerHTML = "Đèn 1 Đang Tắt";
				;}		
			
		});

	//lấy dữ liệu từ Firebase cho tbi2stt
	firebaseRef.on('value', function(snapshot) 
		{
			tbi2_status = snapshot.child('den2').val();

			var image = document.getElementById('tbi2_img');
			var tbi2_laber = document.getElementById('giatri_tbi2');
	 		if (tbi2_status == "1") 
	 		{
	 			image.src = "http://www.webre24h.com/uploads/0815/pic_bulbon.gif";
	 			tbi2_laber.innerHTML = "Trạng Thái : Đang Bật";
	 		}
	 		else if(tbi2_status=="0")
	 		{
	 			image.src = "http://www.webre24h.com/uploads/0815/pic_bulboff.gif";   
	 			tbi2_laber.innerHTML = "Trạng Thái : Đang Tắt"; 
	 		}
		});

	//Đoạn này ct click vô cái hình
	function tbi2_click() 
	{    
		var capnhatd2 = "";
		if (tbi2_status == "0") 
 		{
 			capnhatd2 = {
					den2: "1",
				};
 		}
 		else if(tbi2_status=="1")
 		{
 			capnhatd2 = {
					den2: "0",
				};   
 		}
 		firebaseRef.update(capnhatd2);
 	};

	//Đoạn này dùng để hiện nhiệt độ và độ ẩm lên
		firebaseSesor.on('value' , function(snapshot)
		{
			nhietdo_living = snapshot.child('nhietdo').val();
		
			var temp_living = + nhietdo_living;
			setTemperature(temp_living);
			function setTemperature(curVal)
			{
		        //Cài nhiệt độ từ -2 độ đến 40 độ nhiệt độ Việt Nam như vậy
		    	var minTemp = -2.0;
		    	var maxTemp = 40.0;
		        //Phần này cài thêm độ F không xài độ F bỏ nha :)))
		    	//Khúc này là giải thuật nhiệt độ chạy theo cái hình cung từ 0-180 độ
		    	var newVal = scaleValue(curVal, [minTemp, maxTemp], [0, 180]);
		    	$('.gauge--1 .semi-circle--mask').attr({
		    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
		    		'-moz-transform: rotate(' + newVal + 'deg);' +
		    		'transform: rotate(' + newVal + 'deg);'
		    	});
		    	$("#temp").text(curVal + ' ºC');
	    	}
		    function scaleValue(value, from, to) 
		    {
		        var scale = (to[1] - to[0]) / (from[1] - from[0]);
		        var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
		        return ~~(capped * scale + to[0]);
	    	}
    	});
    
</script>

</body>

</html>
