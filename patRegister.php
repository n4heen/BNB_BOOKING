<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php

session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
    $conn = mysqli_connect("localhost", "twa091", "twa091CT", "bnb_booking091");

    // Escape user inputs for security
    $user_email= mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password= hash('sha256', mysqli_real_escape_string($conn, $_POST['user_password']));
    $user_fname= mysqli_real_escape_string($conn, $_POST['user_fname']);
    $user_lname= mysqli_real_escape_string($conn, $_POST['user_lname']);
    $user_street= mysqli_real_escape_string($conn, $_POST['user_street']);
    $user_suburb= mysqli_real_escape_string($conn, $_POST['user_suburb']);
    $user_state= mysqli_real_escape_string($conn, $_POST['user_state']);
    $user_postcode= mysqli_real_escape_string($conn, $_POST['user_postcode']);
    $user_type = 'General';

    // Insert the user into the database
    $sql = "INSERT INTO user (user_email, user_password, user_fname, user_lname, user_street, user_suburb, user_state, user_postcode, user_type) VALUES ('$user_email', '$user_password', '$user_fname', '$user_lname', '$user_street', '$user_suburb', '$user_state', '$user_postcode', '$user_type')";
    mysqli_query($conn, $sql);

    // Get the user's ID
    $user_id = mysqli_insert_id($conn);

    // Close the connection
    mysqli_close($conn);

    // Store the user's ID in a session
    $_SESSION['user_id'] = $user_id;

    // Redirect the user to the home page
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="../project/css/basestyles.css" type="text/css">
 <title>Registration Page</title>
</head>
<body>

 <h1>Register a New Account</h1>
 <form action="register.php" method="post">
 
  <h3>Personal Details</h3>
 
  <label for="user_email">Email:</label>
  <input type="email" id="user_email" name="user_email" required>
 
  <label for="user_password">Password:</label>
  <input type="password" id="user_password" name="user_password" required>
 
  <label for="user_fname">First Name:</label>
  <input type="text" id="user_fname" name="user_fname" required>
 
  <label for="user_lname">Last Name:</label>
  <input type="text" id="user_lname" name="user_lname" required>
 
  <h3>Address Details</h3>
 
  <label for="user_street">Street:</label>
  <input type="text" id="user_street" name="user_street" required>
 
  <label for="user_suburb">Suburb:</label>
  <input type="text" id="user_suburb" name="user_suburb" required>
 
<label for="user_state">State:</label>
<select id="user_state" name="user_state" required>
  <option value="">Select</option>
  <option value="ACT">ACT</option>
  <option value="NSW">NSW</option>
  <option value="NT">NT</option>
  <option value="QLD">QLD</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
  <option value="VIC">VIC</option>
  <option value="WA">WA</option>
</select>
 
  <br></br>
  <label for="user_postcode">Postcode:</label>
  <input type="text" id="user_postcode" name="user_postcode" required>
 
  <input type="hidden" name="user_type" value="General">
 
  <input type="submit" value="Submit">
 </form>
</body>
</html>