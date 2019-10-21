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
    <title>Dealord: Seller Portal | E-commerce Dashboard</title>
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
                                    <a class="link" href="index.html">
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
                                            <a class="d-flex align-items-center" href="javascript:;">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
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
                                    <a class="dropdown-item" href="ecommerce_add_product.html">Add new product</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ecommerce_products_list.html">Products list</a>
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
                                    <a class="dropdown-item" href="ecommerce_orders_list.html">Orders list</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ecommerce_order_details.html">Order details</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="invoice.html">Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Advertising
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="ecommerce_customers.html">Customers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Reports
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="mailbox.html"><i class="navbar-item-icon ti-email"></i>Mailbox</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar.html"><i class="navbar-item-icon ti-calendar"></i>Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">More
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="icons.html"><i class="navbar-item-icon ti-comments-smiley"></i>Icons</a>
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
                                <div class="easypie mr-4" data-percent="73" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-success" style="font-size:28px;"><i class="ti-shopping-cart"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-success">720</h3>
                                    <div class="text-muted">TODAY'S ORDERS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="42" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-primary" style="font-size:32px;"><i class="la la-money"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-primary">$5800</h3>
                                    <div class="text-muted">TODAY'S PROFIT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="70" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-users"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-pink">1250</h3>
                                    <div class="text-muted">TODAY'S Cust</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-body">
                                <div class="d-flex justify-content-between mb-4">
                                    <div>
                                        <h3 class="m-0">Sales Analytics</h3>
                                        <div>Your shop sales analytics</div>
                                    </div>
                                    <ul class="nav nav-pills nav-pills-rounded nav-pills-air" id="sales_tabs">
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
                                    <canvas id="sales_chart_1" style="height:260px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="ibox ibox-fullheight" style="min-height:400px;">
                            <div class="ibox-head">
                                <div>
                                    <div class="ibox-title">Weekly Profit</div><small class="text-lighter">24.02 - 24.09</small></div>
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
                                <div class="h1 mt-4">$32,400<sup>.60</sup><i class="ti-stats-up float-right text-success" style="font-size:40px;"></i></div>
                                <div class="text-lighter">26% Higher then last week</div>
                                <div class="abs-bottom">
                                    <canvas id="revenue_chart" style="height:220px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">LATEST ORDERS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div class="flexbox">
                                        <span class="flexbox mr-3">
                                            <span class="mr-2 text-muted">Paid</span>
                                            <span class="h3 mb-0 text-primary font-strong">310</span>
                                        </span>
                                        <span class="flexbox">
                                            <span class="mr-2 text-muted">Unpaid</span>
                                            <span class="h3 mb-0 text-pink font-strong">105</span>
                                        </span>
                                    </div>
                                    <a class="flexbox" href="ecommerce_orders_list.html" target="_blank">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                                </div>
                                <div class="ibox-fullwidth-block">
                                    <table class="table table-hover">
                                        <thead class="thead-default thead-lg">
                                            <tr>
                                                <th class="pl-4">Order ID</th>
                                                <th>Customer</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th class="pr-4" style="width:91px;">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#1254</a>
                                                </td>
                                                <td>Becky Brooks</td>
                                                <td>$457.00</td>
                                                <td>
                                                    <span class="badge badge-success badge-pill">Shipped</span>
                                                </td>
                                                <td class="pr-4">17.05.2018</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#1253</a>
                                                </td>
                                                <td>Emma Johnson</td>
                                                <td>$1200.00</td>
                                                <td>
                                                    <span class="badge badge-success badge-pill">Shipped</span>
                                                </td>
                                                <td class="pr-4">17.05.2018</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#1252</a>
                                                </td>
                                                <td>Noah Williams</td>
                                                <td>$780.00</td>
                                                <td>
                                                    <span class="badge badge-primary badge-pill">Pending</span>
                                                </td>
                                                <td class="pr-4">17.05.2018</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#1251</a>
                                                </td>
                                                <td>Sophia Jones</td>
                                                <td>$105.60</td>
                                                <td>
                                                    <span class="badge badge-success badge-pill">Completed</span>
                                                </td>
                                                <td class="pr-4">17.05.2018</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#1250</a>
                                                </td>
                                                <td>Jacob Brown</td>
                                                <td>$40.00</td>
                                                <td>
                                                    <span class="badge badge-primary badge-pill">Pending</span>
                                                </td>
                                                <td class="pr-4">17.05.2018</td>
                                            </tr>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#1249</a>
                                                </td>
                                                <td>James Davis</td>
                                                <td>$78.00</td>
                                                <td>
                                                    <span class="badge badge-danger badge-pill">Canceled</span>
                                                </td>
                                                <td class="pr-4">17.05.2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">PAYMENT SYSTEMS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider">
                                    <li class="media">
                                        <div class="media-img">
                                            <img src="./assets/img/logos/payment/visa.png" alt="image" width="60" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">Visa card
                                                <h4 class="font-strong float-right text-right"><sup>$</sup>1100</h4>
                                            </div>
                                            <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-img">
                                            <img src="./assets/img/logos/payment/paypal.png" alt="image" width="60" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">PayPal
                                                <h4 class="font-strong float-right text-right"><sup>$</sup>985</h4>
                                            </div>
                                            <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-img">
                                            <img src="./assets/img/logos/payment/mastercard.png" alt="image" width="60" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">MasterCard
                                                <h4 class="font-strong float-right text-right"><sup>$</sup>850</h4>
                                            </div>
                                            <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-img">
                                            <img src="./assets/img/logos/payment/jcb.png" alt="image" width="60" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">JCB
                                                <h4 class="font-strong float-right text-right"><sup>$</sup>690</h4>
                                            </div>
                                            <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-img">
                                            <img src="./assets/img/logos/payment/eps.png" alt="image" width="60" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">EPS
                                                <h4 class="font-strong float-right text-right"><sup>$</sup>520</h4>
                                            </div>
                                            <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">BEST SELLERS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider">
                                    <li class="media">
                                        <a class="media-img" href="javascript:;">
                                            <img src="./assets/img/products/01.jpg" alt="image" height="100" />
                                        </a>
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">Product name</a>
                                                </h5>
                                                <div class="h4 text-success">$25</div>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                                <div class="font-13">
                                                    <span class="mr-4">Author:
                                                        <a class="text-success" href="javascript:;">@Creative</a>
                                                    </span>
                                                    <span class="text-light mr-4"><i class="la la-heart-o mr-2 font-16"></i>4.8</span><i class="la la-truck font-16 text-light" data-toggle="tooltip" data-original-title="Delivery"></i></div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <h3 class="mb-1 font-strong text-success"><sup>$</sup>7800</h3>
                                                <div class="text-muted">312 sales</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="media-img" href="javascript:;">
                                            <img src="./assets/img/products/02.jpg" alt="image" height="100" />
                                        </a>
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">Product name</a>
                                                </h5>
                                                <div class="mb-2">
                                                    <span class="h4 text-success mr-2">$28</span>
                                                    <span class="text-muted" style="text-decoration:line-through;">$36</span>
                                                </div>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                                <div class="font-13">
                                                    <span class="mr-4">Author:
                                                        <a class="text-success" href="javascript:;">@Creative</a>
                                                    </span>
                                                    <span class="text-light mr-4"><i class="la la-heart-o mr-2 font-16"></i>4.7</span>
                                                    <span class="text-light mr-4" data-toggle="tooltip" data-original-title="Discount 30%"><i class="la la-tags mr-2 font-16"></i>30%</span><i class="la la-truck font-16 text-light" data-toggle="tooltip" data-original-title="Delivery"></i></div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <h3 class="mb-1 font-strong text-success"><sup>$</sup>7560</h3>
                                                <div class="text-muted">270 sales</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="media-img" href="javascript:;">
                                            <img src="./assets/img/products/03.jpg" alt="image" height="100" />
                                        </a>
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;">Product name</a>
                                                </h5>
                                                <div class="mb-2">
                                                    <span class="h4 text-success mr-2">$28</span>
                                                    <span class="text-muted" style="text-decoration:line-through;">$35</span>
                                                </div>
                                                <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                                <div class="font-13">
                                                    <span class="mr-4">Author:
                                                        <a class="text-success" href="javascript:;">@Creative</a>
                                                    </span>
                                                    <span class="text-light mr-4"><i class="la la-heart-o mr-2 font-16"></i>4.5</span>
                                                    <span class="text-light" data-toggle="tooltip" data-original-title="Discount 25%"><i class="la la-tags mr-2 font-16"></i>25%</span>
                                                </div>
                                            </div>
                                            <div class="text-right" style="width:100px;">
                                                <h3 class="mb-1 font-strong text-success"><sup>$</sup>6916</h3>
                                                <div class="text-muted">247 sales</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">POPULAR CATEGORIES</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider">
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading">TV & Video</div>
                                            <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+1200</h4>
                                    </li>
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading">Health & Beauty</div>
                                            <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+1005</h4>
                                    </li>
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading">Computers & Tablets</div>
                                            <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+880</h4>
                                    </li>
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading">Jewelry and Watches</div>
                                            <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+725</h4>
                                    </li>
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading">Handbags & Purses</div>
                                            <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+510</h4>
                                    </li>
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading">Cameras & Photo</div>
                                            <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+323</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox ibox-fullheight">
                    <div class="ibox-head">
                        <div class="ibox-title">TOP COUNTRIES SALES</div>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div id="world-map" style="height: 400px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ibox">
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
                    <div class="col-xl-4">
                        <div class="ibox">
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
    <script src="./assets/js/scripts/dashboard_ecommerce.js"></script>
</body>

</html>
<?php
}
else{
    header('location:login.php');
}
?>
