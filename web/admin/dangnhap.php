<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"> 
<title>Đăng nhập</title>
<link rel="stylesheet" href="https://mdtiot.herokuapp.com/admin/css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php");
            }else{
				echo "<div class='form'><h3>Tên đăng nhập hoặc mật khẩu không đúng!</h3></br><a href='login.php'>Đăng nhập lại</a></div>";
				}
    }else{
?>
<div class="container-fluid"> 
 <div class="row-fluid"> 
  <div class="col-md-offset-4 col-md-4" id="box"> 
   <h2>Đăng Nhập</h2> 
   <hr> 
   <form class="form-horizontal" action="" method="post" id="login"> 
    <fieldset> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="username" placeholder="Tên Đăng Nhập" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input name="password" placeholder="Mật Khẩu" class="form-control" type="password"> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <button type="submit" class="btn btn-md btn-danger pull-right">Đăng nhập </button> 
      </div> 
     </div> 
    </fieldset> 
   </form> 
  </div> 
 </div>
</div>

<p>Bạn chưa có tài khoản? <a id="dangky" onclick="dangky_click()">Đăng ký ngay</a></p><br/>
<?php } ?>
</body>
</html>

<script>
	function dangky_click()
	{
		alert("Tạm khóa tính năng đăng ký - Vui lòng liên hệ Admin để được cấp tài khoản")
	};
</script>