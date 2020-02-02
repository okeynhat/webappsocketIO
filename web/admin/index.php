<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Trang Đăng Nhập</title>
<link rel="stylesheet" href="https://mdtiot.herokuapp.com/stylesheets/style.css" />
</head>
<body>
<div class="form">
<p>Xin chào <?php echo $_SESSION['username']; ?>!</p>
<p>Vừa Đăng Nhập Thành Công!!!</p>
<p><a href="https://patviet.club">Nhấn Vào Đây Để Mở Trang Điều Khiển</a></p>
<a href="logout.php">Đăng xuất</a>
</div>
</body>
</html>
