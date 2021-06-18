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
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Update criminal</title>
    <h1 align="center"><strong><u>Update criminal</u></strong></h1>
</head>
<body style="background-color:#98aad6;">
<form action="updatecriminal.php" method="post" enctype="multipart/form-data">
        <table align="center" border="2" width:"80%" style="margin-top:10px">
            <tr>
                <th>Name</th><td><input type="text" name="cname"></td>
            </tr>
            <h3 align="center"> Fill any one box</h3>
            <tr>
                <th>City</th><td><input type="text" name="ccity"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>
            </tr>
        </table>

        <table align="center" width="80%" border="l" style="margin-top:10px">
            <tr style="background-color=#000; color=#fff;">
                <th>Number</th>
                <th>Image</th>
                <th>Name</th>
                <th>Crime</th>
                <th>City</th>
            </tr>

            <?php
                if(isset($_POST['submit']))
                {
                    include('../dbcon.php');

                    $ccity=$_POST['ccity'];
                    $cname=$_POST['cname'];
                        
                        
                    $sql="SELECT * FROM `criminal` WHERE `city`='$ccity' OR `name` LIKE '%$cname%'";
                    $run=mysqli_query($con,$sql);
                    if (mysqli_num_rows($run) < 1)
                    {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                    else
                    {
                        $count=0;
                        while($data=mysqli_fetch_assoc($run))
                        {
                            $count++;
                            ?>
                            <tr align = "center">
                                <td><?php echo $count; ?></td>
                                <td><img src = "../dataimg/<?php echo $data['image']; ?>" style="max-width:100px"></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['crime']; ?></td>
                                <td><?php echo $data['city']; ?></td>
                                <td><a href="updateform.php?cid=<?php echo $data['criminalid']?>">Edit</a></td>
                            </tr>

                            <?php
                        }
                    }
                }
            ?>

    </form>
</body>
</html>