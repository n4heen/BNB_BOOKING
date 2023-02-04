<?php
$connection = new mysqli('localhost', 'john.smith@example.com', 'password1', 'bnb_booking999'); if($connection->connect_error) {
// Echo out if it failed to connect to the database
echo $connection->connect_error; }

?>