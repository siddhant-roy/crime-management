<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Admin Login</title>
</head>
<body>
    <h1 align="center"><strong>Admin Login</strong></h1>
    <form action="login.php" method="post">
        <table align="center">
            <tr>
                <td>Username</td><td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if ($row<1)
    {
        ?>
        <script>
            alert('Username and Password does not match !!');
            window.open('login.php','_self')
        </script>
        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);

        $id = $data['id'];
        
        session_start();

        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');


    }
}

?>
