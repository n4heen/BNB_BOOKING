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
<a href="checkout.html">Checkout</a>
<a href="profile.php">My Profile</a>
<a href="register.php">Register</a>
<a href="login.php">Login</a>
<a href="logoff.php">Logout</a>
</nav>
    </header>
    <section>
    <?php
  // Connect to the database
  $connection = mysqli_connect("localhost", "twa076", "twa076Wj", "bnb_booking076");

  $user_email = $_SESSION['user_email'];

$result = mysqli_query($connection, "SELECT * FROM user WHERE user_email = '$user_email'");

// If there are any properties in the table
if(mysqli_num_rows($result)==1) {
    $user=mysqli_fetch_assoc($result);

  echo "<h1>" . $user["user_email"] . "</h1>";
  echo "<h2>" . $user["user_fname"] . " " . $user["user_lname"] ."</h2>";
  echo "<h4>" . $user["user_street"] . " " . $user["user_suburb"] . " " . $user["user_state"] . " " . $user["user_postcode"] . "</h4>";
 }

 else{

    echo "<h1>". "Welcome to". "<span class='orange'>". "B&B Booking". "</span>"."</h1>";

}

// Close the database connection
mysqli_close($connection);
?> 
</section>
</body>

</html>
