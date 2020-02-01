
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
					var imgelement = document.getElementById('tb1_img');
					imgelement.src = "http://www.webre24h.com/uploads/0815/pic_bulbon.gif";
					var button_tb1_off = document.getElementById('tb1_load');
    				button_tb1_off.innerHTML = "Tắt Đèn";
    				var element_on = document.getElementById('giatri_tbi1');
    					element_on.innerHTML = "Đèn 1 Đang Bật";
					;}
				else if(trangthai_tbi1 == "0")
				{
					var imgelement_off = document.getElementById('tb1_img');
					imgelement.src = "http://www.webre24h.com/uploads/0815/pic_bulboff.gif";
					var button_tb1 = document.getElementById('tb1_load');
    				button_tb1.innerHTML = "Bật Lại";
    				var element_off = document.getElementById('giatri_tbi1');
    					element_off.innerHTML = "Đèn 1 Đang Tắt";
				;}		
			
		});

	//thay đổi màu hình đèn 1
	firebaseRef.on('value', function(snapshot) 
		{
			tbi2_status = snapshot.child('den2').val();

			var image = document.getElementById('tb1_img');
			//const btn_tb1 = document.querySelector('tb1_btn');
			var tbi2_laber = document.getElementById('giatri_tbi2');
	 		if (tbi2_status == "1") 
	 		{
	 			image.src = "http://www.webre24h.com/uploads/0815/pic_bulbon.gif";
	 			//btn_tb1.class = "btn btn-success";
	 			tbi2_laber.innerHTML = "Trạng Thái : Đang Bật";
	 		}
	 		else if(tbi2_status == "0")
	 		{
	 			image.src = "http://www.webre24h.com/uploads/0815/pic_bulboff.gif";
	 			//btn_tb1.class = "btn btn-danger";
	 			tbi2_laber.innerHTML = "Trạng Thái : Đang Tắt"; 
	 		}
		});

	//Đoạn này ct click vô cái hình đk thiết bị 1
	function tb1_click() 
	{    
		var capnhatdt1 = "";
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
