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
    <title>Dealord: Seller Portal | E-commerce Orders list</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="./assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="./assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/dataTables/datatables.min.css" rel="stylesheet" />
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
                        <li class="dropdown active">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Orders
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item active" href="ecommerce_orders_list.html">Orders list</a>
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
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">ORDERS LIST</h5>
                        <div class="flexbox mb-4">
                            <div class="flexbox">
                                <label class="mb-0 mr-2">Type:</label>
                                <select class="selectpicker show-tick form-control" id="type-filter" title="Please select" data-style="btn-solid" data-width="150px">
                                    <option value="">All</option>
                                    <option>Shipped</option>
                                    <option>Completed</option>
                                    <option>Pending</option>
                                    <option>Canceled</option>
                                </select>
                            </div>
                            <div class="input-group-icon input-group-icon-left mr-3">
                                <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
                            </div>
                        </div>
                        <div class="table-responsive row">
                            <table class="table table-bordered table-hover" id="orders-table">
                                <thead class="thead-default thead-lg">
                                    <tr>
                                        <th>#</th>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Payment</th>
                                        <th>Date</th>
                                        <th class="no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1254</a>
                                        </td>
                                        <td>Becky Brooks</td>
                                        <td>$457</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Shipped</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>17.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1253</a>
                                        </td>
                                        <td>Emma Johnson</td>
                                        <td>$1200</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Shipped</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>17.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1252</a>
                                        </td>
                                        <td>Noah Williams</td>
                                        <td>$780</td>
                                        <td>
                                            <span class="badge badge-primary badge-pill">Pending</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>16.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1251</a>
                                        </td>
                                        <td>Sophia Jones</td>
                                        <td>$105</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Completed</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>15.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1250</a>
                                        </td>
                                        <td>Jacob Brown</td>
                                        <td>$40</td>
                                        <td>
                                            <span class="badge badge-primary badge-pill">Pending</span>
                                        </td>
                                        <td>_</td>
                                        <td>12.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1249</a>
                                        </td>
                                        <td>James Davis</td>
                                        <td>$78</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Shipped</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>12.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1248</a>
                                        </td>
                                        <td>Ava Wilson</td>
                                        <td>$1450</td>
                                        <td>
                                            <span class="badge badge-danger badge-pill">Canceled</span>
                                        </td>
                                        <td>_</td>
                                        <td>11.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1247</a>
                                        </td>
                                        <td>Ethan Taylor</td>
                                        <td>$390</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Completed</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>10.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1246</a>
                                        </td>
                                        <td>Emily Thomas</td>
                                        <td>$850</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Completed</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>10.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1245</a>
                                        </td>
                                        <td>Noah Moore</td>
                                        <td>$220</td>
                                        <td>
                                            <span class="badge badge-danger badge-pill">Canceled</span>
                                        </td>
                                        <td>_</td>
                                        <td>09.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1244</a>
                                        </td>
                                        <td>Mia Anderson</td>
                                        <td>$90</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Completed</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>08.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1243</a>
                                        </td>
                                        <td>Amelia Harris</td>
                                        <td>$670</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Completed</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>08.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            <a href="ecommerce_order_details.html">#1242</a>
                                        </td>
                                        <td>Sofia Jackson</td>
                                        <td>$1120</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">Completed</span>
                                        </td>
                                        <td>Paid</td>
                                        <td>07.05.2018</td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="./assets/vendors/dataTables/datatables.min.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#orders-table').DataTable({
                pageLength: 10,
                fixedHeader: true,
                responsive: true,
                "sDom": 'rtip',
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false
                }]
            });

            var table = $('#orders-table').DataTable();
            $('#key-search').on('keyup', function() {
                table.search(this.value).draw();
            });
            $('#type-filter').on('change', function() {
                table.column(4).search($(this).val()).draw();
            });
        });
    </script>
</body>

</html>
<?php
}
else{
    header('location:login.php');
}
?>