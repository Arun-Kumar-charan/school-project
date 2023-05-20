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
        <form method="post" class="mform" action="teacherEntry_backend.php" enctype="multipart/form-data" name="myform">

            <center>
                <div class="studetails">
                    <h1>Teacher's Details</h1><br><br>
                    <form>
                        <label for="name">Name:</label>
                        <input type="text" name="name">
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email">
                        <br> <br>

                        <label for="mobile">Mobile:</label>
                        <input type="number" name="mobile">
                        <br>
                        <label for="address">Address:</label>
                        <input type="text" name="address"><br>
                        <label for="gender"><b>Gender:</b></label>
                        <input type="radio" name="gender" value="male" checked="checked">Male
                        <input type="radio" name="gender" value="female">Female<br><br>




                        <br>
                        <label for="course">Subject:</label>
                        <select name="subject" id="">
                            <option value="">SELECT</option>
                            <option value="Database">English</option>
                            <option value="Database">Physics</option>
                            <option value="Database">Chemistry</option>
                            <option value="Math">Math</option>
                            <option value="Database">Computer</option>
                            <option value="IT">Biology</option>
                            <option value="GNM">Law</option>
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