<?php 
include 'serv/lib.php';
include 'serv/conn.php';

$sql = "SELECT * FROM teachers WHERE t_id = {$_GET['target']}";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_array($query);

?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoft | Add Teacher</title>
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
        <!-- jquery-->
        <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body> 
    <div class="buttonUp" style="padding: 20px;">
        <i class="fa fa-times fa-2x"></i>
    </div>
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

        
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->


            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div id="preloader2" style="display: none"></div>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Updating Teachers Info</h3>
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
                            <input type="hidden" name="act" value="updateTeacher">
                            <input type="hidden" name="t_id" value="<?php echo $results['t_id']?>">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input name="t_fName" type="text" placeholder="" class="form-control" value="<?php echo $results['t_fName'];?>">
                                    <span class="formSpan" id="t_fName">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input name="t_lName" type="text" placeholder="" class="form-control" value="<?php echo $results['t_lName'];?>">
                                    <span class="formSpan" id="t_lName">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select name="t_gender" class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="formSpan" id="t_gender">Unknown</span>
                                    <script>
                                        $("option[value='<?php echo $results['t_gender'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input name="t_dob" type="text" placeholder="yyyy-mm-dd" class="form-control air-datepicker" value="<?php echo $results['t_dob'];?>">
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="formSpan" id="t_dob">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select name="t_religion" class="select2">
                                        <option value="">Please Select Religion *</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddish">Buddish</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <span class="formSpan" id="t_religion">Unknown</span>
                                    <script>
                                        $("option[value='<?php echo $results['t_religion'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nationality *</label>
                                    <input name="t_nationality" type="text" placeholder="" class="form-control" value="<?php echo $results['t_nationality'];?>">
                                    <span class="formSpan" id="t_nationality">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input name="t_email" type="email" placeholder="" class="form-control" value="<?php echo $results['t_email'];?>">
                                    <span class="formSpan" id="t_email">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select name="t_class" class="select2">
                                        <option value="">Please Select Class *</option>
                                        <?php form_options('class', '');?>
                                    </select>
                                    <span class="formSpan" id="t_class">Unknown</span>
                                    <script>
                                        $("option[value='<?php echo $results['t_class'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Appointment *</label>
                                    <input name="t_doAppoint" type="text" placeholder="yyyy-mm-dd" class="form-control air-datepicker" value="<?php echo $results['t_doAppoint'];?>">
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="formSpan" id="t_doAppoint">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Marital Status *</label>
                                    <select name="t_maritalStats" class="select2">
                                        <option value="">Please Select Marital Status *</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                    <span class="formSpan" id="t_maritalStats">Unknown</span>
                                    <script>
                                        $("option[value='<?php echo $results['t_maritalStats'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>SSNIT Number</label>
                                    <input name="t_SSNITNum" type="text" placeholder="" class="form-control" value="<?php echo $results['t_SSNITNum'];?>">
                                    <span class="formSpan" id="t_SSNITNum">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>NHIS Number</label>
                                    <input name="t_NHISNum" type="text" placeholder="" class="form-control" value="<?php echo $results['t_NHISNum'];?>">
                                    <span class="formSpan" id="t_NHISNum">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone *</label>
                                    <input name="t_phone" type="text" placeholder="" class="form-control" value="<?php echo $results['t_phone'];?>">
                                    <span class="formSpan" id="t_phone">Unknown</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="t_info" id="form-message" cols="10" rows="9"><?php echo $results['t_info'];?></textarea>
                                    <span class="formSpan" id="t_info">Unknown</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <textarea class="textarea form-control" name="t_address" id="form-message" cols="10" rows="9"><?php echo $results['t_address'];?></textarea>
                                    <span class="formSpan" id="t_address">Unknown</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <img style="height: 100px; width: 100px" src="img/customImg/<?php echo $results['t_photo']?>">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input name="t_photo" type="file" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update Teacher</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here --> 
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
    <!-- Smoothscroll Js -->
    <script src="js/jquery.smoothscroll.min.html"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- User Defined -->
    <script src="js/custom.js"></script>
    <script>
        $(".buttonUp").click(function() {
            window.location = "all-teacher.php";
        })
    </script>

</body>
</html>