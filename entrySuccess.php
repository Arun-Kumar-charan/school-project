<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Data Entry</title>
    <style>
        body{
            background-image: url(images/success.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
            backdrop-filter: blur(3px);
        }
        h3{
            text-align: center;
            color: aqua;
            font-weight: bolder;
            font-size: 35px;
            margin: 80px;;
        }
        h4{
            text-align: center;
            color: Bisque;
            font-weight: bolder;
            font-size: 30px;
            margin: 30px;
        }
        button{
        width: 20%;
        height: 40px;
        border-radius: 40px;
        box-shadow: 4px 4px 2px 2px rgba(236, 103, 219, 0.4);
        color: white;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
        transition: 0.3s;
        background-image: linear-gradient(to left, #81bdeb, #37b1b9, #dc74bd);
       }
        button:hover{
        background-image: linear-gradient(rgba(96, 111, 173, 0.8),rgba(201, 132, 215, 0.8));
        box-shadow: 4px 4px 2px 0 rgba(231, 243, 123, 0.4);
        font-size: 20px;
        }
    </style>
</head>

<body>
<br>
<marquee style="color: Bisque; font-size: 26px; background: transparent; padding:10px;">Your Data has been inserted Successfully</marquee>
<br><br><br><br><br>
<h3>Get Back To Admin Details Page, Click The Below <span style="color: purple;">Button --></span></h3><br><br>
<div class="btn" align="center"><a href="view.php"><button>Admin Details</button></a></div><br>
<h4>Thank You</h4>
</body>
</html>