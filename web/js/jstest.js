
	//In ra màn hình tên thằng viết cái này
		alert("Được tạo bởi: Trần Minh Thức - Phiên bản: BETA V1.0.5a")
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
		var tb2_status = "";
		var tb4_status = "";
		var tb3_status = "";

	//Đoạn này dùng để READ (đọc) dữ liệu từ database sau đó bỏ vào biến xài
		firebaseRef.on('value', function(snapshot) 
		{
			tb1_status = snapshot.child('den1').val();
		});
	//Thiết bị 2
		firebaseRef.on('value', function(snapshot) 
		{
			tb2_status = snapshot.child('den2').val();
		});
	//Thiết bị 3
		firebaseRef.on('value', function(snapshot) 
		{
			tb3_status = snapshot.child('quat1').val();
		});
	//Thiết bị 4
		firebaseRef.on('value', function(snapshot) 
		{
			tb4_status = snapshot.child('quat2').val();
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
	 		if (tb1_status == "0") 
	 		{
	 			tb1data_send = {
	 				den1: "1",
	 			};
	 		} 

	 		else if (tb1_status == "1")
	 		{
	 			tb1data_send = {
	 				den1: "0",
	 			};
	 		}

	 		firebaseRef.update(tb1data_send);
	 	};

	///thiết bị 2
		function tb2img_click() 
		{    
			var tb2data_send = "";
			if (tb2_status == "0") 
	 		{
	 			tb2data_send = {
						den2: "1",
					};
	 		}
	 		else if(tb2_status=="1")
	 		{
	 			tb2data_send = {
						den2: "0",
					};   
	 		}
	 		firebaseRef.update(tb2data_send);
	 	};

	 	function tb2btn_click()
	 	{
	 		var tb2data_send = "";

	 		if (tb2_status == "0") 
	 		{
	 			tb2data_send = {
	 				den2: "1",
	 			};
	 		} 

	 		else if (tb2_status == "1")
	 		{
	 			tb2data_send = {
	 				den2: "0",
	 			};
	 		}

	 		firebaseRef.update(tb2data_send);
	 	};

	 ///thiết bị 3
		function tb3img_click() 
		{    
			var tb3data_send = "";
			if (tb3_status == "0") 
	 		{
	 			tb3data_send = {
						quat1: "1",
					};
	 		}
	 		else if(tb3_status=="1")
	 		{
	 			tb3data_send = {
						quat1: "0",
					};   
	 		}
	 		firebaseRef.update(tb3data_send);
	 	};

	 	function tb3btn_click()
	 	{
	 		var tb3data_send = "";

	 		if (tb3_status == "0") 
	 		{
	 			tb3data_send = {
	 				quat1: "1",
	 			};
	 		} 

	 		else if (tb3_status == "1")
	 		{
	 			tb3data_send = {
	 				quat1: "0",
	 			};
	 		}

	 		firebaseRef.update(tb3data_send);
	 	};

	///thiết bị 4
		function tb4img_click() 
		{    
			var tb4data_send = "";
			if (tb4_status == "0") 
	 		{
	 			tb4data_send = {
						quat2: "1",
					};
	 		}
	 		else if(tb4_status=="1")
	 		{
	 			tb4data_send = {
						quat2: "0",
					};   
	 		}
	 		firebaseRef.update(tb4data_send);
	 	};

	 	function tb4btn_click()
	 	{
	 		var tb4data_send = "";

	 		if (tb4_status == "0") 
	 		{
	 			tb4data_send = {
	 				quat2: "1",
	 			};
	 		} 

	 		else if (tb4_status == "1")
	 		{
	 			tb4data_send = {
	 				quat2: "0",
	 			};
	 		}

	 		firebaseRef.update(tb4data_send);
	 	};

	//Đoạn này dùng để thay đổi trạng thái các cái hình tb1
		firebaseRef.on('value', function(snapshot) 
		{
			var tb1_stt = snapshot.child('den1').val(); // gọi dữ liệu về bằng cấu trúc .on và val()
			const tb1btn_stt = document.getElementById('tb1_btn');
			var imgelement = document.getElementById('tb1_img');
				if(tb1_stt=="1")
				{
					imgelement.src = "images/light_on.png";
					tb1btn_stt.innerHTML = "Đang Bật";
					tb1btn_stt.className = "btn btn-success";
					tb1btn_stt.style.color = 'white';
				}
				else if(tb1_stt == "0")
				{
					imgelement.src = "images/light_off.png";
					tb1btn_stt.innerHTML = "Đang Tắt";
					tb1btn_stt.className = "btn btn-danger";
					tb1btn_stt.style.color = 'white';
				}	
			
		});

	//Thay đổi trạng thái tb2
		firebaseRef.on('value', function(snapshot) 
		{
			var tb2_stt = snapshot.child('den2').val(); // gọi dữ liệu về bằng cấu trúc .on và val()
			const tb2btn_stt = document.getElementById('tb2_btn');
			var imgelement = document.getElementById('tb2_img');
				if(tb2_stt=="1")
				{
					imgelement.src = "images/light_on.png";
					tb2btn_stt.innerHTML = "Đang Bật";
					tb2btn_stt.className = "btn btn-success";
					tb2btn_stt.style.color = 'white';
				}
				else if(tb2_stt == "0")
				{
					imgelement.src = "images/light_off.png";
					tb2btn_stt.innerHTML = "Đang Tắt";
					tb2btn_stt.className = "btn btn-danger";
					tb2btn_stt.style.color = 'white';
				}	
			
		});
	//Thay đổi trạng thái tb3
		firebaseRef.on('value', function(snapshot) 
		{
			var tb3_stt = snapshot.child('quat1').val(); // gọi dữ liệu về bằng cấu trúc .on và val()
			const tb3btn_stt = document.getElementById('tb3_btn');//lấy giá trị thẻ html
			var imgelement = document.getElementById('tb3_img');
				if(tb3_stt=="1")
				{
					imgelement.src = "images/fan_on.png";
					tb3btn_stt.innerHTML = "Đang Bật";
					tb3btn_stt.className = "btn btn-success";
					tb3btn_stt.style.color = 'white';
				}
				else if(tb3_stt == "0")
				{
					imgelement.src = "images/fan_off.png";
					tb3btn_stt.innerHTML = "Đang Tắt";
					tb3btn_stt.className = "btn btn-danger";
					tb3btn_stt.style.color = 'white';
				}
			
		});
	//Thay đổi trạng thái tb4
		firebaseRef.on('value', function(snapshot) 
		{
			var tb4_stt = snapshot.child('quat2').val(); // gọi dữ liệu về bằng cấu trúc .on và val()
			const tb4btn_stt = document.getElementById('tb4_btn');//lấy giá trị thẻ html
			var imgelement = document.getElementById('tb4_img');
				if(tb4_stt=="1")
				{
					imgelement.src = "images/fan_on.png";
					tb4btn_stt.innerHTML = "Đang Bật";
					tb4btn_stt.className = "btn btn-success";
					tb4btn_stt.style.color = 'white';
				}
				else if(tb4_stt == "0")
				{
					imgelement.src = "images/fan_off.png";
					tb4btn_stt.innerHTML = "Đang Tắt";
					tb4btn_stt.className = "btn btn-danger";
					tb4btn_stt.style.color = 'white';
				}
			
		});
	
	
	//Đoạn này dùng để hiện nhiệt độ và độ ẩm lên
		firebaseSesor.on('value' , function(snapshot)
		{
			nhietdo_living = snapshot.child('nhietdo').val();
			doam_living = snapshot.child('doam').val();
			var humd_living = + doam_living;
			var temp_living = + nhietdo_living;
			setTemperature(temp_living);
			setHumidity(humd_living);
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

	    	function setHumidity(curVal)
	    	{
	    		var minHumd = 0;
	    		var maxHumd = 100;
	    		var newVal = scaleValue(curVal, [minHumd, maxHumd], [0, 180]);
	    		$('.gauge--2 .semi-circle--mask').attr({
	    			style: '-webkit-transform: rotate(' + newVal + 'deg);' + 
	    			'-moz-transform: rotate(' +newVal + 'deg);' + 
	    			'transform: rotate(' + newVal + 'deg);'
	    		});
	    		$("#humd").text(curVal + '%');
	    	}

		    function scaleValue(value, from, to) 
		    {
		        var scale = (to[1] - to[0]) / (from[1] - from[0]);
		        var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
		        return ~~(capped * scale + to[0]);
	    	}
    	});
