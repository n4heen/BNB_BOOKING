<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php

// session_start();

// // Check if the form has been submitted
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Connect to the database

//     $connection = new mysqli('localhost', 'twa076', 'twa076Wj', 'bnb_booking076'); ); 
//     // Escape user inputs for security
//     $user_fname= mysqli_real_escape_string($connection, $_POST['user_fname']);
//     $user_lname= mysqli_real_escape_string($connection, $_POST['user_lname']);
//     $user_email= mysqli_real_escape_string($connection, $_POST['user_email']);
//     $username= mysqli_real_escape_string($connection, $_POST['username']);
//     $user_password= hash('sha256', mysqli_real_escape_string($connection, $_POST['user_password']));
//     $user_street= mysqli_real_escape_string($connection, $_POST['user_street']);
//     $user_suburb= mysqli_real_escape_string($connection, $_POST['user_suburb']);
//     $user_state= mysqli_real_escape_string($connection, $_POST['user_state']);
//     $user_postcode= mysqli_real_escape_string($connection, $_POST['user_postcode']);

//     $user_type = 'General';

//     // Insert the user into the database
//     $sql = "INSERT INTO user (user_fname,user_lname, user_email,username, user_password, user_street, user_suburb, user_state, user_postcode, user_type) VALUES ('$user_fname','$user_lname','$user_email','$username', '$user_password',   '$user_street', '$user_suburb', '$user_state', '$user_postcode', '$user_type')";

//     mysqli_query($connection, $sql);

//     // Get the user's ID
//     $user_id = mysqli_insert_id($connection);

//     // Close the connection
//     mysqli_close($connection);

//     // Store the user's ID in a session
//     $_SESSION['user_id'] = $user_id;

//     // Redirect the user to the home page
//     header("Location: index.php");
//     exit();
// }



session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
    $conn = mysqli_connect('localhost', 'twa076', 'twa076Wj', 'bnb_booking076'); 

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
    $sql = "INSERT INTO user (user_fname,user_lname, user_email, user_password, user_street, user_suburb, user_state, user_postcode, user_type) VALUES ('$user_email', '$user_password', '$user_fname', '$user_lname', '$user_street', '$user_suburb', '$user_state', '$user_postcode', '$user_type')";
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>B&B REGISTER</title>
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
        </nav>
    </header>
    <section id="registration">
        <h1 class="orange">Registration</h1>


        <form class="registration" action="register.php" method="post">
            <div class="registration__container">
                <div class="input__box--register">
                    <label for="user_fname">First Name</label>
                    <input type="text" name="user_fname" maxlength="50" id="user_fname" placeholder="First Name">
                </div>

                <div class="input__box--register">
                    <label for="user_lname">Last Name</label>
                    <input type="text" name="user_lname" maxlength="50" id="user_lname" placeholder="Last Name">
                </div>
                <div class="input__box--register">
                    <label for="user_email">Email</label>
                    <input type="email" name="user_email" maxlength="50" id="user_email" placeholder="Email">
                </div>
            </div>
            <div class="registration__container">
                
                

                <div class="input__box--register">
                    <label for="user_password">Password</label>
                    <input type="password" name="user_password" maxlength="20" id="user_password" placeholder="Password">
                </div>


                <div class="input__box--register">
                    <label for="user_street">Street</label>
                    <input type="text" name="user_street" maxlength="50" id="user_street" placeholder="Street">
                </div>
            </div>

          

            <div class="registration__container">
                <div class="input__box--register">
                    <label for="user_suburb">Suburb</label>
                    <input type="text" name="user_suburb" maxlength="50" id="user_suburb" placeholder="Suburb">
                </div>
                <div class="input__box--register">
                    <!-- <label for="state">State</label>
                    <input type="text" name="state" maxlength="50" id="state" placeholder="State"> -->


                    <label for="user_state">State:</label>
                    <select id="user_state" name="user_state" required>
                      <option value="">State</option>
                      <option value="ACT">ACT</option>
                      <option value="NSW">NSW</option>
                      <option value="NT">NT</option>
                      <option value="QLD">QLD</option>
                      <option value="SA">SA</option>
                      <option value="TAS">TAS</option>
                      <option value="VIC">VIC</option>
                      <option value="WA">WA</option>
                    </select>
                </div>

                <div class="input__box--register">
                    <label for="user_postcode">Postcode</label>
                    <input type="text" name="user_postcode" maxlength="50" id="user_postcode" placeholder="Postcode">
                </div>
            </div>

            <input class="button" type="submit" value="Register" name="submit">

        </form>
    </section>
</body>

</html>