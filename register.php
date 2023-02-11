<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php

session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database

    $connection = new mysqli('localhost', 'twa076', 'twa076Wj', 'bnb_booking076'); ); 
    // Escape user inputs for security
    $user_fname= mysqli_real_escape_string($connection, $_POST['user_fname']);
    $user_lname= mysqli_real_escape_string($connection, $_POST['user_lname']);
    $user_email= mysqli_real_escape_string($connection, $_POST['user_email']);
    $username= mysqli_real_escape_string($connection, $_POST['username']);
    $user_password= hash('sha256', mysqli_real_escape_string($connection, $_POST['user_password']));
    $user_street= mysqli_real_escape_string($connection, $_POST['user_street']);
    $user_suburb= mysqli_real_escape_string($connection, $_POST['user_suburb']);
    $user_state= mysqli_real_escape_string($connection, $_POST['user_state']);
    $user_postcode= mysqli_real_escape_string($connection, $_POST['user_postcode']);

    $user_type = 'General';

    // Insert the user into the database
    $sql = "INSERT INTO user (user_fname,user_lname, user_email,username, user_password, user_street, user_suburb, user_state, user_postcode, user_type) VALUES ('$user_fname','$user_lname','$user_email','$username', '$user_password',   '$user_street', '$user_suburb', '$user_state', '$user_postcode', '$user_type')";

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
    <script src="/actions.js"></script>
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
    <section id="registration">
        <h1 class="orange">Registration</h1>


        <form class="registration" action="register.php" method="post">
            <div class="registration__container">
                <div class="input__box--register">

                    <label for="user_fname">First Name</label>
                    <input type="text" name="user_fname" id=" user_fname" placeholder="First Name"
                        onblur="registrationNameValidate(this,document.getElementById('firstNameError'));">
                    <span style="color:#ff8c00;" id="firstNameError"></span>

                </div>

                <div class="input__box--register">
                    <label for="user_lname">Last Name</label>
                    <input type="text" name="user_lname" id=" user_lname" placeholder="Last Name"
                        onblur="registrationNameValidate(this,document.getElementById('lastNameError'));">
                    <span style="color:#ff8c00;" id="lastNameError"></span>

                </div>

                <div class="input__box--register">
                    <label for="user_email">Email</label>
                    <input type="email" name="user_email" id="user_email"
                        onblur="emailValidate(this,document.getElementById('emailError'));" placeholder="Email">
                    <span style="color:#ff8c00;" id="emailError"></span>
                </div>
                <div class="input__box--register">
                    <label for="user_password">Password</label>
                    <input type="password" name="user_password" id="user_password"
                        onblur="passwordValidate(this,document.getElementById('registerPwordError'));" placeholder="Password">
                    <span style="color:#ff8c00;" id="registerPwordError"></span>
                </div>
            </div>




            <div class="registration__container">
                <div class="input__box--register">
                    <label for="user_street">Street</label>

                    <input type="text" name="user_street" id=" user_street" placeholder="Street"
                        onblur="fillOutRequired(this,document.getElementById('streetError'));">
                    <span style="color:#ff8c00;" id="streetError"></span>
                </div>
                <div class="input__box--register">
                    <label for="user_suburb">Suburb</label>

                    <input type="text" name="user_suburb" id=" user_suburb" placeholder="Suburb"
                        onblur="fillOutRequired(this,document.getElementById('suburbError'));">
                    <span style="color:#ff8c00;" id="suburbError"></span>
                </div>


                <div class="input__box--register">
                    <label for="state">State</label>
                    <input type="text" name="state" id="state"
                        onblur="stateValidate(this,document.getElementById('stateError'));" placeholder="State">
                    <span style="color:#ff8c00;" id="stateError"></span>


                </div>

                <div class="input__box--register">
                    <label for="user_postcode">Postcode</label>
                    <input type="text" name="user_postcode" maxlength="4" id="user_postcode"
                        onblur="postcodeValidate(this,document.getElementById('postcodeError'));" placeholder="Postcode">
                    <span style="color:#ff8c00;" id="postcodeError"></span>
                </div>
            </div>

            <input class="button" type="submit" value="Register" name="submit">

        </form>
    </section>
</body>

</html>