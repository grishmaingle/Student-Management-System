<?php
    $con = mysqli_connect('localhost','root','','smsg');

    if($con == false)
    {
        echo "Connection is not done";
    }
    else
    {
        echo "Connection ok";
    }
?>