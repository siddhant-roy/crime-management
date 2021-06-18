<?php

session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location: ../login.php');
}
include('../dbcon.php');

$cid = $_GET['cid'];

$sql = "SELECT * FROM `criminal` WHERE `criminalid`='$cid'";
$run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <title>Edit criminal</title>
</head>
<body align-"center">
<h1 align="center"><strong><u>Edit criminal</u></strong></h1>
    <form action="updatedata.php" method="post" enctype="multipart/form-data">
        <table align="center" border="8" style="width:70%;">
            <tr>
                <th>Name</th><td><input type="text" name="cname" value=<?php echo $data['name']; ?> required></td>
            </tr>
            <tr>
                <th>City</th><td><input type="text" name="ccity" value=<?php echo $data['city']; ?> required></td>
            </tr>
            <tr>
                <th>Crime</th><td><input type="text" name="ccrime" value=<?php echo $data['crime']; ?> required></td>
            </tr>
            <tr>
                <th>Image</th><td><input type="file" name="cimage" required ></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="hidden" name="cid" value=<?php echo $data['criminalid']; ?>  />  
                <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>