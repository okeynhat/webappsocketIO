
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
		var tb1_status = "";
		var tbi2_status = "";

	//Đoạn này dùng để READ (đọc) dữ liệu từ database sau đó bỏ vào biến xài
		firebaseRef.on('value', function(snapshot) 
		{
			tb1_status = snapshot.child('den1').val();
		});

	//Đoạn chương trình xảy ra khi nhấn vào cái hình của tb1
		function tb1img_click() 
		{    
			var tb1data_send = "";
			if (tb1_status == "0") 
	 		{
	 			tb1data_send = {
						den1: "1",
					};
	 		}
	 		else if(tb1_status=="1")
	 		{
	 			tb1data_send = {
						den1: "0",
					};   
	 		}
	 		firebaseRef.update(tb1data_send);
	 	};

	 	function tb1btn_click()
	 	{
	 		var tb1data_send = "";
	 		if (tb1_status = "1") 
	 		{
	 			tb1data_send = {
	 				den1: "0",
	 			};
	 		} 

	 		else if (tb1_status = "0")
	 		{
	 			tb1data_send = {
	 				den1: "1",
	 			};
	 		}

	 		firebaseRef.update(tb1data_send);
	 	}

	//Đoạn này dùng để thay đổi trạng thái các cái hình tb1
		firebaseRef.on('value', function(snapshot) 
		{
			var tb1_stt = snapshot.child('den1').val(); // gọi dữ liệu về bằng cấu trúc .on và val()
			const tb1btn_stt = document.getElementById('tb1_btn');
			var imgelement = document.getElementById('tb1_img');
				if(tb1_stt=="1")
				{
					imgelement.src = "http://www.webre24h.com/uploads/0815/pic_bulbon.gif";
					tb1btn_stt.innerHTML = "Đang Bật";
					tb1btn_stt.className = "btn btn-success";
					tb1btn_stt.style.color = 'white';
				}
				else if(tb1_stt == "0")
				{
					imgelement.src = "http://www.webre24h.com/uploads/0815/pic_bulboff.gif";
					tb1btn_stt.innerHTML = "Đang Tắt";
					tb1btn_stt.className = "btn btn-danger";
					tb1btn_stt.style.color = 'white';
				}	
			
		});

	

	//Đoạn này ct click vô cái hình đk thiết bị 1
	
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
