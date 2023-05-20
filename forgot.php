<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="forgot.css">
</head>

<body>
    <section id="header">
        <form method="post" class="mform" action="forgot_backend.php" enctype="multipart/form-data" name="myform">

            <center>
                <div class="studetails">
                    <h1>Admin</h1><br><br>
                    <form>
                        <label for="name">Name:</label>
                        <input type="text" name="name">
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email">
                        <br> <label for="password">Password:</label>
                        <input type="password" name="password">
                        <br>

                        <label for="mobile">Mobile:</label>
                        <input type="number" name="mobile">
                        <br>
                       
                        <br>
                        <label for="image">Image:</label>
                        <input class="img" type="file" name="image"> <br> <br>
                        <button>Submit</button>
                    </form>
                </div>
            </center>
        </form>
    </section>
</body>

</html>