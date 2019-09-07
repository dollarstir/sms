<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Report Card</title>
    <link rel="stylesheet" href="report.css">
</head>
<body>


<?php
include 'serv/conn.php';
$id = $_GET['sid'];
$name= $_GET['name'];
$year =$_GET['year'];
$term = $_GET['term'];

$getrep =mysqli_query($conn,"SELECT * FROM exams WHERE s_id = '$id' AND  s_name= '$name' AND term= '$term' AND year = '$year' ");
$row=mysqli_fetch($getrep);


?>
    <div class="mainbox">
        <img id="ll" src="logo.jpg" alt="" srcset="">
        <img id="ll2" src="logo.jpg" alt="" srcset="">

           <div class="title">KINGSQUEENS PREP.SCH <br>
                                <span id="sp">FIRST TERM</span>
           </div>
           <div class="det1">
              <b>CLASS:....................................... NO ON ROLL:..................................DATE:...........................................<br><br>
               YEAR:.................................. NEXT TEARM BEGINS ON:......................................</b> 
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
               <td>ENGLISH LANGUAGE</td>
               <td>50%</td>
               <td>50%</td>
               <td>50%</td>
               <td>50%</td>
               <td>50%</td>
               <td>verry week </td>
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
</html>