<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2019 14:38:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMS | View Report</title>
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


<!-- notification -->
<div id="mcon">
        <!-- <div class="notifyMessage" style="display:block;background-color:green;">
                
                <h4>Message</h4>
                <p style="color:white;">Registration successfull</p>
        </div> -->
</div>
<!-- Nofication -->

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
                        <li>View Report</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Expense Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>view Report</h3>
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


                            <?php 
                            
                            include 'serv/conn.php';
                            $id= $_GET['sid'];
                            $getstu= mysqli_query($conn,"SELECT * FROM  students WHERE  s_id= '$id' ");
                            $stu = mysqli_fetch_array($getstu);
                            $studid= $stu['s_id'];
                            $name = $stu['s_fName'].' '.$stu['s_lName'];
                            $photo= $stu['s_photo'];
                            $gender = $stu['s_gender'];

                            $class= $stu['s_class'];
                            
                            
                            ?>

                        <form class="new-added-form" id="report-form" method="GET" action="print-report.php">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" placeholder="" class="form-control" value="<?php  echo $name; ?>" readonly>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>ID No *</label>
                                    <input type="text" name="sid" placeholder="" class="form-control" value="<?php echo $studid; ?> " readonly>
                                </div>


                                <input type="hidden" name="class" placeholder="" class="form-control" value="<?php echo $class; ?> ">





                               


                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Select Term*</label>
                                    <select class="select2" name="term">
                                        <option value="">Select term</option>
                                        <option value="term1">First Term</option>
                                        <option value="term2">Second Term</option>
                                        <option value="term3">Third Term</option>
                                        
                                    </select>
                                </div>

                                

                                

                               
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail Address</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div> -->
                                

                               
                                


                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Year</label>
                                    <select class="select2" name="year">
                                        <option value="">Please Select</option>
                                        <?php 
                                        
                                        for ($i=1999; $i <2050 ; $i++) { 

                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                            # code...
                                        }

                                        
                                        ?>
                                        
                                    </select>
                                </div>


                                
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Get Report</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add Expense Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">SMS</a> <?php echo date ("Y"); ?>. All rights reserved. Designed by <a href="#">Purple Software</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="ajax.js"></script>
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

</body>


</html>