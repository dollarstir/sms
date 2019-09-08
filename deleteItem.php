<?php
include 'serv/conn.php';
extract($_GET);

if($item == 'students') {
    $var = 's_id';
    $var2 = 'all-student.php';

} else if($item == 'teachers') {
    $var = 't_id';
    $var2 = 'all-teacher.php';

} else if ($item == 'parents') {
    $var = 'p_id';
    $var2 = 'all-parents.php';

} else if ($item == 'class') {
    $var = 'c_id';
    $var2 = 'all-class.php';

} else if ($item == 'expenses') {
    $var = 'exp_id';
    $var2 = 'all-expense.php';

} else {

}

$sql = "DELETE FROM $item WHERE $var = $target";

if(mysqli_query($conn, $sql)) {
    echo "<script>window.location = '{$var2}';</script>";
} else {
    echo "Deletion was unsuccessfull";
}