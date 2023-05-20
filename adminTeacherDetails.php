<?php
include "connection.php";
$sql= mysqli_query($conn,"SELECT * FROM teacher");
?>
<div class="data">
<div class="logout" align="right"><a href="view.php"><button>Dash Board</button></a></div>
<center>
    <h1 style="color:navy">All Teacher's Details</h1>
    <table class="table" width="100%">
        <tr bgcolor="DarkMagenta">
            <th>Sl No.</th>
            <th>User Id</th>
            <th>Profile Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Subject</th>           
            <th>Action</th>
</tr>
<?php
$sl=0;
while ($sql_fetch=mysqli_fetch_assoc($sql)){?>
<tr>
    <td style="color:navy; font-weight:bold;"><?php echo $sl+1; $sl++ ?></td>
    <td><?php echo $sql_fetch['ID'] ?></td>
    <td><center><?php echo "<image src='".$sql_fetch['Image']."'height='100' width='100'"?></center></td> 
    <td><?php echo $sql_fetch['name'] ?></td>
    <td><?php echo $sql_fetch['email'] ?></td>  
    <td><?php echo $sql_fetch['mobile'] ?></td>
    <td><?php echo $sql_fetch['address'] ?></td>
    <td><?php echo $sql_fetch['gender'] ?></td>
    <td><?php echo $sql_fetch['subject'] ?></td>
    <td><a href="adminTeacherEdit.php?change=<?php echo $sql_fetch['ID'] ?>">Edit</a>
    <a href="adminTeacherDelete.php?delete=<?php echo $sql_fetch['ID'] ?>"> Delete</a></td>
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
	background-image: url("./images/coursee1.jpg");
	background-position: center;
	background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    table{
        border: none;
        text-align: center;
        background: transparent;
        padding: 8px;
        background-image: linear-gradient(rgba(96, 111, 173, 0.2),rgba(201, 132, 215, 0.3));
        color: black;
        backdrop-filter: blur(10px);
        box-shadow: 4px 4px 4px 0 rgba(0, 0, 0, 0.4);
        /* bgcolor="#E8F9FD" */
    }
    th{
        padding: 12px;
        margin-bottom: 4px;
        color: white;
        font-weight: bolder;
        border-bottom: 2px inset purple;
    }
    td{
        padding: 8px;
    }
    /* .logout {
    margin-right: 2rem;
    } */

    button{
        background-image: linear-gradient(to left, #acd8f9, #efa6d9);
        color: navy;
        margin: 4px;
        font-family: Georgia;
        border-radius: 8px;
        font-size: 22px;
        padding: 10px;
    }
    .img{
        border-radius: 50%;
    }
    button:hover{
        font-size: 24px;
    }
    a{
        text-decoration: none;
        color: purple;
        padding: 2px;
        font-weight: bold;
    }
    img{
        border-radius: 50%;
    }
    /* .table{
    margin-bottom:4rem ;
    } */
</style>
    