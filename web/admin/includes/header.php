<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <title>Newspage Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>      
</head>
<body>

<?php
    <!-- Nếu chưa login-->
    if (!$user)
    {
        echo
        '
            <div class="container">
                <div class="page-header">
                    <h1>Chào <small>Khách</small></h1>
                </div><!-- div.page-header -->
            </div><!-- div.container -->
        ';
    }
   <!--nếu đăng nhập rồi -->
    else
    {
        echo
        '
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="' . $_DOMAIN . '">Chào Quản Trị Viên</a>
                    </div><!-- div.navbar-header -->
                </div><!-- div.container-fluid -->
            </nav>
        ';
    }
 
    ?>