<?php
include 'serv/conn.php';
// include 'serv/lib.php';
include 'serv/process.php';
?>

<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoft | Class Routine</title>
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
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
                    <h3>Class Routine</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Routine</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Class Routine Area Start Here -->
                <div class="row">
                    <div id="preloader2" style="display: none"></div>
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add Class Routine</h3>
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
                                <form class="new-added-form add">
                                    <input type="hidden" name="addItem" value="routine">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Subject Name *</label>
                                            <select name="cr_subject" class="select2">
                                                <option value="">Please Select</option>
                                                <?php
                                                    $sql_sub = "SELECT * FROM subject";
                                                    $query_sub = mysqli_query($conn, $sql_sub);

                                                    while($results = mysqli_fetch_array($query_sub)) {
                                                        echo '<option value="'.$results["sub_id"].'">'.$results["sub_name"].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Select Class *</label>
                                            <select name="cr_class" class="select2">
                                                <option value="">Please Select</option>
                                                <?php form_options("class", '')?>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Teacher</label>
                                            <select name="cr_teacher" class="select2">
                                                <option value="">Please Select</option>
                                                <?php
                                                    $sql_teach = "SELECT * FROM teachers";
                                                    $query_teach = mysqli_query($conn, $sql_teach);

                                                    while($results = mysqli_fetch_array($query_teach)) {
                                                        echo '<option value="'.$results["t_id"].'">'.$results["t_fName"].' '.$results["t_lName"].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Day</label>
                                            <select name="cr_day" class="select2">
                                                <option value="">Please Select</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Start time *</label>
                                            <input name="cr_startTime" type="text" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>End time *</label>
                                            <input name="cr_endTime" type="text" class="form-control">
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add Routine</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Class Routine</h3>
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
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Day ..." class="rollSearch form-control">
                                        </div>
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Subject ..." class="nameSearch form-control">
                                        </div>
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Any Criteria ..." class="form-control Search">
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">                                             <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label">Day</label>
                                                    </div>
                                                </th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Teacher</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $sql = "SELECT * FROM class_routine";
                                            $query = mysqli_query($conn, $sql);
                                             while($results = mysqli_fetch_array($query)) {

                                                $sql_c = "SELECT c_name FROM class WHERE c_id = {$results['cr_classID']}";
                                                $query_c = mysqli_query($conn, $sql_c);
                                                $results_c = mysqli_fetch_array($query_c);
                                                $results['cr_classID'] = $results_c['c_name'];

                                                $sql_s = "SELECT sub_name FROM subjects WHERE sub_id = {$results['cr_subjectID']}";
                                                $query_s = mysqli_query($conn, $sql_s);
                                                $results_s = mysqli_fetch_array($query_s);
                                                $results['cr_subjectID'] = $results_s['sub_name'];

                                                $sql_t = "SELECT t_fName, t_lName FROM teachers WHERE t_id = {$results['cr_teacherID']}";
                                                $query_t = mysqli_query($conn, $sql_t);
                                                $results_t = mysqli_fetch_array($query_t);
                                                $results['cr_teacherID'] = $results_t['t_fName'].' '.$results_t['t_lName'];

                                                 echo '
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input">
                                                                <label class="form-check-label">'.$results['cr_day'].'</label>
                                                            </div>
                                                        </td>
                                                        <td>'.$results['cr_classID'].'</td>
                                                        <td>'.$results['cr_subjectID'].'</td>
                                                        <td>'.$results['cr_teacherID'].'</td>
                                                        <td><span>'.$results['cr_startTime'].'</span> - <span>'.$results['cr_endTime'].'</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="fas fa-times-circle text-red"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                 ';
                                            }
                                          
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Class Routine Area End Here -->
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