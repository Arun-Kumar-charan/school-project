<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="loginn.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <section class="header" id="loginpage">
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

<!------------LogIn page-------------->
        <div class="form-box">
            <div class="form-value">
                <form  action="login_backend.php" method="post" enctype="multipart/form-data">
                    <h1>Log In</h1>
                    <div class="inputbox">
                        <label for="">Email</label><br><br>
                        <input type="email" name="email" required>
                        <ion-icon name="mail-outline"></ion-icon>
                    </div><br>
                    <div class="inputbox">
                        <label for="">Password</label><br><br>
                        <input type="password" name="password" required>
                        <ion-icon name="lock-closed-outline"></ion-icon>                        
                    </div><br><br>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <br> <br> <a href="">Forget Password</a></label>
                    </div>
                    <button>Log In</button>
                    <div class="register">
                        <p style="color: white;">Don't have a account? <a href="registration.php"><span>Register Here</span></a></p>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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