<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2019 14:38:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add Expense</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
<div class="notifyMessage">
        <i class="close fa fa-times fa-2x"></i>
        <h4>Title</h4>
        <p>Message</p>
    </div>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <?php include 'header.php';?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include 'sidebar.php';?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Accounts</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add New Expense</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Expense Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Expense</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form customForm">
                            <input type="hidden" name="act" value="addExpense">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Name *</label>
                                    <input name="exp_name" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="exp_name">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>ID No *</label>
                                    <input name="exp_no" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="exp_no">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Expanse Type *</label>
                                    <select name="exp_type" class="select2">
                                        <option value="">Please Select</option>
                                        <option value="1">Salary</option>
                                        <option value="2">Transport</option>
                                        <option value="3">Maintanance</option>
                                        <option value="3">Purchase</option>
                                        <option value="3">Utilities</option>
                                    </select>
                                    <span class="formSpan" id="exp_type">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Amount *</label>
                                    <input name="exp_amount" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="exp_amount">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input name="exp_phone" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="exp_phone">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail Address</label>
                                    <input name="exp_email" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="exp_email">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status</label>
                                    <select name="exp_status" class="select2">
                                        <option value="0">Please Select</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Due</option>
                                        <option value="3">Others</option>
                                    </select>
                                    <span class="formSpan" id="exp_status">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input name="exp_date" type="text" placeholder="dd/mm/yy" class="form-control air-datepicker" data-position="bottom right">
                                    <span class="formSpan" id="exp_date">U</span>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add Expense</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add Expense Area End Here -->
                <?php include 'footer.php';?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- Custom Js -->
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2019 14:38:38 GMT -->
</html>