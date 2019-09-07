<?php

function addfees($sid,$pic,$name,$gender,$class,$term,$feetype,$status,$amount,$receiver,$payer,$payer_contact,$datepaid,$year)
{
    include 'serv/conn.php';

    $adfe= mysqli_query($conn,"INSERT INTO  fees (sid,pic,name,gender,class,term,feetype,status,amount,receiver,payer,payer_contact,datepaid,year) VALUES('$sid','$pic','$name','$gender','$class','$term','$feetype','$status','$amount','$receiver','$payer','$payer_contact','$datepaid','$year')");

    if ($adfe) {

        echo'<div class="notifyMessage" style="display:block;background-color:green;">
                
                    <h4>Message</h4>
                    <p style="color:white;">Fees paid successfully
                    </p>
            </div>

            ';
        # code...
    }
    else {
        echo'<div class="notifyMessage" style="display:block;background-color:red;">
                
                    <h4>Message</h4>
                    <p style="color:white;">  Failed to add fees</p>
            </div>

            ';
    }
}


function getfees(){

    include 'serv/conn.php';
    $getf= mysqli_query($conn,"SELECT * FROM fees ORDER BY ID DESC");

    while ($fee =mysqli_fetch_array($getf)) {


    echo
    '<tr>
    <input class="students" type="hidden" value="'.$fee['id'].'">
    <td>
        <div class="form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">'.$fee['id'].'</label>
        </div>
    </td>
    <td class="text-center"><img src="img/customImg/'.$fee['pic'].'" alt="student" style="width="80px !important;height:70px !important;border-radius:7px;"></td>
    <td>'.$fee['name'].'</td>
    <td>'.$fee['gender'].'</td>
    <td>'.$fee['class'].'</td>
    <td>'.$fee['status'].'</td>
    <td>'.$fee['feetype'].'</td>
    <td>'.$fee['amount'].'</td>
    <td>'.$fee['term'].'</td>

    <td>'.$fee['payer'].'</td>
    <td>'.$fee['payer_contact'].'</td>
    
    <td>'.$fee['receiver'].'</td>
    <td>'.$fee['datepaid'].'</td>
    <td>'.$fee['year'].'</td>
</tr>';        
        # code...
    }
}


function Unpaid_Students()
{
      include 'serv/conn.php';



      

      $self= mysqli_query($conn,"SELECT * FROM fees");
     

       $sele  = mysqli_query($conn,"SELECT * FROM students");

       while ($row = mysqli_fetch_array($sele)) {
           $selid= $row['s_id'];




           while ($fc = mysqli_fetch_array($self)) {
            $fcid = $fc['id'];
               

            if ($selid != $fcid     ) {

                echo $row['s_fName'].''.$row['s_lName'] .'<br>';
                 

            }
          
           }
             

       }
       
}

function getexamstud(){

    include 'serv/conn.php';
    $getstu= mysqli_query($conn,"SELECT * FROM students ");

     while ( $results = mysqli_fetch_array($getstu)) {
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
                <a href="exams.php?sid='.$results['s_id'].'">Add Report</a> 
            </td>
        </tr>
    ';
     }
        

           

    
}



function listsubject (){

    include 'serv/conn.php';

    $lists=mysqli_query($conn,"SELECT * FROM subjects");

    while ($sub =mysqli_fetch_array($lists)) {
        
        $subject =$sub['sub_name'];

        echo ' <option value="'.$subject.'">'.$subject.'</option>';
    }

}



function addreport($sid,$name,$subject,$class,$classscore,$examsscore,$overallscore,$position,$grade,$term,$year)

{
    include 'serv/conn.php';
    $popo= mysqli_query($conn,"INSERT INTO exams (s_id,s_name,subjects,class,classscore,examsscore,overallscore,position,grade,term,year) VALUES ('$sid','$name','$subject','$class','$classscore','$examsscore','$overallscore','$position','$grade','$term','$year')");

    if ($popo) {

        echo'<div class="notifyMessage" style="display:block;background-color:green;">
                
                    <h4>Message</h4>
                    <p style="color:white;">Report added successfully
                    </p>
            </div>

            ';
        # code...
    }
    else {
        echo
        
         '<div class="notifyMessage" style="display:block;background-color:red;">
                
                   <h4>Message</h4>
                 <p style="color:white;">  Failed to add report</p>
            </div>

           ';
    }

}


function showallreports(){

    include 'serv/conn.php';
    $showrep =mysqli_query($conn,"SELECT * FROM  exams");

    while ($rept= mysqli_fetch_array($showrep)) {

        $id = $rept['id'];
        $name = $rept['s_name'];
        $subject =$rept['subjects'];
        $class = $rept['class'];
        $classscore = $rept['classscore'];
        $examsscore = $rept['examsscore'];
        $totalscore = $rept['overallscore'];
        $grade = $rept['grade'];
        $position = $rept['position'];
        $term = $rept['term'];
        $year = $rept['year'];

        echo'<tr>
        <td>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">A+</label>
            </div> -->
            '.$id.'

        </td>
        <td>'.$name.'</td>
        <td>'.$subject.'</td>
        <td>'.$class.'</td>

        <td>'.$classscore.'</td>
        <td>'.$examsscore.'</td>

        <td>'.$totalscore.'</td>
        <td>'.$grade.'</td>
        <td>'.$position.'</td>
        <td>'.$term.'</td>
        <td>'.$year.'</td>

        <td><a href="editreport.php?rid='.$id.'">Edit</a></td>
        <td><a href="delrep.php?rid='.$id.'">Delete</a></td>

        
    </tr>';
    
    }

}

function addsubject($subject){
    include 'serv/conn.php';
    $adsub = mysqli_query($conn,"INSERT INTO subjects (sub_name) VALUES ('$subject')");

    if ($adsub) {

        echo'<div class="notifyMessage" style="display:block;background-color:green;">
                
                    <h4>Message</h4>
                    <p style="color:white;">Subject added successfully
                    </p>
            </div>

            ';
        # code...
    }
    else {
        echo
        
         '<div class="notifyMessage" style="display:block;background-color:red;">
                
                   <h4>Message</h4>
                 <p style="color:white;">  Failed to add Subject</p>
            </div>

           ';
    }
}

function allsubject()
{
    include 'serv/conn.php';
    $getsub =  mysqli_query($conn,"SELECT * FROM  subjects");

    while ($sub = mysqli_fetch_array($getsub)) {
        $id = $sub['sub_id'];
        $name= $sub['sub_name'];


        echo '<tr>
        <td>
            <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">'.$id.'</label>
            </div>
        </td>
        <td>'.$name.'</td>
        
        
        <td>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    aria-expanded="false">
                    <span class="flaticon-more-button-of-three-dots"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                   
                    <a class="dropdown-item" href="delsub.php?sub_id='.$id.'"><i
                            class="fa fa-times-circle text-orange-red"></i>Delete</a>
                </div>
            </div>
        </td>
    </tr>';
        # code...
    }
}




function getreporttud(){

    include 'serv/conn.php';
    $getretu= mysqli_query($conn,"SELECT * FROM students ");

     while ( $results = mysqli_fetch_array($getretu)) {
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
                <a href="viewrep.php?sid='.$results['s_id'].'">View Report</a> 
            </td>
        </tr>
    ';
     }
        

           

    
}




function getfeestud(){

    include 'serv/conn.php';
    $getretu= mysqli_query($conn,"SELECT * FROM students ");

     while ( $results = mysqli_fetch_array($getretu)) {
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
                <a href="add-fees.php?fid='.$results['s_id'].'">Add fees</a> 
            </td>
        </tr>
    ';
     }
        

           

    
}


?>