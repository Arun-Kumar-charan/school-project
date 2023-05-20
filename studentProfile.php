<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="studentProfile.css">
</head>

<body>
<marquee style="color:NavajoWhite" direction="Right">Please check your details carefully</marquee>
<div align="right"><a  class="sign" href = "login.php">Log Out</a></div>
    <table align="center" border="3" bgcolor="transparent">
        <h1 align="center">Wellcome <?php echo $_SESSION['name'];?></h1><br>
        <center><?php echo "<img  src='" . $_SESSION['image'] . "'height='180' width='180'" ?></center><br> <br>
        <tr>
            <td bgcolor="Aqua">Id No:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['ID'];?></td>
        </tr>
        <!-- <tr>
            <td bgcolor="Aqua">Image:</td>
            <td><?php echo "<img src= '". $_SESSION['image']."'height='120' width='120'"?></td>
        </tr> -->
        <tr>
            <td bgcolor="Aqua">Name:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['name'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Email:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['email'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Password:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['password'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Mobile:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['mobile'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Parent's Name:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['pname'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Address</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['address'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Gender:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['gender'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Marks:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['marks'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Course:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['course'];?></td>
        </tr>
        <tr>
            <td bgcolor="Aqua">Language:</td>
            <td bgcolor="LightPink"><?php echo $_SESSION['language'];?></td>
        </tr>
        <tr>
            <td class="trh"><b>Edit profile: </b><a class="ah" style="color: white;" href="stuedit_details.php?ep= <?php echo $_SESSION['ID']?>"><b>Click Here</b></a></td>

        </tr>
    </table>
    
</body>
</html>