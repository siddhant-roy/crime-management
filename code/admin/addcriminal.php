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
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <title>Add criminal</title>
</head>
<body>
<h1 align="center"><strong>Add criminal</strong></h1>
    <form action="addcriminal.php" method="post" enctype="multipart/form-data">
        <table align="center" border="8" style="width:30%;">
            <tr>
                <th>Name</th><td><input type="text" name="cname" required></td>
            </tr>
            <tr>
                <th>City</th><td><input type="text" name="ccity" required></td>
            </tr>
            <tr>
                <th>Crime</th><td><input type="text" name="ccrime" required></td>
            </tr>
            <tr>
                <th>Image</th><td><input type="file" name="cimage"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        $cname = $_POST['cname'];
        $ccity = $_POST['ccity'];
        $ccrime = $_POST['ccrime'];
        $imagename = $_FILES['cimage']['name'];
        $tempname = $_FILES['cimage']['tmp_name'];

        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        $qry = "INSERT INTO `criminal`(`criminalid`, `name`, `crime`, `city`, `image`) VALUES (NULL,'$cname','$ccrime','$ccity','$imagename')";

        $run = mysqli_query($con,$qry);

        if($run == true)
        {
            ?>
            <script>
                alert('Data inserted successfully !');
            </script>
            <?php
        }
    }
?>