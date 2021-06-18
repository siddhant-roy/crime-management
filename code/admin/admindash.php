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
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="tiles" align="center">
        <h1><u>Welcome to Admin Dashboard</u></h1>
    </div>

    <div class="dashboard">
        <table border="2" style="width:50%;" align="center">
            <tr>
                <td>1.</td><td><a href="addcriminal.php">Insert criminal details</a></td>
            </tr>
            <tr>
                <td>2.</td><td><a href="updatecriminal.php">Update criminal details</a></td>
            </tr>
            <tr>
                <td>3.</td><td><a href="deletecriminal.php">Delete criminal details</a></td>
            </tr>


    </div>
