<?php
	$namehost = 'remotemysql.com';
	$userhost = '6USK3AZfQS';
	$passhost = 'ZVQMeUMsfJ';
	$database = '6USK3AZfQS';

	// Lệnh kết nối tới database
	$cn = mysqli_connect($namehost, $userhost, $passhost, $database);

	// Nếu kết nối database thất bạn sẽ báo lỗi
	if (!$cn)
	{
		echo 'Could not connect to database.';
	}
?>