<?php
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql=mysqli_query($conn,"SELECT * FROM `studetails` WHERE `email`='$email' AND `password`='$password'");
if ($sql){
    if($row=mysqli_fetch_array($sql))
    {
        session_start();
        $_SESSION['ID']=$row['ID'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['pname'] = $row['pname'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['marks'] = $row['marks'];
        $_SESSION['course'] = $row['course'];
        $_SESSION['language']= $row['language'];
        $_SESSION['image']= $row['image'];
        header("location:stuview.php");
    }
    else{
        echo "<script>
        window.alert('Data Not Found!!');
        window.location.href='login.php';
        </script>";
    }
}
?>