
<?php



if (isset($_GET['dollar'])) {
    include 'core.php';

    

        if ($_GET['dollar']=="adfee") {




            $name=$_POST['name'];
            $sid=$_POST['sid'];
            $pic=$_POST['s_photo'];
            $feetype=$_POST['feetype'];
            $amount = $_POST['amount'];
            $payer=$_POST['payer'];
            $payer_contact=$_POST['payer_contact'];
            $status=$_POST['status'];
            $receiver=$_POST['receiver'];
            $datepaid= $_POST['datepaid'];
            $gender= $_POST['gender'];
            $class = $_POST['class'];
            $term = $_POST ['term'];
            $year = $_POST['year'];
            

            if (empty($amount)) {

                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                            <h4>Message</h4>
                            <p style="color:white;">Enter amount</p>
                    </div>

                    ';
            }
            elseif (empty($payer)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter Payer\'s name</p>
                </div>

                ';
            }
            elseif (empty($status)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select payment status</p>
                </div>

                ';
            }
            elseif (empty($receiver)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter recipient name</p>
                </div>

                ';        # code...
            }


            elseif (empty($gender)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select gender</p>
                </div>

                ';        # code...
            }


            elseif (empty($class)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select class</p>
                </div>

                ';        # code...
            }

            elseif (empty($term)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select academic term</p>
                </div>

                ';        # code...
            }
            elseif (empty($year)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select academic year</p>
                </div>

                ';        # code...
            }
        
            else {

            echo addfees($sid,$pic,$name,$gender,$class,$term,$feetype,$status,$amount,$receiver,$payer,$payer_contact,$datepaid,$year); 
            }

            # code...
        }





        if ($_GET['dollar']=="adreport") {




            $name=$_POST['name'];
            $sid=$_POST['sid'];
            $subject=$_POST['subject'];
            $class=$_POST['class'];
            $classscore = $_POST['classscore'];
            $examsscore=$_POST['examsscore'];
            $overallscore=$_POST['overallscore'];
            $position=$_POST['position'];
            $grade=$_POST['grade'];
            $term= $_POST['term'];
            $year= $_POST['year'];
            

            if (empty($subject)) {

                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                            <h4>Message</h4>
                            <p style="color:white;">Select subject</p>
                    </div>

                    ';
            }
            elseif (empty($classscore)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter class score</p>
                </div>

                ';
            }
            elseif (empty($examsscore)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter exams score</p>
                </div>

                ';
            }
            elseif (empty($overallscore)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter overall score</p>
                </div>

                ';        # code...
            }


            elseif (empty($position)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter position</p>
                </div>

                ';        # code...
            }


            elseif (empty($grade)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Enter grade</p>
                </div>

                ';        # code...
            }

            elseif (empty($term)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select academic term</p>
                </div>

                ';        # code...
            }
            elseif (empty($year)) {
                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                <h4>Message</h4>
                <p style="color:white;">Select academic year</p>
                </div>

                ';        # code...
            }
        
            else {

            echo addreport($sid,$name,$subject,$class,$classscore,$examsscore,$overallscore,$position,$grade,$term,$year); 
            }

            # code...
        }




        if ($_GET['dollar']=="adsubjee") {




            $subject=$_POST['subject'];
           
            

            if (empty($subject)) {

                echo'<div class="notifyMessage" style="display:block;background-color:red;">
                        
                            <h4>Message</h4>
                            <p style="color:white;">Enter subject</p>
                    </div>

                    ';
            }
           
        
            else {

            echo addsubject($subject); 
            }

            # code...
        }

}

?>





























