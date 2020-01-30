<!-- File Này Chứa Code Trang Đăng Nhập -->

<?php
if(isset($_POST['ok']))
{
  $u=$p="";
  if($_POST['username'] == NULL)
  {
    echo "Vui lòng nhập tên tài khoản!!<br />";
  }
  else
  {
    $u=$_POST['username'];
  }
  if($_POST['password'] == NULL)
  {
    echo "Vui lòng nhập mật khẩu!!<br />";
  }
  else
  {
    $p=$_POST['password'];
  }
  if($u && $p)
  {
    $conn=mysql_connect("remotemysql.com","6USK3AZfQS","ZVQMeUMsfJ") or die("Không thể kết nối CSDL");
    mysql_select_db("USK3AZfQS",$conn);
    $sql="select * from user where username='".$u."' and password='".$p."'";
    $query=mysql_query($sql);
  if(mysql_num_rows($query) == 0)
  { 
    echo "Tài khoản hoặc mật khẩu không đúng vui lòng nhập lại !!!";
  }
else
{
$row=mysql_fetch_array($query);
session_start();
$_SESSION['userid'] = $row[id];
$_SESSION['level'] = $row[level];

}
}
}
?>
<form action='login.php' method='post'>
Username: <input type='text' name='username' size='25' /><br />
Password: <input type='password' name='password' size='25' /><br />
<input type='submit' name='ok' value='Dang Nhap' />
</form>