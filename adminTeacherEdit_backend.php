<?php

include 'connection.php';
$uid =$_POST['ID'];
$name=$_POST['name'];
$email=$_POST['email'];

$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$subject=$_POST['subject'];

$Image=$_FILES['Image']['name'];
$new_image=rand(1000,9998).'_'.time().'_'.$image;
$upload_path='upload/'.$new_image;
$source_path=$_FILES['Image']['tmp_name'];
if(move_uploaded_file($source_path,$upload_path)){
    $user_update=mysqli_query($conn,"UPDATE `teacher` SET `name`='$name',`email`='$email',
    `mobile`='$mobile',`address`='$address',`gender`='$gender',
    `subject`='$subject',`Image`='$upload_path' WHERE ID = '$uid'") or die (mysqli_error($conn));  
if($user_update){
    header('location:adminTeacherDetails.php');

}
else{
    echo 'records not found';
    header('location:view.php');
}

}
?>