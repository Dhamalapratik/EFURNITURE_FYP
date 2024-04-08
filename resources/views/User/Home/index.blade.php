<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">



<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furnitica - Minimalist Furniture HTML Template</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/owl-carousel/assets/owl.carousel.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reponsive.css')}}">
</head>

<body id="home">
    <header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="index-2.html">
                        <img class="logo-mobile img-fluid" src="img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">
                        <input type="text" name="s" value="" placeholder="Search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="img/product/5.jpg" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                </div>
                                                <div>
                                                    2 x
                                                    <span class="product-price">£28.98</span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>£92.96</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="product-cart.html" title="View Cart">View Cart</a>
                                                    <a href="product-checkout.html" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            {{-- <a href="index-2.html">
                                <img class="img-fluid" src="img/home/logo.png" alt="logo">
                            </a> --}}
                            <h1>EFurniture</h1>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="#" class="parent">Home</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="item">
                                                <a href="index-2.html" title="Home Page 1">Home Page 1</a>
                                            </li>
                                            <li class="item">
                                                <a href="home2.html" title="Home Page 2">Home Page 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="home3.html" title="Home Page 3">Home Page 3</a>
                                            </li>
                                            <li class="item">
                                                <a href="home4.html" title="Home Page 4">Home Page 4</a>
                                            </li>
                                            <li class="item">
                                                <a href="home5.html" title="Home Page 5">Home Page 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="parent">Blog</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="item">
                                                <a href="blog-list-sidebar-left.html" title="Blog List (Sidebar Left)">Blog List (Sidebar Left)</a>
                                            </li>
                                            <li class="item">
                                                <a href="blog-list-sidebar-left2.html" title="Blog List (Sidebar Left) 2">Blog List (Sidebar Left) 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="blog-list-sidebar-right.html" title="Category Blog (Right column)">Blog List (Sidebar Right)</a>
                                            </li>
                                            <li class="item">
                                                <a href="blog-list-no-sidebar.html" title="Blog List (No Sidebar)">Blog List (No Sidebar)</a>
                                            </li>
                                            <li class="item">
                                                <a href="blog-grid-no-sidebar.html" title="Blog Grid (No Sidebar)">Blog Grid (No Sidebar)</a>
                                            </li>
                                            <li class="item">
                                                <a href="blog-detail.html" title="Blog Detail">Blog Detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="parent">Page</a>
                                    <div class="dropdown-menu drop-tab">
                                        <ul>
                                            <li class="item container group">
                                                <div class="dropdown-menu dropdown-tab">
                                                    <ul>
                                                        <li class="item col-md-4 float-left">
                                                            <span class="menu-title">Category Style</span>
                                                            <div class="menu-content">
                                                                <ul class="col">
                                                                    <li>
                                                                        <a href="product-grid-sidebar-left.html">Product Grid (Sidebar Left)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-grid-sidebar-right.html">Product Grid (Sidebar Right)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-list-sidebar-left.html">Product List (Sidebar left) </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="item col-md-4 html  float-left">
                                                            <span class="menu-title">Product Detail Style</span>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li>
                                                                        <a href="product-detail.html">Product Detail (Sidebar Left)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Product Detail (Sidebar Right)</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="item col-md-4 html  float-left">
                                                            <span class="menu-title">Bonus Page</span>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li>
                                                                        <a href="404.html">404 Page</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="about-us.html">About Us Page</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="contact.html" class="parent">Contact US</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                        <form method="get" action="#">
                            <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <!-- acount  -->
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Account</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    @if (Auth::check())
                                        <div>
                                            <a class="login" href="user-acount.html" rel="nofollow" title="Log in to your customer account">
                                                <i class="fa fa-cog"></i>
                                                <span>My Account</span>
                                            </a>
                                        </div>
                                        <div>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf <!-- CSRF protection -->
                                            </form>

                                            <div>
                                                <a class="login" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Log out">
                                                    <i class="fa fa-sign-out"></i>
                                                    <span>Sign Out</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="check-out" href="product-checkout.html" rel="nofollow" title="Checkout">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="user-wishlist.html" title="My Wishlists">
                                                    <i class="fa fa-heart"></i>
                                                    <span>My Wishlists</span>
                                                </a>
                                            </div>

                                    @else

                                        <div>
                                            <a class="login" href="{{ route('login') }}" rel="nofollow" title="Log in to your customer account">
                                                <i class="fa fa-sign-in"></i>
                                                <span>Sign in</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="register" href="user-register.html" rel="nofollow" title="Register Account">
                                                <i class="fa fa-user"></i>
                                                <span>Register Account</span>
                                            </a>
                                        </div>


                                    @endif




                                    {{-- <div id="desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down">
                                        <ul class="list-inline">
                                            <li>
                                                <a title="Euro" rel="nofollow" href="#">EUR</a>
                                            </li>
                                            <li class="current list-inline-item">
                                                <a title="British Pound Sterling" rel="nofollow" href="#">GBP</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="desktop_language_selector" class="language-selector groups-selector hidden-sm-down">
                                        <ul class="list-inline">
                                            <li class="list-inline-item current">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas.jpg" alt="English" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas2.jpg" alt="Italiano" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas3.jpg" alt="Français" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas4.jpg" alt="Español" width="16" height="11">
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="desktop_cart">
                        <div class="blockcart block-cart cart-preview tiva-toggle">
                            <div class="header-cart tiva-toggle-btn">
                                <span class="cart-products-count">1</span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="dropdown-content">
                                <div class="cart-content">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="product-image">
                                                    <a href="product-detail.html">
                                                        <img src="img/product/5.jpg" alt="Product">
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="product-name">
                                                        <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                    </div>
                                                    <div>
                                                        2 x
                                                        <span class="product-price">£28.98</span>
                                                    </div>
                                                </td>
                                                <td class="action">
                                                    <a class="remove" href="#">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="total">
                                                <td colspan="2">Total:</td>
                                                <td>£92.96</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" class="d-flex justify-content-center">
                                                    <div class="cart-button">
                                                        <a href="product-cart.html" title="View Cart">View Cart</a>
                                                        <a href="product-checkout.html" title="Checkout">Checkout</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <div class="container position">
                <div class="section menu-banner d-xs-none">
                    <div class="tiva-verticalmenu block">
                        <div class="box-content">
                            {{-- <div class="verticalmenu" role="navigation">
                                <ul class="menu level1">
                                    <li class="item parent">
                                        <a href="#" class="hasicon" title="SIDE TABLE">
                                            <img src="img/home/table-lamp.png" alt="img">SIDE TABLE</a>
                                        <div class="dropdown-menu">
                                            <div class="menu-items">
                                                <ul>
                                                    <li class="item">
                                                        <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                    </li>
                                                    <li class="item parent-submenu parent">
                                                        <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                        <span class="show-sub fa-active-sub"></span>
                                                        <div class="dropdown-submenu">
                                                            <div class="menu-items">
                                                                <ul>
                                                                    <li class="item">
                                                                        <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                                    </li>
                                                                    <li class="item">
                                                                        <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                                    </li>
                                                                    <li class="item">
                                                                        <a href="#" title="Voluptate">Voluptate</a>
                                                                    </li>
                                                                    <li class="item">
                                                                        <a href="#" title="Tongue Est">Tongue Est</a>
                                                                    </li>
                                                                    <li class="item">
                                                                        <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#" title="Voluptate">Voluptate</a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#" title="Tongue Est">Tongue Est</a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item parent group">
                                        <a href="#" class="hasicon" title="FI">
                                            <img src="img/home/fireplace.png" alt="img">FIREPLACE
                                        </a>
                                        <div class="dropdown-menu menu-2">
                                            <div class="menu-items">
                                                <div class="item">
                                                    <div class="menu-content">
                                                        <div class="tags">
                                                            <div class="title float-left">
                                                                <b>DINNING ROOM</b>
                                                            </div>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#">Toshiba</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Samsung</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">LG</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sharp</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Electrolux</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Hitachi</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Panasonic</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Mitsubishi Electric</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Daikin</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Haier</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tags">
                                                            <div class="title float-left">
                                                                <b>BATHROOM</b>
                                                            </div>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#">Toshiba</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Samsung</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">LG</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sharp</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Electrolux</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Hitachi</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Panasonic</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Mitsubishi Electric</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Daikin</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Haier Media</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Gee</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Digimart</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Vitivaa</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sanaky</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sunshine</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tags">
                                                            <div class="title float-left">
                                                                <b>LIVING ROOM</b>
                                                            </div>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#">Media</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Gee</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Digimart</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Vitivaa</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sanaky</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sunshine</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Toshiba</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Samsung</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">LG</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sharp</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Electrolux</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Hitachi</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Panasonic</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Mitsubishi Electric</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Daikin</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Haier</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tags">
                                                            <div class="title float-left">
                                                                <b>BEDROOM</b>
                                                            </div>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#">LG</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sharp</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Electrolux</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Hitachi</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Panasonic</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Mitsubishi Electric</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Daikin</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Haier</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tags">
                                                            <div class="title float-left">
                                                                <b>KITCHEN</b>
                                                            </div>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#">LG</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sharp</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Electrolux</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Hitachi</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Panasonic</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Mitsubishi Electric</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Daikin</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Haier</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tags">
                                                            <div class="title float-left">
                                                                <b>Blender</b>
                                                            </div>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#">LG</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Sharp</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Electrolux</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Hitachi</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Panasonic</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Mitsubishi Electric</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Daikin</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#">Haier</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item group-category-img parent group">
                                        <a href="#" class="hasicon" title="TABLE LAMP">
                                            <img src="img/home/table-lamp.png" alt="img">TABLE LAMP
										</a>
                                        <div class="dropdown-menu menu-3">
                                            <div class="menu-items">
                                                <div class="item">
                                                    <div class="menu-content">
                                                        <div class="group-category row">
                                                            <div class="mt-20">
                                                                <div class="d-flex">
                                                                    <div class="col">
                                                                        <span class="menu-title">Coventry dining</span>
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">Accessories</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Activewear</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">ASOS Basic Tops</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Bags &amp; Purses</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Beauty</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Coats &amp; Jackets</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Curve &amp; Plus Size</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="menu-title">Amara stools</span>
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">Accessories</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Activewear</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">ASOS Basic Tops</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Bags &amp; Purses</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Beauty</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Coats &amp; Jackets</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Curve &amp; Plus Size</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="col">
                                                                        <span class="menu-title">Kingston dining</span>
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">Accessories</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Activewear</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">ASOS Basic Tops</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Bags &amp; Purses</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Beauty</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Coats &amp; Jackets</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Curve &amp; Plus Size</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="menu-title">Ellinger dining</span>
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">Accessories</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Activewear</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">ASOS Basic Tops</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Bags &amp; Purses</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Beauty</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Coats &amp; Jackets</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Curve &amp; Plus Size</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ml-15">
                                                                <a>
                                                                    <img class="img-fluid" src="img/home/img-menu.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="OTTOMAN">
                                            <img src="img/home/ottoman.png" alt="img">OTTOMAN
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="ARMCHAIR">
                                            <img src="img/home/armchair.png" alt="img">ARMCHAIR
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="CUSHION">
                                            <img src="img/home/cushion.png" alt="img">CUSHION
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="COFFEE TABLE">
                                            <img src="img/home/coffee_table.png" alt="img">COFFEE TABLE</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="SHELF">
                                            <img src="img/home/shelf.png" alt="img">SHELF
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="SOFA">
                                            <img src="img/home/sofa.png" alt="img">SOFA
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="DRESSING TABLE">
                                            <img src="img/home/dressing.png" alt="img">DRESSING TABLE</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                                            <img src="img/home/windown.png" alt="img">WINDOWN CURTAIN</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="CHANDELIER">
                                            <img src="img/home/chandelier.png" alt="img">CHANDELIER
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="CEILING FAN">
                                            <img src="img/home/ceiling_fan.png" alt="img">CEILING FAN</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="WARDROBE">
                                            <img src="img/home/wardrobe.png" alt="img">WARDROBE
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="FLOOR LAMP">
                                            <img src="img/home/floor_lamp.png" alt="img">FLOOR LAMP</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="VASE-FLOWER">
                                            <img src="img/home/vase-flower.png" alt="img">VASE-FLOWER
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="BED">
                                            <img src="img/home/bed.png" alt="img">BED
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="BED GIRL">
                                            <img src="img/home/bed.png" alt="img">BED GIRL</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="BED BOY">
                                            <img src="img/home/bed.png" alt="img">BED BOY</a>
                                    </li>
                                    <li class="more item">Show More</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide show -->
            <div class="section banner">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="img/home/home1-banner1.jpg" title="#caption1" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="img/home/home1-banner2.jpg" title="#caption2" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="img/home/home1-banner3.jpg" title="#caption3" alt="Slideshow image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <div class="container">

                            <!-- delivery form -->
                            <div class="section policy-home col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy1">
                                                        <img src="img/home/home1-policy.png" alt="img">
                                                        <div class="policy-name mb-5">FREE DELIVERY FROM $ 250</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy2">
                                                        <img src="img/home/home1-policy2.png" alt="img">
                                                        <div class="policy-name mb-5">FREE INSTALLATION</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy3">
                                                        <img src="img/home/home1-policy3.png" alt="img">
                                                        <div class="policy-name mb-5">MONEY BACK GUARANTEED</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product living room -->
                        <div class="section living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">
                                            <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                <div class="block-title-content">
                                                    <h2 class="title-block">
                                                        Living Room
                                                    </h2>
                                                </div>
                                                <!-- <div class="btn dropdown-toggle toggle-cate-child-vertical hidden-md-up mr-auto">Select category</div> -->
                                                <div class="cate-child-vertical">
                                                    <ul class="d-flex align-items-start flex-column">
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">SIDE TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">FIREPLACE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">FLOOR LAMP</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">OTTOMAN</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">ARMCHAIR</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">CUSHION</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">DRESSING TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">WALL CLOCK</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">BEDSIDE TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">PICTURE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                        </li>
                                                        <li class="last float-right">
                                                            <a href="product-grid-sidebar-left.html">View all</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#new" data-toggle="tab" class="active">New Arrivals</a>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="#best" data-toggle="tab">Best Sellers</a>
                                                        </li>
                                                        <li>
                                                            <a href="#sale" data-toggle="tab">Special Products</a>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="new" class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            @foreach ( $products as $product )
                                                            <div class="item text-center">
                                                                <div class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="" src="{{ asset('images/product/'.$product->image)  }}" alt="img">
                                                                            {{-- <img class="img-fluid image-secondary" src="img/product/5.jpg" alt="img"> --}}
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">{{ $product->name }}</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£ {{ $product->price }}</span>
                                                                                    <del class="regular-price">£ {{ $product->price }} </del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="{{ route('display.single.product',['id' => $product->id]) }}" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            {{-- <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/3.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/9.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/2.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/17.jpg" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
{{--
                                                    <div class="tab-pane fade" id="best">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/4.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/10.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/5.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/12.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/6.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/13.jpg" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="sale">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/7.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/14.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/8.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/15.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="img/product/9.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="img/product/16.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <!-- banner -->
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="img/home/effect1.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="img/home/effect2.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- best seller -->
                            <div class="section best-sellers col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="groupproductlist">
                                            <div class="row d-flex align-items-center">
                                                <!-- column 4 -->
                                                <div class="flex-4 col-lg-4 flex-4">
                                                    <h2 class="title-block">
                                                        <span class="sub-title">Best sellers Products</span>Best Sellers
                                                    </h2>
                                                    <div class="content-text">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                            tempor incididunt ut labore dolore magna aliqua.
                                                        </p>
                                                        <div>
                                                            <a href="product-grid-sidebar-left.html"> View all product </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- column 8 -->
                                                <div class="block-content col-lg-8 flex-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/26.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/1.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/25.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/2.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">

                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/9.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/3.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/9.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/24.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/3.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/23.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/4.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">

                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
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

                        <!-- product kitchen -->
                        <div class="section kitchen">
                            <div class="living-room">
                                <div class="container">
                                    <div class="tiva-row-wrap row">
                                        <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                            <div class="grouptab row">
                                                <!-- column 3 -->
                                                <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                    <div class="block-title-content">
                                                        <h2 class="title-block">
                                                            Kitchen
                                                        </h2>
                                                    </div>
                                                    <div class="cate-child-vertical">
                                                        <ul class="d-flex align-items-start flex-column">
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Kitchen Shears</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Colander</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Mixing Bowls</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Grater</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Vegetable Peeler</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Rolling Pin</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Baking Sheet</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Oven Mitts</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Dutch Oven</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Salad Bowl</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                            </li>
                                                            <li class="last float-right">
                                                                <a href="product-grid-sidebar-left.html">View All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- column 9 -->
                                                <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                    <div class="title-tab-content d-flex justify-content-start">
                                                        <ul class="nav nav-tabs">
                                                            <li>
                                                                <a href="#new_kitchen" data-toggle="tab" class="active">New Arrivals</a>
                                                            </li>
                                                            <li>
                                                                <a href="#best_kitchen" data-toggle="tab">Best Sellers</a>
                                                            </li>
                                                            <li>
                                                                <a href="#sale_kitchen" data-toggle="tab">Special Products</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <!-- new kitchen -->
                                                        <div id="new_kitchen" class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/6.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/4.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/11.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-10%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">

                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/16.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/14.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">

                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- best kitchen -->
                                                        <div id="best_kitchen" class="tab-pane fade">
                                                            <div class="category-product-index owl-carousel owl-theme">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/8.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/13.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/4.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/12.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-10%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/13.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/6.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- sale kitchen -->
                                                        <div id="sale_kitchen" class="tab-pane fade">
                                                            <div class="category-product-index owl-carousel owl-theme">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/8.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/11.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/14.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-20%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="img/product/6.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="img/product/16.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-20%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
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

                        <!-- banner -->
                        <div class="container">
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="img/home/effect3.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="img/home/effect4.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- testimonial -->
                            <div class="section testimonial-block col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 ">
                                        <div class="block">
                                            <div class="owl-carousel owl-theme testimonial-type-one">
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">David Jame</h5>
                                                            <p class="box-dress">DESIGNER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">Max Control</h5>
                                                            <p class="box-dress">DEVELOPER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">John Do</h5>
                                                            <p class="box-dress">CSS - HTML</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">Elizabeth Pham</h5>
                                                            <p class="box-dress">DEVELOPER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SHOP THE LOOK -->
                        <div class="section spacing-10 groupbanner-special ">
                            <div class="title-block">
                                <span class="sub-title">shop the lookbook</span>
                                <span>SHOP THE LOOK</span>
                                <span>Our Lookbook 2018
                                    <br> hand-picked arrivals from
                                    <br>the best designer</span>
                            </div>

                            <div class="row">
                                <div class="tiva-lookbook default col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="img/home/home1-tolltip1.jpg" alt="lookbook">

												<div class="item-lookbook item1">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip2.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Lorem ipsum dolor</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £52.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item2">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip1.jpg" alt="contrary-to-popular-belief">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Sed vel malesuada lorem</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £68.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Module Lookbooks -->
                                <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="img/home/home1-tolltip2.jpg" alt="lookbook">

												<div class="item-lookbook item3">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/product/34.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Lorem ipsum dolor sit</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £45.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item4">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip6.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Lorem ipsum dolor</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £21.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item5">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip4.jpg" alt="mug-the-adventure-begins">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Sed vel malesuada lorem</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £11.90
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Module Lookbooks -->
                                <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="img/home/home1-tolltip3.jpg" alt="lookbook">

												<div class="item-lookbook item6">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip4.jpg" alt="mug-the-adventure-begins">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Sed vel malesuada lorem</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £11.90
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item7">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/product/13.jpg" alt="brown-bear-vector-graphics">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Orci varius natoque penatibus</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £9.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item8">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip6.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Etiam congue nisl nec</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £16.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="info-lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Module Lookbooks -->
                                <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="img/home/home1-tolltip4.jpg" alt="lookbook">

												<div class="item-lookbook item9">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip10.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £41.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item10">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip8.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Donec accumsan lectus ut</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £11.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-lookbook item11">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="img/home/icon-tolltip9.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Fusce quis felis libero</a>
                                                                </div>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    £11.00
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="product-detail.html">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="info-lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- recent posts -->
                        <div class="container">
                            <div class="section recent-post">
                                <div class="title-block">RECENT POST</div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-post">
                                            <div class="thumbnail-img">
                                                <a href="blog-detail.html">
                                                    <img src="img/home/home1-post1.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-info">
                                                    <span class="comment">
                                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                        <span>0 Comments</span>
                                                    </span>
                                                    <span class="datetime">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>April 12, 2018</span>
                                                    </span>
                                                </div>
                                                <div class="post-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </div>
                                                <div class="post-desc">
                                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-post">
                                            <div class="thumbnail-img">
                                                <a href="blog-detail.html">
                                                    <img src="img/home/home1-post2.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-info">
                                                    <span class="comment">
                                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                        <span>0 Comments</span>
                                                    </span>
                                                    <span class="datetime">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>April 12, 2018</span>
                                                    </span>
                                                </div>
                                                <div class="post-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </div>
                                                <div class="post-desc">
                                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-post">
                                            <div class="thumbnail-img">
                                                <a href="blog-detail.html">
                                                    <img src="img/home/home1-post3.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-info">
                                                    <span class="comment">
                                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                        <span>0 Comments</span>
                                                    </span>
                                                    <span class="datetime">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>April 12, 2018</span>
                                                    </span>
                                                </div>
                                                <div class="post-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </div>
                                                <div class="post-desc">
                                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- partner -->
                            <div class="section introduct-logo">
                                <div class="row">
                                    <div class="tiva-manufacture  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="block">
                                            <div id="manufacture" class="owl-carousel owl-theme owl-loaded owl-drag">
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="img/home/icon-logo1.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="img/home/icon-logo2.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="img/home/icon-logo3.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="img/home/icon-logo4.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="img/home/icon-logo5.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="img/home/icon-logo6.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="tiva-html col-lg-4 col-md-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img src="img/home/logo.png" alt="img">
                                    </p>
                                    <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#">Meet the teaml</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact our buyers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <p class="img-payment ">
                                        <img class="img-fluid" src="img/home/payment-footer.png" alt="img">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-html col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="title-block">
                                    Contact Us
                                </div>
                                <div class="block-content">
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Address :</span>
                                        </div>
                                        <div class="content-contact address-contact">
                                            <p>123 Suspendis matti, Visaosang Building VST District NY Accums, North American</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Email :</span>
                                        </div>
                                        <div class="content-contact mail-contact">
                                            <p>support@domain.com</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Hotline :</span>
                                        </div>
                                        <div class="content-contact phone-contact">
                                            <p>+0012-345-67890</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>Opening Hours :</span>
                                        </div>
                                        <div class="content-contact hours-contact">
                                            <p>Monday - Sunday / 08.00AM - 19.00</p>
                                            <span>(Except Holidays)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-modules col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="title-block">Newsletter</div>
                                    <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes direct
                                        to your inbox
                                    </div>
                                    <div class="block-newsletter">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary " name="submitNewsletter" type="submit">
                                                        <span>subscribe</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="action" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="social-content">
                                        <div class="title-block">
                                            Follow us on
                                        </div>
                                        <div id="social-block">
                                            <div class="social">
                                                <ul class="list-inline mb-0 justify-content-end">
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="img/home/payment.png" alt="img">
                                        </div>
                                    </div>
                                    <!-- Popup newsletter -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tiva-copyright">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-12 ">
                        <span>
							<a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- menu mobie left -->
    <div class="mobile-top-menu d-md-none">
        <button type="button" class="close" aria-label="Close">
            <i class="zmdi zmdi-close"></i>
        </button>
        <div class="tiva-verticalmenu block" data-count_showmore="17">
            <div class="box-content block-content">
                <div class="verticalmenu" role="navigation">
                    <ul class="menu level1">
                        <li class="item  parent">
                            <a href="#" class="hasicon" title="SIDE TABLE">
                                <img src="img/home/table-lamp.png" alt="img">SIDE TABLE</a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#SIDE-TABLE" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="SIDE-TABLE" aria-expanded="true" role="status">
                                <div class="menu-items">
                                    <ul>
                                        <li class="item">
                                            <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                        </li>
                                        <li class="item  parent-submenu">
                                            <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                            <span class="arrow collapsed" data-toggle="collapse" data-target="#sub-Category" aria-expanded="false" role="status">
                                                <i class="zmdi zmdi-minus"></i>
                                                <i class="zmdi zmdi-plus"></i>
                                            </span>
                                            <div class="subCategory collapse" id="sub-Category" aria-expanded="true" role="status">
                                                <div class="menu-items">
                                                    <ul>
                                                        <li class="item">
                                                            <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#" title="Voluptate">Voluptate</a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#" title="Tongue Est">Tongue Est</a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <a href="#" title="Voluptate">Voluptate</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" title="Tongue Est">Tongue Est</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" title="Venison Andouille">Venison Andouille</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item  parent group">
                            <a href="#" class="hasicon" title="FI">
                                <img src="img/home/fireplace.png" alt="img">FIREPLACE
                            </a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#fi" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="fi" aria-expanded="true" role="status">
                                <div class="item">
                                    <div class="menu-content">
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>DINNING ROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Toshiba</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Samsung</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>BATHROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Toshiba</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Samsung</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier Media</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Gee</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Digimart</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Vitivaa</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sanaky</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sunshine</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>LIVING ROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Media</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Gee</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Digimart</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Vitivaa</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sanaky</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sunshine</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Toshiba</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Samsung</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>BEDROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>KITCHEN</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>Blender</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item group-category-img parent group">
                            <a href="#" class="hasicon" title="TABLE LAMP">
                                <img src="img/home/table-lamp.png" alt="img">TABLE LAMP</a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#table-lamp" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="table-lamp" aria-expanded="true" role="status">
                                <div class="item">
                                    <div class="menu-content">
                                        <div class="col-xs-12">
                                            <span class="menu-title">Coventry dining</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="menu-title">Amara stools</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="menu-title">Kingston dining</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="menu-title">Ellinger dining</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="OTTOMAN">
                                <img src="img/home/ottoman.png" alt="img">OTTOMAN
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="ARMCHAIR">
                                <img src="img/home/armchair.png" alt="img">ARMCHAIR
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CUSHION">
                                <img src="img/home/cushion.png" alt="img">CUSHION
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="COFFEE TABLE">
                                <img src="img/home/coffee_table.png" alt="img">COFFEE TABLE</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="SHELF">
                                <img src="img/home/shelf.png" alt="img">SHELF
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="SOFA">
                                <img src="img/home/sofa.png" alt="img">SOFA
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="DRESSING TABLE">
                                <img src="img/home/dressing.png" alt="img">DRESSING TABLE</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                                <img src="img/home/windown.png" alt="img">WINDOWN CURTAIN</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CHANDELIER">
                                <img src="img/home/chandelier.png" alt="img">CHANDELIER
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CEILING FAN">
                                <img src="img/home/ceiling_fan.png" alt="img">CEILING FAN</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="WARDROBE">
                                <img src="img/home/wardrobe.png" alt="img">WARDROBE
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="FLOOR LAMP">
                                <img src="img/home/floor_lamp.png" alt="img">FLOOR LAMP</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="VASE-FLOWER ">
                                <img src="img/home/vase-flower.png" alt="img">VASE-FLOWER
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED">
                                <img src="img/home/bed.png" alt="img">BED
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED GIRL">
                                <img src="img/home/bed.png" alt="img">BED GIRL</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED BOY">
                                <img src="img/home/bed.png" alt="img">BED BOY</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- menu mobie right -->
    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Menu</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content">
                <nav>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div id="megamenu" class="clearfix">
                        <ul class="menu level1">
                            <li class="item home-page has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#home1" aria-expanded="true" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="index-2.html" title="Home">
                                    <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                                <div class="subCategory collapse" id="home1" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a href="index-2.html" title="Home Page 1">Home Page 1</a>
                                        </li>
                                        <li class="item">
                                            <a href="home2.html" title="Home Page 2">Home Page 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="home3.html" title="Home Page 3">Home Page 3</a>
                                        </li>
                                        <li class="item">
                                            <a href="home4.html" title="Home Page 4">Home Page 4</a>
                                        </li>
                                        <li class="item">
                                            <a href="home5.html" title="Home Page 5">Home Page 5</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#blog" aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Blog">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>Blog</a>

                                <div class="subCategory collapse" id="blog" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a href="blog-list-sidebar-left.html" title="Blog List (Sidebar Left)">Blog List (Sidebar Left)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-list-sidebar-left2.html" title="Blog List (Sidebar Left) 2">Blog List (Sidebar Left) 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-list-sidebar-right.html" title="Category Blog (Right column)">Blog List (Sidebar Right)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-list-no-sidebar.html" title="Blog List (No Sidebar)">Blog List (No Sidebar)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-grid-no-sidebar.html" title="Blog Grid (No Sidebar)">Blog Grid (No Sidebar)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-detail.html" title="Blog Detail">Blog Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item group has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#page" aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Page">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>page</a>
                                <div class="subCategory collapse" id="page" aria-expanded="true" role="status">
                                    <ul class="group-page">
                                        <li class="item container group">
                                            <div>
                                                <ul>
                                                    <li class="item col-md-4 ">
                                                        <span class="menu-title">Category Style</span>
                                                        <div class="menu-content">
                                                            <ul class="col">
                                                                <li>
                                                                    <a href="product-grid-sidebar-left.html">Product Grid (Sidebar Left)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product-grid-sidebar-right.html">Product Grid (Sidebar Right)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product-list-sidebar-left.html">Product List (Sidebar Left) </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item col-md-4 html">
                                                        <span class="menu-title">Product Detail Style</span>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li>
                                                                    <a href="product-detail.html">Product Detail (Sidebar Left)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Product Detail (Sidebar Right)</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item col-md-4 html">
                                                        <span class="menu-title">Bonus Page</span>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li>
                                                                    <a href="404.html">404 Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="about-us.html">About Us Page</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item has-sub">
                                <a href="contact.html" title="Contact us">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <!-- Vendor JS -->
    <!-- Vendor JS -->
<script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('libs/popper/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('libs/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('libs/owl-carousel/owl.carousel.min.js') }}"></script>


    <!-- Template JS -->
    <script src="js/theme.js"></script>
</body>



</html>