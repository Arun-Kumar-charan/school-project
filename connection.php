<?php
$conn=mysqli_connect('localhost','root','','data_store') OR die(mysqli_error());
if($conn){
    echo 'database Connected !';

}
else{
    echo 'error Establishing a Database Connection';
}
?>