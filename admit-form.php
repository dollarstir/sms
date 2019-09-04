<?php include 'serv/lib.php';?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoft | Admission Form</title>
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Student Admit Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div id="preloader2" style="display: none"></div>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Students</h3>
                            </div>
                        </div>
                        <form class="new-added-form customForm">
                            <input type="hidden" name="act" value="addStudent">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input name="s_fName" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="s_fName">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input name="s_lName" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="s_lName">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select name="s_gender" class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="formSpan" id="s_gender">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input name="s_dob" type="text" placeholder="yyyy-mm-dd" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="formSpan" id="s_dob">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select name="s_religion" class="select2">
                                        <option value="">Please Select Religion *</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddish">Buddish</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <span class="formSpan" id="s_religion">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nationality</label>
                                    <input name="s_nationality" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="s_nationality">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select name="s_class" class="select2">
                                        <option value="">Please Select Class *</option>
                                        <?php form_options('class', '');?>
                                    </select>
                                    <span class="formSpan" id="s_class">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Emgergency Contact</label>
                                    <input name="s_homTelNum" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="s_homTelNum">Unknown</span>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Father's Name</label>
                                    <select name="s_fatherName" class="select2">
                                        <option value="">Please Select father *</option>
                                        <?php form_options('parents', 'Father');?>
                                    </select>
                                    <span class="formSpan" id="s_fatherName">Unknown</span>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Mother's Name</label>
                                    <select name="s_motherName" class="select2">
                                        <option value="">Please Select mother *</option>
                                        <?php form_options('parents', 'Mother');?>
                                    </select>
                                    <span class="formSpan" id="s_motherName">Unknown</span>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Guardian's Name(if Any)</label>
                                    <select name="s_guardian" class="select2">
                                        <option value="">Please Select Guardian *</option>
                                        <?php form_options('parents', 'Guardian');?>
                                    </select>
                                    <span class="formSpan" id="s_guardian">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Doctor's Full Name</label>
                                    <input name="s_docName" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="s_docName">Unknown</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Doctor's Telephone Number</label>
                                    <input name="s_docTel" type="text" placeholder="" class="form-control">
                                    <span class="formSpan" id="s_docTel">Unknown</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Date Of Admission *</label>
                                    <input name="s_doa" type="text" placeholder="yyyy-mm-dd" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="formSpan" id="s_doa">Unknown</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Special Illness Description</label>
                                    <textarea class="textarea form-control" name="s_info" id="form-message" cols="10"
                                        rows="9"></textarea>
                                    <span class="formSpan" id="s_info">Unknown</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input name="s_photo" type="file" class="form-control-file">
                                    <span class="formSpan" id="s_photo">Unknown</span>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add Student</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
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
    <!-- User Defined -->
    <script src="js/custom.js"></script>

</body>
</html>