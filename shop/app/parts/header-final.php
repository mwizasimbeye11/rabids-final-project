<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SantaMaria Hotel</title>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../shop/app/css/style.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>

<!-- START: header -->
<?php
ob_start();
$user = new User();
$cart = new Cart();
?>
<header role="banner" class="probootstrap-header">
    <!-- <div class="container"> -->
    <div class="row">
        <a href="index.php" class="probootstrap-logo visible-xs"><img src="app/img/logo_md@2x.png" class="hires" width="120" height="33"></a>

        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../rooms.php">Our Rooms</a></li>
                <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="app/img/logo_md@2x.png" class="hires" width="181" height="50" alt=""></a></li>
                <li><a href="../reservation.php">Reservation</a></li>
                <li><a href="../shop/">Shop</a></li>
                <li><a href="../contact.html">Contact</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Connect With Us</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- </div> -->
</header>
<!-- END: header -->