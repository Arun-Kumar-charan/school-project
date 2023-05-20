<?php
include 'connection.php';
$del_id=$_REQUEST['delete'];
$del_sql=mysqli_query($conn,"DELETE FROM studetails where id='$del_id'");
if($del_sql){
    header('location:studentDetails.php');
}
else{
    echo 'failed';
}

?>
