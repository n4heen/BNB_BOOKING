<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>B&B Properties</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
    <nav>

<a href="index.html">Home</a>
<a href="properties.php">Properties</a>
<a href="bookings.php">Bookings</a>
<a href="profile.php">My Profile</a>
<a href="register.html">Register</a>
<a href="login.html">Login</a>
<a href="logoff.php">Logout</a>
</nav>
    </header>
    <section id="properties">
       <h1 class='orange'>Properties Available</h1>
       <table>
<?php
  // Connect to the database
  require_once'dbconn.php';
  
$sql = "SELECT property_name, property_beds, property_street, property_suburb, property_state, property_postcode, property_pernight, property_image FROM property";
$result = mysqli_query($connection, $sql);
// If there are any properties in the table
if (mysqli_num_rows($result) > 0) {
 // Loop through the result and display the properties
 while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td><img src='" . $row["property_image"] . "'></td>";
  echo "<td>" . $row["property_name"] . "</td>";
  echo "<td>" . $row["property_beds"] ." "."bedrooms". "</td>";
  echo "<td>" . $row["property_street"] . " " . $row["property_suburb"] . " " . $row["property_state"] . " " . $row["property_postcode"] . "</td>";
  echo "<td>" . "$" . $row["property_pernight"] . "</td>";

  echo "</tr>";
 }
} 
 {

 echo "<h1>No Properties Available</h1>";

}
// Close the database connection
mysqli_close($connection);
?> 

       </table>
    </section>
</body>

</html>