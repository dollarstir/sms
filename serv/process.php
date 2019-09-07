<?php

include 'lib.php';
include 'conn.php';

if(isset($_POST) || isset($_GET)) {

    if(isset($_GET['func'])) {
        /////////////////////////////////////////////////////////////
        //....................Form Submissions.....................//

        if($_GET['func'] == 'addStudent') {

            $results = array();
            $response = array();

            $results['status'] = '';

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    if(in_array($key, array("s_fName", 's_lName', 's_gender', 's_motherName', 's_fatherName', 's_religion', 's_dob', 's_doa', 's_class', 's_phone'))) {
                        $results['status']  = 'error';
                        $response[$key] = "Field can't be empty";

                    } else {
                        $response[$key] = Null;

                    }
                }
            }

            extract($_POST);

            if($results['status'] == "") {
                if(isset($_FILES['s_photo'])) {
                    $filename = $_FILES['s_photo']['name'];
                    $file = $_FILES['s_photo']['tmp_name'];
    
                    $fileExt = explode('.', $filename);
                    $fileExt = end($fileExt);
    
                    $uniq = uniqid('student', false);
                    $filename = $uniq.".".$fileExt;
    
                    if(in_array(strtolower($fileExt), array('jpg', 'jpeg', 'png'))) {
                        if(move_uploaded_file($file, "../img/customImg/$filename")) {
                            $s_photo = $filename;
    
                        } else {
                            $results['status'] = 'error';
                            $response['s_photo'] = "Cannot upload this picture!!";
    
                        }
                    } else {
                        $results['status'] = 'error';
                        $response['s_photo'] = "Invalid picture format!!";
    
                    }    
                } else {
                    if($s_gender == 'Male') {
                        $s_photo = 'male.jpg';
    
                    } else {
                        $s_photo = 'female.jpg';
    
                    }
                }

            }

            $s_dateAdded = date('Y-m-d');          
            
            if($results['status'] == '') {
                if(empty($s_guardian)) {
                    $sql = "INSERT INTO students (s_fName, s_lName, s_gender, s_dob, s_doa, s_photo, s_nationality, s_religion, s_class, s_homTelNum, s_docName, s_docTel, s_fatherName, s_motherName, s_info, s_dateAdded) VALUES ('$s_fName', '$s_lName', '$s_gender', '$s_dob', '$s_doa', '$s_photo', '$s_nationality', '$s_religion', $s_class, '$s_homTelNum', '$s_docName', '$s_docTel', $s_fatherName, $s_motherName, '$s_info', '$s_dateAdded')";
                } else {
                    $sql = "INSERT INTO students (s_fName, s_lName, s_gender, s_dob, s_doa, s_photo, s_nationality, s_religion, s_class, s_homTelNum, s_docName, s_docTel, s_guardianName, s_info, s_dateAdded) VALUES ('$s_fName', '$s_lName', '$s_gender', '$s_dob', '$s_doa', '$s_photo', '$s_nationality', '$s_religion', $s_class, '$s_homTelNum', '$s_docName', '$s_docTel', $s_guardian, '$s_info', '$s_dateAdded')";
                }

                if(mysqli_query($conn, $sql)) {
                    $results['status'] = 'success';
                    $response = "Add student Successfully";
                }else{
                    echo 'die';
                };
            }

            $results['response'] = $response;
            echo json_encode($results);
        }

        if($_GET['func'] == 'addParent') {

            $results = array();
            $response = array();

            $results['status'] = '';

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    if(in_array($key, array("p_fName", 'p_lName', 'p_gender', 'p_job', 'p_religion', 'p_relationship', 'p_phone', 'p_address'))) {
                        $results['status']  = 'error';
                        $response[$key] = "Field can't be empty";

                    } else {
                        $value = 'NULL';

                    }
                }
            }

            extract($_POST);

            if($results['status'] == "") {
                if(isset($_FILES['p_photo'])) {
                    $filename = $_FILES['p_photo']['name'];
                    $file = $_FILES['p_photo']['tmp_name'];
    
                    $fileExt = explode('.', $filename);
                    $fileExt = end($fileExt);
    
                    $uniq = uniqid('parent', false);
                    $filename = $uniq.".".$fileExt;
    
                    if(in_array(strtolower($fileExt), array('jpg', 'jpeg', 'png'))) {
                        if(move_uploaded_file($file, "../img/customImg/$filename")) {
                            $p_photo = $filename;
    
                        } else {
                            $results['status'] = 'error';
                            $response['p_photo'] = "Cannot upload this picture!!";
    
                        }
                    } else {
                        $results['status'] = 'error';
                        $response['p_photo'] = "Invalid picture format!!";
    
                    }    
                } else {
                    if($p_gender == 'Male') {
                        $p_photo = 'male.jpg';
    
                    } else {
                        $p_photo = 'female.jpg';
    
                    }
                }
            }

            $date = date('Y-m-d');

            if($results['status'] == '') {
                $sql = "INSERT INTO parents (p_fName, p_lName, p_gender, p_dateAdded, p_relationship, p_photo, p_phone, p_job, p_religion, p_info, p_address, p_nationality) VALUES ('$p_fName', '$p_lName', '$p_gender', '$date', '$p_relationship', '$p_photo', '$p_phone', '$p_job', '$p_religion', '$p_info', '$p_address', '$p_nationality')";

                if(mysqli_query($conn, $sql)) {
                    $results['status'] = 'success';
                    $response = "Add student Successfully";
                    
                }else{
                    $results['status'] = 'errorGen';
                    $response = "Failed to add parent!!";

                };
            }

            $results['response'] = $response;
            echo json_encode($results);
        }

        if($_GET['func'] == 'addTeacher') {

            $results = array();
            $response = array();

            $results['status'] = '';

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    if(in_array($key, array('t_fName', 't_lName', 't_gender', 't_dob', 't_religion', 't_class', 't_doAppoint', 't_maritalStats', 't_phone', 't_nationality'))) {
                        $results['status']  = 'error';
                        $response[$key] = "Field can't be empty";

                    } else {
                        $value = 'NULL';

                    }
                }
            }

            extract($_POST);

            if($results['status'] == "") {
                if(isset($_FILES['t_photo'])) {
                    $filename = $_FILES['t_photo']['name'];
                    $file = $_FILES['t_photo']['tmp_name'];
    
                    $fileExt = explode('.', $filename);
                    $fileExt = end($fileExt);
    
                    $uniq = uniqid('teacher', false);
                    $filename = $uniq.".".$fileExt;
    
                    if(in_array(strtolower($fileExt), array('jpg', 'jpeg', 'png'))) {
                        if(move_uploaded_file($file, "../img/customImg/$filename")) {
                            $t_photo = $filename;
    
                        } else {
                            $results['status'] = 'error';
                            $response['t_photo'] = "Cannot upload this picture!!";
    
                        }
                    } else {
                        $results['status'] = 'error';
                        $response['t_photo'] = "Invalid picture format!!";
    
                    }    
                } else {
                    if($t_gender == 'Male') {
                        $t_photo = 'male.jpg';
    
                    } else {
                        $t_photo = 'female.jpg';
    
                    }
                }
            }

            $date = date('Y-m-d');

            $password = uniqid("tch", false);
            $username = $t_phone;

            if($results['status'] == '') {
                $sql = "INSERT INTO teachers (t_fName, t_lName, t_gender, t_dob, t_dateAdded, t_photo, t_phone, t_religion, t_info, t_address, t_nationality, t_class, t_doAppoint, t_maritalStats, t_email, t_SSNITNum, t_NHISNum, t_username, t_password) VALUES ('$t_fName', '$t_lName', '$t_gender', '$t_dob', '$date', '$t_photo', '$t_phone', '$t_religion', '$t_info', '$t_address', '$t_nationality', $t_class, '$t_doAppoint', '$t_maritalStats', '$t_email', '$t_SSNITNum', '$t_NHISNum', '$username', '$password')";

                if(mysqli_query($conn, $sql)) {
                    $results['status'] = 'success';
                    $response = "Add Teacher Successfully";
                    
                }else{
                    $results['status'] = 'errorGen';
                    $response = "Failed to add Teacher!!";

                };
            }

            $results['response'] = $response;
            echo json_encode($results);
        }
    


        if($_GET['func'] == 'updateStudent') {

            $results = array();
            $response = array();

            $results['status'] = '';


            extract($_POST);

           
            if(!empty($_FILES['s_photo']['name'])) {
                $filename = $_FILES['s_photo']['name'];
                $file = $_FILES['s_photo']['tmp_name'];

                $fileExt = explode('.', $filename);
                $fileExt = end($fileExt);

                $uniq = uniqid('student', false);
                $filename = $uniq.".".$fileExt;

                if(in_array(strtolower($fileExt), array('jpg', 'jpeg', 'png'))) {
                    if(move_uploaded_file($file, "../img/customImg/$filename")) {
                        $s_photo = $filename;

                        $sql = "UPDATE students SET s_fName = '$s_fName', s_lName = '$s_lName', s_gender = '$s_gender', s_dob = '$s_dob', s_doa = '$s_doa', s_photo = '$s_photo', s_nationality = '$s_nationality', s_religion = '$s_religion', s_class = '$s_class', s_homTelNum = '$s_homTelNum', s_docName = '$s_docName', s_docTel = '$s_docTel', s_fatherName = '$s_fatherName', s_motherName = '$s_motherName', s_info = '$s_info' WHERE s_id = '$s_id'";

                        if(mysqli_query($conn, $sql)) {
                            $results['status'] = 'success';
                            $response = "Updated student Successfully";
        
                        } else {
                            $results['status'] = 'Error';
                            $response = "Could not update student";
                        };

                    } else {
                        $results['status'] = 'error';
                        $response['s_photo'] = "Cannot upload this picture!!";

                    }
                } else {
                    $results['status'] = 'error';
                    $response['s_photo'] = "Invalid picture format!!";

                }    
            } else {
                $sql = "UPDATE students SET s_fName = '$s_fName', s_lName = '$s_lName', s_gender = '$s_gender', s_dob = '$s_dob', s_doa = '$s_doa', s_nationality = '$s_nationality', s_religion = '$s_religion', s_class = $s_class, s_homTelNum = '$s_homTelNum', s_docName = '$s_docName', s_docTel = '$s_docTel', s_fatherName = '$s_fatherName', s_motherName = '$s_motherName', s_info = '$s_info' WHERE s_id = $s_id";

                if(mysqli_query($conn, $sql)) {
                    $results['status'] = 'success';
                    $response = "Updated student Successfully";

                } else {
                    $results['status'] = 'Error';
                    $response = "Could not update student";
                };
            }        
            
            $results['response'] = $response;
            echo json_encode($results);
        }

        if($_GET['func'] == 'updateTeacher') {

            $results = array();
            $response = array();

            $results['status'] = '';


            extract($_POST);

           
            if(!empty($_FILES['s_photo']['name'])) {
                $filename = $_FILES['s_photo']['name'];
                $file = $_FILES['s_photo']['tmp_name'];

                $fileExt = explode('.', $filename);
                $fileExt = end($fileExt);

                $uniq = uniqid('student', false);
                $filename = $uniq.".".$fileExt;

                if(in_array(strtolower($fileExt), array('jpg', 'jpeg', 'png'))) {
                    if(move_uploaded_file($file, "../img/customImg/$filename")) {
                        $s_photo = $filename;

                        $sql = "UPDATE students SET s_fName = '$s_fName', s_lName = '$s_lName', s_gender = '$s_gender', s_dob = '$s_dob', s_doa = '$s_doa', s_photo = '$s_photo', s_nationality = '$s_nationality', s_religion = '$s_religion', s_class = '$s_class', s_homTelNum = '$s_homTelNum', s_docName = '$s_docName', s_docTel = '$s_docTel', s_fatherName = '$s_fatherName', s_motherName = '$s_motherName', s_info = '$s_info' WHERE s_id = '$s_id'";

                        if(mysqli_query($conn, $sql)) {
                            $results['status'] = 'success';
                            $response = "Updated student Successfully";
        
                        } else {
                            $results['status'] = 'Error';
                            $response = "Could not update student";
                        };

                    } else {
                        $results['status'] = 'error';
                        $response['s_photo'] = "Cannot upload this picture!!";

                    }
                } else {
                    $results['status'] = 'error';
                    $response['s_photo'] = "Invalid picture format!!";

                }    
            } else {
                $sql = "UPDATE students SET s_fName = '$s_fName', s_lName = '$s_lName', s_gender = '$s_gender', s_dob = '$s_dob', s_doa = '$s_doa', s_nationality = '$s_nationality', s_religion = '$s_religion', s_class = $s_class, s_homTelNum = '$s_homTelNum', s_docName = '$s_docName', s_docTel = '$s_docTel', s_fatherName = '$s_fatherName', s_motherName = '$s_motherName', s_info = '$s_info' WHERE s_id = $s_id";

                if(mysqli_query($conn, $sql)) {
                    $results['status'] = 'success';
                    $response = "Updated student Successfully";

                } else {
                    $results['status'] = 'Error';
                    $response = "Could not update student";
                };
            }        
            
            $results['response'] = $response;
            echo json_encode($results);
        }



        if($_GET['func'] == 'addClass') {
            $results = array();
            $response = array();

            $results['status'] = '';

            if(empty($_POST['addClass'])) {
                $results['status'] = "Warning";
                $response = "No class name entered!!";

            } else {
                $c_name = $_POST['addClass'];

                $sql = "SELECT * FROM class WHERE c_name = '$c_name'";
                $query = mysqli_query($conn, $sql);

                if(mysqli_num_rows($query) > 0) {
                    $results['status'] = "Warning";
                    $response = "Class Already exist!!";

                } else {
                    $date = date("Y-m-d");
                    $sql = "INSERT INTO class (c_name, c_dateAdded) VALUES ('$c_name', '$date')";

                    if(mysqli_query($conn, $sql)) {
                        $results['status'] = "Success";
                        $response = "Class Added Successfully";

                    } else {
                        $results['status'] = "Error";
                        $response = "Could not added class";

                    };

                }
            }

            $results['response'] = $response;
            echo json_encode($results);
        }

        if($_GET['func'] == 'addSubject') {
            $results = array();
            $response = array();

            $results['status'] = '';

            if(empty($_POST['addClass'])) {
                $results['status'] = "Warning";
                $response = "No subject name entered!!";

            } else {
                $class = $_POST['addSubject'];

                $sql = "SELECT * FROM class WHERE s_name = '$subj'";
                $query = mysqli_query($conn, $sql);

                if(mysqli_num_row($query) > 0) {
                    $results['status'] = "Warning";
                    $response = "Subject Already exist!!";

                } else {
                    $sql = "INSERT INTO subject (s_name) VALUES ('$s_name')";

                    if(mysqli_query($conn, $sql)) {
                        $results['status'] = "Success";
                        $response = "Subject Added Successfully";

                    } else {
                        $results['status'] = "Error";
                        $response = "Could not added subject";

                    };

                }
            }
        }

        if($_GET['func'] == 'promote') {
            $results = array();
            $response = array();

            $results['status'] = '';

            foreach ($_POST['std_promo_chklist'] as $selected) {

                $s_period = $_POST['s_period'];
                $s_class = $_POST['s_class'];

                $sql = "UPDATE students SET s_class = $s_class, s_currentPeriod = $s_period WHERE s_id = $selected";
                if(mysqli_query($conn, $sql)) {

                } else {
                    $response[$selected] = "Student With ID ".$selected." cannot be promoted!!";

                };
            }

            if(count($response) > 0) {
                $results['status'] = 'Error';

            } else {
                $results['status'] = 'Success';

            }

            $results['response'] = $response;
            echo json_encode($results);

        }

        if($_GET['func'] == 'routine') {
            $results = array();
            $response = array();

            $results['status'] = '';

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    $results['status'] = 'Error';
                }

            }

            extract($_POST);

            if($results['status'] == '') {
                $sql = "INSERT INTO class_routine (cr_classID, cr_subjectID, cr_teacherID, cr_startTime, cr_endTime, cr_day) VALUES ($cr_class, $cr_subject, $cr_teacher, '$cr_startTime', '$cr_endTime', '$cr_day')";

                if(mysqli_query($conn, $sql)) {
                    $results['status'] = 'Success';
                    $results['response'] = "Routine added Successfully";
                } else {
                    $results['status'] = 'Error';
                    $results['response'] = "Routine could not be added";
                }
            } else {
                $results['status'] = 'Error';
                $results['response'] = "A field is empty";
            }

            echo json_encode($results);
        }

        //////////////////////////////////////////////////////////////
        //..........................................................//

        if($_GET['func'] == 'contentDetail') {
            echo json_encode(contentDetail($_GET['func2'], $_POST['id']));
        }
    }
}


