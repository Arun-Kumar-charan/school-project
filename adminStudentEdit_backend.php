<?php
include 'connection.php';
$uid=$_POST['uid'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$pname = $_POST['pname'];
$address = $_POST['address'];
$gender= $_POST['gender'];
$marks = $_POST['marks'];
$course=$_POST['course'];
$language= implode(",", $_POST['language']);
$image=$_FILES['image'];
$img =$_FILES['image']['name'];
$imgst=rand(1000,9998).time().'_'.$img;
$imgup='upload/'.$imgst;
$source_path=$_FILES['image']['tmp_name'];

move_uploaded_file($source_path,$imgup);
    $querry = mysqli_query($conn, "UPDATE `studetails` SET `name`='$name',`email`='$email',`password`='$password',`mobile`='$mobile',`pname`='$pname',`address`='$address',`gender`='$gender',`marks`='$marks',`course`='$course',`language`='$language',`image`='$imgup' WHERE ID='$uid'");   
    if($querry)
    {
        header('location:studentDetails.php');
    }
    else{
        echo "Data Not Update !!";
    }
    ?>