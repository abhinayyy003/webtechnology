<?php
include('Connection.php');
error_reporting(0);
$no=$_GET['a'];
$que="DELETE FROM car_bookings WHERE Serial_No='$no'";
$data=mysqli_query($con,$que);
if($data){
    echo"<font color = 'green'> Deleted";
}
else{
    echo"<font color = 'red'>Failed To Delete";
}
?>