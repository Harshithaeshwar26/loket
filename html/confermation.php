<?php
include '../src/instamojo.php';
$api = new Instamojo\Instamojo('test_0cf201539311159827b3e0c1923', 'test_8076ca821d24829f71324b38b5b','https://test.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
try {
$response = $api->paymentRequestStatus($payid);
echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
echo "<pre>";
print_r($response);
}
catch (Exception $e) {
print('Error: ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loket - Multi-purpopse E-commerce </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color3.css" media="screen" id="color">
</head>
<body>

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="../assets/images/loader.gif" alt="loader">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-5 col-md-7 col-sm-6">
                    <div class="top-header-left">
                        <div class="shpping-order">
                            <h6>free shipping on order over Rs.99 </h6>
                        </div>
                        <div class="app-link">
                            <h6>
                                Download aap
                            </h6>
                            <ul>
                                <li><a><i class="fa fa-apple" ></i></a></li>
                                <li><a><i class="fa fa-android" ></i></a></li>
                                <li><a><i class="fa fa-windows" ></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-5 col-sm-6">
                    <div class="top-header-right">
                        <div class="top-menu-block">
                            <ul>
                                <li><a href="#">gift cards</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">help & contact</a></li>
                                <li><a href="#">todays deal</a></li>
                                <li><a href="#">track order</a></li>
                                <li><a href="#">shipping </a></li>
                                <li><a href="#">easy returns</a></li>
                            </ul>
                        </div>
                        <div class="language-block">
                            <div class="language-dropdown">
                  <span  class="language-dropdown-click">
                    english <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                                <ul class="language-dropdown-open">
                                    <li><a href="#">hindi</a></li>
                                    <li><a href="#">english</a></li>
                                    <li><a href="#">marathi</a></li>
                                    <li><a href="#">spanish</a></li>
                                </ul>
                            </div>
                            <div class="curroncy-dropdown">
                  <span class="curroncy-dropdown-click">
                    usd<i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                                <ul class="curroncy-dropdown-open">
                                    <li><a href="#"><i class="fa fa-inr"></i>inr</a></li>
                                    <li><a href="#"><i class="fa fa-usd"></i>usd</a></li>
                                    <li><a href="#"><i class="fa fa-eur"></i>eur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-header2">
        <div class="container">
            <div class="col-md-12">
                <div class="main-menu-block">
                    <div class="sm-nav-block">
                        <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                        <ul class="nav-slide">
                            <li>
                                <div class="nav-sm-back">
                                    back <i class="fa fa-angle-right pl-2"></i>
                                </div>
                            </li>
                            <li><a href="#">western ware</a></li>
                            <li><a href="#">TV, Appliances</a></li>
                            <li><a href="#">Pets Products</a></li>
                            <li><a href="#">Car, Motorbike</a></li>
                            <li><a href="#">Industrial Products</a></li>
                            <li><a href="#">Beauty, Health Products</a></li>
                            <li><a href="#">Grocery Products </a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Bags, Luggage</a></li>
                            <li><a href="#">Movies, Music </a></li>
                            <li><a href="#">Video Games</a></li>
                            <li><a href="#">Toys, Baby Products</a></li>
                            <li class="mor-slide-open">
                                <ul>
                                    <li><a href="#">Bags, Luggage</a></li>
                                    <li><a href="#">Movies, Music </a></li>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Toys, Baby Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="mor-slide-click">
                                    mor category
                                    <i class="fa fa-angle-down pro-down" ></i>
                                    <i class="fa fa-angle-up pro-up" ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-block">
                        <img src="../assets/images/logo.jpeg" class="img-fluid  " alt="logo-header">
                    </div>
                    <div class="input-block">
                        <div class="input-box">
                            <form class="big-deal-form">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="search"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search a Product" >
                                    <div class="input-group-prepend">
                                        <select>
                                            <option>All Category</option>
                                            <option>indurstrial</option>
                                            <option>sports</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cart-block cart-hover-div " onclick="openCart()">
                        <div class="cart ">
                            <span class="cart-product">0</span>
                            <ul>
                                <li class="mobile-cart  ">
                                    <a href="#">
                                        <i class="icon-shopping-cart "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-item">
                            <h5>shopping</h5>
                            <h5>cart</h5>
                        </div>
                    </div>
                    <div class="menu-nav">
              <span class="toggle-nav">
                <i class="fa fa-bars "></i>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-header-2">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="navbar-menu">
                        <div class="category-left">
                            <div class="nav-block">
                                <div class="nav-left" >
                                    <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                                        <button class="navbar-toggler" type="button">
                                            <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                        </button>
                                        <h5 class="mb-0  text-white title-font">Shop by category</h5>
                                    </nav>
                                    <div class="collapse  nav-desk" id="navbarToggleExternalContent">
                                        <ul class="nav-cat title-font">
                                            <li> <img src="../assets/images/layout-1/nav-img/01.png" alt="category-product"> <a href="#">western ware</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/02.png" alt="category-product"> <a href="#">TV, Appliances</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/03.png" alt="category-product"> <a href="#">Pets Products</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/04.png" alt="category-product"> <a href="#">Car, Motorbike</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/05.png" alt="category-product"> <a href="#">Industrial Products</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/06.png" alt="category-product"> <a href="#">Beauty, Health Products</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/07.png" alt="category-product"> <a href="#">Grocery Products </a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/08.png" alt="category-product"> <a href="#">Sports</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/09.png" alt="category-product"> <a href="#">Bags, Luggage</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/10.png" alt="category-product"> <a href="#">Movies, Music </a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/11.png" alt="category-product"> <a href="#">Video Games</a></li>
                                            <li> <img src="../assets/images/layout-1/nav-img/12.png" alt="category-product"> <a href="#">Toys, Baby Products</a></li>
                                            <li>
                                                <ul class="mor-slide-open">
                                                    <li> <img src="../assets/images/layout-1/nav-img/08.png" alt="category-product"> <a>Sports</a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/09.png" alt="category-product"> <a>Bags, Luggage</a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/10.png" alt="category-product"> <a>Movies, Music </a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/11.png" alt="category-product"> <a>Video Games</a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/12.png" alt="category-product"> <a>Toys, Baby Products</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mor-slide-click">mor category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                        </li>
                                        <!--HOME-->
                                        <li>
                                            <a href="#" class="dark-menu-item">Home</a>
                                            <ul>
                                                <li><a target="_blank" href="add-product.php">layout 1</a></li>
                                                <li><a target="_blank" href="layout-2.html">layout 2</a></li>
                                                <li><a target="_blank" href="layout-3.html">layout 3</a></li>
                                                <li><a target="_blank" href="layout-4.html">layout 4</a></li>
                                                <li><a target="_blank" href="layout-5.html">layout 5</a></li>
                                                <li><a target="_blank" href="layout-6.html">layout 6</a></li>
                                            </ul>
                                        </li>
                                        <!--HOME-END-->

                                        <!--SHOP-->
                                        <li>
                                            <a href="#" class="dark-menu-item">shop</a>
                                            <ul>
                                                <li><a href="category-page(left-sidebar).html">left sidebar</a></li>
                                                <li><a href="category-page(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                                                <li><a href="category-page(metro).html">metro </a></li>
                                                <li><a href="category-page(full-width).html">full width </a></li>
                                                <li><a href="category-page(infinite-scroll).html">infinite scroll</a></li>
                                                <li><a href=category-page(3-grid).html>3 grid</a></li>
                                                <li><a href="category-page(6-grid).html">6 grid</a></li>
                                                <li><a href="category-page(list-view).html">list view</a></li>
                                            </ul>
                                        </li>
                                        <!--SHOP-END-->


                                        <!--product-meu start-->
                                        <li class="mega"><a href="#" class="dark-menu-item">product
                                        </a>
                                            <ul class="mega-menu full-mega-menu ">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>sidebar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(left-sidebar).html">left sidebar</a></li>
                                                                            <li><a href="product-page(right-sidebar).html">right sidebar</a></li>
                                                                            <li><a href="product-page(no-sidebar).html">non sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>bonus layout</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(bundle).html">bundle</a></li>
                                                                            <li><a href="product-page(image-swatch).html">image swatch</a></li>
                                                                            <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product layout </h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(4-image).html">4 image </a></li>
                                                                            <li><a href="product-page(sticky).html">sticky</a></li>
                                                                            <li><a href="product-page(accordian).html">accordian</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>thumbnail image</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(left-image).html">left image</a></li>
                                                                            <li><a href="product-page(right-image).html">right image</a></li>
                                                                            <li><a href="product-page(image-outside).html">image outside</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>3 column</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(3-col-left).html">thumbnail left</a></li>
                                                                            <li><a href="product-page(3-col-right).html">thumbnail right</a></li>
                                                                            <li><a href="product-page(3-column).html">thubnail bottom</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product element</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-productbox.html">product box</a></li>
                                                                            <li><a href="element-product-slider.html">product slider</a></li>
                                                                            <li><a href="element-no_slider.html">no slider</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row menu-banner">
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="../assets/images/menu-banner1.jpg" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="../assets/images/menu-banner2.jpg" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--product-meu end-->

                                        <!--mega-meu start-->
                                        <li class="mega" >
                                            <a href="#" class="dark-menu-item">features</a>
                                            <ul class="mega-menu full-mega-menu ratio_landscape">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>portfolio</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="grid-2-col.html">portfolio grid 2</a></li>
                                                                            <li><a href="grid-3-col.html">portfolio grid 3</a></li>
                                                                            <li><a href="grid-4-col.html">portfolio grid 4</a></li>
                                                                            <li><a href="grid-6-col.html">portfolio grid 6</a></li><li><a href="masonary-2-grid.html">mesonary grid 2</a></li>
                                                                            <li><a href="masonary-3-grid.html">mesonary grid 3</a></li>
                                                                            <li><a href="masonary-4-grid.html">mesonary grid 4</a></li>
                                                                            <li><a href="masonary-fullwidth.html">mesonary full width</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="layout-5.html">cart modal popup</a></li>
                                                                            <li><a href="layout-6.html">qty. counter </a></li>
                                                                            <li><a href="add-product.php">cart top</a></li>
                                                                            <li><a href="layout-2.html">cart bottom</a></li>
                                                                            <li><a href="layout-3.html">cart left</a></li>
                                                                            <li><a href="layout-4.html">cart right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>shortcodes</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-title.html">title</a></li>
                                                                            <li><a href="element-banner.html">collection banner</a></li>
                                                                            <li><a href="element-slider.html">home slider</a></li>
                                                                            <li><a href="element-category.html">category</a></li>
                                                                            <li><a href="element-service.html">service</a></li>
                                                                            <li><a href="element-image-ratio.html">image size ratio</a></li>
                                                                            <li><a href="element-tab.html">tab</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="email-order-success.html">order success</a></li>
                                                                            <li><a href="email-order-success-tow.html">order success 2</a></li>
                                                                            <li><a href="email-template.html">email template</a></li>
                                                                            <li><a href="email-template-tow.html">email template 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title menu-secon-title">
                                                                        <h5>Easy to use</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="button.html">element button</a></li>
                                                                            <li><a href="instagram.html">element instagram</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box product ">
                                                                <div class="mega-img">
                                                                    <img src="../assets/images/mega-banner.jpg" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--mega-meu end-->

                                        <!--pages-meu start-->
                                        <li><a href="#" class="dark-menu-item">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="#">account</a>
                                                    <ul>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="forget-pwd.html">forget password</a></li>
                                                        <li><a href="profile.html">profile </a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="typography.html">typography </a></li>
                                                <li><a href="review.html">review </a></li>
                                                <li><a href="order-success.html">order success</a></li>
                                                <li><a href="order-history.html">order history</a></li>
                                                <li>
                                                    <a href="#">compare</a>
                                                    <ul>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="compare-2.html">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="look-book.html">lookbook</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">coming soon </a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <!--product-end end-->

                                        <!--blog-meu start-->
                                        <li>
                                            <a href="#" class="dark-menu-item">blog</a>
                                            <ul>
                                                <li><a href="blog(left-sidebar).html">left sidebar</a></li>
                                                <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <!--blog-meu end-->
                                    </ul>
                                </nav>
                            </div>
                            <div class="icon-block">
                                <ul>
                                    <li class="mobile-user onhover-dropdown"  onclick="openAccount()">
                                        <a href="#"><i class="icon-user"></i>
                                        </a>
                                    </li>
                                    <li class="mobile-wishlist" onclick="openWishlist()">
                                        <a ><i class="icon-heart"></i><div class="cart-item"><div>0 item<span>wishlist</span></div></div></a></li>
                                    <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                        <div class ="search-overlay">
                                            <div>
                                                <span class="close-mobile-search">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="icon-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="category-right">
                            <div class="contact-block">
                                <div>
                                    <i class="fa fa-volume-control-phone"></i>
                                    <span>call us<span>123-456-76890</span></span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div  class="gift-block" data-toggle="dropdown">
                                    <div class="grif-icon">
                                        <i class="icon-gift"></i>
                                    </div>
                                    <div class="gift-offer">
                                        <p>gift box</p>
                                        <span>Festivel Offer</span>
                                    </div>
                                </div>
                                <div class="dropdown-menu gift-dropdown">
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/1.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Billion Days</h5>
                                            <p><img src="../assets/images/icon/currency.png" class="cash" alt="curancy"> Flat Rs. 270 Rewards</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/2.png" alt="Generic placeholder image" class="gift-bloc">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Fashion Discount</h5>
                                            <p><img src="../assets/images/icon/fire.png"  class="fire" alt="fire">Extra 10% off (upto Rs. 10,000*) </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/3.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">75% off Store</h5>
                                            <p>No coupon code is required.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/6.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Upto 50% off</h5>
                                            <p>Buy popular phones under Rs.20.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/5.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Beauty store</h5>
                                            <p><img src="../assets/images/icon/currency.png" class="cash" alt="curancy" > Flat Rs. 270 Rewards</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header end-->

<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    <h4>Transaction successful</h4>
                    <p>Payment is successfully processsed and your order is on the way</p>
                    <p>Transaction ID:267676GHERT105467</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i style="color:#ffaa1d;" class="fa fa-spinner" aria-hidden="true"></i>
                    <h2>Transaction pending..!</h2>
                    <p>Payment is in process. Please wait for a while</p>
                    <p>Transaction ID:267676GHERT105467</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i>
                    <h2>Transaction cancelled</h2>
                    <p>Payment is unsuccessful. Please try again later</p>
                    <p>Transaction ID:267676GHERT105467</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-big-py-space mt--5 bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="../assets/images/layout-4/product/1.jpg" alt="" class="img-fluid "></div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>product name</h4>
                                <h5>cotton shirt</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>quantity</h4>
                                <h5>1</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>price</h4>
                                <h5>Rs.555.00</h5></div>
                        </div>
                    </div>
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="../assets/images/layout-4/product/2.jpg" alt="" class="img-fluid "></div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>product name</h4>
                                <h5>cotton shirt</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>quantity</h4>
                                <h5>1</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>price</h4>
                                <h5>Rs.555.00</h5></div>
                        </div>
                    </div>
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span>Rs.55.00</span></li>
                            <li>shipping <span>Rs.12.00</span></li>
                            <li>tax(GST) <span>Rs.10.00</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>Rs.77.00</span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>summery</h4>
                        <ul class="order-detail">
                            <li>order ID: 5563853658932</li>
                            <li>Order Date: October 22, 2018</li>
                            <li>Order Total: Rs.907.28</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>shipping address</h4>
                        <ul class="order-detail">
                            <li>gerg harvell</li>
                            <li>568, suite ave.</li>
                            <li>Austrlia, 235153</li>
                            <li>Contact No. 987456321</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) availabel. Card/Net banking acceptance subject to device availability.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                        <a class="btn btn-rounded btn-block ">
                            <i></i>  Track Your Order
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!--footer start-->
<footer class="footer-2">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="footer-main-contian">
                    <div class="row ">
                        <div class="col-lg-4 col-md-12 ">
                            <div class="footer-left">
                                <div class="footer-logo">
                                    <img src="../assets/images/logo.jpeg" class="img-fluid  " alt="logo">
                                </div>
                                <div class="footer-detail">
                                <!-- <p>About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us</p> -->
                                    <ul class="paymant-bottom">
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/1.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/2.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/3.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/4.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/5.png" class="img-fluid" alt="pay"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 ">
                            <div class="footer-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="subscribe-section">
                                            <div class="row">
                                                <!-- <div class="col-md-5 ">
                                                    <div class="subscribe-block">
                                                        <div class="subscrib-contant ">
                                                            <h4>subscribe to newsletter</h4>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-md-7 ">
                                                    <div class="subscribe-block">
                                                        <div class="subscrib-contant">
                                                            <div class="input-group" >
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" ><i class="fa fa-envelope-o" ></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="your email" >
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text telly" ><i class="fa fa-telegram" ></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class=account-right>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="footer-box">
                                                        <div class="footer-title">
                                                            <h5>my account</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul>
                                                                <li><a href="#">about us</a></li>
                                                                <li><a href="contact_us.php">contact us</a></li>
                                                                <li><a href="#">terms & conditions</a></li>
                                                                <li><a href="faq.php">faq</a></li>
                                                                <!-- <li><a href="#">returns & exchanges</a></li>
                                                                <li><a href="#">shipping & delivery</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-5">
                                                    <div class="footer-box footer-contact-box">
                                                        <div class="footer-title">
                                                            <h5>contact us</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul class="contact-list">
                                                                <!-- <li><i class="fa fa-map-marker"></i><span>big deal store demo store <br> <span> india-3654123</span></span></li> -->
                                                                <li><i class="fa fa-phone"></i><span>call us: 8095566699</span></li>
                                                                <li><i class="fa fa-envelope-o"></i><span>email us: contact.azeempatel@gmail.com</span></li>
                                                                <!-- <li><i class="fa fa-fax"></i><span>fax 123456</span></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-link-block  bg-transparent">
        <div class="container">
            <div class="row">
                <div class="app-link-bloc-contain app-link-bloc-contain-1">
                    <div class="app-item-group">
                        <div class="app-item">
                            <img src="../assets/images/layout-1/app/1.png" class="img-fluid" alt="app-banner">
                        </div>
                        <div class="app-item">
                            <img src="../assets/images/layout-1/app/2.png" class="img-fluid" alt="app-banner">
                        </div>
                    </div>
                    <div class="app-item-group ">
                        <div class="sosiyal-block" >
                            <h6>follow us</h6>
                            <ul class="sosiyal">
                                <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" ></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" ></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" ></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sub-footer-contain">
                        <!-- <p><span>2018 - 19 </span>copy right by themeforest powered by pixel strap</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->

<!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-4/product/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x Rs. 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-4/product/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x Rs. 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="../assets/images/layout-4/product/3.jpg"></a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4><span>1 x Rs. 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>Rs.299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="cart.html" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->

<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-rounded btn-block ">Login</a>
            </div>
            <div>
                <h5 class="forget-class"><a href="forget-pwd.html" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="register.html" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>
</div>
<!-- Add to account bar end-->

<!-- Add to wishlist bar -->
<div id="wishlist_side" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my wishlist</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeWishlist()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>Rs. 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>Rs. 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/3.jpg"></a>
                        <div class="media-body">
                            <a href="#"><h4>item name</h4></a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4><span>Rs. 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>Rs.299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="wishlist.html" class="btn btn-normal btn-block  view-cart">view wislist</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to wishlist bar end-->

<!-- add to  setting bar  start-->
<div id="mySetting" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my setting</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeSetting()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="setting-block">
            <div >
                <h5>language</h5>
                <ul>
                    <li><a href="#">english</a></li>
                    <li><a href="#">french</a></li>
                </ul>
                <h5>currency</h5>
                <ul>
                    <li><a href="#">uro</a></li>
                    <li><a href="#">rupees</a></li>
                    <li><a href="#">pound</a></li>
                    <li><a href="#">doller</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Add to setting bar end-->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js" ></script>

<!-- menu js-->
<script src="../assets/js/menu.js"></script>

<!-- slick js-->
<script  src="../assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.js" ></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>
</body>
</html>
