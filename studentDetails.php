<?php
include "connection.php";
$sql= mysqli_query($conn,"SELECT * FROM studetails");
?>
<div class="data">
<div class="logout" align="right"><a href="view.php"><button>Dash Board</button></a></div>
<center>
    <h1 style="color:aqua">All Student Details</h1>
    <table width="100%">
        <tr bgcolor="pink">
            <th>Sl No.</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile No.</th>
            <th>Parent-Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Marks</th>
            <th>Course</th>
            <th>Language</th>           
            <th>Profile Image</th>
            <th>Action</th>
</tr>
<?php
$sl=0;
while ($sql_fetch=mysqli_fetch_assoc($sql)){?>
<tr bgcolor="white">
    <td bgcolor="#DFFFD8"><?php echo $sl+1; $sl++ ?></td>
    <td><?php echo $sql_fetch['ID'] ?></td>
    <td><?php echo $sql_fetch['name'] ?></td>
    <td><?php echo $sql_fetch['email'] ?></td>
    <td><?php echo $sql_fetch['password'] ?></td>
    <td><?php echo $sql_fetch['mobile'] ?></td>
    <td><?php echo $sql_fetch['pname'] ?></td>
    <td><?php echo $sql_fetch['address'] ?></td>
    <td><?php echo $sql_fetch['gender'] ?></td>
    <td><?php echo $sql_fetch['marks'] ?></td>
   
    <td><?php echo $sql_fetch['course'] ?></td>
    <td><?php echo $sql_fetch['language'] ?></td>
    

    <td><center><?php echo "<image src='".$sql_fetch['image']."'height='120' width='130'"?></center></td> 
    <td bgcolor="#B5F1CC"><a href="adminStudentEdit.php?change=<?php echo $sql_fetch['ID'] ?>">Edit</a>
    <a href="adminDelete.php?delete=<?php echo $sql_fetch['ID'] ?>"> Delete</a></td>
</tr>
<?php }?>
</table>
</center>
</div>



<style>
    body{
    margin: 0;
    padding: 0;
    height: 100%;
	width: 100%;
	background-image: url("./images/login2.jpg");
	background-position: center;
	background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    table{
        border: none;
        text-align: center;
    }
    th{
        padding: 12px;
        margin-bottom: 4px;
        color: purple;
        font-weight: bolder;
        border-bottom: 2px inset purple;
    }
    a{
        text-decoration: none;
        color: navy;
        padding: 2px;
    }

    .data{
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        backdrop-filter: blur(2px);
    }
    button{
        background-image: linear-gradient(to left, #acd8f9, #efa6d9);
        color: navy;
        margin: 4px;
        font-family: Georgia;
        border-radius: 8px;
        font-size: 22px;
        padding: 10px;
    }
    button:hover{
        font-size: 24px;
        background-image: linear-gradient(to left, #72b2e3, #de74be);
    }
</style>
    