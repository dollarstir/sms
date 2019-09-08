<?php include 'serv/lib.php';?>
<?php $elem = contentDetail('teachers', 0);?>

<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoft | All Teachers</title>
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
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Teachers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Teachers Data</h3>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="rollSearch form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="nameSearch form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Any Criteria ..." class="Search form-control">
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="customTable table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Phone</th>
                                        <th>Date Of Appointment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php contentTable('teachers');?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area Start Here -->
                <div style="position: relative" id="detailCard" class="detailCard card height-auto">
                    <div id="preloader2" style="display: none"></div>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img class="detailImg" src="img/customImg/<?php echo $elem['t_photo'];?>" alt="teacher">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><span class="t_fName"><?php echo $elem['t_fName'];?></span> <span class="t_lName"><?php echo $elem['t_lName'];?></span></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li class="actionPrevious"><a><i class="fa fa-arrow-left"></i></a></li>
                                            <li class="actionEdit"><a href="add-teacher-update.php?target=<?php echo $elem['t_id']?>"><i class="far fa-edit"></i></a></li>
                                            <li class="actionNext"><a><i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="t_info"><?php echo $elem['t_info'];?></p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><span class="t_fName"><?php echo $elem['t_fName'];?></span> <span class="t_lName"><?php echo $elem['t_lName'];?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium t_gender"><?php echo $elem['t_gender'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium t_dob"><?php echo $elem['t_dob'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Date of Appointment:</td>
                                                <td class="font-medium text-dark-medium t_Appoint"><?php echo $elem['t_doAppoint'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium t_religion"><?php echo $elem['t_religion'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium t_phone"><?php echo $elem['t_phone'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Subject(s):</td>
                                                <td class="font-medium text-dark-medium t_nationality"><?php echo $elem['t_nationality'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium t_class"><?php echo $elem['t_class'];?></td>
                                            </tr>
                                            <tr>
                                                <td>SSNIT number:</td>
                                                <td class="font-medium text-dark-medium t_SSNITNum"><?php echo $elem['t_SSNITNum'];?></td>
                                            </tr>
                                            <tr>
                                                <td>NHIS number:</td>
                                                <td class="font-medium text-dark-medium t_NHISNum"><?php echo $elem['t_NHISNum'];?></td>
                                            </tr>
                                            <tr>
                                                <td>ID:</td>
                                                <td class="spec font-medium text-dark-medium t_id"><?php echo $elem['t_id'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Marital Status:</td>
                                                <td class="font-medium text-dark-medium t_maritalStats"><?php echo $elem['t_maritalStats'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <!-- Teacher Table Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- User Defined -->
    <script src="js/custom.js"></script>


    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>

    <style>
    .buttons-html5 {
        border: none;
        padding: 5px 20px;
        margin: 10px;
        background: lightgreen;
    }
    
    </style>

</body>
</html>