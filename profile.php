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
    <title>Dealord: Seller Portal | Profile</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="./assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="./assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
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
            <div class="page-header">
                <div class="ibox flex-1">
                    <div class="ibox-body">
                        <div class="flexbox">
                            <div class="flexbox-b">
                                <div class="ml-5 mr-5">
                                    <img class="img-circle" src="./assets/img/users/u8.jpg" alt="image" width="110" />
                                </div>
                                <div>
                                    <h4>Lynn Weaver</h4>
                                    <div class="text-muted font-13 mb-3">
                                        <span class="mr-3"><i class="ti-location-pin mr-2"></i>New York, USA</span>
                                        <span><i class="ti-calendar mr-2"></i>12.04.2018</span>
                                    </div>
                                    <div>
                                        <span class="mr-3">
                                            <span class="badge badge-primary badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-briefcase"></i></span>Partner</span>
                                        <span>
                                            <span class="badge badge-pink badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-cup"></i></span>Vip Status</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-flex">
                                <div class="px-4 text-center">
                                    <div class="text-muted font-13">ARTICLES</div>
                                    <div class="h2 mt-2">134</div>
                                </div>
                                <div class="px-4 text-center">
                                    <div class="text-muted font-13">FOLLOWERS</div>
                                    <div class="h2 mt-2">540</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs tabs-line m-0 pl-5 pr-3">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Activity</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ibox">
                            <div class="ibox-body">
                                <h5 class="font-strong mb-4">GENERAL INFORMATION</h5>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">First Name:</div>
                                    <div class="col-6">Lynn</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">Last Name:</div>
                                    <div class="col-6">Weaver</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">Age:</div>
                                    <div class="col-6">26</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">Position:</div>
                                    <div class="col-6">Web Designer</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">City:</div>
                                    <div class="col-6">New York, USA</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">Address:</div>
                                    <div class="col-6">228 Park Ave Str.</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">Phone:</div>
                                    <div class="col-6">+1-202-555-0134</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-muted">Email:</div>
                                    <div class="col-6">lweaver@gmail.com</div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <h5 class="font-strong mb-4">SOCIAL ACCOUNTS</h5>
                                <div class="flexbox-b mb-3">
                                    <span class="btn-soc-facebook badge badge-circle mr-3"><i class="fa fa-facebook"></i></span>
                                    <a class="text-primary" href="javascript:;">example.com/lynnweaver</a>
                                </div>
                                <div class="flexbox-b mb-3">
                                    <span class="btn-soc-twitter badge badge-circle mr-3"><i class="fa fa-twitter"></i></span>
                                    <a class="text-primary" href="javascript:;">example.com/lynnweaver</a>
                                </div>
                                <div class="flexbox-b mb-3">
                                    <span class="btn-soc-pinterest badge badge-circle mr-3"><i class="fa fa-pinterest-p"></i></span>
                                    <a class="text-primary" href="javascript:;">example.com/lynnweaver</a>
                                </div>
                                <div class="flexbox-b mb-3">
                                    <span class="btn-soc-linkedin badge badge-circle mr-3"><i class="fa fa-linkedin"></i></span>
                                    <a class="text-primary" href="javascript:;">example.com/lynnweaver</a>
                                </div>
                                <div class="flexbox-b mb-3">
                                    <span class="btn-soc-dribbble badge badge-circle mr-3"><i class="fa fa-dribbble"></i></span>
                                    <a class="text-primary" href="javascript:;">example.com/lynnweaver</a>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <h5 class="font-strong mb-4">FOLLOWERS</h5>
                                <ul class="media-list media-list-divider mr-2">
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u6.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Connor Perez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u11.jpg" alt="image" width="54" />
                                        </a>
                                        <div class="media-body d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="media-heading">Tyrone Carroll</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                            <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
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
                    <div class="col-lg-7">
                        <div class="ibox">
                            <div class="ibox-body">
                                <h5 class="font-strong mb-4">BIOGRAPHY</h5>
                                <p>Lorem Ipsum Aliqua id consequat laborum incididunt adipiscing ut consectetur dolor voluptate non est ex dolore voluptate fugiat adipiscing qui deserunt nisi magna irure tempor non cupidatat amet fugiat est ad sint adipiscing
                                    est officia cillum consectetur reprehenderit non.</p>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <h5 class="font-strong mb-4">PROJECTS</h5>
                                <div class="flexbox-b mb-4">
                                    <span class="btn-icon-only btn-pink font-20 mr-3">AC</span>
                                    <div class="flex-1">
                                        <div class="font-strong font-16">ADMINCA<small class="text-muted float-right">12.07.2018</small></div>
                                        <div class="text-muted">Bootstrap Admin Template</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 flexbox-b"><i class="la la-calendar-check-o font-26 text-light mr-3"></i>
                                        <div class="flex-1">
                                            <div>
                                                <span class="text-light mr-3">Tasks:</span>13 / 25</div>
                                            <div class="progress mt-1">
                                                <div class="progress-bar" role="progressbar" style="width:52%; height:5px;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 flexbox-b"><i class="la la-hourglass-1 font-26 text-light mr-3"></i>
                                        <div class="flex-1">
                                            <div>
                                                <span class="text-light mr-3">Expiration:</span>25.04</div>
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-success" role="progressbar" style="width:67%; height:5px;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <h5 class="font-strong mb-4">ACTIVITY</h5>
                                <ul class="timeline">
                                    <li class="timeline-item">
                                        <span class="timeline-point"></span>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-warning"></span>
                                        <span>7 new feedback
                                            <span class="badge badge-warning badge-pill ml-2">important</span>
                                        </span><small class="float-right text-muted">5 mins</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-purple"></span>
                                        <span class="flexbox">25 new orders sent<i class="la la-truck font-16 ml-2 text-purple"></i></span><small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
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
                                        <span class="timeline-point bg-purple"></span>
                                        <span>System Warning
                                            <a class="text-purple ml-2">Check</a>
                                        </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-warning"></span>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                    <li class="timeline-item">
                                        <span class="timeline-point bg-purple"></span>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
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
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
</body>

</html>
<?php
}
else{
    header('location:login.php');
}
?>