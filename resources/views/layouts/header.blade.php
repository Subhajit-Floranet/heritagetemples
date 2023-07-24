<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{url('assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{url('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    .sidebar-menu .logo {
    text-align: center;
    font-size: xx-large;
    color: white;
    font-weight: bold;
    }
    </style>
    <!-- modernizr css -->
    <script src="{{url('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                  Customer Service Panel
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                    <ul class="metismenu" id="menu">
                        <li class="active">
                        <a href="{{url('/dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        </li>
                        <!-- <li><a href=""><i class="ti-map-alt"></i> <span>Ticket Raised</span></a></li> -->
                        <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Temple</span></a>
                        <ul class="collapse">
                            <li><a href="{{url('/addtemple  ')}}">Add Tample</a></li>
                            <li><a href="{{url('/AddTempleImage')}}">Add Temple info</a></li>
                            <li><a href="">Close</a></li>
                            <li><a href="">All</a></li>
                        </ul>
                        </li>
                        <li><a href=""><i class="ti-map-alt"></i> <span>User Creation</span></a></li>
                        <li><a href="{{url('/logout')}}"><i class="ti-receipt"></i> <span>Logout</span></a></li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{$user['name']}}<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                               <a class="dropdown-item" href="#">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>