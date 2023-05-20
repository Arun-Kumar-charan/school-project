<?php

include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=($_POST['password']);
$mobile=$_POST['mobile'];
$image=$_FILES['image']['name'];
$new_image=rand(1000,9998).'_'.time().'_'.$image;
$upload_path='upload/'.$new_image;
$source_path=$_FILES['image']['tmp_name'];
if(move_uploaded_file($source_path,$upload_path)){
    $query=mysqli_query($conn,"INSERT INTO `admin`(`ID`, `name`, `email`, `password`,
     `mobile`,`image`) VALUES
      ('','$name','$email','$password','$mobile','$upload_path')");  


    if($query){
        header('location:admin.php');

    }
    else{
        echo 'user email and password incorrect';
    }
}
?>

<!-- action php -->