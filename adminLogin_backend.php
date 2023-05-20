<?php
include 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
if ($sql){
    if($row=mysqli_fetch_array($sql))
    {
        session_start();
        $_SESSION['ID']=$row['ID'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        $_SESSION['mobile']=$row['mobile']; 
        $_SESSION['image']=$row['image'];
        header("location:view.php");
    }
    else{
        echo "<script>
        window.alert('email and password incorrect');
        window.location.href='admin.php';
        </script>";
    }
}
?>