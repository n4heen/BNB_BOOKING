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
<a href="checkout.html">Checkout</a>
<a href="profile.php">My Profile</a>
<a href="register.php">Register</a>
<a href="login.php">Login</a>
<a href="logoff.php">Logout</a>
</nav>
    </header>
    <section id="properties">
       <h1 class='orange'>Properties Available</h1>
       <table>
<?php
  // Connect to the database
  require_once'dbconn.php';
  
$result = mysqli_query($connection, "SELECT property_name, property_beds, property_street, property_suburb, property_state, property_postcode, property_pernight, property_image FROM property");



if (mysqli_num_rows($result) > 0) {
 
 while($row = mysqli_fetch_assoc($result)) {
  echo "<div class='propertiesAvailable'>";
  echo "<img src='" . $row["property_image"] . "'>";
  echo "<h4>" . $row["property_name"] . "</h4>";
  echo "<h4>" . $row["property_beds"] ." "."bedrooms". "</h4>";
  echo "<h4>" . $row["property_street"] . " " . $row["property_suburb"] . " " . $row["property_state"] . " " . $row["property_postcode"] . "</h4>";
  echo "<h4>" . "$" . $row["property_pernight"] . "</h4>";

  echo "</div>";
  echo " <button class='button'>". "<a class='orange__link' href='checkout.html'>". "Checkout"."</a>"."</button>";
 }
} 
 else{

 echo "<h1>No Properties Available</h1>";

}

// Close the database connection
mysqli_close($connection);
?> 

      
    </section>
</body>

</html>