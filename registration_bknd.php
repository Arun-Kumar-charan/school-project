<?php

include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = ($_POST['password']);
$mobile = $_POST['mobile'];
$pname = $_POST['pname'];
$address = $_POST['address'];
$gender = $_POST['gender'];
// $dob = $_POST['dob'];
$marks = $_POST['marks'];
$course = $_POST['course'];
$language = implode(",", $_POST['language']);



$image = $_FILES['image']['name'];
$new_image = rand(1000, 9998) . '_' . time() . '_' . $image;
$upload_path = 'upload/' . $new_image;
$source_path = $_FILES['image']['tmp_name'];
if (move_uploaded_file($source_path, $upload_path)) {
    $query = mysqli_query($conn, "INSERT INTO `studetails`(`ID`, `name`, `email`, `password`, `mobile`, 
    `pname`, `address`, `gender`, `marks`, `course`, `language`, `image`) VALUES
     ('','$name','$email','$password','$mobile','$pname','$address','$gender','$marks','$course','$language','$upload_path')");


    if ($query) {
        header('location:login.php');

    } else {
        echo 'records not found';
    }
}
?>

<!-- action php -->