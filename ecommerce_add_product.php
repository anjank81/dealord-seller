<?php
session_start();
include_once('vendor/autoload.php');
if (isset($_SESSION["token"]))
{
    function apicall($url)
    {
        $headers = array('Authorization' =>'token c1ad8870c1d535ebbe02e0eb5c9ee3df6a14b312');
        $response = Unirest\Request::get($url, $headers);
        return $response;
    }
$url ="http://api.dealord.com/getcategories?id";
                        $res = apicall($url);
                        $result = $res->body;
                        $main_cat= array();
                        // print_r($result);
                        for ($i=0;$i<sizeof($result);$i++)
                        {
                            $id = $result[$i]->id;
                            $cname = $result[$i]->c_name;
                            $parent_id  =$result[$i]->parent_id;
                            if($parent_id == null)
                            {                        
                                $main_cat[$id] = $cname;
                            }

                        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dealord: Seller Portal | E-commerce Add Product</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="./assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="./assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
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
                        <li class="dropdown active">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Products
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item active" href="ecommerce_add_product.php">Add new product</a>
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
                                    <a class="dropdown-item" href="colors.php">Colors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="href=&quot;javascript:;" data-toggle="dropdown">Payments
                                <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="toastr.php">Toastr Notifications</a>
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
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-5">ADD NEW PRODUCT</h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <div>
                                    <img src="./assets/img/products/27.jpg" alt="image" />
                                </div>
                                <div class="flexbox-b mt-4">
                                    <div class="mr-2">
                                        <img src="./assets/img/products/28.jpg" alt="image" />
                                    </div>
                                    <div class="mr-2">
                                        <img src="./assets/img/products/29.jpg" alt="image" />
                                    </div>
                                    <div class="mr-2">
                                        <img src="./assets/img/products/30.jpg" alt="image" />
                                    </div>
                                    <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form action="addproduct.php" method="post">
                                    <?php
                                    $msg = $_GET['msg']?? '';
                                    if ($msg !=null)
                                    {
                                        echo "<span style='color:red;'><h5>".$msg."</h5></span><hr/>";
                                    }
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-4 form-group mb-4">
                                            <label>Category</label>
                                            <div>
                                                <select class="show-tick form-control" title="Please select" data-style="btn-solid" name="main_category" id="main_category" name="main_category" required>
                                                <option value="">Select Category</option>  
                                                    <?php
                                                    foreach ($main_cat as $key => $value)
                                                    {?>
                                                    <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                                <?php }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 form-group mb-4" id ="sb1">
                                            <label>Sub Category1</label>
                                            <div>
                                                <select class="show-tick form-control" title="Please select" data-style="btn-solid" name="sub_category1" id="sub_category1">
                                                <option value="">Select Sub Category</option>   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 form-group mb-4" id="sb2">
                                            <label>Sub Category2</label>
                                            <div>
                                                <select class="show-tick form-control" title="Please select" data-style="btn-solid" name="sub_category2" id="sub_category2">
                                                <option value="">Select Sub Category</option>   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4" id="p_name">
                                            <label>Product Name</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Enter Product Name" name="p_name" required>
                                        </div>
                                        <div class="col-sm-6 form-group mb-4" id ="sc_id">
                                            <label>SKU</label>
                                            <input class="form-control form-control-solid" type="number" placeholder="SKU Number" name ="sc_id" required >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4" id ="Length_Unit">
                                            <label>Length Unit</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Length Unit" name="Length_Unit" required>
                                        </div>
                                        <div class="col-sm-6 form-group mb-4" id="Weight_unit">
                                                <label>Wieght Unit</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="Weight unit" name="Weight_unit" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4" id ="price">
                                            <label>Price</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Unit Price" name="price" required >
                                        </div>
                                        <div class="col-sm-6 form-group mb-4" id="brand">
                                                <label>Brand</label> 
                                                <input class="form-control form-control-solid" type="text" placeholder="Brand Name" name="brand" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4" id="length">
                                                <label>Length</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="Length" name="length" required>
                                        </div>
                                        <div class="col-sm-6 form-group mb-4" id ="width">
                                            <label>Width</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Width" name="width" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6 form-group mb-4" id="weight">
                                                <label>Height</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="height" name="height" required>
                                    </div>
                                    <div class="col-sm-6 form-group mb-4" id="weight">
                                                <label>Weight</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="Weight" name="weight" required>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group mb-4" id ="color">
                                            <label>Color</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Product color" name="color" required>
                                        </div>
                                        <div class="col-sm-4 form-group mb-4" id="warranty">
                                                <label>Warranty</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="Warranty" name="warranty" required>
                                        </div>
                                        <div class="col-sm-4 form-group mb-4" id="warranty_type">
                                                <label>Warranty type</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="Warranty type" name="warranty_type" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group mb-4" id ="description">
                                            <label>Description</label>
                                            <textarea class="form-control form-control-solid" rows="4" placeholder="Description" name="description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group mb-4" id ="extra_feature">
                                            <label>Extra Features</label>
                                            <textarea class="form-control form-control-solid" rows="4" placeholder="Extra Features" name="extra_feature" ></textarea>
                                        </div>
                                    </div>
                                    <input class="btn btn-primary btn-air mr-2" type="submit" value="Save" />
                                    <input class="btn btn-secondary"type="reset" value="Cancel" />
                                </form>
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
    <script src="./assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });
            $('.tagsinput.form-control-solid').siblings('.bootstrap-tagsinput').addClass('form-control-solid');
        });
    </script>
    <!-- <script>
    function getextrafields(id){
        $.ajax({ url: "getsubcatattr.php",
                data: {id: id},
                type: 'get',
                async: false,
                success:
                function(msg) {
                    console.log(msg);
                        if (typeof(msg) == "string"){
                            
                        }
                        else{
                            $('#Length Unit').hide();
                            $.each(msg, function( index, value ) {
                                if(index == 'Length Unit' )
                                {
                                    index="Length_Unit";
                                }
                                if(index == 'Weight unit' )
                                {
                                    index="Weight_unit";
                                }
                                $('#'+index).show();
                        });
                        } 
                }
                });
    }
    </script> -->
    <script>
        $().ready(function() {
            $('#sb1,#sb2').hide();
            $( "#main_category" ).change(function() {
                var id = $( "#main_category" ).val();
                // $("#country option[value='0']").remove();
                $.ajax({ url: "getsubcat.php",
                data: {id: id},
                type: 'get',
                async: false,
                success:
                function(msg) {
                        if (typeof(msg) == "string"){
                            $('#sb1,#sb2').hide();
                            // getextrafields(id);
                        }
                        else{
                        $('#sb1').show();
                        $('#sub_category1').find('option').remove().end();
                        $('#sub_category1').append('<option value="">Select Sub Category</option>');
                        $('#sub_category1').attr("required","required");
                        $.each(msg, function( index, value ) {
                        $('#sub_category1').append('<option value="'+index+'">'+value+'</option>');
                        });
                        } 
                }
                });
	});
        });
    </script>
    <script>
        $().ready(function() {
            $( "#sub_category1" ).change(function() {
                var id = $( "#sub_category1" ).val();
                $.ajax({ url: "getsubcat.php",
                data: {id: id},
                type: 'get',
                async: false,
                success:
                function(msg) {
                        if (typeof(msg) == "string"){
                            $('#sb2').hide();
                            // getextrafields(id);
                        }
                        else{
                        $('#sb2').show();
                        $('#sub_category2').find('option').remove().end();
                        $('#sub_category2').append('<option value="">Select Sub Category</option>');
                        $('#sub_category2').attr("required","required");
                        $.each(msg, function( index, value ) {
                        $('#sub_category2').append('<option value="'+index+'">'+value+'</option>');
                        });
                        } 
                }
                });
	});
        });
    </script>
    <script>
        $().ready(function() {
            $( "#sub_category2" ).change(function() {
                var id = $( "#sub_category2" ).val();
                $.ajax({ url: "getsubcat.php",
                data: {id: id},
                type: 'get',
                async: false,
                success:
                function(msg) {
                        if (typeof(msg) == "string"){
                            // getextrafields(id);
                        }
                        else{
                        } 
                }
                });
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