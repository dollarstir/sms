<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Report Card</title>

    <link rel="stylesheet" href="report.css">

    <script src="js/jquery.js"></script>
    <script src="ajax.js"></script>
    
</head>
<body>


<?php
include 'serv/conn.php';
$id = $_GET['sid'];
$name= $_GET['name'];
$year =$_GET['year'];
$term = $_GET['term'];

$getrep =mysqli_query($conn,"SELECT * FROM exams WHERE s_id = '$id' AND  s_name= '$name' AND term= '$term' AND year = '$year' ");
$row=mysqli_fetch_array($getrep);

$getstud = mysqli_query($conn, "SELECT * FROM students WHERE s_id = '$id'");
$getstudent = mysqli_fetch_array($getstud);

$getclass = mysqli_query($conn, "SELECT * FROM class WHERE c_id = {$getstudent['s_class']}");
$getclassName = mysqli_fetch_array($getclass);

$getrollsql = mysqli_query($conn, "SELECT * FROM students WHERE s_class = {$getstudent['s_class']}");
$rollNum = mysqli_num_rows($getrollsql);
?>
<div style="z-index: 1000;position: fixed;border-radius: 10px;padding: 20px; background: lightgreen;" class="print">PRINT</div>
    <div id="mainbox" class="mainbox">
        <img id="ll" src="img/logo.jpg" alt="" srcset="">
        <img id="ll2" src="img/logo.jpg" alt="" srcset="">

           <div class="title">KINGSQUEENS PREP.SCH <br>
                                <span id="sp">FIRST TERM</span>
           </div>
           <div class="det1">
              <b>
                NAME: <?php echo $getstudent['s_fName'].' '.$getstudent['s_lName']?> <br>
                CLASS: <?php echo $getclassName['c_name']?> <br> 
                NO ON ROLL: <?php echo $rollNum?> <br>
                DATE:........................................... <br> 
                YEAR:.................................. <br>
                NEXT TEARM BEGINS ON:......................................
               </b> 
           </div>
           <table>
               <tr>
                   <th>SUBJECT </th>
                   <th>CLASS SCORE 50% </th>
                   <th>EXAM SCORE 100% </th>
                   <th>TOTAL SCORE 100% </th>
                   <th>GRADE </th>
                   <th>POSITION</th>
                   <th>REMARKS (SPECIFY AREA OF STRENGHTS AND WEAKNESS)</th>
               </tr>
               <tr>
               <?php 
                    $examsql = mysqli_query($conn, "SELECT * FROM exams WHERE s_id = $id");
                    while($results = mysqli_fetch_array($examsql)) {
                        echo "
                            <tr>
                                <td>{$results['subjects']}</td>
                                <td>{$results['classscore']}</td>
                                <td>{$results['examsscore']}</td>
                                <td>{$results['overallscore']}</td>
                                <td>{$results['grade']}</td>
                                <td>{$results['position']}</td>
                                <td>{$results['remark']}</td>
                            </tr>
 
                        ";
                    } 
               ?>
               </tr>
               
               
           </table>

           <div class="info2">
                    
                    ATTENDANCE MADE:.............................. OUT OF:........................... PROMOTED TO:................................<br>
                    CONDUCT:..................................................... ATTITUDE:................................................................... <br>
                    .............................. INTEREST:.................................................................................................
                    CLASS TEACHERS REMARKS:................................................................................................................
                    .........................SIGNATURE:......................................................DATE:...................................................................<br>
                    .............................HEAD MISTRESS/HEAD MASTER RENARKS:............................................................<br>
                    ........................SIGNATURE:............................................................DATE:.....................................................<br>
                    PARENTS SIGNATURE:.....................................................................DATE:................................................................................

             </div>
    </div>

</body>

<script>

</script>
</html>