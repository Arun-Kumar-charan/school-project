<?php
include 'connection.php';

$uid = $_REQUEST['ep'];
$sql = mysqli_query($conn, "SELECT * FROM `studetails` WHERE ID='$uid'");
$sql_fetch = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit Profile</title>
    <link rel="stylesheet" href="stuedit_details.css">
</head>
<body> <br><br>
<marquee direction="Right"><b>Edit Your Details Here</b></marquee>
<br><br><br>
    <center>
    <form method="post" action="stuedit_bknd.php" enctype="multipart/form-data">
        <table border="5" bordercolor="aduamine" align="center">
            <tr>
                <td>Enter your Name:</td>
                <td><input type="text" name="name" value="<?php echo $sql_fetch['name'];?>"><input type="hidden" name="uid" value="<?php echo $uid?>"hidden></td>
                
            </tr>

            <tr>
                <td>Enter Your Email:</td>
            <td><input type="email" name="email" value="<?php echo $sql_fetch['email'];?>"></td>
            </tr>
            
            <tr>
            <td>Enter Your Password: </td>
            <td><input type="password" name="password" value="<?php echo $sql_fetch['password'];?>"></td>
            </tr>

            <tr>
            <td>Enter Your Phone No: </td>
            <td><input type="number" name="mobile" value="<?php echo $sql_fetch['mobile'];?>"></td>
            </tr>

            <tr>
            <td>Enter Your Parent's Name: </td>
            <td><input type="text" name="pname" value="<?php echo $sql_fetch['pname'];?>"></td>
            </tr>

            <tr>
            <td>Enter Your Address: </td>
            <td><input type="text" name="address" value="<?php echo $sql_fetch['address'];?>"></td>
            </tr>

            <tr>
            <td>Enter Gender: </td>
            <td><input class="gender" type="radio" value="male" name="gender">Male
                <input type="radio" value="female" name="gender">Female</td>
            </tr>

            <tr>
            <td>Enter Your Marks: </td>
            <td><input type="number" name="marks" value="<?php echo $sql_fetch['marks'];?>"></td>
            </tr>

            <tr>
            <td>Enter Your Course: </td>
            <td><select name="course" class="select">
                    <option>SELECT</option>
                    <option>Science</option>
                    <option>Arts</option>
                    <option>Commers</option>
                    <option>Law</option>
                    <option>Computer</option>
                </select>
                </td>
            </tr>

            <tr>
            <td>Enter Your Language: </td>
            
                <td><input class="gender" type="checkbox" name="language[]" value="English">English
                <input class="gender" type="checkbox" name="language[]" value="Bengali">Bengali
                <input class="gender" type="checkbox" name="language[]" value="Hindi">Hindi
            </td>
            </tr>
            <tr>
            <td>Chose Image:</td>
            <td><?php echo "<img src ='".$sql_fetch['image']."'height='120' width='120'";?>"><input class="imgg" type="file" name="image" required></td>
            <!-- <td class="img"><input class="imgg" type="file" name="image"></td> -->
            </tr>
        </table>
        <br><br>
        <center><input class="button" type="submit" name="submit"></center>
    </form>
    </center>

    
</body>
</html>