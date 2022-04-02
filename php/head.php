<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/fontawesome.css" />
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/tailwind.js"></script>
    <script src="js/slick.min.js"></script>
    <title>購物網站</title>
</head>
<body>

<header id="main_header" class="shadow-md ">
    <a href="welcome.php" class="main_header_logo">TEMPLATE</a>

    <nav class="main_header_navi">
        <div class="main_header_link_wrap">
            <a href="welcome.php" class="main_header_link">首頁</a>
        </div>
        <div class="main_header_link_wrap">
            <a href="news.php" class="main_header_link">最新消息</a>
        </div>
        <div class="main_header_link_wrap">
            <a href="productList.php" class="main_header_link">購物商城</a>
        </div>
        <div class="main_header_link_wrap">
            <a href="contact.php" class="main_header_link">聯絡我們</a>
        </div>
    </nav>

    <div class="main_header_btn_group">
        <a href="member_login.php" class="main_header_btn">
            <i class="fas fa-user"></i>
        </a>
        <a href="cart.php" class="main_header_btn main_header_cart_btn">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart_amount">0</span>
        </a>

        <div class="cart_container">
            
        </div>
    </div>
</header>