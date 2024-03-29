<?php
session_start();
if (isset($_SESSION["token"]))
{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dealord: Seller Portal | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="./assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="./assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <link href="assets/css/themes/green.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body>
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="header-topbar">
                <div class="wrapper d-flex">
                    <div class="d-flex justify-content-between align-items-center flex-1">
                        <!-- START TOP-LEFT TOOLBAR-->
                        <ul class="nav navbar-toolbar">
                            <li class="d-lg-none d-md-block">
                                <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                            </li>
                            <li>
                                <div class="page-brand">
                                    <a class="link" href="index.php">
                                        <span class="brand">DeaLord
                                            <span class="brand-tip"> SELLER</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <!--include menu.pug-->
                            <!--li.d-none-->
                            <!--  a.nav-link.search-toggler.js-search-toggler-->
                            <!--    i.ti-search-->
                            <!--    span Search here...-->
                        </ul>
                        <!-- END TOP-LEFT TOOLBAR-->
                        <!-- START TOP-RIGHT TOOLBAR-->
                        <ul class="nav navbar-toolbar">
                            <!--li.timeout-toggler-->
                            <!--  a.nav-link(data-toggle='modal' data-target='#session-dialog' href='javascript:;').toolbar-icon-->
                            <!--    i.ti-alarm-clock.timeout-toggler-icon.rel-->
                            <!--      span.notify-signal-->
                            <!--include header/inbox.pug-->
                            <li class="dropdown dropdown-notification">
                                <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                    <div class="dropdown-arrow"></div>
                                    <div class="dropdown-header text-center">
                                        <div>
                                            <span class="font-18"><strong>14 New</strong> Notifications</span>
                                        </div>
                                        <a class="text-muted font-13" href="javascript:;">view all</a>
                                    </div>
                                    <div class="p-3">
                                        <ul class="timeline scroller" data-height="320px">
                                            <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                            <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                                                <span>7 new feedback
                                                    <span class="badge badge-warning badge-pill ml-2">important</span>
                                                </span><small class="float-right text-muted">5 mins</small></li>
                                            <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                            <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                            <li class="timeline-item"><i class="ti-user timeline-icon"></i>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                            <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                                                <span>Server Error
                                                    <span class="badge badge-success badge-pill ml-2">resolved</span>
                                                </span><small class="float-right text-muted">2 hrs</small></li>
                                            <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                                                <span>System Warning
                                                    <a class="text-purple ml-2">Check</a>
                                                </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                            <li class="timeline-item"><i class="fa fa-file-excel-o timeline-icon"></i>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                            <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                            <li class="timeline-item"><i class="ti-arrow-circle-up timeline-icon"></i>Production server up<small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                            <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                            <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown dropdown-user">
                                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                                    <span>Super User</span>
                                    <img src="./assets/img/users/admin-image.png" alt="image" />
                                </a>
                                <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                                    <div class="dropdown-arrow"></div>
                                    <div class="dropdown-header">
                                        <div class="admin-avatar">
                                            <img src="./assets/img/users/admin-image.png" alt="image" />
                                        </div>
                                        <div>
                                            <h5 class="font-strong text-white">Super User</h5>
                                            <div>
                                                <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                                <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-menu-features">
                                        <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                                            <span>PROFILE</span>
                                        </a>
                                        <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                                            <span>SUPPORT</span>
                                        </a>
                                        <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                                            <span>SETTINGS</span>
                                        </a>
                                    </div>
                                    <div class="admin-menu-content">
                                        <div class="text-muted mb-2">Your Wallet</div>
                                        <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                            <span class="h1 text-success"><sup>$</sup>12.7k</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <a class="text-muted" href="javascript:;">Earnings history</a>
                                            <a class="d-flex align-items-center" href="logout.php">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link quick-sidebar-toggler">
                                    <span class="ti-align-right"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- END TOP-RIGHT TOOLBAR-->
                        <!-- START SEARCH PANEL-->
                    </div>
                </div>
            </div>
            <div class="top-navbar">
                <div class="wrapper" id="navbar-wrapper">
                    <ul class="nav-menu">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Products
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="ecommerce_add_product.php">Add new product</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ecommerce_products_list.php">Products list</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Inventory
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="colors.html">Colors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Payments
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="toastr.html">Toastr Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Orders
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="ecommerce_orders_list.php">Orders list</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ecommerce_order_details.php">Order details</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="invoice.php">Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Advertising
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="ecommerce_customers.php">Customers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Reports
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="mailbox.php"><i class="navbar-item-icon ti-email"></i>Mailbox</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar.php"><i class="navbar-item-icon ti-calendar"></i>Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">More
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="icons.php"><i class="navbar-item-icon ti-comments-smiley"></i>Icons</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- END HEADER-->
        <div class="wrapper content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="50" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-success">128</h3>
                                    <div class="text-muted">NEW ORDERS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="42" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                    <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-primary">₹ 64342.00</h3>
                                    <div class="text-muted">7 DAYS SALES</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="70" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-pink">210</h3>
                                    <div class="text-muted">FOLLOWERS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="d-flex justify-content-between mb-4">
                                    <div>
                                        <h3 class="m-0">Visitors Analytics</h3>
                                        <div>Your site visitors analytics</div>
                                    </div>
                                    <ul class="nav nav-pills nav-pills-rounded nav-pills-air" id="chart_tabs">
                                        <li class="nav-item ml-1">
                                            <a class="nav-link active" data-toggle="tab" data-id="1" href="javascript:;">This Week</a>
                                        </li>
                                        <li class="nav-item ml-1">
                                            <a class="nav-link" data-toggle="tab" data-id="2" href="javascript:;">Last Week</a>
                                        </li>
                                        <li class="nav-item ml-1">
                                            <a class="nav-link" data-toggle="tab" data-id="3" href="javascript:;">Last Year</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <canvas id="visitors_chart" style="height:260px;"></canvas>
                                </div>
                            </div>
                            <hr>
                            <div class="ibox-body">
                                <div class="row">
                                    <div class="col-6 pl-4">
                                        <h6 class="mb-3">GENDER</h6>
                                        <span class="h2 mr-3"><i class="fa fa-male text-primary h1 mb-0 mr-2"></i>
                                            <span>56<sup>%</sup></span>
                                        </span>
                                        <span class="h2 mr-3"><i class="fa fa-female text-pink h1 mb-0 mr-2"></i>
                                            <span>32<sup>%</sup></span>
                                        </span>
                                        <span class="h2"><i class="fa fa-question text-light h1 mb-0 mr-2"></i>
                                            <span>12<sup>%</sup></span>
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-3">SCREENS</h6>
                                        <span class="h2 mr-3"><i class="ti-desktop text-primary mr-2"></i>
                                            <span>49<sup>%</sup></span>
                                        </span>
                                        <span class="h2 mr-3"><i class="ti-tablet text-pink mr-2"></i>
                                            <span>29<sup>%</sup></span>
                                        </span>
                                        <span class="h2"><i class="ti-mobile text-success mr-2"></i>
                                            <span>22<sup>%</sup></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">VISITORS AGE</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"><i class="la la-upload"></i>Export</a>
                                        <a class="dropdown-item"><i class="la la-file-excel-o"></i>Download</a>
                                        <a class="dropdown-item"><i class="la la-print"></i>Print</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="mb-5">
                                    <div class="flexbox-b mb-2">
                                        <span class="badge-point badge-success mr-2"></span>20-27
                                        <span class="h4 mb-0 ml-4">25%</span>
                                    </div>
                                    <div class="flexbox-b mb-2">
                                        <span class="badge-point badge-primary mr-2"></span>35-50
                                        <span class="h4 mb-0 ml-4">22%</span>
                                    </div>
                                    <div class="flexbox-b mb-2">
                                        <span class="badge-point badge-pink mr-2"></span>27-35
                                        <span class="h4 mb-0 ml-4">17%</span>
                                    </div>
                                </div>
                                <div class="ibox-fullwidth-block">
                                    <canvas id="age_chart" style="height:260px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox ibox-fullheight">
                                    <div class="ibox-head">
                                        <div class="ibox-title">VISITORS SCREENS</div>
                                        <div class="ibox-tools">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-desktop"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox-body">
                                        <div>
                                            <canvas id="screens_chart" style="height:260px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox ibox-fullheight">
                                    <div class="ibox-head">
                                        <div class="ibox-title">VISITORS BROWSERS</div>
                                    </div>
                                    <div class="ibox-body">
                                        <ul class="list-group list-group-divider list-group-full">
                                            <li class="list-group-item flexbox">
                                                <span class="flexbox"><i class="la la-chrome mr-3 font-40"></i>Google Chrome</span>
                                                <span class="badge badge-success badge-pill">34.7%</span>
                                            </li>
                                            <li class="list-group-item flexbox">
                                                <span class="flexbox"><i class="la la-firefox mr-3 font-40"></i>Mozila Firefox</span>
                                                <span class="badge badge-primary badge-pill">34.7%</span>
                                            </li>
                                            <li class="list-group-item flexbox">
                                                <span class="flexbox"><i class="la la-opera mr-3 font-40"></i>Opera</span>
                                                <span class="badge badge-pink badge-pill">34.7%</span>
                                            </li>
                                            <li class="list-group-item flexbox">
                                                <span class="flexbox"><i class="la la-internet-explorer mr-3 font-40"></i>Internet Explorer</span>
                                                <span class="badge badge-info badge-pill">34.7%</span>
                                            </li>
                                            <li class="list-group-item flexbox">
                                                <span class="flexbox"><i class="la la-safari mr-3 font-40"></i>Safari</span>
                                                <span class="badge badge-warning badge-pill">34.7%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="flexbox mb-5">
                                    <div class="flexbox">
                                        <span class="mr-4" style="width:60px;height:60px;background-color:#e7e9f6;color:#5c6bc0;display:inline-flex;align-items:center;justify-content:center;font-size:35px;"><i class="ti-files"></i></span>
                                        <div>
                                            <h5 class="font-strong">TOP 5 PAGES</h5>
                                            <div class="text-light">Top 5 visited pages on your site.</div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills nav-pills-rounded nav-pills-air">
                                        <li class="nav-item ml-1">
                                            <a class="nav-link active" href="#tab_1" data-toggle="tab">This Week</a>
                                        </li>
                                        <li class="nav-item ml-1">
                                            <a class="nav-link" href="#tab_2" data-toggle="tab">Last Week</a>
                                        </li>
                                        <li class="nav-item ml-1">
                                            <a class="nav-link" href="#tab_3" data-toggle="tab">This Month</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab_1">
                                        <div class="flexbox">
                                            <div class="text-center">
                                                <div class="mb-3">Blog Catalog</div>
                                                <div class="easypie" data-percent="44" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">44<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Shop Catalog</div>
                                                <div class="easypie" data-percent="28" data-bar-color="#18c5a9" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">28<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Profile</div>
                                                <div class="easypie" data-percent="9" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">9<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Main Page</div>
                                                <div class="easypie" data-percent="13" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">13<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Profile</div>
                                                <div class="easypie" data-percent="6" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">6<sup>%</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_2">
                                        <div class="flexbox">
                                            <div class="text-center">
                                                <div class="mb-3">Blog Catalog</div>
                                                <div class="easypie" data-percent="33" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">33<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Shop Catalog</div>
                                                <div class="easypie" data-percent="42" data-bar-color="#18c5a9" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">42<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Profile</div>
                                                <div class="easypie" data-percent="8" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">8<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Main Page</div>
                                                <div class="easypie" data-percent="11" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">11<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Profile</div>
                                                <div class="easypie" data-percent="6" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">6<sup>%</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3">
                                        <div class="flexbox">
                                            <div class="text-center">
                                                <div class="mb-3">Blog Catalog</div>
                                                <div class="easypie" data-percent="41" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">41<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Shop Catalog</div>
                                                <div class="easypie" data-percent="32" data-bar-color="#18c5a9" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">32<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Profile</div>
                                                <div class="easypie" data-percent="10" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">10<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Main Page</div>
                                                <div class="easypie" data-percent="12" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">12<sup>%</sup></span>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="mb-3">Profile</div>
                                                <div class="easypie" data-percent="5" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                    <span class="easypie-data h3 font-strong">5<sup>%</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">NEW CUSTOMERS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-user"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                                        <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                        <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider mr-2 scroller" data-height="580px">
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u8.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Lynn Weaver</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u6.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Connor Perez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u11.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Tyrone Carroll</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u10.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Stella Obrien</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u2.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Becky Brooks</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u5.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Bob Gonzalez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--+panel('VISITORS ANALYTICS')(tools={'menu':1}, boxClass='ibox-fullheight')-->
                <!--  #world-map(style='height: 400px')-->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">SUPPORT TICKETS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle font-18" data-toggle="dropdown"><i class="ti-ticket"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                                        <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                        <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider scroller mr-2" data-height="470px">
                                    <li class="media">
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">How to install new Adminca</a>
                                                </h5>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                                <div class="d-flex align-items-center font-13">
                                                    <img class="img-circle mr-2" src="./assets/img/users/u11.jpg" alt="image" width="22" />
                                                    <a class="mr-2 text-success" href="javascript:;">Tyrone Carroll</a>
                                                    <span class="text-muted">18 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <span class="badge badge-primary badge-pill mb-2">Open</span>
                                                <div><small class="text-muted font-12"><i class="fa fa-reply mr-2"></i>2 reply</small></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">How to compile SaSS</a>
                                                </h5>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                                <div class="d-flex align-items-center font-13">
                                                    <img class="img-circle mr-2" src="./assets/img/users/u10.jpg" alt="image" width="22" />
                                                    <a class="mr-2 text-success" href="javascript:;">Stella Obrien</a>
                                                    <span class="text-muted">45 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <span class="badge badge-success badge-pill mb-2">Pending</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">I need help to update bower</a>
                                                </h5>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                                <div class="d-flex align-items-center font-13">
                                                    <img class="img-circle mr-2" src="./assets/img/users/u6.jpg" alt="image" width="22" />
                                                    <a class="mr-2 text-success" href="javascript:;">Connor Perez</a>
                                                    <span class="text-muted">1 hrs ago</span>
                                                </div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <span class="badge badge-primary badge-pill mb-2">In Progress</span>
                                                <div><small class="text-muted font-12"><i class="fa fa-reply mr-2"></i>2 reply</small></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">IE7 problem</a>
                                                </h5>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                                <div class="d-flex align-items-center font-13">
                                                    <img class="img-circle mr-2" src="./assets/img/users/u2.jpg" alt="image" width="22" />
                                                    <a class="mr-2 text-success" href="javascript:;">Becky Brooks</a>
                                                    <span class="text-muted">2 hrs ago</span>
                                                </div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <span class="badge badge-success badge-pill mb-2">Pending</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">I need help to install Adminca Angular</a>
                                                </h5>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                                <div class="d-flex align-items-center font-13">
                                                    <img class="img-circle mr-2" src="./assets/img/users/u5.jpg" alt="image" width="22" />
                                                    <a class="mr-2 text-success" href="javascript:;">Bob Gonzalez</a>
                                                    <span class="text-muted">2 days ago</span>
                                                </div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <span class="badge badge-secondary badge-pill mb-2">Closed</span>
                                                <div><small class="text-muted font-12"><i class="fa fa-reply mr-2"></i>3 reply</small></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">LOGS TIMELINE</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"><i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"><i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"><i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="timeline scroller" data-height="470px">
                                    <li class="timeline-item">
                                        <span class="timeline-point"></span>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-warning"></span>
                                        <span>7 new feedback
                                            <span class="badge badge-warning badge-pill ml-2">important</span>
                                        </span><small class="float-right text-muted">5 mins</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-primary"></span>
                                        <span class="flexbox">25 new orders sent<i class="la la-truck font-16 ml-2 text-primary"></i></span><small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point"></span>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-warning"></span>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point"></span>
                                        <span>Server Error
                                            <span class="badge badge-success badge-pill ml-2">resolved</span>
                                        </span><small class="float-right text-muted">2 hrs</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-primary"></span>
                                        <span>System Warning
                                            <a class="text-primary ml-2">Check</a>
                                        </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-warning"></span>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-primary"></span>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point"></span>
                                        <span class="flexbox">Production server up<i class="la la-arrow-circle-up font-18 ml-2 text-success"></i></span><small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point"></span>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-warning"></span>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">
                                    <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-email"></i></span>Email distribution</div>
                            </div>
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div class="flexbox">
                                        <span class="flexbox mr-3">
                                            <span class="mr-2 text-muted">Sent</span>
                                            <span class="h3 mb-0 text-primary font-strong">310</span>
                                        </span>
                                        <span class="flexbox">
                                            <span class="mr-2 text-muted">Queue</span>
                                            <span class="h3 mb-0 text-pink font-strong">105</span>
                                        </span>
                                    </div>
                                    <a class="flexbox" href="javascript:;" target="_blank">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                                </div>
                                <div class="ibox-fullwidth-block">
                                    <table class="table">
                                        <thead class="thead-default thead-lg">
                                            <tr>
                                                <th class="pl-4">Subject</th>
                                                <th>Quantity</th>
                                                <th>Reference</th>
                                                <th class="pr-4">Percent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pl-4">
                                                    <div class="flexbox-b">
                                                        <span class="btn-icon-only btn-primary font-20 mr-3">AC</span>
                                                        <div>
                                                            <h6 class="mb-1">Try New version of Adminca</h6>
                                                            <div>
                                                                <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-light mb-0">1400</h4>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-primary mb-0">820</h4>
                                                </td>
                                                <td class="pr-4">
                                                    <div class="easypie" data-percent="59" data-bar-color="#5c6bc0" data-size="56" data-line-width="3">
                                                        <span class="easypie-data h5 font-strong">59%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <div class="flexbox-b">
                                                        <span class="btn-icon-only btn-pink mr-3"><i class="ti-gift font-20"></i></span>
                                                        <div>
                                                            <h6 class="mb-1">Adminca Big Bundle 6 in 1</h6>
                                                            <div>
                                                                <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-light mb-0">1250</h4>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-pink mb-0">575</h4>
                                                </td>
                                                <td class="pr-4">
                                                    <div class="easypie" data-percent="46" data-bar-color="#ff4081" data-size="56" data-line-width="3">
                                                        <span class="easypie-data h5 font-strong">46%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <div class="flexbox-b">
                                                        <span class="btn-icon-only btn-success font-20 mr-3">LV</span>
                                                        <div>
                                                            <h6 class="mb-1">Adminca - Save your time, choose the best</h6>
                                                            <div>
                                                                <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-light mb-0">1320</h4>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-success mb-0">554</h4>
                                                </td>
                                                <td class="pr-4">
                                                    <div class="easypie" data-percent="42" data-bar-color="#18c5a9" data-size="56" data-line-width="3">
                                                        <span class="easypie-data h5 font-strong">42%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <div class="flexbox-b">
                                                        <span class="btn-icon-only btn-warning mr-3"><i class="ti-support font-20"></i></span>
                                                        <div>
                                                            <h6 class="mb-1">High Quality Support & Easy Code</h6>
                                                            <div>
                                                                <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-light mb-0">870</h4>
                                                </td>
                                                <td>
                                                    <h4 class="font-strong text-warning mb-0">478</h4>
                                                </td>
                                                <td class="pr-4">
                                                    <div class="easypie" data-percent="56" data-bar-color="#f39c12" data-size="56" data-line-width="3">
                                                        <span class="easypie-data h5 font-strong">56%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">TASKS</div>
                                <div class="ibox-tools">
                                    <a class="font-18"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="list-group list-group-divider list-group-full tasks-list">
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox" checked="">
                                                <span class="input-span"></span>
                                                <span class="task-title">Make Adminca the best and the most easy admin template</span>
                                            </label>
                                        </div>
                                        <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                                <span class="task-title">Create Financial Report</span>
                                            </label>
                                        </div>
                                        <div class="task-data"><small class="text-muted">No due date</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox" checked="">
                                                <span class="input-span"></span>
                                                <span class="task-title">Meeting with Ann</span>
                                            </label>
                                            <span class="badge badge-warning ml-1"><i class="ti-alarm-clock"></i> 1 hrs</span>
                                        </div>
                                        <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                                <span class="task-title">Edit the blog post</span>
                                            </label>
                                        </div>
                                        <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                                <span class="task-title">Send photos to Jack</span>
                                            </label>
                                            <span class="badge badge-success ml-1">Today</span>
                                        </div>
                                        <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                                <span class="task-title">Send Financial Reports</span>
                                            </label>
                                            <span class="badge badge-danger ml-1">Important</span>
                                        </div>
                                        <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-item">
                                        <div>
                                            <label class="checkbox checkbox-grey checkbox-success">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                                <span class="task-title">Send message to Bob</span>
                                            </label>
                                        </div>
                                        <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                        <div class="task-actions">
                                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                                <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2019 ©<b> Dealord</b> - Jatin Kaushik</div>
                <div>
                    <a class="px-3 pl-4" href="#" target="_blank"></a>
                    <a class="px-3" href="http://jatinkaushik.com" target="_blank">Jatin Kaushik</a>
                </div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!--include blocks/ex/search-form-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!--include blocks/ex/timeout-modal-->
    <!--include blocks/ex/quick-sidebar-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="./assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="./assets/vendors/toastr/toastr.min.js"></script>
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="./assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="./assets/js/scripts/dashboard_visitors.js"></script>
</body>

</html>
<?php
}
else{
    header('location:login.php');
}
?>