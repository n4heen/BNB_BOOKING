<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $connection = mysqli_connect("localhost", "twa076", "twa076Wj", "bnb_booking076");

 
    $email= mysqli_real_escape_string($connection, $_POST['user_email']);
    $password= hash('sha256', mysqli_real_escape_string($connection, $_POST['user_password']));
    $fname= mysqli_real_escape_string($connection, $_POST['user_fname']);
    $lname= mysqli_real_escape_string($connection, $_POST['user_lname']);
    $street= mysqli_real_escape_string($connection, $_POST['user_street']);
    $suburb= mysqli_real_escape_string($connection, $_POST['user_suburb']);
    $state= mysqli_real_escape_string($connection, $_POST['user_state']);
    $postcode= mysqli_real_escape_string($connection, $_POST['user_postcode']);
    $type = 'General';
   
    $sql = "INSERT INTO user (user_email, user_password, user_fname, user_lname, user_street, user_suburb, user_state, user_postcode, user_type) VALUES ('$email',
     '$password', '$fname', '$lname', '$street', '$suburb', '$state', '$postcode','$type')";
    mysqli_query($connection, $sql);


    $id = mysqli_insert_id($connection);

    $_SESSION['user_id'] = $id;

    mysqli_close($connection);
    
    header("Location: index.html");
    exit();
}





 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>B&B REGISTER</title>
    <link rel="stylesheet" href="styles.css">
    <script src="actions.js"></script>
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
                    <label for="user_state">State</label>
                    <input type="text" name="user_state" id="user_state"
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