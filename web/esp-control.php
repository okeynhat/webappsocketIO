<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Điều Khiển Hệ Thống</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1></h1>";
			<div class="row">
  				<div class="col-md-2"><input class="btn btn-block btn-lg btn-primary" type="button" value="On" onclick="on()"></div>
  				<div class="col-md-2"><input class="btn btn-block btn-lg btn-danger" type="button" value="Off" onclick="off()"></div>
 			</div>		
	</div>
 <script>function on() {$.get(\"/on\");}</script>
  <script>function off() {$.get(\"/off\");} </script>
</body>
</html>