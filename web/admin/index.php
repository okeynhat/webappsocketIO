<?php
//Kiểm tra đăng nhập hay chưa
session_start();
if(isset($_SESSION["username"]) && $_SESSION["level"] == 0)
{
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Trang Quản Lý</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Xin chào <?php echo $_SESSION['username']; ?>!</p>
<p>Đây là trang chủ</p>
<p><a href="dashboard.php">Bảng điều khiển</a></p>
<a href="logout.php">Đăng xuất</a>
</div>
</body>
</html>
<?php
}
else if(isset($_SESSION["username"]) && $_SESSION["level"] == 1)
{
	 echo "Không Phải Admin Không Có Quyền Vào Trang Này!!!!";
}
else if(!isset($_SESSION["username"]))
{
header("Location: login.php");
exit();
}
	
?>