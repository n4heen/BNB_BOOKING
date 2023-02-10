<?php
session_start();

// Destroy all data associated with the current session
session_destroy();

// Redirect the user to the home page
header('Location: index.php');
exit;
?>

