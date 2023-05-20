<?php

include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$subject=$_POST['subject'];

$Image=$_FILES['Image']['name'];
$new_image=rand(1000,9998).'_'.time().'_'.$Image;
$upload_path='upload/'.$new_image;
$source_path=$_FILES['Image']['tmp_name'];
if(move_uploaded_file($source_path,$upload_path)){
    $query=mysqli_query($conn,"INSERT INTO `teacher`(`ID`, `name`, `email`, `mobile`,

     `address`,`gender`,`subject`,`Image`) VALUES
      ('','$name','$email','$mobile','$address','$gender','$subject','$upload_path')");  


    if($query){
        echo 'Data Inserted Success';
        header('location:entrySuccess.php');


    }
    else{
        echo 'data not inserted in database';
    }
 }

?>

<!-- action php -->