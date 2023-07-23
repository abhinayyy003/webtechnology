<?php
include('Connection.php');

if (isset($_POST['suv'])){
    
    $name= $_COOKIE['namecookie'];
    $km_given_user=$_POST['km'];
    $km = (int)$km_given_user;
    $suv_value=14;
    $suv_total = $suv_value*$km;
    $suv_total_1 = $suv_total."₹";
    $car_type_suv= "suv";
    $query="INSERT INTO `car_bookings`(`name`, `car_type`, `price`) VALUES ('$name','$car_type_suv','$suv_total_1')";
   if(mysqli_query($con,$query)){
    echo "<script>alert('your car have been booked successfully')</script>";
    header("Location:start.html");

    }
}

if (isset($_POST['sedan'])){

    $name_sedan= $_COOKIE['namecookie'];
    $km_given_user_sedan=$_POST['km'];
    $km_sedan = (int)$km_given_user_sedan;
    $sedan_value=14;
    $sedan_total = $sedan_value*$km_sedan;
    $sedan_total_1 = $sedan_total."₹";
    $car_type_sedan= "sedan";
    $query="INSERT INTO `car_bookings`(`name`, `car_type`, `price`) VALUES ('$name_sedan','$car_type_sedan','$sedan_total_1')";
   if(mysqli_query($con,$query)){
    echo "<script>alert('your car have been booked successfully')</script>";
    header("Location:start.html");
    }
}
?>

