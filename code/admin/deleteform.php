<?php

    include('../dbcon.php');

    $id=$_REQUEST['cid'];
    
    $qry = "DELETE FROM `criminal` WHERE `criminalid`='$id';";

    $run = mysqli_query($con,$qry);

    if($run == true)
    {
        ?>
        <script>
            alert('Data deleted successfully !');
            window.open('deletecriminal.php?','_self');
        </script>
        <?php
    }
?>