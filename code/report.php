<?php
    include('dbcon.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Report Crime</title>
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<h1 align="center"><strong><u>Report Crime</u></strong></h1>
    <form action="report.php" method="post" enctype="multipart/form-data">
        <table align="center" style="float:right" border="8" style="width:70%;">
            <tr>
                <th>Criminal ID</th><td><input type="number" name="cid" style="color:blue" required></td>
            </tr>
            <tr>
                <th>Crime</th><td><input type="text" name="crime" required></td>
            </tr>
            <tr>
                <th>Reporter</th><td><input type="text" name="reporter" required></td>
            </tr>
            <tr>
                <th>Date</th><td><input type="date" name="date" style="color:blue" required></td>
            </tr>
            <tr>
                <th>Contact Number</th><td><input type="text" name="contact"></td>
            </tr>
            <p> </p>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Report" style="height: 60px; width: 200px; left: 200; right: 200; top: 250;"><p> </p><input type="reset" style="height: 60px; width: 200px; left: 200; right: 200; top: 250;"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $cid = $_POST['cid'];
        $crime = $_POST['crime'];
        $reporter = $_POST['reporter'];
        $date = $_POST['date'];
        $contact = $_POST['contact'];
        
        $qry = "INSERT INTO `crime`(`crimeid`, `criminalid`, `crime`, `reporter`, `date`, `contact`) VALUES (NULL,$cid,'$crime','$reporter','$date','$contact')";

        $run = mysqli_query($con,$qry);

        if($run == true)
        {
            ?>
            <script>
                alert('Crime reported successfully !');
            </script>
            <?php
        }
    }
?>