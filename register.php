<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php

session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database

    $connection = mysqli_connect('localhost', 'twa076', 'twa076Wj', 'bnb_booking076'); 
    // Escape user inputs for security
    $firstname= mysqli_real_escape_string($connection, $_POST['firstname']);
    $lastname= mysqli_real_escape_string($connection, $_POST['lastname']);
    $email= mysqli_real_escape_string($connection, $_POST['email']);
    $username= mysqli_real_escape_string($connection, $_POST['username']);
    $pword= hash('sha256', mysqli_real_escape_string($connection, $_POST['pword']));
    $street= mysqli_real_escape_string($connection, $_POST['street']);
    $suburb= mysqli_real_escape_string($connection, $_POST['suburb']);
    $state= mysqli_real_escape_string($connection, $_POST['state']);
    $postcode= mysqli_real_escape_string($connection, $_POST['postcode']);

    $user_type = 'General';

    // Insert the user into the database
    $sql = "INSERT INTO user (firstname,lastname, email,username, pword, street, suburb, state, postcode, user_type) VALUES ('$firstname','$lastname','$email','$username', '$pword',   '$street', '$suburb', '$state', '$postcode', '$user_type')";

    mysqli_query($connection, $sql);

    // Get the user's ID
    $user_id = mysqli_insert_id($connection);

    // Close the connection
    mysqli_close($connection);

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
        <!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->

        <form class="registration" action="" method="post">
            <div class="registration__container">
                <div class="input__box--register">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" maxlength="50" id="firstname" placeholder="First Name">
                </div>

                <div class="input__box--register">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" maxlength="50" id="lastname" placeholder="Last Name">
                </div>
                <div class="input__box--register">
                    <label for="email">Email</label>
                    <input type="email" name="email" maxlength="50" id="email" placeholder="Email">
                </div>
            </div>
            <div class="registration__container">
                
                <div class="input__box--register">
                    <label for="username">Username</label>
                    <input type="text" name="username" maxlength="50" id="username" placeholder="Username">
                </div>

                <div class="input__box--register">
                    <label for="pword">Password</label>
                    <input type="password" name="pword" maxlength="20" id="pword" placeholder="Password">
                </div>


                <div class="input__box--register">
                    <label for="street">Street</label>
                    <input type="street" name="street" maxlength="50" id="street" placeholder="Street">
                </div>
            </div>

          

            <div class="registration__container">
                <div class="input__box--register">
                    <label for="suburb">Suburb</label>
                    <input type="text" name="suburb" maxlength="50" id="suburb" placeholder="Suburb">
                </div>
                <div class="input__box--register">
                    <!-- <label for="state">State</label>
                    <input type="text" name="state" maxlength="50" id="state" placeholder="State"> -->


                    <label for="state">State:</label>
                    <select id="state" name="state" required>
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
                    <label for="postcode">Postcode</label>
                    <input type="text" name="postcode" maxlength="50" id="postcode" placeholder="Postcode">
                </div>
            </div>

            <input class="button" type="submit" value="Register" name="submit">

        </form>
    </section>
</body>

</html>