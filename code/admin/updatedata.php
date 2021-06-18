<?php

    include('../dbcon.php');
    $cname = $_POST['cname'];
    $ccity = $_POST['ccity'];
    $ccrime = $_POST['ccrime'];
    $id = $_POST['cid'];
    $imagename = $_FILES['cimage']['name'];
    $tempname = $_FILES['cimage']['tmp_name'];

    move_uploaded_file($tempname,"../dataimg/$imagename");

    $qry = "UPDATE `criminal` SET `name`='$cname',`crime`='$ccrime',`city`='$ccity',`image`='$imagename' WHERE `criminalid` = $id;";

    $run = mysqli_query($con,$qry);

    if($run == true)
    {
        ?>
        <script>
            alert('Data updated successfully !');
            window.open('updateform.php?cid=<?php echo $id; ?>','_self');
        </script>
        <?php
    }


?>