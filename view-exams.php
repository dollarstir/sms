<?php include 'core.php';?>

<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoft | All Students</title>
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Students</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->

                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Students Data</h3>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control rollSearch">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input class="nameSearch form-control" type="text" placeholder="Search by Name ...">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input class="Search form-control" type="text" placeholder="Search by Any Criteria ...">
                                </div>
                                <!-- <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow allSearch">SEARCH</button>
                                </div> -->
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap customTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label actionRoll">Roll</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Date Of Birth</th>
                                        <th>Date Of Admission</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php getreporttud();?>
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>

                <!-- <div style="position: relative" class="detailCard card height-auto">
                    <div id="preloader2" style="display: none"></div>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img class="detailImg" src="img/customImg/<?php echo $elem['s_photo'];?>" alt="student">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><span class="s_fName"><?php echo $elem['s_fName']?></span> <span class="s_lName"><?php echo $elem['s_lName']?></span></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li class="actionPrevious"><a><i class="fa fa-arrow-left"></i></a></li>
                                            <li class="actionEdit"><a><i class="far fa-edit"></i></a></li>
                                            <li class="actionNext"><a><i class="fa fa-arrow-right"></i></a></li>
                                        </ul> 
                                    </div>
                                </div>
                                <p class="s_info"><?php echo $elem['s_info']?></p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><span class="s_fName"><?php $elem['s_fName']?></span> <span class="s_lName"><?php echo $elem['s_lName']?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="s_gender font-medium text-dark-medium"><?php echo $elem['s_gender']?></td>
                                            </tr>
                                            <tr>
                                                <td>Father Name:</td>
                                                <td class="s_fatherName font-medium text-dark-medium"><?php echo $elem['s_fatherName']?></td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name:</td>
                                                <td class="s_motherName font-medium text-dark-medium"><?php echo $elem['s_motherName']?></td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="s_dob font-medium text-dark-medium"><?php echo $elem['s_dob']?></td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="s_religion font-medium text-dark-medium"><?php echo $elem['s_religion']?></td>
                                            </tr>
                                            <tr>
                                                <td>Father Occupation:</td>
                                                <td class="p_job font-medium text-dark-medium"><?php echo $elem['p_job']?></td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date:</td>
                                                <td class="s_doa font-medium text-dark-medium"><?php echo $elem['s_doa']?></td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="s_class font-medium text-dark-medium"><?php echo $elem['s_class']?></td>
                                            </tr>
                                            <tr>
                                                <td>Roll:</td>
                                                <td class="spec s_id font-medium text-dark-medium"><?php echo $elem['s_id']?></td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">No Selection Done</td>
                                            </tr>
                                            <tr>
                                                <td>Emergency Contact:</td>
                                                <td class="s_homTelNum font-medium text-dark-medium"><?php echo $elem['s_homTelNum']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Student Table Area End Here -->
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

</body>
</html>