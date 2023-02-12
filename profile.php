<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>B&B Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>

            <a href="index.html">Home</a>
            <a href="properties.php">Properties</a>
            <a href="bookings.php">Bookings</a>
            <a href="profile.php">My Profile</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="logoff.php">Logout</a>
        </nav>
    </header>
  <table>
    <?php
  // Connect to the database
  require_once'dbconn.php';
  
$sql = "SELECT user_email, user_fname, user_lname, user_street, user_suburb, user_state, user_postcode FROM user";
$result = mysqli_query($connection, $sql);
// If there are any properties in the table
if (mysqli_num_rows($result) > 0) {
 // Loop through the result and display the properties
 while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row["user_email"] . "</td>";
  echo "<td>" . $row["user_fname"] . " " . $row["user_lname"] ."</td>";
  echo "<td>" . $row["user_street"] . " " . $row["user_suburb"] . " " . $row["user_state"] . " " . $row["user_postcode"] . "</td>";
  echo "</tr>";
 }
} 
 else{

 echo "<h1>User Information Not Available</h1>";

}

// Close the database connection
mysqli_close($connection);
?> 

</table>
</body>

</html>
