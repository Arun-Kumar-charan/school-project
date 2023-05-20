<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <section class="header" id="galleryhead">
        <nav>
            <a href="home.php"><img src="images/scl4.png"></a>
            <div class="nav-links" id="navLinks">
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
        </nav>
    </section>

    <!--Gallery-->
    <section id="gallery-box">
        <h1>Our Gallery</h1>
        <p>Here are some beautiful pictures of our gallery</p>
        <div class="gallary-container">

            <div class="gallery w-1 h-1">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/auditorium.jpg" alt="auditorium">
                    </div>
                    <div class="text" style="color: white;">Auditorium</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                     <div class="image">
                    <img src="images/classroom.jpg" alt="Classroom">
                    </div>
                    <div class="text">Classroom</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/achivements.jpg" alt="achivements">
                    </div>
                    <div class="text">Achivements</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/uniform.jpg" alt="uniform">
                    </div>
                    <div class="text" style="color: white;">School Uniform</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/campus1.jpg" alt="campus">
                    </div>
                    <div class="text" style="color: rgb(18, 24, 91);">Campus</div>
                </div>
            </div>

            <div class="gallery w-2 h-2">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/computerClass.jpg" alt="computerClass">
                    </div>
                    <div class="text" style="color: white;">Computer Class</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/function.jpg" alt="function">
                    </div>
                    <div class="text" style="color: rgb(23, 120, 43);">Annual Function</div>
                </div>
            </div>
            
            <div class="gallery w-4 h-4">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/music.jpg" alt="misic">
                    </div>
                    <div class="text" style="color: white;">Music Class</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/functions.jpg" alt="functions">
                    </div>
                    <div class="text">Function</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/music1.jpg" alt="auditorium">
                    </div>
                    <div class="text" style="color: white;">Music class</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/computer-lab.webp" alt="computer-lab">
                    </div>
                    <div class="text" style="color: white;">Computer Lab</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/sports.jpg" alt="sports">
                    </div>
                    <div class="text" style="color: white;">Sports</div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/yoga.jpg" alt="yoga">
                    </div>
                    <div class="text" style="color: white;">Yoga Class</div>
                </div>
            </div>

            <div class="gallery w-3 h-3">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/swimmingpool.png" alt="swimmingpool">
                    </div>
                    <div class="text" style="color: rgb(12, 12, 48);">Swimming pool</div>
                </div>
            </div>

            
            <div class="gallery w-5 h-5">
                <div class="gallery-item">
                    <div class="image">
                    <img src="images/cafe.jpeg" alt="swimmingpool">
                    </div>
                    <div class="text" style="color: rgb(12, 12, 48);">Cafeteria</div>
                </div>
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