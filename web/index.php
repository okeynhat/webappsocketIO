<?php
include("admin/auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Điều Khiển Nhà Thông Minh</title>
<link rel="stylesheet" href="admin/css/style.css" />
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