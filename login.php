<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php
  session_start(); 
 
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    header('Location: index.html'); 
  }
 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $user_email = $_POST['user_email'];
    $user_password = hash('sha256', $_POST['user_password']); 
   
  
    $conn = mysqli_connect("localhost", "twa076", "twa076Wj", "bnb_booking076");
    $query = "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'";
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result) == 1) {
   
      $_SESSION['logged_in'] = true;
      $_SESSION['user_email'] = $user_email;
      header('Location: index.html');
    } else {
      echo '<p>Email or password is incorrect. Please try again.</p>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>B&B login</title>
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
  <section id="login">
   
    <h1 class="orange">Login To Your Account</h1>
    <form action="" method="post">

      <div class="input__box">
        <label for="user_email">Email</label>
        <input type="email" name="user_email" id="user_email"
          onblur="emailValidate(this,document.getElementById('emailError'));" placeholder="Email">
        <span style="color:#ff8c00;" id="emailError"></span>
      </div>


      <div class="input__box">
        <label for="user_password">Password</label>
        <input type="password" name="user_password" id="user_password"
          onblur="passwordValidate(this,document.getElementById('loginPwordError'));" placeholder="Password">
        <span style="color:#ff8c00;" id="loginPwordError"></span>
      </div>
      <input class="button" type="submit" value="Login" name="submit">

    </form>
  </section>
</body>

</html>
