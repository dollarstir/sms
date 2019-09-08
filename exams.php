<?php
include 'core.php';
?>
<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMS | Add Exam </title>
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
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>

</head>

<body>


<div id="mcon">

</div>


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
            <?php  include 'sidebar.php';?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Examination</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Exam Report</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Exam Grade Add Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New report</h3>
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
                                <form class="new-added-form" id="ad-report">
                                    <div class="row">


                                            <?php 
                                            
                                                include 'serv/conn.php';
                                                $id= $_GET['sid'];
                                                $getreportee= mysqli_query($conn,"SELECT * FROM students WHERE s_id= '$id' ");
                                                $repo= mysqli_fetch_array($getreportee);
                                                $name= $repo['s_fName'].' '.$repo['s_lName'];
                                                $class= $repo['s_class'];
                                                $id= $repo['s_id'];

                                            
                                            ?>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Student Name</label>
                                            <input type="text" name="name" placeholder="" class="form-control" value="<?php echo $name; ?>">
                                        </div>


                                        <input type="hidden" name="sid" placeholder="" class="form-control" value="<?php echo $id; ?>">


                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Select Subject</label>
                                            <select class="select2 form-control" name="subject">
                                                <option value="">Please Select subject</option>
                                               <?php echo listsubject ();?>
                                                
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Class</label>
                                            <input type="text" name="class" placeholder="" class="form-control" value="<?php echo $class; ?>">
                                        </div>


                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Total class score   (40%)</label>
                                            <input type="number" name="classscore" placeholder="" class="form-control">
                                        </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Total Exams score  (60%) </label>
                                            <input type="number" name="examsscore" placeholder="" class="form-control">
                                        </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Overall score  (100%) </label>
                                            <input type="number" name="overallscore" placeholder="" class="form-control">
                                        </div>




                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Position in class</label>
                                            <input type="text" name="position" placeholder="" class="form-control">
                                        </div>


                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Grade</label>
                                            <input type="text" name="grade" placeholder="" class="form-control">
                                        </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="remark" placeholder="" class="form-control">
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Term*</label>
                                            <select class="select2 form-control" name="term">
                                                <option value="">Select term</option>
                                                <option value="term1">First Term</option>
                                                <option value="term2">Second Term</option>
                                                <option value="term3">Third Term</option>
                                                
                                            </select>
                                        </div>


                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Year</label>
                                            <select class="select2 form-control" name="year">
                                                <option value="">Please Select</option>
                                                <?php               
                                                    for ($i=1999; $i <2050 ; $i++) { 
                                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                                    }
                                                ?>
                                                
                                            </select>
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
                    <!-- Exam Grade Add Area End Here -->
                    <!-- Exam Grade List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Exam Report Lists</h3>
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
                                        <div class="col-lg-5 col-sm-4 col-12 form-group">
                                            <input class="Search" type="text" placeholder="Search ..." class="form-control">
                                        </div>
                                        <!-- <div class="col-lg-5 col-sm-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Point ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-sm-3 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div> -->
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>class</th>
                                                <th>class Score</th>
                                                <th>Exams Score</th>
                                                <th>Total score</th>
                                                <th>Grade</th>
                                                <th>Position</th>
                                                <th>Term</th>
                                                
                                                <th>Year</th>
                                                <th>Remarks</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo showallreports();?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exam Grade List Area End Here -->
                </div>
                <!-- All Subjects Area End Here -->
                <?php  include 'footer.php';?>
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

    <script src="ajax.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/exam-grade.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2019 14:38:38 GMT -->
</html>