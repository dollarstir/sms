<?php

function contentTable($type) {
    include 'conn.php';

    $sql = "SELECT * FROM $type";
    $query = mysqli_query($conn, $sql);
    
    if($type == 'students') {
        while($results = mysqli_fetch_array($query)) {
            
            $sql_c = "SELECT * FROM class WHERE c_id = {$results['s_class']}";
            $query_c = mysqli_query($conn, $sql_c);
            $results_c = mysqli_fetch_array($query_c);
        
            $results['s_class'] = $results_c['c_name'];

            echo '
                <tr>
                    <input class="students" type="hidden" value="'.$results['s_id'].'">
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">'.$results['s_id'].'</label>
                        </div>
                    </td>
                    <td class="text-center"><img src="img/customImg/'.$results['s_photo'].'" alt="student"></td>
                    <td>'.$results['s_fName'].' '.$results['s_lName'].'</td>
                    <td>'.$results['s_class'].'</td>
                    <td>'.$results['s_dob'].'</td>
                    <td>'.$results['s_doa'].'</td>
                    <td>'.$results['s_gender'].'</td>
                    <td>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <span class="flaticon-more-button-of-three-dots"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="actionView dropdown-item" href="#detailCard">
                                    <i class="fas fa-user-cog text-dark-pastel-green"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="admit-form-update.php?target='.$results['s_id'].'">
                                    <i class="actionEdit fas fa-cogs text-dark-pastel-green"></i>
                                    Edit
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            ';
        }

    } else if ($type == 'parents') {
        while($results = mysqli_fetch_array($query)) {
            echo '
                <tr>
                    <input class="parents" type="hidden" value="'.$results['p_id'].'">
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">'.$results['p_id'].'</label>
                        </div>
                    </td>
                    <td class="text-center"><img src="img/customImg/'.$results['p_photo'].'" alt="parent"></td>
                    <td>'.$results["p_fName"].' '.$results["p_lName"].'</td>
                    <td>'.$results["p_gender"].'</td>
                    <td>'.$results["p_job"].'</td>
                    <td>'.$results["p_relationship"].'</td>
                    <td>'.$results["p_phone"].'</td>
                    <td>'.$results["p_nationality"].'</td>
                    <td>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <span class="flaticon-more-button-of-three-dots"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="actionView dropdown-item">
                                    <i class="fas fa-user-cog text-dark-pastel-green"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="actionEdit fas fa-cogs text-dark-pastel-green"></i>
                                    Edit
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            ';
        }
    } else if ($type == 'teachers') {
        while($results = mysqli_fetch_array($query)) {

            $sql_class = "SELECT * FROM class WHERE c_id = {$results['t_class']}";
            $query_class = mysqli_query($conn, $sql_class);
            $results_class = mysqli_fetch_array($query_class);
            $results['t_class'] = $results_class['c_name'];

            echo '
                <tr>
                    <input class="teachers" type="hidden" value="'.$results['t_id'].'">
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">'.$results['t_id'].'</label>
                        </div>
                    </td>
                    <td class="text-center"><img src="img/customImg/'.$results['t_photo'].'" alt="teacher"></td>
                    <td>'.$results["t_fName"].' '.$results["t_lName"].'</td>
                    <td>'.$results["t_gender"].'</td>
                    <td>'.$results["t_class"].'</td>
                    <td>'.$results["t_phone"].'</td>
                    <td>'.$results["t_doAppoint"].'</td>
                    <td>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <span class="flaticon-more-button-of-three-dots"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="actionView dropdown-item" href="#detailCard">
                                    <i class="fas fa-user-cog text-dark-pastel-green"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="add-teacher-update.php?target='.$results['t_id'].'">
                                    <i class="actionEdit fas fa-cogs text-dark-pastel-green"></i>
                                    Edit
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            ';
        }
    } else if($type == 'class'){
        while($results = mysqli_fetch_array($query)) {
            $id =  $results['c_id'];
            $t_sql = "SELECT * FROM teachers WHERE t_id = $id";
            $t_query = mysqli_query($conn, $t_sql);
            $teach = mysqli_fetch_array($t_query);
            $results['t_name'] = $teach['t_fName'].' '.$teach['t_lName'];
            echo '
                <tr>
                    <input class="class" type="hidden" value="'.$results['c_id'].'">
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">'.$results["c_name"].'</label>
                        </div>
                    </td>
                    <td>'.$results["t_name"].'</td>
                    <td>'.$results["c_dateAdded"].'</td>
                        <td>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="flaticon-more-button-of-three-dots"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-times-circle text-orange-red"></i>Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            ';
        }
    } else {

    }
}

