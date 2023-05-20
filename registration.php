<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="registrationn.css">
</head>

<body>
    <section class="header" id="registrationpage">
        <nav>
            <a href="home.php"><img src="images/scl4.png"></a>
            <div class="nav-links">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="course.php">COURSES</a></li>
                    <li><a href="gallery.php">GALLARY/LATEST EVENTS</a></li>
                    <li><a href="login.php">LOG IN</a>
                        <div class="dropdown" style="background-image: linear-gradient(rgba(4,9,30,0.6),rgba(4,9,30,0.6));">
                            <ul>
                                <li><a href="login.php">Student LogIn</a></li>
                                <li><a href="admin.php">Admin LogIn</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    
    <!-------Registration Page------>
    <!-- <marquee><b>Please Fill The Registration Form</b></marquee> -->
    <div class="registration">
    <form method="post" class="mform" enctype="multipart/form-data" action="registration_bknd.php" name="myform">
        <table class="table" align="center">
            <tr>
                <td class="th" colspan="2" style="color: aqua;"><center><b>User Registration</b></center></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Phone No:</td>
                <td><input type="number" name="mobile" required></td>
            </tr>
            <tr>
                <td>Parent's Name</td>
                <td><input type="text" name="pname" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input class="gender" type="radio" value="male" name="gender">Male
                <input type="radio" value="female" name="gender">Female</td>
            </tr>
            <!-- <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" required></td>
            </tr> -->
            <tr>
                <td>Marks:</td>
                <td><input type="text" name="marks" required></td>
            </tr>
            <tr>
                <td>Course:</td>
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
                <td> Languages:</td>
                <td><input class="gender" type="checkbox" name="language[]" value="English">English
                <input class="gender" type="checkbox" name="language[]" value="Bengali">Bengali
                <input class="gender" type="checkbox" name="language[]" value="Hindi">Hindi
            </td>
            </tr>
            <tr>
                <td>Profile Img:</td>
                <td><input class="pimg" type="file" name="image"></td>
            </tr>
            <tr>
            <td class="btn1" colspan="2"><center><input id="sbutton" type="submit" name="submit" value="Submit"></center></td>
            </tr>
            <!-- <tr>
            <td class="btn1" colspan="2"><center><input id="rbutton" type="reset" name="reset" value="Reset"></center></td>
            </tr> -->
        </table>
    </form>
    <div class="register">
        <p style="color: white;">Get back to <a href="login.php"><span>Log In page</span></a></p>
    </div>
    </div>
</section>

     <!------ Footer ------> 
     <section class="footer">
        <p>Our School page is available in Online Sites also</p>
        <div class="icons">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made By  <i class="fa fa-heart-o"></i> Students</p>
    </section>
    
</body>
</html>