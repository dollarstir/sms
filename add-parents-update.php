<?php 
include 'serv/lib.php';
include 'serv/conn.php';

$sql = "SELECT * FROM parents WHERE p_id = {$_GET['target']}";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_array($query);

?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoft | Add Parents</title>
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
                    <h3>Parents</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Parents</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Parent Area Start Here -->
                <div class="card height-auto">
                    <div id="preloader2" style="display: none"></div>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Parents</h3>
                            </div>
                        </div>
                        <form class="new-added-form customForm">
                            <input type="hidden" name="act" value="addParent">
                            <input type="hidden" name="t_id" value="<?php echo $results['p_id']?>">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input name="p_fName" type="text" placeholder="" class="form-control" value="<?php echo $results['p_fName'];?>">
                                    <span class="formSpan" id="p_fName">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input name="p_lName" type="text" placeholder="" class="form-control" value="<?php echo $results['p_lName'];?>">
                                    <span class="formSpan" id="p_lName">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select name="p_gender" class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="formSpan" id="p_gender">U</span>
                                    <script>
                                        $("option[value='<?php echo $results['p_gender'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Occupation *</label>
                                    <input name="p_job" type="text" placeholder="" class="form-control"  value="<?php echo $results['p_job'];?>">
                                    <span class="formSpan" id="p_job">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select name="p_religion" class="select2">
                                        <option value="">Please Select Religion *</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Buddish">Buddish</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <span class="formSpan" id="p_religion">U</span>
                                    <script>
                                        $("option[value='<?php echo $results['p_religion'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Relation With Student *</label>
                                    <select name="p_relationship" class="select2">
                                        <option value="">Please Select Relation *</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Guardian">Guardian</option>
                                    </select>
                                    <span class="formSpan" id="p_relationship">U</span>
                                    <script>
                                        $("option[value='<?php echo $results['p_relationship'];?>']").attr("selected", "selected");
                                    </script>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone *</label>
                                    <input name="p_phone" type="text" placeholder="" class="form-control"  value="<?php echo $results['p_phone'];?>">
                                    <span class="formSpan" id="p_phone">U</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nationality </label>
                                    <input name="p_nationality" type="text" placeholder="" class="form-control"   value="<?php echo $results['p_nationality'];?>">
                                    <span class="formSpan" id="p_nationality">U</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Address *</label>
                                    <textarea name="p_address" class="textarea form-control" id="form-message" cols="10" rows="9"><?php echo $results['p_address'];?></textarea>
                                    <span class="formSpan" id="p_address">U</span>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea name="p_info" class="textarea form-control" id="form-message" cols="10" rows="9"><?php echo $results['p_info'];?></textarea>
                                    <span class="formSpan" id="p_info">U</span>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <img style="height: 100px; width: 100px" src="img/customImg/<?php echo $results['p_photo']?>">
                                    <label class="text-dark-medium">Upload Parent Photo (150px X 150px)</label>
                                    <input name="p_photo" type="file" class="form-control-file">
                                    <span class="formSpan" id="p_photo">U</span>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add Parent</button>
                                    <button type="reset" class="res btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- User Defined -->
    <script src="js/custom.js"></script>
    <script>
        $(".buttonUp").click(function() {
            window.location = "all-parents.php";
        })
    </script>
</body>
</html>