function stdPromo($act) {
    include 'conn.php';

    $sql = "SELECT * FROM students WHERE s_class = $act";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)) {
            
        $sql_c = "SELECT * FROM class WHERE c_id = {$results['s_class']}";
        $query_c = mysqli_query($conn, $sql_c);
        $results_c = mysqli_fetch_array($query_c);
    
        $results['s_class'] = $results_c['c_name'];

        echo '
            <tr>
                <input class="students" type="hidden" value="'.$results['s_id'].'">
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="std_promo_chklist[]" value="'.$results["s_id"].'">
                        <label class="form-check-label">'.$results['s_id'].'</label>
                    </div>
                </td>
                <td class="text-center"><img src="img/customImg/'.$results['s_photo'].'" alt="student"></td>
                <td>'.$results['s_fName'].' '.$results['s_lName'].'</td>
                <td>'.$results['s_class'].'</td>
                <td></td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="flaticon-more-button-of-three-dots"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="actionView dropdown-item">
                                <i class="fas fa-user-cog text-dark-pastel-green"></i>
                                View
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="actionEdit fas fa-cogs text-dark-pastel-green"></i>
                                Edit
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        ';
    }
}

function contentDetail($type, $id) {
    include 'conn.php';

    if($id == 0) {
        $sql = "SELECT * FROM $type";
        
    } else {
        if($type == 'students') {
            $sql = "SELECT * FROM $type WHERE s_id=$id";
        }
        if($type == 'parents') {
            $sql = "SELECT * FROM $type WHERE p_id=$id";
        }
        if($type == 'teachers') {
            $sql = "SELECT * FROM $type WHERE t_id=$id";
        }
    }
    
    $query = mysqli_query($conn, $sql);
    $results = mysqli_fetch_array($query);

    if($type == 'students') {
        if(empty($results['s_motherName'] && $results['s_fatherName'])) {

        } else {
            $moName = $results['s_motherName'];
            $faName = $results['s_fatherName'];
        
            $sqlM = "SELECT * FROM parents WHERE p_id=$moName";
            $sqlF = "SELECT * FROM parents WHERE p_id=$faName";
        
            $queryF = mysqli_query($conn, $sqlF);
            $queryM = mysqli_query($conn, $sqlM);
        
            $resultsF = mysqli_fetch_array($queryF);
            $resultsM = mysqli_fetch_array($queryM);
        
        
            $results['s_motherName'] = $resultsM['p_fName'].' '.$resultsM['p_lName'];
            $results['s_fatherName'] = $resultsF['p_fName'].' '.$resultsF['p_lName'];
        
            $results['p_job'] = $resultsF['p_job'];

            $sql_c = "SELECT * FROM class WHERE c_id = {$results['s_class']}";
            $query_c = mysqli_query($conn, $sql_c);
            $results_c = mysqli_fetch_array($query_c);

            $results['s_class'] = $results_c['c_name'];

        }
    }

    if($type == 'teachers') {
        $sql_class = "SELECT * FROM class WHERE c_id = {$results['t_class']}";
        $query_class = mysqli_query($conn, $sql_class);
        $results_class = mysqli_fetch_array($query_class);

        $results['t_class'] = $results_class['c_name'];
    }

    return $results;
}

function form_options($type, $type_of_parent) {
    include 'conn.php';

    if($type == 'class') {
        $sql = "SELECT c_id, c_name FROM class";
        $query = mysqli_query($conn, $sql);
        while($results = mysqli_fetch_array($query)) {
            echo '
                <option value="'.$results["c_id"].'">'.$results["c_name"].'</option>
            ';
        }

    } else if ($type == 'parents') {
        $sql = "SELECT p_id, p_fName, p_lName FROM parents WHERE p_relationship = '$type_of_parent'";
        $query = mysqli_query($conn, $sql);
        while($results = mysqli_fetch_array($query)) {
            echo '
                <option value="'.$results["p_id"].'">'.$results["p_fName"].' '.$results["p_lName"].'</option>
            ';
        }

    } elseif ($type == 'subjects') {
        $sql = "SELECT s_id, s_name FROM subjects";
        $query = mysqli_query($conn, $sql);
        while($results = mysqli_fetch_array($query)) {
            echo '
                <option value="'.$results["s_id"].'">'.$results["s_name"].'</option>
            ';
        }
    } elseif ($type == 'period') {
        $sql = "SELECT * FROM period";
        $query = mysqli_query($conn, $sql);
        while($results = mysqli_fetch_array($query)) {
            echo '
                <option value="'.$results["pd_id"].'">'.$results["pd_year"].'</option>
            ';
        }
    }else {

    }

}