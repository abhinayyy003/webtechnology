<?php
    $con=mysqli_connect("localhost","root","","ac_travels");
    if(mysqli_connect_error())
    {
        echo"cannot connect to database";
    }
?>