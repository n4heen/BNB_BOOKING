<!-- 20408031 Naheen Habib Tuesday 12pm -->
<?php
/**
 * Allows one to view all tables and their data in a database
 */

$connection = new mysqli('localhost', 'twa076', 'twa076Wj', 'bnb_booking076');
if($connection->connect_error) {
// Echo out if it failed to connect to the database
echo $connection->connect_error; }



$sql = "SHOW TABLES";
$tables = $connection->query($sql);

$tablesAndTheirData = array();
while($tableName = $tables->fetch_array()) {
$sql = "SELECT * FROM $tableName[0]";
$data = mysqli_query($connection, $sql);
    array_push($tablesAndTheirData, array(
        'name' => $tableName[0],
        'fields' => $data->fetch_fields(),
        'data' => $data
    ));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Database Tables</title>
<style type="text/css">
td, th {
border: 1px solid gray;
padding:3px;
}
table {
border-spacing:0;
}
th {
background-color:aliceblue;
}

</style>
</head>
<body>
<!-- The ':' in php gives an alternative way for introducing control structures.
For details, please see http://php.net/manual/en/control-structures.alternative-syntax.php
-->
<?php foreach($tablesAndTheirData as $table): ?>
<p><strong><code><?php echo $table['name'];?></code> Table</strong>
<?php if($table['data']->num_rows):?>
<table>
<thead>
<tr style="font-weight:bold">
<?php foreach($table['fields'] as $field): ?>

<th><?php echo $field->name;?></th>

<?php endforeach; ?>
</tr>
</thead>
<tbody>
<?php while($row = $table['data']->fetch_assoc()): ?>
<tr>
<?php foreach($row as $key => $value):?>
<td><?php echo $value; ?>
</td>
<?php endforeach; ?>
</tr>
<?php endwhile;?>
</tbody>
</table>
<?php else:?>
<p>Table does not have any data</p>
<?php endif;?>
<?php endforeach;
mysqli_close($connection);
?>
</body>
</html>