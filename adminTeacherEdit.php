<?php
include "connection.php";
$uid=$_REQUEST['change'];
$sql=mysqli_query($conn,"SELECT * FROM teacher WHERE ID='$uid'");
$sql_fetch=mysqli_fetch_assoc($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="teacherEntry.css">
</head>

<body>
    <section id="header">
        <form method="post" class="mform" action="adminTeacherEdit_backend.php" enctype="multipart/form-data" name="myform">

            <center>
                <div class="studetails">
                    <h1>Teacher's Details</h1><br><br>
                    <form>
                    <label for="name"><b>Name:</b></label>
                    <input type="text" name="name" placeholder="Enter Name"value="<?php echo $sql_fetch['name'] ?>">
                    <input type="hidden" name="ID" value="<?php echo $uid ?>" hidden ><br>

        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email"value="<?php echo $sql_fetch['email'];?>">
                        <br> <br>

                        <label for="mobile">Mobile:</label>
                        <input type="number" name="mobile"value="<?php echo $sql_fetch['mobile'];?>">
                        <br>
                        <label for="address">Address:</label>
                        <input type="text" name="address"value="<?php echo $sql_fetch['address'];?>"><br>
                        <label for="gender"><b>Gender:</b></label>
                        <input type="radio" name="gender" value="Male" checked="checked">Male
                        <input type="radio" name="gender" value="Female">Female<br><br>
                        <br>
                        <label for="course">Subject:</label>
                        <select name="subject" id="">
                            <option value="">SELECT</option>
                            <option value="English">English</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Math">Math</option>
                            <option value="Computer">Computer</option>
                            <option value="Biology">Biology</option>
                            <option value="Law">Law</option>
                        </select>
                        <br>
                        <label for="image">Image:</label>
                        <input class="img" type="file" name="Image"> <br> <br>
                        <button>Submit</button>
                    </form>
                </div>
            </center>
        </form>
    </section>
</body>

</html>