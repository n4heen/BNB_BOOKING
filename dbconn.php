<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php
$connection = new mysqli('localhost', 'twa076', 'twa076Wj', 'bnb_booking076'); 
if($connection->connect_error) {
// Echo out if it failed to connect to the database
echo $connection->connect_error; }

?>