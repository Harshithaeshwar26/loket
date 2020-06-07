<?php
session_start();
include('connect_db.php');
// $product_code = rand(111111111111111111,9999999999999999);
// $_SESSION['product_code'] = $product_code;
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <title>Loket - E-commerce</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="add-product.php"><img class="blur-up lazyloaded" src="../assets/images/logo.jpeg" alt=""></a></div>
        </div>
        <div class="main-header-right row">
            <div class="nav-right col">
                
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
    <div class="page-sidebar">
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">Azeem</h6>
                    <p>Loket Admin</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="add-product.php"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="add-product.php"><i data-feather="box"></i> <span>Product</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="add-product.php"><i class="fa fa-circle"></i>
                                    <span>Add Products</span> 
                                </a>
                            </li>
                            <li>
                                <a href="admin-transactions.php"><i class="fa fa-circle"></i>
                                    <span>View Products</span> 
                                </a>
                                <!-- <ul class="sidebar-submenu">
                                    <li><a href="category.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-sub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a></li>
                                    <li><a href="add-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul> -->
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="add-product.php"><i data-feather="box"></i> <span>Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="add-category.php"><i class="fa fa-circle"></i>
                                    <span>Add Category</span> 
                                </a>
                            </li>
                            
                            <!-- <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="add-product.php"><i data-feather="box"></i> <span>Sub Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="add-sub_category.php"><i class="fa fa-circle"></i>
                                    <span>Add Sub Category</span> 
                                </a>
                            </li>
                            <!-- <li>
                                <a href="admin-transactions.php"><i class="fa fa-circle"></i>
                                    <span>View Products</span> 
                                </a>
                                 <ul class="sidebar-submenu">
                                    <li><a href="category.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-sub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a></li>
                                    <li><a href="add-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul> -->
                            <!-- </li>  -->
                            <!-- <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="add-shop.php"><i data-feather="box"></i> <span>Shops</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="add-shop.php"><i class="fa fa-circle"></i>
                                    <span>Add Shops</span> 
                                </a>
                            </li>
                            
                            <!-- <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>

        
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href=""><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href=""><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href=""><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href=""><i class="fa fa-circle"></i>Create Coupons </a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                            <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>Media</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                            <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                        </ul>
                    </li> -->
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href=""><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href=""><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                            <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="translations.html"><i class="fa fa-circle"></i>Translations</a></li>
                            <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates</a></li>
                            <li><a href="taxes.html"><i class="fa fa-circle"></i>Taxes</a></li>
                        </ul>
                    </li> -->
                    <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <!-- <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a> -->
                        <ul class="sidebar-submenu">
                            <!-- <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li> -->
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-out"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Add Shops
                                    <small>Loket Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <!-- <li class="breadcrumb-item"><a href="add-product.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Add Product</li> -->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Shop</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    </div>
                                    <div class="col-xl-12">
                                        <form method = "POST" action = "shop.php" >
                                            <div class="form">
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Shop Name:</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" name = "shop_name" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Name :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "cname" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Phone Number :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "cphone_number" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Email Address :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" name = "cemail_address" size="16" maxlength="16"  type="text" required="">
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                                </div>
                                            
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Address 1 :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "address_1" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>  
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Address 2 :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "address_2" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">City :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "city" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">State :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "state" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Zipcode :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "zipcode" type="text">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Country :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "country" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <!-- <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Size :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "size" type="text">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Height :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "height" type="text">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Weight :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "weight" type="text">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Depth :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "depth" type="text">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Expiry Date :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "expiry_date" type="date" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Offer Code :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name = "offer_code" type="text">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div> -->
                                            </div>
                                            <div class="offset-xl-3 offset-sm-4">
                                                <input type="submit" name = "submit" class="btn btn-primary">
                                                <button type="button" class="btn btn-light">Discard</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2020 © Loket All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- touchspin js-->
<script src="../assets/js/touchspin/vendors.min.js"></script>
<script src="../assets/js/touchspin/touchspin.js"></script>
<script src="../assets/js/touchspin/input-groups.min.js"></script>

<!-- form validation js-->
<script src="../assets/js/dashboard/form-validation-custom.js"></script>

<!-- ckeditor js-->
<script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="../assets/js/editor/ckeditor/styles.js"></script>
<script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>

<!-- Zoom js-->
<script src="../assets/js/jquery.elevatezoom.js"></script>
<script src="../assets/js/zoom-scripts.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>

</body>
</html>
