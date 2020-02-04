
	//Khúc này khai báo cấu hình Firebase (sau này thương mại hóa chỗ này sẽ thay)
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
		var FirebaseLivingroomDecive = firebase.database().ref().child('thietbi/phongkhach'); //gọi firebase

	//Khai báo biến toàn cục (Xài cho cả chương trình)
		var nhietdo_living = "";
		var doam_living = "";
	//Biến lưu dữ liệu thiết bị chỉ gọi 1 lần xài luôn
		var Lvrden1stt = ""; //cái đèn 1 Livingroom

	//Đoạn này dùng để READ (đọc) dữ liệu từ database sau đó bỏ vào biến xài dùng .on và val()
		FirebaseLivingroomDecive.on('value', function(snapshot) 
		{
			Lvrden1stt = snapshot.child('den1').val();
			alert(Lvrden1stt);
		});
	//Đoạn chương trình xảy ra khi nhấn vào cái hình của thiết bị
	//có nhiều cách để thực hiện cái này :)))
		function lvrden1imgclick() 
		{    
			var datasend = ""; //biến này chỉ dùng 1 lần => dùng chung đc
			if (Lvrden1stt == "0")//nếu value đang bằng 0 tức đang off
	 		{
	 			//gửi dữ liệu ngược lại vào biến data
	 			datasend = 
	 			{
						den1: "1",
				};
	 		}
	 		else if(Lvrden1stt =="1")
	 		{
	 			datasend = {
						den1: "0",
					};   
	 		}
	 		FirebaseLivingroomDecive.update(datasend); //cập nhật dữ liệu vào firebase
	 	};

	//Đoạn này dùng để thay đổi trạng thái các cái hình
		FirebaseLivingroomDecive.on('value', function(snapshot) 
		{
			var stt = snapshot.child('den1').val(); // tạo cái mới để k lộn nhé
			var btnstt = document.getElementById('lvrbtnden1');
			var imgelement = document.getElementById('lvrden1img');
				if(stt=="1")
				{
					imgelement.src = "../images/light_on.png";
					btnstt.innerHTML = "Đang Bật";
					btnstt.className = "btn btn-success";
					btnstt.style.color = 'white';
				}
				else if(stt == "0")
				{
					imgelement.src = "../images/light_off.png";
					btnstt.innerHTML = "Đang Tắt";
					btnstt.className = "btn btn-danger";
					btnstt.style.color = 'white';
				}	
			
		});
