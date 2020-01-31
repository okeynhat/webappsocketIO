<?php
?>
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: /stylesheets/style.css");
exit(); }
?>
