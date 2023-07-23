<?php
include('Connection.php');
$name1 = $_COOKIE['namecookie'];
$TripsQuery = "SELECT Serial_No,car_type,price FROM car_bookings where name='$name1'";
$getTrips = $con->query($TripsQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Already booked trips</title>
</head>

<body>
<nav class="navbar navbar-expand-lg " style="background-color: wheat;">
  <div class="container-fluid">
    <a class="navbar-brand" href="start.html">AC_TRAVELS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="book.html">Book Trip</a>
        </li>
      </ul>
      <span class="navbar-text">
              <a class="btn btn-primary" href="index.html">logout</a>
            </span>
</nav>
 
    <h3 class="mt-5 mb-3 ml-3">Already Booked Trips</h3>
    <table class="table table-dark table-striped-columns">
    <thead>
        <tr>
            <th scope="col">booking_number</th>
            <th scope="col">car_type</th>
            <th scope="col">price</th>
            <th scope="col">operation</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $getTrips->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Serial_No"] . "</td>";
            echo "<td>" . $row["car_type"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td><a href='delete.php?a=$row[Serial_No]'> Delete </td>";
            echo "</tr>";
        }
        
        ?>
    </tbody>
</table>
</body>
</html>