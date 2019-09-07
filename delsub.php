<?php 

include 'serv/conn.php';
$id= $_GET['sub_id'];

$del= mysqli_query($conn,"DELETE FROM subjects WHERE sub_id= '$id' ");

if ($del) {

    echo'
    <script>window.location="all-subject.php"</script>

        ';
    # code...
}
else {
    echo
    
     '<div class="notifyMessage" style="display:block;background-color:red;">
            
               <h4>Message</h4>
             <p style="color:white;">  Failed to delete Subject</p>
        </div>

       ';
}

?>