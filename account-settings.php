<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Purple Softwares</title>
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
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
      <?php include 'header.php'?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include 'sidebar.php'?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Account Setting</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Setting</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Account Settings Area Start Here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New User</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>
        
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="new-added-form">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>First Name :</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Last Name :</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>User Type :</label>
                                            <select class="select2">
                                                <option value="">Please Select</option>
                                                <option value="1">Administrator</option>
                                                <option value="2">Teacher</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Gender :</label>
                                            <select class="select2">
                                                <option value="">Please Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Date Of Birth :</label>
                                            <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                                data-position='bottom right'>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Religion :</label>
                                            <select class="select2">
                                                <option value="">Please Select</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Christian</option>
                                                <option value="3">Traditionalist</option>
                                                <option value="4">Buddhish</option>
                                                <option value="5">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Joining Date :</label>
                                            <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                                data-position='bottom right'>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>E-Mail</label>
                                            <input type="email" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Subject :</label>
                                            <select class="select2">
                                                <option value="">Please Select</option>
                                                <option value="1">Mathmetics</option>
                                                <option value="2">English</option>
                                                <option value="3">Citizenship Education</option>
                                                <option value="4">Infor and Comm Tech</option>
                                                <option value="5">Science</option>
                                                <option value="6">Creative Art</option>
                                                <option value="7">Social Studies</option>
                                                <option value="8">Basic Design Tech</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Class :</label>
                                            <select class="select2">
                                                <option value="">Please Select Class</option>
                                                <option value="1">Nursery</option>
                                                <option value="2">KG</option>
                                                <option value="3">One</option>
                                                <option value="4">Two</option>
                                                <option value="5">Three</option>
                                                <option value="6">Four</option>
                                                <option value="7">Five</option>
                                                <option value="8">Six</option>
                                                <option value="9">JHS 1</option>
                                                <option value="10">JHS 2</option>
                                                <option value="11">JHS 3</option>
                                            </select>
                                        </div>                                                           
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Phone :</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-lg-6 col-12 form-group">
                                            <label>Address :</label>
                                            <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                                rows="4"></textarea>
                                        </div> 
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-4-xxxl col-xl-5">
                        <div class="card account-settings-box height-auto">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-20">
                                    <div class="item-title">
                                        <h3>All User</h3>
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
                                <div class="all-user-box">
                                    <div class="media media-none--xs active">
                                        <div class="item-img">
                                            <img src="img/figure/user1.jpg" class="media-img-auto" alt="user">
                                        </div>
                                        <div class="media-body space-md">
                                            <h5 class="item-title">Steven Johnson</h5>
                                            <div class="item-subtitle">Super Admin</div>
                                        </div>
                                    </div>
                                    <div class="media media-none--xs">
                                        <div class="item-img">
                                            <img src="img/figure/user2.jpg" class="media-img-auto" alt="user">
                                        </div>
                                        <div class="media-body space-md">
                                            <h5 class="item-title">Maria Jane</h5>
                                            <div class="item-subtitle">Super Admin</div>
                                        </div>
                                    </div>
                                    <div class="media media-none--xs">
                                        <div class="item-img">
                                            <img src="img/figure/user3.jpg" class="media-img-auto" alt="user">
                                        </div>
                                        <div class="media-body space-md">
                                            <h5 class="item-title">Andrew Walles</h5>
                                            <div class="item-subtitle">Super Admin</div>
                                        </div>
                                    </div>
                                    <div class="media media-none--xs">
                                        <div class="item-img">
                                            <img src="img/figure/user4.jpg" class="media-img-auto" alt="user">
                                        </div>
                                        <div class="media-body space-md">
                                            <h5 class="item-title">Walter Emma</h5>
                                            <div class="item-subtitle">Super Admin</div>
                                        </div>
                                    </div>
                                    <div class="media media-none--xs">
                                        <div class="item-img">
                                            <img src="img/figure/user5.jpg" class="media-img-auto" alt="user">
                                        </div>
                                        <div class="media-body space-md">
                                            <h5 class="item-title">Stuart Johnson</h5>
                                            <div class="item-subtitle">Super Admin</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-8-xxxl col-xl-7">
                        <div class="card account-settings-box">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-20">
                                    <div class="item-title">
                                        <h3>User Details</h3>
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
                                <div class="user-details-box">
                                    <div class="item-img">
                                        <img src="img/figure/user.jpg" alt="user">
                                    </div>
                                    <div class="item-content">
                                        <div class="info-table table-responsive">
                                            <table class="table text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td class="font-medium text-dark-medium">Jclev</td>
                                                    </tr>
                                                    <tr>
                                                        <td>User Type:</td>
                                                        <td class="font-medium text-dark-medium">Super Admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender:</td>
                                                        <td class="font-medium text-dark-medium">Male</td>
                                                    </tr>                                                   
                                                    <tr>
                                                        <td>Date Of Birth:</td>
                                                        <td class="font-medium text-dark-medium">07.08.2016</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Religion:</td>
                                                        <td class="font-medium text-dark-medium">Christian</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Joining Date:</td>
                                                        <td class="font-medium text-dark-medium">07.08.2016</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-mail:</td>
                                                        <td class="font-medium text-dark-medium">Jclev@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subject:</td>
                                                        <td class="font-medium text-dark-medium">English</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Class:</td>
                                                        <td class="font-medium text-dark-medium">2</td>
                                                    </tr>                                                                                               
                                                    <tr>
                                                        <td>Address:</td>
                                                        <td class="font-medium text-dark-medium">Lorem ipsum dolor sit amet</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone:</td>
                                                        <td class="font-medium text-dark-medium">+ 233 24 174 6204</td>
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
                <!-- Account Settings Area End Here -->
                <?php include 'footer.php'?>
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


</html>